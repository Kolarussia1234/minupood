<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:49
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\_partials\miniatures\_partials\product-miniature-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c814e5457_46836523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9bb6f97d4ad5a713ce5c7913001de6176b8595' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\miniatures\\_partials\\product-miniature-1.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-btn.tpl' => 1,
  ),
),false)) {
function content_5b714c814e5457_46836523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3516639755b714c814b3fd6_28005071', 'product_thumbnail');
?>


<div class="product-description">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_762043465b714c814b5904_31396894', 'product_category_name');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7739581295b714c814b7b09_84869306', 'product_name');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4454291645b714c814b9eb3_70279541', 'product_brand');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2175413295b714c814bdf72_99105141', 'product_reference');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9201518555b714c814c1093_28043456', 'product_reviews');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11613994425b714c814c8189_61508758', 'product_price_and_shipping');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1625246105b714c814d58b1_63917842', 'product_variants');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18979969435b714c814d9eb4_30026517', 'product_description_short');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19616671475b714c814e1f96_57778749', 'product_add_cart');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17441338035b714c814e39c7_53730530', 'product_add_cart_below');
?>


</div>
<?php }
/* {block 'product_thumbnail'} */
class Block_3516639755b714c814b3fd6_28005071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_3516639755b714c814b3fd6_28005071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_category_name'} */
class Block_762043465b714c814b5904_31396894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_category_name' => 
  array (
    0 => 'Block_762043465b714c814b5904_31396894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['category_name'] != '') {?>
            <div class="product-category-name text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php
}
}
/* {/block 'product_category_name'} */
/* {block 'product_name'} */
class Block_7739581295b714c814b7b09_84869306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_7739581295b714c814b7b09_84869306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h3 class="h3 product-title" itemprop="name">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],70,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
        </h3>
    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_brand'} */
class Block_4454291645b714c814b9eb3_70279541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_brand' => 
  array (
    0 => 'Block_4454291645b714c814b9eb3_70279541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']) && $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'] != '') {?>
            <div class="product-brand text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php
}
}
/* {/block 'product_brand'} */
/* {block 'product_reference'} */
class Block_2175413295b714c814bdf72_99105141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_2175413295b714c814bdf72_99105141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] != '') {?>
            <div class="product-reference text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_reviews'} */
class Block_9201518555b714c814c1093_28043456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_9201518555b714c814c1093_28043456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_11613994425b714c814c8189_61508758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_11613994425b714c814c8189_61508758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping"
                 itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer">
                <?php if (isset($_smarty_tpl->tpl_vars['currency']->value['iso_code'])) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                <span itemprop="price" class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                    <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCountDown'),$_smarty_tpl ) );?>

                <?php }?>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_1625246105b714c814d58b1_63917842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_1625246105b714c814d58b1_63917842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
            <div class="products-variants">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                <?php }?>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_description_short'} */
class Block_18979969435b714c814d9eb4_30026517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_18979969435b714c814d9eb4_30026517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product-description-short text-muted">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' )), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_add_cart'} */
class Block_19616671475b714c814e1f96_57778749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_add_cart' => 
  array (
    0 => 'Block_19616671475b714c814e1f96_57778749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_add_cart'} */
/* {block 'product_add_cart_below'} */
class Block_17441338035b714c814e39c7_53730530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_add_cart_below' => 
  array (
    0 => 'Block_17441338035b714c814e39c7_53730530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListBelowButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_add_cart_below'} */
}
