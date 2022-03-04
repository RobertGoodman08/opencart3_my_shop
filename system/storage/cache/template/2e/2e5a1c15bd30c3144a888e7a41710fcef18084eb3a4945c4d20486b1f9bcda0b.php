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
class __TwigTemplate_14c5ca3012b396b5bb8e69a9ad2f64678d52eb9b2471043df00ae73798f31891 extends \Twig\Template
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
    <div id=\"carousel";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
        <div class=\"carousel-indicators\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "                <button type=\"button\" data-bs-target=\"#carousel";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 5);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 5) == 0)) {
                echo "class=\"active\"";
            }
            echo "></button>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </div>
        <div class=\"carousel-inner\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "                <div class=\"carousel-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 10) == 0)) {
                echo "active";
            }
            echo "\">
                    <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
            echo "\">
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel";
        // line 15
        echo ($context["module"] ?? null);
        echo "\"  data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel";
        // line 19
        echo ($context["module"] ?? null);
        echo "\"  data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tavifa/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 19,  135 => 15,  132 => 14,  113 => 11,  106 => 10,  89 => 9,  85 => 7,  62 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/slideshow.twig", "");
    }
}
