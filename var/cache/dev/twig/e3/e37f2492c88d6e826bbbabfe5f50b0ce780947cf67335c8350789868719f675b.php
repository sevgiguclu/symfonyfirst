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

/* home/slider.html.twig */
class __TwigTemplate_e20f357506d0d096ea2133382885b8221b7cbe68c7e2c3f0c208b9413665ed6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        // line 1
        echo "<section id=\"intro\">
    <div class=\"jumbotron masthead\">
        <div class=\"container\">
            <!-- slider navigation -->
            <div class=\"sequence-nav\">
                <div class=\"prev\">
                    <span></span>
                </div>
                <div class=\"next\">
                    <span></span>
                </div>
            </div>
            <!-- end slider navigation -->
            <div class=\"row\">
                <div class=\"span12\">
                    <div id=\"slider_holder\">
                        <div id=\"sequence\">
                            <ul  style=\"width: 100%; height: 100%; position: relative;\">

                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 21
            echo "                                <!-- Layer 1 -->
                                <li class=\"\" style=\"display: list-item; width: 100%; height: 100%; position: absolute; z-index: 1;\">
                                    <div class=\"info animate-out\" style=\"display: block;\">
                                        <h2>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</h2>
                                        <p>
                                            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                                        <img class=\"slider_img animate-in\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" alt=\"\">
                                    </a>

                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                            </ul>
                        </div>
                    </div>
                    <!-- Sequence Slider::END-->
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  89 => 31,  85 => 30,  78 => 26,  73 => 24,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"intro\">
    <div class=\"jumbotron masthead\">
        <div class=\"container\">
            <!-- slider navigation -->
            <div class=\"sequence-nav\">
                <div class=\"prev\">
                    <span></span>
                </div>
                <div class=\"next\">
                    <span></span>
                </div>
            </div>
            <!-- end slider navigation -->
            <div class=\"row\">
                <div class=\"span12\">
                    <div id=\"slider_holder\">
                        <div id=\"sequence\">
                            <ul  style=\"width: 100%; height: 100%; position: relative;\">

                                {% for rs in slider %}
                                <!-- Layer 1 -->
                                <li class=\"\" style=\"display: list-item; width: 100%; height: 100%; position: absolute; z-index: 1;\">
                                    <div class=\"info animate-out\" style=\"display: block;\">
                                        <h2>{{ rs.title }}</h2>
                                        <p>
                                            {{ rs.description }}
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <a href=\"{{ path('car_show', {'id': rs.id}) }}\">
                                        <img class=\"slider_img animate-in\" src=\"{{ asset('uploads/images/'~rs.image) }}\" alt=\"\">
                                    </a>

                                </li>
                                {% endfor %}

                            </ul>
                        </div>
                    </div>
                    <!-- Sequence Slider::END-->
                </div>
            </div>
        </div>
    </div>
</section>", "home/slider.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\home\\slider.html.twig");
    }
}
