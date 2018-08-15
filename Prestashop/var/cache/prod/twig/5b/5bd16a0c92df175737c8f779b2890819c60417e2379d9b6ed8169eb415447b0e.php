<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_57c931e2acab6c100953edf6d5e6be5258063a66573c524e77bb4adb4d19db95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'text_with_unit_widget' => array($this, 'block_text_with_unit_widget'),
                'ip_address_text_widget' => array($this, 'block_ip_address_text_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_row', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('submit_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('switch_widget', $context, $blocks);
    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        echo "        ";
        if ((($context["label"] ?? null) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 38
            echo "            ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 41
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 45
        echo "col-sm-2";
    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "        <div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 73
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 74
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        // line 83
        ob_start();
        // line 84
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 94
        echo "col-sm-10";
    }

    // line 97
    public function block_text_with_unit_widget($context, array $blocks = array())
    {
        // line 98
        echo "<div class=\"input-group\">";
        // line 99
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 100
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "unit", array(), "any", true, true)) {
            // line 101
            echo "        <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "unit", array()), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 105
        echo "</div>
";
    }

    // line 108
    public function block_ip_address_text_widget($context, array $blocks = array())
    {
        // line 109
        echo "<div class=\"input-group\">";
        // line 110
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 111
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", array(), "Admin.Actions"), "html", null, true);
        echo "
    </button>
</div>
";
    }

    // line 117
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 118
        echo "<div class=\"input-group\">";
        // line 119
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 120
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  311 => 120,  309 => 119,  307 => 118,  304 => 117,  296 => 112,  291 => 111,  289 => 110,  287 => 109,  284 => 108,  279 => 105,  273 => 102,  270 => 101,  268 => 100,  266 => 99,  264 => 98,  261 => 97,  257 => 94,  254 => 93,  245 => 87,  241 => 86,  237 => 85,  234 => 84,  232 => 83,  229 => 82,  220 => 76,  216 => 75,  212 => 74,  208 => 73,  201 => 72,  199 => 71,  196 => 70,  192 => 67,  189 => 66,  185 => 63,  182 => 62,  173 => 56,  169 => 55,  165 => 54,  161 => 53,  154 => 52,  152 => 51,  149 => 50,  145 => 45,  142 => 44,  137 => 41,  134 => 39,  131 => 38,  125 => 36,  122 => 35,  120 => 34,  117 => 33,  113 => 28,  111 => 27,  108 => 26,  104 => 117,  101 => 116,  99 => 108,  96 => 107,  94 => 97,  91 => 96,  89 => 93,  86 => 92,  84 => 82,  81 => 81,  79 => 70,  76 => 69,  74 => 66,  71 => 65,  69 => 62,  66 => 61,  64 => 50,  61 => 49,  58 => 47,  56 => 44,  53 => 43,  51 => 33,  48 => 32,  45 => 30,  43 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
