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
        echo "
<style>
    .contenidor{
         padding: 1% 0 1% 0;
    }

    #calendari{

    }

    .calendari-container{
        width: 50%;
        padding: 1%;
        background-color: white;
        border-radius: 2%;
    }

    #EpicModal{
        background-color: white;
    }

    #img2{
        max-height: 50%;
        max-width: 50%;
        margin: auto;

    }

    .card-cos{
        margin: 10%;
    }


</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "

    <!-- Calendari i Card -->
    <div class=\"contenidor\" style=\"display: flex;justify-content: space-evenly\">
        <div class=\"calendari-container\">
            <div id=\"calendari\" class=\"bg-white\"></div>
        </div>

        <div class=\"card\" style=\"width: 18rem;\">
            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#EpicModal\">
                Imagen
            </button>
            <!-- Modal -->
            <div class=\"modal fade\" id=\"EpicModal\" tabindex=\"-1\" aria-labelledby=\"EpicModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"EpicModalLabel\">Imagen de referencia del cliente</h5>

                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <div class=\"modal-body\">
                        <img id=\"img2\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo.jpg"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>

                    </div>

                </div>
            </div>

            <div class=\"card-cos\">
                <h5 class=\"card-title\" >Cita</h5>
                <p id=\"des\" class=\"card-text\">Descripción de la reserva</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"fecha_inicio\">Fecha de inicio</li>
                <li class=\"list-group-item\" id=\"fecha_fin\">Fecha de finalización</li>
            </ul>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Información del cliente</strong></li>
            </ul>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"cliente_nombre\">Nombre del cliente</li>
                <li class=\"list-group-item\" id=\"cliente_email\">Email del cliente</li>
                <li class=\"list-group-item\" id=\"cliente_telefono\">Telefono del cliene</li>
            </ul>
        </div>
    </div>

    <div id=\"calendari\" class=\"bg-white\"></div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "
<script>
    window.onload = () => {
       let calendariElt = document.querySelector(\"#calendari\")
        let calendari = new FullCalendar.Calendar(calendariElt,{
            initialView: 'dayGridMonth',
            locale:'esp',
            timeZone: 'Europe/Barcelona',
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },

            eventClick:function (info){
                \$('#des').html(info.event._def.extendedProps.des);
                \$('#tamano').html(info.event._def.extendedProps.talla);
                var fecha=info.event.start;
                var fecha_fin=info.event.end;

                console.log(fecha);

                console.log(fecha.toLocaleDateString());
                console.log(fecha.toLocaleDateString()+\" a las \"+fecha.getUTCHours()+\":\"+fecha.getUTCMinutes());
                \$('#fecha_inicio').html(fecha.toLocaleDateString()+\" a las \"+fecha.getUTCHours()+\":\"+fecha.getUTCMinutes());
                \$('#fecha_fin').html(fecha_fin.toLocaleDateString()+\" a las \"+fecha_fin.getUTCHours()+\":\"+fecha_fin.getUTCMinutes());
                \$('#cliente_nombre').html(info.event._def.extendedProps.cliente_apellido);
                \$('#cliente_email').html(info.event._def.extendedProps.cliente_email);
                \$('#cliente_telefono').html(info.event._def.extendedProps.cliente_telefono);
                //\$('#img').src(\"/img/icon.png\");
                //\$(\"#img\").attr(\"src\", ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icon.png"), "html", null, true);
        echo ");
                document.getElementById(\"img2\").src = \"/uploads/imagenes/\"+ info.event.extendedProps.imatge;

                //console.log(_def.extendedProps.imatge);
                //console.log(info.event._def.extendedProps.cliente);

            },

            events: ";
        // line 142
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 142, $this->source); })());
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
        return array (  268 => 142,  257 => 134,  225 => 104,  215 => 103,  171 => 68,  145 => 44,  135 => 43,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendari{% endblock %}

{% block stylesheets %}

<style>
    .contenidor{
         padding: 1% 0 1% 0;
    }

    #calendari{

    }

    .calendari-container{
        width: 50%;
        padding: 1%;
        background-color: white;
        border-radius: 2%;
    }

    #EpicModal{
        background-color: white;
    }

    #img2{
        max-height: 50%;
        max-width: 50%;
        margin: auto;

    }

    .card-cos{
        margin: 10%;
    }


</style>

{% endblock %}

{% block body %}


    <!-- Calendari i Card -->
    <div class=\"contenidor\" style=\"display: flex;justify-content: space-evenly\">
        <div class=\"calendari-container\">
            <div id=\"calendari\" class=\"bg-white\"></div>
        </div>

        <div class=\"card\" style=\"width: 18rem;\">
            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#EpicModal\">
                Imagen
            </button>
            <!-- Modal -->
            <div class=\"modal fade\" id=\"EpicModal\" tabindex=\"-1\" aria-labelledby=\"EpicModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"EpicModalLabel\">Imagen de referencia del cliente</h5>

                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <div class=\"modal-body\">
                        <img id=\"img2\" src=\"{{ asset('/img/logo.jpg') }}\">
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>

                    </div>

                </div>
            </div>

            <div class=\"card-cos\">
                <h5 class=\"card-title\" >Cita</h5>
                <p id=\"des\" class=\"card-text\">Descripción de la reserva</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"fecha_inicio\">Fecha de inicio</li>
                <li class=\"list-group-item\" id=\"fecha_fin\">Fecha de finalización</li>
            </ul>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Información del cliente</strong></li>
            </ul>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\" id=\"cliente_nombre\">Nombre del cliente</li>
                <li class=\"list-group-item\" id=\"cliente_email\">Email del cliente</li>
                <li class=\"list-group-item\" id=\"cliente_telefono\">Telefono del cliene</li>
            </ul>
        </div>
    </div>

    <div id=\"calendari\" class=\"bg-white\"></div>


{% endblock %}

{% block javascripts %}

<script>
    window.onload = () => {
       let calendariElt = document.querySelector(\"#calendari\")
        let calendari = new FullCalendar.Calendar(calendariElt,{
            initialView: 'dayGridMonth',
            locale:'esp',
            timeZone: 'Europe/Barcelona',
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },

            eventClick:function (info){
                \$('#des').html(info.event._def.extendedProps.des);
                \$('#tamano').html(info.event._def.extendedProps.talla);
                var fecha=info.event.start;
                var fecha_fin=info.event.end;

                console.log(fecha);

                console.log(fecha.toLocaleDateString());
                console.log(fecha.toLocaleDateString()+\" a las \"+fecha.getUTCHours()+\":\"+fecha.getUTCMinutes());
                \$('#fecha_inicio').html(fecha.toLocaleDateString()+\" a las \"+fecha.getUTCHours()+\":\"+fecha.getUTCMinutes());
                \$('#fecha_fin').html(fecha_fin.toLocaleDateString()+\" a las \"+fecha_fin.getUTCHours()+\":\"+fecha_fin.getUTCMinutes());
                \$('#cliente_nombre').html(info.event._def.extendedProps.cliente_apellido);
                \$('#cliente_email').html(info.event._def.extendedProps.cliente_email);
                \$('#cliente_telefono').html(info.event._def.extendedProps.cliente_telefono);
                //\$('#img').src(\"/img/icon.png\");
                //\$(\"#img\").attr(\"src\", {{ asset('/img/icon.png') }});
                document.getElementById(\"img2\").src = \"/uploads/imagenes/\"+ info.event.extendedProps.imatge;

                //console.log(_def.extendedProps.imatge);
                //console.log(info.event._def.extendedProps.cliente);

            },

            events: {{ data|raw  }}
        })
        calendari.render()
    }



</script>

{% endblock %}", "calendari/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\calendari\\index.html.twig");
    }
}
