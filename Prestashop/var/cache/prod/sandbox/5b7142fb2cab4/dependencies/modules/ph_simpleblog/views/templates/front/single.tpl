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
	{$post->title}
{/block}

{block name='head_seo_title'}
	{if isset($post->meta_title) && $post->meta_title != ''}
		{$post->meta_title} - {$page.meta.title}
	{else}
		{$post->title} - {$page.meta.title}
	{/if}
{/block}

{if isset($post->meta_description) && $post->meta_description != ''}
	{block name='head_seo_description'}{$post->meta_description}{/block}
{/if}

{if isset($post->meta_keywords) && $post->meta_keywords != ''}
	{block name='head_seo_keywords'}{$post->meta_keywords}{/block}
{/if}

{block name='head_og_tags'}
	{if isset($post->meta_title) && $post->meta_title != ''}
		<meta property="og:title" content="{$post->meta_title}">
	{else}
		<meta property="og:title" content="{$post->title} - {$page.meta.description}">
	{/if}
	<meta property="og:url" content="http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}"/>
	<meta property="og:site_name" content="{$shop.name}"/>
	<meta property="og:type" content="article"/>

	{if isset($post_image) && !empty($post_image)}
		<meta property="og:image" content="{$post_image}" />
	{else}
		<meta property="og:image" content="{$shop.logo}" />
	{/if}

	{if isset($post->meta_description) && $post->meta_description != ''}
		<meta property="og:description" content="{$post->meta_description}">
	{else}
		<meta property="og:description" content="{$page.meta.description}">
	{/if}
{/block}

{block name='page_content_container'}
{assign var='post_type' value=$post->post_type}
<div itemscope="itemscope" itemtype="http://schema.org/Blog" itemprop="mainContentOfPage">
	<div class="ph_simpleblog simpleblog-single {if !empty($post->featured_image)}with-cover{else}without-cover{/if} simpleblog-single-{$post->id_simpleblog_post|intval}" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
		<meta itemprop="headline" content="{$post->title}" />

		<div class="post-meta-info text-muted">
			<span class="post-date">
					<i class="fa fa-calendar"></i> <time itemprop="datePublished" datetime="{$post->date_add|date_format:'c'}">{$post->date_add|date_format:Configuration::get('PH_BLOG_DATEFORMAT')}</time>
			</span>
			
			{if Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
				<span class="post-category">
					<i class="fa fa-tags"></i> <a href="{$link->getModuleLink('ph_simpleblog', 'category', ['sb_category' => $post->category_rewrite])|escape:'html':'UTF-8'}" title="{$post->category|escape:'html':'UTF-8'}">{$post->category|escape:'html':'UTF-8'}</a>
				</span>
			{/if}


			{if isset($post->author) && !empty($post->author)}
				<span class="post-author">
					<i class="fa fa-user"></i> <span itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><span itemprop="name">{$post->author}</span></span>
				</span>
			{/if}

			{if $post->tags && Configuration::get('PH_BLOG_DISPLAY_TAGS') && isset($post->tags_list)}
				<span class="post-tags clear">
					{l s='Tags:' mod='ph_simpleblog'}
					{foreach from=$post->tags_list item=tag name='tagsLoop'}
						{$tag|escape:'html':'UTF-8'}{if !$smarty.foreach.tagsLoop.last}, {/if}
					{/foreach}
				</span>
			{/if}

			{if Configuration::get('PH_BLOG_DISPLAY_LIKES')}
				<span class="post-likes">
					<a href="#" data-guest="" data-post="{$post->id_simpleblog_post|intval}" class="simpleblog-like-button">
						<i class="fa fa-heart"></i> 
						<span>{$post->likes|intval}</span> {l s='likes'  mod='ph_simpleblog'}
					</a>
				</span>
			{/if}

			{if Configuration::get('PH_BLOG_DISPLAY_VIEWS')}
			<span class="post-views">
				<i class="fa fa-eye"></i> {$post->views|escape:'html':'UTF-8'} {l s='views'  mod='ph_simpleblog'}
			</span>
			{/if}

			{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native'}
			<span class="post-comments">
				<i class="fa fa-comments"></i> {$post->comments|escape:'html':'UTF-8'} {l s='comments'  mod='ph_simpleblog'}
			</span>
			{/if}
		</div><!-- .post-meta-info -->


		<span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				 <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      				<meta itemprop="url" content="{$urls.shop_domain_url}{$shop.logo}">
      				<meta itemprop="width" content="600">
     			    <meta itemprop="height" content="60">
				 </span>
				<meta itemprop="name" content="{$shop.name}">
		</span>

		{block name='post-featured-image'}
			{if $post->featured_image}
				<div class="post-featured-image"  itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="{$post->featured_image|escape:'html':'UTF-8'}" alt="{$post->title|escape:'html':'UTF-8'}" class="img-fluid" itemprop="url" />
					<meta itemprop="width" content="800">
					<meta itemprop="height" content="800">
				</div><!-- .post-featured-image -->
			{/if}
		{/block}
			
		<div class="post-content" itemprop="text">
			{block name='hook_blog_elementor'}
				{hook h='displayBlogElementor'}
			{/block}
		</div><!-- .post-content -->

		{if $related_products}
			{include file="module:ph_simpleblog/views/templates/front/related-products.tpl"}
		{/if}

		<div id="displayPrestaHomeBlogAfterPostContent">
			{hook h='displayPrestaHomeBlogAfterPostContent'}
		</div><!-- #displayPrestaHomeBlogAfterPostContent -->
		
		{* Native comments *}
		{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native'}
			{include file="module:ph_simpleblog/views/templates/front/comments/layout.tpl"}
		{/if}

		{* Facebook comments *}
		{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'facebook'}
			{include file="module:ph_simpleblog/views/templates/front/comments/facebook.tpl"}
		{/if}

		{* Facebook comments *}
		{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'disqus'}
			{include file="module:ph_simpleblog/views/templates/front/comments/disqus.tpl"}
		{/if}
				
	</div><!-- .ph_simpleblog -->
</div><!-- schema -->

	{if Configuration::get('PH_BLOG_FB_INIT')}
		<script>
			var lang_iso = '{$language.iso_code}_{$language.iso_code|@strtoupper}';
			{literal}(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/"+lang_iso+"/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			{/literal}
		</script>
	{/if}


{/block}
