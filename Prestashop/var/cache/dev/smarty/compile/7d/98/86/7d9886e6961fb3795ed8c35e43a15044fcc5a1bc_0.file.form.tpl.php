<?php
/* Smarty version 3.1.32, created on 2018-08-13 14:10:22
  from 'C:\xampp\htdocs\Prestashop\modules\iqitlinksmanager\views\templates\admin\iqitlinkwidget\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71671e4cfed8_71102362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9886e6961fb3795ed8c35e43a15044fcc5a1bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitlinksmanager\\views\\templates\\admin\\iqitlinkwidget\\helpers\\form\\form.tpl',
      1 => 1534151624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71671e4cfed8_71102362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'cms_tree' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Prestashop\\var\\cache\\dev\\smarty\\compile\\7d\\98\\86\\7d9886e6961fb3795ed8c35e43a15044fcc5a1bc_0.file.form.tpl.php',
    'uid' => '7d9886e6961fb3795ed8c35e43a15044fcc5a1bc',
    'call_name' => 'smarty_template_function_cms_tree_4662808095b71671deae8b9_61949391',
  ),
  'category_tree' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Prestashop\\var\\cache\\dev\\smarty\\compile\\7d\\98\\86\\7d9886e6961fb3795ed8c35e43a15044fcc5a1bc_0.file.form.tpl.php',
    'uid' => '7d9886e6961fb3795ed8c35e43a15044fcc5a1bc',
    'call_name' => 'smarty_template_function_category_tree_4662808095b71671deae8b9_61949391',
  ),
  'custom_link_lang' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Prestashop\\var\\cache\\dev\\smarty\\compile\\7d\\98\\86\\7d9886e6961fb3795ed8c35e43a15044fcc5a1bc_0.file.form.tpl.php',
    'uid' => '7d9886e6961fb3795ed8c35e43a15044fcc5a1bc',
    'call_name' => 'smarty_template_function_custom_link_lang_4662808095b71671deae8b9_61949391',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18838158965b71671e21ea58_96126543', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5765456965b71671e2ca9c1_56534074', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17378458485b71671e37ea81_32357888', "input_row");
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_18838158965b71671e21ea58_96126543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_18838158965b71671e21ea58_96126543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'link_blocks') {?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "label"} */
/* {block "legend"} */
class Block_5765456965b71671e2ca9c1_56534074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_5765456965b71671e2ca9c1_56534074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>
" /><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
        <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

        <span class="panel-heading-action">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'modules-list' && $_smarty_tpl->tpl_vars['k']->value != 'back') {?>
                    <a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="list-toolbar-btn" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])) {?>href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target']) && $_smarty_tpl->tpl_vars['btn']->value['target']) {?>target="_blank"<?php }
if (isset($_smarty_tpl->tpl_vars['btn']->value['js']) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
                        <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
" data-html="true">
                            <i class="process-icon-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?> <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" ></i>
                        </span>
                    </a>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
    </h3>
<?php
}
}
/* {/block "legend"} */
/* smarty_template_function_cms_tree_4662808095b71671deae8b9_61949391 */
if (!function_exists('smarty_template_function_cms_tree_4662808095b71671deae8b9_61949391')) {
function smarty_template_function_cms_tree_4662808095b71671deae8b9_61949391(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li data-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_cms_category'];?>
" data-type="cms_category" style="margin-left:<?php echo smarty_function_math(array('equation'=>"17 * depth",'depth'=>$_smarty_tpl->tpl_vars['depth']->value),$_smarty_tpl);?>
px" class="cms-category"><span class="drag-handle">&#9776;</span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'] ));?>
 <small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms category','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)</small> <i class="icon-trash js-remove "></i></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?><li data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" data-type="cms_page" style="margin-left:<?php echo smarty_function_math(array('equation'=>"17 * (depth+1)",'depth'=>$_smarty_tpl->tpl_vars['depth']->value),$_smarty_tpl);?>
px"><span class="drag-handle">&#9776;</span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['title'] ));?>
 <small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms page','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)</small><i class="icon-trash js-remove "></i></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {?> <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cms_tree', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
 <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php
}}
/*/ smarty_template_function_cms_tree_4662808095b71671deae8b9_61949391 */
/* smarty_template_function_category_tree_4662808095b71671deae8b9_61949391 */
if (!function_exists('smarty_template_function_category_tree_4662808095b71671deae8b9_61949391')) {
function smarty_template_function_category_tree_4662808095b71671deae8b9_61949391(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

         <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
if ($_smarty_tpl->tpl_vars['node']->value['level_depth'] > 1) {?><li data-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
" data-type="category" style="margin-left:<?php echo smarty_function_math(array('equation'=>"17 * (depth - 2)",'depth'=>$_smarty_tpl->tpl_vars['depth']->value),$_smarty_tpl);?>
px" class=""><span class="drag-handle">&#9776;</span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'] ));?>
 <small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'category','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)</small> <i class="icon-trash js-remove "></i></li><?php }
if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_tree', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php
}}
/*/ smarty_template_function_category_tree_4662808095b71671deae8b9_61949391 */
/* smarty_template_function_custom_link_lang_4662808095b71671deae8b9_61949391 */
if (!function_exists('smarty_template_function_custom_link_lang_4662808095b71671deae8b9_61949391')) {
function smarty_template_function_custom_link_lang_4662808095b71671deae8b9_61949391(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('page'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="form-group"><label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</label><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>><?php }?><div class="col-lg-7"><input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" type="text" class="link-title-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
"></div><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="col-lg-2"><button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>
<span class="caret"></span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?><li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="form-group"><label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Url','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</label><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>><?php }?><div class="col-lg-7"><input value="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" type="text" class="link-url-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
"><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Put absolute url with http:// or https:// prefix','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</p></div><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="col-lg-2"><button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>
<span class="caret"></span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?><li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
    <?php
}}
/*/ smarty_template_function_custom_link_lang_4662808095b71671deae8b9_61949391 */
/* {block "input_row"} */
class Block_17378458485b71671e37ea81_32357888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_17378458485b71671e37ea81_32357888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'link_blocks') {?>
        <div class="row">
            <?php echo '<script'; ?>
 type="text/javascript">
                var come_from = '<?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
';
                var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
                var alternate = 1;
            <?php echo '</script'; ?>
>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'link_blocks_position', false, 'key', 'blocksLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['link_blocks_position']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_blocksLoop']->value['index']++;
?>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['hook_name'];?>

                             <small><?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['hook_title'];?>
</small>
                        </div>
                        <table class="table tableDnD cms" id="iqit_link_block_<?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['id_hook'];?>
">
                            <thead>
                                <tr class="nodrag nodrop">
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of the block','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link_blocks_position']->value['blocks'], 'link_block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link_block']->value) {
?>
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>alt_row<?php } else { ?>not_alt_row<?php }?> row_hover" id="tr_<?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_iqit_link_block'];?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['position'];?>
">
                                        <td><?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_iqit_link_block'];?>
</td>
                                        <td class="center pointer dragHandle" id="td_<?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_iqit_link_block'];?>
">
                                            <div class="dragGroup">
                                                <div class="positions">
                                                    <?php echo $_smarty_tpl->tpl_vars['link_block']->value['position']+1;?>

                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['link_block']->value['block_name'];?>
</td>
                                        <td>
                                            <div class="btn-group-action">
                                                <div class="btn-group pull-right">
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;edit<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_iqit_link_block=<?php echo (int)$_smarty_tpl->tpl_vars['link_block']->value['id_iqit_link_block'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
">
                                                        <i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>

                                                    </a>
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down"></i>&nbsp;
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;delete<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_iqit_link_block=<?php echo (int)$_smarty_tpl->tpl_vars['link_block']->value['id_iqit_link_block'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
">
                                                            <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>

                                                        </a>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blocksLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blocksLoop']->value['index'] : null)%2) {?><div class="clearfix"></div><?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>


    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'repository_links') {?>

    

    

    <div class="col-xs-7">
    <div class="panel link-selector">

        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div>
        <ul id="repository-list">
          <li class="list-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cms pages','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</li>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cms_tree', array('nodes'=>$_smarty_tpl->tpl_vars['cms_tree']->value), true);?>


          <li class="list-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Static pages','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</li>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static']->value) {
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static']->value['pages'], 'page', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
              <li data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" data-type="static"><span class="drag-handle">&#9776;</span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['title'] ));?>
 <small>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'static page','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)</small> <i class="icon-trash js-remove "></i></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="list-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</li>

                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_tree', array('nodes'=>$_smarty_tpl->tpl_vars['category_tree']->value), true);?>


        </ul>
    </div>
    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'selected_links') {?>
    <input type="hidden" name="content" id="selected-links" value="">

    

    <div class="col-xs-5">
    <div class="panel link-selector">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div>
        <div class="drag-info"><span class="drag-handle">&#9776;</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag&drop links below from repository','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</div>
        <ul id="selected-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_links']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
            <?php if (($_smarty_tpl->tpl_vars['page']->value['type'] == 'custom')) {?>
                <li data-type="<?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
"><span class="drag-handle">&#9776;</span>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'custom_link_lang', array('page'=>$_smarty_tpl->tpl_vars['page']->value), true);?>

                <i class="icon-trash js-remove "></i></li>
            <?php } else { ?>
                <?php if (isset($_smarty_tpl->tpl_vars['page']->value['data']['title'])) {?><li data-type="<?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
"><span class="drag-handle">&#9776;</span><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['title'];?>
<small>
                 <?php if (($_smarty_tpl->tpl_vars['page']->value['type'] == 'static')) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'static pages','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)<?php }?> <?php if (($_smarty_tpl->tpl_vars['page']->value['type'] == 'cms_category')) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms category','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)<?php }?> <?php if (($_smarty_tpl->tpl_vars['page']->value['type'] == 'cms_page')) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cms page','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
)<?php }?>

                </small> <i class="icon-trash js-remove "></i></li><?php }?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
     <div class="drag-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or add custom link','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
 </div>
    <div id="custom-links-panel">
    <div class="form-group">
        <label class="control-label col-lg-3">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>

        </label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
            <?php }?>
            <div class="col-lg-7">
                <input value="" type="text" class="link-title-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
            <div class="col-lg-2">
                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                    <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        </div>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div class="form-group">
        <label class="control-label col-lg-3">
           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Url','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>

        </label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
        <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
            <?php }?>
            <div class="col-lg-7">
                <input value="" type="text" class="link-url-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
                <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Put absolute url with http:// or https:// prefix','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>
</p>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
            <div class="col-lg-2">
                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                    <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
 );" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html' ));?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        </div>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    </div>

    <div class="form-group">
        <button type="button" id="add-custom-link" class="btn btn-default btn-lg">
             <i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'iqitlinksmanager'),$_smarty_tpl ) );?>

        </button>
    </div>


    </div>
    <div class="clearfix"></div>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input_row"} */
}
