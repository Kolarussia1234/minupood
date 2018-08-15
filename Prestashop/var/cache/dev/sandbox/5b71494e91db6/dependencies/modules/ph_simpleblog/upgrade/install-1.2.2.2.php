<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_2_2($object)
{
	Shop::setContext(Shop::CONTEXT_ALL);

	$object->registerHook('displayTop');

	return true;
}