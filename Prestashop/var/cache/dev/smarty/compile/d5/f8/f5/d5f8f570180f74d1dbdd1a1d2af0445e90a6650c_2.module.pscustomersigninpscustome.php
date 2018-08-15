<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:52
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c84f33294_84755923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1534151698,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c84f33294_84755923 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_customersignin/ps_customersignin.tpl --><div id="user_info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <a
                class="account"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                rel="nofollow"
        >
            <i class="fa fa-user" aria-hidden="true"></i>
            <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['firstname'],15,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </a> <span class="text-faded"> / </span>
        <a
                class="logout"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
        >
            <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
    <?php } else { ?>
        <a
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                rel="nofollow"
        ><i class="fa fa-user" aria-hidden="true"></i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
    <?php }?>
</div>
<!-- end C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
