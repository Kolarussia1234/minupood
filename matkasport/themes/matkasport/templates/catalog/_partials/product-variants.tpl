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
<div class="product-variants">
    {foreach from=$groups key=id_attribute_group item=group}
        <div class="clearfix product-variants-item group_{$id_attribute_group}">
            <span class="form-control-label">{$group.name}:
                {foreach from=$group.attributes key=id_attribute item=group_attribute}
                    {if $group_attribute.selected}{$group_attribute.name}{/if}
                {/foreach}
            </span>
            {if $group.group_type == 'select'}
                <div class="custom-select2">
                    <select
                            id="group_{$id_attribute_group}"
                            data-product-attribute="{$id_attribute_group}"
                            name="group[{$id_attribute_group}]"
                            class="form-control form-control-select group-container">
                        {foreach from=$group.attributes key=id_attribute item=group_attribute}
                            <option class="input-change attribute_id_{$id_attribute} group_{$id_attribute_group}" value="{$id_attribute}" data-title="{$group_attribute.name}"
                                    title="{$group_attribute.name}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name}</option>
                        {/foreach}
                    </select>
                </div>
            {elseif $group.group_type == 'color'}

                <ul id="group_{$id_attribute_group}" class="group-container">
                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                        <li class="float-left input-container" data-toggle="tooltip" data-animation="false" data-placement="top" title="{$group_attribute.name}">
                            <input class="input-change input-color attribute_id_{$id_attribute} group_{$id_attribute_group}" type="radio" data-product-attribute="{$id_attribute_group}"
                                   name="group[{$id_attribute_group}]" data-title="{$group_attribute.name}"
                                   value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                            <span {if $group_attribute.texture}class="color texture" style="background-image: url({$group_attribute.texture})"
                                  {elseif $group_attribute.html_color_code}class="color" style="background-color: {$group_attribute.html_color_code}"{/if}>
                                <span class="sr-only">{$group_attribute.name}</span>
                            </span>
                            <p class="color_title">{$group_attribute.name}</p>
                        </li>
                    {/foreach}
                </ul>
            {elseif $group.group_type == 'radio'}
                <ul id="group_{$id_attribute_group}" class="group-container">
                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                        <li class="input-container float-left">
                            <input class="input-change input-radio attribute_id_{$id_attribute} group_{$id_attribute_group}" type="radio" data-product-attribute="{$id_attribute_group}"
                                   name="group[{$id_attribute_group}]" data-title="{$group_attribute.name}"
                                   value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                            <span class="radio-label">{$group_attribute.name}</span>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </div>
    {/foreach}


    <script type="text/javascript">
        {literal}
        $( document ).ready(function(){
            var groupId_temp= {/literal}{$staticvariables['filterCategoryId']}{literal};
            setGroupId(groupId_temp);
            var colorIds = {/literal}{","|explode:$staticvariables['categoriesToFiltering']|json_encode nofilter}{literal};
            setColorIds(colorIds);
            var notSelectable = {/literal}{","|explode:$staticvariables['notSelectable']|json_encode nofilter}{literal};
            setNotSelectableCategories(notSelectable);
            var jsonCombinations_temp = {/literal}{$combinations|json_encode nofilter}{literal};
            saveJsonCombinations(jsonCombinations_temp);
            var groupCombination_temp = {/literal}{$groups|json_encode nofilter}{literal};
            saveGroupCombinations(groupCombination_temp);
            $('div.group_5').insertAfter('div.group_2 span.form-control-label').show();
            var product_attribute= null;
            {/literal}{if $product['id_product_attribute']}{literal}
            var product_attribute={/literal}{$product['id_product_attribute']}{literal};
            {/literal}{/if}{literal}
            var product_id={/literal}{$product['id_product']}{literal};

            if(product_attribute){
                loadStocks(product_attribute,true);
            } else {
                loadStocks(product_id,false);
            }
            initCombinations();
        });
        {/literal}
    </script>
</div>

