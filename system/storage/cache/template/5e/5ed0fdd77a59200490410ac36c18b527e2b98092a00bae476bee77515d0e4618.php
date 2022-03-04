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

/* tavifa/template/checkout/cart.twig */
class __TwigTemplate_58e7cec8ae2b668d4e2ae92aa822c5c14e166dc9c15af01e137fb848031a4ddc extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container py-3\">
    <ol class=\"breadcrumb bg-light p-2\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ol>
    ";
        // line 8
        if (($context["attention"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-info alert-dismissible fade show\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 13
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 14
            echo "        <div class=\"alert alert-success alert-dismissible fade show\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 18
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger alert-dismissible fade show\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 23
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "        ";
        }
        // line 31
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 32
        echo ($context["heading_title2"] ?? null);
        echo "
                ";
        // line 33
        if (($context["weight"] ?? null)) {
            // line 34
            echo "                    &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
                ";
        }
        // line 35
        echo " </h1>
            <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <td class=\"text-center\">";
        // line 41
        echo ($context["column_image"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 42
        echo ($context["column_name"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 43
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 44
        echo ($context["column_price"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 45
        echo ($context["column_total"] ?? null);
        echo "</td>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                            <tr>
                                <td class=\"text-center\">";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                echo "\"><img
                                                src=\"";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                echo "\"
                                                title=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                                <td class=\"text-left\"><a
                                            href=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 56);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 56)) {
                // line 57
                echo "                                        <span class=\"text-danger\">***</span> ";
            }
            // line 58
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 58)) {
                // line 59
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                                            <small>";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 60);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                    ";
            }
            // line 62
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 62)) {
                echo " <br/>
                                        <small>";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 63);
                echo "</small> ";
            }
            // line 64
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 64)) {
                echo " <br/>
                                        <span class=\"label label-info\">";
                // line 65
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
                                        <small>";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 66);
                echo "</small> ";
            }
            echo "</td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"quantity[";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 69);
            echo "]\"
                                               value=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 70);
            echo "\" size=\"1\" class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-sync-alt\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 73
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"cart.remove('";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 74);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                </td>
                                <td class=\"text-right\">";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77);
            echo "</td>
                                <td class=\"text-right\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 78);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 82
            echo "                            <tr>
                                <td></td>
                                <td class=\"text-left\">";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 84);
            echo "</td>
                                <td class=\"text-left\"></td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 91
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"voucher.remove('";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 92);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                </td>
                                <td class=\"text-right\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 95);
            echo "</td>
                                <td class=\"text-right\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 96);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                        </tbody>

                    </table>
                </div>
            </form>

            <div class=\"row\">
                <div class=\"col-sm-4 col-sm-offset-8\">
                    <table class=\"table table-bordered\">
                        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 109
            echo "                            <tr>
                                <td class=\"text-right\"><strong>";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 110);
            echo ":</strong></td>
                                <td class=\"text-right\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 111);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    </table>
                </div>
            </div>
            <div class=\"buttons clearfix\">
                <div class=\"pull-right\"><a href=\"";
        // line 118
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
            </div>
            ";
        // line 120
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 121
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 123
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 123,  381 => 121,  377 => 120,  370 => 118,  364 => 114,  355 => 111,  351 => 110,  348 => 109,  344 => 108,  333 => 99,  324 => 96,  320 => 95,  314 => 92,  310 => 91,  300 => 84,  296 => 82,  291 => 81,  282 => 78,  278 => 77,  272 => 74,  268 => 73,  264 => 72,  259 => 70,  255 => 69,  247 => 66,  243 => 65,  238 => 64,  234 => 63,  229 => 62,  226 => 61,  217 => 60,  210 => 59,  207 => 58,  204 => 57,  198 => 56,  191 => 54,  185 => 53,  179 => 52,  176 => 51,  172 => 50,  164 => 45,  160 => 44,  156 => 43,  152 => 42,  148 => 41,  140 => 36,  137 => 35,  131 => 34,  129 => 33,  125 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  98 => 24,  93 => 23,  85 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/checkout/cart.twig", "");
    }
}
