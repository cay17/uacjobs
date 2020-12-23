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

/* cms/list-medoc.html.twig */
class __TwigTemplate_19b58d8e29bc49ea00e10585f4c0abfa0b38c67571875f15b6ea467cced50391 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/list-medoc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/list-medoc.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/list-medoc.html.twig", 1);
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
        echo "    <style>
        .table-striped > tbody > tr:nth-child(odd) > td,
        .table-striped > tbody > tr:nth-child(odd) > th {
            background-color: white;
        }

        .table-striped > tbody > tr:nth-child(even) > td,
        .table-striped > tbody > tr:nth-child(even) > th {
            background-color: rgba(237, 233, 71, 0.2);
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 16
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 21
        echo "    <script>
        \$(() => {
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/medicaments/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('id')).remove();
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                });
            });
            \$('.js-delete').on('click', (e) => {
                (async function () {
                    try {
                        let api = new Api('/api/medicaments/');
                        await api.delete(\$(e.currentTarget).data('id'));
                        \$('#' + \$(e.currentTarget).data('id')).remove();
                    } catch (error) {
                        console.log(error);
                    }
                }())
            });
            \$('.js-edit').on('click', (e) => {
                \$.cookie('edit_medoc_id', \$(e.currentTarget).data('id'));
                 window.location.pathname = '/pharmacies/modifier-un-medicament';
                // alert('click');
            });

            \$(\".js-checkbox\").change(function () {
                if (this.checked)
                    \$('.js-delete-checked').removeClass('disabled');
                else if (\$(':checked').length === 0)
                    \$('.js-delete-checked').addClass('disabled');
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 74
        echo "    <h2 class=\"h2 text-dark\">Liste des médicaments disponibles</h2>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn bg-primary text-white py-3 mr-2\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Ajouter un medicament
                    </span>
        </button>
    </div>
    <div class=\"row\">
        <div class=\"col-12 pt-4\">
            <div class=\"table-responsive mb-3 card\">
                <table class=\"table table-striped text-center table-borderless\">
                    <thead style=\"background-color: #BAF8C0\">
                    <tr>
                        <th>
                            <input class=\"js-check-all form-check-input ml-1 mt-n3\"
                                   type=\"checkbox\"/>
                        </th>
                        <th class=\"font-candara\">Medicament</th>
                        <th class=\"font-candara\">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "pharmacies", [], "any", false, false, false, 98), "medicaments", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["medicament"]) {
            // line 99
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                            <td>
                                <input data-id=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\" class=\"js-checkbox form-check-input mt-1 ml-1\" name=\"foo\"
                                       type=\"checkbox\"/>
                            </td>
                            <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"btn-group btn-group-sm\" role=\"group\">
                                    <button data-id=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "id", [], "any", false, false, false, 107), "html", null, true);
            echo "\" type=\"button\"
                                            class=\"btn bg-white text-danger mr-3 px-2 py-1 js-delete\"
                                            style=\"border: 1px solid \">
                                        <i class=\"fa fa-trash\"></i>
                                    </button>
                                    <button data-id=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "\" type=\"button\"
                                            class=\"btn bg-primary mr-3 px-2 py-1 js-edit\">
                                        <i class=\"fa fa-pencil text-white\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medicament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                    ";
        if (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "pharmacies", [], "any", false, false, false, 120), "medicaments", [], "any", false, false, false, 120)), 0)) {
            // line 121
            echo "                    <tr>
                        <td colspan=\"3\" class=\"text-center not-element\">Aucun élément</td>
                    </tr>
                    </tbody>
                    ";
        }
        // line 126
        echo "                </table>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/list-medoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 126,  277 => 121,  274 => 120,  260 => 112,  252 => 107,  246 => 104,  240 => 101,  234 => 99,  230 => 98,  204 => 74,  194 => 73,  133 => 21,  123 => 20,  111 => 18,  107 => 17,  102 => 16,  92 => 15,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <style>
        .table-striped > tbody > tr:nth-child(odd) > td,
        .table-striped > tbody > tr:nth-child(odd) > th {
            background-color: white;
        }

        .table-striped > tbody > tr:nth-child(even) > td,
        .table-striped > tbody > tr:nth-child(even) > th {
            background-color: rgba(237, 233, 71, 0.2);
        }
    </style>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-validation/dist/jquery.validate.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
{% endblock %}
{% block js %}
    <script>
        \$(() => {
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/medicaments/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('id')).remove();
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                });
            });
            \$('.js-delete').on('click', (e) => {
                (async function () {
                    try {
                        let api = new Api('/api/medicaments/');
                        await api.delete(\$(e.currentTarget).data('id'));
                        \$('#' + \$(e.currentTarget).data('id')).remove();
                    } catch (error) {
                        console.log(error);
                    }
                }())
            });
            \$('.js-edit').on('click', (e) => {
                \$.cookie('edit_medoc_id', \$(e.currentTarget).data('id'));
                 window.location.pathname = '/pharmacies/modifier-un-medicament';
                // alert('click');
            });

            \$(\".js-checkbox\").change(function () {
                if (this.checked)
                    \$('.js-delete-checked').removeClass('disabled');
                else if (\$(':checked').length === 0)
                    \$('.js-delete-checked').addClass('disabled');
            });
        });

    </script>
{% endblock %}
{% block main %}
    <h2 class=\"h2 text-dark\">Liste des médicaments disponibles</h2>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn bg-primary text-white py-3 mr-2\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Ajouter un medicament
                    </span>
        </button>
    </div>
    <div class=\"row\">
        <div class=\"col-12 pt-4\">
            <div class=\"table-responsive mb-3 card\">
                <table class=\"table table-striped text-center table-borderless\">
                    <thead style=\"background-color: #BAF8C0\">
                    <tr>
                        <th>
                            <input class=\"js-check-all form-check-input ml-1 mt-n3\"
                                   type=\"checkbox\"/>
                        </th>
                        <th class=\"font-candara\">Medicament</th>
                        <th class=\"font-candara\">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for medicament in app.user.pharmacies.medicaments %}
                        <tr data-id=\"{{ medicament.id }}\">
                            <td>
                                <input data-id=\"{{ medicament.id }}\" class=\"js-checkbox form-check-input mt-1 ml-1\" name=\"foo\"
                                       type=\"checkbox\"/>
                            </td>
                            <td>{{ medicament.name }}</td>
                            <td>
                                <div class=\"btn-group btn-group-sm\" role=\"group\">
                                    <button data-id=\"{{ medicament.id }}\" type=\"button\"
                                            class=\"btn bg-white text-danger mr-3 px-2 py-1 js-delete\"
                                            style=\"border: 1px solid \">
                                        <i class=\"fa fa-trash\"></i>
                                    </button>
                                    <button data-id=\"{{ medicament.id }}\" type=\"button\"
                                            class=\"btn bg-primary mr-3 px-2 py-1 js-edit\">
                                        <i class=\"fa fa-pencil text-white\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    {% if app.user.pharmacies.medicaments|length ==0 %}
                    <tr>
                        <td colspan=\"3\" class=\"text-center not-element\">Aucun élément</td>
                    </tr>
                    </tbody>
                    {% endif %}
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
{% endblock %}", "cms/list-medoc.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\list-medoc.html.twig");
    }
}
