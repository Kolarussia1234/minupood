{*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, EveryPay
*  @copyright 2015 Veebipoed.ee, EveryPay
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}
{extends "$layout"}
{block name="content"}
{literal}
<script>
	window.onload = function() { document.getElementById("everypay_validation_form").submit(); }
</script>
{/literal}
<p class="alert">
	{l s='If page did not redirect automatically, click "Proceed to Payment" button.' mod='everypay'}
</p>
<form id="everypay_validation_form" action="{$everypay_url}" method="post" style="margin-bottom: 25px; margin-left: 20px;">
	<input type="hidden" name="hmac" value="{$hmac}">
	<input type="hidden" name="hmac_fields" value="{$hmac_fields}">
	<input type="hidden" name="transaction_type" value="{$transaction_type}">
	<input type="hidden" name="locale" value="{$locale}">
	<input type="hidden" name="amount" value="{$amount}">
	<input type="hidden" name="api_username" value="{$api_username}">
	<input type="hidden" name="account_id" value="{$account_id}">
	
{* ONLY FOR MATKASPORT *}
	{* <input type="hidden" name="billing_address" value="{$billing_address}">
	<input type="hidden" name="billing_city" value="{$billing_city}">
	<input type="hidden" name="billing_country" value="{$billing_country}">
	<input type="hidden" name="billing_postcode" value="{$billing_postcode}"> *}
	<input type="hidden" name="callback_url" value="{$callback_url}">
	<input type="hidden" name="customer_url" value="{$customer_url}">

{* ONLY FOR MATKASPORT *}
	{* <input type="hidden" name="delivery_address" value="{$delivery_address}">
	<input type="hidden" name="delivery_city" value="{$delivery_city}">
	<input type="hidden" name="delivery_country" value="{$delivery_country}">
	<input type="hidden" name="delivery_postcode" value="{$delivery_postcode}"> *}
	<input type="hidden" name="email" value="{$email}">
	<input type="hidden" name="nonce" value="{$nonce}">
	<input type="hidden" name="order_reference" value="{$order_reference}">
	<input type="hidden" name="timestamp" value="{$timestamp}">
	<input type="hidden" name="user_ip" value="{$user_ip}">
	<input type="hidden" name="request_cc_token" value="{$request_cc_token}">
	{if isset($cc_token)}<input type="hidden" name="cc_token" value="{$cc_token}">{/if}
	<input class="btn btn-success" type="submit" value="{l s='Proceed to Payment' mod='everypay'}">
</form>
{/block}