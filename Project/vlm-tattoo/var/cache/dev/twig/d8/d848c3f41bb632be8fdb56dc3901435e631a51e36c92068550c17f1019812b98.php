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

/* inici.html */
class __TwigTemplate_2098acaa2f96d689cc78f56a120fd268fa57cd441f1c6f686b8791e74207ec83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inici.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inici.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

  <meta name=\"viewport\"
    content=\"user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, viewport-fit=cover\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <title>Iinci</title>
  <link rel=\"shortcut icon\" href=\"./img/lgo_cabecera.png\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
    crossorigin=\"anonymous\"></script>
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
  <link href=\"https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap\" rel=\"stylesheet\">


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"js/index.js\"></script>
  <link rel=\"stylesheet\" href=\"./style/style.css\" type=\"text/css\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"./style/bootstrap-login.css\" type=\"text/css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>



</head>

<body>

  <div class=\"img_background\">
    <!-- HAMBURGUER -->
    <div class=\"barra-sup d-flex justify-content-between align-middle\">
      <div class=\"hamburguer\">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class=\"logo\">
        <a href=\"inici.html\"><img src=\"img/logo_invers3.png\" alt=\"logo\" class=\"img-responsive\"></a>
        </div>
        
        
        <div class=\"my-auto\">

          <!-- Button to Open the Modal -->
          <button type=\"button\" class=\"text-white bg-dark\" data-toggle=\"modal\" data-target=\"#myModal\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
            fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
            <path
              d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\" />
          </svg> Login </a>
          </button>

        
          <!-- The Modal -->
          <div class=\"modal\" id=\"myModal\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
              
                <!-- Modal Header -->
                <div class=\"modal-header\">
                  <h4 class=\"modal-title\">Modal Heading</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class=\"modal-body\">
                  Modal body..
                </div>
                
                <!-- Modal footer -->
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
              </div>
            </div>
          </div>
          
        

        &nbsp;
        <span>|</span>
        &nbsp;
        &nbsp;

         <!-- Button to Open the Modal -->
         <button type=\"button\" class=\"text-white bg-dark\" data-toggle=\"modal\" data-target=\"#myModal\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
            fill=\"currentColor\" class=\"bi bi-person-plus\" viewBox=\"0 0 16 16\">
            <path
              d=\"M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\" />
            <path fill-rule=\"evenodd\"
              d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\" />
          </svg> Register</a>
        </button>
      
        <!-- The Modal -->
        <div class=\"modal\" id=\"myModal\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            
              <!-- Modal Header -->
              <div class=\"modal-header\">
                <h4 class=\"modal-title\">Modal Heading</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class=\"modal-body\">
                Modal body..
              </div>
              
              <!-- Modal footer -->
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MENU LATERAL -->
    <nav>
      <ul>
        <li><a href=\"./reserva-registre.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
              fill=\"currentColor\" class=\"bi bi-calendar-event\" viewBox=\"0 0 16 16\">
              <path d=\"M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z\" />
              <path
                d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z\" />
            </svg> Reservar cita</a></li>
        <li><a href=\"./descripcion.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
              fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
              <path
                d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\" />
            </svg> Descripción</a></li>
        <li><a href=\"./portfolio.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
              fill=\"currentColor\" class=\"bi bi-eye\" viewBox=\"0 0 16 16\">
              <path
                d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\" />
              <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\" />
            </svg> Portfolio</a></li>
        <li><a href=\"./tienda.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
          <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
        </svg> Tienda</a></li>
        <li><a href=\"videos.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
              class=\"bi bi-play\" viewBox=\"0 0 16 16\">
              <path
                d=\"M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z\" />
            </svg> Videos</a></li>
      </ul>
    </nav>

  </div>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inici.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

  <meta name=\"viewport\"
    content=\"user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, viewport-fit=cover\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  <title>Iinci</title>
  <link rel=\"shortcut icon\" href=\"./img/lgo_cabecera.png\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
    crossorigin=\"anonymous\"></script>
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
  <link href=\"https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap\" rel=\"stylesheet\">


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"js/index.js\"></script>
  <link rel=\"stylesheet\" href=\"./style/style.css\" type=\"text/css\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"./style/bootstrap-login.css\" type=\"text/css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>



</head>

<body>

  <div class=\"img_background\">
    <!-- HAMBURGUER -->
    <div class=\"barra-sup d-flex justify-content-between align-middle\">
      <div class=\"hamburguer\">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class=\"logo\">
        <a href=\"inici.html\"><img src=\"img/logo_invers3.png\" alt=\"logo\" class=\"img-responsive\"></a>
        </div>
        
        
        <div class=\"my-auto\">

          <!-- Button to Open the Modal -->
          <button type=\"button\" class=\"text-white bg-dark\" data-toggle=\"modal\" data-target=\"#myModal\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
            fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
            <path
              d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\" />
          </svg> Login </a>
          </button>

        
          <!-- The Modal -->
          <div class=\"modal\" id=\"myModal\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
              
                <!-- Modal Header -->
                <div class=\"modal-header\">
                  <h4 class=\"modal-title\">Modal Heading</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class=\"modal-body\">
                  Modal body..
                </div>
                
                <!-- Modal footer -->
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
              </div>
            </div>
          </div>
          
        

        &nbsp;
        <span>|</span>
        &nbsp;
        &nbsp;

         <!-- Button to Open the Modal -->
         <button type=\"button\" class=\"text-white bg-dark\" data-toggle=\"modal\" data-target=\"#myModal\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
            fill=\"currentColor\" class=\"bi bi-person-plus\" viewBox=\"0 0 16 16\">
            <path
              d=\"M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\" />
            <path fill-rule=\"evenodd\"
              d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\" />
          </svg> Register</a>
        </button>
      
        <!-- The Modal -->
        <div class=\"modal\" id=\"myModal\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            
              <!-- Modal Header -->
              <div class=\"modal-header\">
                <h4 class=\"modal-title\">Modal Heading</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class=\"modal-body\">
                Modal body..
              </div>
              
              <!-- Modal footer -->
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MENU LATERAL -->
    <nav>
      <ul>
        <li><a href=\"./reserva-registre.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
              fill=\"currentColor\" class=\"bi bi-calendar-event\" viewBox=\"0 0 16 16\">
              <path d=\"M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z\" />
              <path
                d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z\" />
            </svg> Reservar cita</a></li>
        <li><a href=\"./descripcion.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
              fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
              <path
                d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\" />
            </svg> Descripción</a></li>
        <li><a href=\"./portfolio.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\"
              fill=\"currentColor\" class=\"bi bi-eye\" viewBox=\"0 0 16 16\">
              <path
                d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\" />
              <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\" />
            </svg> Portfolio</a></li>
        <li><a href=\"./tienda.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
          <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
        </svg> Tienda</a></li>
        <li><a href=\"videos.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
              class=\"bi bi-play\" viewBox=\"0 0 16 16\">
              <path
                d=\"M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z\" />
            </svg> Videos</a></li>
      </ul>
    </nav>

  </div>


</body>

</html>", "inici.html", "C:\\Users\\david\\Desktop\\DAW\\M12\\2020-21-DAW2-M12-VLM-TATTOO\\Project\\vlm-tattoo\\templates\\inici.html");
    }
}
