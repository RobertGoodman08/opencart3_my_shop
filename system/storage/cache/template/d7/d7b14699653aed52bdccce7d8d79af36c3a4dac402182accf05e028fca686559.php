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

/* setting/setting.twig */
class __TwigTemplate_4e9982c23de87ee19ab3a8db9acd3cf714c0915ca0f2152919bdaca5fa69a473 extends \Twig\Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_seopro"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_meta_title"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 76);
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 91) == ($context["config_layout_id"] ?? null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 97);
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 108
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 110
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 111
        if (($context["error_name"] ?? null)) {
            // line 112
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 113
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 116
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 118
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 119
        if (($context["error_owner"] ?? null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 121
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 124
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 126
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 127
        if (($context["error_address"] ?? null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 132
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 134
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 138
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 140
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 141
        if (($context["error_email"] ?? null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 146
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 148
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 149
        if (($context["error_telephone"] ?? null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 154
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 156
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 160
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 161
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 162
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 166
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 168
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 174
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 177
        if (($context["locations"] ?? null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 179
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 181
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 182
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182), ($context["config_location"] ?? null))) {
                    // line 183
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 183);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 184);
                    echo "
                      ";
                } else {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 186);
                    echo "\" />
                      ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 187);
                    echo "
                      ";
                }
                // line 188
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " </div>
              </div>
              ";
        }
        // line 192
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 200) == ($context["config_country_id"] ?? null))) {
                // line 201
                echo "                    
                    <option value=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 202);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 202);
                echo "</option>
                    
                    ";
            } else {
                // line 205
                echo "                    
                    <option value=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 206);
                echo "</option>
                    
                    ";
            }
            // line 209
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 215
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 222
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 226
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 226) == ($context["config_timezone"] ?? null))) {
                // line 227
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 227);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 227);
                echo "</option>
                      ";
            } else {
                // line 229
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 229);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 229);
                echo "</option>
                      ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 236
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 241
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 241) == ($context["config_language"] ?? null))) {
                // line 242
                echo "                    
                    <option value=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 243);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 243);
                echo "</option>
                    
                    ";
            } else {
                // line 246
                echo "                    
                    <option value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 247);
                echo "</option>
                    
                    ";
            }
            // line 250
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 256
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 261
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261) == ($context["config_admin_language"] ?? null))) {
                // line 262
                echo "                    
                    <option value=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 263);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 263);
                echo "</option>
                    
                    ";
            } else {
                // line 266
                echo "                    
                    <option value=\"";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 267);
                echo "</option>
                    
                    ";
            }
            // line 270
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 276
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 281
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 281) == ($context["config_currency"] ?? null))) {
                // line 282
                echo "                    
                    <option value=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 283);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 283);
                echo "</option>
                    
                    ";
            } else {
                // line 286
                echo "                    
                    <option value=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 287);
                echo "</option>
                    
                    ";
            }
            // line 290
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 296
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 298
        if (($context["config_currency_auto"] ?? null)) {
            // line 299
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 300
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 302
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 303
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 304
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 305
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 306
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 307
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 309
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 310
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 311
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 315
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 319
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 319) == ($context["config_currency_engine"] ?? null))) {
                // line 320
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 320);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 320);
                echo "</option>
                    ";
            } else {
                // line 322
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 322);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 322);
                echo "</option>
                    ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 329
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 334
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 334) == ($context["config_length_class_id"] ?? null))) {
                // line 335
                echo "                    
                    <option value=\"";
                // line 336
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 336);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 336);
                echo "</option>
                    
                    ";
            } else {
                // line 339
                echo "                    
                    <option value=\"";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 340);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 340);
                echo "</option>
                    
                    ";
            }
            // line 343
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 349
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 354
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 354) == ($context["config_weight_class_id"] ?? null))) {
                // line 355
                echo "                    
                    <option value=\"";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 356);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 356);
                echo "</option>
                    
                    ";
            } else {
                // line 359
                echo "                    
                    <option value=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 360);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 360);
                echo "</option>
                    
                    ";
            }
            // line 363
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 371
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 373
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 375
        if (($context["config_product_count"] ?? null)) {
            // line 376
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 377
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 379
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 380
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 381
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 382
        if ( !($context["config_product_count"] ?? null)) {
            // line 383
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 384
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 386
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 387
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 388
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 392
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 394
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 395
        if (($context["error_limit_admin"] ?? null)) {
            // line 396
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 397
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autocomplete-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 400
        echo ($context["help_limit_autocomplete"] ?? null);
        echo "\">";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_autocomplete\" value=\"";
        // line 402
        echo ($context["config_limit_autocomplete"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "\" id=\"input-autocomplete-limit\" class=\"form-control\" />
                    ";
        // line 403
        if (($context["error_limit_autocomplete"] ?? null)) {
            // line 404
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_autocomplete"] ?? null);
            echo "</div>
                    ";
        }
        // line 405
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 409
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 411
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 413
        if (($context["config_review_status"] ?? null)) {
            // line 414
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 415
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 417
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 418
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 419
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 420
        if ( !($context["config_review_status"] ?? null)) {
            // line 421
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 424
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 425
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 426
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 430
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 432
        if (($context["config_review_guest"] ?? null)) {
            // line 433
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 434
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 436
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 437
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 438
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 439
        if ( !($context["config_review_guest"] ?? null)) {
            // line 440
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 441
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 443
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 444
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 445
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 450
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 452
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 454
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 455
        if (($context["error_voucher_min"] ?? null)) {
            // line 456
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 457
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 460
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 462
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 463
        if (($context["error_voucher_max"] ?? null)) {
            // line 464
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 465
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 469
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 471
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 473
        if (($context["config_tax"] ?? null)) {
            // line 474
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 475
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 477
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 478
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 479
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 480
        if ( !($context["config_tax"] ?? null)) {
            // line 481
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 482
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 484
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 485
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 486
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 490
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 493
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 495
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 496
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 497
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 500
            echo "                      
                      <option value=\"shipping\">";
            // line 501
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 504
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 505
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 506
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 509
            echo "                      
                      <option value=\"payment\">";
            // line 510
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 513
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 518
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 521
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 523
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 524
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 525
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 528
            echo "                      
                      <option value=\"shipping\">";
            // line 529
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 532
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 533
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 534
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 537
            echo "                      
                      <option value=\"payment\">";
            // line 538
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 541
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 547
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 549
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 551
        if (($context["config_customer_online"] ?? null)) {
            // line 552
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 553
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 555
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 556
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 557
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 558
        if ( !($context["config_customer_online"] ?? null)) {
            // line 559
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 560
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 562
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 563
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 564
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 568
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 570
        if (($context["config_customer_activity"] ?? null)) {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 572
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 574
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 575
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 576
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 577
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 578
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 579
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 581
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 582
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 583
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 587
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 589
        if (($context["config_customer_search"] ?? null)) {
            // line 590
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 591
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 593
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 594
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 595
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 596
        if ( !($context["config_customer_search"] ?? null)) {
            // line 597
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 598
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 600
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 601
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 602
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 606
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 611
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 611) == ($context["config_customer_group_id"] ?? null))) {
                // line 612
                echo "                      
                      <option value=\"";
                // line 613
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 613);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 613);
                echo "</option>
                      
                      ";
            } else {
                // line 616
                echo "                      
                      <option value=\"";
                // line 617
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 617);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 617);
                echo "</option>
                      
                      ";
            }
            // line 620
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 621
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 628
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 629
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 629), ($context["config_customer_group_display"] ?? null))) {
                // line 630
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 630);
                echo "\" checked=\"checked\" />
                        ";
                // line 631
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 631);
                echo "
                        ";
            } else {
                // line 633
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 633);
                echo "\" />
                        ";
                // line 634
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 634);
                echo "
                        ";
            }
            // line 635
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 639
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 640
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 643
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 645
        if (($context["config_customer_price"] ?? null)) {
            // line 646
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 647
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 649
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 650
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 651
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 652
        if ( !($context["config_customer_price"] ?? null)) {
            // line 653
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 654
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 656
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 657
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 658
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 662
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 664
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 665
        if (($context["error_login_attempts"] ?? null)) {
            // line 666
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 667
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 670
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 673
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 676
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 676) == ($context["config_account_id"] ?? null))) {
                // line 677
                echo "                      
                      <option value=\"";
                // line 678
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 678);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 678);
                echo "</option>
                      
                      ";
            } else {
                // line 681
                echo "                      
                      <option value=\"";
                // line 682
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 682);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 682);
                echo "</option>
                      
                      ";
            }
            // line 685
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 692
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 694
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 696
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 702
        if (($context["config_cart_weight"] ?? null)) {
            // line 703
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 704
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 706
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 707
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 708
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 709
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 710
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 711
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 713
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 714
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 715
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 719
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 721
        if (($context["config_checkout_guest"] ?? null)) {
            // line 722
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 723
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 725
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 726
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 727
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 728
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 729
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 730
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 732
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 733
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 734
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 738
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 741
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 744
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 744) == ($context["config_checkout_id"] ?? null))) {
                // line 745
                echo "                      
                      <option value=\"";
                // line 746
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 746);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 746);
                echo "</option>
                      
                      ";
            } else {
                // line 749
                echo "                      
                      <option value=\"";
                // line 750
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 750);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 750);
                echo "</option>
                      
                      ";
            }
            // line 753
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 759
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 764
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 764) == ($context["config_order_status_id"] ?? null))) {
                // line 765
                echo "                      
                      <option value=\"";
                // line 766
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 766);
                echo "</option>
                      
                      ";
            } else {
                // line 769
                echo "                      
                      <option value=\"";
                // line 770
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 770);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 770);
                echo "</option>
                      
                      ";
            }
            // line 773
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 779
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 781
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 782
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 783
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 783), ($context["config_processing_status"] ?? null))) {
                // line 784
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 784);
                echo "\" checked=\"checked\" />
                          ";
                // line 785
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 785);
                echo "
                          ";
            } else {
                // line 787
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 787);
                echo "\" />
                          ";
                // line 788
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 788);
                echo "
                          ";
            }
            // line 789
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo " </div>
                    ";
        // line 792
        if (($context["error_processing_status"] ?? null)) {
            // line 793
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 794
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 797
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 800
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 801
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 801), ($context["config_complete_status"] ?? null))) {
                // line 802
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 802);
                echo "\" checked=\"checked\" />
                          ";
                // line 803
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 803);
                echo "
                          ";
            } else {
                // line 805
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 805);
                echo "\" />
                          ";
                // line 806
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 806);
                echo "
                          ";
            }
            // line 807
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo " </div>
                    ";
        // line 810
        if (($context["error_complete_status"] ?? null)) {
            // line 811
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 812
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 815
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 819
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 820
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 820) == ($context["config_fraud_status_id"] ?? null))) {
                // line 821
                echo "                      
                      <option value=\"";
                // line 822
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 822);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 822);
                echo "</option>
                      
                      ";
            } else {
                // line 825
                echo "                      
                      <option value=\"";
                // line 826
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 826);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 826);
                echo "</option>
                      
                      ";
            }
            // line 829
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 835
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 838
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 840
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 841
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 841) == ($context["config_api_id"] ?? null))) {
                // line 842
                echo "                      
                      <option value=\"";
                // line 843
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 843);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 843);
                echo "</option>
                      
                      ";
            } else {
                // line 846
                echo "                      
                      <option value=\"";
                // line 847
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 847);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 847);
                echo "</option>
                      
                      ";
            }
            // line 850
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 851
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 857
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 859
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 861
        if (($context["config_stock_display"] ?? null)) {
            // line 862
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 863
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 865
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 866
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 867
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 868
        if ( !($context["config_stock_display"] ?? null)) {
            // line 869
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 870
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 872
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 873
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 874
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 878
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 880
        if (($context["config_stock_warning"] ?? null)) {
            // line 881
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 882
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 884
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 885
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 886
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 887
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 888
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 889
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 891
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 892
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 893
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 897
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 899
        if (($context["config_stock_checkout"] ?? null)) {
            // line 900
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 901
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 903
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 904
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 905
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 906
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 907
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 908
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 910
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 911
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 912
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 917
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 919
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 924
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 924) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 925
                echo "                      
                      <option value=\"";
                // line 926
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 926);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 926);
                echo "</option>
                      
                      ";
            } else {
                // line 929
                echo "                      
                      <option value=\"";
                // line 930
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 930);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 930);
                echo "</option>
                      
                      ";
            }
            // line 933
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 934
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 939
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 941
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 942
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 943
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 945
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 946
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 947
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 948
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 949
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 950
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 952
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 953
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 954
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 958
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 960
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 961
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 962
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 964
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 965
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 966
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 967
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 968
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 969
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 971
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 972
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 973
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 977
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 979
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 983
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 986
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 988
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 989
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 989) == ($context["config_affiliate_id"] ?? null))) {
                // line 990
                echo "                      
                      <option value=\"";
                // line 991
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 991);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 991);
                echo "</option>
                      
                      ";
            } else {
                // line 994
                echo "                      
                      <option value=\"";
                // line 995
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 995);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 995);
                echo "</option>
                      
                      ";
            }
            // line 998
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 999
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1005
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1007
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1010
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1012
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1013
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1013) == ($context["config_return_id"] ?? null))) {
                // line 1014
                echo "                      
                      <option value=\"";
                // line 1015
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1015);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1015);
                echo "</option>
                      
                      ";
            } else {
                // line 1018
                echo "                      
                      <option value=\"";
                // line 1019
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1019);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1019);
                echo "</option>
                      
                      ";
            }
            // line 1022
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1023
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1028
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1033
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1033) == ($context["config_return_status_id"] ?? null))) {
                // line 1034
                echo "                      
                      <option value=\"";
                // line 1035
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1035);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1035);
                echo "</option>
                      
                      ";
            } else {
                // line 1038
                echo "                      
                      <option value=\"";
                // line 1039
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1039);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1039);
                echo "</option>
                      
                      ";
            }
            // line 1042
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1043
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1049
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1051
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1054
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1056
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1057
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1057) == ($context["config_captcha"] ?? null))) {
                // line 1058
                echo "                      
                      <option value=\"";
                // line 1059
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1059);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1059);
                echo "</option>
                      
                      ";
            } else {
                // line 1062
                echo "                      
                      <option value=\"";
                // line 1063
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1063);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1063);
                echo "</option>
                      
                      ";
            }
            // line 1066
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1067
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1072
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1074
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1075
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1076
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1076), ($context["config_captcha_page"] ?? null))) {
                // line 1077
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1077);
                echo "\" checked=\"checked\" />
                          ";
                // line 1078
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1078);
                echo "
                          ";
            } else {
                // line 1080
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1080);
                echo "\" />
                          ";
                // line 1081
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1081);
                echo "
                          ";
            }
            // line 1082
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1091
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1092
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1093
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1097
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1098
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1099
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1105
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1107
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1111
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1112
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1113
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1116
            echo "                      
                      <option value=\"mail\">";
            // line 1117
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1120
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1121
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1122
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1125
            echo "                      
                      <option value=\"smtp\">";
            // line 1126
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1129
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1134
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1136
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1140
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1142
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1146
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1148
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1152
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1154
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1158
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1160
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1164
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1166
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1171
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1173
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1176
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1177
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1177), ($context["config_mail_alert"] ?? null))) {
                // line 1178
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1178);
                echo "\" checked=\"checked\" />
                          ";
                // line 1179
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1179);
                echo "
                          ";
            } else {
                // line 1181
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1181);
                echo "\" />
                          ";
                // line 1182
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1182);
                echo "
                          ";
            }
            // line 1183
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1185
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1189
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1191
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1198
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1200
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1202
        if (($context["config_maintenance"] ?? null)) {
            // line 1203
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1204
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1206
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1207
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1208
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1209
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1210
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1211
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1213
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1214
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1215
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1219
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1221
        if (($context["config_seo_url"] ?? null)) {
            // line 1222
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1223
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1225
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1226
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1227
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1228
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1229
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1230
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1232
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1233
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1234
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1238
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1240
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1244
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1246
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1251
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1253
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1255
        if (($context["config_secure"] ?? null)) {
            // line 1256
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1257
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1259
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1260
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1261
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1262
        if ( !($context["config_secure"] ?? null)) {
            // line 1263
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1264
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1266
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1267
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1268
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1272
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1274
        if (($context["config_password"] ?? null)) {
            // line 1275
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1276
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1278
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1279
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1280
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1281
        if ( !($context["config_password"] ?? null)) {
            // line 1282
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1283
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1285
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1286
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1287
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1291
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1293
        if (($context["config_shared"] ?? null)) {
            // line 1294
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1295
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1297
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1298
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1299
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1300
        if ( !($context["config_shared"] ?? null)) {
            // line 1301
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1302
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1304
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1305
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1306
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1310
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1312
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1313
        if (($context["error_encryption"] ?? null)) {
            // line 1314
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1315
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1319
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1321
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1323
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1327
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1329
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1333
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1335
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1340
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1342
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1344
        if (($context["config_error_display"] ?? null)) {
            // line 1345
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1346
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1348
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1349
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1350
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1351
        if ( !($context["config_error_display"] ?? null)) {
            // line 1352
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1353
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1355
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1356
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1357
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1361
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1363
        if (($context["config_error_log"] ?? null)) {
            // line 1364
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1365
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1367
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1368
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1369
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1370
        if ( !($context["config_error_log"] ?? null)) {
            // line 1371
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1372
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1374
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1375
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1376
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1380
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1382
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1383
        if (($context["error_log"] ?? null)) {
            // line 1384
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1385
        echo " </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>";
        // line 1393
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1395
        echo ($context["help_seo_pro"] ?? null);
        echo "\">";
        echo ($context["entry_seo_pro"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1397
        if (($context["config_seo_pro"] ?? null)) {
            // line 1398
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1399
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1401
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  ";
            // line 1402
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1403
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1404
        if ( !($context["config_seo_pro"] ?? null)) {
            // line 1405
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1406
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1408
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  ";
            // line 1409
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1410
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1414
        echo ($context["help_config_seo_url_include_path"] ?? null);
        echo "\">";
        echo ($context["entry_config_seo_url_include_path"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1416
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1417
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1418
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1420
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  ";
            // line 1421
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1422
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1423
        if ( !($context["config_seo_url_include_path"] ?? null)) {
            // line 1424
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1425
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1427
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  ";
            // line 1428
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1429
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1433
        echo ($context["entry_config_seo_url_cache"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1435
        if (($context["config_seo_url_cache"] ?? null)) {
            // line 1436
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1437
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1439
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  ";
            // line 1440
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1441
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1442
        if ( !($context["config_seo_url_cache"] ?? null)) {
            // line 1443
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1444
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1446
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  ";
            // line 1447
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1448
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1452
        echo ($context["entry_seopro_addslash"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1454
        if (($context["config_seopro_addslash"] ?? null)) {
            // line 1455
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1456
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1458
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  ";
            // line 1459
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1460
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1461
        if ( !($context["config_seopro_addslash"] ?? null)) {
            // line 1462
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1463
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1465
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  ";
            // line 1466
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1467
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1471
        echo ($context["entry_seopro_lowercase"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1473
        if (($context["config_seopro_lowercase"] ?? null)) {
            // line 1474
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1475
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1477
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  ";
            // line 1478
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1479
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1480
        if ( !($context["config_seopro_lowercase"] ?? null)) {
            // line 1481
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1482
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1484
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  ";
            // line 1485
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1486
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">";
        // line 1490
        echo ($context["entry_page_postfix"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"";
        // line 1492
        echo ($context["config_page_postfix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_page_postfix"] ?? null);
        echo "\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1496
        echo ($context["help_config_valide_param_flag"] ?? null);
        echo "\">";
        echo ($context["entry_config_valide_param_flag"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1498
        if (($context["config_valide_param_flag"] ?? null)) {
            // line 1499
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1500
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1502
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  ";
            // line 1503
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1504
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1505
        if ( !($context["config_valide_param_flag"] ?? null)) {
            // line 1506
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1507
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1509
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  ";
            // line 1510
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1511
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1515
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_valide_params"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"";
        // line 1517
        echo ($context["entry_valide_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_valide_params"] ?? null);
        echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1521
        echo ($context["entry_canonical_method_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_method"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1523
        if (($context["config_canonical_method"] ?? null)) {
            // line 1524
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1526
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\"/>
                  ";
            // line 1530
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1533
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\"/>
                  ";
            // line 1535
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1539
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1542
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1545
        echo ($context["entry_canonical_self_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_self"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1547
        if (($context["config_canonical_self"] ?? null)) {
            // line 1548
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1550
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\"/>
                  ";
            // line 1554
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1557
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\"/>
                  ";
            // line 1559
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1563
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1566
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1569
        echo ($context["entry_add_prevnext_help"] ?? null);
        echo "\">";
        echo ($context["entry_add_prevnext"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1571
        if (($context["config_add_prevnext"] ?? null)) {
            // line 1572
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1574
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\"/>
                  ";
            // line 1578
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1581
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\"/>
                  ";
            // line 1583
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1587
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1590
        echo "              </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 1593
        echo ($context["entry_noindex_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 1595
        if (($context["config_noindex_status"] ?? null)) {
            // line 1596
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\" checked=\"checked\"/>
                ";
            // line 1598
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\"/>
                ";
            // line 1602
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 1605
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\"/>
                ";
            // line 1607
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\" checked=\"checked\"/>
                ";
            // line 1611
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        }
        // line 1614
        echo "            </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1617
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <textarea name=\"config_noindex_disallow_params\" rows=10\" placeholder=\"";
        // line 1619
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_noindex_disallow_params"] ?? null);
        echo "</textarea>
              </div>
            </div>
\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1634
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1656
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1665
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1671
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1678
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1693
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4349 => 1693,  4331 => 1678,  4321 => 1671,  4312 => 1665,  4300 => 1656,  4275 => 1634,  4255 => 1619,  4248 => 1617,  4243 => 1614,  4237 => 1611,  4230 => 1607,  4226 => 1605,  4220 => 1602,  4213 => 1598,  4209 => 1596,  4207 => 1595,  4202 => 1593,  4197 => 1590,  4191 => 1587,  4184 => 1583,  4180 => 1581,  4174 => 1578,  4167 => 1574,  4163 => 1572,  4161 => 1571,  4154 => 1569,  4149 => 1566,  4143 => 1563,  4136 => 1559,  4132 => 1557,  4126 => 1554,  4119 => 1550,  4115 => 1548,  4113 => 1547,  4106 => 1545,  4101 => 1542,  4095 => 1539,  4088 => 1535,  4084 => 1533,  4078 => 1530,  4071 => 1526,  4067 => 1524,  4065 => 1523,  4058 => 1521,  4049 => 1517,  4042 => 1515,  4036 => 1511,  4031 => 1510,  4028 => 1509,  4023 => 1507,  4020 => 1506,  4018 => 1505,  4015 => 1504,  4010 => 1503,  4007 => 1502,  4002 => 1500,  3999 => 1499,  3997 => 1498,  3990 => 1496,  3981 => 1492,  3976 => 1490,  3970 => 1486,  3965 => 1485,  3962 => 1484,  3957 => 1482,  3954 => 1481,  3952 => 1480,  3949 => 1479,  3944 => 1478,  3941 => 1477,  3936 => 1475,  3933 => 1474,  3931 => 1473,  3926 => 1471,  3920 => 1467,  3915 => 1466,  3912 => 1465,  3907 => 1463,  3904 => 1462,  3902 => 1461,  3899 => 1460,  3894 => 1459,  3891 => 1458,  3886 => 1456,  3883 => 1455,  3881 => 1454,  3876 => 1452,  3870 => 1448,  3865 => 1447,  3862 => 1446,  3857 => 1444,  3854 => 1443,  3852 => 1442,  3849 => 1441,  3844 => 1440,  3841 => 1439,  3836 => 1437,  3833 => 1436,  3831 => 1435,  3826 => 1433,  3820 => 1429,  3815 => 1428,  3812 => 1427,  3807 => 1425,  3804 => 1424,  3802 => 1423,  3799 => 1422,  3794 => 1421,  3791 => 1420,  3786 => 1418,  3783 => 1417,  3781 => 1416,  3774 => 1414,  3768 => 1410,  3763 => 1409,  3760 => 1408,  3755 => 1406,  3752 => 1405,  3750 => 1404,  3747 => 1403,  3742 => 1402,  3739 => 1401,  3734 => 1399,  3731 => 1398,  3729 => 1397,  3722 => 1395,  3717 => 1393,  3707 => 1385,  3701 => 1384,  3699 => 1383,  3693 => 1382,  3688 => 1380,  3682 => 1376,  3677 => 1375,  3674 => 1374,  3669 => 1372,  3666 => 1371,  3664 => 1370,  3661 => 1369,  3656 => 1368,  3653 => 1367,  3648 => 1365,  3645 => 1364,  3643 => 1363,  3638 => 1361,  3632 => 1357,  3627 => 1356,  3624 => 1355,  3619 => 1353,  3616 => 1352,  3614 => 1351,  3611 => 1350,  3606 => 1349,  3603 => 1348,  3598 => 1346,  3595 => 1345,  3593 => 1344,  3588 => 1342,  3583 => 1340,  3573 => 1335,  3566 => 1333,  3557 => 1329,  3550 => 1327,  3541 => 1323,  3534 => 1321,  3529 => 1319,  3523 => 1315,  3517 => 1314,  3515 => 1313,  3509 => 1312,  3502 => 1310,  3496 => 1306,  3491 => 1305,  3488 => 1304,  3483 => 1302,  3480 => 1301,  3478 => 1300,  3475 => 1299,  3470 => 1298,  3467 => 1297,  3462 => 1295,  3459 => 1294,  3457 => 1293,  3450 => 1291,  3444 => 1287,  3439 => 1286,  3436 => 1285,  3431 => 1283,  3428 => 1282,  3426 => 1281,  3423 => 1280,  3418 => 1279,  3415 => 1278,  3410 => 1276,  3407 => 1275,  3405 => 1274,  3398 => 1272,  3392 => 1268,  3387 => 1267,  3384 => 1266,  3379 => 1264,  3376 => 1263,  3374 => 1262,  3371 => 1261,  3366 => 1260,  3363 => 1259,  3358 => 1257,  3355 => 1256,  3353 => 1255,  3346 => 1253,  3341 => 1251,  3331 => 1246,  3324 => 1244,  3315 => 1240,  3308 => 1238,  3302 => 1234,  3297 => 1233,  3294 => 1232,  3289 => 1230,  3286 => 1229,  3284 => 1228,  3281 => 1227,  3276 => 1226,  3273 => 1225,  3268 => 1223,  3265 => 1222,  3263 => 1221,  3256 => 1219,  3250 => 1215,  3245 => 1214,  3242 => 1213,  3237 => 1211,  3234 => 1210,  3232 => 1209,  3229 => 1208,  3224 => 1207,  3221 => 1206,  3216 => 1204,  3213 => 1203,  3211 => 1202,  3204 => 1200,  3199 => 1198,  3187 => 1191,  3180 => 1189,  3174 => 1185,  3166 => 1183,  3161 => 1182,  3156 => 1181,  3151 => 1179,  3146 => 1178,  3144 => 1177,  3141 => 1176,  3137 => 1175,  3130 => 1173,  3125 => 1171,  3115 => 1166,  3110 => 1164,  3101 => 1160,  3096 => 1158,  3087 => 1154,  3080 => 1152,  3071 => 1148,  3066 => 1146,  3057 => 1142,  3050 => 1140,  3041 => 1136,  3034 => 1134,  3027 => 1129,  3021 => 1126,  3018 => 1125,  3012 => 1122,  3009 => 1121,  3006 => 1120,  3000 => 1117,  2997 => 1116,  2991 => 1113,  2988 => 1112,  2986 => 1111,  2977 => 1107,  2972 => 1105,  2963 => 1099,  2957 => 1098,  2951 => 1097,  2944 => 1093,  2938 => 1092,  2934 => 1091,  2925 => 1084,  2917 => 1082,  2912 => 1081,  2907 => 1080,  2902 => 1078,  2897 => 1077,  2895 => 1076,  2892 => 1075,  2888 => 1074,  2883 => 1072,  2876 => 1067,  2870 => 1066,  2862 => 1063,  2859 => 1062,  2851 => 1059,  2848 => 1058,  2845 => 1057,  2841 => 1056,  2836 => 1054,  2828 => 1051,  2823 => 1049,  2815 => 1043,  2809 => 1042,  2801 => 1039,  2798 => 1038,  2790 => 1035,  2787 => 1034,  2784 => 1033,  2780 => 1032,  2771 => 1028,  2764 => 1023,  2758 => 1022,  2750 => 1019,  2747 => 1018,  2739 => 1015,  2736 => 1014,  2733 => 1013,  2729 => 1012,  2724 => 1010,  2716 => 1007,  2711 => 1005,  2703 => 999,  2697 => 998,  2689 => 995,  2686 => 994,  2678 => 991,  2675 => 990,  2672 => 989,  2668 => 988,  2663 => 986,  2655 => 983,  2646 => 979,  2639 => 977,  2633 => 973,  2628 => 972,  2625 => 971,  2620 => 969,  2617 => 968,  2615 => 967,  2612 => 966,  2607 => 965,  2604 => 964,  2599 => 962,  2596 => 961,  2594 => 960,  2587 => 958,  2581 => 954,  2576 => 953,  2573 => 952,  2568 => 950,  2565 => 949,  2563 => 948,  2560 => 947,  2555 => 946,  2552 => 945,  2547 => 943,  2544 => 942,  2542 => 941,  2535 => 939,  2528 => 934,  2522 => 933,  2514 => 930,  2511 => 929,  2503 => 926,  2500 => 925,  2497 => 924,  2493 => 923,  2486 => 919,  2481 => 917,  2474 => 912,  2469 => 911,  2466 => 910,  2461 => 908,  2458 => 907,  2456 => 906,  2453 => 905,  2448 => 904,  2445 => 903,  2440 => 901,  2437 => 900,  2435 => 899,  2428 => 897,  2422 => 893,  2417 => 892,  2414 => 891,  2409 => 889,  2406 => 888,  2404 => 887,  2401 => 886,  2396 => 885,  2393 => 884,  2388 => 882,  2385 => 881,  2383 => 880,  2376 => 878,  2370 => 874,  2365 => 873,  2362 => 872,  2357 => 870,  2354 => 869,  2352 => 868,  2349 => 867,  2344 => 866,  2341 => 865,  2336 => 863,  2333 => 862,  2331 => 861,  2324 => 859,  2319 => 857,  2311 => 851,  2305 => 850,  2297 => 847,  2294 => 846,  2286 => 843,  2283 => 842,  2280 => 841,  2276 => 840,  2271 => 838,  2263 => 835,  2256 => 830,  2250 => 829,  2242 => 826,  2239 => 825,  2231 => 822,  2228 => 821,  2225 => 820,  2221 => 819,  2212 => 815,  2207 => 812,  2201 => 811,  2199 => 810,  2196 => 809,  2188 => 807,  2183 => 806,  2178 => 805,  2173 => 803,  2168 => 802,  2166 => 801,  2163 => 800,  2159 => 799,  2152 => 797,  2147 => 794,  2141 => 793,  2139 => 792,  2136 => 791,  2128 => 789,  2123 => 788,  2118 => 787,  2113 => 785,  2108 => 784,  2106 => 783,  2103 => 782,  2099 => 781,  2092 => 779,  2085 => 774,  2079 => 773,  2071 => 770,  2068 => 769,  2060 => 766,  2057 => 765,  2054 => 764,  2050 => 763,  2041 => 759,  2034 => 754,  2028 => 753,  2020 => 750,  2017 => 749,  2009 => 746,  2006 => 745,  2003 => 744,  1999 => 743,  1994 => 741,  1986 => 738,  1980 => 734,  1975 => 733,  1972 => 732,  1967 => 730,  1964 => 729,  1962 => 728,  1959 => 727,  1954 => 726,  1951 => 725,  1946 => 723,  1943 => 722,  1941 => 721,  1934 => 719,  1928 => 715,  1923 => 714,  1920 => 713,  1915 => 711,  1912 => 710,  1910 => 709,  1907 => 708,  1902 => 707,  1899 => 706,  1894 => 704,  1891 => 703,  1889 => 702,  1882 => 700,  1873 => 696,  1866 => 694,  1861 => 692,  1853 => 686,  1847 => 685,  1839 => 682,  1836 => 681,  1828 => 678,  1825 => 677,  1822 => 676,  1818 => 675,  1813 => 673,  1805 => 670,  1800 => 667,  1794 => 666,  1792 => 665,  1786 => 664,  1779 => 662,  1773 => 658,  1768 => 657,  1765 => 656,  1760 => 654,  1757 => 653,  1755 => 652,  1752 => 651,  1747 => 650,  1744 => 649,  1739 => 647,  1736 => 646,  1734 => 645,  1727 => 643,  1722 => 640,  1716 => 639,  1713 => 638,  1705 => 635,  1700 => 634,  1695 => 633,  1690 => 631,  1685 => 630,  1683 => 629,  1680 => 628,  1676 => 627,  1670 => 626,  1663 => 621,  1657 => 620,  1649 => 617,  1646 => 616,  1638 => 613,  1635 => 612,  1632 => 611,  1628 => 610,  1619 => 606,  1613 => 602,  1608 => 601,  1605 => 600,  1600 => 598,  1597 => 597,  1595 => 596,  1592 => 595,  1587 => 594,  1584 => 593,  1579 => 591,  1576 => 590,  1574 => 589,  1569 => 587,  1563 => 583,  1558 => 582,  1555 => 581,  1550 => 579,  1547 => 578,  1545 => 577,  1542 => 576,  1537 => 575,  1534 => 574,  1529 => 572,  1526 => 571,  1524 => 570,  1517 => 568,  1511 => 564,  1506 => 563,  1503 => 562,  1498 => 560,  1495 => 559,  1493 => 558,  1490 => 557,  1485 => 556,  1482 => 555,  1477 => 553,  1474 => 552,  1472 => 551,  1465 => 549,  1460 => 547,  1452 => 541,  1446 => 538,  1443 => 537,  1437 => 534,  1434 => 533,  1431 => 532,  1425 => 529,  1422 => 528,  1416 => 525,  1413 => 524,  1411 => 523,  1406 => 521,  1398 => 518,  1391 => 513,  1385 => 510,  1382 => 509,  1376 => 506,  1373 => 505,  1370 => 504,  1364 => 501,  1361 => 500,  1355 => 497,  1352 => 496,  1350 => 495,  1345 => 493,  1337 => 490,  1331 => 486,  1326 => 485,  1323 => 484,  1318 => 482,  1315 => 481,  1313 => 480,  1310 => 479,  1305 => 478,  1302 => 477,  1297 => 475,  1294 => 474,  1292 => 473,  1287 => 471,  1282 => 469,  1276 => 465,  1270 => 464,  1268 => 463,  1262 => 462,  1255 => 460,  1250 => 457,  1244 => 456,  1242 => 455,  1236 => 454,  1229 => 452,  1224 => 450,  1217 => 445,  1212 => 444,  1209 => 443,  1204 => 441,  1201 => 440,  1199 => 439,  1196 => 438,  1191 => 437,  1188 => 436,  1183 => 434,  1180 => 433,  1178 => 432,  1171 => 430,  1165 => 426,  1160 => 425,  1157 => 424,  1152 => 422,  1149 => 421,  1147 => 420,  1144 => 419,  1139 => 418,  1136 => 417,  1131 => 415,  1128 => 414,  1126 => 413,  1119 => 411,  1114 => 409,  1108 => 405,  1102 => 404,  1100 => 403,  1094 => 402,  1087 => 400,  1082 => 397,  1076 => 396,  1074 => 395,  1068 => 394,  1061 => 392,  1055 => 388,  1050 => 387,  1047 => 386,  1042 => 384,  1039 => 383,  1037 => 382,  1034 => 381,  1029 => 380,  1026 => 379,  1021 => 377,  1018 => 376,  1016 => 375,  1009 => 373,  1004 => 371,  995 => 364,  989 => 363,  981 => 360,  978 => 359,  970 => 356,  967 => 355,  964 => 354,  960 => 353,  953 => 349,  946 => 344,  940 => 343,  932 => 340,  929 => 339,  921 => 336,  918 => 335,  915 => 334,  911 => 333,  904 => 329,  898 => 325,  892 => 324,  884 => 322,  876 => 320,  873 => 319,  869 => 318,  863 => 315,  857 => 311,  852 => 310,  849 => 309,  844 => 307,  841 => 306,  839 => 305,  836 => 304,  831 => 303,  828 => 302,  823 => 300,  820 => 299,  818 => 298,  811 => 296,  804 => 291,  798 => 290,  790 => 287,  787 => 286,  779 => 283,  776 => 282,  773 => 281,  769 => 280,  760 => 276,  753 => 271,  747 => 270,  739 => 267,  736 => 266,  728 => 263,  725 => 262,  722 => 261,  718 => 260,  711 => 256,  704 => 251,  698 => 250,  690 => 247,  687 => 246,  679 => 243,  676 => 242,  673 => 241,  669 => 240,  662 => 236,  656 => 232,  650 => 231,  642 => 229,  634 => 227,  631 => 226,  627 => 225,  621 => 222,  611 => 215,  604 => 210,  598 => 209,  590 => 206,  587 => 205,  579 => 202,  576 => 201,  573 => 200,  569 => 199,  562 => 195,  557 => 192,  552 => 190,  544 => 188,  539 => 187,  534 => 186,  529 => 184,  524 => 183,  522 => 182,  519 => 181,  515 => 180,  509 => 179,  506 => 178,  504 => 177,  496 => 174,  489 => 172,  480 => 168,  473 => 166,  466 => 162,  460 => 161,  456 => 160,  447 => 156,  442 => 154,  437 => 151,  431 => 150,  429 => 149,  423 => 148,  418 => 146,  413 => 143,  407 => 142,  405 => 141,  399 => 140,  394 => 138,  385 => 134,  378 => 132,  373 => 129,  367 => 128,  365 => 127,  359 => 126,  354 => 124,  349 => 121,  343 => 120,  341 => 119,  335 => 118,  330 => 116,  325 => 113,  319 => 112,  317 => 111,  311 => 110,  306 => 108,  297 => 101,  291 => 100,  283 => 97,  280 => 96,  272 => 93,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  247 => 80,  241 => 79,  233 => 76,  230 => 75,  222 => 72,  219 => 71,  216 => 70,  212 => 69,  205 => 65,  196 => 61,  191 => 59,  182 => 55,  177 => 53,  172 => 50,  166 => 49,  164 => 48,  158 => 47,  153 => 45,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
