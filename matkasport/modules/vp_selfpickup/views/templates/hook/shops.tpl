{** NOTICE OF LICENSE
*
* This module was created by veebipoed.ee and is protected by the laws of Copyright.
* This use license is granted for only one website.
* To use this module on several websites, you must purchase as many licenses as websites on which you want to use it.
* Use, copy, modification or distribution of this module without written license agreement from veebipoed.ee is strictly forbidden.
* In order to obtain a license, please contact us: info@veebipoed.ee
* Any infringement of these provisions as well as general copyrights will be prosecuted.
*
*
* @author     VEEBIPOED.EE
* @copyright  Copyright (c) 2012-2018 veebipoed.ee (http://www.veebipoed.ee)
* @license    Commercial license
* Support by mail: info@veebipoed.ee
*}
<div>
    <select name='selfpickup_shops' class='shops' id='selfpickup'>
        <option value='0'>{l s="Please pick a shop" mod='vp_selfpickup'}</option>
        {foreach from=$shops item=shop}
            <option value='selfpickup_{$shop.id_shop_address}' data-city="{$shop.address}" data-address="{$shop.name}">{$shop.name} - {$shop.address}</option>
        {/foreach}
    </select>
</div>
