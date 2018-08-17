{if !$is_virtual_cart}
    {if $recyclablePackAllowed}
        <div id="supercheckout_recyclepack_container" class='order-shipping-extra' style="padding-bottom: 0 !important;">
            <input type="checkbox" name="recyclable" class="supercheckout-delivery-extra" id="recyclable" value="1" {if $recyclable == 1}checked="checked"{/if} />                        
            {l s='I would like to receive my order in recycled packaging.' mod='supercheckout'}                        
        </div>
    {/if}
    {if $gift.allowed}
        <div id="supercheckout-gift_container" class='order-shipping-extra' style="padding-bottom: 0 !important;">
            <input type="checkbox" class="supercheckout-delivery-extra" name="gift" id="gift" value="1" {if $gift.isGift == 1}checked="checked"{/if} />                        
            {$gift.label nofilter}
        </div>
        <div id="supercheckout-gift-comments" style="display:{if $gift.isGift == 1}block{else}none{/if}; margin-top: 0; margin-bottom: 15px;">
            <b>{l s='If you would like, you can add a note to the gift' mod='supercheckout'}:</b>
            <textarea id="gift_message" name="gift_comment" rows="8" >{$gift.message}</textarea>
        </div>
    {/if}
{/if}
{if $show_TOS && count($conditions_to_approve) > 0}
    <div id="supercheckout-agree">
        {foreach from=$conditions_to_approve item="condition" key="condition_name"}
            <label for="conditions_to_approve[{$condition_name}]">
                <input id="conditions_to_approve[{$condition_name}]" type="checkbox" name="conditions_to_approve[{$condition_name}]" value="1" {if $checkedTOS}checked="checked"{/if} />
                {$condition nofilter}
            </label>
        {/foreach}
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