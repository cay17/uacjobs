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

/* student/stages.html.twig */
class __TwigTemplate_4964feade9531227957433912a3ba87cfa41f0aa31a5cd01b42215286a93d0b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/stages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/stages.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/stages.html.twig", 1);
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

        echo "Opportunités";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-fluid p-0 m-0\">

\t<!-- Begin breadcrumbs-->
\t<div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
\t\t<div style=\"height: 180px\" class=\"bg-dark\">
\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 0.4\"/>
\t\t</div>
\t</div>
\t<div style=\"padding-top: 100px;z-index: 88888;background-color: rgba(218,218,218,0.4)\">
\t\t<div class=\"container bg-primary py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
\t\t\t\t\t<div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Opportunités</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"\">
\t\t<div class=\"px-md-5 px-3 pt-5 pb-2\" style=\"background-color: rgba(218,218,218,0.4)\">
\t\t\t<form class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-5 input-group\">
\t\t\t\t\t<div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
\t\t\t\t\t\t<i class=\"fa fa-search text-black-50\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"search\" class=\"form-control py-4 rounded-0 border-left-0\"
\t\t\t\t\t\t   placeholder=\"Mot clé, métiers, compétences\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-5 input-group mt-3 mt-md-0\">
\t\t\t\t\t<div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
\t\t\t\t\t\t<i class=\"fa fa-circle text-black-50\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<select class=\"custom-select py-4 rounded-0 border-left-0\">
\t\t\t\t\t\t<option selected>Type d'opportunités</option>
\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t<option>Emplois</option>
\t\t\t\t\t\t<option>Stages</option>
\t\t\t\t\t\t<option>Autres opportunités</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-2 mt-3 mt-md-0\">
\t\t\t\t\t<button class=\"btn-block h-100 bg-secondary text-white py-2 py-md-0\"
\t\t\t\t\t\t\tstyle=\"border: 1px solid #fe0000;\"><span class=\"text-uppercase\">Rechercher</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"col-12 col-md-5 mt-2\">
\t\t\t\t<p class=\"text-black-50 font-italic\" style=\"font-size: small\">Exemples de mots-clés:
\t\t\t\t\tinformatique, agriculture, recrutement, etc</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End breadcrumbs-->


\t<!-- Begin Event -->
\t<div class=\"du-subpage-content\">
\t\t<div class=\"du-blog\">

\t\t\t<!-- Begin choose us -->
\t\t\t<section class=\"blog ptb-50\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-secondary\">Offres de stages</h2>
\t\t\t\t\t\t\t<p>Découvrez toutes les opportunités d'emplois.</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<section class=\"du-all-blog-post\">

\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/uac.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_offer");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"blog-page-pagination\">
\t\t\t\t\t\t\t\t\t<!-- Pagination Small -->
\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">«</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"disabled\"><a href=\"#\">»</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End event -->




\t\t</div><!-- /.du-event -->
\t</div><!-- /.du-subpage content -->
\t<!-- End Evnet -->


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/stages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 227,  333 => 214,  317 => 201,  301 => 188,  285 => 175,  269 => 162,  253 => 149,  237 => 136,  221 => 123,  205 => 110,  189 => 97,  173 => 84,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %}Opportunités{% endblock %}
{% block body %}
<div class=\"container-fluid p-0 m-0\">

\t<!-- Begin breadcrumbs-->
\t<div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
\t\t<div style=\"height: 180px\" class=\"bg-dark\">
\t\t\t<img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"w-100\" style=\"opacity: 0.4\"/>
\t\t</div>
\t</div>
\t<div style=\"padding-top: 100px;z-index: 88888;background-color: rgba(218,218,218,0.4)\">
\t\t<div class=\"container bg-primary py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
\t\t\t\t\t<div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Opportunités</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"\">
\t\t<div class=\"px-md-5 px-3 pt-5 pb-2\" style=\"background-color: rgba(218,218,218,0.4)\">
\t\t\t<form class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-5 input-group\">
\t\t\t\t\t<div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
\t\t\t\t\t\t<i class=\"fa fa-search text-black-50\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"search\" class=\"form-control py-4 rounded-0 border-left-0\"
\t\t\t\t\t\t   placeholder=\"Mot clé, métiers, compétences\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-5 input-group mt-3 mt-md-0\">
\t\t\t\t\t<div class=\"input-group-append d-flex align-items-center bg-white border pl-3 border-right-0\">
\t\t\t\t\t\t<i class=\"fa fa-circle text-black-50\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<select class=\"custom-select py-4 rounded-0 border-left-0\">
\t\t\t\t\t\t<option selected>Type d'opportunités</option>
\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t<option>Emplois</option>
\t\t\t\t\t\t<option>Stages</option>
\t\t\t\t\t\t<option>Autres opportunités</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-2 mt-3 mt-md-0\">
\t\t\t\t\t<button class=\"btn-block h-100 bg-secondary text-white py-2 py-md-0\"
\t\t\t\t\t\t\tstyle=\"border: 1px solid #fe0000;\"><span class=\"text-uppercase\">Rechercher</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"col-12 col-md-5 mt-2\">
\t\t\t\t<p class=\"text-black-50 font-italic\" style=\"font-size: small\">Exemples de mots-clés:
\t\t\t\t\tinformatique, agriculture, recrutement, etc</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End breadcrumbs-->


\t<!-- Begin Event -->
\t<div class=\"du-subpage-content\">
\t\t<div class=\"du-blog\">

\t\t\t<!-- Begin choose us -->
\t\t\t<section class=\"blog ptb-50\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-secondary\">Offres de stages</h2>
\t\t\t\t\t\t\t<p>Découvrez toutes les opportunités d'emplois.</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<section class=\"du-all-blog-post\">

\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etu_offer') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etu_offer') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etu_offer') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etu_offer') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etu_offer') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"du-news-item\">
\t\t\t\t\t\t\t\t\t<div class=\"du-caption-box row\">
\t\t\t\t\t\t\t\t\t\t<figure style=\"height: min-content\" class=\"overflow-hidden col-lg-4 col-12\"><img
\t\t\t\t\t\t\t\t\t\t\tclass=\"mt-2 h-100\" src=\"{{ asset('build/img/uac.jpg') }}\" alt=\"\"></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"du-caption col-lg-8 col-12 justify-content-between d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Recrutement d'un agronome à la FSA</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.Including families, pupils and people from
\t\t\t\t\t\t\t\t\t\t\t\t\tdifferent walks of life have attended the ‘Fun For Cause’
\t\t\t\t\t\t\t\t\t\t\t\t\tcarnival
\t\t\t\t\t\t\t\t\t\t\t\t\torganised by The Kindergarten Starters.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('etu_offer') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn-default du-common-property bg-primary border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEn savoir plus
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"blog-page-pagination\">
\t\t\t\t\t\t\t\t\t<!-- Pagination Small -->
\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">«</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"disabled\"><a href=\"#\">»</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>

\t\t\t\t\t</section>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End event -->




\t\t</div><!-- /.du-event -->
\t</div><!-- /.du-subpage content -->
\t<!-- End Evnet -->


</div>
{% endblock %}", "student/stages.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\stages.html.twig");
    }
}
