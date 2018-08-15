<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:52
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c84b98d19_18173885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '235e3f5ee59d64225af247fb2228e65cd3fe7fb0' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1534151698,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
  ),
),false)) {
function content_5b714c84b98d19_18173885 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_shoppingcart/ps_shoppingcart-default.tpl --><div id="ps-shoppingcart-wrapper">
    <div id="ps-shoppingcart"
         class="header-cart-default ps-shoppingcart <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'] == "floating") {?>dropdown<?php } else { ?>side-cart<?php }?>">
        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>

<!-- end C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_shoppingcart/ps_shoppingcart-default.tpl --><?php }
}
