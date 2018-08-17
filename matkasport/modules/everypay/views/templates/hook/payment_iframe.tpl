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
<form id="iframe_payment" class="js-payment-everypay">
	<div class="row">
		<div class="col-xs-12">
			<div class="payment_module everypay">
				<div class="everypay_card_logo everypayUI"></div>
				<span class="everypayChoices everypayUI">
					{if !$logged && $token_payment == 1}
						<span class="everypayNotification">
							To save your card securely for faster payments in the future, <a href="{$link->getPageLink('authentication', true)}?create_account=1" class="pay-login-links">register</a> for an account or <a href="{$link->getPageLink('authentication', true)}" class="pay-login-links">log in</a> to your existing account.
						</span>
					{else}
						<div style="display:none;"></div>
					{/if}
					{if $logged && $token_payment == 1}
						<span id="everypayChoice">
							{foreach from=$cards item=card}
								<div class="everypayOption {if $card->is_default}default{/if}">
										<img class="cardimg" src="{$this_path}views/img/everypay_{$card->card_type}.png" alt="{ucfirst($card->card_type)}">
										<span>
											<input onclick='EVERYPAY.changeCard()' type="radio" {if $card->is_default}checked="checked"{/if} name="everypayChoice" value="{$card->id_card}" />
										</span>
										<label>
											**** **** **** {sprintf("%04d", $card->card_no)} ({l s='Expires' mod='everypay'} {sprintf("%02d", $card->card_exp_month)}/{sprintf("%02d", $card->card_exp_year)})
										</label>
									<a data-remove-card-link="{$link->getModuleLink('everypay', 'mycards', ['id_card'=>$card->id_card, 'action'=>'delete', 'ajax'=>1], true)}" onclick='EVERYPAY.deleteCard(this)' style="display:none;" class="icon-trash manageCardUI" title="{l s='Delete' mod='everypay'}">delete_forever</a>
									
									<a data-set-default-link="{$link->getModuleLink('everypay', 'mycards', ['id_card'=>$card->id_card, 'action'=>'default', 'ajax'=>1], true)}" onclick='EVERYPAY.setDefault(this)' style="display:none;" class="makeDefault {if !$card->is_default}manageCardUI{/if}">{l s='Make default' mod='everypay'}</a>
								</div>
							{/foreach}
							<div class="radio_checkbox">
								<span class="use_new_mar use_new_mt">
									<input id="use_new_card" type="radio" name="everypayChoice" {if count($cards)==0}checked{/if} onclick='EVERYPAY.changeCard()' value="new" />
									<label for="use_new_card">{l s='Use a new card' mod='everypay'}</label>
								</span>
								<br/>
								<span class="saveCardOption use_new_mar">
									<input id="save_new_card" type="checkbox" name="everypaySaveCard" value="1" />
									<label for="save_new_card">{l s='Save card securely' mod='everypay'}</label>
								</span>
							</div>
						</span>
						{if empty($cards)}
							<span class="everypayManagecards everypayUI" style="display:none;">No cards added</span>
						{else}
							<span class="everypayManagecards everypayUI" onclick="EVERYPAY.manageCardsToggle()">{l s='Manage cards' mod='everypay'}</span>
						{/if}
					{/if}

					<label onclick='EVERYPAY.open()' class='button everypayRedirect everypayUI' for="btnpay">{l s='Pay' mod='everypay'}</label>
					<input id="btnpay" type="checkbox"/>
					<div class="overlay"></div>
				</span>

				<span onclick='EVERYPAY.reclose()' id="everypayRetryButton" style="display:none;" class='button'>{l s='Try paying again' mod='everypay'}</span>

				<div class="clearfix"></div>

				<iframe src="" order-create-method="{$order_create_method}" cart-id='{if isset($cart_id)}{$cart_id}{/if}' target-url="{$shop_url}" name="EVERYPAYIFRAME" id="everypayIframe"></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</form>
<script src="{$this_path}views/js/everypay.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
	var everypay_delete_txt = "{l s='Are you sure you want to delete the card ?' mod='everypay'}";

	{if isset($opc) && $opc}
		EVERYPAY.retryRedirect = '{$link->getPageLink('order-opc', true, NULL)}?submitReorder=&id_order=ORDER_REFERENCE';
	{else}
		EVERYPAY.retryRedirect = '{$link->getPageLink('order', true, NULL)}?submitReorder=&id_order=ORDER_REFERENCE';
	{/if}
	EVERYPAY.init();
</script>