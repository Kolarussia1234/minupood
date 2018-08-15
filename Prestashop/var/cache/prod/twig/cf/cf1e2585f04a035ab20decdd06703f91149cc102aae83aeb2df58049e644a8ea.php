<?php

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_64570eb5b5abc1c7a5d68d3c63e213b44f97e4b19461c530d85a91b43de0475c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_form_table_header' => array($this, 'block_product_catalog_form_table_header'),
            'product_catalog_form_table_filters' => array($this, 'block_product_catalog_form_table_filters'),
            'product_catalog_form_table_items' => array($this, 'block_product_catalog_form_table_items'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 29
($context["limit"] ?? null), "offset" =>         // line 30
($context["offset"] ?? null), "orderBy" =>         // line 31
($context["orderBy"] ?? null), "sortOrder" =>         // line 32
($context["sortOrder"] ?? null))), "html", null, true);
        // line 34
        echo "\"
  >
    <thead class=\"with-filters\">
      ";
        // line 37
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 80
        echo "
      ";
        // line 81
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 189
        echo "    </thead>
    ";
        // line 190
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 200
        echo "  </table>
</div>
";
    }

    // line 37
    public function block_product_catalog_form_table_header($context, array $blocks = array())
    {
        // line 38
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), 1 => "id_product", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), 1 => "name", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), 1 => "reference", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), 1 => "name_category", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), 1 => "price", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
        echo "
          </th>

          ";
        // line 59
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 60
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), 1 => "sav_quantity", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
            echo "
          </th>
          ";
        } else {
            // line 64
            echo "            <th></th>
          ";
        }
        // line 66
        echo "
          <th scope=\"col\" class=\"text-center\">
            ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), 1 => "active", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)), "method"), "html", null, true);
        echo "
          </th>
          ";
        // line 70
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 71
            echo "            <th scope=\"col\">
              ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), 1 => "position"), "method"), "html", null, true);
            echo "
            </th>
          ";
        }
        // line 75
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", array(), "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>
      ";
    }

    // line 81
    public function block_product_catalog_form_table_filters($context, array $blocks = array())
    {
        // line 82
        echo "        <tr class=\"column-filters\">
          <th colspan=\"2\">
            ";
        // line 84
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 84)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 90
($context["filter_column_id_product"] ?? null))));
        // line 92
        echo "          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "\"
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 109
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? null), "html", null, true);
        echo "\"
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? null), "html", null, true);
        echo "\"
            />
          </th>
          <th class=\"text-center\">
            ";
        // line 122
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 122)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 128
($context["filter_column_price"] ?? null))));
        // line 130
        echo "          </th>

          ";
        // line 132
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 133
            echo "          <th class=\"text-center\">
            ";
            // line 134
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 134)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 140
($context["filter_column_sav_quantity"] ?? null))));
            // line 142
            echo "          </th>
          ";
        } else {
            // line 144
            echo "            <th></th>
          ";
        }
        // line 146
        echo "
          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\">
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 151
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 152
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>
          ";
        // line 156
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 157
            echo "            <th>
              ";
            // line 158
            if ( !($context["activate_drag_and_drop"] ?? null)) {
                // line 159
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                ";
            } else {
                // line 161
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
            ";
            }
            // line 163
            echo "
            </th>
          ";
        }
        // line 166
        echo "          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </th>
        </tr>
      ";
    }

    // line 190
    public function block_product_catalog_form_table_items($context, array $blocks = array())
    {
        // line 191
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 192
($context["limit"] ?? null), "offset" =>         // line 193
($context["offset"] ?? null), "orderBy" =>         // line 194
($context["orderBy"] ?? null), "sortOrder" =>         // line 195
($context["sortOrder"] ?? null), "products" =>         // line 196
($context["products"] ?? null), "last_sql" =>         // line 197
($context["last_sql"] ?? null))));
        // line 198
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 198,  323 => 197,  322 => 196,  321 => 195,  320 => 194,  319 => 193,  318 => 192,  316 => 191,  313 => 190,  304 => 184,  298 => 181,  288 => 174,  282 => 171,  275 => 166,  270 => 163,  264 => 161,  258 => 159,  256 => 158,  253 => 157,  251 => 156,  242 => 152,  236 => 151,  229 => 146,  225 => 144,  221 => 142,  219 => 140,  218 => 134,  215 => 133,  213 => 132,  209 => 130,  207 => 128,  206 => 122,  199 => 118,  194 => 116,  184 => 109,  179 => 107,  169 => 100,  164 => 98,  156 => 92,  154 => 90,  153 => 84,  149 => 82,  146 => 81,  138 => 76,  135 => 75,  129 => 72,  126 => 71,  124 => 70,  119 => 68,  115 => 66,  111 => 64,  105 => 61,  102 => 60,  100 => 59,  94 => 56,  88 => 53,  82 => 50,  76 => 47,  70 => 44,  64 => 41,  59 => 38,  56 => 37,  50 => 200,  48 => 190,  45 => 189,  43 => 81,  40 => 80,  38 => 37,  33 => 34,  31 => 32,  30 => 31,  29 => 30,  28 => 29,  27 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/CatalogPage/Lists/products_table.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Lists\\products_table.html.twig");
    }
}
