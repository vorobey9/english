$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav:false,
    dots:true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            loop: false,
            margin: 20
        },
        600: {
            items: 1,
            loop: false,
            margin: 20
        },
        760: {
            items: 2,
            loop: false,
            margin: 20
        },
        1300: {
            items: 3,
            loop: false,
            margin: 20
        }

    }
});

$('.owl-dot').on('click',function(){
    $('.owl-dot',this).toggleClass('active');
});


$('.teacher-owl').owlCarousel({
    loop: true,
    margin: 10,
    nav:true,
    navClass: [" btn-carousel owl-carousel-left ", " btn-carousel owl-carousel-right"],
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    dots:false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            loop: false,
            margin: 20
        },
        600: {
            items: 1,
            loop: false,
            margin: 20
        },
        760: {
            items: 2,
            loop: false,
            margin: 20
        },
        1300: {
            items: 3,
            loop: false,
            margin: 20
        }

    }
});

$('.cathedra-owl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            loop: false,
            margin: 20
        },
        600: {
            items: 1,
            loop: false,
            margin: 20
        },
        760: {
            items: 2,
            loop: false,
            margin: 20
        },
        1300: {
            items: 1,
            loop: false,
            margin: 20
        }

    }
});



