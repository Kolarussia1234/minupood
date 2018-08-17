<?php

class mkbillingapiconfirmationModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {   
        $back_url = $this->context->link->getPageLink('order', true);
        $method = $this->module->getPaymentMethod((string)Tools::getValue('method'));

        if (empty($method)) {
            Tools::redirect($back_url);
        }

        parent::initContent();

        $this->context->smarty->assign(array(
            'href' => $this->context->link->getModuleLink(
                $this->module->name,
                $method['type'],
                array('method' => $method['id'])
            ),
            'back_href' => $back_url,
            'display_name' => $this->module->getTranslation($method['id']),
        ));

        $this->setTemplate('module:mkbillingapi/views/templates/front/confirmation.tpl');

    }

    public function setMedia()
    {
        parent::setMedia();

        $this->context->controller->addJS($this->module->getPathUri().'views/js/mkbillingapi.js');
        $this->context->controller->addCSS($this->module->getPathUri().'views/css/mkbillingapi.css');
    }
}