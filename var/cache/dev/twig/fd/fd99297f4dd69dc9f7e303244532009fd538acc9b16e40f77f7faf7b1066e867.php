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

/* recruteur/base.html.twig */
class __TwigTemplate_772639ad95025c456c264adc9de294f46d550d3d4bd1b006975a69b42621089b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>UAC Jobs | ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/animate.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/fonts/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Menu -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/flexy-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Testimonial CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/cubeportfolio.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Font  -->
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
          type='text/css'>
    ";
        // line 27
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <nav class=\"navbar p-0 navbar-expand-xl d-flex justify-content-between align-items-center\">
        <div class=\"\">
            <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"#\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center align-items-center\">
                <li class=\"dropdown ";
        // line 45
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "recr_publication")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "recr_news")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "recr_galerie")) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_index");
        echo "\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 54
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), "recr_news")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_news")));
        echo "\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 56
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", [0 => "_route"], "method", false, false, false, 56), "recr_publication")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_publication")));
        echo "\">Publications</a></li>
                        <li><a class=\"dropdown-item  text-dark\" href=\"";
        // line 57
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", [0 => "_route"], "method", false, false, false, 57), "recr_galerie")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_galerie")));
        echo "\">Galerie</a></li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 60
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), "recr_stages")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), "recr_emplois")) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Opportunités
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 69
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "attributes", [], "any", false, false, false, 69), "get", [0 => "_route"], "method", false, false, false, 69), "recr_stages")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_stages")));
        echo "\">Stages</a></li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 70
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", [0 => "_route"], "method", false, false, false, 70), "recr_emplois")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_emplois")));
        echo "\">Emplois</a></li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 73
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "recr_trucs")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "recr_podcast")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "recr_faq")) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"";
        // line 81
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", [0 => "_route"], "method", false, false, false, 81), "recr_trucs")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_trucs")));
        echo "\">Trucs et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 83
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83), "recr_podcast")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_podcast")));
        echo "\">Podcast Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 85
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", [0 => "_route"], "method", false, false, false, 85), "recr_faq")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_faq")));
        echo "\">Foire aux questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 89
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89), "recr_search")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89), "recr_search")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_search")));
        echo "\">Rechercher un profil étudiant</a></li>
                <li class=\"";
        // line 90
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", [0 => "_route"], "method", false, false, false, 90), "recr_contact")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", [0 => "_route"], "method", false, false, false, 90), "recr_contact")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_contact")));
        echo "\">Contact</a></li>
                <li class=\"dropdown \">
                    <a class=\"dropdown-toggle bg-primary text-white\" href=\"#\" id=\"dropdownMenuLink3\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                        <span>recruteur</span>
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"";
        // line 100
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "attributes", [], "any", false, false, false, 100), "get", [0 => "_route"], "method", false, false, false, 100), "recr_create_offer")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer")));
        echo "\">Créer une
                                opportunité</a></li>
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"";
        // line 102
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "attributes", [], "any", false, false, false, 102), "get", [0 => "_route"], "method", false, false, false, 102), "recr_offers")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offers")));
        echo "\">Mes opportunités</a></li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 103
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "attributes", [], "any", false, false, false, 103), "get", [0 => "_route"], "method", false, false, false, 103), "recr_profil")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_profil")));
        echo "\">Mon profil</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"#\">Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "<footer>
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
                    <figure><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo1.png"), "html", null, true);
        echo "\" width=250 alt=\"\"></figure>
                </div>
                <div class=\"du-scholarship-item wow fadeInLeft\">
                    <figure><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" width=\"150\" alt=\"\"></figure>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-secondary py-2 text-center text-white\">
        Copyright 2020 &copy; Tous droits réservés
    </div>
</footer>
<script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/sForm.js"), "html", null, true);
        echo "\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/wow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/device.min.js"), "html", null, true);
        echo "\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/flexy-menu.js"), "html", null, true);
        echo "\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.simple-text-rotator.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/testimonials.js"), "html", null, true);
        echo "\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 166
        $this->displayBlock('js', $context, $blocks);
        // line 167
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 166,  403 => 113,  384 => 27,  366 => 7,  355 => 167,  353 => 166,  349 => 165,  344 => 163,  340 => 162,  333 => 158,  328 => 156,  323 => 154,  319 => 153,  314 => 151,  309 => 149,  304 => 147,  298 => 144,  294 => 143,  290 => 142,  278 => 133,  272 => 130,  255 => 115,  253 => 113,  240 => 103,  236 => 102,  231 => 100,  223 => 95,  213 => 90,  207 => 89,  200 => 85,  195 => 83,  190 => 81,  175 => 73,  169 => 70,  165 => 69,  151 => 60,  145 => 57,  141 => 56,  136 => 54,  125 => 46,  117 => 45,  98 => 28,  96 => 27,  86 => 20,  81 => 18,  76 => 16,  71 => 14,  66 => 12,  61 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>UAC Jobs | {% block title %}{% endblock %}</title>

    <!-- Bootstrap -->
    <link href=\"{{ asset('build/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/style.css') }}\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/animate.css') }}\">
    <!-- Font Awesome Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('build/fonts/font-awesome.css') }}\">
    <!-- Menu -->
    <link href=\"{{ asset('build/css/flexy-menu.css') }}\" rel=\"stylesheet\">
    <!-- Testimonial CSS -->
    <link href=\"{{ asset('build/css/cubeportfolio.min.css') }}\" rel=\"stylesheet\">


    <!-- Font  -->
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
          type='text/css'>
    {% block css %} {% endblock %}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <nav class=\"navbar p-0 navbar-expand-xl d-flex justify-content-between align-items-center\">
        <div class=\"\">
            <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"#\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center align-items-center\">
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'recr_publication')? 'active' }} {{ (app.request.attributes.get('_route') == 'recr_news')? 'active' }} {{ (app.request.attributes.get('_route') == 'recr_galerie')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"{{ path('recr_index') }}\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'recr_news')? '#' : path(\"recr_news\") }}\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_publication')? '#' : path(\"recr_publication\") }}\">Publications</a></li>
                        <li><a class=\"dropdown-item  text-dark\" href=\"{{ (app.request.attributes.get('_route') == 'recr_galerie')? '#' : path(\"recr_galerie\") }}\">Galerie</a></li>
                    </ul>
                </li>
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'recr_stages')? 'active' }} {{ (app.request.attributes.get('_route') == 'recr_emplois')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Opportunités
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'recr_stages')? '#' : path(\"recr_stages\") }}\">Stages</a></li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_emplois')? '#' : path(\"recr_emplois\") }}\">Emplois</a></li>
                    </ul>
                </li>
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'recr_trucs')? 'active' }} {{ (app.request.attributes.get('_route') == 'recr_podcast')? 'active' }} {{ (app.request.attributes.get('_route') == 'recr_faq')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_trucs')? '#' : path(\"recr_trucs\") }}\">Trucs et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_podcast')? '#' : path(\"recr_podcast\") }}\">Podcast Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_faq')? '#' : path(\"recr_faq\") }}\">Foire aux questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'recr_search')? 'active' }}\"><a href=\"{{ (app.request.attributes.get('_route') == 'recr_search')? '#' : path(\"recr_search\") }}\">Rechercher un profil étudiant</a></li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'recr_contact')? 'active' }}\"><a href=\"{{ (app.request.attributes.get('_route') == 'recr_contact')? '#' : path(\"recr_contact\") }}\">Contact</a></li>
                <li class=\"dropdown \">
                    <a class=\"dropdown-toggle bg-primary text-white\" href=\"#\" id=\"dropdownMenuLink3\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img src=\"{{ asset('build/img/logo.png') }}\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                        <span>recruteur</span>
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_create_offer')? '#' : path(\"recr_create_offer\") }}\">Créer une
                                opportunité</a></li>
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_offers')? '#' : path(\"recr_offers\") }}\">Mes opportunités</a></li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'recr_profil')? '#' : path(\"recr_profil\") }}\">Mon profil</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"#\">Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
{% block body %}
{% endblock %}
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
                    <figure><img src=\"{{ asset('build/img/logo1.png') }}\" width=250 alt=\"\"></figure>
                </div>
                <div class=\"du-scholarship-item wow fadeInLeft\">
                    <figure><img src=\"{{ asset('build/img/logo.png') }}\" width=\"150\" alt=\"\"></figure>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-secondary py-2 text-center text-white\">
        Copyright 2020 &copy; Tous droits réservés
    </div>
</footer>
<script type=\"text/javascript\" src=\"{{ asset('build/js/jquery.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/bootstrap/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.easing.1.3.js') }}\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.equalheights.js') }}\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.ui.totop.js') }}\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/sForm.js') }}\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/wow.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/device.min.js') }}\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/flexy-menu.js') }}\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.simple-text-rotator.min.js') }}\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.cubeportfolio.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/testimonials.js') }}\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/main.js') }}\"></script>
{% block js %}{% endblock %}
</body>
</html>", "recruteur/base.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\base.html.twig");
    }
}
