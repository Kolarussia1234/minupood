<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:58
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\_partials\product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7153569d1634_97702554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9070f589afee3615fbb2cf00dd399ddce95d33a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7153569d1634_97702554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tap to zoom','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?>
                <div class="easyzoom easyzoom-modal">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="js-modal-product-cover-easyzoom">
                        <img class="js-modal-product-cover product-cover-modal img-fluid"
                             width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
"
                             alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
">
                    </a>
                </div>
                <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17614798025b7153569c59e8_86309124', 'product_images');
?>

                </aside>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
/* {block 'product_images'} */
class Block_17614798025b7153569c59e8_86309124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_17614798025b7153569c59e8_86309124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
                        <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>">
                            <div id="modal-product-thumbs" class="product-images js-modal-product-images slick-slider">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                                    <div class="thumb-container">
                                        <img data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb img-fluid"
                                             data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                             width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_images'} */
}
