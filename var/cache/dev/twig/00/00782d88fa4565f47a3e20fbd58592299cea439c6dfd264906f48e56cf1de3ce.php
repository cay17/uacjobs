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

/* recruteur/mesoffres.html.twig */
class __TwigTemplate_d096853764c2a3079931581bcd11025be182d3d0f200e554972052e5ff31b601 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "recruteur/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/mesoffres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/mesoffres.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/mesoffres.html.twig", 1);
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

        echo "Opportunites";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

      <div class=\" py-5 container\">
            <section id=\"content\">
                  <h2 class=\"text-primary\">Mes opportunités</h2>
                  <table class=\"table table-responsive-sm\">
                        <thead class=\"bg-primary text-white text-center\">
                        <td>N°</td>
                        <td class=\"font-weight-bold\">Titre</td>
                        <td>Date de création</td>
                        <td></td>
                        </thead>
                        <tbody class=\"text-center justify-content-center\">
                        <tr>
                              <td>1</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_soumissions");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>2</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_soumissions");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>3</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_soumissions");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>4</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_soumissions");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>5</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_soumissions");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>6</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_soumissions");
        echo "\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        </tbody>
                  </table>
                  <div class=\"container\">
                        <ul class=\"pagination d-flex justify-content-between\">
                              <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
                              <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                              <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
                        </ul>
                  </div>
            </section>
      </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/mesoffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 114,  246 => 112,  241 => 110,  225 => 97,  220 => 95,  215 => 93,  199 => 80,  194 => 78,  189 => 76,  173 => 63,  168 => 61,  163 => 59,  147 => 46,  142 => 44,  137 => 42,  121 => 29,  116 => 27,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block title %}Opportunites{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

      <div class=\" py-5 container\">
            <section id=\"content\">
                  <h2 class=\"text-primary\">Mes opportunités</h2>
                  <table class=\"table table-responsive-sm\">
                        <thead class=\"bg-primary text-white text-center\">
                        <td>N°</td>
                        <td class=\"font-weight-bold\">Titre</td>
                        <td>Date de création</td>
                        <td></td>
                        </thead>
                        <tbody class=\"text-center justify-content-center\">
                        <tr>
                              <td>1</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"{{ path('recr_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_create_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_soumissions') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>2</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"{{ path('recr_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_create_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_soumissions') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>3</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"{{ path('recr_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_create_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_soumissions') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>4</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"{{ path('recr_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_create_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_soumissions') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>5</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"{{ path('recr_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_create_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_soumissions') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>6</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                             <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash-o\"></i>
                                          </button>
                                          <a href=\"{{ path('recr_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_create_offer') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"{{ path('recr_soumissions') }}\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                                          </a>
                                    </div>
                              </td>
                        </tr>
                        </tbody>
                  </table>
                  <div class=\"container\">
                        <ul class=\"pagination d-flex justify-content-between\">
                              <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
                              <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                              <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
                        </ul>
                  </div>
            </section>
      </div>
</div>
{% endblock %}", "recruteur/mesoffres.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\mesoffres.html.twig");
    }
}
