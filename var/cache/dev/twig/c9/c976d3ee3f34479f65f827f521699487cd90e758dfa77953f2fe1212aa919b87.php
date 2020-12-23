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

/* student/profil.html.twig */
class __TwigTemplate_8401a6cfcf0692046f91e12315ac720cd9725d42464adf7327d6ff639507a2a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profil.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/profil.html.twig", 1);
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

        echo "Profil";
        
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
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/profil.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/cv.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"dream-university-subpage py-5\" style=\"background-color: rgba(218,218,218,0.4)\">

      <div class=\" py-5 container bg-white px-5 shadow-lg\">
            <section id=\"content\" class=\"\">
                  <!-- Begin .page-heading -->
                  <div class=\"page-heading\">
                        <div class=\"d-block d-lg-flex\">
                              <div class=\"mr-lg-3 w-30 mb-4 mb-0\">
                                    <a href=\"#\">
                                          <img class=\"media-object mw150 img-fluid\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\"
                                               alt=\"...\">
                                    </a>
                              </div>
                              <div class=\"media-body va-m\">
                                    <h2 class=\"media-heading text-primary\">Richard Aignon
                                    </h2>
                                    <p class=\"h6 text-justify\">Lorem ipsum dolor sit amet ctetur adicing elit, sed do
                                          eiusmod
                                          tempor incididunt Lorem ipsum dolor sit amet ctetur adicing elit, sed do
                                          eiusmod tempor incididunt Lorem
                                          ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt
                                          Lorem
                                          ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
                                    <div class=\"media-links mt-3\">
                                          <ul class=\"list-inline list-unstyled\">
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"facebook link\">
                                                            <span class=\"fa fa-facebook-square fs35\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"twitter link\">
                                                            <span class=\"fa fa-twitter-square fs35 text-info\"></span>
                                                      </a>
                                                </li>

                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"linkedin link\">
                                                            <span class=\"fa fa-linkedin-square fs35 text-info\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"email link\">
                                                            <span class=\"fa fa-envelope-square fs35 text-muted\"></span>
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class=\"row\">
                        <div class=\"col-md-4\">
                              <div class=\"panel\">
                                    <div class=\"panel-heading bg-primary text-white\">
              <span class=\"panel-icon\">
                <i class=\"fa fa-trophy\"></i>
              </span>
                                          <span class=\"panel-title\"> Mes compétences</span>
                                    </div>
                                    <div class=\"panel-body pb5\">
                                          <span class=\"label label-warning mr5 mb10 ib lh15\">Default</span>
                                          <span class=\"label label-primary mr5 mb10 ib lh15\">Primary</span>
                                          <span class=\"label label-info mr5 mb10 ib lh15\">Success</span>
                                          <span class=\"label label-success mr5 mb10 ib lh15\">Info</span>
                                          <span class=\"label label-alert mr5 mb10 ib lh15\">Warning</span>
                                          <span class=\"label label-system mr5 mb10 ib lh15\">Danger</span>
                                          <span class=\"label label-info mr5 mb10 ib lh15\">Success</span>
                                          <span class=\"label label-success mr5 mb10 ib lh15\">Ui Design</span>
                                          <span class=\"label label-primary mr5 mb10 ib lh15\">Primary</span>

                                    </div>
                              </div>
                              <div class=\"panel\">
                                    <div class=\"panel-heading bg-primary text-white\">
              <span class=\"panel-icon\">
                <i class=\"fa fa-pencil\"></i>
              </span>
                                          <span class=\"panel-title\">A propos de moi</span>
                                    </div>
                                    <div class=\"panel-body pb5\">

                                          <h6>Experience</h6>

                                          <h4>Facebook Internship</h4>
                                          <p class=\"text-muted\"> University of Missouri, Columbia
                                                <br> Student Health Center, June 2010 - 2012
                                          </p>

                                          <hr class=\"short br-lighter\">

                                          <h6>Education</h6>

                                          <h4>Bachelor of Science, PhD</h4>
                                          <p class=\"text-muted\"> University of Missouri, Columbia
                                                <br> Student Health Center, June 2010 through Aug 2011
                                          </p>

                                          <hr class=\"short br-lighter\">

                                          <h6>Accomplishments</h6>

                                          <h4>Successful Business</h4>
                                          <p class=\"text-muted pb10\"> University of Missouri, Columbia
                                                <br> Student Health Center, June 2010 through Aug 2011
                                          </p>

                                    </div>
                              </div>
                        </div>
                        <div class=\"col-md-8\">

                              <div class=\"tab-block\">
                                    <ul class=\"nav nav-tabs\">
                                          <li class=\"active\">
                                                <a href=\"#tab1\" data-toggle=\"tab\">Mon CV</a>
                                          </li>
                                          <li class=\"\">
                                                <a href=\"#tab2\" data-toggle=\"tab\">Modifier mon profil</a>
                                          </li>
                                    </ul>
                                    <div class=\"tab-content p30\" style=\"height: 730px;\">
                                          <div id=\"tab1\" class=\"tab-pane active\">
                                                <div class=\"btn-group\">
                                                      <a href=\"editcv.html\"
                                                         class=\"btn bg-primary mr-2 text-white py-2 font-weight-bold\"><i
                                                              class=\"fa fa-pencil mr-2\"></i> Editer mon cv</a>
                                                      <a href=\"cv.html\"
                                                         class=\"mr-2 btn bg-primary text-white py-2 font-weight-bold\"><i
                                                              class=\"fa fa-eye mr-2\"></i> Voir en plein écran</a>
                                                      <a href=\"#\"
                                                         class=\"btn bg-primary text-white py-2 font-weight-bold\"><i
                                                              class=\"fa fa-download mr-2\"></i> Télécharger votre CV(en pdf)</a>

                                                </div>
                                                <div class=\"wrapper\">
                                                      <div class=\"sidebar-wrapper\">
                                                            <div class=\"profile-container\">
                                                                  <img class=\"profile\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\"
                                                                       alt=\"\"/>
                                                                  <h1 class=\"name\">Richard Aignon</h1>
                                                                  <div class=\"contact-container container-block\">
                                                                        <ul class=\"list-unstyled contact-list row\">
                                                                              <li class=\"email col-6 text-left\"><i
                                                                                      class=\"fa fa-envelope text-secondary mr-2\"></i><a
                                                                                      href=\"mailto: yourname@email.com\">vous@gmail.com</a>
                                                                              </li>
                                                                              <li class=\"phone col-6 text-left\"><i
                                                                                      class=\"fa fa-phone text-secondary mr-2\"></i><a
                                                                                      href=\"tel:0123 456 789\">0123
                                                                                    456 789</a></li>
                                                                              <li class=\"linkedin col-6 text-left\">
                                                                                    <i class=\"fa fa-linkedin text-secondary mr-2\"></i><a
                                                                                      href=\"#\" target=\"_blank\">linkedin.com/in/alandoe</a>
                                                                              </li>
                                                                              <li class=\"github col-6 text-left\">
                                                                                    <i class=\"fa fa-facebook text-secondary mr-2\"></i><a
                                                                                      href=\"#\" target=\"_blank\">facebook.com/username</a>
                                                                              </li>
                                                                              <li class=\"col-6 twitter text-left\">
                                                                                    <i class=\"fa fa-twitter text-secondary mr-2\"></i><a
                                                                                      href=\"https://twitter.com/3rdwave_themes\"
                                                                                      target=\"_blank\">@twittername</a>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>

                                                      </div><!--//sidebar-wrapper-->

                                                      <div class=\"main-wrapper\">
                                                            <section class=\"section summary-section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-user\"></i></span>Profil</h2>
                                                                  <div class=\"summary\">
                                                                        <p>Aenean commodo
                                                                              ligula eget dolor aenean massa. Cum
                                                                              sociis natoque penatibus et magnis
                                                                              dis parturient montes, nascetur
                                                                              ridiculus mus. Donec quam felis,
                                                                              ultricies nec, pellentesque eu.Aenean commodo
                                                                              ligula eget dolor aenean massa. Cum
                                                                              sociis natoque penatibus et magnis
                                                                              dis parturient montes, nascetur
                                                                              ridiculus mus. Donec quam felis,
                                                                              ultricies nec, pellentesque eu.</p>
                                                                  </div><!--//summary-->
                                                            </section><!--//section-->

                                                            <section class=\"section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-navicon\"></i></span>
                                                                        Formations</h2>
                                                                  <div class=\"item row my-1\">
                                                                        <div class=\"col-9\">
                                                                              <h2 class=\"job-title\">Licence en Génie logiciel</h2>
                                                                              <h4 class=\"company\">Institut de formation et de recherche en informatique | Université d'Abomey-calavi</h4>
                                                                        </div>
                                                                        <div class=\"col-3 text-right\" style=\"color: #97AAC3\">2011 - 2015</div>
                                                                  </div>
                                                                  <div class=\"item row my-1\">
                                                                        <div class=\"col-9\">
                                                                              <h2 class=\"job-title\">Master en intelligence artificielle</h2>
                                                                              <h4 class=\"company\">Havard</h4>
                                                                        </div>
                                                                        <div class=\"col-3 text-right\" style=\"color: #97AAC3\">2011 - 2015</div>
                                                                  </div><!--//item-->
                                                            </section><!--//education-container-->


                                                            <section class=\"section experiences-section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-briefcase\"></i></span>Experiences
                                                                  </h2>

                                                                  <div class=\"item\">
                                                                        <div class=\"meta\">
                                                                              <div class=\"upper-row\">
                                                                                    <h3 class=\"job-title\">Lead
                                                                                          Developer</h3>
                                                                                    <div class=\"time\">2019 -
                                                                                          Present
                                                                                    </div>
                                                                              </div><!--//upper-row-->
                                                                              <div class=\"company\">Startup Hubs,
                                                                                    San Francisco
                                                                              </div>
                                                                        </div><!--//meta-->
                                                                        <div class=\"details\">
                                                                              <p>Describe your role here lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum
                                                                                    sociis natoque penatibus et
                                                                                    magnis dis parturient montes,
                                                                                    nascetur ridiculus mus. Donec
                                                                                    quam felis, ultricies nec,
                                                                                    pellentesque eu, pretium quis,
                                                                                    sem. Nulla consequat massa
                                                                                    quis enim. Donec pede
                                                                                    justo.</p>
                                                                              <p>Sed ut perspiciatis unde omnis
                                                                                    iste natus error sit
                                                                                    voluptatem accusantium
                                                                                    doloremque laudantium, totam
                                                                                    rem aperiam, eaque ipsa quae
                                                                                    ab illo inventore veritatis et
                                                                                    quasi architecto beatae vitae
                                                                                    dicta sunt explicabo. </p>
                                                                        </div><!--//details-->
                                                                  </div><!--//item-->

                                                                  <div class=\"item\">
                                                                        <div class=\"meta\">
                                                                              <div class=\"upper-row\">
                                                                                    <h3 class=\"job-title\">Senior
                                                                                          Software Engineer</h3>
                                                                                    <div class=\"time\">2018 -
                                                                                          2019
                                                                                    </div>
                                                                              </div><!--//upper-row-->
                                                                              <div class=\"company\">Google,
                                                                                    London
                                                                              </div>
                                                                        </div><!--//meta-->
                                                                        <div class=\"details\">
                                                                              <p>Describe your role here lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum
                                                                                    sociis natoque penatibus et
                                                                                    magnis dis parturient montes,
                                                                                    nascetur ridiculus mus. Donec
                                                                                    quam felis, ultricies nec,
                                                                                    pellentesque eu, pretium quis,
                                                                                    sem.</p>

                                                                        </div><!--//details-->
                                                                  </div><!--//item-->

                                                                  <div class=\"item\">
                                                                        <div class=\"meta\">
                                                                              <div class=\"upper-row\">
                                                                                    <h3 class=\"job-title\">UI
                                                                                          Developer</h3>
                                                                                    <div class=\"time\">2016 -
                                                                                          2018
                                                                                    </div>
                                                                              </div><!--//upper-row-->
                                                                              <div class=\"company\">Amazon,
                                                                                    London
                                                                              </div>
                                                                        </div><!--//meta-->
                                                                        <div class=\"details\">
                                                                              <p>Describe your role here lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum
                                                                                    sociis natoque penatibus et
                                                                                    magnis dis parturient montes,
                                                                                    nascetur ridiculus mus. Donec
                                                                                    quam felis, ultricies nec,
                                                                                    pellentesque eu, pretium quis,
                                                                                    sem.</p>
                                                                        </div><!--//details-->
                                                                  </div><!--//item-->

                                                            </section><!--//section-->

                                                            <section
                                                                    class=\"section\">
                                                                  <h2 class=\"section-title container-block-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-user\"></i></span>
                                                                        Langues</h2>
                                                                  <ul class=\"list-unstyled interests-list\">
                                                                        <li>English <span class=\"lang-desc\">(Native)</span>
                                                                        </li>
                                                                        <li>French <span class=\"lang-desc\">(Professional)</span>
                                                                        </li>
                                                                        <li>Spanish <span class=\"lang-desc\">(Professional)</span>
                                                                        </li>
                                                                  </ul>
                                                            </section><!--//interests-->

                                                            <section class=\"section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-briefcase\"></i></span>Interests
                                                                  </h2>
                                                                  <ul class=\"interests-list\">
                                                                        <li>Climbing</li>
                                                                        <li>Snowboarding</li>
                                                                        <li>Cooking</li>
                                                                  </ul>
                                                            </section>

                                                      </div><!--//main-body-->
                                                </div>
                                          </div>
                                          <div id=\"tab2\" class=\"tab-pane\">
                                                <div class=\"container\">
                                                      <div class=\"row justify-content-center\">
                                                            <div class=\"col-12 mx-auto\">
                                                                  <div class=\"my-4\">
                                                                        <form>
                                                                              <div class=\"form-row\">
                                                                                    <div class=\"form-group col-md-12\"  lang=\"fr\">
                                                                                          <label for=\"pic\" class=\"d-flex justify-content-center\" lang=\"fr\">
                                                                                                <img src=\"img/darren.png\" class=\"img-fluid rounded-circle position-absolute\" width=\"250\">
                                                                                                <i class=\"fa fa-plus-circle text-primary align-self-end\" style=\"margin-top: 190px;margin-left: 150px;font-size: 4em\"></i>
                                                                                          </label>
                                                                                          <input type=\"file\"
                                                                                                 id=\"pic\"
                                                                                                 class=\"custom-file-input\"/>
                                                                                    </div>
                                                                                    <hr class=\"mt-4\"/>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"firstname\">Prénoms</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"firstname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Richard\"/>
                                                                                    </div>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"lastname\">Nom</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"lastname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Aignon\"/>
                                                                                    </div>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputEmail4\">Email</label>
                                                                                    <input type=\"email\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputEmail4\"
                                                                                           placeholder=\"vous@gmail.com\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress5\">Liens du
                                                                                          profil LinkedIn</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress5\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress6\">Liens du
                                                                                          profil Facebook</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress6\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress7\">Liens du
                                                                                          profil Twitter</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress7\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"bio\">Biographie</label>
                                                                                    <textarea type=\"text\"
                                                                                              class=\"form-control\"
                                                                                              id=\"bio\"
                                                                                              placeholder=\"\"></textarea>
                                                                              </div>

                                                                              <hr class=\"my-4\"/>
                                                                              <div class=\"row mb-4\">
                                                                                    <div class=\"col-md-6\">
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword4\">Ancien
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword4\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword5\">Nouveau
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword5\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword6\">Confirmer
                                                                                                      le mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword6\"/>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class=\"col-md-6\">
                                                                                          <p class=\"mb-2\">Règles du mot
                                                                                                de passe</p>
                                                                                          <p class=\"small text-muted mb-2\">
                                                                                                Un mot de passe valide
                                                                                                doit répondre aux
                                                                                                exigences suivantes:</p>
                                                                                          <ul class=\"small text-muted pl-4 mb-0\">
                                                                                                <li>8 caractères au
                                                                                                      minimum
                                                                                                </li>
                                                                                                <li>Au moins un chiffre
                                                                                                </li>
                                                                                                <li>Ne pas être le mot
                                                                                                      de passe précédent
                                                                                                </li>
                                                                                          </ul>
                                                                                    </div>
                                                                              </div>
                                                                              <button type=\"submit\"
                                                                                      class=\"btn text-white btn bg-primary\">
                                                                                    Enregistrer les changements
                                                                              </button>
                                                                        </form>
                                                                  </div>
                                                            </div>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
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
        return "student/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 147,  127 => 17,  116 => 8,  106 => 7,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %}Profil{% endblock %}
{% block css %}
      <link rel=\"stylesheet\" href=\"{{ asset('build/css/profil.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('build/css/cv.css') }}\">
{% endblock %}
{% block body %}
<div class=\"dream-university-subpage py-5\" style=\"background-color: rgba(218,218,218,0.4)\">

      <div class=\" py-5 container bg-white px-5 shadow-lg\">
            <section id=\"content\" class=\"\">
                  <!-- Begin .page-heading -->
                  <div class=\"page-heading\">
                        <div class=\"d-block d-lg-flex\">
                              <div class=\"mr-lg-3 w-30 mb-4 mb-0\">
                                    <a href=\"#\">
                                          <img class=\"media-object mw150 img-fluid\" src=\"{{ asset('build/img/darren.png') }}\"
                                               alt=\"...\">
                                    </a>
                              </div>
                              <div class=\"media-body va-m\">
                                    <h2 class=\"media-heading text-primary\">Richard Aignon
                                    </h2>
                                    <p class=\"h6 text-justify\">Lorem ipsum dolor sit amet ctetur adicing elit, sed do
                                          eiusmod
                                          tempor incididunt Lorem ipsum dolor sit amet ctetur adicing elit, sed do
                                          eiusmod tempor incididunt Lorem
                                          ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt
                                          Lorem
                                          ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
                                    <div class=\"media-links mt-3\">
                                          <ul class=\"list-inline list-unstyled\">
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"facebook link\">
                                                            <span class=\"fa fa-facebook-square fs35\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"twitter link\">
                                                            <span class=\"fa fa-twitter-square fs35 text-info\"></span>
                                                      </a>
                                                </li>

                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"linkedin link\">
                                                            <span class=\"fa fa-linkedin-square fs35 text-info\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"email link\">
                                                            <span class=\"fa fa-envelope-square fs35 text-muted\"></span>
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class=\"row\">
                        <div class=\"col-md-4\">
                              <div class=\"panel\">
                                    <div class=\"panel-heading bg-primary text-white\">
              <span class=\"panel-icon\">
                <i class=\"fa fa-trophy\"></i>
              </span>
                                          <span class=\"panel-title\"> Mes compétences</span>
                                    </div>
                                    <div class=\"panel-body pb5\">
                                          <span class=\"label label-warning mr5 mb10 ib lh15\">Default</span>
                                          <span class=\"label label-primary mr5 mb10 ib lh15\">Primary</span>
                                          <span class=\"label label-info mr5 mb10 ib lh15\">Success</span>
                                          <span class=\"label label-success mr5 mb10 ib lh15\">Info</span>
                                          <span class=\"label label-alert mr5 mb10 ib lh15\">Warning</span>
                                          <span class=\"label label-system mr5 mb10 ib lh15\">Danger</span>
                                          <span class=\"label label-info mr5 mb10 ib lh15\">Success</span>
                                          <span class=\"label label-success mr5 mb10 ib lh15\">Ui Design</span>
                                          <span class=\"label label-primary mr5 mb10 ib lh15\">Primary</span>

                                    </div>
                              </div>
                              <div class=\"panel\">
                                    <div class=\"panel-heading bg-primary text-white\">
              <span class=\"panel-icon\">
                <i class=\"fa fa-pencil\"></i>
              </span>
                                          <span class=\"panel-title\">A propos de moi</span>
                                    </div>
                                    <div class=\"panel-body pb5\">

                                          <h6>Experience</h6>

                                          <h4>Facebook Internship</h4>
                                          <p class=\"text-muted\"> University of Missouri, Columbia
                                                <br> Student Health Center, June 2010 - 2012
                                          </p>

                                          <hr class=\"short br-lighter\">

                                          <h6>Education</h6>

                                          <h4>Bachelor of Science, PhD</h4>
                                          <p class=\"text-muted\"> University of Missouri, Columbia
                                                <br> Student Health Center, June 2010 through Aug 2011
                                          </p>

                                          <hr class=\"short br-lighter\">

                                          <h6>Accomplishments</h6>

                                          <h4>Successful Business</h4>
                                          <p class=\"text-muted pb10\"> University of Missouri, Columbia
                                                <br> Student Health Center, June 2010 through Aug 2011
                                          </p>

                                    </div>
                              </div>
                        </div>
                        <div class=\"col-md-8\">

                              <div class=\"tab-block\">
                                    <ul class=\"nav nav-tabs\">
                                          <li class=\"active\">
                                                <a href=\"#tab1\" data-toggle=\"tab\">Mon CV</a>
                                          </li>
                                          <li class=\"\">
                                                <a href=\"#tab2\" data-toggle=\"tab\">Modifier mon profil</a>
                                          </li>
                                    </ul>
                                    <div class=\"tab-content p30\" style=\"height: 730px;\">
                                          <div id=\"tab1\" class=\"tab-pane active\">
                                                <div class=\"btn-group\">
                                                      <a href=\"editcv.html\"
                                                         class=\"btn bg-primary mr-2 text-white py-2 font-weight-bold\"><i
                                                              class=\"fa fa-pencil mr-2\"></i> Editer mon cv</a>
                                                      <a href=\"cv.html\"
                                                         class=\"mr-2 btn bg-primary text-white py-2 font-weight-bold\"><i
                                                              class=\"fa fa-eye mr-2\"></i> Voir en plein écran</a>
                                                      <a href=\"#\"
                                                         class=\"btn bg-primary text-white py-2 font-weight-bold\"><i
                                                              class=\"fa fa-download mr-2\"></i> Télécharger votre CV(en pdf)</a>

                                                </div>
                                                <div class=\"wrapper\">
                                                      <div class=\"sidebar-wrapper\">
                                                            <div class=\"profile-container\">
                                                                  <img class=\"profile\" src=\"{{ asset('build/img/darren.png') }}\"
                                                                       alt=\"\"/>
                                                                  <h1 class=\"name\">Richard Aignon</h1>
                                                                  <div class=\"contact-container container-block\">
                                                                        <ul class=\"list-unstyled contact-list row\">
                                                                              <li class=\"email col-6 text-left\"><i
                                                                                      class=\"fa fa-envelope text-secondary mr-2\"></i><a
                                                                                      href=\"mailto: yourname@email.com\">vous@gmail.com</a>
                                                                              </li>
                                                                              <li class=\"phone col-6 text-left\"><i
                                                                                      class=\"fa fa-phone text-secondary mr-2\"></i><a
                                                                                      href=\"tel:0123 456 789\">0123
                                                                                    456 789</a></li>
                                                                              <li class=\"linkedin col-6 text-left\">
                                                                                    <i class=\"fa fa-linkedin text-secondary mr-2\"></i><a
                                                                                      href=\"#\" target=\"_blank\">linkedin.com/in/alandoe</a>
                                                                              </li>
                                                                              <li class=\"github col-6 text-left\">
                                                                                    <i class=\"fa fa-facebook text-secondary mr-2\"></i><a
                                                                                      href=\"#\" target=\"_blank\">facebook.com/username</a>
                                                                              </li>
                                                                              <li class=\"col-6 twitter text-left\">
                                                                                    <i class=\"fa fa-twitter text-secondary mr-2\"></i><a
                                                                                      href=\"https://twitter.com/3rdwave_themes\"
                                                                                      target=\"_blank\">@twittername</a>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>

                                                      </div><!--//sidebar-wrapper-->

                                                      <div class=\"main-wrapper\">
                                                            <section class=\"section summary-section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-user\"></i></span>Profil</h2>
                                                                  <div class=\"summary\">
                                                                        <p>Aenean commodo
                                                                              ligula eget dolor aenean massa. Cum
                                                                              sociis natoque penatibus et magnis
                                                                              dis parturient montes, nascetur
                                                                              ridiculus mus. Donec quam felis,
                                                                              ultricies nec, pellentesque eu.Aenean commodo
                                                                              ligula eget dolor aenean massa. Cum
                                                                              sociis natoque penatibus et magnis
                                                                              dis parturient montes, nascetur
                                                                              ridiculus mus. Donec quam felis,
                                                                              ultricies nec, pellentesque eu.</p>
                                                                  </div><!--//summary-->
                                                            </section><!--//section-->

                                                            <section class=\"section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-navicon\"></i></span>
                                                                        Formations</h2>
                                                                  <div class=\"item row my-1\">
                                                                        <div class=\"col-9\">
                                                                              <h2 class=\"job-title\">Licence en Génie logiciel</h2>
                                                                              <h4 class=\"company\">Institut de formation et de recherche en informatique | Université d'Abomey-calavi</h4>
                                                                        </div>
                                                                        <div class=\"col-3 text-right\" style=\"color: #97AAC3\">2011 - 2015</div>
                                                                  </div>
                                                                  <div class=\"item row my-1\">
                                                                        <div class=\"col-9\">
                                                                              <h2 class=\"job-title\">Master en intelligence artificielle</h2>
                                                                              <h4 class=\"company\">Havard</h4>
                                                                        </div>
                                                                        <div class=\"col-3 text-right\" style=\"color: #97AAC3\">2011 - 2015</div>
                                                                  </div><!--//item-->
                                                            </section><!--//education-container-->


                                                            <section class=\"section experiences-section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-briefcase\"></i></span>Experiences
                                                                  </h2>

                                                                  <div class=\"item\">
                                                                        <div class=\"meta\">
                                                                              <div class=\"upper-row\">
                                                                                    <h3 class=\"job-title\">Lead
                                                                                          Developer</h3>
                                                                                    <div class=\"time\">2019 -
                                                                                          Present
                                                                                    </div>
                                                                              </div><!--//upper-row-->
                                                                              <div class=\"company\">Startup Hubs,
                                                                                    San Francisco
                                                                              </div>
                                                                        </div><!--//meta-->
                                                                        <div class=\"details\">
                                                                              <p>Describe your role here lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum
                                                                                    sociis natoque penatibus et
                                                                                    magnis dis parturient montes,
                                                                                    nascetur ridiculus mus. Donec
                                                                                    quam felis, ultricies nec,
                                                                                    pellentesque eu, pretium quis,
                                                                                    sem. Nulla consequat massa
                                                                                    quis enim. Donec pede
                                                                                    justo.</p>
                                                                              <p>Sed ut perspiciatis unde omnis
                                                                                    iste natus error sit
                                                                                    voluptatem accusantium
                                                                                    doloremque laudantium, totam
                                                                                    rem aperiam, eaque ipsa quae
                                                                                    ab illo inventore veritatis et
                                                                                    quasi architecto beatae vitae
                                                                                    dicta sunt explicabo. </p>
                                                                        </div><!--//details-->
                                                                  </div><!--//item-->

                                                                  <div class=\"item\">
                                                                        <div class=\"meta\">
                                                                              <div class=\"upper-row\">
                                                                                    <h3 class=\"job-title\">Senior
                                                                                          Software Engineer</h3>
                                                                                    <div class=\"time\">2018 -
                                                                                          2019
                                                                                    </div>
                                                                              </div><!--//upper-row-->
                                                                              <div class=\"company\">Google,
                                                                                    London
                                                                              </div>
                                                                        </div><!--//meta-->
                                                                        <div class=\"details\">
                                                                              <p>Describe your role here lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum
                                                                                    sociis natoque penatibus et
                                                                                    magnis dis parturient montes,
                                                                                    nascetur ridiculus mus. Donec
                                                                                    quam felis, ultricies nec,
                                                                                    pellentesque eu, pretium quis,
                                                                                    sem.</p>

                                                                        </div><!--//details-->
                                                                  </div><!--//item-->

                                                                  <div class=\"item\">
                                                                        <div class=\"meta\">
                                                                              <div class=\"upper-row\">
                                                                                    <h3 class=\"job-title\">UI
                                                                                          Developer</h3>
                                                                                    <div class=\"time\">2016 -
                                                                                          2018
                                                                                    </div>
                                                                              </div><!--//upper-row-->
                                                                              <div class=\"company\">Amazon,
                                                                                    London
                                                                              </div>
                                                                        </div><!--//meta-->
                                                                        <div class=\"details\">
                                                                              <p>Describe your role here lorem
                                                                                    ipsum dolor sit amet,
                                                                                    consectetuer adipiscing elit.
                                                                                    Aenean commodo ligula eget
                                                                                    dolor. Aenean massa. Cum
                                                                                    sociis natoque penatibus et
                                                                                    magnis dis parturient montes,
                                                                                    nascetur ridiculus mus. Donec
                                                                                    quam felis, ultricies nec,
                                                                                    pellentesque eu, pretium quis,
                                                                                    sem.</p>
                                                                        </div><!--//details-->
                                                                  </div><!--//item-->

                                                            </section><!--//section-->

                                                            <section
                                                                    class=\"section\">
                                                                  <h2 class=\"section-title container-block-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-user\"></i></span>
                                                                        Langues</h2>
                                                                  <ul class=\"list-unstyled interests-list\">
                                                                        <li>English <span class=\"lang-desc\">(Native)</span>
                                                                        </li>
                                                                        <li>French <span class=\"lang-desc\">(Professional)</span>
                                                                        </li>
                                                                        <li>Spanish <span class=\"lang-desc\">(Professional)</span>
                                                                        </li>
                                                                  </ul>
                                                            </section><!--//interests-->

                                                            <section class=\"section\">
                                                                  <h2 class=\"section-title\"><span
                                                                          class=\"icon-holder\"><i
                                                                          class=\"fa fa-briefcase\"></i></span>Interests
                                                                  </h2>
                                                                  <ul class=\"interests-list\">
                                                                        <li>Climbing</li>
                                                                        <li>Snowboarding</li>
                                                                        <li>Cooking</li>
                                                                  </ul>
                                                            </section>

                                                      </div><!--//main-body-->
                                                </div>
                                          </div>
                                          <div id=\"tab2\" class=\"tab-pane\">
                                                <div class=\"container\">
                                                      <div class=\"row justify-content-center\">
                                                            <div class=\"col-12 mx-auto\">
                                                                  <div class=\"my-4\">
                                                                        <form>
                                                                              <div class=\"form-row\">
                                                                                    <div class=\"form-group col-md-12\"  lang=\"fr\">
                                                                                          <label for=\"pic\" class=\"d-flex justify-content-center\" lang=\"fr\">
                                                                                                <img src=\"img/darren.png\" class=\"img-fluid rounded-circle position-absolute\" width=\"250\">
                                                                                                <i class=\"fa fa-plus-circle text-primary align-self-end\" style=\"margin-top: 190px;margin-left: 150px;font-size: 4em\"></i>
                                                                                          </label>
                                                                                          <input type=\"file\"
                                                                                                 id=\"pic\"
                                                                                                 class=\"custom-file-input\"/>
                                                                                    </div>
                                                                                    <hr class=\"mt-4\"/>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"firstname\">Prénoms</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"firstname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Richard\"/>
                                                                                    </div>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"lastname\">Nom</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"lastname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Aignon\"/>
                                                                                    </div>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputEmail4\">Email</label>
                                                                                    <input type=\"email\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputEmail4\"
                                                                                           placeholder=\"vous@gmail.com\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress5\">Liens du
                                                                                          profil LinkedIn</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress5\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress6\">Liens du
                                                                                          profil Facebook</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress6\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress7\">Liens du
                                                                                          profil Twitter</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress7\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"bio\">Biographie</label>
                                                                                    <textarea type=\"text\"
                                                                                              class=\"form-control\"
                                                                                              id=\"bio\"
                                                                                              placeholder=\"\"></textarea>
                                                                              </div>

                                                                              <hr class=\"my-4\"/>
                                                                              <div class=\"row mb-4\">
                                                                                    <div class=\"col-md-6\">
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword4\">Ancien
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword4\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword5\">Nouveau
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword5\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword6\">Confirmer
                                                                                                      le mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword6\"/>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class=\"col-md-6\">
                                                                                          <p class=\"mb-2\">Règles du mot
                                                                                                de passe</p>
                                                                                          <p class=\"small text-muted mb-2\">
                                                                                                Un mot de passe valide
                                                                                                doit répondre aux
                                                                                                exigences suivantes:</p>
                                                                                          <ul class=\"small text-muted pl-4 mb-0\">
                                                                                                <li>8 caractères au
                                                                                                      minimum
                                                                                                </li>
                                                                                                <li>Au moins un chiffre
                                                                                                </li>
                                                                                                <li>Ne pas être le mot
                                                                                                      de passe précédent
                                                                                                </li>
                                                                                          </ul>
                                                                                    </div>
                                                                              </div>
                                                                              <button type=\"submit\"
                                                                                      class=\"btn text-white btn bg-primary\">
                                                                                    Enregistrer les changements
                                                                              </button>
                                                                        </form>
                                                                  </div>
                                                            </div>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
      </div>
</div>
{% endblock %}", "student/profil.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\profil.html.twig");
    }
}
