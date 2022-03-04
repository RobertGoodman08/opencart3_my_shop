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

/* tavifa/template/extension/module/account.twig */
class __TwigTemplate_3ad8de821e7acd9ca27551026ad10fdaf8cd8cff3bf70de064fc8a4182835b3d extends \Twig\Template
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
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "        <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\"
                                                                                                     class=\"list-group-item list-group-item-action\">";
            // line 4
            echo ($context["text_register"] ?? null);
            echo "</a>
        <a href=\"";
            // line 5
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
    ";
        }
        // line 7
        echo "    <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
    ";
        // line 8
        if (($context["logged"] ?? null)) {
            // line 9
            echo "        <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["password"] ?? null);
            echo "\"
                                                                                                   class=\"list-group-item list-group-item-action\">";
            // line 10
            echo ($context["text_password"] ?? null);
            echo "</a>
    ";
        }
        // line 12
        echo "    <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_address"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\"
                                                                                                     class=\"list-group-item list-group-item-action\">";
        // line 13
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
    <a
            href=\"";
        // line 15
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["reward"] ?? null);
        echo "\"
                                                                                                              class=\"list-group-item list-group-item-action\">";
        // line 16
        echo ($context["text_reward"] ?? null);
        echo "</a>
    <a href=\"";
        // line 17
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_return"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["transaction"] ?? null);
        echo "\"
                                                                                                   class=\"list-group-item list-group-item-action\">";
        // line 18
        echo ($context["text_transaction"] ?? null);
        echo "</a>
    <a href=\"";
        // line 19
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
    ";
        // line 20
        if (($context["logged"] ?? null)) {
            // line 21
            echo "        <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "tavifa/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 23,  131 => 21,  129 => 20,  123 => 19,  119 => 18,  111 => 17,  107 => 16,  99 => 15,  94 => 13,  85 => 12,  80 => 10,  71 => 9,  69 => 8,  62 => 7,  55 => 5,  51 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/extension/module/account.twig", "");
    }
}
