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

/* recruteur/opportunitesitem.html.twig */
class __TwigTemplate_a93b94adbc1bc545698a82135c5371706f2deaa563765b8c71645dc013f90d76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tilte' => [$this, 'block_tilte'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/opportunitesitem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/opportunitesitem.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/opportunitesitem.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tilte"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tilte"));

        echo "Opportunité";
        
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

      <!-- Begin breadcrumbs-->
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 w-100\" style=\"z-index: -1\">
            <div style=\"height: 80px\" class=\"bg-dark\">
                  <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog3.jpg"), "html", null, true);
        echo "\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <!-- End breadcrumbs-->


      <!-- Begin Blog single -->
      <div class=\"du-subpage-content\">
            <div class=\"du-single-page\">

                  <!-- Begin Single Post -->

                  <section class=\"single-page ptb-50\">
                        <div class=\"container\">

                              <div class=\"row\">
                                    <div class=\"col-12\">
                                          <div class=\"d-lg-flex justify-content-between align-items-center mb-3\">
                                                <h3 class=\"text-secondary\">Recrutement d'un agronome à la FSA</h3>
                                                <div class=\"\">
                                                      <button class=\"btn bg-secondary text-white\">Postuler</button>
                                                </div>
                                          </div>
                                          <div class=\"box-container post\">
                                                <img alt=\"image\" class=\"w-100 img-fluid\"
                                                     src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/blog/single-post.jpg"), "html", null, true);
        echo "\">
                                                <div class=\"ptb-30\">
                                                      <div class=\"d-flex justify-content-lg-between align-items-lg-baseline\">
                                                            <div>
                                                                  <p class=\"serif italic pull-left d-block\">Date:
                                                                  <a>15 May 2012</a></p>
                                                            </div>
                                                            <div>
                                                                  <ul class=\"social social-boxed\">
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-facebook\"></i></a>
                                                                        </li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-twitter\"></i></a></li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-linkedin\"></i></a>
                                                                        </li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-vimeo-square\"></i></a>
                                                                        </li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-youtube\"></i></a></li>
                                                                  </ul>
                                                            </div>
                                                      </div>

                                                      <h3 class=\"mt-5\">Description de l'opportunité</h3>
                                                      <p class=\"text-justify\"><strong>Pellentesque habitant morbi
                                                            tristique senectus et netus
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

                                                      <h3 class=\"mt-5\">Conditions et qualifications</h3>
                                                      <p class=\"text-justify\">Pellentesque habitant morbi tristique
                                                            senectus et netus et
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
                                                      <p class=\"text-justify\">Pellentesque habitant morbi tristique
                                                            senectus et netus et
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
                                                      <h3 class=\"mt-5\"></h3>
                                                      <p class=\"text-justify\">Pellentesque habitant morbi tristique
                                                            senectus et netus et
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
                                                      <p class=\"text-justify\">Quisque sit amet est et sapien ullamcorper
                                                            pharetra. Vestibulum
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
                                          <div class=\"text-right\">
                                                <button class=\"btn bg-secondary btn-lg text-white\">Postuler</button>
                                          </div>
                                    </div>

                                    <!-- Blog sidebar -->
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
                  <p class=\"wow fadeInUp\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero
                        scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac
                        feugiat. </p>
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
        return "recruteur/opportunitesitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block tilte %}Opportunité{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\">

      <!-- Begin breadcrumbs-->
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 w-100\" style=\"z-index: -1\">
            <div style=\"height: 80px\" class=\"bg-dark\">
                  <img src=\"{{ asset('build/img/blog3.jpg') }}\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <!-- End breadcrumbs-->


      <!-- Begin Blog single -->
      <div class=\"du-subpage-content\">
            <div class=\"du-single-page\">

                  <!-- Begin Single Post -->

                  <section class=\"single-page ptb-50\">
                        <div class=\"container\">

                              <div class=\"row\">
                                    <div class=\"col-12\">
                                          <div class=\"d-lg-flex justify-content-between align-items-center mb-3\">
                                                <h3 class=\"text-secondary\">Recrutement d'un agronome à la FSA</h3>
                                                <div class=\"\">
                                                      <button class=\"btn bg-secondary text-white\">Postuler</button>
                                                </div>
                                          </div>
                                          <div class=\"box-container post\">
                                                <img alt=\"image\" class=\"w-100 img-fluid\"
                                                     src=\"{{ asset('build/img/blog/single-post.jpg') }}\">
                                                <div class=\"ptb-30\">
                                                      <div class=\"d-flex justify-content-lg-between align-items-lg-baseline\">
                                                            <div>
                                                                  <p class=\"serif italic pull-left d-block\">Date:
                                                                  <a>15 May 2012</a></p>
                                                            </div>
                                                            <div>
                                                                  <ul class=\"social social-boxed\">
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-facebook\"></i></a>
                                                                        </li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-twitter\"></i></a></li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-linkedin\"></i></a>
                                                                        </li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-vimeo-square\"></i></a>
                                                                        </li>
                                                                        <li><a href=\"#\"><i
                                                                                class=\"fa fa-youtube\"></i></a></li>
                                                                  </ul>
                                                            </div>
                                                      </div>

                                                      <h3 class=\"mt-5\">Description de l'opportunité</h3>
                                                      <p class=\"text-justify\"><strong>Pellentesque habitant morbi
                                                            tristique senectus et netus
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

                                                      <h3 class=\"mt-5\">Conditions et qualifications</h3>
                                                      <p class=\"text-justify\">Pellentesque habitant morbi tristique
                                                            senectus et netus et
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
                                                      <p class=\"text-justify\">Pellentesque habitant morbi tristique
                                                            senectus et netus et
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
                                                      <h3 class=\"mt-5\"></h3>
                                                      <p class=\"text-justify\">Pellentesque habitant morbi tristique
                                                            senectus et netus et
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
                                                      <p class=\"text-justify\">Quisque sit amet est et sapien ullamcorper
                                                            pharetra. Vestibulum
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
                                          <div class=\"text-right\">
                                                <button class=\"btn bg-secondary btn-lg text-white\">Postuler</button>
                                          </div>
                                    </div>

                                    <!-- Blog sidebar -->
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
                  <p class=\"wow fadeInUp\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero
                        scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac
                        feugiat. </p>
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
{% endblock %}", "recruteur/opportunitesitem.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\opportunitesitem.html.twig");
    }
}
