<?php
/* Smarty version 3.1.32, created on 2018-08-14 10:35:37
  from 'C:\xampp\htdocs\Prestashop\admin908cef2ja\themes\default\template\controllers\login\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7286494ffe01_29982659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87802600bcbd2deb0206481606720255ae975912' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\admin908cef2ja\\themes\\default\\template\\controllers\\login\\content.tpl',
      1 => 1406806856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7286494ffe01_29982659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo '<script'; ?>
 type="text/javascript">
	var one_error = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is one error.'),$_smarty_tpl ) );?>
';
	var more_errors = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are several errors.'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<div id="login-panel">
	<div id="login-header">
		<h1 class="text-center">
			<img id="logo" width="40px" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon-prestashop.svg"/>
			PRESTASHOP
		</h1>
		<hr/>
		<h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</h4>
		<hr/>
		<div id="error" class="hide alert alert-danger">
		<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
			<h4>
				<?php if (isset($_smarty_tpl->tpl_vars['nbErrors']->value) && $_smarty_tpl->tpl_vars['nbErrors']->value > 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors.','sprintf'=>$_smarty_tpl->tpl_vars['nbErrors']->value),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %d error.','sprintf'=>$_smarty_tpl->tpl_vars['nbErrors']->value),$_smarty_tpl ) );?>

				<?php }?>
			</h4>
			<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['warningSslMessage']->value)) {?>
		<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warningSslMessage']->value;?>
</div>
		<?php }?>
	</div>
	<div class="flip-container">
		<div class="flipper">
			<div class="front panel">
				<?php if (!isset($_smarty_tpl->tpl_vars['wrong_folder_name']->value) && !isset($_smarty_tpl->tpl_vars['wrong_install_name']->value)) {?>
				<form action="#" id="login_form" method="post">
					<div class="form-group">
						<label class="control-label" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="icon-envelope"></i></span>
							<input name="email" type="text" id="email" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'html','UTF-8' ));
}?>" autofocus="autofocus" tabindex="1" placeholder="test@example.com" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="passwd">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>

						</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="icon-key"></i></span>
							<input name="passwd" type="password" id="passwd" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['password']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['password']->value,'html','UTF-8' ));
}?>" tabindex="2" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
" />
						</div>
					</div>
					<div class="form-group clearfix">
						<div id="remind-me" class="checkbox pull-left">
							<label for="stay_logged_in">
								<input name="stay_logged_in" type="checkbox" id="stay_logged_in" value="1"	tabindex="3"/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Keep me logged in'),$_smarty_tpl ) );?>

							</label>
						</div>
						<a href="#" class="show-forgot-password pull-right" >
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lost password'),$_smarty_tpl ) );?>

						</a>
					</div>
					<div class="panel-footer">
						<button name="submitLogin" type="submit" tabindex="4" class="btn btn-default btn-lg btn-block ladda-button" data-style="slide-up" data-spinner-color="black" >
							<span class="ladda-label">
								<i class="icon-check text-success"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>

							</span>
						</button>
					</div>
					<input type="hidden" name="redirect" id="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"/>
				</form>
			</div>

			<div class="back panel">
				<form action="#" id="forgot_password_form" method="post">
					<div class="alert alert-info">
						<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?'),$_smarty_tpl ) );?>
</h4>
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to receive your access code by email, please enter the address you provided during the registration process.'),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="form-group">
						<label class="control-label" for="email_forgot">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>

						</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="icon-envelope"></i></span>
							<input type="text" name="email_forgot" id="email_forgot" class="form-control" autofocus="autofocus" tabindex="5" placeholder="test@example.com" />
						</div>
					</div>
					<div class="panel-footer">
						<button type="button" href="#" class="btn btn-default show-login-form" tabindex="7">
							<i class="icon-caret-left"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to login'),$_smarty_tpl ) );?>

						</button>
						<button class="btn btn-default pull-right" name="submitLogin" type="submit" tabindex="6">
							<i class="icon-ok text-success"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>

						</button>
					</div>
				</form>
			</div>
		</div>
		<?php } else { ?>
		<div class="alert alert-danger">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For security reasons, you cannot connect to the back-office until you have:'),$_smarty_tpl ) );?>
</p>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['wrong_install_name']->value) && $_smarty_tpl->tpl_vars['wrong_install_name']->value == true) {?>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'deleted the /install folder'),$_smarty_tpl ) );?>
</li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['wrong_folder_name']->value) && $_smarty_tpl->tpl_vars['wrong_folder_name']->value == true) {?>
					<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'renamed the /admin folder (e.g. %s)','sprintf'=>$_smarty_tpl->tpl_vars['randomNb']->value),$_smarty_tpl ) );?>
</li>
				<?php }?>
			</ul>
			<p>
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adminUrl']->value,'html','UTF-8' ));?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please then access this page by the new URL (e.g. %s)','sprintf'=>$_smarty_tpl->tpl_vars['adminUrl']->value),$_smarty_tpl ) );?>

				</a>
			</p>
		</div>
		<?php }?>
	</div>
	<div id="login-footer">
		<p class="text-center text-muted">
			<a href="http://www.prestashop.com/" onclick="return !window.open(this.href);">
				&copy; PrestaShop&#8482; 2007-<?php echo smarty_modifier_date_format(time(),"%Y");?>
 - All rights reserved
			</a>
		</p>
		<p class="text-center">
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
		</p>
	</div>
</div>
<?php }
}
