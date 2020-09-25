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

/* base.html.twig */
class __TwigTemplate_850b81e4a344ea8e9b604c355fba27cb162c17af910461f95b502c344a4571e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>   
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 142
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "
<!--modal panier ci-dessous brut sans données-->
        <div class=\"modal fade\" id=\"modalCart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <!--Header-->
      <div class=\"modal-header\">
        <h4 class=\"modal-title\" id=\"myModalLabel\">Your cart</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <!--Body-->
      <div class=\"modal-body\">

        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 110
        echo "            <tr>
              <td>";
        // line 111
        echo "</td>
              <td>";
        // line 112
        echo "</td>
              <td><a ";
        // line 113
        echo " class=\"text-decoration-none text-danger\"><i class=\"ri-delete-bin-2-line ri-xl\"></i></a></td>
            </tr>
            ";
        // line 116
        echo "          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-primary\" data-dismiss=\"modal\">Close</button>
        <button class=\"btn btn-primary\">Checkout</button>
      </div>
    </div>
  </div>
</div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "        <header>
        <!-- Nav Barre -->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\"><H1 class=\"text-white\">LineshoP</H1></a>

        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav mr-auto\">
            </ul>


            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <a class=\"text-success nav-link active ri-shopping-basket-fill ri-2x\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\"></a>
                </li>
            </ul>
            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <a data-toggle=\"modal\" data-target=\"#modalCart\" class=\"text-success nav-link\"> Items</a>
                </li>
                <li class=\"nav-item\">
                    <span class=\"text-white nav-link text-center\">";
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "panier"], "method", false, false, false, 36))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "panier"], "method", false, false, false, 36), "articles", [], "any", false, false, false, 36)), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</span>
                </li>
            </ul>

            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <div class=\"text-success nav-link\">Total</div>
                </li>
                <li class=\"nav-item\">
                    <span class=\"text-white nav-link text-center\">";
        // line 45
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "get", [0 => "panier"], "method", false, false, false, 45))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "get", [0 => "panier"], "method", false, false, false, 46), "getTotal", [], "any", false, false, false, 46), "html", null, true);
            echo "
                    ";
        } else {
            // line 47
            echo " 0 ";
        }
        echo "€</span>
                </li>
            </ul>

        </div>
     </nav>  
              <nav class=\" navbar-expand-lg navbar-dark bg-secondary\">
                <ul class=\"nav justify-content-center\">
                    <li class=\"nav-item\">
                        <p class=\"text-white \">
                        ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 57), "username", [], "any", true, true, false, 57)) {
            echo " Wellcome ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "username", [], "any", false, false, false, 57), "html", null, true);
            echo " you can <a class=\" text-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">logout</a></p>
                       ";
        } else {
            // line 59
            echo "                       <p class=\"text-white \">
                       Welcome visitor you can <a class=\" text-success\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">login</a> or <a class=\" text-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">register</a></p>
                       ";
        }
        // line 62
        echo "                        <!--
                        <a class=\"nav-link active text-success\" href=\"#\">logout</a>
                                -->
                    </li>
                </ul>
            </nav>

            
    <!-- Barre de recherche sur le Web -->
    <!--
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">    
           <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>
    -->

        </header>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "        <!-- JS, Popper.js, and jQuery -->
        <script src=\"https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js\"></script>
        <script>
            \$(document).ready(function () {
            bsCustomFileInput.init()
            })
        </script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 131,  331 => 130,  300 => 62,  293 => 60,  290 => 59,  281 => 57,  267 => 47,  261 => 46,  259 => 45,  241 => 36,  230 => 28,  218 => 19,  213 => 16,  203 => 15,  180 => 116,  176 => 113,  173 => 112,  170 => 111,  167 => 110,  140 => 84,  137 => 15,  127 => 14,  115 => 10,  111 => 8,  101 => 7,  82 => 6,  70 => 142,  67 => 130,  65 => 14,  61 => 12,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
        {% endblock %}
    </head>
    <body>   
    {% block body %}
    {% block header %}
        <header>
        <!-- Nav Barre -->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <a href=\"{{ path('articles') }}\"><H1 class=\"text-white\">LineshoP</H1></a>

        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav mr-auto\">
            </ul>


            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <a class=\"text-success nav-link active ri-shopping-basket-fill ri-2x\" href=\"{{ path('panier') }}\"></a>
                </li>
            </ul>
            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <a data-toggle=\"modal\" data-target=\"#modalCart\" class=\"text-success nav-link\"> Items</a>
                </li>
                <li class=\"nav-item\">
                    <span class=\"text-white nav-link text-center\">{% if app.session.get('panier') is not null %} {{app.session.get('panier').articles|length}} {% else %} 0 {% endif %}</span>
                </li>
            </ul>

            <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                    <div class=\"text-success nav-link\">Total</div>
                </li>
                <li class=\"nav-item\">
                    <span class=\"text-white nav-link text-center\">{% if app.session.get('panier') is not null %}
                    {{app.session.get('panier').getTotal}}
                    {% else %} 0 {% endif %}€</span>
                </li>
            </ul>

        </div>
     </nav>  
              <nav class=\" navbar-expand-lg navbar-dark bg-secondary\">
                <ul class=\"nav justify-content-center\">
                    <li class=\"nav-item\">
                        <p class=\"text-white \">
                        {% if app.user.username is defined %} Wellcome {{ app.user.username }} you can <a class=\" text-success\" href=\"{{ path('app_logout') }}\">logout</a></p>
                       {% else %}
                       <p class=\"text-white \">
                       Welcome visitor you can <a class=\" text-success\" href=\"{{ path('app_login') }}\">login</a> or <a class=\" text-success\" href=\"{{ path('app_register') }}\">register</a></p>
                       {% endif %}
                        <!--
                        <a class=\"nav-link active text-success\" href=\"#\">logout</a>
                                -->
                    </li>
                </ul>
            </nav>

            
    <!-- Barre de recherche sur le Web -->
    <!--
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">    
           <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>
    -->

        </header>
        {% endblock %}

<!--modal panier ci-dessous brut sans données-->
        <div class=\"modal fade\" id=\"modalCart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <!--Header-->
      <div class=\"modal-header\">
        <h4 class=\"modal-title\" id=\"myModalLabel\">Your cart</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
      <!--Body-->
      <div class=\"modal-body\">

        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
          {#{% for article in panier.articles %} #}
            <tr>
              <td>{#{{article.nomarticle}}#}</td>
              <td>{#{{article.prixarticle}}#}</td>
              <td><a {# href=\"{{ path('panier_remove_all', {id:article.idarticle}) }}\"#} class=\"text-decoration-none text-danger\"><i class=\"ri-delete-bin-2-line ri-xl\"></i></a></td>
            </tr>
            {#{% endfor %}#}
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-primary\" data-dismiss=\"modal\">Close</button>
        <button class=\"btn btn-primary\">Checkout</button>
      </div>
    </div>
  </div>
</div>

        {% endblock %}
        {% block javascripts %}
        <!-- JS, Popper.js, and jQuery -->
        <script src=\"https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js\"></script>
        <script>
            \$(document).ready(function () {
            bsCustomFileInput.init()
            })
        </script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\boutique\\templates\\base.html.twig");
    }
}
