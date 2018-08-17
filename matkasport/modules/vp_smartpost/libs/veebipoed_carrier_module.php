<?php

Abstract class VeebipoedCarrierModule extends CarrierModule
{
    const LIST_TYPE_SHORT = 0;
    const LIST_TYPE_LONG = 1;

    const POS_EXTRACARRIER = 0;
    const POS_INSIDE_HOOK = 1;
    const POS_INSIDE_JS = 2;

    static $jsIsIncluded = false;

    public $is_veebipoed_carrier_module = true;

    const MODULES_COUNT = 'veebipoed_modules_count';

    abstract public function hasSizes();

    abstract public function getMaxWeight();

    abstract public function getMaxWidth();

    abstract public function getMaxHeight();

    abstract public function getMaxDepth();

    abstract public function getTabClassName();

    abstract public function getFreeShippingBoxName();

    abstract public function getGroupNames();

    abstract public function createSizes();

    abstract public function getTerminals();

    abstract public function importTerminals();

    abstract public function getSizes($include_deleted, $id_group, $order_total);

    public function getCityField()
    {
        return false;
    }

    public function install()
    {
        
        $sql = include dirname($this->getFileName()).'/sql_install.php';

        foreach ($sql['install'] as $query) {
            if (!Db::getInstance()->execute(sprintf(
                $query,
                _DB_PREFIX_,
                $this->name,
                _MYSQL_ENGINE_
            ))) {
                return false;
            }
        }

        foreach ($sql['alter'] as $key => $query) {
            if (!$this->isTableAltered($key)) {
                if (!Db::getInstance()->execute(sprintf($query, _DB_PREFIX_, $this->name))) {
                    return false;
                }
            }
        }

        foreach ($sql['drop'] as $key => $query) {
            if ($this->isTableAltered($key)) {
                if (!Db::getInstance()->execute(sprintf($query, _DB_PREFIX_, $this->name))) {
                    return false;
                }
            }
        }

        $this->importTerminals();

        if (!$this->hasSizes()) {
            $this->createSizes();
        }

        if (!parent::install() OR
            !$this->installCarrier() OR
            !$this->createTab() OR
            //!$this->registerHook('displayBeforeCarrier') OR
            !$this->registerHook('actionValidateOrder') OR
            !$this->registerHook('validateCarriers') OR
            !$this->registerHook('actionPaymentConfirmation') OR
            !$this->registerHook('modifyName') OR
            !$this->registerHook('displayHeader') OR
            !$this->registerHook('adminOrder') OR
            !$this->registerHook('displayCarrierExtraContent') OR
            !$this->registerHook('displayAdmin'.$this->name.'Options') OR
            !$this->createVariables()
        ) {
            return false;
        }

        $this->switchHookPositions();
        return true;
    }

    public function uninstall()
    {
        Db::getInstance()->execute('UPDATE '._DB_PREFIX_.'carrier SET deleted = 1 WHERE '.sprintf('`external_module_name` = \'%s\'', $this->name));

        $moduleTabs = Tab::getCollectionFromModule($this->name);
        foreach ($moduleTabs as $tab) {
            $tab->delete();
        }

        $this->removeModule();

        if (!parent::uninstall() OR
//            (!$this->unregisterHook('insideCarrier') AND
//                !$this->unregisterHook('displayBeforeCarrier')) OR
            !$this->unregisterHook('actionValidateOrder') OR
            !$this->unregisterHook('modifyName') OR
            !$this->unregisterHook('validateCarriers') OR
            !$this->unregisterHook('actionPaymentConfirmation') OR
            // !$this->unregisterHook('modifyName') OR
            !$this->unregisterHook('displayHeader') OR
            !$this->unregisterHook('adminOrder') OR
            !$this->unregisterHook('displayCarrierExtraContent') OR
            !$this->registerHook('displayAdmin'.$this->name.'Options')
        ) {
            return false;
        }

        return true;
    }

    public function getDefaultCity()
    {
        $query = new DbQuery();
        $query->select('group_id');
        $query->from($this->name);
        $query->where('`active` = 1');
        $query->limit(1);

        $result = Db::getInstance()->executeS($query);

        if (is_array($result) && count($result) == 1)
        {
            return $result[0]['group_id'];
        }

        return false;
    }

    public function createVariables()
    {
        if(Configuration::updateValue($this->prefixed('position'), 0) === false ||
            Configuration::updateValue($this->prefixed('list_type'), 0) === false ||
            Configuration::updateValue($this->prefixed('show_address'), 0) === false
        ) {
            return false;
        }
        return true;
    }

public function installOverrides()
{
    // Get local path for module
    if (!is_dir($this->getLocalPath().'override'))
        return true;
 
    $result = true;
    foreach (Tools::scandir($this->getLocalPath().'override', 'php', '', true) as $file)
    {
        $class = basename($file, '.php');
        // Add all methods in a module override to the override class
        if (Autoload::getInstance()->getClassPath($class.'Core'))
            $result &= $this->addOverride($class); 
    }
 
    return $result;
}

public function addOverride($classname)
{
    $path = Autoload::getInstance()->getClassPath($classname.'Core');
 
    // Check if there is already an override file, if not, we just need to copy the file
    if (!($classpath = Autoload::getInstance()->getClassPath($classname)))
    {
        $override_src = $this->getLocalPath().'override'.DIRECTORY_SEPARATOR.$path;
        $override_dest = _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'override'.DIRECTORY_SEPARATOR.$path;
        if (!is_writable(dirname($override_dest)))
            throw new Exception(sprintf(Tools::displayError('directory (%s) not writable'), dirname($override_dest)));
        copy($override_src, $override_dest);
        return true;
    }
 
    // Check if override file is writable
    $override_path = _PS_ROOT_DIR_.'/'.Autoload::getInstance()->getClassPath($classname);
    if (!is_writable($override_path))
        throw new Exception(sprintf(Tools::displayError('file (%s) not writable'), $override_path));
 
    // Make a reflection of the override class and the module override class
    $override_file = file($override_path);
    eval(preg_replace(array('#^\s*<\?php#', '#class\s+'.$classname.'\s+extends\s+([a-z0-9_]+)(\s+implements\s+([a-z0-9_]+))?#i'), array('', 'class '.$classname.'OverrideOriginal'), implode('', $override_file)));
    $override_class = new ReflectionClass($classname.'OverrideOriginal');
 
    $module_file = file($this->getLocalPath().'override'.DIRECTORY_SEPARATOR.$path);
    eval(preg_replace(array('#^\s*<\?php#', '#class\s+'.$classname.'(\s+extends\s+([a-z0-9_]+)(\s+implements\s+([a-z0-9_]+))?)?#i'), array('', 'class '.$classname.'Override'), implode('', $module_file)));
    $module_class = new ReflectionClass($classname.'Override');
 
    // Check if none of the methods already exists in the override class
    foreach ($module_class->getMethods() as $method)
        if ($override_class->hasMethod($method->getName()))
            throw new Exception(sprintf(Tools::displayError('The method %1$s in the class %2$s is already overriden.'), $method->getName(), $classname));
 
    // Check if none of the properties already exists in the override class
    foreach ($module_class->getProperties() as $property)
        if ($override_class->hasProperty($property->getName()))
            throw new Exception(sprintf(Tools::displayError('The property %1$s in the class %2$s is already defined.'), $property->getName(), $classname));
 
    // Insert the methods from module override in override
    $copy_from = array_slice($module_file, $module_class->getStartLine() + 1, $module_class->getEndLine() - $module_class->getStartLine() - 2);
    array_splice($override_file, $override_class->getEndLine() - 1, 0, $copy_from);
    $code = implode('', $override_file);
    file_put_contents($override_path, $code);
 
    return true;
}

    public function switchHookPositions()
    {
        $this_module = Hook::getModulesFromHook(Hook::getIdByName('actionValidateOrder'), $this->id);

        $sql = 'UPDATE `%shook_module` SET `position`=`position`+1 WHERE `id_shop`=%d AND `id_hook`=%d;';
        $query = sprintf($sql, _DB_PREFIX_, (int)$this->context->shop->id, (int)$this_module[0]['id_hook']);

        db::getInstance()->execute($query);

        db::getInstance()->update(
            'hook_module',
            array('position' => 1),
            sprintf(
                'id_module=%d AND id_shop=%d AND id_hook=%d',
                (int)$this->id,
                (int)$this->context->shop->id,
                (int)$this_module[0]['id_hook']
            )
        );
    }

    public function uninstallOverrides()
    {
        $modules_count = $this->getVeebipoedCarrierModulesCount();
        $modules = Tools::unSerialize(Configuration::getGlobalValue(self::MODULES_COUNT));

        if (($modules_count == 1 && count($modules)) == 0) {
            return parent::uninstallOverrides();
        }
        return true;
    }

    public function removeModule()
    {
        $modules_serialized = Configuration::getGlobalValue(self::MODULES_COUNT);
        $modules = Tools::unSerialize($modules_serialized);
        if (!is_array($modules)) {
            $modules = array();
        }
        if (isset($modules[$this->name])) {
            unset($modules[$this->name]);
        }
        Configuration::updateGlobalValue(self::MODULES_COUNT, serialize($modules));
    }

    private function getVeebipoedCarrierModulesCount()
    {
        $count = 0;
        $modules = Module::getModulesInstalled();

        if (!empty($modules)) {
            foreach ($modules as $module) {
                $module_instance = Module::getInstanceByName($module['name']);

                if (
                    Validate::isLoadedObject($module_instance) &&
                    property_exists($module_instance, 'is_veebipoed_carrier_module') &&
                    $module_instance->is_veebipoed_carrier_module === true
                ) {
                    $count++;
                }
            }
        }

        return $count;
    }

    public function installCarrier()
    {
        $carrier = new Carrier();
        $carrier->name = $this->displayName;
        $carrier->id_tax_rules_group = 0;
        $carrier->id_zone = 1;
        $carrier->delay = array();
        $carrier->range_behavior = 1;
        $carrier->is_module = true;
        $carrier->shipping_external = true;
        $carrier->external_module_name = $this->name;
        $carrier->need_range = true;
        $carrier->max_width = $this->getMaxWidth();
        $carrier->max_height = $this->getMaxHeight();
        $carrier->max_depth = $this->getMaxDepth();
        $carrier->max_weight = $this->getMaxWeight();

        $languages = Language::getLanguages(true);
        foreach ($languages as $language) {
            $carrier->delay[(int)$language['id_lang']] = '2-3 days';
        }

        if ($carrier->add()) {
            $groups = Group::getGroups(true);
            foreach ($groups as $group) {
                Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'carrier_group (id_carrier, id_group) VALUES ('.(int)($carrier->id).', '.(int)($group['id_group']).')');
            }

            $rangePrice = new RangePrice();
            $rangePrice->id_carrier = $carrier->id;
            $rangePrice->delimiter1 = '0';
            $rangePrice->delimiter2 = '9999999';
            $rangePrice->add();

            $rangeWeight = new RangeWeight();
            $rangeWeight->id_carrier = $carrier->id;
            $rangeWeight->delimiter1 = '0';
            $rangeWeight->delimiter2 = $this->getMaxWeight();
            $rangeWeight->add();

            $zones = Zone::getZones(true);
            foreach ($zones as $zone) {
                Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'carrier_zone (id_carrier, id_zone) VALUES ('.(int)($carrier->id).', '.(int)($zone['id_zone']).')');

                Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'delivery (id_carrier, id_range_price, id_range_weight, id_zone, price) VALUES
                ('.(int)($carrier->id).', '.(int)($rangePrice->id).', NULL, '.(int)($zone['id_zone']).', 0)');

                Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'delivery (id_carrier, id_range_price, id_range_weight, id_zone, price) VALUES
                ('.(int)($carrier->id).', NULL, '.(int)($rangeWeight->id).', '.(int)($zone['id_zone']).', 0)');

            }

            if (!copy(
                dirname($this->getFileName()).'/views/img/carrier.jpg',
                _PS_SHIP_IMG_DIR_.'/'.(int)$carrier->id.'.jpg'
            )) {
                return false;
            }

            return (int)($carrier->id);
        }
        return false;
    }

    public function hookActionValidateOrder($params)
    {

        if($params['order']->id_carrier == $this->getCarrierId()) {
            $sql = 'INSERT INTO `%3$s%4$s_order`
                (`id_%4$s`, `id_order`) VALUES
                (%d, %d);';
            $extracarrier_data = $this->getCookie($params['order']->id_address_delivery);
            if (!empty($extracarrier_data) && !empty($extracarrier_data['terminal_id'])) {
                $query = sprintf(
                    $sql,
                    $extracarrier_data['terminal_id'],
                    $params['order']->id,
                    _DB_PREFIX_,
                    $this->name
                );
                Db::getInstance()->execute($query);
            }
        }
    }

    public function hookValidateCarriers($params)
    {
        if(isset($params['cart']) && Validate::isLoadedObject($params['cart'])) {
            $carrier = new Carrier($params['cart']->id_carrier);
            $extracarrier_data = $this->getCookie($params['cart']->id_address_delivery);
            if ($carrier->is_module && $carrier->external_module_name == $this->name &&
                (!isset($extracarrier_data['terminal_id'] ) ||
                    $extracarrier_data['terminal_id'] == 0)
            ) {
                return '<p class="warning">'.Tools::displayError('Error: Please choose a parcel terminal.').'</p>';
            }
        }
        return false;
    }

    public function hookInsideCarrier($params)
    {
        if (str_replace(',', '', $params['key']) == $this->getCarrierId()) {
            return $this->hookDisplayCarrierList($params);
        }
    }

    public function hookDisplayHeader($params)
    {
        if (!self::$jsIsIncluded) {
            self::$jsIsIncluded = true;
            $this->context->controller->addJS(_MODULE_DIR_ . $this->name . '/views/js/script.js');
            $this->context->controller->addCSS(_MODULE_DIR_ . $this->name . '/views/css/style.css');
        }
    }

     public function hookModifyName($params)
    {
        $carrier = $this->getValue($params, 'carrier', null);
        $id_order = $this->getValue($params, 'id_order', 0);
        // @TODO replace with terminal object, because code looks kinda spaghetti already
        $city_field = $this->getCityField();
        $name = '';

        if ($carrier && $carrier->external_module_name == $this->name) {
            if ($carrier->id && $id_order) {
                $sql = 'SELECT s.`name`, s.`address`'.($city_field ? sprintf(', s.`%s` as city', $city_field) : '').'
                    FROM %2$s%3$s_order so
                    LEFT JOIN %2$s%3$s s ON so.id_%3$s = s.id_%3$s
                    WHERE so.id_order = %1$d;';
                $query = sprintf($sql, $id_order, _DB_PREFIX_, $this->name);
                if ($row = Db::getInstance()->getRow($query)) {
                    if ($city_field) {
                        if ($this->isDisplayAddress()) {
                            $name = sprintf(' : %s (%s - %s)', $row['name'], $row['address'], $row['city']);
                        } else {
                            $name = sprintf(' : %s (%s)', $row['name'], $row['city']);
                        }
                    } else {
                        if ($this->isDisplayAddress()) {
                            $name = sprintf(' : %s (%s)', $row['name'], $row['address']);
                        } else {
                            $name = sprintf(' : %s', $row['name']);
                        }
                    }
                }
            } elseif ($carrier->id && $this->context->cart->id && $this->orderExistsByCart($this->context->cart->id)) {
                $addresses = $this->context->cart->getDeliveryOption(null, true);
                if (!$addresses)
                    $addresses = $this->context->cart->getDeliveryOption(null, false);
                $sql = 'SELECT o.`id_order`, o.`id_carrier`, s.`name`, s.`address`
                    FROM  `%1$sorders` o
                    INNER JOIN  `%1$s%2$s_order` so ON so.`id_order` = o.`id_order`
                    LEFT JOIN  `%1$s%2$s` s ON s.`id_%2$s` = so.`id_%2$s`
                    WHERE o.`id_cart`=%3$d AND
                    so.`id_%2$s`=%4$d;';
                if ($addresses) {
                    foreach ($addresses as $id_address => &$id_carrier) {
                        $id_carrier = str_replace(',', '', $id_carrier);
                        if ((int)$carrier->id === (int)$id_carrier) {
                            $cookie = $this->getCookie($id_address);
                            //unset($this->context->cookie->{$this->name . '_' . $id_address});
                            if ($cookie) {
                                $query = sprintf(
                                    $sql,
                                    _DB_PREFIX_,
                                    $this->name,
                                    $this->context->cart->id,
                                    $cookie['terminal_id']
                                );
                                if ($row = Db::getInstance()->getRow($query)) {
                                    if ($this->isDisplayAddress()) {
                                        $name = sprintf(' : %s (%s)', $row['name'], $row['address']);
                                    } else {
                                        $name = sprintf(' : %s', $row['name']);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $name;
    }

    public function hookDisplayCarrierExtraContent($params)
    {
        if (isset($params['module']) && $params['module'] == $this->name) {
            return $this->hookDisplayCarrierList(array('id_address' => $params['cart']->id_address_delivery));
        }
    }

    public function hookDisplayCarrierList($params)
    {
        $id_address = (isset($params['address']) ? $params['address']->id : $params['id_address']);
        $selected_carriers = $this->context->cart->getDeliveryOption(null, true);

        if (!$this->id_carrier) {
            $this->id_carrier = $this->getCarrierId();
        }

        if (!$selected_carriers) {
            $selected_carriers = $this->context->cart->getDeliveryOption(null,false);
        }

        if (!($this->isFiveStepsInsideCarrier() ||
            $this->isInsideHook() || (
                isset($selected_carriers[$id_address]) &&
                $this->id_carrier == str_replace(',', '', $selected_carriers[$id_address])
            ))
        ) {
            return false;
        }

        $cookie = false;
        $carrier = new Carrier($this->id_carrier);

        if ($carrier->is_module && $carrier->external_module_name == $this->name) {
            $extra_carrier['id'] = $carrier->id;
            $extra_carrier['name'] = $this->name;
            $cookie = $this->getCookie($id_address);
            $zero_cookie = $this->getCookie(0);

            if ($id_address &&
                $zero_cookie &&
                (!empty($zero_cookie['terminal_id']) || !empty($zero_cookie['group_id']))
            ) {
                $this->saveToCookie($id_address, $zero_cookie);
                $this->saveToCookie(0, false);
            }
            $is_long_list = (int)Configuration::get($this->prefixed('list_type'));

            if ($cookie !== false && isset($cookie['terminal_id'])) {
                $extra_carrier['terminal_id'] = $cookie['terminal_id'];
            } else {
                $extra_carrier['terminal_id'] = 0;
            }

            $this->smarty->assign(array(
                'display_address' => $this->isDisplayAddress(),
                'ajax_url' => $this->context->link->getModuleLink($this->name, 'ajax'),
                'use_js' => (bool)(Configuration::get($this->prefixed('position')) == self::POS_INSIDE_JS)
            ));

            switch ($is_long_list) {
                case self::LIST_TYPE_SHORT:
                    return $this->displayShortList($extra_carrier, $cookie, $id_address);

                case self::LIST_TYPE_SHORT:
                default:
                    return $this->displayLongList($extra_carrier, $cookie, $id_address);
            }
        }
    }

    public function displayShortList($extra_carrier, $cookie, $id_address)
    {
        if($cookie !== false && isset($cookie['group_id'])) {
            $extra_carrier['id_group'] = $cookie['group_id'];
        } else {
            $extra_carrier['id_group'] = $this->getDefaultCity();
        }
        $this->smarty->assign(array(
            'terminals' => $this->getTerminals(array(
                array('active', '=', 1),
                array('group_id', '=', (int)$extra_carrier['id_group'])
            )),
            'carrier' => $extra_carrier,
            'id_address' => $id_address,
            'groups' => $this->getGroupNames(),
            'hide_address_fields' => Configuration::get($this->prefixed('hide_address_fields'))
        ));

        return $this->display($this->getFileName(), 'terminals_short.tpl');
    }

    public function displayLongList($extra_carrier, $cookie, $id_address)
    {
        $this->smarty->assign(array(
            'terminals' => $this->getTerminals(array(array('active', '=', 1))),
            'carrier' => $extra_carrier,
            'id_address' => $id_address,
            'hide_address_fields' => Configuration::get($this->prefixed('hide_address_fields'))
        ));



        return $this->display($this->getFileName(), 'terminals_long.tpl');
    }

    public function hookActionPaymentConfirmation($params)
    {
        $order = new Order($params['id_order']);
        if ($this->getCookie($order->id_address_delivery)) {
            unset($this->context->cookie->{$this->name . '_' . $order->id_address_delivery});
        }
    }

    public function getValue($set, $key, $fallback)
    {
        if (isset($set[$key])) {
            return $set[$key];
        } else {
            return $fallback;
        }
    }

    public function getFreeShippingGroups()
    {
        $result = array();
        $freeShipping = Configuration::get($this->prefixed($this->getFreeShippingBoxName()));
        if ($freeShipping) {
            $result = array_flip(explode(',', $freeShipping));
        }
        return $result;
    }

    public function orderExistsByCart($id_cart)
    {
        return (bool)Db::getInstance()->getValue(
            'SELECT count(*) FROM `'._DB_PREFIX_.'orders` WHERE `id_cart` = '.(int)$id_cart
        );
    }

    public function createTab()
    {
        $shipping_tab_id = Tab::getIdFromClassName('AdminShipping');
        $shipping_tab = new Tab($shipping_tab_id);
        $tab = new Tab();

        $tab->class_name = $this->getTabClassName();
        $tab->module = $this->name;
        $tab->id_parent = $shipping_tab->id_parent; // AdminParentShipping

        $languages = Language::getLanguages(true);
        foreach ($languages as $language) {
            $tab->name[(int)$language['id_lang']] = $this->displayName;
        }

        if ($tab->add()) {
            return true;
        }
        return false;
    }

    public function getTerminalSizeForOrder($products, $cart)
    {
        $order_total = $cart->getOrderTotal(true, Cart::BOTH_WITHOUT_SHIPPING);
        $sizes = $this->getSizes(false, $this->context->customer->id_default_group, $order_total);
        $count_sizes = count($sizes);

        if (!$count_sizes) {
            return false;
        }

        $id_key = 'id_' . $this->name . '_size';
        $package_volume = array();
        $package_weight = array();
        $product_volumes = array();
        $max_package_count = array();
        $addresses = array();
        $cookie = false;
        $terminals = array();
        $carrier = new Carrier($this->id_carrier); //$carrier->max_weight
        $min_parcel_index = 0;
        $dimensions = array('width', 'height', 'depth');


        foreach ($products as $key => $product) {
            if (!isset($package_weight[$product['id_address_delivery']])) {
                $addresses[] = $product['id_address_delivery'];
                $package_volume[$product['id_address_delivery']] = 0;
                $package_weight[$product['id_address_delivery']] = 0;
            }
            $product_volumes[$key] = $product['height'] * $product['width'] * $product['depth'];
            $package_volume[$product['id_address_delivery']] += $product_volumes[$key] * $product['quantity'];
            $package_weight[$product['id_address_delivery']] += $product['weight'] * $product['quantity'];

            for ($i = $min_parcel_index; $i < $count_sizes; $i++) {
                $j = $k = count($dimensions);
                $is_larger = false;
                while ($j--) {
                    if ($sizes[$min_parcel_index][$dimensions[$j]] >= $product['width'] &&
                        $sizes[$min_parcel_index][$dimensions[($j+1)%$k]] >= $product['height'] &&
                        $sizes[$min_parcel_index][$dimensions[($j+2)%$k]] >= $product['depth']
                    ) {
                        $is_larger = true;
                        break;
                    }
                }
                if (!$is_larger) {
                    $min_parcel_index = $i;
                }
            }
        }

        foreach ($addresses as $address) {
            $max_package_count[$address] = 1;
            if ($package_volume[$address] / $sizes[$count_sizes-1]['volume'] > $max_package_count[$address]) {
                $max_package_count[$address] = ceil($package_volume[$address] / $sizes[$count_sizes-1]['volume']);
                $package_key = 'volume';
            }
            if ($package_weight[$address] / $carrier->max_weight > $max_package_count[$address]) {
                $max_package_count[$address] = ceil($package_weight[$address] / $carrier->max_weight);
                $package_key = 'weight';
            }
        }

        foreach ($package_volume as $address => $volume) {
            $cookie = $this->getCookie($address);
            if ($max_package_count[$address] > 1) {
                if($package_key == 'weight') {
                    $size = $this->findSize($sizes, ceil($volume/$max_package_count[$address]));
                } else {
                    $size = $sizes[$count_sizes-1];
                }
                $cookie['terminals'] = array_fill(
                    0,
                    $max_package_count[$address]-1,
                    $size[$id_key]
                );
                $terminals = array_fill(
                    0,
                    $max_package_count[$address]-1,
                    $size
                );
                $terminal = $this->findSize(
                    $sizes,
                    $volume-$sizes[$count_sizes-1]['volume']*($max_package_count[$address]-1),
                    $id_key
                );
                $terminals[] = $terminal;
                $cookie['terminals'][] = $terminal[$id_key];
            } else {
                if ($sizes[$min_parcel_index]['volume'] > $volume) {
                    $terminals[] = $sizes[$min_parcel_index];
                } else {
                    $terminals[] = $this->findSize($sizes, $volume);;
                }
                $cookie['terminals'] = $terminals[0][$id_key];
            }
            $this->saveToCookie($address, $cookie);
        }
        return $terminals;
    }

    public function findSize($sizes, $volume)
    {
        $terminal = null;
        $current_volume = 0;
        foreach ($sizes as $key => $size) {
            if ($size['volume'] >= $volume && (!$current_volume || $current_volume == $size['volume'])) {
                $terminal = $size;
                $current_volume = $size['volume'];
            }
        }

        return $terminal;
    }

    public function getPackageShippingCost($cart, $shipping_cost, $products)
    {
        $carrier = new Carrier($this->id_carrier);
        if ($carrier->is_free) {
            return 0;
        }

        $freeShipping = $this->getFreeShippingGroups();
        if ($this->context->customer->id_default_group &&
            isset($freeShipping[$this->context->customer->id_default_group])
        ) {
            return 0;
        }

        $sizes = $this->getTerminalSizeForOrder($products, $cart);
        $price = 0;

        if ($carrier->shipping_handling) {
            $price =+ $shipping_cost;
        }

        if ($sizes) {
            foreach ($sizes as $size) {
                $price += $size['price'];
            }
        } else {
            $price =+ (int)Configuration::get($this->prefixed('default_price'));
        }

        return $price;
    }

    public function getCookie($id_address)
    {
        $test = Context::getContext();
        $data = $this->context->cookie->{$this->name . '_' . $id_address};
        if ($data) {
            return Tools::unSerialize($data);
        }
        return false;
    }

    public function saveToCookie($id_address, $value)
    {
        $this->context->cookie->{$this->name . '_' . $id_address} = serialize($value);
    }

    public function getOrderShippingCost($cart, $shipping_cost)
    {
        return $this->getPackageShippingCost($cart, $shipping_cost, $cart->getProducts());
    }

    public function getOrderShippingCostExternal($cart)
    {
        return $this->getPackageShippingCost($cart, 0, $cart->getProducts());
    }

    public function getCarrierId($active = true)
    {
        $query = new DbQuery();
        $query->select('id_carrier');
        $query->from('carrier');
        $query->where('`is_module` = 1');
        $query->where('`deleted` = 0');
        $query->where(sprintf('`external_module_name` = \'%s\'', pSQL($this->name)));
        if ($active) {
            $query->where('`active` = 1');
        }

        $carriers = Db::getInstance()->executeS($query);
        if (!empty($carriers)) {
            return $carriers[0]['id_carrier'];
        }
        return 0;
    }

    public function prefixed($key)
    {
        return strtoupper($this->name.'_'.$key);
    }


    public function getFileName()
    {
        return $this->getLocalPath().$this->name.'.php';
    }

    public function isDisplayAddress()
    {
        return (bool)Configuration::get($this->prefixed('show_address'));
    }

    public function isFiveStepsInsideCarrier()
    {
        return (
            !((bool)Configuration::get('PS_ORDER_PROCESS_TYPE')) &&
            $this->isRegisteredInHook('insideCarrier')
        );
    }

    public function isTableAltered($key)
    {
        $tableInfo = explode('|', $key);
        $sql = "SELECT count(`column_name`)
            FROM `INFORMATION_SCHEMA`.`COLUMNS`
            WHERE `table_name` = '"._DB_PREFIX_.$this->name.$tableInfo[0]."' AND
            `table_schema` = '"._DB_NAME_."' AND
            column_name = '".$tableInfo[1]."'";;
        return (bool)Db::getInstance()->getValue($sql);
    }

    public function isInsideHook()
    {
        return (
            Configuration::get($this->prefixed('position')) == self::POS_INSIDE_JS ||
            Configuration::get($this->prefixed('position')) == self::POS_INSIDE_HOOK
        );
    }

    public function hookAdminOrder($params)
    {
        $id_order = $params['id_order'];
        $order = new Order((int)$id_order);
        $order_carriers = $order->getShipping();
        foreach ($order_carriers as $order_carrier) {
            $carrier = new Carrier($order_carrier['id_carrier']);
            if ($carrier->external_module_name == $this->name) {
                $sql = 'SELECT s.name, s.'.$this->getCityField().' AS city FROM '._DB_PREFIX_.$this->name.' s INNER JOIN '._DB_PREFIX_.$this->name.'_order so ON s.id_'.$this->name.' = so.id_'.$this->name.' WHERE so.id_order = '.$id_order;
                $terminal = Db::getInstance()->executeS($sql);
                $this->smarty->assign(array(
                    'terminal' => $terminal[0]['city'].', '.$terminal[0]['name'].' pakiautomaat'
                ));
                return $this->display($this->getFileName(), 'adminOrderTerminal.tpl');
            }
        }
    }
}
