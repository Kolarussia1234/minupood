<?php
/* Smarty version 3.1.32, created on 2018-08-14 10:42:02
  from 'C:\xampp\htdocs\Prestashop\modules\gamification\views\templates\admin\gamification\helpers\view\view_bt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7287caa8add0_01181974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a169c06a9f8ce51ca862cee2c730c2ef91147b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\gamification\\views\\templates\\admin\\gamification\\helpers\\view\\view_bt.tpl',
      1 => 1534080631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./filters_bt.tpl' => 1,
  ),
),false)) {
function content_5b7287caa8add0_01181974 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var current_level_percent_tab = <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
;
	var current_level_tab = '<?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
';
	var gamification_level_tab = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Level','mod'=>'gamification','js'=>1),$_smarty_tpl ) );?>
';
	$(document).ready( function () {	
		$('.gamification_badges_img').tooltip();
		$('#gamification_progressbar_tab').progressbar({
			change: function() {
		        if (<?php echo $_smarty_tpl->tpl_vars['current_level_percent']->value;?>
)
		        	$( "#gamification_progress-label_tab" ).html( '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Level','mod'=>'gamification','js'=>1),$_smarty_tpl ) );?>
'+' '+<?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
+' : '+$('#gamification_progressbar_tab').progressbar( "value" ) + "%" );
		        else
		        	$( "#gamification_progress-label_tab" ).html('');
		      },
	 	});
		$('#gamification_progressbar_tab').progressbar("value", <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
 );
	});
	var admintab_gamification = true;

<?php echo '</script'; ?>
>

<div class="panel">
	<div id="intro_gamification">
		<div id="left_intro">
			<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Become an e-commerce expert in leaps and bounds!",'mod'=>'gamification'),$_smarty_tpl ) );?>
</h4><br/>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"With all of the great features and benefits that PrestaShop offers, it's important to keep up!",'mod'=>'gamification'),$_smarty_tpl ) );?>
<br/><br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The main goal of all of the features we offer is to make you succeed in the e-commerce world. In order to accomplish this, we have created a system of badges and points that make it easy to monitor your progress as a merchant. We have broken down the system into three levels, all of which are integral to success in the e-commerce world: (i) Your use of key e-commerce features on your store; (ii) Your sales performance; (iii) Your presence in international markets.",'mod'=>'gamification'),$_smarty_tpl ) );?>
<br/><br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The more progress your store makes, the more badges and points you earn. No need to submit any information or fill out any forms; we know how busy you are, everything is automatic!",'mod'=>'gamification'),$_smarty_tpl ) );?>
<br/><br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Now, with the click of a button, you will be able to see sales-enhancing features that you may be missing out on. Take advantage and check it out below!",'mod'=>'gamification'),$_smarty_tpl ) );?>

			</p>
		</div>
		<div id="right_intro">
			<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Our team is available to help. Contact us today!",'mod'=>'gamification'),$_smarty_tpl ) );?>
</h4><br/>
			<ul>
				<li>
					<img src="../modules/gamification/views/img/mail_icon.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Email",'mod'=>'gamification'),$_smarty_tpl ) );?>
" />
					<a href="http://www.prestashop.com/en/contact-us?utm_source=gamification"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Fill out a contact form",'mod'=>'gamification'),$_smarty_tpl ) );?>
</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="completion_gamification">
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Completion level','mod'=>'gamification'),$_smarty_tpl ) );?>
</h4>
		<div id="gamification_progressbar_tab"></div>
		<span class="gamification_progress-label" id="gamification_progress-label_tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Level",'mod'=>'gamification'),$_smarty_tpl ) );?>
 <?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
 : <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
 %</span>
	</div>
	&nbsp;
</div>
<div class="clear"><br/></div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['badges_type']->value, 'type', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['type']->value) {
?>
<div class="panel">
	<h3><i class="icon-bookmark"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value['name'],'html','UTF-8' ));?>
</h3>
	<div class="row">
		<div class="col-lg-2">
			<?php $_smarty_tpl->_subTemplateRender('file:./filters_bt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['key']->value), 0, true);
?>
		</div>
		<div class="col-lg-10">
			<ul class="badge_list" id="list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value['badges'], 'badge');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->value) {
?>
				<li class="badge_square badge_all <?php if ($_smarty_tpl->tpl_vars['badge']->value->validated) {?>validated <?php } else { ?> not_validated<?php }?> group_<?php echo $_smarty_tpl->tpl_vars['badge']->value->id_group;?>
 level_<?php echo $_smarty_tpl->tpl_vars['badge']->value->group_position;?>
 " id="<?php echo intval($_smarty_tpl->tpl_vars['badge']->value->id);?>
">
					<div class="gamification_badges_img" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['badge']->value->description,'html','UTF-8' ));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value->getBadgeImgUrl();?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['badge']->value->name,'html','UTF-8' ));?>
" /></div>
					<div class="gamification_badges_name"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['badge']->value->name,'html','UTF-8' ));?>
</div>
				</li>
				<?php
}
} else {
?>
				<li>
					<div class="gamification_badges_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"No badge in this section",'mod'=>'gamification'),$_smarty_tpl ) );?>
</div>
				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<p id="no_badge_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="gamification_badges_name" style="display:none;text-align:center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"No badge in this section",'mod'=>'gamification'),$_smarty_tpl ) );?>
</p>
	</div>
</div>
<div class="clear"><br/></div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
