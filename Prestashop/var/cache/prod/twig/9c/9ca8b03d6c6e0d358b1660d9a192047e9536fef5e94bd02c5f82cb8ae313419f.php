<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig */
class __TwigTemplate_8bdd779b132e1c407d73b3f3d48366e04f5cc92069776888830071d666f4c2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'translate_text_widget' => array($this, 'block_translate_text_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('time_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 252
        echo "
";
        // line 253
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 347
        echo "
";
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('form_label', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('choice_label', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('radio_label', $context, $blocks);
        // line 368
        echo "
";
        // line 369
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 387
        echo "
";
        // line 389
        echo "
";
        // line 390
        $this->displayBlock('form_row', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('button_row', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('choice_row', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('date_row', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('time_row', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('radio_row', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        echo "
";
        // line 440
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 51
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 55
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 56
        if (($context["prepend"] ?? null)) {
            // line 57
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 58
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 61
        echo "    </div>";
    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 74
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 75
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 77
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 78
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 83
            echo "</div>";
        }
    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        // line 88
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 93
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 95
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 96
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 100
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 101
                echo "</div>";
            }
        }
    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        // line 107
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 111
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 112
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 115
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 116
                echo "</div>";
            }
        }
    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            echo "<div class=\"control-group\">";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 131
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 132
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</div>";
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 140
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 141
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        }
    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 149
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 150
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 153
            echo "<div class=\"checkbox\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 155
            echo "</div>";
        }
    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 160
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 161
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 164
            echo "<div class=\"radio\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 166
            echo "</div>";
        }
    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        // line 171
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</ul>
    </div>";
    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        // line 182
        echo "<li>
        ";
        // line 183
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 184
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 185
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
                    ";
            // line 188
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", array()) == 0))) {
                // line 189
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 193
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 194
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 196
            echo "                </label>
            </div>";
        } else {
            // line 199
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
            echo "
                    ";
            // line 203
            if (array_key_exists("defaultCategory", $context)) {
                // line 204
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 206
            echo "                </label>
            </div>";
        }
        // line 209
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 210
            echo "            <ul>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 212
                echo "                    ";
                $context["child"] = $context["item"];
                // line 213
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "</ul>
        ";
        }
        // line 217
        echo "    </li>";
    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        // line 221
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 223
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 224
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 226
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" class=\"";
                // line 227
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 228
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </ul>
        ";
        }
        // line 234
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 237
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>
";
    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        // line 247
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 257
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")) . " js-locale-input");
            // line 258
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "label", array()));
            // line 259
            echo "
            ";
            // line 260
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", array()) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "name", array()))) {
                // line 261
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 262
                echo "            ";
            }
            // line 263
            echo "
            ";
            // line 264
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "attr", array());
            // line 265
            echo "
            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', array("attr" => array("class" => twig_trim_filter(($context["classes"] ?? null)))));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "
        ";
        // line 269
        if ( !($context["hide_locales"] ?? null)) {
            // line 270
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "default_locale", array()), "iso_code", array()), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\">
                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 283
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </div>
        </div>
        ";
        }
        // line 288
        echo "    </div>";
    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        // line 292
        echo "    ";
        ob_start();
        // line 293
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 294
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 295
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 305
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 306
        echo "    ";
        ob_start();
        // line 307
        echo "    <span class=\"ps-switch\">
        ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 309
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", array()));
            // line 310
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 311
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        // line 319
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 323
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 335
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 336
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 350
    public function block_form_label($context, array $blocks = array())
    {
        // line 351
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 352
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 355
    public function block_choice_label($context, array $blocks = array())
    {
        // line 357
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 358
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 361
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 362
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 365
    public function block_radio_label($context, array $blocks = array())
    {
        // line 366
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 369
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 370
        echo "    ";
        // line 371
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 372
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 373
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 375
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 376
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
            }
            // line 378
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 379
                echo "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
            // line 381
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 382
            echo ($context["widget"] ?? null);
            // line 383
            echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
            // line 384
            echo "</label>
    ";
        }
    }

    // line 390
    public function block_form_row($context, array $blocks = array())
    {
        // line 391
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 395
        echo "</div>";
    }

    // line 398
    public function block_button_row($context, array $blocks = array())
    {
        // line 399
        echo "<div class=\"form-group\">";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 401
        echo "</div>";
    }

    // line 404
    public function block_choice_row($context, array $blocks = array())
    {
        // line 405
        $context["force_error"] = true;
        // line 406
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 409
    public function block_date_row($context, array $blocks = array())
    {
        // line 410
        $context["force_error"] = true;
        // line 411
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 414
    public function block_time_row($context, array $blocks = array())
    {
        // line 415
        $context["force_error"] = true;
        // line 416
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 419
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 420
        $context["force_error"] = true;
        // line 421
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 424
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 425
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 428
        echo "</div>";
    }

    // line 431
    public function block_radio_row($context, array $blocks = array())
    {
        // line 432
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 435
        echo "</div>";
    }

    // line 440
    public function block_form_errors($context, array $blocks = array())
    {
        // line 441
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 442
            echo "<div class=\"alert alert-danger\">";
            // line 443
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 444
                echo "<ul class=\"alert-text\">";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 446
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 447
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 448
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 449
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 450
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 453
                echo "</ul>";
            } else {
                // line 455
                echo "<div class=\"alert-text\">";
                // line 456
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 457
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 458
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 459
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 460
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 461
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "</div>";
            }
            // line 466
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1332 => 466,  1329 => 464,  1322 => 461,  1320 => 460,  1319 => 459,  1318 => 458,  1316 => 457,  1312 => 456,  1310 => 455,  1307 => 453,  1300 => 450,  1298 => 449,  1297 => 448,  1296 => 447,  1294 => 446,  1290 => 445,  1288 => 444,  1286 => 443,  1284 => 442,  1282 => 441,  1279 => 440,  1275 => 435,  1273 => 434,  1271 => 433,  1265 => 432,  1262 => 431,  1258 => 428,  1256 => 427,  1254 => 426,  1248 => 425,  1245 => 424,  1241 => 421,  1239 => 420,  1236 => 419,  1232 => 416,  1230 => 415,  1227 => 414,  1223 => 411,  1221 => 410,  1218 => 409,  1214 => 406,  1212 => 405,  1209 => 404,  1205 => 401,  1203 => 400,  1201 => 399,  1198 => 398,  1194 => 395,  1192 => 394,  1190 => 393,  1188 => 392,  1182 => 391,  1179 => 390,  1173 => 384,  1171 => 383,  1169 => 382,  1154 => 381,  1150 => 379,  1147 => 378,  1143 => 376,  1140 => 375,  1136 => 373,  1133 => 372,  1130 => 371,  1128 => 370,  1125 => 369,  1121 => 366,  1118 => 365,  1114 => 362,  1111 => 361,  1107 => 358,  1105 => 357,  1102 => 355,  1098 => 352,  1096 => 351,  1093 => 350,  1084 => 341,  1067 => 338,  1063 => 337,  1059 => 336,  1056 => 335,  1039 => 334,  1033 => 330,  1029 => 329,  1025 => 328,  1017 => 323,  1011 => 320,  1006 => 319,  1003 => 318,  996 => 313,  978 => 311,  960 => 310,  957 => 309,  940 => 308,  937 => 307,  934 => 306,  931 => 305,  912 => 295,  909 => 294,  906 => 293,  903 => 292,  900 => 291,  896 => 288,  891 => 285,  880 => 283,  876 => 282,  872 => 281,  866 => 278,  861 => 276,  853 => 270,  851 => 269,  848 => 268,  840 => 266,  837 => 265,  835 => 264,  832 => 263,  829 => 262,  826 => 261,  824 => 260,  821 => 259,  818 => 258,  815 => 257,  811 => 256,  806 => 254,  803 => 253,  799 => 250,  796 => 248,  794 => 247,  791 => 246,  785 => 242,  776 => 239,  772 => 238,  753 => 237,  749 => 236,  745 => 234,  741 => 232,  731 => 228,  723 => 227,  720 => 226,  716 => 225,  713 => 224,  711 => 223,  707 => 222,  702 => 221,  699 => 220,  695 => 217,  691 => 215,  674 => 213,  671 => 212,  654 => 211,  651 => 210,  648 => 209,  644 => 206,  638 => 204,  636 => 203,  632 => 202,  624 => 201,  620 => 199,  616 => 196,  610 => 194,  607 => 193,  602 => 191,  597 => 189,  595 => 188,  587 => 187,  583 => 185,  580 => 184,  578 => 183,  575 => 182,  572 => 181,  567 => 177,  550 => 175,  533 => 174,  530 => 173,  524 => 171,  521 => 170,  516 => 166,  514 => 165,  512 => 164,  509 => 162,  507 => 161,  505 => 160,  502 => 159,  497 => 155,  495 => 154,  493 => 153,  490 => 151,  488 => 150,  486 => 149,  483 => 148,  478 => 144,  472 => 141,  471 => 140,  470 => 139,  466 => 138,  462 => 137,  459 => 135,  453 => 132,  452 => 131,  451 => 130,  447 => 129,  445 => 128,  443 => 127,  440 => 126,  436 => 123,  434 => 122,  431 => 121,  425 => 116,  422 => 115,  414 => 114,  409 => 112,  407 => 111,  405 => 110,  402 => 108,  400 => 107,  397 => 106,  391 => 101,  389 => 100,  387 => 98,  386 => 97,  385 => 96,  384 => 95,  379 => 93,  377 => 92,  375 => 91,  372 => 89,  370 => 88,  367 => 87,  362 => 83,  360 => 82,  358 => 81,  356 => 80,  354 => 79,  350 => 78,  348 => 77,  345 => 75,  343 => 74,  340 => 73,  333 => 67,  331 => 66,  329 => 65,  326 => 64,  322 => 61,  316 => 58,  313 => 57,  311 => 56,  309 => 55,  303 => 52,  300 => 51,  297 => 50,  295 => 49,  292 => 48,  289 => 47,  285 => 44,  283 => 43,  280 => 42,  276 => 39,  274 => 38,  271 => 37,  267 => 34,  264 => 32,  262 => 31,  259 => 30,  255 => 440,  252 => 439,  249 => 437,  247 => 431,  244 => 430,  242 => 424,  239 => 423,  237 => 419,  234 => 418,  232 => 414,  229 => 413,  227 => 409,  224 => 408,  222 => 404,  219 => 403,  217 => 398,  214 => 397,  212 => 390,  209 => 389,  206 => 387,  204 => 369,  201 => 368,  199 => 365,  196 => 364,  194 => 361,  191 => 360,  189 => 355,  186 => 354,  184 => 350,  181 => 349,  178 => 347,  176 => 318,  173 => 317,  171 => 305,  168 => 304,  166 => 291,  163 => 290,  161 => 253,  158 => 252,  156 => 246,  153 => 245,  151 => 220,  148 => 219,  146 => 181,  143 => 180,  141 => 170,  138 => 169,  136 => 159,  133 => 158,  131 => 148,  128 => 147,  126 => 126,  123 => 125,  121 => 121,  118 => 120,  116 => 106,  113 => 105,  111 => 87,  108 => 86,  106 => 73,  103 => 72,  101 => 64,  98 => 63,  96 => 47,  93 => 46,  91 => 42,  88 => 41,  86 => 37,  83 => 36,  81 => 30,  78 => 29,  75 => 27,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
