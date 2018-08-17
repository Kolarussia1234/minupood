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

class EveryPayCallbackModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public function postProcess()
    {
        if (!class_exists('CardStorageLibrary')) {
             include $this->module->getLocalPath().'lib/CardStorageLibrary.php';
        }
        $everypay_library = $this->module->getEveryPayAPI();
        if (is_null($everypay_library) || empty($_POST)) {
            die;
        }
        $status = 0;
        try {
            $status = $everypay_library->verify($_POST);
        } catch (Exception $e) {
                echo 'Exception: ',  $e->getMessage(), "\n";
        }

        if ($status == EveryPayLibrary::_VERIFY_SUCCESS) {
            if ((Configuration::get($this->module->formatName('create_order')) != 'before')) {
                $cart = new Cart((int)Tools::getValue('order_reference'));
                $customer = new Customer($cart->id_customer);
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
                    $this->module->displayName,
                    null,
                    $mailVars,
                    (int)$cart->id_currency,
                    false,
                    $customer->secure_key
                );
                $order = new Order($this->module->currentOrder);
            } else {
                $order = new Order((int)Tools::getValue('order_reference'));
            }
            
            if (Validate::isLoadedObject($order)) {
                $order->setCurrentState((int)Configuration::get('PS_OS_PAYMENT'));
                if (Tools::getValue('cc_token') != false) {
                    $token = new CardStorageLibrary();
                    $token->id_customer = $order->id_customer;
                    $token->token = Tools::getValue('cc_token');
                    $token->card_exp_year = Tools::getValue('cc_year');
                    $token->card_exp_month = Tools::getValue('cc_month');
                    $cardType = CardStorageLibrary::$cardTypes[Tools::getValue('cc_type')];
                    $token->card_type = $cardType;
                    $token->card_no = Tools::getValue('cc_last_four_digits');
                    if (isset(CardStorageLibrary::$cardTypes[Tools::getValue('cc_type')])) {
                        $cardType = CardStorageLibrary::$cardTypes[Tools::getValue('cc_type')];
                    }
                    if (!$token->doesExist()) {
                        $token->save();
                    }
                }
            }
        } elseif ($status == EveryPayLibrary::_VERIFY_CANCEL) {
            $order = new Order((int)Tools::getValue('order_reference'));
            if (Validate::isLoadedObject($order)) {
                $order->setCurrentState((int)Configuration::get('PS_OS_CANCELED'));
            }
        } elseif ($status == EveryPayLibrary::_VERIFY_FAIL) {
            $order = new Order((int)Tools::getValue('order_reference'));
            if (Validate::isLoadedObject($order)) {
                $order->setCurrentState((int)Configuration::get('PS_OS_ERROR'));
            }
        }
    }
}
