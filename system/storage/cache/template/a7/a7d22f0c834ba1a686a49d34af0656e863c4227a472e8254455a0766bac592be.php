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

/* tavifa/template/checkout/checkout.twig */
class __TwigTemplate_59416404495876c4f79a764b36d8d75d1af8a424dc6569af47c190a46b02d433 extends \Twig\Template
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
<div id=\"checkout-checkout\" class=\"container py-3\">
    <ol class=\"breadcrumb bg-light p-2\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ol>
    ";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 13
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "        ";
        }
        // line 21
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"panel-group\" id=\"accordion\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 26
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
                    </div>
                    <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
                ";
        // line 32
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 33
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
            // line 35
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                ";
        } else {
            // line 42
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
            // line 44
            echo ($context["text_checkout_payment_address"] ?? null);
            echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                ";
        }
        // line 51
        echo "                ";
        if (($context["shipping_required"] ?? null)) {
            // line 52
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
            // line 54
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">";
            // line 62
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
                            <div class=\"panel-body\"></div>
                        </div>
                    </div>
                ";
        }
        // line 69
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 71
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
                    </div>
                    <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 79
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
                    </div>
                    <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
            </div>
            ";
        // line 86
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 87
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    \$(document).on('change', 'input[name=\\'account\\']', function () {
        if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 93
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 95
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }
        } else {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 99
        echo ($context["text_checkout_account"] ?? null);
        echo "');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 101
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
            }
        }
    });

    ";
        // line 106
        if ( !($context["logged"] ?? null)) {
            // line 107
            echo "    \$(document).ready(function () {
        \$.ajax({
            url: 'index.php?route=checkout/login',
            dataType: 'html',
            success: function (html) {
                \$('#collapse-checkout-option .panel-body').html(html);

                \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 114
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                // \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
                new bootstrap.Collapse(document.getElementById('collapse-checkout-option'));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    ";
        } else {
            // line 125
            echo "    \$(document).ready(function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address',
            dataType: 'html',
            success: function (html) {
                \$('#collapse-payment-address .panel-body').html(html);

                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 132
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                // \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
                new bootstrap.Collapse(document.getElementById('collapse-payment-address'));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    ";
        }
        // line 143
        echo "
    // Checkout
    \$(document).delegate('#button-account', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
            dataType: 'html',
            beforeSend: function () {
                \$('#button-account').button('loading');
            },
            complete: function () {
                \$('#button-account').button('reset');
            },
            success: function (html) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                \$('#collapse-payment-address .panel-body').html(html);

                if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 162
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                } else {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 164
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                }

                // \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
                new bootstrap.Collapse(document.getElementById('collapse-payment-address'));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Login
    \$(document).delegate('#button-login', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/login/save',
            type: 'post',
            data: \$('#collapse-checkout-option :input'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-login').button('loading');
            },
            complete: function () {
                \$('#button-login').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    // Highlight any found errors
                    \$('input[name=\\'email\\']').parent().addClass('has-error');
                    \$('input[name=\\'password\\']').parent().addClass('has-error');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Register
    \$(document).delegate('#button-register', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/register/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-register').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-register').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 245
        if (($context["shipping_required"] ?? null)) {
            // line 246
            echo "                    var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            success: function (html) {
                                // Add the shipping address
                                \$.ajax({
                                    url: 'index.php?route=checkout/shipping_address',
                                    dataType: 'html',
                                    success: function (html) {
                                        \$('#collapse-shipping-address .panel-body').html(html);

                                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 260
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                    }
                                });

                                \$('#collapse-shipping-method .panel-body').html(html);

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 269
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                // \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                                new bootstrap.Collapse(document.getElementById('collapse-shipping-method'));

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 274
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 275
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 276
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-shipping-address .panel-body').html(html);

                                \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 289
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                // \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                                new bootstrap.Collapse(document.getElementById('collapse-shipping-address'));

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 294
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 295
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 296
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 304
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 310
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-payment-method'));

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 315
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                    ";
        }
        // line 322
        echo "
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-register').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-address .panel-body').html(html);

                            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 332
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Payment Address
    \$(document).delegate('#button-payment-address', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-address').button('loading');
            },
            complete: function () {
                \$('#button-payment-address').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    ";
        // line 383
        if (($context["shipping_required"] ?? null)) {
            // line 384
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 390
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-shipping-address'));

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 395
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 396
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 397
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                    ";
        } else {
            // line 415
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 421
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-payment-method'));

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 426
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                    ";
        }
        // line 444
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Shipping Address
    \$(document).delegate('#button-shipping-address', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_address/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-address').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-address').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-address').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 497
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-shipping-method'));

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 502
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 503
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');

                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Guest
    \$(document).delegate('#button-guest', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 575
        if (($context["shipping_required"] ?? null)) {
            // line 576
            echo "                    var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                // Add the shipping address
                                \$.ajax({
                                    url: 'index.php?route=checkout/guest_shipping',
                                    dataType: 'html',
                                    success: function (html) {
                                        \$('#collapse-shipping-address .panel-body').html(html);

                                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 593
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                    }
                                });

                                \$('#collapse-shipping-method .panel-body').html(html);

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 602
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                // \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                                new bootstrap.Collapse(document.getElementById('collapse-shipping-method'));

                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 607
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 608
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/guest_shipping',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                \$('#collapse-shipping-address .panel-body').html(html);

                                \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 624
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                // \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                                new bootstrap.Collapse(document.getElementById('collapse-shipping-address'));

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 629
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 630
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 631
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 639
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 648
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-payment-method'));

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 653
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                    ";
        }
        // line 660
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Guest Shipping
    \$(document).delegate('#button-guest-shipping', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest_shipping/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest-shipping').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest-shipping').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest-shipping').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 713
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

                            // \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-shipping-method'));

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 718
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 719
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).delegate('#button-shipping-method', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method/save',
            type: 'post',
            data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 763
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-payment-method'));

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 768
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).delegate('#button-payment-method', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_method/save',
            type: 'post',
            data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-payment-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/confirm',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-payment-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-checkout-confirm .panel-body').html(html);

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-bs-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 812
        echo ($context["text_checkout_confirm"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
                            new bootstrap.Collapse(document.getElementById('collapse-checkout-confirm'));
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
";
        // line 829
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1114 => 829,  1094 => 812,  1047 => 768,  1039 => 763,  992 => 719,  988 => 718,  980 => 713,  925 => 660,  915 => 653,  907 => 648,  896 => 639,  885 => 631,  881 => 630,  877 => 629,  869 => 624,  850 => 608,  846 => 607,  838 => 602,  826 => 593,  807 => 576,  805 => 575,  730 => 503,  726 => 502,  718 => 497,  663 => 444,  642 => 426,  634 => 421,  626 => 415,  605 => 397,  601 => 396,  597 => 395,  589 => 390,  581 => 384,  579 => 383,  525 => 332,  513 => 322,  503 => 315,  495 => 310,  487 => 304,  476 => 296,  472 => 295,  468 => 294,  460 => 289,  444 => 276,  440 => 275,  436 => 274,  428 => 269,  416 => 260,  400 => 246,  398 => 245,  314 => 164,  309 => 162,  288 => 143,  274 => 132,  265 => 125,  251 => 114,  242 => 107,  240 => 106,  232 => 101,  227 => 99,  220 => 95,  215 => 93,  206 => 87,  202 => 86,  192 => 79,  181 => 71,  177 => 69,  167 => 62,  156 => 54,  152 => 52,  149 => 51,  139 => 44,  135 => 42,  125 => 35,  121 => 33,  119 => 32,  110 => 26,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/checkout/checkout.twig", "");
    }
}
