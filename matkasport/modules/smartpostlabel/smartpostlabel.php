<?php

if (!defined('_PS_VERSION_'))
    exit;

include dirname(__FILE__).'/classes/AddressParser.php';
//include dirname(__FILE__).'/classes/SmartPostApi.php';
include dirname(__FILE__).'/classes/NewSmartPostApi.php';
include dirname(__FILE__).'/classes/Flash.php';

// @TODO autoloader
include dirname(__FILE__).'/classes/CarrierServiceInterface.php';
include dirname(__FILE__).'/classes/FiSmartpostCarrierService.php';
include dirname(__FILE__).'/classes/FixedCarrierService.php';
include dirname(__FILE__).'/classes/SmartCarrierService.php';
include dirname(__FILE__).'/classes/SmartPostCarrierService.php';

/**
 * @TODO refactor, when PS has a better structure (autoloading mostly)
 * Move carrier specific login into services
 * Database interaction shoul'd be in separate class
 * Create logging class ??? it is only one function, but maybe
 * Helper class(es) ?
 */
class SmartpostLabel extends Module
{
    const SMARTPOST_MODULE_NAME = 'vp_smartpost';
    const SMARTCARRIER_MODULE_NAME = 'smartcarrier';
    const FISMARTPOST_MODULE_NAME = 'fismartpost';

    const EST_ISO_CODE = 'EE';
    const fI_ISO_CODE = 'FI';

    const LOG = true;
    const LOG_FILE = 'log/log.txt';

    private static $_api = null;
    private $flash = null;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->name = 'smartpostlabel';
        $this->tab = 'shipping_logistics';
        $this->version = '1.1.4';
        $this->author = 'Veebipoed.ee';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Smartpost labels');
        $this->description = $this->l('Module for getting smartpost labels automatically after payment accepted status');
    }

    public function install()
    {
        if(
            !parent::install() OR
            !$this->registerHook('actionPaymentConfirmation') OR
            !$this->registerHook('displayAdminOrder')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall() {
        if (
            !parent::uninstall() OR
            !$this->unregisterHook('actionPaymentConfirmation') OR
            !$this->unregisterHook('displayAdminOrder')
        )
            return false;
        return true;
    }

    public function hookActionPaymentConfirmation($params)
    {
        $order = new Order((int)$params['id_order']);
        $carrier = new Carrier($order->id_carrier);

        switch ($carrier->external_module_name) {
            case self::SMARTCARRIER_MODULE_NAME:
                $service = new SmartCarrierService();
                break;

            case self::SMARTPOST_MODULE_NAME:
                $service = new SmartPostCarrierService();
                break;

            case self::FISMARTPOST_MODULE_NAME:
                $service = new FiSmartpostCarrierService();
                break;
        }

        if (isset($service)) {
            $this->sendOrder($order, $service);
        }
    }

    public function sendOrder(Order $order, CarrierSeriveInterface $service)
    {
        $order_carrier = new OrderCarrier($order->getIdOrderCarrier());

        if (Validate::isLoadedObject($order_carrier) && !empty($order_carrier->tracking_number)) {
            return false;
        }

        $carrier = new Carrier($order->id_carrier);
        $api = $this->getSmartPostApi();
        $flash = $this->getFlash();
        if (!is_null($api) && $this->isAffectedCarrier($carrier)) {
            $customer = new Customer($order->id_customer);
            $address = new Address($order->id_address_delivery);

            $data = new SimpleXMLElement('<orders></orders>');

            $item = $data->addChild('item');
            $item->addChild('reference', $order->id);

            $recipient = $item->addChild('recipient');
            $recipient->addChild('name', $customer->firstname . ' ' . $customer->lastname);
            $recipient->addChild('phone', $this->getPhoneFromAddress($address));
            $recipient->addChild('email', $customer->email);

            $destination = $item->addChild('destination');
            $success = $service->setAddressInfo($destination, $order);

            if ($success) {
                $additionalservices = $item->addChild('additionalservices');
                $additionalservices->addChild('express', false);
                $additionalservices->addChild('idcheck', false);
                $additionalservices->addChild('agecheck', false);
                //$additionalservices->addChild('notifyemail', $customer->email);
                //$additionalservices->addChild('notifyphone', $this->getPhoneFromAddress($address));
                $additionalservices->addChild('paidbyrecipient', false);

                $this->writeLog('-------- REQUEST START --------');
                $this->writeLog($data->asXML());
                $result = $api->sendOrderData($data);
                $this->writeLog(Tools::jsonEncode($result));
                $this->writeLog('-------- REQUEST END --------');

                if (!$result['error']) {
                    $barcode = (string)$result['data']->item->barcode;
                    $order_carrier->tracking_number = $barcode;
                    $order_carrier->update();

                    $templateVars = array(
                        '{followup}' => str_replace('@', $barcode, $carrier->url),
                        '{firstname}' => $customer->firstname,
                        '{lastname}' => $customer->lastname,
                        '{id_order}' => $order->id,
                        '{shipping_number}' => $barcode,
                        '{order_name}' => $order->getUniqReference()
                    );

                    if (Mail::Send(
                        (int)$order->id_lang,
                        'in_transit',
                        Mail::l('Package in transit', (int)$order->id_lang),
                        $templateVars,
                        $customer->email,
                        $customer->firstname.' '.$customer->lastname,
                        null,
                        null,
                        null,
                        null,
                        _PS_MAIL_DIR_,
                        true,
                        (int)$order->id_shop
                    )) {
                        Hook::exec(
                            'actionAdminOrdersTrackingNumberUpdate',
                            array(
                                'order' => $order,
                                'customer' => $customer,
                                'carrier' => $carrier
                            ),
                            null,
                            false,
                            true,
                            false,
                            $order->id_shop
                        );
                        $flash->store('success', $this->l('Order successfully sent to smartport service'));
                    } else {
                        $errors = $this->l('Could not send email !');
                    }
                } else {
                    $errors = $result['data'];
                }
            } else {
                 $errors = $this->l("Couldn't find carrier data");
            }
        }

        if (isset($errors)) {
            $flash->store('errors', $errors);
        }
    }
    private function setSuccess($message)
    {
        if (!$this->context->controller instanceof AdminOrdersController) {
            return;
        }

        $this->context->controller->confirmations[] = $message;
    }

    private function setErrors($errors)
    {
        if (!$this->context->controller instanceof AdminOrdersController) {
            return;
        }

        if (is_array($errors)) {
            $this->context->controller->errors = array_merge(
                $this->context->controller->errors,
                $errors
            );
        } elseif (Validate::isString($errors)) {
            $this->context->controller->errors[] = $errors;
        } else {
            $this->context->controller->errors[] = $this->l('Something went wrong while sending smartpost data');
        }
    }

    private function getPhoneFromAddress(Address $address)
    {
        $phone = ($address->phone_mobile ? $address->phone_mobile : $address->phone);
        $add_zeros = (Tools::strpos($phone, '+') === 0);
        $phone = ltrim($phone, '+');

        /* Only for finnish stores
        if (Tools::strpos($phone, '358') !== 0) {
            $phone = '358'.$phone;
        }
        */

        if ($add_zeros) {
            $phone = '00'.$phone;
        }

        return $phone;
    }

    private function orderIdToBardcode($id_order)
    {
        return $this->getConfig('profile') . str_pad($id_order, 10, "0", STR_PAD_LEFT);
    }

    private function barcodeToOrderId($barcode)
    {
        return (int)substr($barcode, -10);
    }

    public function getSmartPostApi($username = false, $password = false)
    {
        if (is_null(self::$_api)) {
            if (empty($username) || empty($password)) {
                $username = $this->getConfig('username');
                $password = $this->getConfig('password');
            }

            if (!empty($username) && !empty($password)) {
                self::$_api = new NewSmartPostApi($username, $password, $this);
            }
        }

        return self::$_api;
    }

    private function isAffectedCarrier($carrier)
    {
        return (
            $carrier->is_module && (
                $carrier->external_module_name == self::SMARTPOST_MODULE_NAME ||
                $carrier->external_module_name == self::SMARTCARRIER_MODULE_NAME ||
                $carrier->external_module_name == self::FISMARTPOST_MODULE_NAME
            )
        );
    }

    public function hookDisplayAdminOrder($params)
    {
        $flash = $this->getFlash();

        $success = $flash->get('success');
        $errors = $flash->get('errors');
        if (false !== $success) {
            $this->setSuccess($success);
        } elseif (false !== $errors) {
            $this->setErrors($errors);
        }

        $order = new Order($params['id_order']);
        $carrier = new Carrier($order->id_carrier);
        $api = $this->getSmartPostApi();
        $tpl = ''; 
        
        if (!is_null($api) && $this->isAffectedCarrier($carrier) && $order->hasBeenPaid()) {
            $shipping = $order->getShipping();
        }

        if (
            $carrier->external_module_name == self::SMARTCARRIER_MODULE_NAME &&
            (empty($shipping) || empty($shipping[0]['tracking_number']))
        ) {
            $address = new Address((int)$order->id_address_delivery);
            $addressParser = new AddressParser();
            $addressParser->parseObject($address);

            if (Tools::isSubmit('submitSmartCarrier')) {
                $service = new FixedCarrierService();
                $service->setStreet(Tools::getValue('street'))
                    ->setHouse(Tools::getValue('house'))
                    ->setApartment(Tools::getValue('apartment'));
                $this->sendOrder($order, $service);
            }

            $this->smarty->assign(array(
                'id_order' => $order->id,
                'parsed_address' => $addressParser->getAddress(),
            ));
            $tpl .= $this->display(__FILE__, 'smartcarrier_form.tpl');
        }

        if (!empty($shipping) && !empty($shipping[0]['tracking_number'])) {
            $url = $this->context->link->getModuleLink($this->name, 'pdf', array('barcode' => $shipping[0]['tracking_number']));
            $this->smarty->assign('url', $url);
            $tpl .= $this->display(__FILE__, 'label.tpl');
        }

        return $tpl;
    }

    public function getConfig($key)
    {
        return Configuration::get($this->prefixedKey($key));
    }

    public function updateConfig($key, $value, $allow_html = false)
    {
        return Configuration::updateValue($this->prefixedKey($key), $value, $allow_html);
    }

    private function prefixedKey($key)
    {
        return strtoupper($this->name.'_'.$key);
    }

    public function displayForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $order_states = OrderState::getOrderStates($default_lang);

        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Username'),
                    'name' =>  'username',
                    'size' => 30,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Password'),
                    'name' => 'password',
                    'size' => 30,
                    'required' => true
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Package out of terminal status'),
                    'name' => 'terminal_state',
                    'required' => true,
                    'options' => array(
                        'query' => $order_states,
                        'id' => 'id_order_state',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Package delivered status'),
                    'name' => 'shipped_state',
                    'required' => true,
                    'options' => array(
                        'query' => $order_states,
                        'id' => 'id_order_state',
                        'name' => 'name'
                    )
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $helper = new HelperForm();

        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure=' . $this->name;

        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit' . $this->name;
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

        $fields = array('username', 'password', 'shipped_state', 'terminal_state');
        foreach ($fields as $field) {
            $helper->fields_value[$field] = (Tools::getIsset($field) ? Tools::getValue($field) : $this->getConfig($field));
        }

        return $helper->generateForm($fields_form);
    }

    public function writeLog($content)
    {
        if (self::LOG !== true) {
            return;
        }

        $file = fopen($this->local_path.self::LOG_FILE, 'a');
        if ($file) {
            $content = sprintf('[%s] - ', date('Y-m-d H:i:s')).$content;
            fwrite($file, $content."\n");
            fclose($file);
        }
    }

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit'.$this->name)) {
            $username = strval(Tools::getValue('username'));
            $password = strval(Tools::getValue('password'));
            $this->updateConfig('shipped_state', (int)Tools::getValue('shipped_state'));
            $this->updateConfig('terminal_state', (int)Tools::getValue('terminal_state'));
            $api = $this->getSmartPostApi($username, $password);

            if (is_null($api)) {
                $output .= $this->displayError($this->l('Invalid Configuration value'));
            } else {
                $this->updateConfig('username', $username);
                $this->updateConfig('password', $password);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        return $output . $this->displayForm();
    }

    public function getFlash()
    {
        if (null === $this->flash) {
            $this->flash = new Flash();
        }

        return $this->flash;
    }
}
