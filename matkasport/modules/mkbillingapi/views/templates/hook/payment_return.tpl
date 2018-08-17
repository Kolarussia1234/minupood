{if $status == 'ok'}
	<p class="alert alert-success">{l s='Payment successfully processed' mod='mkbillingapi'}</p>
	<div class="box">
		<p>{l s='Order tracking' mod='mkbillingapi'} <a href="{$link_to_order}">{l s='here.' mod='mkbillingapi'}</a></p>
	</div>
{else}
	<p class="alert alert-danger">{l s='Payment failed' mod='mkbillingapi'}</p>
{/if}