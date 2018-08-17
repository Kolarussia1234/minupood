{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="panel">
    <style>
        .selfpickup-addresses thead {
            background: #a3a3a3;
            color: white;
            font-size: 15px;
            border: 1px solid #999999;
            /* padding: 10px; */
        }

        .selfpickup-addresses td {
            border: 1px solid #a3a3a3;
            text-align: center;
            padding:3px;
        }
    </style>
    <h3><i class="icon icon-truck"></i> {l s='Shop List' mod='vp_buumstocks'}</h3>
    <table width="100%" class="selfpickup-addresses">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>

        {foreach from=$warehouses item=warehouse}
        <tr>
            <td>{$warehouse.warehouse}</td>
            <td>{$warehouse.name}</td>
            <td>{$warehouse.address}</td>
            <td><a class="btn btn-default"
                   href="{$link->getAdminLink('AdminModules')}&configure=selfpickup&id_slide={$warehouse.warehouse}">
                    <i class="icon-edit"></i>
                    {l s='Edit' d='Admin.Actions'}
                </a></td>
        </tr>
        {/foreach}
        </tbody>
    </table>
</div>
