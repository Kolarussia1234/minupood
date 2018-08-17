<?php

class mkbillingapibanklinksModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $method = $this->module->getPaymentMethod(Tools::getValue('method'));

        if (empty($method) || $method['type'] != MKBillingApi::TYPE_BANK) {
            Tools::redirect($this->context->link->getPageLink('order-opc.php', true));
        }

        $transaction = $this->module->createTransaction($method['id']);
        $url = $this->module->getBankUrlFromTransaction($transaction, $method['id']);

        if (!empty($url)) {
            Tools::redirectLink($url);
        }

        $this->context->smarty->assign(array(
            'banklink_msg' => $this->module->l('Something went wrong!', 'banklinks'),
            'msg_class' => 'danger'
        ));
        $this->setTemplate('final.tpl');
    }

}