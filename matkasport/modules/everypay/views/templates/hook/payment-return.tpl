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

{if $status == 'ok'}
	<p class="alert alert-success">{l s='Payment successfully processed' mod='everypay'}</p>
	<div class="box">
		<p>{l s='Order tracking' mod='everypay'} <a href="{$linkToOrder}">{l s='here.' mod='everypay'}</a></p>
	</div>
{else}
	<p class="alert alert-danger">{l s='Payment failed' mod='everypay'}</p>
{/if}