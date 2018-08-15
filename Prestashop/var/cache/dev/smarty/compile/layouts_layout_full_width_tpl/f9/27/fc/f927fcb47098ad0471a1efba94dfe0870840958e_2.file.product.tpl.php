<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:54
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715352547cf1_51205540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f927fcb47098ad0471a1efba94dfe0870840958e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\product.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/miniatures/product-small.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-h.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-sections.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5b715352547cf1_51205540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14214030925b7153524528f3_91314052', 'head_seo');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11123455525b715352454cc4_69855601', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14183511195b71535245a375_61666113', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1290590995b7153524bf414_53227383', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_14214030925b7153524528f3_91314052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_14214030925b7153524528f3_91314052',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_tags'} */
class Block_11123455525b715352454cc4_69855601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_11123455525b715352454cc4_69855601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_og_tags'} */
/* {block 'head'} */
class Block_14183511195b71535245a375_61666113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14183511195b71535245a375_61666113',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php $_smarty_tpl->_assignInScope('categoryImage', "img/c/".((string)$_smarty_tpl->tpl_vars['product']->value['id_category_default'])."-category_default.jpg");?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['categoryImage']->value)) {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['product']->value['category'],$_smarty_tpl->tpl_vars['product']->value['id_category_default'],'category_default'), ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_10285049355b7153524c2964_82734832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'after_cover_thumbnails'} */
class Block_13358294015b7153524cd221_22673758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_4401174695b7153524c2053_62504281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10285049355b7153524c2964_82734832', 'product_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13358294015b7153524cd221_22673758', 'after_cover_thumbnails', $this->tplIndex);
?>


                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21461760635b7153524c16f4_21116583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <section class="page-content" id="content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4401174695b7153524c2053_62504281', 'page_content', $this->tplIndex);
?>

                    </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_brand_below'} */
class Block_18492219665b7153524d21b0_21456491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <div class="product-manufacturer product-manufacturer-next float-right">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo"/>
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'page_title'} */
class Block_17384517485b7153524d8f88_07328202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_5591340865b7153524d8615_78819135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h1 page-title" itemprop="name"><span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17384517485b7153524d8f88_07328202', 'page_title', $this->tplIndex);
?>
</span></h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'product_brand_below'} */
class Block_15978776565b7153524db4e8_68540846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                            <div class="product-manufacturer mb-3">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo"/>
                                            </a>
                                            </div>
                                        <?php } else { ?>
                                            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                            <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
                                        <?php }?>

                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                        <span>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                                        </span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'product_prices'} */
class Block_8985668315b7153524f2a55_53307117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_prices'} */
/* {block 'page_header_container'} */
class Block_1316567075b7153524d17b4_66888150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product_header_container clearfix">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18492219665b7153524d21b0_21456491', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5591340865b7153524d8615_78819135', 'page_header', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15978776565b7153524db4e8_68540846', 'product_brand_below', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8985668315b7153524f2a55_53307117', 'product_prices', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_5170466405b7153524f4a68_99416145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                             itemprop="description" class="rte-content"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_2448585115b7153524f99f3_04604754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                        <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_5626337445b7153524ff9d1_41914121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductVariants','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_12490072355b715352507cc7_68264738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_11885601175b715352501f86_27497443 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                        <section class="product-pack">
                                            <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12490072355b715352507cc7_68264738', 'product_miniature', $this->tplIndex);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </section>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_add_to_cart'} */
class Block_15391727855b71535250a938_84293785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_discounts'} */
class Block_20802382185b71535250c147_66161739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_additional_info'} */
class Block_10652079515b71535250d942_69449055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_8628370135b71535250f484_30326864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_17653848175b7153524fc243_86322832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_customization_id">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5626337445b7153524ff9d1_41914121', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11885601175b715352501f86_27497443', 'product_pack', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15391727855b71535250a938_84293785', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20802382185b71535250c147_66161739', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10652079515b71535250d942_69449055', 'product_additional_info', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8628370135b71535250f484_30326864', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_19267919555b715352510c02_42631941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_843835055b71535251a836_26824474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'elementor'=>true), 0, true);
?>
                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_sidebar'} */
class Block_2792085575b715352514e66_33348411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                            <section class="product-accessories product-accessories-sidebar block">
                                <p class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></p>
                                <div id="product-accessories-sidebar" class="block-content products products-grid">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_843835055b71535251a836_26824474', 'product_miniature', $this->tplIndex);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </section>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_accessories_sidebar'} */
/* {block 'product_miniature'} */
class Block_4794693145b71535253d515_85272134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_footer'} */
class Block_9715370015b7153525368b1_72510953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories block block-section">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <div class="block-content">
                            <div class="products slick-products-carousel products-grid slick-default-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4794693145b71535253d515_85272134', 'product_miniature', $this->tplIndex);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_footer'} */
/* {block 'product_footer'} */
class Block_16396108805b715352540fc9_53813273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_15066280075b715352543397_89760317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_11489438795b7153525459b7_87820380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8587796835b715352544e41_88586743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11489438795b7153525459b7_87820380', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1290590995b7153524bf414_53227383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1290590995b7153524bf414_53227383',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21461760635b7153524c16f4_21116583',
  ),
  'page_content' => 
  array (
    0 => 'Block_4401174695b7153524c2053_62504281',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_10285049355b7153524c2964_82734832',
  ),
  'after_cover_thumbnails' => 
  array (
    0 => 'Block_13358294015b7153524cd221_22673758',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1316567075b7153524d17b4_66888150',
  ),
  'product_brand_below' => 
  array (
    0 => 'Block_18492219665b7153524d21b0_21456491',
    1 => 'Block_15978776565b7153524db4e8_68540846',
  ),
  'page_header' => 
  array (
    0 => 'Block_5591340865b7153524d8615_78819135',
  ),
  'page_title' => 
  array (
    0 => 'Block_17384517485b7153524d8f88_07328202',
  ),
  'product_prices' => 
  array (
    0 => 'Block_8985668315b7153524f2a55_53307117',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_5170466405b7153524f4a68_99416145',
  ),
  'product_customization' => 
  array (
    0 => 'Block_2448585115b7153524f99f3_04604754',
  ),
  'product_buy' => 
  array (
    0 => 'Block_17653848175b7153524fc243_86322832',
  ),
  'product_variants' => 
  array (
    0 => 'Block_5626337445b7153524ff9d1_41914121',
  ),
  'product_pack' => 
  array (
    0 => 'Block_11885601175b715352501f86_27497443',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_12490072355b715352507cc7_68264738',
    1 => 'Block_843835055b71535251a836_26824474',
    2 => 'Block_4794693145b71535253d515_85272134',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_15391727855b71535250a938_84293785',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_20802382185b71535250c147_66161739',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_10652079515b71535250d942_69449055',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_8628370135b71535250f484_30326864',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_19267919555b715352510c02_42631941',
  ),
  'product_accessories_sidebar' => 
  array (
    0 => 'Block_2792085575b715352514e66_33348411',
  ),
  'product_accessories_footer' => 
  array (
    0 => 'Block_9715370015b7153525368b1_72510953',
  ),
  'product_footer' => 
  array (
    0 => 'Block_16396108805b715352540fc9_53813273',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_15066280075b715352543397_89760317',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8587796835b715352544e41_88586743',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11489438795b7153525459b7_87820380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <div id="product-preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <div id="main-product-wrapper" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="row product-info-row">
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_img_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-image">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21461760635b7153524c16f4_21116583', 'page_content_container', $this->tplIndex);
?>

            </div>

            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_content_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-info">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316567075b7153524d17b4_66888150', 'page_header_container', $this->tplIndex);
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5170466405b7153524f4a68_99416145', 'product_description_short', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2448585115b7153524f99f3_04604754', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17653848175b7153524fc243_86322832', 'product_buy', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19267919555b715352510c02_42631941', 'hook_display_reassurance', $this->tplIndex);
?>


                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar']) {?>
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar'], ENT_QUOTES, 'UTF-8');?>
 sidebar product-sidebar">

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2792085575b715352514e66_33348411', 'product_accessories_sidebar', $this->tplIndex);
?>

                <?php }?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>


            </div>
            <?php }?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'footer') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9715370015b7153525368b1_72510953', 'product_accessories_footer', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16396108805b715352540fc9_53813273', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15066280075b715352543397_89760317', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8587796835b715352544e41_88586743', 'page_footer_container', $this->tplIndex);
?>


    </section>
<?php
}
}
/* {/block 'content'} */
}
