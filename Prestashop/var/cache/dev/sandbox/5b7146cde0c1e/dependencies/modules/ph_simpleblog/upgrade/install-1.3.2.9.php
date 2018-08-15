<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_2_9()
{
	Configuration::updateGlobalValue('PH_BLOG_RELATED_PRODUCTS_USE_DEFAULT_LIST', false);
	return true;
}