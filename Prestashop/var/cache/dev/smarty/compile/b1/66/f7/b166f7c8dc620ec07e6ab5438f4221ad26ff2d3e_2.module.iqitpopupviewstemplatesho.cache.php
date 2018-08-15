<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:55
  from 'module:iqitpopupviewstemplatesho' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c87ba82a1_74866578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b166f7c8dc620ec07e6ab5438f4221ad26ff2d3e' => 
    array (
      0 => 'module:iqitpopupviewstemplatesho',
      1 => 1534151625,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c87ba82a1_74866578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7738760775b714c87b9f840_86884225';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitpopup/views/templates/hook/iqitpopup.tpl -->
<div id="iqitpopup">
    <div class="iqitpopup-close">
        <div class="iqit-close-checkbox">
<span class="custom-checkbox">
    <input type="checkbox" name="iqitpopup-checkbox" id="iqitpopup-checkbox"/>
    <span><i class="fa fa-check checkbox-checked"></i></span>
	<label for="iqitpopup-checkbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show again.','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
</label>
</span>

        </div>
        <div class="iqit-close-popup"><span class="cross" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close window','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
"></span></div>
    </div>


    <div class="iqitpopup-content"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['newsletter']->value) {?>
        <div class="iqitpopup-newsletter-form">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl ) );?>
" method="post" class="form-inline justify-content-center">
                        <input class="inputNew form-control grey newsletter-input mr-3" type="text" name="email" size="18"
                               placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your e-mail','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
" value=""/>
                        <button type="submit" name="submitNewsletter"
                                class="btn btn-default button button-medium iqit-btn-newsletter">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
</span>
                        </button>
                        <input type="hidden" name="action" value="0"/>
                        <div class="mt-3 text-muted"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>
</div>
                    </form>
                </div>
            </div>
        </div>
    <?php }?>
</div> <!-- #layer_cart -->
<div id="iqitpopup-overlay"></div>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitpopup/views/templates/hook/iqitpopup.tpl --><?php }
}
