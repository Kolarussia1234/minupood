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

class EveryPayValidationModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    public function postProcess()
    {

        $cart = $this->context->cart;
        if ($cart->id_customer == 0 ||
            $cart->id_address_delivery == 0 ||
            $cart->id_address_invoice == 0 ||
            !$this->module->active
        ) {
            Tools::redirect('index.php?controller=order&step=1');
        }
        // Check that this payment option is still available in case the
        // customer changed his address just before the end of the checkout process
        $authorized = false;
        foreach (Module::getPaymentModules() as $module) {
            if ($module['name'] == 'everypay') {
                $authorized = true;
                break;
            }
        }
        if (!$authorized) {
            die($this->module->l('This payment method is not available.', 'validation'));
        }
        $customer = new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }
        if (Configuration::get($this->module->formatName('create_order')) === 'before') {
            $currency = $this->context->currency;
            $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
            $mailVars = array(
                // '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
                // '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS')),
                // '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS'))
            );
            $this->module->validateOrder(
                $cart->id,
                Configuration::get('PS_OS_EVERYPAY'),
                $total,
                $this->module->l('Card payment', 'validation'),
                null,
                $mailVars,
                (int)$currency->id,
                false,
                $customer->secure_key
            );
        }
    }
    public function initContent()
    {
        parent::initContent();

        include $this->module->getLocalPath().'lib/everypay_library.php';
        include $this->module->getLocalPath().'lib/CardStorageLibrary.php';
                
        if (Configuration::get($this->module->formatName('create_order')) != 'before') {
            $cart = $this->context->cart;
            $order_ref = $cart->id;
            $order_amount =  Tools::ps_round((float)$cart->getOrderTotal(true, Cart::BOTH), 2);
        } elseif ($this->module->currentOrder) {
            $order = new Order((int)$this->module->currentOrder);
            $order_ref = $order->id;
            $order_amount =  Tools::ps_round($order->total_paid, 2);
        }
        if ($this->module->currentOrder ||
            Configuration::get($this->module->formatName('create_order')) != 'before'
        ) {
            $address_delivery = new Address($this->context->cart->id_address_delivery, $this->context->language->id);
            $address_invoice = new Address($this->context->cart->id_address_invoice, $this->context->language->id);
            if (Configuration::get($this->module->formatName('live_mode'))) {
                $everypay_url = Configuration::get($this->module->formatName('production_url'));
                $everypay_library = new EveryPayLibrary();
                $everypay_library->init(
                    Configuration::get($this->module->formatName('api_username')),
                    Configuration::get($this->module->formatName('shared_secret'))
                );
            } else {
                $everypay_url = Configuration::get($this->module->formatName('demo_url'));
                $everypay_library = new EveryPayLibrary();
                $everypay_library->init(
                    Configuration::get($this->module->formatName('test_api_username')),
                    Configuration::get($this->module->formatName('test_shared_secret'))
                );
            }
            $skinName = Configuration::get($this->module->formatName('iframe_skin'));
            if (empty($skinName)) {
                $skinName = "default";
            }
            $this->context->smarty->assign($queryFields = array(
                'amount' => $order_amount,
                'account_id' => Configuration::get($this->module->formatName('account_id')),
//ONLY FOR MATKASPORT
                // 'billing_address' => $address_invoice->address1,
                // 'billing_city' => $address_invoice->city,
                // 'billing_country' => Country::getIsoById((int)$address_invoice->id_country),
                // 'billing_postcode' => $address_invoice->postcode,
                'callback_url' => $this->context->link->getModuleLink('everypay', 'callback', array(), true),
                'customer_url' => $this->context->link->getModuleLink('everypay', 'return', array(), true),
//ONLY FOR MATKASPORT
                // 'delivery_address' => $address_delivery->address1,
                // 'delivery_city' => $address_delivery->city,
                // 'delivery_country' => Country::getIsoById((int)$address_delivery->id_country),
                // 'delivery_postcode' => $address_delivery->postcode,
                'email' => $this->context->customer->email,
                'order_reference' => $order_ref,
                'transaction_type' => $this->module->getConfig('transaction_type'),
                'user_ip' => $_SERVER['REMOTE_ADDR'],
                'request_cc_token'  => (int)Tools::getValue('saveCard'),
                'hmac_fields'   => ""
            ));
            if (Tools::getValue('card_choice') !== false && Tools::getValue('card_choice') != "new") {
                $id_card = (int)Tools::getValue('card_choice');
                $card = new CardStorageLibrary($id_card);
                if (isset($card->id_customer) && $card->id_customer == $this->context->customer->id) {
                    $queryFields['cc_token'] = $card->token;
                    unset($queryFields['request_cc_token']);
                }
            }

            // Remove illegal characters
            foreach ($queryFields as $k => $v) {
                $queryFields[$k] = str_replace("'", "", $v);
            }

            if (Tools::strtolower(Tools::getValue('response_type')) == "json") {
                $queryFields['skin_name'] = $skinName;
            }
            $data = $everypay_library->getFields(
                $queryFields,
                Tools::strtolower($this->context->language->iso_code)
            );

            if (Tools::strtolower(Tools::getValue('response_type')) == "json") {
                $newData = array("data"=>array());
                foreach ($data as $key => $val) {
                    $newData['data'][] = (object)array("key" => $key, "value" => $val);
                }
                $newData['order_reference'] = $data['order_reference'];
                $newData['everypay_url'] = $everypay_url;
                $newData['status'] = 1;
                die(Tools::jsonEncode($newData));
            } else {
                $this->context->smarty->assign(array(
                    'everypay_url' => $everypay_url
                ));
                $this->context->smarty->assign($data);
                $this->setTemplate('module:everypay/views/templates/front/validation.tpl');
            }
        } else {
            Tools::redirect('index.php?controller=order&step=1');
        }
    }
}
