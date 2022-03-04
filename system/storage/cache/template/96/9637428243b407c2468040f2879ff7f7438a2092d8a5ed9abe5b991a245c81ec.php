<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tavifa/template/product/search.twig */
class __TwigTemplate_9281ab710fcc074bafc9ae43f42c20bd0d610ed23396d702ff29ad2e11f7d771 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-search\" class=\"container py-3\">
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb bg-light p-2\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "                <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ol>
    </nav>
    <div class=\"row\">";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <label class=\"control-label\" for=\"input-search\">";
        // line 20
        echo ($context["entry_search"] ?? null);
        echo "</label>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\"
                           id=\"input-search\" class=\"form-control\"/>
                </div>
                <div class=\"col-sm-3\">
                    <select name=\"category_id\" class=\"form-select\">
                        <option value=\"0\">";
        // line 28
        echo ($context["text_category"] ?? null);
        echo "</option>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 30
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                // line 31
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 31);
                echo "\"
                                        selected=\"selected\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 32);
                echo "</option>
                            ";
            } else {
                // line 34
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 34);
                echo "</option>
                            ";
            }
            // line 36
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 37
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 37) == ($context["category_id"] ?? null))) {
                    // line 38
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 38);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 38);
                    echo "</option>
                                ";
                } else {
                    // line 40
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40);
                    echo "\">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    echo "</option>
                                ";
                }
                // line 43
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 44
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 44) == ($context["category_id"] ?? null))) {
                        // line 45
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 45);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 45);
                        echo "</option>
                                    ";
                    } else {
                        // line 47
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 47);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                        echo "</option>
                                    ";
                    }
                    // line 49
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <label class=\"checkbox-inline\">
                        ";
        // line 56
        if (($context["sub_category"] ?? null)) {
            // line 57
            echo "                            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>
                        ";
        } else {
            // line 59
            echo "                            <input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>
                        ";
        }
        // line 61
        echo "                        ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
                </div>
            </div>
            <p>
                <label class=\"checkbox-inline\">
                    ";
        // line 66
        if (($context["description"] ?? null)) {
            // line 67
            echo "                        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>
                    ";
        } else {
            // line 69
            echo "                        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>
                    ";
        }
        // line 71
        echo "                    ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
            </p>
            <input type=\"button\" value=\"";
        // line 73
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"/>
            <h2>";
        // line 74
        echo ($context["text_search"] ?? null);
        echo "</h2>
            ";
        // line 75
        if (($context["products"] ?? null)) {
            // line 76
            echo "                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"input-group mb-3\">
                            <label class=\"input-group-text\" for=\"input-sort\">";
            // line 79
            echo ($context["text_sort"] ?? null);
            echo "</label>
                            <select class=\"form-select select-sort\" id=\"input-sort\" onchange=\"location = this.value;\">
                                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 82
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 82) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 83
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 83);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 83);
                    echo "</option>
                                    ";
                } else {
                    // line 85
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 85);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 85);
                    echo "</option>
                                    ";
                }
                // line 87
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                            </select>
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"input-group mb-3\">
                            <label class=\"input-group-text\" for=\"input-sort\">";
            // line 94
            echo ($context["text_limit"] ?? null);
            echo "</label>
                            <select class=\"form-select select-sort\" id=\"input-limit\" onchange=\"location = this.value;\">
                                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 97
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 97) == ($context["limit"] ?? null))) {
                    // line 98
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 98);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 98);
                    echo "</option>
                                    ";
                } else {
                    // line 100
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 100);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 100);
                    echo "</option>
                                    ";
                }
                // line 102
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 110
                echo "                        <div class=\"col-md-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-thumb\">
                                    <a href=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 113);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 113);
                echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"product-details\">
                                    <h4><a href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 116);
                echo "</a></h4>
                                    <p>";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 117);
                echo "</p>
                                    <div class=\"product-bottom-details d-flex justify-content-between\">
                                        <div class=\"product-price\">
                                            ";
                // line 120
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "                                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 121);
                    echo "
                                            ";
                } else {
                    // line 123
                    echo "                                                <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 123);
                    echo "</small>
                                                ";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 124);
                    echo "
                                            ";
                }
                // line 126
                echo "                                        </div>
                                        <div class=\"product-links\">
                                            <a href=\"#\" onclick=\"cart.add('";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                echo "'); return false;\"><i class=\"fas fa-shopping-cart\"></i></a>
                                            <a href=\"#\" onclick=\"wishlist.add('";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "'); return false;\"><i class=\"far fa-heart\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <nav>
                            ";
            // line 141
            echo ($context["pagination"] ?? null);
            echo "
                        </nav>
                    </div>
                </div>
            ";
        } else {
            // line 146
            echo "                <p>";
            echo ($context["text_empty2"] ?? null);
            echo "</p>
            ";
        }
        // line 148
        echo "            ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 149
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-search').bind('click', function () {
        url = 'index.php?route=product/search';

        var search = \$('#content input[name=\\'search\\']').prop('value');

        if (search) {
            url += '&search=' + encodeURIComponent(search);
        }

        var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

        if (category_id > 0) {
            url += '&category_id=' + encodeURIComponent(category_id);
        }

        var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

        if (sub_category) {
            url += '&sub_category=true';
        }

        var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

        if (filter_description) {
            url += '&description=true';
        }

        location = url;
    });

    \$('#content input[name=\\'search\\']').bind('keydown', function (e) {
        if (e.keyCode == 13) {
            \$('#button-search').trigger('click');
        }
    });

    \$('select[name=\\'category_id\\']').on('change', function () {
        if (this.value == '0') {
            \$('input[name=\\'sub_category\\']').prop('disabled', true);
        } else {
            \$('input[name=\\'sub_category\\']').prop('disabled', false);
        }
    });

    \$('select[name=\\'category_id\\']').trigger('change');
    --></script>
";
        // line 198
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 198,  445 => 149,  440 => 148,  434 => 146,  426 => 141,  419 => 136,  406 => 129,  402 => 128,  398 => 126,  393 => 124,  388 => 123,  382 => 121,  380 => 120,  374 => 117,  368 => 116,  360 => 113,  355 => 110,  351 => 109,  343 => 103,  337 => 102,  329 => 100,  321 => 98,  318 => 97,  314 => 96,  309 => 94,  301 => 88,  295 => 87,  287 => 85,  279 => 83,  276 => 82,  272 => 81,  267 => 79,  262 => 76,  260 => 75,  256 => 74,  252 => 73,  246 => 71,  242 => 69,  238 => 67,  236 => 66,  227 => 61,  223 => 59,  219 => 57,  217 => 56,  211 => 52,  205 => 51,  199 => 50,  193 => 49,  185 => 47,  177 => 45,  174 => 44,  169 => 43,  164 => 41,  159 => 40,  151 => 38,  148 => 37,  143 => 36,  135 => 34,  130 => 32,  125 => 31,  122 => 30,  118 => 29,  114 => 28,  104 => 23,  98 => 20,  94 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/product/search.twig", "");
    }
}
