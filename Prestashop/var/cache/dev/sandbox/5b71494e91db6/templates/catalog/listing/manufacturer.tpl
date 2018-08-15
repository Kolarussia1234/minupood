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
{extends file='catalog/listing/product-list.tpl'}

{block name='product_list_header'}
    <h1 class="h1 page-title">
        <span>{l s='List of products by brand %s' sprintf=[$manufacturer.name] d='Shop.Theme.Catalog'}</span></h1>
    <div id="manufacturer-description-wrapper" class="mb-3" role="tablist">
        <div class="card">
            <div id="manufacturer-short-description" class="collapse show" role="tabpanel">
                {$manufacturer.short_description nofilter}

                <a class="btn btn-secondary float-right"  data-toggle="collapse" data-parent="#manufacturer-description-wrapper"
                   href="#manufacturer-description">
                    {l s='More' d='Shop.Warehousetheme'}
                </a>

            </div>
        </div>
        <div class="card">
            <div id="manufacturer-description" class="collapse" role="tabpanel">
                {$manufacturer.description nofilter}
                <a class="btn btn-secondary float-right"  data-toggle="collapse" data-parent="#manufacturer-description-wrapper"
                   href="#manufacturer-short-description">
                    {l s='Less' d='Shop.Warehousetheme'}
                </a>
            </div>
        </div>
    </div>
{/block}
