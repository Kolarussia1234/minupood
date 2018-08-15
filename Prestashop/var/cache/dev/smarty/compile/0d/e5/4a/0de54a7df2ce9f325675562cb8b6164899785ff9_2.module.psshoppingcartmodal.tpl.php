<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:04:48
  from 'module:psshoppingcartmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7173e03d0f15_63650095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de54a7df2ce9f325675562cb8b6164899785ff9' => 
    array (
      0 => 'module:psshoppingcartmodal.tpl',
      1 => 1534151698,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7173e03d0f15_63650095 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_shoppingcart/modal.tpl --><div id="blockcart-modal-wrap">
<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <div class="modal-header">
                <span class="modal-title"><i class="fa fa-check rtl-no-flip"
                                             aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product successfully added to your shopping cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 divide-right mb-1">
                        <div class="row no-gutters align-items-center">
                            <div class="col-6 text-center">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                                              alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
"
                                                              class="img-fluid"></a>
                            </div>
                            <div class="col col-info">
                                <div class="pb-1">
                                    <span class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes']) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
                                    <div class="product-attributes text-muted pb-1">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                            <div class="product-line-info">
                                                <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                                                <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>
                                <span class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 x</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="cart-content pt-3">
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 1) {?>
                                <p class="cart-products-count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %products_count% items in your cart.','sprintf'=>array('%products_count%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p>
                            <?php } else { ?>
                                <p class="cart-products-count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %product_count% item in your cart.','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p>
                            <?php }?>
                            <p>
                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>

                            </p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartAjaxInfo'),$_smarty_tpl ) );?>

                            <div class="cart-content-btn">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   class="btn btn-primary btn-block btn-lg mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                                <button type="button" class="btn btn-secondary btn-block"
                                        data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayModalCartCrosseling','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>



            </div>
            <?php } else { ?>
                <div class="modal-header">
                <span class="modal-title"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are not enough products in stock','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-content">
                                <div class="cart-content-btn">
                                    <button type="button" class="btn btn-secondary btn-block"
                                            data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div id="blockcart-notification" class="ns-box <?php if (!$_smarty_tpl->tpl_vars['product']->value) {?>ns-box-danger<?php }?> ns-effect-thumbslider">
    <div class="ns-box-inner row align-items-center no-gutters">
        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
        <div class="ns-thumb col-3">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                 alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
"
                 class="img-fluid"></div>
        <div class="ns-content col-9">
            <span class="ns-title"><i class="fa fa-check" aria-hidden="true"></i> <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'is added to your shopping cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        </div>
        <div class="ns-delivery col-12 mt-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartAjaxInfo'),$_smarty_tpl ) );?>
</div>
        <?php } else { ?>
            <div class="ns-content col-12">
                <span class="ns-title"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are not enough products in stock','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
            </div>
        <?php }?>

    </div>
</div>

</div><!-- end C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_shoppingcart/modal.tpl --><?php }
}
