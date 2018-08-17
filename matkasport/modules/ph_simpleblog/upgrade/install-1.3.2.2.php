<?php
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_3_2_2($object)
{
	if(!Shop::isFeatureActive())
	{
		$categories = SimpleBlogCategory::getCategories(Context::getContext()->language->id, false);

		foreach($categories as $id_category => $category)
		{
			$instance = new SimpleBlogCategory($id_category, Context::getContext()->language->id);
			$instance->associateTo(Shop::getCompleteListOfShopsID());
			unset($instance);
		}
	}
	return true;
}