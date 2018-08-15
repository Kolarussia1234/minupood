<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:55
  from 'module:iqitsocialloginviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c8788c512_22847624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac977bf4ccfea0c045963b8ad95a68b1921e982' => 
    array (
      0 => 'module:iqitsocialloginviewstempl',
      1 => 1534151629,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c8788c512_22847624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9800554645b714c87867937_05946515';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitsociallogin/views/templates/hook/authentication.tpl --><?php if ($_smarty_tpl->tpl_vars['facebook_status']->value || $_smarty_tpl->tpl_vars['google_status']->value || $_smarty_tpl->tpl_vars['twitter_status']->value || $_smarty_tpl->tpl_vars['instagram_status']->value) {?>
    <div class="iqitsociallogin iqitsociallogin-authentication iqitsociallogin-colors-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_colors']->value, ENT_QUOTES, 'UTF-8');?>
 text-center">
        <?php if ($_smarty_tpl->tpl_vars['facebook_status']->value) {?>
            <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                    onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'facebook','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
                <?php } else { ?>
                    href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'facebook','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
                <?php }?>
               class="btn btn-secondary btn-iqitsociallogin btn-facebook mt-1 mb-1">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Facebook','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

            </a>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['google_status']->value) {?>
            <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                    onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'google','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
                <?php } else { ?>
                    href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'google','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
                <?php }?>
               class="btn btn-secondary btn-iqitsociallogin btn-google mt-1 mb-1">
                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Google+','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

            </a>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['instagram_status']->value) {?>
            <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                    onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'instagram','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
               <?php } else { ?>
                    href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'instagram','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
               <?php }?>
               class="btn btn-secondary btn-iqitsociallogin btn-instagram mt-1 mb-1">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Instagram','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

            </a>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['twitter_status']->value) {?>
            <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                    onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'twitter','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
                <?php } else { ?>
                    href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'twitter','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
                <?php }?>
               class="btn btn-secondary btn-iqitsociallogin btn-twitter mt-1 mb-1">
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Twitter','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

            </a>
        <?php }?>
    </div>
    <hr>
<?php }?>



<?php echo '<script'; ?>
 type="text/javascript">
    
    function iqitSocialPopup(url) {
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
        var left = ((width / 2) - (600 / 2)) + dualScreenLeft;
        var top = ((height / 2) - (600 / 2)) + dualScreenTop;
        var newWindow = window.open(url, '_blank', 'scrollbars=yes,top=' + top + ',left=' + left + ',width=600,height=600');
        if (window.focus) {
            newWindow.focus();
        }
    }
    
<?php echo '</script'; ?>
>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitsociallogin/views/templates/hook/authentication.tpl --><?php }
}
