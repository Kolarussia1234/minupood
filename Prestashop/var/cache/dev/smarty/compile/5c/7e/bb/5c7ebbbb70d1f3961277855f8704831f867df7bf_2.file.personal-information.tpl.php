<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:04:55
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\_partials\steps\personal-information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7173e701f0b4_63392370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7ebbbb70d1f3961277855f8704831f867df7bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\_partials\\steps\\personal-information.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7173e701f0b4_63392370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13999130905b7173e6f2ea26_65913693', 'step_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/steps/checkout-step.tpl');
}
/* {block 'display_after_login_form'} */
class Block_2855509625b7173e701da27_63662900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutLoginFormAfter'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'step_content'} */
class Block_13999130905b7173e6f2ea26_65913693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_content' => 
  array (
    0 => 'Block_13999130905b7173e6f2ea26_65913693',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_2855509625b7173e701da27_63662900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] && !$_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>

    <p class="identity">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connected as [1]%firstname% %lastname%[/1].','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['urls']->value['pages']['identity'])."'><u>",'[/1]'=>"</u></a>",'%firstname%'=>$_smarty_tpl->tpl_vars['customer']->value['firstname'],'%lastname%'=>$_smarty_tpl->tpl_vars['customer']->value['lastname'])),$_smarty_tpl ) );?>

    </p>
    <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not you? [1]Log out[/1]','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['urls']->value['actions']['logout'])."'><u>",'[/1]'=>"</u></a>")),$_smarty_tpl ) );?>

    </p>
    <?php if (!isset($_smarty_tpl->tpl_vars['empty_cart_on_logout']->value) || $_smarty_tpl->tpl_vars['empty_cart_on_logout']->value) {?>
      <p><small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you sign out now, your cart will be emptied.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</small></p>
    <?php }?>

  <?php } else { ?>


    <p class="">
      <i class="fa fa-question-circle-o" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      <a data-toggle="collapse" href="#personal-information-step-login" aria-expanded="false" aria-controls="collapseExample">
        <u><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in instead!','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</u> <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
    </p>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2855509625b7173e701da27_63662900', 'display_after_login_form', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value,'guest_allowed'=>$_smarty_tpl->tpl_vars['guest_allowed']->value),$_smarty_tpl ) );?>



  <?php }
}
}
/* {/block 'step_content'} */
}
