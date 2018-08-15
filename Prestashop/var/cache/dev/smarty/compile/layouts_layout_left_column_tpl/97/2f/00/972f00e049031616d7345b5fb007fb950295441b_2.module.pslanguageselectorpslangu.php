<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:08
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e641d7cc8_13332041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972f00e049031616d7345b5fb007fb950295441b' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1534151698,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715e641d7cc8_13332041 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_languageselector/ps_languageselector-hreflang.tpl -->



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
    <link rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- end C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_languageselector/ps_languageselector-hreflang.tpl --><?php }
}
