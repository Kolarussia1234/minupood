<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig */
class __TwigTemplate_93cdec91c8bc95c2974fd6ea0ae0dea3a751dd1ff7e4a19d9881a8e34f4f3e96 extends Twig_Template
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
    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = array())
    {
        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo ($context["remote_url"] ?? null);
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\"
    >
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control search typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>
        <ul id=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            ";
        // line 41
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) {
            // line 42
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
                echo sprintf(($context["template_collection"] ?? null), $this->getAttribute($context["item"], "name", array()));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\">
          ";
        // line 56
        echo ($context["template_collection"] ?? null);
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
    }

    // line 66
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = array())
    {
        // line 67
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 69
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) {
            // line 70
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
                echo sprintf(($context["template_collection"] ?? null), $this->getAttribute($context["item"], "name", array()), $this->getAttribute($context["item"], "ref", array()), $this->getAttribute($context["item"], "quantity", array()));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 133
        ob_start();
        echo ($context["template_collection"] ?? null);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 153
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 156
        echo ($context["remote_url"] ?? null);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 190
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo "',
                    source: this['";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
    }

    // line 211
    public function block_typeahead_customer_collection_widget($context, array $blocks = array())
    {
        // line 212
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-sm-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 235
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 238
        echo ($context["remote_url"] ?? null);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 258
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo "',
                source: this['";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 263
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 269
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 273
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 279
        ob_start();
        echo ($context["template_collection"] ?? null);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  558 => 283,  554 => 282,  549 => 280,  541 => 279,  532 => 273,  521 => 269,  512 => 263,  505 => 259,  501 => 258,  491 => 251,  475 => 238,  469 => 235,  462 => 231,  446 => 218,  439 => 214,  431 => 213,  426 => 212,  423 => 211,  413 => 204,  397 => 191,  393 => 190,  384 => 184,  365 => 168,  350 => 156,  344 => 153,  337 => 149,  330 => 145,  323 => 141,  318 => 139,  314 => 138,  307 => 134,  299 => 133,  289 => 126,  283 => 123,  274 => 117,  263 => 109,  251 => 100,  246 => 98,  238 => 93,  224 => 86,  217 => 82,  213 => 80,  210 => 79,  194 => 75,  184 => 74,  178 => 73,  170 => 71,  165 => 70,  163 => 69,  159 => 68,  152 => 67,  149 => 66,  141 => 61,  137 => 60,  130 => 56,  126 => 55,  123 => 54,  120 => 53,  109 => 50,  104 => 48,  98 => 45,  94 => 43,  89 => 42,  87 => 41,  83 => 40,  74 => 38,  68 => 35,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  47 => 29,  43 => 28,  39 => 26,  36 => 25,  32 => 211,  29 => 210,  27 => 66,  24 => 65,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "C:\\xampp\\htdocs\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
