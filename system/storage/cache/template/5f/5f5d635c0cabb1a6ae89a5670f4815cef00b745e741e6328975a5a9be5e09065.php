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

/* tavifa/template/common/home.twig */
class __TwigTemplate_2841bf16838b2197ad278c28015cbbcf9e187696d344deca213b462354a5d4a1 extends \Twig\Template
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


";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "


";
        // line 7
        echo ($context["content_bottom"] ?? null);
        echo "



";
        // line 23
        echo "
";
        // line 30
        echo "
";
        // line 37
        echo "
";
        // line 47
        echo "

";
        // line 49
        echo ($context["html"] ?? null);
        echo "


";
        // line 52
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 52,  69 => 49,  65 => 47,  62 => 37,  59 => 30,  56 => 23,  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/home.twig", "");
    }
}
