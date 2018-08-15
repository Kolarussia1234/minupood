<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:09
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\_partials\_variants\mobile-header-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e654b3ea2_50476001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68b42bbd3ba2d76be3fb83b6545eee2f6ff9247' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\_partials\\_variants\\mobile-header-1.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715e654b3ea2_50476001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="mobile-header-sticky">
    <div class="container">
        <div class="mobile-main-bar">
            <div class="row no-gutters align-items-center row-mobile-header">
                <div class="col col-auto col-mobile-btn col-mobile-btn-menu col-mobile-menu-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_type'], ENT_QUOTES, 'UTF-8');?>
">
                    <a class="m-nav-btn" data-toggle="dropdown"><i class="fa fa-bars" aria-hidden="true"></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></a>
                    <div id="_mobile_iqitmegamenu-mobile" ></div>
                </div>
                <div id="mobile-btn-search" class="col col-auto col-mobile-btn col-mobile-btn-search">
                    <a class="m-nav-btn" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a>
                    <div id="search-widget-mobile" class="dropdown-content dropdown-menu dropdown-mobile search-widget">
                        <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['search'], ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" name="controller" value="search">
                            <div class="input-group">
                                <input type="text" name="s" value=""
                                       placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" data-all-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all results','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
" class="form-control form-search-control">
                                <button type="submit" class="search-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-mobile-logo text-center">
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
                <div class="col col-auto col-mobile-btn col-mobile-btn-account">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="m-nav-btn"><i class="fa fa-user" aria-hidden="true"></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderButtonsMobile'),$_smarty_tpl ) );?>

                <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                <div class="col col-auto col-mobile-btn col-mobile-btn-cart ps-shoppingcart <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'] == "floating") {?>dropdown<?php } else { ?>side-cart<?php }?>">
                    <div id="mobile-cart-wrapper">
                    <a id="mobile-cart-toogle"  class="m-nav-btn" data-toggle="dropdown"><i class="fa fa-shopping-bag mobile-bag-icon" aria-hidden="true"><span id="mobile-cart-products-count" class="cart-products-count cart-products-count-btn"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></a>
                    <div id="_mobile_blockcart-content"></div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>


<?php }
}
