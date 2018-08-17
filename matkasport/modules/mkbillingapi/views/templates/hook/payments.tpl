<script>
    mk_ajax_url = '{$mk_ajax_url}';
    $(document).ready(function() {

        $("[name='mk_payment_method']").click(function() {
            var mk_payment_method = $("[name='mk_payment_method']:checked").val();
            $("label[for='Maksekeskus']").closest('.highlight').find("[name='payment_method']").click();
            $.ajax(mk_ajax_url, {
                'data': 'action=payment_method&method='+mk_payment_method,
                'dataType': 'json'
            }).success(function(data) {

            });
        });
    });
</script>
{foreach from=$payment_methods item=method}
<div class="row {$method.name}">
	<div class="col-xs-12">
		<p class="payment_module mkbillingapi_payment">
            <input type="radio" name="mk_payment_method" value="{$method.link}">
		    {if $method.img}<img src="{$method.img}" alt="{l s='Pay by' mod='mkbillingapi'} {$method.name}">{/if}
		</p>
    </div>
</div>
{/foreach}