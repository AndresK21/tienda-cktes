$(document).ready(function(){
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.modal').modal();
    $('ul.tabs').tabs('select_tab', 'tab_id');
    $('ul.tabs').tabs();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
    $(".button-collapse").sideNav();
    $('.datepicker').pickadate({
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        format:'yyyy-mm-dd',
        autoClose: true
    });
})