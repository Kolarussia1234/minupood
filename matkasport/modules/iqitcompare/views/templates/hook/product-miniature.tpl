{*
* 2017 IQIT-COMMERCE.COM
*
* @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
* @copyright 2017 IQIT-COMMERCE.COM
* @license   Commercial license (You can not resell or redistribute this software.)
*
*}

{if isset($id_product)}
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="{$id_product|intval}"
   data-url="{url entity='module' name='iqitcompare' controller='actions'}" data-toggle="tooltip" title="{l s='Compare' mod='iqitcompare'}">
    <i class="compare_icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11">
            <g fill="#92bd2d" fill-rule="nonzero">
                <path d="M5.098 6.625H0v1.75h5.098V11L8 7.5 5.098 4zM9.902 2.625V0L7 3.5 9.902 7V4.375H15v-1.75z"/>
            </g>
        </svg>
    </i>
    <span class="wish_compare_text">{l s="Lisa võrdlusesse"}</span>
</a>
{/if}