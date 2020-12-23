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

/* front/preconnexion.html.twig */
class __TwigTemplate_b272a62061823975f7da2bd00357803350b05944d619a0839cbf5ce7b2b3d16f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/preconnexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/preconnexion.html.twig"));

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>


<div class=\"du-banner-area\">

    <div class=\"du-featured-photo position-absolute d-flex justify-content-center w-100 overflow-auto h-100 px-3\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12 col-lg-6 px-2 px-lg-5 mt-5 mt-lg-0\">
                <div class=\"bg-white rounded-lg shadow-lg\">
                    <div>
                        <h1 class=\"py-3 text-center text-primary pt-5\" style=\"font-size: 5em\">UAC JOBS</h1>
                    </div>
                    <div class=\"mt-3\">
                        <p class=\"text-center text-black-50 m-0 mb-2\">
                            Postulez aux diverses offres en accédant à votre compte
                        <hr class=\"mx-lg-5 my-0\"/>
                        </p>
                    </div>
                    <div class=\"container pb-5\">
                        <p class=\"mx-xl-3 h4 text-center text-secondary font-weight-bold\">Je suis étudiant</p>
                        <i class=\"fa fa-graduation-cap d-flex justify-content-center\"
                           style=\"font-size: 250px;\"></i>
                        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"
                           class=\"btn-block text-uppercase text-center text-white bg-secondary rounded-pill\"
                           style=\"border: 1px solid;padding: 0.75rem 0\">
                            <span class=\"h6\">Continuer</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 px-2 px-lg-5 mt-5 mt-lg-0\">
                <div class=\"bg-white rounded-lg shadow-lg\">
                    <div>
                        <h1 class=\"py-3 text-center text-primary pt-5\" style=\"font-size: 5em\">UAC JOBS</h1>
                    </div>
                    <div class=\"mt-3\">
                        <p class=\"text-center text-black-50 m-0 mb-2\">
                            Recrutez pour vos différents postes et rechercher des profils étudiants en accédant à votre
                            espace.
                        <hr class=\"mx-lg-5 my-0\"/>
                        </p>
                    </div>
                    <div class=\"container pb-5\">
                        <p class=\"mx-xl-3 h4 text-secondary  text-center font-weight-bold\">Je suis recruteur</p>
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/send_job.png"), "html", null, true);
        echo "\"
                                 class=\"\" height=\"230\"/>
                        </div>
                        <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_recruteur");
        echo "\"
                           class=\"btn-block text-uppercase text-center text-white bg-secondary rounded-pill\"
                           style=\"border: 1px solid;padding: 0.75rem 0\">
                            <span class=\"h6\">Continuer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- Feature box equal height JS -->
<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<!-- UI bottom to top JS -->
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<!-- Subscription JS -->
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/sForm.js"), "html", null, true);
        echo "\"></script>
<!-- Animation JS -->
<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/wow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/device.min.js"), "html", null, true);
        echo "\"></script>
<!-- Menu JS -->
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/flexy-menu.js"), "html", null, true);
        echo "\"></script>
<!-- Text rotator JS -->
<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.simple-text-rotator.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll JS -->

<!-- Testimonila JS -->
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/library/testimonials.js"), "html", null, true);
        echo "\"></script>
<!-- Custom script -->
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/preconnexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 118,  220 => 116,  216 => 115,  209 => 111,  204 => 109,  199 => 107,  195 => 106,  190 => 104,  185 => 102,  180 => 100,  174 => 97,  170 => 96,  166 => 95,  150 => 82,  144 => 79,  118 => 56,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  54 => 10,  43 => 1,);
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>


<div class=\"du-banner-area\">

    <div class=\"du-featured-photo position-absolute d-flex justify-content-center w-100 overflow-auto h-100 px-3\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12 col-lg-6 px-2 px-lg-5 mt-5 mt-lg-0\">
                <div class=\"bg-white rounded-lg shadow-lg\">
                    <div>
                        <h1 class=\"py-3 text-center text-primary pt-5\" style=\"font-size: 5em\">UAC JOBS</h1>
                    </div>
                    <div class=\"mt-3\">
                        <p class=\"text-center text-black-50 m-0 mb-2\">
                            Postulez aux diverses offres en accédant à votre compte
                        <hr class=\"mx-lg-5 my-0\"/>
                        </p>
                    </div>
                    <div class=\"container pb-5\">
                        <p class=\"mx-xl-3 h4 text-center text-secondary font-weight-bold\">Je suis étudiant</p>
                        <i class=\"fa fa-graduation-cap d-flex justify-content-center\"
                           style=\"font-size: 250px;\"></i>
                        <a href=\"{{ path('login') }}\"
                           class=\"btn-block text-uppercase text-center text-white bg-secondary rounded-pill\"
                           style=\"border: 1px solid;padding: 0.75rem 0\">
                            <span class=\"h6\">Continuer</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 px-2 px-lg-5 mt-5 mt-lg-0\">
                <div class=\"bg-white rounded-lg shadow-lg\">
                    <div>
                        <h1 class=\"py-3 text-center text-primary pt-5\" style=\"font-size: 5em\">UAC JOBS</h1>
                    </div>
                    <div class=\"mt-3\">
                        <p class=\"text-center text-black-50 m-0 mb-2\">
                            Recrutez pour vos différents postes et rechercher des profils étudiants en accédant à votre
                            espace.
                        <hr class=\"mx-lg-5 my-0\"/>
                        </p>
                    </div>
                    <div class=\"container pb-5\">
                        <p class=\"mx-xl-3 h4 text-secondary  text-center font-weight-bold\">Je suis recruteur</p>
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"{{ asset('build/img/send_job.png') }}\"
                                 class=\"\" height=\"230\"/>
                        </div>
                        <a href=\"{{ path('login_recruteur') }}\"
                           class=\"btn-block text-uppercase text-center text-white bg-secondary rounded-pill\"
                           style=\"border: 1px solid;padding: 0.75rem 0\">
                            <span class=\"h6\">Continuer</span>
                        </a>
                    </div>
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
", "front/preconnexion.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\preconnexion.html.twig");
    }
}
