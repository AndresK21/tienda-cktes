$(document).ready(function(){
  $('.slider').slider();
  $('.parallax').parallax();
});

//  FULL PAGE MENU ACTIVE //
$('#btn').click(function() { 
  $(this).toggleClass('active');
  $('#menu').toggleClass('open');
  $('main').toggleClass('hide');
});


