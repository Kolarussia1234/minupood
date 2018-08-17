<?php

class smartpostlabelpdfModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        $api = $this->module->getSmartPostApi();
        $barcode = Tools::getValue('barcode');

        if (!is_null($api) && !empty($barcode)) {   
            header('Content-type: application/pdf');
            echo $api->getLabel($barcode);
        }

        die;
    }
}
