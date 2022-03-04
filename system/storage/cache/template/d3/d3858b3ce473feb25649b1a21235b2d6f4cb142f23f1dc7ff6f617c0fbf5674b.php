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

/* search/search.twig */
class __TwigTemplate_d380aeda0f36e1a1d29e1a5e147a359c7e7e16215051bd7b8b023f0d2f6dce5d extends \Twig\Template
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
        echo "<form id=\"oc-search\" class=\"navbar-form\" role=\"search\">
  <div class=\"input-group\">
    <div class=\"input-group-btn\">
      <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-search\"></i>
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
        <li class=\"dropdown-header\">";
        // line 9
        echo ($context["text_search_options"] ?? null);
        echo "</li>
        <li><a onclick=\"setOption('catalog', '";
        // line 10
        echo ($context["text_catalog_placeholder"] ?? null);
        echo "'); return false;\"><i class=\"fa fa-book\"></i><span>";
        echo ($context["text_catalog"] ?? null);
        echo "</span></a></li>
        <li><a onclick=\"setOption('customers', '";
        // line 11
        echo ($context["text_customers_placeholder"] ?? null);
        echo "'); return false;\"><i class=\"fa fa-group\"></i><span>";
        echo ($context["text_customers"] ?? null);
        echo "</span></a></li>
        <li><a onclick=\"setOption('orders', '";
        // line 12
        echo ($context["text_orders_placeholder"] ?? null);
        echo "'); return false;\"><i class=\"fa fa-credit-card\"></i><span>";
        echo ($context["text_orders"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
    <input id=\"oc-search-input\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 15
        echo ($context["text_search_placeholder"] ?? null);
        echo "\" name=\"query\" autocomplete=\"off\" />
    <input id=\"oc-search-option\" type=\"hidden\" name=\"search-option\" value=\"catalog\" />
    <div id=\"loader-search\"><img src=\"view/image/loader-search.gif\" alt=\"\" /></div>
  </div>
</form>
<div id=\"oc-search-result\"></div>
<script type=\"text/javascript\">
    function setOption(option, text) {
        jQuery('#oc-search-option').val(option);
        jQuery('#oc-search-input').attr('placeholder', text);
    }

    jQuery('#oc-search-input').keyup(function(){
        var option = jQuery('#oc-search-option').val();
        var length = 3;

        if(option == 'orders') {
            length = 1;
        }

        if(this.value.length < length) {
            return false;
        }

        if(jQuery.support.leadingWhitespace == false) {
              return false;
        }

        jQuery('#loader-search').css('display', 'block');

        jQuery.ajax({
            type: 'get',
            url: 'index.php?route=search/search/search' + '&user_token=";
        // line 47
        echo ($context["user_token"] ?? null);
        echo "',\t\t
\t\t\tdata: jQuery('#oc-search').serialize(),
            dataType: 'json',
            success:function(json){
                jQuery('#oc-search-result').css('display', 'block');
                jQuery('#loader-search').css('display', 'none');

                if(json['error']) {
                    jQuery('#oc-search-result').html(json['error'])
                    return;
                }

                jQuery('#oc-search-result').html(json['result'])
            }
        });
    });

    jQuery(document).mouseup(function (e) {
        var container = jQuery('#oc-search-result');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });

    jQuery('#oc-search').submit(function(e) {
        e.preventDefault();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "search/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  71 => 15,  63 => 12,  57 => 11,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search/search.twig", "");
    }
}
