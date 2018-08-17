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
	<div class="" id="veebipoed_carrier_{$carrier.id}_{$id_address}" data-id_carrier={$carrier.id} data-id_address={$id_address}>
{/if}
<input type="hidden" name="identification" value="vp_omniva" class="veebipoed-carrier" />
<input type="hidden" name="hide_address_fields" value="{$hide_address_fields}" class="hide_address_fields" />
<input type="hidden" name="vp_omniva_{$id_address}_ajax" value="{$ajax_url}" class="vp_omniva_{$id_address}_ajax"/>
<select name='terminal_cities' class='terminal_cities' id='vp_omniva_city_{$id_address}' onchange="updateCarrierCity({$id_address}, '{$carrier.name}', 'vp_omniva');">
	{foreach from=$groups item=group}
		<option value='{$group.group_id}' {if $carrier.id_group == $group.group_id}selected="selected"{/if}>{$group.maakond}</option>
	{/foreach}
</select>
<select name='terminals' class='veebipoed_carrier' id='vp_omniva_{$id_address}' onchange="updateCarrierTerminal({$id_address}, '{$carrier.name}', 'vp_omniva');">
	<option value='0' {if $carrier.terminal_id == 0}selected="selected"{/if}>{l s='Please select carrier ...' mod='vp_omniva'}</option>
	{foreach from=$terminals item=terminal}
		<option value='{$terminal.id_vp_omniva}' 
			{if $terminal.id_vp_omniva == $carrier.terminal_id}selected="selected"{/if}
			data-address="{$terminal.address}">
				{$terminal.name}{if $display_address} ({$terminal.address}){/if}
	</option>
	{/foreach}
</select>
{if $use_js}</div>{/if}
