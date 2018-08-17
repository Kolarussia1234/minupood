<?php
/**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, Pangalingid
*  @copyright 2018 Veebipoed.ee, Pangalingid
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

class VPModulesConfirmationModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();

        $module_name = Tools::getValue('bank');

        $module = Module::getInstanceByName($module_name);
        
        if ($module_name == 'vpseb') {
            $module->bank_url = $module->getSebBankUrl();
        }

        $order = $module->confirmOrder();

        $this->context->smarty->assign(
            array(
                'formdata' => $module->getFormFields($order),
                'bank_url' => $module->bank_url,
                'moduleName' => $module_name,
            )
        );

        $this->setTemplate('module:vpmodules/views/templates/front/confirmation.tpl');
    }
}
