<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:50
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c82ad3de0_82530349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a26d77a009ae4c7ffedcd3e345d3e558b097382' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\page.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c82ad3de0_82530349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1491774025b714c82ac0917_52503074', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5707803355b714c82ac1f81_59738567 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
            <h1 class="h1 page-title"><span><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</span></h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10406867055b714c82ac1391_37699475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5707803355b714c82ac1f81_59738567', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14632656475b714c82acdaa7_86256570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4539755845b714c82acf7a8_64030579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7464288645b714c82acca92_64049599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14632656475b714c82acdaa7_86256570', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4539755845b714c82acf7a8_64030579', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16555683105b714c82ad2561_89727956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16451880145b714c82ad1b65_56339030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16555683105b714c82ad2561_89727956', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1491774025b714c82ac0917_52503074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1491774025b714c82ac0917_52503074',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10406867055b714c82ac1391_37699475',
  ),
  'page_title' => 
  array (
    0 => 'Block_5707803355b714c82ac1f81_59738567',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7464288645b714c82acca92_64049599',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14632656475b714c82acdaa7_86256570',
  ),
  'page_content' => 
  array (
    0 => 'Block_4539755845b714c82acf7a8_64030579',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16451880145b714c82ad1b65_56339030',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16555683105b714c82ad2561_89727956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10406867055b714c82ac1391_37699475', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7464288645b714c82acca92_64049599', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16451880145b714c82ad1b65_56339030', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
