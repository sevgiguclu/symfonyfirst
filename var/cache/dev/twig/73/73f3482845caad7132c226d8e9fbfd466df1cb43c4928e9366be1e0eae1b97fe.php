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

/* user/usermenu.html.twig */
class __TwigTemplate_7a26e36bfa9e00b1d00fb2a3f1131f86d652aea18c45323865d0ad2de16e7536 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        // line 1
        echo "<div class=\"span4\">
    <aside>
        <div class=\"widget\">
            <form class=\"form-search\">
                <input placeholder=\"Type something\" type=\"text\" class=\"input-medium search-query\">
                <button type=\"submit\" class=\"btn btn-flat btn-color\">Search</button>
            </form>
        </div>
        <div class=\"widget\">
            <h4>User Menu</h4>
            <h2>
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "image", [], "any", false, false, false, 12))), "html", null, true);
        echo "\" style=\"height: 40px\" alt=\"User Image\" class=\"user-avatar-md rounded-circle\">
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "surname", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>

            <ul class=\"cat\">
                <li><a href=\"/user\">My Profile</a></li>
                <li><a href=\"/user/car\">My Cars</a></li>
                <li><a href=\"/user/comments\">My Comments</a></li>
                <li><a href=\"/user/advertisement\">My Advertisement</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            </ul>
        </div>
    </aside>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/usermenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"span4\">
    <aside>
        <div class=\"widget\">
            <form class=\"form-search\">
                <input placeholder=\"Type something\" type=\"text\" class=\"input-medium search-query\">
                <button type=\"submit\" class=\"btn btn-flat btn-color\">Search</button>
            </form>
        </div>
        <div class=\"widget\">
            <h4>User Menu</h4>
            <h2>
                <img src=\"{{ asset('uploads/images/'~ app.user.image) }}\" style=\"height: 40px\" alt=\"User Image\" class=\"user-avatar-md rounded-circle\">
                {{ app.user.name }} {{ app.user.surname }}</h2>

            <ul class=\"cat\">
                <li><a href=\"/user\">My Profile</a></li>
                <li><a href=\"/user/car\">My Cars</a></li>
                <li><a href=\"/user/comments\">My Comments</a></li>
                <li><a href=\"/user/advertisement\">My Advertisement</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            </ul>
        </div>
    </aside>
</div>", "user/usermenu.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\user\\usermenu.html.twig");
    }
}
