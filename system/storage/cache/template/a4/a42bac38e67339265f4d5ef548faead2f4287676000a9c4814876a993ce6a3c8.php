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

/* tavifa/template/common/menu.twig */
class __TwigTemplate_391500d7e298aa67454aacc4a6537f10db601e516b257d04c7deb5c9d22cb23e extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 7);
                    echo "\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                    echo "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 12
                        echo "                <li><a class=\"dropdown-item\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                        echo "</a></li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "              <li><hr class=\"dropdown-divider\"></li>
              <li><a href=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"dropdown-item\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a></li>
            </ul>
          </li>
        ";
                } else {
                    // line 19
                    echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                    echo "</a>
          </li>
        ";
                }
                // line 23
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 25,  103 => 23,  95 => 20,  92 => 19,  81 => 15,  78 => 14,  67 => 12,  63 => 11,  57 => 8,  53 => 7,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/menu.twig", "");
    }
}
