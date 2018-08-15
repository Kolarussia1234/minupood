<?php

/* PrestaShopBundle:Admin/Module:manage.html.twig */
class __TwigTemplate_0fc2683b8830c7204380711a93f7b8d9a504e6a5cc30d7d67122d63265440262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 25);
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
        // line 111
        $context["js_translatable"] = twig_array_merge(array("Bulk Action - One module minimum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to select at least one module to use the bulk action.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action \"[1]\" is not available, impossible to perform your request.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action [1] is not available for module [2]. Skipped.", array(), "Admin.Modules.Notification")),         // line 115
($context["js_translatable"] ?? null));
        // line 25
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
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            ";
        // line 39
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 39)->display($context);
        // line 40
        echo "            ";
        // line 41
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 41)->display($context);
        // line 42
        echo "            ";
        // line 43
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 43)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 45)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 47)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? null))));
        // line 48
        echo "            <div class=\"module-sorting-menu\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 51
        if ((($context["level"] ?? null) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 52
            echo "                            <div class=\"module-sorting module-bulk-actions float-right\">
                                <select class=\"custom-select sort-component\">
                                  <option value=\"\" disabled selected>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk Actions", array(), "Admin.Global"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-uninstall\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-reset\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable-mobile\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable-mobile\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                </select>
                            </div>
                        ";
        }
        // line 64
        echo "                        <div class=\"module-sorting module-sorting-author float-right\">
                            <select class=\"custom-select sort-component\">
                              <option value=\"\" disabled>- ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
        echo " -</option>
                              <option value=\"name\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "</option>
                              <option value=\"access-desc\" selected>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last access", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 76
        echo "            <div class=\"module-short-list\">
                <span id=\"installed_modules\" class=\"module-search-result-wording\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% installed modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? null), "modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                  data-content=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These are all the modules you’ve added to your shop, either by buying it from PrestaShop Addons, or by uploading it directly.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 83
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 83)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? null), "modules", array()), "display_type" => "list", "origin" => "manage", "id" => "all")));
        // line 84
        echo "
            <hr class=\"top-menu-separator\">

            <div class=\"module-short-list\">
                <span id=\"built-in_modules\" class=\"module-search-result-wording\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% built-in modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? null), "native_modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Built-in modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                  data-content=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules from PrestaShop are preinstalled when you set-up your shop. They cover the basics of e-commerce and comes for free.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 94
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 94)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? null), "native_modules", array()), "display_type" => "list", "origin" => "manage", "id" => "native")));
        // line 95
        echo "
            <hr class=\"top-menu-separator\">

            <div class=\"module-short-list\">
                <span id=\"theme_modules\" class=\"module-search-result-wording\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% theme modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? null), "theme_bundle", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                  data-content=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Each theme you install will come with its own set of modules. You’ll find here all the modules related to your active theme.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 105
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 105)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? null), "theme_bundle", array()), "display_type" => "list", "origin" => "manage", "id" => "theme")));
        // line 106
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 106,  217 => 105,  211 => 102,  207 => 101,  202 => 99,  196 => 95,  194 => 94,  188 => 91,  184 => 90,  179 => 88,  173 => 84,  171 => 83,  165 => 80,  161 => 79,  156 => 77,  153 => 76,  143 => 68,  139 => 67,  135 => 66,  131 => 64,  124 => 60,  120 => 59,  116 => 58,  112 => 57,  108 => 56,  104 => 55,  100 => 54,  96 => 52,  94 => 51,  89 => 48,  86 => 47,  84 => 46,  81 => 45,  79 => 44,  76 => 43,  74 => 42,  71 => 41,  69 => 40,  66 => 39,  62 => 36,  59 => 35,  53 => 32,  49 => 31,  45 => 30,  41 => 29,  36 => 28,  33 => 27,  29 => 25,  27 => 115,  26 => 111,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module:manage.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
