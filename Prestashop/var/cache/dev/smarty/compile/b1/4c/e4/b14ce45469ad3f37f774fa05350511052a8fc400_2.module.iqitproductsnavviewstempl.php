<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:55
  from 'module:iqitproductsnavviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7153533c96f0_59463903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14ce45469ad3f37f774fa05350511052a8fc400' => 
    array (
      0 => 'module:iqitproductsnavviewstempl',
      1 => 1534151626,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7153533c96f0_59463903 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/modules/iqitproductsnav/views/templates/hook/iqitproductsnav.tpl -->
<div id="iqitproductsnav">
    <?php if (isset($_smarty_tpl->tpl_vars['previous']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previous']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous product','mod'=>'iqitproductsnav'),$_smarty_tpl ) );?>
">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['next']->value)) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next product','mod'=>'iqitproductsnav'),$_smarty_tpl ) );?>
">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    <?php }?>
</div>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitproductsnav/views/templates/hook/iqitproductsnav.tpl --><?php }
}
