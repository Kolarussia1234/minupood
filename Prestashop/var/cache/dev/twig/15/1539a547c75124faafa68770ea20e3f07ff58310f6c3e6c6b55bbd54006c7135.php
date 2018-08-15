<?php

/* PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig */
class __TwigTemplate_b37cdee6e8f5a5e3109160675121167f5809e9fe8d4c6adb6e0174b49d02d996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig"));

        // line 25
        echo "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenuData"] ?? $this->getContext($context, "topMenuData")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "        ";
            $context["refMenu"] = $this->getAttribute($context["menu"], "refMenu", array());
            // line 28
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? $this->getContext($context, "refMenu")), "html", null, true);
            echo "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"js-selected-item selected-item module-category-selector-label\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "
            </span>
            <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
        </div>
        <div class=\"ps-dropdown-menu dropdown-menu module-category-selector\" aria-labelledby=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? $this->getContext($context, "refMenu")), "html", null, true);
            echo "\">
            <ul class=\"items-list js-items-list\">
                <li class=\"module-category-reset\">
                    <a class=\"dropdown-item\" href=\"#\">
                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Categories", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast($this->getAttribute($context["menu"], "subMenu", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 42
                echo "                    <li class=\"module-category-menu\"
                        ";
                // line 43
                if ($this->getAttribute($context["subMenu"], "tab", array())) {
                    echo "data-category-tab=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "tab", array()), "html", null, true);
                    echo "\"";
                }
                // line 44
                echo "                        data-category-ref=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "refMenu", array()), "html", null, true);
                echo "\"
                        data-category-display-name=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "\"
                    >
                        <a  class=\"dropdown-item\" href=\"#\">
                            ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "<span class=\"float-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["subMenu"], "modules", array())), "html", null, true);
                echo "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </ul>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 55,  97 => 52,  85 => 48,  79 => 45,  74 => 44,  68 => 43,  65 => 42,  61 => 41,  55 => 38,  48 => 34,  41 => 30,  35 => 28,  32 => 27,  28 => 26,  25 => 25,);
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
<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
    {% for menu in topMenuData %}
        {% set refMenu = menu.refMenu %}
        <div id=\"{{refMenu}}\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"js-selected-item selected-item module-category-selector-label\">
                {{menu.name}}
            </span>
            <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
        </div>
        <div class=\"ps-dropdown-menu dropdown-menu module-category-selector\" aria-labelledby=\"{{refMenu}}\">
            <ul class=\"items-list js-items-list\">
                <li class=\"module-category-reset\">
                    <a class=\"dropdown-item\" href=\"#\">
                            {{ 'All Categories'|trans({}, 'Admin.Modules.Feature') }}
                    </a>
                </li>
                {% for subMenu in menu.subMenu|arrayCast %}
                    <li class=\"module-category-menu\"
                        {% if subMenu.tab %}data-category-tab=\"{{subMenu.tab}}\"{% endif %}
                        data-category-ref=\"{{subMenu.refMenu}}\"
                        data-category-display-name=\"{{subMenu.name}}\"
                    >
                        <a  class=\"dropdown-item\" href=\"#\">
                            {{subMenu.name}}<span class=\"float-right\">{{subMenu.modules|length }}</span>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% endfor %}
</div>
", "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_categories.html.twig");
    }
}
