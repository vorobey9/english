$(document).ready(function(){

    var windHeight = $(window).height();

    $('.leftMenu').height(windHeight);
    $('.content').height(windHeight);

    $('.leftMenu').mCustomScrollbar({
        theme: 'leftnav',
        autoHideScrollbar: true
    });

    $('#auth').on('click',function(){
       $('.auth').slideToggle(600);
    });

    $('#register').on('click',function(){
        $('.register').slideToggle(800);
    });
});