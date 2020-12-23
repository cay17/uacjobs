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

/* registration/register_recruteur.html.twig */
class __TwigTemplate_c24def8f116c8d605831cd2cacc6b71834b1ff31e29a601e3281fe4f617055db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_recruteur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_recruteur.html.twig"));

        $this->parent = $this->loadTemplate("registration/base.html.twig", "registration/register_recruteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        echo "recruteurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "row pb-5 mx-xl-3", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_recruteur")]]);
        echo "
    <div class=\"col-12\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 10
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            <div class=\"col-12 alert-danger rounded-lg pt-1\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "plainPassword", [], "any", false, false, false, 12), 'errors');
        echo "</div>
    </div>
    <div class=\"col-12 col-lg-6\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Nom</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-user\"></i>
            </div>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'widget');
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
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "lastname", [], "any", false, false, false, 29), 'widget');
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
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "mail", [], "any", false, false, false, 38), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Nom de l'entreprise</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-building-o\"></i>
            </div>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "entreprise", [], "any", false, false, false, 47), 'widget');
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
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget');
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
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "plainPassword", [], "any", false, false, false, 65), "second", [], "any", false, false, false, 65), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 form-group mt-3\">
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "agreeTerms", [], "any", false, false, false, 69), 'widget');
        echo "
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>

    <div class=\"col-12 col-lg-6 mt-2\">
        <a href=\"";
        // line 74
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
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register_recruteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 85,  196 => 74,  188 => 69,  181 => 65,  169 => 56,  157 => 47,  145 => 38,  133 => 29,  121 => 20,  109 => 12,  100 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'registration/base.html.twig' %}

{% block name %}recruteurs{% endblock %}

{% block body %}

    {{ form_start(registrationForm,{'attr' : {'class' : 'row pb-5 mx-xl-3','action' : path('app_register_recruteur')}}) }}
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
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Nom de l'entreprise</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-building-o\"></i>
            </div>
            {{ form_widget(registrationForm.entreprise) }}
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
", "registration/register_recruteur.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\registration\\register_recruteur.html.twig");
    }
}
