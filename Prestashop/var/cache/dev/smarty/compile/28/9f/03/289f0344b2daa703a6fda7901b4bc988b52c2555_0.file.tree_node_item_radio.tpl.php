<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:38:03
  from 'C:\xampp\htdocs\Prestashop\admin709ikguab\themes\default\template\helpers\tree\tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715f8b66c6b9_98182085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289f0344b2daa703a6fda7901b4bc988b52c2555' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin709ikguab\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1534079525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715f8b66c6b9_98182085 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
