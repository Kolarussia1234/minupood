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

<div id="mobile-header-sticky">
    <div class="container">
        <div class="mobile-main-bar">
            <div class="row no-gutters align-items-center row-mobile-header">
                <div class="header_icons col col-auto col-mobile-btn col-mobile-btn-menu col-mobile-menu-{$iqitTheme.mm_type}">
                    <a class="m-nav-btn" data-toggle="dropdown">
                        <i class="hamburger" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18" viewBox="0 0 27 18">
                                <path fill="#444" fill-rule="nonzero" d="M0 18h27v-3H0v3zm0-7.5h27v-3H0v3zM0 0v3h27V0H0z"/>
                            </svg>
                        </i>
                        <span>{l s='Menu' d='Shop.Theme.Global'}</span></a>
                    <div id="_mobile_iqitmegamenu-mobile" ></div>
                </div>
                <div id="mobile-btn-search" class="header_icons col col-auto col-mobile-btn col-mobile-btn-search">
                    <a class="m-nav-btn search_button" data-toggle="dropdown">
                        <i class="serch_icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#444" fill-rule="nonzero" d="M17.56 15.432l-3.91-3.91c-.022-.02-.046-.035-.068-.055a7.4 7.4 0 1 0-2.115 2.115c.02.022.034.046.055.067l3.91 3.91a1.504 1.504 0 0 0 2.127-2.127zM7.4 12.235a4.835 4.835 0 1 1 0-9.67 4.835 4.835 0 0 1 0 9.67z"/>
                            </svg>
                        </i>
                        <span>{l s='Search' d='Shop.Theme.Catalog'}</span></a>
                    <div id="search-widget-mobile" class="dropdown-content dropdown-menu dropdown-mobile search-widget">
                        <form method="get" action="{$urls.pages.search}">
                            <input type="hidden" name="controller" value="search">
                            <div class="input-group">
                                <input type="text" name="s" value=""
                                       placeholder="{l s='Search' d='Shop.Theme.Catalog'}" data-all-text="{l s='Show all results' d='Shop.Warehousetheme'}" class="form-control form-search-control">
                                <button type="submit" class="search-btn">
                                    <i class="search_widget">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                            <path fill="#444" fill-rule="nonzero" d="M17.56 15.432l-3.91-3.91c-.022-.02-.046-.035-.068-.055a7.4 7.4 0 1 0-2.115 2.115c.02.022.034.046.055.067l3.91 3.91a1.504 1.504 0 0 0 2.127-2.127zM7.4 12.235a4.835 4.835 0 1 1 0-9.67 4.835 4.835 0 0 1 0 9.67z"/>
                                        </svg>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-mobile-logo text-center">
                    <a href="{$urls.base_url}">
                        <img class="logo img-fluid"
                             src="{$shop.logo}" {if isset($iqitTheme.rm_logo) && $iqitTheme.rm_logo != ''} srcset="{$iqitTheme.rm_logo} 2x"{/if}
                             alt="{$shop.name}">
                    </a>
                </div>
                <div class="header_icons col col-auto col-mobile-btn col-mobile-btn-account">
                    <a href="{$urls.pages.my_account}" class="m-nav-btn">
                        <i class="user_icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18">
                                <g fill="#444" fill-rule="nonzero">
                                    <path d="M7.937 10h.122c1.124-.02 2.034-.415 2.705-1.172 1.477-1.668 1.231-4.527 1.205-4.8-.096-2.049-1.063-3.029-1.861-3.486C9.513.2 8.819.015 8.044 0H7.98c-.426 0-1.262.07-2.064.527-.806.457-1.788 1.437-1.884 3.5-.026.274-.272 3.133 1.205 4.8.667.758 1.577 1.154 2.7 1.173zM5.056 4.124c0-.012.004-.023.004-.031.126-2.756 2.079-3.051 2.915-3.051h.046c1.036.023 2.797.445 2.916 3.051 0 .012 0 .023.003.03.004.028.273 2.641-.947 4.017-.483.546-1.128.815-1.976.822h-.039c-.843-.007-1.491-.276-1.97-.822-1.217-1.368-.956-3.993-.952-4.016z"/>
                                    <path d="M14.999 14.448v-.01c0-.03-.004-.058-.004-.09-.022-.708-.07-2.364-1.654-2.894l-.036-.01c-1.647-.412-3.017-1.342-3.031-1.353a.499.499 0 0 0-.687.118.476.476 0 0 0 .12.673c.063.043 1.516 1.034 3.335 1.491.85.297.945 1.188.971 2.004 0 .032 0 .06.004.089.003.322-.019.82-.077 1.105-.592.33-2.91 1.467-6.438 1.467-3.513 0-5.847-1.141-6.442-1.47-.058-.286-.084-.784-.077-1.106 0-.028.004-.057.004-.089.026-.816.12-1.706.971-2.003 1.819-.458 3.272-1.452 3.334-1.492a.476.476 0 0 0 .121-.672.499.499 0 0 0-.687-.118c-.014.01-1.376.94-3.03 1.352-.015.003-.026.007-.037.01-1.585.534-1.632 2.19-1.654 2.894 0 .033 0 .061-.004.09v.01c-.004.187-.007 1.142.186 1.62a.461.461 0 0 0 .19.226c.11.072 2.735 1.71 7.128 1.71 4.394 0 7.02-1.642 7.129-1.71a.481.481 0 0 0 .19-.225c.182-.476.179-1.43.175-1.617z"/>
                                </g>
                            </svg>
                        </i>
                        <span>{l s='Sign in' d='Shop.Theme.Actions'}</span></a>
                </div>
                {hook h='displayHeaderButtonsMobile'}
                {if !$configuration.is_catalog}
                <div class="header_icons col col-auto col-mobile-btn col-mobile-btn-cart ps-shoppingcart {if isset($iqitTheme.cart_style) && $iqitTheme.cart_style == "floating"}dropdown{else}side-cart{/if}">
                    <div id="mobile-cart-wrapper">
                    <a id="mobile-cart-toogle"  class="m-nav-btn" data-toggle="dropdown">
                        <i class="bag_header_mobile" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18">
                                <g fill="#444" fill-rule="nonzero">
                                    <path d="M10.955 4.828s-.098-3.54-.102-3.583A.653.653 0 0 0 10.45.71L9.417.303a.624.624 0 0 0-.488.011.64.64 0 0 0-.337.359l-.708 1.855a4.807 4.807 0 0 0-.328-.068v-.7C7.556.79 6.779 0 5.824 0 4.868 0 4.09.79 4.09 1.76v.7c-.11.019-.22.042-.329.068L3.054.673a.64.64 0 0 0-.337-.359.624.624 0 0 0-.488-.011L1.197.71a.638.638 0 0 0-.403.528C.789 1.283.691 4.83.691 4.83A5.02 5.02 0 0 0 0 7.38v9.528C0 17.51.482 18 1.074 18h9.499c.592 0 1.074-.49 1.074-1.092V7.38a5.02 5.02 0 0 0-.692-2.552zm-.591-.808a4.991 4.991 0 0 0-.357-.359l.321-.843.036 1.202zM9.12.88a.07.07 0 0 1 .091-.04l1.032.406a.07.07 0 0 1 .04.038c.005.012.01.032 0 .055l-.743 1.947a4.876 4.876 0 0 0-1.113-.592L9.121.881zM5.824.576c.579 0 1.06.432 1.15.996a1.704 1.704 0 0 0-2.3-.003c.09-.562.571-.993 1.15-.993zm1.059 1.817c-.049-.002-2.07-.002-2.119 0 .057-.127.136-.244.236-.345.22-.224.512-.347.824-.347.463 0 .873.281 1.059.692zm-5.52-1.108a.07.07 0 0 1 .039-.038L2.434.84a.07.07 0 0 1 .091.041l.693 1.815c-.398.149-.771.348-1.113.591L1.362 1.34a.071.071 0 0 1 0-.055zm-.045 1.533l.322.844a5.004 5.004 0 0 0-.357.359l.035-1.203zm9.762 14.09a.512.512 0 0 1-.507.516H1.074a.512.512 0 0 1-.507-.516V7.38c0-2.434 1.948-4.413 4.343-4.413h1.827c2.395 0 4.343 1.98 4.343 4.413v9.528z"/>
                                    <path d="M2.87 8.47c-.415 0-.752.395-.752.88v5.654c0 .484.337.878.751.878h6.968c.414 0 .751-.394.751-.878V9.349c0-.484-.337-.878-.751-.878H2.869zm6.967 6.812H2.869c-.131 0-.238-.125-.238-.278v-3.772h6.463v.682h.514v-.682h.467v3.772c0 .153-.107.278-.238.278zm.238-5.933v1.283H2.63V9.349c0-.153.107-.278.238-.278h6.968c.13 0 .238.125.238.278zM7.412 4.235H4.235v2.118h3.177V4.235zm-.5 1.376H4.735v-.634H6.91v.634z"/>
                                </g>
                            </svg>
                            <span id="mobile-cart-products-count" class="cart-products-count cart-products-count-btn">{$cart.products_count}</span>
                        </i>
                        <span>{l s='Cart' d='Shop.Theme.Checkout'}</span></a>
                    <div id="_mobile_blockcart-content"></div>
                    </div>
                </div>
                {/if}
            </div>
        </div>
    </div>
</div>


