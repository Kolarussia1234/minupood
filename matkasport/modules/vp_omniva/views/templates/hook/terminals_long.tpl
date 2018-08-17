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
	<div class="hidden" id="veebipoed_carrier_{$carrier.id|escape:'html':'UTF-8'}_{$id_address|escape:'html':'UTF-8'}" data-id_carrier={$carrier.id|escape:'html':'UTF-8'} data-id_address={$id_address|escape:'html':'UTF-8'}></br>
{/if}
<input type="hidden" name="identification" value="vp_omniva" class="veebipoed-carrier" />
<input type="hidden" name="hide_address_fields" value="{$hide_address_fields|escape:'html':'UTF-8'}" class="hide_address_fields" />
<input type="hidden" name="vp_omniva_{$id_address|escape:'htmlall':'UTF-8'}_ajax" value="{$ajax_url|escape:'html':'UTF-8'}" class="vp_omniva_{$id_address|escape:'html':'UTF-8'}_ajax"/>
{assign var="group_id" value='-1'}
<select name='terminals' class='veebipoed_carrier' id='omniva_{$id_address|escape:'html':'UTF-8'}' onchange="updateCarrierTerminal({$id_address|escape:'html':'UTF-8'}, '{$carrier.name|escape:'html':'UTF-8'}', 'vp_omniva');">
	<option value='0' {if $carrier.terminal_id == 0}selected="selected"{/if}>{l s='Please select carrier ...' mod='vp_omniva'}</option>
	{foreach from=$terminals item=terminal}
		{if $group_id != $terminal.group_id}{if $terminal.group_id != -1}</optgroup>{/if}<optgroup label="{$terminal.group_name|escape:'htmlall':'UTF-8'}">{$group_id = $terminal.group_id}{/if}
		<option value='{$terminal.id_vp_omniva|escape:'html':'UTF-8'}'
			{if $terminal.id_vp_omniva == $carrier.terminal_id}selected="selected"{/if}
			data-address="{$terminal.address|escape:'html':'UTF-8'}">
				{$terminal.name|escape:'html':'UTF-8'}{if $display_address|escape:'html':'UTF-8'} ({$terminal.address|escape:'html':'UTF-8'}){/if}
		</option>
	{/foreach}
	</optgroup>
</select>
{if $use_js}</div>{/if}
