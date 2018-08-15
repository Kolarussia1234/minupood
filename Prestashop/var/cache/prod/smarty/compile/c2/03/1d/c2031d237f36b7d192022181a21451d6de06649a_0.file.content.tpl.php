<?php
/* Smarty version 3.1.32, created on 2018-08-12 16:37:02
  from 'C:\xampp\htdocs\Prestashop\admin676bo5cej\themes\default\template\controllers\themes_catalog\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7037fea2c708_66215485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2031d237f36b7d192022181a21451d6de06649a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin676bo5cej\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1534079524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7037fea2c708_66215485 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
