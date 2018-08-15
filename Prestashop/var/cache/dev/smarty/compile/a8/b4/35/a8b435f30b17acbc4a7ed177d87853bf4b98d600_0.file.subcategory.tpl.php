<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:56:16
  from 'C:\xampp\htdocs\Prestashop\modules\iqitmegamenu\views\templates\admin\_configure\helpers\form\subcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7163d04c5532_32144876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b435f30b17acbc4a7ed177d87853bf4b98d600' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitmegamenu\\views\\templates\\admin\\_configure\\helpers\\form\\subcategory.tpl',
      1 => 1534151625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./subcategory.tpl' => 3,
  ),
),false)) {
function content_5b7163d04c5532_32144876 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['ids']->value) && $_smarty_tpl->tpl_vars['type']->value == 2 && in_array($_smarty_tpl->tpl_vars['category']->value['id'],$_smarty_tpl->tpl_vars['ids']->value)) {?>selected<?php }?> > <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>

		<?php if (isset($_smarty_tpl->tpl_vars['ids']->value) && $_smarty_tpl->tpl_vars['type']->value == 2) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'ids'=>$_smarty_tpl->tpl_vars['ids']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender("file:./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children']), 0, true);
?>
		<?php }?>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
