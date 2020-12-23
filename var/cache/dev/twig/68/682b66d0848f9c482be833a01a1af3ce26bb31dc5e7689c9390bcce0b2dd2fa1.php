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

/* front/about.html.twig */
class __TwigTemplate_b3f072a1e184074ad7b2780d18624eac1ff4d876b5a0d6732148ef6d26457798 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/about.html.twig", 1);
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

        echo " A propos";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 0.4\"/>
\t\t</div>
\t</div>
\t<div style=\"padding-top: 100px;z-index: 88888;\">
\t\t<div class=\"container bg-primary py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
\t\t\t\t\t<div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">A propos</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End breadcrumbs-->
\t
\t
\t<!-- Begin About -->
\t<div class=\"du-subpage-content\">
\t\t<div class=\"du-about\">

\t\t\t<!-- Begin choose us -->
\t\t\t<section class=\"choose-us ptb-50\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-secondary\">Qui sommes-nous?</h2>
\t\t\t\t\t\t\t<p>Morbi condimentum, nunc non ornare dignissim, tellus eros molestie turpis, eu vehicula metus quam
\t\t\t\t\t\t\t\tac tellus aenean cursus massa in nulla suscipit lacinia in at eros.</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<section class=\"about-section-1\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"du-choose-us pt-20\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-8 wow fadeInRight\">
\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 wow fadeInLeft\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/choose-us.jpg"), "html", null, true);
        echo "\" alt=\"image\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t</section>\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End choose us -->



\t\t\t<!-- Begin principal message -->
\t\t\t<section class=\"du-principal-comment ptb-50 common\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<h2 class=\"text-center text-secondary\">Mot du recteur de l'université d'abomey-calavi</h2>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"principal-photo col-md-4 wow fadeInLeft\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/principla.png"), "html", null, true);
        echo "\" alt=\"image\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-8 wow fadeInRight blockquote\">
\t\t\t\t\t\t\t<cite>
\t\t\t\t\t\t\t\t\"Aenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.\"
\t\t\t\t\t\t\t</cite>

\t\t\t\t\t\t\t<p class=\"mt-5\">
\t\t\t\t\t\t\t\t<span><strong class=\"blockquote\">Prof. Maxime da-Cruz</strong></span><br/>
\t\t\t\t\t\t\t\t<span>Recteur</span><br/>
\t\t\t\t\t\t\t\t<span>Université d'abomey-calavi</span>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End principal message -->

\t\t\t
\t\t</div><!-- /.du-about -->
\t</div><!-- /.du-subpage content -->
\t<!-- End About -->
\t<div class=\"du-newsletter\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
\t\t\t<p class=\"wow fadeInUp\">Afin de ne rater aucune de nos dernières actualités  </p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 wow fadeInUp\">
\t\t\t\t\t<form id=\"newsletter\" accept-charset=\"utf-8\">
\t\t\t\t\t\t<div class=\"success\">Your subscribe request has been sent!</div>
\t\t\t\t\t\t<label class=\"email\">
\t\t\t\t\t\t\t<input type=\"email\" value=\"Entrez votre email:\">
\t\t\t\t\t\t\t<span class=\"error\">*This is not a valid email address.</span>
\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t<a href=\"#\" data-type=\"submit\">Souscrire</a>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--End newsletter -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 77,  145 => 56,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block title %} A propos{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\">

\t<!-- Begin breadcrumbs-->
\t<div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\"  style=\"z-index: -1\">
\t\t<div style=\"height: 180px\" class=\"bg-dark\">
\t\t\t<img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"w-100\" style=\"opacity: 0.4\"/>
\t\t</div>
\t</div>
\t<div style=\"padding-top: 100px;z-index: 88888;\">
\t\t<div class=\"container bg-primary py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
\t\t\t\t\t<div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">A propos</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End breadcrumbs-->
\t
\t
\t<!-- Begin About -->
\t<div class=\"du-subpage-content\">
\t\t<div class=\"du-about\">

\t\t\t<!-- Begin choose us -->
\t\t\t<section class=\"choose-us ptb-50\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-secondary\">Qui sommes-nous?</h2>
\t\t\t\t\t\t\t<p>Morbi condimentum, nunc non ornare dignissim, tellus eros molestie turpis, eu vehicula metus quam
\t\t\t\t\t\t\t\tac tellus aenean cursus massa in nulla suscipit lacinia in at eros.</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<section class=\"about-section-1\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"du-choose-us pt-20\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-8 wow fadeInRight\">
\t\t\t\t\t\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\tAenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 wow fadeInLeft\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('build/img/choose-us.jpg') }}\" alt=\"image\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t</section>\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End choose us -->



\t\t\t<!-- Begin principal message -->
\t\t\t<section class=\"du-principal-comment ptb-50 common\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<h2 class=\"text-center text-secondary\">Mot du recteur de l'université d'abomey-calavi</h2>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"principal-photo col-md-4 wow fadeInLeft\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('build/img/principla.png') }}\" alt=\"image\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-8 wow fadeInRight blockquote\">
\t\t\t\t\t\t\t<cite>
\t\t\t\t\t\t\t\t\"Aenean cursus fermentum euismod. Cras sodales nibh sed egestas adipiscing. Vestibulum sit amet eros sapien. Vestibulum quis dapibus sem. Fusce a lacinia nisl. Mauris sagittis egestas justo. Praesent tempus quis nibh nec imperdiet.\"
\t\t\t\t\t\t\t</cite>

\t\t\t\t\t\t\t<p class=\"mt-5\">
\t\t\t\t\t\t\t\t<span><strong class=\"blockquote\">Prof. Maxime da-Cruz</strong></span><br/>
\t\t\t\t\t\t\t\t<span>Recteur</span><br/>
\t\t\t\t\t\t\t\t<span>Université d'abomey-calavi</span>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End principal message -->

\t\t\t
\t\t</div><!-- /.du-about -->
\t</div><!-- /.du-subpage content -->
\t<!-- End About -->
\t<div class=\"du-newsletter\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
\t\t\t<p class=\"wow fadeInUp\">Afin de ne rater aucune de nos dernières actualités  </p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 wow fadeInUp\">
\t\t\t\t\t<form id=\"newsletter\" accept-charset=\"utf-8\">
\t\t\t\t\t\t<div class=\"success\">Your subscribe request has been sent!</div>
\t\t\t\t\t\t<label class=\"email\">
\t\t\t\t\t\t\t<input type=\"email\" value=\"Entrez votre email:\">
\t\t\t\t\t\t\t<span class=\"error\">*This is not a valid email address.</span>
\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t<a href=\"#\" data-type=\"submit\">Souscrire</a>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--End newsletter -->

{% endblock %}", "front/about.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\about.html.twig");
    }
}
