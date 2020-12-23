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

/* cms/create_role.html.twig */
class __TwigTemplate_c0e8010d33466081f3826aaa2a5dae542cc7b55c6a39b52900d4f7eb91b6e3ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/create_role.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/create_role.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/create_role.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-validation/dist/jquery.validate.js"), "html", null, true);
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
            if (/modifier-un-role/.test(window.location.pathname)) {
                (async function () {
                    try {
                        const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/profils/'));
                        let currentRole = await menuAPI.getItem(\$.cookie('edit_profil_id'));
                        \$('#name').val(currentRole.name);
                        for(let elt in currentRole.roles){
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_ARTICLE\")
                                \$('#gestion_article').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_MENU\")
                                \$('#gestion_menus').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_USERS\")
                                \$('#gestion_compte').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_GALERIE\")
                                \$('#gestion_galerie').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_MESSAGE\")
                                \$('#gestion_messagerie').prop(\"checked\", true);


                        }
                    } catch
                        (e) {
                        console.log(e);
                    }
                }());
                \$('.new-role').validate({
                    rules: {
                        name: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez le nom du rôle\"
                        }
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
                        if(\$('#statut').prop(\"checked\") === true){
                            statut = true;
                        }
                        else
                            statut = false;
                        let data = {
                            id: parseInt(\$.cookie('edit_user_id')),
                            name: form['name'].value,
                            status: statut,
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/roles/'));
                                let out = await menu.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Rôle enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = '/menus';
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Rôle non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());

                    }
                });
            } else
                \$('.new-role').validate({
                    rules: {
                        name: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez le nom du rôle\"
                        }
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
                        if(\$('#statut').prop(\"checked\") === true){
                            statut = true;
                        }
                        else
                            statut = false;
                        let data = {
                            name: form['name'].value,
                            status: statut,
                        };
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/roles'));
                                let out = await menu.post(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Rôle enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Rôle non enregistré.');
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

    // line 185
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 186
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
    <div class=\"d-flex justify-content-between align-items-center\">
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Créer un profil</h2>
        <a class=\"btn btn-link\" href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_profil");
        echo "\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form class=\"new-role\">
        <div class=\"form-row\">
            <div class=\"col-lg-12\">
                <div class=\"form-label-group\">
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Nom du profil\"
                           required autofocus>
                    <label for=\"name\">Nom du profil</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <h5>Définissez des actions pour ce profil</h5>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_compte\" name=\"gestion_compte\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_compte\" class=\"form-check-label\">Gestion des comptes utilisateurs</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_messagerie\" name=\"gestion_messagerie\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_messagerie\" class=\"form-check-label\">Gestion de la messagerie</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_menus\" name=\"ajout_menus\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_menus\" class=\"form-check-label\">Gestion des menus</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_article\" name=\"ajout_article\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_article\" class=\"form-check-label\">Gestion des articles</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_galerie\" name=\"gestion_galerie\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_galerie\" class=\"form-check-label\">Gestion de la galerie</label>
                </div>
            </div>
        </div>
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2 js-toast-onclick\"
                    data-success-message=\"<i class='fa fa-check-circle'></i> Rôle crée.\">
                <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Créer
                    </span>
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/create_role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 202,  319 => 186,  309 => 185,  128 => 13,  118 => 12,  106 => 10,  102 => 9,  96 => 7,  86 => 6,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('build/vendors/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css') }}\"/>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendors/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type='text/javascript'
            src=\"{{ asset(\"build/vendors/jquery-validation/dist/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
{% endblock %}
{% block js %}
    <script>
        \$(() => {
            if (/modifier-un-role/.test(window.location.pathname)) {
                (async function () {
                    try {
                        const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/profils/'));
                        let currentRole = await menuAPI.getItem(\$.cookie('edit_profil_id'));
                        \$('#name').val(currentRole.name);
                        for(let elt in currentRole.roles){
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_ARTICLE\")
                                \$('#gestion_article').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_MENU\")
                                \$('#gestion_menus').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_USERS\")
                                \$('#gestion_compte').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_GALERIE\")
                                \$('#gestion_galerie').prop(\"checked\", true);
                            if(currentRole.roles[elt].role === \"ROLE_EDIT_MESSAGE\")
                                \$('#gestion_messagerie').prop(\"checked\", true);


                        }
                    } catch
                        (e) {
                        console.log(e);
                    }
                }());
                \$('.new-role').validate({
                    rules: {
                        name: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez le nom du rôle\"
                        }
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
                        if(\$('#statut').prop(\"checked\") === true){
                            statut = true;
                        }
                        else
                            statut = false;
                        let data = {
                            id: parseInt(\$.cookie('edit_user_id')),
                            name: form['name'].value,
                            status: statut,
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/roles/'));
                                let out = await menu.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Rôle enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = '/menus';
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Rôle non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());

                    }
                });
            } else
                \$('.new-role').validate({
                    rules: {
                        name: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez le nom du rôle\"
                        }
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
                        if(\$('#statut').prop(\"checked\") === true){
                            statut = true;
                        }
                        else
                            statut = false;
                        let data = {
                            name: form['name'].value,
                            status: statut,
                        };
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/roles'));
                                let out = await menu.post(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Rôle enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Rôle non enregistré.');
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
    <div class=\"d-flex justify-content-between align-items-center\">
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Créer un profil</h2>
        <a class=\"btn btn-link\" href=\"{{ path('cms_profil') }}\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form class=\"new-role\">
        <div class=\"form-row\">
            <div class=\"col-lg-12\">
                <div class=\"form-label-group\">
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Nom du profil\"
                           required autofocus>
                    <label for=\"name\">Nom du profil</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <h5>Définissez des actions pour ce profil</h5>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_compte\" name=\"gestion_compte\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_compte\" class=\"form-check-label\">Gestion des comptes utilisateurs</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_messagerie\" name=\"gestion_messagerie\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_messagerie\" class=\"form-check-label\">Gestion de la messagerie</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_menus\" name=\"ajout_menus\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_menus\" class=\"form-check-label\">Gestion des menus</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_article\" name=\"ajout_article\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_article\" class=\"form-check-label\">Gestion des articles</label>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" id=\"gestion_galerie\" name=\"gestion_galerie\" class=\"form-check-input\" autofocus>
                    <label for=\"gestion_galerie\" class=\"form-check-label\">Gestion de la galerie</label>
                </div>
            </div>
        </div>
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2 js-toast-onclick\"
                    data-success-message=\"<i class='fa fa-check-circle'></i> Rôle crée.\">
                <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Créer
                    </span>
            </button>
        </div>
    </form>
{% endblock %}", "cms/create_role.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\create_role.html.twig");
    }
}
