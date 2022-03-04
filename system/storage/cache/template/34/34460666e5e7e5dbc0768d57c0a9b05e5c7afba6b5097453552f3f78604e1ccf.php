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

/* default/template/extension/module/featured_product.twig */
class __TwigTemplate_3f6222212a04cbcf78a0087d80f0953b42c3589a861cae5a67b8abf0a6c99a9a extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "<h3>";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
<div class=\"row\"> ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "</a></h4>
        <p>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 9);
                echo "</p>
        ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "        <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 12
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 12) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 13
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
        ";
                }
                // line 15
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "        <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 17);
                        echo "
          ";
                    } else {
                        // line 18
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 18);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18);
                        echo "</span> ";
                    }
                    // line 19
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 19)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 19);
                        echo "</span> ";
                    }
                    echo " </p>
        ";
                }
                // line 20
                echo " </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 22);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 23
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 23);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 24
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 24);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 28,  143 => 24,  137 => 23,  131 => 22,  127 => 20,  115 => 19,  108 => 18,  102 => 17,  99 => 16,  96 => 15,  87 => 13,  80 => 12,  75 => 11,  73 => 10,  69 => 9,  63 => 8,  52 => 6,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured_product.twig", "");
    }
}
