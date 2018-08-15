<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:40:25
  from 'C:\xampp\htdocs\Prestashop\admin709ikguab\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71520945fb38_10442050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '989c389d4ce87e7ca577b4e1edae8a006ad40405' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin709ikguab\\themes\\default\\template\\content.tpl',
      1 => 1534079524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71520945fb38_10442050 (Smarty_Internal_Template $_smarty_tpl) {
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
