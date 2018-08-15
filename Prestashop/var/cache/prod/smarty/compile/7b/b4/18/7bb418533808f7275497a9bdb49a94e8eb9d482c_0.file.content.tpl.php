<?php
/* Smarty version 3.1.32, created on 2018-08-13 11:04:48
  from 'C:\xampp\htdocs\Prestashop\admin5250vhshs\themes\default\template\controllers\localization\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b713ba01527b9_26448272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb418533808f7275497a9bdb49a94e8eb9d482c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin5250vhshs\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1534079524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b713ba01527b9_26448272 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl ) );?>
");
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
