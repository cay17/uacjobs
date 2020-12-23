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

/* recruteur/mesoffres.html */
class __TwigTemplate_7ba42e4443691dd85f6a0565989258d8c6a31f80cedd15bec4571e38d5614e23 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/mesoffres.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/mesoffres.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>UAC Jobs | Mes opportunités </title>

      <!-- Bootstrap -->
      <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
      <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
      <!-- Main CSS -->
      <link rel=\"stylesheet\" href=\"css/style.css\">
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
                  <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center align-items-center\">
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
                        <li><a href=\"rechercheprofil.html\">Rechercher un profil étudiant</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                        <li class=\"active dropdown\">
                              <a class=\"dropdown-toggle bg-primary text-white\" href=\"#\" id=\"dropdownMenuLink3\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=\"img/logo.png\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                                    <span>recruteur</span>
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"create-opportunitie.html\">Créer une opportunité</a></li>
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"mesoffres.html\">Mes opportunités</a></li>
                                    <li><a class=\"dropdown-item \" href=\"profilrecruteurs.html\">Mon profil</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"#\">Déconnexion</a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </div>
      </nav>
</header>
<!--header-->


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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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

<!-- Custom script -->
<script type=\"text/javascript\" src=\"js/main.js\"></script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/mesoffres.html";
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
      <title>UAC Jobs | Mes opportunités </title>

      <!-- Bootstrap -->
      <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
      <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
      <!-- Main CSS -->
      <link rel=\"stylesheet\" href=\"css/style.css\">
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
                  <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center align-items-center\">
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
                        <li><a href=\"rechercheprofil.html\">Rechercher un profil étudiant</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                        <li class=\"active dropdown\">
                              <a class=\"dropdown-toggle bg-primary text-white\" href=\"#\" id=\"dropdownMenuLink3\"
                                 data-toggle=\"dropdown\"
                                 aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=\"img/logo.png\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                                    <span>recruteur</span>
                              </a>

                              <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"create-opportunitie.html\">Créer une opportunité</a></li>
                                    <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"mesoffres.html\">Mes opportunités</a></li>
                                    <li><a class=\"dropdown-item \" href=\"profilrecruteurs.html\">Mon profil</a>
                                    </li>
                                    <li><a class=\"dropdown-item \" href=\"#\">Déconnexion</a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </div>
      </nav>
</header>
<!--header-->


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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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
                                          <button class=\"text-white border-0 py-2 bg-secondary p-3\" title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                                          </button>
                                          <a href=\"opportunitesitem.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                                          </a>
                                          <a href=\"create-opportunitie.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                                          </a>
                                          <a href=\"soumissionslist.html\" class=\"text-white border-0 py-2 bg-primary ml-3 p-3\" title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
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

<!-- Custom script -->
<script type=\"text/javascript\" src=\"js/main.js\"></script>


</body>
</html>", "recruteur/mesoffres.html", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\mesoffres.html");
    }
}
