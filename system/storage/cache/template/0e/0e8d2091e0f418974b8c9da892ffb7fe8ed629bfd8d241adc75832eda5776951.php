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

/* catalog/information_list.twig */
class __TwigTemplate_3b8e8f0c8ff98f46ade156aec704ff427075d47f4f9cde8ce89acf3035ab5b0a extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-information\" formaction=\"";
        // line 6
        echo ($context["enabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_enable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-information\" formaction=\"";
        // line 7
        echo ($context["disabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_disable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "id.title")) {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 44
        echo "</td>
                  <td class=\"text-right\">";
        // line 45
        if ((($context["sort"] ?? null) == "i.sort_order")) {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 49
        echo "</td>
\t\t\t\t  <td class=\"text-right\">";
        // line 50
        if ((($context["sort"] ?? null) == "i.noindex")) {
            // line 51
            echo "                    <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 53
            echo "                    <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a>
\t\t\t\t\t";
        }
        // line 54
        echo "</td>
                  <td class=\"text-right\">";
        // line 55
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 59
        if (($context["informations"] ?? null)) {
            // line 60
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 61
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 62
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 62), ($context["selected"] ?? null))) {
                    // line 63
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 63);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 65
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 65);
                    echo "\" />
                    ";
                }
                // line 66
                echo "</td>
                  <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["information"], "sort_order", [], "any", false, false, false, 68);
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["information"], "noindex", [], "any", false, false, false, 69);
                echo "</td>
                  <td class=\"text-right\">
\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href_shop", [], "any", false, false, false, 71);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_shop"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["information"], "edit", [], "any", false, false, false, 72);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                ";
        } else {
            // line 77
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 78
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 81
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 86
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 87
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 93
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/information_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 93,  293 => 87,  289 => 86,  282 => 81,  276 => 78,  273 => 77,  270 => 76,  258 => 72,  252 => 71,  247 => 69,  243 => 68,  239 => 67,  236 => 66,  230 => 65,  224 => 63,  222 => 62,  219 => 61,  214 => 60,  212 => 59,  205 => 55,  202 => 54,  194 => 53,  184 => 51,  182 => 50,  179 => 49,  171 => 48,  161 => 46,  159 => 45,  156 => 44,  148 => 43,  138 => 41,  136 => 40,  127 => 34,  121 => 31,  117 => 29,  109 => 25,  106 => 24,  98 => 20,  96 => 19,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  63 => 8,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/information_list.twig", "");
    }
}
