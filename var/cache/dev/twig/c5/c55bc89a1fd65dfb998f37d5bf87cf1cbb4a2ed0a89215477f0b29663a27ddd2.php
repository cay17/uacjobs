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

/* front/podcast.html.twig */
class __TwigTemplate_fd884df1de87ad840f816e6f829f5e7f70ff4cd21e751897ed3feceb42e64f87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/podcast.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/podcast.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/podcast.html.twig", 1);
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

        echo "Podcast Employabilité";
        
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
        echo "<div class=\"\">
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
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Podcast
                                    Employabilité</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container\">
            <div class=\"row mt-5\">
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container mt-5\">
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
        return "front/podcast.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 118,  201 => 100,  180 => 82,  159 => 64,  138 => 46,  117 => 28,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block title %}Podcast Employabilité{% endblock %}
{% block body %}
<div class=\"\">
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div style=\"padding-top: 100px;z-index: 88888;\">
            <div class=\"container bg-primary py-5\">
                  <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 text-center du-title\">
                              <div class=\"du-breadcrumb-title\"><h1 class=\"text-white text-center\">Podcast
                                    Employabilité</h1>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container\">
            <div class=\"row mt-5\">
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class=\"col-12 col-md-4 mt-4\">
                        <div>
                              <div class=\"actualites rounded-15 shadow-sm\"
                                   style=\"background-color: rgba(42,140,40,0.1)\">
                                    <div class=\"overflow-hidden\" style=\"width: 100%;height: 280px\">
                                          <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"rounded-15 position-relative\"/>
                                    </div>
                                    <div class=\"d-flex px-4 flex-column justify-content-around\">
                                          <h2 class=\"font-weight-normal text-capitalize h4 mb-0 mt-2\">
                                                Entrepreneuriat agricole : Don d'infrastructures
                                          </h2>
                                          <div class=\"d-lg-flex d-block mt-3 mb-lg-0 justify-content-end\">
                                                <span class=\"h6 font-weight-bold text-custom font-weight-bold mb-3\">22 dec 2020, 17h30</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class=\"container mt-5\">
            <ul class=\"pagination d-flex justify-content-between\">
                  <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a></li>
                  <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                  <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
            </ul>
      </div>


</div>
{% endblock %}", "front/podcast.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\podcast.html.twig");
    }
}
