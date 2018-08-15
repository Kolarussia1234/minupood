<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_2_3($object)
{
	Configuration::updateGlobalValue('PH_BLOG_COMMENT_AUTO_APPROVAL', '0');

	return true;
}