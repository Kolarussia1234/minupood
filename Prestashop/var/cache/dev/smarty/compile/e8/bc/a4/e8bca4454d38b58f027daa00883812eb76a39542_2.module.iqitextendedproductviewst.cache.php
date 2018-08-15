<?php
/* Smarty version 3.1.32, created on 2018-08-13 12:45:55
  from 'module:iqitextendedproductviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715353a5c2b4_86058356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8bca4454d38b58f027daa00883812eb76a39542' => 
    array (
      0 => 'module:iqitextendedproductviewst',
      1 => 1534151623,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715353a5c2b4_86058356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12777324025b715353a4f9e0_35230855';
?>
<!-- begin C:\xampp\htdocs\Prestashop/modules/iqitextendedproduct/views/templates/hook/below-thumbs.tpl -->
<?php if (isset($_smarty_tpl->tpl_vars['productVideoContent']->value) && $_smarty_tpl->tpl_vars['productVideoContent']->value) {?>
    <button class="btn btn-secondary mr-1 ml-1" data-button-action="open-iqitvideos" type="button" data-toggle="modal"
            data-target="#iqit-iqitvideos-modal">
        <i class="fa fa-play"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Play videos','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

    </button>
    <div class="modal fade js-iqit-iqitvideos-modal" id="iqit-iqitvideos-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Videos','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="iqitvideos-block" class="iqitvideos-block">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productVideoContent']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                            <div class="iqitvideo">
                                <iframe class="iframe" width="100%" height="300"
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'youtube') {?>src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
?rel=0&showinfo=0"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'dailymotion') {?>src="//www.dailymotion.com/embed/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'vimeo') {?>src="//player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                ></iframe>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['isThreeSixtyContent']->value) && $_smarty_tpl->tpl_vars['isThreeSixtyContent']->value) {?>
    <button class="btn btn-secondary mr-1 ml-1" data-button-action="open-iqitthreesixty" type="button" data-toggle="modal"
            data-target="#iqit-threesixty-modal">
        <i class="fa fa-arrows-h"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'360 view','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

    </button>
    <div class="modal fade js-iqit-threesixty-modal" id="iqit-threesixty-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag or swipe on image','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="iqit-threesixty" data-threesixty="<?php echo $_smarty_tpl->tpl_vars['threeSixtyContent']->value;?>
"><i class="fa fa-circle-o-notch fa-spin fa-2x "></i></div>
                </div>
            </div>
        </div>
    </div>
<?php }?>






<!-- end C:\xampp\htdocs\Prestashop/modules/iqitextendedproduct/views/templates/hook/below-thumbs.tpl --><?php }
}
