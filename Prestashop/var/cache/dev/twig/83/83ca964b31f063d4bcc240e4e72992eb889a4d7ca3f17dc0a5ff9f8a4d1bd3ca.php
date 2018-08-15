<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig */
class __TwigTemplate_846a67e249bb152fba6c4352d696a4087d4a5d2a5b6689d2cc579a11c4425399 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig"));

        // line 25
        echo "<div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connect to Addons marketplace", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 34
        if ((($context["level"] ?? $this->getContext($context, "level")) <= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 35
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"alert alert-danger\" role=\"alert\">
                <p class=\"alert-text\">
                  ";
            // line 39
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")), "html", null, true);
            echo "
                </p>
              </div>
            </div>
          </div>
        ";
        } else {
            // line 45
            echo "          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don't have an account yet?", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
                      <a href=\"https://addons.prestashop.com/authentication.php\" target=\"_blank\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign up now", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
                  </p>
                  <form id=\"addons-connect-form\"  action=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addons_login");
            echo "\" method=\"POST\">
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email address", array(), "Admin.Global"), "html", null, true);
            echo "</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "Admin.Global"), "html", null, true);
            echo "</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input name=\"addons_remember_me\" type=\"checkbox\"> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "Admin.Global"), "html", null, true);
            echo "
                    </label>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Let's go!", array(), "Admin.Actions"), "html", null, true);
            echo "</button>
                  <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                </form>
                <p>
                    <a href=\"https://addons.prestashop.com/password.php\" target=\"_blank\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot your password?", array(), "Admin.Global"), "html", null, true);
            echo "</a>
                </p>
              </div>
          </div>
        ";
        }
        // line 74
        echo "      </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title module-modal-title\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm logout", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to log out your Addons account. You might miss important updates of Addons you've bought.", array(), "Admin.Modules.Notification"), "html", null, true);
        echo "
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", array(), "Admin.Actions"), "html", null, true);
        echo "\">
          <a class=\"btn btn-primary uppercase\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addons_logout");
        echo "\" id=\"module-modal-addons-logout-ack\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, log out", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
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
        return "PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 97,  141 => 96,  132 => 90,  123 => 84,  111 => 74,  103 => 69,  96 => 65,  90 => 62,  82 => 57,  75 => 53,  70 => 51,  65 => 49,  61 => 48,  56 => 45,  47 => 39,  41 => 35,  39 => 34,  32 => 30,  25 => 25,);
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
<div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">{{ 'Connect to Addons marketplace'|trans({}, 'Admin.Modules.Feature') }}</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        {% if level <= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE') %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"alert alert-danger\" role=\"alert\">
                <p class=\"alert-text\">
                  {{ errorMessage }}
                </p>
              </div>
            </div>
          </div>
        {% else %}
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      {{ \"Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don't have an account yet?\"|trans({}, 'Admin.Modules.Feature') }}
                      <a href=\"https://addons.prestashop.com/authentication.php\" target=\"_blank\">{{ 'Sign up now'|trans({}, 'Admin.Modules.Feature') }}</a>
                  </p>
                  <form id=\"addons-connect-form\"  action=\"{{ path('admin_addons_login') }}\" method=\"POST\">
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">{{ 'Email address'|trans({}, 'Admin.Global') }}</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">{{ 'Password'|trans({}, 'Admin.Global') }}</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      <input name=\"addons_remember_me\" type=\"checkbox\"> {{ 'Remember me'|trans({}, 'Admin.Global') }}
                    </label>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">{{ \"Let's go!\"|trans({}, 'Admin.Actions') }}</button>
                  <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                </form>
                <p>
                    <a href=\"https://addons.prestashop.com/password.php\" target=\"_blank\">{{ 'Forgot your password?'|trans({}, 'Admin.Global') }}</a>
                </p>
              </div>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title module-modal-title\">{{ 'Confirm logout'|trans({}, 'Admin.Modules.Feature') }}</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    {{ \"You are about to log out your Addons account. You might miss important updates of Addons you've bought.\"|trans({}, 'Admin.Modules.Notification') }}
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\">
          <a class=\"btn btn-primary uppercase\" href=\"{{ path('admin_addons_logout') }}\" id=\"module-modal-addons-logout-ack\">{{ 'Yes, log out'|trans({}, 'Admin.Modules.Feature') }}</a>
      </div>

    </div>
  </div>
</div>
", "PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_addons_connect.html.twig");
    }
}
