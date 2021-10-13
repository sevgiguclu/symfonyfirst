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

/* home/index.html.twig */
class __TwigTemplate_f3650e9d23f0d56b934f299b87a7b9f887ccff80f10f9f8aecd1c655b77e6cb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'slider' => [$this, 'block_slider'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "En İyi Online Araç İlan ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo "araba, taşıt, otomobil, ikinci el araba, satılık araba, sahibinden, ilan, araba ilanları";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo "Cok daha fazlasını binlerce ilan arasından kıyasla ve hayalindeki araca hemen sahip ol";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $this->loadTemplate("home/slider.html.twig", "home/index.html.twig", 7)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-suitcase left active\"></i>
                    <h4>Responsive bootstrap</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-plane left\"></i>
                    <h4>Lot of features</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-leaf left\"></i>
                    <h4>Multipurpose template</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-wrench left\"></i>
                    <h4>With latest technology</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"tagline centered\">
                        <div class=\"row\">
                            <div class=\"span12\">
                                <div class=\"tagline_text\">
                                    <h2>Don't miss this special offer for limited time only!</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                                    </p>
                                </div>
                                <div class=\"btn-toolbar cta\">
                                    <a class=\"btn btn-large btn-color\" href=\"#\">
                                        <i class=\"icon-plane icon-white\"></i> Try free version </a>
                                    <a class=\"btn btn-large btn-inverse\" href=\"#\">
                                        <i class=\"icon-shopping-cart icon-white\"></i> Buy license </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tagline -->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"home-posts\">
                    <div class=\"span12\">
                        <h3>Recent blog posts</h3>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-image\">
                            <a href=\"post_right_sidebar.html\">
                                <img src=\"assets/img/dummies/blog1.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-pencil left\"></i></a>
                            <span class=\"date\">Sep 17 <br>
\t\t\t\t\t2013</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">This is a standard post</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                        <div class=\"clear\">
                        </div>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-image\">
                            <a href=\"#\"><img src=\"assets/img/dummies/blog2.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-pencil left\"></i></a>
                            <span class=\"date\">Sep 17 2013</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">Example post image format</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                        <div class=\"clear\">
                        </div>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-image\">
                            <a href=\"#\"><img src=\"assets/img/dummies/blog2.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-facetime-video left\"></i></a>
                            <span class=\"date\">Sep 17 2011</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">Amazing video post format</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                        <div class=\"clear\">
                        </div>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-slider\">
                            <!-- start flexslider -->
                            <div class=\"flexslider\">
                                <ul class=\"slides\">
                                    <li>
                                        <a href=\"post_right_sidebar.html\"><img src=\"assets/img/dummies/work1.jpg\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"post_right_sidebar.html\"><img src=\"assets/img/dummies/work2.jpg\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"post_right_sidebar.html\"><img src=\"assets/img/dummies/work3.jpg\" alt=\"\"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-picture left\"></i></a>
                            <span class=\"date\">Sep 17 2011</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">Slider post format with flexslider</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 9,  138 => 8,  119 => 7,  100 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}En İyi Online Araç İlan {% endblock %}
{% block keywords %}araba, taşıt, otomobil, ikinci el araba, satılık araba, sahibinden, ilan, araba ilanları{% endblock %}
{% block description %}Cok daha fazlasını binlerce ilan arasından kıyasla ve hayalindeki araca hemen sahip ol{% endblock %}

  {% block slider %}{% include('home/slider.html.twig') %}{% endblock %}
{% block body %}
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-suitcase left active\"></i>
                    <h4>Responsive bootstrap</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-plane left\"></i>
                    <h4>Lot of features</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-leaf left\"></i>
                    <h4>Multipurpose template</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
                <div class=\"span3 features\">
                    <i class=\"icon-circled icon-32 icon-wrench left\"></i>
                    <h4>With latest technology</h4>
                    <div class=\"dotted_line\">
                    </div>
                    <p class=\"left\">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <a href=\"#\">Learn more</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"tagline centered\">
                        <div class=\"row\">
                            <div class=\"span12\">
                                <div class=\"tagline_text\">
                                    <h2>Don't miss this special offer for limited time only!</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                                    </p>
                                </div>
                                <div class=\"btn-toolbar cta\">
                                    <a class=\"btn btn-large btn-color\" href=\"#\">
                                        <i class=\"icon-plane icon-white\"></i> Try free version </a>
                                    <a class=\"btn btn-large btn-inverse\" href=\"#\">
                                        <i class=\"icon-shopping-cart icon-white\"></i> Buy license </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tagline -->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"home-posts\">
                    <div class=\"span12\">
                        <h3>Recent blog posts</h3>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-image\">
                            <a href=\"post_right_sidebar.html\">
                                <img src=\"assets/img/dummies/blog1.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-pencil left\"></i></a>
                            <span class=\"date\">Sep 17 <br>
\t\t\t\t\t2013</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">This is a standard post</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                        <div class=\"clear\">
                        </div>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-image\">
                            <a href=\"#\"><img src=\"assets/img/dummies/blog2.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-pencil left\"></i></a>
                            <span class=\"date\">Sep 17 2013</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">Example post image format</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                        <div class=\"clear\">
                        </div>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-image\">
                            <a href=\"#\"><img src=\"assets/img/dummies/blog2.jpg\" alt=\"\"></a>
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-facetime-video left\"></i></a>
                            <span class=\"date\">Sep 17 2011</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">Amazing video post format</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                        <div class=\"clear\">
                        </div>
                    </div>
                    <div class=\"span3\">
                        <div class=\"post-slider\">
                            <!-- start flexslider -->
                            <div class=\"flexslider\">
                                <ul class=\"slides\">
                                    <li>
                                        <a href=\"post_right_sidebar.html\"><img src=\"assets/img/dummies/work1.jpg\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"post_right_sidebar.html\"><img src=\"assets/img/dummies/work2.jpg\" alt=\"\"></a>
                                    </li>
                                    <li>
                                        <a href=\"post_right_sidebar.html\"><img src=\"assets/img/dummies/work3.jpg\" alt=\"\"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                        </div>
                        <div class=\"entry-meta\">
                            <a href=\"#\"><i class=\"icon-square icon-48 icon-picture left\"></i></a>
                            <span class=\"date\">Sep 17 2011</span>
                        </div>
                        <!-- end .entry-meta -->
                        <div class=\"entry-body\">
                            <a href=\"post_right_sidebar.html\">
                                <h5 class=\"title\">Slider post format with flexslider</h5>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                            </p>
                        </div>
                        <!-- end .entry-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "home/index.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\home\\index.html.twig");
    }
}
