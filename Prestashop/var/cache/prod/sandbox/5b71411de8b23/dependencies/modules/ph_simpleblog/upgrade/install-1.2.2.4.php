<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_2_4($object)
{
	Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'simpleblog_post` ADD allow_comments tinyint(1) DEFAULT 3 NOT NULL AFTER views');

	return true;
}