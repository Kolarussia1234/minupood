<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:54
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c86021ab4_92084559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a6665c5edfb25cd375a68ad6e021585976cd5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\_partials\\footer.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/_variants/footer-1.tpl' => 1,
    'file:_partials/_variants/footer-2.tpl' => 1,
    'file:_partials/_variants/footer-3.tpl' => 1,
    'file:_partials/_variants/footer-4.tpl' => 1,
    'file:_partials/_variants/footer-5.tpl' => 1,
  ),
),false)) {
function content_5b714c86021ab4_92084559 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 1) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 2) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 3) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 4) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 5) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
