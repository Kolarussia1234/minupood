<?php

/* @PrestaShop/Admin/WebProfiler/config.html.twig */
class __TwigTemplate_889356a3421d01592c543acec2eb7565d4b5060a599eea00d2e80971c85af8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/config.html.twig", 25);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/config.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 28
        echo "    ";
        if (("unknown" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 29
            echo "        ";
            $context["block_status"] = "";
            // line 30
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 31
            echo "    ";
        } elseif (("eol" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 32
            echo "        ";
            $context["block_status"] = "red";
            // line 33
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 34
            echo "    ";
        } elseif (("eom" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 35
            echo "        ";
            $context["block_status"] = "yellow";
            // line 36
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 37
            echo "    ";
        } elseif (("dev" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 38
            echo "        ";
            $context["block_status"] = "yellow";
            // line 39
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 40
            echo "    ";
        } else {
            // line 41
            echo "        ";
            $context["block_status"] = "";
            // line 42
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 43
            echo "    ";
        }
        // line 44
        echo "
    ";
        // line 45
        ob_start();
        // line 46
        echo "        <span class=\"sf-toolbar-label\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/glyph.png"), "html", null, true);
        echo "\" /></span>
        <span class=\"sf-toolbar-value\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
    ";
        // line 50
        ob_start();
        // line 51
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
        echo "</b>
                <span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 60
        if (($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))) {
            // line 61
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 63
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 65
        echo "                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Symfony</b>
                <span>
                    <a href=\"https://symfony.com/doc/";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "/index.html\" rel=\"help\">
                        Read Symfony ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo " Docs
                    </a>
                </span>
            </div>
        </div>
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
        // line 80
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array())) {
            echo " title=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()) . $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array())), "html", null, true);
            echo "\"";
        }
        echo ">
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 88
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 89
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasapcu", array())) ? ("green") : ("red"));
        echo "\">APCu</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 90
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haszendopcache", array())) ? ("green") : ("red"));
        echo "\">OPcache</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span>
                    ";
        // line 103
        $context["appVersion"] = twig_slice($this->env, twig_join_filter(twig_split_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), ".")), 0, 2);
        // line 104
        echo "                    <a href=\"http://doc.prestashop.com/display/PS";
        echo twig_escape_filter($this->env, ($context["appVersion"] ?? $this->getContext($context, "appVersion")), "html", null, true);
        echo "\" rel=\"help\">
                        Read PrestaShop ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo " Docs
                    </a>
                </span>
            </div>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 111
        echo "
    ";
        // line 112
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => ($context["block_status"] ?? $this->getContext($context, "block_status")), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? $this->getContext($context, "symfony_version_status"))) . "\"")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 116
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 117
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 123
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 124
            echo "        ";
            // line 125
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 143
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 151
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()))) {
                // line 152
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 157
            echo "
            ";
            // line 158
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()))) {
                // line 159
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 164
            echo "
            ";
            // line 165
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array()))) {
                // line 166
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 167
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 171
            echo "        </div>

        ";
            // line 173
            $context["symfony_status"] = array("dev" => "Unstable Version", "stable" => "Stable Version", "eom" => "Maintenance Ended", "eol" => "Version Expired");
            // line 174
            echo "        ";
            $context["symfony_status_class"] = array("dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error");
            // line 175
            echo "        <table>
            <thead class=\"small\">
                <tr>
                    <th>Symfony Status</th>
                    <th>Bugs ";
            // line 179
            echo ((twig_in_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()), array(0 => "eom", 1 => "eol"))) ? ("were") : ("are"));
            echo " fixed until</th>
                    <th>Security issues ";
            // line 180
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()) == "eol")) ? ("were") : ("are"));
            echo " fixed until</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"font-normal\">
                        <span class=\"label status-";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute(($context["symfony_status_class"] ?? $this->getContext($context, "symfony_status_class")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["symfony_status"] ?? $this->getContext($context, "symfony_status")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()), array(), "array")), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"font-normal\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyeom", array()), "html", null, true);
            echo "</td>
                    <td class=\"font-normal\">";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyeol", array()), "html", null, true);
            echo "</td>
                    <td class=\"font-normal\">
                        <a href=\"https://symfony.com/roadmap?version=";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyminorversion", array()), "html", null, true);
            echo "#checker\">View roadmap</a>
                    </td>
                </tr>
            </tbody>
        </table>
    ";
        }
        // line 198
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array())) {
            echo " <span class=\"unit\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array()), "html", null, true);
            echo "</span>";
        }
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phparchitecture", array()), "html", null, true);
        echo " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpintllocale", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phptimezone", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>Resources</b>
          <span>
            ";
        // line 227
        $context["appVersion"] = twig_slice($this->env, twig_join_filter(twig_split_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), ".")), 0, 2);
        // line 228
        echo "              <a href=\"http://doc.prestashop.com/display/PS";
        echo twig_escape_filter($this->env, ($context["appVersion"] ?? $this->getContext($context, "appVersion")), "html", null, true);
        echo "\" rel=\"help\">
                  Read PrestaShop ";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo " Docs
              </a>
          </span>
        </div>
    </div>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 236
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 241
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasapcu", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 246
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 255
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array())) {
            // line 256
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 266
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 267
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 268
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array()), $context["name"], array(), "array")));
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 271,  556 => 268,  552 => 267,  549 => 266,  545 => 265,  532 => 256,  530 => 255,  524 => 252,  515 => 246,  507 => 241,  499 => 236,  489 => 229,  484 => 228,  482 => 227,  470 => 218,  462 => 213,  454 => 208,  441 => 203,  434 => 198,  425 => 192,  420 => 190,  416 => 189,  409 => 187,  399 => 180,  395 => 179,  389 => 175,  386 => 174,  384 => 173,  380 => 171,  373 => 167,  370 => 166,  368 => 165,  365 => 164,  358 => 160,  355 => 159,  353 => 158,  350 => 157,  343 => 153,  340 => 152,  338 => 151,  331 => 147,  325 => 143,  319 => 140,  310 => 134,  302 => 129,  296 => 125,  294 => 124,  291 => 123,  282 => 122,  268 => 117,  263 => 116,  254 => 115,  242 => 112,  239 => 111,  230 => 105,  225 => 104,  223 => 103,  212 => 95,  204 => 90,  200 => 89,  196 => 88,  187 => 82,  183 => 81,  175 => 80,  164 => 72,  160 => 71,  152 => 65,  146 => 63,  138 => 61,  136 => 60,  127 => 54,  123 => 53,  119 => 51,  117 => 50,  114 => 49,  109 => 47,  104 => 46,  102 => 45,  99 => 44,  96 => 43,  93 => 42,  90 => 41,  87 => 40,  84 => 39,  81 => 38,  78 => 37,  75 => 36,  72 => 35,  69 => 34,  66 => 33,  63 => 32,  60 => 31,  57 => 30,  54 => 29,  51 => 28,  42 => 27,  11 => 25,);
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
{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        <span class=\"sf-toolbar-label\"><img src=\"{{ asset('themes/new-theme/scss/img/glyph.png') }}\" /></span>
        <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.applicationname }}</b>
                <span>{{ collector.applicationversion }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Symfony</b>
                <span>
                    <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                        Read Symfony {{ collector.symfonyversion }} Docs
                    </a>
                </span>
            </div>
        </div>
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span{% if collector.phpversionextra %} title=\"{{ collector.phpversion ~ collector.phpversionextra }}\"{% endif %}>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasapcu ? 'green' : 'red' }}\">APCu</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.haszendopcache ? 'green' : 'red' }}\">OPcache</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span>
                    {% set appVersion = collector.applicationversion|split('.')|join()[:2] %}
                    <a href=\"http://doc.prestashop.com/display/PS{{ appVersion }}\" rel=\"help\">
                        Read PrestaShop {{ collector.applicationversion }} Docs
                    </a>
                </span>
            </div>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>

        {% set symfony_status = { dev: 'Unstable Version', stable: 'Stable Version', eom: 'Maintenance Ended', eol: 'Version Expired' } %}
        {% set symfony_status_class = { dev: 'warning', stable: 'success', eom: 'warning', eol: 'error' } %}
        <table>
            <thead class=\"small\">
                <tr>
                    <th>Symfony Status</th>
                    <th>Bugs {{ collector.symfonystate in ['eom', 'eol'] ? 'were' : 'are' }} fixed until</th>
                    <th>Security issues {{ collector.symfonystate == 'eol' ? 'were' : 'are' }} fixed until</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"font-normal\">
                        <span class=\"label status-{{ symfony_status_class[collector.symfonystate] }}\">{{ symfony_status[collector.symfonystate]|upper }}</span>
                    </td>
                    <td class=\"font-normal\">{{ collector.symfonyeom }}</td>
                    <td class=\"font-normal\">{{ collector.symfonyeol }}</td>
                    <td class=\"font-normal\">
                        <a href=\"https://symfony.com/roadmap?version={{ collector.symfonyminorversion }}#checker\">View roadmap</a>
                    </td>
                </tr>
            </tbody>
        </table>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}{% if collector.phpversionextra %} <span class=\"unit\">{{ collector.phpversionextra }}</span>{% endif %}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phparchitecture }} <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpintllocale }}</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phptimezone }}</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>Resources</b>
          <span>
            {% set appVersion = collector.applicationversion|split('.')|join()[:2] %}
              <a href=\"http://doc.prestashop.com/display/PS{{ appVersion }}\" rel=\"help\">
                  Read PrestaShop {{ collector.applicationversion }} Docs
              </a>
          </span>
        </div>
    </div>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapcu ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ profiler_dump(collector.bundles[name]) }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/config.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\WebProfiler\\config.html.twig");
    }
}
