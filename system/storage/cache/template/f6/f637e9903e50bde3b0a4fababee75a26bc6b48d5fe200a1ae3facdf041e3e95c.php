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
class __TwigTemplate_55008ff362dcf5dff50ae368c248bdd9a81bb8773626d7c0b0524eee730502de extends \Twig\Template
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
                        <li><a href=\"/\">Главная</a></li>
                        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 10
            echo "                            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 10);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                        <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
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
</html>";
    }

    public function getTemplateName()
    {
        return "tavifa/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tavifa/template/common/footer.twig", "");
    }
}
