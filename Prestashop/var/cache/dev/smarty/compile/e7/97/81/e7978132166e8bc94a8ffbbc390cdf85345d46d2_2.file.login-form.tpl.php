<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:54
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c86d1c617_84828291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7978132166e8bc94a8ffbbc390cdf85345d46d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5b714c86d1c617_84828291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11685730715b714c86cfdcd7_90895529', 'login_form');
?>

<?php }
/* {block 'login_form_start'} */
class Block_19646201485b714c86cfe867_36784280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_start'} */
/* {block 'login_form_errors'} */
class Block_12929721675b714c86cff770_65961210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_669948635b714c86d04184_26948553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_8884363455b714c86d0ed37_08219514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_2234837465b714c86d05837_82578813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8884363455b714c86d0ed37_08219514', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_16989422625b714c86d18979_46332040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary form-control-submit" data-link-action="sign-in" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_9769803665b714c86d17f29_82919108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16989422625b714c86d18979_46332040', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form_end'} */
class Block_12730346575b714c86d1ad22_14996274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_end'} */
/* {block 'login_form'} */
class Block_11685730715b714c86cfdcd7_90895529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_11685730715b714c86cfdcd7_90895529',
  ),
  'login_form_start' => 
  array (
    0 => 'Block_19646201485b714c86cfe867_36784280',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_12929721675b714c86cff770_65961210',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_669948635b714c86d04184_26948553',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_2234837465b714c86d05837_82578813',
  ),
  'form_field' => 
  array (
    0 => 'Block_8884363455b714c86d0ed37_08219514',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_9769803665b714c86d17f29_82919108',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_16989422625b714c86d18979_46332040',
  ),
  'login_form_end' => 
  array (
    0 => 'Block_12730346575b714c86d1ad22_14996274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19646201485b714c86cfe867_36784280', 'login_form_start', $this->tplIndex);
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12929721675b714c86cff770_65961210', 'login_form_errors', $this->tplIndex);
?>


    <form <?php if (isset($_smarty_tpl->tpl_vars['idForm']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idForm']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_669948635b714c86d04184_26948553', 'login_form_actionurl', $this->tplIndex);
?>
"  <?php }?>  method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2234837465b714c86d05837_82578813', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9769803665b714c86d17f29_82919108', 'login_form_footer', $this->tplIndex);
?>


  </form>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12730346575b714c86d1ad22_14996274', 'login_form_end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'login_form'} */
}
