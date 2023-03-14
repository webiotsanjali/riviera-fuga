// event slider js
$('.event-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: false,
    autoplay: false,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});
$(".next-btn").click(function () {
    $(".event-slider").slick("slickNext");
});
$(".event-slider").on("afterChange", function () {
    if ($(".slick-next").hasClass("slick-disabled")) {
        $(".next-btn").addClass("slick-disabled");
    } else {
        $(".next-btn").removeClass("slick-disabled");
    }
});

// brand slider js
$('.brand-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    infinite: false,
    speed: 1000,
    asNavFor: '.brand-slider',
    responsive: [{
        breakpoint: 767,
        settings: {
            fade: true,
        }
    }
    ]
});
$('.brand-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    variableWidth: true,
    asNavFor: '.brand-for',
    centerMode: false,
    dots: false,
    focusOnSelect: true,
    responsive: [{
        breakpoint: 767,
        settings: {
            fade: true,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    ]
});
// $('.brand-for').slick({
//     dots: false,
//     infinite: false,
//     speed: 500,
//     arrows: false,
//     // autoplay: true,
//     // autoplaySpeed: 3000,
//     slidesToShow: 1,
//     fade: true,
//     asNavFor: '.brand-slider',
//     slidesToScroll: 1,
//     responsive: [
//         {
//             breakpoint: 576,
//             settings: {
//                 arrows: false,
//             }
//         },
//     ]
// });

// $('.brand-slider').slick({
//     asNavFor: '.brand-for',
//     dots: false,
//     infinite: false,
//     speed: 500,
//     // centerMode: true,
//     // centerPadding: '0px',
//     arrows: false,
//     // autoplay: true,
//     // autoplaySpeed: 3000,
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     responsive: [{
//         breakpoint: 992,
//         settings: {
//             centerMode: true,
//             slidesToShow: 3,
//             slidesToScroll: 1,
//         }
//     }, {
//         breakpoint: 480,
//         settings: {
//             centerMode: true,
//             centerPadding: '105px',
//             slidesToShow: 2,
//             slidesToScroll: 1,
//         }
//     },
//     ]
// });

// location slider js
$('.location-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
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
            centerPadding: '40px',
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }
    ]
});


// instagram slider
const instagram_swiper = new Swiper('.insta-image-section', {
    spaceBetween: 6,
    centeredSlides: true,
    speed: 10000,
    loop: true,
    autoplay: {
        delay: 1,
        disableOnInteraction: false,
    },
    allowTouchMove: false,
    breakpoints: {
        1366: {
            slidesPerView: '4',
        },
        1070: {
            slidesPerView: '3',
        },
        320: {
            slidesPerView: '2',
        },
    }
});

// instagram slider
// $('.insta-image-section').slick({
//     slidesToShow: 4,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 0,
//     speed: 8000,
//     pauseOnHover: false,
//     cssEase: 'linear',
//     responsive: [
//         {
//             breakpoint: 1366,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//                 centerMode: true,
//                 centerPadding: '114px',
//             }
//         },
//         {
//             breakpoint: 1250,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//                 centerMode: true,
//                 centerPadding: '80px',
//             }
//         },
//         {
//             breakpoint: 1200,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//                 centerMode: true,
//                 centerPadding: '20px',
//             }
//         },
//         {
//             breakpoint: 1070,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//                 centerMode: true,
//                 centerPadding: '0px',
//             }
//         },
//         {
//             breakpoint: 1024,
//             settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//                 centerMode: true,
//                 centerPadding: '150px',
//             }
//         },
//         {
//             breakpoint: 992,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '100px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 880,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '30px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 768,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '70px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 720,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '40px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 640,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '0px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 576,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '60px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 550,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '20px',
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 476,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '100px',
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 376,
//             settings: {
//                 centerMode: true,
//                 centerPadding: '85px',
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//             }
//         }
//     ]
// });



// menu fix js
$(window).on('scroll resize', function () {
    var bottom = 460
    var top = this.scrollY, about = $("#about").offset().top, boat = $("#boat").offset().top, brand = $("#brand").offset().top, location = $("#location").offset().top - bottom, instagram = $("#instagram").offset().top, footer = $("#footer").offset().top
    var style = document.querySelector('#instagram').currentStyle || window.getComputedStyle(document.querySelector('#instagram'));
    var instaHeight = document.querySelector('#instagram').offsetHeight
    var instaPadding = parseInt(style.paddingBottom)
    var showDiv = instaHeight - instaPadding
    var scrolltoShowdiv = (instagram + showDiv)
    if (window.innerWidth >= 991) {

        if (top >= about - bottom && top <= boat - bottom || top >= brand - bottom && top <= location || top >= scrolltoShowdiv - bottom && top <= footer - bottom) {
            $('.menu-fix').addClass('show');
        }
        else {
            $('.menu-fix').removeClass('show');
        }
    }
    else {
        var styleBrand = document.querySelector('#brand').currentStyle || window.getComputedStyle(document.querySelector('#brand'));
        var brandHeight = document.querySelector('#brand').offsetHeight
        var brandPadding = parseInt(styleBrand.paddingTop)
        var showDivBrand = brand + brandPadding
        var scrolltoShowdivbrand = brand + showDivBrand
        console.log("brandPadding", brand - 280, top, showDivBrand - 400);
        $('.menu-fix').removeClass('show');
        if (window.innerWidth < 991) var bottom = 200
        console.log("bottom", bottom);
        if (top >= scrolltoShowdiv - bottom && top <= footer - bottom || top >= brand - 350 && top <= showDivBrand - 500) {
            $('.menu-fix').addClass('show');
        }
        else {
            $('.menu-fix').removeClass('show');
        }
    }

});
