<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:57
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\_partials\_product_partials\product-tabs-h.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715355be91c5_54354087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e7e44b6277c95695726ea34cab9574be7270b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\_product_partials\\product-tabs-h.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5b715355be91c5_54354087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13591005985b715355b9c649_19053710', 'product_tabs');
?>

<?php }
/* {block 'product_description'} */
class Block_10283954525b715355bb1b40_61028077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product-description">
                        <div class="rte-content"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductElementor'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_10783259195b715355bb7be3_29577678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_14287887915b715355bbb123_75650746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane in" id="attachments">
                        <section class="product-attachments">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                                <div class="attachment">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    <p> <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                        <i class="fa fa-download" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                                        (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                    </a>
                                    <hr />
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </section>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_miniature'} */
class Block_20060490915b715355bd5309_20059295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_tab'} */
class Block_11275018465b715355bd3569_26503486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="products row products-grid">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20060490915b715355bd5309_20059295', 'product_miniature', $this->tplIndex);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                        <?php
}
}
/* {/block 'product_accessories_tab'} */
/* {block 'product_tabs'} */
class Block_13591005985b715355b9c649_19053710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_13591005985b715355b9c649_19053710',
  ),
  'product_description' => 
  array (
    0 => 'Block_10283954525b715355bb1b40_61028077',
  ),
  'product_details' => 
  array (
    0 => 'Block_10783259195b715355bb7be3_29577678',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_14287887915b715355bbb123_75650746',
  ),
  'product_accessories_tab' => 
  array (
    0 => 'Block_11275018465b715355bd3569_26503486',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_20060490915b715355bd5309_20059295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="tabs product-tabs">
        <ul id="product-infos-tabs" class="nav nav-tabs">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                <li class="nav-item">
                    <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab"
                       href="#description">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                    </a>
                </li>
            <?php }?>
            <li class="nav-item">
                <a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab"
                   href="#product-details-tab">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#attachments">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'tab') {?>
                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#accessories-tab">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_desc']) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->description != '') {?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#brand-tab">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php }?>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab"
                       href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <div id="product-infos-tabs-content"  class="tab-content">
            <div class="tab-pane in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10283954525b715355bb1b40_61028077', 'product_description', $this->tplIndex);
?>

            </div>

            <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> in active<?php }?>"
                 id="product-details-tab"
            >

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10783259195b715355bb7be3_29577678', 'product_details', $this->tplIndex);
?>


            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14287887915b715355bbb123_75650746', 'product_attachments', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'tab') {?>
                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <div class="tab-pane in" id="accessories-tab">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11275018465b715355bd3569_26503486', 'product_accessories_tab', $this->tplIndex);
?>

                    </div>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_desc']) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->description != '') {?>
                 <div class="tab-pane in" id="brand-tab">
                        <div class="rte-content">
                            <?php echo $_smarty_tpl->tpl_vars['product_manufacturer']->value->description;?>

                        </div>
                    </div>
            <?php }?>
            <?php }?>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
            <div class="tab-pane  in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
"
                 id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            >
            <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </div>

    <div class="iqit-accordion" id="product-infos-accordion-mobile" role="tablist" aria-multiselectable="true"></div>
<?php
}
}
/* {/block 'product_tabs'} */
}
