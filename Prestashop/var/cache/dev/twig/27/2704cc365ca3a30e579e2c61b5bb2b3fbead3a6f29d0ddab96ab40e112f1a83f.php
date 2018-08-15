<?php

/* PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig */
class __TwigTemplate_623ea7615e22ca181d6dea3b2c6bebbc4127b09bc0607bac9419a2c593c34ff5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig"));

        // line 25
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"]) =         array($this->getAttribute($this->getAttribute(        // line 26
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url", array()), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "displayPrice", array()), $this->getAttribute($this->getAttribute(        // line 29
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()), $this->getAttribute($this->getAttribute(        // line 30
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array()), $this->getAttribute($this->getAttribute(        // line 31
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()));
        // line 33
        echo "
  ";
        // line 34
        if ((($context["url_active"] ?? $this->getContext($context, "url_active")) == "buy")) {
            // line 35
            echo "  <div class=\"form-action-button-container\">
    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary light-button module_action_menu_go_to_addons\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
    </a>
  </div>
  ";
        } elseif (twig_length_filter($this->env,         // line 40
($context["urls"] ?? $this->getContext($context, "urls")))) {
            // line 41
            echo "  <div class=\"btn-group form-action-button-container\">
    <form class=\"btn-group form-action-button\" method=\"post\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["urls"] ?? $this->getContext($context, "urls")), ($context["url_active"] ?? $this->getContext($context, "url_active")), array(), "array"), "html", null, true);
            echo "\">
      <button type=\"submit\" class=\"btn btn-primary-reverse btn-outline-primary light-button module_action_menu_";
            // line 43
            echo twig_escape_filter($this->env, ($context["url_active"] ?? $this->getContext($context, "url_active")), "html", null, true);
            echo "\"
          data-confirm_modal=\"module-modal-confirm-";
            // line 44
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["url_active"] ?? $this->getContext($context, "url_active")), "html", null, true);
            echo "\">
          ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_replace_filter(twig_capitalize_string_filter($this->env, ($context["url_active"] ?? $this->getContext($context, "url_active"))), array("_" => " ")), array(), "Admin.Actions"), "html", null, true);
            echo "
      </button>
    </form>
    ";
            // line 48
            if ((twig_length_filter($this->env, ($context["urls"] ?? $this->getContext($context, "urls"))) > 1)) {
                // line 49
                echo "          <input type=\"hidden\" class=\"btn\">
          <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", array(), "Admin.Modules.Feature"), "html", null, true);
                echo "</span>
          </button>
          <div class=\"dropdown-menu\">
            ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? $this->getContext($context, "urls")));
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 56
                    echo "              ";
                    if (($context["module_action"] != ($context["url_active"] ?? $this->getContext($context, "url_active")))) {
                        // line 57
                        echo "                  <li>
                    <form method=\"post\" action=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\">
                      <button type=\"submit\" class=\"dropdown-item module_action_menu_";
                        // line 59
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" data-confirm_modal=\"module-modal-confirm-";
                        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\">
                        ";
                        // line 60
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_replace_filter(twig_capitalize_string_filter($this->env, $context["module_action"]), array("_" => " ")), array(), "Admin.Actions"), "html", null, true);
                        echo "
                      </button>
                    </form>
                  </li>
              ";
                    }
                    // line 65
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "          </div>
    ";
            }
            // line 68
            echo "  </div>
  ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 68,  125 => 66,  119 => 65,  111 => 60,  103 => 59,  99 => 58,  96 => 57,  93 => 56,  89 => 55,  83 => 52,  78 => 49,  76 => 48,  70 => 45,  64 => 44,  60 => 43,  56 => 42,  53 => 41,  51 => 40,  45 => 37,  41 => 36,  38 => 35,  36 => 34,  33 => 33,  31 => 31,  30 => 30,  29 => 29,  28 => 28,  27 => 27,  26 => 26,  25 => 25,);
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
{% set url, priceRaw, priceDisplay, url_active, urls, name =
  module.attributes.url,
  module.attributes.price.raw,
  module.attributes.price.displayPrice,
  module.attributes.url_active,
  module.attributes.urls,
  module.attributes.name
%}

  {% if url_active == 'buy' %}
  <div class=\"form-action-button-container\">
    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary light-button module_action_menu_go_to_addons\" href=\"{{ url }}\" target=\"_blank\">
      {{ 'Discover'|trans({}, 'Admin.Modules.Feature') }}
    </a>
  </div>
  {% elseif urls|length %}
  <div class=\"btn-group form-action-button-container\">
    <form class=\"btn-group form-action-button\" method=\"post\" action=\"{{ urls[url_active] }}\">
      <button type=\"submit\" class=\"btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{{ url_active }}\"
          data-confirm_modal=\"module-modal-confirm-{{ name }}-{{ url_active }}\">
          {{ url_active|capitalize|replace({'_': \" \"})|trans({}, 'Admin.Actions') }}
      </button>
    </form>
    {% if (urls|length > 1) %}
          <input type=\"hidden\" class=\"btn\">
          <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">{{ 'Toggle Dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
          </button>
          <div class=\"dropdown-menu\">
            {% for module_action, module_url in urls %}
              {% if module_action != url_active %}
                  <li>
                    <form method=\"post\" action=\"{{ module_url }}\">
                      <button type=\"submit\" class=\"dropdown-item module_action_menu_{{ module_action }}\" data-confirm_modal=\"module-modal-confirm-{{ name }}-{{ module_action }}\">
                        {{module_action|capitalize|replace({'_': \" \"})|trans({}, 'Admin.Actions')}}
                      </button>
                    </form>
                  </li>
              {% endif %}
            {% endfor %}
          </div>
    {% endif %}
  </div>
  {% endif %}
", "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}
