<?php

/* PrestaShopBundle:Admin/Module/Includes:sorting.html.twig */
class __TwigTemplate_d52986610c7e798fa12ece4bdbf39c5ae39cd10ce3d8ca4adcf9632762d909a8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:sorting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:sorting.html.twig"));

        // line 25
        echo "<div class=\"module-sorting-menu\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"module-sorting-search-wording\">
                <span id=\"selected_modules\" class=\"module-search-result-wording\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules and services selected for you", array("%nbModules%" => ($context["totalModules"] ?? $this->getContext($context, "totalModules"))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                    data-title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selection", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                    data-content=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customize your store with this selection of modules recommended for your shop, based on your country, language and version of PrestaShop. It includes the most popular modules from our Addons marketplace, and free partner modules.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"module-sorting module-sorting-author float-right\">
                <select id=\"sort_module\" class=\"custom-select sort-component\">
                  <option value=\"\" disabled selected>- ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
        echo " -</option>
                  <option value=\"name\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "</option>
                  <option value=\"price\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Increasing Price", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                  <option value=\"price-desc\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Decreasing Price", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                  <option value=\"scoring-desc\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popularity", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                </select>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  62 => 42,  58 => 41,  54 => 40,  50 => 39,  40 => 32,  36 => 31,  31 => 29,  25 => 25,);
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
<div class=\"module-sorting-menu\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"module-sorting-search-wording\">
                <span id=\"selected_modules\" class=\"module-search-result-wording\">{{ '%nbModules% modules and services selected for you'|trans({'%nbModules%' : totalModules}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                    data-title=\"{{ \"Selection\"|trans({}, 'Admin.Modules.Feature') }}\"
                    data-content=\"{{ \"Customize your store with this selection of modules recommended for your shop, based on your country, language and version of PrestaShop. It includes the most popular modules from our Addons marketplace, and free partner modules.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"module-sorting module-sorting-author float-right\">
                <select id=\"sort_module\" class=\"custom-select sort-component\">
                  <option value=\"\" disabled selected>- {{ 'Sort by'|trans({}, 'Admin.Actions') }} -</option>
                  <option value=\"name\">{{ 'Name'|trans({}, 'Admin.Global') }}</option>
                  <option value=\"price\">{{ 'Increasing Price'|trans({}, 'Admin.Modules.Feature') }}</option>
                  <option value=\"price-desc\">{{ 'Decreasing Price'|trans({}, 'Admin.Modules.Feature') }}</option>
                  <option value=\"scoring-desc\">{{ 'Popularity'|trans({}, 'Admin.Modules.Feature') }}</option>
                </select>
            </div>
        </div>
    </div>
</div>
", "PrestaShopBundle:Admin/Module/Includes:sorting.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/sorting.html.twig");
    }
}
