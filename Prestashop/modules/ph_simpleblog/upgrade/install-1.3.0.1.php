<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_0_1($object)
{
	@unlink(_PS_MODULE_DIR_.'ph_simpleblog/assets/index.php');
	@unlink(_PS_MODULE_DIR_.'ph_simpleblog/assets/phpthumb/index.php');
	@unlink(_PS_MODULE_DIR_.'ph_simpleblog/assets/phpthumb/thumb_plugins/index.php');
	return true;
}