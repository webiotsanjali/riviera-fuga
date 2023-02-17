// event slider js
$('.event-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    arrows: false,
    autoplay: false,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});

// brand slider js
$('.brand-for').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: false,
    slidesToShow: 1,
    fade: true,
    asNavFor: '.brand-slider',
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 576,
            settings: {
                arrows: false,
            }
        },
    ]
});

$('.brand-slider').slick({
    asNavFor: '.brand-for',
    dots: false,
    infinite: true,
    speed: 500,
    centerMode: true,
    centerPadding: '0px',
    arrows: false,
    autoplay: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 992,
        settings: {
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    },{
        breakpoint: 480,
        settings: {
            centerMode: true,
            centerPadding: '105px',
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    },
    ]
});


// location slider js
$('.location-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: false,
    autoplay: false,
    centerPadding: '200px',
    variableWidth: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1367,
        settings: {
            centerMode: true,
            centerPadding: '400px',
            fade: false,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 1200,
        settings: {
            centerMode: true,
            centerPadding: '500px',
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 1110,
        settings: {
            centerMode: true,
            centerPadding: '230px',
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 1050,
        settings: {
            centerMode: true,
            centerPadding: '120px',
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 780,
        settings: {
            centerMode: true,
            centerPadding: '60px',
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 480,
        settings: {
            centerMode: true,
            centerPadding: '65px',
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }
    ]
});
