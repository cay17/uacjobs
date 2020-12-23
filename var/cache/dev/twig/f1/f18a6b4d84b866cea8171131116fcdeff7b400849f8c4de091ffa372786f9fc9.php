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

/* recruteur/faq.html.twig */
class __TwigTemplate_7521d2c3bf01520941048669091b414379f96a2a68e78d41c2b12d6b7d193686 extends Template
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
        return "recruteur/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/faq.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/faq.html.twig", 1);
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

        echo " Faq";
        
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
        echo "img/blog3.jpg\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div class=\"container-fluid\">
            <!-- Row -->
            <div class=\"row\">
                  <div class=\"col-xl-12 pa-0 mb-5\">
                        <div class=\"faq-search-wrap bg-primary mt-5\">
                              <div class=\"container\">
                                    <h1 class=\"display-5 text-white mb-20\">Rechercher une question</h1>
                                    <div class=\"form-group w-100 mb-0\">
                                          <div class=\"input-group\">
                                                <input class=\"form-control form-control-lg filled-input bg-white\" placeholder=\"Rechercher par mots-clés\" type=\"text\">
                                                <div class=\"input-group-append\">
                                                      <span class=\"input-group-text\"><span class=\"feather-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-right\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line><polyline points=\"12 5 19 12 12 19\"></polyline></svg></span></span>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class=\"container mt-sm-60 mt-30\">
                              <div class=\"hk-row\">
                                    <div class=\"col-xl-4 mb-5 mb-xl-0\">
                                          <div class=\"card\">
                                                <h6 class=\"card-header\">
                                                      Categories
                                                </h6>
                                                <ul class=\"list-group list-group-flush\">
                                                      <li class=\"list-group-item d-flex align-items-center active\">
                                                            <i class=\"ion ion-md-sunny mr-15\"></i>Général<span class=\"badge badge-light badge-pill ml-15\">06</span>
                                                      </li>
                                                      <li class=\"list-group-item d-flex align-items-center\">
                                                            <i class=\"ion ion-md-unlock mr-15\"></i>Opportunités<span class=\"badge badge-light badge-pill ml-15\">14</span>
                                                      </li>
                                                      <li class=\"list-group-item d-flex align-items-center\">
                                                            <i class=\"ion ion-md-bookmark mr-15\"></i>CV<span class=\"badge badge-light badge-pill ml-15\">10</span>
                                                      </li>
                                                      <li class=\"list-group-item d-flex align-items-center\">
                                                            <i class=\"ion ion-md-filing mr-15\"></i>Documentation<span class=\"badge badge-light badge-pill ml-15\">27</span>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class=\"col-xl-8\">
                                          <div class=\"card card-lg\">
                                                <h3 class=\"card-header border-bottom-0 text-primary\">
                                                      Général
                                                </h3>
                                                <div class=\"accordion accordion-type-2 accordion-flush\" id=\"accordion_2\">
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between activestate\">
                                                                  <a role=\"button\" data-toggle=\"collapse\" href=\"#collapse_1i\" aria-expanded=\"true\">The Intellectual Property</a>
                                                            </div>
                                                            <div id=\"collapse_1i\" class=\"collapse show\" data-parent=\"#accordion_2\" role=\"tabpanel\">
                                                                  <div class=\"card-body pa-15\">The Intellectual Property disclosure will inform users that the contents, logo and other visual media you created is your property and is protected by copyright laws.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_2i\" aria-expanded=\"false\">Termination clause</a>
                                                            </div>
                                                            <div id=\"collapse_2i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">A Termination clause will inform that users’ accounts on your website and mobile app or users’ access to your website and mobile (if users can’t have an account with you) can be terminated in case of abuses or at your sole discretion.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_3i\" aria-expanded=\"false\">Governing Law</a>
                                                            </div>
                                                            <div id=\"collapse_3i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">A Governing Law will inform users which laws govern the agreement. This should the country in which your company is headquartered or the country from which you operate your website and mobile app.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_4i\" aria-expanded=\"false\">Limit what users can do</a>
                                                            </div>
                                                            <div id=\"collapse_4i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">A Limit What Users Can Do clause can inform users that by agreeing to use your service, they’re also agreeing to not do certain things. This can be part of a very long and thorough list in your Terms and Conditions agreements so as to encompass the most amount of negative uses.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_5i\" aria-expanded=\"false\">Limitation of liability of your products</a>
                                                            </div>
                                                            <div id=\"collapse_5i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">No matter what kind of goods you sell, best practices direct you to present any warranties you are disclaiming and liabilities you are limiting in a way that your customers will notice.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_6i\" aria-expanded=\"false\">How to enforce Terms and Conditions</a>
                                                            </div>
                                                            <div id=\"collapse_6i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms and Conditions enforceable. You should always use clickwrap to get users to agree to your Terms and Conditions. Clickwrap is when you make your users take some action – typically clicking something – to show they’re agreeing. Here’s how Engine Yard uses the clickwrap agreement with the I agree check box:</div>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- /Row -->
      </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block title %} Faq{% endblock %}
{% block body %}
<div class=\"dream-university-subpage\">
      <div class=\"du-page-header du-breadcrumbs overflow-hidden p-0 position-absolute w-100\" style=\"z-index: -1\">
            <div style=\"height: 180px\" class=\"bg-dark\">
                  <img src=\"{{ asset('build/img/blog3.jpg') }}img/blog3.jpg\" class=\"w-100\" style=\"opacity: 0.4\"/>
            </div>
      </div>
      <div class=\"container-fluid\">
            <!-- Row -->
            <div class=\"row\">
                  <div class=\"col-xl-12 pa-0 mb-5\">
                        <div class=\"faq-search-wrap bg-primary mt-5\">
                              <div class=\"container\">
                                    <h1 class=\"display-5 text-white mb-20\">Rechercher une question</h1>
                                    <div class=\"form-group w-100 mb-0\">
                                          <div class=\"input-group\">
                                                <input class=\"form-control form-control-lg filled-input bg-white\" placeholder=\"Rechercher par mots-clés\" type=\"text\">
                                                <div class=\"input-group-append\">
                                                      <span class=\"input-group-text\"><span class=\"feather-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-right\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line><polyline points=\"12 5 19 12 12 19\"></polyline></svg></span></span>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class=\"container mt-sm-60 mt-30\">
                              <div class=\"hk-row\">
                                    <div class=\"col-xl-4 mb-5 mb-xl-0\">
                                          <div class=\"card\">
                                                <h6 class=\"card-header\">
                                                      Categories
                                                </h6>
                                                <ul class=\"list-group list-group-flush\">
                                                      <li class=\"list-group-item d-flex align-items-center active\">
                                                            <i class=\"ion ion-md-sunny mr-15\"></i>Général<span class=\"badge badge-light badge-pill ml-15\">06</span>
                                                      </li>
                                                      <li class=\"list-group-item d-flex align-items-center\">
                                                            <i class=\"ion ion-md-unlock mr-15\"></i>Opportunités<span class=\"badge badge-light badge-pill ml-15\">14</span>
                                                      </li>
                                                      <li class=\"list-group-item d-flex align-items-center\">
                                                            <i class=\"ion ion-md-bookmark mr-15\"></i>CV<span class=\"badge badge-light badge-pill ml-15\">10</span>
                                                      </li>
                                                      <li class=\"list-group-item d-flex align-items-center\">
                                                            <i class=\"ion ion-md-filing mr-15\"></i>Documentation<span class=\"badge badge-light badge-pill ml-15\">27</span>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class=\"col-xl-8\">
                                          <div class=\"card card-lg\">
                                                <h3 class=\"card-header border-bottom-0 text-primary\">
                                                      Général
                                                </h3>
                                                <div class=\"accordion accordion-type-2 accordion-flush\" id=\"accordion_2\">
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between activestate\">
                                                                  <a role=\"button\" data-toggle=\"collapse\" href=\"#collapse_1i\" aria-expanded=\"true\">The Intellectual Property</a>
                                                            </div>
                                                            <div id=\"collapse_1i\" class=\"collapse show\" data-parent=\"#accordion_2\" role=\"tabpanel\">
                                                                  <div class=\"card-body pa-15\">The Intellectual Property disclosure will inform users that the contents, logo and other visual media you created is your property and is protected by copyright laws.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_2i\" aria-expanded=\"false\">Termination clause</a>
                                                            </div>
                                                            <div id=\"collapse_2i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">A Termination clause will inform that users’ accounts on your website and mobile app or users’ access to your website and mobile (if users can’t have an account with you) can be terminated in case of abuses or at your sole discretion.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_3i\" aria-expanded=\"false\">Governing Law</a>
                                                            </div>
                                                            <div id=\"collapse_3i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">A Governing Law will inform users which laws govern the agreement. This should the country in which your company is headquartered or the country from which you operate your website and mobile app.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_4i\" aria-expanded=\"false\">Limit what users can do</a>
                                                            </div>
                                                            <div id=\"collapse_4i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">A Limit What Users Can Do clause can inform users that by agreeing to use your service, they’re also agreeing to not do certain things. This can be part of a very long and thorough list in your Terms and Conditions agreements so as to encompass the most amount of negative uses.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_5i\" aria-expanded=\"false\">Limitation of liability of your products</a>
                                                            </div>
                                                            <div id=\"collapse_5i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">No matter what kind of goods you sell, best practices direct you to present any warranties you are disclaiming and liabilities you are limiting in a way that your customers will notice.</div>
                                                            </div>
                                                      </div>
                                                      <div class=\"card\">
                                                            <div class=\"card-header d-flex justify-content-between\">
                                                                  <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse_6i\" aria-expanded=\"false\">How to enforce Terms and Conditions</a>
                                                            </div>
                                                            <div id=\"collapse_6i\" class=\"collapse\" data-parent=\"#accordion_2\">
                                                                  <div class=\"card-body pa-15\">While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms and Conditions enforceable. You should always use clickwrap to get users to agree to your Terms and Conditions. Clickwrap is when you make your users take some action – typically clicking something – to show they’re agreeing. Here’s how Engine Yard uses the clickwrap agreement with the I agree check box:</div>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- /Row -->
      </div>

</div>
{% endblock %}", "recruteur/faq.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\faq.html.twig");
    }
}
