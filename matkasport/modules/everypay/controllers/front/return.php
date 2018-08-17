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

class EveryPayReturnModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;

    public function init()
    {
        parent::init();
        if ((Configuration::get($this->module->formatName('create_order')) != 'before') &&
            Tools::getValue('transaction_result') == 'cancelled'
        ) {
            Tools::redirect('index.php?controller=order&step=1');
        }
    }

    public function initContent()
    {
        if (Configuration::get($this->module->formatName('create_order')) == EveryPay::ORDER_BEFORE &&
            Tools::getValue('transaction_result') == EveryPay::RETURN_SUCCESS) {
            $order = new Order((int)Tools::getValue('order_reference'));
            if (Validate::isLoadedObject($order) && $order->id_customer == $this->context->customer->id) {
                Tools::redirectLink($this->module->getOrderConfUrl($order));
            }
        }
       
        parent::initContent();

        $this->context->smarty->assign(array(
            'transaction_result' => Tools::getValue('transaction_result'),
            'order_reference' => Tools::getValue('order_reference')
        ));
        $this->setTemplate('module:everypay/views/templates/front/return.tpl');
    }
}
