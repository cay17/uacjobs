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

/* student/base.html.twig */
class __TwigTemplate_960e5f56c92eec43f7ec6e6f5a129e978197edef41469bac3f410942e6714827 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/base.html.twig"));

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
            <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_index");
        echo "\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center align-items-center\">
                <li class=\"dropdown ";
        // line 45
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "etu_publication"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "etu_news"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "etu_galerie"))) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_index");
        echo "\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 54
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), "etu_news"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_news")));
        echo "\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 56
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", [0 => "_route"], "method", false, false, false, 56), "etu_publication"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_publication")));
        echo "\">Publications</a></li>
                        <li><a class=\"dropdown-item  text-dark\" href=\"";
        // line 57
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", [0 => "_route"], "method", false, false, false, 57), "etu_galerie"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_galerie")));
        echo "\">Galerie</a></li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 60
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), "etu_stages"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), "etu_emplois"))) ? ("active") : (""));
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
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "attributes", [], "any", false, false, false, 69), "get", [0 => "_route"], "method", false, false, false, 69), "etu_stages"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_stages")));
        echo "\">Stages</a></li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 70
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", [0 => "_route"], "method", false, false, false, 70), "etu_emplois"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_emplois")));
        echo "\">Emplois</a></li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 73
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "etu_trucs"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "etu_podcast"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "etu_faq"))) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"";
        // line 81
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", [0 => "_route"], "method", false, false, false, 81), "etu_trucs"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_trucs")));
        echo "\">Trucs et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 83
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83), "etu_podcast"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_podcast")));
        echo "\">Podcast Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 85
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", [0 => "_route"], "method", false, false, false, 85), "etu_faq"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_faq")));
        echo "\">Foire aux questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 89
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89), "etu_search"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89), "etu_search"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_search")));
        echo "\">Rechercher</a></li>
                <li class=\"";
        // line 90
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", [0 => "_route"], "method", false, false, false, 90), "etu_contact"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", [0 => "_route"], "method", false, false, false, 90), "etu_contact"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_contact")));
        echo "\">Contact</a></li>
                <li class=\"active dropdown\">
                    <a class=\"dropdown-toggle bg-primary text-white d-flex align-items-center\" href=\"#\" id=\"dropdownMenuLink3\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
        // line 95
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "picture", [], "any", false, false, false, 95), null))) {
            // line 96
            echo "                        <i class=\"fa fa-user text-secondary mr-3 p-3 rounded-circle bg-white\" style=\"font-size: 25px;\"></i>
                        ";
        } else {
            // line 98
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
            echo "\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                        ";
        }
        // line 100
        echo "                        <span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "lastname", [], "any", false, false, false, 100), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
        echo "</span>
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"";
        // line 104
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "attributes", [], "any", false, false, false, 104), "get", [0 => "_route"], "method", false, false, false, 104), "etu_soumissions"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_soumissions")));
        echo "\">Mes
                                soumissions</a></li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 106
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", [0 => "_route"], "method", false, false, false, 106), "etu_profil"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_profil")));
        echo "\">Mon profil</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 118
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
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo1.png"), "html", null, true);
        echo "\" width=250 alt=\"\"></figure>
                </div>
                <div class=\"du-scholarship-item wow fadeInLeft\">
                    <figure><img src=\"";
        // line 136
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
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/sForm.js"), "html", null, true);
        echo "\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/wow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/device.min.js"), "html", null, true);
        echo "\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/flexy-menu.js"), "html", null, true);
        echo "\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.simple-text-rotator.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/testimonials.js"), "html", null, true);
        echo "\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 169
        $this->displayBlock('js', $context, $blocks);
        // line 170
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

    // line 116
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

    // line 169
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
        return "student/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 169,  419 => 116,  400 => 27,  382 => 7,  371 => 170,  369 => 169,  365 => 168,  360 => 166,  356 => 165,  349 => 161,  344 => 159,  339 => 157,  335 => 156,  330 => 154,  325 => 152,  320 => 150,  314 => 147,  310 => 146,  306 => 145,  294 => 136,  288 => 133,  271 => 118,  269 => 116,  258 => 108,  253 => 106,  248 => 104,  238 => 100,  232 => 98,  228 => 96,  226 => 95,  216 => 90,  210 => 89,  203 => 85,  198 => 83,  193 => 81,  178 => 73,  172 => 70,  168 => 69,  154 => 60,  148 => 57,  144 => 56,  139 => 54,  128 => 46,  120 => 45,  111 => 39,  98 => 28,  96 => 27,  86 => 20,  81 => 18,  76 => 16,  71 => 14,  66 => 12,  61 => 10,  55 => 7,  47 => 1,);
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
            <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"{{ path('etu_index') }}\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center align-items-center\">
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'etu_publication')? 'active' }} {{ (app.request.attributes.get('_route') == 'etu_news')? 'active' }} {{ (app.request.attributes.get('_route') == 'etu_galerie')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"{{ path('etu_index') }}\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'etu_news')? '#' : path(\"etu_news\") }}\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_publication')? '#' : path(\"etu_publication\") }}\">Publications</a></li>
                        <li><a class=\"dropdown-item  text-dark\" href=\"{{ (app.request.attributes.get('_route') == 'etu_galerie')? '#' : path(\"etu_galerie\") }}\">Galerie</a></li>
                    </ul>
                </li>
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'etu_stages')? 'active' }} {{ (app.request.attributes.get('_route') == 'etu_emplois')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Opportunités
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'etu_stages')? '#' : path(\"etu_stages\") }}\">Stages</a></li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_emplois')? '#' : path(\"etu_emplois\") }}\">Emplois</a></li>
                    </ul>
                </li>
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'etu_trucs')? 'active' }} {{ (app.request.attributes.get('_route') == 'etu_podcast')? 'active' }} {{ (app.request.attributes.get('_route') == 'etu_faq')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_trucs')? '#' : path(\"etu_trucs\") }}\">Trucs et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_podcast')? '#' : path(\"etu_podcast\") }}\">Podcast Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_faq')? '#' : path(\"etu_faq\") }}\">Foire aux questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'etu_search')? 'active' }}\"><a href=\"{{ (app.request.attributes.get('_route') == 'etu_search')? '#' : path(\"etu_search\") }}\">Rechercher</a></li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'etu_contact')? 'active' }}\"><a href=\"{{ (app.request.attributes.get('_route') == 'etu_contact')? '#' : path(\"etu_contact\") }}\">Contact</a></li>
                <li class=\"active dropdown\">
                    <a class=\"dropdown-toggle bg-primary text-white d-flex align-items-center\" href=\"#\" id=\"dropdownMenuLink3\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        {% if app.user.picture==null %}
                        <i class=\"fa fa-user text-secondary mr-3 p-3 rounded-circle bg-white\" style=\"font-size: 25px;\"></i>
                        {% else %}
                        <img src=\"{{ asset('build/img/darren.png') }}\" class=\"img-fluid rounded-circle\" width=\"40\"/>
                        {% endif %}
                        <span>{{ app.user.lastname }} {{ app.user.name }}</span>
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink3\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_soumissions')? '#' : path(\"etu_soumissions\") }}\">Mes
                                soumissions</a></li>
                        <li><a class=\"dropdown-item \" href=\"{{ (app.request.attributes.get('_route') == 'etu_profil')? '#' : path(\"etu_profil\") }}\">Mon profil</a>
                        </li>
                        <li><a class=\"dropdown-item \" href=\"{{ path('app_logout') }}\">Déconnexion</a>
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
</html>", "student/base.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\base.html.twig");
    }
}
