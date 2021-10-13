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

/* admin/image/new.html.twig */
class __TwigTemplate_c1e893c03faa336424918e563e4d7b3ef2803cd92e0b1e5e828eabd947dfd6f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

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

<!-- basic form  -->
<!-- ============================================================== -->
<div class=\"row\">
    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
        <div class=\"card\">
            <h5 class=\"card-header\">Resim Düzenleme</h5>
            <div class=\"card-body\">
                <form name=\"image\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label for=\"inputText3\" class=\"col-form-label\">Title</label>
                        <input id=\"image_title\" type=\"text\" class=\"form-control\" name=\"image[title]\" maxlength=\"50\">
                        <input type=\"hidden\" id=\"image_car\" name=\"image[car]\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
                    </div>


                    <div class=\"custom-file mb-3\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"image_image\" name=\"image[image]\">
                        <label class=\"custom-file-label\" for=\"customFile\">Gallery Image</label>
                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">EKLE</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end basic form  -->
<!-- ============================================================== -->



<table class=\"table\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Image</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 53
            echo "        <tr>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 56))), "html", null, true);
            echo "\" height=\"60\"></td>
            <td>
                <form method=\"post\" action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 58), "hid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 58, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 60))), "html", null, true);
            echo "\">
                    <button class=\"btn btn-rounded btn-dark\">Delete</button>
                </form>

            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "        <tr>
            <td colspan=\"4\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/image/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 71,  152 => 67,  140 => 60,  135 => 58,  130 => 56,  126 => 55,  122 => 54,  119 => 53,  114 => 52,  78 => 19,  71 => 15,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css\">
<link href=\"{{ asset('assets') }}/admin/vendor/fonts/circular-std/style.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/libs/css/style.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/vendor/fonts/fontawesome/css/fontawesome-all.css\">

<!-- basic form  -->
<!-- ============================================================== -->
<div class=\"row\">
    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
        <div class=\"card\">
            <h5 class=\"card-header\">Resim Düzenleme</h5>
            <div class=\"card-body\">
                <form name=\"image\" action=\"{{ path('admin_image_new',{'id':id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label for=\"inputText3\" class=\"col-form-label\">Title</label>
                        <input id=\"image_title\" type=\"text\" class=\"form-control\" name=\"image[title]\" maxlength=\"50\">
                        <input type=\"hidden\" id=\"image_car\" name=\"image[car]\" class=\"form-control\" value=\"{{ id }}\">
                    </div>


                    <div class=\"custom-file mb-3\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"image_image\" name=\"image[image]\">
                        <label class=\"custom-file-label\" for=\"customFile\">Gallery Image</label>
                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">EKLE</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end basic form  -->
<!-- ============================================================== -->



<table class=\"table\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Image</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for image in images %}
        <tr>
            <td>{{ image.id }}</td>
            <td>{{ image.title }}</td>
            <td><img src=\"{{ asset('uploads/images/' ~ image.image) }}\" height=\"60\"></td>
            <td>
                <form method=\"post\" action=\"{{ path('admin_image_delete', {'id': image.id,'hid':id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ image.id) }}\">
                    <button class=\"btn btn-rounded btn-dark\">Delete</button>
                </form>

            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"4\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "admin/image/new.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\admin\\image\\new.html.twig");
    }
}
