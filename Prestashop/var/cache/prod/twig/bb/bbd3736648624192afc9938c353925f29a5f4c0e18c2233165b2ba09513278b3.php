<?php

/* PrestaShopBundle:Admin/Module:notifications.html.twig */
class __TwigTemplate_e4f9963aad63428cee3480e726bc4a3e57fd6e6082c7360b0c4e9bc1d00b5dde extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 37)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 39)->display($context);
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 41)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to configure", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? null), "to_configure", array()))), "Admin.Modules.Feature"), "html", null, true);
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
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 54)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? null), "to_configure", array()), "display_type" => "list", "id" => "notification")));
        // line 55
        echo "
            <hr class=\"top-menu-separator\">
            <div id=\"module-short-list-update\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to update", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? null), "to_update", array()))), "Admin.Modules.Feature"), "html", null, true);
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
        if (((twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? null), "to_update", array())) > 1) && (($context["level"] ?? null) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")))) {
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
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 67)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? null), "to_update", array()), "display_type" => "list", "id" => "update", "level" => ($context["level"] ?? null))));
        // line 68
        echo "        </div>
    </div>
";
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
        return array (  134 => 68,  132 => 67,  129 => 66,  123 => 64,  121 => 63,  116 => 61,  112 => 60,  107 => 58,  102 => 55,  100 => 54,  94 => 51,  90 => 50,  85 => 48,  80 => 45,  78 => 44,  75 => 43,  73 => 42,  70 => 41,  68 => 40,  65 => 39,  63 => 38,  60 => 37,  58 => 36,  55 => 35,  49 => 32,  45 => 31,  41 => 30,  37 => 29,  32 => 28,  29 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module:notifications.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/notifications.html.twig");
    }
}
