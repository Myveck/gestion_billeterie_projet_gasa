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

/* _partials/_nav.html.twig */
class __TwigTemplate_d95361a598b00a5493208b1b4fcfd193 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"#\">Billeterie</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil_index");
        echo "\">Acceuil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tCategories
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 17
        if (array_key_exists("categories", $context)) {
            // line 18
            echo "
\t\t\t\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 20
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_list", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 21), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Mon compte</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">Me déconnecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "all", [], "method", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("achat_index");
                echo "\" class=\"nav-link\">Mon panier</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 41
            echo "
\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Me connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-link\">M'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 50
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/_nav.html.twig";
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
        return array (  139 => 50,  133 => 47,  127 => 44,  124 => 43,  120 => 41,  114 => 38,  111 => 37,  109 => 36,  104 => 34,  98 => 30,  96 => 29,  90 => 25,  87 => 24,  76 => 21,  73 => 20,  69 => 19,  66 => 18,  64 => 17,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"#\">Billeterie</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('acceuil_index')}}\">Acceuil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tCategories
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t{% if categories is defined %}

\t\t\t\t\t\t\t{% for categorie in categories %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('categories_list', {slug: categorie.slug})}}\">{{categorie.libelle}}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Mon compte</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\" class=\"nav-link\">Me déconnecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if app.session.all() %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{path('achat_index')}}\" class=\"nav-link\">Mon panier</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{path('app_login')}}\" class=\"nav-link\">Me connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{path('app_register')}}\" class=\"nav-link\">M'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "_partials/_nav.html.twig", "/home/zixe/symfony/gestion_billeterie_projet_gasa/templates/_partials/_nav.html.twig");
    }
}
