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

/* car/index.html.twig */
class __TwigTemplate_cfe4cd47a47c43ff6376209f081283f6586bc4aa381cbd2b0fe77950bdd6d2c7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "car/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " Profile ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowURL,windowName,windowFeatures) {
            window.open(windowURL,windowName,windowFeatures);
        }
    </SCRIPT>

<section id=\"subintro\">
    <div class=\"jumbotron subhead\" id=\"overview\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"centered\">
                        <h3>USER CARS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id=\"maincontent\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 32
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "
            <div class=\"span8\">
                <!-- start article 1 -->
                <article class=\"blog-post\">
                    <div class=\"post-heading\">
                        <h3>User Car List</h3>
                    </div>
                    <div class=\"row\">
                        <div class=\"span8\">


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Type</th>
                <th>Marka</th>
                <th>Fuel_type</th>
                <th>Gear_shape</th>
                <th>Model_year</th>
                <th>City</th>
                <th>I.Gallery</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 61
            echo "            <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td> <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["car"], "image", [], "any", false, false, false, 64))), "html", null, true);
            echo "\" height=\"40\"> </td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "type", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "marka", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "fuelType", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "gearShape", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "modelYear", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "city", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"javascript:openWin('";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_image_new", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=0,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                        <img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/gallery.jpg\" height=\"40\">
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_car_show", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_car_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "            <tr>
                <td colspan=\"19\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_car_new");
        echo "\">Create new</a>

                        </div>
                    </div>
                </article>
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
        return "car/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 89,  226 => 86,  217 => 82,  208 => 78,  204 => 77,  197 => 73,  193 => 72,  188 => 70,  184 => 69,  180 => 68,  176 => 67,  172 => 66,  168 => 65,  164 => 64,  160 => 63,  156 => 62,  153 => 61,  148 => 60,  117 => 32,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }} Profile {% endblock %}

{% block body %}

    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowURL,windowName,windowFeatures) {
            window.open(windowURL,windowName,windowFeatures);
        }
    </SCRIPT>

<section id=\"subintro\">
    <div class=\"jumbotron subhead\" id=\"overview\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"centered\">
                        <h3>USER CARS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id=\"maincontent\">
    <div class=\"container\">
        <div class=\"row\">
            {{ include('user/usermenu.html.twig') }}
            <div class=\"span8\">
                <!-- start article 1 -->
                <article class=\"blog-post\">
                    <div class=\"post-heading\">
                        <h3>User Car List</h3>
                    </div>
                    <div class=\"row\">
                        <div class=\"span8\">


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Type</th>
                <th>Marka</th>
                <th>Fuel_type</th>
                <th>Gear_shape</th>
                <th>Model_year</th>
                <th>City</th>
                <th>I.Gallery</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for car in cars %}
            <tr>
                <td>{{ car.id }}</td>
                <td>{{ car.title }}</td>
                <td> <img src=\"{{ asset('uploads/images/'~car.image) }}\" height=\"40\"> </td>
                <td>{{ car.type }}</td>
                <td>{{ car.marka }}</td>
                <td>{{ car.fuelType }}</td>
                <td>{{ car.gearShape }}</td>
                <td>{{ car.modelYear }}</td>
                <td>{{ car.city }}</td>
                <td>
                    <a href=\"javascript:openWin('{{ path('user_image_new',{'id':car.id}) }}','','toolbar=no,location=no,directories=0,status=0,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                        <img src=\"{{ asset('assets/admin/img') }}/gallery.jpg\" height=\"40\">
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('user_car_show', {'id': car.id}) }}\">show</a>
                    <a href=\"{{ path('user_car_edit', {'id': car.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"19\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('user_car_new') }}\">Create new</a>

                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

{% endblock %}

", "car/index.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\car\\index.html.twig");
    }
}
