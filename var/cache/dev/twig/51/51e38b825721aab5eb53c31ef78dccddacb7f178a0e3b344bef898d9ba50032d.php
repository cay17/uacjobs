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

/* student/publications.html.twig */
class __TwigTemplate_9b042dc01c55937856d8d883b7f05a2a8cad102251a3d6c79f4d2dd0169f4b46 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/publications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/publications.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/publications.html.twig", 1);
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

        echo "Publications";
        
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
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Publications</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\" py-5 container\">

            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_article");
        echo "\" class=\"btn bg-primary text-white mt-md-0 mt-3\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_article");
        echo "\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_article");
        echo "\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_article");
        echo "\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etu_article");
        echo "\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>

      </div>
      <div class=\"container\">
            <ul class=\"pagination d-flex justify-content-between\">
                  <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
                  <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                  <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
            </ul>
      </div>


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/publications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 88,  172 => 74,  155 => 60,  138 => 46,  121 => 32,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %}Publications{% endblock %}
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
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Publications</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\" py-5 container\">

            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"{{ path('etu_article') }}\" class=\"btn bg-primary text-white mt-md-0 mt-3\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"{{ path('etu_article') }}\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"{{ path('etu_article') }}\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"{{ path('etu_article') }}\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>
            <div class=\"actualites d-md-flex d-block px-4 rounded-15 my-5\"
                 style=\"background-color: rgba(42,140,40,0.09)\">
                  <div class=\"d-flex flex-column justify-content-around\">
                        <h2 class=\"font-weight-normal text-capitalize h4 m-3\">
                              Entrepreneuriat agricole : Don d'infrastructures, d'équipements et de matériels à des
                              Coopératives agricoles à Kétou et Adja-Ouèrè
                        </h2>
                        <div class=\"hr text-primary m-3\"></div>
                        <div class=\"d-lg-flex d-block m-3 justify-content-between\">
                              <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-4\">22 dec 2020, 17h30</span>
                              <a href=\"{{ path('etu_article') }}\" class=\"btn bg-primary text-white\">Lire l'article</a>
                        </div>
                  </div>
            </div>

      </div>
      <div class=\"container\">
            <ul class=\"pagination d-flex justify-content-between\">
                  <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
                  <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                  <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
            </ul>
      </div>


</div>

{% endblock %}", "student/publications.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\publications.html.twig");
    }
}