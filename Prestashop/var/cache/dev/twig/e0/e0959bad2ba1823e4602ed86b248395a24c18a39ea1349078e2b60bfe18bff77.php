<?php

/* @Product/CatalogPage/Forms/form_edit_dropdown.html.twig */
class __TwigTemplate_9ede17b08157c73cdf8b310f4c7e823439b46a9bc8a43a100f8c59329e3f4de0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig"));

        // line 25
        $context["buttonType"] = ((array_key_exists("buttonType", $context)) ? (_twig_default_filter(($context["buttonType"] ?? $this->getContext($context, "buttonType")), "primary")) : ("primary"));
        // line 26
        $context["right"] = ((array_key_exists("right", $context)) ? (_twig_default_filter(($context["right"] ?? $this->getContext($context, "right")), false)) : (false));
        // line 27
        echo "
<div class=\"";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("div_style", $context)) ? (_twig_default_filter(($context["div_style"] ?? $this->getContext($context, "div_style")), "btn-group")) : ("btn-group")), "html", null, true);
        echo "\">

  ";
        // line 30
        if (array_key_exists("default_item", $context)) {
            // line 31
            echo "    <a
      href=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["default_item"] ?? null), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "href", array()), "#")) : ("#")), "html", null, true);
            echo "\"
      title=\"";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["default_item"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "title", array()), (($this->getAttribute(($context["default_item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "label", array()), "")) : ("")))) : ((($this->getAttribute(($context["default_item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "label", array()), "")) : ("")))), "html", null, true);
            echo "\"
      class=\"btn tooltip-link product-edit\"
      ";
            // line 35
            if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? $this->getContext($context, "disabled")) == true))) {
                echo "disabled=\"disabled\"";
            }
            // line 36
            echo "    >
      ";
            // line 37
            if ($this->getAttribute(($context["default_item"] ?? $this->getContext($context, "default_item")), "icon", array())) {
                // line 38
                echo "        <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["default_item"] ?? $this->getContext($context, "default_item")), "icon", array()), "html", null, true);
                echo "</i>
      ";
            }
            // line 40
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["default_item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "label", array()), "")) : ("")), "html", null, true);
            echo "
    </a>
  ";
        }
        // line 43
        echo "
  <button class=\"btn btn-link dropdown-toggle dropdown-toggle-split product-edit\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    ";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("menu_label", $context)) ? (_twig_default_filter(($context["menu_label"] ?? $this->getContext($context, "menu_label")), "")) : ("")), "html", null, true);
        echo "
  </button>

  <div class=\"dropdown-menu";
        // line 48
        if (($context["right"] ?? $this->getContext($context, "right"))) {
            echo " dropdown-menu-right";
        }
        echo "\" x-placement=\"bottom-start\" >
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 50
            echo "      ";
            if (($this->getAttribute($context["entry"], "divider", array(), "any", true, true) && ($this->getAttribute($context["entry"], "divider", array()) == true))) {
                // line 51
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 53
                echo "        <a
          class=\"dropdown-item product-edit\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "href", array()), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 55
                if ($this->getAttribute($context["entry"], "onclick", array(), "any", true, true)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "onclick", array()), "html", null, true);
                    echo "\"";
                }
                // line 56
                echo "          ";
                if ($this->getAttribute($context["entry"], "target", array(), "any", true, true)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "target", array()), "html", null, true);
                    echo "\"";
                }
                // line 57
                echo "        >
          ";
                // line 58
                if ($this->getAttribute($context["entry"], "icon", array())) {
                    // line 59
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", array()), "html", null, true);
                    echo "</i>
          ";
                }
                // line 61
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "label", array()), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 64
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 65,  138 => 64,  131 => 61,  125 => 59,  123 => 58,  120 => 57,  113 => 56,  107 => 55,  103 => 54,  100 => 53,  96 => 51,  93 => 50,  89 => 49,  83 => 48,  77 => 45,  73 => 43,  66 => 40,  60 => 38,  58 => 37,  55 => 36,  51 => 35,  46 => 33,  42 => 32,  39 => 31,  37 => 30,  32 => 28,  29 => 27,  27 => 26,  25 => 25,);
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
{% set buttonType = buttonType|default('primary') %}
{% set right = right|default(false) %}

<div class=\"{{ div_style|default(\"btn-group\") }}\">

  {% if default_item is defined %}
    <a
      href=\"{{ default_item.href|default(\"#\") }}\"
      title=\"{{ default_item.title|default(default_item.label|default(\"\")) }}\"
      class=\"btn tooltip-link product-edit\"
      {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    >
      {% if default_item.icon %}
        <i class=\"material-icons\">{{ default_item.icon }}</i>
      {% endif %}
      {{ default_item.label|default('') }}
    </a>
  {% endif %}

  <button class=\"btn btn-link dropdown-toggle dropdown-toggle-split product-edit\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    {{ menu_label|default('') }}
  </button>

  <div class=\"dropdown-menu{% if right %} dropdown-menu-right{% endif %}\" x-placement=\"bottom-start\" >
    {% for entry in items %}
      {% if entry.divider is defined and entry.divider==true %}
        <div class=\"dropdown-divider\"></div>
      {% else %}
        <a
          class=\"dropdown-item product-edit\" href=\"{{ entry.href|default(\"#\") }}\"
          {% if entry.onclick is defined %}onclick=\"{{ entry.onclick }}\"{% endif %}
          {% if entry.target is defined %}target=\"{{ entry.target }}\"{% endif %}
        >
          {% if entry.icon %}
            <i class=\"material-icons\">{{ entry.icon }}</i>
          {% endif %}
          {{ entry.label|default('') }}
        </a>
      {% endif %}
    {% endfor %}
  </div>

</div>
", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Forms\\form_edit_dropdown.html.twig");
    }
}
