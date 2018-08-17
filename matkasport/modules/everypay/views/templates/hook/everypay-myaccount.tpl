
{*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, EveryPay
*  @copyright 2015 Veebipoed.ee, EveryPay
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<!-- MODULE everypay -->
{if $logged && $token_payment == 1}
	<a id="lnk_everypay" class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{$link->getModuleLink('everypay', 'mycards', array(), true)}" title="{l s='Credit cards' mod='everypay'}">
		<span class="link-item">
			<i class="fa fa-credit-card"></i>
			{l s='Credit cards' mod='everypay'}
		</span>
	</a>
{/if}
<!-- END : MODULE everypay -->