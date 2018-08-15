<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:06:07
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71742f7db173_74272366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c1c26d62900bd722bd6511156666d3d9801c65e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\order-confirmation.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table-simple.tpl' => 1,
  ),
),false)) {
function content_5b71742f7db173_74272366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8513575685b71742f7bddf1_91285812', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'hook_order_confirmation'} */
class Block_9315779505b71742f7c4c88_57875191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

          <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'hook_payment_return'} */
class Block_1036240785b71742f7c5915_96719234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
              <section id="content-hook_payment_return" class="definition-list">
                  <div class="row">
                    <div class="col-md-12">
                      <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

                    </div>
                  </div>
              </section>
            <?php }?>
          <?php
}
}
/* {/block 'hook_payment_return'} */
/* {block 'hook_order_confirmation_1'} */
class Block_5624297875b71742f7c7242_63956104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_order_confirmation_1'} */
/* {block 'order_details'} */
class Block_15557118925b71742f7caae0_07940724 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="order-details">
              <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
              <ul>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
                <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
                  <li>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>

                    <em class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
                  </li>
                <?php }?>
              </ul>
            </div>
          <?php
}
}
/* {/block 'order_details'} */
/* {block 'order_confirmation_table'} */
class Block_4325199585b71742f7d2b99_83762913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table-simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
          <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'customer_registration_form'} */
class Block_16678799755b71742f7d7ef3_99606287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
            <div id="registration-form" class="card">
                <div class="card-block">
                    <h4 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

                </div>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'customer_registration_form'} */
/* {block 'hook_order_confirmation_2'} */
class Block_14629571245b71742f7da1d8_98536012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook-order-confirmation-footer">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

    </section>
  <?php
}
}
/* {/block 'hook_order_confirmation_2'} */
/* {block 'content'} */
class Block_8513575685b71742f7bddf1_91285812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8513575685b71742f7bddf1_91285812',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_9315779505b71742f7c4c88_57875191',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_1036240785b71742f7c5915_96719234',
  ),
  'hook_order_confirmation_1' => 
  array (
    0 => 'Block_5624297875b71742f7c7242_63956104',
  ),
  'order_details' => 
  array (
    0 => 'Block_15557118925b71742f7caae0_07940724',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_4325199585b71742f7d2b99_83762913',
  ),
  'customer_registration_form' => 
  array (
    0 => 'Block_16678799755b71742f7d7ef3_99606287',
  ),
  'hook_order_confirmation_2' => 
  array (
    0 => 'Block_14629571245b71742f7da1d8_98536012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="content-hook_order_confirmation">
      <div class="row">
        <div class="col-sm-12 col-md-7 order-confirmation-title-payment">
          <h1 class="h1 page-title">
            <span><i class="fa fa-check rtl-no-flip" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
          </h1>

          <div class="mail-sent-info">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['customer']->value['email'])),$_smarty_tpl ) );?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

            <?php }?>
          </div>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9315779505b71742f7c4c88_57875191', 'hook_order_confirmation', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1036240785b71742f7c5915_96719234', 'hook_payment_return', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5624297875b71742f7c7242_63956104', 'hook_order_confirmation_1', $this->tplIndex);
?>



        </div>
        <div class="col-sm-12 col-md-5 order-confirmation-details">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15557118925b71742f7caae0_07940724', 'order_details', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4325199585b71742f7d2b99_83762913', 'order_confirmation_table', $this->tplIndex);
?>



        </div>
      </div>
  </section>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16678799755b71742f7d7ef3_99606287', 'customer_registration_form', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14629571245b71742f7da1d8_98536012', 'hook_order_confirmation_2', $this->tplIndex);
?>


<?php
}
}
/* {/block 'content'} */
}
