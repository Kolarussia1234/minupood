<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_2_5($object)
{
	Configuration::updateGlobalValue('PH_BLOG_DISPLAY_RELATED', 1);

	return true;
}