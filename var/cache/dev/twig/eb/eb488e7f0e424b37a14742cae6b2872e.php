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

/* achat/panier.html.twig */
class __TwigTemplate_5714aed122f913a9a9d9485238a1d098 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achat/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achat/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "achat/panier.html.twig", 1);
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

        echo "Panier billeterie
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Panier</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Evénement</th>
\t\t\t\t\t\t\t<th>Prix normal</th>
\t\t\t\t\t\t\t<th>Prix Semi-VIP</th>
\t\t\t\t\t\t\t<th>Prix VIP</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 25
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "evenement", [], "any", false, false, false, 26), "libelle", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "evenement", [], "any", false, false, false, 27), "prixN", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "evenement", [], "any", false, false, false, 28), "prixSV", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "evenement", [], "any", false, false, false, 29), "prixV", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">+</a>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-warning\">-</a>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-danger\">supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</thead>
\t\t\t</table>
\t\t</div>
\t</section>
</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "achat/panier.html.twig";
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
        return array (  146 => 39,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Panier billeterie
{% endblock %}

{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Panier</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Evénement</th>
\t\t\t\t\t\t\t<th>Prix normal</th>
\t\t\t\t\t\t\t<th>Prix Semi-VIP</th>
\t\t\t\t\t\t\t<th>Prix VIP</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for element in data %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{element.evenement.libelle}}</td>
\t\t\t\t\t\t\t\t<td>{{element.evenement.prixN}}</td>
\t\t\t\t\t\t\t\t<td>{{element.evenement.prixSV}}</td>
\t\t\t\t\t\t\t\t<td>{{element.evenement.prixV}}</td>
\t\t\t\t\t\t\t\t<td>{{element.quantite}}</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">+</a>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-warning\">-</a>
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-danger\">supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</thead>
\t\t\t</table>
\t\t</div>
\t</section>
</main>{% endblock %}
", "achat/panier.html.twig", "/home/zixe/symfony/gestion_billeterie_projet_gasa/templates/achat/panier.html.twig");
    }
}
