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
class __TwigTemplate_420718ff0fbabaa45a656f1b5449a6ee43191bf78e92e37c8d96c7e7312765da extends \Twig\Template
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
            echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"category.html\">Компьютеры</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"category.html\">Планшеты</a>
    </li>
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        Ноутбуки
      </a>
      <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
        <li><a class=\"dropdown-item\" href=\"category.html\">Mac</a></li>
        <li><a class=\"dropdown-item\" href=\"category.html\">Windows</a></li>
      </ul>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"category.html\">Телефоны</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"category.html\">Камеры</a>
    </li>
  </ul>
    ";
                }
                // line 29
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</div>

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
        return array (  81 => 30,  75 => 29,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/menu.twig", "");
    }
}
