<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_2_5($object)
{
	Configuration::updateGlobalValue('PH_BLOG_COMMENT_STUFF_HIGHLIGHT', 1);
	Configuration::updateGlobalValue('PH_BLOG_COMMENT_ALLOW', 0);
	Configuration::updateGlobalValue('PH_BLOG_COMMENT_NOTIFY_EMAIL', Configuration::get('PS_SHOP_EMAIL'));

	return true;
}