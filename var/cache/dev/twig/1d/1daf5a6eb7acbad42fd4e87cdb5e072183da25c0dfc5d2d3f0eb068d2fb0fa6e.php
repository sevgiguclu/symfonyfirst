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

/* admin/footer.html.twig */
class __TwigTemplate_c52c555171023fffdb6c192876031c82a9057b5acdb326557ec8baca4697e723 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        // line 1
        echo "<!-- footer -->
<!-- ============================================================== -->
<div class=\"footer\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href=\"https://colorlib.com/wp/\">Colorlib</a>.
            </div>
            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                <div class=\"text-md-right footer-links d-none d-sm-block\">
                    <a href=\"javascript: void(0);\">About</a>
                    <a href=\"javascript: void(0);\">Support</a>
                    <a href=\"javascript: void(0);\">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/vendor/jquery/jquery-3.3.1.min.js\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/vendor/bootstrap/js/bootstrap.bundle.js\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/vendor/slimscroll/jquery.slimscroll.js\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/libs/js/main-js.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  80 => 30,  76 => 29,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer -->
<!-- ============================================================== -->
<div class=\"footer\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href=\"https://colorlib.com/wp/\">Colorlib</a>.
            </div>
            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                <div class=\"text-md-right footer-links d-none d-sm-block\">
                    <a href=\"javascript: void(0);\">About</a>
                    <a href=\"javascript: void(0);\">Support</a>
                    <a href=\"javascript: void(0);\">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src=\"{{ asset('assets') }}/admin/vendor/jquery/jquery-3.3.1.min.js\"></script>
<script src=\"{{ asset('assets') }}/admin/vendor/bootstrap/js/bootstrap.bundle.js\"></script>
<script src=\"{{ asset('assets') }}/admin/vendor/slimscroll/jquery.slimscroll.js\"></script>
<script src=\"{{ asset('assets') }}/admin/libs/js/main-js.js\"></script>", "admin/footer.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\footer.html.twig");
    }
}
