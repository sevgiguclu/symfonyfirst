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

/* admin/header.html.twig */
class __TwigTemplate_664517a516a8061c53986599445a25cdd0b77c8192afa53659797492479ff58e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        // line 1
        echo "<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class=\"dashboard-main-wrapper\">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class=\"dashboard-header\">
        <nav class=\"navbar navbar-expand-lg bg-white fixed-top\">
            <a class=\"navbar-brand\" href=\"../index.html\">Concept</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto navbar-right-top\">
                    <li class=\"nav-item\">
                        <div id=\"custom-search\" class=\"top-search-bar\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Search..\">
                        </div>
                    </li>
                    <li class=\"nav-item dropdown notification\">
                        <a class=\"nav-link nav-icons\" href=\"#\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-fw fa-bell\"></i> <span class=\"indicator\"></span></a>
                        <ul class=\"dropdown-menu dropdown-menu-right notification-dropdown\">
                            <li>
                                <div class=\"notification-title\"> Notification</div>
                                <div class=\"notification-list\">
                                    <div class=\"list-group\">
                                        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/images/avatar-2.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                    <div class=\"notification-date\">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/images/avatar-3.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">
John Abraham</span>is now following you
                                                    <div class=\"notification-date\">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/images/avatar-4.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">Monaan Pechi</span> is watching your main repository
                                                    <div class=\"notification-date\">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/images/avatar-5.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">Jessica Caruso</span>accepted your invitation to join the team.
                                                    <div class=\"notification-date\">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-footer\"> <a href=\"#\">View all notifications</a></div>
                            </li>
                        </ul>
                    </li>







                    <li class=\"nav-item dropdown nav-user\">
                        <a class=\"nav-link nav-user-img\" href=\"#\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/images/avatar-1.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></a>
                        <div class=\"dropdown-menu dropdown-menu-right nav-user-dropdown\" aria-labelledby=\"navbarDropdownMenuLink2\">
                            <div class=\"nav-user-info\">
                                <h5 class=\"mb-0 text-white nav-user-name\">
                                    John Abraham</h5>
                                <span class=\"status\"></span><span class=\"ml-2\">Available</span>
                            </div>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-user mr-2\"></i>Account</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cog mr-2\"></i>Setting</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-power-off mr-2\"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 77,  108 => 55,  97 => 47,  85 => 38,  74 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class=\"dashboard-main-wrapper\">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class=\"dashboard-header\">
        <nav class=\"navbar navbar-expand-lg bg-white fixed-top\">
            <a class=\"navbar-brand\" href=\"../index.html\">Concept</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto navbar-right-top\">
                    <li class=\"nav-item\">
                        <div id=\"custom-search\" class=\"top-search-bar\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Search..\">
                        </div>
                    </li>
                    <li class=\"nav-item dropdown notification\">
                        <a class=\"nav-link nav-icons\" href=\"#\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-fw fa-bell\"></i> <span class=\"indicator\"></span></a>
                        <ul class=\"dropdown-menu dropdown-menu-right notification-dropdown\">
                            <li>
                                <div class=\"notification-title\"> Notification</div>
                                <div class=\"notification-list\">
                                    <div class=\"list-group\">
                                        <a href=\"#\" class=\"list-group-item list-group-item-action active\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"{{ asset('assets') }}/admin/images/avatar-2.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                    <div class=\"notification-date\">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"{{ asset('assets') }}/admin/images/avatar-3.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">
John Abraham</span>is now following you
                                                    <div class=\"notification-date\">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"{{ asset('assets') }}/admin/images/avatar-4.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">Monaan Pechi</span> is watching your main repository
                                                    <div class=\"notification-date\">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                                            <div class=\"notification-info\">
                                                <div class=\"notification-list-user-img\"><img src=\"{{ asset('assets') }}/admin/images/avatar-5.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
                                                <div class=\"notification-list-user-block\"><span class=\"notification-list-user-name\">Jessica Caruso</span>accepted your invitation to join the team.
                                                    <div class=\"notification-date\">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"list-footer\"> <a href=\"#\">View all notifications</a></div>
                            </li>
                        </ul>
                    </li>







                    <li class=\"nav-item dropdown nav-user\">
                        <a class=\"nav-link nav-user-img\" href=\"#\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"{{ asset('assets') }}/admin/images/avatar-1.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></a>
                        <div class=\"dropdown-menu dropdown-menu-right nav-user-dropdown\" aria-labelledby=\"navbarDropdownMenuLink2\">
                            <div class=\"nav-user-info\">
                                <h5 class=\"mb-0 text-white nav-user-name\">
                                    John Abraham</h5>
                                <span class=\"status\"></span><span class=\"ml-2\">Available</span>
                            </div>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-user mr-2\"></i>Account</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cog mr-2\"></i>Setting</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-power-off mr-2\"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->", "admin/header.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\header.html.twig");
    }
}
