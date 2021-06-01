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

/* pagamiento/success.html.twig */
class __TwigTemplate_057d9ab29b34f8f15f1f43ce24514f95db2360a94524630d564cd17bbbcd0f33 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagamiento/success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagamiento/success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pagamiento/success.html.twig", 1);
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

        echo "Pago";
        
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
        echo "    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }
        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"container py-3\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
    <div class=\"card card-outline-secodary\">
        <div class=\"card-header\">
            <h3 class=\"mb-0\">Pago y cita correctos</h3>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Talla: </strong><br>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 30, $this->source); })()), "talla", [], "any", false, false, false, 30), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Descripción: </strong><br>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 31, $this->source); })()), "descripcion", [], "any", false, false, false, 31), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Depósito: </strong><br>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 32, $this->source); })()), "deposito", [], "any", false, false, false, 32), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Nombre: </strong><br>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 33, $this->source); })()), "cliente", [], "any", false, false, false, 33), "apellidos", [], "any", false, false, false, 33), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 33, $this->source); })()), "cliente", [], "any", false, false, false, 33), "nombre", [], "any", false, false, false, 33), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Nombre de la Imagen: </strong><br>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 34, $this->source); })()), "imagen", [], "any", false, false, false, 34), "html", null, true);
        echo "</li>
            </ul>
            <a href=\"/\" role=\"button\" class=\"btn btn-primary mt-3\">Volver</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pagamiento/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pago{% endblock %}

{% block body %}
    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }
        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"container py-3\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
    <div class=\"card card-outline-secodary\">
        <div class=\"card-header\">
            <h3 class=\"mb-0\">Pago y cita correctos</h3>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Talla: </strong><br>{{ reserva.talla }}</li>
                <li class=\"list-group-item\"><strong>Descripción: </strong><br>{{ reserva.descripcion }}</li>
                <li class=\"list-group-item\"><strong>Depósito: </strong><br>{{ reserva.deposito }}</li>
                <li class=\"list-group-item\"><strong>Nombre: </strong><br>{{ reserva.cliente.apellidos }}, {{ reserva.cliente.nombre }}</li>
                <li class=\"list-group-item\"><strong>Nombre de la Imagen: </strong><br>{{ reserva.imagen }}</li>
            </ul>
            <a href=\"/\" role=\"button\" class=\"btn btn-primary mt-3\">Volver</a>
        </div>
    </div>
{% endblock %}", "pagamiento/success.html.twig", "C:\\Users\\polhm\\Desktop\\DAW2\\Projecte_Final\\repo\\Project\\vlm-tattoo\\templates\\pagamiento\\success.html.twig");
    }
}
