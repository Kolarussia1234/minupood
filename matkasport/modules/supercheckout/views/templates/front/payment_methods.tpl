{if isset($payment_method_not_required)}
    <div class='supercheckout-checkout-content' style='display:block'>
        <div class='permanent-warning not-required-msg'>{l s='No payment method required.' mod='supercheckout'}</div>
    </div>
{elseif count($payment_methods) == 0}
    <div class='supercheckout-checkout-content' style='display:block'>
        <div class='permanent-warning not-required-msg'>{l s='No payment method is available.' mod='supercheckout'}</div>
    </div>
{else}
    <table class="radio">

        {foreach from=$payment_methods item="option"}
            {if $option.additionalInformation|strstr:"mkbillingapi" || $option.additionalInformation|strstr:"vpmodules"}
                <tr class="highlight {$option.module_name}{if $option.additionalInformation|strstr:"mkbillingapi"}mkbillingapi{/if}{if $option.additionalInformation|strstr:"vpmodules"}vpmodules{/if}">
                    <td>
                        <input type="radio" name="payment_method" data-module-name="{$option.module_name nofilter}" value="{$option.id_module|intval}" id="{$option.id}" {if $option.id_module == $selected_payment_method}checked="checked"{/if} class="{if $option.binary}binary{/if} {if $option.additionalInformation|strstr:"mkbillingapi"}mkbillingapi{/if}{if $option.additionalInformation|strstr:"vpmodules"}vpmodules{/if}"/>
                    </td>
                    <td>
                        <label id="payment_lbl_{$option.id_module|intval}" for="{$option.call_to_action_text}">
                            {if $display_payment_style neq 0}
                                {if $option.payment_image_url neq ''}
                                    <img src='{$option.payment_image_url}' alt='{$option.call_to_action_text}' {if isset($option.width) && $option.width !="" && $option.width !="auto"}width='{$option.width}'{else} width="50"{/if} {if isset($option.height) && $option.height !="" && $option.height !="auto"}height='{$option.height}'{/if}/>{if $display_payment_style neq 2}<br>{/if}
                                {/if}
                            {/if}

                            {if $display_payment_style neq 2}
                                <span id='payment_method_name_{$option.id_module|intval}'>{$option.call_to_action_text}</span>
                            {/if}
                        </label>
                    </td>
                </tr>
            {/if}

        {/foreach}
        <tr class="payment_methods_additional_container bankpayments">
            <td></td>
            <td>
                {foreach from=$payment_methods item="option"}
                    {if $option.additionalInformation|strstr:"mkbillingapi" || $option.additionalInformation|strstr:"vpmodules"}

                        {$option.additionalInformation nofilter}
                        <div id="pay-with-form">
                            {if $option.form}
                                {$option.form nofilter}
                            {else}
                                <form id="payment-form" method="POST" action="{$option.action nofilter}">
                                    {foreach from=$option.inputs item=input}
                                        <input type="{$input.type}" name="{$input.name}" value="{$input.value}">
                                    {/foreach}
                                    <button style="display:none" id="pay-with-{$option.id}" type="submit"></button>
                                </form>
                            {/if}
                        </div>
                    {/if}

                {/foreach}
        {foreach from=$payment_methods item="option"}

            {if !$option.additionalInformation|strstr:"mkbillingapi" && !$option.additionalInformation|strstr:"vpmodules"}
                <tr class="highlight {$option.module_name}">
                    <td>
                        <input type="radio" name="payment_method" data-module-name="{$option.module_name nofilter}" value="{$option.id_module|intval}" id="{$option.id}" {if $option.id_module == $selected_payment_method}checked="checked"{/if} class="{if $option.binary}binary{/if}"/>
                    </td>
                    <td>
                        <label id="payment_lbl_{$option.id_module|intval}" for="{$option.call_to_action_text}">
                            {if $display_payment_style neq 0}
                                {if $option.payment_image_url neq ''}
                                    <img src='{$option.payment_image_url}' alt='{$option.call_to_action_text}' {if isset($option.width) && $option.width !="" && $option.width !="auto"}width='{$option.width}'{else} width="50"{/if} {if isset($option.height) && $option.height !="" && $option.height !="auto"}height='{$option.height}'{/if}/>{if $display_payment_style neq 2}<br>{/if}
                                {/if}
                            {/if}

                            {if $display_payment_style neq 2}
                                <span id='payment_method_name_{$option.id_module|intval}'>{$option.call_to_action_text}</span>
                            {/if}
                        </label>
                    </td>
                </tr>

                <tr class="payment_methods_additional_container  {$option.module_name}{if $option.additionalInformation|strstr:"mkbillingapi"}mkbillingapi{/if}{if $option.additionalInformation|strstr:"vpmodules"}vpmodules{/if}">
                    <td></td>
                    <td>
                        {if $option.additionalInformation}
                            <div class="supercheckout-blocks js-additional-information definition-list additional-information">
                                {$option.additionalInformation nofilter}
                            </div>

                        {/if}
                        <div id="pay-with-form">
                            {if $option.form}
                                {$option.form nofilter}
                            {else}
                                <form id="payment-form" method="POST" action="{$option.action nofilter}">
                                    {foreach from=$option.inputs item=input}
                                        <input type="{$input.type}" name="{$input.name}" value="{$input.value}">
                                    {/foreach}
                                    <button style="display:none" id="pay-with-{$option.id}" type="submit"></button>
                                </form>
                            {/if}
                        </div>
                    </td>
                </tr>
            {/if}

        {/foreach}
           </td>
        </tr>
    </table>

    <div id="payment_methods_binaries" style="display:none;">
        {hook h='displayPaymentByBinaries'}
    </div>
{/if}
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