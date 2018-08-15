<?php

/* PrestaShopBundle:Admin/Module:catalog.html.twig */
class __TwigTemplate_986b54a845b74fdeabfbe1a39807c59f6b494bf9ee29cd184fd268d178a7e094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 25);
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
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "filterCategoryTab"), "method")) {
            // line 34
            echo "      <script>
        \$('body').on('moduleCatalogLoaded', function() {
          \$('.module-category-menu[data-category-tab=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "filterCategoryTab"), "method"), "html", null, true);
            echo "\"]').click();
      });
      </script>
    ";
        }
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 module-catalog-page\">
            ";
        // line 46
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 46)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 48)->display($context);
        // line 49
        echo "            ";
        // line 50
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 50)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 52)->display($context);
        // line 53
        echo "            ";
        // line 54
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 54)->display($context);
        // line 55
        echo "            ";
        // line 56
        echo "            ";
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", array(), "any", true, true)) {
            // line 57
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 57)->display(array_merge($context, array("categories" => $this->getAttribute(($context["topMenuData"] ?? null), "categories", array()))));
            // line 58
            echo "            ";
        }
        // line 59
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 59,  106 => 58,  103 => 57,  100 => 56,  98 => 55,  95 => 54,  93 => 53,  90 => 52,  88 => 51,  85 => 50,  83 => 49,  80 => 48,  78 => 47,  75 => 46,  71 => 43,  68 => 42,  59 => 36,  55 => 34,  53 => 33,  49 => 32,  45 => 31,  41 => 30,  37 => 29,  32 => 28,  29 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module:catalog.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/catalog.html.twig");
    }
}
