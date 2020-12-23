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

/* front/trucs.html.twig */
class __TwigTemplate_a438dc78fafd09af767a9516676ce4b3fca39f2ab0865d4f547539231094fd7c extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/trucs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/trucs.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/trucs.html.twig", 1);
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

        echo "Trucs et astuces";
        
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
        echo "<div class=\"dream-university-subpage\">

\t<!-- Begin breadcrumbs-->
\t<div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\"  style=\"z-index: -1\">
\t\t<div style=\"height: 180px\" class=\"bg-dark\">
\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/tt.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 1\"/>
\t\t</div>
\t</div>
\t<div style=\"padding-top: 100px;z-index: 88888;\">
\t\t<div class=\"container bg-primary py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
\t\t\t\t\t<div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Trucs et Astuces</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End breadcrumbs-->
\t
\t
\t<!-- Begin Event -->
\t<div class=\"du-subpage-content\">
\t\t<div class=\"du-admission\">

\t\t\t<!-- Begin choose us -->
\t\t\t<section class=\"admission ptb-50\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t\t<section class=\"du-admission-content\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row card-group\">

\t\t\t\t\t\t\t  <!-- Thumbnails container -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t  <!-- /Thumbnails container -->

\t\t\t            </div>

\t\t\t            

\t\t\t\t\t</section>\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End event -->


\t\t\t
\t\t\t
\t\t</div><!-- /.du-event -->
\t</div><!-- /.du-subpage content -->
\t<!-- End Evnet -->
\t<div class=\"container mb-5\">
\t\t<ul class=\"pagination d-flex justify-content-between\">
\t\t\t<li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
\t\t\t<li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
\t\t\t<li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
\t\t</ul>
\t</div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/trucs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 128,  240 => 121,  228 => 112,  218 => 105,  206 => 96,  196 => 89,  184 => 80,  174 => 73,  162 => 64,  152 => 57,  140 => 48,  130 => 41,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block title %}Trucs et astuces{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\">

\t<!-- Begin breadcrumbs-->
\t<div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\"  style=\"z-index: -1\">
\t\t<div style=\"height: 180px\" class=\"bg-dark\">
\t\t\t<img src=\"{{ asset('build/img/tt.jpg') }}\" class=\"w-100\" style=\"opacity: 1\"/>
\t\t</div>
\t</div>
\t<div style=\"padding-top: 100px;z-index: 88888;\">
\t\t<div class=\"container bg-primary py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
\t\t\t\t\t<div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Trucs et Astuces</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End breadcrumbs-->
\t
\t
\t<!-- Begin Event -->
\t<div class=\"du-subpage-content\">
\t\t<div class=\"du-admission\">

\t\t\t<!-- Begin choose us -->
\t\t\t<section class=\"admission ptb-50\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t\t<section class=\"du-admission-content\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row card-group\">

\t\t\t\t\t\t\t  <!-- Thumbnails container -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/img/blog1.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('article') }}\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/img/blog1.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('article') }}\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/img/blog1.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('article') }}\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/img/blog1.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('article') }}\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/img/blog1.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('article') }}\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t  <div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/img/blog1.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"caption px-3 pt-3\" style=\"background-color: rgba(42,140,40,0.09)\">
\t\t\t\t\t\t\t\t\t  <h3 class=\"text-dark\" style=\"font-family: sans-serif;font-weight: bolder\">Comment rédiger un cv professionnel?</h3>
\t\t\t\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in.Cras justo odio, dapibus ac facilisis in</p>

\t\t\t\t\t\t\t\t\t  <div class=\"admission-feature\">
\t\t\t\t\t\t\t\t\t  \t\t<ul class=\"du-choose-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('article') }}\" class=\"btn-default du-common-property bg-primary border-0\">Lire plus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t  <!-- /Thumbnails container -->

\t\t\t            </div>

\t\t\t            

\t\t\t\t\t</section>\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End event -->


\t\t\t
\t\t\t
\t\t</div><!-- /.du-event -->
\t</div><!-- /.du-subpage content -->
\t<!-- End Evnet -->
\t<div class=\"container mb-5\">
\t\t<ul class=\"pagination d-flex justify-content-between\">
\t\t\t<li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
\t\t\t<li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
\t\t\t<li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
\t\t</ul>
\t</div>


</div>
{% endblock %}", "front/trucs.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\trucs.html.twig");
    }
}
