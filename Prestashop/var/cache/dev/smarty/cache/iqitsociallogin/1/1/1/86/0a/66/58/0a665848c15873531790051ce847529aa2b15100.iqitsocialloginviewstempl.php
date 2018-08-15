<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:55
  from 'module:iqitsocialloginviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c87a84b94_03964103',
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
  'cache_lifetime' => 31536000,
),true)) {
function content_5b714c87a84b94_03964103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?><!-- begin C:\xampp\htdocs\Prestashop/modules/iqitsociallogin/views/templates/hook/authentication.tpl -->


<script type="text/javascript">
    
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
    
</script>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitsociallogin/views/templates/hook/authentication.tpl --><?php }
}
