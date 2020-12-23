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

/* student/emplois.html.twig */
class __TwigTemplate_a19bf4fbaf605d7e640d504ae7d4ecc04ce7e4b832b364c55c12f777492314fe extends Template
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
        return "student/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/emplois.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/emplois.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/emplois.html.twig", 1);
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

        echo "Opportunités";
        
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
        echo "<div class=\"container-fluid p-0 m-0\">

      <!-- Begin breadcrumbs-->
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;background-color: rgba(218,218,218,0.4)\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Opportunités</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- End breadcrumbs-->
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

      <!-- Begin Event -->
      <div class=\"du-subpage-content\">
            <div class=\"du-blog\">

                  <!-- Begin choose us -->
                  <section class=\"blog ptb-50\">

                        <div class=\"container\">
                              <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
                                          <h2 class=\"text-secondary\">Offres d'emplois</h2>
                                          <p>Découvrez toutes les opportunités d'emplois.</p>

                                    </div>
                              </div>

                              <section class=\"du-all-blog-post\">

                                    <div class=\"row\">

                                          <div class=\"col-lg-12 col-md-4 col-sm-4\">
                                                <div class=\"du-news-item\">
                                                      <div class=\"du-caption-box row\">
                                                            <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                                    class=\"mt-2 h-100\" src=\"";
        // line 82
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
        // line 95
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
        // line 108
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
        // line 121
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
        // line 134
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
        // line 147
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
        // line 160
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
        // line 173
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
        // line 186
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
        // line 199
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
        // line 212
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
        // line 225
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
        // line 238
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
        // line 251
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


                                          <div class=\"col-md-12\">
                                                <div class=\"blog-page-pagination justify-content-center d-flex\">
                                                      <!-- Pagination Small -->
                                                      <ul class=\"pagination pagination-sm\">
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">«</a>
                                                            </li>
                                                            <li class=\"active page-item\"><a href=\"#\"
                                                                                            class=\"page-link\">1</a></li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a>
                                                            </li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a>
                                                            </li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a>
                                                            </li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a>
                                                            </li>
                                                            <li class=\"disabled page-item\"><a href=\"#\"
                                                                                              class=\"page-link\">»</a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </div>


                                    </div>

                              </section>

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
        return "student/emplois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 251,  363 => 238,  347 => 225,  331 => 212,  315 => 199,  299 => 186,  283 => 173,  267 => 160,  251 => 147,  235 => 134,  219 => 121,  203 => 108,  187 => 95,  171 => 82,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %}Opportunités{%endblock%}
{% block body %}
<div class=\"container-fluid p-0 m-0\">

      <!-- Begin breadcrumbs-->
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"{{asset('build/img/blog3.jpg')}}\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;background-color: rgba(218,218,218,0.4)\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Opportunités</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- End breadcrumbs-->
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

      <!-- Begin Event -->
      <div class=\"du-subpage-content\">
            <div class=\"du-blog\">

                  <!-- Begin choose us -->
                  <section class=\"blog ptb-50\">

                        <div class=\"container\">
                              <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
                                          <h2 class=\"text-secondary\">Offres d'emplois</h2>
                                          <p>Découvrez toutes les opportunités d'emplois.</p>

                                    </div>
                              </div>

                              <section class=\"du-all-blog-post\">

                                    <div class=\"row\">

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


                                          <div class=\"col-md-12\">
                                                <div class=\"blog-page-pagination justify-content-center d-flex\">
                                                      <!-- Pagination Small -->
                                                      <ul class=\"pagination pagination-sm\">
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">«</a>
                                                            </li>
                                                            <li class=\"active page-item\"><a href=\"#\"
                                                                                            class=\"page-link\">1</a></li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a>
                                                            </li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a>
                                                            </li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a>
                                                            </li>
                                                            <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a>
                                                            </li>
                                                            <li class=\"disabled page-item\"><a href=\"#\"
                                                                                              class=\"page-link\">»</a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </div>


                                    </div>

                              </section>

                        </div>
                  </section>
                  <!-- End event -->


            </div><!-- /.du-event -->
      </div><!-- /.du-subpage content -->
      <!-- End Evnet -->


</div>
{%endblock%}", "student/emplois.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\emplois.html.twig");
    }
}
