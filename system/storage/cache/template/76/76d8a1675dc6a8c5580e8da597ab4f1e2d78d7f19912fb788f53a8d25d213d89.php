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

/* tavifa/template/common/cart.twig */
class __TwigTemplate_47cceba58762657b715ccdb302578e806bd58d666bd5eee665ca5a925a793542 extends \Twig\Template
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
        echo "<a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#cart-modal\" class=\"open-cart-modal\">
    <i class=\"fas fa-shopping-cart\"></i>
    <span class=\"badge bg-danger rounded-pill count-items\">";
        // line 3
        echo ($context["text_items"] ?? null);
        echo "</span>
</a>

<div class=\"modal fade\" id=\"cart-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Корзина</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"in-cart\">

                    ";
        // line 16
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 17
            echo "                        <table class=\"table text-start\">
                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "                                <tr>
                                    <td>
                                        ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    echo "\">
                                                <img
                                                    src=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "\"
                                                    title=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "\">
                                            </a>
                                        ";
                }
                // line 28
                echo "                                    </td>
                                    <td><a
                                                href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br/>
                                                - <small>";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 32);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 32);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                        ";
                }
                // line 34
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34)) {
                    echo " <br/>
                                            - <small>";
                    // line 35
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 35);
                    echo "</small> ";
                }
                // line 36
                echo "                                    </td>
                                    <td>";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                echo "</td>
                                    <td>x ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
                echo "</td>
                                    <td>";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39);
                echo "</td>
                                    <td>
                                        <button type=\"button\" onclick=\"cart.remove('";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "');\"
                                                title=\"";
                // line 42
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i
                                                    class=\"fa fa-times\"></i></button>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 48
                echo "                                <tr>
                                    <td></td>
                                    <td>";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 50);
                echo "</td>
                                    <td>x&nbsp;1</td>
                                    <td>";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 52);
                echo "</td>
                                    <td>
                                        <button type=\"button\" onclick=\"voucher.remove('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 54);
                echo "');\"
                                                title=\"";
                // line 55
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i
                                                    class=\"fa fa-times\"></i></button>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        </table>
                        <div>
                            <table class=\"table table-bordered\">
                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 64
                echo "                                    <tr>
                                        <td class=\"text-right\"><strong>";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 65);
                echo "</strong></td>
                                        <td class=\"text-right\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 66);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                            </table>
                        </div>
                    ";
        } else {
            // line 72
            echo "                        <p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 74
        echo "
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Продолжить покупки</button>
                <a href=\"";
        // line 79
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 79,  231 => 74,  225 => 72,  220 => 69,  211 => 66,  207 => 65,  204 => 64,  200 => 63,  195 => 60,  184 => 55,  180 => 54,  175 => 52,  170 => 50,  166 => 48,  161 => 47,  150 => 42,  146 => 41,  141 => 39,  137 => 38,  133 => 37,  130 => 36,  124 => 35,  119 => 34,  116 => 33,  107 => 32,  100 => 31,  94 => 30,  90 => 28,  84 => 25,  78 => 24,  72 => 22,  70 => 21,  66 => 19,  62 => 18,  59 => 17,  57 => 16,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/cart.twig", "");
    }
}
