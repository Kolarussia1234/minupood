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
		.variables-addresses thead {
			background: #a3a3a3;
			color: white;
			font-size: 15px;
			border: 1px solid #999999;
			/* padding: 10px; */
		}

		.variables-addresses td {
			border: 1px solid #a3a3a3;
			text-align: center;
			padding:3px;
		}
	</style>
	<h3><i class="icon icon-truck"></i> {l s='Shop List' mod='staticvariables'}</h3>
	<img src="{$module_dir|escape:'html':'UTF-8'}/logo.png" id="payment-logo" class="pull-right" />
	<table width="100%" class="variables-addresses">
		<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Value</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
		</thead>
		<tbody>

		{foreach from=$variables item=variable}
			<tr>
				<td>{$variable.id_variable}</td>
				<td>{$variable.name}</td>
				<td>{$variable.value}</td>
				<td><a class="btn btn-default"
				   href="{$link->getAdminLink('AdminModules')}&configure=staticvariables&id_slide={$variable.id_variable}">
					<i class="icon-edit"></i>
					{l s='Edit' d='Admin.Actions'}
				</a></td>
				<td><a class="btn btn-default"
				   href="{$link->getAdminLink('AdminModules')}&configure=staticvariables&delete_id_slide={$variable.id_variable}">
					<i class="icon-trash"></i>
					{l s='Delete' d='Admin.Actions'}
				</a></td>
			</tr>
		{/foreach}
		</tbody>
	</table>
</div>
