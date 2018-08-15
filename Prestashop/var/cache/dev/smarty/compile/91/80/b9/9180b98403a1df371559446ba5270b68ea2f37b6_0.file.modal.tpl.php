<?php
/* Smarty version 3.1.32, created on 2018-08-14 10:35:38
  from 'C:\xampp\htdocs\Prestashop\admin908cef2ja\themes\default\template\helpers\modules_list\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b72864a1b9048_66569682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9180b98403a1df371559446ba5270b68ea2f37b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin908cef2ja\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b72864a1b9048_66569682 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }
}
