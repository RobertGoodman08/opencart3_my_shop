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

/* tavifa/template/common/search.twig */
class __TwigTemplate_99507b702117693e3ed13036e2cbf6d8169e84adb27aed4a49676225031b78a6 extends \Twig\Template
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
        echo "<div id=\"search\">
    <div class=\"input-group\">
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 3
        echo ($context["text_search"] ?? null);
        echo "\" aria-label=\"Search...\" name=\"search\" value=\"";
        echo ($context["search"] ?? null);
        echo "\">
        <button class=\"btn close-search\" type=\"button\"><i class=\"fas fa-times\"></i></button>
        <button class=\"btn\" type=\"button\"><i class=\"fas fa-search\"></i></button>
    </div>
</div>
<a href=\"#\" class=\"open-search\"><i class=\"fas fa-search\"></i></a>";
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/search.twig", "");
    }
}
