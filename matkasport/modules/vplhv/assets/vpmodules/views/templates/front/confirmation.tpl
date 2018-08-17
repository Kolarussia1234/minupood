{*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, Pangalingid
*  @copyright 2018 Veebipoed.ee, Pangalingid
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file='page.tpl'}

{block name='page_content'}
{if $formdata.VK_MAC !== 0}
<p class="alert alert-success">{l s='Your Purchase is confirmed!' mod='vpmodules'}</p>
<div class="box">
	<p>{l s='Do not forget to click the "Return to the Merchant" button after successful payment!' mod='vpmodules'}<p>
	<p>{l s='Please click button below if you are not redirected within a 3 seconds' mod='vpmodules'}<p>
</div>
<p>
	<form name='{$moduleName}' id='{$moduleName}' class='bankform' action='{$bank_url}' target='_self' method='POST'>
		{foreach from=$formdata key=name item=value}
		<input type="hidden" name="{$name}" value="{$value}"/>
		{/foreach}
		<p class="cart_navigation clearfix" id="cart_navigation">
			<button id="forwardtobank" class="button btn btn-default button-medium" type='submit'>
				<span>{l s='Start a payment' mod='vpmodules'}<i class="icon-chevron-right right"></i></span>
			</button>
		</p>
	</form>
</p>
<script>
	setTimeout(function() {
		document.getElementById('{$moduleName}').submit();
	}, 3000)
</script>
{else}
<p class="alert alert-warning">{l s='Your Purchase is cancelled!' mod='vpmodules'}</p>
{if isset($keyError)}
	<div class="box">
		<p>{$keyError}<p>
	</div>
{/if}
{/if}
{/block}