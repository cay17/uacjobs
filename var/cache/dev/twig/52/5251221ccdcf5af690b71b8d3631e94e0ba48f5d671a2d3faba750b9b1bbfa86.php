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

/* student/editcv.html */
class __TwigTemplate_a639c16f652181f96bc92506f719f7a421b69be878716e694fe027f60fdb82c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/editcv.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/editcv.html"));

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
      <link rel=\"stylesheet\" href=\"css/cv-form.css\">
      <link rel=\"stylesheet\" href=\"css/profil.css\">
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


<!--header-->
<header>
      <nav class=\"navbar p-0 navbar-expand-xl d-flex justify-content-between align-items-center\">
            <div class=\"bg-yellow-1\">
                  <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"#\">
                        <h1 class=\"text-head py-3\">UAC JOBS</h1>
                  </a>
            </div>
            <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
                  <ul class=\"flexy-menu orange d-lg-flex justify-content-lg-between justify-content-xl-end text-center align-items-center\">
                        <li class=\"dropdown\">
                              <a class=\"dropdown-toggle\" href=\"index.html\" id=\"dropdownMenuLink\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Acceuil
                              </a>

                              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                             href=\"actualites.html\">Actualités</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"publications.html\">Publications</a></li>
                                    <li><a class=\"dropdown-item  text-dark\" href=\"galery.html\">Galerie</a></li>
                              </ul>
                        </li>
                        <li class=\"dropdown\">
                              <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Opportunités
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                             href=\"stages.html\">Stages</a></li>
                                    <li><a class=\"dropdown-item \" href=\"emplois.html\">Emplois</a></li>
                              </ul>
                        </li>
                        <li class=\"dropdown\">
                              <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ressources éducatives
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"trucs.html\">Trucs et
                                          astuces</a></li>
                                    <li><a class=\"dropdown-item \" href=\"podcast.html\">Podcast Employabilité</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"faq.html\">Foire aux questions</a>
                                    </li>
                              </ul>
                        </li>
                        <li><a href=\"about.html\">A propos</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                        <li class=\"active dropdown\">
                              <a class=\"dropdown-toggle bg-primary text-white\" href=\"#\" id=\"dropdownMenuLink3\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=\"img/darren.png\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                                    <span>Richard Aignon</span>
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"trucs.html\">Mes
                                          soumissions</a></li>
                                    <li><a class=\"dropdown-item \" href=\"profil.html\">Mon profil</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"faq.html\">Déconnexion</a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </div>
      </nav>
</header>
<!--header-->


<div class=\"dream-university-subpage\">

      <div class=\" py-5 container\">
            <section id=\"content\" class=\"\">
                  <!-- Begin .page-heading -->
                  <div class=\"page-heading\">
                        <div class=\"d-block d-lg-flex\">
                              <div class=\"pr30 mr-lg-3 w-30\">
                                    <a href=\"#\">
                                          <img class=\"media-object mw150 img-fluid\" src=\"img/darren.png\"
                                               alt=\"...\">
                                    </a>
                              </div>
                              <div class=\"media-body va-m\">
                                    <h2 class=\"media-heading text-primary\">Richard Aignon
                                    </h2>
                                    <p class=\"h6\">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod
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

                  <h2 class=\"text-secondary text-center mt-5\">Edition de mon CV</h2>
                  <div class=\"row\">
                        <div class=\"col-md-12\">

                              <div class=\"m-0 p-0\">
                                    <div class=\"m-0\" style=\"height: 100%;\">
                                          <div>
                                                <div class=\"\">
                                                      <div class=\"col-12 p-md-5 justify-content-lg-center p-18-sm flex-sm-column\">
                                                            <ul class=\"nav nav-tabs pills nav-justified\" id=\"pills-tab\"
                                                                role=\"tablist\">
                                                                  <li class=\"nav-item pills-item active\">
                                                                        <a class=\"nav-link link\"
                                                                           id=\"pills-identification-tab\"
                                                                           data-toggle=\"pill\"
                                                                           href=\"#pills-identification\" role=\"tab\"
                                                                           aria-controls=\"pills-identification\"
                                                                           aria-selected=\"true\">
                                                                              <span class=\"badge rounded-circle bg-white text-primary\">01</span>
                                                                              Identification
                                                                        </a>
                                                                  </li>
                                                                  <li class=\"nav-item pills-item\">
                                                                        <a class=\"nav-link link\" id=\"pills-contenu-tab\"
                                                                           data-toggle=\"pill\" href=\"#pills-contenu\"
                                                                           role=\"tab\"
                                                                           aria-controls=\"pills-contenu\"
                                                                           aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary custom-badge-mobile\">
                            02
                        </span>
                                                                              Contenu
                                                                        </a>
                                                                  </li>
                                                                  <li class=\"nav-item pills-item\">
                                                                        <a class=\"nav-link link\"
                                                                           id=\"pills-enregistrement-tab\"
                                                                           data-toggle=\"pill\"
                                                                           href=\"#pills-enregistrement\" role=\"tab\"
                                                                           aria-controls=\"pills-enregistrement\"
                                                                           aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary\">
                            03
                        </span>
                                                                              Enregistrement
                                                                        </a>
                                                                  </li>
                                                            </ul>
                                                            <div class=\"tab-content text-primary border-primary rounded\"
                                                                 id=\"pills-tabContent\">
                                                                  <div class=\"tab-pane fade show active\" id=\"pills-identification\" role=\"tabpanel\"
                                                                       aria-labelledby=\"pills-identification-tab\">
                                                                        <div class=\"container\">
                                                                              <div class=\"row\">
                                                                                    <div class=\"col-lg-12 p-lg-4\">
                                                                                          <form id=\"identification-form\"
                                                                                                method=\"post\">
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Nom</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"nom\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Prénoms</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"prenom\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Adresse
                                                                                                                  de
                                                                                                                  résidence</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"adresse\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Nationalité</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"nationalite\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Téléphone</label>
                                                                                                            <input type=\"tel\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"phone\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Email</label>
                                                                                                            <input type=\"email\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"email\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Date
                                                                                                                  de
                                                                                                                  naissance</label>
                                                                                                            <div class=\"input-group\">
                                                                                                                  <select class=\"form-control border-primary mr-1\"
                                                                                                                          name=\"Jour\"
                                                                                                                          id=\"jour\">
                                                                                                                        <option value=\"\">
                                                                                                                              Jour
                                                                                                                        </option>
                                                                                                                        <option value=\"1\">
                                                                                                                              1
                                                                                                                        </option>
                                                                                                                        <option value=\"2\">
                                                                                                                              2
                                                                                                                        </option>
                                                                                                                        <option value=\"3\">
                                                                                                                              3
                                                                                                                        </option>
                                                                                                                        <option value=\"4\">
                                                                                                                              4
                                                                                                                        </option>
                                                                                                                        <option value=\"5\">
                                                                                                                              5
                                                                                                                        </option>
                                                                                                                        <option value=\"6\">
                                                                                                                              6
                                                                                                                        </option>
                                                                                                                        <option value=\"7\">
                                                                                                                              7
                                                                                                                        </option>
                                                                                                                        <option value=\"8\">
                                                                                                                              8
                                                                                                                        </option>
                                                                                                                        <option value=\"9\">
                                                                                                                              9
                                                                                                                        </option>
                                                                                                                        <option value=\"10\">
                                                                                                                              10
                                                                                                                        </option>
                                                                                                                        <option value=\"11\">
                                                                                                                              11
                                                                                                                        </option>
                                                                                                                        <option value=\"12\">
                                                                                                                              12
                                                                                                                        </option>
                                                                                                                        <option value=\"13\">
                                                                                                                              13
                                                                                                                        </option>
                                                                                                                        <option value=\"14\">
                                                                                                                              14
                                                                                                                        </option>
                                                                                                                        <option value=\"15\">
                                                                                                                              15
                                                                                                                        </option>
                                                                                                                        <option value=\"16\">
                                                                                                                              16
                                                                                                                        </option>
                                                                                                                        <option value=\"17\">
                                                                                                                              17
                                                                                                                        </option>
                                                                                                                        <option value=\"18\">
                                                                                                                              18
                                                                                                                        </option>
                                                                                                                        <option value=\"19\">
                                                                                                                              19
                                                                                                                        </option>
                                                                                                                        <option value=\"20\">
                                                                                                                              20
                                                                                                                        </option>
                                                                                                                        <option value=\"21\">
                                                                                                                              21
                                                                                                                        </option>
                                                                                                                        <option value=\"22\">
                                                                                                                              22
                                                                                                                        </option>
                                                                                                                        <option value=\"23\">
                                                                                                                              23
                                                                                                                        </option>
                                                                                                                        <option value=\"24\">
                                                                                                                              24
                                                                                                                        </option>
                                                                                                                        <option value=\"25\">
                                                                                                                              25
                                                                                                                        </option>
                                                                                                                        <option value=\"2\">
                                                                                                                              2
                                                                                                                        </option>
                                                                                                                        <option value=\"26\">
                                                                                                                              26
                                                                                                                        </option>
                                                                                                                        <option value=\"4\">
                                                                                                                              4
                                                                                                                        </option>
                                                                                                                        <option value=\"27\">
                                                                                                                              27
                                                                                                                        </option>
                                                                                                                        <option value=\"28\">
                                                                                                                              28
                                                                                                                        </option>
                                                                                                                        <option value=\"29\">
                                                                                                                              29
                                                                                                                        </option>
                                                                                                                        <option value=\"30\">
                                                                                                                              30
                                                                                                                        </option>
                                                                                                                        <option value=\"31\">
                                                                                                                              31
                                                                                                                        </option>
                                                                                                                  </select>
                                                                                                                  <select class=\"form-control border-primary mr-1\"
                                                                                                                          name=\"mois\"
                                                                                                                          id=\"mois\">
                                                                                                                        <option value=\"\">
                                                                                                                              Mois
                                                                                                                        </option>
                                                                                                                        <option value=\"1\">
                                                                                                                              Janvier
                                                                                                                        </option>
                                                                                                                        <option value=\"2\">
                                                                                                                              Février
                                                                                                                        </option>
                                                                                                                        <option value=\"3\">
                                                                                                                              Mars
                                                                                                                        </option>
                                                                                                                        <option value=\"4\">
                                                                                                                              Avril
                                                                                                                        </option>
                                                                                                                        <option value=\"5\">
                                                                                                                              Mai
                                                                                                                        </option>
                                                                                                                        <option value=\"6\">
                                                                                                                              Juin
                                                                                                                        </option>
                                                                                                                        <option value=\"7\">
                                                                                                                              Juillet
                                                                                                                        </option>
                                                                                                                        <option value=\"8\">
                                                                                                                              Aout
                                                                                                                        </option>
                                                                                                                        <option value=\"9\">
                                                                                                                              Septembre
                                                                                                                        </option>
                                                                                                                        <option value=\"10\">
                                                                                                                              Octobre
                                                                                                                        </option>
                                                                                                                        <option value=\"11\">
                                                                                                                              Novembre
                                                                                                                        </option>
                                                                                                                        <option value=\"12\">
                                                                                                                              Décembre
                                                                                                                        </option>
                                                                                                                  </select>
                                                                                                                  <select class=\"form-control border-primary\"
                                                                                                                          name=\"annee\"
                                                                                                                          id=\"annee\">
                                                                                                                        <option value=\"\">
                                                                                                                              Année
                                                                                                                        </option>
                                                                                                                        <option value=\"2020\">
                                                                                                                              2020
                                                                                                                        </option>
                                                                                                                        <option value=\"2019\">
                                                                                                                              2019
                                                                                                                        </option>
                                                                                                                        <option value=\"2018\">
                                                                                                                              2018
                                                                                                                        </option>
                                                                                                                        <option value=\"2017\">
                                                                                                                              2017
                                                                                                                        </option>
                                                                                                                        <option value=\"2016\">
                                                                                                                              2016
                                                                                                                        </option>
                                                                                                                        <option value=\"2015\">
                                                                                                                              2015
                                                                                                                        </option>
                                                                                                                        <option value=\"2014\">
                                                                                                                              2014
                                                                                                                        </option>
                                                                                                                        <option value=\"2013\">
                                                                                                                              2013
                                                                                                                        </option>
                                                                                                                        <option value=\"2012\">
                                                                                                                              2012
                                                                                                                        </option>
                                                                                                                        <option value=\"2011\">
                                                                                                                              2011
                                                                                                                        </option>
                                                                                                                        <option value=\"2010\">
                                                                                                                              2010
                                                                                                                        </option>
                                                                                                                        <option value=\"2009\">
                                                                                                                              2009
                                                                                                                        </option>
                                                                                                                        <option value=\"2008\">
                                                                                                                              2008
                                                                                                                        </option>
                                                                                                                        <option value=\"2007\">
                                                                                                                              2007
                                                                                                                        </option>
                                                                                                                        <option value=\"2006\">
                                                                                                                              2006
                                                                                                                        </option>
                                                                                                                        <option value=\"2005\">
                                                                                                                              2005
                                                                                                                        </option>
                                                                                                                        <option value=\"2004\">
                                                                                                                              2004
                                                                                                                        </option>
                                                                                                                        <option value=\"2003\">
                                                                                                                              2003
                                                                                                                        </option>
                                                                                                                        <option value=\"2002\">
                                                                                                                              2002
                                                                                                                        </option>
                                                                                                                        <option value=\"2001\">
                                                                                                                              2001
                                                                                                                        </option>
                                                                                                                        <option value=\"2000\">
                                                                                                                              2000
                                                                                                                        </option>
                                                                                                                        <option value=\"1999\">
                                                                                                                              1999
                                                                                                                        </option>
                                                                                                                        <option value=\"1998\">
                                                                                                                              1998
                                                                                                                        </option>
                                                                                                                        <option value=\"1997\">
                                                                                                                              1997
                                                                                                                        </option>
                                                                                                                        <option value=\"1996\">
                                                                                                                              1996
                                                                                                                        </option>
                                                                                                                        <option value=\"1995\">
                                                                                                                              1995
                                                                                                                        </option>
                                                                                                                        <option value=\"1994\">
                                                                                                                              1994
                                                                                                                        </option>
                                                                                                                        <option value=\"1993\">
                                                                                                                              1993
                                                                                                                        </option>
                                                                                                                        <option value=\"1992\">
                                                                                                                              1992
                                                                                                                        </option>
                                                                                                                        <option value=\"1991\">
                                                                                                                              1991
                                                                                                                        </option>
                                                                                                                        <option value=\"1990\">
                                                                                                                              1990
                                                                                                                        </option>
                                                                                                                        <option value=\"1989\">
                                                                                                                              1989
                                                                                                                        </option>
                                                                                                                        <option value=\"1988\">
                                                                                                                              1988
                                                                                                                        </option>
                                                                                                                        <option value=\"1987\">
                                                                                                                              1987
                                                                                                                        </option>
                                                                                                                        <option value=\"1986\">
                                                                                                                              1986
                                                                                                                        </option>
                                                                                                                        <option value=\"1985\">
                                                                                                                              1985
                                                                                                                        </option>
                                                                                                                        <option value=\"1984\">
                                                                                                                              1984
                                                                                                                        </option>
                                                                                                                        <option value=\"1983\">
                                                                                                                              1983
                                                                                                                        </option>
                                                                                                                        <option value=\"1982\">
                                                                                                                              1982
                                                                                                                        </option>
                                                                                                                        <option value=\"1981\">
                                                                                                                              1981
                                                                                                                        </option>
                                                                                                                        <option value=\"1980\">
                                                                                                                              1980
                                                                                                                        </option>
                                                                                                                        <option value=\"1979\">
                                                                                                                              1979
                                                                                                                        </option>
                                                                                                                        <option value=\"1978\">
                                                                                                                              1978
                                                                                                                        </option>
                                                                                                                        <option value=\"1977\">
                                                                                                                              1977
                                                                                                                        </option>
                                                                                                                        <option value=\"1976\">
                                                                                                                              1976
                                                                                                                        </option>
                                                                                                                        <option value=\"1975\">
                                                                                                                              1975
                                                                                                                        </option>
                                                                                                                        <option value=\"1974\">
                                                                                                                              1974
                                                                                                                        </option>
                                                                                                                        <option value=\"1973\">
                                                                                                                              1973
                                                                                                                        </option>
                                                                                                                        <option value=\"1972\">
                                                                                                                              1972
                                                                                                                        </option>
                                                                                                                        <option value=\"1971\">
                                                                                                                              1971
                                                                                                                        </option>
                                                                                                                        <option value=\"1970\">
                                                                                                                              1970
                                                                                                                        </option>
                                                                                                                        <option value=\"1969\">
                                                                                                                              1969
                                                                                                                        </option>
                                                                                                                        <option value=\"1968\">
                                                                                                                              1968
                                                                                                                        </option>
                                                                                                                        <option value=\"1967\">
                                                                                                                              1967
                                                                                                                        </option>
                                                                                                                        <option value=\"1966\">
                                                                                                                              1966
                                                                                                                        </option>
                                                                                                                        <option value=\"1965\">
                                                                                                                              1965
                                                                                                                        </option>
                                                                                                                        <option value=\"1964\">
                                                                                                                              1964
                                                                                                                        </option>
                                                                                                                        <option value=\"1963\">
                                                                                                                              1963
                                                                                                                        </option>
                                                                                                                        <option value=\"1962\">
                                                                                                                              1962
                                                                                                                        </option>
                                                                                                                        <option value=\"1961\">
                                                                                                                              1961
                                                                                                                        </option>
                                                                                                                        <option value=\"1960\">
                                                                                                                              1960
                                                                                                                        </option>
                                                                                                                  </select>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Situation
                                                                                                                  matrimoniale</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"stituation\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Type
                                                                                                                  de
                                                                                                                  permis
                                                                                                                  de
                                                                                                                  conduire</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"permis\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Ajouter
                                                                                                                  un
                                                                                                                  champ</label>
                                                                                                            <select class=\"form-control border-primary\"
                                                                                                                    name=\"champ\"
                                                                                                                    id=\"champ\">
                                                                                                                  <option value=\"\"></option>
                                                                                                                  <option value=\"lieu\"
                                                                                                                          id=\"lieu-naissance\">
                                                                                                                        Lieu
                                                                                                                        de
                                                                                                                        naissance
                                                                                                                  </option>
                                                                                                                  <option value=\"linkedin\">
                                                                                                                        Linkedin
                                                                                                                  </option>
                                                                                                                  <option value=\"autres\">
                                                                                                                        Autres
                                                                                                                        à
                                                                                                                        savoir
                                                                                                                  </option>
                                                                                                            </select>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row float-right\">
                                                                                                      <a href=\"#pills-contenu\" data-toggle=\"pill\"
                                                                                                         class=\"btn btn-md mr-17-px-sm mb-8-px-sm bg-primary text-white\">
                                                                                                            Suivant
                                                                                                      </a>
                                                                                                </div>
                                                                                          </form>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class=\"tab-pane fade pb-lg-5 show\" id=\"pills-contenu\"
                                                                       role=\"tabpanel\"
                                                                       aria-labelledby=\"pills-contenu-tab\">
                                                                        <div class=\"container\">
                                                                              <div class=\"row\">
                                                                                    <div class=\"col-lg-12\">
                                                                                          <form method=\"post\">
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Profil
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <div class=\"float-right mb-3\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </div>
                                                                                                            <div class=\"mt-4 pt-2\">
                                                                                                                  <div class=\"form-group p-2\">
                                                                                                                        <label for=\"profil-description\">Description</label>
                                                                                                                        <textarea
                                                                                                                                class=\"form-control border-primary\"
                                                                                                                                name=\"profil-description\"
                                                                                                                                id=\"profil-description\"
                                                                                                                                rows=\"3\"></textarea>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Formation
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_formation_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"formation_fields_wrap mt-4 pt-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Formation</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"formation\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Etablissement</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"etablissement\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Ville</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"ville\">
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"row pt-lg-1\">
                                                                                                                        <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    début</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-debut-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-debut-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"f\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    fin</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-fin-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-fin-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"2\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"form-group p-1\">
                                                                                                                        <label>Description</label>
                                                                                                                        <textarea
                                                                                                                                class=\"form-control border-primary\"
                                                                                                                                name=\"description-formation\"
                                                                                                                                rows=\"3\">
                                    </textarea>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\"p-3 border-0 add_formation_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  formation
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Expérience(s)
                                                                                                            professionnelle(s)
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_experience_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"experience_fields_wrap mt-4 pt-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Poste</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"poste\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Employeur</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"employeur\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Ville</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"ville-poste\">
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"row pt-1\">
                                                                                                                        <div class=\"col-12 col-lg-6  form-group\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    début</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-debut-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-debut-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    fin</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-fin-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-fin-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"1\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"form-group p-1\">
                                                                                                                        <label for=\"poste-description\">Description</label>
                                                                                                                        <textarea
                                                                                                                                class=\"form-control border-primary\"
                                                                                                                                id=\"poste-description\"
                                                                                                                                rows=\"3\">
                                    </textarea>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\"p-3 border-0 add_experience_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  expérience
                                                                                                                  professionnelle
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Compétences
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_competence_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"competence_fields_wrap mt-4 p-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Compétence</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"competence\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Niveau</label>
                                                                                                                              <select class=\"form-control border-primary\"
                                                                                                                                      name=\"niveau\"
                                                                                                                                      id=\"niveau\">
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                              </select>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\"p-3 border-0 add_competence_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  compétence
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Langues
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_langue_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"langue_fields_wrap mt-4 p-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Langues</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"langue\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Niveau</label>
                                                                                                                              <select class=\"form-control border-primary\"
                                                                                                                                      name=\"niveau-langue\"
                                                                                                                                      id=\"niveau-langue\">
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                              </select>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\" p-3 border-0 add_langue_field border-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  langue
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Centre
                                                                                                            d'intérêt
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_interest_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"interest_fields_wrap mt-3 p-lg-2\">
                                                                                                                  <div class=\"form-group\">
                                                                                                                        <label>Centre
                                                                                                                              d'intérêt</label>
                                                                                                                        <input type=\"text\"
                                                                                                                               class=\"form-control border-primary\"
                                                                                                                               name=\"interest\">
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\" p-3 border-0 add_interest_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  un
                                                                                                                  centre
                                                                                                                  d'intérêt
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row float-right\">
                                                                                                      <a href=\"#pills-enregistrement\" data-toggle=\"pill\"
                                                                                                         class=\"btn btn-md mr-17-px-sm mb-8-px-sm mr-lg-4 bg-primary text-light\">
                                                                                                            Suivant
                                                                                                      </a>
                                                                                                </div>
                                                                                          </form>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class=\"tab-pane fade p-lg-5 show\" id=\"pills-enregistrement\" role=\"tabpanel\"
                                                                       aria-labelledby=\"pills-contact-tab\">
                                                                        <div class=\"container\">
                                                                              <div class=\"row\">
                                                                                    <form action=\"\" method=\"\"
                                                                                          class=\"row\">
                                                                                          <div class=\"col-lg-5 col-12 border-primary rounded h-fit-content\">
                                                                                                <div class=\"text-center bg-white p-3 border-light rounded\">
                                                                                                      <img id=\"image_upload_preview\"
                                                                                                           src=\"./assets/img/icons8_user_100px_1@2x.png\"
                                                                                                           alt=\"\"
                                                                                                           width=\"172\"
                                                                                                           height=\"184\">
                                                                                                </div>
                                                                                                <div class=\"mt-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"photo\"
                                                                                                             id=\"photo\"
                                                                                                             class=\"custom-file-input opacity-0 overflow-hidden position-absolute z-index-1\"
                                                                                                             accept=\"image/*\"
                                                                                                             onchange=\"document.getElementById('image_upload_preview').src = window.URL.createObjectURL(this.files[0])\"/>
                                                                                                      <label for=\"photo\"
                                                                                                             class=\"w-100 text-white text-center bg-secondary py-3 d-inline-block cursor-pointer\">
                                                                                                            <i class=\"fa fa-picture-o\"></i>
                                                                                                            Ajouter une
                                                                                                            photo
                                                                                                      </label>
                                                                                                </div>
                                                                                                <hr/>
                                                                                          </div>
                                                                                          <div class=\"col-lg-7 col-12 px-4 justify-content-center\">
                                                                                                <h6 class=\"text-center text-uppercase p-4 text-primary\">
                                                                                                      importer des
                                                                                                      fichiers
                                                                                                </h6>
                                                                                                <label>Importer
                                                                                                      CV</label>
                                                                                                <div class=\"form-group custom-file mb-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"cv\"
                                                                                                             class=\"custom-file-input\">
                                                                                                      <label class=\"custom-file-label\"
                                                                                                             id=\"cv_label\">
                                                                                                      </label>
                                                                                                </div>

                                                                                                <label>Importer
                                                                                                      diplôme</label>
                                                                                                <div class=\"form-group custom-file mb-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"diplome\"
                                                                                                             class=\"custom-file-input\">
                                                                                                      <label class=\"custom-file-label\"
                                                                                                             id=\"diplome_label\">
                                                                                                      </label>
                                                                                                </div>

                                                                                                <label>Importer
                                                                                                      certification</label>
                                                                                                <div class=\"form-group custom-file mb-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"certification\"
                                                                                                             class=\"custom-file-input\">
                                                                                                      <label class=\"custom-file-label\"
                                                                                                             id=\"certification_label\">
                                                                                                      </label>
                                                                                                </div>
                                                                                                <div class=\"d-flex justify-content-around\">
                                                                                                      <a type=\"submit\"
                                                                                                         class=\"btn btn-md m-2 bg-primary text-light\">
                                                                                                            Plus tard
                                                                                                      </a>
                                                                                                      <a type=\"submit\"
                                                                                                         class=\"btn btn-md bg-primary m-2 text-white\">
                                                                                                            Valider
                                                                                                      </a>
                                                                                                </div>
                                                                                          </div>
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
                        </div>
                  </div>
            </section>
      </div>
</div>


<!--footer-->
<footer>
      <div class=\"container-fluid bg-dark m-0\">
            <div class=\"row\">
                  <div class=\"col-lg-8 col-12 text-white p-5\">
                        <span class=\"font-weight-bold h4 text-secondary\">Jobs Etudiants</span>
                        <span class=\"mt-3 small d-block\">
                              Réalisé par:
                        </span>
                        <ul class=\"font-weight-bold h6\">
                              <li class=\"my-3\">L'université d'Abomey-calavi</li>
                              <li>Le programme de bourses de la fondation Mastercard à l'UAC</li>
                        </ul>
                  </div>
                  <div class=\"col-lg-4 col-12 pt-5\">
                        <div class=\"du-scholarship-item wow fadeInLeft\">
                              <figure><img src=\"img/logo1.png\" width=250 alt=\"\"></figure>
                        </div>
                        <div class=\"du-scholarship-item wow fadeInLeft\">
                              <figure><img src=\"img/logo.png\" width=\"150\" alt=\"\"></figure>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container-fluid bg-secondary py-2 text-center text-white\">
            Copyright 2020 &copy; Tous droits réservés
      </div>
</footer>
<!-- End footer-->


<!-- Main jQuery & other 3rd party Library -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"js/library/jquery.easing.1.3.js\"></script>

<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"js/library/jquery.ui.totop.js\"></script>

<!-- Animation JS -->
<script type=\"text/javascript\" src=\"js/library/wow.js\"></script>
<script type=\"text/javascript\" src=\"js/library/device.min.js\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"js/library/flexy-menu.js\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"js/library/jquery.simple-text-rotator.min.js\"></script>
<!-- Smooth Scroll JS -->
<script type=\"text/javascript\" src=\"js/library/smoothscroll.js\"></script>

<!-- Custom script -->
<script type=\"text/javascript\" src=\"js/main.js\"></script>
<script type=\"text/javascript\" src=\"js/cv-form.js\"></script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/editcv.html";
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
      <link rel=\"stylesheet\" href=\"css/cv-form.css\">
      <link rel=\"stylesheet\" href=\"css/profil.css\">
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


<!--header-->
<header>
      <nav class=\"navbar p-0 navbar-expand-xl d-flex justify-content-between align-items-center\">
            <div class=\"bg-yellow-1\">
                  <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"#\">
                        <h1 class=\"text-head py-3\">UAC JOBS</h1>
                  </a>
            </div>
            <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
                  <ul class=\"flexy-menu orange d-lg-flex justify-content-lg-between justify-content-xl-end text-center align-items-center\">
                        <li class=\"dropdown\">
                              <a class=\"dropdown-toggle\" href=\"index.html\" id=\"dropdownMenuLink\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Acceuil
                              </a>

                              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                             href=\"actualites.html\">Actualités</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"publications.html\">Publications</a></li>
                                    <li><a class=\"dropdown-item  text-dark\" href=\"galery.html\">Galerie</a></li>
                              </ul>
                        </li>
                        <li class=\"dropdown\">
                              <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Opportunités
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                             href=\"stages.html\">Stages</a></li>
                                    <li><a class=\"dropdown-item \" href=\"emplois.html\">Emplois</a></li>
                              </ul>
                        </li>
                        <li class=\"dropdown\">
                              <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ressources éducatives
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"trucs.html\">Trucs et
                                          astuces</a></li>
                                    <li><a class=\"dropdown-item \" href=\"podcast.html\">Podcast Employabilité</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"faq.html\">Foire aux questions</a>
                                    </li>
                              </ul>
                        </li>
                        <li><a href=\"about.html\">A propos</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                        <li class=\"active dropdown\">
                              <a class=\"dropdown-toggle bg-primary text-white\" href=\"#\" id=\"dropdownMenuLink3\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=\"img/darren.png\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                                    <span>Richard Aignon</span>
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"trucs.html\">Mes
                                          soumissions</a></li>
                                    <li><a class=\"dropdown-item \" href=\"profil.html\">Mon profil</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"faq.html\">Déconnexion</a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </div>
      </nav>
</header>
<!--header-->


<div class=\"dream-university-subpage\">

      <div class=\" py-5 container\">
            <section id=\"content\" class=\"\">
                  <!-- Begin .page-heading -->
                  <div class=\"page-heading\">
                        <div class=\"d-block d-lg-flex\">
                              <div class=\"pr30 mr-lg-3 w-30\">
                                    <a href=\"#\">
                                          <img class=\"media-object mw150 img-fluid\" src=\"img/darren.png\"
                                               alt=\"...\">
                                    </a>
                              </div>
                              <div class=\"media-body va-m\">
                                    <h2 class=\"media-heading text-primary\">Richard Aignon
                                    </h2>
                                    <p class=\"h6\">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod
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

                  <h2 class=\"text-secondary text-center mt-5\">Edition de mon CV</h2>
                  <div class=\"row\">
                        <div class=\"col-md-12\">

                              <div class=\"m-0 p-0\">
                                    <div class=\"m-0\" style=\"height: 100%;\">
                                          <div>
                                                <div class=\"\">
                                                      <div class=\"col-12 p-md-5 justify-content-lg-center p-18-sm flex-sm-column\">
                                                            <ul class=\"nav nav-tabs pills nav-justified\" id=\"pills-tab\"
                                                                role=\"tablist\">
                                                                  <li class=\"nav-item pills-item active\">
                                                                        <a class=\"nav-link link\"
                                                                           id=\"pills-identification-tab\"
                                                                           data-toggle=\"pill\"
                                                                           href=\"#pills-identification\" role=\"tab\"
                                                                           aria-controls=\"pills-identification\"
                                                                           aria-selected=\"true\">
                                                                              <span class=\"badge rounded-circle bg-white text-primary\">01</span>
                                                                              Identification
                                                                        </a>
                                                                  </li>
                                                                  <li class=\"nav-item pills-item\">
                                                                        <a class=\"nav-link link\" id=\"pills-contenu-tab\"
                                                                           data-toggle=\"pill\" href=\"#pills-contenu\"
                                                                           role=\"tab\"
                                                                           aria-controls=\"pills-contenu\"
                                                                           aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary custom-badge-mobile\">
                            02
                        </span>
                                                                              Contenu
                                                                        </a>
                                                                  </li>
                                                                  <li class=\"nav-item pills-item\">
                                                                        <a class=\"nav-link link\"
                                                                           id=\"pills-enregistrement-tab\"
                                                                           data-toggle=\"pill\"
                                                                           href=\"#pills-enregistrement\" role=\"tab\"
                                                                           aria-controls=\"pills-enregistrement\"
                                                                           aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary\">
                            03
                        </span>
                                                                              Enregistrement
                                                                        </a>
                                                                  </li>
                                                            </ul>
                                                            <div class=\"tab-content text-primary border-primary rounded\"
                                                                 id=\"pills-tabContent\">
                                                                  <div class=\"tab-pane fade show active\" id=\"pills-identification\" role=\"tabpanel\"
                                                                       aria-labelledby=\"pills-identification-tab\">
                                                                        <div class=\"container\">
                                                                              <div class=\"row\">
                                                                                    <div class=\"col-lg-12 p-lg-4\">
                                                                                          <form id=\"identification-form\"
                                                                                                method=\"post\">
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Nom</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"nom\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Prénoms</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"prenom\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Adresse
                                                                                                                  de
                                                                                                                  résidence</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"adresse\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Nationalité</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"nationalite\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Téléphone</label>
                                                                                                            <input type=\"tel\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"phone\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Email</label>
                                                                                                            <input type=\"email\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"email\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Date
                                                                                                                  de
                                                                                                                  naissance</label>
                                                                                                            <div class=\"input-group\">
                                                                                                                  <select class=\"form-control border-primary mr-1\"
                                                                                                                          name=\"Jour\"
                                                                                                                          id=\"jour\">
                                                                                                                        <option value=\"\">
                                                                                                                              Jour
                                                                                                                        </option>
                                                                                                                        <option value=\"1\">
                                                                                                                              1
                                                                                                                        </option>
                                                                                                                        <option value=\"2\">
                                                                                                                              2
                                                                                                                        </option>
                                                                                                                        <option value=\"3\">
                                                                                                                              3
                                                                                                                        </option>
                                                                                                                        <option value=\"4\">
                                                                                                                              4
                                                                                                                        </option>
                                                                                                                        <option value=\"5\">
                                                                                                                              5
                                                                                                                        </option>
                                                                                                                        <option value=\"6\">
                                                                                                                              6
                                                                                                                        </option>
                                                                                                                        <option value=\"7\">
                                                                                                                              7
                                                                                                                        </option>
                                                                                                                        <option value=\"8\">
                                                                                                                              8
                                                                                                                        </option>
                                                                                                                        <option value=\"9\">
                                                                                                                              9
                                                                                                                        </option>
                                                                                                                        <option value=\"10\">
                                                                                                                              10
                                                                                                                        </option>
                                                                                                                        <option value=\"11\">
                                                                                                                              11
                                                                                                                        </option>
                                                                                                                        <option value=\"12\">
                                                                                                                              12
                                                                                                                        </option>
                                                                                                                        <option value=\"13\">
                                                                                                                              13
                                                                                                                        </option>
                                                                                                                        <option value=\"14\">
                                                                                                                              14
                                                                                                                        </option>
                                                                                                                        <option value=\"15\">
                                                                                                                              15
                                                                                                                        </option>
                                                                                                                        <option value=\"16\">
                                                                                                                              16
                                                                                                                        </option>
                                                                                                                        <option value=\"17\">
                                                                                                                              17
                                                                                                                        </option>
                                                                                                                        <option value=\"18\">
                                                                                                                              18
                                                                                                                        </option>
                                                                                                                        <option value=\"19\">
                                                                                                                              19
                                                                                                                        </option>
                                                                                                                        <option value=\"20\">
                                                                                                                              20
                                                                                                                        </option>
                                                                                                                        <option value=\"21\">
                                                                                                                              21
                                                                                                                        </option>
                                                                                                                        <option value=\"22\">
                                                                                                                              22
                                                                                                                        </option>
                                                                                                                        <option value=\"23\">
                                                                                                                              23
                                                                                                                        </option>
                                                                                                                        <option value=\"24\">
                                                                                                                              24
                                                                                                                        </option>
                                                                                                                        <option value=\"25\">
                                                                                                                              25
                                                                                                                        </option>
                                                                                                                        <option value=\"2\">
                                                                                                                              2
                                                                                                                        </option>
                                                                                                                        <option value=\"26\">
                                                                                                                              26
                                                                                                                        </option>
                                                                                                                        <option value=\"4\">
                                                                                                                              4
                                                                                                                        </option>
                                                                                                                        <option value=\"27\">
                                                                                                                              27
                                                                                                                        </option>
                                                                                                                        <option value=\"28\">
                                                                                                                              28
                                                                                                                        </option>
                                                                                                                        <option value=\"29\">
                                                                                                                              29
                                                                                                                        </option>
                                                                                                                        <option value=\"30\">
                                                                                                                              30
                                                                                                                        </option>
                                                                                                                        <option value=\"31\">
                                                                                                                              31
                                                                                                                        </option>
                                                                                                                  </select>
                                                                                                                  <select class=\"form-control border-primary mr-1\"
                                                                                                                          name=\"mois\"
                                                                                                                          id=\"mois\">
                                                                                                                        <option value=\"\">
                                                                                                                              Mois
                                                                                                                        </option>
                                                                                                                        <option value=\"1\">
                                                                                                                              Janvier
                                                                                                                        </option>
                                                                                                                        <option value=\"2\">
                                                                                                                              Février
                                                                                                                        </option>
                                                                                                                        <option value=\"3\">
                                                                                                                              Mars
                                                                                                                        </option>
                                                                                                                        <option value=\"4\">
                                                                                                                              Avril
                                                                                                                        </option>
                                                                                                                        <option value=\"5\">
                                                                                                                              Mai
                                                                                                                        </option>
                                                                                                                        <option value=\"6\">
                                                                                                                              Juin
                                                                                                                        </option>
                                                                                                                        <option value=\"7\">
                                                                                                                              Juillet
                                                                                                                        </option>
                                                                                                                        <option value=\"8\">
                                                                                                                              Aout
                                                                                                                        </option>
                                                                                                                        <option value=\"9\">
                                                                                                                              Septembre
                                                                                                                        </option>
                                                                                                                        <option value=\"10\">
                                                                                                                              Octobre
                                                                                                                        </option>
                                                                                                                        <option value=\"11\">
                                                                                                                              Novembre
                                                                                                                        </option>
                                                                                                                        <option value=\"12\">
                                                                                                                              Décembre
                                                                                                                        </option>
                                                                                                                  </select>
                                                                                                                  <select class=\"form-control border-primary\"
                                                                                                                          name=\"annee\"
                                                                                                                          id=\"annee\">
                                                                                                                        <option value=\"\">
                                                                                                                              Année
                                                                                                                        </option>
                                                                                                                        <option value=\"2020\">
                                                                                                                              2020
                                                                                                                        </option>
                                                                                                                        <option value=\"2019\">
                                                                                                                              2019
                                                                                                                        </option>
                                                                                                                        <option value=\"2018\">
                                                                                                                              2018
                                                                                                                        </option>
                                                                                                                        <option value=\"2017\">
                                                                                                                              2017
                                                                                                                        </option>
                                                                                                                        <option value=\"2016\">
                                                                                                                              2016
                                                                                                                        </option>
                                                                                                                        <option value=\"2015\">
                                                                                                                              2015
                                                                                                                        </option>
                                                                                                                        <option value=\"2014\">
                                                                                                                              2014
                                                                                                                        </option>
                                                                                                                        <option value=\"2013\">
                                                                                                                              2013
                                                                                                                        </option>
                                                                                                                        <option value=\"2012\">
                                                                                                                              2012
                                                                                                                        </option>
                                                                                                                        <option value=\"2011\">
                                                                                                                              2011
                                                                                                                        </option>
                                                                                                                        <option value=\"2010\">
                                                                                                                              2010
                                                                                                                        </option>
                                                                                                                        <option value=\"2009\">
                                                                                                                              2009
                                                                                                                        </option>
                                                                                                                        <option value=\"2008\">
                                                                                                                              2008
                                                                                                                        </option>
                                                                                                                        <option value=\"2007\">
                                                                                                                              2007
                                                                                                                        </option>
                                                                                                                        <option value=\"2006\">
                                                                                                                              2006
                                                                                                                        </option>
                                                                                                                        <option value=\"2005\">
                                                                                                                              2005
                                                                                                                        </option>
                                                                                                                        <option value=\"2004\">
                                                                                                                              2004
                                                                                                                        </option>
                                                                                                                        <option value=\"2003\">
                                                                                                                              2003
                                                                                                                        </option>
                                                                                                                        <option value=\"2002\">
                                                                                                                              2002
                                                                                                                        </option>
                                                                                                                        <option value=\"2001\">
                                                                                                                              2001
                                                                                                                        </option>
                                                                                                                        <option value=\"2000\">
                                                                                                                              2000
                                                                                                                        </option>
                                                                                                                        <option value=\"1999\">
                                                                                                                              1999
                                                                                                                        </option>
                                                                                                                        <option value=\"1998\">
                                                                                                                              1998
                                                                                                                        </option>
                                                                                                                        <option value=\"1997\">
                                                                                                                              1997
                                                                                                                        </option>
                                                                                                                        <option value=\"1996\">
                                                                                                                              1996
                                                                                                                        </option>
                                                                                                                        <option value=\"1995\">
                                                                                                                              1995
                                                                                                                        </option>
                                                                                                                        <option value=\"1994\">
                                                                                                                              1994
                                                                                                                        </option>
                                                                                                                        <option value=\"1993\">
                                                                                                                              1993
                                                                                                                        </option>
                                                                                                                        <option value=\"1992\">
                                                                                                                              1992
                                                                                                                        </option>
                                                                                                                        <option value=\"1991\">
                                                                                                                              1991
                                                                                                                        </option>
                                                                                                                        <option value=\"1990\">
                                                                                                                              1990
                                                                                                                        </option>
                                                                                                                        <option value=\"1989\">
                                                                                                                              1989
                                                                                                                        </option>
                                                                                                                        <option value=\"1988\">
                                                                                                                              1988
                                                                                                                        </option>
                                                                                                                        <option value=\"1987\">
                                                                                                                              1987
                                                                                                                        </option>
                                                                                                                        <option value=\"1986\">
                                                                                                                              1986
                                                                                                                        </option>
                                                                                                                        <option value=\"1985\">
                                                                                                                              1985
                                                                                                                        </option>
                                                                                                                        <option value=\"1984\">
                                                                                                                              1984
                                                                                                                        </option>
                                                                                                                        <option value=\"1983\">
                                                                                                                              1983
                                                                                                                        </option>
                                                                                                                        <option value=\"1982\">
                                                                                                                              1982
                                                                                                                        </option>
                                                                                                                        <option value=\"1981\">
                                                                                                                              1981
                                                                                                                        </option>
                                                                                                                        <option value=\"1980\">
                                                                                                                              1980
                                                                                                                        </option>
                                                                                                                        <option value=\"1979\">
                                                                                                                              1979
                                                                                                                        </option>
                                                                                                                        <option value=\"1978\">
                                                                                                                              1978
                                                                                                                        </option>
                                                                                                                        <option value=\"1977\">
                                                                                                                              1977
                                                                                                                        </option>
                                                                                                                        <option value=\"1976\">
                                                                                                                              1976
                                                                                                                        </option>
                                                                                                                        <option value=\"1975\">
                                                                                                                              1975
                                                                                                                        </option>
                                                                                                                        <option value=\"1974\">
                                                                                                                              1974
                                                                                                                        </option>
                                                                                                                        <option value=\"1973\">
                                                                                                                              1973
                                                                                                                        </option>
                                                                                                                        <option value=\"1972\">
                                                                                                                              1972
                                                                                                                        </option>
                                                                                                                        <option value=\"1971\">
                                                                                                                              1971
                                                                                                                        </option>
                                                                                                                        <option value=\"1970\">
                                                                                                                              1970
                                                                                                                        </option>
                                                                                                                        <option value=\"1969\">
                                                                                                                              1969
                                                                                                                        </option>
                                                                                                                        <option value=\"1968\">
                                                                                                                              1968
                                                                                                                        </option>
                                                                                                                        <option value=\"1967\">
                                                                                                                              1967
                                                                                                                        </option>
                                                                                                                        <option value=\"1966\">
                                                                                                                              1966
                                                                                                                        </option>
                                                                                                                        <option value=\"1965\">
                                                                                                                              1965
                                                                                                                        </option>
                                                                                                                        <option value=\"1964\">
                                                                                                                              1964
                                                                                                                        </option>
                                                                                                                        <option value=\"1963\">
                                                                                                                              1963
                                                                                                                        </option>
                                                                                                                        <option value=\"1962\">
                                                                                                                              1962
                                                                                                                        </option>
                                                                                                                        <option value=\"1961\">
                                                                                                                              1961
                                                                                                                        </option>
                                                                                                                        <option value=\"1960\">
                                                                                                                              1960
                                                                                                                        </option>
                                                                                                                  </select>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Situation
                                                                                                                  matrimoniale</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"stituation\">
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row\">
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Type
                                                                                                                  de
                                                                                                                  permis
                                                                                                                  de
                                                                                                                  conduire</label>
                                                                                                            <input type=\"text\"
                                                                                                                   class=\"form-control border-primary\"
                                                                                                                   id=\"permis\">
                                                                                                      </div>
                                                                                                      <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                            <label>Ajouter
                                                                                                                  un
                                                                                                                  champ</label>
                                                                                                            <select class=\"form-control border-primary\"
                                                                                                                    name=\"champ\"
                                                                                                                    id=\"champ\">
                                                                                                                  <option value=\"\"></option>
                                                                                                                  <option value=\"lieu\"
                                                                                                                          id=\"lieu-naissance\">
                                                                                                                        Lieu
                                                                                                                        de
                                                                                                                        naissance
                                                                                                                  </option>
                                                                                                                  <option value=\"linkedin\">
                                                                                                                        Linkedin
                                                                                                                  </option>
                                                                                                                  <option value=\"autres\">
                                                                                                                        Autres
                                                                                                                        à
                                                                                                                        savoir
                                                                                                                  </option>
                                                                                                            </select>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row float-right\">
                                                                                                      <a href=\"#pills-contenu\" data-toggle=\"pill\"
                                                                                                         class=\"btn btn-md mr-17-px-sm mb-8-px-sm bg-primary text-white\">
                                                                                                            Suivant
                                                                                                      </a>
                                                                                                </div>
                                                                                          </form>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class=\"tab-pane fade pb-lg-5 show\" id=\"pills-contenu\"
                                                                       role=\"tabpanel\"
                                                                       aria-labelledby=\"pills-contenu-tab\">
                                                                        <div class=\"container\">
                                                                              <div class=\"row\">
                                                                                    <div class=\"col-lg-12\">
                                                                                          <form method=\"post\">
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Profil
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <div class=\"float-right mb-3\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </div>
                                                                                                            <div class=\"mt-4 pt-2\">
                                                                                                                  <div class=\"form-group p-2\">
                                                                                                                        <label for=\"profil-description\">Description</label>
                                                                                                                        <textarea
                                                                                                                                class=\"form-control border-primary\"
                                                                                                                                name=\"profil-description\"
                                                                                                                                id=\"profil-description\"
                                                                                                                                rows=\"3\"></textarea>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Formation
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_formation_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"formation_fields_wrap mt-4 pt-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Formation</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"formation\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Etablissement</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"etablissement\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Ville</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"ville\">
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"row pt-lg-1\">
                                                                                                                        <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    début</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-debut-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-debut-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"f\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    fin</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-fin-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-fin-formation\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"2\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"form-group p-1\">
                                                                                                                        <label>Description</label>
                                                                                                                        <textarea
                                                                                                                                class=\"form-control border-primary\"
                                                                                                                                name=\"description-formation\"
                                                                                                                                rows=\"3\">
                                    </textarea>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\"p-3 border-0 add_formation_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  formation
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Expérience(s)
                                                                                                            professionnelle(s)
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_experience_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"experience_fields_wrap mt-4 pt-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Poste</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"poste\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Employeur</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"employeur\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Ville</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"ville-poste\">
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"row pt-1\">
                                                                                                                        <div class=\"col-12 col-lg-6  form-group\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    début</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-debut-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-debut-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group\">
                                                                                                                              <label>Date
                                                                                                                                    de
                                                                                                                                    fin</label>
                                                                                                                              <div class=\"input-group\">
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"mois-fin-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Mois
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1\">
                                                                                                                                                Janvier
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2\">
                                                                                                                                                Février
                                                                                                                                          </option>
                                                                                                                                          <option value=\"3\">
                                                                                                                                                Mars
                                                                                                                                          </option>
                                                                                                                                          <option value=\"4\">
                                                                                                                                                Avril
                                                                                                                                          </option>
                                                                                                                                          <option value=\"5\">
                                                                                                                                                Mai
                                                                                                                                          </option>
                                                                                                                                          <option value=\"6\">
                                                                                                                                                Juin
                                                                                                                                          </option>
                                                                                                                                          <option value=\"7\">
                                                                                                                                                Juillet
                                                                                                                                          </option>
                                                                                                                                          <option value=\"8\">
                                                                                                                                                Aout
                                                                                                                                          </option>
                                                                                                                                          <option value=\"9\">
                                                                                                                                                Septembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"10\">
                                                                                                                                                Octobre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"11\">
                                                                                                                                                Novembre
                                                                                                                                          </option>
                                                                                                                                          <option value=\"12\">
                                                                                                                                                Décembre
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <select class=\"form-control border-primary\"
                                                                                                                                            name=\"annee-fin-poste\">
                                                                                                                                          <option value=\"\">
                                                                                                                                                Année
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2020\">
                                                                                                                                                2020
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2019\">
                                                                                                                                                2019
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2018\">
                                                                                                                                                2018
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2017\">
                                                                                                                                                2017
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2016\">
                                                                                                                                                2016
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2015\">
                                                                                                                                                2015
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2014\">
                                                                                                                                                2014
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2013\">
                                                                                                                                                2013
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2012\">
                                                                                                                                                2012
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2011\">
                                                                                                                                                2011
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2010\">
                                                                                                                                                2010
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2009\">
                                                                                                                                                2009
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2008\">
                                                                                                                                                2008
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2007\">
                                                                                                                                                2007
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2006\">
                                                                                                                                                2006
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2005\">
                                                                                                                                                2005
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2004\">
                                                                                                                                                2004
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2003\">
                                                                                                                                                2003
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2002\">
                                                                                                                                                2002
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2001\">
                                                                                                                                                2001
                                                                                                                                          </option>
                                                                                                                                          <option value=\"2000\">
                                                                                                                                                2000
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1999\">
                                                                                                                                                1999
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1998\">
                                                                                                                                                1998
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1997\">
                                                                                                                                                1997
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1996\">
                                                                                                                                                1996
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1995\">
                                                                                                                                                1995
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1994\">
                                                                                                                                                1994
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1993\">
                                                                                                                                                1993
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1992\">
                                                                                                                                                1992
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1991\">
                                                                                                                                                1991
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1990\">
                                                                                                                                                1990
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1989\">
                                                                                                                                                1989
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1988\">
                                                                                                                                                1988
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1987\">
                                                                                                                                                1987
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1986\">
                                                                                                                                                1986
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1985\">
                                                                                                                                                1985
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1984\">
                                                                                                                                                1984
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1983\">
                                                                                                                                                1983
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1982\">
                                                                                                                                                1982
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1981\">
                                                                                                                                                1981
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1980\">
                                                                                                                                                1980
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1979\">
                                                                                                                                                1979
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1978\">
                                                                                                                                                1978
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1977\">
                                                                                                                                                1977
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1976\">
                                                                                                                                                1976
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1975\">
                                                                                                                                                1975
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1974\">
                                                                                                                                                1974
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1973\">
                                                                                                                                                1973
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1972\">
                                                                                                                                                1972
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1971\">
                                                                                                                                                1971
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1970\">
                                                                                                                                                1970
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1969\">
                                                                                                                                                1969
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1968\">
                                                                                                                                                1968
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1967\">
                                                                                                                                                1967
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1966\">
                                                                                                                                                1966
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1965\">
                                                                                                                                                1965
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1964\">
                                                                                                                                                1964
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1963\">
                                                                                                                                                1963
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1962\">
                                                                                                                                                1962
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1961\">
                                                                                                                                                1961
                                                                                                                                          </option>
                                                                                                                                          <option value=\"1960\">
                                                                                                                                                1960
                                                                                                                                          </option>
                                                                                                                                    </select>
                                                                                                                                    <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"1\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                                                                    </div>
                                                                                                                              </div>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                                  <div class=\"form-group p-1\">
                                                                                                                        <label for=\"poste-description\">Description</label>
                                                                                                                        <textarea
                                                                                                                                class=\"form-control border-primary\"
                                                                                                                                id=\"poste-description\"
                                                                                                                                rows=\"3\">
                                    </textarea>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\"p-3 border-0 add_experience_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  expérience
                                                                                                                  professionnelle
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Compétences
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_competence_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"competence_fields_wrap mt-4 p-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Compétence</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"competence\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Niveau</label>
                                                                                                                              <select class=\"form-control border-primary\"
                                                                                                                                      name=\"niveau\"
                                                                                                                                      id=\"niveau\">
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                              </select>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\"p-3 border-0 add_competence_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  compétence
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Langues
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_langue_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"langue_fields_wrap mt-4 p-2\">
                                                                                                                  <div class=\"row\">
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Langues</label>
                                                                                                                              <input type=\"text\"
                                                                                                                                     class=\"form-control border-primary\"
                                                                                                                                     name=\"langue\">
                                                                                                                        </div>
                                                                                                                        <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                                                              <label>Niveau</label>
                                                                                                                              <select class=\"form-control border-primary\"
                                                                                                                                      name=\"niveau-langue\"
                                                                                                                                      id=\"niveau-langue\">
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                                    <option value=\"\"></option>
                                                                                                                              </select>
                                                                                                                        </div>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\" p-3 border-0 add_langue_field border-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  une
                                                                                                                  langue
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"m-lg-3\">
                                                                                                      <div class=\"accordion\">
                                                                                                            Centre
                                                                                                            d'intérêt
                                                                                                      </div>
                                                                                                      <div class=\"panel mt-2\">
                                                                                                            <button class=\"float-right border-0 remove_interest_field bg-light\">
                                                                                                                  <i class=\"fa fa-times-circle-o\"></i>
                                                                                                            </button>
                                                                                                            <div class=\"interest_fields_wrap mt-3 p-lg-2\">
                                                                                                                  <div class=\"form-group\">
                                                                                                                        <label>Centre
                                                                                                                              d'intérêt</label>
                                                                                                                        <input type=\"text\"
                                                                                                                               class=\"form-control border-primary\"
                                                                                                                               name=\"interest\">
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <button class=\" p-3 border-0 add_interest_field bg-light\">
                                                                                                                  <i class=\"fa fa-plus-circle\"></i>
                                                                                                                  Ajouter
                                                                                                                  un
                                                                                                                  centre
                                                                                                                  d'intérêt
                                                                                                            </button>
                                                                                                      </div>
                                                                                                </div>
                                                                                                <div class=\"row float-right\">
                                                                                                      <a href=\"#pills-enregistrement\" data-toggle=\"pill\"
                                                                                                         class=\"btn btn-md mr-17-px-sm mb-8-px-sm mr-lg-4 bg-primary text-light\">
                                                                                                            Suivant
                                                                                                      </a>
                                                                                                </div>
                                                                                          </form>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class=\"tab-pane fade p-lg-5 show\" id=\"pills-enregistrement\" role=\"tabpanel\"
                                                                       aria-labelledby=\"pills-contact-tab\">
                                                                        <div class=\"container\">
                                                                              <div class=\"row\">
                                                                                    <form action=\"\" method=\"\"
                                                                                          class=\"row\">
                                                                                          <div class=\"col-lg-5 col-12 border-primary rounded h-fit-content\">
                                                                                                <div class=\"text-center bg-white p-3 border-light rounded\">
                                                                                                      <img id=\"image_upload_preview\"
                                                                                                           src=\"./assets/img/icons8_user_100px_1@2x.png\"
                                                                                                           alt=\"\"
                                                                                                           width=\"172\"
                                                                                                           height=\"184\">
                                                                                                </div>
                                                                                                <div class=\"mt-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"photo\"
                                                                                                             id=\"photo\"
                                                                                                             class=\"custom-file-input opacity-0 overflow-hidden position-absolute z-index-1\"
                                                                                                             accept=\"image/*\"
                                                                                                             onchange=\"document.getElementById('image_upload_preview').src = window.URL.createObjectURL(this.files[0])\"/>
                                                                                                      <label for=\"photo\"
                                                                                                             class=\"w-100 text-white text-center bg-secondary py-3 d-inline-block cursor-pointer\">
                                                                                                            <i class=\"fa fa-picture-o\"></i>
                                                                                                            Ajouter une
                                                                                                            photo
                                                                                                      </label>
                                                                                                </div>
                                                                                                <hr/>
                                                                                          </div>
                                                                                          <div class=\"col-lg-7 col-12 px-4 justify-content-center\">
                                                                                                <h6 class=\"text-center text-uppercase p-4 text-primary\">
                                                                                                      importer des
                                                                                                      fichiers
                                                                                                </h6>
                                                                                                <label>Importer
                                                                                                      CV</label>
                                                                                                <div class=\"form-group custom-file mb-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"cv\"
                                                                                                             class=\"custom-file-input\">
                                                                                                      <label class=\"custom-file-label\"
                                                                                                             id=\"cv_label\">
                                                                                                      </label>
                                                                                                </div>

                                                                                                <label>Importer
                                                                                                      diplôme</label>
                                                                                                <div class=\"form-group custom-file mb-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"diplome\"
                                                                                                             class=\"custom-file-input\">
                                                                                                      <label class=\"custom-file-label\"
                                                                                                             id=\"diplome_label\">
                                                                                                      </label>
                                                                                                </div>

                                                                                                <label>Importer
                                                                                                      certification</label>
                                                                                                <div class=\"form-group custom-file mb-3\">
                                                                                                      <input type=\"file\"
                                                                                                             name=\"certification\"
                                                                                                             class=\"custom-file-input\">
                                                                                                      <label class=\"custom-file-label\"
                                                                                                             id=\"certification_label\">
                                                                                                      </label>
                                                                                                </div>
                                                                                                <div class=\"d-flex justify-content-around\">
                                                                                                      <a type=\"submit\"
                                                                                                         class=\"btn btn-md m-2 bg-primary text-light\">
                                                                                                            Plus tard
                                                                                                      </a>
                                                                                                      <a type=\"submit\"
                                                                                                         class=\"btn btn-md bg-primary m-2 text-white\">
                                                                                                            Valider
                                                                                                      </a>
                                                                                                </div>
                                                                                          </div>
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
                        </div>
                  </div>
            </section>
      </div>
</div>


<!--footer-->
<footer>
      <div class=\"container-fluid bg-dark m-0\">
            <div class=\"row\">
                  <div class=\"col-lg-8 col-12 text-white p-5\">
                        <span class=\"font-weight-bold h4 text-secondary\">Jobs Etudiants</span>
                        <span class=\"mt-3 small d-block\">
                              Réalisé par:
                        </span>
                        <ul class=\"font-weight-bold h6\">
                              <li class=\"my-3\">L'université d'Abomey-calavi</li>
                              <li>Le programme de bourses de la fondation Mastercard à l'UAC</li>
                        </ul>
                  </div>
                  <div class=\"col-lg-4 col-12 pt-5\">
                        <div class=\"du-scholarship-item wow fadeInLeft\">
                              <figure><img src=\"img/logo1.png\" width=250 alt=\"\"></figure>
                        </div>
                        <div class=\"du-scholarship-item wow fadeInLeft\">
                              <figure><img src=\"img/logo.png\" width=\"150\" alt=\"\"></figure>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container-fluid bg-secondary py-2 text-center text-white\">
            Copyright 2020 &copy; Tous droits réservés
      </div>
</footer>
<!-- End footer-->


<!-- Main jQuery & other 3rd party Library -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"js/library/jquery.easing.1.3.js\"></script>

<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"js/library/jquery.ui.totop.js\"></script>

<!-- Animation JS -->
<script type=\"text/javascript\" src=\"js/library/wow.js\"></script>
<script type=\"text/javascript\" src=\"js/library/device.min.js\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"js/library/flexy-menu.js\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"js/library/jquery.simple-text-rotator.min.js\"></script>
<!-- Smooth Scroll JS -->
<script type=\"text/javascript\" src=\"js/library/smoothscroll.js\"></script>

<!-- Custom script -->
<script type=\"text/javascript\" src=\"js/main.js\"></script>
<script type=\"text/javascript\" src=\"js/cv-form.js\"></script>


</body>
</html>", "student/editcv.html", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\editcv.html");
    }
}
