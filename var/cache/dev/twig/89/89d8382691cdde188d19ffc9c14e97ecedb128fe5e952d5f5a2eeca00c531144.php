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

/* admin/messages/index.html.twig */
class __TwigTemplate_4c26f7ac0d6261dbddb10694d2e7ba83b7c43f5baabcef196bf3de266f700ffc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/messages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/messages/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/messages/index.html.twig", 1);
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

                    <h1>Messages index</h1>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages_new");
        echo "\" class=\"btn btn-rounded btn-dark\">Create new</a>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Ip</th>
                            <th>Note</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            echo "                            <tr>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "subject", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "status", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "ip", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "note", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["message"], "updatedAt", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "updatedAt", [], "any", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages_show", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-dark\">Show</a>
                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-dark\">Edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                            <tr>
                                <td colspan=\"10\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </tbody>
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
        return "admin/messages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  164 => 56,  155 => 52,  151 => 51,  146 => 49,  142 => 48,  138 => 47,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  111 => 40,  106 => 39,  86 => 22,  68 => 6,  58 => 5,  35 => 1,);
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

                    <h1>Messages index</h1>
                    <a href=\"{{ path('admin_messages_new') }}\" class=\"btn btn-rounded btn-dark\">Create new</a>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Ip</th>
                            <th>Note</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for message in messages %}
                            <tr>
                                <td>{{ message.id }}</td>
                                <td>{{ message.name }}</td>
                                <td>{{ message.subject }}</td>
                                <td>{{ message.message }}</td>
                                <td>{{ message.status }}</td>
                                <td>{{ message.ip }}</td>
                                <td>{{ message.note }}</td>
                                <td>{{ message.createdAt ? message.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ message.updatedAt ? message.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                <td>
                                    <a href=\"{{ path('admin_messages_show', {'id': message.id}) }}\" class=\"btn btn-rounded btn-dark\">Show</a>
                                    <a href=\"{{ path('admin_messages_edit', {'id': message.id}) }}\" class=\"btn btn-rounded btn-dark\">Edit</a>
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



    {% endblock %}

", "admin/messages/index.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\messages\\index.html.twig");
    }
}
