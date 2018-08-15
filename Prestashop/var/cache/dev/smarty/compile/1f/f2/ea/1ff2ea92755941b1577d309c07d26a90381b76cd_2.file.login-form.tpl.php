<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:04:55
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7173e717d9a7_65251587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff2ea92755941b1577d309c07d26a90381b76cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\_partials\\login-form.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7173e717d9a7_65251587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17337363985b7173e7177c81_77112549', 'login_form_start');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8697576805b7173e717c791_18592799', 'form_buttons');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1668069025b7173e717d432_46567263', 'login_form_end');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'login_form_start'} */
class Block_17337363985b7173e7177c81_77112549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form_start' => 
  array (
    0 => 'Block_17337363985b7173e7177c81_77112549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="collapse <?php if (count($_smarty_tpl->tpl_vars['errors']->value[''])) {?>show<?php }?>" id="personal-information-step-login">
<?php
}
}
/* {/block 'login_form_start'} */
/* {block 'form_buttons'} */
class Block_8697576805b7173e717c791_18592799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_8697576805b7173e717c791_18592799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary btn-block btn-lg"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_end'} */
class Block_1668069025b7173e717d432_46567263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form_end' => 
  array (
    0 => 'Block_1668069025b7173e717d432_46567263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

</div>
    <?php
}
}
/* {/block 'login_form_end'} */
}
