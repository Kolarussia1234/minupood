<div class="supercheckout-blocks js-additional-information definition-list additional-information">
    {$payment_method_content.additionalInformation nofilter}
</div>
<div id="pay-with-form">
    {if $payment_method_content.form}
        {$payment_method_content.form nofilter}
    {else}
        <form id="payment-form" method="POST" action="{$payment_method_content.action nofilter}">
          {foreach from=$payment_method_content.inputs item=input}
            <input type="{$payment_method_content.type}" name="{$payment_method_content.name}" value="{$payment_method_content.value}">
          {/foreach}
          <button style="display:none" id="pay-with-{$payment_method_content.id}" type="submit"></button>
        </form>
    {/if}
</div>
{*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer tohttp://www.prestashop.com for more information.
* We offer the best and most useful modules PrestaShop and modifications for your online store.
*
* @category  PrestaShop Module
* @author    knowband.com <support@knowband.com>
* @copyright 2016 Knowband
*}