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

/* cms/base.html.twig */
class __TwigTemplate_ed0a736d86cc97f4ad5e3e51d06af1aae4f5a03848d4cf337f826406a5a7d6f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'js_vendors' => [$this, 'block_js_vendors'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"author\" content=\"Tics Master\">
    <meta name=\"description\" content=\"\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"content-type\" content=\"text/html\"/>
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/material-design-icons-3.0.1/iconfont/material-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/mdb/css/mdb.min.css"), "html", null, true);
        echo "\"/>
    ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "    <style>
        .nav-pills .nav-link {
            color: white;
        }

        .nav-pills .nav-link.active {
            background-color: #fe0000;
        }

        .btn-outline-primary {
            border-color: #2a8c28 !important;
        }

        .btn-outline-primary span, .btn-outline-primary i {
            color: #2a8c28;
        !important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\"/>
    <title>";
        // line 38
        $this->displayBlock('title', $context, $blocks);
        echo " | CMS</title>
</head>
<body data-api-domain-name=\"http://127.0.0.1:8000\">
<header>

</header>
<main>
    <div class=\"d-flex justify-content-stretch\">
        <div class=\"nav pt-3 flex-column nav-pills d-md-block shadow-sm d-none js-sidebar\"
             style=\"background-color: rgba(42,140,40,1)\" role=\"tablist\"
             aria-orientation=\"vertical\">
            <ul class=\"list-inline mb-5 mt-4 d-none d-md-block\">
                <li class=\"list-inline-item d-flex justify-content-center\">
                    <h2 class=\"text-white\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid\" width=\"120\"/>
                    </h2>
                </li>
            </ul>
            <a class=\"nav-link ";
        // line 55
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", [0 => "_route"], "method", false, false, false, 55), "cms_index"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0 pl-md-3\"
               href=\"";
        // line 56
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", [0 => "_route"], "method", false, false, false, 56), "cms_index"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_index")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"material-icons\" style=\"font-size: 25px;width: 25px \">dashboard</i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Tableau de bord
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 66
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", [0 => "_route"], "method", false, false, false, 66), "cms_article"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 67
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67), "cms_article"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_article")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-newspaper-o\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Articles
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 77
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "attributes", [], "any", false, false, false, 77), "get", [0 => "_route"], "method", false, false, false, 77), "cms_opportunites"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 78
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "attributes", [], "any", false, false, false, 78), "get", [0 => "_route"], "method", false, false, false, 78), "cms_opportunites"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_opportunites")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-suitcase\" style=\"font-size: 25px;width: 25px\"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Opportunités
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 88
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "attributes", [], "any", false, false, false, 88), "get", [0 => "_route"], "method", false, false, false, 88), "cms_podcast"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 89
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89), "cms_podcast"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_podcast")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-microphone\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Podcast Employabilité
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 99
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "attributes", [], "any", false, false, false, 99), "get", [0 => "_route"], "method", false, false, false, 99), "cms_messages"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 100
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "attributes", [], "any", false, false, false, 100), "get", [0 => "_route"], "method", false, false, false, 100), "cms_messages"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_messages")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-envelope\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Messages
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 110
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "attributes", [], "any", false, false, false, 110), "get", [0 => "_route"], "method", false, false, false, 110), "cms_faq"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 111
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "attributes", [], "any", false, false, false, 111), "get", [0 => "_route"], "method", false, false, false, 111), "cms_faq"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_faq")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-question\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Faq
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 121
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "attributes", [], "any", false, false, false, 121), "get", [0 => "_route"], "method", false, false, false, 121), "cms_galerie"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 122
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "attributes", [], "any", false, false, false, 122), "get", [0 => "_route"], "method", false, false, false, 122), "cms_galerie"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_galerie")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-photo\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Galerie
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 132
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "attributes", [], "any", false, false, false, 132), "get", [0 => "_route"], "method", false, false, false, 132), "cms_partenaires"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 133
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "attributes", [], "any", false, false, false, 133), "get", [0 => "_route"], "method", false, false, false, 133), "cms_partenaires"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_partenaires")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-handshake-o\" style=\"font-size: 22px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Partenaires
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 143
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "attributes", [], "any", false, false, false, 143), "get", [0 => "_route"], "method", false, false, false, 143), "cms_comptes"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 144
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "request", [], "any", false, false, false, 144), "attributes", [], "any", false, false, false, 144), "get", [0 => "_route"], "method", false, false, false, 144), "cms_comptes"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_comptes")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-users\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Utilisateurs
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link ";
        // line 154
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "attributes", [], "any", false, false, false, 154), "get", [0 => "_route"], "method", false, false, false, 154), "cms_newsletter"))) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 155
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "request", [], "any", false, false, false, 155), "attributes", [], "any", false, false, false, 155), "get", [0 => "_route"], "method", false, false, false, 155), "cms_newsletter"))) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_newsletter")));
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-paper-plane-o\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Newsletters
                    </li>
                </ul>
            </a>
            <hr class=\"mt-md-5\">
            <a class=\"pl-md-3 nav-link text-sm-center text-lg-left mb-2 mt-0 rounded-0 align-self-end\" href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Déconnexion
                    </li>
                </ul>
            </a>
        </div>
        <section class=\"container-fluid p-0 m-0  bg-center\" style=\"flex-grow: 0\">
            <nav class=\"navbar navbar-light navbar-expand justify-content-between pb-0 bg-white shadow-sm\">
                <a class=\"navbar-brand btn bg-primary text-white d-none d-md-block\" href=\"#\">
                    Voir le site
                </a>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item py-2\">
                        <a class=\"nav-link text-center d-flex align-items-center\" href=\"#\">
                            <span class=\" text-secondary font-weight-bold text-uppercase\">";
        // line 185
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "roles", [], "any", false, false, false, 185), 0, [], "array", false, false, false, 185), "ROLE_ADMIN"))) {
            // line 186
            echo "                                    administrateur
                                ";
        } else {
            // line 188
            echo "                                    éditeur
                                ";
        }
        // line 190
        echo "                            </span>
                        </a>
                    </li>
                </ul>
                <button type=\"button\"
                        class=\"d-lg-none d-block btn bg-light d-inline-block p-2 shadow-none js-side-bar-btn\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </nav>
            <div class=\" p-lg-5 pt-3 px-3 mb-lg-5\">
                ";
        // line 200
        $this->displayBlock('main', $context, $blocks);
        // line 202
        echo "            </div>
        </section>
    </div>
</main>
<footer>
    <div class=\"container-fluid pr-0 pl-0 position-relative\">
        <p class=\"bg-dark pt-1 pb-1 mb-0 text-center text-white mr-0 w-100\" style=\"font-size: small\">
            Copyright © 2020 Tous droits réservés
        </p>
    </div>
</footer>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/mdb/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/mdb/js/mdb.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 218
        $this->displayBlock('js_vendors', $context, $blocks);
        // line 220
        echo "<script>
    \$(() => {
        \$('.js-side-bar-btn').click(() => {
            \$('.js-sidebar').toggleClass('d-none');
        })
    });
</script>
";
        // line 227
        $this->displayBlock('js', $context, $blocks);
        // line 229
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
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

    // line 200
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 201
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
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
        return "cms/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 227,  463 => 218,  453 => 201,  443 => 200,  425 => 38,  415 => 18,  405 => 17,  393 => 229,  391 => 227,  382 => 220,  380 => 218,  376 => 217,  372 => 216,  368 => 215,  364 => 214,  360 => 213,  347 => 202,  345 => 200,  333 => 190,  329 => 188,  325 => 186,  323 => 185,  301 => 166,  287 => 155,  283 => 154,  270 => 144,  266 => 143,  253 => 133,  249 => 132,  236 => 122,  232 => 121,  219 => 111,  215 => 110,  202 => 100,  198 => 99,  185 => 89,  181 => 88,  168 => 78,  164 => 77,  151 => 67,  147 => 66,  134 => 56,  130 => 55,  123 => 51,  107 => 38,  103 => 37,  83 => 19,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta name=\"author\" content=\"Tics Master\">
    <meta name=\"description\" content=\"\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"content-type\" content=\"text/html\"/>
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('build/img/logo.png') }}\">
    <link href=\"{{ asset('build/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/vendor/material-design-icons-3.0.1/iconfont/material-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/vendor/mdb/css/mdb.min.css') }}\"/>
    {% block css %}
    {% endblock %}
    <style>
        .nav-pills .nav-link {
            color: white;
        }

        .nav-pills .nav-link.active {
            background-color: #fe0000;
        }

        .btn-outline-primary {
            border-color: #2a8c28 !important;
        }

        .btn-outline-primary span, .btn-outline-primary i {
            color: #2a8c28;
        !important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/style.css') }}\"/>
    <title>{% block title %}{% endblock %} | CMS</title>
</head>
<body data-api-domain-name=\"http://127.0.0.1:8000\">
<header>

</header>
<main>
    <div class=\"d-flex justify-content-stretch\">
        <div class=\"nav pt-3 flex-column nav-pills d-md-block shadow-sm d-none js-sidebar\"
             style=\"background-color: rgba(42,140,40,1)\" role=\"tablist\"
             aria-orientation=\"vertical\">
            <ul class=\"list-inline mb-5 mt-4 d-none d-md-block\">
                <li class=\"list-inline-item d-flex justify-content-center\">
                    <h2 class=\"text-white\"><img src=\"{{ asset('build/img/logo.png') }}\" class=\"img-fluid\" width=\"120\"/>
                    </h2>
                </li>
            </ul>
            <a class=\"nav-link {{ (app.request.attributes.get('_route') == 'cms_index')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0 pl-md-3\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_index')? '#' : path(\"cms_index\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"material-icons\" style=\"font-size: 25px;width: 25px \">dashboard</i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Tableau de bord
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_article')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_article')? '#' : path(\"cms_article\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-newspaper-o\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Articles
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_opportunites')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_opportunites')? '#' : path(\"cms_opportunites\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-suitcase\" style=\"font-size: 25px;width: 25px\"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Opportunités
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_podcast')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_podcast')? '#' : path(\"cms_podcast\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-microphone\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Podcast Employabilité
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_messages')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_messages')? '#' : path(\"cms_messages\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-envelope\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Messages
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_faq')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_faq')? '#' : path(\"cms_faq\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-question\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Faq
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_galerie')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_galerie')? '#' : path(\"cms_galerie\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-photo\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Galerie
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_partenaires')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_partenaires')? '#' : path(\"cms_partenaires\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-handshake-o\" style=\"font-size: 22px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Partenaires
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_comptes')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_comptes')? '#' : path(\"cms_comptes\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-users\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Utilisateurs
                    </li>
                </ul>
            </a>
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_newsletter')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_newsletter')? '#' : path(\"cms_newsletter\") }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-paper-plane-o\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Newsletters
                    </li>
                </ul>
            </a>
            <hr class=\"mt-md-5\">
            <a class=\"pl-md-3 nav-link text-sm-center text-lg-left mb-2 mt-0 rounded-0 align-self-end\" href=\"{{ path('app_logout') }}\">
                <ul class=\"list-inline d-flex align-items-center mb-2 mt-2\">
                    <li class=\"list-inline-item\">
                        <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"font-size: 25px;width: 25px \"></i>
                    </li>
                    <li class=\"list-inline-item d-md-inline-block d-none text-uppercase font-weight-bold font-candara\">
                        Déconnexion
                    </li>
                </ul>
            </a>
        </div>
        <section class=\"container-fluid p-0 m-0  bg-center\" style=\"flex-grow: 0\">
            <nav class=\"navbar navbar-light navbar-expand justify-content-between pb-0 bg-white shadow-sm\">
                <a class=\"navbar-brand btn bg-primary text-white d-none d-md-block\" href=\"#\">
                    Voir le site
                </a>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item py-2\">
                        <a class=\"nav-link text-center d-flex align-items-center\" href=\"#\">
                            <span class=\" text-secondary font-weight-bold text-uppercase\">{% if app.user.roles[0]==\"ROLE_ADMIN\" %}
                                    administrateur
                                {% else %}
                                    éditeur
                                {% endif %}
                            </span>
                        </a>
                    </li>
                </ul>
                <button type=\"button\"
                        class=\"d-lg-none d-block btn bg-light d-inline-block p-2 shadow-none js-side-bar-btn\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </nav>
            <div class=\" p-lg-5 pt-3 px-3 mb-lg-5\">
                {% block main %}
                {% endblock %}
            </div>
        </section>
    </div>
</main>
<footer>
    <div class=\"container-fluid pr-0 pl-0 position-relative\">
        <p class=\"bg-dark pt-1 pb-1 mb-0 text-center text-white mr-0 w-100\" style=\"font-size: small\">
            Copyright © 2020 Tous droits réservés
        </p>
    </div>
</footer>
<script src=\"{{ asset('build/vendor/mdb/js/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/vendor/mdb/js/mdb.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/vendor/popper/popper.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/jquery-3.4.1.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/bootstrap/bootstrap.min.js') }}\"></script>
{% block js_vendors %}
{% endblock %}
<script>
    \$(() => {
        \$('.js-side-bar-btn').click(() => {
            \$('.js-sidebar').toggleClass('d-none');
        })
    });
</script>
{% block js %}
{% endblock %}
</body>
</html>
", "cms/base.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\cms\\base.html.twig");
    }
}
