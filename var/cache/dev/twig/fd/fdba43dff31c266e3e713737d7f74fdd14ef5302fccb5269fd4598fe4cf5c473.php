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

/* panier/index.html.twig */
class __TwigTemplate_d874477edda97388f9ee5903313c00081c19df31d0141f119fa126e1f8bd397b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        echo "Hello PanierController!";
        
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
<span><h1> Panier </h1></span>
<div class=\"table-responsive{-sm|-md|-lg|-xl}\">
<table class=\"table table-striped table-hover align-middle\">
  <thead>
    <tr class=\"text-middle text-center\">
      <th scope=\"col\"></th>
      <th scope=\"col\">Produit sélectionné</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix total / article</th>
      <th scope=\"col\">Supprimer</th>
    </tr>
  </thead>
  
  <tbody class=\"text-middle text-center\">
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "    <tr>
      <td class=\"\"><img class=\"img-fluid imgReduct\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["article"], "imagearticle", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomarticle", [], "any", false, false, false, 25), "html", null, true);
            echo "\"></td>
      <td class=\"align-middle\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomarticle", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
      <td class=\"align-middle\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixarticle", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
      <td class=\"align-middle\"><a class=\"ri-checkbox-indeterminate-line ri-lg\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 28), "modif" => "delete"]), "html", null, true);
            echo "\"></a>
      <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", [0 => "panier"], "method", false, false, false, 29), "getNombreArticles", [0 => twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 29)], "method", false, false, false, 29), "html", null, true);
            echo "</span>
      <a class=\"ri-add-box-line ri-lg\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 30), "modif" => "ajout"]), "html", null, true);
            echo "\"></a></td>
      <td class=\"align-middle\">prix avec tva</td>
      <td class=\"align-middle\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove_all", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"text-decoration-none text-danger\"><i class=\"ri-delete-bin-2-line ri-xl\"></i></a></td>
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </tbody>

  <tfoot>
        <tr>
            <td colspan=\"4\" class=\"font-weight-bold text-right\">Total de votre commande:</td>
            <td class=\"font-weight-bold text-success text-center\">";
        // line 41
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "get", [0 => "panier"], "method", false, false, false, 41))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "get", [0 => "panier"], "method", false, false, false, 41), "getTotal", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "€</td>
            <td class=\"font-weight-bold\"></td>
        </tr>
        <tr>
            <td colspan=\"4\"></td>
            <td class=\"font-weight-bold text-success d-flex justify-content-center\"><button type=\"button\" class=\"float-right btn btn-success\">Commander</button></td>
            <td></td>
        </tr>
    </tfoot>
</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 41,  154 => 36,  144 => 32,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  117 => 25,  114 => 24,  110 => 23,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PanierController!{% endblock %}

{% block body %}

{{ parent() }}
<span><h1> Panier </h1></span>
<div class=\"table-responsive{-sm|-md|-lg|-xl}\">
<table class=\"table table-striped table-hover align-middle\">
  <thead>
    <tr class=\"text-middle text-center\">
      <th scope=\"col\"></th>
      <th scope=\"col\">Produit sélectionné</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix total / article</th>
      <th scope=\"col\">Supprimer</th>
    </tr>
  </thead>
  
  <tbody class=\"text-middle text-center\">
  {% for article in list %}
    <tr>
      <td class=\"\"><img class=\"img-fluid imgReduct\" src=\"{{ asset ('img/' ~ article.imagearticle )}}\" alt=\"{{article.nomarticle}}\"></td>
      <td class=\"align-middle\">{{article.nomarticle}}</td>
      <td class=\"align-middle\">{{article.prixarticle}}</td>
      <td class=\"align-middle\"><a class=\"ri-checkbox-indeterminate-line ri-lg\" href=\"{{ path('modif_panier', {id:article.idarticle, modif:\"delete\"}) }}\"></a>
      <span>{{app.session.get('panier').getNombreArticles(article.idarticle)}}</span>
      <a class=\"ri-add-box-line ri-lg\" href=\"{{ path('modif_panier', {id:article.idarticle, modif:\"ajout\"}) }}\"></a></td>
      <td class=\"align-middle\">prix avec tva</td>
      <td class=\"align-middle\"><a href=\"{{ path('panier_remove_all', {id:article.idarticle}) }}\" class=\"text-decoration-none text-danger\"><i class=\"ri-delete-bin-2-line ri-xl\"></i></a></td>
    </tr>
    
    {% endfor %}
  </tbody>

  <tfoot>
        <tr>
            <td colspan=\"4\" class=\"font-weight-bold text-right\">Total de votre commande:</td>
            <td class=\"font-weight-bold text-success text-center\">{% if app.session.get('panier') is not null %} {{app.session.get('panier').getTotal}} {% else %} 0 {% endif %}€</td>
            <td class=\"font-weight-bold\"></td>
        </tr>
        <tr>
            <td colspan=\"4\"></td>
            <td class=\"font-weight-bold text-success d-flex justify-content-center\"><button type=\"button\" class=\"float-right btn btn-success\">Commander</button></td>
            <td></td>
        </tr>
    </tfoot>
</table>
</div>
{% endblock %}
", "panier/index.html.twig", "C:\\xampp\\htdocs\\boutique\\templates\\panier\\index.html.twig");
    }
}
