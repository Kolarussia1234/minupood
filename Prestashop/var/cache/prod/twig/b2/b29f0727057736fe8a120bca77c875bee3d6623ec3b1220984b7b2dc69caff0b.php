<?php

/* PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig */
class __TwigTemplate_8f1780eaf38fa2d661995e1d331f6e193520df4af8a36b9112e5f0cdecb63729 extends Twig_Template
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
        // line 25
        echo "<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"input-group\" id=\"search-input-group\">
                <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
                        <i class=\"material-icons\">search</i>
                        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>

        <div class=\"col-md-4 module-menu-item\">
            ";
        // line 40
        if (array_key_exists("topMenuData", $context)) {
            // line 41
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 41)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? null))));
            // line 42
            echo "            ";
        }
        // line 43
        echo "            ";
        if ((array_key_exists("requireFilterStatus", $context) && (($context["requireFilterStatus"] ?? null) == true))) {
            // line 44
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 44)->display($context);
            // line 45
            echo "            ";
        }
        // line 46
        echo "        </div>
    </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 52
        $context["js_translatable"] = twig_array_merge(array("Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", array(), "Admin.Modules.Help")),         // line 54
($context["js_translatable"] ?? null));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 54,  64 => 52,  56 => 46,  53 => 45,  50 => 44,  47 => 43,  44 => 42,  41 => 41,  39 => 40,  29 => 33,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/menu_top.html.twig");
    }
}
