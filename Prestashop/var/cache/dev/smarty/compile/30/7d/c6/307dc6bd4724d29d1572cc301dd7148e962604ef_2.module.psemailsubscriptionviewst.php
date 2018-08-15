<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:54
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c868c8a73_48899200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1534151698,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c868c8a73_48899200 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="ps-emailsubscription-block">
    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl ) );?>
"
          method="post">
                <div class="input-group newsletter-input-group ">
                    <input
                            name="email"
                            type="email"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="form-control input-subscription"
                            placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                    >
                    <button
                            class="btn btn-primary btn-subscribe btn-iconic"
                            name="submitNewsletter"
                            type="submit"
                    ><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                </div>
        <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
            <div class="mt-2 text-muted"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>
</div>
        <?php }?>
                <input type="hidden" name="action" value="0">
    </form>
</div>

<!-- end C:\xampp\htdocs\Prestashop/themes/warehouse/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
