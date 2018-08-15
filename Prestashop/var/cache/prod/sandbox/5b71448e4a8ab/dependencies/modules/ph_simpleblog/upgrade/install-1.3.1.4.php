<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_1_4($object)
{
	$posts = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'simpleblog_post`');

	foreach($posts as $post)
	{
		Db::getInstance()->update('simpleblog_post', array('id_simpleblog_post_type' => 1), 'id_simpleblog_post = '.$post['id_simpleblog_post']);
	}

	return true;
}