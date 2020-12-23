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

/* student/cv.html */
class __TwigTemplate_8ebc889a05df183df7097299b70d2d1dee8193b537e8c693c446fb13b632566b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/cv.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/cv.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>UAC Jobs | Actualités </title>

      <!-- Bootstrap -->
      <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
      <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
      <!-- Main CSS -->
      <link rel=\"stylesheet\" href=\"css/style.css\">
      <link rel=\"stylesheet\" href=\"css/cv-full.css\">
      <!-- Animate CSS -->
      <link rel=\"stylesheet\" href=\"css/animate.css\">
      <!-- Menu -->
      <link href=\"css/flexy-menu.css\" rel=\"stylesheet\">

      <!-- Font  -->
      <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
            type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
</head>
<body>
<a href=\"profil.html\"
   class=\"btn btn-block bg-primary mr-2 text-white py-2 font-weight-bold\"><i
        class=\"fa fa-arrow-left mr-2\"></i> Retour</a>
<div class=\"wrapper\">
      <div class=\"sidebar-wrapper\">
            <div class=\"profile-container\">
                  <img class=\"profile\" src=\"img/darren.png\" alt=\"\"/>
                  <h1 class=\"name\">Alan Doe</h1>
                  <h3 class=\"tagline\">Full Stack Developer</h3>
            </div><!--//profile-container-->

            <div class=\"contact-container container-block\">
                  <ul class=\"list-unstyled contact-list\">
                        <li class=\"email\"><i class=\"fa fa-envelope mr-2\"></i><a href=\"mailto: yourname@email.com\">vous@gmail.com</a>
                        </li>
                        <li class=\"phone\"><i class=\"fa fa-phone mr-2\"></i><a href=\"tel:0123 456 789\">0123 456 789</a>
                        </li>
                        <li class=\"linkedin\"><i class=\"fa fa-linkedin mr-2\"></i><a href=\"#\" target=\"_blank\">linkedin.com/in/alandoe</a>
                        </li>
                        <li class=\"github\"><i class=\"fa fa-facebook mr-2\"></i><a href=\"#\" target=\"_blank\">facebook.com/username</a>
                        </li>
                        <li class=\"twitter\"><i class=\"fa fa-twitter mr-2\"></i><a
                                href=\"https://twitter.com/3rdwave_themes\" target=\"_blank\">@twittername</a></li>
                  </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                  <h2 class=\"container-block-title\">Education</h2>
                  <div class=\"item\">
                        <h4 class=\"degree\">MSc in Computer Science</h4>
                        <h5 class=\"meta\">University of London</h5>
                        <div class=\"time\">2016 - 2018</div>
                  </div><!--//item-->
                  <div class=\"item\">
                        <h4 class=\"degree\">BSc in Applied Mathematics</h4>
                        <h5 class=\"meta\">Bristol University</h5>
                        <div class=\"time\">2011 - 2015</div>
                  </div><!--//item-->
            </div><!--//education-container-->

            <div class=\"languages-container container-block\">
                  <h2 class=\"container-block-title\">Languages</h2>
                  <ul class=\"list-unstyled interests-list\">
                        <li>English <span class=\"lang-desc\">(Native)</span></li>
                        <li>French <span class=\"lang-desc\">(Professional)</span></li>
                        <li>Spanish <span class=\"lang-desc\">(Professional)</span></li>
                  </ul>
            </div><!--//interests-->

            <div class=\"interests-container container-block\">
                  <h2 class=\"container-block-title\">Interests</h2>
                  <ul class=\"list-unstyled interests-list\">
                        <li>Climbing</li>
                        <li>Snowboarding</li>
                        <li>Cooking</li>
                  </ul>
            </div><!--//interests-->

      </div><!--//sidebar-wrapper-->

      <div class=\"main-wrapper mb-5\">
            <div class=\"op\">
                  <section class=\"section summary-section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-user\"></i></span>Profil</h2>
                        <div class=\"summary\">
                              <p>Aenean
                                    commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                    pellentesque eu.</p>
                        </div><!--//summary-->
                  </section><!--//section-->

                  <section class=\"section experiences-section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-briefcase\"></i></span>Experiences Professionnelles
                        </h2>

                        <div class=\"item\">
                              <div class=\"meta\">
                                    <div class=\"upper-row\">
                                          <h3 class=\"job-title\">Lead Developer</h3>
                                          <div class=\"time\">2019 - Present</div>
                                    </div><!--//upper-row-->
                                    <div class=\"company\">Startup Hubs, San Francisco</div>
                              </div><!--//meta-->
                              <div class=\"details\">
                                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                          ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                          enim. Donec pede justo.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                          veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                              </div><!--//details-->
                        </div><!--//item-->

                        <div class=\"item\">
                              <div class=\"meta\">
                                    <div class=\"upper-row\">
                                          <h3 class=\"job-title\">Senior Software Engineer</h3>
                                          <div class=\"time\">2018 - 2019</div>
                                    </div><!--//upper-row-->
                                    <div class=\"company\">Google, London</div>
                              </div><!--//meta-->
                              <div class=\"details\">
                                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                          ultricies nec, pellentesque eu, pretium quis, sem.</p>

                              </div><!--//details-->
                        </div><!--//item-->

                        <div class=\"item\">
                              <div class=\"meta\">
                                    <div class=\"upper-row\">
                                          <h3 class=\"job-title\">UI Developer</h3>
                                          <div class=\"time\">2016 - 2018</div>
                                    </div><!--//upper-row-->
                                    <div class=\"company\">Amazon, London</div>
                              </div><!--//meta-->
                              <div class=\"details\">
                                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                          ultricies nec, pellentesque eu, pretium quis, sem.</p>
                              </div><!--//details-->
                        </div><!--//item-->

                  </section><!--//section-->

                  <section class=\"section projects-section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-archive\"></i></span>Projects
                        </h2>
                        <div class=\"intro\">
                              <p>You can list your side projects or open source libraries in this section. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum
                                    fringilla a eu lectus.</p>
                        </div><!--//intro-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/\"
                                      target=\"_blank\">CoderPro</a></span> - <span class=\"project-tagline\">A responsive website template designed to help developers launch their software projects. </span>

                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/\"
                                      target=\"_blank\">Launch</a></span> - <span class=\"project-tagline\">A responsive website template designed to help startups promote their products or services.</span>
                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/\"
                                      target=\"_blank\">DevCard</a></span> - <span class=\"project-tagline\">A portfolio website template designed for software developers.</span>
                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/\"
                                      target=\"_blank\">Nova Pro</a></span> - <span class=\"project-tagline\">A responsive Bootstrap theme designed to help app developers promote their mobile apps</span>
                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\"
                                      target=\"_blank\">DevStudio</a></span> -
                              <span class=\"project-tagline\">A responsive website template designed to help web developers/designers market their services. </span>
                        </div><!--//item-->
                  </section><!--//section-->

                  <section class=\"skills-section section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-rocket\"></i></span>Skills
                              &amp; Proficiency</h2>
                        <div class=\"skillset\">
                              <div class=\"item\">
                                    <h3 class=\"level-title\">Python &amp; Django</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 99%\" aria-valuenow=\"99\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Javascript &amp; jQuery</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 98%\" aria-valuenow=\"98\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Angular</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 98%\" aria-valuenow=\"98\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">HTML5 &amp; CSS</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 95%\" aria-valuenow=\"95\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Ruby on Rails</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 85%\" aria-valuenow=\"85\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Sketch &amp; Photoshop</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                        </div>
                  </section><!--//skills-section-->
            </div>
      </div><!--//main-body-->
</div>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/cv.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>UAC Jobs | Actualités </title>

      <!-- Bootstrap -->
      <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
      <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
      <!-- Main CSS -->
      <link rel=\"stylesheet\" href=\"css/style.css\">
      <link rel=\"stylesheet\" href=\"css/cv-full.css\">
      <!-- Animate CSS -->
      <link rel=\"stylesheet\" href=\"css/animate.css\">
      <!-- Menu -->
      <link href=\"css/flexy-menu.css\" rel=\"stylesheet\">

      <!-- Font  -->
      <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
            type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
</head>
<body>
<a href=\"profil.html\"
   class=\"btn btn-block bg-primary mr-2 text-white py-2 font-weight-bold\"><i
        class=\"fa fa-arrow-left mr-2\"></i> Retour</a>
<div class=\"wrapper\">
      <div class=\"sidebar-wrapper\">
            <div class=\"profile-container\">
                  <img class=\"profile\" src=\"img/darren.png\" alt=\"\"/>
                  <h1 class=\"name\">Alan Doe</h1>
                  <h3 class=\"tagline\">Full Stack Developer</h3>
            </div><!--//profile-container-->

            <div class=\"contact-container container-block\">
                  <ul class=\"list-unstyled contact-list\">
                        <li class=\"email\"><i class=\"fa fa-envelope mr-2\"></i><a href=\"mailto: yourname@email.com\">vous@gmail.com</a>
                        </li>
                        <li class=\"phone\"><i class=\"fa fa-phone mr-2\"></i><a href=\"tel:0123 456 789\">0123 456 789</a>
                        </li>
                        <li class=\"linkedin\"><i class=\"fa fa-linkedin mr-2\"></i><a href=\"#\" target=\"_blank\">linkedin.com/in/alandoe</a>
                        </li>
                        <li class=\"github\"><i class=\"fa fa-facebook mr-2\"></i><a href=\"#\" target=\"_blank\">facebook.com/username</a>
                        </li>
                        <li class=\"twitter\"><i class=\"fa fa-twitter mr-2\"></i><a
                                href=\"https://twitter.com/3rdwave_themes\" target=\"_blank\">@twittername</a></li>
                  </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                  <h2 class=\"container-block-title\">Education</h2>
                  <div class=\"item\">
                        <h4 class=\"degree\">MSc in Computer Science</h4>
                        <h5 class=\"meta\">University of London</h5>
                        <div class=\"time\">2016 - 2018</div>
                  </div><!--//item-->
                  <div class=\"item\">
                        <h4 class=\"degree\">BSc in Applied Mathematics</h4>
                        <h5 class=\"meta\">Bristol University</h5>
                        <div class=\"time\">2011 - 2015</div>
                  </div><!--//item-->
            </div><!--//education-container-->

            <div class=\"languages-container container-block\">
                  <h2 class=\"container-block-title\">Languages</h2>
                  <ul class=\"list-unstyled interests-list\">
                        <li>English <span class=\"lang-desc\">(Native)</span></li>
                        <li>French <span class=\"lang-desc\">(Professional)</span></li>
                        <li>Spanish <span class=\"lang-desc\">(Professional)</span></li>
                  </ul>
            </div><!--//interests-->

            <div class=\"interests-container container-block\">
                  <h2 class=\"container-block-title\">Interests</h2>
                  <ul class=\"list-unstyled interests-list\">
                        <li>Climbing</li>
                        <li>Snowboarding</li>
                        <li>Cooking</li>
                  </ul>
            </div><!--//interests-->

      </div><!--//sidebar-wrapper-->

      <div class=\"main-wrapper mb-5\">
            <div class=\"op\">
                  <section class=\"section summary-section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-user\"></i></span>Profil</h2>
                        <div class=\"summary\">
                              <p>Aenean
                                    commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                    pellentesque eu.</p>
                        </div><!--//summary-->
                  </section><!--//section-->

                  <section class=\"section experiences-section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-briefcase\"></i></span>Experiences Professionnelles
                        </h2>

                        <div class=\"item\">
                              <div class=\"meta\">
                                    <div class=\"upper-row\">
                                          <h3 class=\"job-title\">Lead Developer</h3>
                                          <div class=\"time\">2019 - Present</div>
                                    </div><!--//upper-row-->
                                    <div class=\"company\">Startup Hubs, San Francisco</div>
                              </div><!--//meta-->
                              <div class=\"details\">
                                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                          ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                          enim. Donec pede justo.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                          veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                              </div><!--//details-->
                        </div><!--//item-->

                        <div class=\"item\">
                              <div class=\"meta\">
                                    <div class=\"upper-row\">
                                          <h3 class=\"job-title\">Senior Software Engineer</h3>
                                          <div class=\"time\">2018 - 2019</div>
                                    </div><!--//upper-row-->
                                    <div class=\"company\">Google, London</div>
                              </div><!--//meta-->
                              <div class=\"details\">
                                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                          ultricies nec, pellentesque eu, pretium quis, sem.</p>

                              </div><!--//details-->
                        </div><!--//item-->

                        <div class=\"item\">
                              <div class=\"meta\">
                                    <div class=\"upper-row\">
                                          <h3 class=\"job-title\">UI Developer</h3>
                                          <div class=\"time\">2016 - 2018</div>
                                    </div><!--//upper-row-->
                                    <div class=\"company\">Amazon, London</div>
                              </div><!--//meta-->
                              <div class=\"details\">
                                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                          ultricies nec, pellentesque eu, pretium quis, sem.</p>
                              </div><!--//details-->
                        </div><!--//item-->

                  </section><!--//section-->

                  <section class=\"section projects-section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-archive\"></i></span>Projects
                        </h2>
                        <div class=\"intro\">
                              <p>You can list your side projects or open source libraries in this section. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum
                                    fringilla a eu lectus.</p>
                        </div><!--//intro-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/\"
                                      target=\"_blank\">CoderPro</a></span> - <span class=\"project-tagline\">A responsive website template designed to help developers launch their software projects. </span>

                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/\"
                                      target=\"_blank\">Launch</a></span> - <span class=\"project-tagline\">A responsive website template designed to help startups promote their products or services.</span>
                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/\"
                                      target=\"_blank\">DevCard</a></span> - <span class=\"project-tagline\">A portfolio website template designed for software developers.</span>
                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/\"
                                      target=\"_blank\">Nova Pro</a></span> - <span class=\"project-tagline\">A responsive Bootstrap theme designed to help app developers promote their mobile apps</span>
                        </div><!--//item-->
                        <div class=\"item\">
                              <span class=\"project-title\"><a
                                      href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\"
                                      target=\"_blank\">DevStudio</a></span> -
                              <span class=\"project-tagline\">A responsive website template designed to help web developers/designers market their services. </span>
                        </div><!--//item-->
                  </section><!--//section-->

                  <section class=\"skills-section section\">
                        <h2 class=\"section-title\"><span class=\"icon-holder\"><i class=\"fas fa-rocket\"></i></span>Skills
                              &amp; Proficiency</h2>
                        <div class=\"skillset\">
                              <div class=\"item\">
                                    <h3 class=\"level-title\">Python &amp; Django</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 99%\" aria-valuenow=\"99\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Javascript &amp; jQuery</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 98%\" aria-valuenow=\"98\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Angular</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 98%\" aria-valuenow=\"98\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">HTML5 &amp; CSS</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 95%\" aria-valuenow=\"95\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Ruby on Rails</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 85%\" aria-valuenow=\"85\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                              <div class=\"item\">
                                    <h3 class=\"level-title\">Sketch &amp; Photoshop</h3>
                                    <div class=\"progress level-bar\">
                                          <div class=\"progress-bar theme-progress-bar\" role=\"progressbar\"
                                               style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\"
                                               aria-valuemax=\"100\"></div>
                                    </div>
                              </div><!--//item-->

                        </div>
                  </section><!--//skills-section-->
            </div>
      </div><!--//main-body-->
</div>


</body>
</html>", "student/cv.html", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\cv.html");
    }
}
