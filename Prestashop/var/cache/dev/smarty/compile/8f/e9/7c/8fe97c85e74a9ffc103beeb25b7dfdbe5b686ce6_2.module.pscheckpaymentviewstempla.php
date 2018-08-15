<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:06:07
  from 'module:pscheckpaymentviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71742f6a5f96_87884682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe97c85e74a9ffc103beeb25b7dfdbe5b686ce6' => 
    array (
      0 => 'module:pscheckpaymentviewstempla',
      1 => 1534079511,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71742f6a5f96_87884682 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/modules/ps_checkpayment/views/templates/hook/payment_return.tpl -->
<?php if ($_smarty_tpl->tpl_vars['status']->value == 'ok') {?>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>

		<br /><br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your check must include:','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>

		<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment amount.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
 <span class="price"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_to_pay']->value, ENT_QUOTES, 'UTF-8');?>
</strong></span>
		<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payable to the order of','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
 <strong><?php if ($_smarty_tpl->tpl_vars['checkName']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['checkName']->value, ENT_QUOTES, 'UTF-8');
} else { ?>___________<?php }?></strong>
		<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail to','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
 <strong><?php if ($_smarty_tpl->tpl_vars['checkAddress']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['checkAddress']->value, ENT_QUOTES, 'UTF-8');
} else { ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)) {?>
			<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order number #%d.','sprintf'=>array($_smarty_tpl->tpl_vars['id_order']->value),'d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order reference %s.','sprintf'=>array($_smarty_tpl->tpl_vars['reference']->value),'d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>

		<?php }?>
		<br /><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to you with this information.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>

		<br /><br /><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent as soon as we receive your payment.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
</strong>
		<br /><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For any questions or for further information, please contact our','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true),'html' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer service department.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
</a>.
	</p>
<?php } else { ?>
	<p class="warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We have noticed that there is a problem with your order. If you think this is an error, you can contact our','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>

		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true),'html' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer service department.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl ) );?>
</a>.
	</p>
<?php }?>
<!-- end C:\xampp\htdocs\Prestashop/modules/ps_checkpayment/views/templates/hook/payment_return.tpl --><?php }
}
