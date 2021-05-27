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

/* cliente/index.html.twig */
class __TwigTemplate_c03b00a07ad9221f11cd57d4d92ad4c7b0e1b730b5f587d6b3e7a5a169044b1b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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

        echo "Registro";
        
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
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "exito"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <div class=\"container py-3\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card card-outline-secodary\">
                            <div class=\"card-header\">
                                <h3 class=\"mb-0\">Registro</h3>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" class=\"form\" autocomplete=\"off\" role=\"form\">
                                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"form-group\">
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26), 'label');
        echo "
                                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 27, $this->source); })()), "nombre", [], "any", false, false, false, 27), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 30, $this->source); })()), "apellidos", [], "any", false, false, false, 30), 'label');
        echo "
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 31, $this->source); })()), "apellidos", [], "any", false, false, false, 31), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'label');
        echo "
                                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 38, $this->source); })()), "telefono", [], "any", false, false, false, 38), 'label');
        echo "
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 39, $this->source); })()), "telefono", [], "any", false, false, false, 39), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registro"]) || array_key_exists("registro", $context) ? $context["registro"] : (function () { throw new RuntimeError('Variable "registro" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), 'widget');
        echo "
                                    </div>
                                    <button class=\"btn btn-primary btn-lg float-left mt-3\" type=\"submit\">
                                        Sign up
                                    </button>
                                </form>
                            </div>
                        </div>
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
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 42,  160 => 39,  156 => 38,  150 => 35,  146 => 34,  140 => 31,  136 => 30,  130 => 27,  126 => 26,  121 => 24,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro{% endblock %}

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
                                <h3 class=\"mb-0\">Registro</h3>
                            </div>
                            <div class=\"card-body\">
                                <form method=\"post\" class=\"form\" autocomplete=\"off\" role=\"form\">
                                    {{ form_start(registro) }}
                                    <div class=\"form-group\">
                                        {{ form_label(registro.nombre) }}
                                        {{ form_widget(registro.nombre) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(registro.apellidos) }}
                                        {{ form_widget(registro.apellidos) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(registro.email) }}
                                        {{ form_widget(registro.email) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(registro.telefono) }}
                                        {{ form_widget(registro.telefono) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_widget(registro.password) }}
                                    </div>
                                    <button class=\"btn btn-primary btn-lg float-left mt-3\" type=\"submit\">
                                        Sign up
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "cliente/index.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\cliente\\index.html.twig");
    }
}
