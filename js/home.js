$(window).load(function(){
	$('.slider').fractionSlider({
		'fullWidth': 			true,
		'controls': 			true, 
		'pager': 				true,
		'responsive': 			true,
		'dimensions': 			"1140,500",
	    'increase': 			false,
		'pauseOnHover': 		true
	});

	// Plugin Slick (Motores Galeria) Funcion
	$('.motores').slick({
	 autoplay: false,
	 //autoplaySpeed: 1500,
	 //infinite: true,
	 speed: 500,
	 arrows: true,
	 slidesToShow: 3,
	 slidesToScroll: 1,
	 responsive: [
	   {
	     breakpoint: 1024,
	     settings: {
	       slidesToShow: 2,
	       slidesToScroll: 1,
	       infinite: true,
	     }
	   },
	   {
	     breakpoint: 600,
	     settings: {
	       slidesToShow: 1,
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

	/*Funcion que inicia todos los comentarios tipo pop up*/
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})

	/*Funcion que inicia todos los ToolTips*/
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

});