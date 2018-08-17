<?php

class mkbillingapiValidationModuleFrontController extends ModuleFrontController
{

    public function postProcess()
    {
        $context = new Context();
        $redirect_url = $context->getContext()->cookie->mk_payment_method;
        Tools::redirect($redirect_url);
    }
}