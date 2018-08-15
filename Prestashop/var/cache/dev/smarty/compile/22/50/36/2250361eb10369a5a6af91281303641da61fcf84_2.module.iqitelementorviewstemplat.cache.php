<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:09:57
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7158f5d9d815_69487555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2250361eb10369a5a6af91281303641da61fcf84' => 
    array (
      0 => 'module:iqitelementorviewstemplat',
      1 => 1534151622,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7158f5d9d815_69487555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17990187055b7158f5d91637_17341811';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitelementor/views/templates/hook/generated_content_cms.tpl -->

<?php if ($_smarty_tpl->tpl_vars['options']->value['elementor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php } else { ?>
    <div class="rte-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<?php }?>

<!-- end C:\xampp\htdocs\Prestashop/modules/iqitelementor/views/templates/hook/generated_content_cms.tpl --><?php }
}
