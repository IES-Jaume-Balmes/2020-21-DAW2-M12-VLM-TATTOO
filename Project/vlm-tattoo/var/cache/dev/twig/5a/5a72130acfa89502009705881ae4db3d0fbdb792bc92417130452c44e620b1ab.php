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

/* dashboard/index.html.twig */
class __TwigTemplate_5a29d61cdab485e292cfdc596f0dcecf50d94eafa478b0c9f6edac376d2ed4e6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "VLM TATTOO";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container my-5\">
        <div class=\"row\" id=\"columnas\">
            <div class=\"col-md\">
                <div class=\"container\">
                    <img src=\"img/JoseLuis.jpg\" class=\"img-fluid\">
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <img src=\"img/JoseLuis.jpg\" class=\"img-fluid\">
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <img src=\"img/JoseLuis.jpg\" class=\"img-fluid\">
                </div>
            </div>
        </div>
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"img/JoseLuis.jpg\" alt=\"First slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/JoseLuis.jpg\" alt=\"Second slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/JoseLuis.jpg\" alt=\"Third slide\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
        <div class=\"col-md\">
            <div class=\"row\">
                <div class=\"col-md text-center my-3 bg-white p-4 rounded\">
                    <p>¿Te gustaría realizar una reserva?</p>
                    <a href=\"/cliente\" role=\"button\" class=\"btn btn-primary\">Registrate</a>
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
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VLM TATTOO{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"row\" id=\"columnas\">
            <div class=\"col-md\">
                <div class=\"container\">
                    <img src=\"img/JoseLuis.jpg\" class=\"img-fluid\">
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <img src=\"img/JoseLuis.jpg\" class=\"img-fluid\">
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <img src=\"img/JoseLuis.jpg\" class=\"img-fluid\">
                </div>
            </div>
        </div>
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"img/JoseLuis.jpg\" alt=\"First slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/JoseLuis.jpg\" alt=\"Second slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/JoseLuis.jpg\" alt=\"Third slide\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
        <div class=\"col-md\">
            <div class=\"row\">
                <div class=\"col-md text-center my-3 bg-white p-4 rounded\">
                    <p>¿Te gustaría realizar una reserva?</p>
                    <a href=\"/cliente\" role=\"button\" class=\"btn btn-primary\">Registrate</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\dashboard\\index.html.twig");
    }
}
