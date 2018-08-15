<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig */
class __TwigTemplate_b90e6965d7c622a124b136ed883d7cf426ad573137abefdee8e95ee0da831387 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig"));

        // line 25
        echo "<div id=\"module-modal-bulk-confirm\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk action confirmation", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    ";
        // line 37
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to [1] the following modules:", array(), "Admin.Modules.Notification"), array("[1]" => "<span id=\"module-modal-bulk-confirm-action-name\">[Module Action]</span>"));
        echo "
                  </p>
                  <p id=\"module-modal-bulk-confirm-list\">
                      [Module List Up To 10 Max]
                  </p>

                  <div id=\"module-modal-bulk-checkbox\">
                    <label>
                      <input type=\"checkbox\" id=\"force_bulk_deletion\" name=\"force_bulk_deletion\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional: delete module folder after uninstall.", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "
                    </label>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", array(), "Admin.Actions"), "html", null, true);
        echo "\">
          <a class=\"btn btn-primary uppercase\" data-dismiss=\"modal\" id=\"module-modal-confirm-bulk-ack\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, I want to do it", array(), "Admin.Modules.Feature"), "html", null, true);
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
        return "PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 53,  63 => 52,  53 => 45,  42 => 37,  32 => 30,  25 => 25,);
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
<div id=\"module-modal-bulk-confirm\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">{{ 'Bulk action confirmation'|trans({}, 'Admin.Modules.Feature') }}</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    {{ \"You are about to [1] the following modules:\"|trans({}, 'Admin.Modules.Notification')|replace({'[1]' : '<span id=\"module-modal-bulk-confirm-action-name\">[Module Action]</span>'})|raw }}
                  </p>
                  <p id=\"module-modal-bulk-confirm-list\">
                      [Module List Up To 10 Max]
                  </p>

                  <div id=\"module-modal-bulk-checkbox\">
                    <label>
                      <input type=\"checkbox\" id=\"force_bulk_deletion\" name=\"force_bulk_deletion\"> {{ \"Optional: delete module folder after uninstall.\"|trans({}, 'Admin.Modules.Feature') }}
                    </label>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\">
          <a class=\"btn btn-primary uppercase\" data-dismiss=\"modal\" id=\"module-modal-confirm-bulk-ack\">{{ 'Yes, I want to do it'|trans({}, 'Admin.Modules.Feature') }}</a>
      </div>

    </div>
  </div>
</div>
", "PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_confirm_bulk_action.html.twig");
    }
}
