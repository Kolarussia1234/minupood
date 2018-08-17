<?php

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

require dirname(__FILE__).'/classes/maksekeskusapi.php';

class MKBillingApi extends PaymentModule
{
    const STATUS_NAME = 'OS_MK_BILLINGAPI';

    const IMG_PATH = 'views/img';

    const TYPE_BANK = 'banklinks';
    const TYPE_CARD = 'cards';
    const TYPE_CASH = 'cash';
    const TYPE_OTHER = 'other';

    const TEST = 0;
    const LIVE = 1;

    const DISPLAY_ORDER_PAGE = 1;
    const DISPLAY_SEPARATE_PAGE = 0;

    const CACHE_VALID_TIME = 86400; //1 day in seconds

    private $fields = array('secret_key', 'shop_id', 'publishable_key', 'server', 'methods_display');
    private $types = array(self::TYPE_BANK, self::TYPE_CARD);
    private static $api = null;

    private $html = '';
    private $config = null;

    public function __construct()
    {
        $this->name = 'mkbillingapi';
        $this->tab = 'payments_gateways';
        $this->version = '1.1.2';
        $this->need_instance = 0;
        $this->author = 'Veebipoed.ee';
        $this->bootstrap = true;
        $this->controllers = array('payment', 'validation', 'banklinks', 'ajax');

        parent::__construct();

        $this->displayName = 'Maksekeskus';
        $this->description = 'For making Maksekeskus payments through billing API';

    }

    public function install()
    {
        if (
            !parent::install() OR
            !$this->registerHook('paymentOptions') OR
            !$this->registerHook('paymentReturn') OR
            !$this->registerHook('displayHeader') OR
            !$this->createOrderState()
        ) {
            return false;
        } else {
            return true;
        }
    }

    public function getContent()
    {
        if (Tools::isSubmit('submit'.$this->name)) {
            foreach ($this->fields as $field) {
                $this->updateConfig($field, Tools::getValue($field));
            }

            $this->html .= $this->displayConfirmation($this->l('Settings updated'));
        }

        $this->showForm();

        return $this->html;
    }

    private function showForm()
    {
        $field_values = array();
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper = new HelperForm();

        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'select',
                    'label' => $this->l('Server'),
                    'name' => 'server',
                    'required' => true,
                    'lang' => false,
                    'options' => array(
                        'query' => array(
                            array('id'=> self::TEST, 'name' => $this->l('Test server')),
                            array('id'=> self::LIVE, 'name' => $this->l('Live server'))
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Display payment methods'),
                    'name' => 'methods_display',
                    'required' => true,
                    'options' => array(
                        'query' => array(
                            array(
                                'id'=> self::DISPLAY_SEPARATE_PAGE,
                                'name' => $this->l('On separate page')
                            ),
                            array(
                                'id'=> self::DISPLAY_ORDER_PAGE,
                                'name' => $this->l('On order page')
                            ),
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Publishable key'),
                    'name' =>  'publishable_key',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Shop id'),
                    'name' => 'shop_id',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Secret key'),
                    'name' => 'secret_key',
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        $helper->languages = Language::getLanguages(false);
        foreach ($helper->languages as $k => $language) {
            $helper->languages[$k]['is_default'] = (int)($language['id_lang'] == $helper->default_form_language);
        }

        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' => array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules'),
            ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        foreach ($this->fields as $param) {
            $field_values[$param] = Configuration::get($this->prefixed($param));
        }

        $helper->fields_value = $field_values;

        $this->html .= $helper->generateForm($fields_form);
    }

    public function getTranslation($method_name)
    {
        $labels = array(
            'swedbank' => $this->l('Swedbank'),
            'lhv' => $this->l('LHV'),
            'danske' => $this->l('Danske'),
            'seb' => $this->l('SEB'),
            'nordea' => $this->l('Nordea'),
            'krediidipank' => $this->l('Krediidipank'),
            'visa' => $this->l('VISA'),
            'mastercard' => $this->l('MasterCard'),
            'maestro' => $this->l('Maestro'),
            'banklinks' => $this->l('Banklinks'),
            'cards' => $this->l('Cards'),
            'pocopay' => $this->l('Pocopay')
        );

        return (isset($labels[$method_name]) ? $labels[$method_name] : $method_name);
    }

    public function getPaymentMethodValues($type = null)
    {
        $payment_methods = $this->getPaymentMethods();

        if (is_null($type)) {
            $types = $this->types;
        } else {
            $types = array($type);
        }

        if (empty($payment_methods)) {
            return array();
        }

        $values = array();

        foreach ($types as $type) {
            if (!empty($payment_methods->{$type})) {
                foreach ($payment_methods->{$type} as $method) {
                    if(isset($method->country)){
                        $id_country = Country::getByIso(strtoupper($method->country));
                        $country = Country::getNameById($this->context->language->id, $id_country);
                    }else{
                        $country = 'all';
                    }
                    $values[] = array(
                        'name' => $this->getTranslation($method->name),
                        'type' => $type,
                        'id' => $method->name,
                        'country' => $country
                    );
                }
            }
        }

        return $values;
    }

    private function getMailVars()
    {
        return array(
            '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
            '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS')),
            '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS'))
        );
    }

    public function confirmOrder($payment_methods = null)
    {
        $mailVars = $this->getMailVars();

        $this->validateOrder(
            $this->context->cart->id,
            Configuration::get(self::STATUS_NAME),
            $this->context->cart->getOrderTotal(),
            $this->displayName . sprintf(' (%s)', $this->getTranslation($payment_methods)),
            NULL,
            $mailVars,
            $this->context->cart->id_currency,
            false,
            $this->context->customer->secure_key
        );

        return new Order($this->currentOrder);
    }

    public function prefixed($key)
    {
        return Tools::strtoupper($this->name.'_'.$key);
    }

    public function getConfig($key)
    {
        return Configuration::get($this->prefixed($key));
    }

    public function updateConfig($key, $value, $allow_html = false)
    {
        return Configuration::updateValue($this->prefixed($key), $value, $allow_html);
    }

    public function getApi()
    {
        $shop_id = $this->getConfig('shop_id');
        $publishable_key = $this->getConfig('publishable_key');
        $secret_key = $this->getConfig('secret_key');

        if (!empty($shop_id) && !empty($publishable_key) && !empty($secret_key)) {
            self::$api = new MaksekeskusApi(
                $secret_key,
                $publishable_key,
                $shop_id,
                $this->getConfigFromFile('endpoint_url')
            );
        }

        return self::$api;
    }

    private function getPaymentTypes()
    {
        return array(
            array(
                'id' => self::TYPE_BANK,
                'name' => $this->getTranslation(self::TYPE_BANK)
            ),
            array(
                'id' => self::TYPE_CARD,
                'name' => $this->getTranslation(self::TYPE_CARD)
            )
        );
    }

    private function getPaymentMethods($cache = true)
    {
        $currency = Currency::getDefaultCurrency();
        $config_key = 'payment_methods';

        //get payment methods from local database
        if ($cache) {
            $payment_methods = $this->getConfig($config_key);
            if (!empty($payment_methods)) {
                $payment_methods = Tools::jsonDecode($payment_methods);
                if (
                    empty($payment_methods->updated) ||
                    $payment_methods->updated + self::CACHE_VALID_TIME < time()
                ) {
                    $payment_methods = null;
                }
            }
        }

        //Request payment methods through Maksekeskus API and save into cache
        if (!$cache || empty($payment_methods)) {
            $api = $this->getApi();

            if (!is_null($api)) {
                $params = array(
                    'currency' => $currency->iso_code
                );

                $payment_methods = $api->getPaymentMethods($params);
            }

            if (!empty($payment_methods)) {
                $payment_methods->updated = time();
                $this->updateConfig($config_key, Tools::jsonEncode($payment_methods));
            }
        }

        return $payment_methods;
    }

    private function createOrderState()
    {
        $orderStateExist = false;
        $orderStateId = Configuration::get(self::STATUS_NAME);
        $description = $this->l('Awaiting maksekeskus payment');

        if (strlen($description) > 64) {
            $description = substr($description, 0, 64);
        }

        if ($orderStateId) {
            $orderState = new OrderState($orderStateId);
            if($orderState->id && !$orderState->deleted) {
                $orderStateExist = true;
            }
        } else {
            $query = 'SELECT os.`id_order_state` '.
                'FROM `%1$sorder_state_lang` osl '.
                'LEFT JOIN `%1$sorder_state` os '.
                'ON osl.`id_order_state`=os.`id_order_state` '.
                'WHERE osl.`name`="%2$s" AND os.`deleted`=0';
            $orderStateId =  Db::getInstance()->getValue(sprintf($query, _DB_PREFIX_, $description));
            if ($orderStateId) {
                Configuration::updateValue(self::STATUS_NAME, $orderStateId);
                $orderStateExist = true;
            }
        }

        if (!$orderStateExist) {
            $languages = Language::getLanguages(false);
            $orderState = new OrderState();
            foreach ($languages as $lang) {
                $orderState->name[$lang['id_lang']] = $description;
            }

            $orderState->send_email = 0;
            $orderState->invoice = 0;
            $orderState->color = "lightblue";
            $orderState->unremovable = 0;
            $orderState->logable = 0;
            $orderState->delivery = 0;
            $orderState->hidden = 0;
            if($orderState->add()) {
                Configuration::updateValue(self::STATUS_NAME, $orderState->id);
                $orderStateExist = true;
            }
        }

        return $orderStateExist;
    }

    public function getConfigFromFile($key = null)
    {
        if (is_null($this->config))
        {
            $server = (int)$this->getConfig('server');
            $config = require $this->local_path.'config.inc.php';
            $this->config = $config[$server];
        }

        if (!empty($key) && isset($this->config[$key]))
        {
            return $this->config[$key];
        }
        else if (!is_null($key))
        {
            return false;
        }
        else
        {
            return $this->config;
        }
    }

    public function getImage($method)
    {
        switch ($method)
        {
            case 'cards':
            case 'banklinks':
                return $this->_path.self::IMG_PATH.'/maksekeskus.gif';

            default:
                return  'https://static.maksekeskus.ee/img/channel/lnd/'.$method.'.png';
        }
    }

    public function getPaymentMethod($name, $payment_methods = array())
    {
        if (empty($name))
        {
            return false;
        }

        if (empty($payment_methods))
        {
            $payment_methods = $this->getPaymentMethodValues();
        }

        $result = false;

        foreach ($payment_methods as $method)
        {
            if ($method['id'] == $name)
            {
                $result = $method;
                break;
            }
        }

        return $result;
    }

    public function createTransaction($method)
    {
        $order = $this->confirmOrder($method);
        $api = $this->getApi();
        $transaction = null;

        if (!is_null($api) && Validate::isLoadedObject($order))
        {
            $currency = new Currency($order->id_currency);
            $customer = new Customer($order->id_customer);
            $address = new Address($order->id_address_delivery);

            $data = array(
                'transaction' => array(
                    'amount' => Tools::ps_round($order->total_paid, 2),
                    'currency' => $currency->iso_code,
                    'reference' => $order->id
                ),
                'customer' => array(
                    'email' => $customer->email,
                    'ip' => $this->getCustomerIp(),
                    'country' => Country::getIsoById($address->id_country),
                    'locale' => Language::getIsoById($order->id_lang)
                )
            );

            $transaction = $api->createTransaction($data);;
        }

        return $transaction;
    }

    public function getBankUrlFromTransaction($transaction, $method)
    {
        $url = false;

        if (!is_null($transaction))
        {
            foreach ($transaction->payment_methods->{MKBillingApi::TYPE_BANK} as $payment_method)
            {
                if ($payment_method->name == $method)
                {
                    $url = $payment_method->url;
                    break;
                }
            }
        }

        return $url;
    }

    public function getJsDataFromTrasaction($transaction)
    {
        $order = new Order((int)$transaction->reference);
        $customer = new Customer($order->id_customer);

        return array(
            'js_src' => $this->getConfigFromFile('js_url'),
            'publishable_key' => $this->getConfig('publishable_key'),
            'transaction_id' => $transaction->id,
            'currency' => $transaction->currency,
            'amount' => $transaction->amount,
            'customer_email' => $transaction->customer->email,
            'customer_name' => $customer->firstname.' '.$customer->lastname,
            'shop_name' => $this->context->shop->name,
            'description' => sprintf($this->l('Order #%d'), $transaction->reference),
            'locale' => Language::getIsoById($order->id_lang),
            'quick_mode' => true
        );
    }
    public function hookdisplayHeader($params)
    {
        $this->context->controller->addCSS($this->_path.'views/css/mkbillingapi.css');
    }

    public function hookPaymentOptions($params)
    {

        $methods_display = (int)$this->getConfig('methods_display');

        switch ($methods_display)
        {
            case self::DISPLAY_SEPARATE_PAGE:
                $payment_methods = $this->getPaymentTypes();
                break;

            case self::DISPLAY_ORDER_PAGE:
                $payment_methods = $this->getPaymentMethodValues();
                break;
        }

        if (empty($payment_methods))
        {
            return;
        }
        foreach ($payment_methods as $i => &$method)
        {
            $method['link'] = $this->context->link->getModuleLink(
                $this->name,
                (isset($method['type']) ? 'confirmation' : 'payments'),
                array('method' => $method['id'])
            );
            $method['img'] = $this->getImage($method['id']);
        }


        $this->context->smarty->assign(array(
            'payment_methods' => $payment_methods,
            'mk_ajax_url' => $this->context->link->getModuleLink('mkbillingapi', 'ajax')
        ));

        $newOption = new PaymentOption();
        $newOption->setCallToActionText($this->l('Pay Makecommerce'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
            ->setAdditionalInformation($this->context->smarty->fetch('module:mkbillingapi/views/templates/hook/payments.tpl'));
        $payment_options = [
            $newOption,
        ];

        return $payment_options;

    }

    public function getCustomerIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    public function hookDisplayPaymentReturn($params)
    {
        $order = $params['objOrder'];

        if ($order->hasBeenPaid())
        {
            $status = 'ok';
        }
        else
        {
            $status = 'error';
        }

        $this->smarty->assign(array(
            'status' => $status,
            'link_to_trder' => $this->getOrderConfUrl($order)
        ));

        return $this->display(__FILE__, 'paymentReturn.tpl');
    }

    public function getOrderConfUrl($order)
    {
        return $this->context->link->getPageLink(
            'order-confirmation',
            true,
            $order->id_lang,
            array(
                'id_cart' => $order->id_cart,
                'id_module' => $this->module->id,
                'id_order' => $order->id,
                'key' => $order->secure_key
            )
        );
    }
}
