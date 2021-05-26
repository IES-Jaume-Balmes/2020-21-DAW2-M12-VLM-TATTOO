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
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 16, $this->source); })()), 'form');
        echo "


    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
            <script src=\"https://js.stripe.com/v3/\"></script>
            <p>Pagament</p>
            <button id=\"checkout-button\">Pagar</button>



    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "exito"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <div class=\"alert alert-success\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "        <script src=\"https://js.stripe.com/v3/\"></script>
        <script type=\"text/javascript\">
            // Create an instance of the Stripe object with your publishable API key
            var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
            var checkoutButton = document.getElementById('checkout-button');

            checkoutButton.addEventListener('click', function() {
                // Create a new Checkout Session using the server-side endpoint you
                // created in step 3.
                fetch('/create-checkout-session', {
                    method: 'POST',
                })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(session) {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    })
                    .then(function(result) {
                        // If `redirectToCheckout` fails due to a browser or network
                        // error, you should display the localized error message to your
                        // customer using `error.message`.
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(function(error) {
                        console.error('Error:', error);
                    });
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
        return array (  219 => 78,  200 => 77,  152 => 31,  143 => 28,  140 => 27,  136 => 26,  126 => 19,  120 => 16,  111 => 9,  101 => 8,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
            <script src=\"https://js.stripe.com/v3/\"></script>
            <p>Pagament</p>
            <button id=\"checkout-button\">Pagar</button>



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
    {% block javascripts %}
        <script src=\"https://js.stripe.com/v3/\"></script>
        <script type=\"text/javascript\">
            // Create an instance of the Stripe object with your publishable API key
            var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
            var checkoutButton = document.getElementById('checkout-button');

            checkoutButton.addEventListener('click', function() {
                // Create a new Checkout Session using the server-side endpoint you
                // created in step 3.
                fetch('/create-checkout-session', {
                    method: 'POST',
                })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(session) {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    })
                    .then(function(result) {
                        // If `redirectToCheckout` fails due to a browser or network
                        // error, you should display the localized error message to your
                        // customer using `error.message`.
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(function(error) {
                        console.error('Error:', error);
                    });
            });
        </script>
    {% endblock %}
{% endblock %}
", "reserva/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\reserva\\index.html.twig");
    }
}
