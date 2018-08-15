<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:52
  from 'module:iqitsearchviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c84ad6cd7_28233657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4629dbb3c4efa13c090c633dc2e46e5f2b42bed3' => 
    array (
      0 => 'module:iqitsearchviewstemplatesh',
      1 => 1534151626,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c84ad6cd7_28233657 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/modules/iqitsearch/views/templates/hook/search-bar.tpl -->

<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="controller" value="search">
        <div class="input-group">
            <input type="hidden" name="order" value="product.position.desc" />
            <input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" data-all-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all results','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
                   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
" class="form-control form-search-control" />
            <button type="submit" class="search-btn">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>
<!-- /Block search module TOP -->

<!-- end C:\xampp\htdocs\Prestashop/modules/iqitsearch/views/templates/hook/search-bar.tpl --><?php }
}
