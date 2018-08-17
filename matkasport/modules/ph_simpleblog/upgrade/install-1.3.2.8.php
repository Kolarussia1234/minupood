<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_2_8()
{
	Configuration::updateGlobalValue('PH_BLOG_COMMENT_ALLOW_GUEST', false);
	Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA', true);
	Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA_SITE_KEY', '');
	Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA_SECRET_KEY', '');
	Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA_THEME', 'light');
	return true;
}