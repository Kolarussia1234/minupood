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
	<h3><i class="icon icon-credit-card"></i> {l s='Domino import' mod='vp_domino'}</h3>
	{foreach from=$cron_jobs key=cron_type item=cron_job}
	<div class="row">
		<div class="col-md-1">
			<button data-clipboard-text="{$cron_job.url}" class="btn btn-small btn-primary clipboard">{l s='Copy' mod='vp_domino'}</button>
		</div>
		<div class="col-md-1">
			<p>{$cron_job.name}</p>
		</div>
		<div class="col-md-10">
			<h4 class="cron-url">{$cron_job.url}</h4>
		</div>
	</div>
	{/foreach}
</div>

<script>
    var clip = new ClipboardJS('.clipboard');
    clip.on('success', function(e) {
        showSuccessMessage('Copied!');
    });
</script>