<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_1_8($object)
{
	$sql = 'SHOW COLUMNS FROM `'._DB_PREFIX_.'simpleblog_post_image`';
    $simpleblog_post_image = Db::getInstance()->executeS($sql);

    $needUpgrade = true;
    foreach($simpleblog_post_image as $column)
    {
        if($column['Field'] == 'image')
            $needUpgrade = false;
    }

    if($needUpgrade === true)
    {
    	Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'simpleblog_post_image` CHANGE filename image varchar(255) NOT NULL');
    }
	
	return true;
}