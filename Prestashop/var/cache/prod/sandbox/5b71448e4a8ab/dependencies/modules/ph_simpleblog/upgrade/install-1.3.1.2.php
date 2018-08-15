<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_1_2($object)
{
    Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'simpleblog_post` ADD id_simpleblog_post_type int(11) UNSIGNED NOT NULL DEFAULT 1 AFTER id_simpleblog_category');

	return true;
}