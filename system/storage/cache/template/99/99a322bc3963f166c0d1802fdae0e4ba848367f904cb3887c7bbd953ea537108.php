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

/* tavifa/template/extension/module/category.twig */
class __TwigTemplate_af089339a226ab3045456f616abd0174af4172ac6882ee971957cfd132275153 extends \Twig\Template
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
        echo "<div class=\"list-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
                echo "\" class=\"list-group-item list-group-item-action active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4);
                echo "</a>
            ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 7) == ($context["child_id"] ?? null))) {
                            // line 8
                            echo "                        <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 8);
                            echo "\"
                           class=\"list-group-item list-group-item-action active\">&nbsp;&nbsp;&nbsp;- ";
                            // line 9
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 9);
                            echo "</a>
                    ";
                        } else {
                            // line 11
                            echo "                        <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 11);
                            echo "\" class=\"list-group-item list-group-item-action\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 11);
                            echo "</a>
                    ";
                        }
                        // line 13
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "            ";
                }
                // line 15
                echo "        ";
            } else {
                // line 16
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                echo "\" class=\"list-group-item list-group-item-action\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                echo "</a>
        ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "tavifa/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 19,  102 => 18,  94 => 16,  91 => 15,  88 => 14,  82 => 13,  74 => 11,  69 => 9,  64 => 8,  61 => 7,  56 => 6,  54 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/category.twig", "");
    }
}
