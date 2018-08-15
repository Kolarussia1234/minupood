<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:56:25
  from 'C:\xampp\htdocs\Prestashop\modules\iqitthemeeditor\views\templates\admin\iqitthemeeditor\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7155c9af6d51_13188324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06bfa5e6c42be126440b99b7536c2222565fb84e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitthemeeditor\\views\\templates\\admin\\iqitthemeeditor\\helpers\\form\\form.tpl',
      1 => 1534151635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7155c9af6d51_13188324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18190113475b7155c98efd22_53211092', "defaultForm");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7246514825b7155c992a195_22789231', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3762297985b7155c992c168_23714700', "footer");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20927510945b7155c992d828_17563256', "fieldset");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4648637895b7155c99312e5_20613435', "input_row");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5901974765b7155c993f883_21757415', "label");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4946665955b7155c9941695_52714345', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "defaultForm"} */
class Block_18190113475b7155c98efd22_53211092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_18190113475b7155c98efd22_53211092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['formType']->value == 'front') {?>
        <ul id="iqit-config-pans" class="iqit-config-pans">
            <li class="iqit-config-tab-heading iqit-config-tab-heading-main"><a href="<?php echo $_smarty_tpl->tpl_vars['backToBoLink']->value;?>
"
                                                                                class="iqit-config-tab-close"
                                                                                id="iqit-exit-editor-btn"><i
                            class="icon-times"></i></a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Iqit Theme Editor','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fieldset', false, 'f');
$_smarty_tpl->tpl_vars['fieldset']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->index++;
$_smarty_tpl->tpl_vars['fieldset']->first = !$_smarty_tpl->tpl_vars['fieldset']->index;
$__foreach_fieldset_0_saved = $_smarty_tpl->tpl_vars['fieldset'];
?>
                <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['child'])) {?>
                    <li class="iqit-config-tab">
                        <span class="iqit-config-tab-title"
                              <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>data-fieldset="#te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
"
                              data-level="1" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>
 <i
                                    class="icon-angle-right"></i></span>

                        <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>
                            <ul class="iqit-config-tab-group">
                                <li class="iqit-config-tab-heading">
                                    <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i>
                                    </button> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>
</li>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <li class="iqit-config-tab"><span class="iqit-config-tab-title"
                                                                      data-fieldset="#te-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-level="2"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                                            <i class="icon-angle-right"></i></span></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>

                    </li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['fieldset'] = $__foreach_fieldset_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div id="iqit-config-fieldsets">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
    <?php } else { ?>
        <div class="info-tabs">

            <div class="iqit-buttons">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['frontEditorLink']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to live editor','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 <i
                            class="icon-angle-right"></i></a>
            </div>

            <div class="theme-info">

                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/logo-iq.png" alt="Iqit-commerce.com"/>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme version','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
  <?php echo $_smarty_tpl->tpl_vars['theme_version']->value;?>


                <iframe width="100%" height="180px"
                        src="//iqit-commerce.com/iframe/lastnews/news17.php?product=warehouse&version=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme_version']->value,'html','UTF-8' ));?>
"
                        style="border: none; overflow: hidden;"></iframe>
            </div>


            <ul id="iqit-config-tabs" class="iqit-config-tabs" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fieldset', false, 'f');
$_smarty_tpl->tpl_vars['fieldset']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->index++;
$_smarty_tpl->tpl_vars['fieldset']->first = !$_smarty_tpl->tpl_vars['fieldset']->index;
$__foreach_fieldset_2_saved = $_smarty_tpl->tpl_vars['fieldset'];
?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['child'])) {?>
                        <li class="tab  <?php if ($_smarty_tpl->tpl_vars['fieldset']->first) {?> active <?php }?> ">
                            <a href="#te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
" role="tab"
                               <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>data-toggle="tab"<?php }?>  <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>class="parent-tab"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>

                            </a>

                            <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <li class="tab tab-child"><a href="#te-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab"
                                                                     data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>

                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['fieldset'] = $__foreach_fieldset_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="tab-content iqit-config-panels ">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
    <?php }?>

    <input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iqit_base_url']->value,'html','UTF-8' ));?>
" id="iqit-base-url"/>
<?php
}
}
/* {/block "defaultForm"} */
/* {block "legend"} */
class Block_7246514825b7155c992a195_22789231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_7246514825b7155c992a195_22789231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['formType']->value == 'front') {?>
        <div class="iqit-config-tab-heading">
            <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i></button> <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "legend"} */
/* {block "footer"} */
class Block_3762297985b7155c992c168_23714700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3762297985b7155c992c168_23714700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['formType']->value != 'front') {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "footer"} */
/* {block "fieldset"} */
class Block_20927510945b7155c992d828_17563256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fieldset' => 
  array (
    0 => 'Block_20927510945b7155c992d828_17563256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['formType']->value == 'front') {?>
        <div class="iqit-config-fieldset" id="te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
    <?php } else { ?>
        <div role="tabpanel" class="tab-panel <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'] == 'iqit-general') {?>active<?php }?>"
             id="te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
    <?php }
}
}
/* {/block "fieldset"} */
/* {block "input_row"} */
class Block_4648637895b7155c99312e5_20613435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_4648637895b7155c99312e5_20613435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_start' || $_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_start') {?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>condition-option hidden-option<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>data-condition='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['condition'] ));?>
'<?php }?>>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'title_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
            <div class="col-lg-12 title-reparator"><div class="col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div></div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'info_text') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {?><p class="alert alert-info col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'subtitle_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9 subtitle-reparator"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'wrapper_start') {?>
        <div class="clearfix">
            <div class="col-lg-3"></div>
            <div class="background-wrapper col-lg-9 clearfix">
                <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'wrapper_end') {?>
            </div>
        </div>
    <?php } else { ?>

        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_start' || $_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_start') {?>
        </div>
    <?php }
}
}
/* {/block "input_row"} */
/* {block "label"} */
class Block_5901974765b7155c993f883_21757415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_5901974765b7155c993f883_21757415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (($_smarty_tpl->tpl_vars['input']->value['type'] == 'import_export')) {?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_4946665955b7155c9941695_52714345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_4946665955b7155c9941695_52714345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['formType']->value == 'front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['descFront'])) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['input']->value['descFront'];?>
</div>
    <?php }
}?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'boxshadow') {?>
        <div class="box-shadow-generator js-box-shadow-generator">

            <select class="js-box-shadow-switch js-scss-ignore" data-name="switch" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_switch">
                <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['switch']) {?> selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'yes','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
            </select>

            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-box-shadow-input"/>
            <div class="box-shadow-controls js-box-shadow-controls hidden-option">

                <div class="boxshadow-control"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Color','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>

                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8' ));?>
"
                               class="form-control js-scss-ignore js-shadow-color" data-name="color"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <div class="boxshadow-control"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blur','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 <input data-name="blur"
                                                                                         name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_blur"
                                                                                         type="number"
                                                                                         class="form-control js-scss-ignore js-shadow-blur"
                                                                                         step="1"
                                                                                         max="100" min="0"
                                                                                         value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur'] == '') {?>0<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur'],'html','UTF-8' ));
}?>"/>
                </div>
                <div class="boxshadow-control"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Spread','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 <input data-name="spread"
                                                                                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spread"
                                                                                           type="number"
                                                                                           class="form-control js-scss-ignore js-shadow-spread"
                                                                                           step="1"
                                                                                           max="100" min="0"
                                                                                           value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread'] == '') {?>0<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread'],'html','UTF-8' ));
}?>"/>
                </div>
                <div class="boxshadow-control"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Horizontal','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 <input data-name="horizontal"
                                                                                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_horizontal"
                                                                                               class="form-control js-scss-ignore js-shadow-horizontal"
                                                                                               type="number"
                                                                                               step="1" min="-100"
                                                                                               max="100"
                                                                                               value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal'] == '') {?>0<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal'],'html','UTF-8' ));
}?>"/>
                </div>
                <div class="boxshadow-control"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vertical','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 <input data-name="vertical"
                                                                                             name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_vertical"
                                                                                             class="form-control js-scss-ignore js-shadow-vertical"
                                                                                             type="number"
                                                                                             step="1" min="-100"
                                                                                             max="100"
                                                                                             value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical'] == '') {?>0<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical'],'html','UTF-8' ));
}?>"/>
                </div>

                <div>
                    <div class="shadowpreview js-shadow-preview"></div>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'border') {?>
        <div class="js-border-generator border-generator row">
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-border-input"/>
            <div class="col-xs-2">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" class="js-border-type js-scss-ignore"
                        data-name="type">
                    <option value="none"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 'none') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                    <option value="solid"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 'solid') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'solid','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                    <option value="dotted"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 'dotted') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dotted','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                    <option value="dashed"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 'dashed') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dashed','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                    <option value="groove"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 'groove') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'groove','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                    <option value="double"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] == 'double') {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'double','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</option>
                </select>
            </div>
            <div class="col-xs-4 js-border-controls-wrapper hidden-option <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type'] != 'none') {?>visible-inline-option<?php }?>">
                <div class="row">
            <div class="col-xs-6 border-width">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" class="js-border-width js-scss-ignore"
                        data-name="width">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px
                        </option>
                    <?php }
}
?>
                </select>
            </div>
            <div class="col-xs-6 border-color">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8' ));?>
"
                               class="form-control js-border-color js-scss-ignore" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"
                               data-name="color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color2') {?>
        <div class="form-group">
            <div class="col-lg-2">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'range') {?>
        <div class="form-group">
            <div class="col-lg-5">
                <div class="row">
                    <div class="input-group input-group-range">
                        <input type="range"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               data-vinput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value"
                               class="js-scss-ignore js-range-slider range-slider"/>
                        <input type="number"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value"
                               class="form-control width-70 js-range-slider-val"/>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'info_text') {?>
        <div class="form-group">
            <div class="col-lg-2">

            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'number') {?>
        <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix']) || isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
        <?php }?>
        <input type="number"
               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
               id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
               value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format']) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
}?>"
               class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength']) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly']) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete']) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required']) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder']) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
        />
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix']) || isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'font') {?>
        <?php $_smarty_tpl->_assignInScope('value_font', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?> js-typography-generator">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
            <?php }?>
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-font-input"/>
            <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_size"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['size'])) {
echo $_smarty_tpl->tpl_vars['value_font']->value['size'];
}?>"
                   data-name="size"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size"
                   class="form-control js-font-size js-scss-ignore width-60"
                   step="1"
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength']) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly']) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete']) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required']) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder']) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
            />
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
            <?php }?>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['bold']) || !$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?> />
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"><i class="icon-bold"></i></label>
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['bold']) && $_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"><i class="icon-bold"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['italic']) || !$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic"><i class="icon-italic"></i></label>
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['italic']) && $_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"><i class="icon-italic"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase']) || !$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase">ABC</label>
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase']) && $_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase">Abc</label>
                </span>
            </span>
            <span class="input-group-addon"><i class="icon icon-arrows-h" aria-hidden="true"></i></span>
            <input type="number"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['spacing'])) {
echo $_smarty_tpl->tpl_vars['value_font']->value['spacing'];
}?>"
                   data-name="spacing"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spacing"
                   class="form-control js-font-spacing js-scss-ignore width-60"
                   step="1"
                   min="-10"
                   max="20"
            />
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'code_textarea') {?>
        <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" class="iqit-code-editor form-control"
             data-language="<?php echo $_smarty_tpl->tpl_vars['input']->value['language'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'filemanager') {?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-iframe-upload"
                                                           data-input-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"
                                                           type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'import_export') {?>
        <div class="title-reparator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</div>
        <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload own style or downloade our samples from below','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
  </div>
        <div style="display:inline-block;"><input type="file" id="uploadConfig" name="uploadConfig"/></div>
        <button type="submit" class="btn btn-default btn-lg" name="importConfiguration"><span
                    class="icon icon-upload"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</button>
        <hr>
        <div class="title-reparator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
</div>
        <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only saved changes are exported. Save first if you made any modifications.','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
  </div>
        <a class="btn btn-default btn-lg"
           href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_link']->value,'html','UTF-8' ));?>
&ajax=1&action=exportThemeConfiguration"><span
                    class="icon icon-share"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export to file','mod'=>'iqitthemeeditor'),$_smarty_tpl ) );?>
 </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'image-select') {?>
        <div class="image-select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['direction'])) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];
}?>">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_4_saved = $_smarty_tpl->tpl_vars['option'];
?>
                <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {
if ($_smarty_tpl->tpl_vars['option']->index == 0) {?> checked<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option'] == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                                class="icon-check-circle image-option-check"> </i>  </span>
                    <label class="image-option-label"
                           for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"
                         class="img-responsive"/>
                </div>
            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'preloader-select') {?>
        <div class="image-select">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_5_saved = $_smarty_tpl->tpl_vars['option'];
?>
            <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                   name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option'] == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
            <div class="image-option preloader-option"
            ">
            <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                        class="icon-check-circle image-option-check"> </i>  </span>
            <label class="image-option-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
            <div class="loader-wrapper">
                <div class="loader loader-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
">Loading...</div>
            </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textarea2') {?>
        <textarea
                name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['formType']->value == 'front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disableFront']) && $_smarty_tpl->tpl_vars['input']->value['disableFront']) {?> readonly="readonly"<?php }
}?>
                id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?>
                class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte']) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength']) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
</textarea>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
