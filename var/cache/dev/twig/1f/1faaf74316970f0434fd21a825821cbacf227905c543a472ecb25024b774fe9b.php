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

/* admin/setting/show.html.twig */
class __TwigTemplate_b1fc6b3f77edd8f9ec20dc23b422907ed515df3facada6932c04ab46fb7d2697 extends \Twig\Template
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
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/show.html.twig", 1);
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

        echo "Setting";
        
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
        echo "<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class=\"dashboard-wrapper\">
    <div class=\"container-fluid dashboard-content\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <h3 class=\"text-center\">
                    <h1>Setting</h1>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 28, $this->source); })()), "keywords", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 36, $this->source); })()), "company", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 40, $this->source); })()), "address", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 48, $this->source); })()), "fax", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Smtpserver</th>
                            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 56, $this->source); })()), "smtpserver", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Smtpemail</th>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 60, $this->source); })()), "smtpemail", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Smtppassword</th>
                            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 64, $this->source); })()), "smtppassword", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Smtpport</th>
                            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 68, $this->source); })()), "smtpport", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 72, $this->source); })()), "facebook", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Instagram</th>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 76, $this->source); })()), "instagram", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Twitter</th>
                            <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 80, $this->source); })()), "twitter", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Aboutus</th>
                            <td>";
        // line 84
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 84, $this->source); })()), "aboutus", [], "any", false, false, false, 84);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>";
        // line 88
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 88, $this->source); })()), "contact", [], "any", false, false, false, 88);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Reference</th>
                            <td>";
        // line 92
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 92, $this->source); })()), "reference", [], "any", false, false, false, 92);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 96, $this->source); })()), "status", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        echo "\" class=\"btn btn-rounded btn-dark\">back to list</a>

                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" class=\"btn btn-rounded btn-dark\">edit</a>

                            ";
        // line 103
        echo twig_include($this->env, $context, "admin/setting/_delete_form.html.twig");
        echo "
                        </tr>
                        </tbody>
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
        return "admin/setting/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 103,  248 => 101,  243 => 99,  237 => 96,  230 => 92,  223 => 88,  216 => 84,  209 => 80,  202 => 76,  195 => 72,  188 => 68,  181 => 64,  174 => 60,  167 => 56,  160 => 52,  153 => 48,  146 => 44,  139 => 40,  132 => 36,  125 => 32,  118 => 28,  111 => 24,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Setting{% endblock %}

{% block body %}
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class=\"dashboard-wrapper\">
    <div class=\"container-fluid dashboard-content\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <h3 class=\"text-center\">
                    <h1>Setting</h1>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ setting.id }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ setting.title }}</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>{{ setting.keywords }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ setting.description }}</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>{{ setting.company }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ setting.address }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ setting.phone }}</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>{{ setting.fax }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ setting.email }}</td>
                        </tr>
                        <tr>
                            <th>Smtpserver</th>
                            <td>{{ setting.smtpserver }}</td>
                        </tr>
                        <tr>
                            <th>Smtpemail</th>
                            <td>{{ setting.smtpemail }}</td>
                        </tr>
                        <tr>
                            <th>Smtppassword</th>
                            <td>{{ setting.smtppassword }}</td>
                        </tr>
                        <tr>
                            <th>Smtpport</th>
                            <td>{{ setting.smtpport }}</td>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <td>{{ setting.facebook }}</td>
                        </tr>
                        <tr>
                            <th>Instagram</th>
                            <td>{{ setting.instagram }}</td>
                        </tr>
                        <tr>
                            <th>Twitter</th>
                            <td>{{ setting.twitter }}</td>
                        </tr>
                        <tr>
                            <th>Aboutus</th>
                            <td>{{ setting.aboutus|raw }}</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>{{ setting.contact|raw }}</td>
                        </tr>
                        <tr>
                            <th>Reference</th>
                            <td>{{ setting.reference|raw }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ setting.status }}</td>
                        </tr>
                        <tr>
                            <a href=\"{{ path('setting_index') }}\" class=\"btn btn-rounded btn-dark\">back to list</a>

                            <a href=\"{{ path('admin_setting_edit', {'id': setting.id}) }}\" class=\"btn btn-rounded btn-dark\">edit</a>

                            {{ include('admin/setting/_delete_form.html.twig') }}
                        </tr>
                        </tbody>
                    </table>


                </h3>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    {% endblock %}
", "admin/setting/show.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\setting\\show.html.twig");
    }
}
