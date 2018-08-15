<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:56:14
  from 'C:\xampp\htdocs\Prestashop\modules\iqitmegamenu\views\templates\admin\_configure\helpers\form\column_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7163ce564b49_70599919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb085e4ba6edb3a345efedfb992bc7b9a63245eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitmegamenu\\views\\templates\\admin\\_configure\\helpers\\form\\column_content.tpl',
      1 => 1534151625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./subcategory.tpl' => 2,
  ),
),false)) {
function content_5b7163ce564b49_70599919 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="menu-column-content">
		<p>
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column width','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
:</label>

			<select class="select-column-width">
				<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width'])) {
if ($_smarty_tpl->tpl_vars['node']->value['width'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['i']->value == 3) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/12</option>
				<?php }
}
?>
			</select>
		</p>
		<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column content','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
:</label>
		<p class="column-content-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Empty','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</p>
		<p class="edit-btn-wrapper"><button type="button" class="btn btn-default column-content-edit"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit content','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button></p>

		<div class="modal fade column-content-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">

						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column title','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>


							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" type="text" class="column-title-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional column title','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

									</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
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
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column title link','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>


							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" type="text" class="column-href-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional link. Use entire url with http:// prefix','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
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
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title legend','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>


							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" type="text" class="column-legend-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional additional text showed in tooltip','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

									</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
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
							<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content type','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
							<select class="select-column-content col-lg-9">
								<option value="7" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 7) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers logos','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="6" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 6) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Banner image','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 5) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturers logos','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 4) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 3) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Various links','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 2) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories tree','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Html Content','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])) {
if ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 0) {?>selected<?php }
} else { ?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Empty','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>

							</select></div>

					<div class="htmlcontent-wrapper content-options-wrapper">
							<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Html content','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>
								<select class="select-customhtml col-lg-9">
							<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No content','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_html_select']->value, 'customhtml');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customhtml']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['customhtml']->value['id_html'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['content']['ids'] == $_smarty_tpl->tpl_vars['customhtml']->value['id_html']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['customhtml']->value['title'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>




						</div>
					</div>

					<div class="categorytree-wrapper content-options-wrapper">

						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-categories-ids col-lg-9" multiple="multiple" style="height: 160px;">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_select']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 2 && in_array($_smarty_tpl->tpl_vars['category']->value['id'],$_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>selected<?php }?> disabled><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>

										<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
											<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 2) {?>
												<?php $_smarty_tpl->_subTemplateRender("file:./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'ids'=>$_smarty_tpl->tpl_vars['node']->value['content']['ids'],'type'=>$_smarty_tpl->tpl_vars['node']->value['contentType']), 0, true);
?>
											<?php } else { ?>
												<?php $_smarty_tpl->_subTemplateRender("file:./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children']), 0, true);
?>
											<?php }?>
										<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected categories as tree root','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9"><select class="select-categories-treep">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['treep']) && $_smarty_tpl->tpl_vars['node']->value['content']['treep'] == 1) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['treep']) && $_smarty_tpl->tpl_vars['node']->value['content']['treep'] == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								</select>
							<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If enabled each selected category will have block title style. Enable only if you selecting categories with subcategories','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p></div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show category thumb','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9"><select class="select-categories-thumb">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['thumb']) && $_smarty_tpl->tpl_vars['node']->value['content']['thumb'] == 1) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['thumb']) && $_smarty_tpl->tpl_vars['node']->value['content']['thumb'] == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								</select>
							<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It works only with enabled option "selected categories as tree root". It will show first menu thumbail. You can define menu thumbail during category edit.','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p></div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories per line','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9"><select class="select-categories-line">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 2) {?>selected<?php }?>>6</option>
								</select>
								<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If Selected categories as root is enabled, you can decide how meny cats per row to show','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p>
							</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Depth limit','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-categories-depth col-lg-9">
									<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['depth']) && $_smarty_tpl->tpl_vars['node']->value['content']['depth'] == 4) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'4','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['depth']) && $_smarty_tpl->tpl_vars['node']->value['content']['depth'] == 3) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['depth']) && $_smarty_tpl->tpl_vars['node']->value['content']['depth'] == 2) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['depth']) && $_smarty_tpl->tpl_vars['node']->value['content']['depth'] == 1) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['depth']) && $_smarty_tpl->tpl_vars['node']->value['content']['depth'] == 0) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'0','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories limit','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-sublimit">
									<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 5;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 60+1 - (5) : 5-(60)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 5, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['sublimit'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content']['sublimit'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['i']->value == 15) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
									<?php }
}
?>
								</select>
							<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If limit will be reach, they will be not showed. Helpfull if you have some category with long list of subcategories','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p></div>
							</div>
					</div>

					<div class="va-links-wrapper content-options-wrapper <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>va-links-wrapper-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>">
							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select links','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								 <?php echo $_smarty_tpl->tpl_vars['va_links_select']->value;?>

								<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 3) {?>
								<?php echo '<script'; ?>
>
								$(".<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>va-links-wrapper-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?> .select-links-ids").val(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['content']['ids'] ));?>
);
								<?php echo '</script'; ?>
>
								<?php }?>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select view','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-links-view col-lg-9">
									<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view']) && $_smarty_tpl->tpl_vars['node']->value['content']['view'] == 2) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Horizontal(with column title inline)','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view']) && $_smarty_tpl->tpl_vars['node']->value['content']['view'] == 1) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vertical','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content']['view'] == 0) {?>selected<?php }
} else { ?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Horizontal(with column title above)','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								</select>
							</div>
					</div>

					<div class="column-image-wrapper content-options-wrapper">

						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image source','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['source'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['source'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" type="text" class="image-source image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" name="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {
echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"  id="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {
echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" >
									<a href="filemanager/dialog.php?type=1&field_id=<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {
echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="btn btn-default iframe-column-upload"  data-input-name="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {
echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 <i class="icon-angle-right"></i></a>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
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
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image link','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" type="text" class="image-href-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional link. Use entire url with http:// prefix','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
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
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alt tag(image description)','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</label>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['alt'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['alt'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" type="text" class="image-alt-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
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
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Absolute positions','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<select class="select-image-absolute">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['absolute']) && $_smarty_tpl->tpl_vars['node']->value['content']['absolute'] == 1) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['absolute'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content']['absolute'] == 0) {?>selected<?php }
} else { ?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								</select>
								<p class="help-block">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to that option you can position image for example in a corner of submenu. You can use - values. If you want to position in right bottom corner set values like: right: -20, bottom: -20, left: , top: . Two values should be always empty. You should not set column title or style when this option is enabled','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

								</p>
								</div>
							</div>

						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['i_a_t'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['i_a_t'];
}?>" type="text" class="image-absolute-t">
								</div>
						</div>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['i_a_r'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['i_a_r'];
}?>" type="text" class="image-absolute-r">
								</div>
						</div>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bottom','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['i_a_b'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['i_a_b'];
}?>" type="text" class="image-absolute-b">
								</div>
						</div>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['i_a_l'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content']['i_a_l'];
}?>" type="text" class="image-absolute-l">
								</div>
						</div>


					</div>


					<div class="products-wrapper content-options-wrapper">
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search product','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9"><div class="autocomplete-wrapper"><input type="text" class="product-autocomplete form-control" ></div></div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected products','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
								<select class="select-products-ids" multiple="multiple" style="height: 160px;">
								<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 4) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['content']['ids'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" >(ID: <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
) <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
								</select>
								<br />
								<button type="button" class="btn btn-danger remove-products-ids"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove selected','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select view','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-products-view col-lg-9">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view']) && $_smarty_tpl->tpl_vars['node']->value['content']['view'] == 1) {?>selected<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid(big image + product name below)','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view']) && $_smarty_tpl->tpl_vars['node']->value['content']['view'] == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List(small image + product name next to it)','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
								</select>
							</div>

							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products per line','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-products-line col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 2) {?>selected<?php }?>>6</option>
								</select>
							</div>




					</div>

					<div class="manufacturers-wrapper content-options-wrapper">
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select manufacturers','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-manufacturers-ids col-lg-9" multiple="multiple" style="height: 160px;">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers_select']->value, 'manufacturer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 5 && in_array($_smarty_tpl->tpl_vars['manufacturer']->value['id'],$_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logos per line','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-manufacturers-line col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 2) {?>selected<?php }?>>6</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 1) {?>selected<?php }?>>12</option>
								</select>
							</div>
					</div>

					<div class="suppliers-wrapper content-options-wrapper">
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select suppliers','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-suppliers-ids col-lg-9" multiple="multiple" style="height: 160px;">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers_select']->value, 'supplier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 7 && in_array($_smarty_tpl->tpl_vars['supplier']->value['id'],$_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logos per line','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</label>
								<select class="select-suppliers-line col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 2) {?>selected<?php }?>>6</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line']) && $_smarty_tpl->tpl_vars['node']->value['content']['line'] == 1) {?>selected<?php }?>>12</option>
								</select>
							</div>
					</div>


					<div class="style-wrapper clearfix">
						<div class="col-lg-9 col-md-offset-3">
						<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional column style fields','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

							</p>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Backgrund color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-10">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="column_bg_color <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>column_bg_color-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>"	name="column_bg_color" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['bg_color'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['bg_color'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title border color if exist','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="title_borderc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_borderc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_borderc'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_borderc'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="title_color <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_color-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_color'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_color'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>

						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title hover color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="title_colorh <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_colorh-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_colorh'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_colorh'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title legend backgrund color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="legend_bg <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>legend_bg-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>"	name="legend_bg" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend_bg'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend_bg'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>

						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title legend text color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="legend_txt <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>legend_txt-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>"	name="legend_txt" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend_txt'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend_txt'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="txt_color <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>txt_color-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['txt_color'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['txt_color'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>

						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text hover color','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" data-hex="true" class="txt_colorh <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>txt_colorh-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['txt_colorh'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['txt_colorh'];
}?>" />
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>



					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Border top','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_top_st" class="br_top_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'] == 5) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'] == 4) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'] == 3) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'] == 2) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'] == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'] == 0) {?>selected<?php }
} else { ?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_top_wh" class="br_top_wh">
												<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_wh'])) {
if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_wh']) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }
}
?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" data-hex="true" class="br_top_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_top_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_c'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_c'];
}?>" />
														</div>
													</div>
												</div>
											</div>

										</div>


									</div>

							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Border right','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_right_st" class="br_right_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'] == 5) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'] == 4) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'] == 3) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'] == 2) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'] == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'] == 0) {?>selected<?php }
} else { ?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_right_wh" class="br_right_wh">
												<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_wh'])) {
if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_wh']) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }
}
?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" data-hex="true" class="br_right_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_right_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_c'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_c'];
}?>" />
														</div>
													</div>
												</div>
											</div>

										</div>

									</div>

							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Border bottom','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_bottom_st" class="br_bottom_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'] == 5) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'] == 4) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'] == 3) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'] == 2) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'] == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'] == 0) {?>selected<?php }
} else { ?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_bottom_wh" class="br_bottom_wh">
												<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_wh'])) {
if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_wh']) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }
}
?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" data-hex="true" class="br_bottom_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_bottom_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_c'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_c'];
}?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>

							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Border left','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_left_st" class="br_left_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'] == 5) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'] == 4) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'] == 3) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'] == 2) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'] == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])) {
if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'] == 0) {?>selected<?php }
} else { ?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_left_wh" class="br_left_wh">
												<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_wh'])) {
if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_wh']) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }
}
?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" data-hex="true" class="br_left_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_left_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];
}?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_c'])) {
echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_c'];
}?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>

							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Padding','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-9 ">
					<div class="column-checkbox"><input type="checkbox" class="c-padding-top" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_t']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_t'] == 1) {?>checked<?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-padding-right" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_r']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_r'] == 1) {?>checked<?php }?> > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-padding-bottom" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_b']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_b'] == 1) {?>checked<?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bottom','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-padding-left" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_l']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_l'] == 1) {?>checked<?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you enabled borders or custom background color it maybe needed to add padding for better effect','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

					</p>
					</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Negative margin','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

						</label>
					<div class="col-lg-9 ">
					<div class="column-checkbox"><input type="checkbox" class="c-margin-top" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_t']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_t'] == 1) {?>checked<?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-margin-right" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_r']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_r'] == 1) {?>checked<?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-margin-left" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_l']) && $_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_l'] == 1) {?>checked<?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
 </div>
					<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you enabled padding, it maybe needed to add negative margin. For example you added background and padding only in one column from a row and you want to position title on the same height as other blocks, you have to add top negative margin.','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

					</p>
					</div>
					</div>



					</div>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>
</button>
					</div>
				</div>
			</div>
		</div>



	</div>


<?php }
}
