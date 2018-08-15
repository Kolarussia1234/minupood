<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_2_0($object)
{
    $object->registerHook('displayPrestaHomeBlogAfterPostContent');
	
	return true;
}