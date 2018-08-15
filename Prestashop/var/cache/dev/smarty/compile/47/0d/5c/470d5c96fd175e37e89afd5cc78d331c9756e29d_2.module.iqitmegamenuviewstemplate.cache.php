<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:57:07
  from 'module:iqitmegamenuviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b716403e7c0b7_81242817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470d5c96fd175e37e89afd5cc78d331c9756e29d' => 
    array (
      0 => 'module:iqitmegamenuviewstemplate',
      1 => 1534151625,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqitmegamenu/views/templates/hook/_partials/products_grid.tpl' => 1,
    'module:iqitmegamenu/views/templates/hook/_partials/products_list.tpl' => 1,
    'module:iqitmegamenu/views/templates/hook/_partials/submenu_content.tpl' => 2,
  ),
),false)) {
function content_5b716403e7c0b7_81242817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_links' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Prestashop\\var\\cache\\dev\\smarty\\compile\\47\\0d\\5c\\470d5c96fd175e37e89afd5cc78d331c9756e29d_2.module.iqitmegamenuviewstemplate.cache.php',
    'uid' => '470d5c96fd175e37e89afd5cc78d331c9756e29d',
    'call_name' => 'smarty_template_function_categories_links_14919587665b716403d2b979_56075723',
  ),
));
$_smarty_tpl->compiled->nocache_hash = '14919587665b716403d2b979_56075723';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitmegamenu/views/templates/hook/_partials/submenu_content.tpl -->




<?php if ($_smarty_tpl->tpl_vars['node']->value['type'] == 1) {?>
<div class="row menu_row menu-element <?php if ($_smarty_tpl->tpl_vars['node']->value['depth'] == 0) {?> first_rows<?php }?> menu-element-id-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['elementId'], ENT_QUOTES, 'UTF-8');?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type'] == 2) {?>
    <div class="col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['width'], ENT_QUOTES, 'UTF-8');?>
 cbp-menu-column cbp-menu-element menu-element-id-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['elementId'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 0) {?>cbp-empty-column<?php }
if ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 6 && isset($_smarty_tpl->tpl_vars['node']->value['content']['absolute'])) {?> cbp-absolute-column<?php }?>">
        <div class="cbp-menu-column-inner">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['node']->value['type'] == 2) {?>

                <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['href'])) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content_s']['href'], ENT_QUOTES, 'UTF-8');?>
"
                           class="cbp-column-title nav-link<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view']) && $_smarty_tpl->tpl_vars['node']->value['content']['view'] == 2 && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 3) {?> cbp-column-title-inline<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content_s']['title'], ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'])) {?>
                                <span class="label cbp-legend cbp-legend-inner"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'], ENT_QUOTES, 'UTF-8');?>

                                <span class="cbp-legend-arrow"></span>
                                </span><?php }?></a>
                    <?php } else { ?>
                        <span class="cbp-column-title nav-link<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view']) && $_smarty_tpl->tpl_vars['node']->value['content']['view'] == 2 && $_smarty_tpl->tpl_vars['node']->value['contentType'] == 3) {?> cbp-column-title-inline<?php }?> transition-300"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content_s']['title'], ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'])) {?>
                                <span class="label cbp-legend cbp-legend-inner"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'], ENT_QUOTES, 'UTF-8');?>

                                <span class="cbp-legend-arrow"></span>
                                </span><?php }?></span>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 1) {?>

                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids']) && $_smarty_tpl->tpl_vars['node']->value['content']['ids']) {?>
                         <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['ids'];?>

                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 2) {?>

                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>

                        <?php if ($_smarty_tpl->tpl_vars['node']->value['content']['treep']) {?>
                            <div class="row cbp-categories-row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['content']['ids'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['category']->value['title'])) {?>
                                        <div class="col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['line'], ENT_QUOTES, 'UTF-8');?>
">
                                            <div class="cbp-category-link-w"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['href'], ENT_QUOTES, 'UTF-8');?>
"
                                                                                class="cbp-column-title nav-link cbp-category-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                                                <?php if (isset($_smarty_tpl->tpl_vars['category']->value['thumb']) && $_smarty_tpl->tpl_vars['category']->value['thumb'] != '') {?><a
                                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['href'], ENT_QUOTES, 'UTF-8');?>
" class="cbp-category-thumb"><img
                                                            class="replace-2x img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['thumb'], ENT_QUOTES, 'UTF-8');?>
"
                                                            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/></a><?php }?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
                                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_links', array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>1), false);?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php } else { ?>
                            <ul class="cbp-links cbp-category-tree">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['content']['ids'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['category']->value['title'])) {?>
                                        <li <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>class="cbp-hrsub-haslevel2"<?php }?>>
                                            <div class="cbp-category-link-w">
                                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['href'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>

                                                <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
                                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_links', array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>2), false);?>

                                                <?php }?>
                                            </div>
                                        </li>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 3) {?>

                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>
                        <ul class="cbp-links cbp-valinks<?php if (!$_smarty_tpl->tpl_vars['node']->value['content']['view']) {?> cbp-valinks-vertical<?php }
if ($_smarty_tpl->tpl_vars['node']->value['content']['view'] == 2) {?> cbp-valinks-vertical cbp-valinks-vertical2<?php }?>">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['content']['ids'], 'va_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['va_link']->value) {
?>
                                <?php if (isset($_smarty_tpl->tpl_vars['va_link']->value['href']) && isset($_smarty_tpl->tpl_vars['va_link']->value['title']) && $_smarty_tpl->tpl_vars['va_link']->value['href'] != '' && $_smarty_tpl->tpl_vars['va_link']->value['title'] != '') {?>
                                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['va_link']->value['href'], ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if (isset($_smarty_tpl->tpl_vars['va_link']->value['new_window']) && $_smarty_tpl->tpl_vars['va_link']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['va_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 4) {?>

                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>
                            <?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/products_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['node']->value['content']['ids'],'perline'=>$_smarty_tpl->tpl_vars['node']->value['content']['line']), 0, false);
?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['node']->value['content']['ids'],'perline'=>$_smarty_tpl->tpl_vars['node']->value['content']['line']), 0, false);
?>
                        <?php }?>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 5) {?>
                    <ul class="cbp-manufacturers row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['content']['ids'], 'manufacturer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('myfile', "img/m/".((string)$_smarty_tpl->tpl_vars['manufacturer']->value)."-small_default.jpg");?>
                            <?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
                                <li class="col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['line'], ENT_QUOTES, 'UTF-8');?>
 transition-opacity-300">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value), ENT_QUOTES, 'UTF-8');?>
"
                                       title="Manufacturer - <?php echo htmlspecialchars(Manufacturer::getNameById($_smarty_tpl->tpl_vars['manufacturer']->value), ENT_QUOTES, 'UTF-8');?>
">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_manu_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value, ENT_QUOTES, 'UTF-8');?>
-small_default.jpg"
                                             class="img-fluid logo_manufacturer " <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                             alt="Manufacturer - <?php echo htmlspecialchars(Manufacturer::getNameById($_smarty_tpl->tpl_vars['manufacturer']->value), ENT_QUOTES, 'UTF-8');?>
"/>
                                    </a>
                                </li>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 6) {?>

                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['source'])) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'])) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['href'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['source'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid cbp-banner-image"
                             <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['alt'])) {?>alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['alt'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['size'])) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['size']['w'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['size']['h'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                        <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'])) {?></a><?php }?>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType'] == 7) {?>
                    <ul class="cbp-manufacturers cbp-suppliers row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['content']['ids'], 'supplier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('myfile', "img/su/".((string)$_smarty_tpl->tpl_vars['supplier']->value)."-small_default.jpg");?>
                            <?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
                                <li class="col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['content']['line'], ENT_QUOTES, 'UTF-8');?>
 transition-opacity-300">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value), ENT_QUOTES, 'UTF-8');?>
"
                                       title="supplier - <?php echo htmlspecialchars(supplier::getNameById($_smarty_tpl->tpl_vars['supplier']->value), ENT_QUOTES, 'UTF-8');?>
">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_sup_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value, ENT_QUOTES, 'UTF-8');?>
-small_default.jpg"
                                             class="img-fluid logo_manufacturer logo_supplier" <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                             alt="supplier - <?php echo htmlspecialchars(supplier::getNameById($_smarty_tpl->tpl_vars['supplier']->value), ENT_QUOTES, 'UTF-8');?>
"/>
                                    </a>
                                </li>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>

            <?php }?>


            <?php if (isset($_smarty_tpl->tpl_vars['node']->value['children']) && count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['node']->value['type'] == 2) {?></div><?php }?>
    </div>
<!-- end C:\xampp\htdocs\Prestashop/modules/iqitmegamenu/views/templates/hook/_partials/submenu_content.tpl --><?php }
/* smarty_template_function_categories_links_14919587665b716403d2b979_56075723 */
if (!function_exists('smarty_template_function_categories_links_14919587665b716403d2b979_56075723')) {
function smarty_template_function_categories_links_14919587665b716403d2b979_56075723(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'level'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul class="<?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>cbp-links cbp-category-tree<?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 2) {?>cbp-hrsub-level2<?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 3) {?>cbp-hrsub-level2 cbp-hrsub-level3<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
if (isset($_smarty_tpl->tpl_vars['category']->value['title'])) {?><li <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?> class="<?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>cbp-hrsub-haslevel2<?php } else { ?>cbp-hrsub-haslevel3<?php }?>" <?php }?>><div class="cbp-category-link-w"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['href'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a><?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_links', array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), false);
}?></div></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
<?php
}}
/*/ smarty_template_function_categories_links_14919587665b716403d2b979_56075723 */
}
