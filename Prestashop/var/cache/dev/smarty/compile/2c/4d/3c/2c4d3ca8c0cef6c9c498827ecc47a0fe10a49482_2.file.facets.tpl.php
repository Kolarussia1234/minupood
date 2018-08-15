<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:06
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\catalog\_partials\facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e621f33e0_62587246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4d3ca8c0cef6c9c498827ecc47a0fe10a49482' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\facets.tpl',
      1 => 1534151699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715e621f33e0_62587246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <div id="search_filters">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_415419675b715e6216bea5_60309131', 'facets_title');
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
        <aside class="facet clearfix">
          <h4 class="block-title facet-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></h4>
          <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
          <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12536059155b715e621b01f4_34793044', 'facet_item_other');
?>


          <?php } else { ?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20894056575b715e621d7743_37392614', 'facet_item_dropdown');
?>

          <?php }?>
        </aside>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
/* {block 'facets_title'} */
class Block_415419675b715e6216bea5_60309131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_415419675b715e6216bea5_60309131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'facets_title'} */
/* {block 'facet_item_other'} */
class Block_12536059155b715e621b01f4_34793044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_12536059155b715e621b01f4_34793044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['widgetType'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['properties']['color']) || isset($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['properties']['texture'])) {?> facet_color<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                    <li>
                      <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                          <span class="custom-checkbox"
                                <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']) || isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                    data-toggle="tooltip"
                                    data-animation="false"
                                    data-placement="top"
                                    data-original-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>"
                                <?php }?>
                          >
                            <input
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="checkbox"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                              <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                              <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                              <?php } else { ?>
                              <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="fa fa-check checkbox-checked" aria-hidden="true"></i></span>
                            <?php }?>
                          </span>
                        <?php } else { ?>
                          <span class="custom-radio">
                            <input
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="radio"
                              name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                          </span>
                        <?php }?>

                          <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']) && !isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                             <a
                                     href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                     class="_gray-darker search-link js-search-link"
                                     rel="nofollow"
                             >
                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                 <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                                     <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                 <?php }?>
                             </a>
                         <?php }?>
                      </label>
                    </li>
                  <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_20894056575b715e621d7743_37392614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_20894056575b715e621d7743_37392614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="">
                <li>
                  <div class="facet-dropdown dropdown">
                    <a class="form-control select-title expand-more" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                      <span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                          <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                        <?php }?>
                      </span>
                        <i class="fa fa-angle-down drop-icon" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>

                          <a
                            rel="nofollow"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            class="select-list dropdown-item <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>current<?php }?> search-link js-search-link"
                          >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                              <i class="fa fa-times" aria-hidden="true"></i>
                          <?php }?>
                          </a>

                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </li>
              </ul>
            <?php
}
}
/* {/block 'facet_item_dropdown'} */
}
