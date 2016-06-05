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

    var nav = $('.nav-block');
    var pos = nav.offset().top;

    $(window).scroll(function () {
        var fix = ($(this).scrollTop() > pos) ? true : false;
        nav.toggleClass("navbar-fixed-top", fix);
    });



    $('.folder-grid .block').on('click',function(){
       $('.icon',this).toggleClass('active');
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('.up').fadeIn();
            $('.media-grid #media-page .small-links').addClass('fixed');
            $('.media-grid #media-page .small-links').fadeIn();
        } else {
            $('.up').fadeOut();
            $('.media-grid #media-page .small-links').removeClass('fixed');
            $('.media-grid #media-page .small-links').slideUp();

        }

        if ($(this).scrollTop() > 100) {
            $('#facultative #media-page .small-links').addClass('fixed');
            $(' #facultative #media-page .small-links').fadeIn();
        } else {
            $('#facultative #media-page .small-links').removeClass('fixed');
            $('#facultative #media-page .small-links').slideUp();

        }

    });

    /*Функция для вызова модального окна авторизации*/

    $('#alert').on('click',function(){
        $('#exception').modal('toggle');
    });

    /*Функция для вызова модального окна авторизации*/

    $('#check').on('click',function(){
        $('#check-modal').modal('toggle');
    });

    $('#check-modal #result-btn').on('click',function(){
        $('.result-table').slideToggle();
    });

    $('.personal .change-btn').on('click',function(){
        $('.change-block').slideToggle();
    });

    $('.up').on('click',function(){
        $('html,body').animate({
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


/*Puzzle*/

    /*
$('.puzzle-block .word-area .word-block',this).on('click',function(){
    $(this).appendTo($('.phrase-block'));
    $(this).toggleClass('clicked');
});

$('.puzzle-block .answer-block .puzzle-btn',this).on('click',function(){
    $(".puzzle-block .head").fadeToggle();
    $('.foot .btn-container').fadeToggle('700');
});
*/




/*Puzzle*/

});













