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

<h1 class="page-heading">
    {l s='Order summary' mod='everypay'}
</h1>
{assign var='current_step' value='payment'}
{if $nbProducts <= 0}
    <p class="alert alert-warning">
        {l s='Your shopping cart is empty.' mod='everypay'}
    </p>
{else}
    <form action="{$link->getModuleLink('everypay', 'validation', [], true)}" method="post">
        <div class="box cheque-box">
            <h3 class="page-subheading">
                {l s='Card payment' mod='everypay'}
            </h3>
            <p class="cheque-indent">
                <strong class="dark">
                    {l s='You have chosen to pay by card.' mod='everypay'} {l s='Here is a short summary of your order:' mod='everypay'}
                </strong>
            </p>
            <p>
                - {l s='The total amount of your order is' mod='everypay'}
                <span id="amount" class="price">{$total}</span>
                {* {if $use_taxes == 1}
                    {l s='(tax incl.)' mod='everypay'}
                {/if} *}
            </p>
            {* <p>
                -
                {if $currencies|@count > 1}
                    {l s='We allow several currencies to be sent via EveryPay.' mod='everypay'}
                    <div class="form-group">
                        <label>{l s='Choose one of the following:' mod='everypay'}</label>
                        <select id="currency_payment" class="form-control" name="currency_payment">
                            {foreach from=$currencies item=currency}
                                <option value="{$currency.id_currency}" {if $currency.id_currency == $cust_currency}selected="selected"{/if}>
                                    {$currency.name}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                {else}
                    {l s='We allow the following currency to be sent via EveryPay:' mod='everypay'}&nbsp;<b>{$currencies.0.name}</b>
                    <input type="hidden" name="currency_payment" value="{$currencies.0.id_currency}" />
                {/if}
            </p> *}
			<p>
				  {$description}
			</p>
            <p>
                - {l s='Please confirm your order by clicking "I confirm my order".' mod='everypay'}
            </p>
        </div><!-- .cheque-box -->
        <p class="cart_navigation clearfix" id="cart_navigation">
            <a class="button-exclusive btn btn-default" href="{$link->getPageLink('order', true, NULL, "step=3")}">
                <i class="icon-chevron-left"></i>{l s='Other payment methods' mod='everypay'}
            </a>
            <button class="btn btn-success" type="submit">
                <span>{l s='I confirm my order' mod='everypay'}<i class="icon-chevron-right right"></i></span>
            </button>
        </p>
        {if $saveCard == true}<input type="hidden" name="saveCard" value="1">{/if}
        {if $cardChoice}<input type="hidden" name="card_choice" value="{$cardChoice}">{/if}
    </form>
{/if}
{/block}