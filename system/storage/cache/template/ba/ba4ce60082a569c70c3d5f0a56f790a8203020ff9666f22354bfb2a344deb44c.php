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

/* tavifa/template/common/footer.twig */
class __TwigTemplate_421f00655f0498bde1a407b1b949a1bb65dd50cc850da036ddeb9aa7264584e1 extends \Twig\Template
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
        echo "<footer>
    <section class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-6\">
                    <h4>Информация</h4>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"index.html\">Главная</a></li>
                        <li><a href=\"index.html\">О магазине</a></li>
                        <li><a href=\"index.html\">Оплата и доставка</a></li>
                        <li><a href=\"index.html\">Гарантия</a></li>
                    </ul>
                </div>

                <div class=\"col-md-3 col-6\">
                    <h4>Время работы</h4>
                    <ul class=\"list-unstyled\">
                        <li>г. Киев, ул. Пушкина, 10</li>
                        <li>пн-вс: 9:00 - 18:00</li>
                        <li>без перерыва</li>
                    </ul>
                </div>

                <div class=\"col-md-3 col-6\">
                    <h4>Контакты</h4>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"tel:5551234567\">555 123-45-67</a></li>
                        <li><a href=\"tel:5551234568\">555 123-45-68</a></li>
                        <li><a href=\"tel:5551234569\">555 123-45-69</a></li>
                    </ul>
                </div>

                <div class=\"col-md-3 col-6\">
                    <h4>Мы в сети</h4>
                    <div class=\"footer-icons\">
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<button id=\"top\">
    <i class=\"fas fa-angle-double-up\"></i>
</button>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/footer.twig", "");
    }
}
