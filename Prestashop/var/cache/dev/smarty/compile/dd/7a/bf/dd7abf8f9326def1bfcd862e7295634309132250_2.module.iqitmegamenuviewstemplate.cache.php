<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:58:49
  from 'module:iqitmegamenuviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b716469065449_67019867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7abf8f9326def1bfcd862e7295634309132250' => 
    array (
      0 => 'module:iqitmegamenuviewstemplate',
      1 => 1534151625,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b716469065449_67019867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18765363505b716468ee07e5_21353642';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitmegamenu/views/templates/hook/_partials/products_grid.tpl -->
<div class="cbp-products-big row ">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'homeFeaturedProducts', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="product-grid-menu col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['perline']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="product-container">
                <div class="product-image-container">
                    <ul class="product-flags">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        <img class="img-fluid"
                             src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                             alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                            <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                    </a>
                </div>
                <h6 class="product-title">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
                </h6>
                <div class="product-price-and-shipping" >
                    <span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                        <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitmegamenu/views/templates/hook/_partials/products_grid.tpl --><?php }
}
