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

/* acceuil/index.html.twig */
class __TwigTemplate_eeeb629f0847b30c552ce2970cd69a81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil de la billeterie
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 10), "roles", [], "any", true, true, false, 10) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "roles", [], "any", false, false, false, 10), 0, [], "array", false, false, false, 10) == "ROLE_ADMIN"))) {
            // line 11
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_ajout");
            echo "\" class=\"btn btn-primary my-3\">Ajouter des catégories</a>
\t\t\t";
        }
        // line 13
        echo "\t\t\t<h1>Liste des catégories</h1>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "\t\t\t\t<div class=\"col-3 mb-3 my-3\">
\t\t\t\t\t<article class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h2 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 18), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_list", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir</a>
\t\t\t\t\t\t\t";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 21), "roles", [], "any", true, true, false, 21) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21), 0, [], "array", false, false, false, 21) == "ROLE_ADMIN"))) {
                // line 22
                echo "\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-dark\">Supprimer</a>
\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "acceuil/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  140 => 28,  131 => 24,  127 => 22,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  108 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil de la billeterie
{% endblock %}


{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t{% if  app.user.roles is defined and app.user.roles[0] == 'ROLE_ADMIN' %}
\t\t\t\t<a href=\"{{path('categories_ajout')}}\" class=\"btn btn-primary my-3\">Ajouter des catégories</a>
\t\t\t{% endif %}
\t\t\t<h1>Liste des catégories</h1>
\t\t\t{% for categorie in categories %}
\t\t\t\t<div class=\"col-3 mb-3 my-3\">
\t\t\t\t\t<article class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h2 class=\"card-title\">{{ categorie.libelle }}</h2>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ categorie.description }}</p>
\t\t\t\t\t\t\t<a href=\"{{path('categories_list', {slug: categorie.slug})}}\" class=\"btn btn-primary\">Voir</a>
\t\t\t\t\t\t\t{% if app.user.roles is defined and app.user.roles[0] == 'ROLE_ADMIN' %}
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-dark\">Supprimer</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</section>
\t</main>
{% endblock %}
", "acceuil/index.html.twig", "/home/zixe/symfony/gestion_billeterie_projet_gasa/templates/acceuil/index.html.twig");
    }
}
