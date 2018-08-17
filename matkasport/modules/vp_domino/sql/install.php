<?php

$sql = array();

$sql[] = 'ALTER TABLE `'._DB_PREFIX_.'product` ADD `id_product_domino` VARCHAR(255) NULL AFTER `id_product`;';
$sql[] = 'ALTER TABLE `'._DB_PREFIX_.'image` ADD `url` TEXT NULL AFTER `cover`;';
$sql[] = 'ALTER TABLE `'._DB_PREFIX_.'image` ADD `model` VARCHAR(255) NULL AFTER `url`;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'vp_domino_order_export` (
            `id_order` int(11) NOT NULL,
            `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (`id_order`)
         ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'vp_customer_group_discounts` (
            `id_group` int(11) NOT NULL,
            `default_value` decimal(11,2) NOT NULL DEFAULT \'0.00\',
            `fixed` decimal(11,2) NOT NULL DEFAULT \'0.00\',
            `s_margin` decimal(11,2) NOT NULL DEFAULT \'0.00\',
            `lamp` decimal(11,2) NOT NULL DEFAULT \'0.00\',
            `compass` decimal(11,2) NOT NULL DEFAULT \'0.00\',
            `wholesale` decimal(11,2) NOT NULL DEFAULT \'0.00\',
             PRIMARY KEY  (`id_group`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    try {
        Db::getInstance()->execute($query);
    } catch (Exception $e) {
        $error_msg = $e->getMessage();
        if(strpos($error_msg,'Duplicate column name') === false) {
            $this->_errors[] = $e->getMessage();
            return false;
        }
    }

}
