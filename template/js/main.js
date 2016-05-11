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
