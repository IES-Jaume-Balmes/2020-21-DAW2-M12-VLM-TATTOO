//Añadir el CDN del jQuery


$(document).ready(function() {
    $('.hamburguer').on("click", function() {
      $('nav').toggleClass("mostrar");
    });
    
    $('.cruz').on("click", function() {
      $('nav').removeClass('mostrar');
    });
  });
