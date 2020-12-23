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

/* student/rechercher.html.twig */
class __TwigTemplate_8dc7a9cd4894c262d25cbd0ea35ae574a76d74ccf476f158f931fa3bed2ced6e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/rechercher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/rechercher.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/rechercher.html.twig", 1);
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

        echo "Recherche";
        
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
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/profilitem.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        echo "<div class=\"container-fluid p-0 m-0\">

      <div class=\"\">
            <div class=\"px-md-5 px-3 pt-5 pb-2\" style=\"background-color: rgba(218,218,218,0.4)\">
                  <form class=\"row\">
                        <div class=\"col-12 col-md-5 input-group\">
                              <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                    <i class=\"fa fa-search text-black-50\"></i>
                              </div>
                              <input type=\"search\" class=\"form-control py-4 rounded-0 border-left-0\"
                                     placeholder=\"Mot clé,métiers,compétences\"/>
                        </div>
                        <div class=\"col-12 col-md-5 input-group mt-3 mt-md-0\">
                              <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                    <i class=\"fa fa-circle text-black-50\"></i>
                              </div>
                              <select class=\"custom-select py-4 rounded-0 border-left-0\">
                                    <option selected>Type d'opportunités</option>
                                    <option>Tout</option>
                                    <option>Emplois</option>
                                    <option>Stages</option>
                                    <option>Autres opportunités</option>
                              </select>
                        </div>
                        <div class=\"col-12 col-md-2 mt-3 mt-md-0\">
                              <button class=\"btn-block h-100 bg-secondary text-white py-2 py-md-0\"
                                      style=\"border: 1px solid #fe0000;\"><span class=\"text-uppercase\">Rechercher</span>
                              </button>
                        </div>
                  </form>
                  <div class=\"col-12 col-md-5 mt-2\">
                        <p class=\"text-black-50 font-italic\" style=\"font-size: small\">Exemples de mots-clés:
                              informatique, agriculture, recrutement, etc</p>
                  </div>
            </div>
      </div>
      <!-- End breadcrumbs-->


      <!-- Begin Event -->
      <div class=\"du-subpage-content container-fluid\">
            <div class=\"row\">

                  <!-- Begin choose us -->
                  <section class=\"col-12 py-5\">

                        <div class=\"container\">
                              <p class=\"text-black-50\">Aucun résultat. Réessayez avec d'aures mots-clés</p>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                            class=\"btn-default du-common-property bg-primary border-0\">
                                                            En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- End event -->


            </div><!-- /.du-event -->
      </div><!-- /.du-subpage content -->
      <!-- End Evnet -->


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 228,  358 => 215,  342 => 202,  326 => 189,  310 => 176,  294 => 163,  278 => 150,  262 => 137,  246 => 124,  230 => 111,  214 => 98,  198 => 85,  182 => 72,  166 => 59,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %}Recherche{% endblock %}
{% block css %}
      <link href=\"{{ asset('build/css/profilitem.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"container-fluid p-0 m-0\">

      <div class=\"\">
            <div class=\"px-md-5 px-3 pt-5 pb-2\" style=\"background-color: rgba(218,218,218,0.4)\">
                  <form class=\"row\">
                        <div class=\"col-12 col-md-5 input-group\">
                              <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                    <i class=\"fa fa-search text-black-50\"></i>
                              </div>
                              <input type=\"search\" class=\"form-control py-4 rounded-0 border-left-0\"
                                     placeholder=\"Mot clé,métiers,compétences\"/>
                        </div>
                        <div class=\"col-12 col-md-5 input-group mt-3 mt-md-0\">
                              <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                    <i class=\"fa fa-circle text-black-50\"></i>
                              </div>
                              <select class=\"custom-select py-4 rounded-0 border-left-0\">
                                    <option selected>Type d'opportunités</option>
                                    <option>Tout</option>
                                    <option>Emplois</option>
                                    <option>Stages</option>
                                    <option>Autres opportunités</option>
                              </select>
                        </div>
                        <div class=\"col-12 col-md-2 mt-3 mt-md-0\">
                              <button class=\"btn-block h-100 bg-secondary text-white py-2 py-md-0\"
                                      style=\"border: 1px solid #fe0000;\"><span class=\"text-uppercase\">Rechercher</span>
                              </button>
                        </div>
                  </form>
                  <div class=\"col-12 col-md-5 mt-2\">
                        <p class=\"text-black-50 font-italic\" style=\"font-size: small\">Exemples de mots-clés:
                              informatique, agriculture, recrutement, etc</p>
                  </div>
            </div>
      </div>
      <!-- End breadcrumbs-->


      <!-- Begin Event -->
      <div class=\"du-subpage-content container-fluid\">
            <div class=\"row\">

                  <!-- Begin choose us -->
                  <section class=\"col-12 py-5\">

                        <div class=\"container\">
                              <p class=\"text-black-50\">Aucun résultat. Réessayez avec d'aures mots-clés</p>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"{{ path('etu_offer') }}\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"href=\"{{ path('etu_offer') }}\"
                                                            class=\"btn-default du-common-property bg-primary border-0\">
                                                            En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"{{ path('etu_offer') }}\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"{{ path('etu_offer') }}\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"{{ path('etu_offer') }}\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"{{ path('etu_offer') }}\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                    <div class=\"du-news-item\">
                                          <div class=\"du-caption-box row\">
                                                <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                              class=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
                                                <div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
                                                      <div>
                                                            <h3>Recrutement d'un agronome à la FSA</h3>
                                                            <p class=\"text-justify\">Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.Including families, pupils and people from
                                                                  different walks of life have attended the ‘Fun For Cause’
                                                                  carnival
                                                                  organised by The Kindergarten Starters.</p>
                                                      </div>
                                                      <div class=\"d-flex justify-content-end\">
                                                            <a href=\"{{ path('etu_offer') }}\"
                                                               class=\"btn-default du-common-property bg-primary border-0\">
                                                                  En savoir plus
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- End event -->


            </div><!-- /.du-event -->
      </div><!-- /.du-subpage content -->
      <!-- End Evnet -->


</div>
{% endblock %}", "student/rechercher.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\rechercher.html.twig");
    }
}
