<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:38:03
  from 'C:\xampp\htdocs\Prestashop\admin709ikguab\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715f8b3cea53_13431209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2deeff8daec389524e183c79d0a9a1fe9cd21f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin709ikguab\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1534079525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715f8b3cea53_13431209 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
