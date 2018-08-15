<?php
/* Smarty version 3.1.32, created on 2018-08-14 10:35:38
  from 'C:\xampp\htdocs\Prestashop\admin908cef2ja\themes\default\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b72864a466162_74186795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '707539baee7787046335eb7839d9d6a2671f9572' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin908cef2ja\\themes\\default\\template\\footer.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_5b72864a466162_74186795 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap hide">

	<div class="col-sm-2 hidden-xs">
		<a href="http://www.prestashop.com/" target="_blank">PrestaShop&trade; <?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load time: '),$_smarty_tpl ) );?>
"></i> <?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
	</div>

	<div class="col-sm-2 hidden-xs">
		<div class="social-networks">
			<a class="link-social link-twitter" href="https://twitter.com/PrestaShop" target="_blank" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook" href="https://www.facebook.com/prestashop" target="_blank" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github" href="https://www.prestashop.com/github" target="_blank" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-google" href="https://plus.google.com/+prestashop/" target="_blank" title="Google">
				<i class="icon-google-plus"></i>
			</a>
		</div>
	</div>	

	<div class="col-sm-5">
		<div class="footer-contact">
			<a href="http://www.prestashop.com/en/contact_us?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-envelope"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="http://forge.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-bug"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bug Tracker'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/forums/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-comments"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forum'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="http://addons.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-puzzle-piece"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/en/training-prestashop?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-book"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Training'),$_smarty_tpl ) );?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value) {?>
			<p>Questions • Renseignements • Formations : 
				<strong>+33 (0)1.40.18.30.04</strong>
			</p>
			<?php }?>
		</div>
	</div>

	<div class="col-sm-3">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['modals']->value)) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }
}
