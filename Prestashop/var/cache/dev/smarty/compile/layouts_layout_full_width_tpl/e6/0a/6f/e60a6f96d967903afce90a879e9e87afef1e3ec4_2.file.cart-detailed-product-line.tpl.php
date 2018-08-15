<?php
/* Smarty version 3.1.32, created on 2018-08-13 15:04:51
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\checkout\_partials\cart-detailed-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7173e338cc76_09614758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e60a6f96d967903afce90a879e9e87afef1e3ec4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\checkout\\_partials\\cart-detailed-product-line.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7173e338cc76_09614758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-line-grid row align-items-center small-gutters">


    <!--  product left body: description -->
    <div class="product-line-grid-body col-12 col-sm-6 col-md-6">
        <div class="row align-items-center small-gutters">
            <div class="col product-image">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
"
                         class="img-fluid">
                </a>
            </div>
            <div class="col col-9">
                <div class="product-line-info">
                    <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                       data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <div class="product-line-info product-line-info-secondary text-muted">
                        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11519283175b7173e33737a0_16232395', 'cart_detailed_product_line_customization');
?>

                <?php }?>
            </div>
        </div>
    </div>

    <!--  product left body: description -->
    <div class="col-12 col-sm-6 col-md-6 product-line-grid-right product-line-actions">
        <div class="row align-items-center small-gutters justify-content-end">
            <!--  product unit-->
            <div class="col col-auto col-md unit-price">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <span class="product-discount">
                        <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                                <span class="discount discount-percentage mr-1">
                                 -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                            <?php } else { ?>
                            <span class="discount discount-amount mr-1">
                                 -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>

                            </span>
                        <?php }?>
                    </span>
                <?php }?>
                <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                    <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            </div>

            <div class="col col-auto col-md qty">
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                    <span class="gift-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } else { ?>
                    <input
                            class="js-cart-line-product-quantity"
                            data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                            type="text"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                            name="product-quantity-spin"
                            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                            step="1"
                    />
                <?php }?>
            </div>
            <div class="col col-auto col-md price">
            <span class="product-price">
              <strong>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                    <span class="gift"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </strong>
            </span>
            </div>

            <div class="col col-auto">
                <div class="cart-line-product-actions">
                    <a
                            class="remove-from-cart"
                            rel="nofollow"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-link-action="delete-from-cart"
                            data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                            data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                            data-id-customization="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php if (!isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <?php }?>
                    </a>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3648645075b7173e338bc19_22851077', 'hook_cart_extra_product_actions');
?>


                </div>
            </div>
        </div>
    </div>

</div>
<?php }
/* {block 'cart_detailed_product_line_customization'} */
class Block_11519283175b7173e33737a0_16232395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product_line_customization' => 
  array (
    0 => 'Block_11519283175b7173e33737a0_16232395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                            <a href="#" data-toggle="modal"
                               data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                               class="product-line-info-secondary text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <div class="modal fade customization-modal"
                                 id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1"
                                 role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                                <div class="product-customization-line row">
                                                    <div class="col-sm-3 col-xs-4 label">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                    </div>
                                                    <div class="col-sm-9 col-xs-8 value">
                                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                                            <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                                            <?php } else { ?>
                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                                            <?php }?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><img
                                                                        class="img-fluid"
                                                                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"></a>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'cart_detailed_product_line_customization'} */
/* {block 'hook_cart_extra_product_actions'} */
class Block_3648645075b7173e338bc19_22851077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_cart_extra_product_actions' => 
  array (
    0 => 'Block_3648645075b7173e338bc19_22851077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hook_cart_extra_product_actions'} */
}
