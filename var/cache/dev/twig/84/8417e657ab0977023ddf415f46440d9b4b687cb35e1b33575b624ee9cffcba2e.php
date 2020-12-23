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

/* cms/parametres.html.twig */
class __TwigTemplate_f419b8cbe1b1fe4582392e03ce5abe368e605c676c6124ca4c552fd07f810fa1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/parametres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/parametres.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/parametres.html.twig", 1);
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
    <style>
        .rt li.active{
            background-color: #399C47!important;
            color: white!important;
            border: none!important;
        }
        .rt li{
            background-color: white;
            color: black;
            border: 1px solid rgba(0,0,0,0.2);
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 19
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 25
        echo "    <script>
        \$(() => {
            if (/modifier-un-compte/.test(window.location.pathname)) {
                (async function () {
                    try {
                        const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/users/'));
                        let currentUser = await menuAPI.getItem(\$.cookie('edit_user_id'));
                        \$('#name').val(currentUser.name);
                        \$('#firstname').val(currentUser.lastname);
                        \$('#tel').val(currentUser.telephone);
                        \$('#role').val(currentUser.role);
                        \$('#email').val(currentUser.mail);
                    } catch
                        (e) {
                        console.log(e);
                    }
                }());
                \$('.new-account').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        firstname: {
                            required: true
                        },
                        email: {
                            email: true
                        },
                        tel: {
                            required: true
                        },
                        role: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },
                        firstname: {
                            required: \"Ecrivez un  prenom\"
                        },
                        email: {
                            email: \"Ecrivez un  email\"
                        },
                        tel: {
                            required: \"Ecrivez un  numéro de téléphone\"
                        },
                        role: {
                            required: \"Choisissez un role\"
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
                        let data = {
                            id: parseInt(\$.cookie('edit_user_id')),
                            name: form['name'].value,
                            lastname: form['firstname'].value,
                            mail: form['email'].value,
                            role: form['role'].value,
                            telephone: form['tel'].value,
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/users/'));
                                let out = await menu.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Menu enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = '/menus';
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Menu non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());

                    }
                });
            } else
                \$('.new-account').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        firstname: {
                            required: true
                        },
                        email: {
                            email: true
                        },
                        tel: {
                            required: true
                        },
                        role: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },
                        firstname: {
                            required: \"Ecrivez un  prenom\"
                        },
                        email: {
                            email: \"Ecrivez un  email\"
                        },
                        tel: {
                            required: \"Ecrivez un  numéro de téléphone\"
                        },
                        role: {
                            required: \"Choisissez un role\"
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
                        let data = {
                            name: form['name'].value,
                            lastname: form['firstname'].value,
                            mail: form['email'].value,
                            role: form['role'].value,
                            telephone: form['tel'].value,
                            status: true
                        };
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/users'));
                                let out = await menu.post(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Utilisateur enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Utilisateur non enregistré.');
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

    // line 230
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 231
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
        <div class=\"bg-white p-md-5 p-2 mx-md-5 card\">
            <h2 class=\"h1 font-weight-bold font-candara font-weight-bold text-primary mb-3\" style=\"font-size: xx-large\">
                Paramètres</h2>
            <div class=\"form-row\">
                <div class=\"col-lg-12 d-flex justify-content-start align-items-center\">
                    <img alt=\"\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/1,iol.svg"), "html", null, true);
        echo "\" width=\"50\" class=\" mr-3\">
                    <span class=\" font-candara font-weight-bold text-uppercase\">";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "user", [], "any", false, false, false, 252), "pharmacies", [], "any", false, false, false, 252), "name", [], "any", false, false, false, 252), "html", null, true);
        echo "</span>
                    <i class=\"fa fa-pencil text-primary ml-2\"></i>
                </div>
            </div>
            <div class=\" bg-center mt-5 rounded-lg\">
                <div class=\"form-row mb-0 pb-0\">
                    <ul role=\"tablist\" class=\"nav nav-tabs rt list-unstyled col-lg-12 d-md-flex d-inline align-items-center text-center\">
                        <li class=\"nav-item\" style=\"flex: 1 1 auto\">
                            <a class=\"nav-link active font-candara font-weight-bold py-3\" id=\"home-tab\" data-toggle=\"tab\" href=\"#loc\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Localisation</a>
                        </li>
                        <li class=\"nav-item\" style=\"flex: 1 1 auto\">
                            <a class=\"nav-link font-candara font-weight-bold py-3\" id=\"home-tab\" data-toggle=\"tab\" href=\"#adr\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Adresse et informations</a>
                        </li>
                        <li class=\"nav-item\" style=\"flex: 1 1 auto\">
                            <a class=\"nav-link font-candara font-weight-bold py-3\" id=\"home-tab\" data-toggle=\"tab\" href=\"#inf\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Infos de connexion</a>
                        </li>
                    </ul>
                </div>
                <div class=\"tab-content mb-3 px-5 mt-5 mb-5\">
                    <div class=\"tab-pane active\" id=\"loc\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                        <div class=\"\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\" for=\"no\">Long</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"long\" type=\"text\" placeholder=\"17'25°125\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Lat</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"lat\" type=\"text\" placeholder=\"17'25°125\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"adr\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                        <div class=\"\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\" for=\"no\">Nom</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "user", [], "any", false, false, false, 287), "pharmacies", [], "any", false, false, false, 287), "name", [], "any", false, false, false, 287), "html", null, true);
        echo "\" id=\"no\" name=\"long\" type=\"text\" placeholder=\"Pharmacie ivoire\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\"  for=\"no\">Referent de la pharmacie</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "pharmacies", [], "any", false, false, false, 291), "referent", [], "any", false, false, false, 291), "html", null, true);
        echo "\" id=\"no\" name=\"long\" type=\"text\" placeholder=\"John Doe\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\" >Num référent</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "user", [], "any", false, false, false, 295), "pharmacies", [], "any", false, false, false, 295), "numTelReferent", [], "any", false, false, false, 295), "html", null, true);
        echo "\" id=\"no\" name=\"lat\" type=\"tel\" placeholder=\"+22968457125\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Email référent</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"";
        // line 299
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "user", [], "any", false, false, false, 299), "pharmacies", [], "any", false, false, false, 299), "emailReferent", [], "any", false, false, false, 299), "html", null, true);
        echo "\" id=\"no\" name=\"lat\" type=\"email\" placeholder=\"pharmacie@gmail.com\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Adresse de la pharmacie</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"lat\" type=\"text\" placeholder=\"Ouidah rue 2256 03bp 2015\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"inf\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">
                        <div class=\"\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\" for=\"no\">Id connexion</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"long\" disabled type=\"text\" value=\"";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 311, $this->source); })()), "user", [], "any", false, false, false, 311), "username", [], "any", false, false, false, 311), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Mot de passe</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"pass\" type=\"password\" placeholder=\"••••••••••\">
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/parametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 311,  449 => 299,  442 => 295,  435 => 291,  428 => 287,  390 => 252,  386 => 251,  364 => 231,  354 => 230,  140 => 25,  130 => 24,  118 => 22,  114 => 21,  108 => 19,  98 => 18,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('build/vendors/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css') }}\"/>
    <style>
        .rt li.active{
            background-color: #399C47!important;
            color: white!important;
            border: none!important;
        }
        .rt li{
            background-color: white;
            color: black;
            border: 1px solid rgba(0,0,0,0.2);
        }
    </style>
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
            if (/modifier-un-compte/.test(window.location.pathname)) {
                (async function () {
                    try {
                        const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/users/'));
                        let currentUser = await menuAPI.getItem(\$.cookie('edit_user_id'));
                        \$('#name').val(currentUser.name);
                        \$('#firstname').val(currentUser.lastname);
                        \$('#tel').val(currentUser.telephone);
                        \$('#role').val(currentUser.role);
                        \$('#email').val(currentUser.mail);
                    } catch
                        (e) {
                        console.log(e);
                    }
                }());
                \$('.new-account').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        firstname: {
                            required: true
                        },
                        email: {
                            email: true
                        },
                        tel: {
                            required: true
                        },
                        role: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },
                        firstname: {
                            required: \"Ecrivez un  prenom\"
                        },
                        email: {
                            email: \"Ecrivez un  email\"
                        },
                        tel: {
                            required: \"Ecrivez un  numéro de téléphone\"
                        },
                        role: {
                            required: \"Choisissez un role\"
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
                        let data = {
                            id: parseInt(\$.cookie('edit_user_id')),
                            name: form['name'].value,
                            lastname: form['firstname'].value,
                            mail: form['email'].value,
                            role: form['role'].value,
                            telephone: form['tel'].value,
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/users/'));
                                let out = await menu.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Menu enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = '/menus';
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Menu non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());

                    }
                });
            } else
                \$('.new-account').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        firstname: {
                            required: true
                        },
                        email: {
                            email: true
                        },
                        tel: {
                            required: true
                        },
                        role: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: \"Ecrivez un  nom\"
                        },
                        firstname: {
                            required: \"Ecrivez un  prenom\"
                        },
                        email: {
                            email: \"Ecrivez un  email\"
                        },
                        tel: {
                            required: \"Ecrivez un  numéro de téléphone\"
                        },
                        role: {
                            required: \"Choisissez un role\"
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
                        let data = {
                            name: form['name'].value,
                            lastname: form['firstname'].value,
                            mail: form['email'].value,
                            role: form['role'].value,
                            telephone: form['tel'].value,
                            status: true
                        };
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/users'));
                                let out = await menu.post(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Utilisateur enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Utilisateur non enregistré.');
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
        <div class=\"bg-white p-md-5 p-2 mx-md-5 card\">
            <h2 class=\"h1 font-weight-bold font-candara font-weight-bold text-primary mb-3\" style=\"font-size: xx-large\">
                Paramètres</h2>
            <div class=\"form-row\">
                <div class=\"col-lg-12 d-flex justify-content-start align-items-center\">
                    <img alt=\"\" src=\"{{ asset('build/img/1,iol.svg') }}\" width=\"50\" class=\" mr-3\">
                    <span class=\" font-candara font-weight-bold text-uppercase\">{{ app.user.pharmacies.name }}</span>
                    <i class=\"fa fa-pencil text-primary ml-2\"></i>
                </div>
            </div>
            <div class=\" bg-center mt-5 rounded-lg\">
                <div class=\"form-row mb-0 pb-0\">
                    <ul role=\"tablist\" class=\"nav nav-tabs rt list-unstyled col-lg-12 d-md-flex d-inline align-items-center text-center\">
                        <li class=\"nav-item\" style=\"flex: 1 1 auto\">
                            <a class=\"nav-link active font-candara font-weight-bold py-3\" id=\"home-tab\" data-toggle=\"tab\" href=\"#loc\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Localisation</a>
                        </li>
                        <li class=\"nav-item\" style=\"flex: 1 1 auto\">
                            <a class=\"nav-link font-candara font-weight-bold py-3\" id=\"home-tab\" data-toggle=\"tab\" href=\"#adr\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Adresse et informations</a>
                        </li>
                        <li class=\"nav-item\" style=\"flex: 1 1 auto\">
                            <a class=\"nav-link font-candara font-weight-bold py-3\" id=\"home-tab\" data-toggle=\"tab\" href=\"#inf\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Infos de connexion</a>
                        </li>
                    </ul>
                </div>
                <div class=\"tab-content mb-3 px-5 mt-5 mb-5\">
                    <div class=\"tab-pane active\" id=\"loc\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                        <div class=\"\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\" for=\"no\">Long</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"long\" type=\"text\" placeholder=\"17'25°125\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Lat</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"lat\" type=\"text\" placeholder=\"17'25°125\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"adr\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                        <div class=\"\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\" for=\"no\">Nom</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"{{ app.user.pharmacies.name }}\" id=\"no\" name=\"long\" type=\"text\" placeholder=\"Pharmacie ivoire\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\"  for=\"no\">Referent de la pharmacie</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"{{ app.user.pharmacies.referent }}\" id=\"no\" name=\"long\" type=\"text\" placeholder=\"John Doe\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\" >Num référent</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"{{ app.user.pharmacies.numTelReferent }}\" id=\"no\" name=\"lat\" type=\"tel\" placeholder=\"+22968457125\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Email référent</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" value=\"{{ app.user.pharmacies.emailReferent }}\" id=\"no\" name=\"lat\" type=\"email\" placeholder=\"pharmacie@gmail.com\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Adresse de la pharmacie</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"lat\" type=\"text\" placeholder=\"Ouidah rue 2256 03bp 2015\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"inf\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">
                        <div class=\"\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-2 col-12 font-candara font-weight-bold\" for=\"no\">Id connexion</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"long\" disabled type=\"text\" value=\"{{ app.user.username }}\">
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"font-candara col-lg-2 col-12 font-weight-bold\" for=\"no\">Mot de passe</label>
                                <input class=\"col-lg-10 col-12 font-candara form-control text-right\" id=\"no\" name=\"pass\" type=\"password\" placeholder=\"••••••••••\">
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
    </div>
{% endblock %}", "cms/parametres.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\parametres.html.twig");
    }
}
