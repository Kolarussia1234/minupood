<?php

/* @Product/CatalogPage/Forms/form_products.html.twig */
class __TwigTemplate_27993a17eb47b1cca924bcdbb2f5f016f8a833aec5bbe19034483b82fdee2822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_form_table' => array($this, 'block_product_catalog_form_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_products.html.twig"));

        // line 25
        echo "<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
  orderingurl=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => "name", "sortOrder" => "asc")), "html", null, true);
        echo "\"
  newproducturl=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
    ";
        // line 41
        $this->displayBlock('product_catalog_form_table', $context, $blocks);
        // line 62
        echo "    </div>
  </div>

  ";
        // line 65
        if ((($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 66
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
            // line 68
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 69
($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "total" => ($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "caller_parameters" => ($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "limit_choices" => ($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices")))));
            // line 70
            echo "
      </div>
    </div>
  ";
        }
        // line 74
        echo "</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_product_catalog_form_table($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table"));

        // line 42
        echo "      ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Lists/products_table.html.twig", array("limit" =>         // line 43
($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" =>         // line 44
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "offset" =>         // line 45
($context["offset"] ?? $this->getContext($context, "offset")), "sortOrder" =>         // line 46
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "filter_category" =>         // line 47
($context["filter_category"] ?? $this->getContext($context, "filter_category")), "filter_column_id_product" =>         // line 48
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "filter_column_name" =>         // line 49
($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "filter_column_reference" =>         // line 50
($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "filter_column_name_category" =>         // line 51
($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "filter_column_price" =>         // line 52
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "filter_column_sav_quantity" =>         // line 53
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "filter_column_active" =>         // line 54
($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")), "has_category_filter" =>         // line 55
($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")), "activate_drag_and_drop" =>         // line 56
($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")), "products" =>         // line 57
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 58
($context["last_sql"] ?? $this->getContext($context, "last_sql"))));
        // line 60
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 60,  115 => 58,  114 => 57,  113 => 56,  112 => 55,  111 => 54,  110 => 53,  109 => 52,  108 => 51,  107 => 50,  106 => 49,  105 => 48,  104 => 47,  103 => 46,  102 => 45,  101 => 44,  100 => 43,  98 => 42,  89 => 41,  78 => 74,  72 => 70,  70 => 69,  69 => 68,  65 => 66,  63 => 65,  58 => 62,  56 => 41,  47 => 35,  40 => 31,  36 => 30,  32 => 29,  26 => 25,);
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
<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
  orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
  newproducturl=\"{{ path('admin_product_new') }}\"
>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
    {% block product_catalog_form_table %}
      {{ include('@Product/CatalogPage/Lists/products_table.html.twig', {
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
          'filter_column_active':filter_column_active,
          'has_category_filter': has_category_filter,
          'activate_drag_and_drop': activate_drag_and_drop,
          'products': products,
          'last_sql': last_sql
        })
      }}
    {% endblock %}
    </div>
  </div>

  {% if product_count_filtered > 20 %}
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
        {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
        }}
      </div>
    </div>
  {% endif %}
</form>
", "@Product/CatalogPage/Forms/form_products.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Forms\\form_products.html.twig");
    }
}
