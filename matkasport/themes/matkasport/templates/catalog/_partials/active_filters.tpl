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
<div id="js-active-search-filters" class="{if $activeFilters|count}active_filters{else}hide{/if}">

    {assign var=facetLabelSex value="Kellele"}
    {if $activeFilters|count}
        <script type="text/javascript">
            $('.vp-recommended-products').hide();
        </script>
        <div id="active-search-filters">
            {block name='active_filters_title'}
                <span class="active-filter-title">{l s='Active filters' d='Shop.Theme.Global'}: </span>
            {/block}

            {assign var=selectedFilters value=0}
            {foreach from=$activeFilters item="filterCount"}
                {if $filterCount.active && isset($facetLabelSex) && $filterCount.facetLabel == $facetLabelSex}
                    {assign var=selectedFilters value={$selectedFilters}+1}
                    
                {/if}
            {/foreach}
            <ul class="filter-blocks">

            {foreach from=$activeFilters item="filter"}
                {assign var=url value=$filter.nextEncodedFacetsURL}
                {if isset($facetLabelSex) && $filter.facetLabel == $facetLabelSex}

                    {if $filter.nextEncodedFacetsURL|strstr:'Universaalne'}
                
                        {if $filter.label!="Universaalne"}
                            {if $selectedFilters < 3}
                                {assign var=url value= $filter.nextEncodedFacetsURL|replace:'-Universaalne':''}
                                {assign var=url value= $url|replace:"{$filter.facetLabel}{'/'}":''}
                                {assign var=url value= $url|replace:{$filter.facetLabel}:''}

                            {else}
                                {assign var=url value= $filter.nextEncodedFacetsURL}
                            {/if}

                        {/if}
                        {if {$url|substr:-1}=='='}
                            {assign var=url value=$url|substr:0:-3}
                        {/if}

                    {/if}
                {else}

                    {if ($filter.nextEncodedFacetsURL|strstr:'Mehed' || $filter.nextEncodedFacetsURL|strstr:'Lapsed' || $filter.nextEncodedFacetsURL|strstr:'Naised')  && !$filter.nextEncodedFacetsURL|strstr:'Universaalne'}
                        {if $url|strstr:'Mehed'}
                            {assign var=url value= $filter.nextEncodedFacetsURL|replace:'Mehed':'Mehed-Universaalne'}
                        {elseif $filter.nextEncodedFacetsURL|strstr:'Lapsed'}
                            {assign var=url value= $filter.nextEncodedFacetsURL|replace:'Lapsed':'Lapsed-Universaalne'}
                        {elseif $filter.nextEncodedFacetsURL|strstr:'Naised'}
                            {assign var=url value= $filter.nextEncodedFacetsURL|replace:'Naised':'Naised-Universaalne'}
                        {/if}
                    {/if}
                {/if}
                {block name='active_filters_item'}
                    <li class="filter-block">
                        <a class="js-search-link btn btn-secondary btn-sm" href="{$url}">
                            {l s='%1$s: ' d='Shop.Theme.Catalog' sprintf=[$filter.facetLabel]}
                            {$filter.label}
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </li>
                {/block}
            {/foreach}
            {if $activeFilters|count > 1}
                {block name='facets_clearall_button'}
                    <li class="filter-block filter-block-all">
                        <a class="js-search-link btn btn-secondary btn-sm" href="{$clear_all_link}">
                            {l s='Clear all' d='Shop.Theme.Actions'}
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </li>
                {/block}
            {/if}
            </ul>
        </div>
    {/if}
</div>
