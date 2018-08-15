<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_4_0($object)
{
    if (Configuration::get('PH_BLOG_NATIVE_COMMENTS')) {
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_SYSTEM', 'native');
    } else {
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_SYSTEM', 'facebook');
    }

    return true;
}
