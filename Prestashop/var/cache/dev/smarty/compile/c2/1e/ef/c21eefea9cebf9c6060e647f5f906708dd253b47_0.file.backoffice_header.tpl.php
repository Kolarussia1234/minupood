<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:35:45
  from 'C:\xampp\htdocs\Prestashop\modules\iqitelementor\views\templates\hook\backoffice_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715f01a5c233_18587271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c21eefea9cebf9c6060e647f5f906708dd253b47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitelementor\\views\\templates\\hook\\backoffice_header.tpl',
      1 => 1534151622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715f01a5c233_18587271 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var elementorPageType = '<?php echo $_smarty_tpl->tpl_vars['pageType']->value;?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="tmpl-btn-edit-with-elementor">
    <div class="form-group">
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9">
            <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Save page first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['onlyElementor']->value) {?>
                <p><br />
                <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to return to standard text editor go to elementor page builder first, remove all widgets and save.','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</i>
                </p>
            <?php }?>

        </div>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="tmpl-btn-edit-with-elementor-product">
    <div>

            <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add extendend content with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Save product first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

            <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="tmpl-btn-edit-with-elementor-blog">
    <div>

        <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Save post first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['onlyElementor']->value) {?>
            <p><br />
                <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to return to standard text editor go to elementor page builder first, remove all widgets and save.','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</i>
            </p>
        <?php }?>
    </div>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/template" id="tmpl-btn-edit-with-elementor-category">
    <div style="margin-bottom: 20px;">
        <label class="control-label col-lg-3" ></label>
        <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add extendend content with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Save category first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
    <div style="margin-bottom: 20px; border-bottom:  1px solid #cecece">
        <div class="form-group">
            <label class="control-label col-lg-3"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show elementor content only','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</span></label>
            <div class="col-lg-9">
                        <span class="switch prestashop-switch fixed-width-lg">
																				<input type="radio" name="justElementor" id="justElementor_on" value="1"  <?php if ($_smarty_tpl->tpl_vars['justElementorCategory']->value) {?>checked="checked"<?php }?>>
										<label for="justElementor_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</label>
																				<input type="radio" name="justElementor" id="justElementor_off" value="0"  <?php if (!$_smarty_tpl->tpl_vars['justElementorCategory']->value) {?>checked="checked"<?php }?>>
										<label for="justElementor_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</label>
																				<a class="slide-button btn"></a>
									</span>



                <div class="col-lg-12">
                    <div class="help-block">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to create customized category page(like landing page) without sidebards and default product list enabled this option','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

<?php echo '</script'; ?>
><?php }
}
