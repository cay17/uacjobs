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

/* cms/edit_categorie.html.twig */
class __TwigTemplate_cdf285914a35b0fa6a5bd7778fc1aaad3bc7f0fb5e3550ba5bf9cbad04f81f68 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_categorie.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/edit_categorie.html.twig", 1);
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
            if (/ajouter-une-categorie/.test(window.location.pathname)) {
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
                            status: true
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/faq_categories'));
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
                \$('input[name=id]').val(\$.cookie('edit_categorie_id'));

                (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/faq_categories/'));
                            let currentArticle = await menuAPI.getItem(\$.cookie('edit_categorie_id'));
                            \$('input[name=name]').val(currentArticle.name);
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
                            id: form['id'].value,
                            name: form['name'].value,
                            status: true
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/faq_categories/'));
                                let out = await article.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Article enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = 'backend/categorie-de-questions';
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

    // line 180
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 181
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
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter une catégorie de questions</h2>
        <a class=\"btn btn-link\" href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_categorie");
        echo "\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form class=\"new-article\">

        <div class=\"form-label-group\">
            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Question\" name=\"name\"
                   required autofocus>
            <label for=\"name\">Nom de la Catégorie</label>
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
        return "cms/edit_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 197,  314 => 181,  304 => 180,  128 => 13,  118 => 12,  106 => 10,  102 => 9,  96 => 7,  86 => 6,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
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
            if (/ajouter-une-categorie/.test(window.location.pathname)) {
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
                            status: true
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/faq_categories'));
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
                \$('input[name=id]').val(\$.cookie('edit_categorie_id'));

                (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/faq_categories/'));
                            let currentArticle = await menuAPI.getItem(\$.cookie('edit_categorie_id'));
                            \$('input[name=name]').val(currentArticle.name);
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
                            id: form['id'].value,
                            name: form['name'].value,
                            status: true
                        };
                        //console.log(data);
                        (async function () {
                            try {
                                let article = new Api((\$('body').data('apiDomainName') + '/api/faq_categories/'));
                                let out = await article.put(data);
                                form.reset();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Article enregistré.');
                                \$('.toast').toast('show');
                                window.location.pathname = 'backend/categorie-de-questions';
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
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter une catégorie de questions</h2>
        <a class=\"btn btn-link\" href=\"{{ path('cms_categorie') }}\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form class=\"new-article\">

        <div class=\"form-label-group\">
            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Question\" name=\"name\"
                   required autofocus>
            <label for=\"name\">Nom de la Catégorie</label>
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
{% endblock %}", "cms/edit_categorie.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\edit_categorie.html.twig");
    }
}
