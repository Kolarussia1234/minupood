{*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
*  @author    Veebipoed.ee, Pangalingid
*  @copyright 2018 Veebipoed.ee, Pangalingid
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<form method="post" action="{$action}" id="payment-form">
	{foreach from=$banks_info item=bank}
		<img id="{$bank['vp_name']}" class="vpbanklinks" src="{$dir_logos}{$bank['vp_name']}.png" alt="{$bank['payment_name']}" width="100px" onclick="s(this);">
	{/foreach}
	<input id="vpinput" type="hidden" name="bank" value="{$banks_info[0]['vp_name']}" />
</form>
<script>
	var arrBanks=[];
	var action = "{$action}&amp;bank="; //default
	var vpInput = document.getElementById("vpinput");
	{foreach from=$banks_info item=bank}
		arrBanks.push(["{$bank['vp_name']}", "{$bank['bank_url']}"]); 
	{/foreach}
	var bank = arrBanks[0][0]; //default
	
	function s(el) {
		var oldSelected = document.getElementsByClassName("vpselected")[0];
		
		if(oldSelected != null) {
			oldSelected.removeAttribute("class");
			oldSelected.setAttribute("class", "vpbanklinks");
		}
		vpInput.setAttribute("value", el.getAttribute("id"));
		el.setAttribute("class", "vpbanklinks vpselected");
	}
</script>
<style>
	#payment-form .vpbanklinks {
		border: 3px solid transparent;
		cursor: pointer;
		width: 100px;
		height: 36px;
	}
	#payment-form .vpselected {
		border-color: green;
	}
</style>
