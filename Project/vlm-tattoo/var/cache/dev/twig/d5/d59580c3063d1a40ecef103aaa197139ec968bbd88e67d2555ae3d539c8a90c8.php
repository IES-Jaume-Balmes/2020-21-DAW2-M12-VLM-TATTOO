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

/* reserva/index.html.twig */
class __TwigTemplate_af171c90ba6bac2874bf6d65c89b6b08260182cf12ed61f94b1da2caea0bc6ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserva/index.html.twig", 1);
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

        echo "Reserva una cita";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <link rel=\"stylesheet\" href=\"./style/reserva.css\" type=\"text/css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"container h-100\">
    <div class=\"row h-100 justify-content-center align-items-center\">
        <div class=\"col-6 bg-white rounded my-3 p-5\">

    <h1>Reserva</h1>

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 15, $this->source); })()), 'form');
        echo "

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 17, $this->source); })()), 'form_end');
        echo "

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "exito"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <div class=\"alert alert-success\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
</div>

    <script>
        jQuery(document).ready(function() {
            const yearDate = \"#reserva_fechaInicio_date_year\";
            const monthDate = \"#reserva_fechaInicio_date_month\";
            const dayDate = \"#reserva_fechaInicio_date_day\";
            getTimes();

            \$(yearDate).change(function() {
                console.log(\"change\");
                getTimes();
            });
            \$(monthDate).change(function() {
                console.log(\"change\");
                getTimes();
            });
            \$(dayDate).change(function() {
                console.log(\"change\");
                getTimes();
            });
        function getTimes() {
            \$.ajax({
                type: \"GET\",
                url: \"/reserva-times\",
                    data: {
                        year : \$( \"#reserva_fechaInicio_date_year option:selected\" ).text(),
                        month : \$( \"#reserva_fechaInicio_date_month option:selected\" ).text(),
                        day : \$( \"#reserva_fechaInicio_date_day option:selected\" ).text(),
                    },
                    dataType: \"json\",
                    success: function(response) {
                        var len = response.length;
                        var options = '';
                        for(var i=0; i<len; i++){
                            var available = response[i][1] ? '' : \"disabled\";
                            options += '<option '+available+' value=\"'+response[i][0]+'\">'+response[i][0]+'</option>';
                        }
                        \$('#reserva_fechaInicio_time_hour').html(options);
                    }
                });
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserva/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 24,  135 => 21,  132 => 20,  128 => 19,  123 => 17,  118 => 15,  110 => 9,  100 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reserva una cita{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"./style/reserva.css\" type=\"text/css\">
    {% endblock %}

{% block body %}
<div class=\"container h-100\">
    <div class=\"row h-100 justify-content-center align-items-center\">
        <div class=\"col-6 bg-white rounded my-3 p-5\">

    <h1>Reserva</h1>

    {{ form(reserva) }}

    {{ form_end(reserva) }}

    {% for message in app.flashes('exito') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
        </div>
    </div>
</div>

    <script>
        jQuery(document).ready(function() {
            const yearDate = \"#reserva_fechaInicio_date_year\";
            const monthDate = \"#reserva_fechaInicio_date_month\";
            const dayDate = \"#reserva_fechaInicio_date_day\";
            getTimes();

            \$(yearDate).change(function() {
                console.log(\"change\");
                getTimes();
            });
            \$(monthDate).change(function() {
                console.log(\"change\");
                getTimes();
            });
            \$(dayDate).change(function() {
                console.log(\"change\");
                getTimes();
            });
        function getTimes() {
            \$.ajax({
                type: \"GET\",
                url: \"/reserva-times\",
                    data: {
                        year : \$( \"#reserva_fechaInicio_date_year option:selected\" ).text(),
                        month : \$( \"#reserva_fechaInicio_date_month option:selected\" ).text(),
                        day : \$( \"#reserva_fechaInicio_date_day option:selected\" ).text(),
                    },
                    dataType: \"json\",
                    success: function(response) {
                        var len = response.length;
                        var options = '';
                        for(var i=0; i<len; i++){
                            var available = response[i][1] ? '' : \"disabled\";
                            options += '<option '+available+' value=\"'+response[i][0]+'\">'+response[i][0]+'</option>';
                        }
                        \$('#reserva_fechaInicio_time_hour').html(options);
                    }
                });
            }
        });
    </script>
{% endblock %}
", "reserva/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\reserva\\index.html.twig");
    }
}
