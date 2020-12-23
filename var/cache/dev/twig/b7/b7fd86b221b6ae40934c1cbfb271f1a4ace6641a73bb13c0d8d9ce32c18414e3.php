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

/* recruteur/galery.html.twig */
class __TwigTemplate_684eccb56ffc416b959ffe31b2d1b01f5405121def00c40fcbe46237390b58c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "recruteur/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/galery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/galery.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/galery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "      <link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\"
            media=\"screen\">
      <style>
            .thumb {
                  margin-bottom: 30px;
            }


            img.zoom {
                  width: 100%;
                  height: 400px;
                  border-radius: 5px;
                  object-fit: cover;
                  -webkit-transition: all .3s ease-in-out;
                  -moz-transition: all .3s ease-in-out;
                  -o-transition: all .3s ease-in-out;
                  -ms-transition: all .3s ease-in-out;
            }


            .transition {
                  -webkit-transform: scale(1.15);
                  -moz-transform: scale(1.15);
                  -o-transform: scale(1.15);
                  transform: scale(1.15);
            }

            .modal-header {

                  border-bottom: none;
            }

            .modal-title {
                  color: #000;
            }

            .modal-footer {
                  display: none;
            }
      </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "<div class=\"dream-university-subpage\">
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Galerie</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container\">
            <div class=\"row mt-5\">


                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">

                        </a>
                  </div>
                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid\" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/page1_pic1.jpg"), "html", null, true);
        echo "\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>


            </div>
      </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 138
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$(\".fancybox\").fancybox({
            openEffect: \"none\",
            closeEffect: \"none\"
        });

        \$(\".zoom\").hover(function () {

            \$(this).addClass('transition');
        }, function () {

            \$(this).removeClass('transition');
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/galery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 138,  277 => 137,  255 => 125,  244 => 117,  233 => 109,  222 => 101,  211 => 93,  200 => 85,  189 => 77,  178 => 69,  155 => 49,  150 => 46,  140 => 45,  121 => 44,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig'%}
{% block css %}
      <link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\"
            media=\"screen\">
      <style>
            .thumb {
                  margin-bottom: 30px;
            }


            img.zoom {
                  width: 100%;
                  height: 400px;
                  border-radius: 5px;
                  object-fit: cover;
                  -webkit-transition: all .3s ease-in-out;
                  -moz-transition: all .3s ease-in-out;
                  -o-transition: all .3s ease-in-out;
                  -ms-transition: all .3s ease-in-out;
            }


            .transition {
                  -webkit-transform: scale(1.15);
                  -moz-transform: scale(1.15);
                  -o-transform: scale(1.15);
                  transform: scale(1.15);
            }

            .modal-header {

                  border-bottom: none;
            }

            .modal-title {
                  color: #000;
            }

            .modal-footer {
                  display: none;
            }
      </style>
{% endblock %}
{% block title %}Galerie{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\">
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Galerie</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container\">
            <div class=\"row mt-5\">


                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/blog3.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">

                        </a>
                  </div>
                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid\" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>

                  <div class=\"col-lg-4 col-md-4 col-xs-6 thumb\">
                        <a href=\"https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"
                           class=\"fancybox\" rel=\"ligthbox\">
                              <img src=\"{{ asset('build/img/page1_pic1.jpg') }}\"
                                   class=\"zoom img-fluid \" alt=\"\">
                        </a>
                  </div>


            </div>
      </div>

</div>

{% endblock %}
{% block js %}
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$(\".fancybox\").fancybox({
            openEffect: \"none\",
            closeEffect: \"none\"
        });

        \$(\".zoom\").hover(function () {

            \$(this).addClass('transition');
        }, function () {

            \$(this).removeClass('transition');
        });
    });
</script>
{% endblock %}", "recruteur/galery.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\galery.html.twig");
    }
}
