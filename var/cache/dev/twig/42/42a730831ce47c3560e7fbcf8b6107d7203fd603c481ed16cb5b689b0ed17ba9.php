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

/* front/connexion.html.twig */
class __TwigTemplate_31a7b75a3c338abf21639ac768c0ed29e5b257ad462d78e2cb75768588dc4836 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/connexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>UAC Jobs | Connexion</title>

      <!-- Bootstrap -->
      <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <!-- Main CSS -->
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\">
      <!-- Animate CSS -->
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/animate.css"), "html", null, true);
        echo "\">
      <!-- Font Awesome Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/fonts/font-awesome.css"), "html", null, true);
        echo "\">
      <!-- Menu -->
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/flexy-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <!-- Testimonial CSS -->
      <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/cubeportfolio.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


      <!-- Font  -->
      <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
            type='text/css'>
      ";
        // line 27
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
</head>
<body>

<div class=\"du-banner-area\">

      <div class=\"du-featured-photo bg-white position-absolute w-100 h-100 overflow-auto\">
            <div class=\"w-100 h-100 overflow-auto d-flex align-items-center\" style=\"background-color: rgba(218,218,218,0.5)\">
                  <div class=\"px-2 px-lg-0 mt-5 mt-lg-0 container rounded-lg w-30\">
                        <div class=\"bg-white rounded-lg shadow-lg\">
                              <div>
                                    <h1 class=\"py-3 text-center text-primary pt-5\" style=\"font-size: 5em\">UAC JOBS</h1>
                              </div>
                              <div class=\"mt-3\">
                                    <p class=\"text-center h2 font-weight-light\">Connexion<span
                                            class=\"text-secondary ml-2\">étudiant</span>
                                    </p>
                                    <p class=\"text-center text-black-50 m-0 mb-2\">
                                          Postulez aux diverses offres en accédant à votre compte
                                    </p>

                                    <hr class=\"mx-lg-5 my-0\"/>
                              </div>
                              <div class=\"container\">
                                    <p class=\"mx-xl-3 text-black-50 font-italic font-weight-light\">Tous les champs sont
                                          obligatoires</p>
                                    <form class=\"row pb-5 mx-xl-3\">
                                          <div class=\"col-12\">
                                                <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Adresse email</label>
                                                <div class=\"input-group\">
                                                      <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                                                            <i class=\"fa fa-user\"></i>
                                                      </div>
                                                      <input class=\"form-control border-left-0\" type=\"email\"/>
                                                </div>
                                          </div>
                                          <div class=\"col-12 mt-3\">
                                                <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
                                                <div class=\"input-group\">
                                                      <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                                                            <i class=\"fa fa-eye-slash\"></i>
                                                      </div>
                                                      <input class=\"form-control border-left-0\" type=\"password\"/>
                                                </div>
                                          </div>
                                          <div class=\"col-12 mt-1\">
                                                <p class=\"text-right\"><a class=\"font-weight-bold\"><u>J'ai oublié mon mot de
                                                      passe</u></a></p>
                                          </div>
                                          <div class=\"col-12 col-lg-6 mt-2\">
                                                <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"btn-block text-center text-secondary bg-white rounded-pill\"
                                                        style=\"border: 1px solid;padding: 0.75rem 0\">
                                                      <span class=\"h6\">Retour</span>
                                                </a>
                                          </div>
                                          <div class=\"col-12 col-lg-6 mt-2\">
                                                <button class=\"btn-block text-uppercase text-white bg-secondary rounded-pill\"
                                                        style=\"border: 1px solid;padding: 0.75rem 0\">
                                                      <span class=\"h6\">Se connecter</span>
                                                </button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                        <div class=\"container bg-white mt-4 py-3 rounded-lg shadow-lg\">
                              <p class=\"text-center h5 font-weight-light\">Première visite
                              </p>
                              <p class=\"text-center font-weight-bold m-0\">Nouveau utilisateur? <a class=\"text-secondary\"
                                                                                                  href=\"#\">Je crée mon
                                    compte</a>
                              </p>
                        </div>
                  </div>
            </div>
      </div>

</div>



<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/sForm.js"), "html", null, true);
        echo "\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/wow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/device.min.js"), "html", null, true);
        echo "\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/flexy-menu.js"), "html", null, true);
        echo "\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.simple-text-rotator.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/testimonials.js"), "html", null, true);
        echo "\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 27,  241 => 136,  236 => 134,  232 => 133,  225 => 129,  220 => 127,  215 => 125,  211 => 124,  206 => 122,  201 => 120,  196 => 118,  190 => 115,  186 => 114,  182 => 113,  149 => 83,  92 => 28,  90 => 27,  80 => 20,  75 => 18,  70 => 16,  65 => 14,  60 => 12,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>UAC Jobs | Connexion</title>

      <!-- Bootstrap -->
      <link href=\"{{ asset('build/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
      <!-- Main CSS -->
      <link rel=\"stylesheet\" href=\"{{ asset('build/css/style.css') }}\">
      <!-- Animate CSS -->
      <link rel=\"stylesheet\" href=\"{{ asset('build/css/animate.css') }}\">
      <!-- Font Awesome Css -->
      <link rel=\"stylesheet\" href=\"{{ asset('build/fonts/font-awesome.css') }}\">
      <!-- Menu -->
      <link href=\"{{ asset('build/css/flexy-menu.css') }}\" rel=\"stylesheet\">
      <!-- Testimonial CSS -->
      <link href=\"{{ asset('build/css/cubeportfolio.min.css') }}\" rel=\"stylesheet\">


      <!-- Font  -->
      <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'
            type='text/css'>
      {% block css %} {% endblock %}
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
</head>
<body>

<div class=\"du-banner-area\">

      <div class=\"du-featured-photo bg-white position-absolute w-100 h-100 overflow-auto\">
            <div class=\"w-100 h-100 overflow-auto d-flex align-items-center\" style=\"background-color: rgba(218,218,218,0.5)\">
                  <div class=\"px-2 px-lg-0 mt-5 mt-lg-0 container rounded-lg w-30\">
                        <div class=\"bg-white rounded-lg shadow-lg\">
                              <div>
                                    <h1 class=\"py-3 text-center text-primary pt-5\" style=\"font-size: 5em\">UAC JOBS</h1>
                              </div>
                              <div class=\"mt-3\">
                                    <p class=\"text-center h2 font-weight-light\">Connexion<span
                                            class=\"text-secondary ml-2\">étudiant</span>
                                    </p>
                                    <p class=\"text-center text-black-50 m-0 mb-2\">
                                          Postulez aux diverses offres en accédant à votre compte
                                    </p>

                                    <hr class=\"mx-lg-5 my-0\"/>
                              </div>
                              <div class=\"container\">
                                    <p class=\"mx-xl-3 text-black-50 font-italic font-weight-light\">Tous les champs sont
                                          obligatoires</p>
                                    <form class=\"row pb-5 mx-xl-3\">
                                          <div class=\"col-12\">
                                                <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Adresse email</label>
                                                <div class=\"input-group\">
                                                      <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                                                            <i class=\"fa fa-user\"></i>
                                                      </div>
                                                      <input class=\"form-control border-left-0\" type=\"email\"/>
                                                </div>
                                          </div>
                                          <div class=\"col-12 mt-3\">
                                                <label class=\"font-weight-bold\" style=\"opacity: 0.7\">Mot de passe</label>
                                                <div class=\"input-group\">
                                                      <div class=\"input-group-append text-black-50 d-flex align-items-center px-3 border border-right-0\">
                                                            <i class=\"fa fa-eye-slash\"></i>
                                                      </div>
                                                      <input class=\"form-control border-left-0\" type=\"password\"/>
                                                </div>
                                          </div>
                                          <div class=\"col-12 mt-1\">
                                                <p class=\"text-right\"><a class=\"font-weight-bold\"><u>J'ai oublié mon mot de
                                                      passe</u></a></p>
                                          </div>
                                          <div class=\"col-12 col-lg-6 mt-2\">
                                                <a href=\"{{ path('index') }}\" class=\"btn-block text-center text-secondary bg-white rounded-pill\"
                                                        style=\"border: 1px solid;padding: 0.75rem 0\">
                                                      <span class=\"h6\">Retour</span>
                                                </a>
                                          </div>
                                          <div class=\"col-12 col-lg-6 mt-2\">
                                                <button class=\"btn-block text-uppercase text-white bg-secondary rounded-pill\"
                                                        style=\"border: 1px solid;padding: 0.75rem 0\">
                                                      <span class=\"h6\">Se connecter</span>
                                                </button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                        <div class=\"container bg-white mt-4 py-3 rounded-lg shadow-lg\">
                              <p class=\"text-center h5 font-weight-light\">Première visite
                              </p>
                              <p class=\"text-center font-weight-bold m-0\">Nouveau utilisateur? <a class=\"text-secondary\"
                                                                                                  href=\"#\">Je crée mon
                                    compte</a>
                              </p>
                        </div>
                  </div>
            </div>
      </div>

</div>



<script type=\"text/javascript\" src=\"{{ asset('build/js/jquery.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/bootstrap/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.easing.1.3.js') }}\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.equalheights.js') }}\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.ui.totop.js') }}\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/sForm.js') }}\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/wow.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/device.min.js') }}\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/flexy-menu.js') }}\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.simple-text-rotator.min.js') }}\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/jquery.cubeportfolio.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/library/testimonials.js') }}\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"{{ asset('build/js/main.js') }}\"></script>


</body>
</html>
", "front/connexion.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\connexion.html.twig");
    }
}
