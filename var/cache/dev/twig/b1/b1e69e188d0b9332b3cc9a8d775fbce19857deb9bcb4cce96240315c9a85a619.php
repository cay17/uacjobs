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

/* cms/index.html.twig */
class __TwigTemplate_58e4564ef14aebddc953245fe61a6b95fd2f7037c5c5941ed162982c47ae1c41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'js_vendors' => [$this, 'block_js_vendors'],
            'css' => [$this, 'block_css'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/index.html.twig"));

        $this->parent = $this->loadTemplate("cms/base.html.twig", "cms/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/dist/chartist.min.js"), "html", null, true);
        echo "\"></script>
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cms/dist/chartist.min.css"), "html", null, true);
        echo "\"/>
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
        echo "    <script>
        \$(() => {
            new Chartist.Bar('.ct-chart', {
                labels: ['Jan', 'Fev', 'Mars', 'Avr', 'Mai', 'Juin', 'Jul', 'Aout', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [20, 60, 120, 200, 180, 20, 10]
            }, {
                distributeSeries: true,
                height: 300
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "     <div class=\"row\">
         <div class=\"col-lg-4 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-suitcase fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">104</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Opportunités disponibles</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class=\"col-lg-4 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-graduation-cap fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">10504</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Etudiants inscrits</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class=\"col-lg-4 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-handshake-o fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">10504</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Recruteurs inscrits</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class=\"row mt-5\">
         <div class=\"col-lg-6 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-newspaper-o fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">255</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Articles lus cette semaine</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class=\"col-lg-6 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-share-alt fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">360</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Partages</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class=\"row mt-5\">
         <div class=\"col-lg-8 h-100\">
             <div class=\"bg-white rounded shadow p-3 ct-chart\">
                 <h5 class=\"pl-3 font-weight-bold font-candara\">
                     Evolutions des recherches
                 </h5>

             </div>
         </div>

         <div class=\"col-lg-4 bg-white rounded shadow px-5 py-3 mt-3 mt-lg-0\">
             <div class=\"mb-4\">
                 <h5 class=\"font-weight-bold font-candara\">
                     Message
                 </h5>
             </div>
             <div class=\"table-responsive-sm\">
                 <table class=\"table\">
                     <tbody>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">John Doe</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr> <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
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
        return "cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 22,  138 => 21,  117 => 9,  107 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cms/base.html.twig' %}
{% block js_vendors %}
    <script type=\"text/javascript\" src=\"{{ asset('build/cms/dist/chartist.min.js') }}\"></script>
{% endblock %}
{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/cms/dist/chartist.min.css') }}\"/>
{% endblock %}
{% block js %}
    <script>
        \$(() => {
            new Chartist.Bar('.ct-chart', {
                labels: ['Jan', 'Fev', 'Mars', 'Avr', 'Mai', 'Juin', 'Jul', 'Aout', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [20, 60, 120, 200, 180, 20, 10]
            }, {
                distributeSeries: true,
                height: 300
            });
        });
    </script>
{% endblock %}
 {% block main %}
     <div class=\"row\">
         <div class=\"col-lg-4 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-suitcase fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">104</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Opportunités disponibles</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class=\"col-lg-4 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-graduation-cap fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">10504</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Etudiants inscrits</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class=\"col-lg-4 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-handshake-o fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">10504</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Recruteurs inscrits</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class=\"row mt-5\">
         <div class=\"col-lg-6 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-newspaper-o fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">255</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Articles lus cette semaine</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class=\"col-lg-6 pb-2\">
             <div class=\"card bg-white\">
                 <div class=\"card-body\">
                     <ul class=\"list-inline d-flex align-items-center justify-content-around\">
                         <li class=\"list-inline-item\">
                             <i class=\"fa fa-share-alt fa-3x text-primary\"
                                aria-hidden=\"true\"></i>
                         </li>
                         <li class=\"list-inline-item text-center\">
                             <h1 class=\"card-title text-primary font-candara\">360</h1>
                             <p class=\"card-text text-center text-uppercase text-primary font-weight-bold font-candara\">
                                 Partages</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class=\"row mt-5\">
         <div class=\"col-lg-8 h-100\">
             <div class=\"bg-white rounded shadow p-3 ct-chart\">
                 <h5 class=\"pl-3 font-weight-bold font-candara\">
                     Evolutions des recherches
                 </h5>

             </div>
         </div>

         <div class=\"col-lg-4 bg-white rounded shadow px-5 py-3 mt-3 mt-lg-0\">
             <div class=\"mb-4\">
                 <h5 class=\"font-weight-bold font-candara\">
                     Message
                 </h5>
             </div>
             <div class=\"table-responsive-sm\">
                 <table class=\"table\">
                     <tbody>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">John Doe</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr> <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     <tr>
                         <td class=\"font-weight-bold font-candara\">Jean-Pierre</td>
                         <td class=\" font-candara\">Je voudrais savoir si un conseiller emploi est disponible pour
                             discuter avec moi
                         </td>
                         <td>27/02/2020 à 17h02</td>
                     </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 {% endblock %}", "cms/index.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\index.html.twig");
    }
}
