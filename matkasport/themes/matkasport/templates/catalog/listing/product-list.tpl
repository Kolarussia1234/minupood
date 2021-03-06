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
{extends file=$layout}


{block name='head_seo_canonical'}
    {if isset($listing.pagination)}
        {if $listing.pagination.should_be_displayed}
            {foreach from=$listing.pagination.pages item="p_page"}
                {if $p_page.current}
                    {if $p_page.page == 1}
                        {if $page.canonical}
                            <link rel="canonical" href="{$page.canonical}">
                        {/if}
                    {else}
                        <link rel="canonical" href="{$p_page.url}">{/if}
                {/if}
                {if $p_page.type === 'previous'}
                    {if $p_page.clickable}
                        {if $p_page.page == 1}
                            {if $page.canonical}
                                <link rel="prev" href="{$page.canonical}">
                            {/if}
                        {else}
                            <link rel="prev" href="{$p_page.url}">
                        {/if}
                    {/if}
                {/if}
                {if $p_page.type === 'next'}
                    {if $p_page.clickable}
                        <link rel="next" href="{$p_page.url}">
                    {/if}
                {/if}
            {/foreach}
            {else}
            {if $page.canonical}
                <link rel="canonical" href="{$page.canonical}">
            {/if}
        {/if}
    {/if}
{/block}

{block name='content'}
    <section id="main">
        {block name='product_list_header'}
            <h1 class="h1 page-title"><span>{$listing.label}</span></h1>
        {/block}

        <div class="row align-items-center justify-content-between small-gutters">
            {hook h='displayCategoryPage' mod='ps_imageslider_mod'}
            {if isset($category)}
                {hook h='displayCategoryTop' id_category=$category.id}
            {/if}
        </div>

        <section id="products">
            {if $listing.products|count}
                {block name='product_list_active_filters'}
                    {$listing.rendered_active_filters nofilter}
                {/block}
                <div id="">
                    {block name='product_list_top'}
                        {include file='catalog/_partials/products-top.tpl' listing=$listing}
                    {/block}
                </div>

                {if $iqitTheme.pl_faceted_position}
                    {block name='product_list_facets_center'}
                        <div id="facets_search_center">
                            {widget name="ps_facetedsearch"}
                        </div>
                    {/block}
                {/if}
                <div id="">
                    {block name='product_list'}
                        {* <div id="facets-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div> *}
                        {include file='catalog/_partials/products.tpl' listing=$listing}
                    {/block}
                </div>
                <div id="vp_infinity_button">{l s='Load more products' d='Shop.Theme.Matkasport'}</div>
                <div id="infinity-loader-icon"><i class="vp-loader-icon fa-spin"></i></div>
                <div id="js-product-list-bottom">
                    {block name='product_list_bottom'}
                        {include file='catalog/_partials/products-bottom.tpl' listing=$listing}
                    {/block}


                </div>
                    {block name='product_list_bottom_static'}{/block}
            {else}

                {block name='product_list_not_found'}
                    <div class="alert alert-warning col-4 col-sm-4 col-md-6 col-lg-6 col-xl-6" role="alert">
                        <strong>{l s='There are no products.' d='Shop.Theme.Catalog'}</strong>
                    </div>
                {/block}

            {/if}
        </section>

    </section>
{/block}
