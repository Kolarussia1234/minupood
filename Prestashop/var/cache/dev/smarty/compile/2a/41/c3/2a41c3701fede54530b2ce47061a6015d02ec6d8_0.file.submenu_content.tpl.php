<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:56:59
  from 'C:\xampp\htdocs\Prestashop\modules\iqitmegamenu\views\templates\admin\_configure\helpers\form\submenu_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7163fbbd6c56_46149961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a41c3701fede54530b2ce47061a6015d02ec6d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitmegamenu\\views\\templates\\admin\\_configure\\helpers\\form\\submenu_content.tpl',
      1 => 1534151625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./column_content.tpl' => 1,
    'file:./submenu_content.tpl' => 2,
  ),
),false)) {
function content_5b7163fbbd6c56_46149961 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['node']->value['type'] == 1) {?>
	<div data-element-type="1" data-depth="<?php echo $_smarty_tpl->tpl_vars['node']->value['depth'];?>
" data-element-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
" class="row menu_row menu-element <?php if ($_smarty_tpl->tpl_vars['node']->value['depth'] == 0) {?> first_rows<?php }?> menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
		<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type'] == 2) {?>
		<div data-element-type="2" data-depth="<?php echo $_smarty_tpl->tpl_vars['node']->value['depth'];?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['node']->value['width'];?>
" data-contenttype="<?php echo $_smarty_tpl->tpl_vars['node']->value['contentType'];?>
" data-element-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
" class="col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width'];?>
 menu_column menu-element menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
			<?php }?>

			<div class="action-buttons-container">
				<button type="button" class="btn btn-default  add-row-action" ><i class="icon icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Row','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button>
				<button type="button" class="btn btn-default  add-column-action" ><i class="icon icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button>
				<button type="button" class="btn btn-default duplicate-element-action" ><i class="icon icon-files-o"></i> </button>
				<button type="button" class="btn btn-danger remove-element-action" ><i class="icon-trash"></i> </button>
			</div>
			<div class="dragger-handle btn btn-danger"><i class="icon-arrows "></i></a></div>

			<?php if ($_smarty_tpl->tpl_vars['node']->value['type'] == 2) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:./column_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0, false);
?>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children']) && count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
			<?php $_smarty_tpl->_subTemplateRender("file:./submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
<?php }
}
