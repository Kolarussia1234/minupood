<?php

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'product_catalog_tools' => array($this, 'block_product_catalog_tools'),
            'product_catalog_filters' => array($this, 'block_product_catalog_filters'),
            'product_catalog_form' => array($this, 'block_product_catalog_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categories"] ?? $this->getContext($context, "categories")), array(0 => "PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig"), true);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "  <div class=\"products-catalog\">

    ";
        // line 40
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 44
        if (twig_length_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")))) {
            // line 45
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 52
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 58
        echo "
      <div class=\"row align-items-start\">
        ";
        // line 60
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 73
        echo "      </div>

      ";
        // line 75
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 99
        echo "
    </div>
  </div>

  ";
        // line 104
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104, "1612558710")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 123
        echo "

  ";
        // line 126
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126, "1319713870")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 145
        echo "

  ";
        // line 148
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148, "354677397")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 167
        echo "

  ";
        // line 170
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170, "1983790683")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 189
        echo "

  ";
        // line 192
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192, "132049922")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 209
        echo "
  ";
        // line 210
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210, "1283447921")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 230
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_product_catalog_tools($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_tools"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_tools"));

        // line 61
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", array("import_link" => ($context["import_link"] ?? $this->getContext($context, "import_link"))));
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_product_catalog_filters($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        // line 65
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", array("limit" =>         // line 66
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 67
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 68
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 69
($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))));
        // line 71
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_product_catalog_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form"));

        // line 76
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", array("limit" =>         // line 77
($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" =>         // line 78
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "offset" =>         // line 79
($context["offset"] ?? $this->getContext($context, "offset")), "sortOrder" =>         // line 80
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "filter_category" =>         // line 81
($context["filter_category"] ?? $this->getContext($context, "filter_category")), "filter_column_id_product" =>         // line 82
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "filter_column_name" =>         // line 83
($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "filter_column_reference" =>         // line 84
($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "filter_column_name_category" =>         // line 85
($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "filter_column_price" =>         // line 86
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "filter_column_sav_quantity" =>         // line 87
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "filter_column_active" =>         // line 88
($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")), "has_category_filter" =>         // line 89
($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")), "activate_drag_and_drop" =>         // line 90
($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")), "products" =>         // line 91
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 92
($context["last_sql"] ?? $this->getContext($context, "last_sql")), "product_count_filtered" =>         // line 93
($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "pagination_parameters" =>         // line 94
($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "pagination_limit_choices" =>         // line 95
($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices"))));
        // line 97
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8_1612558710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 104
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 115
        echo "      <div class=\"modal-body\">
        ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 118,  599 => 116,  596 => 115,  587 => 114,  558 => 104,  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8_1319713870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 126
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 136
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 137
        echo "      <div class=\"modal-body\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 140,  927 => 138,  924 => 137,  915 => 136,  886 => 126,  604 => 118,  599 => 116,  596 => 115,  587 => 114,  558 => 104,  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8_354677397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 148
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 158
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 159
        echo "      <div class=\"modal-body\">
        ";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1260 => 162,  1255 => 160,  1252 => 159,  1243 => 158,  1214 => 148,  932 => 140,  927 => 138,  924 => 137,  915 => 136,  886 => 126,  604 => 118,  599 => 116,  596 => 115,  587 => 114,  558 => 104,  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8_1983790683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 170
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 180
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 181
        echo "      <div class=\"modal-body\">
        ";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1588 => 184,  1583 => 182,  1580 => 181,  1571 => 180,  1542 => 170,  1260 => 162,  1255 => 160,  1252 => 159,  1243 => 158,  1214 => 148,  932 => 140,  927 => 138,  924 => 137,  915 => 136,  886 => 126,  604 => 118,  599 => 116,  596 => 115,  587 => 114,  558 => 104,  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8_132049922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 192
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 203
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 204
        echo "      <div class=\"modal-body\">
        ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1911 => 205,  1908 => 204,  1899 => 203,  1870 => 192,  1588 => 184,  1583 => 182,  1580 => 181,  1571 => 180,  1542 => 170,  1260 => 162,  1255 => 160,  1252 => 159,  1243 => 158,  1214 => 148,  932 => 140,  927 => 138,  924 => 137,  915 => 136,  886 => 126,  604 => 118,  599 => 116,  596 => 115,  587 => 114,  558 => 104,  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_9fba46c7da74b599f81bc8feceac5a4ba4a81def800b726616a8355969a673f8_1283447921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 210
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 221
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 222
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2230 => 222,  2221 => 221,  2192 => 210,  1911 => 205,  1908 => 204,  1899 => 203,  1870 => 192,  1588 => 184,  1583 => 182,  1580 => 181,  1571 => 180,  1542 => 170,  1260 => 162,  1255 => 160,  1252 => 159,  1243 => 158,  1214 => 148,  932 => 140,  927 => 138,  924 => 137,  915 => 136,  886 => 126,  604 => 118,  599 => 116,  596 => 115,  587 => 114,  558 => 104,  279 => 97,  277 => 95,  276 => 94,  275 => 93,  274 => 92,  273 => 91,  272 => 90,  271 => 89,  270 => 88,  269 => 87,  268 => 86,  267 => 85,  266 => 84,  265 => 83,  264 => 82,  263 => 81,  262 => 80,  261 => 79,  260 => 78,  259 => 77,  257 => 76,  248 => 75,  237 => 71,  235 => 69,  234 => 68,  233 => 67,  232 => 66,  230 => 65,  221 => 64,  208 => 61,  199 => 60,  188 => 230,  186 => 210,  183 => 209,  180 => 192,  176 => 189,  173 => 170,  169 => 167,  166 => 148,  162 => 145,  159 => 126,  155 => 123,  152 => 104,  146 => 99,  144 => 75,  140 => 73,  138 => 64,  135 => 63,  133 => 60,  129 => 58,  120 => 52,  111 => 45,  109 => 44,  102 => 40,  98 => 38,  89 => 37,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  56 => 29,  47 => 28,  37 => 25,  35 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories 'PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row align-items-start\">
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}

        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}
