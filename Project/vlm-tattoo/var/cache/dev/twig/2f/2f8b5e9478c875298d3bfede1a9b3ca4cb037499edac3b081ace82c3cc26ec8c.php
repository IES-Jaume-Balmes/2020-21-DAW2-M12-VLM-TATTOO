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

/* calendari/index.html.twig */
class __TwigTemplate_d12f2f1dc395e02c433a7fde51dd23554813c30acd32e57c148d628c19c9e54e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendari/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendari/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendari/index.html.twig", 1);
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

        echo "Calendari";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<style>
    #calendari{
        width: 50%;
    }

    .contenidor{
        
    }

</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <div class=\"contenidor\" style=\"display: flex;justify-content: space-evenly\">
        <div id=\"calendari\" class=\"bg-white\"></div>
        <div class=\"card\" style=\"width: 18rem;\">
            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title\" id=\"titol\"></h5>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"fecha_inicio\"></li>
                <li class=\"list-group-item\" id=\"fecha_fin\"></li>
            </ul>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"cliente_nombre\"></li>
                <li class=\"list-group-item\" id=\"cliente_email\"></li>
                <li class=\"list-group-item\" id=\"cliente_telefono\"></li>
            </ul>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "
<script>
    window.onload = () => {
       let calendariElt = document.querySelector(\"#calendari\")
        let calendari = new FullCalendar.Calendar(calendariElt,{
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap',
            locale:'esp',
            timeZone: 'Europe/Barcelona',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,list'
            },
            buttonText: {
                prev: '<',
                next: '>',
                today:'Hoy',
                month:'Mes',
                week:'Semana',
                list:'Lista',
            },
            eventClick:function (info){
                \$('#titol').html(info.event.title);
                \$('#tamano').html(info.event._def.extendedProps.talla);
                \$('#fecha_inicio').html(info.event.start);
                \$('#fecha_fin').html(info.event.end);
                \$('#cliente_nombre').html(info.event._def.extendedProps.cliente_apellido);
                \$('#cliente_email').html(info.event._def.extendedProps.cliente_email);
                \$('#cliente_telefono').html(info.event._def.extendedProps.cliente_telefono);

                console.log(info.event._def.extendedProps.imatge);
                console.log(info.event._def.extendedProps.cliente);

            },

            events: ";
        // line 80
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })());
        echo "

        })
        calendari.render()
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "calendari/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 80,  162 => 44,  152 => 43,  121 => 20,  111 => 19,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendari{% endblock %}

{% block stylesheets %}
<style>
    #calendari{
        width: 50%;
    }

    .contenidor{
        
    }

</style>

{% endblock %}

{% block body %}

    <div class=\"contenidor\" style=\"display: flex;justify-content: space-evenly\">
        <div id=\"calendari\" class=\"bg-white\"></div>
        <div class=\"card\" style=\"width: 18rem;\">
            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
            <div class=\"card-body\">
                <h5 class=\"card-title\" id=\"titol\"></h5>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"fecha_inicio\"></li>
                <li class=\"list-group-item\" id=\"fecha_fin\"></li>
            </ul>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"cliente_nombre\"></li>
                <li class=\"list-group-item\" id=\"cliente_email\"></li>
                <li class=\"list-group-item\" id=\"cliente_telefono\"></li>
            </ul>
        </div>
    </div>

{% endblock %}

{% block javascripts %}

<script>
    window.onload = () => {
       let calendariElt = document.querySelector(\"#calendari\")
        let calendari = new FullCalendar.Calendar(calendariElt,{
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap',
            locale:'esp',
            timeZone: 'Europe/Barcelona',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,list'
            },
            buttonText: {
                prev: '<',
                next: '>',
                today:'Hoy',
                month:'Mes',
                week:'Semana',
                list:'Lista',
            },
            eventClick:function (info){
                \$('#titol').html(info.event.title);
                \$('#tamano').html(info.event._def.extendedProps.talla);
                \$('#fecha_inicio').html(info.event.start);
                \$('#fecha_fin').html(info.event.end);
                \$('#cliente_nombre').html(info.event._def.extendedProps.cliente_apellido);
                \$('#cliente_email').html(info.event._def.extendedProps.cliente_email);
                \$('#cliente_telefono').html(info.event._def.extendedProps.cliente_telefono);

                console.log(info.event._def.extendedProps.imatge);
                console.log(info.event._def.extendedProps.cliente);

            },

            events: {{ data|raw  }}

        })
        calendari.render()
    }
</script>

{% endblock %}", "calendari/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\calendari\\index.html.twig");
    }
}
