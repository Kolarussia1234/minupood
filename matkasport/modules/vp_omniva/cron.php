<?php

include_once('../../config/config.inc.php');
include_once('./vp_omniva.php');

if (substr(_COOKIE_KEY_, 34, 8) != Tools::getValue('token'))
	die;

$carrierModule = new vp_omniva();
$carrierModule->importTerminals();

if (Tools::getValue('redirect'))
	Tools::redirectAdmin($_SERVER['HTTP_REFERER'] . '&conf=4');
?>