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

/* messages.html.twig */
class __TwigTemplate_4f4bb87d22db001ce6d623b87d13f17e3da9d9771fba622a0b0f8b273eb874ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "flashbag", [], "any", false, false, false, 1), "all", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 3
                echo "        ";
                if (($context["label"] == "success")) {
                    // line 4
                    echo "
            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                <h4><i class=\"icon fa fa-check\"></i> BAŞARILI!</h4>
                ";
                    // line 8
                    echo $context["flash"];
                    echo "
            </div>
        ";
                } elseif ((                // line 10
$context["label"] == "error")) {
                    // line 11
                    echo "            <div class=\"alert alert-danger\">
                <strong>Error!</strong> ";
                    // line 12
                    echo $context["flash"];
                    echo "
            </div>
        ";
                } elseif ((                // line 14
$context["label"] == "info")) {
                    // line 15
                    echo "            <div class=\"alert alert-danger\">
                <strong>Error!</strong> ";
                    // line 16
                    echo $context["flash"];
                    echo "
            </div>
        ";
                } elseif ((                // line 18
$context["label"] == "warning")) {
                    // line 19
                    echo "
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                <h4><i class=\"icon fa fa-warning\"></i> UYARI!</h4>
                ";
                    // line 23
                    echo $context["flash"];
                    echo "
            </div>
        ";
                }
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  94 => 23,  88 => 19,  86 => 18,  81 => 16,  78 => 15,  76 => 14,  71 => 12,  68 => 11,  66 => 10,  61 => 8,  55 => 4,  52 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for label,flashes in app.session.flashbag.all %}
    {% for flash in flashes %}
        {% if(label == 'success') %}

            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                <h4><i class=\"icon fa fa-check\"></i> BAŞARILI!</h4>
                {{ flash|raw }}
            </div>
        {% elseif (label=='error') %}
            <div class=\"alert alert-danger\">
                <strong>Error!</strong> {{ flash|raw }}
            </div>
        {% elseif (label=='info') %}
            <div class=\"alert alert-danger\">
                <strong>Error!</strong> {{ flash|raw }}
            </div>
        {% elseif (label=='warning') %}

            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                <h4><i class=\"icon fa fa-warning\"></i> UYARI!</h4>
                {{ flash|raw }}
            </div>
        {% endif %}
    {% endfor %}
{% endfor %}
", "messages.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\messages.html.twig");
    }
}
