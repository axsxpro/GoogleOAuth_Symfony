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

/* registration/register.html.twig */
class __TwigTemplate_fa5f34a736e8cdce23e0b827990fa696 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"/asset/css/register.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

<div class=\"blocFormulaireInscription\">

    <div class='formulaire_Inscription'>


        <div class=\"blocInscriptionConnexion\">

            <div class=\"blocInscription\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">INSCRIPTION</a>
                </h4>

            </div>

            <div class=\"blocConnexion\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">CONNEXION</a></h4>

            </div>

        </div>

        <div class='form'>

            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "

            ";
        // line 41
        echo "            ";
        // line 42
        echo "            ";
        // line 43
        echo "            ";
        // line 44
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu"]]);
        echo "
            ";
        // line 50
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'errors');
        echo " 


            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "prenom", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "prenom", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), 'errors');
        echo "
                
            ";
        // line 60
        echo "                
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'errors');
        echo "

            ";
        // line 68
        echo "                
            ";
        // line 72
        echo "                
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        echo "
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "password", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "password", [], "any", false, false, false, 75), 'errors');
        echo "

            ";
        // line 82
        echo "
            <div class=\"boutonInscription\">
                <button type=\"submit\" id=\"btnInscription\">INSCRIPTION</button>
            </div>

            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
        </div>

    </div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 87,  224 => 82,  219 => 75,  215 => 74,  211 => 73,  208 => 72,  205 => 68,  200 => 63,  196 => 62,  192 => 61,  189 => 60,  184 => 55,  180 => 54,  176 => 53,  169 => 50,  164 => 48,  162 => 47,  160 => 46,  155 => 44,  153 => 43,  151 => 42,  149 => 41,  144 => 38,  133 => 30,  123 => 23,  110 => 12,  100 => 11,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}inscription{% endblock %}


{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/asset/css/register.css\">
{% endblock %}


{% block body %}


<div class=\"blocFormulaireInscription\">

    <div class='formulaire_Inscription'>


        <div class=\"blocInscriptionConnexion\">

            <div class=\"blocInscription\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_register') }}\">INSCRIPTION</a>
                </h4>

            </div>

            <div class=\"blocConnexion\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_login') }}\">CONNEXION</a></h4>

            </div>

        </div>

        <div class='form'>

            {{ form_start(registrationForm) }}

            {# {{ form_label(...) }}: 1er argument, génère une balise <label> pour le champ du formulaire. #}
            {# null: deuxieme argument, text: libellé du champs #}
            {# 'label_attr': souhaite ajouter des attributs au label du formulaire #}
            {# 'class' : 'form-label': , la classe CSS 'form-label' sera ajoutée à la balise <label> pour appliquer le style CSS #}
            {{form_label(registrationForm.nom, null, {'label_attr': {'class':'form-label'}}) }}
            {# {{ form_widget(...) }} : affiche le champs du formulaire comme un champ de texte ou une zone de texte #}
            {# 'attr': souhaite ajouter des attributs au champs du formulaire #}
            {# 'class' : 'form-control': , la classe CSS 'form-control' sera ajoutée au champs du formulaire pour appliquer le style CSS #}
            {{form_widget(registrationForm.nom, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu'}})}}
            {# affiche un message d'erreur en cas de non respect des contraintes #}
            {{ form_errors(registrationForm.nom) }} 


            {{form_label(registrationForm.prenom, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.prenom, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.prenom) }}
                
            {# {{form_label(registrationForm.date_de_naissance, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.date_de_naissance, {'attr': {'class':'form-control', 'placeholder':'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.date_de_naissance) }} #}
                
            {{form_label(registrationForm.email, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.email, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.email) }}

            {# {{form_label(registrationForm.adresse, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.adresse, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.adresse) }} #}
                
            {# {{form_label(registrationForm.login, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.login, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.login) }} #}
                
            {{form_label(registrationForm.password, 'Mot de passe', {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.password, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici' }}) }}
            {{ form_errors(registrationForm.password) }}

            {# <div class='form-check' id=\"cgv\">
                {{form_label(registrationForm.Conditions_utilisations, 'En créant un compte, vous acceptez les
                conditions générales de vente du site.', {'label_attr': {'class':'form-check-label'}}) }}
                {{form_widget(registrationForm.Conditions_utilisations, {'attr': {'class':'form-check-input'}}) }}
            </div> #}

            <div class=\"boutonInscription\">
                <button type=\"submit\" id=\"btnInscription\">INSCRIPTION</button>
            </div>

            {{ form_end(registrationForm) }}
        </div>

    </div>

</div>

{% endblock %}", "registration/register.html.twig", "C:\\Users\\cmptp\\Desktop\\GoogleOAuth_Symfony\\templates\\registration\\register.html.twig");
    }
}
