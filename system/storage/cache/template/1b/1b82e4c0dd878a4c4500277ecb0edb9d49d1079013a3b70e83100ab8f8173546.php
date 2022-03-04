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
class __TwigTemplate_63425973d01ffc6b0f768ac1e3f5b0ca213e0fca799e3ddfd9d427176d237fd7 extends \Twig\Template
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


<div class=\"container-fluid my-carousel\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"catalog/view/theme/tavifa/image/1.jpg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"catalog/view/theme/tavifa/image/2.jpg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"catalog/view/theme/tavifa/image/3.jpg\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\"  data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\"  data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>
</div>

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

<section class=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3 class=\"section-title\">Наши преимущества</h3>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-item\">
                    <p class=\"text-center\"><i class=\"fas fa-shipping-fast\"></i></p>
                    <p>Прямые поставки от производителей</p>
                </div>
            </div>

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-item\">
                    <p class=\"text-center\"><i class=\"fas fa-cubes\"></i></p>
                    <p>Широкий ассортимент товара</p>
                </div>
            </div>

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-item\">
                    <p class=\"text-center\"><i class=\"fas fa-hand-holding-usd\"></i></p>
                    <p>Приятные и конкуретные цены</p>
                </div>
            </div>

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-item\">
                    <p class=\"text-center\"><i class=\"fas fa-user-cog\"></i></p>
                    <p>Профессиональная консультация и сервис</p>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 213
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
        return array (  252 => 213,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/home.twig", "");
    }
}
