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

/* tavifa/template/product/category.twig */
class __TwigTemplate_72424d7446d7025cc7afea464c2e20a1abf7f6573f3b0619c6b944b66234483b extends \Twig\Template
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

        ";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "

        <div class=\"col-lg-9 content\">

            <h1 class=\"section-title\">Компьютеры</h1>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"input-group mb-3\">
                        <label class=\"input-group-text\" for=\"input-sort\">Сортировка:</label>
                        <select class=\"form-select\" id=\"input-sort\">
                            <option selected>По умолчанию</option>
                            <option value=\"1\">Название (А - Я)</option>
                            <option value=\"2\">Название (Я - А)</option>
                            <option value=\"3\">Цена (низкая > высокая)</option>
                            <option value=\"3\">Цена (высокая > низкая)</option>
                        </select>
                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"input-group mb-3\">
                        <label class=\"input-group-text\" for=\"input-sort\">Показать:</label>
                        <select class=\"form-select\" id=\"input-sort\">
                            <option selected>15</option>
                            <option value=\"1\">25</option>
                            <option value=\"2\">50</option>
                            <option value=\"3\">75</option>
                            <option value=\"3\">100</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"product.html\"><img src=\"img/products/iphone_1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"product.html\">iPhone iPhone iPhone iPhone iPhone iPhone iPhone</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    <small>\$200.00</small>
                                    \$185.00
                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"product.html\"><img src=\"img/products/apple_cinema_30.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"product.html\">Apple cinema 30\"</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia. 2 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    <small>\$200.00</small>
                                    \$185.00
                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"product.html\"><img src=\"img/products/canon_eos_5d_1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"product.html\">Canon EOS 5D</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    <small>\$200.00</small>
                                    \$185.00
                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"product.html\"><img src=\"img/products/hp_1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"product.html\">HP</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    <small>\$200.00</small>
                                    \$185.00
                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"product.html\"><img src=\"img/products/imac_1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"product.html\">iMac</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    <small>\$200.00</small>
                                    \$185.00
                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"product-card\">
                        <div class=\"product-thumb\">
                            <a href=\"product.html\"><img src=\"img/products/iphone_1.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"product-details\">
                            <h4><a href=\"product.html\">iPhone</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, officia.</p>
                            <div class=\"product-bottom-details d-flex justify-content-between\">
                                <div class=\"product-price\">
                                    <small>\$200.00</small>
                                    \$185.00
                                </div>
                                <div class=\"product-links\">
                                    <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a href=\"#\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav>
                        <ul class=\"pagination\">
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Previous</a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item active\" aria-current=\"page\">
                                <a class=\"page-link\" href=\"#\">2</a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </div>
</div>

";
        // line 209
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 209,  69 => 16,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/product/category.twig", "");
    }
}
