<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:55
  from 'module:iqitcookielawviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c87d19e24_03600889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7588a77287e3c02dfc5dfe6fd3a17abf03f7e2e' => 
    array (
      0 => 'module:iqitcookielawviewstemplat',
      1 => 1534151613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c87d19e24_03600889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '21010071095b714c87d15d77_95274949';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcookielaw/views/templates/hook/iqitcookielaw.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7941446765b714c87d17693_16953360', 'iqitcookielaw');
?>

<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcookielaw/views/templates/hook/iqitcookielaw.tpl --><?php }
/* {block 'iqitcookielaw'} */
class Block_7941446765b714c87d17693_16953360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcookielaw' => 
  array (
    0 => 'Block_7941446765b714c87d17693_16953360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="iqitcookielaw" class="p-3">
<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>


<button class="btn btn-primary" id="iqitcookielaw-accept"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept','mod'=>'iqitcookielaw'),$_smarty_tpl ) );?>
</button>
</div>
<?php
}
}
/* {/block 'iqitcookielaw'} */
}
