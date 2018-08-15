<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:43:18
  from 'C:\xampp\htdocs\Prestashop\modules\ps_linklist\views\templates\admin\linkwidget\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7152b66fd373_45066134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e0e8044b6d51be3b7997dbfa7f5cc2da48d005' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\ps_linklist\\views\\templates\\admin\\linkwidget\\helpers\\form\\form.tpl',
      1 => 1534079512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7152b66fd373_45066134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3429035455b7152b6616b92_21038645', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2311976685b7152b662c7e4_17740964', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_431486415b7152b6675702_55225953', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_3429035455b7152b6616b92_21038645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_3429035455b7152b6616b92_21038645',
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
class Block_2311976685b7152b662c7e4_17740964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_2311976685b7152b662c7e4_17740964',
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
                        <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['btn']->value['desc']),$_smarty_tpl ) );?>
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
class Block_431486415b7152b6675702_55225953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_431486415b7152b6675702_55225953',
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
                        <table class="table tableDnD cms" id="link_block_<?php echo $_smarty_tpl->tpl_vars['key']->value%2;?>
">
                            <thead>
                                <tr class="nodrag nodrop">
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of the block','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
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
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>alt_row<?php } else { ?>not_alt_row<?php }?> row_hover" id="tr_<?php echo $_smarty_tpl->tpl_vars['key']->value%2;?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_link_block'];?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['position'];?>
">
                                        <td><?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_link_block'];?>
</td>
                                        <td class="center pointer dragHandle" id="td_<?php echo $_smarty_tpl->tpl_vars['key']->value%2;?>
_<?php echo $_smarty_tpl->tpl_vars['link_block']->value['id_link_block'];?>
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
&amp;id_link_block=<?php echo (int)$_smarty_tpl->tpl_vars['link_block']->value['id_link_block'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
">
                                                        <i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>

                                                    </a>
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down"></i>&nbsp;
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;delete<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;id_link_block=<?php echo (int)$_smarty_tpl->tpl_vars['link_block']->value['id_link_block'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
">
                                                            <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>

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

    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'cms_pages') {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'cms_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cms_category']->value) {
?>
      <div class="row">
        <div class="col-lg-9 col-lg-offset-3">
          <div class="panel">
            <div class="panel-heading">
              <?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 - <?php echo $_smarty_tpl->tpl_vars['cms_category']->value['name'];?>

            </div>
            <table class="table">
              <thead>
                <tr>
                  <th>
                    <input type="checkbox" name="checkme" id="checkme" class="noborder" onclick="checkDelBoxes(this.form, '<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
', this.checked)" />
                  </th>
                  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_category']->value['pages'], 'page', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
                  <tr <?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>class="alt_row"<?php }?>>
                    <td>
                      <input type="checkbox" class="cmsBox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['page']->value['id_cms'],$_smarty_tpl->tpl_vars['fields_value']->value['content']['cms'])) {?>checked="checked"<?php }?> />
                    </td>
                    <td class="fixed-width-xs">
                      <?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>

                    </td>
                    <td>
                      <label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
">
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['title'] ));?>

                      </label>
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
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'product_pages' || $_smarty_tpl->tpl_vars['input']->value['type'] == 'static_pages') {?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'cms_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cms_category']->value) {
?>
        <div class="row">
          <div class="col-lg-9 col-lg-offset-3">
            <div class="panel">
              <div class="panel-heading">
                <?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      <input type="checkbox" name="checkme" id="checkme" class="noborder" onclick="checkDelBoxes(this.form, '<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
', this.checked)" />
                    </th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_category']->value['pages'], 'page', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>class="alt_row"<?php }?>>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'product_pages') {?>
                          <input type="checkbox" class="cmsBox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['page']->value['id_cms'],$_smarty_tpl->tpl_vars['fields_value']->value['content']['product'])) {?>checked="checked"<?php }?> />
                        <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'static_pages') {?>
                          <input type="checkbox" class="cmsBox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['page']->value['id_cms'],$_smarty_tpl->tpl_vars['fields_value']->value['content']['static'])) {?>checked="checked"<?php }?> />
                        <?php }?>
                      </td>
                      <td>
                        <label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_cms'];?>
">
                          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['title'] ));?>

                        </label>
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
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_pages') {?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
        <div class="row">
          <div class="col-lg-9 col-lg-offset-3">
            <div class="panel">
              <div class="panel-heading">
                <?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>

              </div>
              <table class="table js-custom-links-table-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
">
                <thead>
                <tr>
                  <th></th>
                  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL','d'=>'Modules.Linklist.Admin'),$_smarty_tpl ) );?>
</th>
                </tr>
                </thead>
                <tbody>
                <tr class="js-custom-link-row-template-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
" data-item="0" style="display: none">
                  <td class="col-md-1"><a href="#" class="js-clear-custom-link" style="display: none"><i class="material-icons action-disabled">&#xE14C;</i></a></td>
                  <td class="col-md-2">
                    <label class="control-label">
                      <input type="text" name="custom[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
][0][title]"/>
                    </label>
                  </td>
                  <td class="col-md-9">
                    <label class="control-label col-md-12">
                      <input type="text" name="custom[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
][0][url]"/>
                    </label>
                  </td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'][$_smarty_tpl->tpl_vars['lang']->value['id_lang']], 'page', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
                  <tr <?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>class="alt_row"<?php }?> data-item="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <td><a href="#" class="js-clear-custom-link"><i class="material-icons action-disabled">&#xE14C;</i></a></td>
                    <td>
                      <label class="control-label">
                        <input type="text" name="custom[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
"/>
                      </label>
                    </td>
                    <td>
                      <label class="control-label">
                        <input type="text" name="custom[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][url]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"/>
                      </label>
                    </td>
                  </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <div class="panel-footer">
                <a href="#" class="js-add-custom-link-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
 btn btn-default pull-right"><i class="process-icon-new"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
              </div>
            </div>
          </div>
        </div>

        <?php echo '<script'; ?>
 type="application/javascript">
          $(document).ready(function() {
            function clearCustomLink () {
              $(this).closest('tbody').find('tr:last-of-type > td > a.js-clear-custom-link').hide();
              $(this).closest('tr').remove();

              return false;
            }

            $('a.js-clear-custom-link').click(clearCustomLink);

            function addCustomLinkRow() {
              var tbody = $('table.js-custom-links-table-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
 > tbody');
              var lastTr = tbody.find('tr:last-of-type');
              var i = lastTr ? lastTr.data('item') + 1 : 0;

              tbody.find('tr:nth-last-of-type(2) > td > a').show();

              var tpl = $('tr.js-custom-link-row-template-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
').clone();
              tpl.removeClass('js-custom-link-row-template-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
');
              tpl.data('item', i);
              tpl.find('td:nth-of-type(2) input').attr('name', 'custom[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
][' + i + '][title]');
              tpl.find('td:nth-of-type(3) input').attr('name', 'custom[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
][' + i + '][url]');
              tpl.find('a.js-clear-custom-link').click(clearCustomLink);
              tpl.show();
              tbody.append(tpl);

              tbody.find('tr > td > a.js-clear-custom-link').show();
              tbody.find('tr:last-of-type > td > a.js-clear-custom-link').hide();
            }

            addCustomLinkRow();

            $('a.js-add-custom-link-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
').click(function () {
              addCustomLinkRow();

              return false;
            });
          });
        <?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input_row"} */
}
