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

/* default/template/blog/menu.twig */
class __TwigTemplate_ede6eb21a6ab3671b0a05f4a38e22c37a62c5b6c36f0c32988f127c57ed1bd16 extends \Twig\Template
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
        echo "\t<div class=\"pull-left\">
\t<div class=\"btn-group\">
    <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t<i class=\"fa fa-book\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 4
        echo ($context["text_blog"] ?? null);
        echo "</span> <i class=\"fa fa-caret-down\"></i>
\t</button>
\t<ul class=\"dropdown-menu\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                // line 9
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "</a></li>
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 10), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    echo "   
\t\t\t\t";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 12
                        echo "                <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                        echo "\"><i class=\"fa fa-angle-right\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                        echo "</a></li>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "\t\t";
            } else {
                // line 16
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                echo "</a></li>
        ";
            }
            // line 18
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t<li><a href=\"";
        echo ($context["blog"] ?? null);
        echo "\" class=\"see-all\">";
        echo ($context["text_all"] ?? null);
        echo " ";
        echo ($context["text_blog"] ?? null);
        echo "</a></li>
\t</ul>
\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "default/template/blog/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 18,  92 => 16,  89 => 15,  83 => 14,  72 => 12,  68 => 11,  62 => 10,  55 => 9,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/menu.twig", "");
    }
}
