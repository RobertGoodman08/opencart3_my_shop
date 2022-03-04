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

/* tavifa/template/account/register.twig */
class __TwigTemplate_56e116429cd72ee36e981cdcc22ba1e77a2fba32b81b8705257755cb3fc82a19 extends \Twig\Template
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
        echo "
<div id=\"account-register\" class=\"container py-3\">
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb bg-light p-2\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "                <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ol>
    </nav>
    ";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "        <div class=\"alert alert-danger alert-dismissible fade show\"><i
                    class=\"fa fa-exclamation-circle\"></i> ";
            // line 12
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 16
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 26
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>";
        // line 29
        echo ($context["text_your_details"] ?? null);
        echo "</legend>

                    <div class=\"form-group required row mb-3\">
                        <label class=\"col-sm-2 control-label col-form-label\"
                               for=\"input-firstname\">";
        // line 33
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 35
        echo ($context["firstname"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 36
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 37
        if (($context["error_firstname"] ?? null)) {
            // line 38
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 39
        echo " </div>
                    </div>
                    <div class=\"form-group required row mb-3\">
                        <label class=\"col-sm-2 control-label col-form-label\"
                               for=\"input-lastname\">";
        // line 43
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 45
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 47
        if (($context["error_lastname"] ?? null)) {
            // line 48
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 49
        echo " </div>
                    </div>
                    <div class=\"form-group required row mb-3\">
                        <label class=\"col-sm-2 control-label col-form-label\" for=\"input-email\">";
        // line 52
        echo ($context["entry_email"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 54
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 56
        if (($context["error_email"] ?? null)) {
            // line 57
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 58
        echo " </div>
                    </div>
                    <div class=\"form-group required row mb-3\">
                        <label class=\"col-sm-2 control-label col-form-label\"
                               for=\"input-telephone\">";
        // line 62
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 64
        echo ($context["telephone"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 65
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 66
        if (($context["error_telephone"] ?? null)) {
            // line 67
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 68
        echo " </div>
                    </div>

                </fieldset>

                <fieldset>
                    <legend>";
        // line 74
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                    <div class=\"form-group required row mb-3\">
                        <label class=\"col-sm-2 control-label col-form-label\"
                               for=\"input-password\">";
        // line 77
        echo ($context["entry_password"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 79
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 80
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                            ";
        // line 81
        if (($context["error_password"] ?? null)) {
            // line 82
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 83
        echo " </div>
                    </div>
                    <div class=\"form-group required row mb-3\">
                        <label class=\"col-sm-2 control-label col-form-label\"
                               for=\"input-confirm\">";
        // line 87
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 89
        echo ($context["confirm"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 90
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 91
        if (($context["error_confirm"] ?? null)) {
            // line 92
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 93
        echo " </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 97
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                        ";
        // line 99
        echo ($context["entry_newsletter"] ?? null);
        echo "
                        ";
        // line 100
        if (($context["newsletter"] ?? null)) {
            // line 101
            echo "                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"newsletter\" value=\"1\"
                                       id=\"nesletter_yes\" checked>
                                <label class=\"form-check-label\" for=\"nesletter_yes\">
                                    ";
            // line 105
            echo ($context["text_yes"] ?? null);
            echo "
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"newsletter\" value=\"0\"
                                       id=\"nesletter_no\">
                                <label class=\"form-check-label\" for=\"nesletter_no\">
                                    ";
            // line 112
            echo ($context["text_no"] ?? null);
            echo "
                                </label>
                            </div>
                        ";
        } else {
            // line 116
            echo "                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"newsletter\" value=\"1\"
                                       id=\"nesletter_yes\">
                                <label class=\"form-check-label\" for=\"nesletter_yes\">
                                    ";
            // line 120
            echo ($context["text_yes"] ?? null);
            echo "
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"newsletter\" value=\"0\"
                                       id=\"nesletter_no\" checked>
                                <label class=\"form-check-label\" for=\"nesletter_no\">
                                    ";
            // line 127
            echo ($context["text_no"] ?? null);
            echo "
                                </label>
                            </div>
                        ";
        }
        // line 131
        echo "                    </div>

                </fieldset>

                ";
        // line 135
        echo ($context["captcha"] ?? null);
        echo "

                ";
        // line 137
        if (($context["text_agree"] ?? null)) {
            // line 138
            echo "                    <div class=\"form-check\">
                        ";
            // line 139
            if (($context["agree"] ?? null)) {
                // line 140
                echo "                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"agree\" name=\"agree\" checked>
                        ";
            } else {
                // line 142
                echo "                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"agree\" name=\"agree\">
                        ";
            }
            // line 144
            echo "
                        <label class=\"form-check-label\" for=\"agree\">
                            ";
            // line 146
            echo ($context["text_agree"] ?? null);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 150
        echo "
                <input type=\"submit\" value=\"";
        // line 151
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            </form>
            ";
        // line 153
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 154
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function (json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function () {
        var element = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 257
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 262
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 267
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 272
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 272,  522 => 267,  514 => 262,  506 => 257,  400 => 154,  396 => 153,  391 => 151,  388 => 150,  381 => 146,  377 => 144,  373 => 142,  369 => 140,  367 => 139,  364 => 138,  362 => 137,  357 => 135,  351 => 131,  344 => 127,  334 => 120,  328 => 116,  321 => 112,  311 => 105,  305 => 101,  303 => 100,  299 => 99,  294 => 97,  288 => 93,  282 => 92,  280 => 91,  276 => 90,  272 => 89,  267 => 87,  261 => 83,  255 => 82,  253 => 81,  249 => 80,  245 => 79,  240 => 77,  234 => 74,  226 => 68,  220 => 67,  218 => 66,  214 => 65,  210 => 64,  205 => 62,  199 => 58,  193 => 57,  191 => 56,  184 => 54,  179 => 52,  174 => 49,  168 => 48,  166 => 47,  159 => 45,  154 => 43,  148 => 39,  142 => 38,  140 => 37,  136 => 36,  132 => 35,  127 => 33,  120 => 29,  115 => 27,  111 => 26,  107 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  80 => 17,  75 => 16,  68 => 12,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/account/register.twig", "");
    }
}
