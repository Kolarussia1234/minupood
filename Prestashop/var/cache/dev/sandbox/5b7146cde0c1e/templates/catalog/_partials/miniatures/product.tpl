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
{block name='product_miniature_item'}
    <div class="js-product-miniature-wrapper {if isset($carousel) && $carousel}product-carousel{else}
    {if isset($elementor) && $elementor}
    col-{$nbMobile} col-md-{$nbTablet} col-lg-{$nbDesktop} col-xl-{$nbDesktop}
    {else}
    col-{$iqitTheme.pl_grid_p} col-md-{$iqitTheme.pl_grid_t} col-lg-{$iqitTheme.pl_grid_d} col-xl-{$iqitTheme.pl_grid_ld}{/if}
    {/if} ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-{$iqitTheme.pl_grid_layout} js-product-miniature"
                data-id-product="{$product.id_product}"
                data-id-product-attribute="{$product.id_product_attribute}"
                itemscope itemtype="http://schema.org/Product"

        >

        {if $iqitTheme.pl_grid_layout == 1}
            {include file='catalog/_partials/miniatures/_partials/product-miniature-1.tpl'}
        {/if}

        {if $iqitTheme.pl_grid_layout == 2}
                {include file='catalog/_partials/miniatures/_partials/product-miniature-2.tpl'}
        {/if}

        {if $iqitTheme.pl_grid_layout == 3}
                {include file='catalog/_partials/miniatures/_partials/product-miniature-3.tpl'}
        {/if}

        </article>
    </div>
{/block}
