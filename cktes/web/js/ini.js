$(document).ready(function(){
    $('.slider').slider();
    $('.parallax').parallax();
    $('.modal').modal();
    $('ul.tabs').tabs('select_tab', 'tab_id');
    $('ul.tabs').tabs();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
    $('.datepicker').pickadate({
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        format:'yyyy-mm-dd',
        autoClose: true
    });
    $(".leftside").sideNav({edge: 'left'});
    $(".rightside").sideNav({edge: 'right'});
    $(".button-collapse").sideNav();
    $('.sidenav').sidenav();
});

function readURL(input){
    if(input.files && input.files[0])
    {
      var reader = new FileReader();
  
      reader.onload = function (e){
        $('#imagen_perfil').attr('src', e.target.result);
      };
  
      reader.readAsDataURL(input.files[0]);
    }
  }