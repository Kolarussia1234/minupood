{** NOTICE OF LICENSE
 *
 * This module was created by veebipoed.ee and is protected by the laws of Copyright.
 * This use license is granted for only one website.
 * To use this module on several websites, you must purchase as many licenses as websites on which you want to use it.
 * Use, copy, modification or distribution of this module without written license agreement from veebipoed.ee is strictly forbidden.
 * In order to obtain a license, please contact us: info@veebipoed.ee
 * Any infringement of these provisions as well as general copyrights will be prosecuted.
 *
 *
 * @author     VEEBIPOED.EE
 * @copyright  Copyright (c) 2012-2018 veebipoed.ee (http://www.veebipoed.ee)
 * @license    Commercial license
 * Support by mail: info@veebipoed.ee
 *}
<div class="panel">
<fieldset>
    <legend>{l s='Free shipping' mod='vp_smartpost'}</legend>
    <label>Free shipping: </label>
    <div class="margin-form">                                                                                       
        <table cellspacing="0" cellpadding="0" class="table" style="width:28em;">
            <tbody>
                <tr>
                    <th>&nbsp;</th>
                    <th>{l s='ID' mod='vp_smartpost'}</th>
                    <th>{l s='Group name' mod='vp_smartpost'}</th>
                </tr>
                {foreach from=$groups item=group name="s_groups"}
                <tr {if $smarty.foreach.s_groups.iteration mod 2}class="alt_row"{/if}>
                    <td>
                        <input type="checkbox" name="{$name|escape:'html':'UTF-8'}[]" class="{$name|escape:'html':'UTF-8'}" id="groupBox_{$group.id_group|escape:'html':'UTF-8'}" value="{$group.id_group|escape:'html':'UTF-8'}"{if $group.checked} checked="checked"{/if}>
                    </td>
                    <td>{$group.id_group|escape:'html':'UTF-8'}</td>
                    <td>
                        <label for="groupBox_{$group.id_group|escape:'html':'UTF-8'}" class="t">
                            {$group.name|escape:'html':'UTF-8'}
                        </label>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>                                
        <p class="preference_description">
            {l s='Free shipping for checked customer group.' mod='vp_smartpost'}
        </p>
    </div>
</fieldset>
</div>
