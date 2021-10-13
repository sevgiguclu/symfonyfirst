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

/* home/footer.html.twig */
class __TwigTemplate_28308719a0ce7e612efb7f9c6fd3e3bfa18f541f85111e7760c9c734fa785775 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        // line 1
        echo "<!-- Footer
================================================== -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Browse pages</h5>
                    <ul class=\"regular\">
                        <li><a href=\"#\">Work for us</a></li>
                        <li><a href=\"#\">Creative process</a></li>
                        <li><a href=\"#\">Case study</a></li>
                        <li><a href=\"#\">Scaffold awwards</a></li>
                        <li><a href=\"#\">Meet the team</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Recent blog posts</h5>
                    <ul class=\"regular\">
                        <li><a href=\"#\">Lorem ipsum dolor sit amet</a></li>
                        <li><a href=\"#\">Mea malis nominavi insolens ut</a></li>
                        <li><a href=\"#\">Minim timeam has no aperiri sanctus ei mea per pertinax</a></li>
                        <li><a href=\"#\">Te malorum dignissim eos quod sensibus</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <!-- logo -->
                    <a class=\"brand logo\" href=\"index.html\">
                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/logo-dark.png\" alt=\"\">
                    </a>
                    <!-- end logo -->
                    <address>
                        <strong>Registered Companyname, Inc.</strong><br>
                        8895 Somename Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class=\"verybottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    <p>
                        &copy; Serenity - All right reserved
                    </p>
                </div>
                <div class=\"span6\">
                    <div class=\"credits\">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
                        -->
                        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer
================================================== -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Browse pages</h5>
                    <ul class=\"regular\">
                        <li><a href=\"#\">Work for us</a></li>
                        <li><a href=\"#\">Creative process</a></li>
                        <li><a href=\"#\">Case study</a></li>
                        <li><a href=\"#\">Scaffold awwards</a></li>
                        <li><a href=\"#\">Meet the team</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Recent blog posts</h5>
                    <ul class=\"regular\">
                        <li><a href=\"#\">Lorem ipsum dolor sit amet</a></li>
                        <li><a href=\"#\">Mea malis nominavi insolens ut</a></li>
                        <li><a href=\"#\">Minim timeam has no aperiri sanctus ei mea per pertinax</a></li>
                        <li><a href=\"#\">Te malorum dignissim eos quod sensibus</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <!-- logo -->
                    <a class=\"brand logo\" href=\"index.html\">
                        <img src=\"{{ asset('assets') }}/img/logo-dark.png\" alt=\"\">
                    </a>
                    <!-- end logo -->
                    <address>
                        <strong>Registered Companyname, Inc.</strong><br>
                        8895 Somename Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class=\"verybottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    <p>
                        &copy; Serenity - All right reserved
                    </p>
                </div>
                <div class=\"span6\">
                    <div class=\"credits\">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
                        -->
                        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>", "home/footer.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\home\\footer.html.twig");
    }
}
