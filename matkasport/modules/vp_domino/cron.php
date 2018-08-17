<?php

require_once(dirname(__FILE__) . '/classes/Domino.php');

$cron_type = php_sapi_name();

$type = false;
$token = false;
$output = false;

// Use array flip so we can use isset to check import type
$available_types = array_flip([
    'manufacturer',
    'products',
    'prices',
    'quantities',
    'category_status',
    'quantitiesStocks',
]);

// Since cli and browser act different
if($cron_type === 'cli') {
    if (isset($argv[1]))
        $type = $argv[1];

    if (isset($argv[2]))
        $token = $argv[2];

    if (isset($argv[3]))
        $output = $argv[3];
} else {
    if (Tools::getIsset('type'))
        $type = Tools::getValue('type');

    if (Tools::getIsset('token'))
        $token = Tools::getValue('token');

    if (Tools::getIsset('output'))
        $output = Tools::getValue('output');
}

/*
register_shutdown_function(function(){
    VpDomino::shutDown();
});
*/
if(Configuration::get('VP_DOMINO_KEY') !== $token || !isset($available_types[$type]))
    die('Error:');


if(VpDomino::isProcessRunning($type))
    die('CRON RUNNING');

register_shutdown_function(array('VpDomino', 'shutDown'), $type);

// Get domino, all the logging is inside Vp_Domino class
$domino = new VpDomino('cron', $type, $output);

switch ($type) {
    case 'manufacturer':
        $domino->importManufacturers();
        break;
    case 'products':
        $domino->importProducts();
        break;
    case 'quantities':
        $domino->importQuantities();
        break;
    case 'quantitiesStocks':
        $domino->importQuantitiesBuumStocks();
        break;
    case 'category_status':
        $domino->categoryStatus();
        break;
}