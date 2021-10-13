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
class __TwigTemplate_80ac685cde1bc22a3605750030caeb95b0cfeac44285acbf50eaa6ae0082c40d extends \Twig\Template
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
                            <ul>
                                <!-- Layer 1 -->
                                <li>
                                    <div class=\"info animate-in\">
                                        <h2>Bootstrap based</h2>
                                        <br>
                                        <h3>Corporate business</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <img class=\"slider_img animate-in\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/slides/sequence/img-1.png\" alt=\"\">
                                </li>
                                <!-- Layer 2 -->
                                <li>
                                    <div class=\"info\">
                                        <h2>Smart and fresh</h2>
                                        <br>
                                        <h3>Rich of features</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <img class=\"slider_img\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/slides/sequence/img-2.png\" alt=\"\">
                                </li>
                                <!-- Layer 3 -->
                                <li>
                                    <div class=\"info\">
                                        <h2>Far from ugly</h2>
                                        <br>
                                        <h3>Latest technology</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <img class=\"slider_img\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/slides/sequence/img-3.png\" alt=\"\">
                                </li>
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
        return array (  106 => 56,  90 => 43,  74 => 30,  43 => 1,);
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
                            <ul>
                                <!-- Layer 1 -->
                                <li>
                                    <div class=\"info animate-in\">
                                        <h2>Bootstrap based</h2>
                                        <br>
                                        <h3>Corporate business</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <img class=\"slider_img animate-in\" src=\"{{ asset('assets') }}/img/slides/sequence/img-1.png\" alt=\"\">
                                </li>
                                <!-- Layer 2 -->
                                <li>
                                    <div class=\"info\">
                                        <h2>Smart and fresh</h2>
                                        <br>
                                        <h3>Rich of features</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <img class=\"slider_img\" src=\"{{ asset('assets') }}/img/slides/sequence/img-2.png\" alt=\"\">
                                </li>
                                <!-- Layer 3 -->
                                <li>
                                    <div class=\"info\">
                                        <h2>Far from ugly</h2>
                                        <br>
                                        <h3>Latest technology</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class=\"btn btn-success\" href=\"#\">Learn more &raquo;</a>
                                    </div>
                                    <img class=\"slider_img\" src=\"{{ asset('assets') }}/img/slides/sequence/img-3.png\" alt=\"\">
                                </li>
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
