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

/* cms/add_sub_menu.html.twig */
class __TwigTemplate_efe633f593ef4fb171ea93b3cbf49bdf87a6a4aaac89df3fd8b4becb68527abd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/add_sub_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/add_sub_menu.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/add_sub_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 3, $this->source); })()))) ? (twig_test_empty((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 3, $this->source); })()))) : (("Menus - " . (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 3, $this->source); })())))), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link rel=\"stylesheet\"
          href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 10
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-validation/dist/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/sub-menu.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/sub-menu-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 18
        echo "    <script type=\"text/javascript\">
        \$(() => {
            \$('input[name=parent]').val(\$.cookie('add_sub_menu_parent'));
            (new SubMenuList('.tbody-menu', \$.cookie('add_sub_menu_parent'), \$.cookie('add_sub_menu_parent_id'))).getSubMenuList().then(() => {
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/menus/')),
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
    <script type=\"text/javascript\">
        \$(() => {
            \$('.new-sub-menu').validate({
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
                    if (parseInt(form['id'].value)) {
                        let data = {
                            id: form['id'].value,
                            title: form['title'].value,
                        };
                        \$('input[name=id]').val('');
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/menus/'));
                                let out = await menu.put(data);
                                window.location.reload();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Menu enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Menu non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    } else {
                        let data = {
                            title: form['title'].value,
                            parent: form['parent'].value
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/menus'));
                                let out = await menu.post(data);
                                window.location.reload();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Menu enregistré.');
                                \$('.toast').toast('show');

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

                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 152
        echo "    <div class=\"d-flex justify-content-between align-items-center\">
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">";
        // line 153
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 153, $this->source); })()))) ? (twig_test_empty((isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 153, $this->source); })()))) : (("Menus - " . (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 153, $this->source); })())))), "html", null, true);
        echo " / Ajouter un sous menus</h2>
        <a class=\"btn btn-link\" href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_menus");
        echo "\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form class=\"new-sub-menu\">
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"title\" class=\"form-control\" placeholder=\"Titre du sous menu\" name=\"title\"
                   required autofocus>
            <label for=\"title\">Titre du sous menu</label>
        </div>
        <input type=\"hidden\" name=\"parent\">
        <input type=\"hidden\" name=\"id\">
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Ajouter
                    </span>
            </button>
        </div>
    </form>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2 js-delete-checked\">
            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Supprimer
                    </span>
        </button>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped text-center\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th>
                            <label>
                                <input class=\"form-check-input ml-1 mt-n3 js-checked-all\"
                                       type=\"checkbox\"/>
                            </label>
                        </th>
                        <th>Titre</th>
                        <th>Date de rédaction</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class=\"tbody-menu\">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/add_sub_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 154,  315 => 153,  312 => 152,  302 => 151,  160 => 18,  150 => 17,  138 => 15,  134 => 14,  130 => 13,  126 => 12,  120 => 10,  110 => 9,  98 => 7,  95 => 6,  85 => 5,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block title %}
    {{ slug is empty ? : 'Menus - '~slug }}
{% endblock %}
{% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('build/vendors/bootstrap-4.5.2/bootstrap-4.5.2-examples/floating-labels/floating-labels.css') }}\"/>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendors/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type='text/javascript'
            src=\"{{ asset(\"build/vendors/jquery-validation/dist/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/sub-menu.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/sub-menu-list.js') }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        \$(() => {
            \$('input[name=parent]').val(\$.cookie('add_sub_menu_parent'));
            (new SubMenuList('.tbody-menu', \$.cookie('add_sub_menu_parent'), \$.cookie('add_sub_menu_parent_id'))).getSubMenuList().then(() => {
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
                            let api = new Api((\$('body').data('apiDomainName') + '/api/menus/')),
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
    <script type=\"text/javascript\">
        \$(() => {
            \$('.new-sub-menu').validate({
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
                    if (parseInt(form['id'].value)) {
                        let data = {
                            id: form['id'].value,
                            title: form['title'].value,
                        };
                        \$('input[name=id]').val('');
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/menus/'));
                                let out = await menu.put(data);
                                window.location.reload();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Menu enregistré.');
                                \$('.toast').toast('show');

                            } catch (error) {
                                \$('.toast').remove('text-success');
                                \$('.toast-header').remove('bg-primary');

                                \$('.toast').addClass('text-danger');
                                \$('.toast-header').addClass('bg-danger');

                                \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Menu non enregistré.');
                                \$('.toast').toast('show');
                            }
                        }());
                    } else {
                        let data = {
                            title: form['title'].value,
                            parent: form['parent'].value
                        };
                        console.log(data);
                        (async function () {
                            try {
                                let menu = new Api((\$('body').data('apiDomainName') + '/api/menus'));
                                let out = await menu.post(data);
                                window.location.reload();
                                \$('.toast').remove('text-danger');
                                \$('.toast-header').remove('bg-danger');

                                \$('.toast').addClass('text-success');
                                \$('.toast-header').addClass('bg-primary');

                                \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Menu enregistré.');
                                \$('.toast').toast('show');

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

                }
            });
        });
    </script>
{% endblock %}
{% block main %}
    <div class=\"d-flex justify-content-between align-items-center\">
        <h2 class=\"h2 text-dark\" style=\"font-size: x-large\">{{ slug is empty ? : 'Menus - '~slug }} / Ajouter un sous menus</h2>
        <a class=\"btn btn-link\" href=\"{{ path('cms_menus') }}\">
            <i class=\"fa fa-chevron-circle-left\"></i>
            <span class=\"d-none d-lg-inline\">Retour</span>
        </a>
    </div>
    <form class=\"new-sub-menu\">
        <div class=\"form-label-group\">
            <input type=\"text\" id=\"title\" class=\"form-control\" placeholder=\"Titre du sous menu\" name=\"title\"
                   required autofocus>
            <label for=\"title\">Titre du sous menu</label>
        </div>
        <input type=\"hidden\" name=\"parent\">
        <input type=\"hidden\" name=\"id\">
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Ajouter
                    </span>
            </button>
        </div>
    </form>
    <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
        <button type=\"button\" class=\"btn btn-outline-primary disabled mr-2 js-delete-checked\">
            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-md-inline-block\">
                        Supprimer
                    </span>
        </button>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped text-center\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th>
                            <label>
                                <input class=\"form-check-input ml-1 mt-n3 js-checked-all\"
                                       type=\"checkbox\"/>
                            </label>
                        </th>
                        <th>Titre</th>
                        <th>Date de rédaction</th>
                        <th>Slug</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class=\"tbody-menu\">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "cms/add_sub_menu.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\add_sub_menu.html.twig");
    }
}
