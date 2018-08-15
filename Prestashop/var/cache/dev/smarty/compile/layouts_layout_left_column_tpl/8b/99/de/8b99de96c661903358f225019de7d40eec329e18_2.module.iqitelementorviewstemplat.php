<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:38:11
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715f937e1db3_89612288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b99de96c661903358f225019de7d40eec329e18' => 
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
function content_5b715f937e1db3_89612288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitelementor/views/templates/front/preview.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19373060755b715f937e0053_84988722', 'page_content');
?>

<!-- end C:\xampp\htdocs\Prestashop/modules/iqitelementor/views/templates/front/preview.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_19373060755b715f937e0053_84988722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19373060755b715f937e0053_84988722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="elementor" class="elementor"></div>
<?php
}
}
/* {/block 'page_content'} */
}
