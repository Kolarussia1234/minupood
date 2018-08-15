{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

    <div class="thumbnail-container">
        <a href="{$product.url}" class="thumbnail product-thumbnail">

            {if $product.cover}
                <img
                        {if $iqitTheme.pl_lazyload}
                            {if isset($carousel) && $carousel}
                                src="{$product.cover.bySize.home_default.url}"
                            {else}
                                data-src="{$product.cover.bySize.home_default.url}"
                                src="{$iqitTheme.theme_assets}img/blank.png"
                            {/if}
                        {else}
                            src="{$product.cover.bySize.home_default.url}"
                        {/if}
                        alt="{$product.cover.legend}"
                        data-full-size-image-url="{$product.cover.large.url}"
                        width="{$product.cover.bySize.home_default.width}"
                        height="{$product.cover.bySize.home_default.height}"
                        class="img-fluid {if $iqitTheme.pl_lazyload}{if isset($carousel) && $carousel} {else}js-lazy-product-image{/if}{/if} product-thumbnail-first"
                >
            {else}
                <a href="{$product.url}" class="thumbnail product-thumbnail">
                    <img class="img-fluid product-thumbnail-first" src="{$urls.no_picture_image.bySize.home_default.url}"
                         width="{$urls.no_picture_image.bySize.home_default.width}"
                         height="{$urls.no_picture_image.bySize.home_default.height}">
            {/if}

            {if !isset($overlay)}
                {if $iqitTheme.pl_rollover}
                    {foreach from=$product.images item=image}
                        {if !$image.cover}
                            <img
                                src="{$iqitTheme.theme_assets}img/blank.png"
                                data-src="{$image.bySize.home_default.url}"
                                width="{$image.bySize.home_default.width}"
                                height="{$image.bySize.home_default.height}"
                                alt="{$product.cover.legend} 2"
                                class="img-fluid js-lazy-product-image product-thumbnail-second"
                            >
                            {break}
                        {/if}
                    {/foreach}
                {/if}
            {/if}
        </a>

        {block name='product_flags'}
            <ul class="product-flags">
                {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}
                        {if $flag.type == 'discount'}
                            <span class="flag-discount-value"> /
                            {if $product.discount_type === 'percentage'}
                                -{$product.discount_percentage_absolute}
                            {else}
                                -{$product.discount_to_display}
                            {/if}
                            </span>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        {/block}

        {if !isset($overlay) && !isset($list)}
        {block name='product_list_functional_buttons'}
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    {hook h='displayProductListFunctionalButtons' product=$product}
                    {block name='quick_view'}
                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="{l s='Quick view' d='Shop.Theme.Actions'}">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    {/block}
                </div>
            </div>
        {/block}
        {/if}

        {if !isset($list)}
        {block name='product_availability'}
            <div class="product-availability">
                {if $product.available_for_order && ($product.quantity > 0 || $product.allow_oosp)}
                <span class="badge product-available mt-2">{l s='Available' d='Shop.Warehousetheme'}</span>
                    {elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}
                    <span class="badge product-available">{l s='Product available with different options' d='Shop.Warehousetheme'}</span>
                    {else}
                    <span class="badge product-unavailable">{l s='Out of stock' d='Shop.Warehousetheme'}</span>
                    {/if}
            </div>
        {/block}
        {/if}

    </div>


