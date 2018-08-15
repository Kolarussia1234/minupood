<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:25
  from 'C:\xampp\htdocs\Prestashop\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c699016b8_38030604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f860c8fc71b1d3a3c14186b7576b501c7073e34c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1534079524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c699016b8_38030604 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
