<?php
/* Smarty version 3.1.32, created on 2018-08-12 16:33:05
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70371151de98_54779758',
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
function content_5b70371151de98_54779758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/Prestashop/ru/my-account" rel="nofollow">
      Ваша учетная запись
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Ваша учетная запись</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/Prestashop/ru/identity" title="Личные данные" rel="nofollow">
            Личные данные
          </a>
        </li>
            <li>
          <a href="http://localhost/Prestashop/ru/order-history" title="Заказы" rel="nofollow">
            Заказы
          </a>
        </li>
            <li>
          <a href="http://localhost/Prestashop/ru/credit-slip" title="Кредитные квитанции" rel="nofollow">
            Кредитные квитанции
          </a>
        </li>
            <li>
          <a href="http://localhost/Prestashop/ru/addresses" title="Адреса" rel="nofollow">
            Адреса
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
