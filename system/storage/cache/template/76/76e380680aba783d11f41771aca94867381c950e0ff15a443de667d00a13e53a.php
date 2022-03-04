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

/* extension/module/featured.twig */
class __TwigTemplate_632d7b2024ae372b8def378d18f11763e204706bea9a015da8a9eaa6a18b498c extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 38
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "                <div id=\"featured-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 43);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
            echo "
                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
            echo "\" />
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 51
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 53
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 57
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 59
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 60
        if (($context["error_width"] ?? null)) {
            // line 61
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 63
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 66
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 68
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 69
        if (($context["error_height"] ?? null)) {
            // line 70
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 72
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 75
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 78
        if (($context["status"] ?? null)) {
            // line 79
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 80
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 82
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 85
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
// Reorderable drag-and-drop lists
\$('#featured-product div input').before(' <i class=\"fa fa-hand-grab-o handle\"></i> ');
\$('#featured-product').sortable({
  handle: '.handle',
  chosenClass: 'handle-active',
});
\$('input[name=\\'product_name\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 102
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'product_name\\']').val('');
\t\t
\t\t\$('#featured-product' + item['value']).remove();
\t\t
\t\t\$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script></div>
";
        // line 127
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 127,  278 => 102,  259 => 85,  254 => 83,  249 => 82,  244 => 80,  239 => 79,  237 => 78,  231 => 75,  226 => 72,  220 => 70,  218 => 69,  212 => 68,  207 => 66,  202 => 63,  196 => 61,  194 => 60,  188 => 59,  183 => 57,  174 => 53,  169 => 51,  163 => 47,  154 => 44,  147 => 43,  143 => 42,  138 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/featured.twig", "");
    }
}
