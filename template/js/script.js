$.fn.liftOff = function(){
    var div=$(".preloader");
    $.when(
        $(".logo-container").animate({bottom: '35%'}).promise()
    ).done(function(){
        $(".loader-container").animate({bottom: '15%'}).promise
    })

    div.delay(3000).animate({bottom:'100%'}, 400);

};

$(document).ready(function(){
    $('body').liftOff();
    $('.navbar-toggle').on('click',function(){
        $('#main-nav').toggleClass('open');
    });


    new WOW().init();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
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
        $('html, body').animate({
            scrollTop: 0
        },1000);
        return false;
    });

if( $(window).width >800) {
    var topBlockHeight = $('.cathedra-block').height() + $('.nav-block').height();
    var wind = $(window).height();
    $('.auth-block').height(wind - topBlockHeight - '50');
}




        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });

});




