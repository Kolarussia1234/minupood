<?php

class mkbillingapicardsModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $method = $this->module->getPaymentMethod(Tools::getValue('method'));

        if (empty($method) || $method['type'] != MKBillingApi::TYPE_CARD) {
            Tools::redirect($this->context->link->getPageLink('order-opc.php', true));
        }

        $transaction = $this->module->createTransaction($method['id']);

        if (empty($transaction)) {
            $this->context->smarty->assign(array(
                'banklink_msg' => $this->module->l('Something went wrong!'),
                'msg_class' => 'danger'
            ));
            $this->setTemplate('module:mkbillingapi/views/templates/front/final.tpl');
        } else {
            $this->context->smarty->assign($this->module->getJsDataFromTrasaction($transaction));

            $this->setTemplate('module:mkbillingapi/views/templates/front/cards.tpl');
        }
    }
}