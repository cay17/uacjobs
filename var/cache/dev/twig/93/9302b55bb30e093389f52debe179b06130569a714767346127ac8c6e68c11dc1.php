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

/* cms/opportunities.html.twig */
class __TwigTemplate_266d621e982041058f9d5ba940eb259450baa266f4958a22874f079b7d8737fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/opportunities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/opportunities.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/opportunities.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 3
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/offer.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/offer-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 9
        echo "    <script type=\"text/javascript\">
        \$(() => {
            (new OfferList('.tbody-menu')).getOfferList().then(() => {
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/users/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('id')).remove();
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 40
        echo "    <h2 class=\"h2 text-dark\">Opportunités</h2>

    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_add_offer");
        echo "\" type=\"button\" class=\"btn btn-outline-primary\">
            <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Ajouter une opportunité
                    </span>
        </a>
    </div>
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
                        <th>Description</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Lien pour postuler</th>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/opportunities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  154 => 40,  144 => 39,  105 => 9,  95 => 8,  83 => 6,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/offer.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/offer-list.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        \$(() => {
            (new OfferList('.tbody-menu')).getOfferList().then(() => {
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/users/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('id')).remove();
                        } catch (error) {
                            console.log(error);
                        }
                    }());
                });
            });
        });
    </script>
{% endblock %}
{% block main %}
    <h2 class=\"h2 text-dark\">Opportunités</h2>

    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <a href=\"{{ path('cms_add_offer') }}\" type=\"button\" class=\"btn btn-outline-primary\">
            <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Ajouter une opportunité
                    </span>
        </a>
    </div>
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
                        <th>Description</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Lien pour postuler</th>
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
{% endblock %}", "cms/opportunities.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\opportunities.html.twig");
    }
}
