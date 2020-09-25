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

/* articles/index.html.twig */
class __TwigTemplate_ddfeabe43a2cc8df59fcb43155eb24962425fd7cb0b8de6a30c6f903496d2079 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
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

        echo "Hello ArticlesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Catégories - consoles - jeux -->
   <ul class=\"nav justify-content-start\">
        <li class=\"nav-item\">
            <a class=\"nav-link active text-dark font-weight-bold\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">All categories</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link text-dark font-weight-bold\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categorie", ["categorie" => "consoles"]);
        echo "\">Consoles</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link text-dark font-weight-bold\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categorie", ["categorie" => "jeux"]);
        echo "\">Jeux</a>
        </li>
        <!--
        <li class=\"nav-item\">
            <a class=\"nav-link disabled text-dark font-weight-bold\" href=\"#\" tabindex=\"-1\"
                aria-disabled=\"true\">Disabled</a>
        </li>
     -->
    </ul>
    <br>

<!-- Cards dans boucle FOR mb-6-sm-2-->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "        <div class=\"card col-lg-4 col-md-6 col-sm-6 col-12\">
            <div class=\"card-body text-center\">
                <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["article"], "imagearticle", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" class=\"imgTaille\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomarticle", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                <div class=\"card-title\">
                    <span><i class=\"font-weight-bold\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomarticle", [], "any", false, false, false, 37), "html", null, true);
            echo "</i></span>
                    <span class=\"text-success font-weight-bold\"><b>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixarticle", [], "any", false, false, false, 38), "html", null, true);
            echo "€</b></span>
                </div>
                <div class=\"card-text text-justify\">
                    <i>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "descriptionarticle", [], "any", false, false, false, 41), "html", null, true);
            echo "</i>
                </div>
            </div>
            <div class=\"text-right mb-3\">
                <form method=\"post\" action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 45), "modif" => "ajout"]), "html", null, true);
            echo "\">
                <input name=\"price\" value = \"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixarticle", [], "any", false, false, false, 46), "html", null, true);
            echo "\" type=\"hidden\">
                <button type=\"submit\" name=\"article\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"float-right btn btn-success font-weight-bold\">+</button>
                </form>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 52,  168 => 47,  164 => 46,  160 => 45,  153 => 41,  147 => 38,  143 => 37,  136 => 35,  132 => 33,  128 => 32,  111 => 18,  105 => 15,  99 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ArticlesController!{% endblock %}

{% block body %}

{{ parent() }}

    <!-- Catégories - consoles - jeux -->
   <ul class=\"nav justify-content-start\">
        <li class=\"nav-item\">
            <a class=\"nav-link active text-dark font-weight-bold\" href=\"{{ path('articles') }}\">All categories</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link text-dark font-weight-bold\" href=\"{{ path('articles_categorie', {categorie:\"consoles\"}) }}\">Consoles</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link text-dark font-weight-bold\" href=\"{{ path('articles_categorie', {categorie:\"jeux\"}) }}\">Jeux</a>
        </li>
        <!--
        <li class=\"nav-item\">
            <a class=\"nav-link disabled text-dark font-weight-bold\" href=\"#\" tabindex=\"-1\"
                aria-disabled=\"true\">Disabled</a>
        </li>
     -->
    </ul>
    <br>

<!-- Cards dans boucle FOR mb-6-sm-2-->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        {% for article in articles %}
        <div class=\"card col-lg-4 col-md-6 col-sm-6 col-12\">
            <div class=\"card-body text-center\">
                <img src=\"{{ asset('img/'~ article.imagearticle)}}\" class=\"imgTaille\" alt=\"{{article.nomarticle}}\">
                <div class=\"card-title\">
                    <span><i class=\"font-weight-bold\">{{article.nomarticle}}</i></span>
                    <span class=\"text-success font-weight-bold\"><b>{{article.prixarticle}}€</b></span>
                </div>
                <div class=\"card-text text-justify\">
                    <i>{{article.descriptionarticle}}</i>
                </div>
            </div>
            <div class=\"text-right mb-3\">
                <form method=\"post\" action=\"{{ path('modif_panier', {id:article.idarticle, modif:'ajout'}) }}\">
                <input name=\"price\" value = \"{{article.prixarticle}}\" type=\"hidden\">
                <button type=\"submit\" name=\"article\" value=\"{{article.idarticle}}\" class=\"float-right btn btn-success font-weight-bold\">+</button>
                </form>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% endblock %}", "articles/index.html.twig", "C:\\xampp\\htdocs\\boutique\\templates\\articles\\index.html.twig");
    }
}
