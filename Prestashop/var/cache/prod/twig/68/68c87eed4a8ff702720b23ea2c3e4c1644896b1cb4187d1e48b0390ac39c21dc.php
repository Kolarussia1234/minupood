<?php

/* @Product/CatalogPage/Blocks/filters.html.twig */
class __TwigTemplate_074e621f8d8939232219b7dd7acb27ae7cb66511dcfd982d3756a6c55d13c41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_filter_by_categories' => array($this, 'block_product_catalog_filter_by_categories'),
            'product_catalog_filter_bulk_actions' => array($this, 'block_product_catalog_filter_bulk_actions'),
            'product_catalog_filter_select_all' => array($this, 'block_product_catalog_filter_select_all'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"catalog-actions\" class=\"col order-first\">
  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 28
        $this->displayBlock('product_catalog_filter_by_categories', $context, $blocks);
        // line 73
        echo "
      ";
        // line 74
        $this->displayBlock('product_catalog_filter_bulk_actions', $context, $blocks);
        // line 126
        echo "    </div>
  </div>

  ";
        // line 129
        $this->displayBlock('product_catalog_filter_select_all', $context, $blocks);
        // line 147
        echo "</div>
";
    }

    // line 28
    public function block_product_catalog_filter_by_categories($context, array $blocks = array())
    {
        // line 29
        echo "        <div id=\"product_catalog_category_tree_filter\" class=\"d-inline-block dropdown dropdown-clickable mr-2\">
          <button
                  class=\"btn btn-outline-secondary dropdown-toggle\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
          >
              ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <div class=\"categories-tree-actions\">
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_expand\"
                onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_expand\"
              >
                <i class=\"material-icons\">expand_more</i>
                  ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_collapse\"
                onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_collapse\"
              >
                <i class=\"material-icons\">expand_less</i>
                  ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_reset\"
                onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
                id=\"product_catalog_category_tree_filter_reset\"
              >
                <i class=\"material-icons\">radio_button_unchecked</i>
                  ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
              </a>
            </div>
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categories"] ?? null), 'widget');
        echo "
          </div>
        </div>
      ";
    }

    // line 74
    public function block_product_catalog_filter_bulk_actions($context, array $blocks = array())
    {
        // line 75
        echo "        <div
            class=\"d-inline-block\"
            bulkurl=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
            massediturl=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
            redirecturl=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "offset" => ($context["offset"] ?? null), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
            redirecturlnextpage=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "offset" => (($context["offset"] ?? null) + ($context["limit"] ?? null)), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
        >
          ";
        // line 82
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 93
        echo "
          ";
        // line 94
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
        // line 103
        echo "

          ";
        // line 105
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 114
        echo "
          ";
        // line 115
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "@Product/CatalogPage/Blocks/filters.html.twig", 115)->display(array_merge($context, array("div_style" => "btn-group dropdown bulk-catalog", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "outline-secondary", "menu_icon" => "icon-caret-up", "items" =>         // line 122
($context["buttons_action"] ?? null))));
        // line 124
        echo "        </div>
      ";
    }

    // line 129
    public function block_product_catalog_filter_select_all($context, array $blocks = array())
    {
        // line 130
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"md-checkbox\">
        <label>
          <input
            type=\"checkbox\"
            id=\"bulk_action_select_all\"
            onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
            value=\"\"
          >
          <i class=\"md-checkbox-control\"></i>
            ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/filters.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 141,  162 => 130,  159 => 129,  154 => 124,  152 => 122,  151 => 115,  148 => 114,  146 => 105,  142 => 103,  140 => 94,  137 => 93,  135 => 82,  130 => 80,  126 => 79,  122 => 78,  118 => 77,  114 => 75,  111 => 74,  103 => 69,  97 => 66,  85 => 57,  73 => 48,  59 => 37,  49 => 29,  46 => 28,  41 => 147,  39 => 129,  34 => 126,  32 => 74,  29 => 73,  27 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/CatalogPage/Blocks/filters.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Blocks\\filters.html.twig");
    }
}
