<div class="panel">
<fieldset>
	<legend>{l s='Free shipping' mod='smartpost'}</legend>
	<label>Free shipping: </label>
	<div class="margin-form">																						
		<table cellspacing="0" cellpadding="0" class="table" style="width:28em;">
			<tbody>
				<tr>
					<th>&nbsp;</th>
					<th>{l s='ID' mod='smartpost'}</th>
					<th>{l s='Group name' mod='smartpost'}</th>
				</tr>
				{foreach from=$groups item=group name="s_groups"}
				<tr {if $smarty.foreach.s_groups.iteration mod 2}class="alt_row"{/if}>
					<td>
						<input type="checkbox" name="{$name}[]" class="{$name}" id="groupBox_{$group.id_group}" value="{$group.id_group}"{if $group.checked} checked="checked"{/if}>
					</td>
					<td>{$group.id_group}</td>
					<td><label for="groupBox_{$group.id_group}" class="t">{$group.name}</label></td>
				</tr>
				{/foreach}
		</tbody></table>								
		<p class="preference_description">
			{l s='Free shipping for checked customer group.' mod='smartpost'}
		</p>
	</div>
</fieldset>
</div>
