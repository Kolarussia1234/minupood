<?php

class mkbillingapipaymentsModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $type = Tools::getValue('method');

        if ($type != MKBillingApi::TYPE_CARD && $type != MKBillingApi::TYPE_BANK) {
            Tools::redirect($this->context->link->getPageLink('order-opc.php', true));
        }

        $methods = $this->module->getPaymentMethodValues($type);

        foreach ($methods as $i => &$method) {
            $method['img'] = $this->module->getImage($method['id']);
        }

        $this->context->smarty->assign(array(
            'payment_methods' => $methods,
            'display_name' => $this->module->displayName,
            'back_href' => $this->context->link->getPageLink('order-opc')
        ));

        Media::addJsDef(array(
            'mk_ajax_url' => $this->context->link->getModuleLink($this->module->name, 'ajax')
        ));

        $this->setTemplate('payments.tpl');
    }

    public function setMedia()
    {
        parent::setMedia();

        $this->context->controller->addJS($this->module->getPathUri().'views/js/mkbillingapi.js');
        $this->context->controller->addCSS($this->module->getPathUri().'views/css/mkbillingapi.css');
    }

    private function l($string)
    {
        return $this->module->l($string, 'banklinks');
    }
}