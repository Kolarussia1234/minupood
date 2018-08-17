{capture name=path}
    {$display_name}
{/capture}
<div id="veebipoed-overlay" class="ajax_loader"></div>
<div class="box">
    <h3 class="page-subheading">{$display_name}</h3>
    <p>{l s='Please choose payment method' mod='mkbillingapi'}</p>
    <ul class="veebipoed-payment-methods-list clearfix">
        {foreach from=$payment_methods item=method}
        <li>
            <a href="#" class="payment-method" data-method="{$method.id}">
                {if $method.img}<img src="{$method.img}" alt="{l s='Pay by' mod='mkbillingapi'} {$method.name}">{/if}
                {if isset($method.country) && $method.country != 'all'}<span>({$method.country})</span>{/if}
            </a>
        </li>
        {/foreach}
    </ul>
</div>
<p class="cart_navigation clearfix" id="cart_navigation">
    <a class="button-exclusive btn btn-default" href="{$back_href}">
        <i class="icon-chevron-left"></i>{l s='Back' mod='mkbillingapi'}
    </a>
</p>