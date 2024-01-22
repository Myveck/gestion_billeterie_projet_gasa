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

/* categorie/_form.html.twig */
class __TwigTemplate_5d61c22e0f5536fe9a3dc72ec3cbc7cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 2, $this->source); })()), "libelle", [], "any", false, false, false, 2), 'row');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3), 'row');
        echo "
<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 5, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "categorie/_form.html.twig";
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
        return array (  56 => 5,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(categorieForm) }}
{{ form_row(categorieForm.libelle) }}
{{ form_row(categorieForm.description) }}
<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
{{ form_end(categorieForm) }}
", "categorie/_form.html.twig", "/home/zixe/symfony/gestion_billeterie_projet_gasa/templates/categorie/_form.html.twig");
    }
}
