<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:09
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e651a4458_81236008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e9f2b1680a466582d2199d038efe2cfa3a83f7' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1534151698,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_5b715e651a4458_81236008 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_shoppingcart/ps_shoppingcart-content.tpl --><div id="_desktop_blockcart-content">
    <div id="blockcart-content" class="blockcart-content">
        <div class="cart-title">
            <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
            <button type="button" id="js-cart-close" class="close">
                <span>×</span>
            </button>
            <hr>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['cart']->value['products']) && $_smarty_tpl->tpl_vars['cart']->value['products']) {?>
            <ul class="cart-products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    <li><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div class="cart-subtotals">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'products') {?>
                        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 clearfix">
                            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <span class="value float-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartAjaxInfo'),$_smarty_tpl ) );?>

            <div class="cart-buttons text-center">
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order'),$_smarty_tpl ) );?>
"
                       class="btn btn-primary btn-block btn-lg mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                    <a rel="nofollow" class="btn btn-secondary btn-block"
                       href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a>
                <?php }?>
            </div>
        <?php } else { ?>
            <span class="no-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <?php }?>
    </div>
</div><!-- end C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_shoppingcart/ps_shoppingcart-content.tpl --><?php }
}
