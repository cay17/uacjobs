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

/* front/partenaires.html.twig */
class __TwigTemplate_8b18cfc866e4a10fd4a0747d06f03b9562036a2da6632cb80099ae5102c0f96d extends Template
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
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partenaires.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partenaires.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/partenaires.html.twig", 1);
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

        echo "Partenaires";
        
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/team.css"), "html", null, true);
        echo "\">
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
        echo "<div class=\"dream-university-subpage\">

      <!-- Begin breadcrumbs-->
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/tt.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 1\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Partenaires</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- End breadcrumbs-->


      <!-- Begin About -->
      <div class=\"du-subpage-content\">
            <div class=\"du-about\">
                  <!-- Begin teacher -->
                  <section class=\"du-teacher du-section-ash ptb-50 common\">
                        <!-- Team Block -->
                        <div class=\"team-content\">
                              <!-- Container -->
                              <div class=\"container\">
                                    <h2 class=\"text-center font-weight-bold text-secondary\">Institutions</h2>
                                    <div class=\"row\">
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <div class=\"container mt-5\">
                                    <h2 class=\"text-center font-weight-bold text-secondary\">Entreprises</h2>
                                    <div class=\"row align-items-baseline\">
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div><!-- /Container -->
                        </div><!-- / Team -->
                  </section>
                  <!-- End teacher -->


            </div><!-- /.du-about -->
      </div><!-- /.du-subpage content -->
      <!-- End About -->
      <div class=\"du-newsletter\">
            <div class=\"container\">
                  <h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
                  <p class=\"wow fadeInUp\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero
                        scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac
                        feugiat. </p>
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
<!--End newsletter -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 486
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 487
        echo "<script type=\"text/javascript\">
    <!--
    ToolTip -->
    \$(function () {
        <!-- TootlTip -->
        \$('a.ui-tooltip').tooltip();
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/partenaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 487,  640 => 486,  567 => 423,  530 => 389,  493 => 355,  456 => 321,  419 => 287,  382 => 253,  339 => 213,  302 => 179,  265 => 145,  228 => 111,  191 => 77,  154 => 43,  120 => 12,  113 => 7,  103 => 6,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block title %}Partenaires{% endblock %}
{% block css %}
<link rel=\"stylesheet\" href=\"{{ asset('build/css/team.css') }}\">
{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\">

      <!-- Begin breadcrumbs-->
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"{{ asset('build/img/tt.jpg') }}\" class=\"w-100\" style=\"opacity: 1\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Partenaires</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- End breadcrumbs-->


      <!-- Begin About -->
      <div class=\"du-subpage-content\">
            <div class=\"du-about\">
                  <!-- Begin teacher -->
                  <section class=\"du-teacher du-section-ash ptb-50 common\">
                        <!-- Team Block -->
                        <div class=\"team-content\">
                              <!-- Container -->
                              <div class=\"container\">
                                    <h2 class=\"text-center font-weight-bold text-secondary\">Institutions</h2>
                                    <div class=\"row\">
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <div class=\"container mt-5\">
                                    <h2 class=\"text-center font-weight-bold text-secondary\">Entreprises</h2>
                                    <div class=\"row align-items-baseline\">
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                          <div class=\"col-md-4 col-sm-6 mb-4 h-100\">
                                                <!-- Team Box -->
                                                <div class=\"team-box wow fadeInLeft\">
                                                      <!-- Image -->
                                                      <img src=\"{{ asset('build/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"/>
                                                      <!-- Heading -->
                                                      <h4 class=\"font-weight-bold text-secondary\">Université d'abomey-calavi</h4>
                                                      <p>Aenean cursus fermentum euismod. Cras sodales nibh sed egestas
                                                            adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis
                                                            dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas
                                                            justo. Praesent tempus quis nibh nec imperdiet.

                                                      </p>
                                                      <!-- Social -->
                                                      <div class=\"ui-social\">
                                                            <!-- Facebook -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Facebook\"><i
                                                                    class=\"fa fa-facebook facebook\"></i></a>
                                                            <!-- Twitter -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Twitter\"><i
                                                                    class=\"fa fa-twitter twitter\"></i></a>
                                                            <!-- LinkedIn -->
                                                            <a href=\"#\" class=\"ui-tooltip\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"LinkedIn\"><i
                                                                    class=\"fa fa-linkedin linkedin\"></i></a>
                                                            <!-- Google-Plus -->
                                                            <a href=\"#\" class=\"ui-tooltip btn bg-secondary mt-4 text-white\" data-toggle=\"tooltip\"
                                                               data-placement=\"top\" title=\"Voir le site du partenaire\">Voir le site du partenaire</a>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div><!-- /Container -->
                        </div><!-- / Team -->
                  </section>
                  <!-- End teacher -->


            </div><!-- /.du-about -->
      </div><!-- /.du-subpage content -->
      <!-- End About -->
      <div class=\"du-newsletter\">
            <div class=\"container\">
                  <h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
                  <p class=\"wow fadeInUp\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero
                        scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac
                        feugiat. </p>
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
<!--End newsletter -->
{% endblock %}
{% block js %}
<script type=\"text/javascript\">
    <!--
    ToolTip -->
    \$(function () {
        <!-- TootlTip -->
        \$('a.ui-tooltip').tooltip();
    });
</script>
{% endblock %}", "front/partenaires.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\partenaires.html.twig");
    }
}
