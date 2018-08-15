<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:56
  from 'module:iqitsizechartsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71535444a7f8_87646181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2359419d28bcec2fc478c8c1c7c1bbfd34bef8a8' => 
    array (
      0 => 'module:iqitsizechartsviewstempla',
      1 => 1534151627,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71535444a7f8_87646181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5604570955b715354438d79_28047836';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitsizecharts/views/templates/hook/iqitsizecharts.tpl -->
<?php if (isset($_smarty_tpl->tpl_vars['charts']->value) && $_smarty_tpl->tpl_vars['charts']->value) {?>

    <button class="btn btn-secondary mt-3" data-button-action="open-iqitsizecharts" type="button" data-toggle="modal" data-target="#iqitsizecharts-modal">
        <i class="fa fa-table"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size chart','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

    </button>

    <div class="modal fade js-iqitsizecharts-modal" id="iqitsizecharts-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                        <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size charts','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charts']->value, 'chart', false, 'i', 'charts', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['chart']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['index'];
?>
                        <li class="nav-item">
                            <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['first'] : null)) {?> active<?php }?>" data-toggle="tab" href="#iqitcharts-tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart']->value['title'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <div class="tab-content" id="tab-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charts']->value, 'chart', false, 'i', 'charts', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['chart']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['index'];
?>
                    <div class="tab-pane in<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_charts']->value['first'] : null)) {?> active<?php }?>" id="iqitcharts-tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <div class="rte-content"><?php echo $_smarty_tpl->tpl_vars['chart']->value['description'];?>
</div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }?><!-- end C:\xampp\htdocs\Prestashop/modules/iqitsizecharts/views/templates/hook/iqitsizecharts.tpl --><?php }
}
