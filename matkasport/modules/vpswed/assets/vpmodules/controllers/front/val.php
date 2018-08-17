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

class VPModulesValModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    
    public function postProcess()
    {
        $order = new Order(Tools::getValue('VK_STAMP', null));
        $verification = $this->vertifySign('VK_MAC', $order->module);

        if ($order->id && $order->current_state == Configuration::get('PS_OS_PAYMENT')) {
            if (Tools::getValue('VK_AUTO', 'Y') == 'N') {
                Tools::redirect($this->getOrderConfUrl($order));
            }
            $this->context->smarty->assign(array(
                'banklink_msg' => $this->module->l('the order has already been paid', 'val'),
                'msg_class' => 'info',
            ));
            $this->setTemplate('module:vpmodules/views/templates/front/final.tpl');
        } elseif ($order->id && $verification == 0) {
            $this->setError($order, $this->module->l('Invalid public key', 'val'));
        } elseif ($order->id && $verification == 1) {
            if (Tools::getValue('VK_SERVICE') == '1111') {
                $this->validate($order);
            } elseif (Tools::getValue('VK_SERVICE') == '1911') {
                $this->setCanceled($order, $this->module->l('Order canceled', 'val'));
            } else {
                $this->setError($order, $this->module->l('Problems with bank server', 'val'));
            }
        } else {
            Tools::redirectLink(__PS_BASE_URI__);
        }
    }

    /**
    * [getResponseFields description]
    * @return [type] [description]
    */
    public function getResponseFields($module_name)
    {
        if (Tools::getIsset('VK_SERVICE')) {
            $array = array(
                'VK_SERVICE' => Tools::getValue('VK_SERVICE'),
                'VK_VERSION' => Tools::getValue('VK_VERSION'),
                'VK_SND_ID' => Tools::getValue('VK_SND_ID'),
                'VK_REC_ID' => Tools::getValue('VK_REC_ID'),
                'VK_STAMP' => Tools::getValue('VK_STAMP')
            );

            switch (Tools::getValue('VK_SERVICE')) {
                case '1111':
                    $array['VK_T_NO'] = Tools::getValue('VK_T_NO');
                    $array['VK_AMOUNT'] = Tools::getValue('VK_AMOUNT');
                    $array['VK_CURR'] = Tools::getValue('VK_CURR');
                    $array['VK_REC_ACC'] = Tools::getValue('VK_REC_ACC');
                    $array['VK_REC_NAME'] = Tools::getValue('VK_REC_NAME');
                    $array['VK_SND_ACC'] = Tools::getValue('VK_SND_ACC');
                    $array['VK_SND_NAME'] = Tools::getValue('VK_SND_NAME');
                    $array['VK_REF'] = Tools::getValue('VK_REF');
                    $array['VK_MSG'] = Tools::getValue('VK_MSG');
                    $array['VK_T_DATETIME'] = Tools::getValue('VK_T_DATETIME');
                    break;
                case '1911':
                    $array['VK_REF'] = Tools::getValue('VK_REF');
                    $array['VK_MSG'] = Tools::getValue('VK_MSG');
                    break;
            }
        }
        
        $data = '';
        $paymentInstance = $this->getInstanceByName($module_name);
        foreach ($array as $label) {
            $data .= $paymentInstance->padding($label).$label;
        }
        return $data;
    }

    /**
    * [validate description]
    * @param  [type] $order [description]
    * @return [type]        [description]
    */
    public function validate($order)
    {
        $total_paid_real = Tools::getValue('VK_AMOUNT');

        if ($total_paid_real == $order->total_paid) {
            $this->setValid($order);
        } else {
            $this->setError($order, $this->module->l('the amount charged and the amount paid does not match', 'val'));
        }
    }

    /**
    * Set order state to error and set error msg
    * @param order  $order Order object
    * @param string $msg   Error message
    */
    public function setError($order, $msg)
    {
        $order->setCurrentState(Configuration::get('PS_OS_ERROR'));
        $this->context->smarty->assign(array(
            'banklink_msg' => $msg,
            'msg_class' => 'danger'
        ));
        $this->setTemplate('module:vpmodules/views/templates/front/final.tpl');
    }

    public function setCanceled($order, $msg)
    {
        $order->setCurrentState(Configuration::get('PS_OS_CANCELED'));
        $this->context->smarty->assign(array(
            'banklink_msg' => $msg,
            'msg_class' => 'info'
        ));
        $this->setTemplate('module:vpmodules/views/templates/front/final.tpl');
    }

    /**
    * Get order confirmation url
    * @param  order $order Order object
    * @return string       Confirmation url
    */
    public function getOrderConfUrl($order)
    {
        return 'index.php?controller=order-confirmation&id_cart='.$order->id_cart.
            '&id_module='. $this->getModuleIdByName($order->module).
            '&id_order='.$order->id.
            '&key='.$order->secure_key;
    }
    
    public function getModuleIdByName($module_name)
    {
        return $this->getInstanceByName($module_name)->id;
    }
    
    public function getInstanceByName($module_name)
    {
        return Module::getInstanceByName($module_name);
    }

    /**
    * Set order to valid
    * @param Order $order Order object
    */
    public function setValid($order)
    {
        $order->valid = true;
        $order->setCurrentState(Configuration::get('PS_OS_PAYMENT'));
        Tools::redirect($this->getOrderConfUrl($order));
    }

    /**
    * Verify sign
    * @return int 1 if corrent, 0 incorrent, otherwise error
    */
    public function vertifySign($key, $module_name)
    {
        if (Tools::getIsset($key)) {
            $signature = base64_decode(Tools::getValue($key));
        } else {
            return 2;
        }

        $data = $this->getResponseFields($module_name);
        $cert = Configuration::get(Tools::strtoupper($module_name).'_PUBLIC_KEY');
        $publicKey = openssl_get_publickey($cert);
        $out = openssl_verify($data, $signature, $publicKey);
        
        unset($cert);
        openssl_free_key($publicKey);
        
        return $out;
    }
}
