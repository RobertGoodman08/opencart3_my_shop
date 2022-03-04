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

/* tavifa/template/product/product.twig */
class __TwigTemplate_e678716a7b9a9c1f90bc882a537b8c964fc9ad9816ff5af2c8f47ebef5a11567 extends \Twig\Template
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

<div class=\"container\">
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb bg-light p-2\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "                <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ol>
    </nav>
</div>

<div class=\"container py-3\">
    <div class=\"row\">

        <div class=\"col-md-4 order-md-2\">

            <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"list-unstyled\">
                <li>
                    ";
        // line 21
        if ((($context["qty"] ?? null) <= 0)) {
            // line 22
            echo "                        <i class=\"fas fa-shipping-fast text-muted\"></i>
                    ";
        } else {
            // line 24
            echo "                        <i class=\"fas fa-check text-success\"></i>
                    ";
        }
        // line 26
        echo "                    ";
        echo ($context["stock"] ?? null);
        echo "
                </li>
                <li><i class=\"fas fa-hand-holding-usd\"></i>
                    <span class=\"product-price\">
                        ";
        // line 30
        if ( !($context["special"] ?? null)) {
            // line 31
            echo "                            ";
            echo ($context["price"] ?? null);
            echo "
                        ";
        } else {
            // line 33
            echo "                            <small>";
            echo ($context["price"] ?? null);
            echo "</small>
                            ";
            // line 34
            echo ($context["special"] ?? null);
            echo "
                        ";
        }
        // line 36
        echo "                    </span>
                </li>
            </ul>

            <div id=\"product\">
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
        // line 42
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\">
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 43
        echo ($context["product_id"] ?? null);
        echo "\" />
                    <button class=\"btn btn-danger\" type=\"button\" id=\"button-cart\">";
        // line 44
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
                ";
        // line 46
        if ((($context["minimum"] ?? null) > 1)) {
            // line 47
            echo "                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 49
        echo "            </div>

        </div>

        <div class=\"col-md-8 order-md-1\">

            ";
        // line 55
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 56
            echo "                <ul class=\"thumbnails list-unstyled clearfix\">
                    ";
            // line 57
            if (($context["thumb"] ?? null)) {
                // line 58
                echo "                        <li class=\"thumb-main text-center\">
                            <a class=\"thumbnail\" href=\"";
                // line 59
                echo ($context["popup"] ?? null);
                echo "\" data-effect=\"mfp-zoom-in\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\"
                                                                                                   alt=\"\"></a>
                        </li>
                    ";
            }
            // line 63
            echo "
                    ";
            // line 64
            if (($context["images"] ?? null)) {
                // line 65
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 66
                    echo "                            <li class=\"thumb-additional\">
                                <a class=\"thumbnail\" href=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 67);
                    echo "\" data-effect=\"mfp-zoom-in\"><img
                                            src=\"";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 68);
                    echo "\" alt=\"\"></a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                    ";
            }
            // line 72
            echo "                </ul>
            ";
        }
        // line 74
        echo "
            <ul class=\"nav nav-tabs mb-3\" id=\"myTab\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#description\"
                            type=\"button\">";
        // line 78
        echo ($context["tab_description"] ?? null);
        echo "</button>
                </li>
                ";
        // line 80
        if (($context["attribute_groups"] ?? null)) {
            // line 81
            echo "                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#specification\"
                                type=\"button\">";
            // line 83
            echo ($context["tab_attribute"] ?? null);
            echo "</button>
                    </li>
                ";
        }
        // line 86
        echo "            </ul>
            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"description\">
                    ";
        // line 89
        echo ($context["description"] ?? null);
        echo "
                </div>

                ";
        // line 92
        if (($context["attribute_groups"] ?? null)) {
            // line 93
            echo "                    <div class=\"tab-pane fade\" id=\"specification\">
                        <table class=\"table table-bordered\">
                            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 96
                echo "                                <thead>
                                <tr>
                                    <td colspan=\"2\"><strong>";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 98);
                echo "</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 102));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 103
                    echo "                                    <tr>
                                        <td>";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 104);
                    echo "</td>
                                        <td>";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 105);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                                </tbody>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                        </table>
                    </div>
                ";
        }
        // line 113
        echo "            </div>


        </div>

    </div>
</div>

<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function () {
                \$('#recurring-description').html('');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-cart').button('loading');
            },
            complete: function () {
                \$('#button-cart').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('.count-items').html(json['total']);

                    \$('#cart-modal .modal-body').load('index.php?route=common/cart/info .in-cart');
                    new bootstrap.Modal(document.getElementById('cart-modal')).show();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 194
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 199
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 205
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function () {
        var node = this;

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
                        \$(node).button('loading');
                    },
                    complete: function () {
                        \$(node).button('reset');
                    },
                    success: function (json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
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
    \$('#review').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 272
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 276
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function () {
                \$('#button-review').button('loading');
            },
            complete: function () {
                \$('#button-review').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function () {
        \$('.thumbnails').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            },
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            }
        });
    });
    //--></script>

";
        // line 322
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 322,  466 => 276,  459 => 272,  389 => 205,  380 => 199,  372 => 194,  289 => 113,  284 => 110,  277 => 108,  268 => 105,  264 => 104,  261 => 103,  257 => 102,  250 => 98,  246 => 96,  242 => 95,  238 => 93,  236 => 92,  230 => 89,  225 => 86,  219 => 83,  215 => 81,  213 => 80,  208 => 78,  202 => 74,  198 => 72,  195 => 71,  186 => 68,  182 => 67,  179 => 66,  174 => 65,  172 => 64,  169 => 63,  160 => 59,  157 => 58,  155 => 57,  152 => 56,  150 => 55,  142 => 49,  136 => 47,  134 => 46,  129 => 44,  125 => 43,  121 => 42,  113 => 36,  108 => 34,  103 => 33,  97 => 31,  95 => 30,  87 => 26,  83 => 24,  79 => 22,  77 => 21,  71 => 18,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/product/product.twig", "");
    }
}
