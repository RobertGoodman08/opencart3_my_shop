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
class __TwigTemplate_1e37aa1885058a75f8aab05ffaed480546a9909816df9ea1d9c2c642eb6c50d0 extends \Twig\Template
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
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "
                <div class=\"col-md-4 col-sm-6 mb-3\">
                <div class=\"product-card\">
                    <div class=\"product-thumb\">
                        <a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
            echo "\" alt=\"\"></a>
                    </div>
                    <div class=\"product-details\">
                        <h4><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a></h4>
                        <p>";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 18);
            echo "</p>
                        <div class=\"product-bottom-details d-flex justify-content-between\">
                            <div class=\"product-price\">
                                ";
            // line 21
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21)) {
                // line 22
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                echo "
                                ";
            } else {
                // line 24
                echo "                                    <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                echo "</small>
                                    ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25);
                echo "
                                ";
            }
            // line 27
            echo "                            </div>
                            <div class=\"product-links\">
                                <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                <a href=\"#\"><i class=\"far fa-heart\"></i></a>
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
        // line 37
        echo "


        </div>
    </div>
</section>
";
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
        return array (  113 => 37,  98 => 27,  93 => 25,  88 => 24,  82 => 22,  80 => 21,  74 => 18,  68 => 17,  60 => 14,  54 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/featured.twig", "");
    }
}
