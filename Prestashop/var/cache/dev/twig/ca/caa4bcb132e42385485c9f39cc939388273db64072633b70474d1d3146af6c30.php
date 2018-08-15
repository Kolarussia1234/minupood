<?php

/* @PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig */
class __TwigTemplate_eb7413cf0c434588eb1a19750949a542d5c71c44f0d9d4aa388b998524438ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_form_table_row' => array($this, 'block_product_catalog_form_table_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        // line 25
        echo "<tbody
    ";
        // line 26
        if ((($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")) && ($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")))) {
            echo "class=\"sortable\"";
        }
        // line 27
        echo "    last_sql=\"";
        echo twig_escape_filter($this->env, ($context["last_sql_query"] ?? $this->getContext($context, "last_sql_query")), "html_attr");
        echo "\"
>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "    ";
            $this->displayBlock('product_catalog_form_table_row', $context, $blocks);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 137
            echo "<tr><td colspan=\"11\">
        ";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "
    </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_product_catalog_form_table_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        // line 31
        echo "    <tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "unit_action_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "unit_action_url", array()), "#")) : ("#")), "html", null, true);
        echo "\" data-product-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", array()), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", array()), "html", null, true);
        echo "\" name=\"bulk_action_selected_products[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", array()), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", array()), "html", null, true);
        echo "\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", array()), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", array()), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "image", array());
        echo "</a>
        </td>
        <td>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", array()), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td>
            ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "reference", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "reference", array()), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td>
            ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "name_category", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "name_category", array()), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", array()), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "price", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>

        ";
        // line 61
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 62
            echo "            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "sav_quantity", array()), "")) : ("")), "html", null, true);
            echo "\">
                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step3\">
                    ";
            // line 64
            if (($this->getAttribute(($context["product"] ?? null), "sav_quantity", array(), "any", true, true) && ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "sav_quantity", array()) > 0))) {
                // line 65
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "sav_quantity", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 67
                echo "                        ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "sav_quantity", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
                echo "
                    ";
            }
            // line 69
            echo "                </a>
            </td>
        ";
        } else {
            // line 72
            echo "            <td></td>
        ";
        }
        // line 74
        echo "        <td class=\"text-center\">
            ";
        // line 75
        if (((($this->getAttribute(($context["product"] ?? null), "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "active", array()), 0)) : (0)) == 0)) {
            // line 76
            echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                    <i class=\"material-icons action-disabled\">clear</i>
                </a>
            ";
        } else {
            // line 80
            echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                    <i class=\"material-icons action-enabled \">check</i>
                </a>
            ";
        }
        // line 84
        echo "        </td>
        ";
        // line 85
        if ($this->getAttribute(($context["product"] ?? null), "position", array(), "any", true, true)) {
            // line 86
            echo "            <td ";
            if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                echo "class=\"placeholder\"";
            }
            echo " style=\"cursor: pointer; cursor: hand;\">
                ";
            // line 87
            if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 88
                echo "                    <big><big>⇅</big></big>
                ";
            }
            // line 90
            echo "                <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "position", array()), "html", null, true);
            echo "</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id_product", array()), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "position", array()), "html", null, true);
            echo "\" />
            </td>
        ";
        }
        // line 95
        echo "        <td class=\"text-right\">
            <div class=\"btn-group-action\">

                ";
        // line 98
        $context["buttons_action"] = array(0 => array("href" => (($this->getAttribute(        // line 100
($context["product"] ?? null), "preview_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "preview_url", array()), "#")) : ("#")), "target" => "_blank", "icon" => "remove_red_eye", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", array(), "Admin.Actions")));
        // line 106
        echo "
                ";
        // line 107
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("onclick" => "unitProductAction(this, 'duplicate');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions"))));
        // line 114
        echo "
                ";
        // line 115
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("onclick" => "unitProductAction(this, 'delete');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"))));
        // line 122
        echo "
                ";
        // line 123
        $this->loadTemplate("@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", 123)->display(array_merge($context, array("button_id" => (("product_list_id_" . $this->getAttribute(        // line 124
($context["product"] ?? $this->getContext($context, "product")), "id_product", array())) . "_menu"), "default_item" => array("href" => (($this->getAttribute(        // line 126
($context["product"] ?? null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", array()), "#")) : ("#")), "icon" => "mode_edit"), "right" => true, "items" =>         // line 130
($context["buttons_action"] ?? $this->getContext($context, "buttons_action")))));
        // line 132
        echo "            </div>
        </td>
    </tr>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 132,  276 => 130,  275 => 126,  274 => 124,  273 => 123,  270 => 122,  268 => 115,  265 => 114,  263 => 107,  260 => 106,  258 => 100,  257 => 98,  252 => 95,  246 => 92,  242 => 91,  237 => 90,  233 => 88,  231 => 87,  224 => 86,  222 => 85,  219 => 84,  213 => 80,  207 => 76,  205 => 75,  202 => 74,  198 => 72,  193 => 69,  187 => 67,  181 => 65,  179 => 64,  175 => 63,  170 => 62,  168 => 61,  160 => 58,  154 => 55,  148 => 52,  140 => 49,  132 => 46,  125 => 42,  121 => 41,  110 => 35,  100 => 31,  91 => 30,  74 => 138,  71 => 137,  57 => 30,  39 => 29,  33 => 27,  29 => 26,  26 => 25,);
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
<tbody
    {% if activate_drag_and_drop and has_category_filter %}class=\"sortable\"{% endif %}
    last_sql=\"{{ last_sql_query|escape('html_attr') }}\"
>
    {% for product in products %}
    {% block product_catalog_form_table_row %}
    <tr data-uniturl=\"{{ product.unit_action_url|default('#') }}\" data-product-id=\"{{ product.id_product }}\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-{{ product.id_product }}\" name=\"bulk_action_selected_products[]\" value=\"{{ product.id_product }}\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-{{ product.id_product }}\">
                {{ product.id_product }}
            </label>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.image|raw }}</a>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.name|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td>
            {{ product.reference|default('') }}
        </td>
        <td>
            {{ product.name_category|default('') }}
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>

        {% if 'PS_STOCK_MANAGEMENT'|configuration %}
            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"{{ product.sav_quantity|default('') }}\">
                <a href=\"{{ product.url|default('') }}#tab-step3\">
                    {% if product.sav_quantity is defined and product.sav_quantity > 0 %}
                        {{ product.sav_quantity }}
                    {% else %}
                        {{ product.sav_quantity|default('N/A'|trans({}, 'Admin.Global')) }}
                    {% endif %}
                </a>
            </td>
        {% else %}
            <td></td>
        {% endif %}
        <td class=\"text-center\">
            {% if product.active|default(0) == 0 %}
                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                    <i class=\"material-icons action-disabled\">clear</i>
                </a>
            {% else %}
                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                    <i class=\"material-icons action-enabled \">check</i>
                </a>
            {% endif %}
        </td>
        {% if product.position is defined %}
            <td {% if activate_drag_and_drop %}class=\"placeholder\"{% endif %} style=\"cursor: pointer; cursor: hand;\">
                {% if activate_drag_and_drop %}
                    <big><big>⇅</big></big>
                {% endif %}
                <span class=\"position\">{{ product.position }}</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"{{ product.id_product }}\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"{{ product.position }}\" />
            </td>
        {% endif %}
        <td class=\"text-right\">
            <div class=\"btn-group-action\">

                {% set buttons_action = [
                    {
                        \"href\": product.preview_url|default('#'),
                        \"target\": \"_blank\",
                        \"icon\": \"remove_red_eye\",
                        \"label\": \"Preview\"|trans({}, 'Admin.Actions')
                    }
                ] %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'duplicate');\",
                        \"icon\": \"content_copy\",
                        \"label\": \"Duplicate\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'delete');\",
                        \"icon\": \"delete\",
                        \"label\": \"Delete\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% include '@Product/CatalogPage/Forms/form_edit_dropdown.html.twig' with {
                    'button_id': \"product_list_id_\" ~ product.id_product ~ \"_menu\",
                    'default_item': {
                        \"href\": product.url|default('#'),
                        \"icon\": \"mode_edit\"
                    },
                    'right': true,
                    'items': buttons_action
                } %}
            </div>
        </td>
    </tr>
    {% endblock %}
{% else %}
<tr><td colspan=\"11\">
        {{ \"There is no result for this search. Update your filters to view other products.\"|trans({}, 'Admin.Catalog.Notification') }}
    </td></tr>
{% endfor %}
", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Lists\\list.html.twig");
    }
}
