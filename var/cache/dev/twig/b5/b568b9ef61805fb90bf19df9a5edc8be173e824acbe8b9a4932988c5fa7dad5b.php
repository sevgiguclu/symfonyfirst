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

/* user/comments.html.twig */
class __TwigTemplate_e66932a508fb144b64240ca221998dae158cf5cfcf8733cb760fa7f70dfb0955 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/comments.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/comments.html.twig", 1);
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

    <section id=\"subintro\">
        <div class=\"jumbotron subhead\" id=\"overview\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div class=\"centered\">
                            <h3>USER COMMENTS</h3>
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
        // line 27
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "
                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3>User Comment List</h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">

                                <table class=\"table\">
                                    <thead>
                                    <tr>

                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Car</th>
                                        <th>Created_at</th>
                                        <th>Rate</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 53
            echo "                                        <tr>

                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "subject", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                            <td nowrap=\"\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "carid", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 59), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td><a href=\"\" class=\"btn btn-color\">Delete</a></td>

                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                                        <tr>
                                            <td colspan=\"10\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                    </tbody>
                                </table>




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
        return "user/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 69,  181 => 65,  171 => 60,  167 => 59,  161 => 58,  157 => 57,  153 => 56,  149 => 55,  145 => 53,  140 => 52,  112 => 27,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }} Profile {% endblock %}

{% block body %}


    <section id=\"subintro\">
        <div class=\"jumbotron subhead\" id=\"overview\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div class=\"centered\">
                            <h3>USER COMMENTS</h3>
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
                            <h3>User Comment List</h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">

                                <table class=\"table\">
                                    <thead>
                                    <tr>

                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Car</th>
                                        <th>Created_at</th>
                                        <th>Rate</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for comment in comments %}
                                        <tr>

                                            <td>{{ comment.subject }}</td>
                                            <td>{{ comment.comment }}</td>
                                            <td>{{ comment.status }}</td>
                                            <td nowrap=\"\"><a href=\"{{ path('car_show', {'id': comment.carid}) }}\">{{ comment.title }}</a></td>
                                            <td>{{ comment.created_at ? comment.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                            <td>{{ comment.rate }}</td>
                                            <td><a href=\"\" class=\"btn btn-color\">Delete</a></td>

                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"10\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>




                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "user/comments.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\user\\comments.html.twig");
    }
}
