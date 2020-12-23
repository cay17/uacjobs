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

/* recruteur/create-opportunitie.html.twig */
class __TwigTemplate_bff67f40241fc3ce3843db797c27eae7937ffe4d3a1de6d91723425e05576831 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/create-opportunitie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/create-opportunitie.html.twig"));

        $this->parent = $this->loadTemplate("recruteur/base.html.twig", "recruteur/create-opportunitie.html.twig", 1);
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

        echo "Créer une opportunité";
        
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
        echo "<div class=\"dream-university-subpage py-5\" style=\"background-color: rgba(218,218,218,0.2)\">

      <div class=\" py-5 container bg-white px-5 shadow-lg\">
            <section id=\"content\" class=\"\">
                  <h2 class=\"text-secondary\">Créer une opportunité</h2>
                  <form class=\"row\">
                        <div class=\"col-12 form-group\">
                              <div class=\"custom-file\">
                                    <label for=\"pic\" class=\"custom-file-label\">Ajoutez une image</label>
                                    <input type=\"file\" name=\"title\" id=\"pic\" class=\"custom-file-input\">
                              </div>
                        </div>
                        <div class=\"form-group col-12 col-lg-6\">
                              <label for=\"title\">Titre de l'opportunité</label>
                              <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group col-12 col-lg-6\">
                              <label for=\"type\">Type de l'opportunité</label>
                              <select name=\"type\" id=\"type\" class=\"custom-select\">
                                    <option disabled selected></option>
                                    <option>Stages</option>
                                    <option>Emplois</option>
                                    <option>Bourses</option>
                              </select>
                        </div>
                        <div class=\"form-group col-12\">
                              <label for=\"title\">Lien pour postuler</label>
                              <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group col-12\">
                              <label for=\"descr\">Description de l'opportunité</label>
                              <textarea type=\"text\" name=\"descr\" id=\"descr\" class=\"form-control\" rows=\"05\"></textarea>
                        </div>
                        <div class=\"form-group col-12\">
                              <label for=\"cond\">Compétences et qualifications</label>
                              <textarea type=\"text\" name=\"descr\" id=\"cond\" class=\"form-control\" rows=\"05\"></textarea>
                        </div>
                        <div class=\"form-group col-12\">
                              <button class=\"btn bg-secondary text-white\">Enregistrer</button>
                        </div>
                  </form>
            </section>
      </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/create-opportunitie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'recruteur/base.html.twig' %}
{% block title %}Créer une opportunité{% endblock %}
{% block body %}
<div class=\"dream-university-subpage py-5\" style=\"background-color: rgba(218,218,218,0.2)\">

      <div class=\" py-5 container bg-white px-5 shadow-lg\">
            <section id=\"content\" class=\"\">
                  <h2 class=\"text-secondary\">Créer une opportunité</h2>
                  <form class=\"row\">
                        <div class=\"col-12 form-group\">
                              <div class=\"custom-file\">
                                    <label for=\"pic\" class=\"custom-file-label\">Ajoutez une image</label>
                                    <input type=\"file\" name=\"title\" id=\"pic\" class=\"custom-file-input\">
                              </div>
                        </div>
                        <div class=\"form-group col-12 col-lg-6\">
                              <label for=\"title\">Titre de l'opportunité</label>
                              <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group col-12 col-lg-6\">
                              <label for=\"type\">Type de l'opportunité</label>
                              <select name=\"type\" id=\"type\" class=\"custom-select\">
                                    <option disabled selected></option>
                                    <option>Stages</option>
                                    <option>Emplois</option>
                                    <option>Bourses</option>
                              </select>
                        </div>
                        <div class=\"form-group col-12\">
                              <label for=\"title\">Lien pour postuler</label>
                              <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\">
                        </div>
                        <div class=\"form-group col-12\">
                              <label for=\"descr\">Description de l'opportunité</label>
                              <textarea type=\"text\" name=\"descr\" id=\"descr\" class=\"form-control\" rows=\"05\"></textarea>
                        </div>
                        <div class=\"form-group col-12\">
                              <label for=\"cond\">Compétences et qualifications</label>
                              <textarea type=\"text\" name=\"descr\" id=\"cond\" class=\"form-control\" rows=\"05\"></textarea>
                        </div>
                        <div class=\"form-group col-12\">
                              <button class=\"btn bg-secondary text-white\">Enregistrer</button>
                        </div>
                  </form>
            </section>
      </div>
</div>
{% endblock %}", "recruteur/create-opportunitie.html.twig", "C:\\Users\\Cayrol\\Documents\\Apowersoft\\uacjobs\\templates\\recruteur\\create-opportunitie.html.twig");
    }
}
