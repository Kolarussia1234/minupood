<?php
/* Smarty version 3.1.32, created on 2018-08-12 16:33:29
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b703729c38c57_34762610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1534079526,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5b703729c38c57_34762610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/Prestashop/et/my-account" rel="nofollow">
      Teie konto
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Teie konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/Prestashop/et/identity" title="Isikuandmed" rel="nofollow">
            Isikuandmed
          </a>
        </li>
            <li>
          <a href="http://localhost/Prestashop/et/order-history" title="Tellimused" rel="nofollow">
            Tellimused
          </a>
        </li>
            <li>
          <a href="http://localhost/Prestashop/et/credit-slip" title="Kreeditarved" rel="nofollow">
            Kreeditarved
          </a>
        </li>
            <li>
          <a href="http://localhost/Prestashop/et/addresses" title="Aadressid" rel="nofollow">
            Aadressid
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
