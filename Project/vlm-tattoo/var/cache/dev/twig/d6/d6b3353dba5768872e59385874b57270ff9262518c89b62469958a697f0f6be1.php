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

/* portfolio/portfolio.html.twig */
class __TwigTemplate_bf41ed67fc048fa01b3c1d2985f285a734c2058b39cf64d0a29295da14aacfab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/portfolio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/portfolio.html.twig", 1);
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

        echo "Portfolio";
        
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
        echo "    <link rel=\"stylesheet\" href=\"style/portfolio2.css\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <!-- MAIN (Center website) -->
    <div class=\"container text-center my-5\">
        <div>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('all')\"> Show all</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('tradicional')\"> Tradicional</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('full-color')\"> Full Color</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('realismo')\"> Realismo</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('backwoorksoft')\"> BackWork Soft</button>
        </div>
    </div>
    <div class=\"isotope container\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesTradicional"]) || array_key_exists("imagesTradicional", $context) ? $context["imagesTradicional"] : (function () { throw new RuntimeError('Variable "imagesTradicional" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 24
            echo "            <div class=\"grid-item ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "cat", [], "array", false, false, false, 24), "html", null, true);
            echo "\">
                <img class=\"gallery_img\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["img"], "src", [], "array", false, false, false, 25)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "cat", [], "array", false, false, false, 25), "html", null, true);
            echo "\" loading=\"lazy\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    </div>
    <script>

        filterSelection(\"all\")

        function filterSelection(c) {
            console.log(c)
            x = document.getElementsByClassName(\"grid-item\");
            if (c === 'all') {
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = \"block\"
                }
                ;
                return
            }
            var x, i;
            for (i = 0; i < x.length; i++) {
                if (x[i].classList.contains(c))
                    x[i].style.display = \"block\"
                else
                    x[i].style.display = \"none\"

            }
            ;
        }


    </script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 28,  133 => 25,  128 => 24,  124 => 23,  110 => 11,  100 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"style/portfolio2.css\" type=\"text/css\">
{% endblock %}


{% block body %}

    <!-- MAIN (Center website) -->
    <div class=\"container text-center my-5\">
        <div>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('all')\"> Show all</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('tradicional')\"> Tradicional</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('full-color')\"> Full Color</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('realismo')\"> Realismo</button>
            <button class=\"btn btn-primary\" onclick=\"filterSelection('backwoorksoft')\"> BackWork Soft</button>
        </div>
    </div>
    <div class=\"isotope container\">
        {% for img in imagesTradicional %}
            <div class=\"grid-item {{ img['cat'] }}\">
                <img class=\"gallery_img\" src=\"{{ asset(img['src']) }}\" alt=\"{{ img['cat'] }}\" loading=\"lazy\">
            </div>
        {% endfor %}
    </div>
    </div>
    <script>

        filterSelection(\"all\")

        function filterSelection(c) {
            console.log(c)
            x = document.getElementsByClassName(\"grid-item\");
            if (c === 'all') {
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = \"block\"
                }
                ;
                return
            }
            var x, i;
            for (i = 0; i < x.length; i++) {
                if (x[i].classList.contains(c))
                    x[i].style.display = \"block\"
                else
                    x[i].style.display = \"none\"

            }
            ;
        }


    </script>



{% endblock %}
", "portfolio/portfolio.html.twig", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\portfolio\\portfolio.html.twig");
    }
}
