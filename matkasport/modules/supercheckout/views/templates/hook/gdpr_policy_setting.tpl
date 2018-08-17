{if isset($supercheckout_gdpr_setting) && !empty($supercheckout_gdpr_setting)}
    <div id="supercheckout-policy">
        {foreach from=$supercheckout_gdpr_setting item='gdpr_setting'}
            <div>
                <label>
                    <input id="kb_super_policy_{$gdpr_setting['policy_id']|intval}" class="" type="checkbox" name="kb_super_policy[{$gdpr_setting['policy_id']|intval}]" value="1"/>
                    {if $gdpr_setting['url'] neq ''}
                        <a href="{$gdpr_setting['url']|escape:'html':'UTF-8'}" target="_blank" class="{if $gdpr_setting['is_manadatory'] eq 1} required_policy {/if}" style="text-decoration:none !important;" rel="nofollow">
                            {$gdpr_setting['description']|escape:'html':'UTF-8'} 
                        </a>
                        {if $gdpr_setting['is_manadatory']}
                            <span style="display:inline;" class="supercheckout-required">*</span>
                        {/if}
                    {else}
                        {$gdpr_setting['description']|escape:'html':'UTF-8'}
                        {if $gdpr_setting['is_manadatory']}
                            <span style="display:inline;" class="supercheckout-required">*</span>
                        {/if}
                    {/if}

                </label>
            </div>
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
* @copyright 2015 Knowband
*}