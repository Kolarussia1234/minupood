<ul>
    <li>
        <p class="supercheckout-numbers supercheckout-numbers-2">{l s='Invoice Address' mod='supercheckout'}</p>
    </li>
</ul>
<div class="supercheckout-checkout-content"></div>
<div id="payment-new" style="display: block;">
    <table id="payment_address_table" class="supercheckout-form">
        {assign var='display_row' value=''}
        {foreach from=$settings['payment_address'] key='p_address_key' item='p_address_field'}
            {$display_row = ''}
            {if $settings['payment_address'][$p_address_key][$user_type]['display'] eq 1 || (isset($settings['payment_address'][$p_address_key]['conditional']) && $settings['payment_address'][$p_address_key]['conditional'] eq 1)}
                {if $p_address_key eq 'dni' && !$need_dni}
                    {$display_row = 'display:none;'}
                {/if}
                {if ($p_address_key eq 'postcode' || $p_address_key eq 'id_country' || $p_address_key eq 'id_state' || $p_address_key eq 'alias') && !$settings['payment_address'][$p_address_key][$user_type]['require'] && !$settings['payment_address'][$p_address_key][$user_type]['display']}
                    {$display_row = 'display:none;'}
                {/if}
                {if $p_address_key eq 'id_state'}
                    <script>var show_payment_state = {$settings['payment_address'][$p_address_key][$user_type]['display']};</script>                                        
                {/if}
                {if $p_address_key eq 'postcode'}
                    <script>var show_payment_postcode = {$settings['payment_address'][$p_address_key][$user_type]['display']};</script>
                    <tr class="sort_data" id="payment_post_code" data-percentage="{$settings['payment_address'][$p_address_key]['sort_order']|intval}" style="{$display_row}" >
                    {else}
                    <tr class="sort_data" data-percentage="{$settings['payment_address'][$p_address_key]['sort_order']|intval}" style="{$display_row}" >
                    {/if} <td>{l s={$settings['payment_address'][$p_address_key]['title']} mod='supercheckout'}:
                        {if $p_address_key eq 'vat_number'}
                            <span style="display:{if $need_vat}inline{else}none{/if};" class="supercheckout-required">*</span>
                        {else}
                        <span style="display:{if $settings['payment_address'][$p_address_key][$user_type]['require'] eq 1}inline{else}none{/if};" class="supercheckout-required">*</span>
                        {/if}
                        {if $p_address_key eq 'id_country' || $p_address_key eq 'id_state'}
                            <select name="payment_address[{$p_address_key}]" class="supercheckout-large-field">
                                {if $p_address_key eq 'id_country'}
                                    {foreach from=$countries item='country'}
                                        <option value="{$country['id_country']|intval}" {if $country['id_country'] == $default_country} selected="selected"{/if}>{$country['name']}</option>                                        
                                    {/foreach}
                                {else}
                                    <option value="0">{l s='Select State' mod='supercheckout'}</option>
                                {/if}                            
                            </select>
                        {else if $p_address_key eq 'dob'}
                            <div class="supercheckout_dob_box supercheckout-large-field">
                                <select name="payment_address[dob_days]">
                                    <option value="">--</option>
                                    {foreach from=$days item='day'}
                                        <option value="{$day|intval}">{$day|intval}</option>
                                    {/foreach}
                                </select>
                                <select name="payment_address[dob_months]">
                                    <option value="">--</option>
                                    {foreach from=$months item='month'}
                                        <option value="{$month}">{$month}</option>
                                    {/foreach}
                                </select>
                                <select name="payment_address[dob_years]">
                                    <option value="">--</option>
                                    {foreach from=$years item='year'}
                                        <option value="{$year}">{$year}</option>
                                    {/foreach}
                                </select>
                            </div>
                        {else if  $p_address_key eq 'other'}
                            <textarea name="payment_address[{$p_address_key}]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                        {else}
                            <input type="text" name="payment_address[{$p_address_key}]" value="" class="supercheckout-large-field" />
                        {/if}

                    </td>
                </tr>
            {/if}
        {/foreach}                            
    </table>
</div>
<!-- INSERT INTO #BILLING ADDRESS -->
<!-- Start - Code to insert custom fields in billing address form block -->
<div class="div_custom_fields">
{foreach from=$array_fields item=field}
    {if $field['position'] eq 'payment_address_form'}
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
<!-- End - Code to insert custom fields in billing address form block -->
            
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