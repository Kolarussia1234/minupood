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
{if $use_js}
	<div class="" id="veebipoed_carrier_{$carrier.id|escape:'html':'UTF-8'}_{$id_address|escape:'html':'UTF-8'}" data-id_carrier={$carrier.id|escape:'html':'UTF-8'} data-id_address={$id_address|escape:'html':'UTF-8'}>
{/if}
<input type="hidden" name="identification" value="vp_smartpost" class="veebipoed-carrier" />
<input type="hidden" name="hide_address_fields" value="{$hide_address_fields|escape:'html':'UTF-8'}" class="hide_address_fields" />
<input type="hidden" name="vp_smartpost_{$id_address|escape:'html':'UTF-8'}_ajax" value="{$ajax_url|escape:'html':'UTF-8'}" class="vp_smartpost_{$id_address|escape:'html':'UTF-8'}_ajax"/>
<select name='terminal_cities' class='terminal_cities' id='vp_smartpost_city_{$id_address|escape:'html':'UTF-8'}' onchange="updateCarrierCity({$id_address|escape:'html':'UTF-8'}, '{$carrier.name|escape:'html':'UTF-8'}', 'vp_smartpost');">
	{foreach from=$groups item=group}
		<option value='{$group.group_id|escape:'html':'UTF-8'}' {if $carrier.id_group == $group.group_id}selected="selected"{/if}>{$group.group_name|escape:'html':'UTF-8'}</option>
	{/foreach}
</select>
<select name='terminals' class='veebipoed_carrier' id='vp_smartpost_{$id_address|escape:'html':'UTF-8'}' onchange="updateCarrierTerminal({$id_address|escape:'html':'UTF-8'}, '{$carrier.name|escape:'html':'UTF-8'}', 'vp_smartpost');">
	<option value='0' {if $carrier.terminal_id == 0}selected="selected"{/if}>{l s='Please select carrier ...' mod='vp_smartpost'}</option>
	{foreach from=$terminals item=terminal}
		<option value='{$terminal.id_vp_smartpost|escape:'html':'UTF-8'}'
			{if $terminal.id_vp_smartpost == $carrier.terminal_id}selected="selected"{/if}
			data-address="{$terminal.address|escape:'html':'UTF-8'}">
				{$terminal.name|escape:'html':'UTF-8'}{if $display_address|escape:'html':'UTF-8'} ({$terminal.address|escape:'html':'UTF-8'}){/if}
		</option>
	{/foreach}
</select>
{if $use_js}</div>{/if}
