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
class __TwigTemplate_711bdb6943596d6c769ca1173883f4915b5bff5573f4facf49fc48f56e39245d extends \Twig\Template
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
                        <a href=\"product.html\"><img src=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 14), "url", [], "any", false, false, false, 14);
            echo "\" alt=\"\"></a>
                    </div>
                    <div class=\"product-details\">
                        <h4><a href=\"product.html\">iPhone iPhone iPhone iPhone iPhone iPhone iPhone</a></h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                        <div class=\"product-bottom-details d-flex justify-content-between\">
                            <div class=\"product-price\">
                                <small>\$200.00</small>
                                \$185.00
                            </div>
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
        // line 33
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
        return array (  85 => 33,  60 => 14,  54 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/featured.twig", "");
    }
}
