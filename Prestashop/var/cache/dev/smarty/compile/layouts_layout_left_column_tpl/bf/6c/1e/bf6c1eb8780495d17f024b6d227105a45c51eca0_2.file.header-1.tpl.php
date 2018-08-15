<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:08
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\_partials\_variants\header-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e64a0c3c5_06078654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf6c1eb8780495d17f024b6d227105a45c51eca0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\_partials\\_variants\\header-1.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-default.tpl' => 1,
  ),
),false)) {
function content_5b715e64a0c3c5_06078654 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-top">
    <div id="desktop-header-container" class="container">
        <div class="row align-items-center">
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_logo_position'] == 'left') {?>
                <div class="col col-auto col-header-left">
                    <div id="desktop_logo">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="logo img-fluid"
                                 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
                                 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        </a>
                    </div>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderLeft'),$_smarty_tpl ) );?>

                </div>
                <div class="col col-header-center">
                    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt']) {?>
                        <div class="header-custom-html">
                            <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt'];?>

                        </div>
                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"iqitsearch"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderCenter'),$_smarty_tpl ) );?>

                </div>
            <?php } else { ?>
                <div class="col col-header-left">
                    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt']) {?>
                        <div class="header-custom-html">
                            <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt'];?>

                        </div>
                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"iqitsearch"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderLeft'),$_smarty_tpl ) );?>

                </div>
                <div class="col col-header-center text-center">
                    <div id="desktop_logo">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="logo img-fluid"
                                 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
                                 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        </a>
                    </div>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderCenter'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
            <div class="col <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_logo_position'] == 'left') {?>col-auto<?php }?> col-header-right text-right">
                <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_shoppingcart",'field'=>"widget_block",'tpl'=>"module:ps_shoppingcart/ps_shoppingcart-default.tpl"),$_smarty_tpl ) );?>

                    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>

                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_customersignin",'field'=>"widget"),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_customersignin"),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderRight'),$_smarty_tpl ) );?>

            </div>
            <div class="col-12">
                <div class="row">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container iqit-megamenu-container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMainMenu'),$_smarty_tpl ) );?>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>


<?php }
}
