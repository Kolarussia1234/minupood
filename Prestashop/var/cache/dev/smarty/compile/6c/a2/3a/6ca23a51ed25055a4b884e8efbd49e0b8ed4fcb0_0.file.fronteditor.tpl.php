<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:56:27
  from 'C:\xampp\htdocs\Prestashop\modules\iqitthemeeditor\views\templates\admin\fronteditor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7155cb5b4da8_48496842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ca23a51ed25055a4b884e8efbd49e0b8ed4fcb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitthemeeditor\\views\\templates\\admin\\fronteditor.tpl',
      1 => 1534151635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7155cb5b4da8_48496842 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
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
  <title><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Iqit Theme Editor','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</title>
    <?php echo '<script'; ?>
 type="text/javascript">
    var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
    var lang_is_rtl = '<?php echo intval($_smarty_tpl->tpl_vars['lang_is_rtl']->value);?>
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
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['js_files']->value) && count($_smarty_tpl->tpl_vars['js_files']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender((@constant('_PS_ALL_THEMES_DIR_')).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php }?>

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

  <?php if (isset($_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value)) {?>
    	<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value;?>

  <?php }?>
</head>
<body class="iqit-front-editor">

<style id="iqitfronteditor-style"></style>
<style id="iqitfronteditor-custom-style"></style>

<div>
  <div id="iqitfronteditor-tools" class="loading-tools">
    <div id="iqitfronteditor-tools-loader"><div class="loader loader-1"></div></div>
    <button type="button" id="iqitfronteditor-tools-trigger" ><i class="icon-angle-left"></i></button>
    <div id="iqitfronteditor-tools-panels">

      <?php if ($_smarty_tpl->tpl_vars['cacheStatus']->value) {?>
        <div class="alert alert-warning">
          <button type="button" class="iqit-close-warning js-iqit-close-warning"><i class="icon-times"></i></button>
          <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is a cache enabled in your shop!','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</strong>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It may cause that some options of themeeditor will be not refreshed in preview after modification.','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</p>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Consider to disable it during the work with editor','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['cacheLink']->value;?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to Performance tab','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</a>)
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Re-enable it once you finish!','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>

          </p>
        </div>
      <?php }?>

      <?php echo $_smarty_tpl->tpl_vars['editorForm']->value;?>


    </div>

    <div id="iqitfronteditor-tools-bottom">
      <div class="preview-selector">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview page','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>

        <select id="preview-page">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['previewLinks']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</option>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <div class="tools">
        <div id="iqitfronteditor-save-false"></div>
        <button type="button" id="iqitfronteditor-save" class="_saved"><i
                  class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 </button>
        <div id="iqitfronteditor-save-success"><i class="icon-check"></i></div>
        <div class="responsive-buttons">
          <button type="button" class="js-preview-device-switch active" data-device="desktop"><i
                    class="icon-desktop"></i></button>
          <button type="button" class="js-preview-device-switch" data-device="tablet"><i class="icon-tablet"></i>
          </button>
          <button type="button" class="js-preview-device-switch" data-device="phone"><i class="icon-mobile"></i>
          </button>
        </div>
      </div>
    </div>

  </div>
  <div id="iqitfronteditor-preview" class="loading-preview">
    <div id="iqitfronteditor-preview-loader"><div class="loader loader-1"></div></div>
    <iframe id="iqitfronteditor-iframe" src="<?php echo $_smarty_tpl->tpl_vars['previewLinks']->value['index']['link'];?>
"></iframe>
  </div>

</div>

<div id="iqitfronteditor-exit-modal">
    <div id="iqitfronteditor-exit-modal-content">
        <span class="modal-tile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have unsaved changes, are you sure you want to exit?','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</span>
        <button type="button" id="iqitfronteditor-modal-close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 </button>
        <a href="<?php echo $_smarty_tpl->tpl_vars['backToBo']->value;?>
" id="iqitfronteditor-modal-back"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exit without saving changes','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 </a>
    </div>
</div>

</body>
</html>


<?php }
}
