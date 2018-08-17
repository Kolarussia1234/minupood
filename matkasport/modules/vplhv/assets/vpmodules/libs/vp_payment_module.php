<?php
/**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, Pangalingid
*  @copyright 2018 Veebipoed.ee, Pangalingid
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

use Prestashop\PrestaShop\Core\Payment\PaymentOption;

class VPPaymentModule extends PaymentModule
{
    const TEST = 0;
    const LIVE = 1;
    static $jsIsIncluded = false;
    static $cssIsIncluded = false;

    public function __construct()
    {
        $this->bootstrap = true;

        parent::__construct();
        
        $this->tab = 'payments_gateways';
        $this->currencies = true;
        $this->currencies_mode = 'checkbox';
        $this->version = '1.0.0';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->author = 'Veebipoed.ee';
    }

    public function getParams()
    {
        return array('private_key', 'public_key', 'private_key_pass', 'SNDID');
    }

    public function getBanks()
    {
        return array('vpseb', 'vpswed', 'vpnordea', 'vplhv', 'vpdanske', 'vpcoop');
    }

    /**
     * Mail variables getter
     * @return array Mail variables
     */
    public function getMailVars()
    {
        return array(
            '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
            '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS')),
            '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS'))
        );
    }

    /**
     * install
     * @return true true, if successful
     */
    public function install()
    {
        if(!$this->installMainModule() ||
        !parent::install() ||
        !$this->registerHook('paymentOptions') ||
        !$this->registerHook('paymentReturn') ||
        !$this->registerHook('displayHeader') ||
        !$this->createOrderState() ||
        !$this->createVariables())
        {
            return false;
        } else {
            return true;
        }
    }

    /**
     * uninstall
     * @return boolean	true, if successful
     */
    public function uninstall()
    {
        if(!parent::uninstall() ||
        !$this->unregisterHook('paymentOptions') ||
        !$this->unregisterHook('paymentReturn') ||
        !$this->unregisterHook('displayHeader') ||
        !$this->deleteOrderState() ||
        !$this->deleteVariables() ||
        !$this->uninstallMainModule())
        {
            return false;
        } else {
            return true;
        }
    }

    /**
     * padding function
     * @param  string $string string
     * @return [type]         padded string
     */
    public function padding($string)
    {
        if($this->getEncoding())
        {
            return str_pad(mb_strlen($string, $this->getEncoding()), 3, '0', STR_PAD_LEFT);
        }
        else
        {
            return str_pad(mb_strlen($string), 3, '0', STR_PAD_LEFT); //mb_strlen SEB-l, aga teistel?
        }
    }

    /**
     * Encoding
     * @return Mixed 	if encoding is set, then encoding
     */
    public function getEncoding()
    {
        return false;
    }

    /**
     * Paymentreturn hook
     * @param  array $params 	params
     * @return string 			html
     */
    public function hookPaymentReturn($params)
    {
        $status = '';
        $order = $params['order'];
        $state = $order->getCurrentState();
                
        if ($state == _PS_OS_PAYMENT_ ) {
            $status = 'ok';
        } else {
            $status = 'error';
        }

        $this->context->smarty->assign(array(
            'status' => $status,
            'linkToOrder' => $this->getOrderLink($order),
        ));
        
        return $this->context->smarty->fetch('module:vpmodules/views/templates/hook/paymentReturn.tpl');
    }

    /**
     * Module configuration page
     * @return string 	confuration page html
     */
    public function getContent()
    {
        $html = '';
        if (Tools::isSubmit('submit'.$this->name))
        {
            foreach ($this->getParams() as $param)
            {
                Configuration::updateValue($this->prefixed($param), Tools::getValue($param));
            }
//Add another bank if here START
    //S.e.b START
            if ($this->name == 'vpseb') {
                Configuration::updateValue($this->prefixed('server'), Tools::getValue('server'));
                $this->bank_url = $this->getSebBankUrl();
            }
//Add another bank if here END
            $html .= $this->displayConfirmation($this->l('Settings updated'));
        }
        $html .= $this->_showForm();

        return $html;
    }

    /**
     * Form generation
     * @return string 	form html
     */
    private function _showForm()
    {		
        $field_values = array();
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper = new HelperForm();

        $boolean = array(
            array(
            'id' => 'active_on',
            'value' => 1,
            'label' => $this->l('Enabled')
            ),
            array(
            'id' => 'active_off',
            'value' => 0,
            'label' => $this->l('Disabled')
            )
        );
        
        $options = array(
            array('id'=> self::TEST, 'name' => $this->l('Test server')),
            array('id'=> self::LIVE, 'name' => $this->l('Live server')),
        );
// Add another bank input here - Start
    //S.E.B Start
        $inputSeb = array(
            'type' => 'select',
            'label' => $this->l('Server'),
            'name' => 'server',
            'required' => true,
            'lang' => false,
            'options' => array(
                'query' => $options,
                'id' => 'id',
                'name' => 'name',
            ),
        );
// Add another bank input here - End
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('SND ID'),
                    'name' => 'SNDID',
                    'required' => true,
                    'lang' => false
                ),
                array(
                    'type' => 'textarea',
                    'rows' => 10,
                    'cols' => 100,
                    'label' => $this->l('Public key'),
                    'name' => 'public_key',
                    'required' => true,
                    'lang' => false
                ),
                array(
                    'type' => 'textarea',
                    'rows' => 10,
                    'cols' => 100,
                    'label' => $this->l('Private key'),
                    'name' => 'private_key',
                    'required' => true,
                    'lang' => false
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Private key password'),
                    'name' => 'private_key_pass',
                    'required' => false,
                    'lang' => false
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
// Add another bank if here START
    //S.E.B Start
        if ($this->name == 'vpseb') {
            array_unshift($fields_form[0]['form']['input'], $inputSeb);
        }
// Add another bank if here END
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        $helper->languages = Language::getLanguages(false);
        foreach ($helper->languages as $k => $language)
            $helper->languages[$k]['is_default'] = (int)($language['id_lang'] == $helper->default_form_language);

        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
            array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules'),
            ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );
// Add another bank if here START
    //S.E.B Start
        if ($this->name == 'vpseb') {
            $field_values['server'] = Configuration::get($this->prefixed('server'));
        }
// Add another bank if here END		
        foreach ($this->getParams() as $param) {
            $field_values[$param] = Configuration::get($this->prefixed($param));
        }

        $helper->fields_value = $field_values;

        return $helper->generateForm($fields_form);
    }

    /**
     * Payment hook
     * @param  Array 	$params params
     * @return string 			payment template
     */
    public function hookPaymentOptions($params)
    {
        $href = $this->context->link->getModuleLink('vpmodules', 'confirmation', array(), true);
        
        $enabledBanks = $this->getEnabledBanks();
        $minId = min($enabledBanks);
        if (is_int($minId) && (int)$this->id == $minId) {
            $paymentOptions = [
                $this->getBanklinksFormOption($href),
            ];
            return $paymentOptions;
        }
        return array();
    }
    
    public function getEnabledBanks()
    {
        $enabledPayments = array();
        $banks = $this->getBanks();
        foreach ($banks as $bank) {
            if (Module::isEnabled($bank)) {
                $enabledPayments[] = (int)Module::getModuleIdByName($bank);
            }
        }
        return $enabledPayments;
    }
    
    /**
     * Get payment option via banklinks
     * @param	string	$url confirmation link
     * @return 	object        	Payment Option
     */
    public function getBanklinksFormOption($url)
    {
        $banklinksOption = new PaymentOption();
        $banklinksOption->setCallToActionText($this->l('Pay by banklink', array(), 'vpmodules'))
                    ->setForm($this->generateBanklinksForm($url))
                    ->setAdditionalInformation($this->fetch('module:vpmodules/views/templates/hook/info.tpl'));
        return $banklinksOption;
    }

    /**
     * Media hook (for js/css)
     * @param  Array $params params
     * @return nothing
     */
    public function hookDisplayHeader($params)
    {
        if (self::$jsIsIncluded) {
            $this->context->controller->registerJavascript(
                $this->name . 'js',
                'modules/vpmodules/views/js/vppaymentmodule.js',
                array()
            );
        }
        if (self::$cssIsIncluded) {
            $this->context->controller->registerStylesheet(
                $this->name . 'css',
                'modules/vpmodules/views/css/vppaymentmodule.css',
                array()
            );
        }
    }
    
    /**
     * Create config variables
     * @return boolean	true if successful
     */
    public function createVariables()
    {
        if (!$this->updateConfig('private_key', '') ||
            !$this->updateConfig('public_key', '') ||
            !$this->updateConfig('private_key_pass', '') ||
            !$this->updateConfig('SNDID', '') ||
            !$this->addModToConfig((int)$this->id)) {
            return false;
        } else {
            return true;
        }
    }
    
    public function deleteVariables()
    {
        if (!$this->deleteConfig('private_key') ||
            !$this->deleteConfig('public_key') ||
            !$this->deleteConfig('private_key_pass') ||
            !$this->deleteConfig('SNDID') ||
            !$this->deleteModFromConfig((int)$this->id)) {
            return false;
        } else {
            return true;
        }
    }


    public function getStatusName()
    {
        return 'PS_OS_'.$this->payment_name;
    }

    /**
     * Validate order
     * @return Order Current order object
     */
    public function confirmOrder()
    {
        $mailVars = $this->getMailVars();
        $this->validateOrder(
            $this->context->cart->id,
            Configuration::get($this->getStatusName()),
            $this->context->cart->getOrderTotal(),
            $this->displayName,
            NULL,
            $mailVars,
            $this->context->cart->id_currency,
            false,
            $this->context->customer->secure_key
        );
        return new Order($this->currentOrder);
    }
    
    /**
     * Create Order State, coping mails and logo
     * @return boolean	true, if successful
     */
    public function createOrderState()
    {	
        $orderStateExist = false;
        $mailCopied = false;
        $logoCopied = false;
        $orderStateId = Configuration::get($this->getStatusName());
        $description = sprintf('Awaiting %s', $this->displayName);
        
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
                Configuration::updateValue($this->getStatusName(), $orderStateId);
                $orderStateExist = true;
            }
        }
            
        if (!$orderStateExist) {
            $languages = Language::getLanguages(false);
            $orderState = new OrderState();
            foreach ($languages as $lang) {
                $orderState->name[$lang['id_lang']] = $description;
            }
            $orderState->send_email = 1;
            $orderState->invoice = 1;
            $orderState->color = "lightblue";
            $orderState->unremovable = 0;
            $orderState->logable = 0;
            $orderState->delivery = 0;
            $orderState->hidden = 0;
            $orderState->template = 'bankwire';
            if ($orderState->add()) {
                Configuration::updateValue($this->getStatusName(), $orderState->id);
                $orderStateExist = true;
            }
        }

        $file = $this->getLocalPath().'logo.png';
        $newfile = _PS_IMG_DIR_.'os/' . $orderState->id . '.png';

        $logoCopied = (is_file($newfile) || (!is_file($newfile) && copy($file, $newfile)));

            
        return ($orderStateExist);
    }
    
    public function deleteOrderState()
    {
        return true;
    }
    
    /**
     * Get order tracking url for customer
     * @param 	Order 	$order 	Order object
     * @return 	string        	tracking url
     */
    public function getOrderLink($order) {
        $customer = new Customer($order->id_customer);
        
        if ($customer->isGuest()) {
            $orderLink = $this->context->link->getPageLink(
                'guest-tracking',
                null,
                null,
                'order_reference='.$order->reference.'&email='.$customer->email.'&submitGuestTracking=1');
        } else {
            $orderLink = $this->context->link->getPageLink('order-detail',
                null,
                null,
                'id_order='.$order->id);
        }
        return $orderLink;
    }

    public function installMainModule()
    {
        if (file_exists(_PS_MODULE_DIR_ . 'vpmodules/libs/vp_payment_module.php')) {
            if (!Module::isInstalled('vpmodules')) {
                $mainModule = Module::getInstanceByName('vpmodules');
                $modInstall = $mainModule->install();
            }
            return true;
        } else {
            $this->recurse_copy(_PS_MODULE_DIR_ . $this->name . '/assets/vpmodules/',_PS_MODULE_DIR_ .'vpmodules/');
            $mainModule = Module::getInstanceByName('vpmodules');
            $modInstall = $mainModule->install();
            if (file_exists(_PS_MODULE_DIR_ . 'vpmodules/libs/vp_payment_module.php')) {
                return true;
            }
            return false;
        }
    }
    
    public function uninstallMainModule()
    {
        $countMods = $this->getModsCount();
        // At least one more vp banklink is installed
        if ($countMods !== 0) {
            return true;
        } else {
            $mainModule = Module::getInstanceByName('vpmodules');
            return ($mainModule->uninstall());
        }
    }

    public function getModsCount()
    {
        $conf = $this->getPaymentConfig('VP_ACTIVE_PAYMENTS');
        if (!$conf || count($conf) == 0) {
            return 0;
        }
        return (int)count($conf);
    }

    public function recurse_copy($src,$dst)
    {
        $dir = opendir($src);
        @mkdir($dst, 0755);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file))
                {
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file);
                } else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    /**
     * Generating MAC code
     * @param  	Array 	$source data for MAC calculating
     * @param 	int 	$server Test or live server
     * @return	string 			MAC code
     */
    public function generateMAC(Array $source)
    {
        $data = '';
        foreach ($source as $label) {
            $data .= $this->padding($label) . $label;
        }
        $privKey = openssl_get_privatekey(
            $this->getConfig('private_key'),
            $this->getConfig('private_key_pass')
        );
        if (!$privKey) { 
            $this->context->smarty->assign(array('keyError' => sprintf($this->l('There is an error with %s Modules private key. Please contact the shops/servers administrator.'), $this->displayName)));
            return 0;
        }
        openssl_sign($data, $signature, $privKey);
        $VK_MAC = base64_encode($signature);
        openssl_free_key($privKey);
        
        return $VK_MAC;
    }

    /**
    * Prefixed keys
    * @param  string $key key
    * @return string      prefixed key
    */
    public function prefixed($key)
    {
        return Tools::strtoupper($this->name.'_'.$key);
    }

    /**
    * get config variables
    * @param  string 	$key    key
    * @return Mixed    Config parameter
    */
    public function getConfig($key)
    {
        return Configuration::get($this->prefixed($key));
    }

    /**
    * update config variables
    * @param  string 	$key    key
    * @param  string 	$value   mixed
    * @param  bool 	$allow_html
    */
    public function updateConfig($key, $value, $allow_html = false)
    {
        return Configuration::updateValue($this->prefixed($key), $value, $allow_html);
    }
    
    public function deleteConfig($var)
    {
        return Configuration::deleteByName($this->prefixed($var));
    }
    
    public function addModToConfig($idMod)
    {
        if (!isset($idMod)) {
            return false;
        }
        
        $key = 'VP_ACTIVE_PAYMENTS';
        $paymentsArray = $this->getPaymentConfig($key);
        
        if (!$paymentsArray) {
            return $this->setPaymentConfig($key, array($idMod));
        } else {
            if (!in_array($idMod, $paymentsArray)) {
                $paymentsArray[] = $idMod;
                return $this->setPaymentConfig($key, $paymentsArray);
            } else {
                return true;
            }
        }
    }
    
    public function deleteModFromConfig($idMod)
    {
        if (!isset($idMod)) {
            return false;
        }
        
        $key = 'VP_ACTIVE_PAYMENTS';
        $paymentsArray = $this->getPaymentConfig($key);
        
        if (!$paymentsArray || !in_array($idMod, $paymentsArray)) {
            return true;
        } 
        else if (count($paymentsArray) <= 1) {
            return Configuration::deleteByName($key);
        } else {
            $arrayKey = array_search($idMod, $paymentsArray);
            unset($paymentsArray[$arrayKey]);
            $paymentsArray = array_values($paymentsArray);
            return $this->setPaymentConfig($key, $paymentsArray);
        }
    }
    
    public function getPaymentConfig($key)
    {
        $paymentsArray = unserialize(Configuration::get($key));
        if (!is_array($paymentsArray)) {
            return false;
        }
        return $paymentsArray;
    }
    
    public function setPaymentConfig($key, $value)
    {
        if (!is_array($value)) {
            return false;
        }
        $paymentsSerial = serialize($value);
        return Configuration::updateValue($key, $paymentsSerial);
    }

    public function generateBanklinksForm($url)
    {
        $banksArray = $this->getBanksInfo();
        $this->context->smarty->assign(
            array(
                'action' => $url,
                'banks_info' => $banksArray,
                'dir_logos' => _MODULE_DIR_ . 'vpmodules/views/img/',
            )
        );
    
        return $this->context->smarty->fetch('module:vpmodules/views/templates/hook/payments.tpl');
    }
    
    public function getBanksInfo()
    {
        $idArray = $this->getPaymentConfig('VP_ACTIVE_PAYMENTS');
        $banks = $this->getBanks();
        $info = array();
        
        foreach ($banks as $bank) {
            if (!Module::isInstalled($bank) || !Module::isEnabled($bank)) {
                continue;
            }
            $newInstance = Module::getInstanceByName($bank);
            if (in_array($newInstance->id, $idArray)) {
                $info[] = array(
                    'vp_name' => $newInstance->name,
                    'payment_name' => $newInstance->displayName,
                    'bank_url' => $newInstance->bank_url,
                );
            }
        }
        return $info;
    }

    public function getFormFields($order)
    {

        $currency = CurrencyCore::getCurrency($order->id_currency);
        $datetime = new DateTime();

        $VK['VK_SERVICE'] = '1012';
        $VK['VK_VERSION'] = '008';
        $VK['VK_SND_ID'] = $this->getConfig('sndid');
        $VK['VK_STAMP'] = $order->id;
        $VK['VK_AMOUNT'] = Tools::ps_round($order->total_paid, 2);
        $VK['VK_CURR'] = $currency['iso_code'];
        $VK['VK_REF'] = '';
        $VK['VK_MSG'] = $this->l('Order ') . $order->id;
        $VK['VK_RETURN'] = $this->context->link->getModuleLink('vpmodules', 'val', array(), true);
        $VK['VK_CANCEL'] = $VK['VK_RETURN'];
        $VK['VK_DATETIME'] = $datetime->format(DateTime::ISO8601);
        $VK['VK_MAC'] = $this->generateMAC($VK);
        $VK['VK_ENCODING'] = 'UTF-8';
        $VK['VK_LANG'] = 'EST';

        return $VK;
    }
}