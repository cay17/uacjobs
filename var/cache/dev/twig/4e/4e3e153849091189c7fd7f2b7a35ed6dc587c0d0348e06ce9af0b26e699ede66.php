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

/* cms/articles.html.twig */
class __TwigTemplate_f7fd62923a9ef4306c5a1bb99e817568a0b801b040b48b78142ddf36a194fc55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/articles.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/articles.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/article.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/article-list.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 10
        echo "    <script type=\"text/javascript\">
        \$(() => {
            (new ArticleList('.tbody-menu')).getArticleList().then(() => {

                \$('#actualites').change(function (){
                    \$('.tbody-menu tr').not(\$('.actualites')).toggle('d-none')
                });
                \$('#publications').change(function (){\$('.tbody-menu tr').not(\$('.publications')).toggle('d-none')});
                \$('#trucs').change(function (){\$('.tbody-menu tr').not(\$('.trucs-et-astuces')).toggle('d-none')});
                \$('#tout').change(function (){\$('.tbody-menu tr').removeClass('d-none')});
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/articles/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('slug')).remove();
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

    // line 47
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "    <h2 class=\"h2 text-dark mb-3\">Articles</h2>
    <div class=\"btn-group d-flex justify-content-between\">
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"actualites\"/><label for=\"actualites\" class=\"ml-1\">Actualités</label>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"publications\"/><label for=\"publications\" class=\"ml-1\">Publications</label>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"trucs\"/><label for=\"trucs\" class=\"ml-1\">Trucs et astuces</label>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"tout\"/><label for=\"tout\" class=\"ml-1\">Tout</label>
        </div>
    </div>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2 js-delete-checked\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Supprimer
                    </span>
        </button>
        <a type=\"button\" class=\"btn btn-outline-primary\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_add_article");
        echo "\">
            <i class=\"fa fa-pencil-square-o\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Écrire un article
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
                            <input class=\"form-check-input ml-1 mt-n3 js-checked-all\"
                                   type=\"checkbox\"/>
                        </th>
                        <th>Titre</th>
                        <th>Date de rédaction</th>
                        <th>Slug</th>
                        <th>Type</th>
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
        return "cms/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 70,  162 => 48,  152 => 47,  106 => 10,  96 => 9,  83 => 6,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/article.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/article-list.js') }}\"></script>

{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        \$(() => {
            (new ArticleList('.tbody-menu')).getArticleList().then(() => {

                \$('#actualites').change(function (){
                    \$('.tbody-menu tr').not(\$('.actualites')).toggle('d-none')
                });
                \$('#publications').change(function (){\$('.tbody-menu tr').not(\$('.publications')).toggle('d-none')});
                \$('#trucs').change(function (){\$('.tbody-menu tr').not(\$('.trucs-et-astuces')).toggle('d-none')});
                \$('#tout').change(function (){\$('.tbody-menu tr').removeClass('d-none')});
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/articles/')),
                                selector = '.js-checkbox:checked';
                            await api.delete(\$(\$(selector)[index]).data('id'));
                            \$('#' + \$(\$(selector)[index]).data('slug')).remove();
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
    <h2 class=\"h2 text-dark mb-3\">Articles</h2>
    <div class=\"btn-group d-flex justify-content-between\">
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"actualites\"/><label for=\"actualites\" class=\"ml-1\">Actualités</label>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"publications\"/><label for=\"publications\" class=\"ml-1\">Publications</label>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"trucs\"/><label for=\"trucs\" class=\"ml-1\">Trucs et astuces</label>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" class=\"custom-checkbox\" id=\"tout\"/><label for=\"tout\" class=\"ml-1\">Tout</label>
        </div>
    </div>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2 js-delete-checked\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Supprimer
                    </span>
        </button>
        <a type=\"button\" class=\"btn btn-outline-primary\" href=\"{{ path('cms_add_article') }}\">
            <i class=\"fa fa-pencil-square-o\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Écrire un article
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
                            <input class=\"form-check-input ml-1 mt-n3 js-checked-all\"
                                   type=\"checkbox\"/>
                        </th>
                        <th>Titre</th>
                        <th>Date de rédaction</th>
                        <th>Slug</th>
                        <th>Type</th>
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
{% endblock %}", "cms/articles.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\articles.html.twig");
    }
}
