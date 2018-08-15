<?php

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_e967ec3d7e316346175d695f68335e74832a5ceb9d4497e8de5e635b608e8362 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        // line 25
        $context["ats"] = $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array());
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         array($this->getAttribute(        // line 29
($context["ats"] ?? $this->getContext($context, "ats")), "name", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "displayName", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "nbRates", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "starsRate", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "img", array()), ((($this->getAttribute(        // line 30
($context["ats"] ?? null), "serviceUrl", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", array())) : (false)), $this->getAttribute(        // line 31
($context["ats"] ?? $this->getContext($context, "ats")), "version", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "cover", array()), ((($this->getAttribute(        // line 32
($context["ats"] ?? null), "additionalDescription", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", array())) : (false)), ((($this->getAttribute(        // line 33
($context["ats"] ?? null), "fullDescription", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", array())) : (false)), ((($this->getAttribute(        // line 34
($context["ats"] ?? null), "changeLog", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", array())) : (false)), ((($this->getAttribute(        // line 35
($context["ats"] ?? null), "customer_benefits", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", array())) : (false)), ((($this->getAttribute(        // line 36
($context["ats"] ?? null), "demo_video", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", array())) : (false)), $this->getAttribute(        // line 37
($context["ats"] ?? $this->getContext($context, "ats")), "author", array()), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", $this->getAttribute(        // line 38
($context["ats"] ?? $this->getContext($context, "ats")), "features", array()), ((($this->getAttribute(        // line 39
($context["ats"] ?? null), "badges", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", array())) : (false)));
        // line 41
        echo "<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      ";
        // line 45
        if ((($context["nbRates"] ?? $this->getContext($context, "nbRates")) > 0)) {
            // line 46
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, ($context["starsRate"] ?? $this->getContext($context, "starsRate")), "html", null, true);
            echo "\">
          (
          ";
            // line 48
            echo twig_escape_filter($this->env, ($context["nbRates"] ?? $this->getContext($context, "nbRates")), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 52
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["img"] ?? $this->getContext($context, "img")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 55
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "<br>
            <small class=\"version small-text\">
              ";
        // line 57
        if ((array_key_exists("serviceUrl", $context) && (twig_length_filter($this->env, ($context["serviceUrl"] ?? $this->getContext($context, "serviceUrl"))) > 0))) {
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => ($context["author"] ?? $this->getContext($context, "author"))), "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% by %author%", array("%version%" => ($context["version"] ?? $this->getContext($context, "version")), "%author%" => ($context["author"] ?? $this->getContext($context, "author"))), "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 62
        echo "            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"";
        // line 74
        if ($this->getAttribute(($context["cover"] ?? null), "big", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cover"] ?? $this->getContext($context, "cover")), "big", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["notFoundImg"] ?? $this->getContext($context, "notFoundImg")), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          ";
        // line 79
        echo "          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-";
        // line 81
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 83
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 84
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 85
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional information", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 88
        echo "            ";
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 89
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Benefits", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 93
        echo "            ";
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 94
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 95
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 98
        echo "            ";
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 99
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 100
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Demo video", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 103
        echo "            ";
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 104
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 105
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changelog", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 108
        echo "            ";
        // line 109
        echo "          </ul>
        </nav>
        <div class=\"tab-content\">
          ";
        // line 113
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 115
        if (($context["fullDescription"] ?? $this->getContext($context, "fullDescription"))) {
            // line 116
            echo "                ";
            echo ($context["fullDescription"] ?? $this->getContext($context, "fullDescription"));
            echo "
              ";
        } else {
            // line 118
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No description found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 120
        echo "            </p>
          </div>

          <div id=\"additional-";
        // line 123
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 125
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 126
            echo "                ";
            echo ($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"));
            echo "
              ";
        } else {
            // line 128
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No additional description provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 130
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 133
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 135
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 136
            echo "                ";
            echo ($context["features"] ?? $this->getContext($context, "features"));
            echo "
              ";
        } else {
            // line 138
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No feature list provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 140
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 143
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 145
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 146
            echo "                ";
            echo ($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"));
            echo "
              ";
        } else {
            // line 148
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customer benefits notes found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 150
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 153
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 155
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 156
            echo "                ";
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getYoutubeLink(($context["demoVideo"] ?? $this->getContext($context, "demoVideo")));
            echo "
              ";
        } else {
            // line 158
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No demonstration video found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 160
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 163
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 164
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 165
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast(($context["changeLog"] ?? $this->getContext($context, "changeLog")))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 167
                echo "                  <li>
                    <b>";
                // line 168
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 170
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "              </ul>
            ";
        } else {
            // line 176
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 178
        echo "          </div>
          ";
        // line 180
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          ";
        // line 187
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()) != "0.00"))) {
            // line 188
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "displayPrice", array()), "html", null, true);
            echo "
          ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 189
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()) != "buy")) {
            // line 190
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
          ";
        }
        // line 192
        echo "        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? $this->getContext($context, "badges")));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 197
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true);
            echo "\"/>
            ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        </div>
        <div class=\"float-right module-action\">
          ";
        // line 202
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 202)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")), "level" => ($context["level"] ?? $this->getContext($context, "level")))));
        // line 203
        echo "        </div>
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
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 203,  429 => 202,  425 => 200,  417 => 198,  410 => 197,  406 => 196,  400 => 192,  394 => 190,  392 => 189,  387 => 188,  385 => 187,  376 => 180,  373 => 178,  367 => 176,  363 => 174,  356 => 172,  347 => 170,  343 => 169,  339 => 168,  336 => 167,  332 => 166,  329 => 165,  327 => 164,  323 => 163,  318 => 160,  312 => 158,  306 => 156,  304 => 155,  299 => 153,  294 => 150,  288 => 148,  282 => 146,  280 => 145,  275 => 143,  270 => 140,  264 => 138,  258 => 136,  256 => 135,  251 => 133,  246 => 130,  240 => 128,  234 => 126,  232 => 125,  227 => 123,  222 => 120,  216 => 118,  210 => 116,  208 => 115,  202 => 113,  197 => 109,  195 => 108,  187 => 105,  184 => 104,  181 => 103,  173 => 100,  170 => 99,  167 => 98,  159 => 95,  156 => 94,  153 => 93,  145 => 90,  142 => 89,  139 => 88,  131 => 85,  128 => 84,  126 => 83,  119 => 81,  115 => 79,  104 => 74,  90 => 62,  84 => 60,  78 => 58,  76 => 57,  71 => 55,  64 => 53,  61 => 52,  54 => 48,  48 => 46,  46 => 45,  40 => 41,  38 => 39,  37 => 38,  36 => 37,  35 => 36,  34 => 35,  33 => 34,  32 => 33,  31 => 32,  30 => 31,  29 => 30,  28 => 29,  27 => 26,  25 => 25,);
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
{% set ats = module.attributes %}
{% set name, displayName, nbRates,
  starsRate, img, serviceUrl, version, cover, additionalDescription,
  fullDescription, changeLog, customerBenefits, demoVideo, author, notFoundImg, features, badges =
  ats.name, ats.displayName, ats.nbRates, ats.starsRate, ats.img,
  ats.serviceUrl is defined and ats.serviceUrl|length > 0 ? ats.serviceUrl : false,
  ats.version, ats.cover,
  ats.additionalDescription is defined and ats.additionalDescription|length > 0 ? ats.additionalDescription : false,
  ats.fullDescription is defined and ats.fullDescription|length > 0 ? ats.fullDescription : false,
  ats.changeLog is defined and ats.changeLog|length > 0 ? ats.changeLog : false,
  ats.customer_benefits is defined and ats.customer_benefits|length > 0 ? ats.customer_benefits : false,
  ats.demo_video is defined and ats.demo_video|length > 0 ? ats.demo_video : false,
  ats.author, 'https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png',
  ats.features,
  ats.badges is defined and ats.badges|length > 0 ? ats.badges : false
%}
<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      {% if nbRates > 0 %}
        <div class=\"read-more-stars module-star-ranking-grid-{{ starsRate }}\">
          (
          {{ nbRates }}
          )
        </div>
      {% endif %}
      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"{{ img }}\" alt=\"{{ displayName }}\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>{{ displayName }}<br>
            <small class=\"version small-text\">
              {% if serviceUrl is defined and serviceUrl|length > 0 %}
                {{ 'Service by %author%'|trans({'%author%' : author}, 'Admin.Modules.Feature') }}
              {% else %}
                {{ 'v%version% by %author%'|trans({ '%version%' : version, '%author%' : author }, 'Admin.Modules.Feature') }}
              {% endif %}
            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"{% if cover.big is defined %}{{ cover.big }}{% else %}{{ notFoundImg }}{% endif %}\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          {# tab list #}
          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-{{ name }}\">{{ 'Overview'|trans({}, 'Admin.Modules.Feature') }}</a>
            </li>
            {% if additionalDescription %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-{{ name }}\">{{ 'Additional information'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if customerBenefits %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-{{ name }}\">{{ 'Benefits'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if features %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-{{ name }}\">{{ 'Features'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if demoVideo %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-{{ name }}\">{{ 'Demo video'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if changeLog %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-{{ name }}\">{{ 'Changelog'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {# end tab list #}
          </ul>
        </nav>
        <div class=\"tab-content\">
          {# tab content list #}
          <div id=\"overview-{{ name }}\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              {% if fullDescription %}
                {{ fullDescription|raw }}
              {% else %}
                {{ 'No description found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"additional-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if additionalDescription %}
                {{ additionalDescription|raw }}
              {% else %}
                {{ 'No additional description provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"features-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if features %}
                {{ features|raw }}
              {% else %}
                {{ 'No feature list provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"customer_benefits-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if customerBenefits %}
                {{ customerBenefits|raw }}
              {% else %}
                {{ 'No customer benefits notes found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"demo_video-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if demoVideo %}
                {{ youtube_link(demoVideo)|raw }}
              {% else %}
                {{ 'No demonstration video found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"changelog-{{ name }}\" class=\"tab-pane fade\">
            {% if changeLog %}
              <ul class=\"module-readmore-tab-content\">
                {% for version, lines in changeLog|arrayCast|reverse %}
                  <li>
                    <b>{{version}}:</b>
                    {% for line in lines %}
                      {{line}}<br/>
                    {% endfor %}
                  </li>
                {% endfor %}
              </ul>
            {% else %}
              {{ 'No changelog provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
            {% endif %}
          </div>
          {# end tab content list #}
        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          {% if module.attributes.url_active == 'buy' and module.attributes.price.raw != '0.00' %}
            {{ module.attributes.price.displayPrice }}
          {% elseif module.attributes.url_active != 'buy' %}
            {{ 'Free'|trans({}, 'Admin.Modules.Feature') }}
          {% endif %}
        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          {% for badge in badges %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endfor %}
        </div>
        <div class=\"float-right module-action\">
          {% include 'PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig' with { 'module': module, 'level' : level } %}
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_read_more_content.html.twig");
    }
}
