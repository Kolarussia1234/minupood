<?php

if (!defined('_PS_VERSION_'))
    exit;

if (!class_exists('VeebipoedCarrierModel')) 
    require _PS_MODULE_DIR_ .'/smartcarrier/libs/veebipoed_carrier_model.php';

if (!class_exists('VeebipoedCarrierModule')) 
    require _PS_MODULE_DIR_ .'/smartcarrier/libs/veebipoed_carrier_module.php';

class SmartCarrierSize extends VeebipoedCarrierModel
{
    public $name;
    public $height;
    public $width;
    public $depth;
    public $price;
    public $id_group;
    public $price_to;
    public $price_from;

    public static $definition = array(
        'table' => 'smartcarrier_size',
        'primary' => 'id_smartcarrier_size',
        'multilang' => false,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'height' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'width' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'depth' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price_to' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price_from' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'id_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true)
        )
    );
}

class SmartCarrier extends VeebipoedCarrierModule
{
    public  $id_carrier;

    public function __construct()
    {
        $this->name = 'smartcarrier'; //module name
        $this->tab = 'shipping_logistics';
        $this->version = '2.0.0';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('SmartKuller');
        $this->description = $this->l('SmartKuller');
    }


    public function hasSizes()
    {
        return SmartCarrierSize::getSizes();
    }

    public function getMaxWeight()
    {
        return 35;
    }

    public function getMaxWidth()
    {
        return 60;
    }

    public function getMaxHeight()
    {
        return 60;
    }

    public function getMaxDepth()
    {
        return 120;
    }

    public function getDefaultCity()
    {
        return false;
    }

    public function getTabClassName()
    {
        return 'AdminSmartcarrier';
    }

    public function getFreeShippingBoxName()
    {
        return 'groupBox';
    }

    public function getSizes($include_deleted, $id_group, $orderTotal)
    {
        return SmartCarrierSize::getSizes($include_deleted, $id_group, $orderTotal);
    }

    public function getTerminals($id_terminal = null)
    {
        $terminals =  array(
            3 => $this->l('Doesn\'t matter'),
            1 => $this->l('9.00-17.00'),
            2 => $this->l('17.00-21.00')
        );

        if (!is_null($id_terminal) && isset($terminals[$id_terminal])) {
            return $terminals[$id_terminal];
        } else {
            return $terminals;
        }
    }

    public function importTerminals()
    {
        return true;
    }

    public function createSizes()
    {
        $sizes = array(
            array(
                'name' => 'XS',
                'height' => 5,
                'width' => 36,
                'depth' => 45,
                'price' => 4,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'S',
                'height' => 12,
                'width' => 36,
                'depth' => 60,
                'price' => 4.5,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'M',
                'height' => 20,
                'width' => 36,
                'depth' => 60,
                'price' => 5.5,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'L',
                'height' => 38,
                'width' => 36,
                'depth' => 60,
                'price' => 6.95,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'XL',
                'height' => 38,
                'width' => 36,
                'depth' => 60,
                'price' => 8.95,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            ),
            array(
                'name' => 'XXL',
                'height' => 60,
                'width' => 36,
                'depth' => 60,
                'price' => 11.95,
                'id_group' => 0,
                'price_from' => 0,
                'price_to' => 99999999.99
            )
        );

        foreach ($sizes as $size) {
            SmartCarrierSize::createSize($size)->add();
        }
    }

    public function getGroupNames()
    {
        return false;
    }

    public function hookDisplayAdminsmartcarrierOptions($params)
    {
        $groups =  Group::getGroups($this->context->language->id);
        $selectedGroups = array();

        if (Tools::isSubmit('submitOptionssmartcarrier_size')) {
            Configuration::updateValue(
                $this->prefixed($this->getFreeShippingBoxName()),
                implode(',', Tools::getValue($this->getFreeShippingBoxName(), array()))
            );
        }

        $selectedGroups = $this->getFreeShippingGroups();
        foreach ($groups as &$value) {
            if (isset($selectedGroups[$value['id_group']])) {
                $value['checked'] = true;
            } else {
                $value['checked'] = false;
            }
        }

        $this->smarty->assign(array(
            'groups' => $groups,
            'name' => $this->getFreeShippingBoxName(),
        ));

        return $this->display(__FILE__, 'options.tpl');
    }

    public function createVariables()
    {
        if (Configuration::updateValue($this->prefixed('position'), 0) === false) {
            return false;
        }
        return true;
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
            if ($id_address && count($cookie) == 1) {
                $cookie = $this->getCookie(0);
                $this->saveToCookie($id_address ,$cookie);
            }

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

            if ($cookie !== false && isset($cookie['group_id'])) {
                $extra_carrier['id_group'] = $cookie['group_id'];
            } else {
                $extra_carrier['id_group'] = $this->getDefaultCity();
            }
            $this->smarty->assign(array(
                'terminals' => $this->getTerminals(),
                'carrier' => $extra_carrier,
                'id_address' => $id_address,
                'groups' => $this->getGroupNames()
            ));

            return $this->display(__FILE__, 'terminals.tpl');
        }
    }
}
