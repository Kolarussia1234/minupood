<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:52:40
  from 'C:\xampp\htdocs\Prestashop\modules\iqitelementor\views\templates\admin\iqitelementor\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7154e8f209a0_86559807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766018cda0d180d09f342aef98321677d1affebf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\modules\\iqitelementor\\views\\templates\\admin\\iqitelementor\\helpers\\form\\form.tpl',
      1 => 1534151622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7154e8f209a0_86559807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11199477135b7154e8ef6620_53629156', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_11199477135b7154e8ef6620_53629156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_11199477135b7154e8ef6620_53629156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'elementor_trigger') {?>

        <div class="form-group">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <?php if ($_smarty_tpl->tpl_vars['input']->value['url']) {?>
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['url'],'html','UTF-8' ));?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Save page first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

                <?php }?>
            </div>
        </div>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input_row"} */
}
