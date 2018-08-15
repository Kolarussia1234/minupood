<?php

/* PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig */
class __TwigTemplate_6f90d393fe4e7b9e82b3184eb8e2143d257f1fcb5647f198184dff1d39d79ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
    }

    // line 25
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        // line 26
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <ul class=\"category-tree\">";
        // line 28
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
            // line 29
            echo "        ";
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
        // line 31
        echo "</ul>
  </div>";
    }

    // line 35
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        // line 36
        echo "<li>
    ";
        // line 37
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 38
        echo "
    <div class=\"radio\">
      <label class=\"category-label\" for=\"form[";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
        echo "
        <input
          type=\"radio\"
          name=\"form[";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
          value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo "
          class=\"category float-right\"
        >
      </label>
    </div>

    ";
        // line 50
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 51
            echo "      <ul>
        ";
            // line 52
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
                // line 53
                echo "          ";
                $context["child"] = $context["item"];
                // line 54
                echo "          ";
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
            // line 56
            echo "</ul>
    ";
        }
        // line 58
        echo "  </li>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  154 => 56,  137 => 54,  134 => 53,  117 => 52,  114 => 51,  112 => 50,  101 => 44,  97 => 43,  89 => 40,  85 => 38,  83 => 37,  80 => 36,  77 => 35,  72 => 31,  55 => 29,  38 => 28,  33 => 26,  30 => 25,  26 => 35,  23 => 34,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Product/Themes:categories_theme.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Product/Themes/categories_theme.html.twig");
    }
}
