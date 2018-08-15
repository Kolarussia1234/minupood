{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{extends file='page.tpl'}


{block name='page_title'}
	{if $is_category eq true}
		{$blogCategory->name}
	{else}
		{$blogMainTitle}
	{/if}
{/block}


{block name='head_seo_title'}
	{if $is_category eq true}
		{if $blogCategory->meta_title != ''}
			{$blogCategory->meta_title} - {$page.meta.title}
		{else}
			{$blogCategory->name} - {$page.meta.title}
		{/if}
	{else}
		{$blogMainTitle} - {$page.meta.title}
	{/if}
{/block}

{if $is_category eq true}
		{block name='head_seo_keywords'}{if isset($blogCategory->meta_keywords)}{$blogCategory->meta_keywords}{/if}{/block}
{/if}


{block name='head_seo_description'}
	{if $is_category eq true}
		{if $blogCategory->meta_description != ''}
			{$blogCategory->meta_description}
		{/if}
	{else}
		{$meta_description}
	{/if}
{/block}


{block name='page_content'}


<div class="ph_simpleblog simpleblog-{if $is_category}category{else}home{/if}">
	{if $is_category eq true}

		{if Configuration::get('PH_BLOG_DISPLAY_CATEGORY_IMAGE') && isset($blogCategory->image)}
		<div class="simpleblog-category-image">
			<img src="{$blogCategory->image|escape:'html':'UTF-8'}" alt="{$blogCategory->name|escape:'html':'UTF-8'}" class="img-responsive" />
		</div>
		{/if}

		{if !empty($blogCategory->description) && Configuration::get('PH_BLOG_DISPLAY_CAT_DESC')}
		<div class="ph_cat_description rte">
			{$blogCategory->description nofilter}
		</div>
		{/if}
	{/if}

	{if isset($posts) && count($posts)}
		<div class="row simpleblog-posts">
			{foreach from=$posts item=post}

				<div class="simpleblog-post-item
				{if $blogLayout eq 'grid' AND $columns eq '3'}
					col-md-4 col-sm-6 col-xs-12 col-ms-12 {cycle values="first-in-line,second-in-line,last-in-line"}
				{elseif $blogLayout eq 'grid' AND $columns eq '4'}
					col-md-3 col-sm-6 col-xs-12 col-ms-12 {cycle values="first-in-line,second-in-line,third-in-line,last-in-line"}
				{elseif $blogLayout eq 'grid' AND $columns eq '2'}
					col-md-6 col-sm-6 col-xs-12 col-ms-12 {cycle values="first-in-line,last-in-line"}
				{else}
				col-md-12
				{/if}">

				{include file="module:ph_simpleblog/views/templates/front/post-miniature.tpl" post=$post}

				</div><!-- .simpleblog-post-item -->

			{/foreach}
		</div><!-- .row -->
		
		{if $is_category}
			{include file="module:ph_simpleblog/views/templates/front/pagination.tpl" rewrite=$blogCategory->link_rewrite type='category'}
		{else}
			{include file="module:ph_simpleblog/views/templates/front/pagination.tpl" rewrite=false type=false}
		{/if}
	{else}
		<p class="warning alert alert-warning">{l s='There are no posts' mod='ph_simpleblog'}</p>
	{/if}
</div><!-- .ph_simpleblog -->


{/block}