<?php
/**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, SWED pangalink
*  @copyright 2018 Veebipoed.ee, SWED pangalink
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

if (!class_exists('VPPaymentModule')) {
    if (!file_exists(_PS_MODULE_DIR_ . 'vpmodules/libs/vp_payment_module.php')) {
        include(_PS_MODULE_DIR_ .'vpswed/assets/vpmodules/libs/vp_payment_module.php');
    } else {
        include(_PS_MODULE_DIR_ .'vpmodules/libs/vp_payment_module.php');
    }
}

class VPSwed extends VPPaymentModule
{
    public $bank_url = 'https://www.swedbank.ee/banklink';

    public function __construct()
    {
        $this->name = 'vpswed';
        parent::__construct();
        $this->payment_name = 'SWED';
        $this->displayName = $this->l('Swedbank banklink');
        $this->description = $this->l('Swedbank banklink payment');
    }
}
