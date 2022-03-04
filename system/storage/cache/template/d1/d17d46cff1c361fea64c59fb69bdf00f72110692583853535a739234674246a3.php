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

/* sale/order_list.twig */
class __TwigTemplate_6d3070da89dd2ba92f6df21d987c26b88cb477ef75613b035d49a072a8824ec3 extends \Twig\Template
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
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
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
            echo "      <li><a href=\"";
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
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 28
        echo "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 36
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 37
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 40
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 41
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 44
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 48
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 49
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 50
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        } else {
            // line 53
            echo "              
              <option value=\"0\">";
            // line 54
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        }
        // line 57
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 58
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 58) == ($context["filter_order_status_id"] ?? null))) {
                // line 59
                echo "              
              <option value=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 60);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 60);
                echo "</option>
              
              ";
            } else {
                // line 63
                echo "              
              <option value=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 64);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 64);
                echo "</option>
              
              ";
            }
            // line 67
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 72
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 73
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 76
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 78
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 84
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 86
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 92
        echo ($context["button_filter"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 100
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 109
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 110
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 111
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 112
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 113
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 114
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 115
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 120
        if (($context["orders"] ?? null)) {
            // line 121
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 122
                echo "                <tr>
                  <td class=\"text-center\"> ";
                // line 123
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 123), ($context["selected"] ?? null))) {
                    // line 124
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 124);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 126
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 126);
                    echo "\" />
                    ";
                }
                // line 128
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 128);
                echo "\" /></td>
                  <td class=\"text-right\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 129);
                echo "</td>
                  <td class=\"text-left\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 130);
                echo "</td>
                  <td class=\"text-left\">";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 131);
                echo "</td>
                  <td class=\"text-right\">";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 132);
                echo "</td>
                  <td class=\"text-left\">";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 133);
                echo "</td>
                  <td class=\"text-left\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 134);
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 136);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 139);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                          <li><a href=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 140);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                ";
        } else {
            // line 147
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 148
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 151
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 157
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 158
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 204
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 211
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 261
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 263
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 279
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 293
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
\$('#filter-order').on('keydown', function(e) {
  if (e.keyCode == 13) {
      \$('#button-filter').trigger('click')
  }
});
//--></script></div>
";
        // line 302
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 302,  666 => 293,  649 => 279,  626 => 263,  621 => 261,  568 => 211,  558 => 204,  509 => 158,  505 => 157,  497 => 151,  491 => 148,  488 => 147,  485 => 146,  471 => 140,  465 => 139,  457 => 136,  452 => 134,  448 => 133,  444 => 132,  440 => 131,  436 => 130,  432 => 129,  427 => 128,  421 => 126,  415 => 124,  413 => 123,  410 => 122,  405 => 121,  403 => 120,  395 => 115,  377 => 114,  359 => 113,  341 => 112,  323 => 111,  305 => 110,  287 => 109,  275 => 100,  264 => 92,  253 => 86,  248 => 84,  237 => 78,  232 => 76,  224 => 73,  220 => 72,  214 => 68,  208 => 67,  200 => 64,  197 => 63,  189 => 60,  186 => 59,  183 => 58,  178 => 57,  172 => 54,  169 => 53,  163 => 50,  160 => 49,  158 => 48,  151 => 44,  143 => 41,  139 => 40,  131 => 37,  127 => 36,  120 => 32,  114 => 28,  106 => 24,  103 => 23,  95 => 19,  93 => 18,  88 => 15,  77 => 13,  73 => 12,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
