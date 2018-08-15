<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:54
  from 'module:iqitcontactpageviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c863cb859_09885872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee752603de038a9aef5378771f6bf531aa9e40f3' => 
    array (
      0 => 'module:iqitcontactpageviewstempl',
      1 => 1534151613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqitcontactpage/views/templates/hook/_partials/content.tpl' => 1,
  ),
),false)) {
function content_5b714c863cb859_09885872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '18120865055b714c863c6a15_98665257';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitcontactpage/views/templates/hook/iqitcontactpage-block.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20156239605b714c863c81c6_11704045', 'iqitcontactpage-info-block');
?>

<!-- end C:\xampp\htdocs\Prestashop/modules/iqitcontactpage/views/templates/hook/iqitcontactpage-block.tpl --><?php }
/* {block 'iqitcontactpage-info-block'} */
class Block_20156239605b714c863c81c6_11704045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcontactpage-info-block' => 
  array (
    0 => 'Block_20156239605b714c863c81c6_11704045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col col-md block block-toggle block-iqitcontactpage js-block-toggle">
        <h5 class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'iqitcontactpage'),$_smarty_tpl ) );?>
</span></h5>
        <div class="block-content">
            <?php $_smarty_tpl->_subTemplateRender('module:iqitcontactpage/views/templates/hook/_partials/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
<?php
}
}
/* {/block 'iqitcontactpage-info-block'} */
}
