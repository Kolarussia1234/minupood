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

$sql = array();
$sql['install'] = array();
$sql['alter'] = array();
$sql['drop'] = array();

$sql['install'][] = 'CREATE TABLE IF NOT EXISTS `%1$s%2$s` (
    `id_%2$s` int(10) UNSIGNED AUTO_INCREMENT,
    `place_id` int UNSIGNED NOT NULL,
    `name` varchar(255) NOT NULL,
    `city` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    `opened` varchar(255) NOT NULL,
    `group_id` smallint(2) NOT NULL,
    `group_name` varchar(255) NOT NULL,
    `group_sort` smallint(2) NOT NULL,
    `active` tinyint(1) NOT NULL,
    `updated_date` datetime NOT NULL,
    CONSTRAINT `%1$s_pk_%2$s` PRIMARY KEY (`id_%2$s`)
)ENGINE=%3$s DEFAULT CHARSET=utf8;';

$sql['install'][] = 'CREATE TABLE IF NOT EXISTS `%1$s%2$s_order` (
    `id_%2$s_order` int(10) UNSIGNED AUTO_INCREMENT,
    `id_%2$s` int(10) UNSIGNED NOT NULL,
    `id_order` int(10) UNSIGNED NOT NULL,
    CONSTRAINT `%1$spk_%2$s_orders` PRIMARY KEY (`id_%2$s_order`),
    CONSTRAINT `%1$sfk_%2$s_carrier` FOREIGN KEY (`id_%2$s`) REFERENCES `%1$s%2$s` (`id_%2$s`)
        ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `%1$sfk_%2$s_order` FOREIGN KEY (`id_order`) REFERENCES `%1$sorders` (`id_order`)
        ON UPDATE CASCADE ON DELETE CASCADE
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

$sql['alter']['_size|price_from'] = 'ALTER TABLE `%1$s%2$s_size` ADD `price_from` decimal(10, 2) NOT NULL DEFAULT 0';
$sql['alter']['_size|price_to'] = 'ALTER TABLE `%1$s%2$s_size` ADD `price_to` decimal(10, 2) NOT NULL DEFAULT 99999999';
$sql['alter']['_size|id_group'] = 'ALTER TABLE `%1$s%2$s_size` ADD `id_group` int(10) NOT NULL DEFAULT 0';

return $sql;
