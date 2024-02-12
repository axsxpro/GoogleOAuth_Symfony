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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<style>
    .blocFormulaireInscription {
        display: flex;
        padding: 100px;
        justify-content: center;
    
    }

    .blocInscriptionConnexion {

        display: flex;
        padding: 20px;
        border: solid black 2px;
        background-color: black;
    }

    .formulaire_Inscription {
        display: inline-block;
        padding: 40px;
        border-radius: 30px;
        border: solid #E0B973 10px;
        background-color: black;
        width: 50%;
    }

    .form {
        display: inline-block;
        padding: 50px;
        color: white;
        background-color: black;
        border: solid black 2px;
        width: 100%;
    }

    .blocInscription {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-right: solid #E0B973 3px;
        width: 50%;
    }

    .blocConnexion {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-left: solid #E0B973 3px;
        width: 50%;
    }

    #cgv {

        margin: 30px;
    }


    .boutonInscription {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    #btnInscription {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
        
    }
</style>


<div class=\"blocFormulaireInscription\">

    <div class='formulaire_Inscription'>


        <div class=\"blocInscriptionConnexion\">

            <div class=\"blocInscription\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">INSCRIPTION</a>
                </h4>

            </div>

            <div class=\"blocConnexion\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">CONNEXION</a></h4>

            </div>

        </div>

        <div class='form'>

            ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), 'form_start');
        echo "

            ";
        // line 114
        echo "            ";
        // line 115
        echo "            ";
        // line 116
        echo "            ";
        // line 117
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "nom", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 119
        echo "            ";
        // line 120
        echo "            ";
        // line 121
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "nom", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu"]]);
        echo "
            ";
        // line 123
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 123, $this->source); })()), "nom", [], "any", false, false, false, 123), 'errors');
        echo " 


            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), "prenom", [], "any", false, false, false, 126), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), "prenom", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "prenom", [], "any", false, false, false, 128), 'errors');
        echo "
                
            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 130, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 132), 'errors');
        echo "
                
            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 134, $this->source); })()), "email", [], "any", false, false, false, 134), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 135, $this->source); })()), "email", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "email", [], "any", false, false, false, 136), 'errors');
        echo "

            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 138, $this->source); })()), "adresse", [], "any", false, false, false, 138), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 139, $this->source); })()), "adresse", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 140, $this->source); })()), "adresse", [], "any", false, false, false, 140), 'errors');
        echo "
                
            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 142, $this->source); })()), "login", [], "any", false, false, false, 142), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 143, $this->source); })()), "login", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), "login", [], "any", false, false, false, 144), 'errors');
        echo "
                
            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 146, $this->source); })()), "password", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        echo "
            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 147, $this->source); })()), "password", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), "password", [], "any", false, false, false, 148), 'errors');
        echo "

            <div class='form-check' id=\"cgv\">
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 151, $this->source); })()), "Conditions_utilisations", [], "any", false, false, false, 151), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "En créant un compte, vous acceptez les
                conditions générales de vente du site."]);
        // line 152
        echo "
                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 153, $this->source); })()), "Conditions_utilisations", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
            </div>

            <div class=\"boutonInscription\">
                <button type=\"submit\" id=\"btnInscription\">INSCRIPTION</button>
            </div>

            ";
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 160, $this->source); })()), 'form_end');
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
        return array (  328 => 160,  318 => 153,  315 => 152,  312 => 151,  306 => 148,  302 => 147,  298 => 146,  293 => 144,  289 => 143,  285 => 142,  280 => 140,  276 => 139,  272 => 138,  267 => 136,  263 => 135,  259 => 134,  254 => 132,  250 => 131,  246 => 130,  241 => 128,  237 => 127,  233 => 126,  226 => 123,  221 => 121,  219 => 120,  217 => 119,  212 => 117,  210 => 116,  208 => 115,  206 => 114,  201 => 111,  190 => 103,  180 => 96,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}inscription{% endblock %}

{% block body %}

<style>
    .blocFormulaireInscription {
        display: flex;
        padding: 100px;
        justify-content: center;
    
    }

    .blocInscriptionConnexion {

        display: flex;
        padding: 20px;
        border: solid black 2px;
        background-color: black;
    }

    .formulaire_Inscription {
        display: inline-block;
        padding: 40px;
        border-radius: 30px;
        border: solid #E0B973 10px;
        background-color: black;
        width: 50%;
    }

    .form {
        display: inline-block;
        padding: 50px;
        color: white;
        background-color: black;
        border: solid black 2px;
        width: 100%;
    }

    .blocInscription {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-right: solid #E0B973 3px;
        width: 50%;
    }

    .blocConnexion {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-left: solid #E0B973 3px;
        width: 50%;
    }

    #cgv {

        margin: 30px;
    }


    .boutonInscription {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    #btnInscription {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
        
    }
</style>


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
                
            {{form_label(registrationForm.date_de_naissance, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.date_de_naissance, {'attr': {'class':'form-control', 'placeholder':'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.date_de_naissance) }}
                
            {{form_label(registrationForm.email, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.email, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.email) }}

            {{form_label(registrationForm.adresse, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.adresse, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.adresse) }}
                
            {{form_label(registrationForm.login, null, {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.login, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.login) }}
                
            {{form_label(registrationForm.password, 'Mot de passe', {'label_attr': {'class':'form-label'}}) }}
            {{form_widget(registrationForm.password, {'attr': {'class':'form-control', 'placeholder': 'Votre contenu ici' }}) }}
            {{ form_errors(registrationForm.password) }}

            <div class='form-check' id=\"cgv\">
                {{form_label(registrationForm.Conditions_utilisations, 'En créant un compte, vous acceptez les
                conditions générales de vente du site.', {'label_attr': {'class':'form-check-label'}}) }}
                {{form_widget(registrationForm.Conditions_utilisations, {'attr': {'class':'form-check-input'}}) }}
            </div>

            <div class=\"boutonInscription\">
                <button type=\"submit\" id=\"btnInscription\">INSCRIPTION</button>
            </div>

            {{ form_end(registrationForm) }}
        </div>

    </div>

</div>

{% endblock %}", "registration/register.html.twig", "C:\\xampp\\htdocs\\13-TP7\\templates\\registration\\register.html.twig");
    }
}