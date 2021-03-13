$(document).ready(function(){
    $('#top-bar').hover(function(){
        $('#acc-dropdown-item').stop().slideToggle();
    });
    $('#main-menu').hover(function(){
        $('#main-menu-dropdown').stop().slideToggle();
    });
});