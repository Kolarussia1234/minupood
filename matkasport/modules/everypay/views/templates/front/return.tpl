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

{capture name=path}
	{l s='EveryPay Return' mod='everypay'}
{/capture}
{if $transaction_result == 'completed'}
	<p class="alert alert-success">
		{l s='Your order has been completed successfully!' mod='everypay'}
	</p>
{else if $transaction_result == 'cancelled'}
	<p class="alert alert-warning">
		{l s='Transaction has been cancelled!' mod='everypay'}
	</p>
{else}
	<p class="alert alert-danger">
		{l s='Error: transaction has not been completed!' mod='everypay'}<br>
	</p>
	{if isset($opc) && $opc}
	<a class="everypayButton" href="{$link->getPageLink('order-opc', true, NULL, "submitReorder&id_order={$order_reference}")}">{l s='Try paying again' mod='everypay'}</a>
	{else}
	<a class="everypayButton" href="{$link->getPageLink('order', true, NULL, "submitReorder&id_order={$order_reference}")}">{l s='Try paying again' mod='everypay'}</a>
	{/if}
	
{/if}
{/block}