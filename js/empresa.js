$(document).on('ready', function() {

  // Plugin Slick (Carrousel Galeria) Funcion
  $('.galeria').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    infinite: true,
    speed: 500,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* Cierra el seguidor de "Te llamamos ahora" */
  $('#cerrar-seguidor').on('click', function(){
    $('#seguidor').slideToggle('slow');
  });

  $('#cerrar-seguidor-tel').on('click', function(){
    $('#seguidor-tel').slideToggle('slow');
  });

});