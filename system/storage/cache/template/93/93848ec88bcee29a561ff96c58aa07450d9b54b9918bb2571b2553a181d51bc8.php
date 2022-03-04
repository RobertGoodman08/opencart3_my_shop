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

/* catalog/category_list.twig */
class __TwigTemplate_7f5f243d11e4c6ea34943c38dd5e85708ef24d159ba7f63a9e2ec7bb815d2915 extends \Twig\Template
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
\t  <a href=\"";
        // line 6
        echo ($context["repair"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
\t\t<button type=\"submit\" form=\"form-category\" formaction=\"";
        // line 7
        echo ($context["enabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_enable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-category\" formaction=\"";
        // line 8
        echo ($context["disabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_disable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" form=\"form-category\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 32
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 41
        echo ($context["column_name"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 42
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
\t\t\t\t  <td class=\"text-right\">";
        // line 43
        if ((($context["sort"] ?? null) == "noindex")) {
            // line 44
            echo "                    <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_noindex"] ?? null);
            echo "\">";
            echo ($context["column_noindex"] ?? null);
            echo "</a>
\t\t\t\t\t";
        }
        // line 47
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 52
        if (($context["categories"] ?? null)) {
            // line 53
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 54
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 55
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 55), ($context["selected"] ?? null))) {
                    // line 56
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 56);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 58
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 58);
                    echo "\" />
                    ";
                }
                // line 59
                echo "</td>
\t\t\t\t  ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                  <td class=\"left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "indent", [], "any", false, false, false, 61);
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 61);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61);
                    echo "</a>&nbsp;<i class=\"fa fa-sort-desc\"></i></td>
\t\t\t\t\t";
                } else {
                    // line 63
                    echo "                  <td class=\"left\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "indent", [], "any", false, false, false, 63);
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 63);
                    echo "</td>
                  ";
                }
                // line 65
                echo "                  <td class=\"text-right\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 65);
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["category"], "noindex", [], "any", false, false, false, 66);
                echo "</td>
                  <td class=\"text-right\">
\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href_shop", [], "any", false, false, false, 68);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_shop"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 69);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
        } else {
            // line 74
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 75
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 78
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 83
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 84
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

    <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-category\\']').on('click', function(e) {
\t\$('#form-category').attr('action', \$(this).attr('formaction'));
});
 //--></script>
</div>
";
        // line 97
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 97,  279 => 84,  275 => 83,  268 => 78,  262 => 75,  259 => 74,  256 => 73,  244 => 69,  238 => 68,  233 => 66,  228 => 65,  221 => 63,  211 => 61,  209 => 60,  206 => 59,  200 => 58,  194 => 56,  192 => 55,  189 => 54,  184 => 53,  182 => 52,  175 => 48,  172 => 47,  164 => 46,  154 => 44,  152 => 43,  148 => 42,  144 => 41,  135 => 35,  129 => 32,  125 => 30,  117 => 26,  114 => 25,  106 => 21,  104 => 20,  98 => 16,  87 => 14,  83 => 13,  78 => 11,  69 => 9,  63 => 8,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}
