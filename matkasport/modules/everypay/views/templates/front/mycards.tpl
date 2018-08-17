
{*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, EveryPay
*  @copyright 2015 Veebipoed.ee, EveryPay
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}
{extends file='customer/page.tpl'}
{block name='page_title'}
  {l s='Manage saved cards' d='Shop.Theme.Customeraccount'}
{/block}
{block name='page_content'}
<div class="everypay myCards">
	<table class="cardlist">
		<thead>
			<th>{l s='Type' mod='everypay'}</th>
			<th>{l s='Card number' mod='everypay'}</th>
			<th>{l s='Expires' mod='everypay'}</th>
			<th>{l s='Default' mod='everypay'}</th>
			<th>{l s='Actions' mod='everypay'}</th>
		</thead>
		<tbody>
			{foreach from=$cards item=card}
			<tr>
				<td style="text-align:center;">
					<img class=cardimg src="{$this_path}views/img/everypay_{$card->card_type}.png" alt="{ucfirst($card->card_type)}" width="40px" height="25px">
				</td>
				<td>**** **** **** {sprintf("%04d", $card->card_no)}</td>
				<td>{sprintf("%02d", $card->card_exp_month)}/{sprintf("%02d", $card->card_exp_year)}</td>
				<td>
				{if $card->is_default}
				Yes
				{else}
				<a style="padding:5px;" href="{$link->getModuleLink('everypay', 'mycards', ['id_card'=>$card->id_card, 'action'=>'default'], true)}" class="btn btn-default button button-small">{l s='Make Default' mod='everypay'}</a>
				{/if}
				</td>
				<td class="action"><a style="padding:5px;" href="{$link->getModuleLink('everypay', 'mycards', ['id_card'=>$card->id_card, 'action'=>'delete'], true)}" class="btn btn-default button button-small">{l s='Delete' mod='everypay'}</a></td>
			</tr>
			{/foreach}
			{if count($cards)==0}
				<tr>
					<td colspan="5">
						{l s='You have not saved any cards!' mod='everypay'}
					</td>
				</tr>
			{/if}
		</tbody>
	</table>
</div>
{/block}