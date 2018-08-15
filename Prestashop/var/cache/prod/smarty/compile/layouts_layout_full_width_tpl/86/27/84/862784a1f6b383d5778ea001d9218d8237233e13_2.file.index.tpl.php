<?php
/* Smarty version 3.1.32, created on 2018-08-12 16:33:13
  from 'C:\xampp\htdocs\Prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b703719d51497_10830611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862784a1f6b383d5778ea001d9218d8237233e13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1534079526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b703719d51497_10830611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8565226435b703719d4f642_69890333', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17937039845b703719d4fae0_29359110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9979547415b703719d50549_68049398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8673958425b703719d50168_12801256 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9979547415b703719d50549_68049398', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8565226435b703719d4f642_69890333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8565226435b703719d4f642_69890333',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17937039845b703719d4fae0_29359110',
  ),
  'page_content' => 
  array (
    0 => 'Block_8673958425b703719d50168_12801256',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9979547415b703719d50549_68049398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17937039845b703719d4fae0_29359110', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8673958425b703719d50168_12801256', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
