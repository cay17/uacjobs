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

/* front/index.html.twig */
class __TwigTemplate_6a47856db7584d16404e51752febb03dcb90eb7cfab791e45733bb18eac96509 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/index.html.twig", 1);
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

        echo "Acceuil ";
        
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
        echo "<div class=\"du-banner-area\">

      <div class=\"du-featured-photo bg-dark position-absolute w-100\"
           style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/et.jpg"), "html", null, true);
        echo "');background-repeat: no-repeat;background-size: cover;height: 580px;z-index: 0\">
            <div class=\"du-featured-text d-flex justify-content-center h-100\" style=\"background-color: rgba(0,0,0,0.4)\">
                  <!--welcome-message-->
                  <header class=\"container mt-lg-5\">
                        <h1 class=\"text-white text-center mb-4\">Rechercher parmi les opportunités disponibles</h1>
                        <div class=\"\">
                              <div class=\"px-md-5 px-3 pt-5 pb-5\" style=\"background-color: rgba(218,218,218,0.4)\">
                                    <form class=\"row\">
                                          <div class=\"col-12 col-lg-5 input-group\">
                                                <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                                      <i class=\"fa fa-search text-black-50\"></i>
                                                </div>
                                                <input type=\"search\" class=\"form-control py-4 rounded-0 border-0 h-100\"
                                                       placeholder=\"Mot clé,métiers,compétences\"/>
                                          </div>
                                          <div class=\"col-12 col-lg-5 mt-3 mt-lg-0\">
                                                <div class=\"input-group h-100 mb-3\">
                                                      <div class=\"input-group-prepend d-flex align-items-center p-3 bg-white\">
                                                            <i class=\"fa fa-circle text-black-50\"></i>
                                                      </div>
                                                      <select class=\"custom-select h-100 border-0 rounded-0\" id=\"menu\" name=\"menu\">
                                                            <option value=\"actualites\">Actualités</option>
                                                            <option value=\"publications\">Publications</option>
                                                            <option value=\"trucs-et-astuces\">Trucs et astuces</option>
                                                      </select>
                                                </div>
                                          </div>
                                          <div class=\"col-12 col-lg-2 mt-3 mt-lg-0\">
                                                <button class=\"btn-block h-100 bg-secondary text-white py-2 py-md-0 border-0\"
                                                        style=\"border: 1px solid #fe0000;\"><span class=\"text-uppercase\">Rechercher</span>
                                                </button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </header>
                  <!--welcome-message end-->
            </div>
      </div>

</div>
<div class=\"clear\"></div>


<div class=\"dream-university\">


      <!--Begin feature-->
      <div class=\"du-feature bg-white mt-custom\" style=\"z-index: 999\">
            <div class=\"container\">
                  <div class=\"row\">

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-feature-box maxheight wow fadeIn bg-primary border-0\">
                                    <div class=\"badge bg-custom text-white\"><i class=\"fa fa-suitcase fa-3x\"></i></div>
                                    <div class=\"du-caption-box\">
                                          <div class=\"du-caption\">
                                                <p class=\"title text-white\">Offres d'emplois</p>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4 wow fadeIn\" data-wow-delay=\"0.1s\">
                              <div class=\"du-feature-box maxheight bg-yellow border-0\">
                                    <div class=\"badge text-white bg-custom\"><i class=\"fa fa-university fa-2x\"></i></div>
                                    <div class=\"du-caption-box\">
                                          <div class=\"du-caption\">
                                                <p class=\"title text-white\">offres de stages</p>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4 wow fadeIn\" data-wow-delay=\"0.2s\">
                              <div class=\"du-feature-box maxheight bg-secondary border-0\">
                                    <div class=\"badge bg-custom\">
                                          <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_icon3.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"du-caption-box\">
                                          <div class=\"du-caption\">
                                                <p class=\"title text-white\">opportunités professionnelles</p>
                                          </div>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!-- End feature -->


      <div class=\"for-students p-0 pt-5\">
            <div class=\"container\">
                  <h1 class=\"center mb-4\">actualités:</h1>

                  <div class=\"row\">

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-faculty-item wow fadeInLeft\">
                                    <div class=\"du-caption-box bg-white p-4\">
                                          <div class=\"du-caption text-right\">
                                                <h3 class=\"text-left text-dark\">Rentrée Académique</h3>
                                                <p class=\"mb-0 text-left\" style=\"font-size: medium\">Lorem ipsum dolor
                                                      sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut
                                                      neque purus, sollic alitudin non ante ac, malesuada. condimentum
                                                      libero.</p>
                                                <div class=\"text-right mb-4\">
                                                      <span class=\"font-weight-bold text-primary\">9 Nov 2020, 17h20</span>
                                                </div>
                                                <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                   class=\"ml-auto du-common-property border-0 text-secondary\"><u>Lire
                                                      plus</u></a>
                                          </div>
                                    </div>
                                    <figure style=\"height:200px\" class=\"overflow-hidden\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </figure>
                              </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-faculty-item wow fadeInLeft\">
                                    <div class=\"du-caption-box bg-white p-4\">
                                          <div class=\"du-caption text-right\">
                                                <h3 class=\"text-left text-dark\">Rentrée Académique</h3>
                                                <p class=\"mb-0 text-left\" style=\"font-size: medium\">Lorem ipsum dolor
                                                      sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut
                                                      neque purus, sollic alitudin non ante ac, malesuada. condimentum
                                                      libero.</p>
                                                <div class=\"text-right mb-4\">
                                                      <span class=\"font-weight-bold text-primary\">9 Nov 2020, 17h20</span>
                                                </div>
                                                <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                   class=\"ml-auto du-common-property border-0 text-secondary\"><u>Lire
                                                      plus</u></a>
                                          </div>
                                    </div>
                                    <figure style=\"height:200px\" class=\"overflow-hidden\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/pharmecy.jpg"), "html", null, true);
        echo "\"
                                                                                              alt=\"\">
                                    </figure>
                              </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-faculty-item wow fadeInLeft\">
                                    <div class=\"du-caption-box bg-white p-4\">
                                          <div class=\"du-caption text-right\">
                                                <h3 class=\"text-left text-dark\">Rentrée Académique</h3>
                                                <p class=\"mb-0 text-left\" style=\"font-size: medium\">Lorem ipsum dolor
                                                      sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut
                                                      neque purus, sollic alitudin non ante ac, malesuada. condimentum
                                                      libero.</p>
                                                <div class=\"text-right mb-4\">
                                                      <span class=\"font-weight-bold text-primary\">9 Nov 2020, 17h20</span>
                                                </div>
                                                <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                   class=\"ml-auto du-common-property border-0 text-secondary\"><u>Lire
                                                      plus</u></a>
                                          </div>
                                    </div>
                                    <figure style=\"height:200px\" class=\"overflow-hidden\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                                                                              alt=\"\">
                                    </figure>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!--Begin our faculty-->
      <div class=\"our-faculty m-0 p-0 pt-5\">
            <div class=\"container\">
                  <h1 class=\"center mb-4\">opportunités:</h1>


                  <div class=\"row\">

                        <div class=\"col-lg-12 col-md-4 col-sm-4\">
                              <div class=\"du-news-item\">
                                    <div class=\"du-caption-box row\">
                                          <figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
                                                  class=\"mt-2 h-100\" src=\"";
        // line 187
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
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
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
        // line 213
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
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
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
        // line 239
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
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
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
        // line 265
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
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
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
        // line 291
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
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
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
        // line 317
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
        // line 330
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
        echo "\"
                                                              class=\"btn-default du-common-property bg-primary border-0\">
                                                            En savoir plus
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>


                        <div class=\"ml-auto mb-5\">
                              <a href=\"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emplois");
        echo "\" class=\"btn rounded-0 text-white bg-secondary\">Voir plus</a>
                        </div>
                  </div>
            </div>
      </div>
      <!--End our faculty-->

      <!--Begin for student -->
      <!--End for student-->


      <!--Begin news -->
      <div class=\"du-news bg-primary\">
            <div class=\"container\">

                  <div class=\"row\">

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-caption-box bg-transparent\">
                                    <div class=\"text-center\">
                                          <span class=\"display-4 font-weight-bold\">25102</span>
                                          <p class=\"h3\">Opportunités</p>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-caption-box bg-transparent\">
                                    <div class=\"text-center\">
                                          <span class=\"display-4 font-weight-bold\">65102</span>
                                          <p class=\"h3\">Utilisateurs</p>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-caption-box bg-transparent\">
                                    <div class=\"text-center\">
                                          <span class=\"display-4 font-weight-bold\">2502</span>
                                          <p class=\"h3\">Partenaires</p>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!--End news-->


      <!--Begin scholarship -->
      <div class=\"du-scholarship\">
            <div class=\"container\">
                  <h1 class=\"center\">Partenaires:</h1>

                  <p class=\"center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque
                        ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>

                  <div class=\"row\">

                        <div class=\"col-lg-6 col-md-4 col-sm-4\">
                              <div class=\"du-scholarship-item wow fadeInLeft\">
                                    <figure><img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo1.png"), "html", null, true);
        echo "\" width=\"100%\" alt=\"\"></figure>
                              </div>
                        </div>

                        <div class=\"col-lg-6 col-md-4 col-sm-4\">
                              <div class=\"du-scholarship-item wow fadeInLeft\">
                                    <figure><img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" height=\"250\" alt=\"\"></figure>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!--End scholarship-->


      <!--Begin newsletter -->
      <div class=\"du-newsletter\">
            <div class=\"container\">
                  <h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
                  <p class=\"wow fadeInUp\">Afin de ne rater aucune de nos dernières actualités </p>
                  <div class=\"row\">
                        <div class=\"col-lg-12 wow fadeInUp\">
                              <form id=\"newsletter\" accept-charset=\"utf-8\">
                                    <div class=\"success\">Your subscribe request has been sent!</div>
                                    <label class=\"email\">
                                          <input type=\"email\" value=\"Entrez votre email:\">
                                          <span class=\"error\">*This is not a valid email address.</span>
                                    </label><br>
                                    <a href=\"#\" data-type=\"submit\">Souscrire</a>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 410,  553 => 404,  488 => 342,  473 => 330,  457 => 317,  441 => 304,  425 => 291,  409 => 278,  393 => 265,  377 => 252,  361 => 239,  345 => 226,  329 => 213,  313 => 200,  297 => 187,  273 => 166,  265 => 161,  245 => 144,  237 => 139,  218 => 123,  210 => 118,  173 => 84,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block title %}Acceuil {% endblock %}
{% block body %}
<div class=\"du-banner-area\">

      <div class=\"du-featured-photo bg-dark position-absolute w-100\"
           style=\"background-image: url('{{ asset('build/img/et.jpg') }}');background-repeat: no-repeat;background-size: cover;height: 580px;z-index: 0\">
            <div class=\"du-featured-text d-flex justify-content-center h-100\" style=\"background-color: rgba(0,0,0,0.4)\">
                  <!--welcome-message-->
                  <header class=\"container mt-lg-5\">
                        <h1 class=\"text-white text-center mb-4\">Rechercher parmi les opportunités disponibles</h1>
                        <div class=\"\">
                              <div class=\"px-md-5 px-3 pt-5 pb-5\" style=\"background-color: rgba(218,218,218,0.4)\">
                                    <form class=\"row\">
                                          <div class=\"col-12 col-lg-5 input-group\">
                                                <div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
                                                      <i class=\"fa fa-search text-black-50\"></i>
                                                </div>
                                                <input type=\"search\" class=\"form-control py-4 rounded-0 border-0 h-100\"
                                                       placeholder=\"Mot clé,métiers,compétences\"/>
                                          </div>
                                          <div class=\"col-12 col-lg-5 mt-3 mt-lg-0\">
                                                <div class=\"input-group h-100 mb-3\">
                                                      <div class=\"input-group-prepend d-flex align-items-center p-3 bg-white\">
                                                            <i class=\"fa fa-circle text-black-50\"></i>
                                                      </div>
                                                      <select class=\"custom-select h-100 border-0 rounded-0\" id=\"menu\" name=\"menu\">
                                                            <option value=\"actualites\">Actualités</option>
                                                            <option value=\"publications\">Publications</option>
                                                            <option value=\"trucs-et-astuces\">Trucs et astuces</option>
                                                      </select>
                                                </div>
                                          </div>
                                          <div class=\"col-12 col-lg-2 mt-3 mt-lg-0\">
                                                <button class=\"btn-block h-100 bg-secondary text-white py-2 py-md-0 border-0\"
                                                        style=\"border: 1px solid #fe0000;\"><span class=\"text-uppercase\">Rechercher</span>
                                                </button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </header>
                  <!--welcome-message end-->
            </div>
      </div>

</div>
<div class=\"clear\"></div>


<div class=\"dream-university\">


      <!--Begin feature-->
      <div class=\"du-feature bg-white mt-custom\" style=\"z-index: 999\">
            <div class=\"container\">
                  <div class=\"row\">

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-feature-box maxheight wow fadeIn bg-primary border-0\">
                                    <div class=\"badge bg-custom text-white\"><i class=\"fa fa-suitcase fa-3x\"></i></div>
                                    <div class=\"du-caption-box\">
                                          <div class=\"du-caption\">
                                                <p class=\"title text-white\">Offres d'emplois</p>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4 wow fadeIn\" data-wow-delay=\"0.1s\">
                              <div class=\"du-feature-box maxheight bg-yellow border-0\">
                                    <div class=\"badge text-white bg-custom\"><i class=\"fa fa-university fa-2x\"></i></div>
                                    <div class=\"du-caption-box\">
                                          <div class=\"du-caption\">
                                                <p class=\"title text-white\">offres de stages</p>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4 wow fadeIn\" data-wow-delay=\"0.2s\">
                              <div class=\"du-feature-box maxheight bg-secondary border-0\">
                                    <div class=\"badge bg-custom\">
                                          <img src=\"{{ asset('build/img/page1_icon3.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"du-caption-box\">
                                          <div class=\"du-caption\">
                                                <p class=\"title text-white\">opportunités professionnelles</p>
                                          </div>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!-- End feature -->


      <div class=\"for-students p-0 pt-5\">
            <div class=\"container\">
                  <h1 class=\"center mb-4\">actualités:</h1>

                  <div class=\"row\">

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-faculty-item wow fadeInLeft\">
                                    <div class=\"du-caption-box bg-white p-4\">
                                          <div class=\"du-caption text-right\">
                                                <h3 class=\"text-left text-dark\">Rentrée Académique</h3>
                                                <p class=\"mb-0 text-left\" style=\"font-size: medium\">Lorem ipsum dolor
                                                      sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut
                                                      neque purus, sollic alitudin non ante ac, malesuada. condimentum
                                                      libero.</p>
                                                <div class=\"text-right mb-4\">
                                                      <span class=\"font-weight-bold text-primary\">9 Nov 2020, 17h20</span>
                                                </div>
                                                <a href=\"{{ path('article') }}\"
                                                   class=\"ml-auto du-common-property border-0 text-secondary\"><u>Lire
                                                      plus</u></a>
                                          </div>
                                    </div>
                                    <figure style=\"height:200px\" class=\"overflow-hidden\"><img src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\">
                                    </figure>
                              </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-faculty-item wow fadeInLeft\">
                                    <div class=\"du-caption-box bg-white p-4\">
                                          <div class=\"du-caption text-right\">
                                                <h3 class=\"text-left text-dark\">Rentrée Académique</h3>
                                                <p class=\"mb-0 text-left\" style=\"font-size: medium\">Lorem ipsum dolor
                                                      sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut
                                                      neque purus, sollic alitudin non ante ac, malesuada. condimentum
                                                      libero.</p>
                                                <div class=\"text-right mb-4\">
                                                      <span class=\"font-weight-bold text-primary\">9 Nov 2020, 17h20</span>
                                                </div>
                                                <a href=\"{{ path('article') }}\"
                                                   class=\"ml-auto du-common-property border-0 text-secondary\"><u>Lire
                                                      plus</u></a>
                                          </div>
                                    </div>
                                    <figure style=\"height:200px\" class=\"overflow-hidden\"><img src=\"{{ asset('build/img/pharmecy.jpg') }}\"
                                                                                              alt=\"\">
                                    </figure>
                              </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-faculty-item wow fadeInLeft\">
                                    <div class=\"du-caption-box bg-white p-4\">
                                          <div class=\"du-caption text-right\">
                                                <h3 class=\"text-left text-dark\">Rentrée Académique</h3>
                                                <p class=\"mb-0 text-left\" style=\"font-size: medium\">Lorem ipsum dolor
                                                      sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut
                                                      neque purus, sollic alitudin non ante ac, malesuada. condimentum
                                                      libero.</p>
                                                <div class=\"text-right mb-4\">
                                                      <span class=\"font-weight-bold text-primary\">9 Nov 2020, 17h20</span>
                                                </div>
                                                <a href=\"{{ path('article') }}\"
                                                   class=\"ml-auto du-common-property border-0 text-secondary\"><u>Lire
                                                      plus</u></a>
                                          </div>
                                    </div>
                                    <figure style=\"height:200px\" class=\"overflow-hidden\"><img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                                                                              alt=\"\">
                                    </figure>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!--Begin our faculty-->
      <div class=\"our-faculty m-0 p-0 pt-5\">
            <div class=\"container\">
                  <h1 class=\"center mb-4\">opportunités:</h1>


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
                                                      <a href=\"{{ path('offer') }}\"
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
                                                      <a href=\"{{ path('offer') }}\"
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
                                                      <a href=\"{{ path('offer') }}\"
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
                                                      <a href=\"{{ path('offer') }}\"
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
                                                      <a href=\"{{ path('offer') }}\"
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
                                                      <a href=\"{{ path('offer') }}\"
                                                              class=\"btn-default du-common-property bg-primary border-0\">
                                                            En savoir plus
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>


                        <div class=\"ml-auto mb-5\">
                              <a href=\"{{ path('emplois') }}\" class=\"btn rounded-0 text-white bg-secondary\">Voir plus</a>
                        </div>
                  </div>
            </div>
      </div>
      <!--End our faculty-->

      <!--Begin for student -->
      <!--End for student-->


      <!--Begin news -->
      <div class=\"du-news bg-primary\">
            <div class=\"container\">

                  <div class=\"row\">

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-caption-box bg-transparent\">
                                    <div class=\"text-center\">
                                          <span class=\"display-4 font-weight-bold\">25102</span>
                                          <p class=\"h3\">Opportunités</p>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-caption-box bg-transparent\">
                                    <div class=\"text-center\">
                                          <span class=\"display-4 font-weight-bold\">65102</span>
                                          <p class=\"h3\">Utilisateurs</p>
                                    </div>
                              </div>
                        </div>

                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                              <div class=\"du-caption-box bg-transparent\">
                                    <div class=\"text-center\">
                                          <span class=\"display-4 font-weight-bold\">2502</span>
                                          <p class=\"h3\">Partenaires</p>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!--End news-->


      <!--Begin scholarship -->
      <div class=\"du-scholarship\">
            <div class=\"container\">
                  <h1 class=\"center\">Partenaires:</h1>

                  <p class=\"center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque
                        ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>

                  <div class=\"row\">

                        <div class=\"col-lg-6 col-md-4 col-sm-4\">
                              <div class=\"du-scholarship-item wow fadeInLeft\">
                                    <figure><img src=\"{{ asset('build/img/logo1.png') }}\" width=\"100%\" alt=\"\"></figure>
                              </div>
                        </div>

                        <div class=\"col-lg-6 col-md-4 col-sm-4\">
                              <div class=\"du-scholarship-item wow fadeInLeft\">
                                    <figure><img src=\"{{ asset('build/img/logo.png') }}\" height=\"250\" alt=\"\"></figure>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!--End scholarship-->


      <!--Begin newsletter -->
      <div class=\"du-newsletter\">
            <div class=\"container\">
                  <h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
                  <p class=\"wow fadeInUp\">Afin de ne rater aucune de nos dernières actualités </p>
                  <div class=\"row\">
                        <div class=\"col-lg-12 wow fadeInUp\">
                              <form id=\"newsletter\" accept-charset=\"utf-8\">
                                    <div class=\"success\">Your subscribe request has been sent!</div>
                                    <label class=\"email\">
                                          <input type=\"email\" value=\"Entrez votre email:\">
                                          <span class=\"error\">*This is not a valid email address.</span>
                                    </label><br>
                                    <a href=\"#\" data-type=\"submit\">Souscrire</a>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
{% endblock %}
", "front/index.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\index.html.twig");
    }
}
