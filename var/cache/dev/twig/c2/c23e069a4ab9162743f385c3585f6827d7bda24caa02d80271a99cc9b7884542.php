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

/* recruteur/profilrecruteurs.html.twig */
class __TwigTemplate_ac1cdf7986e67a85103c5bfe89d39e5de90726d6b0c26cfc7c33929661fd4e27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/profilrecruteurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/profilrecruteurs.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/profilrecruteurs.html.twig", 1);
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

        echo "Profil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/profil.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/cv.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"dream-university-subpage py-5 container-fluid\" style=\"background-color: rgba(218,218,218,0.2)\">

      <div class=\" py-5 container bg-white px-5 shadow-lg\">
            <section id=\"content\" class=\"\">
                  <!-- Begin .page-heading -->
                  <div class=\"page-heading\">
                        <div class=\"d-block d-lg-flex\">
                              <div class=\"mr-lg-3 w-30 mb-4 mb-0\">
                                    <a href=\"#\">
                                          <img class=\"media-object mw150 img-fluid\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\"
                                               alt=\"...\">
                                    </a>
                              </div>
                              <div class=\"media-body va-m\">
                                    <h2 class=\"media-heading text-primary\">Richard Aignon
                                    </h2>
                                    <div class=\"media-links mt-3\">
                                          <ul class=\"list-inline list-unstyled\">
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"facebook link\">
                                                            <span class=\"fa fa-facebook-square fs35\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"twitter link\">
                                                            <span class=\"fa fa-twitter-square fs35 text-info\"></span>
                                                      </a>
                                                </li>

                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"linkedin link\">
                                                            <span class=\"fa fa-linkedin-square fs35 text-info\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"email link\">
                                                            <span class=\"fa fa-envelope-square fs35 text-muted\"></span>
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class=\"row\">
                        <div class=\"col-md-12\">

                              <div class=\"tab-block\">
                                    <div class=\"p30\">
                                          <div id=\"tab2\" class=\"tab-pane\">
                                                <div class=\"container\">
                                                      <div class=\"row justify-content-center\">
                                                            <div class=\"col-12 mx-auto\">
                                                                  <div class=\"my-4\">
                                                                        <form>
                                                                              <div class=\"form-row\">
                                                                                    <div class=\"custom-file col-md-12\"  lang=\"fr\">
                                                                                          <label for=\"pic\" class=\"  custom-file-label\" lang=\"fr\">
                                                                                                Choisissez une image de profil
                                                                                          </label>
                                                                                          <input type=\"file\"
                                                                                                 id=\"pic\"
                                                                                                 class=\"custom-file-input\"/>
                                                                                    </div>
                                                                                    <hr class=\"mt-4\"/>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"firstname\">Prénoms</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"firstname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Richard\"/>
                                                                                    </div>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"lastname\">Nom</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"lastname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Aignon\"/>
                                                                                    </div>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputEmail4\">Email</label>
                                                                                    <input type=\"email\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputEmail4\"
                                                                                           placeholder=\"vous@gmail.com\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress5\">Liens du
                                                                                          profil LinkedIn</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress5\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress6\">Liens du
                                                                                          profil Facebook</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress6\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress7\">Liens du
                                                                                          profil Twitter</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress7\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"bio\">Biographie</label>
                                                                                    <textarea type=\"text\"
                                                                                              class=\"form-control\"
                                                                                              id=\"bio\"
                                                                                              placeholder=\"\"></textarea>
                                                                              </div>

                                                                              <hr class=\"my-4\"/>
                                                                              <div class=\"row mb-4\">
                                                                                    <div class=\"col-md-6\">
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword4\">Ancien
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword4\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword5\">Nouveau
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword5\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword6\">Confirmer
                                                                                                      le mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword6\"/>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class=\"col-md-6\">
                                                                                          <p class=\"mb-2\">Règles du mot
                                                                                                de passe</p>
                                                                                          <p class=\"small text-muted mb-2\">
                                                                                                Un mot de passe valide
                                                                                                doit répondre aux
                                                                                                exigences suivantes:</p>
                                                                                          <ul class=\"small text-muted pl-4 mb-0\">
                                                                                                <li>8 caractères au
                                                                                                      minimum
                                                                                                </li>
                                                                                                <li>Au moins un chiffre
                                                                                                </li>
                                                                                                <li>Ne pas être le mot
                                                                                                      de passe précédent
                                                                                                </li>
                                                                                          </ul>
                                                                                    </div>
                                                                              </div>
                                                                              <button type=\"submit\"
                                                                                      class=\"btn text-white btn bg-primary\">
                                                                                    Enregistrer les changements
                                                                              </button>
                                                                        </form>
                                                                  </div>
                                                            </div>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
      </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/profilrecruteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 17,  116 => 8,  106 => 7,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block title %}Profil{% endblock %}
{% block css %}
      <link rel=\"stylesheet\" href=\"{{ asset('build/css/profil.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('build/css/cv.css') }}\">
{% endblock %}
{% block body %}
<div class=\"dream-university-subpage py-5 container-fluid\" style=\"background-color: rgba(218,218,218,0.2)\">

      <div class=\" py-5 container bg-white px-5 shadow-lg\">
            <section id=\"content\" class=\"\">
                  <!-- Begin .page-heading -->
                  <div class=\"page-heading\">
                        <div class=\"d-block d-lg-flex\">
                              <div class=\"mr-lg-3 w-30 mb-4 mb-0\">
                                    <a href=\"#\">
                                          <img class=\"media-object mw150 img-fluid\" src=\"{{ asset('build/img/darren.png') }}\"
                                               alt=\"...\">
                                    </a>
                              </div>
                              <div class=\"media-body va-m\">
                                    <h2 class=\"media-heading text-primary\">Richard Aignon
                                    </h2>
                                    <div class=\"media-links mt-3\">
                                          <ul class=\"list-inline list-unstyled\">
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"facebook link\">
                                                            <span class=\"fa fa-facebook-square fs35\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"twitter link\">
                                                            <span class=\"fa fa-twitter-square fs35 text-info\"></span>
                                                      </a>
                                                </li>

                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"linkedin link\">
                                                            <span class=\"fa fa-linkedin-square fs35 text-info\"></span>
                                                      </a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                      <a href=\"#\" title=\"email link\">
                                                            <span class=\"fa fa-envelope-square fs35 text-muted\"></span>
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class=\"row\">
                        <div class=\"col-md-12\">

                              <div class=\"tab-block\">
                                    <div class=\"p30\">
                                          <div id=\"tab2\" class=\"tab-pane\">
                                                <div class=\"container\">
                                                      <div class=\"row justify-content-center\">
                                                            <div class=\"col-12 mx-auto\">
                                                                  <div class=\"my-4\">
                                                                        <form>
                                                                              <div class=\"form-row\">
                                                                                    <div class=\"custom-file col-md-12\"  lang=\"fr\">
                                                                                          <label for=\"pic\" class=\"  custom-file-label\" lang=\"fr\">
                                                                                                Choisissez une image de profil
                                                                                          </label>
                                                                                          <input type=\"file\"
                                                                                                 id=\"pic\"
                                                                                                 class=\"custom-file-input\"/>
                                                                                    </div>
                                                                                    <hr class=\"mt-4\"/>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"firstname\">Prénoms</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"firstname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Richard\"/>
                                                                                    </div>
                                                                                    <div class=\"form-group col-md-6\">
                                                                                          <label for=\"lastname\">Nom</label>
                                                                                          <input type=\"text\"
                                                                                                 id=\"lastname\"
                                                                                                 class=\"form-control\"
                                                                                                 placeholder=\"Aignon\"/>
                                                                                    </div>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputEmail4\">Email</label>
                                                                                    <input type=\"email\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputEmail4\"
                                                                                           placeholder=\"vous@gmail.com\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress5\">Liens du
                                                                                          profil LinkedIn</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress5\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress6\">Liens du
                                                                                          profil Facebook</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress6\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"inputAddress7\">Liens du
                                                                                          profil Twitter</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control\"
                                                                                           id=\"inputAddress7\"
                                                                                           placeholder=\"https://...\"/>
                                                                              </div>
                                                                              <div class=\"form-group\">
                                                                                    <label for=\"bio\">Biographie</label>
                                                                                    <textarea type=\"text\"
                                                                                              class=\"form-control\"
                                                                                              id=\"bio\"
                                                                                              placeholder=\"\"></textarea>
                                                                              </div>

                                                                              <hr class=\"my-4\"/>
                                                                              <div class=\"row mb-4\">
                                                                                    <div class=\"col-md-6\">
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword4\">Ancien
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword4\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword5\">Nouveau
                                                                                                      mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword5\"/>
                                                                                          </div>
                                                                                          <div class=\"form-group\">
                                                                                                <label for=\"inputPassword6\">Confirmer
                                                                                                      le mot de
                                                                                                      passe</label>
                                                                                                <input type=\"password\"
                                                                                                       class=\"form-control\"
                                                                                                       id=\"inputPassword6\"/>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class=\"col-md-6\">
                                                                                          <p class=\"mb-2\">Règles du mot
                                                                                                de passe</p>
                                                                                          <p class=\"small text-muted mb-2\">
                                                                                                Un mot de passe valide
                                                                                                doit répondre aux
                                                                                                exigences suivantes:</p>
                                                                                          <ul class=\"small text-muted pl-4 mb-0\">
                                                                                                <li>8 caractères au
                                                                                                      minimum
                                                                                                </li>
                                                                                                <li>Au moins un chiffre
                                                                                                </li>
                                                                                                <li>Ne pas être le mot
                                                                                                      de passe précédent
                                                                                                </li>
                                                                                          </ul>
                                                                                    </div>
                                                                              </div>
                                                                              <button type=\"submit\"
                                                                                      class=\"btn text-white btn bg-primary\">
                                                                                    Enregistrer les changements
                                                                              </button>
                                                                        </form>
                                                                  </div>
                                                            </div>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
      </div>
</div>
{% endblock %}", "recruteur/profilrecruteurs.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\profilrecruteurs.html.twig");
    }
}
