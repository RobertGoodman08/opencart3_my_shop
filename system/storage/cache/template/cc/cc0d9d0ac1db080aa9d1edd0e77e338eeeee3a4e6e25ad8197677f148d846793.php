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
class __TwigTemplate_d1c241168eb1516e7aecabf1a9cc01d2b537905a0532cdac982470d630df9e34 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
    ";
        // line 8
        if (($context["robots"] ?? null)) {
            // line 9
            echo "        <meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
    ";
        }
        // line 11
        echo "    <base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 12
        if (($context["description"] ?? null)) {
            // line 13
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 15
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 16
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 18
        echo "    <meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"";
        // line 20
        echo ($context["og_url"] ?? null);
        echo "\" />
    ";
        // line 21
        if (($context["og_image"] ?? null)) {
            // line 22
            echo "        <meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
    ";
        } else {
            // line 24
            echo "        <meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
    ";
        }
        // line 26
        echo "    <meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap\" rel=\"stylesheet\" />

    <link rel=\"shortcut icon\" href=\"catalog/view/theme/tavifa/images/favicon.ico\" type=\"image/x-icon\" />


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js\"></script>
    <!-- Animate On Scroll -->
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

    <!-- Custom JavaScript -->
    <script src=\"catalog/view/theme/tavifa/js/products.js\"></script>
    <script src=\"catalog/view/theme/tavifa/js/index.js\"></script>
    <script src=\"catalog/view/theme/tavifa/js/slider.js\"></script>



    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 46);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 46);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 46);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "        <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "

    <!-- Carousel -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />

    <!-- Custom StyleSheet -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/tavifa/styles.css\" />


    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 64
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 64);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 64);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 68
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
</head>

<body>

<!-- Header -->
<header id=\"header\" class=\"header\">
    <div class=\"navigation\">
        <div class=\"container\">
            <nav class=\"nav\">
                <div class=\"nav__hamburger\">
                    <svg>
                        <use xlink:href=\"catalog/view/theme/tavifa/images/sprite.svg#icon-menu\"></use>
                    </svg>
                </div>

                <div class=\"nav__logo\">
                    <a href=\"/\" class=\"scroll-link\">
                        PHONE
                    </a>
                </div>

                <div class=\"nav__menu\">
                    <div class=\"menu__top\">
                        <span class=\"nav__category\">PHONE</span>
                        <a href=\"#\" class=\"close__toggle\">
                            <svg>
                                <use xlink:href=\"catalog/view/theme/tavifa/images/sprite.svg#icon-cross\"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class=\"nav__list\">
                        <li class=\"nav__item\">
                            <a href=\"#header\" class=\"nav__link scroll-link\">Home</a>
                        </li>
                        <li class=\"nav__item\">
                            <a href=\"#category\" class=\"nav__link scroll-link\">Category</a>
                        </li>
                        <li class=\"nav__item\">
                            <a href=\"#news\" class=\"nav__link scroll-link\">Blog</a>
                        </li>
                        <li class=\"nav__item\">
                            <a href=\"#contact\" class=\"nav__link scroll-link\">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class=\"nav__icons\">
                    <a href=\"#\" class=\"icon__item\">
                        <svg class=\"icon__user\">
                            <use xlink:href=\"catalog/view/theme/tavifa/images/sprite.svg#icon-user\"></use>
                        </svg>
                    </a>

                    <a href=\"#\" class=\"icon__item\">
                        <svg class=\"icon__search\">
                            <use xlink:href=\"catalog/view/theme/tavifa/images/sprite.svg#icon-search\"></use>
                        </svg>
                    </a>

                    <a href=\"#\" class=\"icon__item\">
                        <svg class=\"icon__cart\">
                            <use xlink:href=\"catalog/view/theme/tavifa/images/sprite.svg#icon-shopping-basket\"></use>
                        </svg>
                        <span id=\"cart__total\">0</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Hero -->
    <div class=\"hero\">
        <div class=\"glide\" id=\"glide_1\">
            <div class=\"glide__track\" data-glide-el=\"track\">
                <ul class=\"glide__slides\">
                    <li class=\"glide__slide\">
                        <div class=\"hero__center\">
                            <div class=\"hero__left\">
                                <span class=\"\">New Inspiration 2020</span>
                                <h1 class=\"\">PHONES MADE FOR YOU!</h1>
                                <p>Trending from mobile and headphone style collection</p>
                                <a href=\"#\"><button class=\"hero__btn\">SHOP NOW</button></a>
                            </div>
                            <div class=\"hero__right\">
                                <div class=\"hero__img-container\">
                                    <img class=\"banner_01\" src=\"catalog/view/theme/tavifa/images/banner_01.png\" alt=\"banner2\" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=\"glide__slide\">
                        <div class=\"hero__center\">
                            <div class=\"hero__left\">
                                <span>New Inspiration 2020</span>
                                <h1>PHONES MADE FOR YOU!</h1>
                                <p>Trending from mobile and headphone style collection</p>
                                <a href=\"#\"><button class=\"hero__btn\">SHOP NOW</button></a>
                            </div>
                            <div class=\"hero__right\">
                                <img class=\"banner_02\" src=\"catalog/view/theme/tavifa/images/banner_02.png\" alt=\"banner2\" />
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"glide__bullets\" data-glide-el=\"controls[nav]\">
                <button class=\"glide__bullet\" data-glide-dir=\"=0\"></button>
                <button class=\"glide__bullet\" data-glide-dir=\"=1\"></button>
            </div>

            <div class=\"glide__arrows\" data-glide-el=\"controls\">
                <button class=\"glide__arrow glide__arrow--left\" data-glide-dir=\"<\">
                    <svg>
                        <use xlink:href=\"./images/sprite.svg#icon-arrow-left2\"></use>
                    </svg>
                </button>
                <button class=\"glide__arrow glide__arrow--right\" data-glide-dir=\">\">
                    <svg>
                        <use xlink:href=\"./images/sprite.svg#icon-arrow-right2\"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Main -->
<main id=\"main\">
    <div class=\"container\">
        <!-- Collection -->
        <section id=\"collection\" class=\"section collection\">
            <div class=\"collection__container\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                <div class=\"collection__box\">
                    <div class=\"img__container\">
                        <img class=\"collection_02\" src=\"catalog/view/theme/tavifa/images/collection_02.png\" alt=\"\">
                    </div>
                    <div class=\"collection__content\">
                        <div class=\"collection__data\">
                            <span>New Colors Introduced</span>
                            <h1>HEADPHONES</h1>
                            <a href=\"#shop\">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <div class=\"collection__box\">
                    <div class=\"img__container\">
                        <img class=\"collection_01\" src=\"catalog/view/theme/tavifa/images/collection_01.png\" alt=\"\">
                    </div>
                    <div class=\"collection__content\">
                        <div class=\"collection__data\">
                            <span>Phone Device Presets</span>
                            <h1>SMARTPHONES</h1>
                            <a href=\"#\">SHOP NOW</a>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Latest Products -->
        <section class=\"section latest__products\" id=\"latest\">
            <div class=\"title__container\">
                <div class=\"section__title active\" data-id=\"Latest Products\">
                    <span class=\"dot\"></span>
                    <h1 class=\"primary__title\">Latest Products</h1>
                </div>
            </div>
            <div class=\"container\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                <div class=\"glide\" id=\"glide_2\">
                    <div class=\"glide__track\" data-glide-el=\"track\">
                        <ul class=\"glide__slides latest-center\">
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"catalog/view/theme/tavifa/images/products/iPhone/iphone6.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Apple iPhone 11</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$750</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"catalog/view/theme/tavifa/images/products/sumsung/samsung5.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Samsung Galaxy</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$900</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"catalog/view/theme/tavifa/images/products/headphone/headphone4.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Sony WH-CH510</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$600</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"/images/products/sumsung/samsung3.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Samsung Galaxy</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$850</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"./images/products/iPhone/iphone2.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Apple iPhone 11</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$450</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"images/products/headphone/headphone2.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Sony WH-CH510</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$300</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"images/products/sumsung/samsung1.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Samsung Galaxy</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$300</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"images/products/headphone/headphone1.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Sony WH-CH510</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$250</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"product\">
                                    <div class=\"product__header\">
                                        <img src=\"images/products/iPhone/iphone1.jpeg\" alt=\"product\">
                                    </div>
                                    <div class=\"product__footer\">
                                        <h3>Apple iPhone XR</h3>
                                        <div class=\"rating\">
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-full\"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href=\"./images/sprite.svg#icon-star-empty\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"product__price\">
                                            <h4>\$550</h4>
                                        </div>
                                        <a href=\"#\"><button type=\"submit\" class=\"product__btn\">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip=\"Quick View\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-eye\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Wishlist\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-heart-o\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip=\"Add To Compare\" data-place=\"left\" href=\"#\">
                                                <svg>
                                                    <use xlink:href=\"./images/sprite.svg#icon-loop2\"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                        </ul>
                    </div>

                    <div class=\"glide__arrows\" data-glide-el=\"controls\">
                        <button class=\"glide__arrow glide__arrow--left\" data-glide-dir=\"<\">
                            <svg>
                                <use xlink:href=\"./images/sprite.svg#icon-arrow-left2\"></use>
                            </svg>
                        </button>
                        <button class=\"glide__arrow glide__arrow--right\" data-glide-dir=\">\">
                            <svg>
                                <use xlink:href=\"./images/sprite.svg#icon-arrow-right2\"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"category__section section\" id=\"category\">
            <div class=\"tab__list\">
                <div class=\"title__container tabs\">
                    <div class=\"section__titles category__titles \">
                        <div class=\"section__title filter-btn active\" data-id=\"All Products\">
                            <span class=\"dot\"></span>
                            <h1 class=\"primary__title\">All Products</h1>
                        </div>
                    </div>
                    <div class=\"section__titles\">
                        <div class=\"section__title filter-btn\" data-id=\"Trending Products\">
                            <span class=\"dot\"></span>
                            <h1 class=\"primary__title\">Trending Products</h1>
                        </div>
                    </div>

                    <div class=\"section__titles\">
                        <div class=\"section__title filter-btn\" data-id=\"Special Products\">
                            <span class=\"dot\"></span>
                            <h1 class=\"primary__title\">Special Products</h1>
                        </div>
                    </div>

                    <div class=\"section__titles\">
                        <div class=\"section__title filter-btn\" data-id=\"Featured Products\">
                            <span class=\"dot\"></span>
                            <h1 class=\"primary__title\">Featured Products</h1>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"category__container\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                <div class=\"category__center\"></div>
            </div>
    </div>
    </section>

    <!-- Facility Section -->
    <section class=\"facility__section section\" id=\"facility\">
        <div class=\"container\">
            <div class=\"facility__contianer\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                <div class=\"facility__box\">
                    <div class=\"facility-img__container\">
                        <svg>
                            <use xlink:href=\"./images/sprite.svg#icon-airplane\"></use>
                        </svg>
                    </div>
                    <p>FREE SHIPPING WORLD WIDE</p>
                </div>

                <div class=\"facility__box\">
                    <div class=\"facility-img__container\">
                        <svg>
                            <use xlink:href=\"./images/sprite.svg#icon-credit-card-alt\"></use>
                        </svg>
                    </div>
                    <p>100% MONEY BACK GUARANTEE</p>
                </div>

                <div class=\"facility__box\">
                    <div class=\"facility-img__container\">
                        <svg>
                            <use xlink:href=\"./images/sprite.svg#icon-credit-card\"></use>
                        </svg>
                    </div>
                    <p>MANY PAYMENT GATWAYS</p>
                </div>

                <div class=\"facility__box\">
                    <div class=\"facility-img__container\">
                        <svg>
                            <use xlink:href=\"./images/sprite.svg#icon-headphones\"></use>
                        </svg>
                    </div>
                    <p>24/7 ONLINE SUPPORT</p>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- Testimonial Section -->
    <section class=\"section testimonial\" id=\"testimonial\">
        <div class=\"testimonial__container\">
            <div class=\"glide\" id=\"glide_4\">
                <div class=\"glide__track\" data-glide-el=\"track\">
                    <ul class=\"glide__slides\">
                        <li class=\"glide__slide\">
                            <div class=\"testimonial__box\">
                                <div class=\"client__image\">
                                    <img src=\"./images/profile1.jpg\" alt=\"profile\">
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing
                                    elit. Recusandae fuga hic nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.</p>
                                <div class=\"client__info\">
                                    <h3>John Smith</h3>
                                    <span>Founder at Apple</span>
                                </div>
                            </div>
                        </li>
                        <li class=\"glide__slide\">
                            <div class=\"testimonial__box\">
                                <div class=\"client__image\">
                                    <img src=\"./images/profile2.jpg\" alt=\"profile\">
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                                    quibusdam consequatur
                                    eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                                    nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic
                                    nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.</p>
                                <div class=\"client__info\">
                                    <h3>John Smith</h3>
                                    <span>Founder at Apple</span>
                                </div>
                            </div>
                        </li>
                        <li class=\"glide__slide\">
                            <div class=\"testimonial__box\">
                                <div class=\"client__image\">
                                    <img src=\"./images/profile3.jpg\" alt=\"profile\">
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                                    quibusdam consequatur
                                    eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                                    nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic
                                    nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.</p>
                                <div class=\"client__info\">
                                    <h3>John Smith</h3>
                                    <span>Founder at Apple</span>
                                </div>
                            </div>

                        </li>
                        <li class=\"glide__slide\">
                            <div class=\"testimonial__box\">
                                <div class=\"client__image\">
                                    <img src=\"./images/profile4.jpg\" alt=\"\">
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                                    quibusdam consequatur
                                    eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic
                                    nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.
                                    hic
                                    nesciunt tempore
                                    quibusdam consequatur eligendi unde officia ex quae.</p>
                                <div class=\"client__info\">
                                    <h3>John Smith</h3>
                                    <span>Founder at Apple</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class=\"glide__bullets\" data-glide-el=\"controls[nav]\">
                    <button class=\"glide__bullet\" data-glide-dir=\"=0\"></button>
                    <button class=\"glide__bullet\" data-glide-dir=\"=1\"></button>
                    <button class=\"glide__bullet\" data-glide-dir=\"=2\"></button>
                    <button class=\"glide__bullet\" data-glide-dir=\"=3\"></button>
                </div>
            </div>
        </div>
    </section>

    <!--New Section  -->
    <section class=\"section news\" id=\"news\">
        <div class=\"container\">
            <div class=\"title__container\">
                <div class=\"section__titles\">
                    <div class=\"section__title active\">
                        <span class=\"dot\"></span>
                        <h1 class=\"primary__title\">Phone News</h1>
                    </div>
                </div>
            </div>
            <div class=\"news__container\">
                <div class=\"glide\" id=\"glide_5\">
                    <div class=\"glide__track\" data-glide-el=\"track\">
                        <ul class=\"glide__slides\">
                            <li class=\"glide__slide\">
                                <div class=\"new__card\">
                                    <div class=\"card__header\">
                                        <img src=\"./images/news1.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"card__footer\">
                                        <h3>Styling White Shirts After A Cool Day</h3>
                                        <span>By Admin</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                                            provident rem sed minus natus unde vel modi!</p>
                                        <a href=\"#\"><button>Read More</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"new__card\">
                                    <div class=\"card__header\">
                                        <img src=\"./images/news2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"card__footer\">
                                        <h3>Styling White Shirts After A Cool Day</h3>
                                        <span>By Admin</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                                            provident rem sed minus natus unde vel modi!</p>
                                        <a href=\"#\"><button>Read More</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"new__card\">
                                    <div class=\"card__header\">
                                        <img src=\"./images/news3.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"card__footer\">
                                        <h3>Styling White Shirts After A Cool Day</h3>
                                        <span>By Admin</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                                            provident rem sed minus natus unde vel modi!</p>
                                        <a href=\"#\"><button>Read More</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"new__card\">
                                    <div class=\"card__header\">
                                        <img src=\"./images/news4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"card__footer\">
                                        <h3>Styling White Shirts After A Cool Day</h3>
                                        <span>By Admin</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                                            provident rem sed minus natus unde vel modi!</p>
                                        <a href=\"#\"><button>Read More</button></a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"glide__slide\">
                                <div class=\"new__card\">
                                    <div class=\"card__header\">
                                        <img src=\"./images/news5.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"card__footer\">
                                        <h3>Styling White Shirts After A Cool Day</h3>
                                        <span>By Admin</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                                            provident rem sed minus natus unde vel modi!</p>
                                        <a href=\"#\"><button>Read More</button></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NewsLetter -->
    <section class=\"section newsletter\" id=\"contact\">
        <div class=\"container\">
            <div class=\"newsletter__content\">
                <div class=\"newsletter__data\">
                    <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                    <p>A short sentence describing what someone will receive by subscribing</p>
                </div>
                <form action=\"#\">
                    <input type=\"email\" placeholder=\"Enter your email address\" class=\"newsletter__email\">
                    <a class=\"newsletter__link\" href=\"#\">subscribe</a>
                </form>
            </div>
        </div>
    </section>

</main>

<!-- End Main -->

<!-- Footer -->
<footer id=\"footer\" class=\"section footer\">
    <div class=\"container\">
        <div class=\"footer__top\">
            <div class=\"footer-top__box\">
                <h3>EXTRAS</h3>
                <a href=\"#\">Brands</a>
                <a href=\"#\">Gift Certificates</a>
                <a href=\"#\">Affiliate</a>
                <a href=\"#\">Specials</a>
                <a href=\"#\">Site Map</a>
            </div>
            <div class=\"footer-top__box\">
                <h3>INFORMATION</h3>
                <a href=\"#\">About Us</a>
                <a href=\"#\">Privacy Policy</a>
                <a href=\"#\">Terms & Conditions</a>
                <a href=\"#\">Contact Us</a>
                <a href=\"#\">Site Map</a>
            </div>
            <div class=\"footer-top__box\">
                <h3>MY ACCOUNT</h3>
                <a href=\"#\">My Account</a>
                <a href=\"#\">Order History</a>
                <a href=\"#\">Wish List</a>
                <a href=\"#\">Newsletter</a>
                <a href=\"#\">Returns</a>
            </div>
            <div class=\"footer-top__box\">
                <h3>CONTACT US</h3>
                <div>
            <span>
              <svg>
                <use xlink:href=\"./images/sprite.svg#icon-location\"></use>
              </svg>
            </span>
                    42 Dream House, Dreammy street, 7131 Dreamville, USA
                </div>
                <div>
            <span>
              <svg>
                <use xlink:href=\"./images/sprite.svg#icon-envelop\"></use>
              </svg>
            </span>
                    company@gmail.com
                </div>
                <div>
            <span>
              <svg>
                <use xlink:href=\"./images/sprite.svg#icon-phone\"></use>
              </svg>
            </span>
                    456-456-4512
                </div>
                <div>
            <span>
              <svg>
                <use xlink:href=\"./images/sprite.svg#icon-paperplane\"></use>
              </svg>
            </span>
                    Dream City, USA
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer__bottom\">
        <div class=\"footer-bottom__box\">

        </div>
        <div class=\"footer-bottom__box\">

        </div>
    </div>
    </div>
</footer>
<!-- End Footer -->

<!-- PopUp -->
<div class=\"popup hide__popup\">
    <div class=\"popup__content\">
        <div class=\"popup__close\">
            <svg>
                <use xlink:href=\"./images/sprite.svg#icon-cross\"></use>
            </svg>
        </div>
        <div class=\"popup__left\">
            <div class=\"popup-img__container\">
                <img class=\"popup__img\" src=\"./images/popup.jpg\" alt=\"popup\">
            </div>
        </div>
        <div class=\"popup__right\">
            <div class=\"right__content\">
                <h1>Get Discount <span>30%</span> Off</h1>
                <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
                </p>
                <form action=\"#\">
                    <input type=\"email\" placeholder=\"Enter your email...\" class=\"popup__form\">
                    <a href=\"#\">Subscribe</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Go To -->

<a href=\"#header\" class=\"goto-top scroll-link\">
    <svg>
        <use xlink:href=\"./images/sprite.svg#icon-arrow-up\"></use>
    </svg>
</a>


<!-- Glide Carousel Script -->

</body>

</html>";
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
        return array (  207 => 70,  198 => 68,  194 => 67,  191 => 66,  180 => 64,  176 => 63,  162 => 51,  153 => 49,  148 => 48,  135 => 46,  131 => 45,  108 => 26,  102 => 24,  96 => 22,  94 => 21,  90 => 20,  84 => 18,  78 => 16,  75 => 15,  69 => 13,  67 => 12,  62 => 11,  56 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/home.twig", "");
    }
}
