/* Cierra el seguidor de "Te llamamos ahora" */
$('#cerrar-seguidor').on('click', function(){
  $('#seguidor').slideToggle('slow');
});

$('#cerrar-seguidor-tel').on('click', function(){
  $('#seguidor-tel').slideToggle('slow');
});

// Plugin Magnific PopUP
$('.parent-container').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{enabled:true}
  // other options
});

