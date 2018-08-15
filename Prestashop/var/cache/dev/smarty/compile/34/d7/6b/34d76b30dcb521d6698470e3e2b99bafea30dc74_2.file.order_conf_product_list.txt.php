<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:06:03
  from 'C:\xampp\htdocs\Prestashop\mails\en\order_conf_product_list.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71742b2f9ed5_48312617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34d76b30dcb521d6698470e3e2b99bafea30dc74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\mails\\en\\order_conf_product_list.txt',
      1 => 1534079528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71742b2f9ed5_48312617 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "productPriceBlock", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo htmlspecialchars(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productPriceBlock'))), ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>


	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>


							<?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['customization_quantity'], ENT_QUOTES, 'UTF-8');?>

							<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
