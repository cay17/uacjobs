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

/* front/article.html.twig */
class __TwigTemplate_fcad4dfefc685e7919e3978593b692e2ba23ce90a577b29be4d6213ba79720cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/article.html.twig", 1);
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

        echo "Article";
        
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
        echo "    <div class=\"dream-university-subpage\">

        <!-- Begin breadcrumbs-->
        <!-- End breadcrumbs-->


        <!-- Begin Blog single -->
        <div class=\"du-subpage-content\" style=\"background-color: rgba(218,218,218,0.2)\">
            <div class=\"du-single-page\">

                <!-- Begin Single Post -->

                <section class=\"single-page ptb-50\">
                    <div class=\"container\" style=\"font-size: medium\">

                        <div class=\"row\">
                            <div class=\"col-md-9\">
                                <h2 class=\"text-secondary\">Présentation des nouveaux boursiers de la
                                    mastercard foundation à l'université d'abomey-calavi</h2>
                                <div class=\"box-container post\">
                                    <img alt=\"image\" class=\"media-object img-fluid w-100\"
                                         src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/tt.jpg"), "html", null, true);
        echo "\">
                                    <div class=\"ptb-30\">
                                        <div class=\"clearfix meta\">
                                            <p class=\"serif italic pull-left\">Date:
                                                <a>15 May 2012</a></p>
                                        </div>
                                        <div class=\"author\">
                                            <p class=\"serif italic\">posted by:
                                                <a>John Doe</a>
                                                in
                                                <a>Category Name</a></p>
                                        </div>
                                        <p><strong>Pellentesque habitant morbi tristique senectus et netus
                                                et
                                                malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                feugiat
                                                vitae, ultricies eget, tempor sit amet, ante.</strong>
                                            Donec eu libero sit amet quam egestas semper. Aenean
                                            ultricies mi vitae
                                            est. Mauris placerat eleifend leo. Quisque sit amet est et
                                            sapien
                                            ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
                                            commodo
                                            vitae, ornare sit amet, wisi. Aenean fermentum, elit eget
                                            tincidunt
                                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus
                                            enim ac dui.
                                            Donec non enim in turpis pulvinar facilisis. Ut felis.
                                            Praesent dapibus,
                                            neque id cursus faucibus, tortor neque egestas augue, eu
                                            vulputate magna
                                            eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt
                                            quis,
                                            accumsan porttitor, facilisis luctus, metus</p>
                                        <h4>Heading 2. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h4>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <blockquote>
                                            <p>Blockquote. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                                Integer posuere erat a ante.</p>
                                            <small>Someone famous
                                                <cite title=\"Source Title\">Source Title</cite></small>
                                        </blockquote>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <h3>Heading 3. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h3>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit.
                                            </li>
                                            <li>Aliquam tincidunt mauris eu risus.
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit.
                                                    </li>
                                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                                    <li>Vestibulum auctor dapibus neque.</li>
                                                </ul>
                                            </li>
                                            <li>Vestibulum auctor dapibus neque.</li>
                                        </ul>
                                        <h4>Heading 4. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h4>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit.
                                            </li>
                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                            <li>Vestibulum auctor dapibus neque.</li>
                                        </ol>
                                        <h5>Heading 5. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h5>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <h6>Heading 6. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h6>
                                        <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                            erat
                                            wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
                                            Aenean
                                            fermentum, elit eget tincidunt condimentum, eros ipsum
                                            rutrum orci,
                                            sagittis tempus lacus enim ac dui. Donec non enim in turpis
                                            pulvinar
                                            facilisis. Ut felis. Praesent dapibus, neque id cursus
                                            faucibus, tortor
                                            neque egestas augue, eu vulputate magna eros eu erat.
                                        </p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <!-- .comment-container -->
                            </div>

                            <!-- Blog sidebar -->

                            <div class=\"col-md-3\">
                                <div class=\"sidebar\">
                                    <div class=\"sidebar-inner\">
                                        <div class=\"widget\">
                                            <h3 class=\"widget-title\">Partager sur</h3>

                                            <ul class=\"social social-boxed\">
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                                </li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                                </li>
                                                <li><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a>
                                                </li>
                                                <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                                            </ul><!-- /.social-->
                                        </div><!-- /.widget -->

                                        <div class=\"widget\">
                                            <h3 class=\"widget-title\">Récents</h3>

                                            <div class=\"post-list\">

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog/single-post.jpg"), "html", null, true);
        echo "\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"";
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog/single-post.jpg"), "html", null, true);
        echo "\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog/single-post.jpg"), "html", null, true);
        echo "\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"";
        // line 259
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog/single-post.jpg"), "html", null, true);
        echo "\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"";
        // line 298
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog/single-post.jpg"), "html", null, true);
        echo "\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                            </div><!-- /.post-list -->
                                        </div><!-- /.widget -->
                                        <!-- /.widget popular property -->

                                    </div><!-- /.sidebar-inner -->
                                </div><!-- /.sidebar -->
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Single Post -->

            </div><!-- /.du-blog-single -->
        </div><!-- /.du-subpage content -->
        <!-- End blog single -->

        <div class=\"du-newsletter\">
            <div class=\"container\">
                <h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
                <p class=\"wow fadeInUp\">Afin de ne rater aucune de nos dernières actualités. </p>
                <div class=\"row\">
                    <div class=\"col-lg-12 wow fadeInUp\">
                        <form id=\"newsletter\" accept-charset=\"utf-8\">
                            <div class=\"success\">Your subscribe request has been sent!</div>
                            <label class=\"email\">
                                <input type=\"email\" value=\"Entrez votre email:\">
                                <span class=\"error\">*This is not a valid email address.</span>
                            </label><br>
                            <a href=\"#\" data-type=\"submit\">Souscrire</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 311,  429 => 301,  423 => 298,  407 => 285,  394 => 275,  388 => 272,  372 => 259,  359 => 249,  353 => 246,  337 => 233,  324 => 223,  318 => 220,  302 => 207,  289 => 197,  283 => 194,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block title %}Article{% endblock %}
{% block body %}
    <div class=\"dream-university-subpage\">

        <!-- Begin breadcrumbs-->
        <!-- End breadcrumbs-->


        <!-- Begin Blog single -->
        <div class=\"du-subpage-content\" style=\"background-color: rgba(218,218,218,0.2)\">
            <div class=\"du-single-page\">

                <!-- Begin Single Post -->

                <section class=\"single-page ptb-50\">
                    <div class=\"container\" style=\"font-size: medium\">

                        <div class=\"row\">
                            <div class=\"col-md-9\">
                                <h2 class=\"text-secondary\">Présentation des nouveaux boursiers de la
                                    mastercard foundation à l'université d'abomey-calavi</h2>
                                <div class=\"box-container post\">
                                    <img alt=\"image\" class=\"media-object img-fluid w-100\"
                                         src=\"{{ asset('build/img/tt.jpg') }}\">
                                    <div class=\"ptb-30\">
                                        <div class=\"clearfix meta\">
                                            <p class=\"serif italic pull-left\">Date:
                                                <a>15 May 2012</a></p>
                                        </div>
                                        <div class=\"author\">
                                            <p class=\"serif italic\">posted by:
                                                <a>John Doe</a>
                                                in
                                                <a>Category Name</a></p>
                                        </div>
                                        <p><strong>Pellentesque habitant morbi tristique senectus et netus
                                                et
                                                malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                feugiat
                                                vitae, ultricies eget, tempor sit amet, ante.</strong>
                                            Donec eu libero sit amet quam egestas semper. Aenean
                                            ultricies mi vitae
                                            est. Mauris placerat eleifend leo. Quisque sit amet est et
                                            sapien
                                            ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
                                            commodo
                                            vitae, ornare sit amet, wisi. Aenean fermentum, elit eget
                                            tincidunt
                                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus
                                            enim ac dui.
                                            Donec non enim in turpis pulvinar facilisis. Ut felis.
                                            Praesent dapibus,
                                            neque id cursus faucibus, tortor neque egestas augue, eu
                                            vulputate magna
                                            eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt
                                            quis,
                                            accumsan porttitor, facilisis luctus, metus</p>
                                        <h4>Heading 2. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h4>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <blockquote>
                                            <p>Blockquote. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                                Integer posuere erat a ante.</p>
                                            <small>Someone famous
                                                <cite title=\"Source Title\">Source Title</cite></small>
                                        </blockquote>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <h3>Heading 3. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h3>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit.
                                            </li>
                                            <li>Aliquam tincidunt mauris eu risus.
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit.
                                                    </li>
                                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                                    <li>Vestibulum auctor dapibus neque.</li>
                                                </ul>
                                            </li>
                                            <li>Vestibulum auctor dapibus neque.</li>
                                        </ul>
                                        <h4>Heading 4. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h4>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit.
                                            </li>
                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                            <li>Vestibulum auctor dapibus neque.</li>
                                        </ol>
                                        <h5>Heading 5. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h5>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et
                                            malesuada
                                            fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                            vitae,
                                            ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                            amet quam
                                            egestas semper. Aenean ultricies mi vitae est. Mauris
                                            placerat eleifend
                                            leo.</p>
                                        <h6>Heading 6. Praesent dapibus, neque id cursus faucibus, tortor
                                            neque
                                            egestas augue.</h6>
                                        <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                            erat
                                            wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
                                            Aenean
                                            fermentum, elit eget tincidunt condimentum, eros ipsum
                                            rutrum orci,
                                            sagittis tempus lacus enim ac dui. Donec non enim in turpis
                                            pulvinar
                                            facilisis. Ut felis. Praesent dapibus, neque id cursus
                                            faucibus, tortor
                                            neque egestas augue, eu vulputate magna eros eu erat.
                                        </p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <!-- .comment-container -->
                            </div>

                            <!-- Blog sidebar -->

                            <div class=\"col-md-3\">
                                <div class=\"sidebar\">
                                    <div class=\"sidebar-inner\">
                                        <div class=\"widget\">
                                            <h3 class=\"widget-title\">Partager sur</h3>

                                            <ul class=\"social social-boxed\">
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                                </li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                                </li>
                                                <li><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a>
                                                </li>
                                                <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                                            </ul><!-- /.social-->
                                        </div><!-- /.widget -->

                                        <div class=\"widget\">
                                            <h3 class=\"widget-title\">Récents</h3>

                                            <div class=\"post-list\">

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"{{ path('article') }}\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"{{ asset('build/img/blog/single-post.jpg') }}\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"{{ path('article') }}\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"{{ path('article') }}\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"{{ asset('build/img/blog/single-post.jpg') }}\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"{{ path('article') }}\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"{{ path('article') }}\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"{{ asset('build/img/blog/single-post.jpg') }}\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"{{ path('article') }}\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"{{ path('article') }}\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"{{ asset('build/img/blog/single-post.jpg') }}\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"{{ path('article') }}\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                                <div class=\"sidebar-single-post clearfix shadow-lg border-0 bg-white\">
                                                    <div class=\"sidebar-single-post-picture col-sm-12 col-md-12\">
                                                        <div class=\"sidebar-single-post-picture-inner overflow-hidden\" style=\"height: 120px\">
                                                            <a href=\"{{ path('article') }}\"
                                                               class=\"sidebar-single-post-picture-target\">
                                                                <img class=\"img-fluid w-100\"
                                                                     src=\"{{ asset('build/img/blog/single-post.jpg') }}\"
                                                                     alt=\"\">
                                                            </a>
                                                        </div>
                                                        <!-- /.sidebar-single-post-picture -->
                                                    </div><!-- /.sidebar-single-post-picture -->

                                                    <div class=\"sidebar-post-content-box col-sm-12 col-md-12 mt-2\">
                                                        <h4 class=\"sidebar-single-post-title\">
                                                            <a
                                                                    href=\"{{ path('article') }}\"
                                                                    style=\"font-size: medium\">Rentrée académique à l'uac
                                                                ce 22/04/2012
                                                            </a>
                                                        </h4>
                                                        <p class=\"small mb-0 d-flex justify-content-end text-secondary\">12/02/2020 à 10h47</p>
                                                        <!-- /.sidebar-single-post-title -->
                                                    </div><!-- /.sidebar-post-content-box -->
                                                </div><!-- /.sidebar-single-post -->

                                            </div><!-- /.post-list -->
                                        </div><!-- /.widget -->
                                        <!-- /.widget popular property -->

                                    </div><!-- /.sidebar-inner -->
                                </div><!-- /.sidebar -->
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Single Post -->

            </div><!-- /.du-blog-single -->
        </div><!-- /.du-subpage content -->
        <!-- End blog single -->

        <div class=\"du-newsletter\">
            <div class=\"container\">
                <h2 class=\"wow fadeInUp\">Abonnez-vous à notre newsletter</h2>
                <p class=\"wow fadeInUp\">Afin de ne rater aucune de nos dernières actualités. </p>
                <div class=\"row\">
                    <div class=\"col-lg-12 wow fadeInUp\">
                        <form id=\"newsletter\" accept-charset=\"utf-8\">
                            <div class=\"success\">Your subscribe request has been sent!</div>
                            <label class=\"email\">
                                <input type=\"email\" value=\"Entrez votre email:\">
                                <span class=\"error\">*This is not a valid email address.</span>
                            </label><br>
                            <a href=\"#\" data-type=\"submit\">Souscrire</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "front/article.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\front\\article.html.twig");
    }
}
