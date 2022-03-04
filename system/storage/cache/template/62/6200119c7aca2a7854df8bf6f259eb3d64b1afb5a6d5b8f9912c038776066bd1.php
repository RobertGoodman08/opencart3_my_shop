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

/* extension/extension/module.twig */
class __TwigTemplate_fff8a6c2d74244de25a784a7a3374c8c043ee44a896d1259d97930c04c179e43 extends \Twig\Template
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
        echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_layout"] ?? null);
        echo "</div>
   ";
        // line 15
        if ( !twig_test_empty(($context["hiden"] ?? null))) {
            // line 16
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["text_hide_modules"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 20
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 24
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-left\">";
        // line 25
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-right\">";
        // line 26
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
      
      ";
        // line 31
        if (($context["extensions"] ?? null)) {
            // line 32
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 33
                echo "      <tr>
        <td><b>";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 34);
                echo "</b></td>
        <td>";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 35);
                echo "</td>
        <td class=\"text-right\">";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 37)) {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 37);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_add"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a> ";
                    } else {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 37);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_edit"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> ";
                    }
                    // line 38
                    echo "          ";
                } else {
                    // line 39
                    echo "          <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
          ";
                }
                // line 41
                echo "          ";
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 41)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 41);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a> ";
                } else {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 41);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                echo "</td>
      </tr>
      ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 44
                    echo "      <tr>
        <td class=\"text-left\">&nbsp;&nbsp;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 45);
                    echo "</td>
        <td class=\"text-left\">";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "status", [], "any", false, false, false, 46);
                    echo "</td>
        <td class=\"text-right\"><a href=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "edit", [], "any", false, false, false, 47);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "delete", [], "any", false, false, false, 47);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a></td>
      </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      ";
        } else {
            // line 52
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 53
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 56
        echo "      </tbody>
      
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 56,  206 => 53,  203 => 52,  200 => 51,  194 => 50,  179 => 47,  175 => 46,  171 => 45,  168 => 44,  164 => 43,  146 => 41,  142 => 39,  139 => 38,  124 => 37,  122 => 36,  118 => 35,  114 => 34,  111 => 33,  106 => 32,  104 => 31,  96 => 26,  92 => 25,  88 => 24,  82 => 20,  74 => 16,  72 => 15,  67 => 14,  59 => 10,  56 => 9,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/module.twig", "");
    }
}
