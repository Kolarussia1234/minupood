<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:22
  from 'C:\xampp\htdocs\Prestashop\modules\welcome\views\contents\end.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c66b1ed32_16447180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '202f08da99ab968c2d564dd3dd153cdfde9f154d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\welcome\\views\\contents\\end.tpl',
      1 => 1534079511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c66b1ed32_16447180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="onboarding-welcome" class="modal-body">
    <div class="col-12">
        <button class="onboarding-button-next pull-right close" type="button">&times;</button>
        <h2 class="text-center text-md-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</h2>
    </div>
    <div class="col-12">
        <p class="text-center text-md-center">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
<br />
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>

        </p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6  justify-content-center text-center text-md-center link-container">
              <a class="final-link" href="http://doc.prestashop.com/display/PS17/Getting+Started" target="_blank">
                <div class="starter-guide"></div>
                <span class="link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</span>
              </a>
            </div>
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
                <div class="forum"></div>
                <span class="link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
                <div class="training"></div>
                <span class="link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</span>
              </a>
            </div>
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
                <div class="video-tutorial"></div>
                <span class="link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12">
            <div class="text-center text-md-center">
                <button class="btn btn-primary onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
