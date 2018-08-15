<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:55
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\_partials\_product_partials\product-cover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71535360c901_55059765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '828e88132ec186573be845b77ba05eaa81afe6c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\_product_partials\\product-cover.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71535360c901_55059765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2262184405b7153535e4d12_93670829', 'product_cover');
?>

<?php }
/* {block 'product_flags'} */
class Block_19757046035b7153535e6046_13690144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_2262184405b7153535e4d12_93670829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_2262184405b7153535e4d12_93670829',
  ),
  'product_flags' => 
  array (
    0 => 'Block_19757046035b7153535e6046_13690144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19757046035b7153535e6046_13690144', 'product_flags', $this->tplIndex);
?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?><a class="expander" data-toggle="modal" data-target="#product-modal"><span><i class="fa fa-expand" aria-hidden="true"></i></span></a><?php }?>
        <div id="product-images-large" class="product-images-large slick-slider">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'covers', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['index'];
?>
                    <div>
                        <div class="easyzoom easyzoom-product">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="js-easyzoom-trigger"></a>
                        </div>
                        <img
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first'] : null)) {?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                itemprop="image"
                                content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                                class="img-fluid"
                        >
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         itemprop="image"
                         content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                         height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                         class="img-fluid"
                    >
                </div>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'product_cover'} */
}
