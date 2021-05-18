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

/* portfolio/index.html.twig */
class __TwigTemplate_c2ba5b44acef658fae4f2ba7c0852f6435108ef4214f6d60aa4e29fc810bb2b3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/index.html.twig", 1);
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

        echo "Hello PortfolioController!";
        
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
        echo "    <link rel=\"stylesheet\" href=\"style/portfolio.css\" type=\"text/css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<<<<<<< HEAD

    <div id=\"myBtnContainer\" >
        <div id=\"navbar\">
        <a class=\"active\" href=\"javascript:void(0)\">Home</a>
        <a href=\"javascript:void(0)\">News</a>
        <a href=\"javascript:void(0)\">Contact</a>
        </div>
        <button class=\"btn\" onclick=\"filterSelection('all')\"> Show all</button>
        <button class=\"btn\"  onclick=\"filterSelection('tradicional')\"> Tradicional</button>
        <button class=\"btn\" onclick=\"filterSelection('full-color')\"> Full Color</button>
        <button class=\"btn\" onclick=\"filterSelection('realismo')\"> Realismo</button>
        <button class=\"btn\" onclick=\"filterSelection('backwoorksoft')\"> BackWork Soft</button>
    </div>
<<<<<<< HEAD
=======


>>>>>>> b9758f1c1ea4c7bef1dccf059066a519f9c456df

<div class=\"row\">

    <div class=\"gallery\">
        ";
        // line 38
        $context['_parent'] = $context;
<<<<<<< HEAD
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesTradicional"]) || array_key_exists("imagesTradicional", $context) ? $context["imagesTradicional"] : (function () { throw new RuntimeError('Variable "imagesTradicional" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 38
            echo "
                <figure class=\"content img-portfolio ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "cat", [], "array", false, false, false, 39), "html", null, true);
            echo "\">
                    <img class=\"gallery_img\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["img"], "src", [], "array", false, false, false, 40)), "html", null, true);
            echo "\" alt=\"tradicional\" style=\"width:100%\" loading=\"lazy\" >
                </figure>

=======
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesTradicional"]) || array_key_exists("imagesTradicional", $context) ? $context["imagesTradicional"] : (function () { throw new RuntimeError('Variable "imagesTradicional" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageTradicional"]) {
            // line 39
            echo "            <div class=\"column Tradicional\">
                <div class=\"content\">
                    <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageTradicional"]), "html", null, true);
            echo "\" alt=\"Tradicional\" style=\"width:100%\">
                </div>
            </div>
>>>>>>> b9758f1c1ea4c7bef1dccf059066a519f9c456df
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
=======
<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "! ✅</h1>
>>>>>>> 4fb2d0d2d86595367edc093f52a29628fe2b2939
</div>
    <script>

        filterSelection(\"all\")

        function filterSelection(c) {
            console.log(c)
            x = document.getElementsByClassName(\"img-portfolio\");
            if (c === 'all') {
                for (i = 0; i < x.length; i++) {
                        x[i].style.display = \"block\"
                };
                return
            }
            var x, i;
            for (i = 0; i < x.length; i++) {
                if (x[i].classList.contains(c))
                    x[i].style.display = \"block\"
                else
                    x[i].style.display = \"none\"

            };
        }

        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById(\"navbar\");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }

    </script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  178 => 44,  168 => 40,  164 => 39,  161 => 38,  157 => 37,  133 => 15,  123 => 14,  112 => 10,  102 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
=======
        return array (  182 => 48,  177 => 45,  167 => 41,  163 => 39,  159 => 38,  132 => 13,  122 => 12,  111 => 9,  101 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
>>>>>>> b9758f1c1ea4c7bef1dccf059066a519f9c456df
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PortfolioController!{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"style/portfolio.css\" type=\"text/css\">

{% endblock %}
 {% block javascripts %}

 {% endblock %}


{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<<<<<<< HEAD

    <div id=\"myBtnContainer\" >
        <div id=\"navbar\">
        <a class=\"active\" href=\"javascript:void(0)\">Home</a>
        <a href=\"javascript:void(0)\">News</a>
        <a href=\"javascript:void(0)\">Contact</a>
        </div>
        <button class=\"btn\" onclick=\"filterSelection('all')\"> Show all</button>
        <button class=\"btn\"  onclick=\"filterSelection('tradicional')\"> Tradicional</button>
        <button class=\"btn\" onclick=\"filterSelection('full-color')\"> Full Color</button>
        <button class=\"btn\" onclick=\"filterSelection('realismo')\"> Realismo</button>
        <button class=\"btn\" onclick=\"filterSelection('backwoorksoft')\"> BackWork Soft</button>
    </div>
<<<<<<< HEAD
=======


>>>>>>> b9758f1c1ea4c7bef1dccf059066a519f9c456df

<div class=\"row\">

    <div class=\"gallery\">
        {% for img in imagesTradicional %}

                <figure class=\"content img-portfolio {{ img['cat'] }}\">
                    <img class=\"gallery_img\" src=\"{{ asset(img['src']) }}\" alt=\"tradicional\" style=\"width:100%\" loading=\"lazy\" >
                </figure>

        {% endfor %}
    </div>
=======
<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>
>>>>>>> 4fb2d0d2d86595367edc093f52a29628fe2b2939
</div>
    <script>

        filterSelection(\"all\")

        function filterSelection(c) {
            console.log(c)
            x = document.getElementsByClassName(\"img-portfolio\");
            if (c === 'all') {
                for (i = 0; i < x.length; i++) {
                        x[i].style.display = \"block\"
                };
                return
            }
            var x, i;
            for (i = 0; i < x.length; i++) {
                if (x[i].classList.contains(c))
                    x[i].style.display = \"block\"
                else
                    x[i].style.display = \"none\"

            };
        }

        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById(\"navbar\");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }

    </script>



{% endblock %}
", "portfolio/index.html.twig", "D:\\INSTI\\M12 VLM TATTOO\\project\\Project\\vlm-tattoo\\templates\\portfolio\\index.html.twig");
    }
}
