<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:06
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e62a50657_65093077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18303018c6720027338a1913d6de72558ec5482f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\listing\\category.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-subcategories.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5b715e62a50657_65093077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "justElementor", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'isJustElementor','categoryId'=>$_smarty_tpl->tpl_vars['category']->value['id']),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15763819435b715e62a0f0a3_95583280', 'head');
?>


<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'justElementor')) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18359821025b715e62a190b0_18879773', 'left_column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18475335375b715e62a1a105_72200683', 'right_column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4512504605b715e62a1afa1_76215741', 'content_wrapper_start');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2548584475b715e62a1c0e0_95912479', 'content');
?>


<?php } else { ?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21004346015b715e62a1dd39_83897233', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5812115845b715e62a45dd4_38234473', 'product_list_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17457970895b715e62a49377_02358726', 'product_list_bottom_static');
?>

    <?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'head'} */
class Block_15763819435b715e62a0f0a3_95583280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15763819435b715e62a0f0a3_95583280',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'] != '') {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }
}
}
/* {/block 'head'} */
/* {block 'left_column'} */
class Block_18359821025b715e62a190b0_18879773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_18359821025b715e62a190b0_18879773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_18475335375b715e62a1a105_72200683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_18475335375b715e62a1a105_72200683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_wrapper_start'} */
class Block_4512504605b715e62a1afa1_76215741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper_start' => 
  array (
    0 => 'Block_4512504605b715e62a1afa1_76215741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="content-wrapper" class="col-12">  <?php
}
}
/* {/block 'content_wrapper_start'} */
/* {block 'content'} */
class Block_2548584475b715e62a1c0e0_95912479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2548584475b715e62a1c0e0_95912479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'content'} */
/* {block 'product_list_header'} */
class Block_21004346015b715e62a1dd39_83897233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_21004346015b715e62a1dd39_83897233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="h1 page-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></h1>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_image'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) {?>
            <div class="category-image <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                        <div class="category-description category-description-image"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                    <?php }?>
                <?php }?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                     class="img-fluid" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['height'], ENT_QUOTES, 'UTF-8');?>
" >
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'above') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_sub_thumbs'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_bottom'} */
class Block_5812115845b715e62a45dd4_38234473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom' => 
  array (
    0 => 'Block_5812115845b715e62a45dd4_38234473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_17457970895b715e62a49377_02358726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom_static' => 
  array (
    0 => 'Block_17457970895b715e62a49377_02358726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'below') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-bottom <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><hr /><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }
}
}
/* {/block 'product_list_bottom_static'} */
}
