<?php

require_once(dirname(__FILE__) . '/classes/Domino.php');

//if(Tools::getRemoteAddr() !== '90.191.225.43')
    //exit;

$type = false;
$token = false;

$products = json_decode(file_get_contents('php://input'), true);

// Use array flip so we can use isset to check import type
$available_types = array_flip([
    'products_data',
]);

// Since cli and browser act different
$cron_type = php_sapi_name();

if($cron_type === 'cli') {
    if (isset($argv[1]))
        $type = $argv[1];

    if (isset($argv[2]))
        $token = $argv[2];
} else {
    if (Tools::getIsset('type'))
        $type = Tools::getValue('type');

    if (Tools::getIsset('token'))
        $token = Tools::getValue('token');
}

if(Configuration::get('VP_DOMINO_KEY') !== $token || !isset($available_types[$type]))
    die('Error:');

$domino = new VpDomino('api');

switch ($type) {
    case 'products_data':
        $domino->writeDominoProductId($products);
        break;
}