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

/* admin/comment/index.html.twig */
class __TwigTemplate_b716bd8b763df017439294b038a821b12034d12bbb36d170c8f6114deef54ac5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/comment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class=\"dashboard-wrapper\">
        <div class=\"container-fluid dashboard-content\">
            <div class=\"row\">
                <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                    <h3 class=\"text-center\">
                        <h1>Comments List</h1>

                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Ip</th>
                                <th>User</th>
                                <th>Car</th>
                                <th>Created_at</th>
                                <th>Rate</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "                                <tr>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "subject", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "ip", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "surname", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_car_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-dark\">show</a>
                                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-dark\">edit</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                                <tr>
                                    <td colspan=\"10\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </tbody>
                        </table>


                    </h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 59,  166 => 55,  157 => 51,  153 => 50,  148 => 48,  144 => 47,  138 => 46,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  107 => 39,  102 => 38,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}



{% block body %}

    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin(windowURL,windowName,windowFeatures) {
            window.open(windowURL,windowName,windowFeatures);
        }
    </SCRIPT>
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class=\"dashboard-wrapper\">
        <div class=\"container-fluid dashboard-content\">
            <div class=\"row\">
                <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                    <h3 class=\"text-center\">
                        <h1>Comments List</h1>

                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Ip</th>
                                <th>User</th>
                                <th>Car</th>
                                <th>Created_at</th>
                                <th>Rate</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for comment in comments %}
                                <tr>
                                    <td>{{ comment.id }}</td>
                                    <td>{{ comment.subject }}</td>
                                    <td>{{ comment.comment }}</td>
                                    <td>{{ comment.status }}</td>
                                    <td>{{ comment.ip }}</td>
                                    <td><a href=\"{{ path('admin_user_show', {'id': comment.id}) }}\">{{ comment.name }} {{ comment.surname }}</a></td>
                                    <td><a href=\"{{ path('admin_car_show', {'id': comment.id}) }}\">{{ comment.title }}</a></td>
                                    <td>{{ comment.created_at ? comment.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                    <td>{{ comment.rate }}</td>
                                    <td>
                                        <a href=\"{{ path('admin_comment_show', {'id': comment.id}) }}\" class=\"btn btn-rounded btn-dark\">show</a>
                                        <a href=\"{{ path('admin_comment_edit', {'id': comment.id}) }}\" class=\"btn btn-rounded btn-dark\">edit</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"10\">no records found</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>


                    </h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->



{% endblock %}", "admin/comment/index.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\comment\\index.html.twig");
    }
}
