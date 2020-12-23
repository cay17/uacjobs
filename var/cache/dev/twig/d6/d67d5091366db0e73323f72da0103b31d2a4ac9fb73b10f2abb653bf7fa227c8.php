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
class __TwigTemplate_b86ca875abd7144a4c8f93fc94391e0f3f712af16f41edd2817bc466a69206c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "registration/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("registration/base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        echo "étudiants";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["class" => "row pb-5 mx-xl-3", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_etudiant")]]);
        echo "
    <div class=\"col-12\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 9
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            <div class=\"col-12 alert-danger rounded-lg pt-1\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), "plainPassword", [], "any", false, false, false, 11), 'errors');
        echo "</div>
    </div>
    <div class=\"col-12 col-lg-6\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Nom</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-user\"></i>
            </div>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 col-lg-6\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Prénoms</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-user\"></i>
            </div>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Email</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-envelope-o\"></i>
            </div>
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "mail", [], "any", false, false, false, 37), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-eye-slash\"></i>
            </div>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-eye-slash\"></i>
            </div>
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "plainPassword", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 form-group mt-3\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "agreeTerms", [], "any", false, false, false, 59), 'widget');
        echo "
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>
    <div class=\"col-12 form-group d-none mt-3\">
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "entreprise", [], "any", false, false, false, 63), 'widget');
        echo "
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>

    <div class=\"col-12 col-lg-6 mt-2\">
        <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
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
    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  205 => 79,  191 => 68,  183 => 63,  176 => 59,  169 => 55,  157 => 46,  145 => 37,  133 => 28,  121 => 19,  109 => 11,  100 => 9,  96 => 8,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'registration/base.html.twig' %}
{% block name %}étudiants{% endblock %}

{% block body %}

    {{ form_start(registrationForm,{'attr' : {'class' : 'row pb-5 mx-xl-3','action' : path('app_register_etudiant')}}) }}
    <div class=\"col-12\">
        {% for flashError in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
            <div class=\"col-12 alert-danger rounded-lg pt-1\">{{ form_errors(registrationForm.plainPassword) }}</div>
    </div>
    <div class=\"col-12 col-lg-6\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Nom</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-user\"></i>
            </div>
            {{ form_widget(registrationForm.name) }}
        </div>
    </div>
    <div class=\"col-12 col-lg-6\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Prénoms</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-user\"></i>
            </div>
            {{ form_widget(registrationForm.lastname) }}
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Email</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-envelope-o\"></i>
            </div>
            {{ form_widget(registrationForm.mail) }}
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-eye-slash\"></i>
            </div>
            {{ form_widget(registrationForm.plainPassword.first) }}
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-eye-slash\"></i>
            </div>
            {{ form_widget(registrationForm.plainPassword.second) }}
        </div>
    </div>
    <div class=\"col-12 form-group mt-3\">
        {{ form_widget(registrationForm.agreeTerms) }}
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>
    <div class=\"col-12 form-group d-none mt-3\">
        {{ form_widget(registrationForm.entreprise) }}
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>

    <div class=\"col-12 col-lg-6 mt-2\">
        <a href=\"{{ path('app_login') }}\" class=\"btn-block text-center text-secondary bg-white rounded-pill\"
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
    {{ form_end(registrationForm) }}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\registration\\register.html.twig");
    }
}
