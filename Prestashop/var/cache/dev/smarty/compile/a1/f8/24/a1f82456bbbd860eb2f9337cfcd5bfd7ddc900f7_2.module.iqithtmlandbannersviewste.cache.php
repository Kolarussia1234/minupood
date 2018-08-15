<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:57
  from 'module:iqithtmlandbannersviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7153557b1f25_42442899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f82456bbbd860eb2f9337cfcd5bfd7ddc900f7' => 
    array (
      0 => 'module:iqithtmlandbannersviewste',
      1 => 1534151624,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl' => 1,
    'module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl' => 1,
  ),
),false)) {
function content_5b7153557b1f25_42442899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15219551125b7153557aab09_07178581';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqithtmlandbanners/views/templates/hook/iqithtmlandbanners.tpl -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>

  <?php if ($_smarty_tpl->tpl_vars['block']->value['type']) {?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqithtmlandbanners/views/templates/hook/iqithtmlandbanners.tpl --><?php }
}
