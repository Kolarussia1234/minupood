<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig */
class __TwigTemplate_feba9f354036412645f386bb782d5e38ee26a82abc2a9dc93945dbf9042507ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'typeahead_product_collection_widget' => array($this, 'block_typeahead_product_collection_widget'),
            'typeahead_product_pack_collection_widget' => array($this, 'block_typeahead_product_pack_collection_widget'),
            'typeahead_customer_collection_widget' => array($this, 'block_typeahead_customer_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig"));

        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "\"
    >
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control search typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>
        <ul id=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            ";
        // line 41
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 42
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 48
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        // line 54
        echo "        </ul>
        <div class=\"invisible\" id=\"tplcollection-";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
          ";
        // line 56
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        // line 67
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 69
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 70
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" /> ";
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()), $this->getAttribute($context["item"], "ref", array()), $this->getAttribute($context["item"], "quantity", array()));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        ";
        }
        // line 80
        echo "    </ul>

    <h2>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", array(), "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 133
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 153
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 156
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 190
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                    source: this['";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_typeahead_customer_collection_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        // line 212
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-sm-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 235
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 238
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 258
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                source: this['";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 263
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 269
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 273
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 279
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  600 => 283,  596 => 282,  591 => 280,  583 => 279,  574 => 273,  563 => 269,  554 => 263,  547 => 259,  543 => 258,  533 => 251,  517 => 238,  511 => 235,  504 => 231,  488 => 218,  481 => 214,  473 => 213,  468 => 212,  459 => 211,  443 => 204,  427 => 191,  423 => 190,  414 => 184,  395 => 168,  380 => 156,  374 => 153,  367 => 149,  360 => 145,  353 => 141,  348 => 139,  344 => 138,  337 => 134,  329 => 133,  319 => 126,  313 => 123,  304 => 117,  293 => 109,  281 => 100,  276 => 98,  268 => 93,  254 => 86,  247 => 82,  243 => 80,  240 => 79,  224 => 75,  214 => 74,  208 => 73,  200 => 71,  195 => 70,  193 => 69,  189 => 68,  182 => 67,  173 => 66,  159 => 61,  155 => 60,  148 => 56,  144 => 55,  141 => 54,  138 => 53,  127 => 50,  122 => 48,  116 => 45,  112 => 43,  107 => 42,  105 => 41,  101 => 40,  92 => 38,  86 => 35,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  61 => 28,  57 => 26,  48 => 25,  38 => 211,  35 => 210,  33 => 66,  30 => 65,  28 => 25,);
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
{% block typeahead_product_collection_widget %}
    <div
      class=\"autocomplete-search\"
      data-formid=\"{{ form.vars.id }}\"
      data-fullname=\"{{ form.vars.full_name }}\"
      data-mappingvalue=\"{{ mapping_value }}\"
      data-mappingname=\"{{ mapping_name }}\"
      data-remoteurl=\"{{ remote_url|raw }}\"
      data-limit=\"{{ limit }}\"
    >
        {{ form_errors(form) }}

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control search typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\">
        </div>
        <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            {% if collection is defined and collection|length > 0 %}
                {% for item in collection %}
                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"{{ item.image }}\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        {{ template_collection|format(item.name)|raw }}
                      </div>
                      <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
                    </li>
                {% endfor %}
            {% endif %}
        </ul>
        <div class=\"invisible\" id=\"tplcollection-{{ form.vars.id }}\">
          {{ template_collection|raw }}
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#{{ form.vars.id }}').on('focusout', function resetSearchBar() {
        \$('#{{ form.vars.id }}').typeahead('val', '');
      });
    </script>
{% endblock %}

{% block typeahead_product_pack_collection_widget %}
    <h2 class=\"title-products {{ collection is defined and collection|length > 0 ? '' : 'hide' }}\">{{ 'List of products for this pack'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list pack nostyle row\">
        {% if collection is defined and collection|length > 0 %}
            {% for item in collection %}
                <li data-product=\"{{ item.id }}-{{ item.id_product_attribute }}\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"{{ item.image }}\" /> {{ template_collection|format(item.name, item.ref, item.quantity)|raw }}
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                    </div>
                </li>
            {% endfor %}
        {% endif %}
    </ul>

    <h2>{{ form.vars.label }}</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead search {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"{{ form.vars.id }}-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"{{ form.vars.id }}-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    {{ \"Add\"|trans({}, \"Admin.Actions\") }}
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_{{ form.vars.id }} h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#{{ form.vars.id }}-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#{{ form.vars.id }}-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', data.{{ mapping_name }}, data.ref, number);
                        html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#{{ form.vars.id }}-data').append(html);
                        \$('#js_{{ form.vars.id }} h4.title-products').removeClass('hide');

                        \$('#{{ form.vars.id }}').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#{{ form.vars.id }}-curPackItemQty').val(1);
                });

                //define source
                this['{{ form.vars.id }}_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.{{ mapping_value }};
                    },
                    remote: {
                        url: '{{ remote_url|raw }}',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#{{ form.vars.id }}-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#{{ form.vars.id }}').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '{{ mapping_name }}',
                    source: this['{{ form.vars.id }}_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#{{ form.vars.id }}-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
{% endblock %}

{% block typeahead_customer_collection_widget %}
    {{ form_errors(form) }}
    <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list product-list nostyle col-sm-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['{{ form.vars.id }}_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.{{ mapping_value }};
                },
                remote: {
                    url: '{{ remote_url|raw }}',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#{{ form.vars.id }}').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '{{ mapping_name }}',
                source: this['{{ form.vars.id }}_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.{{ mapping_name }} +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if({{ limit }} != 0 && \$('#{{ form.vars.id }}-data li').length >= {{ limit }}){
                    return;
                }

                var value = suggestion.{{ mapping_value }};
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', suggestion.{{ mapping_name }});
                html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#{{ form.vars.id }}-data').show();
                \$('#{{ form.vars.id }}-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
{% endblock %}
", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
