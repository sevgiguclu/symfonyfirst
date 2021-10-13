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

/* admin/advertisement/new.html.twig */
class __TwigTemplate_b764101e7e84d1ffa6af746049e2ec3672072bbe1b21eec0282c346f3fc5d958 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/advertisement/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/advertisement/new.html.twig"));

        // line 1
        echo "
<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/vendor/bootstrap/css/bootstrap.min.css\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/vendor/fonts/circular-std/style.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/libs/css/style.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/vendor/fonts/fontawesome/css/fontawesome-all.css\">


";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    <h2 style=\"margin-left: 100px;margin-top: 10px\">Create New Advertisment</h2>
    <hr>
    <h4 style=\"margin-left: 100px\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</h4>
<div class=\"container\">
    ";
        // line 16
        echo twig_include($this->env, $context, "admin/advertisement/_form.html.twig");
        echo "

</div>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Carid</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["advertisements"]) || array_key_exists("advertisements", $context) ? $context["advertisements"] : (function () { throw new RuntimeError('Variable "advertisements" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advertisement"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertisement"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertisement"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertisement"], "carid", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertisement"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["advertisement"], "image", [], "any", false, false, false, 41))), "html", null, true);
            echo "\" height=\"60\"></td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertisement"], "price", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertisement"], "status", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advertisement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["advertisement"], "id", [], "any", false, false, false, 45), "hid" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-dark\">Edit</a>
                </td>
                <td>
                    <form method=\"post\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advertisement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["advertisement"], "id", [], "any", false, false, false, 48), "hid" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["advertisement"], "id", [], "any", false, false, false, 50))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-rounded btn-dark\">Delete</button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertisement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/advertisement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  177 => 56,  166 => 50,  161 => 48,  155 => 45,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  123 => 36,  118 => 35,  96 => 16,  91 => 14,  85 => 10,  66 => 9,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css\">
<link href=\"{{ asset('assets') }}/admin/vendor/fonts/circular-std/style.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/libs/css/style.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/vendor/fonts/fontawesome/css/fontawesome-all.css\">


{% block body %}


    <h2 style=\"margin-left: 100px;margin-top: 10px\">Create New Advertisment</h2>
    <hr>
    <h4 style=\"margin-left: 100px\">{{ car.title }}</h4>
<div class=\"container\">
    {{ include('admin/advertisement/_form.html.twig') }}

</div>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Carid</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% for advertisement in advertisements %}
            <tr>
                <td>{{ advertisement.id }}</td>
                <td>{{ advertisement.title }}</td>
                <td>{{ advertisement.carid }}</td>
                <td>{{ advertisement.description }}</td>
                <td><img src=\"{{ asset('uploads/images/' ~ advertisement.image) }}\" height=\"60\"></td>
                <td>{{ advertisement.price }}</td>
                <td>{{ advertisement.status }}</td>
                <td>
                    <a href=\"{{ path('admin_advertisement_edit', {'id': advertisement.id,'hid':car.id}) }}\" class=\"btn btn-rounded btn-dark\">Edit</a>
                </td>
                <td>
                    <form method=\"post\" action=\"{{ path('admin_advertisement_delete', {'id': advertisement.id,'hid':car.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ advertisement.id) }}\">
                        <button class=\"btn btn-rounded btn-dark\">Delete</button>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>



{% endblock %}
", "admin/advertisement/new.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\advertisement\\new.html.twig");
    }
}
