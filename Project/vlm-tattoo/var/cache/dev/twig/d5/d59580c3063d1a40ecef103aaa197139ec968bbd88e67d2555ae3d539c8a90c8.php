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
        echo "

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "exito"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "        <div class=\"alert alert-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div class=\"container py-3\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card card-outline-secodary\">
                            <div class=\"card-header\">
                                <h3 class=\"mb-0\">Reserva</h3>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "exito"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                                    <div class=\"alert alert-success\">
                                        ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 34, $this->source); })()), "talla", [], "any", false, false, false, 34), 'label');
        echo "
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 35, $this->source); })()), "talla", [], "any", false, false, false, 35), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 38, $this->source); })()), "imagen", [], "any", false, false, false, 38), 'label');
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 39, $this->source); })()), "imagen", [], "any", false, false, false, 39), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 42, $this->source); })()), "descripcion", [], "any", false, false, false, 42), 'label', ["label_attr" => ["id" => "foo"], "label" => "Descripci??n"]);
        echo "
                                    <div class=\"popup\" onclick=\"myFunction()\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
                                             fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\">
                                            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                            <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                        </svg>
                                        <span class=\"popuptext\" id=\"myPopup\">Explica c??mo te gustar??a que fuera tu tatuaje</span>
                                    </div>

                                    <script>
                                        // When the user clicks on div, open the popup
                                        function myFunction() {
                                            var popup = document.getElementById(\"myPopup\");
                                            popup.classList.toggle(\"show\");
                                        }
                                    </script>
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 59, $this->source); })()), "descripcion", [], "any", false, false, false, 59), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 62, $this->source); })()), "fechaInicio", [], "any", false, false, false, 62), 'label', ["label" => "Fecha"]);
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 63, $this->source); })()), "fechaInicio", [], "any", false, false, false, 63), 'widget');
        echo "
                                </div>


                                <div class=\"popup\" onclick=\"myFunctiond()\">Deposito
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
                                         fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\">
                                        <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                        <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                    </svg>
                                    <span class=\"popuptext\" id=\"myPopupd\">Para realizar la reserva es necesario un Desposito de 20???</span>
                                </div>
                                <script>
                                    // When the user clicks on div, open the popup
                                    function myFunctiond() {
                                        var popup = document.getElementById(\"myPopupd\");
                                        popup.classList.toggle(\"show\");
                                    }
                                </script>
                                <div class=\"mt-3\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 83, $this->source); })()), "Pagar", [], "any", false, false, false, 83), 'label', ["label_attr" => ["id" => "foo"], "label" => "Pagar"]);
        echo " </div>
                                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        jQuery(document).ready(function () {
            const yearDate = \"#reserva_fechaInicio_date_year\";
            const monthDate = \"#reserva_fechaInicio_date_month\";
            const dayDate = \"#reserva_fechaInicio_date_day\";
            getTimes();

            \$(yearDate).change(function () {
                console.log(\"change\");
                getTimes();
            });
            \$(monthDate).change(function () {
                console.log(\"change\");
                getTimes();
            });
            \$(dayDate).change(function () {
                console.log(\"change\");
                getTimes();
            });

            function getTimes() {
                \$.ajax({
                    type: \"GET\",
                    url: \"/reserva-times\",
                    data: {
                        year: \$(\"#reserva_fechaInicio_date_year option:selected\").text(),
                        month: \$(\"#reserva_fechaInicio_date_month option:selected\").text(),
                        day: \$(\"#reserva_fechaInicio_date_day option:selected\").text(),
                    },
                    dataType: \"json\",
                    success: function (response) {
                        var len = response.length;
                        var options = '<option selected disabled> Hora </option>';
                        for (var i = 0; i < len; i++) {
                            var available = response[i][1] ? '' : \"disabled\";
                            options += '<option ' + available + ' value=\"' + response[i][0] + '\">' + response[i][0] + '</option>';
                        }
                        \$('#reserva_fechaInicio_time_hour').html(options);
                    }
                });
            }
        });
        document.querySelector('.custom-file-input').addEventListener('change', function (e) {
            var fileName = document.getElementById(\"reserva_imagen\").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
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
        return array (  242 => 84,  238 => 83,  215 => 63,  211 => 62,  205 => 59,  185 => 42,  179 => 39,  175 => 38,  169 => 35,  165 => 34,  159 => 32,  150 => 29,  147 => 28,  143 => 27,  130 => 16,  121 => 13,  118 => 12,  114 => 11,  110 => 9,  100 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reserva una cita{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"./style/reserva.css\" type=\"text/css\">
    {% endblock %}

{% block body %}


    {% for message in app.flashes('exito') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"container py-3\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card card-outline-secodary\">
                            <div class=\"card-header\">
                                <h3 class=\"mb-0\">Reserva</h3>
                            </div>
                            <div class=\"card-body\">
                                {% for message in app.flashes('exito') %}
                                    <div class=\"alert alert-success\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                                {{ form_start(reserva) }}
                                <div class=\"form-group\">
                                    {{ form_label(reserva.talla) }}
                                    {{ form_widget(reserva.talla) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(reserva.imagen) }}
                                    {{ form_widget(reserva.imagen) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(reserva.descripcion,'Descripci??n', {'label_attr': {'id': 'foo'}}) }}
                                    <div class=\"popup\" onclick=\"myFunction()\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
                                             fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\">
                                            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                            <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                        </svg>
                                        <span class=\"popuptext\" id=\"myPopup\">Explica c??mo te gustar??a que fuera tu tatuaje</span>
                                    </div>

                                    <script>
                                        // When the user clicks on div, open the popup
                                        function myFunction() {
                                            var popup = document.getElementById(\"myPopup\");
                                            popup.classList.toggle(\"show\");
                                        }
                                    </script>
                                    {{ form_widget(reserva.descripcion) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(reserva.fechaInicio, 'Fecha') }}
                                    {{ form_widget(reserva.fechaInicio) }}
                                </div>


                                <div class=\"popup\" onclick=\"myFunctiond()\">Deposito
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
                                         fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\">
                                        <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                        <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                                    </svg>
                                    <span class=\"popuptext\" id=\"myPopupd\">Para realizar la reserva es necesario un Desposito de 20???</span>
                                </div>
                                <script>
                                    // When the user clicks on div, open the popup
                                    function myFunctiond() {
                                        var popup = document.getElementById(\"myPopupd\");
                                        popup.classList.toggle(\"show\");
                                    }
                                </script>
                                <div class=\"mt-3\">
                                    {{ form_label(reserva.Pagar,'Pagar', {'label_attr': {'id': 'foo'}}) }} </div>
                                {{ form_end(reserva) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        jQuery(document).ready(function () {
            const yearDate = \"#reserva_fechaInicio_date_year\";
            const monthDate = \"#reserva_fechaInicio_date_month\";
            const dayDate = \"#reserva_fechaInicio_date_day\";
            getTimes();

            \$(yearDate).change(function () {
                console.log(\"change\");
                getTimes();
            });
            \$(monthDate).change(function () {
                console.log(\"change\");
                getTimes();
            });
            \$(dayDate).change(function () {
                console.log(\"change\");
                getTimes();
            });

            function getTimes() {
                \$.ajax({
                    type: \"GET\",
                    url: \"/reserva-times\",
                    data: {
                        year: \$(\"#reserva_fechaInicio_date_year option:selected\").text(),
                        month: \$(\"#reserva_fechaInicio_date_month option:selected\").text(),
                        day: \$(\"#reserva_fechaInicio_date_day option:selected\").text(),
                    },
                    dataType: \"json\",
                    success: function (response) {
                        var len = response.length;
                        var options = '<option selected disabled> Hora </option>';
                        for (var i = 0; i < len; i++) {
                            var available = response[i][1] ? '' : \"disabled\";
                            options += '<option ' + available + ' value=\"' + response[i][0] + '\">' + response[i][0] + '</option>';
                        }
                        \$('#reserva_fechaInicio_time_hour').html(options);
                    }
                });
            }
        });
        document.querySelector('.custom-file-input').addEventListener('change', function (e) {
            var fileName = document.getElementById(\"reserva_imagen\").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        });
    </script>

{% endblock %}
", "reserva/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\reserva\\index.html.twig");
    }
}
