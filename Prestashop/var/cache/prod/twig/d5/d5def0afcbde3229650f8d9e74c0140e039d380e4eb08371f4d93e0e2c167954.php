<?php

/* @Product/ProductPage/Forms/form_seo.html.twig */
class __TwigTemplate_c41e0bd791f37d006ad559478e11c3e66aef5e9262ae6e50cc0f4ed01baadb9c extends Twig_Template
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
        echo "<div class=\"col-md-12\">

  <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Engine Optimization", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your ranking and how your product page will appear in search engines results.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_title", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_title", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_title", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_description", array()), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_description", array()), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_description", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">
      ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? null), "link_rewrite", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the human-readable URL, as generated from the product's name. You can change it if you want.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </label>
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "link_rewrite", array()), 'errors');
        echo "
    <div class=\"row\">
      <div class=\"col-md-7\">
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "link_rewrite", array()), 'widget');
        echo "
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" id=\"seo-url-regenerate\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset URL", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 70
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_REWRITING_SETTINGS") == 0)) {
            // line 71
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently disabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 72
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To enable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        } else {
            // line 74
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 75
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 77
        echo "        </p>
        <p class=\"alert-text\">
          ";
        // line 79
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) {
            // line 80
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The \"Force update of friendly URL\" option is currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 82
            echo "            ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]Product Settings[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences")) . "#configuration_fieldset_products\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 84
        echo "        </p>
      </div>
    </div>
  </div>

  <h2 class=\"mt-4\">
    ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirection page", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? null), "redirect_type", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "redirect_type", array()), 'errors');
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "redirect_type", array()), 'widget');
        echo "
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? null), "id_type_redirected", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "id_type_redirected", array()), 'errors');
        echo "
        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "id_type_redirected", array()), 'widget');
        echo "
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanent redirection (301) = Permanently display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temporary redirection (302) = Temporarily display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>

  ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["seoForm"] ?? null), 'rest');
        echo "

  ";
        // line 128
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsSeoStepBottom", array("id_product" => ($context["productId"] ?? null)));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 128,  221 => 126,  212 => 120,  208 => 119,  204 => 118,  192 => 109,  188 => 108,  184 => 107,  175 => 101,  171 => 100,  167 => 99,  157 => 92,  152 => 90,  144 => 84,  138 => 82,  133 => 80,  131 => 79,  127 => 77,  122 => 75,  117 => 74,  112 => 72,  107 => 71,  105 => 70,  93 => 61,  87 => 58,  81 => 55,  76 => 53,  71 => 51,  62 => 45,  58 => 44,  54 => 43,  43 => 35,  39 => 34,  35 => 33,  27 => 28,  23 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/ProductPage/Forms/form_seo.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Forms\\form_seo.html.twig");
    }
}
