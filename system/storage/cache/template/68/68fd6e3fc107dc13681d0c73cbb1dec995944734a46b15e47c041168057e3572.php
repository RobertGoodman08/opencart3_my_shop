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

/* extension/extension/shipping.twig */
class __TwigTemplate_e070be29a9cdef53829689797d7a2d1e2e3b234f4b1d5d6a2efa902829c99c56 extends \Twig\Template
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
        echo ($context["promotion"] ?? null);
        echo "
<fieldset>
  <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  ";
        // line 4
        if (($context["error_warning"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 10
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        echo "  ";
        if ( !twig_test_empty(($context["hiden"] ?? null))) {
            // line 15
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["text_hide_shipping"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
   ";
        }
        // line 19
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 23
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-left\">";
        // line 24
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 25
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 26
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 30
        if (($context["extensions"] ?? null)) {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 32
                echo "        <tr>
          <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 33);
                echo "</td>
          <td class=\"text-left\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 34);
                echo "</td>
          <td class=\"text-right\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "sort_order", [], "any", false, false, false, 35);
                echo "</td>
          <td class=\"text-right\">";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 37);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            ";
                } else {
                    // line 39
                    echo "            <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
            ";
                }
                // line 41
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 42);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
            ";
                } else {
                    // line 44
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 44);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
            ";
                }
                // line 45
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        } else {
            // line 49
            echo "        <tr>
          <td class=\"text-center\" colspan=\"4\">";
            // line 50
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
        ";
        }
        // line 53
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 53,  172 => 50,  169 => 49,  166 => 48,  158 => 45,  150 => 44,  142 => 42,  139 => 41,  135 => 39,  127 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  110 => 32,  105 => 31,  103 => 30,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  78 => 19,  70 => 15,  67 => 14,  59 => 10,  56 => 9,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/shipping.twig", "");
    }
}
