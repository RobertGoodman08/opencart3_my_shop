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

/* tavifa/template/common/header.twig */
class __TwigTemplate_41e1ffe73151ded5f4ab7157149f5001676a44adf980bbda1f3d8c85fd516fcd extends \Twig\Template
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
        echo "<!doctype html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
    ";
        // line 8
        if (($context["robots"] ?? null)) {
            // line 9
            echo "        <meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
    ";
        }
        // line 11
        echo "    <base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 12
        if (($context["description"] ?? null)) {
            // line 13
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 15
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 16
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 18
        echo "    <meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"";
        // line 20
        echo ($context["og_url"] ?? null);
        echo "\" />
    ";
        // line 21
        if (($context["og_image"] ?? null)) {
            // line 22
            echo "        <meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
    ";
        } else {
            // line 24
            echo "        <meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
    ";
        }
        // line 26
        echo "    <meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />

    <script src=\"catalog/view/theme/tavifa/bootstrap/js/bootstrap.bundle.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
    <script src=\"catalog/view/theme/tavifa/js/main.js\"></script>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 33
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 33);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 33);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 33);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "        <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    <script src=\"catalog/view/theme/tavifa/js/common.js\" type=\"text/javascript\"></script>

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\" integrity=\"sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/tavifa/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/tavifa/css/main.css\">

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 48);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 48);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 52
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</head>
<body>

<header>

    <div class=\"header-top py-3\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">

                <div class=\"col\">
                    <a href=\"tel:";
        // line 64
        echo ($context["telephone"] ?? null);
        echo "\"><span class=\"icon-phone\">&#9743;</span> ";
        echo ($context["telephone"] ?? null);
        echo "</a>
                </div>

                <div class=\"col icons text-end\">

                    <form id=\"search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" aria-label=\"Search...\" name=\"s\">
                            <button class=\"btn close-search\" type=\"button\"><i class=\"fas fa-times\"></i></button>
                            <button class=\"btn\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
                        </div>
                    </form>
                    <a href=\"#\" class=\"open-search\"><i class=\"fas fa-search\"></i></a>

                    ";
        // line 78
        echo ($context["cart"] ?? null);
        echo "

                    <a href=\"";
        // line 80
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"link-wishlist\">
                        <i class=\"far fa-heart\"></i>
                        <span class=\"badge bg-danger rounded-pill count-wishlist\">";
        // line 82
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
                    </a>

                    <div class=\"dropdown d-inline-block\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-user\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                            ";
        // line 88
        if (($context["logged"] ?? null)) {
            // line 89
            echo "                                <li><a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 90
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 91
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 92
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 93
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                            ";
        } else {
            // line 95
            echo "                                <li><a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 96
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                            ";
        }
        // line 98
        echo "                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- header-top -->

    <div class=\"header-bottom py-2\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light\">
                <div class=\"container-fluid p-0\">
                    <a class=\"navbar-brand\" href=\"";
        // line 111
        echo ($context["home"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    ";
        // line 115
        echo ($context["menu"] ?? null);
        echo "
                </div>
            </nav>
        </div>
    </div><!-- header-bottom -->

</header>";
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 115,  304 => 111,  289 => 98,  282 => 96,  275 => 95,  268 => 93,  262 => 92,  256 => 91,  250 => 90,  243 => 89,  241 => 88,  232 => 82,  227 => 80,  222 => 78,  203 => 64,  191 => 54,  182 => 52,  178 => 51,  175 => 50,  164 => 48,  160 => 47,  149 => 38,  140 => 36,  135 => 35,  122 => 33,  118 => 32,  108 => 26,  102 => 24,  96 => 22,  94 => 21,  90 => 20,  84 => 18,  78 => 16,  75 => 15,  69 => 13,  67 => 12,  62 => 11,  56 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/header.twig", "");
    }
}
