$(document).ready(function(){

    $('.navbar-toggle').on('click',function(){
        $('#main-nav').toggleClass('open');

    });

    new WOW().init();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.nav-block').addClass('navbar-fixed-top');
        } else {
            $('.nav-block').removeClass('navbar-fixed-top');
        }

    });



    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {

            $('.up').fadeIn();
        } else {
            $('.up').fadeOut();
        }
    });



    $('.up').click(function(){
        $('body').animate({
            scrollTop: 0
        },1000);
        return false;
    });
if( $(window).width >800) {
    var topBlockHeight = $('.cathedra-block').height() + $('.nav-block').height();
    var wind = $(window).height();
    $('.auth-block').height(wind - topBlockHeight - '50');
}
});