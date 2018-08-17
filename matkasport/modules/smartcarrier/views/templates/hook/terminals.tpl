{if $use_js}
	<div class="" id="veebipoed_carrier_{$carrier.id}_{$id_address}" data-id_carrier={$carrier.id} data-id_address={$id_address}>
{/if}
<input type="hidden" name="smartcarrier_{$id_address}_ajax" value="{$ajax_url}" class="smartcarrier_{$id_address}_ajax"/>
{assign var="group_id" value='-1'}
<select name='terminals' class='veebipoed_carrier' id='smartcarrier_{$id_address}' onchange="updateCarrierTerminal({$id_address}, '{$carrier.name}', 'smartcarrier');" style="margin-top:5px;">
	<option value='0' {if $carrier.terminal_id == 0}selected="selected"{/if}>{l s='Palun valige eelistatud kohaletoimetamise aeg.' mod='smartcarrier'}</option>
	{foreach from=$terminals key=id item=terminal}
		<option value='{$id}' {if $id == $carrier.terminal_id}selected="selected"{/if}>{$terminal}</option>
	{/foreach}
</select>
<a href="http://uus.smartpost.ee/ariklient/pakkide-saatmine-arikliendile/kullerteenuse-kirjeldus" target="_blank" style="display:block; margin-bottom:5px; text-decoration:none;">{l s='Vajuta saadetise info eest' mod='smartcarrier'}
	{* <p class="delay-info">{l s='Kuuel päeval nädalas (E-L) pakkide kättetoimetamine tellimisele järgneval päeval (v.a pühapäev ja väikesaared). Kliendile saadetakse paki kättetoimetamise päeva hommikul paki saabumise täpne kellaaeg SMS-teatega. Kuller helistab kliendile 15 minutit enne kohale jõudmist.' mod='smartcarrier'}</p> *}
</a>
{* {if !$opc}
	<div class="hidden">{l s='Please choose a smartcarrier parcel terminal.' mod='smartcarrier'}</div>
{/if} *}
{if $use_js}</div></br>{/if}
