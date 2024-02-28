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

/* navbar.html.twig */
class __TwigTemplate_59468af6624e8b9c33ab96baee198e52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
    <div class=\"container-fluid\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Home</a>
        ";
        }
        // line 6
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\"
            aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
            ";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "                <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registration</a>
                <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
            ";
        }
        // line 16
        echo "            </div>
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "            <div class=\"navbar-nav ms-auto\">
                <div class=\"nav-item\">
                    <div class=\"mb-3\">
                        Hi, ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "userIdentifier", [], "any", false, false, false, 21), "html", null, true);
            echo "!
                        <br>
                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </div>
                </div>
            </div>
            ";
        }
        // line 28
        echo "        </div>
    </div>
</nav>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  90 => 23,  85 => 21,  80 => 18,  78 => 17,  75 => 16,  70 => 14,  65 => 13,  63 => 12,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
    <div class=\"container-fluid\">
        {% if app.user %}
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Home</a>
        {% endif %}
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\"
            aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
            {% if not app.user %}
                <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_register') }}\">Registration</a>
                <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_login') }}\">Login</a>
            {% endif %}
            </div>
            {% if app.user %}
            <div class=\"navbar-nav ms-auto\">
                <div class=\"nav-item\">
                    <div class=\"mb-3\">
                        Hi, {{ app.user.userIdentifier }}!
                        <br>
                        <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</nav>

", "navbar.html.twig", "C:\\Users\\cmptp\\Desktop\\GoogleOAuth_Symfony\\templates\\navbar.html.twig");
    }
}
