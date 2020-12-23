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

/* recruteur/rechercheprofil.html.twig */
class __TwigTemplate_1ec4f84bb4cb76b529413140691a558828562d6d12d4901d175f17769238483c extends Template
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
        return "recruteur/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/rechercheprofil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/rechercheprofil.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/rechercheprofil.html.twig", 1);
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
                        <div class=\"col-12 col-md-10 input-group\">
                              <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                    <i class=\"fa fa-search text-black-50\"></i>
                              </div>
                              <input type=\"search\" class=\"form-control py-4 rounded-0 border-left-0\"
                                     placeholder=\"Mot clé, métiers, compétences\"/>
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
                              <div class=\"container\">
                                    <div class=\"row\">
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                                     style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Sarah Dossou</h6>
                                                                  <p class=\"designation\">Informaticien</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                                     style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Bathelemy Bessan</h6>
                                                                  <p class=\"designation\">Designer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                                     style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Razack Metobo</h6>
                                                                  <p class=\"designation\">Développer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                                     style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Nicolas Gbegnon</h6>
                                                                  <p class=\"designation\">Analyste</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>

                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                                     style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Sarah Dossou</h6>
                                                                  <p class=\"designation\">Informaticien</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                                     style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Bathelemy Bessan</h6>
                                                                  <p class=\"designation\">Designer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                                     style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Razack Metobo</h6>
                                                                  <p class=\"designation\">Développer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                                     style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_cv");
        echo "\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Nicolas Gbegnon</h6>
                                                                  <p class=\"designation\">Analyste</p>
                                                            </div>
                                                      </a>
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
        return "recruteur/rechercheprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 213,  353 => 204,  337 => 191,  325 => 182,  309 => 169,  297 => 160,  281 => 147,  269 => 138,  253 => 125,  241 => 116,  225 => 103,  213 => 94,  197 => 81,  185 => 72,  169 => 59,  157 => 50,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block title %}Recherche{% endblock %}
{% block css %}
      <link href=\"{{ asset('build/css/profilitem.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"container-fluid p-0 m-0\">

      <div class=\"\">
            <div class=\"px-md-5 px-3 pt-5 pb-2\" style=\"background-color: rgba(218,218,218,0.4)\">
                  <form class=\"row\">
                        <div class=\"col-12 col-md-10 input-group\">
                              <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                    <i class=\"fa fa-search text-black-50\"></i>
                              </div>
                              <input type=\"search\" class=\"form-control py-4 rounded-0 border-left-0\"
                                     placeholder=\"Mot clé, métiers, compétences\"/>
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
                              <div class=\"container\">
                                    <div class=\"row\">
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                                     style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Sarah Dossou</h6>
                                                                  <p class=\"designation\">Informaticien</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                                     style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Bathelemy Bessan</h6>
                                                                  <p class=\"designation\">Designer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                                     style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Razack Metobo</h6>
                                                                  <p class=\"designation\">Développer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                                     style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Nicolas Gbegnon</h6>
                                                                  <p class=\"designation\">Analyste</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>

                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                                     style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Sarah Dossou</h6>
                                                                  <p class=\"designation\">Informaticien</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                                     style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Bathelemy Bessan</h6>
                                                                  <p class=\"designation\">Designer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                                     style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Razack Metobo</h6>
                                                                  <p class=\"designation\">Développer</p>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                          <!-- Single Advisor-->
                                          <div class=\"col-12 col-sm-6 col-lg-3\">
                                                <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                                     style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                                      <!-- Team Thumb-->
                                                      <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                                      class=\"img-fluid\" width=\"250\">
                                                            <!-- Social Info-->
                                                            <div class=\"social-info\"><a href=\"#\"><i
                                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                                    class=\"fa fa-linkedin\"></i></a></div>
                                                      </div>
                                                      <!-- Team Details-->
                                                      <a href=\"{{ path('etu_cv') }}\" class=\"text-black\">
                                                            <div class=\"single_advisor_details_info\">
                                                                  <h6>Nicolas Gbegnon</h6>
                                                                  <p class=\"designation\">Analyste</p>
                                                            </div>
                                                      </a>
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
{% endblock %}", "recruteur/rechercheprofil.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\rechercheprofil.html.twig");
    }
}
