<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:05:19
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7173ff67d251_35585596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659d57849e3ca811b71a56752405b05fd9d895aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\_partials\\address-form.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7173ff67d251_35585596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_548733715b7173ff671636_69108535', 'form_field');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10796213155b7173ff676732_48200087', "address_form_url");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19033472725b7173ff678680_82540055', 'form_fields');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6049575595b7173ff67a1d8_43851023', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/address-form.tpl');
}
/* {block 'form_field'} */
class Block_548733715b7173ff671636_69108535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_548733715b7173ff671636_69108535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "alias") {?>
      <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block 'form_field'} */
/* {block "address_form_url"} */
class Block_10796213155b7173ff676732_48200087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form_url' => 
  array (
    0 => 'Block_10796213155b7173ff676732_48200087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form
        method="POST"
        action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
        data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
>
  <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_fields'} */
class Block_19033472725b7173ff678680_82540055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_19033472725b7173ff678680_82540055',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value === "delivery") {?>
    <div class="form-group row">
      <div class="col-md-9 col-md-offset-3">
        <span class="custom-checkbox">
            <input name="use_same_address" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
            <span><i class="fa fa-check checkbox-checked" aria-hidden="true"></i></span>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
        </span>
      </div>
    </div>
  <?php }
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_6049575595b7173ff67a1d8_43851023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_6049575595b7173ff67a1d8_43851023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn btn-primary pull-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    <a class="js-cancel-address cancel-address pull-xs-right" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="continue btn btn-primary btn-block btn-lg" name="confirm-addresses" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <a class="js-cancel-address cancel-address pull-xs-right" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </form>
  <?php }
}
}
/* {/block 'form_buttons'} */
}
