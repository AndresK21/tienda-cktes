$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.modal').modal();
    $('ul.tabs').tabs('select_tab', 'tab_id');
    $('ul.tabs').tabs();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
    $(".button-collapse").sideNav();

    
})


//  FULL PAGE MENU ACTIVE //
$('#btn').click(function() { 
    $(this).toggleClass('active');
    $('#menu').toggleClass('open');
    $('main').toggleClass('hide');
  });
  