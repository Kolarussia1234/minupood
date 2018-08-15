<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:16:54
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\_partials\_variants\footer-copyrights-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b714c869904b9_68358353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fee0f094209ae5317d0665cdc8877ad06810fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\_partials\\_variants\\footer-copyrights-1.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b714c869904b9_68358353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_status']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6973565895b714c86983150_50264663', 'footer_copyrights');
?>

<?php }
}
/* {block 'footer_copyrights'} */
class Block_6973565895b714c86983150_50264663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_copyrights' => 
  array (
    0 => 'Block_6973565895b714c86983150_50264663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="footer-copyrights" class="_footer-copyrights-1 dropup">
            <div class="container">
                <div class="row align-items-center">

                    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img']) {?>
                        <div class="<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt']) {?>col-sm-6 push-sm-6<?php } else { ?>col<?php }?> copyright-img text-right">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
"/>
                        </div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt']) {?>
                        <div class="<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img']) {?>col-sm-6 pull-sm-6<?php } else { ?>col<?php }?> copyright-txt">
                            <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt'];?>

                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    <?php
}
}
/* {/block 'footer_copyrights'} */
}
