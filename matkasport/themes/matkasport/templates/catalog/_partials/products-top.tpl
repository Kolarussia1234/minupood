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
<div id="js-product-list-top" class="products-selection">
    <div class="row align-items-center justify-content-between small-gutters">

        {foreach from=$listing.pagination.pages item=sort_order}
            {if $sort_order.current}
                {assign var="currentSortUrl" value=$sort_order.url|regex_replace:"/&productListView=\d+$/":""}
                {break}
            {/if}
        {/foreach}
            <p class="category_list_title">{l s="Products" d='Shop.Theme.Catalog'}</p>

        {block name='sort_by'}
            {include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
        {/block}

        {if isset($currentSortUrl)}
        <div class="view-switcher hidden-sm-down">
            <a href="{$currentSortUrl}&productListView=grid" class="{if $iqitTheme.pl_default_view == 'grid'}current{/if} {['js-search-link' => true]|classnames}" data-button-action="change-list-view" data-view="grid" style="margin-right: 10px;"><i class="grid_3x" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                    <g fill="#8A8A8A" fill-rule="evenodd">
                        <path d="M0 0h10v10H0zM0 12h10v10H0zM0 24h10v10H0zM12 0h10v10H12zM12 12h10v10H12zM12 24h10v10H12zM24 0h10v10H24zM24 12h10v10H24zM24 24h10v10H24z"/>
                    </g>
                </svg>
            </i></a>
            <a href="{$currentSortUrl}&productListView=list" class="{if $iqitTheme.pl_default_view == 'list'}current{/if} {['js-search-link' => true]|classnames}" data-button-action="change-list-view" data-view="list">
                <i class="grid_x5" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                        <g fill="#8A8A8A" fill-rule="evenodd">
                            <path d="M0 0h6v6H0zM0 7h6v6H0zM0 21h6v6H0zM0 14h6v6H0zM0 28h6v6H0zM7 0h6v6H7zM21 0h6v6h-6zM7 7h6v6H7zM7 21h6v6H7zM21 7h6v6h-6zM21 21h6v6h-6zM7 14h6v6H7zM7 28h6v6H7zM21 14h6v6h-6zM21 28h6v6h-6zM14 0h6v6h-6zM28 0h6v6h-6zM14 7h6v6h-6zM14 21h6v6h-6zM28 7h6v6h-6zM28 21h6v6h-6zM14 14h6v6h-6zM14 28h6v6h-6zM28 14h6v6h-6zM28 28h6v6h-6z"/>
                        </g>
                    </svg>
                </i>
            </a>
        </div>
        {/if}

        {if $iqitTheme.pl_top_pagination && !$iqitTheme.pl_infinity}
            <div class="col col-auto col-left-sort">
                {block name='sort_by'}
                    {include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
                {/block}
            </div>
            <div class="col col-auto pagination-wrapper hidden-sm-down">
                {include file='_partials/pagination.tpl' pagination=$listing.pagination}
            </div>
        {else}
            <div class="col col-auto showing_for_mob">
                <span class="showing">
                    {l s='Products: %total%' d='Shop.Theme.Catalog' sprintf=['%total%' => $listing.pagination.total_items]}
                    {* {l s='Showing %from%-%to% of %total% item(s)' d='Shop.Theme.Catalog' sprintf=[
                    '%from%' => $listing.pagination.items_shown_from ,
                    '%to%' => $listing.pagination.items_shown_to,
                    '%total%' => $listing.pagination.total_items
                    ]} *}
                </span>

            </div>
        {/if}
    </div>
    {if !empty($listing.rendered_facets)}
        {if $iqitTheme.pl_faceted_position}
            <div class="col col-auto facated-toggler">
                <div class="filter-button">
                    <button id="search_center_filter_toggler" class="btn btn-secondary">
                        <i class="fa fa-filter" aria-hidden="true"></i> {l s='Filter' d='Shop.Theme.Actions'}
                    </button>
                </div>
            </div>
        {else}
            <div class="col col-auto facated-toggler hidden-md-up">
                <div class="filter-button">
                    <button id="search_filter_toggler" class="btn btn-secondary">
                        <i class="fa fa-filter" aria-hidden="true"></i> {l s='Filter' d='Shop.Theme.Actions'}
                    </button>
                </div>
            </div>
        {/if}
    {else}
        <div class="col col-auto facated-toggler"></div>
    {/if}
</div>

