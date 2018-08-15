<?php

/* PrestaShopBundle:Admin/Module:notifications.html.twig */
class __TwigTemplate_33c88357b78c6a78af99bfd72871b0c2968610f0b10bed6c0caf636ec1a15cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:notifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 36
        echo "    ";
        // line 37
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 37)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 39)->display($context);
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 41)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:notification_kpis.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 43)->display($context);
        // line 44
        echo "    ";
        // line 45
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div id=\"module-short-list-configure\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to configure", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_configure", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to configure", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                      data-content=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules require your attention: you need to take some action to ensure they are fully operational.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 54
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 54)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_configure", array()), "display_type" => "list", "id" => "notification")));
        // line 55
        echo "
            <hr class=\"top-menu-separator\">
            <div id=\"module-short-list-update\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to update", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_update", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to update", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                      data-content=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update these modules to enjoy their latest versions.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
                ";
        // line 63
        if (((twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_update", array())) > 1) && (($context["level"] ?? $this->getContext($context, "level")) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")))) {
            // line 64
            echo "                <a class=\"btn btn-primary-reverse float-right btn-outline-primary light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upgrade All", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
                ";
        }
        // line 66
        echo "            </div>
            ";
        // line 67
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 67)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_update", array()), "display_type" => "list", "id" => "update", "level" => ($context["level"] ?? $this->getContext($context, "level")))));
        // line 68
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  162 => 67,  159 => 66,  153 => 64,  151 => 63,  146 => 61,  142 => 60,  137 => 58,  132 => 55,  130 => 54,  124 => 51,  120 => 50,  115 => 48,  110 => 45,  108 => 44,  105 => 43,  103 => 42,  100 => 41,  98 => 40,  95 => 39,  93 => 38,  90 => 37,  88 => 36,  79 => 35,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  50 => 28,  41 => 27,  11 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
{% endblock %}

{% block content %}
    {# Addons connect modal #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
    {# PrestaTrust modal #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig' %}
    {# Contains toolbar-nav for module page #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
    {# Module notification KPI's #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:notification_kpis.html.twig' %}
    {# Actual Page Content #}
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div id=\"module-short-list-configure\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">{{ '%nbModules% modules to configure'|trans({'%nbModules%' : modules.to_configure|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"{{ \"Modules to configure\"|trans({}, 'Admin.Modules.Feature') }}\"
                      data-content=\"{{ \"These modules require your attention: you need to take some action to ensure they are fully operational.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig' with { 'modules': modules.to_configure, 'display_type': 'list', id: 'notification'  } %}

            <hr class=\"top-menu-separator\">
            <div id=\"module-short-list-update\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">{{ '%nbModules% modules to update'|trans({'%nbModules%' : modules.to_update|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"{{ \"Modules to update\"|trans({}, 'Admin.Modules.Feature') }}\"
                      data-content=\"{{ \"Update these modules to enjoy their latest versions.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
                {% if (modules.to_update|length > 1) and (level >= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE')) %}
                <a class=\"btn btn-primary-reverse float-right btn-outline-primary light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">{{ \"Upgrade All\"|trans({}, 'Admin.Modules.Feature') }}</a>
                {% endif %}
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig' with { 'modules': modules.to_update, 'display_type': 'list', id: 'update', 'level' : level } %}
        </div>
    </div>
{% endblock %}
", "PrestaShopBundle:Admin/Module:notifications.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/notifications.html.twig");
    }
}
