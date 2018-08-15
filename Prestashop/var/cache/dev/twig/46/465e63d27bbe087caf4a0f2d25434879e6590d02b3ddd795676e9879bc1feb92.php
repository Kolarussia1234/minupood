<?php

/* PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig */
class __TwigTemplate_6308c011ee11ac40b3bb4d52ffab963a2f84aed0a1ea4984038eacac9302bc4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'addon_version' => array($this, 'block_addon_version'),
            'addon_description' => array($this, 'block_addon_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig"));

        // line 25
        $context["isModuleActive"] = $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "database", array()), "active", array());
        // line 26
        echo "
<div
  class=\"module-item module-item-grid col-md-12 col-lg-6 col-xl-3 ";
        // line 28
        if (((($context["origin"] ?? $this->getContext($context, "origin")) == "manage") && (($context["isModuleActive"] ?? $this->getContext($context, "isModuleActive")) == "0"))) {
            echo "module-item-grid-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "id", array()), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "avgRate", array()), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "img", array()), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array()), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version", array()), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array()), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "categoryName", array()), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "categoryParent", array()), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "productType", array()), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["isModuleActive"] ?? $this->getContext($context, "isModuleActive")), "html", null, true);
        echo "\"
>
  <div class=\"module-item-wrapper-grid\">
    <div class=\"module-item-heading-grid\">
      <div class=\"module-logo-thumb-grid\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "img", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\"/>
      </div>
      <h3
        class=\"text-ellipsis module-name-grid\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        title=\"";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array());
        echo "\"
      >
        ";
        // line 54
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())) {
            // line 55
            echo "          ";
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array());
            echo "
        ";
        } else {
            // line 57
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
            echo "
        ";
        }
        // line 59
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "picos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pico"]) {
            // line 60
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "label", array()), "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      </h3>
      <div class=\"text-ellipsis small-text module-version-author-grid\">
        ";
        // line 64
        $this->displayBlock('addon_version', $context, $blocks);
        // line 71
        echo "      </div>
    </div>
    <div class=\"module-quick-description-grid small no-padding mb-0\">
      ";
        // line 74
        $this->displayBlock('addon_description', $context, $blocks);
        // line 87
        echo "    </div>

    <div class=\"module-container module-quick-action-grid clearfix\">
        <div class=\"badges-container\">
          ";
        // line 91
        $context["badges"] = $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "badges", array());
        // line 92
        echo "          ";
        if (($context["badges"] ?? $this->getContext($context, "badges"))) {
            // line 93
            echo "            ";
            $context["badge"] = twig_first($this->env, ($context["badges"] ?? $this->getContext($context, "badges")));
            // line 94
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? $this->getContext($context, "badge")), "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? $this->getContext($context, "badge")), "label", array()), "html", null, true);
            echo "\"/>
            ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? $this->getContext($context, "badge")), "label", array()), "html", null, true);
            echo "
          ";
        }
        // line 97
        echo "        </div>
      <hr />
      ";
        // line 99
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "nbRates", array()) > 0)) {
            // line 100
            echo "        <div class=\"module-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "starsRate", array()), "html", null, true);
            echo " small\">
          (";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "nbRates", array()), "html", null, true);
            echo ")
        </div>
      ";
        }
        // line 104
        echo "      <div class=\"float-right module-price\">
      ";
        // line 105
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()) != "0.00"))) {
            // line 106
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "displayPrice", array()), "html", null, true);
            echo "
      ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 107
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()) != "buy")) {
            // line 108
            echo "        <span class=\"pt-2\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
      ";
        }
        // line 110
        echo "      </div>
      ";
        // line 111
        if ((array_key_exists("requireBulkActions", $context) && (($context["requireBulkActions"] ?? $this->getContext($context, "requireBulkActions")) == true))) {
            // line 112
            echo "        <div class=\"float-right module-checkbox-bulk-grid\">
          <input type=\"checkbox\" data-name=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array()), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
            echo "\" />
        </div>
      ";
        }
        // line 116
        echo "      ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", 116)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")), "level" => ($context["level"] ?? $this->getContext($context, "level")))));
        // line 117
        echo "    </div>
    ";
        // line 118
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", 118)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")), "additionalModalSuffix" => ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? $this->getContext($context, "additionalModalSuffix")), "")) : ("")), "level" => ($context["level"] ?? $this->getContext($context, "level")))));
        // line 119
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", 119)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")))));
        // line 120
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_addon_version($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        // line 65
        echo "          ";
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "productType", array()) == "service")) {
            // line 66
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
          ";
        } else {
            // line 68
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", array("%version%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version", array()), "%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
          ";
        }
        // line 70
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_addon_description($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_description"));

        // line 75
        echo "        <div class=\"module-quick-description-text\">
          ";
        // line 76
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array());
        echo "
          ";
        // line 77
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array())) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "fullDescription", array()))))) {
            // line 78
            echo "            ...
          ";
        }
        // line 80
        echo "        </div>
        <div class=\"module-read-more-grid\">
          ";
        // line 82
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "id", array()) != "0")) {
            // line 83
            echo "            <a class=\"module-read-more-grid-btn url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_cart", array("moduleId" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "id", array()))), "html", null, true);
            echo "\" data-target=\"#module-modal-read-more-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? $this->getContext($context, "additionalModalSuffix")), "")) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read More", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
          ";
        }
        // line 85
        echo "        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 85,  316 => 83,  314 => 82,  310 => 80,  306 => 78,  304 => 77,  300 => 76,  297 => 75,  288 => 74,  278 => 70,  272 => 68,  266 => 66,  263 => 65,  254 => 64,  242 => 120,  239 => 119,  237 => 118,  234 => 117,  231 => 116,  223 => 113,  220 => 112,  218 => 111,  215 => 110,  209 => 108,  207 => 107,  202 => 106,  200 => 105,  197 => 104,  191 => 101,  186 => 100,  184 => 99,  180 => 97,  175 => 95,  168 => 94,  165 => 93,  162 => 92,  160 => 91,  154 => 87,  152 => 74,  147 => 71,  145 => 64,  141 => 62,  130 => 60,  125 => 59,  119 => 57,  113 => 55,  111 => 54,  106 => 52,  95 => 46,  87 => 41,  83 => 40,  79 => 39,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  59 => 34,  55 => 33,  51 => 32,  47 => 31,  43 => 30,  39 => 29,  33 => 28,  29 => 26,  27 => 25,);
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
{% set isModuleActive = module.database.active %}

<div
  class=\"module-item module-item-grid col-md-12 col-lg-6 col-xl-3 {% if origin == 'manage' and isModuleActive == '0' %}module-item-grid-isNotActive{% endif %}\"
  data-id=\"{{ module.attributes.id }}\"
  data-name=\"{{ module.attributes.displayName }}\"
  data-scoring=\"{{ module.attributes.avgRate }}\"
  data-logo=\"{{ module.attributes.img }}\"
  data-author=\"{{ module.attributes.author }}\"
  data-version=\"{{ module.attributes.version }}\"
  data-description=\"{{ module.attributes.description }}\"
  data-tech-name=\"{{ module.attributes.name }}\"
  data-child-categories=\"{{ module.attributes.categoryName }}\"
  data-categories=\"{{ module.attributes.categoryParent }}\"
  data-type=\"{{ module.attributes.productType }}\"
  data-price=\"{{ module.attributes.price.raw }}\"
  data-active=\"{{ isModuleActive }}\"
>
  <div class=\"module-item-wrapper-grid\">
    <div class=\"module-item-heading-grid\">
      <div class=\"module-logo-thumb-grid\">
        <img src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\"/>
      </div>
      <h3
        class=\"text-ellipsis module-name-grid\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        title=\"{{ module.attributes.displayName|raw }}\"
      >
        {% if module.attributes.displayName %}
          {{ module.attributes.displayName|raw }}
        {% else %}
          {{ module.attributes.name }}
        {% endif %}
        {% for pico in module.attributes.picos %}
            <img src=\"{{pico.img}}\" alt=\"{{pico.label}}\" />
        {% endfor %}
      </h3>
      <div class=\"text-ellipsis small-text module-version-author-grid\">
        {% block addon_version %}
          {% if module.attributes.productType == \"service\" %}
            {{ 'Service by %author%'|trans({'%author%' : '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
          {% else %}
            {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : '<b>' ~ module.attributes.author ~ '</b>' }, 'Admin.Modules.Feature')|raw }}
          {% endif %}
        {% endblock %}
      </div>
    </div>
    <div class=\"module-quick-description-grid small no-padding mb-0\">
      {% block addon_description %}
        <div class=\"module-quick-description-text\">
          {{ module.attributes.description|raw }}
          {% if module.attributes.description|length > 0 and module.attributes.description|length < module.attributes.fullDescription|length %}
            ...
          {% endif %}
        </div>
        <div class=\"module-read-more-grid\">
          {% if module.attributes.id != \"0\" %}
            <a class=\"module-read-more-grid-btn url\" href=\"{{ path('admin_module_cart', {\"moduleId\": module.attributes.id }) }}\" data-target=\"#module-modal-read-more-{{module.attributes.name }}{{ additionalModalSuffix|default('') }}\">{{ 'Read More'|trans({}, 'Admin.Modules.Feature') }}</a>
          {% endif %}
        </div>
      {% endblock %}
    </div>

    <div class=\"module-container module-quick-action-grid clearfix\">
        <div class=\"badges-container\">
          {% set badges = module.attributes.badges %}
          {% if badges %}
            {% set badge = badges|first %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endif %}
        </div>
      <hr />
      {% if module.attributes.nbRates > 0 %}
        <div class=\"module-stars module-star-ranking-grid-{{ module.attributes.starsRate}} small\">
          ({{ module.attributes.nbRates }})
        </div>
      {% endif %}
      <div class=\"float-right module-price\">
      {% if module.attributes.url_active == 'buy' and module.attributes.price.raw != '0.00' %}
        {{ module.attributes.price.displayPrice }}
      {% elseif module.attributes.url_active != 'buy' %}
        <span class=\"pt-2\">{{ 'Free'|trans({}, 'Admin.Modules.Feature') }}</span>
      {% endif %}
      </div>
      {% if requireBulkActions is defined and requireBulkActions == true %}
        <div class=\"float-right module-checkbox-bulk-grid\">
          <input type=\"checkbox\" data-name=\"{{ module.attributes.displayName }}\" data-tech-name=\"{{module.attributes.name}}\" />
        </div>
      {% endif %}
      {% include 'PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig' with { 'module': module, 'level' : level } %}
    </div>
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig' with { 'module': module, 'additionalModalSuffix': additionalModalSuffix|default(''), 'level' : level } %}
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig' with { 'module': module } %}
  </div>
</div>
", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/card_grid.html.twig");
    }
}
