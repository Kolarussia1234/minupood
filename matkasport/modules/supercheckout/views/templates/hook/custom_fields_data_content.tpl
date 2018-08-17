<!-- Supercheckout Custom  block -->
<div class="tab-pane" id="custom_fields_data_content">
    <h4 class="visible-print">{l s='Supercheckout Custom Fields' mod='supercheckout'} <span class="badge"></span></h4>
    <div class="form-horizontal">
        <div class="form-group">
        {if $empty eq 0}
            <label class="control-label">{l s='Custom fields values' mod='supercheckout'}</label>
            <hr style='border-top: 1px solid #a0d0eb !important;margin-top: 4px !important;margin-bottom: 4px !important;' />
            {foreach from=$fields_data item=field_data}
                <div class="col-lg-9">
                    <div class="col-lg-3">
                        <p class="form-control-static" style="font-weight: bold;">{l s={$field_data['field_label']} mod='supercheckout'}:</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="form-control-static">{$field_data['field_value']}</p>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="list-empty-msg">
                <i class="icon-warning-sign list-empty-icon"></i>
                {l s='No values from supercheckout module found.' mod='supercheckout'}
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
* 
*}