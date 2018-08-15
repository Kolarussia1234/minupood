<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:55
  from 'module:iqitcompareviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c87b1ab06_99148096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a200912ea9e133f46cf39b7eadc37ea7dd3d2f' => 
    array (
      0 => 'module:iqitcompareviewstemplates',
      1 => 1534151613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c87b1ab06_99148096 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/display-modal.tpl -->
<div id="iqitcompare-notification" class="ns-box ns-effect-thumbslider ns-text-only">
    <div class="ns-box-inner">
        <div class="ns-content">
            <span class="ns-title"><i class="fa fa-check" aria-hidden="true"></i> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to compare.','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
</strong></span>
        </div>
    </div>
</div><!-- end C:\xampp\htdocs\Prestashop/modules/iqitcompare/views/templates/hook/display-modal.tpl --><?php }
}
