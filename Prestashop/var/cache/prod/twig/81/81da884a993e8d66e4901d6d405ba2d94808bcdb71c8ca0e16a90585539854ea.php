<?php

/* __string_template__1e87e700d3a93855de698517a8d95f75ffa11eacb903be36722af300fc89c8e9 */
class __TwigTemplate_17c2889aa480f45f8c7dd9a6e649438d9f89a0f9eac73c2bcee1d6ae1263b7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"et\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/Prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/Prestashop/img/app_icon.png\" />

<title>Haldamine • Shogard</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminAdminPreferences';
    var iso_user = 'et';
    var lang_is_rtl = '0';
    var full_language_code = 'et';
    var full_cldr_language_code = 'et-ET';
    var country_iso_code = 'EE';
    var _PS_VERSION_ = '1.7.4.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Teie poes on esitatud uus tellimus.';
    var order_number_msg = 'Tellimuse number: ';
    var total_msg = 'Kokku: ';
    var from_msg = 'Alates: ';
    var see_order_msg = 'Vaata seda tellimust';
    var new_customer_msg = 'Teie poes on registreerunud uus klient.';
    var customer_name_msg = 'Kliendi nimi: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Loe seda sõnumit';
    var token = 'dd0dce41afe3f45b7d5bb33cc41a75ec';
    var token_admin_orders = '6289ea3134e3fc291273322f866e5c01';
    var token_admin_customers = '0d4a3e77cb54e907c07edc7ee4d3ba25';
    var token_admin_customer_threads = 'c4d45d8a90c55ffaff429a3dd00ec5ee';
    var currentIndex = 'index.php?controller=AdminAdminPreferences';
    var employee_token = '72466b5ac1dcdfae7efb2ae8a6adb329';
    var choose_language_translate = 'Valige keel';
    var default_language = '1';
    var admin_modules_link = '/Prestashop/admin5250vhshs/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o';
    var tab_modules_list = 'cgvhaas,pm_cachemanager,lgcookieslaw';
    var update_success_msg = 'Uuendamine õnnestus';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Otsi toodet';
  </script>

      <link href=\"/Prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/admin5250vhshs/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/admin5250vhshs/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/Prestashop\\/admin5250vhshs\\/\";
var baseDir = \"\\/Prestashop\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/Prestashop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/admin5250vhshs/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/admin.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/tools.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/admin5250vhshs/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/admin5250vhshs/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminGamification&token=8d8e247e6200cc532c6b422678f2f492';
\t\t\t\tvar current_id_tab = 102;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-et adminadminpreferences\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminDashboard&amp;token=e70c81f5fdd839431addcf8aab9f9b69\"></a>
    <span id=\"shop_version\">1.7.4.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Kiirlink
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=78ecde4bb58979fef08c2375d1ceb7ad\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Prestashop/admin5250vhshs/index.php/module/manage?token=9a03c181c65c29310b443807ddb157fb\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCategories&amp;addcategory&amp;token=878af99f95b89b600c1ae8ebf338a1a8\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Prestashop/admin5250vhshs/index.php/product/new?token=9a03c181c65c29310b443807ddb157fb\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=125c88396970900573e41f7b16cd13b4\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminOrders&amp;token=6289ea3134e3fc291273322f866e5c01\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"136\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/administration?-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\"
        data-post-link=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminQuickAccesses&token=b5481b0818f98a6ae0383c0c1e004dae\"
        data-prompt-text=\"Andke otseteele nimi:\"
        data-link=\"Administration - Nimekiri\"
      >
        <i class=\"material-icons\">add_circle</i>
        Lisa praegune leht Kiirlinkidele (QuickAccess)
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminQuickAccesses&token=b5481b0818f98a6ae0383c0c1e004dae\">
      <i class=\"material-icons\">settings</i>
      Kiirlinkide haldus
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/Prestashop/admin5250vhshs/index.php?controller=AdminSearch&amp;token=35145b7d078aa6ef36fd22043b690f6e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Otsing (nt: toote viide, kliendi nimi...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        igalpool
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"igalpool\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> igalpool</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Kataloog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Kataloog</a>
        <a class=\"dropdown-item\" data-item=\"Kliendid Nime järgi\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Kliendid Nime järgi</a>
        <a class=\"dropdown-item\" data-item=\"Kliendid IP aadressi järgi\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Kliendid iP-aadressi järgi</a>
        <a class=\"dropdown-item\" data-item=\"Tellimused\" href=\"#\" data-value=\"3\" data-placeholder=\"Tellimuse ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Tellimused</a>
        <a class=\"dropdown-item\" data-item=\"Arved\" href=\"#\" data-value=\"4\" data-placeholder=\"Arve number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Arved</a>
        <a class=\"dropdown-item\" data-item=\"Ostukorv\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Ostukorv</a>
        <a class=\"dropdown-item\" data-item=\"Moodulid\" href=\"#\" data-value=\"7\" data-placeholder=\"Mooduli nimi\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moodulid</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">OTSI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/Prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Vaata minu poodi
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Tellimused<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Kliendid<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Sõnumid<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Hetkel uut tellimust pole :(<br>
              Kas olete hiljuti vahetuskurssi kontrollinud?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Uusi kliente praegu pole :(<br>
              Kas olete mõelnud turuplatsidel müümisele?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Uusi sõnumeid hetkel pole.<br>
              See jätab rohkem aega kõigeks muuks!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      kuupäev <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/pukpuk.mitja%40inbox.ru.jpg\" />
      <span>Nick Ovtsinnikov</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminEmployees&amp;token=72466b5ac1dcdfae7efb2ae8a6adb329&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Teie profiil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminLogin&amp;token=246b4ce8565f8d8dc7ce732febce0767&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>välju</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminDashboard&amp;token=e70c81f5fdd839431addcf8aab9f9b69\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminOrders&amp;token=6289ea3134e3fc291273322f866e5c01\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Orders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminOrders&amp;token=6289ea3134e3fc291273322f866e5c01\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminInvoices&amp;token=8482ce5df0dd311fbc5b70c5327eb219\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminSlip&amp;token=e520e5418aa9405d850d59ada3768e84\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminDeliverySlip&amp;token=fd354833bb82ebcc90100dec2bbea85d\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCarts&amp;token=b8ace4bfb98866797e9d714b7613da4d\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/Prestashop/admin5250vhshs/index.php/product/catalog?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/product/catalog?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCategories&amp;token=878af99f95b89b600c1ae8ebf338a1a8\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminTracking&amp;token=0130b55852beb881303c7d2b2fd86d15\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminAttributesGroups&amp;token=cf143ef51d77076760c207bfe3487c23\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminManufacturers&amp;token=7ca0c102ce1cf2230c2883c3d70d0ed7\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminAttachments&amp;token=55db8677caf21864aa6800c49c8b4443\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCartRules&amp;token=125c88396970900573e41f7b16cd13b4\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/stock/?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCustomers&amp;token=0d4a3e77cb54e907c07edc7ee4d3ba25\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Customers
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCustomers&amp;token=0d4a3e77cb54e907c07edc7ee4d3ba25\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminAddresses&amp;token=46b16ce7d5b38c4c384f1d6708579384\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCustomerThreads&amp;token=c4d45d8a90c55ffaff429a3dd00ec5ee\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Customer Service
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCustomerThreads&amp;token=c4d45d8a90c55ffaff429a3dd00ec5ee\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminOrderMessage&amp;token=35b4e8d4d86f0fe5c9a082e80e21aadb\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminReturn&amp;token=c23bbd7514549069455fcc519dbb163f\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminStats&amp;token=78ecde4bb58979fef08c2375d1ceb7ad\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/Prestashop/admin5250vhshs/index.php/module/manage?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/module/manage?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/module/addons-store?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminThemes&amp;token=e820d6450dd498f3e824639b6efbfe98\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminThemes&amp;token=e820d6450dd498f3e824639b6efbfe98\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminThemesCatalog&amp;token=7647939e49ee2e4e9124a587af8138b0\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCmsContent&amp;token=ab665d2d65fc71de7f73d6a225aad3a8\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminModulesPositions&amp;token=cce66c47a9fa2407ed1ed86a84ee7624\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminImages&amp;token=0da9f4788a5c98841e9d1aebb26811ee\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminLinkWidget&amp;token=bece41ed3b5e14bdf24cdfcb719427d5\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCarriers&amp;token=ffb25d0c61e977280e820571751f2edc\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Shipping
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminCarriers&amp;token=ffb25d0c61e977280e820571751f2edc\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminShipping&amp;token=d56f22b56f9b79b9d411f56d4d9f3a0f\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminPayment&amp;token=e1d25734e22f7d571f877bfa55bbdd97\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Payment
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminPayment&amp;token=e1d25734e22f7d571f877bfa55bbdd97\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminPaymentPreferences&amp;token=adba23d1bfa22ceba5d6ef015b35604c\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminLocalization&amp;token=7875373501648a79de241b7403165df2\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminLocalization&amp;token=7875373501648a79de241b7403165df2\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminZones&amp;token=a490e6e128c9818cd30d4ad1bd139442\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminTaxes&amp;token=80289e5e70b64f7bd2cd60490dbe7d36\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminTranslations&amp;token=14a2c9bf8a7083ec6fa181839a4c63cb\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/Prestashop/admin5250vhshs/index.php/configure/shop/preferences?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Shop Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/shop/preferences?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminOrderPreferences&amp;token=6ee7d46850ebc197deb2ef8de607faa1\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/shop/product_preferences?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/shop/customer_preferences?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminContacts&amp;token=0455e476ef5a9d4f7e6df6393b8f49a5\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminMeta&amp;token=1d0ea7c98e387bbbb6e537d8f3feb176\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminSearchConf&amp;token=7bcae63c272b174c2d0419c18124cdc1\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminGamification&amp;token=8d8e247e6200cc532c6b422678f2f492\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/Prestashop/admin5250vhshs/index.php/configure/advanced/system_information?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Advanced Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/advanced/system_information?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/advanced/performance?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/advanced/administration?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminEmails&amp;token=33b260463c9d5416d4a6c7bc3a681ec2\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/advanced/import?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminEmployees&amp;token=72466b5ac1dcdfae7efb2ae8a6adb329\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminRequestSql&amp;token=d25f1de29b8a8db39e4db83c55e1e45d\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminLogs&amp;token=281bdd223004f3dcee5e7718e71dfe5d\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminWebservice&amp;token=e91fba5fbaac7fc484931b3e89d1bd2c\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/Prestashop/admin5250vhshs/index.php/configure/advanced/administration?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\" aria-current=\"page\">Administration</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Haldamine          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                              <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/Prestashop/admin5250vhshs/index.php/module/catalog?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Abi\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/Prestashop/admin5250vhshs/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fet%252Fdoc%252FAdminAdminPreferences%253Fversion%253D1.7.4.2%2526country%253Det/Abi?_token=cNDu2-J7pq3tQ6fvrzMGGxQRIP2x2eW2hFaS40B4q8o\"
                   id=\"product_form_open_help\"
                >
                  Abi
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ET&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/et/login?email=pukpuk.mitja%40inbox.ru&amp;firstname=Nick&amp;lastname=Ovtsinnikov&amp;website=http%3A%2F%2Flocalhost%2FPrestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ET&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Prestashop/admin5250vhshs/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Ühenda oma pood Prestashopi rakendustepoega, et importida automaatselt kõik oma lisade ostud.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Teil ei ole veel kontot?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ühenda PrestaShop Addon poega</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/et/forgot-your-password\">Unustasin oma salasõna</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/et/login?email=pukpuk.mitja%40inbox.ru&amp;firstname=Nick&amp;lastname=Ovtsinnikov&amp;website=http%3A%2F%2Flocalhost%2FPrestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ET&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sisene
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1119
        $this->displayBlock('content_header', $context, $blocks);
        // line 1120
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1121
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1122
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1123
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oo ei!</h1>
  <p class=\"mt-3\">
    Sellest lehest pole mobiiliversiooni veel saadaval.
  </p>
  <p class=\"mt-2\">
    Seni, kuni mobiilile kohandatud sait pole veel valmis, kasuta palun selle lehe vaatamiseks arvutit.
  </p>
  <p class=\"mt-2\">
    Aitäh!
  </p>
  <a href=\"http://localhost/Prestashop/admin5250vhshs/index.php?controller=AdminDashboard&amp;token=e70c81f5fdd839431addcf8aab9f9b69\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    tagasi
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ET&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/et/login?email=pukpuk.mitja%40inbox.ru&amp;firstname=Nick&amp;lastname=Ovtsinnikov&amp;website=http%3A%2F%2Flocalhost%2FPrestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ET&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Prestashop/admin5250vhshs/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Ühenda oma pood Prestashopi rakendustepoega, et importida automaatselt kõik oma lisade ostud.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Teil ei ole veel kontot?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ühenda PrestaShop Addon poega</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/et/forgot-your-password\">Unustasin oma salasõna</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/et/login?email=pukpuk.mitja%40inbox.ru&amp;firstname=Nick&amp;lastname=Ovtsinnikov&amp;website=http%3A%2F%2Flocalhost%2FPrestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ET&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sisene
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1232
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1119
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1120
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1121
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1122
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1232
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__1e87e700d3a93855de698517a8d95f75ffa11eacb903be36722af300fc89c8e9";
    }

    public function getDebugInfo()
    {
        return array (  1311 => 1232,  1306 => 1122,  1301 => 1121,  1296 => 1120,  1291 => 1119,  1282 => 82,  1274 => 1232,  1163 => 1123,  1160 => 1122,  1157 => 1121,  1154 => 1120,  1152 => 1119,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1e87e700d3a93855de698517a8d95f75ffa11eacb903be36722af300fc89c8e9", "");
    }
}
