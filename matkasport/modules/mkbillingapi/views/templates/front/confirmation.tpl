{extends file='page.tpl'}
{block name="page_content"}
{capture name=path}
    {$display_name}
{/capture}
<div id="veebipoed-overlay" class="ajax_loader"></div>
<div class="box">
    <h3 class="page-subheading">{$display_name}</h3>
    <p>{l s='If you want to proceed, please click "Confirm", otherwise click "Back"' mod='mkbillingapi'}</p>
</div>
<p class="cart_navigation clearfix" id="cart_navigation">
    <a class="button-exclusive btn btn-default" href="{$back_href}">
        <i class="icon-chevron-left"></i>{l s='Back' mod='mkbillingapi'}
    </a>
    <a class="button btn btn-default button-medium" href="{$href}">
        <span>{l s='Confirm' mod='mkbillingapi'}<i class="icon-chevron-right right"></i></span>
    </a>
</p>
{/block}
