<?php
/**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, EveryPay
*  @copyright 2015 Veebipoed.ee, EveryPay
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class EveryPay extends PaymentModule
{
    const ORDER_BEFORE = 'before';
    const ORDER_AFTER = 'after';
    
    const RETURN_SUCCESS = 'completed';
    const RETURN_CANCEL = 'cancelled';
    
    const DOC_VERSION = '1.1';

    public function __construct()
    {
        $this->name = 'everypay';
        $this->tab = 'payments_gateways';
        $this->author = 'Veebipoed.ee';
        $this->version = '1.1.9';
        $this->is_eu_compatible = 1;
        $this->bootstrap = true;
        $this->controllers = array('mycards');
        $this->displayName = $this->l('EveryPay');
        $this->description = $this->l('Accept payments via EveryPay card service.');
        $this->confirmUninstall = $this->l('Are you sure to uninstall EveryPay?');
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
        $this->module_key = 'db60dd5f7405f17e07daff841db0bb14';
        parent::__construct();
    }

    public function install()
    {
        if (!Configuration::get($this->formatName('demo_url'))) {
            Configuration::updateValue($this->formatName('demo_url'), 'https://igw-demo.every-pay.com/transactions/');
        }
        if (!Configuration::get($this->formatName('production_url'))) {
            Configuration::updateValue($this->formatName('production_url'), 'https://pay.every-pay.eu/transactions/');
        }
        if (!Configuration::get($this->formatName('create_order'))) {
            Configuration::updateValue($this->formatName('create_order'), 'before');
        }
        $sql= "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."everypay_cards`(
        `id_card` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        `card_no` VARCHAR(6) NOT NULL,
        `card_exp_year` VARCHAR(6) NOT NULL,
        `card_exp_month` VARCHAR(6) NOT NULL,
        `card_type` varchar(100) NOT NULL,
        `id_customer` int(11) NOT NULL,
        `token` VARCHAR(256) NOT NULL,
        `is_default` TINYINT(4) NOT NULL,
        `date_added` date NOT NULL
        )";
       
        Db::getInstance()->Execute($sql);
        return
            parent::install() &&
            $this->registerHook('paymentOptions') &&
            $this->registerHook('paymentReturn') &&
            $this->registerHook('header') &&
            $this->registerHook('customerAccount') &&
            $this->registerHook('displayMyAccountBlock') &&
            $this->createOrderState();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function getContent()
    {
        $output = '';
        $output .= $this->displayInfo();
        $output .= $this->postProcess();
        $output .= $this->displayForm();
        return $output;
    }

    protected function postProcess()
    {
        if (Tools::isSubmit('submitAddconfiguration')) {
            Configuration::updateValue($this->formatName('test_api_username'), Tools::getValue('test_api_username'));
            Configuration::updateValue($this->formatName('test_shared_secret'), Tools::getValue('test_shared_secret'));
            Configuration::updateValue($this->formatName('api_username'), Tools::getValue('api_username'));
            Configuration::updateValue($this->formatName('account_id'), Tools::getValue('account_id'));
            Configuration::updateValue($this->formatName('shared_secret'), Tools::getValue('shared_secret'));
            Configuration::updateValue($this->formatName('create_order'), Tools::getValue('create_order'));
            Configuration::updateValue($this->formatName('live_mode'), Tools::getValue('live_mode'));
            Configuration::updateValue($this->formatName('payment_method'), Tools::getValue('payment_method'));
            Configuration::updateValue($this->formatName('iframe_skin'), Tools::getValue('iframe_skin'));
            Configuration::updateValue($this->formatName('token_payment'), Tools::getValue('token_payment'));
            $descriptions = array();
            foreach (Language::getLanguages(false) as $language) {
                $descriptions[$language['id_lang']] = Tools::getValue('description_'.$language['id_lang']);
            }
            Configuration::updateValue($this->formatName('description'), $descriptions, true);
        }
    }

    public function displayInfo()
    {
        $v = self::DOC_VERSION;
        $this->smarty->assign(array(
            'path' => $this->getPathUri(),
            'everypay_link' => 'https://every-pay.com/',
            'everypay_doc' => 'https://every-pay.com/wp-content/uploads/PrestaShop-EveryPay-module-v'.$v.'.pdf',
        ));
        if (Tools::version_compare(_PS_VERSION_, '1.6', '>')) {
            return $this->fetch('module:everypay/views/templates/hook/info.tpl');
        } else {
            return $this->display(__FILE__, 'info_15.tpl');
        }
    }

    public function displayForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $payment_method = array();
        $payment_method[] = array('value' => 'iframe',
            'label' => $this->l('Embedded iFrame maksevorm'),
            'id' => 'payment_method_iframe');
        $payment_method[] = array('value' => 'redirect',
            'label' => $this->l('Edasisuunamine (redirect) makselehele'),
            'id' => 'payment_method_redirect');
        $fields_form = array(array(
            'form' => array(
                'legend' => array('title' => $this->l('Settings')),
                'input' => array(
                    array(
                        'type'     => 'radio',
                        'label'    => $this->l('Live Mode'),
                        'name'     => 'live_mode',
                        'required' => true,
                        'class'    => 't',
                        'values'   => array(
                            array('value' => 1, 'label' => $this->l('On'), 'id' => 'live_mode_on'),
                            array('value' => 0, 'label' => $this->l('Off'), 'id' => 'live_mode_off')
                        )
                    ),
                    array(
                        'type'     => 'radio',
                        'label'    => $this->l('Token payments'),
                        'name'     => 'token_payment',
                        'required' => true,
                        'class'    => 't',
                        'values'   => array(
                            array('value' => 1, 'label' => $this->l('On'), 'id' => 'token_payments_on'),
                            array('value' => 0, 'label' => $this->l('Off'), 'id' => 'token_payments_off')
                        )
                    ),
                    array(
                        'type'     => 'select',
                        'label'    => $this->l('Payment form type'),
                        'name'     => 'payment_method',
                        'required' => true,
                        'class'    => 't',
                        'options'   => array(
                            "query" => $payment_method,
                            "id"    => "value",
                            "name"  => "label"
                        )
                    ),
                    array(
                        'type'     => 'text',
                        'label'    => $this->l('iFrame skin'),
                        'name'     => 'iframe_skin',
                        'required' => false,
                        'class'    => 't',
                        'default'  => 'default',
                        'desc'     => $this->l('Appearance of the payment form can be customized in
                        EveryPay Merchant Portal, under "Settings" > "iFrame skins".')
                    ),
                    array(
                        'type'     => 'radio',
                        'label'    => $this->l('Create order'),
                        'name'     => 'create_order',
                        'required' => true,
                        'class'    => 't',
                        'desc'     => $this->l('create_order_desc'),
                        'values'   => array(
                            array(
                                'value' => 'before',
                                'label' => $this->l('Before payment'),
                                'id'    => 'everypay_order_before'
                            ),
                            array(
                                'value' => 'after',
                                'label' => $this->l('After payment'),
                                'id'    => 'everypay_order_after'
                            )
                        ),
                        'form_group_class' => 'hidden',
                    ),
                    array(
                        'type'     => 'textarea',
                        'label'    => $this->l('Description'),
                        'name'     => 'description',
                        'class'    => 'rte',
                        'autoload_rte' => true,
                        'lang'     => true,
                        'desc'     => $this->l('This controls the description which the user sees during checkout.')
                    ),
                    array(
                        'type'     => 'text',
                        'label'    => $this->l('Processing Account'),
                        'name'     => 'account_id',
                        'size'     => 50,
                        'required' => true,
                        'desc'     => $this->l('account_id_desc')
                    ),
                    array(
                        'type'     => 'text',
                        'label'    => $this->l('API Username'),
                        'name'     => 'api_username',
                        'size'     => 50,
                        'required' => true,
                        'desc'     => $this->l('api_username_desc')
                    ),
                    array(
                        'type'     => 'text',
                        'label'    => $this->l('Shared Secret'),
                        'name'     => 'shared_secret',
                        'size'     => 50,
                        'required' => true,
                        'desc'     => $this->l('shared_secret_desc'),
                    ),
                    array(
                        'type'     => 'text',
                        'label'    => $this->l('Test API Username'),
                        'name'     => 'test_api_username',
                        'size'     => 50,
                        'desc'     => $this->l('Optional: API username for testing payments.')
                    ),
                    array(
                        'type'     => 'text',
                        'label'    => $this->l('Test Shared secret'),
                        'name'     => 'test_shared_secret',
                        'size'     => 50,
                        'desc'     => $this->l('Optional: API secret for testing payments.')
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            )
        ));
        $helper_form = new HelperForm();
        $helper_form->module = $this;
        $helper_form->name_controller = $this->name;
        $helper_form->token = Tools::getAdminTokenLite('AdminModules');
        $helper_form->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper_form->default_form_language = $default_lang;
        $helper_form->allow_employee_form_lang = $default_lang;
        $helper_form->languages = Language::getLanguages(false);
        foreach ($helper_form->languages as $k => $language) {
            $is_default = (int)($language['id_lang'] == $helper_form->default_form_language);
            $helper_form->languages[$k]['is_default'] = $is_default;
        }
        $helper_form->fields_value['test_api_username'] = Configuration::get($this->formatName('test_api_username'));
        $helper_form->fields_value['test_shared_secret'] = Configuration::get($this->formatName('test_shared_secret'));
        $helper_form->fields_value['description'] = array();
        $helper_form->fields_value['api_username'] = Configuration::get($this->formatName('api_username'));
        $helper_form->fields_value['account_id'] = Configuration::get($this->formatName('account_id'));
        $helper_form->fields_value['shared_secret'] = Configuration::get($this->formatName('shared_secret'));
        $helper_form->fields_value['create_order'] = Configuration::get($this->formatName('create_order'));
        $helper_form->fields_value['live_mode'] = Configuration::get($this->formatName('live_mode'));
        $helper_form->fields_value['token_payment'] = Configuration::get($this->formatName('token_payment'));
        $helper_form->fields_value['payment_method'] = Configuration::get($this->formatName('payment_method'));
        $helper_form->fields_value['iframe_skin'] = Configuration::get($this->formatName('iframe_skin'));
        
        foreach (Language::getLanguages(false) as $language) {
            $helper_form->fields_value['description'][$language['id_lang']] =
                (string)Configuration::get($this->formatName('description'), $language['id_lang']);
        }

        $javascript = "<script>";
        $javascript .= "
        everypayMethodCheck();
        $('#payment_method').attr('onchange', 'everypayMethodCheck()');
        function everypayMethodCheck(){
            if ($('#payment_method').val() === 'iframe'){
                $('#iframe_skin').parent().parent().show();
            }else{
                $('#iframe_skin').parent().parent().hide();
            }
        }
        ";
        $javascript .= "</script>";

        return $helper_form->generateForm($fields_form).$javascript;
    }

    public function formatName($name = '')
    {
        return Tools::strtoupper($this->name.'_'.$name);
    }

    public function getConfig($key)
    {
        return Configuration::get($this->formatName((string)$key));
    }

    public function getEveryPayAPI()
    {
        if (!class_exists('EveryPayLibrary')) {
            include $this->local_path.'lib/everypay_library.php';
        }

        $api = null;
        $live_mode = $this->getConfig('live_mode');
        
        $username = $this->getConfig((!$live_mode ? 'test_' : '').'api_username');
        $secret = $this->getConfig((!$live_mode ? 'test_' : '').'shared_secret');

        if (!empty($username) && !empty($secret)) {
            $api = new EveryPayLibrary();
            $api->init($username, $secret);
        }
        
        return $api;
    }
    /**
     * Create Order State, coping mails and logo
     * @return boolean  true, if successful
     */
    public function createOrderState()
    {
        $orderStateExist = false;
        $status_name = 'PS_OS_EVERYPAY';
        $orderStateId = Configuration::get($status_name);
        $description = sprintf('Awaiting %s payment', $this->displayName);
        if ($orderStateId) {
            $orderState = new OrderState($orderStateId);
            if ($orderState->id && !$orderState->deleted) {
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
                Configuration::updateValue($status_name, $orderStateId);
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
            $orderState->color = "#fde4ba";
            $orderState->unremovable = 0;
            $orderState->logable = 0;
            $orderState->delivery = 0;
            $orderState->hidden = 0;
            if ($orderState->add()) {
                Configuration::updateValue($status_name, $orderState->id);
                $orderStateExist = true;
            }
        }
        $file = $this->getLocalPath().'/views/img/everypay_status.gif';
        $newfile = _PS_IMG_DIR_.'os/' . $orderState->id . '.gif';
        copy($file, $newfile);

        return ($orderStateExist);
    }

    public function getOrderConfUrl($order)
    {
        return $this->context->link->getPageLink(
            'order-confirmation',
            true,
            $order->id_lang,
            array(
                'id_cart' => $order->id_cart,
                'id_module' => $this->id,
                'id_order' => $order->id,
                'key' => $order->secure_key
            )
        );
    }

    //Hooks START
    public function hookHeader($params)
    {
        $this->context->controller->addCSS(($this->_path."views/css/").'everypay.css', 'all');
        $this->context->controller->addJS($this->_path."views/js/everypay.js");
    }

    public function hookCustomerAccount($params)
    {
        $this->context->smarty->assign(array(
            'token_payment' => Configuration::get($this->formatName("token_payment")),
            'logged' => $this->context->customer->isLogged()
        ));
        return $this->fetch('module:everypay/views/templates/hook/everypay-myaccount.tpl');
    }

    public function hookDisplayMyAccountBlock($params)
    {
        return $this->hookCustomerAccount($params);
    }
    //Hooks END
    public function loadStorage()
    {
        if (!class_exists('CardStorageLibrary')) {
            include $this->local_path.'lib/CardStorageLibrary.php';
        }
    }
    // New Payment Option set option visible on front pages START
    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }
        
        if (!$this->checkCurrency($params['cart'])) {
            return;
        }
        
        $cards = array();
        if ($this->context->customer->isLogged()) {
            $this->loadStorage();
            $id_customer = $this->context->customer->id;
            $cards = CardStorageLibrary::getCards($id_customer);
        }

        $payment_method = Configuration::get($this->formatName('payment_method'));
        if ($payment_method == "iframe") {
            $this->context->smarty->assign("cart_id", $params['cart']->id);
            $skin = Configuration::get($this->formatName('iframe_skin'));
            $live = Configuration::get($this->formatName('live_mode'));
            if (empty($skin)) {
                $skin = "default";
            }
            $this->context->smarty->assign(array(
                'shop_url'=>__PS_BASE_URI__,
                'this_path' => $this->getPathUri(),
                'token_payment' => Configuration::get($this->formatName("token_payment")),
                'order_create_method' => Configuration::get($this->formatName("create_order")),
                'payment_link' => Configuration::get($this->formatName(($live == 1 ? "production_url" : "demo_url"))),// @TODO: need production url too
                'cards' => $cards,
                'logged' => $this->context->customer->isLogged()
            ));

            $iframeOption = new PaymentOption();
            $iframeOption
                ->setCallToActionText($this->l('Pay by Card'))
                ->setBinary(true)
                ->setModuleName($this->name)
                ->setForm($this->generateIframe())
                ;
            return [$iframeOption];
        } else{
            $this->context->smarty->assign(array(
                'token_payment' => Configuration::get($this->formatName("token_payment")),
                'this_path' => $this->getPathUri(),
                'payment_link' => $this->context->link->getModuleLink('everypay', 'payment', array(), true),
                'cards' => $cards,
                'logged' => $this->context->customer->isLogged()
            ));
            $redirectOption = new PaymentOption();
            $redirectOption
                ->setCallToActionText($this->l('Pay by Card'))
                ->setForm($this->generateRedirect());
            return [$redirectOption];
        }
    }
    // New Payment Option set option visible on front pages END
    
    // Payment Option inside form - start
    public function generateIframe()
    {
        return $this->context->smarty->fetch('module:everypay/views/templates/hook/payment_iframe.tpl');
    }

    public function generateRedirect()
    {
        return $this->context->smarty->fetch('module:everypay/views/templates/hook/payment_redirect.tpl');
    }
    // Payment Option inside form - end
    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);
        
        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }
    
    public function hookPaymentReturn($params)
    {
        $order = $params['order'];
        if ($params['order']) {
            $this->smarty->assign(array(
                'shop_name' => $this->context->shop->name,
                'total' => Tools::displayPrice(
                    $params['order']->getOrdersTotalPaid()
                ),
                $status = 'ok',
            ));
        } else {
            $status = 'error';
        }

        $orderHistory = $this->context->link->getPageLink(
            'order-detail',
            true,
            $order->id_lang,
            array(
                'id_order' => $order->id
            )
        );

        $this->smarty->assign(array(
            'status' => $status,
            'linkToOrder' => $orderHistory
         ));

        return $this->fetch('module:everypay/views/templates/hook/payment-return.tpl');
    }
}
