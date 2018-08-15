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
<div id="simpleblog-post-comments" class="block-section">

	<h3 class="section-title"><span>{l s='Comments' mod='ph_simpleblog'} ({$post->comments})</span></h3>

	<div class="post-comments-list">
		{if $post->comments}
			{foreach $comments as $comment}
			<div class="post-comment post-comment-{$comment.id|intval}">
				<div class="post-comment-meta text-muted">
					<i class="fa fa-pencil"></i>
					{l s='Posted by' mod='ph_simpleblog'} <span class="post-comment-author">{$comment.name|escape:'html':'UTF-8'}</span> {l s='on' mod='ph_simpleblog'} <span class="post-comment-date">{$comment.date_add|escape:'html':'UTF-8'}</span>
				</div><!-- .post-comment-meta -->
				<div class="post-comment-content">
					{$comment.comment|escape:'html':'UTF-8'}
				</div><!-- .post-comment-content -->
			</div><!-- .post-comment -->
			{/foreach}
		{else}
			<div class="warning alert alert-warning">
				{l s='No comments at this moment' mod='ph_simpleblog'}
			</div><!-- .warning -->
		{/if}
	</div><!-- .post-comments-list -->

	{if isset($smarty.get.confirmation)}
		<div class="success alert alert-success">
			{if $smarty.get.confirmation == 1}
				{l s='Your comment was sucessfully added.' mod='ph_simpleblog'}
			{else}
				{l s='Your comment was sucessfully added but it will be visible after moderator approval.' mod='ph_simpleblog'}
			{/if}
		</div><!-- .success alert alert-success -->
	{/if}

	{* Comment form *}
	{include file="module:ph_simpleblog/views/templates/front/comments/form.tpl"}

</div><!-- #post-comments -->