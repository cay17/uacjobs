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

/* security/login.html.twig */
class __TwigTemplate_431559d3e71a025472c73565aa1e298199429ad4ccf17e416025786933a00ee6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("security/base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <form class=\"row pb-5 mx-xl-3\" method=\"post\">
        <div class=\"col-12\">
            ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"col-12\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 17
        echo "        </div>
        <div class=\"col-12\">
            <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Adresse email</label>
            <div class=\"input-group\">
                <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                    <i class=\"fa fa-user\"></i>
                </div>
                <input class=\"form-control border-left-0\"  value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" required autofocus type=\"email\"/>
            </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >

        <div class=\"col-12 mt-3\">
            <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
            <div class=\"input-group\">
                <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                    <i class=\"fa fa-eye-slash\"></i>
                </div>
                <input class=\"form-control border-left-0\" type=\"password\" required name=\"password\" id=\"inputPassword\" />
            </div>
        </div>
        <div class=\"col-12 mt-1\">
            <p class=\"text-right\"><a class=\"font-weight-bold\"><u>J'ai oublié mon mot de
                        passe</u></a></p>
        </div>
        <div class=\"col-12 col-lg-6 mt-2\">
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"btn-block text-center text-secondary bg-white rounded-pill\"
               style=\"border: 1px solid;padding: 0.75rem 0\">
                <span class=\"h6\">Retour</span>
            </a>
        </div>
        <div class=\"col-12 col-lg-6 mt-2\">
            <button type=\"submit\" class=\"btn-block text-uppercase text-white bg-secondary rounded-pill\"
                    style=\"border: 1px solid;padding: 0.75rem 0\">
                <span class=\"h6\">Se connecter</span>
            </button>
        </div>
    </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  106 => 29,  98 => 24,  89 => 17,  81 => 14,  78 => 13,  76 => 12,  72 => 10,  66 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/base.html.twig' %}

{% block body %}

    <form class=\"row pb-5 mx-xl-3\" method=\"post\">
        <div class=\"col-12\">
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
        </div>
        <div class=\"col-12\">
            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %}
        </div>
        <div class=\"col-12\">
            <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Adresse email</label>
            <div class=\"input-group\">
                <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                    <i class=\"fa fa-user\"></i>
                </div>
                <input class=\"form-control border-left-0\"  value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" required autofocus type=\"email\"/>
            </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >

        <div class=\"col-12 mt-3\">
            <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
            <div class=\"input-group\">
                <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                    <i class=\"fa fa-eye-slash\"></i>
                </div>
                <input class=\"form-control border-left-0\" type=\"password\" required name=\"password\" id=\"inputPassword\" />
            </div>
        </div>
        <div class=\"col-12 mt-1\">
            <p class=\"text-right\"><a class=\"font-weight-bold\"><u>J'ai oublié mon mot de
                        passe</u></a></p>
        </div>
        <div class=\"col-12 col-lg-6 mt-2\">
            <a href=\"{{ path('index') }}\" class=\"btn-block text-center text-secondary bg-white rounded-pill\"
               style=\"border: 1px solid;padding: 0.75rem 0\">
                <span class=\"h6\">Retour</span>
            </a>
        </div>
        <div class=\"col-12 col-lg-6 mt-2\">
            <button type=\"submit\" class=\"btn-block text-uppercase text-white bg-secondary rounded-pill\"
                    style=\"border: 1px solid;padding: 0.75rem 0\">
                <span class=\"h6\">Se connecter</span>
            </button>
        </div>
    </form>
    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\security\\login.html.twig");
    }
}
