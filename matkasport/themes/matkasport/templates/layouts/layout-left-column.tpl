{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='layouts/layout-both-columns.tpl'}

{block name='right_column'}{/block}

{block name='content_wrapper'}
    <div id="content-wrapper"
         class="left-column col-12 col-md-9 {if $iqitTheme.g_sidebars_width == 'narrow'}col-lg-10{/if}">
        {if isset($page) && $page.page_name == "category" && isset($category) && $category.level_depth == "2"}
        	{hook h='displayCategoryPage' mod='ps_imageslider_mod'}
            <p class="category_list_title">
        		{l s='Subcategories'}
        	</p>
   			{include file='catalog/_partials/category-subcategories.tpl'}
        {else}
	        {hook h="displayContentWrapperTop"}
	        {block name='content'}
	            <p>Hello world! This is HTML5 Boilerplate.</p>
	        {/block}
	        {hook h="displayContentWrapperBottom"}
    	{/if}
    </div>
{/block}
