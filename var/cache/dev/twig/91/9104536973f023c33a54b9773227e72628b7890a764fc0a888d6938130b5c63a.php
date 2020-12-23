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

/* cms/create_medoc.html.twig */
class __TwigTemplate_69f33e3e8b9fbfea38acae906ae86fd38411d3273a8a32e7e2fca5d916ff6d26 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/create_medoc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/create_medoc.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/create_medoc.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css"), "html", null, true);
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
        echo "    <script>
        \$(() => {
            if (/modifier-un-medicament/.test(window.location.pathname)) {
                (async function () {
                    try {
                        const menuAPI = new Api('/api/medicaments/');
                        let currentMedoc = await menuAPI.getItem(\$.cookie('edit_medoc_id'));
                        \$('#name').val(currentMedoc.name);
                        \$('#yes').prop(\"checked\", true);
                    } catch
                        (e) {
                        console.log(e);
                    }
                }());
                \$('.new-medoc').validate({
                    rules: {
                        name: {
                            required: true
                        },
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },
                    },
                    errorElement: \"em\",
                    errorPlacement: function (error, element) {
                        \$(element).addClass(\"is-invalid\");
                        error.addClass(\"invalid-feedback\");
                        error.addClass(\"help-block\");
                        error.insertAfter(element);
                    },
                    success: function (label, element) {
                        \$(element).removeClass(\"is-invalid\");
                        \$(element).addClass(\"is-valid\");
                    },
                    highlight: function (element) {
                        \$(element).removeClass(\"is-valid\");
                        \$(element).addClass(\"is-invalid\");
                        \$(element).addClass(\"border-danger\");
                    },
                    unhighlight: function (element) {
                        \$(element).removeClass(\"border-danger\");
                        \$(element).addClass(\"border-success\");
                    },
                    submitHandler: function (form) {
                        let statut;
                        if(\$('#yes').prop(\"checked\") === true){
                            statut = true;
                        }
                        if(\$('#no').prop(\"checked\") === true)
                            statut = false;
                        let data = {
                            id: parseInt(\$.cookie('edit_medoc_id')),
                            name: form['name'].value
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api('/api/medicaments/');
                                let out = await menu.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Médicament enregistré.');
                                \$('.toast').toast('show');
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Médicament non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());

                    }
                });
            } else
                \$('.new-medoc').validate({
                    rules: {
                        name: {
                            required: true
                        },
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },

                    },
                    errorElement: \"em\",
                    errorPlacement: function (error, element) {
                        \$(element).addClass(\"is-invalid\");
                        error.addClass(\"invalid-feedback\");
                        error.addClass(\"help-block\");
                        error.insertAfter(element);
                    },
                    success: function (label, element) {
                        \$(element).removeClass(\"is-invalid\");
                        \$(element).addClass(\"is-valid\");
                    },
                    highlight: function (element) {
                        \$(element).removeClass(\"is-valid\");
                        \$(element).addClass(\"is-invalid\");
                        \$(element).addClass(\"border-danger\");
                    },
                    unhighlight: function (element) {
                        \$(element).removeClass(\"border-danger\");
                        \$(element).addClass(\"border-success\");
                    },
                    submitHandler: function (form) {
                        let statut;
                        if(\$('#yes').prop(\"checked\") === true){
                            statut = '/api/pharmacies/'+ ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "pharmacies", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133), "html", null, true);
        echo ";
                        }
                        if(\$('#no').prop(\"checked\") === true)
                            statut = '';
                        let data = {
                            name: form['name'].value,
                            pharmacies:[statut]
                        };
                        (async function () {
                            try {
                                let menu = new Api('/api/medicaments');
                                let out = await menu.post(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Médicament enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Médicament non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    }
                });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 172
        echo "    <div aria-live=\"polite\" aria-atomic=\"true\" style=\"position: relative;  z-index: 1070\">
        <div style=\"position: absolute; top: 0; right: 0;\">
            <div class=\"toast text-success bg-secondary text-center\" role=\"alert\" aria-live=\"assertive\"
                 aria-atomic=\"true\">
                <div class=\"toast-header bg-primary d-flex justify-content-end\">
                    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"toast-body bg-transparent\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"mx-md-5\">
        <div class=\"bg-white p-5 mx-md-5 card\">
            <h2 class=\"h2 text-dark font-weight-bold font-candara text-primary mb-5\"
                style=\"font-size: x-large\">";
        // line 189
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "request", [], "any", false, false, false, 189), "attributes", [], "any", false, false, false, 189), "get", [0 => "_route"], "method", false, false, false, 189), "cms_edit_medoc")) ? ("Modifier un") : ("Ajouter un nouveau"));
        echo "
                médicament</h2>

            <form class=\"new-medoc my-3\">
                <div class=\"form-row\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label for=\"name\" class=\"font-weight-bold font-candara\">Nom du médicament</label>
                            <input type=\"text\" id=\"name\" name=\"name\"
                                   style=\"background-color: rgba(57,156,71,0.4);padding-top:0.7em;padding-bottom:0.7em\"
                                   class=\"form-control\" placeholder=\"Paracetamol\"
                                   required autofocus>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-3 mt-4\">
                    <label class=\"font-weight-bold font-candara\" for=\"inputGroupSelect01\">Disponibilité</label><br>
                    <input class=\"custom-radio mt-3\" id=\"yes\" name=\"role\" type=\"radio\">
                    <label class=\"font-candara\" for=\"inputGroupSelect01\">Oui</label><br>
                    <input class=\"custom-radio mt-3\" id=\"no\" name=\"role\" type=\"radio\">
                    <label class=\"font-candara\" for=\"no\">Non</label>
                </div>
                <div class=\"mt-5 btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
                    <button type=\"submit\" class=\"btn text-white pt-3 pb-2 bg-primary mr-2 js-toast-onclick\"
                            data-success-message=\"<i class='fa fa-check-circle'></i> Médicament ajouté.\">
                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block font-candara h6\">
                        Enregistrer
                    </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/create_medoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 189,  308 => 172,  298 => 171,  250 => 133,  128 => 13,  118 => 12,  106 => 10,  102 => 9,  96 => 7,  86 => 6,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('build/vendor/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css') }}\"/>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type='text/javascript'
            src=\"{{ asset(\"build/vendor/jquery-validation/dist/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
{% endblock %}
{% block js %}
    <script>
        \$(() => {
            if (/modifier-un-medicament/.test(window.location.pathname)) {
                (async function () {
                    try {
                        const menuAPI = new Api('/api/medicaments/');
                        let currentMedoc = await menuAPI.getItem(\$.cookie('edit_medoc_id'));
                        \$('#name').val(currentMedoc.name);
                        \$('#yes').prop(\"checked\", true);
                    } catch
                        (e) {
                        console.log(e);
                    }
                }());
                \$('.new-medoc').validate({
                    rules: {
                        name: {
                            required: true
                        },
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },
                    },
                    errorElement: \"em\",
                    errorPlacement: function (error, element) {
                        \$(element).addClass(\"is-invalid\");
                        error.addClass(\"invalid-feedback\");
                        error.addClass(\"help-block\");
                        error.insertAfter(element);
                    },
                    success: function (label, element) {
                        \$(element).removeClass(\"is-invalid\");
                        \$(element).addClass(\"is-valid\");
                    },
                    highlight: function (element) {
                        \$(element).removeClass(\"is-valid\");
                        \$(element).addClass(\"is-invalid\");
                        \$(element).addClass(\"border-danger\");
                    },
                    unhighlight: function (element) {
                        \$(element).removeClass(\"border-danger\");
                        \$(element).addClass(\"border-success\");
                    },
                    submitHandler: function (form) {
                        let statut;
                        if(\$('#yes').prop(\"checked\") === true){
                            statut = true;
                        }
                        if(\$('#no').prop(\"checked\") === true)
                            statut = false;
                        let data = {
                            id: parseInt(\$.cookie('edit_medoc_id')),
                            name: form['name'].value
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api('/api/medicaments/');
                                let out = await menu.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Médicament enregistré.');
                                \$('.toast').toast('show');
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Médicament non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());

                    }
                });
            } else
                \$('.new-medoc').validate({
                    rules: {
                        name: {
                            required: true
                        },
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },

                    },
                    errorElement: \"em\",
                    errorPlacement: function (error, element) {
                        \$(element).addClass(\"is-invalid\");
                        error.addClass(\"invalid-feedback\");
                        error.addClass(\"help-block\");
                        error.insertAfter(element);
                    },
                    success: function (label, element) {
                        \$(element).removeClass(\"is-invalid\");
                        \$(element).addClass(\"is-valid\");
                    },
                    highlight: function (element) {
                        \$(element).removeClass(\"is-valid\");
                        \$(element).addClass(\"is-invalid\");
                        \$(element).addClass(\"border-danger\");
                    },
                    unhighlight: function (element) {
                        \$(element).removeClass(\"border-danger\");
                        \$(element).addClass(\"border-success\");
                    },
                    submitHandler: function (form) {
                        let statut;
                        if(\$('#yes').prop(\"checked\") === true){
                            statut = '/api/pharmacies/'+ {{ app.user.pharmacies.id }};
                        }
                        if(\$('#no').prop(\"checked\") === true)
                            statut = '';
                        let data = {
                            name: form['name'].value,
                            pharmacies:[statut]
                        };
                        (async function () {
                            try {
                                let menu = new Api('/api/medicaments');
                                let out = await menu.post(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Médicament enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Médicament non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    }
                });
        });
    </script>
{% endblock %}
{% block main %}
    <div aria-live=\"polite\" aria-atomic=\"true\" style=\"position: relative;  z-index: 1070\">
        <div style=\"position: absolute; top: 0; right: 0;\">
            <div class=\"toast text-success bg-secondary text-center\" role=\"alert\" aria-live=\"assertive\"
                 aria-atomic=\"true\">
                <div class=\"toast-header bg-primary d-flex justify-content-end\">
                    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"toast-body bg-transparent\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"mx-md-5\">
        <div class=\"bg-white p-5 mx-md-5 card\">
            <h2 class=\"h2 text-dark font-weight-bold font-candara text-primary mb-5\"
                style=\"font-size: x-large\">{{ (app.request.attributes.get('_route') == 'cms_edit_medoc')? 'Modifier un':'Ajouter un nouveau' }}
                médicament</h2>

            <form class=\"new-medoc my-3\">
                <div class=\"form-row\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label for=\"name\" class=\"font-weight-bold font-candara\">Nom du médicament</label>
                            <input type=\"text\" id=\"name\" name=\"name\"
                                   style=\"background-color: rgba(57,156,71,0.4);padding-top:0.7em;padding-bottom:0.7em\"
                                   class=\"form-control\" placeholder=\"Paracetamol\"
                                   required autofocus>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-3 mt-4\">
                    <label class=\"font-weight-bold font-candara\" for=\"inputGroupSelect01\">Disponibilité</label><br>
                    <input class=\"custom-radio mt-3\" id=\"yes\" name=\"role\" type=\"radio\">
                    <label class=\"font-candara\" for=\"inputGroupSelect01\">Oui</label><br>
                    <input class=\"custom-radio mt-3\" id=\"no\" name=\"role\" type=\"radio\">
                    <label class=\"font-candara\" for=\"no\">Non</label>
                </div>
                <div class=\"mt-5 btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
                    <button type=\"submit\" class=\"btn text-white pt-3 pb-2 bg-primary mr-2 js-toast-onclick\"
                            data-success-message=\"<i class='fa fa-check-circle'></i> Médicament ajouté.\">
                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block font-candara h6\">
                        Enregistrer
                    </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "cms/create_medoc.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\create_medoc.html.twig");
    }
}
