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

/* cms/edit_partenaire.html.twig */
class __TwigTemplate_0afef06a82b11b67ca457df1077dc38a061e85080dd40c34bcf55c97cc7db590 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_partenaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_partenaire.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/edit_partenaire.html.twig", 1);
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
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/dropzone-master/dist/min/dropzone.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 8
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/dropzone-master/dist/min/dropzone.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 15
        echo "    <script type=\"text/javascript\">
        Dropzone.autoDiscover = false;
    </script>
    <script type=\"text/javascript\">
        \$(() => {
            let id;
            \$(\"#dropzone\" ).dropzone({
                success:function(file, response) {
                    id='/api/media_objects/' + response.id;
                }
            });
            if (/ajouter-un-partenaire/.test(window.location.pathname)) {
                \$('.new-article').validate({
                    rules: {
                        title: {
                            required: true
                        },
                        content: {
                            required: true
                        }
                    },
                    messages: {
                        title: {
                            required: \"Ecrivez un  titre\"
                        },
                        content: {
                            required: \"Ecrivez le contenu de votre article\"
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
                        let data = {
                            name: form['name'].value,
                            type: form['menu'].value,
                            description: form['desc'].value,
                            facebook: form['facebook'].value,
                            twitter: form['twitter'].value,
                            linkedin: form['linkedin'].value,
                            web: form['web'].value,
                            logo: id
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/partenaires'));
                                let out = await article.post(data);
                                console.log(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Article enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Article non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    }
                });
            } else {
                \$('input[name=id]').val(\$.cookie('edit_partenaire_id'));

                (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/partenaires/'));
                            let currentArticle = await menuAPI.getItem(\$.cookie('edit_partenaire_id'));
                            \$('textarea[name=desc]').val(currentArticle.description);
                            \$('input[name=name]').val(currentArticle.name);
                            \$('input[name=facebook]').val(currentArticle.facebook);
                            \$('input[name=twitter]').val(currentArticle.twitter);
                            \$('input[name=linkedin]').val(currentArticle.linkedin);
                            \$('input[name=web]').val(currentArticle.web);
                            \$('select[name=menu]').val(currentArticle.type);
                        } catch
                            (e) {
                            console.log(e);
                        }
                    }());
                \$('.new-article').validate({
                    rules: {
                        title: {
                            required: true
                        },
                        content: {
                            required: true
                        }
                    },
                    messages: {
                        title: {
                            required: \"Ecrivez un  titre\"
                        },
                        content: {
                            required: \"Ecrivez le contenu de votre article\"
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
                        let data = {
                            id: form['id'].value,name: form['name'].value,
                            type: form['menu'].value,
                            description: form['desc'].value,
                            facebook: form['facebook'].value,
                            twitter: form['twitter'].value,
                            linkedin: form['linkedin'].value,
                            web: form['web'].value,
                            logo: id
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/partenaires/'));
                                let out = await article.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Article enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = 'backend/partenaires';
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Article non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    }
                });
                console.log('Le formulaire n\\'est pas activé');
            }
        })
        ;
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 206
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
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter un partenaire</h2>
        <a class=\"btn btn-link\" href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_partenaires");
        echo "\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form action=\"http://127.0.0.1:8000/api/media_objects\" class=\"mb-5 dropzone border border-primary file-form\" id=\"dropzone\">
        <div class=\"text-center \">
            <h4 class=\"h4 p-0 m-0 d-lg-block d-none\">
                Déposez vos fichiers
            </h4>
            <span class=\"d-lg-block d-none\">ou</span>

            <button type=\"button\" name=\"file\" id=\"file\" class=\"dz-message needsclick btn btn-primary\">
                Choisissez le logo du partenaire
            </button>
        </div>
    </form>
    <form class=\"new-article\">

        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"menu\">Type de partenaire</label>
            </div>
            <select class=\"custom-select\" id=\"menu\" name=\"menu\">
                <option value=\"Institutions\">Institutions</option>
                <option value=\"Entreprises\">Entreprises</option>
            </select>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Nom du partenaire\" name=\"name\"
                   required autofocus>
            <label for=\"name\">Nom du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"facebook\" class=\"form-control\" name=\"facebook\" required autofocus>
            <label for=\"facebook\">Lien Facebook du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"twitter\" class=\"form-control\" name=\"twitter\"
                    autofocus>
            <label for=\"twitter\">Lien Twitter du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"linkedin\" class=\"form-control\" name=\"linkedin\"
                    autofocus>
            <label for=\"linkedin\">Lien Linkedin du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"web\" class=\"form-control\" name=\"web\"
                    autofocus>
            <label for=\"web\">Lien vers le site web du partenaire</label>
        </div>
        <div class=\"form-label-group mb-3\">
            <textarea type=\"text\" id=\"desc\" class=\"form-control\" placeholder=\"Description du partenaire\" name=\"desc\"
                      required autofocus rows=\"5\"></textarea>
        </div>
        <input type=\"hidden\" name=\"id\">
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button class=\"btn btn-outline-primary mr-2 js-toast-onclick\">
                <i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Publier
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
        return "cms/edit_partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 222,  345 => 206,  335 => 205,  136 => 15,  126 => 14,  114 => 12,  110 => 11,  105 => 9,  100 => 8,  90 => 7,  78 => 5,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('build/css/floating-labels.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('build/vendor/dropzone-master/dist/min/dropzone.min.css') }}\"/>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/dropzone-master/dist/min/dropzone.min.js') }}\"></script>
    <script type='text/javascript'
            src=\"{{ asset(\"build/vendor/jquery-validation/dist/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        Dropzone.autoDiscover = false;
    </script>
    <script type=\"text/javascript\">
        \$(() => {
            let id;
            \$(\"#dropzone\" ).dropzone({
                success:function(file, response) {
                    id='/api/media_objects/' + response.id;
                }
            });
            if (/ajouter-un-partenaire/.test(window.location.pathname)) {
                \$('.new-article').validate({
                    rules: {
                        title: {
                            required: true
                        },
                        content: {
                            required: true
                        }
                    },
                    messages: {
                        title: {
                            required: \"Ecrivez un  titre\"
                        },
                        content: {
                            required: \"Ecrivez le contenu de votre article\"
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
                        let data = {
                            name: form['name'].value,
                            type: form['menu'].value,
                            description: form['desc'].value,
                            facebook: form['facebook'].value,
                            twitter: form['twitter'].value,
                            linkedin: form['linkedin'].value,
                            web: form['web'].value,
                            logo: id
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/partenaires'));
                                let out = await article.post(data);
                                console.log(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Article enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Article non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    }
                });
            } else {
                \$('input[name=id]').val(\$.cookie('edit_partenaire_id'));

                (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/partenaires/'));
                            let currentArticle = await menuAPI.getItem(\$.cookie('edit_partenaire_id'));
                            \$('textarea[name=desc]').val(currentArticle.description);
                            \$('input[name=name]').val(currentArticle.name);
                            \$('input[name=facebook]').val(currentArticle.facebook);
                            \$('input[name=twitter]').val(currentArticle.twitter);
                            \$('input[name=linkedin]').val(currentArticle.linkedin);
                            \$('input[name=web]').val(currentArticle.web);
                            \$('select[name=menu]').val(currentArticle.type);
                        } catch
                            (e) {
                            console.log(e);
                        }
                    }());
                \$('.new-article').validate({
                    rules: {
                        title: {
                            required: true
                        },
                        content: {
                            required: true
                        }
                    },
                    messages: {
                        title: {
                            required: \"Ecrivez un  titre\"
                        },
                        content: {
                            required: \"Ecrivez le contenu de votre article\"
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
                        let data = {
                            id: form['id'].value,name: form['name'].value,
                            type: form['menu'].value,
                            description: form['desc'].value,
                            facebook: form['facebook'].value,
                            twitter: form['twitter'].value,
                            linkedin: form['linkedin'].value,
                            web: form['web'].value,
                            logo: id
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/partenaires/'));
                                let out = await article.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Article enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = 'backend/partenaires';
                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Article non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    }
                });
                console.log('Le formulaire n\\'est pas activé');
            }
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
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter un partenaire</h2>
        <a class=\"btn btn-link\" href=\"{{ path('cms_partenaires') }}\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form action=\"http://127.0.0.1:8000/api/media_objects\" class=\"mb-5 dropzone border border-primary file-form\" id=\"dropzone\">
        <div class=\"text-center \">
            <h4 class=\"h4 p-0 m-0 d-lg-block d-none\">
                Déposez vos fichiers
            </h4>
            <span class=\"d-lg-block d-none\">ou</span>

            <button type=\"button\" name=\"file\" id=\"file\" class=\"dz-message needsclick btn btn-primary\">
                Choisissez le logo du partenaire
            </button>
        </div>
    </form>
    <form class=\"new-article\">

        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"menu\">Type de partenaire</label>
            </div>
            <select class=\"custom-select\" id=\"menu\" name=\"menu\">
                <option value=\"Institutions\">Institutions</option>
                <option value=\"Entreprises\">Entreprises</option>
            </select>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Nom du partenaire\" name=\"name\"
                   required autofocus>
            <label for=\"name\">Nom du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"facebook\" class=\"form-control\" name=\"facebook\" required autofocus>
            <label for=\"facebook\">Lien Facebook du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"twitter\" class=\"form-control\" name=\"twitter\"
                    autofocus>
            <label for=\"twitter\">Lien Twitter du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"linkedin\" class=\"form-control\" name=\"linkedin\"
                    autofocus>
            <label for=\"linkedin\">Lien Linkedin du partenaire</label>
        </div>
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"web\" class=\"form-control\" name=\"web\"
                    autofocus>
            <label for=\"web\">Lien vers le site web du partenaire</label>
        </div>
        <div class=\"form-label-group mb-3\">
            <textarea type=\"text\" id=\"desc\" class=\"form-control\" placeholder=\"Description du partenaire\" name=\"desc\"
                      required autofocus rows=\"5\"></textarea>
        </div>
        <input type=\"hidden\" name=\"id\">
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button class=\"btn btn-outline-primary mr-2 js-toast-onclick\">
                <i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Publier
                    </span>
            </button>
        </div>
    </form>
{% endblock %}", "cms/edit_partenaire.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\edit_partenaire.html.twig");
    }
}
