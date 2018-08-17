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

class EveryPayPaymentModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    public function initContent()
    {
        if (!class_exists('CardStorageLibrary')) {
             include $this->module->getLocalPath().'lib/CardStorageLibrary.php';
        }
        parent::initContent();
        $cart = $this->context->cart;
        $this->context->smarty->assign(array(
            'description' => Configuration::get(
                $this->module->formatName('description'),
                $this->context->language->id
            ),
            'nbProducts' => $cart->nbProducts(),
            'cust_currency' => $cart->id_currency,
            'currencies' => $this->module->getCurrency((int)$cart->id_currency),
            'total' => $cart->getOrderTotal(true, Cart::BOTH),
            'this_path' => $this->module->getPathUri(),
            'this_path_bw' => $this->module->getPathUri(),
            'this_path_ssl' => Tools::getShopDomainSsl(true, true).__PS_BASE_URI__.'modules/'.$this->module->name.'/',
            'cardChoice'    =>  Tools::getValue('everypayChoice'),
            'saveCard'      =>  Tools::getValue('everypaySaveCard')
        ));
        $this->setTemplate('module:everypay/views/templates/front/payment_execution.tpl');
    }
}
