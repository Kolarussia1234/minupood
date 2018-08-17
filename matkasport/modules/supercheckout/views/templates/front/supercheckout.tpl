{extends file=$layout}
{block name='content'}
    {capture name=path}
    {l s='SuperCheckout' mod='supercheckout'}
    {/capture}
    {if !isset($empty)}
    <script>
        var supercheckoutLayout = {$settings['layout']|intval};

        var supercheckout_image_path = "{$module_image_path nofilter}";
        var empty_cart_warning = "{l s='Your cart is empty' mod='supercheckout'}";
        var notification = "{$notification}";
        var warning = "{$warning}";
        var product_remove_success = "{$product_remove_success}";
        var product_qty_update_success = "{$product_qty_update_success}";
        var freeShippingTranslation = "{l s='Free Shipping' mod='supercheckout'}";
        var noShippingRequired = "{l s='No Delivery Method Required' mod='supercheckout'}";
        var ShippingRequired = "{l s='Delivery Method Required' mod='supercheckout'}";
        var paymentRequired = "{l s='Payment Method Required' mod='supercheckout'}";
        var updateSameQty = "{l s='No change found in quantity' mod='supercheckout'}";
        var scInvalidQty = "{l s='Invalid Quantity' mod='supercheckout'}";
        var scOtherError = "{l s='Technical Error Occured. Please contact to support.' mod='supercheckout'}";
        var commentInvalid = "{l s='Message is in invalid format' mod='supercheckout'}";
        var tosRequire = "{l s='Please acccept our terms & conditions before confirming your order' mod='supercheckout'}";
        var requestToLogin = "{l s='Please login first' mod='supercheckout'}";
        var ajaxRequestFailedMsg = "{l s='TECHNICAL ERROR- Request Failed' mod='supercheckout'}";
        var validationfailedMsg = "{l s='Please provide required Information' mod='supercheckout'}";
        var totalVoucherText = "{l s='Total Vouchers' mod='supercheckout'}";
        var tax_incl_text = "{l s='(Tax incl.)' mod='supercheckout'}";
        var tax_excl_text = "{l s='(Tax excl.)' mod='supercheckout'}";
        var idAddress_delivery = {$id_address_delivery|intval};
        var scp_use_taxes = 1;

        var scp_guest_tracking_url = "{$link->getPageLink("guest-tracking", true)|addslashes}";		//Variable contains url, escape not required
        var scp_history_url = "{$link->getPageLink("history", true)|addslashes}";	//Variable contains url, escape not required
        var payment_content_id = 'center_column';
        var scp_required_tos = {$settings['confirm']['term_condition'][$user_type]['require']|intval};
        var show_delivery_add_for_virtualcart = false;
        {if $show_delivery_add_for_virtualcart eq true}
            show_delivery_add_for_virtualcart = true;
        {/if}
        var is_virtual_cart = false;
        {if $is_virtual_cart eq true}
            is_virtual_cart = true;
        {/if}
        var cart_update_url = "{$link->getPageLink('cart') nofilter}";
        var orderOpcUrl = "{$link->getPageLink("order-opc", true) nofilter}";
        var button_background = "{$settings['customizer']['button_color']}";
        var required_error = "{l s='Required Field' mod='supercheckout'}";
        var invalid_email = "{l s='Email is invalid' mod='supercheckout'}";
        var pwd_error = "{l s='(Five characters minimum)' mod='supercheckout'}";
        var invalid_city = "{l s='Special Characters !<>;?=+@#"°{}_$% are not allowed' mod='supercheckout'}";
        var invalid_address = "{l s='Special Characters !<>?=+@{}_$% are not allowed' mod='supercheckout'}";
        var invalid_title = "{l s='Special Characters <>={} are not allowed' mod='supercheckout'}";
        var invalid_number = "{l s='Only +.-() and numbers are allowed' mod='supercheckout'}";
        var invalid_other_info = "{l s='Special Characters <>{} are not allowed' mod='supercheckout'}";
        var invalid_dob = "{l s='Invalid Date of Birth' mod='supercheckout'}";
        var invalid_name = "{l s='Name is invalid' mod='supercheckout'}";
        var number_error = "{l s='Numbers not allowed' mod='supercheckout'}";
        var toc_error = "{l s='Please acccept our terms & conditions before confirming your order' mod='supercheckout'}";
        var order_place_confirmation = "{l s='All the information provided by you are correct?' mod='supercheckout'}";
        var splchar_error = "{l s='Special Characters !<>,;?=+()@#"°{}_$%: are not allowed' mod='supercheckout'}";
        var inline_validation = {$settings['inline_validation']['enable']|intval};
        {if isset($settings['qty_update_option']) && $settings['qty_update_option'] eq 0 }
            var update_qty_button = 1;
        {else}
            var update_qty_button = 0;
        {/if}
        {if isset($guest_information) && $guest_information != '' }
            var guest_information = JSON.parse('{$guest_information|json_encode}');
        {/if}            
        {urldecode($settings['custom_js'])}    //Variable contains custom js code, escape not required
    </script>
    {assign var='login_boxes_width' value=50|intval}
    {if $settings['fb_login']['enable'] || $settings['fb_login']['enable']}
        {$login_boxes_width = 33}
    {/if}
    <style>
    {literal}    
    .supercheckout_top_boxes{width:{/literal}{$login_boxes_width|intval}{literal}%;}
    {/literal}
    {urldecode($settings['custom_css'])}{*Variable contains css content, escape not required*}

        #supercheckout-fieldset .orangebutton {
        background-color:#{$settings['customizer']['button_color']};
        {if $settings['customizer']['button_color'] == 'F77219'}
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        {else}
            background : #{$settings['customizer']['button_color']};
            {/if}

        border: 1px solid #{$settings['customizer']['button_border_color']} !important;
        color: #{$settings['customizer']['button_text_color']} !important;
        border-bottom:3px solid #{$settings['customizer']['border_bottom_color']} !important;
        }
        #supercheckout-fieldset .orangebutton:hover {
        background-color:#{$settings['customizer']['button_color']};
        {if $settings['customizer']['button_color'] == 'F77219'}
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        {/if}

        border: 1px solid #{$settings['customizer']['button_border_color']} !important;
        border-bottom:3px solid #{$settings['customizer']['border_bottom_color']} !important;
    }
    #supercheckout-fieldset .orangebuttonsmall {
        background-color:#{$settings['customizer']['button_color']};
        {if $settings['customizer']['button_color'] == 'F77219'}
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        {else}
            background : #{$settings['customizer']['button_color']};
            {/if}

        border: 1px solid #{$settings['customizer']['button_border_color']} !important;
        color: #{$settings['customizer']['button_text_color']} !important;
    }
    #supercheckout-fieldset .orangebuttonsmall:hover {
        background-color:#{$settings['customizer']['button_color']};
        {if $settings['customizer']['button_color'] == 'F77219'}
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        {/if}

        border: 1px solid #{$settings['customizer']['button_border_color']} !important;
    }
    #supercheckout-fieldset .orangebuttonapply {
        background-color:#{$settings['customizer']['button_color']}; 
        {if $settings['customizer']['button_color'] == 'F77219'}
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        {else}
        background : #{$settings['customizer']['button_color']};
        {/if}

         border: 1px solid #{$settings['customizer']['button_border_color']} !important;
         color: #{$settings['customizer']['button_text_color']} !important;
    }
    #supercheckout-fieldset .orangebuttonapply:hover {
        background-color:#{$settings['customizer']['button_color']};
        {if $settings['customizer']['button_color'] == 'F77219'}
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        {/if}

        border: 1px solid #{$settings['customizer']['button_border_color']} !important;
    }

    </style>
    {*{if isset($HOOK_EXTRACARRIER)}*}
    {*{$HOOK_EXTRACARRIER}{*Variable contains html content, escape not required*}
    {*{/if}*}
    <a style="display:none;" href="javascript:void(0)" id="bancasella_process_payment" ></a>
    {capture name=path}<span class="navigation_page">{l s='Your shopping cart' mod='supercheckout'}</span>{/capture}
    <div id="fb-root"></div>
    <div id="supercheckout-empty-page-content" class="supercheckout-empty-page-content" style="display:block">
    {if isset($velsof_errors) && count($velsof_errors) > 0}

        <div class="permanent-warning">
            {foreach $velsof_errors as $err}
                {$err}<br>
            {/foreach}</div>
    {/if}
    </div>
    {hook h='displayPaymentTop'}
    <form id="velsof_supercheckout_form" action="{$supercheckout_url}" method="POST">
        <input type='hidden' name='{$plugin_name}PlaceOrder' value='1' />
    {if isset($settings['html_value']['header']) && $settings['html_value']['header'] neq ''}
                <div id="supercheckout_html_content_header">        
                    {$settings['html_value']['header'] nofilter}{*Variable contains html content, escape not required*}
                </div>
    {/if}
    <div id="submission_progress_overlay" class="submit_progress_disable"></div>
    <div id="supercheckout_order_progress_bar">
        <div class="supercheckout_order_progress_status">
            <div id="supercheckout_order_progress_status_text">20%</div>
            <img src="{$module_image_path}progress.gif" />
            {*<div id="order_progress_status_color1"></div><div id="order_progress_status_color2"></div><div id="order_progress_status_text">20%</div>*}        
        </div>
    </div>
    <fieldset class="group-select" id="supercheckout-fieldset">

        <div class="supercheckout-threecolumns supercheckout-container supercheckout-skin-generic " id="supercheckout-columnleft">

            {assign var='layout_name' value='1_column'}
            {assign var='multiplier' value=1}
            {assign var='multiplier_3' value=0.98}
            {assign var='multiplier_2' value=0.99}
            {if $settings['layout'] eq 3}
                {$layout_name='3_column'}
                {$multiplier=$multiplier_3}
            {else if $settings['layout'] eq 2}
                {$layout_name='2_column'}
                {$multiplier=$multiplier_2}
            {/if}

            <div class="supercheckout-column-left columnleftsort" id="columnleft-1" style="width:{$settings['column_width'][$layout_name][1]*$multiplier}%"> 
                <div  class="supercheckout-blocks" data-column="{$settings['design']['login'][$layout_name]['column']|intval}" data-row="{$settings['design']['login'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['login'][$layout_name]['column-inside']|intval}"  >
                    <ul class="headingCheckout">
                        <li>
                            <p class="supercheckout-numbers supercheckout-numbers-1">1.
                                {if $logged}
                                    {l s='Welcome' mod='supercheckout'} {$customer_name}
                                {else}
                                    {l s='Login Options' mod='supercheckout'}
                                {/if}
                        </li>
                    </ul>
                    <div id="checkoutLogin">
                        <div class="supercheckout-checkout-content"></div>
                        {include file='module:supercheckout/views/templates/front/login.tpl'}
                    </div>     
                </div>
                <div class="supercheckout-blocks" data-column="{$settings['design']['shipping_address'][$layout_name]['column']|intval}" data-row="{$settings['design']['shipping_address'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['shipping_address'][$layout_name]['column-inside']|intval}">
                    {if $show_delivery_add_for_virtualcart eq true}
                        <div id="checkoutShippingAddress" style="display:none;"></div> 
                    {else}
                        <div id="checkoutShippingAddress">
                            {include file='module:supercheckout/views/templates/front//shipping_address.tpl'}
                        </div>
                    {/if}
                </div>
                <div  class="supercheckout-blocks"  data-column="{$settings['design']['payment_address'][$layout_name]['column']|intval}" data-row="{$settings['design']['payment_address'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['payment_address'][$layout_name]['column-inside']|intval}">
                    <div id="checkoutBillingAddress" style="display:{if $settings['use_delivery_for_payment_add'][$user_type]}none{else}block{/if};">
                        {include file='module:supercheckout/views/templates/front//payment_address.tpl'}
                    </div>
                    <br/>
                </div>            

                <div style="{if $settings['shipping_method']['enable'] eq 0}display:none;{/if}"  class="supercheckout-blocks" data-column="{$settings['design']['shipping_method'][$layout_name]['column']|intval}" data-row="{$settings['design']['shipping_method'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['shipping_method'][$layout_name]['column-inside']|intval}" >
                    <ul>
                        <li style="display:inline;">
                            <p class="supercheckout-numbers supercheckout-numbers-3">2. {l s='Delivery Method' mod='supercheckout'}</p>
                            <div class="loader" id="shippingMethodLoader"></div>
                        </li>                
                    </ul>
                    <div id="shipping_method_update_warning" class="supercheckout-checkout-content"></div>
                    <div id="shipping-method">
                        {*Here Delivery Methods will be rendered*}
                    </div>
                </div>

                <div style="{if $settings['payment_method']['enable'] eq 0}display:none;{/if}" class="supercheckout-blocks" data-column="{$settings['design']['payment_method'][$layout_name]['column']|intval}" data-row="{$settings['design']['payment_method'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['payment_method'][$layout_name]['column-inside']|intval}">
                    <ul>
                        <li>
                            <p class="supercheckout-numbers supercheckout-numbers-4">4. {l s='Payment Method' mod='supercheckout'}</p>
                            <p style="text-align:center">{l s="Vajutades sobivale makseviisile, nõustute [1]kasutustingimustega[/1] ning teid suunatakse otse soovitud panka." tags=['<strong>'] mod='supercheckout'}</p>
                            <p style="text-align:center">{l s="Tutvu [1]kasutustingimustega[/1]" mod='supercheckout'  tags=['<a style="color: #8dba23!important" href="#">']}</p>
                            <div class="loader" id="paymentMethodLoader"></div>
                        </li>                
                    </ul>
                    <div id="payment_method_update_warning" class="supercheckout-checkout-content"></div>
                    <div id="payment-method">
                        {*include file='./payment_methods.tpl'*}
                    </div>
                </div>
                <div class="supercheckout-blocks confirmCheckoutBack" data-column="{$settings['design']['cart'][$layout_name]['column']|intval}" data-row="{$settings['design']['cart'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['cart'][$layout_name]['column-inside']|intval}" style="display:{if $settings['display_cart'] eq 1}block{else}none{/if};">
                    <ul>
                        <li>
                            <p class="supercheckout-numbers supercheckout-check">3. {l s='Confirm Your Order' mod='supercheckout'}</p>
                            <div class="loader" id="confirmLoader"></div>
                        </li>
                    </ul>
                    <div id="cart_update_warning" class="supercheckout-checkout-content"></div>
                    <div id="confirmCheckout">
                        {*Here Cart Summary will be rendered*}
                    </div>
                </div>

                <div class="supercheckout-blocks" data-column="{$settings['design']['confirm'][$layout_name]['column']|intval}" data-row="{$settings['design']['confirm'][$layout_name]['row']|intval}" data-column-inside="{$settings['design']['confirm'][$layout_name]['column-inside']|intval}" >
                    <div class="supercheckout-checkout-content"> </div>
                    <div id="supercheckout-comments" style="display:{if $logged}{if $settings['confirm']['order_comment_box']['logged']['display'] eq 1}block{else}none{/if}{else}{if $settings['confirm']['order_comment_box']['guest']['display'] eq 1}block{else}none{/if}{/if};">
                        <b>{l s='Add Comments About Your Order' mod='supercheckout'}</b>
                        <textarea id="supercheckout-comment_order" name="comment" rows="8" ></textarea>
                    </div>

                        <div id='order-shipping-extra'>
                            {include file='module:supercheckout/views/templates/front//order_extra_fields.tpl'}
                        </div>

                    <div id="placeorderButton">
                        <div id="buttonWithProgres" style="width:206px;">
                            <div  id="supercheckout_confirm_order" class="orangebutton" >
                                {l s='Place Order' mod='supercheckout'}
                                <div id="progressbar" style="text-align:center;margin-top: 0px;"></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="supercheckout_submission" value="" />
                </div>

                {foreach from=$settings['design']['html'] item='html'}
                    <div  class="supercheckout-blocks" data-column="{$html[$layout_name]['column']|intval}" data-row="{$html[$layout_name]['row']|intval}" data-column-inside="{$html[$layout_name]['column-inside']|intval}">
                        {$html['value'] nofilter}{*Variable contains html content, escape not required*}
                    </div>
                {/foreach}
            </div>

            <div class="supercheckout-column-middle columnleftsort" id="columnleft-2"  style="width:{$settings['column_width'][$layout_name][2]*$multiplier}%;margin-right:0px;">
                <div class="supercheckout-column-left columnleftsort" id="column-2-upper" style="width:100%;height:auto;"> 
                </div>
                <div class="supercheckout-column-left columnleftsort" id="column-1-inside" style="width:{$settings['column_width'][$layout_name]['inside'][1]*1}%"> 
                </div>
                <div class="supercheckout-column-left columnleftsort" id="column-2-inside"  style="width:{$settings['column_width'][$layout_name]['inside'][2]*1}%">

                </div>
                <div class="supercheckout-column-left columnleftsort" id="column-2-lower"  style="width:100%;height:auto;">

                </div>
            </div>
            <div class="supercheckout-column-right columnleftsort" id="columnleft-3" style="width:{$settings['column_width'][$layout_name][3]*$multiplier}%">


            </div>   

        </div>
    <input type="hidden" id="module_url" value="{$supercheckout_url nofilter}" />    
    <input type="hidden" id="addon_url" value="{$addon_url nofilter}" />  
    <input type="hidden" id="analytic_url" value="{$analytic_url nofilter}" />    
    </fieldset>
    </form>
        <div id="velsof_payment_dialog">
            <div id="velsof_dialog_content">
                <div class="velsof_payment_dialog_overlay"></div>
                <div id="velsof_payment_container">
                    <!--<span class="velsof_dialog_close">X</span>-->
                    <div class="velsof_title_section">{l s='Payment Information' mod='supercheckout'}</div>
                    <div class="velsof_content_section"></div>
                </div>            
            </div>
        </div>
    {if isset($settings['html_value']['footer']) && $settings['html_value']['footer'] neq ''}
        <div id="supercheckout_html_content_footer">        
            {$settings['html_value']['footer'] nofilter}{*Variable contains html content, escape not required*}
        </div>
    {/if}

    <script>
        var default_country = {$default_country};
        var countries = JSON.parse('{json_encode($countries) nofilter}');
        var page_lang_code =  '{$iso_code}';
        
        {if $settings['mailchimp']['enable'] eq 1 && isset($settings['mailchimp']['default']) && $settings['mailchimp']['default'] eq 1}
            var supercheckout_subscribe_mailchimp = true;
        {/if}
        /*$(document).ready(function() {
            {if $settings['mailchimp']['enable'] eq 1 && isset($settings['mailchimp']['default']) && $settings['mailchimp']['default'] eq 1}
                $( "#email" ).blur(function() {
                    var email = $( "#email" ).val();
                    subscribeCustomer(email);
                });
            {/if}
           $('#{$iso_code}_content').show();
        });*/

    </script>
    {else}
    <div class="supercheckout-empty-page-content" style="display:block">
        <div class="permanent-warning">{l s='Your shopping cart is empty.' mod='supercheckout'}</div>
    </div>
        <script>
            var cart_empty = {$empty};
        </script>
    {/if}    
{/block}
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
