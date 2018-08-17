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

<div class="panel">
	<div class="row">
		<div class="col-xs-4">
			<a target="_blank" href="{$everypay_link|escape:'htmlall':'UTF-8'}">
				<img src="{$path|escape:'htmlall':'UTF-8'}views/img/everypay.png" alt="{l s='Everypay' mod='everypay'}"/>
			</a>
		</div>
		<div class="col-xs-8">
			<h2 style="margin-top: 0">{l s='Everypay' mod='everypay'}</h2>
			<p>{l s='EveryPay is a card payment gateway service provider, enabling e-commerce merchants to collect credit and debit card online payments from their customers.' mod='everypay'}</p>
			<a target="_blank" href="https://portal.every-pay.eu/">{l s='Merchant Portal' mod='everypay'}</a> |
			<a target="_blank" href="https://every-pay.com/contact/">{l s='Contacts' mod='everypay'}</a> |
			<a target="_blank" href="{$everypay_doc|escape:'html':'UTF-8'}">{l s='Documentation' mod='everypay'}</a>
		</div>
	</div>
</div>
