<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:52:45
  from 'C:\xampp\htdocs\Prestashop\modules\iqitelementor\views\templates\admin\adminiqitelementor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7154ed12c291_44675225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2622b42d2210b2a0a3e957331919d811d7253d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitelementor\\views\\templates\\admin\\adminiqitelementor.tpl',
      1 => 1534151622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7154ed12c291_44675225 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Elementor editor','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</title>
    <?php echo '<script'; ?>
 type="text/javascript">
    var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
    var full_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_language_code']->value,'\'');?>
';
    var full_cldr_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_cldr_language_code']->value,'\'');?>
';
    var country_iso_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['country_iso_code']->value,'\'');?>
';
    var _PS_VERSION_ = '<?php echo addcslashes(@constant('_PS_VERSION_'),'\'');?>
';
    var roundMode = <?php echo intval($_smarty_tpl->tpl_vars['round_mode']->value);?>
;
    var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
    var youEditFieldFor = 'a';
    var baseAdminDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['baseDir']->value);?>
';
    var from_msg ='a';
    var token_admin_orders = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
';
    var token_admin_customers = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
';
    var token_admin_customer_threads = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
';
    var currentIndex = '<?php echo addcslashes($_smarty_tpl->tpl_vars['currentIndex']->value,'\'');?>
';
    var employee_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminEmployees'),$_smarty_tpl ) );?>
';
    var default_language = '<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
';
    var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModulesSf",true,array('route'=>"admin_module_catalog_post")));?>
';
    var tab_modules_list = '<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value) && $_smarty_tpl->tpl_vars['tab_modules_list']->value) {
echo addslashes($_smarty_tpl->tpl_vars['tab_modules_list']->value);
}?>';
  <?php echo '</script'; ?>
>
  <?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
?>
      <link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css_uri']->value,'html','UTF-8' ));?>
" rel="stylesheet" type="text/css"/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</head>
<body class="elementor-editor-active">
<?php echo $_smarty_tpl->tpl_vars['pluginContent']->value;?>



<?php echo '<script'; ?>
 type="text/template" id="tmpl-elementor-empty-preview">
  <div class="elementor-first-add">
    <div class="elementor-icon eicon-plus"></div>
  </div>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/template" id="tmpl-elementor-preview">
  <div id="elementor-section-wrap"></div>
  <div id="elementor-add-section" class="elementor-visible-desktop">
    <div id="elementor-add-section-inner">
      <div id="elementor-add-new-section">
        <button id="elementor-add-section-button"
                class="elementor-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add New Section','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</button>
        <button id="elementor-add-template-button"
                class="elementor-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Template','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</button>
        <div id="elementor-add-section-drag-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or drag widget here','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</div>
      </div>
      <div id="elementor-select-preset">
        <div id="elementor-select-preset-close">
          <i class="fa fa-times"></i>
        </div>
        <div id="elementor-select-preset-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your Structure','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</div>
        <ul id="elementor-select-preset-list">
          
          <#
                  var structures = [ 10, 20, 30, 40, 21, 22, 31, 32, 33, 50, 60, 34 ];

                  _.each( structures, function( structure ) {
                  var preset = elementor.presetsFactory.getPresetByStructure( structure ); #>

            <li class="elementor-preset elementor-column elementor-col-16"
                data-structure="{{ structure }}">
              {{{ elementor.presetsFactory.getPresetSVG( preset.preset ).outerHTML }}}
            </li>
            <# } ); #>
              
        </ul>
      </div>
    </div>
  </div>
<?php echo '</script'; ?>
>


<?php if (isset($_smarty_tpl->tpl_vars['js_def_vars']->value) && is_array($_smarty_tpl->tpl_vars['js_def_vars']->value) && count($_smarty_tpl->tpl_vars['js_def_vars']->value)) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_def_vars']->value, 'def', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['def']->value) {
?>
    var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['def']->value ));?>
;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php }
if (isset($_smarty_tpl->tpl_vars['js_files']->value) && count($_smarty_tpl->tpl_vars['js_files']->value)) {?>
  <?php $_smarty_tpl->_subTemplateRender((@constant('_PS_ALL_THEMES_DIR_')).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>


</body>
</html>


<?php }
}
