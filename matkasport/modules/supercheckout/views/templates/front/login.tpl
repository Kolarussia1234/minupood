<input type="hidden" id="phoneID" value="{$staticvariables['phoneIDfromSuperCheckout']}"/>
<input type="hidden" id="emailID" value="{$staticvariables['emailIDfromSuperCheckout']}"/>
<input type="hidden" id="lastnameID" value="{$staticvariables['lastnameIDfromSuperCheckout']}"/>
<input type="hidden" id="firstnameID" value="{$staticvariables['firstnameIDfromSuperCheckout']}"/>
<input type="hidden" id="customSamePaymentID" value="{$staticvariables['differentPaymentAddressIDfromSuperCheckout']}"/>



{if $logged}
    <input type="hidden" id="customerEmail" value="{$customer.email}" />
    <input type="hidden" id="customerFirstName" value="{$customer.firstname}" />
    <input type="hidden" id="customerLastName" value="{$customer.lastname}" />
    <div class="myaccount">
        <ol class="rectangle-list">                            
            <li><a href="{$my_account_url nofilter}">{l s='My Account' mod='supercheckout'}</a></li>
            <li><a href="{$supercheckout_url nofilter}&mylogout=">{l s='Logout' mod='supercheckout'}</a></li>
            <div class="supercheckout-clear"></div>
        </ol>

        <!-- Start - Code to insert custom fields in registration form block -->
        <div class="div_custom_fields logged_in">
        {foreach from=$array_fields item=field}
            {if $field['position'] eq 'customer_registration_block'}
            <div class="supercheckout-blocks {if $field['type'] eq "checkbox"}checkbox{/if}">
                    {if $field['type'] eq "textbox"}
                        <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                        <input id="custom_field_{$field['field_label']}" type="text" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" value="{$field['default_value']}" class="supercheckout-large-field width_100">
                        <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
                    {/if}

                    {if $field['type'] eq "textarea"}
                        <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                        <textarea id="custom_field_{$field['field_label']}" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" class="supercheckout-large-field width_100" style="width: 100%; height: 100px;">{$field['default_value']}</textarea>
                        <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
                    {/if}

                    {if $field['type'] eq "selectbox"}
                        <div class="cursor_help" title="{$field['field_help_text']}">{$field['field_label']}{if $field['required'] eq "1"}<span style="display:inline;" class="supercheckout-required">*</span>{/if}</div>
                        <select id="custom_field_{$field['field_label']}" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" class="supercheckout-large-field width_100">
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
                                            <input id="custom_field_{$field['field_label']}" type="radio" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}]" value="{$field_options['option_value']}" {if $field_options['default_value'] eq $field_options['option_value']}checked{/if}>
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
                                    <input id="custom_field_{$field['field_label']}" {if $field_options['default_value'] eq $field_options['option_value']}checked{/if} type="checkbox" name="custom_fields[field_{$field['id_velsof_supercheckout_custom_fields']}][]" value="{$field_options['option_value']}">
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
    </div>
{else}
    <div class="supercheckout-extra-wrap">
        {l s='Email' mod='supercheckout'}<span class="supercheckout-required">*</span><br />
        <input type="text" id="email" name="supercheckout_email" value="" class="supercheckout-large-field" />
    </div>
    <div id="supercheckout-option" style="display:block">
        <div class="supercheckout-extra-wrap">
            {if $settings['checkout_option'] eq 0}
                <input type="radio" name="checkout_option" value="0" id="logged_checkout" checked="checked"/>
            {else}
                <input type="radio" name="checkout_option" value="0" id="logged_checkout"/>
            {/if}
            <label for="logged_checkout">{l s='Login into shop' mod='supercheckout'}</label>
            <br />
        </div>
        {if $settings['enable_guest_checkout'] eq 1 && $guest_enable_by_system}
            <div class="supercheckout-extra-wrap">
                {if $settings['checkout_option'] eq 1}
                    <input type="radio" name="checkout_option" value="1" id="guest_checkout" checked="checked"/>
                {else}
                    <input type="radio" name="checkout_option" value="1" id="guest_checkout"/>
                {/if}
                <label for="guest_checkout">{l s='Guest Checkout' mod='supercheckout'}</label>
                <br />
            </div>
        {/if}
        <div class="supercheckout-extra-wrap">
            {if $settings['checkout_option'] eq 2 || ($settings['enable_guest_checkout'] eq 0 && $settings['checkout_option'] eq 1)}
                <input type="radio" name="checkout_option" value="2" id="register_checkout" checked="checked" />
            {else}
                <input type="radio" name="checkout_option" value="2" id="register_checkout" />
            {/if}
            <label for="register_checkout">{l s='Create an account for later use' mod='supercheckout'}</label>
            <br />
        </div>                    
    </div>
    
    <!-- INSERT INTO #REGISTRATION FORM -->    
    <!-- Start - Code to insert custom fields in registration form block -->
    <div class="div_custom_fields">
    {foreach from=$array_fields item=field}
        {if $field['position'] eq 'customer_registration_block'}
        <div class="supercheckout-blocks {if $field['type'] eq "checkbox"}checkbox{/if}">
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
                        <label for="field_{$field['id_velsof_supercheckout_custom_fields']}" class="label_for_checkbox"><b>{$field_options['option_label']}</b></label>
                    </div>
                {/foreach}
                <span id="error_field_{$field['id_velsof_supercheckout_custom_fields']}" class="errorsmall_custom hidden_custom"></span>
            {/if}
            </div>
        {/if}
    {/foreach}
    </div>
    <!-- End - Code to insert custom fields in registration form block -->
            
    <div id="supercheckout-login-box" style="display:{if $settings['checkout_option'] eq 0}block{else}none{/if};">
        <div id="supercheckout-login-password-box" class="supercheckout-extra-wrap">
            {l s='Password' mod='supercheckout'}<span class="supercheckout-required">*</span><br />
            <input type="password" id="password" name="supercheckout_password" onkeydown="checkAction(event)" value="" class="supercheckout-large-field" />
        </div>
        <div id="supercheckout-login-action" class="supercheckout-extra-wrap">
            <div id="forgotpasswordlink"><a href="{$forgotten_link}">{l s='Forgot Password' mod='supercheckout'}</a></div>
            <br>
            <input type="hidden" name="SubmitLogin" value="SubmitLogin" />
            <input type="button" value="{l s='Login' mod='supercheckout'}" id="button-login" class="orangebuttonsmall" /><img src="{$module_image_path}loading12.gif" style="display:none;"/><br />
        </div>


        {hook h='displayCustomerLoginFormAfter' mod="iqitsociallogin"}

        {*<div id="vpIdLogin" class="btn" onclick="window.location.href = '{$urls.base_url}idlogin'">
            <img src="{$urls.img_url}id-logo.svg">
            <span class="vpIdLoginText">{l s='Logi sisse ID kaardiga' d='Shop.Login'}</span>
        </div>*}
    </div>

    <div id="supercheckout-new-customer-form" style="display:{if $settings['checkout_option'] neq 0}block{else}none{/if};">
        <table id="customer_person_information_table" class="supercheckout-form" style="margin-bottom:0 !important;">
            <tr id="new_customer_password" class="sort_data"  data-percentage="0" style="display:{if $settings['checkout_option'] eq 2}block{else}none{/if};" >
                <td>
                    <div class="inline-fields" style="margin-right: 18px;">{l s='Password' mod='supercheckout'}:<span style="display:inline;" class="supercheckout-required">*</span></div>
                    <div class="supercheckout-large-field">
                        <input type="password" id="password" name="customer_personal[password]" value="" class="supercheckout-large-field" />
                    </div>
                </td>
            </tr>
            {assign var="counter" value="0"}
            {foreach from=$settings['customer_personal'] key='cus_per_info' item='cus_info_field'}
                {if $settings['customer_personal'][$cus_per_info][$user_type]['display'] eq 1}
                    {assign var=counter value=$counter+1}
                    <tr class="sort_data"  data-percentage="{$settings['customer_personal'][$cus_per_info]['sort_order']|intval}" >
                        <td>
                            {if $cus_per_info eq 'id_gender'}
                                <div class="inline-fields" style="margin-right: 18px;">{l s={$settings['customer_personal'][$cus_per_info]['title']} mod='supercheckout'}:<span style="display:{if $settings['customer_personal'][$cus_per_info][$user_type]['require'] eq 1}inline{else}none{/if};" class="supercheckout-required">*</span></div>
                                <div class="supercheckout_personal_id_gender inline-fields supercheckout-large-field">
                                    <div class="">                                                        
                                        {foreach from=$genders key=k item=gender}
                                            <div class="inline-fields" style="width: 50px;">
                                                <div class="radio" id="uniform-customer_male_title"><span class="checked"><input type="radio" name="customer_personal[id_gender]" value="{$gender->id|intval}" id="customer_gender_{$gender->id|intval}" checked="checked" /></span></div>
                                                <label for="customer_gender_{$gender->id|intval}">{$gender->name}</label>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                            {else if $cus_per_info eq 'dob'}
                                <div class="inline-fields" style="margin-right: 18px;">{l s={$settings['customer_personal'][$cus_per_info]['title']} mod='supercheckout'}:<span style="display:{if $settings['customer_personal'][$cus_per_info][$user_type]['require'] eq 1}inline{else}none{/if};" class="supercheckout-required">*</span></div>                                                    
                                <div class="supercheckout_personal_dob inline-fields supercheckout-large-field">
                                    <div class="">
                                        <select name="customer_personal[dob_days]">
                                            <option value="">--</option>
                                            {foreach from=$days item='day'}
                                                <option value="{$day|intval}">{$day|intval}</option>
                                            {/foreach}
                                        </select>
                                        <select name="customer_personal[dob_months]">
                                            <option value="">--</option>
                                            {foreach from=$months key=month_value item=month_name}
                                                <option value="{$month_value}">{$month_name}</option>
                                            {/foreach}
                                        </select>
                                        <select name="customer_personal[dob_years]">
                                            <option value="">--</option>
                                            {foreach from=$years item='year'}
                                                <option value="{$year}">{$year}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            {/if}
                        </td>
                    </tr>
                {/if}
            {/foreach}
            {foreach from=$settings['customer_subscription'] key='cus_subs_info' item='cus_info_field'}
                {if $settings['customer_subscription'][$cus_subs_info]['guest']['display'] eq 1}
                    <tr class="sort_data"  data-percentage="{$settings['customer_subscription'][$cus_subs_info]['sort_order'] + {$counter}|intval}" >
                        <td>
                            <div class="input-box" >
                                <input type="checkbox" class="supercheckout_offers_option" name="customer_personal[{$cus_subs_info}]" id="customer_personal_{$cus_subs_info}"  {if $settings['customer_subscription'][$cus_subs_info]['guest']['checked'] eq 1}checked="checked"{/if} >
                                <label for="customer_personal_{$cus_subs_info}">{l s=$settings['customer_subscription'][$cus_subs_info]['title'] mod='supercheckout'}</label>
                            </div>
                        </td>
                    </tr>
                {/if}
            {/foreach}
        </table>
    </div>
        <div id="social_login_block">
		{if $settings['fb_login']['enable'] neq 1 && $settings['google_login']['enable'] neq 1}
                <div class="orSeparator vss_socialloginizer_buttons"><span>{l s='OR' mod='supercheckout'}</span></div> <h3 class="vss_socialloginizer_buttons" id="ivss_socialloginizer_buttons">{l s='Sign in with' mod='supercheckout'}</h3>
		{/if}
                    {if $settings['fb_login']['enable'] eq 1 || $settings['google_login']['enable'] eq 1}
                <div class="orSeparator"><span>{l s='OR' mod='supercheckout'}</span></div>
                <h3>{l s='Sign in with' mod='supercheckout'}</h3>
                <div class="socialNetwork">
                    {if $settings['fb_login']['enable'] eq 1}
                        {if $settings['social_login_popup']['enable'] eq 1}
                            <a onclick="return !window.open(this.href, 'popup', 'width=450,height=300,left=500,top=500')" target="_blank" href="{$supercheckout_url nofilter}&myfbLogin" class="fbButton" id="fb-auth" ></a>
                        {else}
                            <a href="{$supercheckout_url}&myfbLogin" class="fbButton" id="fb-auth" ></a>
                        {/if}
                    {/if}
                    {if $settings['google_login']['enable'] eq 1}
                        {if $settings['social_login_popup']['enable'] eq 1}
                            <a onclick="return !window.open(this.href, 'popup', 'width=500,height=500,left=500,top=500')" target="_blank" href="{$supercheckout_url nofilter}&myGoogleLogin" class="googleButton" ></a>
                        {else}
                            <a href="{$supercheckout_url}&myGoogleLogin" class="googleButton" ></a>
                        {/if}
                    {/if}
                    <div class="supercheckout-clear"></div>
                </div>
            {/if}
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