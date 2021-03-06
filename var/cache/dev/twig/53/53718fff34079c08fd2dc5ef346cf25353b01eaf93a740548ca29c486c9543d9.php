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

/* student/editcv.html.twig */
class __TwigTemplate_9338df043eb3596b19de5239fd316207fd14fad1db42bd8abb1c39436d979ad2 extends Template
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
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/editcv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/editcv.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/editcv.html.twig", 1);
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

        echo "Editer le cv";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/cv-form.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/profil.css"), "html", null, true);
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
        <section id=\"content\" class=\"\">
            <!-- Begin .page-heading -->
            <div class=\"page-heading\">
                <div class=\"d-block d-lg-flex\">
                    <div class=\"pr30 mr-lg-3 w-30\">
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
                        <p class=\"h6\">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod
                            tempor incididunt Lorem ipsum dolor sit amet ctetur adicing elit, sed do
                            eiusmod tempor incididunt Lorem
                            ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt
                            Lorem
                            ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
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

            <h2 class=\"text-secondary text-center mt-5\">Edition de mon CV</h2>
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <div class=\"m-0 p-0\">
                        <div class=\"m-0\" style=\"height: 100%;\">
                            <div>
                                <div class=\"\">
                                    <div class=\"col-12 p-md-5 justify-content-lg-center p-18-sm flex-sm-column\">
                                        <ul class=\"nav nav-tabs pills nav-justified\" id=\"pills-tab\"
                                            role=\"tablist\">
                                            <li class=\"nav-item pills-item active\">
                                                <a class=\"nav-link link\"
                                                   id=\"pills-identification-tab\"
                                                   data-toggle=\"pill\"
                                                   href=\"#pills-identification\" role=\"tab\"
                                                   aria-controls=\"pills-identification\"
                                                   aria-selected=\"true\">
                                                    <span class=\"badge rounded-circle bg-white text-primary\">01</span>
                                                    Identification
                                                </a>
                                            </li>
                                            <li class=\"nav-item pills-item\">
                                                <a class=\"nav-link link\" id=\"pills-contenu-tab\"
                                                   data-toggle=\"pill\" href=\"#pills-contenu\"
                                                   role=\"tab\"
                                                   aria-controls=\"pills-contenu\"
                                                   aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary custom-badge-mobile\">
                            02
                        </span>
                                                    Contenu
                                                </a>
                                            </li>
                                            <li class=\"nav-item pills-item\">
                                                <a class=\"nav-link link\"
                                                   id=\"pills-enregistrement-tab\"
                                                   data-toggle=\"pill\"
                                                   href=\"#pills-enregistrement\" role=\"tab\"
                                                   aria-controls=\"pills-enregistrement\"
                                                   aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary\">
                            03
                        </span>
                                                    Enregistrement
                                                </a>
                                            </li>
                                        </ul>
                                        <div class=\"tab-content text-primary border-primary rounded\"
                                             id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-identification\"
                                                 role=\"tabpanel\"
                                                 aria-labelledby=\"pills-identification-tab\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12 p-lg-4\">
                                                            <form id=\"identification-form\"
                                                                  method=\"post\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Nom</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"nom\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Prénoms</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"prenom\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Adresse
                                                                            de
                                                                            résidence</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"adresse\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Nationalité</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"nationalite\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Téléphone</label>
                                                                        <input type=\"tel\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"phone\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Email</label>
                                                                        <input type=\"email\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"email\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Date
                                                                            de
                                                                            naissance</label>
                                                                        <div class=\"input-group\">
                                                                            <select class=\"form-control border-primary mr-1\"
                                                                                    name=\"Jour\"
                                                                                    id=\"jour\">
                                                                                <option value=\"\">
                                                                                    Jour
                                                                                </option>
                                                                                <option value=\"1\">
                                                                                    1
                                                                                </option>
                                                                                <option value=\"2\">
                                                                                    2
                                                                                </option>
                                                                                <option value=\"3\">
                                                                                    3
                                                                                </option>
                                                                                <option value=\"4\">
                                                                                    4
                                                                                </option>
                                                                                <option value=\"5\">
                                                                                    5
                                                                                </option>
                                                                                <option value=\"6\">
                                                                                    6
                                                                                </option>
                                                                                <option value=\"7\">
                                                                                    7
                                                                                </option>
                                                                                <option value=\"8\">
                                                                                    8
                                                                                </option>
                                                                                <option value=\"9\">
                                                                                    9
                                                                                </option>
                                                                                <option value=\"10\">
                                                                                    10
                                                                                </option>
                                                                                <option value=\"11\">
                                                                                    11
                                                                                </option>
                                                                                <option value=\"12\">
                                                                                    12
                                                                                </option>
                                                                                <option value=\"13\">
                                                                                    13
                                                                                </option>
                                                                                <option value=\"14\">
                                                                                    14
                                                                                </option>
                                                                                <option value=\"15\">
                                                                                    15
                                                                                </option>
                                                                                <option value=\"16\">
                                                                                    16
                                                                                </option>
                                                                                <option value=\"17\">
                                                                                    17
                                                                                </option>
                                                                                <option value=\"18\">
                                                                                    18
                                                                                </option>
                                                                                <option value=\"19\">
                                                                                    19
                                                                                </option>
                                                                                <option value=\"20\">
                                                                                    20
                                                                                </option>
                                                                                <option value=\"21\">
                                                                                    21
                                                                                </option>
                                                                                <option value=\"22\">
                                                                                    22
                                                                                </option>
                                                                                <option value=\"23\">
                                                                                    23
                                                                                </option>
                                                                                <option value=\"24\">
                                                                                    24
                                                                                </option>
                                                                                <option value=\"25\">
                                                                                    25
                                                                                </option>
                                                                                <option value=\"2\">
                                                                                    2
                                                                                </option>
                                                                                <option value=\"26\">
                                                                                    26
                                                                                </option>
                                                                                <option value=\"4\">
                                                                                    4
                                                                                </option>
                                                                                <option value=\"27\">
                                                                                    27
                                                                                </option>
                                                                                <option value=\"28\">
                                                                                    28
                                                                                </option>
                                                                                <option value=\"29\">
                                                                                    29
                                                                                </option>
                                                                                <option value=\"30\">
                                                                                    30
                                                                                </option>
                                                                                <option value=\"31\">
                                                                                    31
                                                                                </option>
                                                                            </select>
                                                                            <select class=\"form-control border-primary mr-1\"
                                                                                    name=\"mois\"
                                                                                    id=\"mois\">
                                                                                <option value=\"\">
                                                                                    Mois
                                                                                </option>
                                                                                <option value=\"1\">
                                                                                    Janvier
                                                                                </option>
                                                                                <option value=\"2\">
                                                                                    Février
                                                                                </option>
                                                                                <option value=\"3\">
                                                                                    Mars
                                                                                </option>
                                                                                <option value=\"4\">
                                                                                    Avril
                                                                                </option>
                                                                                <option value=\"5\">
                                                                                    Mai
                                                                                </option>
                                                                                <option value=\"6\">
                                                                                    Juin
                                                                                </option>
                                                                                <option value=\"7\">
                                                                                    Juillet
                                                                                </option>
                                                                                <option value=\"8\">
                                                                                    Aout
                                                                                </option>
                                                                                <option value=\"9\">
                                                                                    Septembre
                                                                                </option>
                                                                                <option value=\"10\">
                                                                                    Octobre
                                                                                </option>
                                                                                <option value=\"11\">
                                                                                    Novembre
                                                                                </option>
                                                                                <option value=\"12\">
                                                                                    Décembre
                                                                                </option>
                                                                            </select>
                                                                            <select class=\"form-control border-primary\"
                                                                                    name=\"annee\"
                                                                                    id=\"annee\">
                                                                                <option value=\"\">
                                                                                    Année
                                                                                </option>
                                                                                <option value=\"2020\">
                                                                                    2020
                                                                                </option>
                                                                                <option value=\"2019\">
                                                                                    2019
                                                                                </option>
                                                                                <option value=\"2018\">
                                                                                    2018
                                                                                </option>
                                                                                <option value=\"2017\">
                                                                                    2017
                                                                                </option>
                                                                                <option value=\"2016\">
                                                                                    2016
                                                                                </option>
                                                                                <option value=\"2015\">
                                                                                    2015
                                                                                </option>
                                                                                <option value=\"2014\">
                                                                                    2014
                                                                                </option>
                                                                                <option value=\"2013\">
                                                                                    2013
                                                                                </option>
                                                                                <option value=\"2012\">
                                                                                    2012
                                                                                </option>
                                                                                <option value=\"2011\">
                                                                                    2011
                                                                                </option>
                                                                                <option value=\"2010\">
                                                                                    2010
                                                                                </option>
                                                                                <option value=\"2009\">
                                                                                    2009
                                                                                </option>
                                                                                <option value=\"2008\">
                                                                                    2008
                                                                                </option>
                                                                                <option value=\"2007\">
                                                                                    2007
                                                                                </option>
                                                                                <option value=\"2006\">
                                                                                    2006
                                                                                </option>
                                                                                <option value=\"2005\">
                                                                                    2005
                                                                                </option>
                                                                                <option value=\"2004\">
                                                                                    2004
                                                                                </option>
                                                                                <option value=\"2003\">
                                                                                    2003
                                                                                </option>
                                                                                <option value=\"2002\">
                                                                                    2002
                                                                                </option>
                                                                                <option value=\"2001\">
                                                                                    2001
                                                                                </option>
                                                                                <option value=\"2000\">
                                                                                    2000
                                                                                </option>
                                                                                <option value=\"1999\">
                                                                                    1999
                                                                                </option>
                                                                                <option value=\"1998\">
                                                                                    1998
                                                                                </option>
                                                                                <option value=\"1997\">
                                                                                    1997
                                                                                </option>
                                                                                <option value=\"1996\">
                                                                                    1996
                                                                                </option>
                                                                                <option value=\"1995\">
                                                                                    1995
                                                                                </option>
                                                                                <option value=\"1994\">
                                                                                    1994
                                                                                </option>
                                                                                <option value=\"1993\">
                                                                                    1993
                                                                                </option>
                                                                                <option value=\"1992\">
                                                                                    1992
                                                                                </option>
                                                                                <option value=\"1991\">
                                                                                    1991
                                                                                </option>
                                                                                <option value=\"1990\">
                                                                                    1990
                                                                                </option>
                                                                                <option value=\"1989\">
                                                                                    1989
                                                                                </option>
                                                                                <option value=\"1988\">
                                                                                    1988
                                                                                </option>
                                                                                <option value=\"1987\">
                                                                                    1987
                                                                                </option>
                                                                                <option value=\"1986\">
                                                                                    1986
                                                                                </option>
                                                                                <option value=\"1985\">
                                                                                    1985
                                                                                </option>
                                                                                <option value=\"1984\">
                                                                                    1984
                                                                                </option>
                                                                                <option value=\"1983\">
                                                                                    1983
                                                                                </option>
                                                                                <option value=\"1982\">
                                                                                    1982
                                                                                </option>
                                                                                <option value=\"1981\">
                                                                                    1981
                                                                                </option>
                                                                                <option value=\"1980\">
                                                                                    1980
                                                                                </option>
                                                                                <option value=\"1979\">
                                                                                    1979
                                                                                </option>
                                                                                <option value=\"1978\">
                                                                                    1978
                                                                                </option>
                                                                                <option value=\"1977\">
                                                                                    1977
                                                                                </option>
                                                                                <option value=\"1976\">
                                                                                    1976
                                                                                </option>
                                                                                <option value=\"1975\">
                                                                                    1975
                                                                                </option>
                                                                                <option value=\"1974\">
                                                                                    1974
                                                                                </option>
                                                                                <option value=\"1973\">
                                                                                    1973
                                                                                </option>
                                                                                <option value=\"1972\">
                                                                                    1972
                                                                                </option>
                                                                                <option value=\"1971\">
                                                                                    1971
                                                                                </option>
                                                                                <option value=\"1970\">
                                                                                    1970
                                                                                </option>
                                                                                <option value=\"1969\">
                                                                                    1969
                                                                                </option>
                                                                                <option value=\"1968\">
                                                                                    1968
                                                                                </option>
                                                                                <option value=\"1967\">
                                                                                    1967
                                                                                </option>
                                                                                <option value=\"1966\">
                                                                                    1966
                                                                                </option>
                                                                                <option value=\"1965\">
                                                                                    1965
                                                                                </option>
                                                                                <option value=\"1964\">
                                                                                    1964
                                                                                </option>
                                                                                <option value=\"1963\">
                                                                                    1963
                                                                                </option>
                                                                                <option value=\"1962\">
                                                                                    1962
                                                                                </option>
                                                                                <option value=\"1961\">
                                                                                    1961
                                                                                </option>
                                                                                <option value=\"1960\">
                                                                                    1960
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Situation
                                                                            matrimoniale</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"stituation\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Type
                                                                            de
                                                                            permis
                                                                            de
                                                                            conduire</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"permis\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Ajouter
                                                                            un
                                                                            champ</label>
                                                                        <select class=\"form-control border-primary\"
                                                                                name=\"champ\"
                                                                                id=\"champ\">
                                                                            <option value=\"\"></option>
                                                                            <option value=\"lieu\"
                                                                                    id=\"lieu-naissance\">
                                                                                Lieu
                                                                                de
                                                                                naissance
                                                                            </option>
                                                                            <option value=\"linkedin\">
                                                                                Linkedin
                                                                            </option>
                                                                            <option value=\"autres\">
                                                                                Autres
                                                                                à
                                                                                savoir
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row float-right\">
                                                                    <a href=\"#pills-contenu\" data-toggle=\"pill\"
                                                                       class=\"btn btn-md mr-17-px-sm mb-8-px-sm bg-primary text-white\">
                                                                        Suivant
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade pb-lg-5 show\" id=\"pills-contenu\"
                                                 role=\"tabpanel\"
                                                 aria-labelledby=\"pills-contenu-tab\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <form method=\"post\">
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Profil
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <div class=\"float-right mb-3\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </div>
                                                                        <div class=\"mt-4 pt-2\">
                                                                            <div class=\"form-group p-2\">
                                                                                <label for=\"profil-description\">Description</label>
                                                                                <textarea
                                                                                        class=\"form-control border-primary\"
                                                                                        name=\"profil-description\"
                                                                                        id=\"profil-description\"
                                                                                        rows=\"3\"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Formation
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_formation_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"formation_fields_wrap mt-4 pt-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Formation</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"formation\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Etablissement</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"etablissement\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Ville</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"ville\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row pt-lg-1\">
                                                                                <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Date
                                                                                        de
                                                                                        début</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-debut-formation\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-debut-formation\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"f\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Date
                                                                                        de
                                                                                        fin</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-fin-formation\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-fin-formation\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"2\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group p-1\">
                                                                                <label>Description</label>
                                                                                <textarea
                                                                                        class=\"form-control border-primary\"
                                                                                        name=\"description-formation\"
                                                                                        rows=\"3\">
                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\"p-3 border-0 add_formation_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            formation
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Expérience(s)
                                                                        professionnelle(s)
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_experience_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"experience_fields_wrap mt-4 pt-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Poste</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"poste\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Employeur</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"employeur\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Ville</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"ville-poste\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row pt-1\">
                                                                                <div class=\"col-12 col-lg-6  form-group\">
                                                                                    <label>Date
                                                                                        de
                                                                                        début</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-debut-poste\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-debut-poste\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group\">
                                                                                    <label>Date
                                                                                        de
                                                                                        fin</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-fin-poste\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-fin-poste\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"1\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group p-1\">
                                                                                <label for=\"poste-description\">Description</label>
                                                                                <textarea
                                                                                        class=\"form-control border-primary\"
                                                                                        id=\"poste-description\"
                                                                                        rows=\"3\">
                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\"p-3 border-0 add_experience_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            expérience
                                                                            professionnelle
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Compétences
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_competence_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"competence_fields_wrap mt-4 p-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Compétence</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"competence\">
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Niveau</label>
                                                                                    <select class=\"form-control border-primary\"
                                                                                            name=\"niveau\"
                                                                                            id=\"niveau\">
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\"p-3 border-0 add_competence_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            compétence
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Langues
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_langue_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"langue_fields_wrap mt-4 p-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Langues</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"langue\">
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Niveau</label>
                                                                                    <select class=\"form-control border-primary\"
                                                                                            name=\"niveau-langue\"
                                                                                            id=\"niveau-langue\">
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\" p-3 border-0 add_langue_field border-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            langue
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Centre
                                                                        d'intérêt
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_interest_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"interest_fields_wrap mt-3 p-lg-2\">
                                                                            <div class=\"form-group\">
                                                                                <label>Centre
                                                                                    d'intérêt</label>
                                                                                <input type=\"text\"
                                                                                       class=\"form-control border-primary\"
                                                                                       name=\"interest\">
                                                                            </div>
                                                                        </div>
                                                                        <button class=\" p-3 border-0 add_interest_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            un
                                                                            centre
                                                                            d'intérêt
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row float-right\">
                                                                    <a href=\"#pills-enregistrement\" data-toggle=\"pill\"
                                                                       class=\"btn btn-md mr-17-px-sm mb-8-px-sm mr-lg-4 bg-primary text-light\">
                                                                        Suivant
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade p-lg-5 show\" id=\"pills-enregistrement\"
                                                 role=\"tabpanel\"
                                                 aria-labelledby=\"pills-contact-tab\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <form action=\"\" method=\"\"
                                                              class=\"row\">
                                                            <div class=\"col-lg-5 col-12 border-primary rounded h-fit-content\">
                                                                <div class=\"text-center bg-white p-3 border-light rounded\">
                                                                    <img id=\"image_upload_preview\"
                                                                         src=\"./assets/img/icons8_user_100px_1@2x.png\"
                                                                         alt=\"\"
                                                                         width=\"172\"
                                                                         height=\"184\">
                                                                </div>
                                                                <div class=\"mt-3\">
                                                                    <input type=\"file\"
                                                                           name=\"photo\"
                                                                           id=\"photo\"
                                                                           class=\"custom-file-input opacity-0 overflow-hidden position-absolute z-index-1\"
                                                                           accept=\"image/*\"
                                                                           onchange=\"document.getElementById('image_upload_preview').src = window.URL.createObjectURL(this.files[0])\"/>
                                                                    <label for=\"photo\"
                                                                           class=\"w-100 text-white text-center bg-secondary py-3 d-inline-block cursor-pointer\">
                                                                        <i class=\"fa fa-picture-o\"></i>
                                                                        Ajouter une
                                                                        photo
                                                                    </label>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            <div class=\"col-lg-7 col-12 px-4 justify-content-center\">
                                                                <h6 class=\"text-center text-uppercase p-4 text-primary\">
                                                                    importer des
                                                                    fichiers
                                                                </h6>
                                                                <label>Importer
                                                                    CV</label>
                                                                <div class=\"form-group custom-file mb-3\">
                                                                    <input type=\"file\"
                                                                           name=\"cv\"
                                                                           class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\"
                                                                           id=\"cv_label\">
                                                                    </label>
                                                                </div>

                                                                <label>Importer
                                                                    diplôme</label>
                                                                <div class=\"form-group custom-file mb-3\">
                                                                    <input type=\"file\"
                                                                           name=\"diplome\"
                                                                           class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\"
                                                                           id=\"diplome_label\">
                                                                    </label>
                                                                </div>

                                                                <label>Importer
                                                                    certification</label>
                                                                <div class=\"form-group custom-file mb-3\">
                                                                    <input type=\"file\"
                                                                           name=\"certification\"
                                                                           class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\"
                                                                           id=\"certification_label\">
                                                                    </label>
                                                                </div>
                                                                <div class=\"d-flex justify-content-around\">
                                                                    <a type=\"submit\"
                                                                       class=\"btn btn-md m-2 bg-primary text-light\">
                                                                        Plus tard
                                                                    </a>
                                                                    <a type=\"submit\"
                                                                       class=\"btn btn-md bg-primary m-2 text-white\">
                                                                        Valider
                                                                    </a>
                                                                </div>
                                                            </div>
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
                </div>
            </div>
        </section>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1867
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1868
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/cv-form.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/editcv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1998 => 1868,  1988 => 1867,  128 => 17,  117 => 8,  107 => 7,  95 => 5,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'student/base.html.twig' %}
{% block title %}Editer le cv{% endblock %}
{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/cv-form.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/profil.css') }}\">
{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\" style=\"background-color: rgba(218,218,218,0.4)\">

    <div class=\" py-5 container\">
        <section id=\"content\" class=\"\">
            <!-- Begin .page-heading -->
            <div class=\"page-heading\">
                <div class=\"d-block d-lg-flex\">
                    <div class=\"pr30 mr-lg-3 w-30\">
                        <a href=\"#\">
                            <img class=\"media-object mw150 img-fluid\" src=\"{{ asset('build/img/darren.png') }}\"
                                 alt=\"...\">
                        </a>
                    </div>
                    <div class=\"media-body va-m\">
                        <h2 class=\"media-heading text-primary\">Richard Aignon
                        </h2>
                        <p class=\"h6\">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod
                            tempor incididunt Lorem ipsum dolor sit amet ctetur adicing elit, sed do
                            eiusmod tempor incididunt Lorem
                            ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt
                            Lorem
                            ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
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

            <h2 class=\"text-secondary text-center mt-5\">Edition de mon CV</h2>
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <div class=\"m-0 p-0\">
                        <div class=\"m-0\" style=\"height: 100%;\">
                            <div>
                                <div class=\"\">
                                    <div class=\"col-12 p-md-5 justify-content-lg-center p-18-sm flex-sm-column\">
                                        <ul class=\"nav nav-tabs pills nav-justified\" id=\"pills-tab\"
                                            role=\"tablist\">
                                            <li class=\"nav-item pills-item active\">
                                                <a class=\"nav-link link\"
                                                   id=\"pills-identification-tab\"
                                                   data-toggle=\"pill\"
                                                   href=\"#pills-identification\" role=\"tab\"
                                                   aria-controls=\"pills-identification\"
                                                   aria-selected=\"true\">
                                                    <span class=\"badge rounded-circle bg-white text-primary\">01</span>
                                                    Identification
                                                </a>
                                            </li>
                                            <li class=\"nav-item pills-item\">
                                                <a class=\"nav-link link\" id=\"pills-contenu-tab\"
                                                   data-toggle=\"pill\" href=\"#pills-contenu\"
                                                   role=\"tab\"
                                                   aria-controls=\"pills-contenu\"
                                                   aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary custom-badge-mobile\">
                            02
                        </span>
                                                    Contenu
                                                </a>
                                            </li>
                                            <li class=\"nav-item pills-item\">
                                                <a class=\"nav-link link\"
                                                   id=\"pills-enregistrement-tab\"
                                                   data-toggle=\"pill\"
                                                   href=\"#pills-enregistrement\" role=\"tab\"
                                                   aria-controls=\"pills-enregistrement\"
                                                   aria-selected=\"false\">
                        <span class=\"badge rounded-circle bg-white text-primary\">
                            03
                        </span>
                                                    Enregistrement
                                                </a>
                                            </li>
                                        </ul>
                                        <div class=\"tab-content text-primary border-primary rounded\"
                                             id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-identification\"
                                                 role=\"tabpanel\"
                                                 aria-labelledby=\"pills-identification-tab\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12 p-lg-4\">
                                                            <form id=\"identification-form\"
                                                                  method=\"post\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Nom</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"nom\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Prénoms</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"prenom\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Adresse
                                                                            de
                                                                            résidence</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"adresse\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Nationalité</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"nationalite\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Téléphone</label>
                                                                        <input type=\"tel\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"phone\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Email</label>
                                                                        <input type=\"email\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"email\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Date
                                                                            de
                                                                            naissance</label>
                                                                        <div class=\"input-group\">
                                                                            <select class=\"form-control border-primary mr-1\"
                                                                                    name=\"Jour\"
                                                                                    id=\"jour\">
                                                                                <option value=\"\">
                                                                                    Jour
                                                                                </option>
                                                                                <option value=\"1\">
                                                                                    1
                                                                                </option>
                                                                                <option value=\"2\">
                                                                                    2
                                                                                </option>
                                                                                <option value=\"3\">
                                                                                    3
                                                                                </option>
                                                                                <option value=\"4\">
                                                                                    4
                                                                                </option>
                                                                                <option value=\"5\">
                                                                                    5
                                                                                </option>
                                                                                <option value=\"6\">
                                                                                    6
                                                                                </option>
                                                                                <option value=\"7\">
                                                                                    7
                                                                                </option>
                                                                                <option value=\"8\">
                                                                                    8
                                                                                </option>
                                                                                <option value=\"9\">
                                                                                    9
                                                                                </option>
                                                                                <option value=\"10\">
                                                                                    10
                                                                                </option>
                                                                                <option value=\"11\">
                                                                                    11
                                                                                </option>
                                                                                <option value=\"12\">
                                                                                    12
                                                                                </option>
                                                                                <option value=\"13\">
                                                                                    13
                                                                                </option>
                                                                                <option value=\"14\">
                                                                                    14
                                                                                </option>
                                                                                <option value=\"15\">
                                                                                    15
                                                                                </option>
                                                                                <option value=\"16\">
                                                                                    16
                                                                                </option>
                                                                                <option value=\"17\">
                                                                                    17
                                                                                </option>
                                                                                <option value=\"18\">
                                                                                    18
                                                                                </option>
                                                                                <option value=\"19\">
                                                                                    19
                                                                                </option>
                                                                                <option value=\"20\">
                                                                                    20
                                                                                </option>
                                                                                <option value=\"21\">
                                                                                    21
                                                                                </option>
                                                                                <option value=\"22\">
                                                                                    22
                                                                                </option>
                                                                                <option value=\"23\">
                                                                                    23
                                                                                </option>
                                                                                <option value=\"24\">
                                                                                    24
                                                                                </option>
                                                                                <option value=\"25\">
                                                                                    25
                                                                                </option>
                                                                                <option value=\"2\">
                                                                                    2
                                                                                </option>
                                                                                <option value=\"26\">
                                                                                    26
                                                                                </option>
                                                                                <option value=\"4\">
                                                                                    4
                                                                                </option>
                                                                                <option value=\"27\">
                                                                                    27
                                                                                </option>
                                                                                <option value=\"28\">
                                                                                    28
                                                                                </option>
                                                                                <option value=\"29\">
                                                                                    29
                                                                                </option>
                                                                                <option value=\"30\">
                                                                                    30
                                                                                </option>
                                                                                <option value=\"31\">
                                                                                    31
                                                                                </option>
                                                                            </select>
                                                                            <select class=\"form-control border-primary mr-1\"
                                                                                    name=\"mois\"
                                                                                    id=\"mois\">
                                                                                <option value=\"\">
                                                                                    Mois
                                                                                </option>
                                                                                <option value=\"1\">
                                                                                    Janvier
                                                                                </option>
                                                                                <option value=\"2\">
                                                                                    Février
                                                                                </option>
                                                                                <option value=\"3\">
                                                                                    Mars
                                                                                </option>
                                                                                <option value=\"4\">
                                                                                    Avril
                                                                                </option>
                                                                                <option value=\"5\">
                                                                                    Mai
                                                                                </option>
                                                                                <option value=\"6\">
                                                                                    Juin
                                                                                </option>
                                                                                <option value=\"7\">
                                                                                    Juillet
                                                                                </option>
                                                                                <option value=\"8\">
                                                                                    Aout
                                                                                </option>
                                                                                <option value=\"9\">
                                                                                    Septembre
                                                                                </option>
                                                                                <option value=\"10\">
                                                                                    Octobre
                                                                                </option>
                                                                                <option value=\"11\">
                                                                                    Novembre
                                                                                </option>
                                                                                <option value=\"12\">
                                                                                    Décembre
                                                                                </option>
                                                                            </select>
                                                                            <select class=\"form-control border-primary\"
                                                                                    name=\"annee\"
                                                                                    id=\"annee\">
                                                                                <option value=\"\">
                                                                                    Année
                                                                                </option>
                                                                                <option value=\"2020\">
                                                                                    2020
                                                                                </option>
                                                                                <option value=\"2019\">
                                                                                    2019
                                                                                </option>
                                                                                <option value=\"2018\">
                                                                                    2018
                                                                                </option>
                                                                                <option value=\"2017\">
                                                                                    2017
                                                                                </option>
                                                                                <option value=\"2016\">
                                                                                    2016
                                                                                </option>
                                                                                <option value=\"2015\">
                                                                                    2015
                                                                                </option>
                                                                                <option value=\"2014\">
                                                                                    2014
                                                                                </option>
                                                                                <option value=\"2013\">
                                                                                    2013
                                                                                </option>
                                                                                <option value=\"2012\">
                                                                                    2012
                                                                                </option>
                                                                                <option value=\"2011\">
                                                                                    2011
                                                                                </option>
                                                                                <option value=\"2010\">
                                                                                    2010
                                                                                </option>
                                                                                <option value=\"2009\">
                                                                                    2009
                                                                                </option>
                                                                                <option value=\"2008\">
                                                                                    2008
                                                                                </option>
                                                                                <option value=\"2007\">
                                                                                    2007
                                                                                </option>
                                                                                <option value=\"2006\">
                                                                                    2006
                                                                                </option>
                                                                                <option value=\"2005\">
                                                                                    2005
                                                                                </option>
                                                                                <option value=\"2004\">
                                                                                    2004
                                                                                </option>
                                                                                <option value=\"2003\">
                                                                                    2003
                                                                                </option>
                                                                                <option value=\"2002\">
                                                                                    2002
                                                                                </option>
                                                                                <option value=\"2001\">
                                                                                    2001
                                                                                </option>
                                                                                <option value=\"2000\">
                                                                                    2000
                                                                                </option>
                                                                                <option value=\"1999\">
                                                                                    1999
                                                                                </option>
                                                                                <option value=\"1998\">
                                                                                    1998
                                                                                </option>
                                                                                <option value=\"1997\">
                                                                                    1997
                                                                                </option>
                                                                                <option value=\"1996\">
                                                                                    1996
                                                                                </option>
                                                                                <option value=\"1995\">
                                                                                    1995
                                                                                </option>
                                                                                <option value=\"1994\">
                                                                                    1994
                                                                                </option>
                                                                                <option value=\"1993\">
                                                                                    1993
                                                                                </option>
                                                                                <option value=\"1992\">
                                                                                    1992
                                                                                </option>
                                                                                <option value=\"1991\">
                                                                                    1991
                                                                                </option>
                                                                                <option value=\"1990\">
                                                                                    1990
                                                                                </option>
                                                                                <option value=\"1989\">
                                                                                    1989
                                                                                </option>
                                                                                <option value=\"1988\">
                                                                                    1988
                                                                                </option>
                                                                                <option value=\"1987\">
                                                                                    1987
                                                                                </option>
                                                                                <option value=\"1986\">
                                                                                    1986
                                                                                </option>
                                                                                <option value=\"1985\">
                                                                                    1985
                                                                                </option>
                                                                                <option value=\"1984\">
                                                                                    1984
                                                                                </option>
                                                                                <option value=\"1983\">
                                                                                    1983
                                                                                </option>
                                                                                <option value=\"1982\">
                                                                                    1982
                                                                                </option>
                                                                                <option value=\"1981\">
                                                                                    1981
                                                                                </option>
                                                                                <option value=\"1980\">
                                                                                    1980
                                                                                </option>
                                                                                <option value=\"1979\">
                                                                                    1979
                                                                                </option>
                                                                                <option value=\"1978\">
                                                                                    1978
                                                                                </option>
                                                                                <option value=\"1977\">
                                                                                    1977
                                                                                </option>
                                                                                <option value=\"1976\">
                                                                                    1976
                                                                                </option>
                                                                                <option value=\"1975\">
                                                                                    1975
                                                                                </option>
                                                                                <option value=\"1974\">
                                                                                    1974
                                                                                </option>
                                                                                <option value=\"1973\">
                                                                                    1973
                                                                                </option>
                                                                                <option value=\"1972\">
                                                                                    1972
                                                                                </option>
                                                                                <option value=\"1971\">
                                                                                    1971
                                                                                </option>
                                                                                <option value=\"1970\">
                                                                                    1970
                                                                                </option>
                                                                                <option value=\"1969\">
                                                                                    1969
                                                                                </option>
                                                                                <option value=\"1968\">
                                                                                    1968
                                                                                </option>
                                                                                <option value=\"1967\">
                                                                                    1967
                                                                                </option>
                                                                                <option value=\"1966\">
                                                                                    1966
                                                                                </option>
                                                                                <option value=\"1965\">
                                                                                    1965
                                                                                </option>
                                                                                <option value=\"1964\">
                                                                                    1964
                                                                                </option>
                                                                                <option value=\"1963\">
                                                                                    1963
                                                                                </option>
                                                                                <option value=\"1962\">
                                                                                    1962
                                                                                </option>
                                                                                <option value=\"1961\">
                                                                                    1961
                                                                                </option>
                                                                                <option value=\"1960\">
                                                                                    1960
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Situation
                                                                            matrimoniale</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"stituation\">
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Type
                                                                            de
                                                                            permis
                                                                            de
                                                                            conduire</label>
                                                                        <input type=\"text\"
                                                                               class=\"form-control border-primary\"
                                                                               id=\"permis\">
                                                                    </div>
                                                                    <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                        <label>Ajouter
                                                                            un
                                                                            champ</label>
                                                                        <select class=\"form-control border-primary\"
                                                                                name=\"champ\"
                                                                                id=\"champ\">
                                                                            <option value=\"\"></option>
                                                                            <option value=\"lieu\"
                                                                                    id=\"lieu-naissance\">
                                                                                Lieu
                                                                                de
                                                                                naissance
                                                                            </option>
                                                                            <option value=\"linkedin\">
                                                                                Linkedin
                                                                            </option>
                                                                            <option value=\"autres\">
                                                                                Autres
                                                                                à
                                                                                savoir
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row float-right\">
                                                                    <a href=\"#pills-contenu\" data-toggle=\"pill\"
                                                                       class=\"btn btn-md mr-17-px-sm mb-8-px-sm bg-primary text-white\">
                                                                        Suivant
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade pb-lg-5 show\" id=\"pills-contenu\"
                                                 role=\"tabpanel\"
                                                 aria-labelledby=\"pills-contenu-tab\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <form method=\"post\">
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Profil
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <div class=\"float-right mb-3\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </div>
                                                                        <div class=\"mt-4 pt-2\">
                                                                            <div class=\"form-group p-2\">
                                                                                <label for=\"profil-description\">Description</label>
                                                                                <textarea
                                                                                        class=\"form-control border-primary\"
                                                                                        name=\"profil-description\"
                                                                                        id=\"profil-description\"
                                                                                        rows=\"3\"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Formation
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_formation_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"formation_fields_wrap mt-4 pt-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Formation</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"formation\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Etablissement</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"etablissement\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Ville</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"ville\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row pt-lg-1\">
                                                                                <div class=\"col-12 col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Date
                                                                                        de
                                                                                        début</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-debut-formation\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-debut-formation\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"f\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Date
                                                                                        de
                                                                                        fin</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-fin-formation\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-fin-formation\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"2\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group p-1\">
                                                                                <label>Description</label>
                                                                                <textarea
                                                                                        class=\"form-control border-primary\"
                                                                                        name=\"description-formation\"
                                                                                        rows=\"3\">
                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\"p-3 border-0 add_formation_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            formation
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Expérience(s)
                                                                        professionnelle(s)
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_experience_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"experience_fields_wrap mt-4 pt-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-lg-6 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Poste</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"poste\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Employeur</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"employeur\">
                                                                                </div>
                                                                                <div class=\"col-lg-3 form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Ville</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"ville-poste\">
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"row pt-1\">
                                                                                <div class=\"col-12 col-lg-6  form-group\">
                                                                                    <label>Date
                                                                                        de
                                                                                        début</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-debut-poste\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-debut-poste\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group\">
                                                                                    <label>Date
                                                                                        de
                                                                                        fin</label>
                                                                                    <div class=\"input-group\">
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"mois-fin-poste\">
                                                                                            <option value=\"\">
                                                                                                Mois
                                                                                            </option>
                                                                                            <option value=\"1\">
                                                                                                Janvier
                                                                                            </option>
                                                                                            <option value=\"2\">
                                                                                                Février
                                                                                            </option>
                                                                                            <option value=\"3\">
                                                                                                Mars
                                                                                            </option>
                                                                                            <option value=\"4\">
                                                                                                Avril
                                                                                            </option>
                                                                                            <option value=\"5\">
                                                                                                Mai
                                                                                            </option>
                                                                                            <option value=\"6\">
                                                                                                Juin
                                                                                            </option>
                                                                                            <option value=\"7\">
                                                                                                Juillet
                                                                                            </option>
                                                                                            <option value=\"8\">
                                                                                                Aout
                                                                                            </option>
                                                                                            <option value=\"9\">
                                                                                                Septembre
                                                                                            </option>
                                                                                            <option value=\"10\">
                                                                                                Octobre
                                                                                            </option>
                                                                                            <option value=\"11\">
                                                                                                Novembre
                                                                                            </option>
                                                                                            <option value=\"12\">
                                                                                                Décembre
                                                                                            </option>
                                                                                        </select>
                                                                                        <select class=\"form-control border-primary\"
                                                                                                name=\"annee-fin-poste\">
                                                                                            <option value=\"\">
                                                                                                Année
                                                                                            </option>
                                                                                            <option value=\"2020\">
                                                                                                2020
                                                                                            </option>
                                                                                            <option value=\"2019\">
                                                                                                2019
                                                                                            </option>
                                                                                            <option value=\"2018\">
                                                                                                2018
                                                                                            </option>
                                                                                            <option value=\"2017\">
                                                                                                2017
                                                                                            </option>
                                                                                            <option value=\"2016\">
                                                                                                2016
                                                                                            </option>
                                                                                            <option value=\"2015\">
                                                                                                2015
                                                                                            </option>
                                                                                            <option value=\"2014\">
                                                                                                2014
                                                                                            </option>
                                                                                            <option value=\"2013\">
                                                                                                2013
                                                                                            </option>
                                                                                            <option value=\"2012\">
                                                                                                2012
                                                                                            </option>
                                                                                            <option value=\"2011\">
                                                                                                2011
                                                                                            </option>
                                                                                            <option value=\"2010\">
                                                                                                2010
                                                                                            </option>
                                                                                            <option value=\"2009\">
                                                                                                2009
                                                                                            </option>
                                                                                            <option value=\"2008\">
                                                                                                2008
                                                                                            </option>
                                                                                            <option value=\"2007\">
                                                                                                2007
                                                                                            </option>
                                                                                            <option value=\"2006\">
                                                                                                2006
                                                                                            </option>
                                                                                            <option value=\"2005\">
                                                                                                2005
                                                                                            </option>
                                                                                            <option value=\"2004\">
                                                                                                2004
                                                                                            </option>
                                                                                            <option value=\"2003\">
                                                                                                2003
                                                                                            </option>
                                                                                            <option value=\"2002\">
                                                                                                2002
                                                                                            </option>
                                                                                            <option value=\"2001\">
                                                                                                2001
                                                                                            </option>
                                                                                            <option value=\"2000\">
                                                                                                2000
                                                                                            </option>
                                                                                            <option value=\"1999\">
                                                                                                1999
                                                                                            </option>
                                                                                            <option value=\"1998\">
                                                                                                1998
                                                                                            </option>
                                                                                            <option value=\"1997\">
                                                                                                1997
                                                                                            </option>
                                                                                            <option value=\"1996\">
                                                                                                1996
                                                                                            </option>
                                                                                            <option value=\"1995\">
                                                                                                1995
                                                                                            </option>
                                                                                            <option value=\"1994\">
                                                                                                1994
                                                                                            </option>
                                                                                            <option value=\"1993\">
                                                                                                1993
                                                                                            </option>
                                                                                            <option value=\"1992\">
                                                                                                1992
                                                                                            </option>
                                                                                            <option value=\"1991\">
                                                                                                1991
                                                                                            </option>
                                                                                            <option value=\"1990\">
                                                                                                1990
                                                                                            </option>
                                                                                            <option value=\"1989\">
                                                                                                1989
                                                                                            </option>
                                                                                            <option value=\"1988\">
                                                                                                1988
                                                                                            </option>
                                                                                            <option value=\"1987\">
                                                                                                1987
                                                                                            </option>
                                                                                            <option value=\"1986\">
                                                                                                1986
                                                                                            </option>
                                                                                            <option value=\"1985\">
                                                                                                1985
                                                                                            </option>
                                                                                            <option value=\"1984\">
                                                                                                1984
                                                                                            </option>
                                                                                            <option value=\"1983\">
                                                                                                1983
                                                                                            </option>
                                                                                            <option value=\"1982\">
                                                                                                1982
                                                                                            </option>
                                                                                            <option value=\"1981\">
                                                                                                1981
                                                                                            </option>
                                                                                            <option value=\"1980\">
                                                                                                1980
                                                                                            </option>
                                                                                            <option value=\"1979\">
                                                                                                1979
                                                                                            </option>
                                                                                            <option value=\"1978\">
                                                                                                1978
                                                                                            </option>
                                                                                            <option value=\"1977\">
                                                                                                1977
                                                                                            </option>
                                                                                            <option value=\"1976\">
                                                                                                1976
                                                                                            </option>
                                                                                            <option value=\"1975\">
                                                                                                1975
                                                                                            </option>
                                                                                            <option value=\"1974\">
                                                                                                1974
                                                                                            </option>
                                                                                            <option value=\"1973\">
                                                                                                1973
                                                                                            </option>
                                                                                            <option value=\"1972\">
                                                                                                1972
                                                                                            </option>
                                                                                            <option value=\"1971\">
                                                                                                1971
                                                                                            </option>
                                                                                            <option value=\"1970\">
                                                                                                1970
                                                                                            </option>
                                                                                            <option value=\"1969\">
                                                                                                1969
                                                                                            </option>
                                                                                            <option value=\"1968\">
                                                                                                1968
                                                                                            </option>
                                                                                            <option value=\"1967\">
                                                                                                1967
                                                                                            </option>
                                                                                            <option value=\"1966\">
                                                                                                1966
                                                                                            </option>
                                                                                            <option value=\"1965\">
                                                                                                1965
                                                                                            </option>
                                                                                            <option value=\"1964\">
                                                                                                1964
                                                                                            </option>
                                                                                            <option value=\"1963\">
                                                                                                1963
                                                                                            </option>
                                                                                            <option value=\"1962\">
                                                                                                1962
                                                                                            </option>
                                                                                            <option value=\"1961\">
                                                                                                1961
                                                                                            </option>
                                                                                            <option value=\"1960\">
                                                                                                1960
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class=\"input-group-prepend bg-primary p-lg-2\">
                                                <span class=\"input-group-text\" id=\"1\">
                                                    <i class=\"fa fa-calendar text-white\"></i>
                                                </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group p-1\">
                                                                                <label for=\"poste-description\">Description</label>
                                                                                <textarea
                                                                                        class=\"form-control border-primary\"
                                                                                        id=\"poste-description\"
                                                                                        rows=\"3\">
                                    </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\"p-3 border-0 add_experience_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            expérience
                                                                            professionnelle
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Compétences
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_competence_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"competence_fields_wrap mt-4 p-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Compétence</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"competence\">
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Niveau</label>
                                                                                    <select class=\"form-control border-primary\"
                                                                                            name=\"niveau\"
                                                                                            id=\"niveau\">
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\"p-3 border-0 add_competence_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            compétence
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Langues
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_langue_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"langue_fields_wrap mt-4 p-2\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Langues</label>
                                                                                    <input type=\"text\"
                                                                                           class=\"form-control border-primary\"
                                                                                           name=\"langue\">
                                                                                </div>
                                                                                <div class=\"col-12 col-lg-6  form-group flex-unset-sm max-width-unset-sm\">
                                                                                    <label>Niveau</label>
                                                                                    <select class=\"form-control border-primary\"
                                                                                            name=\"niveau-langue\"
                                                                                            id=\"niveau-langue\">
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                        <option value=\"\"></option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class=\" p-3 border-0 add_langue_field border-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            une
                                                                            langue
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"m-lg-3\">
                                                                    <div class=\"accordion\">
                                                                        Centre
                                                                        d'intérêt
                                                                    </div>
                                                                    <div class=\"panel mt-2\">
                                                                        <button class=\"float-right border-0 remove_interest_field bg-light\">
                                                                            <i class=\"fa fa-times-circle-o\"></i>
                                                                        </button>
                                                                        <div class=\"interest_fields_wrap mt-3 p-lg-2\">
                                                                            <div class=\"form-group\">
                                                                                <label>Centre
                                                                                    d'intérêt</label>
                                                                                <input type=\"text\"
                                                                                       class=\"form-control border-primary\"
                                                                                       name=\"interest\">
                                                                            </div>
                                                                        </div>
                                                                        <button class=\" p-3 border-0 add_interest_field bg-light\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                            Ajouter
                                                                            un
                                                                            centre
                                                                            d'intérêt
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row float-right\">
                                                                    <a href=\"#pills-enregistrement\" data-toggle=\"pill\"
                                                                       class=\"btn btn-md mr-17-px-sm mb-8-px-sm mr-lg-4 bg-primary text-light\">
                                                                        Suivant
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade p-lg-5 show\" id=\"pills-enregistrement\"
                                                 role=\"tabpanel\"
                                                 aria-labelledby=\"pills-contact-tab\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <form action=\"\" method=\"\"
                                                              class=\"row\">
                                                            <div class=\"col-lg-5 col-12 border-primary rounded h-fit-content\">
                                                                <div class=\"text-center bg-white p-3 border-light rounded\">
                                                                    <img id=\"image_upload_preview\"
                                                                         src=\"./assets/img/icons8_user_100px_1@2x.png\"
                                                                         alt=\"\"
                                                                         width=\"172\"
                                                                         height=\"184\">
                                                                </div>
                                                                <div class=\"mt-3\">
                                                                    <input type=\"file\"
                                                                           name=\"photo\"
                                                                           id=\"photo\"
                                                                           class=\"custom-file-input opacity-0 overflow-hidden position-absolute z-index-1\"
                                                                           accept=\"image/*\"
                                                                           onchange=\"document.getElementById('image_upload_preview').src = window.URL.createObjectURL(this.files[0])\"/>
                                                                    <label for=\"photo\"
                                                                           class=\"w-100 text-white text-center bg-secondary py-3 d-inline-block cursor-pointer\">
                                                                        <i class=\"fa fa-picture-o\"></i>
                                                                        Ajouter une
                                                                        photo
                                                                    </label>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            <div class=\"col-lg-7 col-12 px-4 justify-content-center\">
                                                                <h6 class=\"text-center text-uppercase p-4 text-primary\">
                                                                    importer des
                                                                    fichiers
                                                                </h6>
                                                                <label>Importer
                                                                    CV</label>
                                                                <div class=\"form-group custom-file mb-3\">
                                                                    <input type=\"file\"
                                                                           name=\"cv\"
                                                                           class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\"
                                                                           id=\"cv_label\">
                                                                    </label>
                                                                </div>

                                                                <label>Importer
                                                                    diplôme</label>
                                                                <div class=\"form-group custom-file mb-3\">
                                                                    <input type=\"file\"
                                                                           name=\"diplome\"
                                                                           class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\"
                                                                           id=\"diplome_label\">
                                                                    </label>
                                                                </div>

                                                                <label>Importer
                                                                    certification</label>
                                                                <div class=\"form-group custom-file mb-3\">
                                                                    <input type=\"file\"
                                                                           name=\"certification\"
                                                                           class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\"
                                                                           id=\"certification_label\">
                                                                    </label>
                                                                </div>
                                                                <div class=\"d-flex justify-content-around\">
                                                                    <a type=\"submit\"
                                                                       class=\"btn btn-md m-2 bg-primary text-light\">
                                                                        Plus tard
                                                                    </a>
                                                                    <a type=\"submit\"
                                                                       class=\"btn btn-md bg-primary m-2 text-white\">
                                                                        Valider
                                                                    </a>
                                                                </div>
                                                            </div>
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
                </div>
            </div>
        </section>
    </div>
</div>
{% endblock %}
{% block js %}
<script type=\"text/javascript\" src=\"{{ asset('build/js/cv-form.js') }}\"></script>
{% endblock %}", "student/editcv.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\student\\editcv.html.twig");
    }
}
