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

/* cms/galery.html.twig */
class __TwigTemplate_5e4ed2e542e317cdb50526761f2f21a3762572272ebb0afc8fcca3276de69c3f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/galery.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/galery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/dropzone-master/dist/min/dropzone.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/dropzone-master/dist/min/dropzone.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/galery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/galery-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 14
        echo "    <script type=\"text/javascript\">
        Dropzone.autoDiscover = false;
        \$(() => {
            (new GaleryList('.tbody-menu', '.mbody', '.gbody')).getGaleryList().then(() => {
            });
            \$('.js-checked-all').change(function () {
                if (this.checked) {
                    \$('.js-checkbox').prop(\"checked\", true);
                    \$('.js-delete-checked').removeClass('disabled');
                } else {
                    \$('.js-delete-checked').addClass('disabled');
                    \$('.js-checkbox').prop(\"checked\", false);
                }
            });
            \$('.js-delete-checked').on('click', () => {
                \$('.js-checkbox:checked').each((index) => {
                    (async function () {
                        try {
                            let api = new Api((\$('body').data('apiDomainName') + '/api/galeries/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('slug')).remove();
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                });
            });
            \$(\"#dropzone\" ).dropzone({
                success:function(file, response) {
                    let data = {
                        file : '/api/media_objects/' + response.id,
                        creatAt : now,
                        title : file.name
                    };
                    (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/galeries'));
                            let out = await menuAPI.post(data);
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                }
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 64
        echo "    <h2 class=\"h2 text-dark\">Galerie</h2>
    <div class=\"row\">
        <div class=\"col-12\">
            <form action=\"http://127.0.0.1:8000/api/media_objects\" class=\"dropzone border border-primary file-form\" id=\"dropzone\">
                <div class=\"text-center \">
                    <h4 class=\"h4 p-0 m-0 d-lg-block d-none\">
                        Déposez vos fichiers
                    </h4>
                    <span class=\"d-lg-block d-none\">ou</span>

                    <button type=\"button\" name=\"file\" id=\"file\" class=\"dz-message needsclick btn btn-primary\">
                        Selectionner vos fichiers
                    </button>
                </div>
            </form>
        </div>
    </div>
    <ul class=\"nav nav-tabs d-flex justify-content-between\">
        <li class=\"nav-item\">
            <a class=\"nav-link  active btn btn-outline-primary mr-2\" id=\"home-tab\" data-toggle=\"tab\"
               href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">
                <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link btn btn-outline-primary\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\"
               role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">
                <i class=\"fa fa-th\" aria-hidden=\"true\"></i>

            </a>
        </li>
    </ul>
    <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped text-center\">
                            <thead class=\"shadow-lg\" style=\"background-color: rgba(42,140,40,0.6)\">
                            <tr>
                                <th>
                                    <input class=\"form-check-input ml-1 mt-n3\"
                                           type=\"checkbox\"/>
                                </th>
                                <th>Titre</th>
                                <th>Date de création</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class=\"tbody-menu\">

                            </tbody>
                            <tbody class=\"data-article d-none bg-primary\">
                            <tr>
                                <th scope=\"row\"></th>
                                <td colspan=\"6\" class=\"text-center not-element\">Aucun élément</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class=\"pagination justify-content-end\">
                        <li class=\"page-item active\">
                            <button class=\"page-link disabled\">
                                1
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link disabled\">
                                sur
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link\">
                                1
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link\">
                                <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link\">
                                <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
            <div class=\"row mt-5 gbody\">

            </div>
        </div>
    </div>
    <section class=\"mbody\">

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cms/galery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 64,  171 => 63,  116 => 14,  109 => 13,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  84 => 7,  79 => 6,  72 => 5,  62 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
    {% block css %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/vendor/dropzone-master/dist/min/dropzone.min.css') }}\"/>
    {% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-validation/dist/jquery.validate.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/dropzone-master/dist/min/dropzone.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/galery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/galery-list.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        Dropzone.autoDiscover = false;
        \$(() => {
            (new GaleryList('.tbody-menu', '.mbody', '.gbody')).getGaleryList().then(() => {
            });
            \$('.js-checked-all').change(function () {
                if (this.checked) {
                    \$('.js-checkbox').prop(\"checked\", true);
                    \$('.js-delete-checked').removeClass('disabled');
                } else {
                    \$('.js-delete-checked').addClass('disabled');
                    \$('.js-checkbox').prop(\"checked\", false);
                }
            });
            \$('.js-delete-checked').on('click', () => {
                \$('.js-checkbox:checked').each((index) => {
                    (async function () {
                        try {
                            let api = new Api((\$('body').data('apiDomainName') + '/api/galeries/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('slug')).remove();
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                });
            });
            \$(\"#dropzone\" ).dropzone({
                success:function(file, response) {
                    let data = {
                        file : '/api/media_objects/' + response.id,
                        creatAt : now,
                        title : file.name
                    };
                    (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/galeries'));
                            let out = await menuAPI.post(data);
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                }
            });

        });
    </script>
{% endblock %}
{% block main %}
    <h2 class=\"h2 text-dark\">Galerie</h2>
    <div class=\"row\">
        <div class=\"col-12\">
            <form action=\"http://127.0.0.1:8000/api/media_objects\" class=\"dropzone border border-primary file-form\" id=\"dropzone\">
                <div class=\"text-center \">
                    <h4 class=\"h4 p-0 m-0 d-lg-block d-none\">
                        Déposez vos fichiers
                    </h4>
                    <span class=\"d-lg-block d-none\">ou</span>

                    <button type=\"button\" name=\"file\" id=\"file\" class=\"dz-message needsclick btn btn-primary\">
                        Selectionner vos fichiers
                    </button>
                </div>
            </form>
        </div>
    </div>
    <ul class=\"nav nav-tabs d-flex justify-content-between\">
        <li class=\"nav-item\">
            <a class=\"nav-link  active btn btn-outline-primary mr-2\" id=\"home-tab\" data-toggle=\"tab\"
               href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">
                <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link btn btn-outline-primary\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\"
               role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">
                <i class=\"fa fa-th\" aria-hidden=\"true\"></i>

            </a>
        </li>
    </ul>
    <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped text-center\">
                            <thead class=\"shadow-lg\" style=\"background-color: rgba(42,140,40,0.6)\">
                            <tr>
                                <th>
                                    <input class=\"form-check-input ml-1 mt-n3\"
                                           type=\"checkbox\"/>
                                </th>
                                <th>Titre</th>
                                <th>Date de création</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class=\"tbody-menu\">

                            </tbody>
                            <tbody class=\"data-article d-none bg-primary\">
                            <tr>
                                <th scope=\"row\"></th>
                                <td colspan=\"6\" class=\"text-center not-element\">Aucun élément</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class=\"pagination justify-content-end\">
                        <li class=\"page-item active\">
                            <button class=\"page-link disabled\">
                                1
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link disabled\">
                                sur
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link\">
                                1
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link\">
                                <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                            </button>
                        </li>
                        <li class=\"page-item\">
                            <button class=\"page-link\">
                                <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
            <div class=\"row mt-5 gbody\">

            </div>
        </div>
    </div>
    <section class=\"mbody\">

    </section>
{% endblock %}", "cms/galery.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\galery.html.twig");
    }
}
