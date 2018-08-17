{*
* 2007-2015 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $homebanner.slides}
  <div class="homebanner-container" data-interval="{$homebanner.speed}" data-wrap="{$homebanner.wrap}" data-pause="{$homebanner.pause}">
    <ul class="rslides_home">
      {foreach from=$homebanner.slides item=slide}
        <li class="slide">
          <a href="{$slide.url}">
            <img src="{$slide.image_url}" alt="{$slide.legend|escape}" />
            {if $slide.description }
              <span class="caption">
                <div class="vp_imageslider_text {if $slide.slot == 0}main_banner{/if} vp_imageslider_home_{$slide.desc_pos}">{$slide.description nofilter}</div>
              </span>
            {/if}
          </a>
        </li>
      {/foreach}
    </ul>
  </div>
{/if}
