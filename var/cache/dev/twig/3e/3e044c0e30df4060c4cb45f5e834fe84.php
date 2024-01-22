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

/* evenement/details.html.twig */
class __TwigTemplate_d663c2b56eeb13e5678b0e6650b16cb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/details.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "evenement/details.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>
\t\t\t\t\t<strong>Evénement :
\t\t\t\t\t</strong>
\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 10, $this->source); })()), "libelle", [], "any", false, false, false, 10), "html", null, true);
        echo "
\t\t\t\t</h1>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/"), "html", null, true);
        echo "\">
\t\t\t\tImages
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Categorie :</strong>
\t\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21), "libelle", [], "any", false, false, false, 21), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Prix :</strong>
\t\t\t\t\t<br>Normal :
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "prixN", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 27, $this->source); })()), "prixSV", [], "any", false, false, false, 27) > 0)) {
            // line 28
            echo "\t\t\t\t\t\t<br>Semi-Vip :
\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 29, $this->source); })()), "prixSV", [], "any", false, false, false, 29), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t\t<br>VIP :
\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 33, $this->source); })()), "prixV", [], "any", false, false, false, 33), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Date :</strong>
\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 37, $this->source); })()), "dateE", [], "any", false, false, false, 37), "d/m/Y H:i"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 39, $this->source); })()), "places", [], "any", false, false, false, 39) > 0)) {
            // line 40
            echo "\t\t\t\t\t<strong>Acheter</strong>
\t\t\t\t\t<br>
\t\t\t\t\t";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 42, $this->source); })()), "prixV", [], "any", false, false, false, 42) != 0)) {
                // line 43
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("achat_ajouter", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "prix" => "prixV"]), "html", null, true);
                echo "\" class=\"btn btn-success\">VIP</a>
\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 45, $this->source); })()), "prixSV", [], "any", false, false, false, 45) != 0)) {
                // line 46
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("achat_ajouter", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "prix" => "prixSV"]), "html", null, true);
                echo "\" class=\"btn btn-success\">Semi-VIP</a>
\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "prixN", [], "any", false, false, false, 48) != 0)) {
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("achat_ajouter", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "prix" => "prixN"]), "html", null, true);
                echo "\" class=\"btn btn-success\">Normal</a>
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t<p class=\"text-danger\">Toutes les places sont prises</p>
\t\t\t\t";
        }
        // line 54
        echo "

\t\t\t</div>
\t\t</section>
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
        return "evenement/details.html.twig";
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
        return array (  173 => 54,  169 => 52,  166 => 51,  160 => 49,  157 => 48,  151 => 46,  148 => 45,  142 => 43,  140 => 42,  136 => 40,  134 => 39,  129 => 37,  122 => 33,  118 => 31,  113 => 29,  110 => 28,  108 => 27,  104 => 26,  96 => 21,  90 => 18,  83 => 14,  76 => 10,  68 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"base.html.twig\" %}

{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>
\t\t\t\t\t<strong>Evénement :
\t\t\t\t\t</strong>
\t\t\t\t\t{{ evenement.libelle }}
\t\t\t\t</h1>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<img src=\"{{ asset('assets/uploads/')}}\">
\t\t\t\tImages
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<p>{{evenement.description}}</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Categorie :</strong>
\t\t\t\t\t{{evenement.categorie.libelle}}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Prix :</strong>
\t\t\t\t\t<br>Normal :
\t\t\t\t\t{{evenement.prixN}}
\t\t\t\t\t{% if evenement.prixSV > 0 %}
\t\t\t\t\t\t<br>Semi-Vip :
\t\t\t\t\t\t{{evenement.prixSV}}
\t\t\t\t\t{% endif %}

\t\t\t\t\t<br>VIP :
\t\t\t\t\t{{evenement.prixV}}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Date :</strong>
\t\t\t\t\t{{evenement.dateE|date('d/m/Y H:i')}}
\t\t\t\t</p>
\t\t\t\t{% if evenement.places > 0 %}
\t\t\t\t\t<strong>Acheter</strong>
\t\t\t\t\t<br>
\t\t\t\t\t{% if evenement.prixV != 0 %}
\t\t\t\t\t\t<a href=\"{{path('achat_ajouter', {id: evenement.id, prix: 'prixV'})}}\" class=\"btn btn-success\">VIP</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if evenement.prixSV != 0 %}
\t\t\t\t\t\t<a href=\"{{path('achat_ajouter', {id: evenement.id, prix: 'prixSV'})}}\" class=\"btn btn-success\">Semi-VIP</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if evenement.prixN != 0 %}
\t\t\t\t\t\t<a href=\"{{path('achat_ajouter', {id: evenement.id, prix: 'prixN'})}}\" class=\"btn btn-success\">Normal</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% else %}
\t\t\t\t\t<p class=\"text-danger\">Toutes les places sont prises</p>
\t\t\t\t{% endif %}


\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}
", "evenement/details.html.twig", "/home/zixe/symfony/gestion_billeterie_projet_gasa/templates/evenement/details.html.twig");
    }
}
