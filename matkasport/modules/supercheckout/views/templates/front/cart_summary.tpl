
    <table class="supercheckout-summary">
        <thead>
            <tr>                                
                <th style="display:{if $logged}{if $settings['cart_options']['product_name']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_name']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-name">{l s='Description' mod='supercheckout'}</th>
                <th style="display:{if $logged}{if $settings['cart_options']['product_model']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_model']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-model">{l s='Model' mod='supercheckout'}</th>
                <th style="display:{if $logged}{if $settings['cart_options']['product_qty']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_qty']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-qty" style="text-align:center;">{l s='Qty' mod='supercheckout'}</th>
                <th style="display:{if $logged}{if $settings['cart_options']['product_price']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_price']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-total">{l s='Price' mod='supercheckout'}</th>
                <th style="display:{if $logged}{if $settings['cart_options']['product_total']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_total']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-total">{l s='Total' mod='supercheckout'}</th>
                <th class="supercheckout-qty"></th>
            </tr>
        </thead>
        <tbody>
            {assign var='image_display' value=0}
            {assign var='odd' value=0}
            {assign var='have_non_virtual_products' value=false}

            {foreach $products as $product}
                {if $product.is_virtual == 0}
                    {assign var='have_non_virtual_products' value=true}
                {/if}
                {assign var='productId' value=$product.id_product}
                {assign var='product_url' value=$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)}
                {assign var='productAttributeId' value=$product.id_product_attribute}
                {assign var='odd' value=($odd+1)%2}

                <tr class="product-controls" id="product_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}">
                    <td style="display:{if $logged}{if $settings['cart_options']['product_name']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_name']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-name">
                        <div>
                            {if $logged}
                                {$image_display = $settings['cart_options']['product_image']['logged']['display']}
                            {else}
                                {$image_display = $settings['cart_options']['product_image']['guest']['display']}
                            {/if}
                            {if $image_display eq 1}
                                <img width='{$settings['cart_image_size']['width']}' height='{$settings['cart_image_size']['height']}' src="{$product.cover.bySize.cart_default.url nofilter}" alt='{$product.name}' />
                            {/if}
                        </div>
                    </td>
                    <td style="display:{if $logged}{if $settings['cart_options']['product_model']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_model']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-model">
                    {if $product.reference}{$product.reference}{/if}
                </td>
                <td style="display:{if $logged}{if $settings['cart_options']['product_qty']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_qty']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-qty supercheckout-product-qty-input" >

                    <input type="hidden" value="{$product.quantity|intval}" name="quantity_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}_hidden" />
                    {if isset($settings['qty_update_option']) && $settings['qty_update_option'] eq 0 }
                        <div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="upQty('quantity_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}')"><span class="plus-span">+</span></a></div>
                        <div><input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}" value="{$product.quantity|intval}" ></div>

                        <div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="downQty('quantity_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}')" ><span class="minus-span">-</span></a></div>
                    {else}
                        <input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}" value="{$product.quantity|intval}" ><br>
                        <a href="javascript:void(0)" id="demo_2_s" title="{l s='update quantity' mod='supercheckout'}" onclick="updateQtyByBtn('quantity_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}')" ><small>{l s='Update' mod='supercheckout'}</small></a>
                            {/if}
                </td>
                <td style="display:{if $logged}{if $settings['cart_options']['product_price']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_price']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-unit-total">
                    <span class="price">{$product.price nofilter}</span>
                    {if $product.unit_price_full}
                        <div class="unit-price-cart">{$product.unit_price_full nofilter}</div>
                    {/if}
                </td>
                <td id="total_product_price_{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}" style="display:{if $logged}{if $settings['cart_options']['product_total']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_total']['guest']['display'] eq 1}{else}none{/if}{/if};" class="supercheckout-total">
                    {$product.total nofilter}
                </td>
                <td class="supercheckout-qty" style="display:{if $logged}{if $settings['cart_options']['product_name']['logged']['display'] eq 1 || $settings['cart_options']['product_model']['logged']['display'] eq 1 || $settings['cart_options']['product_qty']['logged']['display'] eq 1 || $settings['cart_options']['product_price']['logged']['display'] eq 1 || $settings['cart_options']['product_total']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['cart_options']['product_name']['guest']['display'] eq 1 || $settings['cart_options']['product_model']['guest']['display'] eq 1 || $settings['cart_options']['product_qty']['guest']['display'] eq 1 || $settings['cart_options']['product_price']['guest']['display'] eq 1 || $settings['cart_options']['product_total']['guest']['display'] eq 1}{else}none{/if}{/if};">
                    <a href="javascript://" id="{$product.id_product|intval}_{$product.id_product_attribute|intval}_{$product.id_address_delivery|intval}_{$product.id_customization|intval}" onclick="deleteProductFromCart(this.id);" class="removeProduct supercheckout-product-delete"><div  title="Delete"></div></a>
                </td>
            </tr>
                <tr class="details">
                    <td>

                        {if $image_display eq 1}
                            <a href="{$product_url nofilter}">{$product.name}</a>
                        {else}
                            <a data-toggle="popover" data-title="{$product.name}" data-content="<img width='{$settings['cart_image_size']['width']}' height='{$settings['cart_image_size']['height']}' src='{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}' alt='{$product.name}' />" data-placement="right" href="{$product_url nofilter}">{$product.name}</a>
                        {/if}
                    </td>
                    <td colspan="5" class="attributes">
                        {if isset($product.attributes) && count($product.attributes) > 0}
                            {foreach from=$product.attributes key="attribute" item="value"}
                                {if $attribute !== "Värv filtreerimiseks"}
                                <small><a href="{$product_url nofilter}">{$attribute}: {$value}</a></small>
                                {/if}
                            {/foreach}
                        {/if}
                        {if $product.customizations|count}
                            {foreach from=$product.customizations item="customization"}
                                {foreach from=$customization.fields item="field"}
                                    <small>
                                        {$field.label}:
                                        {if $field.type == 'text'}
                                            {if (int)$field.id_module}
                                                {$field.text nofilter}
                                            {else}
                                                {$field.text}
                                            {/if}
                                        {elseif $field.type == 'image'}
                                            <img src="{$field.image.small.url}">
                                        {/if}
                                    </small>
                                {/foreach}
                            {/foreach}
                        {/if}
                    </td>
                </tr>
            {/foreach}
    </tbody>
</table>
<table class="supercheckout-totals">
    <tbody>
        {foreach from=$subtotals item="subtotal"}
            {if isset($subtotal.value) && $subtotal.value}
                {if $subtotal.type == 'products'}
                    <tr id="supercehckout_summary_total_{$subtotal.type}" style="display:{if $logged}{if $settings['order_total_option']['product_sub_total']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['order_total_option']['product_sub_total']['guest']['display'] eq 1}{else}none{/if}{/if};">
                    {else}
                    <tr id="supercehckout_summary_total_{$subtotal.type}">
                    {/if}
                    <td class="title"><b>{$subtotal.label}</b></td>
                    <td class="value"><span id="supercehckout_total_{$subtotal.type}_value" class="price">{$subtotal.value nofilter}</span></td>
                </tr>
            {/if}
        {/foreach}
        {if $vouchers.allowed}
            {foreach $vouchers.added as $voucher}
                <tr id="cart_discount_{$voucher.id_cart_rule}" class="cart_discount" style="display:{if $logged}{if $settings['order_total_option']['voucher']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['order_total_option']['voucher']['guest']['display'] eq 1}{else}none{/if}{/if};">
                    <td class="title"><b>{$voucher.name}<a href="javascript:void(0)" onclick="removeDiscount('{$voucher.id_cart_rule|intval}')"><div title="Redeem" class="removeProduct"></div></a></td></b></td>
                    <td class="value"><span class="price">{$voucher.reduction_formatted nofilter}</span> </td>                                
                </tr>
            {/foreach}
            <tr id="supercheckout_voucher_input_row" style="display:{if $logged}{if $settings['order_total_option']['voucher']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['order_total_option']['voucher']['guest']['display'] eq 1}{else}none{/if}{/if};">
                <td class="title"><b>{l s='Voucher' mod='supercheckout'}</b></td>
                <td class="value" id="voucher-form">
                    <input  id="discount_name" name="discount_name" type="text" class="voucherText" value="">
                    <input type="hidden" value="1" name="submitDiscount">
                    <input id="button-coupon" type="button" onClick="callCoupon();" class="orangebuttonapply" value="{l s='Apply' mod='supercheckout'}">
                </td>
            </tr>
        {else}
            <tr id="supercheckout_voucher_input_row" style="display:none;"></tr>
        {/if}
        <tr style="display:{if $logged}{if $settings['order_total_option']['total']['logged']['display'] eq 1}{else}none{/if}{else}{if $settings['order_total_option']['total']['guest']['display'] eq 1}{else}none{/if}{/if};">
            {if $priceDisplay == 1}
            <td class="title"><b>{l s='Total' mod='supercheckout'} {l s='(Tax excl.)' mod='supercheckout'}</b></td>
            <td class="value"><span id="total_price" class="price">{$totals.total.value nofilter}</span></td>
            {else}
            <td class="title"><b>{l s='Total' mod='supercheckout'} {l s='(Tax incl.)' mod='supercheckout'}</b></td>
            <td class="value"><span id="total_price" class="price">{$totals.total.value nofilter}</span></td>
            {/if}
        </tr>
    </tbody>
</table>
<div id="highlighted_cart_rules">
    {if count($other_available_vouchers) > 0}
        <p id="title" class="title-offers" style="font-weight: 600;color: black!important;">{l s='Take advantage of our exclusive offers' mod='supercheckout'}:</p>
        <div id="display_cart_vouchers">
            {foreach $other_available_vouchers as $voucher}
                {if $voucher.code != ''}<span onclick="$('#discount_name').val('{$voucher.code}');
                        return false;" class="voucher_name" data-code="{$voucher.code}">{$voucher.code}</span> - {/if}{$voucher.name}<br />
            {/foreach}
        </div>
    {/if}
</div>
        
<!-- INSERT INTO #CART BLOCK -->
<!-- Start - Code to insert custom fields in cart block -->
<div class="div_custom_fields">
{foreach from=$array_fields item=field}
    {if $field['position'] eq 'cart_block'}
    <div class="supercheckout-blocks">
            {if $field['type'] eq "textbox"}
                <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                <input type="text" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" value="{$field['default_value']}" class="supercheckout-large-field width_100">
                <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
            {/if}

            {if $field['type'] eq "textarea"}
                <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                <textarea name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" class="supercheckout-large-field width_100" style="width: 100%; height: 100px;">{$field['default_value']}</textarea>
                <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
            {/if}

            {if $field['type'] eq "selectbox"}
                <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                <select name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" class="supercheckout-large-field width_100">
                {foreach from=$field['options'] item=field_options}
                    <option {if $field_options['default_value'] eq $field_options['option_value']}selected{/if} value="{$field_options['option_value']}">{$field_options['option_label']}</option>
                {/foreach}
                </select>
                <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
            {/if}

            {if $field['type'] eq "radio"}
                <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                {assign var=radio_counter value=1}
                {foreach from=$field['options'] item=field_options}
                    <div class="supercheckout-extra-wrap">
                        <p>
                            <div class="radio" id="uniform-field_{$field['id_velsof_supercheckout_custom_fields']}"><span>
                                    <input type="radio" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" value="{$field_options['option_value']}" {if $field_options['default_value'] eq $field_options['option_value']}checked{/if}>
                                </span></div>
                            <label for="field_{$field['id_velsof_supercheckout_custom_fields']}">{$field_options['option_label']}</label>
                        </p>
                    </div>
                {assign var=radio_counter value=$radio_counter+1}
                {/foreach}
                <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
            {/if}

            {if $field['type'] eq "checkbox"}
            <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
            {foreach from=$field['options'] item=field_options}
                <div class="input-box input-field_{$field['id_velsof_supercheckout_custom_fields']}">
                    <div class="checker" id="uniform-field_{$field['id_velsof_supercheckout_custom_fields']}">
                        <span class="checked">
                            <input {if $field_options['default_value'] eq $field_options['option_value']}checked{/if} type="checkbox" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}][]" value="{$field_options['option_value']}">
                        </span>
                    </div>
                    <label for="field_{$field['id_velsof_supercheckout_custom_fields']}"><b>{$field_options['option_label']}</b></label>
                </div>
            {/foreach}
            <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
        {/if}
        </div>
    {/if}
{/foreach}
</div>
<!-- End - Code to insert custom fields in registration form block -->
                
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