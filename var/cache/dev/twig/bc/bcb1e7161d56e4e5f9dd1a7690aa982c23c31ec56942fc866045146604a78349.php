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

/* recruteur/soumissionslist.html.twig */
class __TwigTemplate_e225b9aa8e83a24371550a3890968f08c28d47d6668b586238658f25f837ce7d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/soumissionslist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/soumissionslist.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/soumissionslist.html.twig", 1);
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

        echo "Soumissions";
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/profil.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/profilitem.css"), "html", null, true);
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
        echo "<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

    <div class=\" py-5 container\">
        <section id=\"content\">
            <h2 class=\"text-primary\">Mes opportunités</h2>
            <table class=\"table table-responsive-sm\">
                <tbody class=\"text-center justify-content-center\">
                <tr>
                    <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                    <td>15/10/2020</td>
                    <td class=\"text-right\">
                        <div class=\"btn-group\">
                            <button class=\"text-white border-0 py-2 bg-secondary p-3\"
                                    title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                            </button>
                            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_offer");
        echo "\"
                               class=\"text-white border-0 py-2 bg-primary ml-3 p-3\"
                               title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                            </a>
                            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recr_create_offer");
        echo "\"
                               class=\"text-white border-0 py-2 bg-primary ml-3 p-3\"
                               title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                            </a>
                            <a href=\"#\"
                               class=\"text-white border-0 py-2 bg-primary ml-3 p-3\"
                               title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <div class=\"container\">
                <div class=\"container\">
                    <h3 class=\"text-secondary\">Candidatures validées</h3>
                    <div class=\"row\">
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                 style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->

                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                 style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                 style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                 style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container\">
                    <h3 class=\"text-secondary\">Profil des candidats</h3>
                    <div class=\"row\">
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                 style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->

                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                 style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                 style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                 style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                 style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                 style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                 style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                 style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/darren.png"), "html", null, true);
        echo "\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <ul class=\"pagination d-flex justify-content-between\">
                    <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a>
                    </li>
                    <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                    <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
                </ul>
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
        return "recruteur/soumissionslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 393,  507 => 361,  472 => 329,  437 => 297,  402 => 265,  367 => 233,  332 => 201,  296 => 168,  260 => 135,  229 => 107,  198 => 79,  166 => 50,  140 => 27,  133 => 23,  116 => 8,  106 => 7,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block title %}Soumissions{% endblock %}
{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/profil.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/profilitem.css') }}\">
{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

    <div class=\" py-5 container\">
        <section id=\"content\">
            <h2 class=\"text-primary\">Mes opportunités</h2>
            <table class=\"table table-responsive-sm\">
                <tbody class=\"text-center justify-content-center\">
                <tr>
                    <td class=\"font-weight-bold\">Recrutement d'un agronome à la FSA</td>
                    <td>15/10/2020</td>
                    <td class=\"text-right\">
                        <div class=\"btn-group\">
                            <button class=\"text-white border-0 py-2 bg-secondary p-3\"
                                    title=\"Annuler la soumission\"><i class=\"fa fa-trash\"></i>
                            </button>
                            <a href=\"{{ path('recr_offer') }}\"
                               class=\"text-white border-0 py-2 bg-primary ml-3 p-3\"
                               title=\"Voir l'opportunité\"><i class=\"fa fa-eye\"></i>
                            </a>
                            <a href=\"{{ path(\"recr_create_offer\") }}\"
                               class=\"text-white border-0 py-2 bg-primary ml-3 p-3\"
                               title=\"Modifier l'opportunité\"><i class=\"fa fa-pencil\"></i>
                            </a>
                            <a href=\"#\"
                               class=\"text-white border-0 py-2 bg-primary ml-3 p-3\"
                               title=\"Voir les soumissions\"><i class=\"fa fa-list\"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <div class=\"container\">
                <div class=\"container\">
                    <h3 class=\"text-secondary\">Candidatures validées</h3>
                    <div class=\"row\">
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                 style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->

                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                 style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                 style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                 style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"w-100 btn bg-white text-primary btn-sm px-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            <i class=\"fa fa-check-circle mr-2\"></i>Validée
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container\">
                    <h3 class=\"text-secondary\">Profil des candidats</h3>
                    <div class=\"row\">
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                 style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->

                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                 style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                 style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                 style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.2s\"
                                 style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.3s\"
                                 style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.4s\"
                                 style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Advisor-->
                        <div class=\"col-12 col-sm-6 col-lg-3\">
                            <div class=\"single_advisor_profile wow fadeInUp\" data-wow-delay=\"0.5s\"
                                 style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                <!-- Team Thumb-->
                                <div class=\"advisor_thumb\"><img src=\"{{ asset('build/img/darren.png') }}\" alt=\"\"
                                                                class=\"img-fluid\" width=\"250\">
                                    <!-- Social Info-->
                                    <div class=\"social-info\"><a href=\"#\"><i
                                                    class=\"fa fa-facebook\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-twitter\"></i></a><a href=\"#\"><i
                                                    class=\"fa fa-linkedin\"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class=\"single_advisor_details_info\">
                                    <a href=\"cv.html\" class=\"text-black\">
                                        <h6>Sarah Dossou</h6>
                                        <p class=\"designation\">Informaticien</p>
                                    </a>
                                    <div class=\"d-lg-flex mt-3 justify-content-between\">
                                        <button class=\"btn bg-white text-secondary btn-sm mr-3 px-xl-3\"
                                                style=\"border: 1px solid #fe0000\">
                                            Rejeter
                                        </button>
                                        <button class=\"btn bg-white text-primary btn-sm px-xl-3\"
                                                style=\"border: 1px solid #2a8c28\">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <ul class=\"pagination d-flex justify-content-between\">
                    <li class=\"page-item\"><a class=\"page-link bg-primary border-0 text-white\" href=\"#\">Précédent</a>
                    </li>
                    <li class=\"page-item\"><a class=\"page-link bg-secondary text-white\" href=\"#\">1</a></li>
                    <li class=\"page-item\"><a class=\"page-link bg-primary text-white\" href=\"#\">Suivant</a></li>
                </ul>
            </div>
        </section>
    </div>
</div>
{% endblock %}", "recruteur/soumissionslist.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\soumissionslist.html.twig");
    }
}
