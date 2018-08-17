<?php

$sql = array();
$sql['install'] = array();
$sql['alter'] = array();
$sql['drop'] = array();

$sql['install'][] = 'CREATE TABLE IF NOT EXISTS `%1$s%2$s` (
    `id_%2$s` int(10) UNSIGNED AUTO_INCREMENT,
    `sihtnumber` varchar(25) NOT NULL,
    `name` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    `asula` varchar(255) NOT NULL,
    `maakond` varchar(255) NOT NULL,
    `group_id` smallint(2) NOT NULL,
    `active` tinyint(1) NOT NULL,
    `tyyp` tinyint(1) NOT NULL,
    `muudetud` datetime NOT NULL,
    CONSTRAINT `%1$s_pk_%2$s` PRIMARY KEY (`id_%2$s`)
)ENGINE=%3$s DEFAULT CHARSET=utf8;';

$sql['install'][] = 'CREATE TABLE IF NOT EXISTS `%1$s%2$s_size` (
    `id_%2$s_size` int(10) UNSIGNED AUTO_INCREMENT,
    `id_group` int(10) UNSIGNED NOT NULL,
    `name` varchar(100) NOT NULL,
    `height` smallint(2) NOT NULL,
    `width` smallint(2) NOT NULL,
    `depth` smallint(2) NOT NULL,
    `price` decimal(8,4) NOT NULL,
    `price_from` decimal(10, 2) NOT NULL DEFAULT 0,
    `price_to` decimal(10, 2) NOT NULL DEFAULT 99999999,
    `deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
    CONSTRAINT `%1$spk_%2$s_sizes` PRIMARY KEY (`id_%2$s_size`)
)ENGINE=%3$s DEFAULT CHARSET=utf8;';

$sql['install'][] = 'CREATE TABLE IF NOT EXISTS `%1$s%2$s_order` (
    `id_%2$s_order` int(10) UNSIGNED AUTO_INCREMENT,
    `id_%2$s` int(10) UNSIGNED NOT NULL,
    `id_order` int(10) UNSIGNED NOT NULL,
    CONSTRAINT `%1$spk_%2$s_orders` PRIMARY KEY (`id_%2$s_order`),
    CONSTRAINT `%1$sfk_%2$s_carrier` FOREIGN KEY (`id_%2$s`) REFERENCES `%1$s%2$s` (`id_%2$s`) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `%1$sfk_%2$s_order` FOREIGN KEY (`id_order`) REFERENCES `%1$sorders` (`id_order`) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=%3$s DEFAULT CHARSET=utf8;';

$sql['alter']['_size|price_from'] = 'ALTER TABLE `%1$s%2$s_size` ADD `price_from` decimal(10, 2) NOT NULL DEFAULT 0';
$sql['alter']['_size|price_to'] = 'ALTER TABLE `%1$s%2$s_size` ADD `price_to` decimal(10, 2) NOT NULL DEFAULT 99999999';

$sql['drop']['|pmaja_id'] = 'ALTER TABLE `%1$s%2$s` DROP COLUMN `pmaja_id`';
$sql['drop']['|linnvald'] = 'ALTER TABLE `%1$s%2$s` DROP COLUMN `linnvald`';

return $sql;
