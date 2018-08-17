<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__) . '/classes/Domino.php');

class Vp_domino extends Module
{
    protected $config_form = false;
    protected static $boom_instance = null;
    protected static $customercode_template = 'EP_%';

    public function __construct()
    {
        $this->name = 'vp_domino';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Domino module');
        $this->description = $this->l('Domino import module');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall Domino import module?');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function getBoomInstance()
    {
        if(!self::$boom_instance) {
            $db = new DbMySQLi('domino.matkasport.ee', 'root', 'FesAjCegEch2', 'buum');
            //$res = $db->executeS('SELECT * FROM ITEM WHERE EXPORTABLE = "T"');
            self::$boom_instance = $db;
        }

        return self::$boom_instance;
    }

    public function install()
    {
        include(dirname(__FILE__).'/sql/install.php');

        return parent::install() && $this->installTabs() && $this->installDefaultData() &&
            $this->registerHook([
                'backOfficeHeader',
                'actionOrderStatusPostUpdate',
                'actionObjectGroupAddAfter',
                'actionObjectGroupDeleteAfter',
                'actionAuthentication',
                'displayBackOfficeOrderActions',
                'actionValidateOrder',
            ]);
    }

    public function installDefaultData()
    {
        if($result = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'vp_customer_group_discounts`'))
            return true;

        $groups = Group::getGroups(VpDomino::VP_DOMINO_DEFAULT_LANG);

        foreach($groups as $group)
            Db::getInstance()->insert('vp_customer_group_discounts', [
                'id_group' => $group['id_group'],
                'default_value' => 0,
                'fixed' => 0,
                's_margin' => 0,
                'lamp' => 0,
                'compass' => 0,
                'wholesale' => 0,
            ], true);

        if(!Configuration::get('VP_DOMINO_GLOBAL_CUSTOMERCODE'))
            Configuration::updateValue('VP_DOMINO_GLOBAL_CUSTOMERCODE', 'WU00000001');

        return true;
    }

    public function uninstall()
    {
        return $this->uninstallTabs() && parent::uninstall();
    }

    public function uninstallTabs()
    {
        $res = true;

        $idTabs = array();
        $idTabs[] = Tab::getIdFromClassName('AdminCustomerGroupDiscounts');

        foreach ($idTabs as $idTab) {
            if ($idTab) {
                $tab = new Tab($idTab);
                $res &= $tab->delete();
            }
        }

        return $res;
    }

    public function installTabs()
    {
        $controllers = [
            'AdminCustomerGroupDiscounts' =>
                [
                    'name' => 'Group discounts',
                    'id_parent' => 73,
                ],
            'AdminDomino' =>
                [
                    'name' => 'Domino',
                    'id_parent' => 0,
                ],
        ];

        $res = true;

        foreach($controllers as $controller => $data) {
            $tab = new Tab();

            $tab->name = array();
            foreach (Language::getLanguages() as $lang)
                $tab->name[$lang['id_lang']] = $this->l($data['name']);

            $tab->class_name = $controller;
            $tab->id_parent = $data['id_parent'];
            $tab->module = $this->name;
            $res &= $tab->add();
        }

        return $res;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitVp_dominoModule')) == true) {
            $this->postProcess();
        }

        $cron_jobs = [
            'products' => [
                'name' => $this->l('Products cron'),
                'url' => $this->context->shop->domain.$this->_path.'cron.php?type=products&token='.Configuration::get('VP_DOMINO_KEY').'&output=true',
            ],
            'manufacturer' => [
                'name' => $this->l('Manufacturer cron'),
                'url' => $this->context->shop->domain.$this->_path.'cron.php?type=manufacturer&token='.Configuration::get('VP_DOMINO_KEY').'&output=true',
            ],
            'category_status' => [
                'name' => $this->l('Category status cron'),
                'url' => $this->context->shop->domain.$this->_path.'cron.php?type=category_status&token='.Configuration::get('VP_DOMINO_KEY').'&output=true',
            ],
            'quantities' => [
                'name' => $this->l('Quantities cron'),
                'url' => $this->context->shop->domain.$this->_path.'cron.php?type=quantities&token='.Configuration::get('VP_DOMINO_KEY').'&output=true',
            ],
            'quantitiesStocks' => [
                'name' => $this->l('Buum_stocks quantities cron'),
                'url' => $this->context->shop->domain.$this->_path.'cron.php?type=quantitiesStocks&token='.Configuration::get('VP_DOMINO_KEY').'&output=true',
            ],
        ];

        $domino = new VpDomino();

        $manufacturer_logs = array_reverse(array_slice($domino->getLog('manufacturer'), -10));
        $product_logs = array_reverse(array_slice($domino->getLog('product'), -10));

        $this->context->smarty->assign(array(
            'manufacturer_logs' => $manufacturer_logs,
            'product_logs' => $product_logs,
            'cron_jobs' => $cron_jobs,
        ));

        $cron_urls = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        $logs = $this->context->smarty->fetch($this->local_path.'views/templates/admin/logs.tpl');
        return $cron_urls.$this->renderForm().$logs;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitVp_dominoModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Domino live'),
                        'name' => 'VP_DOMINO_MODE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Live mode')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Test mode')
                            )
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'VP_DOMINO_KEY',
                        'col' => '3',
                        'label' => $this->l('Domino key'),
                    ),
                    array(
                        'type' => 'text',
                        'name' => 'VP_DOMINO_GLOBAL_CUSTOMERCODE',
                        'col' => '3',
                        'label' => $this->l('General customer code'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'VP_DOMINO_MODE' => Configuration::get('VP_DOMINO_MODE'),
            'VP_DOMINO_KEY' => Configuration::get('VP_DOMINO_KEY'),
            'VP_DOMINO_GLOBAL_CUSTOMERCODE' => Configuration::get('VP_DOMINO_GLOBAL_CUSTOMERCODE'),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    public function hookDisplayBackOfficeOrderActions($params)
    {
        $id_order = $params['id_order'];

        if(Db::getInstance()->getValue('SELECT id_order FROM '._DB_PREFIX_.'vp_domino_order_export WHERE id_order = ' . (int)$id_order))
            return;

        $order_export_url = $this->context->link->getAdminLink('AdminDomino');

        Media::addJsDef(['order_export_url' => $order_export_url]);

        $this->context->smarty->assign([
            'id_order' => $id_order,
        ]);

        return $this->context->smarty->fetch($this->local_path.'views/templates/hook/order_action.tpl');

    }

    public function hookActionOrderStatusPostUpdate($params)
    {
        if(!isset($params['newOrderStatus'], $params['id_order']) || !Validate::isLoadedObject($params['newOrderStatus']))
            return;

        $orderState = $params['newOrderStatus'];

        $domino = new VpDomino();

        $domino->exportOrder($params['id_order'], $orderState);
    }

    // params['object']
    public function hookActionObjectGroupAddAfter($params)
    {
        Db::getInstance()->insert('vp_customer_group_discounts', ['id_group' => $params['object']->id]);
    }

    public function hookActionObjectGroupDeleteAfter($params)
    {
        Db::getInstance()->delete('vp_customer_group_discounts', 'id_group = ' . $params['object']->id);
    }

    public function hookActionAuthentication($params)
    {
        $customer = $params['customer'];

        $customer->customercode = $this->getCustomerCode($customer);
        $customer->update();
        $this->context->updateCustomer($customer);
    }

    public function hookActionValidateOrder($params)
    {
        if(!isset($params['customer'], $params['order']))
            return;

        $customer = $params['customer'];
        $address = new Address($params['order']->id_address_delivery);

        $customer->customercode = $this->getCustomerCode($customer, $address,true);
        $customer->setFieldsToUpdate(['customercode']);
        $customer->update();
    }

    public function getCustomerCode($customer, $address = false, $withRegistration = false)
    {
        $global_code = Configuration::get('VP_DOMINO_GLOBAL_CUSTOMERCODE');

        if(!isset($customer->id_code) || !$customer->id_code || $customer->is_guest)
            return $global_code;

        $customercode_boom = null;

        try {
            $db = $this->getBoomInstance();
            $customercode_boom = $db->getValue('SELECT CUMAIN.CUSTCODE FROM CARDS LEFT JOIN CUMAIN ON (CARDS.CUSTNO = CUMAIN.CUSTNO) WHERE CARDS.CARDNO = "' . $customer->id_code . '"');
        } catch (PrestaShopException $e) {
            return $global_code;
        }

        if($customercode_boom)
            return $customercode_boom;

        if($withRegistration && $customercode = $this->registerCustomer($customer, $address))
            return $customercode;

        return $global_code;
    }

    public function registerCustomer(Customer $customer, Address $address)
    {
        VpDomino::addLog('order', 'Register customer: '.$customer->id);

        if(!Configuration::get('VP_DOMINO_MODE')) {
            VpDomino::addLog('order', 'Test mode, not registering customer');
            return false;
        }

        $customercode = str_replace('%', $customer->id, self::$customercode_template);
        $full_name = $customer->lastname . ' ' . $customer->firstname;

        $customer_phone = $address->phone_mobile ? $address->phone_mobile : $address->phone;

        $body = [
            'CustomerCode' => $customercode,
            'CustomerName' => $full_name,
            'RegistrationNumber' => $customer->id_code,
            'Email' => $customer->email,
            'Phone' => $customer_phone,
            'Address' => $address->address1,
            'Address2' => $address->postcode . ' ' . $address->city,
        ];

        $url = 'http://matkasport.girf.ee:8080/matkabuss/customers/createCustomer';
        $fields = VpDomino::utfJson($body);
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $result_array = json_decode($result, true);

        VpDomino::addLog('order', 'Register response: '.$result);

        if(!isset($result_array['CustomerNumber']))
            return false;

        return $customercode;

    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
            $this->context->controller->addJS($this->_path.'views/js/clipboard.js');
        }

        if(Tools::getValue('controller') === 'AdminOrders')
            $this->context->controller->addJs($this->_path.'views/js/back.js');
    }
}
