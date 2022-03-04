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

/* tavifa/template/extension/module/featured.twig */
class __TwigTemplate_9da9317353902a0d57db27cebbe344f51ad34b97315a0e9558ad7ae3c2b001a1 extends \Twig\Template
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
        echo "<section class=\"featured-products\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3 class=\"section-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h3>
            </div>

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
            echo "\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "</a></h4>
                            <p>";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 16);
            echo "</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    ";
            // line 19
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 19)) {
                // line 20
                echo "                                        ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20);
                echo "
                                    ";
            } else {
                // line 22
                echo "                                        <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                echo "</small>
                                        ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                echo "
                                    ";
            }
            // line 25
            echo "                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\" onclick=\"cart.add('";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 27);
            echo "'); return false;\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\" onclick=\"wishlist.add('";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 28);
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
        // line 35
        echo "
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "tavifa/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  104 => 28,  100 => 27,  96 => 25,  91 => 23,  86 => 22,  80 => 20,  78 => 19,  72 => 16,  66 => 15,  58 => 12,  53 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/featured.twig", "");
    }
}
