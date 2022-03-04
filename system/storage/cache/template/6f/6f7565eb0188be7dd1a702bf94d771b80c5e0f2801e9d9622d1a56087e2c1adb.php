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

/* tavifa/template/product/category.twig */
class __TwigTemplate_432ada917d1411a32f48240f19393888ff4135b689aa5ca6586427a14c33580e extends \Twig\Template
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

<div class=\"container\">
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb bg-light p-2\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "                <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ol>
    </nav>
</div>

<div class=\"container py-3\">
    <div class=\"row\">

        ";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "

        ";
        // line 18
        if (($context["column_left"] ?? null)) {
            // line 19
            echo "            ";
            $context["class"] = "col-lg-9";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "            ";
            $context["class"] = "col-lg-12";
            // line 22
            echo "        ";
        }
        // line 23
        echo "
        <div class=\"";
        // line 24
        echo ($context["class"] ?? null);
        echo " content\">

            <h1 class=\"section-title\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>

            ";
        // line 28
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 29
            echo "
                ";
            // line 30
            if (($context["thumb"] ?? null)) {
                // line 31
                echo "                    ";
                $context["desc_class"] = "col-sm-10";
                // line 32
                echo "                ";
            } else {
                // line 33
                echo "                    ";
                $context["desc_class"] = "col-sm-12";
                // line 34
                echo "                ";
            }
            // line 35
            echo "
                <div class=\"row\">
                    ";
            // line 37
            if (($context["thumb"] ?? null)) {
                // line 38
                echo "                        <div class=\"col-sm-2\">
                            <img src=\"";
                // line 39
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\">
                        </div>
                    ";
            }
            // line 42
            echo "                    ";
            if (($context["description"] ?? null)) {
                // line 43
                echo "                        <div class=\"";
                echo ($context["desc_class"] ?? null);
                echo "\">";
                echo ($context["description"] ?? null);
                echo "</div>
                    ";
            }
            // line 45
            echo "                </div>
                <hr>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if (($context["products"] ?? null)) {
            // line 50
            echo "                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"input-group mb-3\">
                            <label class=\"input-group-text\" for=\"input-sort\">";
            // line 53
            echo ($context["text_sort"] ?? null);
            echo "</label>
                            <select class=\"form-select select-sort\" id=\"input-sort\" onchange=\"location = this.value;\">
                                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 56
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 56) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 57
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 57);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 57);
                    echo "</option>
                                    ";
                } else {
                    // line 59
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 59);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 59);
                    echo "</option>
                                    ";
                }
                // line 61
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                            </select>
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <div class=\"input-group mb-3\">
                            <label class=\"input-group-text\" for=\"input-sort\">";
            // line 68
            echo ($context["text_limit"] ?? null);
            echo "</label>
                            <select class=\"form-select select-sort\" id=\"input-limit\" onchange=\"location = this.value;\">
                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 71
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 71) == ($context["limit"] ?? null))) {
                    // line 72
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 72);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 72);
                    echo "</option>
                                    ";
                } else {
                    // line 74
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 74);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 74);
                    echo "</option>
                                    ";
                }
                // line 76
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "                        <div class=\"col-md-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-thumb\">
                                    <a href=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 87);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 87);
                echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"product-details\">
                                    <h4><a href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                echo "</a></h4>
                                    <p>";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 91);
                echo "</p>
                                    <div class=\"product-bottom-details d-flex justify-content-between\">
                                        <div class=\"product-price\">
                                            ";
                // line 94
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "                                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                    echo "
                                            ";
                } else {
                    // line 97
                    echo "                                                <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97);
                    echo "</small>
                                                ";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 98);
                    echo "
                                            ";
                }
                // line 100
                echo "                                        </div>
                                        <div class=\"product-links\">
                                            <a href=\"#\" onclick=\"cart.add('";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                echo "'); return false;\"><i class=\"fas fa-shopping-cart\"></i></a>
                                            <a href=\"#\" onclick=\"wishlist.add('";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 103);
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
            // line 110
            echo "                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <nav>
                            ";
            // line 115
            echo ($context["pagination"] ?? null);
            echo "
                        </nav>
                    </div>
                </div>
            ";
        } else {
            // line 120
            echo "                ";
            echo ($context["text_empty"] ?? null);
            echo "
            ";
        }
        // line 122
        echo "
        </div>

    </div>
</div>

";
        // line 128
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 128,  336 => 122,  330 => 120,  322 => 115,  315 => 110,  302 => 103,  298 => 102,  294 => 100,  289 => 98,  284 => 97,  278 => 95,  276 => 94,  270 => 91,  264 => 90,  256 => 87,  251 => 84,  247 => 83,  239 => 77,  233 => 76,  225 => 74,  217 => 72,  214 => 71,  210 => 70,  205 => 68,  197 => 62,  191 => 61,  183 => 59,  175 => 57,  172 => 56,  168 => 55,  163 => 53,  158 => 50,  156 => 49,  153 => 48,  148 => 45,  140 => 43,  137 => 42,  129 => 39,  126 => 38,  124 => 37,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  106 => 30,  103 => 29,  101 => 28,  96 => 26,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  69 => 16,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/product/category.twig", "");
    }
}
