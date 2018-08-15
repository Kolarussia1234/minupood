<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:06
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\_partials\active_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e6276de18_54489558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92f2cbc82f80f7af4dee9bbe6df1db0991154b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\active_filters.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715e6276de18_54489558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
    <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="active-search-filters">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9313289315b715e627607a4_35910894', 'active_filters_title');
?>

            <ul class="filter-blocks">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7850978745b715e62763873_79395072', 'active_filters_item');
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value) > 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9069848325b715e6276ae55_23279900', 'facets_clearall_button');
?>

                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>
<?php }
/* {block 'active_filters_title'} */
class Block_9313289315b715e627607a4_35910894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_9313289315b715e627607a4_35910894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <span class="active-filter-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_7850978745b715e62763873_79395072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_7850978745b715e62763873_79395072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="filter-block">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'active_filters_item'} */
/* {block 'facets_clearall_button'} */
class Block_9069848325b715e6276ae55_23279900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_9069848325b715e6276ae55_23279900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="filter-block filter-block-all">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'facets_clearall_button'} */
}
