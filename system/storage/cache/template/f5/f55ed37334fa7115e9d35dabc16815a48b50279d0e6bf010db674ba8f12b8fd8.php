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
class __TwigTemplate_6202841053344b56b260889a96fc07dacb4481a1b6bb12fd8a814ce4cce68b3f extends \Twig\Template
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

<h1>asdasdasd</h1>

<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 6
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 7
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 9
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 15
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 17
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
        return array (  82 => 17,  77 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/home.twig", "");
    }
}
