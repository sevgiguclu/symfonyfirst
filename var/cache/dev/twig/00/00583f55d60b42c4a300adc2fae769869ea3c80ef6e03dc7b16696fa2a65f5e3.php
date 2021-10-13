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

/* admin/sidebar.html.twig */
class __TwigTemplate_4e83f234c62f4d50edc73493e2f3df0fcad4077daeb97b4332b5e3eada552bde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        echo "<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class=\"nav-left-sidebar sidebar-dark\">
    <div class=\"menu-list\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav flex-column\"><i class=\"fa fa-fw fa-user-circle\"></i>
                    <li class=\"nav-divider\">
                        <a href=\"/admin\"> Car Admin</a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link active\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\"></i>İlanlar<span class=\"badge badge-success\">6</span></a>
                        <div id=\"submenu-1\" class=\"collapse submenu\" style=\"\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"index.html\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1-2\" aria-controls=\"submenu-1-2\">New</a>
                                    <div id=\"submenu-1-2\" class=\"collapse submenu\" style=\"\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../index.html\">dgbc</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../ecommerce-product.html\">Product List</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../ecommerce-product-single.html\">Product Single</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../ecommerce-product-checkout.html\">Product Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"../dashboard-finance.html\">Accepted</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"../dashboard-sales.html\">Canceled</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1-1\" aria-controls=\"submenu-1-1\">Infulencer</a>
                                    <div id=\"submenu-1-1\" class=\"collapse submenu\" style=\"\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../dashboard-influencer.html\">Influencer</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../influencer-finder.html\">Influencer Finder</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../influencer-profile.html\">Influencer Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>




                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/category\">

                            <p> Category</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/car\">
                            <p> Cars</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        echo "\">
                            <p> Settings</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/user\">
                            <p> Users</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/messages\">
                            <p> Contact Form Messages</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/comment\">
                            <p> User Comments</p>
                        </a>
                    </li>




                </ul>
            </div>
            </li>
            </ul>
    </div>
    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 82,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class=\"nav-left-sidebar sidebar-dark\">
    <div class=\"menu-list\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav flex-column\"><i class=\"fa fa-fw fa-user-circle\"></i>
                    <li class=\"nav-divider\">
                        <a href=\"/admin\"> Car Admin</a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link active\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\"></i>İlanlar<span class=\"badge badge-success\">6</span></a>
                        <div id=\"submenu-1\" class=\"collapse submenu\" style=\"\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"index.html\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1-2\" aria-controls=\"submenu-1-2\">New</a>
                                    <div id=\"submenu-1-2\" class=\"collapse submenu\" style=\"\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../index.html\">dgbc</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../ecommerce-product.html\">Product List</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../ecommerce-product-single.html\">Product Single</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../ecommerce-product-checkout.html\">Product Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"../dashboard-finance.html\">Accepted</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"../dashboard-sales.html\">Canceled</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1-1\" aria-controls=\"submenu-1-1\">Infulencer</a>
                                    <div id=\"submenu-1-1\" class=\"collapse submenu\" style=\"\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../dashboard-influencer.html\">Influencer</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../influencer-finder.html\">Influencer Finder</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"../influencer-profile.html\">Influencer Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>




                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/category\">

                            <p> Category</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/car\">
                            <p> Cars</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('setting_index') }}\">
                            <p> Settings</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/user\">
                            <p> Users</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/messages\">
                            <p> Contact Form Messages</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"/admin/comment\">
                            <p> User Comments</p>
                        </a>
                    </li>




                </ul>
            </div>
            </li>
            </ul>
    </div>
    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->", "admin/sidebar.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\sidebar.html.twig");
    }
}
