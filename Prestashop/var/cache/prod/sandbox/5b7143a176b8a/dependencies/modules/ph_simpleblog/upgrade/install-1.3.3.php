<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_3($object)
{
	Configuration::updateValue('PH_BLOG_ADVERTISING', true);

	return true;
}