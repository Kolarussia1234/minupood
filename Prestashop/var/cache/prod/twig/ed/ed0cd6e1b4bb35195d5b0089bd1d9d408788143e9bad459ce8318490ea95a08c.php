<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig */
class __TwigTemplate_d25e1c132f3fe85dc601da7a3d289340bf0509b537a582fecc36f1aa8431ff90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'administration_form_general' => array($this, 'block_administration_form_general'),
            'administration_form_upload_quota' => array($this, 'block_administration_form_upload_quota'),
            'administration_form_notifications' => array($this, 'block_administration_form_notifications'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 28
        list($context["generalForm"], $context["uploadQuotaForm"], $context["notificationsForm"]) =         array($this->getAttribute(($context["form"] ?? null), "general", array()), $this->getAttribute(($context["form"] ?? null), "upload_quota", array()), $this->getAttribute(($context["form"] ?? null), "notifications", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "<div class=\"container\">
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
    <div class=\"row\">
        ";
        // line 34
        $this->displayBlock('administration_form_general', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('administration_form_upload_quota', $context, $blocks);
        // line 108
        echo "    </div>
    <div class=\"row\">
        ";
        // line 110
        $this->displayBlock('administration_form_notifications', $context, $blocks);
        // line 147
        echo "    </div>
    ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    // line 34
    public function block_administration_form_general($context, array $blocks = array())
    {
        // line 35
        echo "            <div class=\"col\">
                <div class=\"card\" id=\"configuration_fieldset_general\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">settings</i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Automatically check for module updates", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New modules and updates are displayed on the modules page.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_modules_update", array()), 'errors');
        echo "
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_modules_update", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the cookie's IP address", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the IP address of the cookie in order to prevent your cookie from being stolen.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_ip_address", array()), 'errors');
        echo "
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "check_ip_address", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lifetime of front office cookies", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the amount of hours during which the front office cookies are valid. After that amount of time, the customer will have to log in again.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "front_cookie_lifetime", array()), 'errors');
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "front_cookie_lifetime", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lifetime of back office cookies", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the amount of hours during which the back office cookies are valid. After that amount of time, the PrestaShop user will have to log in again.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "back_cookie_lifetime", array()), 'errors');
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "back_cookie_lifetime", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    // line 74
    public function block_administration_form_upload_quota($context, array $blocks = array())
    {
        // line 75
        echo "            <div class=\"col\">
                <div class=\"card\" id=\"configuration_fieldset_upload\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">file_upload</i> ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload quota", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for attached files", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the maximum size allowed for attachment files (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", array("%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ATTACHMENT_MAXIMUM_SIZE")), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_attached_files", array()), 'errors');
        echo "
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_attached_files", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for a downloadable product", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", array("%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_FILE_VALUE")), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_downloadable_product", array()), 'errors');
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_downloadable_product", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum size for a product's image", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the upload limit for an image (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).", array("%size%" => $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE")), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_product_image", array()), 'errors');
        echo "
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadQuotaForm"] ?? null), "max_size_product_image", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["uploadQuotaForm"] ?? null), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    // line 110
    public function block_administration_form_notifications($context, array $blocks = array())
    {
        // line 111
        echo "            <div class=\"col\">
                <div class=\"card\" id=\"configuration_fieldset_notifications\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">priority_high</i> ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new orders", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications when new orders are made in your shop.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_orders", array()), 'errors');
        echo "
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_orders", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new customers", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications every time a new customer registers in your shop.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_customers", array()), 'errors');
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_customers", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show notifications for new messages", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will display notifications when new messages are posted in your shop.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_messages", array()), 'errors');
        echo "
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["notificationsForm"] ?? null), "show_notifs_new_messages", array()), 'widget', array("attr" => array("class" => "custom-select")));
        echo "
                            </div>
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["notificationsForm"] ?? null), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 141,  295 => 136,  290 => 134,  286 => 133,  282 => 132,  276 => 129,  272 => 128,  268 => 127,  262 => 124,  258 => 123,  254 => 122,  248 => 119,  240 => 114,  235 => 111,  232 => 110,  222 => 102,  214 => 97,  209 => 95,  205 => 94,  201 => 93,  195 => 90,  191 => 89,  187 => 88,  181 => 85,  177 => 84,  173 => 83,  165 => 78,  160 => 75,  157 => 74,  147 => 67,  139 => 62,  134 => 60,  130 => 59,  126 => 58,  120 => 55,  116 => 54,  112 => 53,  106 => 50,  102 => 49,  98 => 48,  92 => 45,  88 => 44,  84 => 43,  76 => 38,  71 => 35,  68 => 34,  61 => 148,  58 => 147,  56 => 110,  52 => 108,  50 => 74,  47 => 73,  45 => 34,  40 => 32,  37 => 31,  34 => 30,  30 => 25,  28 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\administration.html.twig");
    }
}
