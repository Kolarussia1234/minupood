<?php

$sql = [];

$sql[] = '
    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'vp_buumstocks` (
      `id_product` int(11) NOT NULL,
      `id_product_attribute` int(11) NOT NULL,
      `product_reference` varchar(255) NOT NULL,
      `shop_number` int(11) NOT NULL,
      `quantity` int(10) NOT NULL,
      CONSTRAINT Buumstocks UNIQUE (`id_product`,`id_product_attribute`,`shop_number`)
    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
';

$sql[] = '
    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'vp_buumstocks_warehouses` (
      `shop_number` int(10) UNSIGNED NOT NULL,
      `warehouse` varchar(255) NOT NULL,
      CONSTRAINT Warehouse UNIQUE (`shop_number`)
  ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
