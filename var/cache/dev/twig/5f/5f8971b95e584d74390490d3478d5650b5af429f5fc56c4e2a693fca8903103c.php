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
class __TwigTemplate_e98e68a6ae49bfd3e7fac464a0c9dae4a4c1a8911052eba036151bef015ecd3a extends Template
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                <h1 class=\"text-primary py-3\">UAC JOBS</h1>
            </a>
        </div>
        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNav\">
            <ul class=\"flexy-menu orange d-lg-flex justify-content-xl-end justify-content-lg-between text-center\">
                <li class=\"";
        // line 45
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "news")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "publication")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "galerie")) ? ("active") : (""));
        echo " dropdown\">
                    <a class=\"dropdown-toggle\" href=\"index.html.twig\" id=\"dropdownMenuLink\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Acceuil
                    </a>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 54
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), "news")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news")));
        echo "\">Actualités</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 57
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", [0 => "_route"], "method", false, false, false, 57), "publication")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication")));
        echo "\">Publications</a>
                        </li>
                        <li><a class=\"dropdown-item  text-dark\"
                               href=\"";
        // line 60
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), "galerie")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie")));
        echo "\">Galerie</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 64
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64), "stages")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64), "emplois")) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink1\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Opportunités
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink1\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 73
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), "stages")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stages")));
        echo "\">Stages</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 76
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", [0 => "_route"], "method", false, false, false, 76), "emplois")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emplois")));
        echo "\">Emplois</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown ";
        // line 80
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", [0 => "_route"], "method", false, false, false, 80), "trucs")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", [0 => "_route"], "method", false, false, false, 80), "podcast")) ? ("active") : (""));
        echo " ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", [0 => "_route"], "method", false, false, false, 80), "faq")) ? ("active") : (""));
        echo "\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"dropdownMenuLink2\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        ressources éducatives
                    </a>

                    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuLink2\">
                        <li class=\"text-dark\"><a class=\"dropdown-item \"
                                                 href=\"";
        // line 89
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89), "trucs")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trucs")));
        echo "\">Trucs
                                et
                                astuces</a></li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 93
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "attributes", [], "any", false, false, false, 93), "get", [0 => "_route"], "method", false, false, false, 93), "podcast")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("podcast")));
        echo "\">Podcast
                                Employabilité</a>
                        </li>
                        <li><a class=\"dropdown-item \"
                               href=\"";
        // line 97
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "attributes", [], "any", false, false, false, 97), "get", [0 => "_route"], "method", false, false, false, 97), "faq")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq")));
        echo "\">Foire aux
                                questions</a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 102
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "attributes", [], "any", false, false, false, 102), "get", [0 => "_route"], "method", false, false, false, 102), "about")) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 103
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "attributes", [], "any", false, false, false, 103), "get", [0 => "_route"], "method", false, false, false, 103), "about")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about")));
        echo "\">A
                        propos</a></li>
                <li class=\"";
        // line 105
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "attributes", [], "any", false, false, false, 105), "get", [0 => "_route"], "method", false, false, false, 105), "contact")) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 106
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", [0 => "_route"], "method", false, false, false, 106), "contact")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact")));
        echo "\">Contact</a>
                </li>
                <li style=\"background-color: #2a8c28\"><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prevcon");
        echo "\"
                                                         class=\"text-white\">Se connecter</a></li>
                <li class=\"";
        // line 110
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "attributes", [], "any", false, false, false, 110), "get", [0 => "_route"], "method", false, false, false, 110), "partenaire")) ? ("active") : (""));
        echo "\"><a
                            href=\"";
        // line 111
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "attributes", [], "any", false, false, false, 111), "get", [0 => "_route"], "method", false, false, false, 111), "partenaire")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire")));
        echo "\">Partenaires</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 119
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
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo1.png"), "html", null, true);
        echo "\" width=250 alt=\"\"></figure>
                </div>
                <div class=\"du-scholarship-item wow fadeInLeft\">
                    <figure><img src=\"";
        // line 137
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
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/sForm.js"), "html", null, true);
        echo "\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/wow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/device.min.js"), "html", null, true);
        echo "\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/flexy-menu.js"), "html", null, true);
        echo "\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.simple-text-rotator.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/testimonials.js"), "html", null, true);
        echo "\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 170
        $this->displayBlock('js', $context, $blocks);
        // line 171
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

    // line 117
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

    // line 170
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
        return array (  424 => 170,  406 => 117,  387 => 27,  369 => 7,  358 => 171,  356 => 170,  352 => 169,  347 => 167,  343 => 166,  336 => 162,  331 => 160,  326 => 158,  322 => 157,  317 => 155,  312 => 153,  307 => 151,  301 => 148,  297 => 147,  293 => 146,  281 => 137,  275 => 134,  258 => 119,  256 => 117,  247 => 111,  243 => 110,  238 => 108,  233 => 106,  229 => 105,  224 => 103,  220 => 102,  212 => 97,  205 => 93,  198 => 89,  182 => 80,  175 => 76,  169 => 73,  155 => 64,  148 => 60,  142 => 57,  136 => 54,  120 => 45,  111 => 39,  98 => 28,  96 => 27,  86 => 20,  81 => 18,  76 => 16,  71 => 14,  66 => 12,  61 => 10,  55 => 7,  47 => 1,);
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
</html>", "front/base.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\base.html.twig");
    }
}
