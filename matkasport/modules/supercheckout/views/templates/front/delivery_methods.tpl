{if isset($is_virtual_cart) && $is_virtual_cart}
    <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
    <div class="supercheckout-checkout-content" style="display:block">
        <div class="not-required-msg" style="display: block;">{l s='No Delivery Method Required' mod='supercheckout'}</div>
    </div>
{else}
    {if isset($shipping_errors) && is_array($shipping_errors)}
        {foreach from=$shipping_errors item='shippig_error'}
            <div class="supercheckout-checkout-content" style="display:block">
                <div class="permanent-warning" style="display: block;">{$shippig_error}</div>
            </div>
        {/foreach}
    {else}
        <div class="supercheckout-checkout-content" style="display:block"></div>
        <div id="hook-display-before-carrier">
            {$hookDisplayBeforeCarrier nofilter}
        </div>
        {if $delivery_options|count}
            <table class="radio">

                {foreach from=$delivery_options item=carrier key=carrier_id}
                    

                    <tr class="highlight">
                        <td>
                            {if !empty($delivery_option) && $delivery_option == $carrier_id}
                                <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[{$id_address|intval}]" value="{$carrier_id nofilter}" id="shipping_method_{$id_address|intval}_{$carrier.id|intval}" checked="" />
                            {else if isset($default_shipping_method) && $carrier.id == $default_shipping_method}
                                <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[{$id_address|intval}]" value="{$carrier_id nofilter}" id="shipping_method_{$id_address|intval}_{$carrier.id|intval}" checked="checked" />
                            {else}
                                <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[{$id_address|intval}]" value="{$carrier_id nofilter}" id="shipping_method_{$id_address|intval}_{$carrier.id|intval}" />
                            {/if}
                        </td>
                        <td class="shipping_info">
                            <label for="shipping_method_{$id_address|intval}_{$carrier.id|intval}">
                                {if $display_carrier_style neq 0}
                                    <img src="{$carrier.logo nofilter}" alt="{$carrier.name}" {if isset($carrier.logo_width) && $carrier.logo_width != "" && $carrier.logo_width != 'auto'}width="{$carrier.logo_width}"{else}width='50'{/if} {if isset($carrier.logo_height) && $carrier.logo_height != "" && $carrier.logo_height != "auto"}height="{$carrier.logo_height}"{/if}/>{if $display_carrier_style neq 2}<br>{/if}
                                {/if}
                                {if $display_carrier_style neq 2}
                                    {$carrier.name}                                                       
                                {/if}
                            </label>
                            {* <span class="supercheckout-shipping-small-title">{$carrier.delay}</span> *}
                        </td>
                        <td class="">
                            <label for="shipping_method_{$id_address|intval}_{$carrier.id|intval}">
                                {$carrier.price}
                            </label>
                        </td>
                        {if $carrier.name == "SmartPost"}
                        <tr class="selects_for_shipping">
                            <td 
                                onclick='document.getElementById(shipping_method_{$id_address|intval}_{$carrier.id|intval});shipping_method_{$id_address|intval}_{$carrier.id|intval}.checked=shipping_method_{$id_address|intval}_{$carrier.id|intval}, updateCarrierOnDeliveryChange()'
                                class=""
                            >
                                {hook h="displayCarrierExtraContent" module=$carrier.external_module_name mod="vp_smartpost"}
                            </td>
                        </tr>
                        {elseif $carrier.name == "Omniva"}
                        <tr class="selects_for_shipping">
                            <td 
                                onClick='document.getElementById(shipping_method_{$id_address|intval}_{$carrier.id|intval});shipping_method_{$id_address|intval}_{$carrier.id|intval}.checked=shipping_method_{$id_address|intval}_{$carrier.id|intval}, updateCarrierOnDeliveryChange()' 
                            >
                                {hook h="displayCarrierExtraContent" module=$carrier.external_module_name mod="vp_omniva"}
                            </td>
                        </tr>
                        {elseif $carrier.name == "SmartKuller"}
                        <tr class="selects_for_shipping">
                            <td 
                                onClick='document.getElementById(shipping_method_{$id_address|intval}_{$carrier.id|intval});shipping_method_{$id_address|intval}_{$carrier.id|intval}.checked=shipping_method_{$id_address|intval}_{$carrier.id|intval}, updateCarrierOnDeliveryChange()'
                            >
                                <input type="hidden" id="smartkullerID" value="{$carrier.id|intval}" />
                                {hook h="displayCarrierExtraContent" module=$carrier.external_module_name mod="smartcarrier"}
                                {hook h="displayCarrierExtraContent" module=$carrier.external_module_name mod="vp_smartcarrier"}
                            </td >    
                        </tr>
                        {elseif $carrier.external_module_name == "selfpickup" ||  $carrier.external_module_name == "vp_selfpickup"}
                        <tr class="selfpickup selects_for_shipping">
                            <td
                                onClick='document.getElementById(shipping_method_{$id_address|intval}_{$carrier.id|intval});shipping_method_{$id_address|intval}_{$carrier.id|intval}.checked=shipping_method_{$id_address|intval}_{$carrier.id|intval}, updateCarrierOnDeliveryChange()'
                            >
                                <input type="hidden" id="selfpickUpReferenceID" value="{$carrier.id|intval}" />
                                {hook h="displayCarrierExtraContent" module=$carrier.external_module_name mod="selfpickup"}
                                {hook h="displayCarrierExtraContent" module=$carrier.external_module_name mod="vp_selfpickup"}
                            </td >
                        </tr>
                        {/if}
                    </tr>
                {/foreach}
            </table>
            <script>
                updateCarrierOnDeliveryChange();
            </script>
        {else}
            <div class="supercheckout-checkout-content" style="display:block">
                <div class="permanent-warning" style="display: block;">{l s='No Delivery Method Available' mod='supercheckout'}</div>
            </div>
        {/if}
        <div id="hook-display-after-carrier">
            {$hookDisplayAfterCarrier nofilter}
        </div>
    {/if}
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