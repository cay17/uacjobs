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
class __TwigTemplate_448c2f984efa78f2f81e73713de5375a3c63127518bb01d84f881c563c022fb5 extends Template
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
        .nav-pills .nav-link{
            color: white;
        }
        .nav-pills .nav-link.active{
            background-color: #fe0000;
        }
        .btn-outline-primary {
            border-color: #2a8c28 !important;
        }
        .btn-outline-primary span,.btn-outline-primary i{
            color: #2a8c28;!important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\"/>
    <title>";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo " | CMS</title>
</head>
<body data-api-domain-name=\"http://127.0.0.1:8000\">
<header>

</header>
<main>
    <div class=\"d-flex justify-content-stretch\">
        <div class=\"nav pt-3 flex-column nav-pills d-md-block shadow-sm d-none js-sidebar\" style=\"background-color: rgba(42,140,40,1)\" role=\"tablist\"
             aria-orientation=\"vertical\">
            <ul class=\"list-inline mb-5 mt-4 d-none d-md-block\">
                <li class=\"list-inline-item d-flex justify-content-center\">
                    <h2 class=\"text-white\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid\" width=\"120\"/></h2>
                </li>
            </ul>
            <a class=\"nav-link ";
        // line 49
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), "cms_index")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0 pl-md-3\"
               href=\"";
        // line 50
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", [0 => "_route"], "method", false, false, false, 50), "cms_index")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_index")));
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
        // line 60
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), "cms_article")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 61
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61), "cms_article")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_article")));
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
        // line 71
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", [0 => "_route"], "method", false, false, false, 71), "cms_news")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 72
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "attributes", [], "any", false, false, false, 72), "get", [0 => "_route"], "method", false, false, false, 72), "cms_news")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_news")));
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
        // line 82
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", [0 => "_route"], "method", false, false, false, 82), "cms_podcast")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 83
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83), "cms_podcast")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_podcast")));
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
        // line 93
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "attributes", [], "any", false, false, false, 93), "get", [0 => "_route"], "method", false, false, false, 93), "cms_messages")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 94
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "attributes", [], "any", false, false, false, 94), "get", [0 => "_route"], "method", false, false, false, 94), "cms_messages")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_messages")));
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
        // line 104
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "attributes", [], "any", false, false, false, 104), "get", [0 => "_route"], "method", false, false, false, 104), "cms_faq")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 105
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "attributes", [], "any", false, false, false, 105), "get", [0 => "_route"], "method", false, false, false, 105), "cms_faq")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_faq")));
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
        // line 115
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "attributes", [], "any", false, false, false, 115), "get", [0 => "_route"], "method", false, false, false, 115), "cms_galerie")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 116
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "attributes", [], "any", false, false, false, 116), "get", [0 => "_route"], "method", false, false, false, 116), "cms_galerie")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_galerie")));
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
        // line 126
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", [0 => "_route"], "method", false, false, false, 126), "cms_partenaires")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 127
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "attributes", [], "any", false, false, false, 127), "get", [0 => "_route"], "method", false, false, false, 127), "cms_partenaires")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_partenaires")));
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
        // line 137
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", [0 => "_route"], "method", false, false, false, 137), "cms_comptes")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 138
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "attributes", [], "any", false, false, false, 138), "get", [0 => "_route"], "method", false, false, false, 138), "cms_comptes")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_comptes")));
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
        // line 148
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "attributes", [], "any", false, false, false, 148), "get", [0 => "_route"], "method", false, false, false, 148), "cms_newsletter")) ? ("active") : (""));
        echo " text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"";
        // line 149
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "attributes", [], "any", false, false, false, 149), "get", [0 => "_route"], "method", false, false, false, 149), "cms_newsletter")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cms_newsletter")));
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
            <a class=\"pl-md-3 nav-link text-sm-center text-lg-left mb-2 mt-0 rounded-0 align-self-end\" href=\"\">
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
                <a class=\"navbar-brand pb-lg-0\" href=\"#\">
                </a>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item py-2\">
                        <a class=\"nav-link text-center d-flex align-items-center\" href=\"#\">
                            <span class=\" text-secondary font-weight-bold text-uppercase\">Administrateur</span>
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
        // line 188
        $this->displayBlock('main', $context, $blocks);
        // line 190
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
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/mdb/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/mdb/js/mdb.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 206
        $this->displayBlock('js_vendors', $context, $blocks);
        // line 208
        echo "<script>
    \$(() => {
        \$('.js-side-bar-btn').click(() => {
            \$('.js-sidebar').toggleClass('d-none');
        })
    });
</script>
";
        // line 215
        $this->displayBlock('js', $context, $blocks);
        // line 217
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 188
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 189
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 206
    public function block_js_vendors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_vendors"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 215
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  429 => 215,  417 => 206,  410 => 189,  403 => 188,  391 => 34,  384 => 18,  377 => 17,  368 => 217,  366 => 215,  357 => 208,  355 => 206,  351 => 205,  347 => 204,  343 => 203,  339 => 202,  335 => 201,  322 => 190,  320 => 188,  278 => 149,  274 => 148,  261 => 138,  257 => 137,  244 => 127,  240 => 126,  227 => 116,  223 => 115,  210 => 105,  206 => 104,  193 => 94,  189 => 93,  176 => 83,  172 => 82,  159 => 72,  155 => 71,  142 => 61,  138 => 60,  125 => 50,  121 => 49,  115 => 46,  100 => 34,  96 => 33,  80 => 19,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  57 => 11,  45 => 1,);
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
        .nav-pills .nav-link{
            color: white;
        }
        .nav-pills .nav-link.active{
            background-color: #fe0000;
        }
        .btn-outline-primary {
            border-color: #2a8c28 !important;
        }
        .btn-outline-primary span,.btn-outline-primary i{
            color: #2a8c28;!important;
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
        <div class=\"nav pt-3 flex-column nav-pills d-md-block shadow-sm d-none js-sidebar\" style=\"background-color: rgba(42,140,40,1)\" role=\"tablist\"
             aria-orientation=\"vertical\">
            <ul class=\"list-inline mb-5 mt-4 d-none d-md-block\">
                <li class=\"list-inline-item d-flex justify-content-center\">
                    <h2 class=\"text-white\"><img src=\"{{ asset('build/img/logo.png') }}\" class=\"img-fluid\" width=\"120\"/></h2>
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
            <a class=\"pl-md-3 nav-link {{ (app.request.attributes.get('_route') == 'cms_news')? 'active' }} text-sm-center text-lg-left mb-2 mt-0 rounded-0\"
               href=\"{{ (app.request.attributes.get('_route') == 'cms_news')? '#' : path(\"cms_news\") }}\">
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
            <a class=\"pl-md-3 nav-link text-sm-center text-lg-left mb-2 mt-0 rounded-0 align-self-end\" href=\"\">
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
                <a class=\"navbar-brand pb-lg-0\" href=\"#\">
                </a>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item py-2\">
                        <a class=\"nav-link text-center d-flex align-items-center\" href=\"#\">
                            <span class=\" text-secondary font-weight-bold text-uppercase\">Administrateur</span>
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
