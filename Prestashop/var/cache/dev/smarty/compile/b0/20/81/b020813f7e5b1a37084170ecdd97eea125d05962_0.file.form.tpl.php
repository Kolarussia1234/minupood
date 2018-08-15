<?php
/* Smarty version 3.1.32, created on 2018-08-13 14:14:54
  from 'C:\xampp\htdocs\Prestashop\modules\iqithtmlandbanners\views\templates\admin\iqithtmlandbanners\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71682e1a8593_69894924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b020813f7e5b1a37084170ecdd97eea125d05962' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqithtmlandbanners\\views\\templates\\admin\\iqithtmlandbanners\\helpers\\form\\form.tpl',
      1 => 1534151624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71682e1a8593_69894924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17717843545b71682e0d1dc5_17731482', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12518485635b71682e119c52_28830228', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15568619765b71682e1669d5_44542613', "input_row");
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_17717843545b71682e0d1dc5_17731482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_17717843545b71682e0d1dc5_17731482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'blocks') {?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "label"} */
/* {block "legend"} */
class Block_12518485635b71682e119c52_28830228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_12518485635b71682e119c52_28830228',
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
/* {block "input_row"} */
class Block_15568619765b71682e1669d5_44542613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_15568619765b71682e1669d5_44542613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'blocks') {?>
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
                        <table class="table tableDnD cms" id="iqit_htmlandbanner_<?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['id_hook'];?>
">
                            <thead>
                                <tr class="nodrag nodrop">
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of the block','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
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
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_iqit_htmlandbanner'];?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['position'];?>
">
                                        <td><?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_iqit_htmlandbanner'];?>
</td>
                                        <td class="center pointer dragHandle" id="td_<?php echo $_smarty_tpl->tpl_vars['link_blocks_position']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_iqit_htmlandbanner'];?>
">
                                            <div class="dragGroup">
                                                <div class="positions">
                                                    <?php echo $_smarty_tpl->tpl_vars['link_block']->value['position']+1;?>

                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['link_block']->value['block_name'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['link_block']->value['type']) {?>html<?php } else { ?>banner<?php }?></td>
                                        <td>
                                            <div class="btn-group-action">
                                                <div class="btn-group pull-right">
                                                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;edit<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_iqit_htmlandbanner=<?php echo (int)$_smarty_tpl->tpl_vars['link_block']->value['id_iqit_htmlandbanner'];?>
&amp;type=<?php echo $_smarty_tpl->tpl_vars['link_block']->value['type'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
">
                                                        <i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                                                    </a>
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down"></i>&nbsp;
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;delete<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_iqit_htmlandbanner=<?php echo (int)$_smarty_tpl->tpl_vars['link_block']->value['id_iqit_htmlandbanner'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
">
                                                            <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

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
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'banners') {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            var iqitBannerPage = true;
        <?php echo '</script'; ?>
>


        <input type="hidden" name="content" id="iqit-banners-field" />

        <div class="form-group">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
               <div id="iqit-banners">

                   <div class="list-group-item list-group-item-header row-table">
                       <div class="col-table"></div>
                       <div class="col-table col-table-image">
                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                       </div>
                       <div class="col-table">
                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                       </div>
                       <div class="col-table">
                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Languages','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                       </div>
                       <div class="col-table">
                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                       </div>
                       <div class="col-table">
                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                       </div>
                   </div>

                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bannerImages']->value['banners'], 'banner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                       <div class="list-group-item row-table js-list-group-item">
                           <div class="col-table">
                               <i class="icon-bars js-iqit-banner-reorder iqit-banner-reorder"></i>
                           </div>
                           <div class="col-table col-table-image">
                               <img src="<?php echo $_smarty_tpl->tpl_vars['imgBannersPath']->value;
echo $_smarty_tpl->tpl_vars['banner']->value['img'];?>
" class="img-responsive js-iqit-banner-image"  data-image="<?php echo $_smarty_tpl->tpl_vars['banner']->value['img'];?>
" />
                           </div>

                           <div class="col-table">
                               <input type="text" class="js-iqit-banner-link" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
"/>
                           </div>
                           <div class="col-table">
                               <select type="text" class="js-iqit-banner-language">
                                   <option value="all" <?php if ($_smarty_tpl->tpl_vars['banner']->value['language'] == 'all') {?> selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
</option>
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                                       <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
"  <?php if ($_smarty_tpl->tpl_vars['banner']->value['language'] == $_smarty_tpl->tpl_vars['lang']->value['id_lang']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</option>
                                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               </select>
                           </div>
                           <div class="col-table">
                               <input type="checkbox" class="js-iqit-banner-active" <?php if ($_smarty_tpl->tpl_vars['banner']->value['status']) {?> checked<?php }?>/>
                           </div>
                           <div class="col-table">
                               <div class="btn-group-action pull-right">
                                   <button type="button" class="js-iqit-banner-delete  btn btn-danger" >
                                       <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                                   </button>
                               </div>
                           </div>
                       </div>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

               </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-lg-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

            </label>
            <div class="col-lg-9">
                <select type="text" class="js-iqit-banner-options-view">
                    <option value="list" <?php if ($_smarty_tpl->tpl_vars['bannerImages']->value['options']['view'] == 'list') {?> selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
</option>
                    <option value="slider" <?php if ($_smarty_tpl->tpl_vars['bannerImages']->value['options']['view'] == 'slider') {?> selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
</option>
                </select>
            </div>
        </div>



        <?php echo '<script'; ?>
 type="text/template" id="tmpl-iqitbanner">
            <div class="list-group-item row-table js-list-group-item">
                    <div class="col-table">
                        <i class="icon-bars js-iqit-banner-reorder iqit-banner-reorder"></i>
                    </div>
                    <div class="col-table col-table-image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imgBannersPath']->value;?>
::imgSrc::" class="img-responsive js-iqit-banner-image"  data-image="::imgSrc::" />
                    </div>

                    <div class="col-table">
                     <input type="text" class="js-iqit-banner-link" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>
"/>
                    </div>
                    <div class="col-table">
                        <select  type="text" class="js-iqit-banner-language">
                            <option value="all">all</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-table">
                        <input type="checkbox" class="js-iqit-banner-active" />
                    </div>
                    <div class="col-table">
                         <div class="btn-group-action pull-right">
                           <button type="button" class="js-iqit-banner-delete  btn btn-danger" >
                                <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqithtmlandbanners'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
            </div>
        <?php echo '</script'; ?>
>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input_row"} */
}
