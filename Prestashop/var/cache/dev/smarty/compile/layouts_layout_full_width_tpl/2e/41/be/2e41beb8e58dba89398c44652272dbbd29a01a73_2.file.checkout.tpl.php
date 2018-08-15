<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:04:54
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7173e6d4a7e8_27270458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e41beb8e58dba89398c44652272dbbd29a01a73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\checkout.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_5b7173e6d4a7e8_27270458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12932372345b7173e6d40186_13162430', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'cart_summary'} */
class Block_6874253785b7173e6d42d44_77498818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_20652383165b7173e6d45b24_46151812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_12932372345b7173e6d40186_13162430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12932372345b7173e6d40186_13162430',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_6874253785b7173e6d42d44_77498818',
    1 => 'Block_20652383165b7173e6d45b24_46151812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <h1 class="h1 page-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></h1>
    <div class="row">
      <div class="col-md-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6874253785b7173e6d42d44_77498818', 'cart_summary', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 cart-grid-right">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20652383165b7173e6d45b24_46151812', 'cart_summary', $this->tplIndex);
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
