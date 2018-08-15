<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_2_6($object)
{
	Configuration::updateGlobalValue('PH_BLOG_FACEBOOK_MODERATOR', '');
    Configuration::updateGlobalValue('PH_BLOG_FACEBOOK_APP_ID', '');
    Configuration::updateGlobalValue('PH_BLOG_FACEBOOK_COLOR_SCHEME', 'light');

	return true;
}