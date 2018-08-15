<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_2_4($object)
{
	Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'simpleblog_post` ADD id_product TEXT AFTER featured');

	return true;
}