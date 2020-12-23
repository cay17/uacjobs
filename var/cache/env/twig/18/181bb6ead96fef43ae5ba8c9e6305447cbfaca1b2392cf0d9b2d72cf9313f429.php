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

/* cms/users_accounts.html.twig */
class __TwigTemplate_6c6cdf0651f1013e41ef54111ec6911fb5eabb344276a34102e3bff05b23ea09 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/users_accounts.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/users_accounts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/user.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/user-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 9
        echo "    <script type=\"text/javascript\">
        \$(() => {
            (new UserList('.tbody-menu')).getUserList().then(() => {
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

    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 40
        echo "    <h2 class=\"h2 text-dark\">Comptes utilisateurs</h2>
    <div class=\"row\">
        <div class=\"col-12 d-flex justify-content-md-start justify-content-center pr-0 pl-0\">
            <ol class=\"breadcrumb bg-transparent\" style=\"font-size: small\">
                <li class=\"breadcrumb-item\" aria-current=\"page\">
                    Activé (1)
                </li>
                <li class=\"breadcrumb-item\">
                    Désactivé (1)
                </li>
            </ol>
        </div>
    </div>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2\">
            <i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Activer
                    </span>
        </button>
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2\">
            <i class=\"fa fa-ban\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Désactiver
                    </span>
        </button>
        <a href=\"/creer-un-compte\" type=\"button\" class=\"btn btn-outline-primary\">
            <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Créer un compte
                    </span>
        </a>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped text-center\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th>
                            <input class=\"form-check-input ml-1 mt-n3\"
                                   type=\"checkbox\"/>
                        </th>
                        <th>Nom et prénom (s)</th>
                        <th>Adresse email</th>
                        <th>Numéro de téléphone</th>
                        <th>Rôle</th>
                        <th>Statut</th>
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

    }

    public function getTemplateName()
    {
        return "cms/users_accounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  126 => 39,  90 => 9,  83 => 8,  74 => 6,  70 => 5,  66 => 4,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/user.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/user-list.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        \$(() => {
            (new UserList('.tbody-menu')).getUserList().then(() => {
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
    <h2 class=\"h2 text-dark\">Comptes utilisateurs</h2>
    <div class=\"row\">
        <div class=\"col-12 d-flex justify-content-md-start justify-content-center pr-0 pl-0\">
            <ol class=\"breadcrumb bg-transparent\" style=\"font-size: small\">
                <li class=\"breadcrumb-item\" aria-current=\"page\">
                    Activé (1)
                </li>
                <li class=\"breadcrumb-item\">
                    Désactivé (1)
                </li>
            </ol>
        </div>
    </div>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2\">
            <i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Activer
                    </span>
        </button>
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2\">
            <i class=\"fa fa-ban\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Désactiver
                    </span>
        </button>
        <a href=\"/creer-un-compte\" type=\"button\" class=\"btn btn-outline-primary\">
            <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Créer un compte
                    </span>
        </a>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped text-center\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th>
                            <input class=\"form-check-input ml-1 mt-n3\"
                                   type=\"checkbox\"/>
                        </th>
                        <th>Nom et prénom (s)</th>
                        <th>Adresse email</th>
                        <th>Numéro de téléphone</th>
                        <th>Rôle</th>
                        <th>Statut</th>
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
{% endblock %}", "cms/users_accounts.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\users_accounts.html.twig");
    }
}
