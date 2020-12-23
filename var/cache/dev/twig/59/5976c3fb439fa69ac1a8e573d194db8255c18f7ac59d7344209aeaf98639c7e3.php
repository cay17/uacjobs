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

/* cms/edit_opportunities.html.twig */
class __TwigTemplate_98a3855e75b779898256e62b45094c74e60335d9a8588a8104875f9377171386 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_opportunities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/edit_opportunities.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/edit_opportunities.html.twig", 1);
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
    <script type='text/javascript'
            src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/dropzone-master/dist/min/dropzone.min.js"), "html", null, true);
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
            \$(\"#dropzone\").dropzone({
                success: function (file, response) {
                    id = '/api/media_objects/' + response.id;
                }
            });
            \$('.new-offer').validate({
                rules: {
                    title: {
                        required: true
                    }
                },
                messages: {
                    title: {
                        required: \"Ecrivez un  titre\"
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
                        title: form['title'].value,
                        type: form['type'].value,
                        description: form['descr'].value,
                        qualifications: form['qual'].value,
                        linkPostuler: form['lien'].value,
                        picture: id
                    };
                    //console.log(data);
                    (async function () {
                        try {
                            let article = new Api((\$('body').data('apiDomainName') + '/api/opportunities'));
                            let out = await article.post(data);
                            console.log(data);
                            form.reset();
                            \$('.toast').remove('text-danger');
                            \$('.toast-header').remove('bg-danger');

                            \$('.toast').addClass('text-success');
                            \$('.toast-header').addClass('bg-primary');

                            \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Opportunité enregistré.');
                            \$('.toast').toast('show');

                        } catch (error) {
                            \$('.toast').remove('text-success');
                            \$('.toast-header').remove('bg-primary');

                            \$('.toast').addClass('text-danger');
                            \$('.toast-header').addClass('bg-danger');

                            \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Opportunité non enregistré.');
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

    // line 98
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 99
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
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter une opportunité</h2>
        <a class=\"btn btn-link\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_opportunites");
        echo "\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <div class=\"row my-5\">
        <div class=\"col-12\">
            <form action=\"http://127.0.0.1:8000/api/media_objects\" class=\"dropzone border border-primary file-form\"
                  id=\"dropzone\">
                <div class=\"text-center \">
                    <h4 class=\"h4 p-0 m-0 d-lg-block d-none\">
                        Déposez vos fichiers
                    </h4>
                    <span class=\"d-lg-block d-none\">ou</span>

                    <button type=\"button\" name=\"file\" id=\"file\"
                            class=\"bg-secondary dz-message needsclick btn btn-primary\">
                        Selectionner vos fichiers
                    </button>
                </div>
            </form>
        </div>
    </div>
    <form class=\"row new-offer\">
        <div class=\"form-group col-12 col-lg-6\">
            <label for=\"title\">Titre de l'opportunité</label>
            <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" required>
        </div>
        <div class=\"form-group col-12 col-lg-6\">
            <label for=\"type\">Type de l'opportunité</label>
            <select name=\"type\" id=\"type\" class=\"custom-select\" required>
                <option disabled selected></option>
                <option>Stages</option>
                <option>Emplois</option>
                <option>Bourses</option>
            </select>
        </div>
        <div class=\"form-group col-12\">
            <label for=\"title\">Lien pour postuler (optionnel)</label>
            <input type=\"text\" name=\"lien\" id=\"lien\" class=\"form-control\">
        </div>
        <div class=\"form-group col-12\">
            <label for=\"descr\">Description de l'opportunité</label>
            <textarea type=\"text\" name=\"descr\" id=\"descr\" class=\"form-control\" rows=\"05\" required></textarea>
        </div>
        <div class=\"form-group col-12\">
            <label for=\"qual\">Compétences et qualifications</label>
            <textarea type=\"text\" name=\"qual\" id=\"qual\" class=\"form-control\" rows=\"05\" required></textarea>
        </div>
        <div class=\"col-12 btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2 js-toast-onclick\">
                <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Enregistrer
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
        return "cms/edit_opportunities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 115,  238 => 99,  228 => 98,  136 => 15,  126 => 14,  114 => 12,  110 => 11,  106 => 10,  100 => 8,  90 => 7,  78 => 5,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
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
    <script type='text/javascript'
            src=\"{{ asset(\"build/vendor/jquery-validation/dist/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/dropzone-master/dist/min/dropzone.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        Dropzone.autoDiscover = false;
    </script>
    <script type=\"text/javascript\">
        \$(() => {
            let id;
            \$(\"#dropzone\").dropzone({
                success: function (file, response) {
                    id = '/api/media_objects/' + response.id;
                }
            });
            \$('.new-offer').validate({
                rules: {
                    title: {
                        required: true
                    }
                },
                messages: {
                    title: {
                        required: \"Ecrivez un  titre\"
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
                        title: form['title'].value,
                        type: form['type'].value,
                        description: form['descr'].value,
                        qualifications: form['qual'].value,
                        linkPostuler: form['lien'].value,
                        picture: id
                    };
                    //console.log(data);
                    (async function () {
                        try {
                            let article = new Api((\$('body').data('apiDomainName') + '/api/opportunities'));
                            let out = await article.post(data);
                            console.log(data);
                            form.reset();
                            \$('.toast').remove('text-danger');
                            \$('.toast-header').remove('bg-danger');

                            \$('.toast').addClass('text-success');
                            \$('.toast-header').addClass('bg-primary');

                            \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Opportunité enregistré.');
                            \$('.toast').toast('show');

                        } catch (error) {
                            \$('.toast').remove('text-success');
                            \$('.toast-header').remove('bg-primary');

                            \$('.toast').addClass('text-danger');
                            \$('.toast-header').addClass('bg-danger');

                            \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Opportunité non enregistré.');
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
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">Ajouter une opportunité</h2>
        <a class=\"btn btn-link\" href=\"{{ path('cms_opportunites') }}\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <div class=\"row my-5\">
        <div class=\"col-12\">
            <form action=\"http://127.0.0.1:8000/api/media_objects\" class=\"dropzone border border-primary file-form\"
                  id=\"dropzone\">
                <div class=\"text-center \">
                    <h4 class=\"h4 p-0 m-0 d-lg-block d-none\">
                        Déposez vos fichiers
                    </h4>
                    <span class=\"d-lg-block d-none\">ou</span>

                    <button type=\"button\" name=\"file\" id=\"file\"
                            class=\"bg-secondary dz-message needsclick btn btn-primary\">
                        Selectionner vos fichiers
                    </button>
                </div>
            </form>
        </div>
    </div>
    <form class=\"row new-offer\">
        <div class=\"form-group col-12 col-lg-6\">
            <label for=\"title\">Titre de l'opportunité</label>
            <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" required>
        </div>
        <div class=\"form-group col-12 col-lg-6\">
            <label for=\"type\">Type de l'opportunité</label>
            <select name=\"type\" id=\"type\" class=\"custom-select\" required>
                <option disabled selected></option>
                <option>Stages</option>
                <option>Emplois</option>
                <option>Bourses</option>
            </select>
        </div>
        <div class=\"form-group col-12\">
            <label for=\"title\">Lien pour postuler (optionnel)</label>
            <input type=\"text\" name=\"lien\" id=\"lien\" class=\"form-control\">
        </div>
        <div class=\"form-group col-12\">
            <label for=\"descr\">Description de l'opportunité</label>
            <textarea type=\"text\" name=\"descr\" id=\"descr\" class=\"form-control\" rows=\"05\" required></textarea>
        </div>
        <div class=\"form-group col-12\">
            <label for=\"qual\">Compétences et qualifications</label>
            <textarea type=\"text\" name=\"qual\" id=\"qual\" class=\"form-control\" rows=\"05\" required></textarea>
        </div>
        <div class=\"col-12 btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2 js-toast-onclick\">
                <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Enregistrer
                    </span>
            </button>
        </div>
    </form>
{% endblock %}", "cms/edit_opportunities.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\edit_opportunities.html.twig");
    }
}
