{*
* 2017 IQIT-COMMERCE.COM
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement
*
* @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
* @copyright 2017 IQIT-COMMERCE.COM
* @license   Commercial license (You can not resell or redistribute this software.)
*
*}

{foreach $blocks as $block}

  {if $block.type}
    {include file="module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl"}
  {else}
    {include file="module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl"}
  {/if}

{/foreach}