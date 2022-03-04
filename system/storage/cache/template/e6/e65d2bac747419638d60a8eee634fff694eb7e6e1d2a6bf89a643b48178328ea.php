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

/* tavifa/template/common/home.twig */
class __TwigTemplate_ec906953ddc04237dfa50bc5b57ee091684c84c45b481dd22da6d10c438a20ed extends \Twig\Template
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


";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "


";
        // line 7
        echo ($context["content_bottom"] ?? null);
        echo "


<section class=\"featured-products\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3 class=\"section-title\">Рекомендуемые товары</h3>
            </div>

            <div class=\"col-md-4 col-sm-6 mb-3\">
                <div class=\"product-card\">
                    <div class=\"product-thumb\">
                        <a href=\"product.html\"><img src=\"catalog/view/theme/tavifa/image/products/iphone_1.jpg\" alt=\"\"></a>
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
                        <a href=\"product.html\"><img src=\"catalog/view/theme/tavifa/image/products/apple_cinema_30.jpg\" alt=\"\"></a>
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
                        <a href=\"product.html\"><img src=\"catalog/view/theme/tavifa/image/products/canon_eos_5d_1.jpg\" alt=\"\"></a>
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
                        <a href=\"product.html\"><img src=\"catalog/view/theme/tavifa/image/products/hp_1.jpg\" alt=\"\"></a>
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
                        <a href=\"product.html\"><img src=\"catalog/view/theme/tavifa/image/products/imac_1.jpg\" alt=\"\"></a>
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
                        <a href=\"product.html\"><img src=\"catalog/view/theme/tavifa/image/products/iphone_1.jpg\" alt=\"\"></a>
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
    </div>
</section>

";
        // line 165
        echo "
";
        // line 172
        echo "
";
        // line 179
        echo "
";
        // line 189
        echo "

";
        // line 191
        echo ($context["html"] ?? null);
        echo "


";
        // line 194
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 194,  211 => 191,  207 => 189,  204 => 179,  201 => 172,  198 => 165,  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/home.twig", "");
    }
}
