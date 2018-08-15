<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:50
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c82e0d831_54118781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd4b57e04276a685d8fcf3b4ba6dc377e4f40fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5b714c82e0d831_54118781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3390792925b714c82dd09d8_04143115', 'head');
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head'];?>
 <?php }?>
</head>

<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 body-desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10882666295b714c82de2f78_41429193', 'hook_after_body_opening_tag');
?>


<main id="main-page-content" <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>style="opacity: 0;"<?php }?> >
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6039345965b714c82de7b31_35817566', 'product_activation');
?>


    <header id="header" class="desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9610447645b714c82dea252_96097769', 'header');
?>

    </header>

    <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="inner-wrapper" class="container">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTopInContainer"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8499891215b714c82dedf63_85325503', 'notifications');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2208442735b714c82defbe7_18321287', "layout_row_start");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8490335735b714c82df0e45_28212278', "content_wrapper");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10012173815b714c82df5fb0_90453074', "left_column");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18628610435b714c82dfbfb4_02859606', "right_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5143125805b714c82dff2e3_05716336', "layout_row_end");
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottomInContainer"),$_smarty_tpl ) );?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </section>

    <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3282359615b714c82e01bd1_62339846', "footer");
?>

    </footer>

</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4745508785b714c82e037b5_58894890', 'javascript_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6997669045b714c82e05bf2_27147211', 'hook_before_body_closing_tag');
?>


<button id="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>
    <div id="page-preloader" style="">
        <div class="loader-wrapper">
            <div class="loader loader-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'], ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body'];?>
 <?php }?>

</body>

</html>
<?php }
/* {block 'head'} */
class Block_3390792925b714c82dd09d8_04143115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3390792925b714c82dd09d8_04143115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_10882666295b714c82de2f78_41429193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_10882666295b714c82de2f78_41429193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_6039345965b714c82de7b31_35817566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_6039345965b714c82de7b31_35817566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_9610447645b714c82dea252_96097769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9610447645b714c82dea252_96097769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_8499891215b714c82dedf63_85325503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_8499891215b714c82dedf63_85325503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block "layout_row_start"} */
class Block_2208442735b714c82defbe7_18321287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_2208442735b714c82defbe7_18321287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">
            <?php
}
}
/* {/block "layout_row_start"} */
/* {block "content"} */
class Block_4044972055b714c82df3ab7_13409178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <p>Hello world! This is HTML5 Boilerplate.</p>
                        <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_8490335735b714c82df0e45_28212278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_8490335735b714c82df0e45_28212278',
  ),
  'content' => 
  array (
    0 => 'Block_4044972055b714c82df3ab7_13409178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="content-wrapper" class="left-column right-column col-12 col-md-6 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-8<?php }?>">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4044972055b714c82df3ab7_13409178', "content", $this->tplIndex);
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_10012173815b714c82df5fb0_90453074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_10012173815b714c82df5fb0_90453074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?> flex-first">
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 6 && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 7) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayVerticalMenu"),$_smarty_tpl ) );
}?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                        </div>
                <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_18628610435b714c82dfbfb4_02859606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_18628610435b714c82dfbfb4_02859606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="right-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?>">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "right_column"} */
/* {block "layout_row_end"} */
class Block_5143125805b714c82dff2e3_05716336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_5143125805b714c82dff2e3_05716336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                </div>
            <?php
}
}
/* {/block "layout_row_end"} */
/* {block "footer"} */
class Block_3282359615b714c82e01bd1_62339846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3282359615b714c82e01bd1_62339846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_4745508785b714c82e037b5_58894890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_4745508785b714c82e037b5_58894890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_6997669045b714c82e05bf2_27147211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_6997669045b714c82e05bf2_27147211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
