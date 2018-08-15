<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:05:41
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\_partials\address-selector-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7174156d7552_80226111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1afdfad32db0f76a94be4cb7716091dfc42f204e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\_partials\\address-selector-block.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7174156d7552_80226111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6782224755b7174156bf365_11666047', 'address_selector_blocks');
?>

<?php }
/* {block 'address_selector_blocks'} */
class Block_6782224755b7174156bf365_11666047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_selector_blocks' => 
  array (
    0 => 'Block_6782224755b7174156bf365_11666047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
    <article
      class="address-item<?php if ($_smarty_tpl->tpl_vars['address']->value['id'] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected<?php }?>"
      id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value )), ENT_QUOTES, 'UTF-8');?>
-address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
    >
      <header>
        <label class="radio-block">
          <span class="custom-radio">
            <input
              type="radio"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['address']->value['id'] == $_smarty_tpl->tpl_vars['selected']->value) {?>checked<?php }?>
            >
            <span></span>
          </span>
          <span class="address-alias"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</span>
        </label>
      </header>
      <hr>
          <div class="address"><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</div>
      <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
      <hr>
      <footer class="address-footer">

          <a
            class="edit-address text-muted"
            data-link-action="edit-address"
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'editAddress'=>$_smarty_tpl->tpl_vars['type']->value,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
"
          >
            <i class="fa fa-pencil" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
          <a
            class="delete-address text-muted"
            data-link-action="delete-address"
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'deleteAddress'=>true,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
"
          >
            <i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>

      </footer>
      <?php }?>
    </article>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
    <p>
      <button class="ps-hidden-by-js form-control-submit center-block" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </p>
  <?php }
}
}
/* {/block 'address_selector_blocks'} */
}
