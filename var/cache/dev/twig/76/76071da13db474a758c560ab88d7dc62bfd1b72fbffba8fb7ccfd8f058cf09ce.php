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

/* cms/reply_to_message.html.twig */
class __TwigTemplate_079e4e2cb9fb43401f0d6227d31c10e6bc645d48895a7a3b942a00028362bf34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/reply_to_message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/reply_to_message.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/reply_to_message.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/summernote/dist/summernote-bs4.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/summernote/dist/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/api/api.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/js/class/message.js"), "html", null, true);
        echo "\">
    </script> <script type='text/javascript' src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-validation/dist/jquery.validate.js"), "html", null, true);
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
        \$(() => {
            \$('.js-summernote').summernote({
                placeholder: 'Écrivez votre message ici',
                tabsize: 2,
                height: 100
            });
        });
            (async function () {
                try {
                    const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/messages/'));
                    let currentMessage = await menuAPI.getItem(\$.cookie('edit_message_id'));
                    let r = currentMessage.receiptAt.split('T');
                    let date= r[0] + ' à ' + r[1].split('+')[0];
                    \$('.tbody-menu').append(' <tr id=\"' + currentMessage.id + '\"><td>'  + currentMessage.name + '</td><td>'  + currentMessage.message + '</td><td>'  + currentMessage.object + '</td><td>'  + date + '</td></tr>'
                    );
                } catch
                    (e) {
                    console.log(e);
                }
            }());
            \$('.new-response').validate({
                rules: {
                    editordata: {
                        required: true
                    }
                },
                messages: {
                    editordata: {
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


                    //console.log(data);
                    (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/messages/'));
                            const menuAPI2 = new Api((\$('body').data('apiDomainName') + '/api/messages'));
                            let currentMessage = await menuAPI.getItem(\$.cookie('edit_message_id'));
                            let data = {
                                    message : form['editordata'].value,
                                    receiptAt : \"2019-08-12 08:12:20\"
                            };
                            let out = await menuAPI2.post(data);
                            let data2 = {
                                id : currentMessage.id,
                                reponse : \"/api/messages/\" + out.id
                            };
                            out = await menuAPI.put(data2);
                            form.reset();
                            \$('.toast').remove('text-danger');
                            \$('.toast-header').remove('bg-danger');

                            \$('.toast').addClass('text-success');
                            \$('.toast-header').addClass('bg-primary');

                            \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Réponse enregistré.');
                            \$('.toast').toast('show');
                            window.location.pathname = '/articles';
                            console.log(out);

                        } catch (error) {
                            \$('.toast').remove('text-success');
                            \$('.toast-header').remove('bg-primary');

                            \$('.toast').addClass('text-danger');
                            \$('.toast-header').addClass('bg-danger');

                            \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Réponse non enregistré.');
                            \$('.toast').toast('show');
                        }
                    }());
                }
            });
            console.log('Le formulaire n\\'est pas activé');
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 113
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
    <h2 class=\"h2 text-dark summernote\">Répondre à</h2>
    <div class=\"row mt-3\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped text-center\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th colspan=\"2\">Message</th>
                        <th>Objet</th>
                        <th>Date et heure de réception</th>
                    </tr>
                    </thead>
                    <tbody class=\"tbody-menu\">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <form class=\"new-response\" novalidate=\"novalidate\">
        <div class=\"form-group\">
            <textarea name=\"editordata\" class=\"form-control js-summernote\"></textarea>
        </div>
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Envoyer
                    </span>
            </button>
            <a class=\"btn btn-outline-dark mr-2\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_messages");
        echo "\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Annuler
                    </span>
            </a>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/reply_to_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 156,  251 => 113,  241 => 112,  133 => 13,  123 => 12,  111 => 10,  107 => 9,  103 => 8,  99 => 7,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/vendor/summernote/dist/summernote-bs4.min.css') }}\"/>
{% endblock %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/summernote/dist/summernote-bs4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/api/api.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/js/class/message.js') }}\">
    </script> <script type='text/javascript' src=\"{{ asset(\"build/vendor/jquery-validation/dist/jquery.validate.js\") }}\"></script>
{% endblock %}
{% block js %}
    <script type=\"text/javascript\">
        \$(() => {
            \$('.js-summernote').summernote({
                placeholder: 'Écrivez votre message ici',
                tabsize: 2,
                height: 100
            });
        });
            (async function () {
                try {
                    const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/messages/'));
                    let currentMessage = await menuAPI.getItem(\$.cookie('edit_message_id'));
                    let r = currentMessage.receiptAt.split('T');
                    let date= r[0] + ' à ' + r[1].split('+')[0];
                    \$('.tbody-menu').append(' <tr id=\"' + currentMessage.id + '\"><td>'  + currentMessage.name + '</td><td>'  + currentMessage.message + '</td><td>'  + currentMessage.object + '</td><td>'  + date + '</td></tr>'
                    );
                } catch
                    (e) {
                    console.log(e);
                }
            }());
            \$('.new-response').validate({
                rules: {
                    editordata: {
                        required: true
                    }
                },
                messages: {
                    editordata: {
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


                    //console.log(data);
                    (async function () {
                        try {
                            const menuAPI = new Api((\$('body').data('apiDomainName') + '/api/messages/'));
                            const menuAPI2 = new Api((\$('body').data('apiDomainName') + '/api/messages'));
                            let currentMessage = await menuAPI.getItem(\$.cookie('edit_message_id'));
                            let data = {
                                    message : form['editordata'].value,
                                    receiptAt : \"2019-08-12 08:12:20\"
                            };
                            let out = await menuAPI2.post(data);
                            let data2 = {
                                id : currentMessage.id,
                                reponse : \"/api/messages/\" + out.id
                            };
                            out = await menuAPI.put(data2);
                            form.reset();
                            \$('.toast').remove('text-danger');
                            \$('.toast-header').remove('bg-danger');

                            \$('.toast').addClass('text-success');
                            \$('.toast-header').addClass('bg-primary');

                            \$('.toast .toast-body').html('<i class=\"fa fa-check-circle\"></i> Réponse enregistré.');
                            \$('.toast').toast('show');
                            window.location.pathname = '/articles';
                            console.log(out);

                        } catch (error) {
                            \$('.toast').remove('text-success');
                            \$('.toast-header').remove('bg-primary');

                            \$('.toast').addClass('text-danger');
                            \$('.toast-header').addClass('bg-danger');

                            \$('.toast .toast-body').html('<i class=\"fa fa-warning\"></i> Réponse non enregistré.');
                            \$('.toast').toast('show');
                        }
                    }());
                }
            });
            console.log('Le formulaire n\\'est pas activé');
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
    <h2 class=\"h2 text-dark summernote\">Répondre à</h2>
    <div class=\"row mt-3\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped text-center\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th colspan=\"2\">Message</th>
                        <th>Objet</th>
                        <th>Date et heure de réception</th>
                    </tr>
                    </thead>
                    <tbody class=\"tbody-menu\">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <form class=\"new-response\" novalidate=\"novalidate\">
        <div class=\"form-group\">
            <textarea name=\"editordata\" class=\"form-control js-summernote\"></textarea>
        </div>
        <div class=\"btn-group btn-group-sm d-flex justify-content-between\" role=\"group\">
            <button type=\"submit\" class=\"btn btn-outline-primary mr-2\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Envoyer
                    </span>
            </button>
            <a class=\"btn btn-outline-dark mr-2\" href=\"{{ path('cms_messages') }}\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">
                        Annuler
                    </span>
            </a>
        </div>
    </form>
{% endblock %}", "cms/reply_to_message.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\reply_to_message.html.twig");
    }
}
