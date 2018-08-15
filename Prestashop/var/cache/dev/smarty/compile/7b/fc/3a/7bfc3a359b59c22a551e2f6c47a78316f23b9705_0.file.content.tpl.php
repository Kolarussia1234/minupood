<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:16:39
  from 'C:\xampp\htdocs\Prestashop\admin709ikguab\themes\default\template\controllers\themes_catalog\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715a87645620_80436735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bfc3a359b59c22a551e2f6c47a78316f23b9705' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin709ikguab\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1534079524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715a87645620_80436735 (Smarty_Internal_Template $_smarty_tpl) {
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
