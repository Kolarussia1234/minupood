<?php

$sql = array();
$sql['install'] = array();
$sql['alter'] = array();
$sql['drop'] = array();

$sql['install'][] = 'CREATE TABLE IF NOT EXISTS `%1$s%2$s_size` (
	`id_%2$s_size` int(10) UNSIGNED AUTO_INCREMENT,
	`id_group` int(10) UNSIGNED NOT NULL DEFAULT 0,
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
	CONSTRAINT `%1$sfk_%2$s_order` FOREIGN KEY (`id_order`) REFERENCES `%1$sorders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=%3$s DEFAULT CHARSET=utf8;';

return $sql;
