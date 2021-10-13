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

/* home/carshow.html.twig */
class __TwigTemplate_eefe60b5c2e5cdce5dfe507d2da709191afd21f553a2ec096f6b401be6fb90d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/carshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/carshow.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/carshow.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 4, $this->source); })()), "keywords", [], "any", false, false, false, 4), "html", null, true);
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), "html", null, true);
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <section id=\"subintro\">
        <div class=\"jumbotron subhead\" id=\"overview\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div class=\"centered\">
                            <h3>CAR DETAIL</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"span5\">

                    <div id=\"slider_holder\">
                        <!-- slider navigation -->
                        <div class=\"sequence-nav\" >
                            <div class=\"prev\">
                                <span></span>
                            </div>
                            <div class=\"next\">
                                <span></span>
                            </div>
                        </div>
                        <!-- end slider navigation -->
                        <div id=\"sequence\">
                            <ul>

                                <li>
                                    <a  class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45))), "html", null, true);
        echo "\">
                                        <img class=\"slider_img animate-in\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46))), "html", null, true);
        echo "\" alt=\"\">
                                    </a>

                                </li>

                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 52
            echo "                                    <!-- Layer 1 -->
                                    <li>
                                        <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 54))), "html", null, true);
            echo "\">
                                            <img class=\"slider_img animate-in\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 55))), "html", null, true);
            echo "\" alt=\"\">
                                        </a>

                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
                            </ul>
                        </div>

                    </div>


                </div>



                <div class=\"span7\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 75, $this->source); })()), "title", [], "any", false, false, false, 75), "html", null, true);
        echo "</h3>
                        </div>

                        <div class=\"row\">

                            <div class=\"span7\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Marka</th>
                                        <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 93, $this->source); })()), "marka", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fuel_type</th>
                                        <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 97, $this->source); })()), "fuelType", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Gear_shape</th>
                                        <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 101, $this->source); })()), "gearShape", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Model_year</th>
                                        <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 105, $this->source); })()), "modelYear", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Km</th>
                                        <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 109, $this->source); })()), "km", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 113, $this->source); })()), "price", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 117, $this->source); })()), "city", [], "any", false, false, false, 117), "html", null, true);
        echo "</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </article>

                </div>
            </div>


            <div class=\"row\">
                <div class=\"span12\" id=\"accordion2\">
                    <div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                            <a class=\"accordion-toggle active\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                                <i class=\"icon-minus\"></i>Cars & Price</a>
                        </div>
                        <div id=\"collapseOne\" class=\"accordion-body in collapse\" style=\"height: auto;\">
                            <div class=\"accordion-inner\">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
                                <i class=\"icon-plus\"></i> Car Detail Information</a>
                        </div>
                        <div id=\"collapseTwo\" class=\"accordion-body collapse\" style=\"height: 0px;\">
                            <div class=\"accordion-inner\">
                                ";
        // line 153
        echo twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 153, $this->source); })()), "detail", [], "any", false, false, false, 153);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">
                                <i class=\"icon-plus\"></i> Comments</a>
                        </div>
                        <div id=\"collapseThree\" class=\"accordion-body collapse\" style=\"height: 0px;\">
                            <div class=\"accordion-inner\">
                                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 165
            echo "                                    <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "subject", [], "any", false, false, false, 165), "html", null, true);
            echo " [Rate:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 165), "html", null, true);
            echo "] </h5>
                                    <p>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "comment", [], "any", false, false, false, 166), "html", null, true);
            echo "</p>
                                    <hr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "

                                ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171)) {
            // line 172
            echo "                                    ";
            echo twig_include($this->env, $context, "messages.html.twig");
            echo "

                                    <form name=\"comment\" method=\"post\" role=\"form\" class=\"contactForm\" action=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174)]), "html", null, true);
            echo "\">
                                        <div class=\"row\" >
                                            <h3 style=\"margin-left: 30px\">Write Your Comment</h3>

                                            <div class=\"span4 form-group\" >
                                                <input type=\"text\" class=\"input-block-level\" id=\"comment_subject\" name=\"comment[subject]\" placeholder=\"Subject\" data-rule=\"minlen:4\"
                                                       data-msg=\"Please enter at least 8 chars of subject\" />
                                                <div class=\"validation\"></div>
                                            </div>

                                            <div class=\"span2 form-group\" >
                                                <select id=\"comment_rate\" name=\"comment[rate]\" class=\"input-block-level\">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"row\" >
                                            <div class=\"span6 form-group\">
                <textarea class=\"form-control\" id=\"comment_comment\" name=\"comment[comment]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\"
                          placeholder=\"Comment\"></textarea>
                                                <div class=\"validation\"></div>
                                                <div class=\"text-center\">
                                                    <input type=\"hidden\"  name=\"token\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment"), "html", null, true);
            echo "\" />
                                                    <button class=\"btn btn-color btn-rounded\" type=\"submit\">Send Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                ";
        } else {
            // line 207
            echo "                                    <li>
                                        <a href=\"/loginuser\"><i class=\"icon-lock\"></i> Yorum Yapabilmek için Lütfen Login Olunuz </a>
                                    </li>
                                ";
        }
        // line 211
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/carshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 211,  415 => 207,  405 => 200,  376 => 174,  370 => 172,  368 => 171,  364 => 169,  355 => 166,  348 => 165,  344 => 164,  330 => 153,  291 => 117,  284 => 113,  277 => 109,  270 => 105,  263 => 101,  256 => 97,  249 => 93,  242 => 89,  235 => 85,  222 => 75,  205 => 60,  194 => 55,  190 => 54,  186 => 52,  182 => 51,  174 => 46,  170 => 45,  131 => 8,  121 => 7,  101 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ car.title }}  {% endblock %}
{% block keywords %}{{ car.keywords }}  {% endblock %}
{% block description %}{{ car.description }}  {% endblock %}

{% block body %}


    <section id=\"subintro\">
        <div class=\"jumbotron subhead\" id=\"overview\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div class=\"centered\">
                            <h3>CAR DETAIL</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"span5\">

                    <div id=\"slider_holder\">
                        <!-- slider navigation -->
                        <div class=\"sequence-nav\" >
                            <div class=\"prev\">
                                <span></span>
                            </div>
                            <div class=\"next\">
                                <span></span>
                            </div>
                        </div>
                        <!-- end slider navigation -->
                        <div id=\"sequence\">
                            <ul>

                                <li>
                                    <a  class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/'~car.image) }}\">
                                        <img class=\"slider_img animate-in\" src=\"{{ asset('uploads/images/'~car.image) }}\" alt=\"\">
                                    </a>

                                </li>

                                {% for rs in images %}
                                    <!-- Layer 1 -->
                                    <li>
                                        <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/'~rs.image) }}\">
                                            <img class=\"slider_img animate-in\" src=\"{{ asset('uploads/images/'~rs.image) }}\" alt=\"\">
                                        </a>

                                    </li>
                                {% endfor %}

                            </ul>
                        </div>

                    </div>


                </div>



                <div class=\"span7\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3>{{ car.title }}</h3>
                        </div>

                        <div class=\"row\">

                            <div class=\"span7\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ car.description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <td>{{ car.type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Marka</th>
                                        <td>{{ car.marka }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fuel_type</th>
                                        <td>{{ car.fuelType }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gear_shape</th>
                                        <td>{{ car.gearShape }}</td>
                                    </tr>
                                    <tr>
                                        <th>Model_year</th>
                                        <td>{{ car.modelYear }}</td>
                                    </tr>
                                    <tr>
                                        <th>Km</th>
                                        <td>{{ car.km }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>{{ car.price }}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{ car.city }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </article>

                </div>
            </div>


            <div class=\"row\">
                <div class=\"span12\" id=\"accordion2\">
                    <div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                            <a class=\"accordion-toggle active\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                                <i class=\"icon-minus\"></i>Cars & Price</a>
                        </div>
                        <div id=\"collapseOne\" class=\"accordion-body in collapse\" style=\"height: auto;\">
                            <div class=\"accordion-inner\">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
                                <i class=\"icon-plus\"></i> Car Detail Information</a>
                        </div>
                        <div id=\"collapseTwo\" class=\"accordion-body collapse\" style=\"height: 0px;\">
                            <div class=\"accordion-inner\">
                                {{ car.detail |raw }}
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">
                                <i class=\"icon-plus\"></i> Comments</a>
                        </div>
                        <div id=\"collapseThree\" class=\"accordion-body collapse\" style=\"height: 0px;\">
                            <div class=\"accordion-inner\">
                                {% for rs in comments %}
                                    <h5>{{ rs.subject }} [Rate:{{ rs.rate }}] </h5>
                                    <p>{{ rs.comment }}</p>
                                    <hr>
                                {% endfor %}


                                {% if app.user %}
                                    {{ include('messages.html.twig') }}

                                    <form name=\"comment\" method=\"post\" role=\"form\" class=\"contactForm\" action=\"{{ path('user_new_comment',{'id':car.id}) }}\">
                                        <div class=\"row\" >
                                            <h3 style=\"margin-left: 30px\">Write Your Comment</h3>

                                            <div class=\"span4 form-group\" >
                                                <input type=\"text\" class=\"input-block-level\" id=\"comment_subject\" name=\"comment[subject]\" placeholder=\"Subject\" data-rule=\"minlen:4\"
                                                       data-msg=\"Please enter at least 8 chars of subject\" />
                                                <div class=\"validation\"></div>
                                            </div>

                                            <div class=\"span2 form-group\" >
                                                <select id=\"comment_rate\" name=\"comment[rate]\" class=\"input-block-level\">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"row\" >
                                            <div class=\"span6 form-group\">
                <textarea class=\"form-control\" id=\"comment_comment\" name=\"comment[comment]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\"
                          placeholder=\"Comment\"></textarea>
                                                <div class=\"validation\"></div>
                                                <div class=\"text-center\">
                                                    <input type=\"hidden\"  name=\"token\" value=\"{{ csrf_token('comment') }}\" />
                                                    <button class=\"btn btn-color btn-rounded\" type=\"submit\">Send Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                {% else %}
                                    <li>
                                        <a href=\"/loginuser\"><i class=\"icon-lock\"></i> Yorum Yapabilmek için Lütfen Login Olunuz </a>
                                    </li>
                                {% endif %}

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

{% endblock %}


", "home/carshow.html.twig", "C:\\xampp\\htdocs\\myProject\\templates\\home\\carshow.html.twig");
    }
}
