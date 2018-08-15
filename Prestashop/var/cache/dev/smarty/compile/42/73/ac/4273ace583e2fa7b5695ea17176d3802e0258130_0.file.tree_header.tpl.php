<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:38:03
  from 'C:\xampp\htdocs\Prestashop\admin709ikguab\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715f8b5aa637_61100291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4273ace583e2fa7b5695ea17176d3802e0258130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin709ikguab\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1534079525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715f8b5aa637_61100291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
