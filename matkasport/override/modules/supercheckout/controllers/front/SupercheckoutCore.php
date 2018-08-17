<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * @author    knowband.com <support@knowband.com>
 * @copyright 2017 Knowband
 * @license   see file: LICENSE.txt
 * @category  PrestaShop Module
 */

use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Cart\CartPresenter;

class SupercheckoutCoreOverride extends SupercheckoutCore
{
    public function init()
    {
        parent::init();

        $this->context->smarty->assign('emailID', Configuration::getVariableByName('emailIDfromSuperCheckout'));
        $this->context->smarty->assign('firstnameID', Configuration::getVariableByName('firstnameIDfromSuperCheckout'));
        $this->context->smarty->assign('phoneID', Configuration::getVariableByName('phoneIDfromSuperCheckout'));
        $this->context->smarty->assign('lastnameID', Configuration::getVariableByName('lastnameIDfromSuperCheckout'));
        $this->context->smarty->assign('customSamePaymentID', Configuration::getVariableByName('differentPaymentAddressIDfromSuperCheckout'));
    }
}