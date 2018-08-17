<div class='supercheckout_custom_fields_block'>
    <div class="box box-small cleafix">
        <h4 class="page-subheading "><strong>{l s='Supercheckout Custom Fields' mod='supercheckout'}</strong></h4>
        {if $empty eq 0}
            {foreach from=$fields_data item=field_data}
                <p>
                    <strong class="dark">{l s={$field_data['field_label']} mod='supercheckout'}:</strong>
                    <span class="color-myaccount">{$field_data['field_value']}</span>
                </p>
            {/foreach}
        {else}
            <div class="list-empty-msg">
                <i class="icon-warning-sign list-empty-icon"></i>
                {l s='No values found.' mod='supercheckout'}
            </div>
        {/if}
    </div>
</div>
</div>
{*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
* We offer the best and most useful modules PrestaShop and modifications for your online store.
*
* @category  PrestaShop Module
* @author    velsof.com <support@velsof.com>
* @copyright 2017 Velocity Software Solutions Pvt Ltd
* @license   see file: LICENSE.txt
*
* Description
*
* Product Update Block Page
*}