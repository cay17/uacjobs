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

/* student/messoumissions.html.twig */
class __TwigTemplate_52e16ed9aa6422fb18b37a86bd5f7e3a2a97f01b7bc3bcacdfee8de46a91316e extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "student/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/messoumissions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/messoumissions.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/messoumissions.html.twig", 1);
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

        echo " Soumissions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "      <link rel=\"stylesheet\" href=\"css/profil.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

      <div class=\" py-5 container\">
            <section id=\"content\">
                  <h2 class=\"text-primary\">Mes soumissions</h2>
                  <table class=\"table table-responsive-sm bg-white\">
                        <thead class=\"bg-primary text-white text-center\">
                        <td>N°</td>
                        <td class=\"font-weight-bold\">Titre</td>
                        <td>Date de soumissions</td>
                        <td>Statut</td>
                        <td></td>
                        </thead>
                        <tbody class=\"text-center justify-content-center\">
                        <tr>
                              <td>1</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-primary\">Accepté <i class=\"fa fa-check-circle-o text-primary\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>2</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-warning\">En cours ...</td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-times\"></i>
                                          </button>
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>3</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-danger\">Refusé <i class=\"fa fa-times-circle-o\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>4</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-primary\">Accepté <i class=\"fa fa-check-circle-o text-primary\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>5</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-primary\">Accepté <i class=\"fa fa-check-circle-o text-primary\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>6</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-danger\">Refusé <i class=\"fa fa-times-circle-o\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>7</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-warning\">En cours ...</td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-times\"></i>
                                          </button>
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
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
        return "student/messoumissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 7,  100 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %} Soumissions{% endblock %}
{% block css %}
      <link rel=\"stylesheet\" href=\"css/profil.css\">
{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

      <div class=\" py-5 container\">
            <section id=\"content\">
                  <h2 class=\"text-primary\">Mes soumissions</h2>
                  <table class=\"table table-responsive-sm bg-white\">
                        <thead class=\"bg-primary text-white text-center\">
                        <td>N°</td>
                        <td class=\"font-weight-bold\">Titre</td>
                        <td>Date de soumissions</td>
                        <td>Statut</td>
                        <td></td>
                        </thead>
                        <tbody class=\"text-center justify-content-center\">
                        <tr>
                              <td>1</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-primary\">Accepté <i class=\"fa fa-check-circle-o text-primary\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>2</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-warning\">En cours ...</td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-times\"></i>
                                          </button>
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>3</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-danger\">Refusé <i class=\"fa fa-times-circle-o\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>4</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-primary\">Accepté <i class=\"fa fa-check-circle-o text-primary\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>5</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-primary\">Accepté <i class=\"fa fa-check-circle-o text-primary\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>6</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-danger\">Refusé <i class=\"fa fa-times-circle-o\"></i></td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>7</td>
                              <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                              <td>15/10/2020</td>
                              <td class=\"text-warning\">En cours ...</td>
                              <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-times\"></i>
                                          </button>
                                          <button class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </button>
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
{% endblock %}", "student/messoumissions.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\messoumissions.html.twig");
    }
}
