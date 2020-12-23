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

/* cms/edit_account.html.twig */
class __TwigTemplate_0fb10705a1b5aa1bfc524c892fccd24cbbd4a4c26a9185cfd0710f2197bfdbb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'js_vendors' => [$this, 'block_js_vendors'],
            'js' => [$this, 'block_js'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "cms/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_account.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/edit_account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "    <link rel=\"stylesheet\"
          href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/floating-labels.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 7
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 13
        echo "    <script type=\"text/javascript\">

    </script>
    <script type=\"text/javascript\">
        \$(() => {
        })
        ;
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 23
        echo "    <div aria-live=\"polite\" aria-atomic=\"true\" style=\"position: relative;  z-index: 1070\">
        <div style=\"position: absolute; top: 0; right: 0;\">
            <div class=\"toast bg-secondary text-center\" role=\"alert\" aria-live=\"assertive\"
                 aria-atomic=\"true\">
                <div class=\"toast-header d-flex justify-content-end\">
                    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"toast-body bg-white\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-between align-items-center\">
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter un compte</h2>
        <a class=\"btn btn-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_comptes");
        echo "\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["class" => "row pb-5 mx-xl-3", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin")]]);
        echo "
    <div class=\"col-12\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 46
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <div class=\"col-12 alert-danger rounded-lg pt-1\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), 'errors');
        echo "</div>
    </div>
    <div class=\"col-12 col-lg-6\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Nom</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-user\"></i>
            </div>
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), 'widget');
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
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "lastname", [], "any", false, false, false, 65), 'widget');
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
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "mail", [], "any", false, false, false, 74), 'widget');
        echo "
        </div>
    </div>
    <div class=\"input-group mt-3 col-12\">
        <div class=\"input-group-prepend\">
            <label class=\"input-group-text\" for=\"menu\">Rôles</label>
        </div>
        <select class=\"custom-select\" id=\"menu\" name=\"role\" required>
            <option value=\"ROLE_EDITEUR\">Editeur</option>
            <option value=\"ROLE_ADMIN\">Administrateur</option>
        </select>
    </div>
    <div class=\"col-12 mt-3\">
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
        <div class=\"input-group\">
            <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                <i class=\"fa fa-eye-slash\"></i>
            </div>
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "plainPassword", [], "any", false, false, false, 92), "first", [], "any", false, false, false, 92), 'widget');
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
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), "plainPassword", [], "any", false, false, false, 101), "second", [], "any", false, false, false, 101), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-12 form-group d-none mt-3\">
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "agreeTerms", [], "any", false, false, false, 105), 'widget', ["attr" => ["checked" => "checked"]]);
        echo "
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>
    <div class=\"col-12 form-group mt-3 d-none\">
        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "entreprise", [], "any", false, false, false, 109), 'widget', ["attr" => ["required" => "false", "value" => "none"]]);
        echo "
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>
    <div class=\"col-12 mt-3\" role=\"group\">
    <button type=\"submit\" class=\"btn btn-outline-primary mr-2 btn-block\">
        <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
        <span class=\"d-none d-md-inline-block\">
                        Enregistrer
                    </span>
    </button>
    </div>
    ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/edit_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 120,  282 => 109,  275 => 105,  268 => 101,  256 => 92,  235 => 74,  223 => 65,  211 => 56,  199 => 48,  190 => 46,  186 => 45,  181 => 43,  174 => 39,  156 => 23,  146 => 22,  128 => 13,  118 => 12,  106 => 10,  102 => 9,  96 => 7,  86 => 6,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('build/css/floating-labels.css') }}\"/>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type='text/javascript'
            src=\"{{ asset(\"build/vendor/jquery-validation/dist/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">

    </script>
    <script type=\"text/javascript\">
        \$(() => {
        })
        ;
    </script>
{% endblock %}
{% block main %}
    <div aria-live=\"polite\" aria-atomic=\"true\" style=\"position: relative;  z-index: 1070\">
        <div style=\"position: absolute; top: 0; right: 0;\">
            <div class=\"toast bg-secondary text-center\" role=\"alert\" aria-live=\"assertive\"
                 aria-atomic=\"true\">
                <div class=\"toast-header d-flex justify-content-end\">
                    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"toast-body bg-white\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-between align-items-center\">
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter un compte</h2>
        <a class=\"btn btn-link\" href=\"{{ path('cms_comptes') }}\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>{{ form_start(registrationForm,{'attr' : {'class' : 'row pb-5 mx-xl-3','action' : path('app_register_admin')}}) }}
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
    <div class=\"input-group mt-3 col-12\">
        <div class=\"input-group-prepend\">
            <label class=\"input-group-text\" for=\"menu\">Rôles</label>
        </div>
        <select class=\"custom-select\" id=\"menu\" name=\"role\" required>
            <option value=\"ROLE_EDITEUR\">Editeur</option>
            <option value=\"ROLE_ADMIN\">Administrateur</option>
        </select>
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
    <div class=\"col-12 form-group d-none mt-3\">
        {{ form_widget(registrationForm.agreeTerms,{'attr' : {'checked' : 'checked'}}) }}
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>
    <div class=\"col-12 form-group mt-3 d-none\">
        {{ form_widget(registrationForm.entreprise,{'attr':{'required':'false','value':'none'}}) }}
        <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Confirmer le mot de passe</label>
    </div>
    <div class=\"col-12 mt-3\" role=\"group\">
    <button type=\"submit\" class=\"btn btn-outline-primary mr-2 btn-block\">
        <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
        <span class=\"d-none d-md-inline-block\">
                        Enregistrer
                    </span>
    </button>
    </div>
    {{ form_end(registrationForm) }}
{% endblock %}", "cms/edit_account.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\edit_account.html.twig");
    }
}
