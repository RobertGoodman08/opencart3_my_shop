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

/* tavifa/template/extension/module/slideshow.twig */
class __TwigTemplate_7b47ceb9fcac2bcd15372d2eeebee77245cc232af02b2cc47fe0863adfd88c9c extends \Twig\Template
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
        echo "<div class=\"container-fluid my-carousel\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"catalog/view/theme/tavifa/image/1.jpg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"catalog/view/theme/tavifa/image/2.jpg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"catalog/view/theme/tavifa/image/3.jpg\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\"  data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\"  data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tavifa/template/extension/module/slideshow.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/slideshow.twig", "");
    }
}
