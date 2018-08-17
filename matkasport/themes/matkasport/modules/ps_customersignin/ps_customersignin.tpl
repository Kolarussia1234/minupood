<div id="user_info" class="d-inline-block">
    {if $logged}
        <a
                class="account"
                href="{$my_account_url}"
                title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
                rel="nofollow"
        >
            <i class="avatar_icon" aria-hidden="true"></i>
            <span>{$customerName}</span>
        </a> <span class="text-faded"> / </span>
        <a
                class="logout"
                href="{$logout_url}"
                rel="nofollow"
        >
            <span >{l s='Sign out' d='Shop.Theme.Actions'}</span>
        </a>
    {else}
        <a
                class="account"
                href="{$my_account_url}"
                title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
                rel="nofollow"
        ><i class="avatar_icon" aria-hidden="true"></i>
            <span>{l s='Sign in' d='Shop.Theme.Actions'}</span>
        </a>
    {/if}
</div>
