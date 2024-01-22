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

/* categorie/list.html.twig */
class __TwigTemplate_e121089aef2b938f30de964cdca816f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/list.html.twig", 1);
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

        echo "Liste des événements de la catégorie
\t";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 4, $this->source); })()), "libelle", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 11), "roles", [], "any", true, true, false, 11) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "roles", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11) == "ROLE_ADMIN"))) {
            // line 12
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements_ajout");
            echo "\" class=\"btn btn-primary my-3\">Ajouter des événements</a>
\t\t\t";
        }
        // line 14
        echo "\t\t\t<h1>Liste des événements de la catégorie
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 15, $this->source); })()), "libelle", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 16, $this->source); })()), "evenements", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 17
            echo "\t\t\t\t<div class=\"col-3 mb-3 my-3\">
\t\t\t\t\t<article class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h2 class=\"card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "libelle", [], "any", false, false, false, 20), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["evenement"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Détails</a>
\t\t\t\t\t\t\t";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 23), "roles", [], "any", true, true, false, 23) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23) == "ROLE_ADMIN"))) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-dark\">Supprimer</a>
\t\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return "categorie/list.html.twig";
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
        return array (  148 => 30,  139 => 26,  135 => 24,  133 => 23,  129 => 22,  125 => 21,  121 => 20,  116 => 17,  112 => 16,  108 => 15,  105 => 14,  99 => 12,  97 => 11,  93 => 9,  83 => 8,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des événements de la catégorie
\t{{ categorie.libelle }}
{% endblock %}


{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t{% if  app.user.roles is defined and app.user.roles[0] == 'ROLE_ADMIN' %}
\t\t\t\t<a href=\"{{path('evenements_ajout')}}\" class=\"btn btn-primary my-3\">Ajouter des événements</a>
\t\t\t{% endif %}
\t\t\t<h1>Liste des événements de la catégorie
\t\t\t\t{{ categorie.libelle }}</h1>
\t\t\t{% for evenement in categorie.evenements %}
\t\t\t\t<div class=\"col-3 mb-3 my-3\">
\t\t\t\t\t<article class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h2 class=\"card-title\">{{ evenement.libelle }}</h2>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ evenement.description }}</p>
\t\t\t\t\t\t\t<a href=\"{{path('evenements_details', {slug: evenement.slug})}}\" class=\"btn btn-primary\">Détails</a>
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
", "categorie/list.html.twig", "/home/zixe/symfony/gestion_billeterie_projet_gasa/templates/categorie/list.html.twig");
    }
}
