<?php
/** NOTICE OF LICENSE
 *
 * This module was created by veebipoed.ee and is protected by the laws of Copyright.
 * This use license is granted for only one website.
 * To use this module on several websites, you must purchase as many licenses as websites on which you want to use it.
 * Use, copy, modification or distribution of this module without written license agreement from veebipoed.ee is strictly forbidden.
 * In order to obtain a license, please contact us: info@veebipoed.ee
 * Any infringement of these provisions as well as general copyrights will be prosecuted.
 * ...........................................................................
 *
 *
 * @author     VEEBIPOED.EE
 * @copyright  Copyright (c) 2012-2018 veebipoed.ee (http://www.veebipoed.ee)
 * @license    Commercial license
 * Support by mail: info@veebipoed.ee
 */

include_once('../../config/config.inc.php');
include_once('./vp_smartpost.php');

if (Tools::substr(_COOKIE_KEY_, 34, 8) != Tools::getValue('token')) {
    die;
}

$carrierModule = new vp_smartpost();
$carrierModule->importTerminals();

if (Tools::getValue('redirect')) {
    Tools::redirectAdmin($_SERVER['HTTP_REFERER'].'&conf=4');
}
