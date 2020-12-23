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

/* front/base.html.twig */
class __TwigTemplate_fddcefdf910f26f42646cd87300d36824e51bf64e588d222a3b51a4dc0803024 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

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
    <meta name=\"Description\" content=\"Site de présentation des opportunités de l'université d'Abomey-calavi pour accroitre la visibilité desopportunités professionnelles à l'endroit des étudiants de l'UAC\">
    <meta name=\"Copyright\" content=\"UAC 2020 tous droits réservés\">
    <meta name=\"Revisit-After\" content=\"5 days\">
    <meta name=\"Robots\" content=\"all\">
    <meta name=\"Rating\" content=\"general\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Main CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/animate.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/fonts/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Menu -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/flexy-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Testimonial CSS -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/cubeportfolio.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Font  -->
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
          type='text/css'>
    ";
        // line 31
        $this->displayBlock('css', $context, $blocks);
        // line 32
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
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center\">
                <li class=\"";
        // line 49
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), "news"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), "publication"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), "galerie"))) ? ("active") : (""));
        echo " dropdown\">
                    <a class=\"dropdown-toggle\" href=\"index.html.twig\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 58
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", [0 => "_route"], "method", false, false, false, 58), "news"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news")));
        echo "\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 61
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61), "publication"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication")));
        echo "\">Publications</a>
                        </li>
                        <li><a class=\"dropdown-item  text-dark\"
                               href=\"";
        // line 64
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64), "galerie"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie")));
        echo "\">Galerie</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 68
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", [0 => "_route"], "method", false, false, false, 68), "stages"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", [0 => "_route"], "method", false, false, false, 68), "emplois"))) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Opportunités
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 77
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "attributes", [], "any", false, false, false, 77), "get", [0 => "_route"], "method", false, false, false, 77), "stages"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stages")));
        echo "\">Stages</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 80
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", [0 => "_route"], "method", false, false, false, 80), "emplois"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emplois")));
        echo "\">Emplois</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 84
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", [0 => "_route"], "method", false, false, false, 84), "trucs"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", [0 => "_route"], "method", false, false, false, 84), "podcast"))) ? ("active") : (""));
        echo " ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", [0 => "_route"], "method", false, false, false, 84), "faq"))) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 93
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "attributes", [], "any", false, false, false, 93), "get", [0 => "_route"], "method", false, false, false, 93), "trucs"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trucs")));
        echo "\">Trucs
                                et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 97
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "attributes", [], "any", false, false, false, 97), "get", [0 => "_route"], "method", false, false, false, 97), "podcast"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("podcast")));
        echo "\">Podcast
                                Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 101
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "attributes", [], "any", false, false, false, 101), "get", [0 => "_route"], "method", false, false, false, 101), "faq"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq")));
        echo "\">Foire aux
                                questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 106
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", [0 => "_route"], "method", false, false, false, 106), "about"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 107
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, false, 107), "attributes", [], "any", false, false, false, 107), "get", [0 => "_route"], "method", false, false, false, 107), "about"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about")));
        echo "\">A
                        propos</a></li>
                <li class=\"";
        // line 109
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "attributes", [], "any", false, false, false, 109), "get", [0 => "_route"], "method", false, false, false, 109), "contact"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 110
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "attributes", [], "any", false, false, false, 110), "get", [0 => "_route"], "method", false, false, false, 110), "contact"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact")));
        echo "\">Contact</a>
                </li>
                <li style=\"background-color: #2a8c28\"><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prevcon");
        echo "\"
                                                         class=\"text-white\">Se connecter</a></li>
                <li class=\"";
        // line 114
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "attributes", [], "any", false, false, false, 114), "get", [0 => "_route"], "method", false, false, false, 114), "partenaire"))) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 115
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "attributes", [], "any", false, false, false, 115), "get", [0 => "_route"], "method", false, false, false, 115), "partenaire"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire")));
        echo "\">Partenaires</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "<footer>
    <section id=\"footer\" class=\" bg-dark\">
        <div class=\"container pt-5\">
            <div class=\"row text-center text-xs-center text-sm-left text-md-left\">
                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                    <a class=\" ml-lg-5 ml-3 mt-0 pt-0\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                        <h1 class=\"text-white pb-3 pt-0 mt-0\">UAC JOBS</h1>

                    </a>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4 text-center\">
                    <ul class=\"list-unstyled quick-links\">
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Accueil</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">A propos</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">FAQ</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Contact</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">
                                Partenaires
                            </a></li>
                        <br>
                    </ul>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4 text-center\">
                    <ul class=\"list-unstyled quick-links\">
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Opportunités</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Actualités</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Galerie</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Trucs et astuces</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">
                                Podcast employabilité
                            </a></li>
                        <br>
                    </ul>
                </div>
                <div class=\"col-12 text-center mt-5\">
                    <ul class=\"list-unstyled list-inline social text-center\">
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-facebook fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-twitter fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-instagram fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-google-plus fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"
                                                        target=\"_blank\"><i class=\"fa fa-envelope fa-1x\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4\">

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">

                </div>
                </hr>
            </div>
        </div>
    </section>
    <div class=\"container-fluid bg-secondary py-2 text-center text-white\">
        Copyright 2020 &copy; Tous droits réservés
    </div>
</footer>
<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/sForm.js"), "html", null, true);
        echo "\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/wow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/device.min.js"), "html", null, true);
        echo "\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/flexy-menu.js"), "html", null, true);
        echo "\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.simple-text-rotator.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/testimonials.js"), "html", null, true);
        echo "\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 219
        $this->displayBlock('js', $context, $blocks);
        // line 220
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

    // line 31
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

    // line 121
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

    // line 219
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
        return "front/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 219,  452 => 121,  433 => 31,  415 => 7,  404 => 220,  402 => 219,  398 => 218,  393 => 216,  389 => 215,  382 => 211,  377 => 209,  372 => 207,  368 => 206,  363 => 204,  358 => 202,  353 => 200,  347 => 197,  343 => 196,  339 => 195,  269 => 128,  262 => 123,  260 => 121,  251 => 115,  247 => 114,  242 => 112,  237 => 110,  233 => 109,  228 => 107,  224 => 106,  216 => 101,  209 => 97,  202 => 93,  186 => 84,  179 => 80,  173 => 77,  159 => 68,  152 => 64,  146 => 61,  140 => 58,  124 => 49,  115 => 43,  102 => 32,  100 => 31,  90 => 24,  85 => 22,  80 => 20,  75 => 18,  70 => 16,  65 => 14,  55 => 7,  47 => 1,);
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
    <meta name=\"Description\" content=\"Site de présentation des opportunités de l'université d'Abomey-calavi pour accroitre la visibilité desopportunités professionnelles à l'endroit des étudiants de l'UAC\">
    <meta name=\"Copyright\" content=\"UAC 2020 tous droits réservés\">
    <meta name=\"Revisit-After\" content=\"5 days\">
    <meta name=\"Robots\" content=\"all\">
    <meta name=\"Rating\" content=\"general\">
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
            <a class=\" ml-lg-5 ml-3 mt-0 d-flex align-items-center\" href=\"{{ path('index') }}\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center\">
                <li class=\"{{ (app.request.attributes.get('_route') == 'news')? 'active' }} {{ (app.request.attributes.get('_route') == 'publication')? 'active' }} {{ (app.request.attributes.get('_route') == 'galerie')? 'active' }} dropdown\">
                    <a class=\"dropdown-toggle\" href=\"index.html.twig\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'news')? '#' : path(\"news\") }}\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"{{ (app.request.attributes.get('_route') == 'publication')? '#' : path(\"publication\") }}\">Publications</a>
                        </li>
                        <li><a class=\"dropdown-item  text-dark\"
                               href=\"{{ (app.request.attributes.get('_route') == 'galerie')? '#' : path(\"galerie\") }}\">Galerie</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'stages')? 'active' }} {{ (app.request.attributes.get('_route') == 'emplois')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Opportunités
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'stages')? '#' : path(\"stages\") }}\">Stages</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"{{ (app.request.attributes.get('_route') == 'emplois')? '#' : path(\"emplois\") }}\">Emplois</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown {{ (app.request.attributes.get('_route') == 'trucs')? 'active' }} {{ (app.request.attributes.get('_route') == 'podcast')? 'active' }} {{ (app.request.attributes.get('_route') == 'faq')? 'active' }}\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"{{ (app.request.attributes.get('_route') == 'trucs')? '#' : path(\"trucs\") }}\">Trucs
                                et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \"
                               href=\"{{ (app.request.attributes.get('_route') == 'podcast')? '#' : path(\"podcast\") }}\">Podcast
                                Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"{{ (app.request.attributes.get('_route') == 'faq')? '#' : path(\"faq\") }}\">Foire aux
                                questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'about')? 'active' }}\"><a
                            href=\"{{ (app.request.attributes.get('_route') == 'about')? '#' : path(\"about\") }}\">A
                        propos</a></li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'contact')? 'active' }}\"><a
                            href=\"{{ (app.request.attributes.get('_route') == 'contact')? '#' : path(\"contact\") }}\">Contact</a>
                </li>
                <li style=\"background-color: #2a8c28\"><a href=\"{{ path('prevcon') }}\"
                                                         class=\"text-white\">Se connecter</a></li>
                <li class=\"{{ (app.request.attributes.get('_route') == 'partenaire')? 'active' }}\"><a
                            href=\"{{ (app.request.attributes.get('_route') == 'partenaire')? '#' : path(\"partenaire\") }}\">Partenaires</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
{% block body %}
{% endblock %}
<footer>
    <section id=\"footer\" class=\" bg-dark\">
        <div class=\"container pt-5\">
            <div class=\"row text-center text-xs-center text-sm-left text-md-left\">
                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                    <a class=\" ml-lg-5 ml-3 mt-0 pt-0\" href=\"{{ path('index') }}\">
                        <h1 class=\"text-white pb-3 pt-0 mt-0\">UAC JOBS</h1>

                    </a>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4 text-center\">
                    <ul class=\"list-unstyled quick-links\">
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Accueil</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">A propos</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">FAQ</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Contact</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">
                                Partenaires
                            </a></li>
                        <br>
                    </ul>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4 text-center\">
                    <ul class=\"list-unstyled quick-links\">
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Opportunités</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Actualités</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Galerie</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">Trucs et astuces</a></li>
                        <br><br>
                        <li class=\"nav-item\"><a href=\"\" class=\"text-white h6\">
                                Podcast employabilité
                            </a></li>
                        <br>
                    </ul>
                </div>
                <div class=\"col-12 text-center mt-5\">
                    <ul class=\"list-unstyled list-inline social text-center\">
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-facebook fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-twitter fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-instagram fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"><i
                                        class=\"fa fa-google-plus fa-1x\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-secondary\"
                                                        target=\"_blank\"><i class=\"fa fa-envelope fa-1x\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4\">

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">

                </div>
                </hr>
            </div>
        </div>
    </section>
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
</html>", "front/base.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\base.html.twig");
    }
}
