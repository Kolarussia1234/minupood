<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_2_8($object)
{
	Configuration::updateGlobalValue('PH_BLOG_DISPLAY_MORE', '1');

	return true;
}