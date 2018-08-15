<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:40:19
  from 'C:\xampp\htdocs\Prestashop\modules\iqitdashboardnews\views\templates\hook\dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7152035b2ad7_68704277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759d96808612395ba458aa6448af380c810bd493' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitdashboardnews\\views\\templates\\hook\\dashboard_zone_one.tpl',
      1 => 1534151613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7152035b2ad7_68704277 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="dashiqitnews" class="panel widget">
	<div class="panel-heading">
		 <img src="../modules/iqitdashboardnews/views/img/logo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IQIT-COMMERCE updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>
" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>

	</div>
	<section id="iqit_iframe">
		<iframe width="100%" height="180px"
				src="//iqit-commerce.com/iframe/lastnews/news17.php?product=warehouse&version=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_version']->value,'html','UTF-8' ));?>
"
				style="border: none; overflow: hidden;"></iframe>
	</section>
</section>
<?php }
}
