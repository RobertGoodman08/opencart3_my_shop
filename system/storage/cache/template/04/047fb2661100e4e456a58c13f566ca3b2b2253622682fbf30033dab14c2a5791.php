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

/* extension/dashboard/domovoy_info.twig */
class __TwigTemplate_c64f3be9d317ec8578ff2694a4ce2f7e7e557663effeafc065dffd8d32c8c9e7 extends \Twig\Template
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
        echo "<div id=\"domovoy\" class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-calendar\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
        <button type=\"button\" id=\"button-phpinfo\" title=\"";
        // line 4
        echo ($context["text_phpinfo"] ?? null);
        echo "\" class=\"btn btn-info\">phpinfo</button>
        ";
        // line 5
        if (($context["phpversion"] ?? null)) {
            // line 6
            echo "            <button type=\"button\" title=\"";
            echo ($context["text_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('#phpversion')\" class=\"btn\"><i
                    class=\"fa fa-php\"></i> <span id=\"phpversion\">PHP ";
            // line 7
            echo ($context["phpversion"] ?? null);
            echo "</span></button>";
        }
        // line 8
        echo "        ";
        if (($context["database_version"] ?? null)) {
            // line 9
            echo "            <button type=\"button\" title=\"";
            echo ($context["text_copy"] ?? null);
            echo "\"  onclick=\"copyToClipboard('#database_version')\" class=\"btn\"><i
                    class=\"fa fa-database\"></i> <span id=\"database_version\">";
            // line 10
            echo ($context["database_version"] ?? null);
            echo "</span>
            </button>";
        }
        // line 12
        echo "        ";
        if (($context["ioncube_version"] ?? null)) {
            // line 13
            echo "            <button type=\"button\" title=\"";
            echo ($context["text_copy"] ?? null);
            echo "\"   onclick=\"copyToClipboard('#ioncube_version')\" class=\"btn\"><i
                    class=\"fa fa-square\"></i> <span id=\"ioncube_version\">ionCube ";
            // line 14
            echo ($context["ioncube_version"] ?? null);
            echo "</span>
            </button>";
        }
        // line 16
        echo "        ";
        if (($context["disk_free_space"] ?? null)) {
            // line 17
            echo "            <button type=\"button\" title=\"";
            echo ($context["text_copy"] ?? null);
            echo "\"   onclick=\"copyToClipboard('#disk_free_space')\" class=\"btn";
            if (($context["disk_free_space_warning"] ?? null)) {
                echo " btn-danger";
            }
            echo "\"><i
                    class=\"fa fa-hdd-o\"></i> <span
                    id=\"disk_free_space\">";
            // line 19
            echo ($context["text_disk_free_space"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["disk_free_space"] ?? null), "size", [], "any", false, false, false, 19);
            echo twig_get_attribute($this->env, $this->source, ($context["disk_free_space"] ?? null), "unit", [], "any", false, false, false, 19);
            echo "</span>
            </button>";
        }
        // line 21
        echo "        <div class=\"pull-right\">
            <a title=\"";
        // line 22
        echo ($context["text_setting"] ?? null);
        echo "\" href=\"";
        echo ($context["setting"] ?? null);
        echo "\" class=\"close\"><i class=\"fa fa-cog fa-2x \"></i></a>
        </div>
    </div>
    <div class=\"alert-body\"></div>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <table class=\"table table-bordered\">
                <tr>
                    <td>
                        <button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 31
        echo ($context["button_refresh"] ?? null);
        echo "\"
                                class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
                        <div class=\"btn-group\" data-toggle=\"buttons\">
                            ";
        // line 34
        if (($context["developer_theme"] ?? null)) {
            // line 35
            echo "                                <label class=\"btn btn-success active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                    <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\"
                                           ";
            // line 37
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
                                    ";
            // line 38
            echo ($context["button_on"] ?? null);
            echo "
                                </label>
                            ";
        } else {
            // line 41
            echo "                                <label class=\"btn btn-success\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                    <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\"
                                           ";
            // line 43
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                                    ";
            // line 44
            echo ($context["button_on"] ?? null);
            echo "
                                </label>
                            ";
        }
        // line 47
        echo "                            ";
        if ( !($context["developer_theme"] ?? null)) {
            // line 48
            echo "                                <label class=\"btn btn-danger active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                    <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\"
                                           ";
            // line 50
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
                                    ";
            // line 51
            echo ($context["button_off"] ?? null);
            echo "
                                </label>
                            ";
        } else {
            // line 54
            echo "                                <label class=\"btn btn-danger\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                    <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\"
                                           ";
            // line 56
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                                    ";
            // line 57
            echo ($context["button_off"] ?? null);
            echo "
                                </label>
                            ";
        }
        // line 59
        echo "</div> ";
        echo ($context["entry_theme_cache"] ?? null);
        echo "
                    </td>
                    <td>
                        <button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 62
        echo ($context["button_refresh"] ?? null);
        echo "\"
                                class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
                        <div class=\"btn-group\" data-toggle=\"buttons\">";
        // line 64
        if (($context["developer_sass"] ?? null)) {
            // line 65
            echo "                                <label class=\"btn btn-success active\">
                                    <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\" checked>
                                    ";
            // line 67
            echo ($context["button_on"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 69
            echo "                                <label class=\"btn btn-success\">
                                    <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\">
                                    ";
            // line 71
            echo ($context["button_on"] ?? null);
            echo "</label>
                            ";
        }
        // line 73
        echo "                            ";
        if ( !($context["developer_sass"] ?? null)) {
            // line 74
            echo "                                <label class=\"btn btn-danger active\">
                                    <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\" checked>
                                    ";
            // line 76
            echo ($context["button_off"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 78
            echo "                                <label class=\"btn btn-danger\">
                                    <input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\">
                                    ";
            // line 80
            echo ($context["button_off"] ?? null);
            echo "</label>
                            ";
        }
        // line 81
        echo "</div> ";
        echo ($context["entry_sass"] ?? null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 82
        echo ($context["entry_modification_cache"] ?? null);
        echo " <a id=\"odmod-refresh\" data-toggle=\"tooltip\"
                                                                             title=\"";
        // line 83
        echo ($context["button_refresh"] ?? null);
        echo "\"
                                                                             class=\"btn btn-warning\"><i
                                    class=\"fa fa-refresh\"></i></a></td>
                    <td class=\"text-right\">";
        // line 86
        echo ($context["entry_allcache"] ?? null);
        echo "
                        <button type=\"button\" value=\"allcache\" data-toggle=\"tooltip\" title=\"";
        // line 87
        echo ($context["button_refresh"] ?? null);
        echo "\"
                                class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
                    </td>
                </tr>
            </table>
        </li>
        ";
        // line 93
        if (($context["disk_free_space_warning"] ?? null)) {
            // line 94
            echo "            <li class=\"list-group-item\">";
            echo ($context["disk_free_space_warning"] ?? null);
            echo "</li>
        ";
        }
        // line 96
        echo "        ";
        if ( !($context["developer_theme"] ?? null)) {
            // line 97
            echo "            <li class=\"list-group-item\"><span class=\"btn-warning btn-xs\">";
            echo ($context["text_warning"] ?? null);
            echo "</span> ";
            echo ($context["text_twig_off_warning"] ?? null);
            echo "</li>
        ";
        }
        // line 99
        echo "        ";
        if (($context["folders"] ?? null)) {
            // line 100
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["folders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 101
                echo "                <li class=\"list-group-item\">
                    <button type=\"button\" value=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 102);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_clear"] ?? null);
                echo "\"
                            class=\"btn btn-warning clearFolder\" data-original-title=\"";
                // line 103
                echo ($context["button_refresh"] ?? null);
                echo "\"><i
                                class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" value=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "key", [], "any", false, false, false, 105);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_calculate"] ?? null);
                echo "\"
                            class=\"btn btn-success calcFolder\" data-original-title=\"";
                // line 106
                echo ($context["button_refresh"] ?? null);
                echo "\"><i
                                class=\"fa fa-cogs\"></i></button>
                    ";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 108);
                echo "<span
                            class=\"textFolder\">";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "size", [], "any", false, false, false, 109);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "files", [], "any", false, false, false, 109);
                if ( !twig_get_attribute($this->env, $this->source, $context["folder"], "warning_size", [], "any", false, false, false, 109)) {
                    echo ($context["text_normal"] ?? null);
                } else {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["folder"], "warning_size", [], "any", false, false, false, 109);
                    echo " ";
                }
                echo "</span>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        ";
        }
        // line 113
        echo "
        <li class=\"list-group-item\">
            ";
        // line 115
        if (($context["danger_funtions"] ?? null)) {
            // line 116
            echo "                <span class=\"btn-warning btn-xs\">";
            echo ($context["text_warning"] ?? null);
            echo "</span> ";
            echo ($context["text_danger_info"] ?? null);
            echo "
                <span>";
            // line 117
            echo ($context["danger_funtions"] ?? null);
            echo "</span>
            ";
        } else {
            // line 119
            echo "                <span class=\"btn-warning btn-xs\">";
            echo ($context["text_normal"] ?? null);
            echo "</span> ";
            echo ($context["text_danger_info_normal"] ?? null);
            echo "
            ";
        }
        // line 121
        echo "        </li>
        <li class=\"list-group-item\">
            ";
        // line 123
        if (($context["warning_funtions"] ?? null)) {
            // line 124
            echo "                <span class=\"btn-warning btn-xs\">";
            echo ($context["text_warning"] ?? null);
            echo "</span> ";
            echo ($context["text_warning_info"] ?? null);
            echo "
                <span>";
            // line 125
            echo ($context["warning_funtions"] ?? null);
            echo "</span>
            ";
        } else {
            // line 127
            echo "                <span class=\"btn-warning btn-xs\">";
            echo ($context["text_normal"] ?? null);
            echo "</span> ";
            echo ($context["text_warning_info_normal"] ?? null);
            echo "
            ";
        }
        // line 129
        echo "        </li>
        ";
        // line 130
        if (($context["activities"] ?? null)) {
            // line 131
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 132
                echo "                <li class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 132);
                echo "<br/>
                    <small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> ";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 133);
                echo "</small></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "        ";
        }
        // line 136
        echo "
    </ul>
</div>
<style>
    #domovoy .btn-group label {
        background: #a9a9a9
    }

    #domovoy .btn-group label.btn-success.active {
        background-color: #4cb64c;
    }

    #domovoy .btn-group label.btn-danger.active {
        background-color: #d0321e;
    }
</style>
<script type=\"text/javascript\"><!--
    \$('#button-phpinfo').on('click', function () {
        \$.ajax({
            url: 'index.php?route=extension/dashboard/domovoy/phpinfo&user_token=";
        // line 155
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'html',
            beforeSend: function () {
                \$('#modal-phpinfo').button('loading');
            },
            complete: function () {
                \$('#modal-phpinfo').button('reset');
            },
            success: function (html) {
                \$('#modal-phpinfo').remove();

                \$('body').prepend('<div id=\"modal-phpinfo\" class=\"modal\">' + html + '</div>');

                \$('#modal-phpinfo').modal('show');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });


    function setTooltip(element) {
        \$(element).tooltip('enable');
        \$(element).tooltip('hide')
            .attr('data-original-title', '";
        // line 180
        echo ($context["text_copied"] ?? null);
        echo "')
            .tooltip('show');
    }

    function hideTooltip(element) {
        setTimeout(function () {
            \$(element).tooltip('disable');
        }, 1000);
    }

    function copyToClipboard(element) {
        var \$temp = \$(\"<input>\");
        \$(\"body\").append(\$temp);
        \$temp.val(\$(element).text()).select();
        document.execCommand(\"copy\");
        setTooltip(element);
        hideTooltip(element);
        \$temp.remove();
    }

    function calcFolder(element) {

        \$.ajax({
            url: 'index.php?route=extension/dashboard/domovoy/calc&dir=' + \$(element).attr('value') + '&user_token=";
        // line 203
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
                \$(element).tooltip('disable');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$(element).parent().find('.textFolder').html(json['error']['warning']);
                }

                if (json['success']) {
                    \$(element).parent().find('.textFolder').html(json['success']);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });

    }

    \$('#domovoy button.clearFolder').on('click', function () {
        var element = this;

        \$.ajax({
            url: 'index.php?route=extension/dashboard/domovoy/clear&dir=' + \$(element).attr('value') + '&user_token=";
        // line 234
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$(element).parent().prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$(element).parent().prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    setTimeout(function () {
                        calcFolder(element);
                    }, 2000);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('#domovoy button.calcFolder').on('click', function () {
        var element = this;

        calcFolder(element);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#domovoy input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=common/developer/edit&user_token=";
        // line 271
        echo ($context["user_token"] ?? null);
        echo "',
            type: 'post',
            data: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
            dataType: 'json',
            beforeSend: function () {
                \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
            },
            complete: function () {
                \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#domovoy .alert-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$('#domovoy .alert-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('#domovoy table button').on('click', function () {
        var element = this;

        \$.ajax({
            url: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 302
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#domovoy .alert-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                if (json['success']) {
                    \$('#domovoy .alert-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('#odmod-refresh').on('click', function () {
        var element = this;

        \$.ajax({
            url: 'index.php?route=marketplace/modification/refresh&user_token=";
        // line 331
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            complete: function () {
                \$(element).button('reset');
                \$('.alert-dismissible').remove();
                \$('#domovoy .alert-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
        // line 336
        echo ($context["text_ocmod_cache_success"] ?? null);
        echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }
        });
    });
    //--></script>";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/domovoy_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 336,  666 => 331,  634 => 302,  600 => 271,  560 => 234,  526 => 203,  500 => 180,  472 => 155,  451 => 136,  448 => 135,  440 => 133,  435 => 132,  430 => 131,  428 => 130,  425 => 129,  417 => 127,  412 => 125,  405 => 124,  403 => 123,  399 => 121,  391 => 119,  386 => 117,  379 => 116,  377 => 115,  373 => 113,  370 => 112,  352 => 109,  348 => 108,  343 => 106,  337 => 105,  332 => 103,  326 => 102,  323 => 101,  318 => 100,  315 => 99,  307 => 97,  304 => 96,  298 => 94,  296 => 93,  287 => 87,  283 => 86,  277 => 83,  273 => 82,  268 => 81,  263 => 80,  259 => 78,  254 => 76,  250 => 74,  247 => 73,  242 => 71,  238 => 69,  233 => 67,  229 => 65,  227 => 64,  222 => 62,  215 => 59,  209 => 57,  203 => 56,  195 => 54,  189 => 51,  183 => 50,  175 => 48,  172 => 47,  166 => 44,  160 => 43,  152 => 41,  146 => 38,  140 => 37,  132 => 35,  130 => 34,  124 => 31,  110 => 22,  107 => 21,  99 => 19,  89 => 17,  86 => 16,  81 => 14,  76 => 13,  73 => 12,  68 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/domovoy_info.twig", "");
    }
}
