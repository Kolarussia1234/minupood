<?php
/* Smarty version 3.1.32, created on 2018-08-13 13:33:09
  from 'C:\xampp\htdocs\Prestashop\themes\warehouse\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b715e657518e0_99029968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9854b9f4cef64a2bf653871ea49045e3d856a45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Prestashop\\themes\\warehouse\\templates\\_partials\\breadcrumb.tpl',
      1 => 1534151700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b715e657518e0_99029968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'inherit') {?><div class="container"><?php }?>

<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth') {?>
        <div class="container-fluid">
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth-bg') {?>
        <div class="container">
    <?php }?>
            <div class="row align-items-center">
                <div class="col">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8281326815b715e65745c47_19259796', 'breadcrumb');
?>

                    </ol>
                </div>
                <div class="col col-auto"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBreadcrumb'),$_smarty_tpl ) );?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth' || $_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth-bg') {?>
        </div>
        <?php }?>
</nav>
<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'inherit') {?></div><?php }
}
/* {block 'breadcrumb_item'} */
class Block_9198217505b715e65749f84_00792641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        </a>
                                        <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
                                    </li>
                                <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_8281326815b715e65745c47_19259796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_8281326815b715e65745c47_19259796',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_9198217505b715e65749f84_00792641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9198217505b715e65749f84_00792641', 'breadcrumb_item', $this->tplIndex);
?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'breadcrumb'} */
}
