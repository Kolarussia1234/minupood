<?php

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_b2cbe27e7c2cd5a5b93f73e22e892e295ae1cd9c3a18328fb87758800f51b336 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        // line 25
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 29
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 30
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 31
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 32
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_product_catalog_form_table_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        // line 38
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), 1 => "id_product", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), 1 => "name", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), 1 => "reference", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), 1 => "name_category", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), 1 => "price", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
        echo "
          </th>

          ";
        // line 59
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 60
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), 1 => "sav_quantity", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), 1 => "active", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))), "method"), "html", null, true);
        echo "
          </th>
          ";
        // line 70
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 71
            echo "            <th scope=\"col\">
              ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), 1 => "position"), "method"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_product_catalog_form_table_filters($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        // line 82
        echo "        <tr class=\"column-filters\">
          <th colspan=\"2\">
            ";
        // line 84
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 84)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 90
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")))));
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
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
            />
          </th>
          <th class=\"text-center\">
            ";
        // line 122
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 122)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 128
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")))));
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
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")))));
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
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 152
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>
          ";
        // line 156
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 157
            echo "            <th>
              ";
            // line 158
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_product_catalog_form_table_items($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        // line 191
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 192
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 193
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 194
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 195
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 196
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 197
($context["last_sql"] ?? $this->getContext($context, "last_sql")))));
        // line 198
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  367 => 198,  365 => 197,  364 => 196,  363 => 195,  362 => 194,  361 => 193,  360 => 192,  358 => 191,  349 => 190,  334 => 184,  328 => 181,  318 => 174,  312 => 171,  305 => 166,  300 => 163,  294 => 161,  288 => 159,  286 => 158,  283 => 157,  281 => 156,  272 => 152,  266 => 151,  259 => 146,  255 => 144,  251 => 142,  249 => 140,  248 => 134,  245 => 133,  243 => 132,  239 => 130,  237 => 128,  236 => 122,  229 => 118,  224 => 116,  214 => 109,  209 => 107,  199 => 100,  194 => 98,  186 => 92,  184 => 90,  183 => 84,  179 => 82,  170 => 81,  156 => 76,  153 => 75,  147 => 72,  144 => 71,  142 => 70,  137 => 68,  133 => 66,  129 => 64,  123 => 61,  120 => 60,  118 => 59,  112 => 56,  106 => 53,  100 => 50,  94 => 47,  88 => 44,  82 => 41,  77 => 38,  68 => 37,  56 => 200,  54 => 190,  51 => 189,  49 => 81,  46 => 80,  44 => 37,  39 => 34,  37 => 32,  36 => 31,  35 => 30,  34 => 29,  33 => 28,  28 => 25,);
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
<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"{{ path('admin_product_catalog', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder
      })
    }}\"
  >
    <thead class=\"with-filters\">
      {% block product_catalog_form_table_header %}
        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            {{ ps.sortable_column_header(\"ID\"|trans({}, 'Admin.Global'), 'id_product', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ \"Image\"|trans({}, 'Admin.Global') }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Name\"|trans({}, 'Admin.Global'), 'name', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Reference\"|trans({}, 'Admin.Global'), 'reference', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Category\"|trans({}, 'Admin.Catalog.Feature'), 'name_category', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature'), 'price', orderBy, sortOrder) }}
          </th>

          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Quantity\"|trans({}, 'Admin.Catalog.Feature'), 'sav_quantity', orderBy, sortOrder) }}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th scope=\"col\" class=\"text-center\">
            {{ ps.sortable_column_header(\"Status\"|trans({}, 'Admin.Global'), 'active', orderBy, sortOrder) }}
          </th>
          {% if has_category_filter == true %}
            <th scope=\"col\">
              {{ ps.sortable_column_header(\"Position\"|trans({}, 'Admin.Global'), 'position') }}
            </th>
          {% endif %}
          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              {{ \"Actions\"|trans({}, 'Admin.Global') }}
          </th>
        </tr>
      {% endblock %}

      {% block product_catalog_form_table_filters %}
        <tr class=\"column-filters\">
          <th colspan=\"2\">
            {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
              'input_name': \"filter_column_id_product\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_id_product,
            } %}
          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name\"
              value=\"{{ filter_column_name }}\"
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_reference\"
              value=\"{{ filter_column_reference }}\"
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name_category\"
              value=\"{{ filter_column_name_category }}\"
            />
          </th>
          <th class=\"text-center\">
            {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
              'input_name': \"filter_column_price\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_price,
            } %}
          </th>

          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
          <th class=\"text-center\">
            {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
              'input_name': \"filter_column_sav_quantity\",
              'min': '-1000000',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_sav_quantity,
            } %}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\">
                <option value=\"\"></option>
                <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
              </select>
            </div>
          </th>
          {% if has_category_filter == true %}
            <th>
              {% if not(activate_drag_and_drop) %}
                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                {% else %}
                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
            {% endif %}

            </th>
          {% endif %}
          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"{{ \"Search\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">search</i>
              {{ \"Search\"|trans({}, 'Admin.Actions') }}
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">clear</i>
              {{ \"Reset\"|trans({}, 'Admin.Actions') }}
            </button>
          </th>
        </tr>
      {% endblock %}
    </thead>
    {% block product_catalog_form_table_items %}
      {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder,
        'products': products,
        'last_sql': last_sql
      })) }}
    {% endblock %}
  </table>
</div>
", "@Product/CatalogPage/Lists/products_table.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Lists\\products_table.html.twig");
    }
}
