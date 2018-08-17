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
<div class="product-add-to-cart pt-3">
    {if !$configuration.is_catalog}
        {block name='product_quantity'}
            <div class="row extra-small-gutters product-quantity">
                <div class="col col-12 col-sm-auto quantity_select">
                    <div class="qty">
                        <input
                                type="number"
                                name="qty"
                                id="quantity_wanted"
                                value="{$product.quantity_wanted}"
                                class="input-group"
                                min="{$product.minimal_quantity}"
                        >
                    </div>
                </div>

                {block name='product_price'}
                    <div class="product_prices {if $product.has_discount}has-discount{else}has_regular{/if}"
                        itemprop="offers"
                        itemscope
                        itemtype="https://schema.org/Offer"
                    >
                        <link itemprop="availability" href="https://schema.org/InStock"/>
                        <meta itemprop="priceCurrency" content="{$currency.iso_code}">

                        <div>
                            <span itemprop="price" class="product-price" content="{$product.price_amount}">{$product.price}</span>
                            {if $product.has_discount}
                                <span class="product-discount">
                                    {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                    <span class="regular-price">{$product.regular_price}</span>
                                </span>

                                {if $product.discount_type === 'percentage'}
                                    <span class="badge badge-discount discount discount-percentage">-{$product.discount_percentage_absolute}</span>
                                {else}
                                    <span class="badge badge-discount discount discount-amount">-{$product.discount_to_display}</span>
                                {/if}

                                {if isset($product.specific_prices.to) && $product.specific_prices.to != '0000-00-00 00:00:00'}<meta itemprop="priceValidUntil" content="{$product.specific_prices.to}"/>{/if}

                            {/if}
                        </div>

                        {block name='product_unit_price'}
                            {if $displayUnitPrice}
                                <p class="product-unit-price text-muted">{l s='(%unit_price%)' d='Shop.Theme.Catalog' sprintf=['%unit_price%' => $product.unit_price_full]}</p>
                            {/if}
                        {/block}
                    </div>
                {/block}

                <div class="col col-12 col-sm-auto add_to_cart_button">
                    <div class="add">
                        <button
                                class="btn btn-primary btn-lg add-to-cart"
                                data-button-action="add-to-cart"
                                type="submit"
                                {if !$product.add_to_cart_url}
                                    disabled
                                {/if}
                        >
                            <i class="bag-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20">
                                    <g fill="#FFF" fill-rule="nonzero">
                                        <path d="M12.227 5.365s-.109-3.934-.113-3.981a.723.723 0 0 0-.45-.595L10.51.337a.712.712 0 0 0-.92.41L8.8 2.81a5.387 5.387 0 0 0-.367-.076v-.777C8.433.877 7.566 0 6.5 0S4.567.877 4.567 1.956v.777a5.384 5.384 0 0 0-.368.076L3.41.747a.712.712 0 0 0-.921-.41L1.336.789a.71.71 0 0 0-.45.587c-.006.05-.114 3.99-.114 3.99A5.559 5.559 0 0 0 0 8.2v10.587C0 19.456.538 20 1.2 20h10.6c.662 0 1.2-.544 1.2-1.213V8.2a5.558 5.558 0 0 0-.773-2.835zm-.66-.899a5.558 5.558 0 0 0-.398-.398l.36-.937.039 1.335zM10.182.98a.078.078 0 0 1 .101-.045l1.152.452c.025.01.038.028.044.042a.079.079 0 0 1 .001.06l-.83 2.164a5.45 5.45 0 0 0-1.241-.657L10.18.979zM6.5.64c.646 0 1.183.48 1.283 1.107a1.907 1.907 0 0 0-2.567-.004A1.307 1.307 0 0 1 6.5.64zm1.181 2.018a589.83 589.83 0 0 0-2.364 0c.063-.14.151-.27.263-.383.245-.248.572-.385.919-.385.517 0 .975.313 1.182.768zm-6.16-1.23a.078.078 0 0 1 .043-.042L2.717.934a.078.078 0 0 1 .101.045l.774 2.016c-.444.166-.86.388-1.242.657L1.52 1.49a.079.079 0 0 1 .001-.061zM1.47 3.13l.36.937c-.14.127-.273.26-.4.4l.04-1.337zm10.896 15.656a.57.57 0 0 1-.566.573H1.199a.57.57 0 0 1-.566-.573V8.2c0-2.704 2.175-4.904 4.847-4.904h2.04c2.672 0 4.847 2.2 4.847 4.904v10.587z"/>
                                        <path d="M1.595 10.345a.906.906 0 0 0-.91.899v5.788c0 .496.408.899.91.899h8.442c.502 0 .91-.403.91-.9v-5.787c0-.496-.408-.9-.91-.9H1.595zm8.442 6.972H1.595a.287.287 0 0 1-.289-.285v-3.86h7.831v.698h.622v-.699h.566v3.86c0 .158-.13.286-.288.286zm.288-6.073v1.313H1.306v-1.313c0-.157.13-.285.289-.285h8.442c.159 0 .288.128.288.285zM8.21 4.828H4.79v2.069h3.42v-2.07zm-.538 1.344H5.328v-.62h2.344v.62z"/>
                                    </g>
                                </svg>
                            </i>
                            <i class="fa fa-circle-o-notch fa-spin fa-fw spinner-icon" aria-hidden="true"></i>
                            <span class="cart_btn">{l s='Add to cart' d='Shop.Theme.Actions'}</span>
                        </button>

                    </div>
                </div>
                {* {hook h='displayAfterProductAddCartBtn' product=$product} *}
            </div>
        {/block}

        {block name='product_minimal_quantity'}
            <p class="product-minimal-quantity">
                {if $product.minimal_quantity > 1}
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    {l
                    s='The minimum purchase order quantity for the product is %quantity%.'
                    d='Shop.Theme.Checkout'
                    sprintf=['%quantity%' => $product.minimal_quantity]
                    }
                {/if}
            </p>
        {/block}
    {/if}
</div>
