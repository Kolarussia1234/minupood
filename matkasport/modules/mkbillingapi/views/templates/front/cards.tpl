{if $quick_mode}<form method="POST" id="mkbillingapi-form">{else}<div id="mkbillingapi-form">{/if}
	<button class="btn btn-default button button-large{if !$quick_mode} hidden{/if}" id="payButton">
        <span>{l s='Pay now' mod='mkbillingapi'}</span>
    </button>
	<script onload="$('#payButton').click();"
        src="{$js_src}"
		data-key="{$publishable_key}"
		data-amount="{$amount}"
		data-currency="{$currency}"
		data-email="{$customer_email}"
		data-client-name="{$customer_name}"
		data-name="{$shop_name}"
		data-transaction="{$transaction_id}"
		data-selector="#payButton"
		data-description="{$description}"
		data-locale="{$locale}"
		Checkout>
	</script>
{if $quick_mode}</form>{else}</div>{/if}