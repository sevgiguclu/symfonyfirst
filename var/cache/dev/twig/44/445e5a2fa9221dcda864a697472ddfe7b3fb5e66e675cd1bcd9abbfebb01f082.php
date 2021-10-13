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

/* home/header.html.twig */
class __TwigTemplate_f7000cc24df89dc0a0ea076574dbfd2f9036bfb0cb8720a7122bf45465110414 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        echo "<header>
    <!-- Navbar
    ================================================== -->
    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <!-- logo -->
                <a class=\"brand logo\" href=\"/\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/logo.png\" alt=\"\"></a>
                <!-- end logo -->
                <!-- top menu -->
                <div class=\"navigation\">
                    <nav>
                        <ul class=\"nav topnav\">
                            <li class=\"dropdown active\">
                                <a href=\"/\"><i class=\"icon-home\"></i> Home</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\"><i class=\"icon-cog\"></i> Cars</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"overview.html\">Overview</a></li>
                                    <li><a href=\"scaffolding.html\">Scaffolding</a></li>
                                    <li><a href=\"base-css.html\">Base CSS</a></li>
                                    <li><a href=\"components.html\">Components</a></li>
                                    <li><a href=\"javascript.html\">Javascripts</a></li>
                                    <li><a href=\"icons.html\">More icons</a></li>
                                    <li class=\"dropdown\"><a href=\"#\">3rd level</a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li><a href=\"#\">Example menu</a></li>
                                            <li><a href=\"#\">Example menu</a></li>
                                            <li><a href=\"#\">Example menu</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"/about\">About Us</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"about.html\">About us</a></li>
                                    <li><a href=\"pricingtable.html\">Pricing table</a></li>
                                    <li><a href=\"fullwidth.html\">Fullwidth</a></li>
                                    <li><a href=\"404.html\">404</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\">FAQ</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"portfolio-2cols.html\">Portfolio 2 columns</a></li>
                                    <li><a href=\"portfolio-3cols.html\">Portfolio 3 columns</a></li>
                                    <li><a href=\"portfolio-4cols.html\">Portfolio 4 columns</a></li>
                                    <li><a href=\"portfolio-detail.html\">Portfolio detail</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\">Blog</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"blog_left_sidebar.html\">Blog left sidebar</a></li>
                                    <li><a href=\"blog_right_sidebar.html\">Blog right sidebar</a></li>
                                    <li><a href=\"post_left_sidebar.html\">Post left sidebar</a></li>
                                    <li><a href=\"post_right_sidebar.html\">Post right sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"/contact\">Contact</a>
                            </li>

                            ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "                                <li>
                                    <a href=\"/user\"><img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "image", [], "any", false, false, false, 68))), "html", null, true);
            echo "\" style=\"height: 20px\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "surname", [], "any", false, false, false, 68), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <a href=\"/logout\">Logout</a>
                                </li>

                            ";
        } else {
            // line 75
            echo "                                <li>
                                    <a href=\"/loginuser\"><i class=\"icon-lock\"></i> Login</a>
                                </li>
                            ";
        }
        // line 79
        echo "

                        </ul>
                    </nav>
                </div>
                <!-- end menu -->
            </div>
        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 79,  131 => 75,  118 => 68,  115 => 67,  113 => 66,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <!-- Navbar
    ================================================== -->
    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <!-- logo -->
                <a class=\"brand logo\" href=\"/\"><img src=\"{{ asset('assets') }}/img/logo.png\" alt=\"\"></a>
                <!-- end logo -->
                <!-- top menu -->
                <div class=\"navigation\">
                    <nav>
                        <ul class=\"nav topnav\">
                            <li class=\"dropdown active\">
                                <a href=\"/\"><i class=\"icon-home\"></i> Home</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\"><i class=\"icon-cog\"></i> Cars</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"overview.html\">Overview</a></li>
                                    <li><a href=\"scaffolding.html\">Scaffolding</a></li>
                                    <li><a href=\"base-css.html\">Base CSS</a></li>
                                    <li><a href=\"components.html\">Components</a></li>
                                    <li><a href=\"javascript.html\">Javascripts</a></li>
                                    <li><a href=\"icons.html\">More icons</a></li>
                                    <li class=\"dropdown\"><a href=\"#\">3rd level</a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li><a href=\"#\">Example menu</a></li>
                                            <li><a href=\"#\">Example menu</a></li>
                                            <li><a href=\"#\">Example menu</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"/about\">About Us</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"about.html\">About us</a></li>
                                    <li><a href=\"pricingtable.html\">Pricing table</a></li>
                                    <li><a href=\"fullwidth.html\">Fullwidth</a></li>
                                    <li><a href=\"404.html\">404</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\">FAQ</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"portfolio-2cols.html\">Portfolio 2 columns</a></li>
                                    <li><a href=\"portfolio-3cols.html\">Portfolio 3 columns</a></li>
                                    <li><a href=\"portfolio-4cols.html\">Portfolio 4 columns</a></li>
                                    <li><a href=\"portfolio-detail.html\">Portfolio detail</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\">Blog</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"blog_left_sidebar.html\">Blog left sidebar</a></li>
                                    <li><a href=\"blog_right_sidebar.html\">Blog right sidebar</a></li>
                                    <li><a href=\"post_left_sidebar.html\">Post left sidebar</a></li>
                                    <li><a href=\"post_right_sidebar.html\">Post right sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"/contact\">Contact</a>
                            </li>

                            {% if app.user %}
                                <li>
                                    <a href=\"/user\"><img src=\"{{ asset('uploads/images/'~ app.user.image) }}\" style=\"height: 20px\"> {{ app.user.name }}{{ app.user.surname }}</a>
                                </li>
                                <li>
                                    <a href=\"/logout\">Logout</a>
                                </li>

                            {% else %}
                                <li>
                                    <a href=\"/loginuser\"><i class=\"icon-lock\"></i> Login</a>
                                </li>
                            {% endif %}


                        </ul>
                    </nav>
                </div>
                <!-- end menu -->
            </div>
        </div>
    </div>", "home/header.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\home\\header.html.twig");
    }
}
