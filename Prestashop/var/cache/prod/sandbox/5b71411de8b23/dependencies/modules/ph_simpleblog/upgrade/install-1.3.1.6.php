<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_1_6($object)
{
    if (function_exists('date_default_timezone_get'))
    {
        $timezone = @date_default_timezone_get();
    }
    else
    {
        $timezone = 'Europe/Warsaw';
    }

    Configuration::updateGlobalValue('PH_BLOG_TIMEZONE', $timezone);

	return true;
}