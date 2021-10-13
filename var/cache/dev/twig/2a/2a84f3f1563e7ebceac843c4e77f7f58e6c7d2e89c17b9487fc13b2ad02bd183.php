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

/* home/head.html.twig */
class __TwigTemplate_4143a5a09cfa59584b3e9b7b10a51ee0cf17d24bf286ec0a23ec79eac13dbc86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        // line 1
        echo "<!-- styles -->
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap-responsive.css\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/docs.css\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/prettyPhoto.css\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/flexslider.css\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/sequence.css\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">

<!-- fav and touch icons -->
<link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/favicon.ico\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-144-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-114-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-72-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-57-precomposed.png\">

<!-- =======================================================
  Theme Name: Serenity
  Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
======================================================= -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- styles -->
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/bootstrap-responsive.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/docs.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/prettyPhoto.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/flexslider.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/sequence.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/css/style.css\" rel=\"stylesheet\">
<link href=\"{{ asset('assets') }}/color/default.css\" rel=\"stylesheet\">

<!-- fav and touch icons -->
<link rel=\"shortcut icon\" href=\"{{ asset('assets') }}/ico/favicon.ico\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('assets') }}/ico/apple-touch-icon-144-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('assets') }}/ico/apple-touch-icon-114-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('assets') }}/ico/apple-touch-icon-72-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets') }}/ico/apple-touch-icon-57-precomposed.png\">

<!-- =======================================================
  Theme Name: Serenity
  Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
======================================================= -->", "home/head.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\home\\head.html.twig");
    }
}
