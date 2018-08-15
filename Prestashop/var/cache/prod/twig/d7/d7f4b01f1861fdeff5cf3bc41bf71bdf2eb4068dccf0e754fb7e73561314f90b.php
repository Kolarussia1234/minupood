<?php

/* PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig */
class __TwigTemplate_1e1065281bd03f8919a015a888f8f4fb07afe14fd555095c69e470e10442a5b2 extends Twig_Template
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
        // line 25
        $context["isModuleActive"] = $this->getAttribute($this->getAttribute(($context["module"] ?? null), "database", array()), "active", array());
        // line 26
        echo "
<div
  class=\"module-item module-item-grid col-md-12 col-lg-6 col-xl-3 ";
        // line 28
        if (((($context["origin"] ?? null) == "manage") && (($context["isModuleActive"] ?? null) == "0"))) {
            echo "module-item-grid-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "id", array()), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "avgRate", array()), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "img", array()), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "author", array()), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "version", array()), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "description", array()), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "name", array()), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "categoryName", array()), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "categoryParent", array()), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "productType", array()), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "price", array()), "raw", array()), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["isModuleActive"] ?? null), "html", null, true);
        echo "\"
>
  <div class=\"module-item-wrapper-grid\">
    <div class=\"module-item-heading-grid\">
      <div class=\"module-logo-thumb-grid\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "img", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\"/>
      </div>
      <h3
        class=\"text-ellipsis module-name-grid\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        title=\"";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "displayName", array());
        echo "\"
      >
        ";
        // line 54
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "displayName", array())) {
            // line 55
            echo "          ";
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "displayName", array());
            echo "
        ";
        } else {
            // line 57
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "name", array()), "html", null, true);
            echo "
        ";
        }
        // line 59
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "picos", array()));
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
        $context["badges"] = $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "badges", array());
        // line 92
        echo "          ";
        if (($context["badges"] ?? null)) {
            // line 93
            echo "            ";
            $context["badge"] = twig_first($this->env, ($context["badges"] ?? null));
            // line 94
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "label", array()), "html", null, true);
            echo "\"/>
            ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "label", array()), "html", null, true);
            echo "
          ";
        }
        // line 97
        echo "        </div>
      <hr />
      ";
        // line 99
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "nbRates", array()) > 0)) {
            // line 100
            echo "        <div class=\"module-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "starsRate", array()), "html", null, true);
            echo " small\">
          (";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "nbRates", array()), "html", null, true);
            echo ")
        </div>
      ";
        }
        // line 104
        echo "      <div class=\"float-right module-price\">
      ";
        // line 105
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "url_active", array()) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "price", array()), "raw", array()) != "0.00"))) {
            // line 106
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "price", array()), "displayPrice", array()), "html", null, true);
            echo "
      ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 107
($context["module"] ?? null), "attributes", array()), "url_active", array()) != "buy")) {
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
        if ((array_key_exists("requireBulkActions", $context) && (($context["requireBulkActions"] ?? null) == true))) {
            // line 112
            echo "        <div class=\"float-right module-checkbox-bulk-grid\">
          <input type=\"checkbox\" data-name=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "displayName", array()), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "name", array()), "html", null, true);
            echo "\" />
        </div>
      ";
        }
        // line 116
        echo "      ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", 116)->display(array_merge($context, array("module" => ($context["module"] ?? null), "level" => ($context["level"] ?? null))));
        // line 117
        echo "    </div>
    ";
        // line 118
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", 118)->display(array_merge($context, array("module" => ($context["module"] ?? null), "additionalModalSuffix" => ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? null), "")) : ("")), "level" => ($context["level"] ?? null))));
        // line 119
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", 119)->display(array_merge($context, array("module" => ($context["module"] ?? null))));
        // line 120
        echo "  </div>
</div>
";
    }

    // line 64
    public function block_addon_version($context, array $blocks = array())
    {
        // line 65
        echo "          ";
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "productType", array()) == "service")) {
            // line 66
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
          ";
        } else {
            // line 68
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", array("%version%" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "version", array()), "%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
          ";
        }
        // line 70
        echo "        ";
    }

    // line 74
    public function block_addon_description($context, array $blocks = array())
    {
        // line 75
        echo "        <div class=\"module-quick-description-text\">
          ";
        // line 76
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "description", array());
        echo "
          ";
        // line 77
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "description", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "description", array())) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "fullDescription", array()))))) {
            // line 78
            echo "            ...
          ";
        }
        // line 80
        echo "        </div>
        <div class=\"module-read-more-grid\">
          ";
        // line 82
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "id", array()) != "0")) {
            // line 83
            echo "            <a class=\"module-read-more-grid-btn url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_cart", array("moduleId" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "id", array()))), "html", null, true);
            echo "\" data-target=\"#module-modal-read-more-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array()), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? null), "")) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read More", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
          ";
        }
        // line 85
        echo "        </div>
      ";
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
        return array (  297 => 85,  286 => 83,  284 => 82,  280 => 80,  276 => 78,  274 => 77,  270 => 76,  267 => 75,  264 => 74,  260 => 70,  254 => 68,  248 => 66,  245 => 65,  242 => 64,  236 => 120,  233 => 119,  231 => 118,  228 => 117,  225 => 116,  217 => 113,  214 => 112,  212 => 111,  209 => 110,  203 => 108,  201 => 107,  196 => 106,  194 => 105,  191 => 104,  185 => 101,  180 => 100,  178 => 99,  174 => 97,  169 => 95,  162 => 94,  159 => 93,  156 => 92,  154 => 91,  148 => 87,  146 => 74,  141 => 71,  139 => 64,  135 => 62,  124 => 60,  119 => 59,  113 => 57,  107 => 55,  105 => 54,  100 => 52,  89 => 46,  81 => 41,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  61 => 36,  57 => 35,  53 => 34,  49 => 33,  45 => 32,  41 => 31,  37 => 30,  33 => 29,  27 => 28,  23 => 26,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/card_grid.html.twig");
    }
}
