<?php

/* @PrestaShop/Admin/WebProfiler/hooks_collector.html.twig */
class __TwigTemplate_6a8baa1c7a91562d144e015e6eb8894ebc220a107d17af2439b7ba955267d22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", 25);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        // line 27
        $context["helper"] = $this;
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "
        <span class=\"sf-toolbar-value\">Hooks (";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array())), "html", null, true);
        echo ")</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
    ";
        // line 35
        ob_start();
        // line 36
        echo "        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array())), "html", null, true);
        echo " Hooks called</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
            // line 50
            echo "                            <tr><td>";
            echo twig_escape_filter($this->env, $context["hookName"], "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["hooks"]), "html", null, true);
            echo "</td></tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hookName'], $context['hooks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
    ";
        // line 60
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 65
        echo "    ";
        // line 66
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 67
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
        <strong>Hooks</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 73
        echo "    <h2>Hooks</h2>

    ";
        // line 75
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array()))) {
            // line 76
            echo "        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 80
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Hooks <span class=\"badge\">";
            // line 82
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 85
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array()), true);
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Hooks <span class=\"badge\">";
            // line 90
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 92
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array()))) {
                // line 93
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 104
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array()), false);
                echo "
                    ";
            }
            // line 106
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function getrender_table($__hookList__ = null, $__hookModules__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "hookList" => $__hookList__,
            "hookModules" => $__hookModules__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 113
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hookList"] ?? $this->getContext($context, "hookList")));
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 114
                echo "        <h3>";
                echo twig_escape_filter($this->env, $context["hookName"], "html", null, true);
                echo "</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    ";
                // line 121
                if (($context["hookModules"] ?? $this->getContext($context, "hookModules"))) {
                    // line 122
                    echo "                        <th>Hooked modules</th>
                    ";
                }
                // line 124
                echo "                </tr>
            </thead>
            <tbody>
            ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["hooks"]);
                foreach ($context['_seq'] as $context["position"] => $context["hook"]) {
                    // line 128
                    echo "            <tr>
                <td>
                    ";
                    // line 130
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["hook"], "args", array())));
                    echo "
                </td>
                <td>
                    <span class=\"text-muted\">";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "location", array()), "html", null, true);
                    echo "</span>
                </td>
                ";
                    // line 135
                    if (($context["hookModules"] ?? $this->getContext($context, "hookModules"))) {
                        // line 136
                        echo "                    <td>
                        ";
                        // line 137
                        $context["modules"] = $this->getAttribute($context["hook"], "modules", array());
                        // line 138
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                        foreach ($context['_seq'] as $context["moduleName"] => $context["module"]) {
                            // line 139
                            echo "                            <h4><b>";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["moduleName"]), "html", null, true);
                            echo "</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                ";
                            // line 147
                            if ($this->getAttribute($context["module"], "callback", array(), "any", true, true)) {
                                // line 148
                                echo "                                <tr>
                                    <td>";
                                // line 149
                                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($context["module"], "callback", array()), "args", array())));
                                echo "</td>
                                </tr>
                                ";
                            } else {
                                // line 152
                                echo "                                <tr>
                                    <td>";
                                // line 153
                                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($context["module"], "widget", array()), "args", array())));
                                echo "</td>
                                </tr>
                                ";
                            }
                            // line 156
                            echo "                            </table>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['moduleName'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 158
                        echo "                    </td>
                ";
                    }
                    // line 160
                    echo "            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['position'], $context['hook'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "            </tbody>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['hookName'], $context['hooks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 162,  362 => 160,  358 => 158,  351 => 156,  345 => 153,  342 => 152,  336 => 149,  333 => 148,  331 => 147,  319 => 139,  314 => 138,  312 => 137,  309 => 136,  307 => 135,  302 => 133,  296 => 130,  292 => 128,  288 => 127,  283 => 124,  279 => 122,  277 => 121,  266 => 114,  261 => 113,  242 => 112,  228 => 106,  222 => 104,  209 => 93,  207 => 92,  202 => 90,  194 => 85,  188 => 82,  184 => 80,  178 => 76,  176 => 75,  172 => 73,  163 => 72,  149 => 67,  146 => 66,  144 => 65,  135 => 64,  122 => 60,  119 => 59,  112 => 54,  105 => 52,  95 => 50,  90 => 49,  76 => 38,  72 => 36,  70 => 35,  67 => 34,  62 => 32,  57 => 31,  54 => 30,  45 => 29,  35 => 25,  33 => 27,  11 => 25,);
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

{% import _self as helper %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/event.svg') }}
        <span class=\"sf-toolbar-value\">Hooks ({{ collector.calledHooks|length }})</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">{{ collector.calledHooks|length }} Hooks called</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for hookName, hooks in collector.calledHooks %}
                            <tr><td>{{ hookName }}</td><td>{{ hooks|length }}</td></tr>
                        {% else %}
                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}

{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
        <strong>Hooks</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Hooks</h2>

    {% if collector.notCalledHooks is empty %}
        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Hooks <span class=\"badge\">{{ collector.calledHooks|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledHooks, true) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Hooks <span class=\"badge\">{{ collector.notCalledHooks|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notCalledHooks is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notCalledHooks, false) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(hookList, hookModules) %}
    {% for hookName, hooks in hookList %}
        <h3>{{ hookName }}</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    {% if hookModules %}
                        <th>Hooked modules</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% for position, hook in hooks %}
            <tr>
                <td>
                    {{ profiler_dump(hook.args) }}
                </td>
                <td>
                    <span class=\"text-muted\">{{ hook.location }}</span>
                </td>
                {% if hookModules %}
                    <td>
                        {% set modules = hook.modules %}
                        {% for moduleName, module in modules %}
                            <h4><b>{{ moduleName|capitalize }}</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                {% if module.callback is defined %}
                                <tr>
                                    <td>{{ profiler_dump(module.callback.args) }}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td>{{ profiler_dump(module.widget.args) }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        {% endfor %}
                    </td>
                {% endif %}
            </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endmacro %}
", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\WebProfiler\\hooks_collector.html.twig");
    }
}
