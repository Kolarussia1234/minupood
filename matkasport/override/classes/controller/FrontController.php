<?php

class FrontController extends FrontControllerCore {

    protected function assignGeneralPurposeVariables(){
        parent::assignGeneralPurposeVariables();
        $variables = Configuration::getAllVariablesFromStaticVarMod();
        $array = [];
        foreach($variables as $variable){
            $array[$variable['name']] = $variable['value'];
        }
        $this->context->smarty->assign( array('staticvariables' =>$array));
    }
}
