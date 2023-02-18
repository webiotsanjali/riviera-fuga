/*==========================
  custom script js
 ==========================*/
 jQuery(document).ready(function ($) {
    $(".menu-toggle").click(function () {
        $('.main-header').toggleClass('open');
        $('.home-decoration ').removeClass('d-lg-block ');
    });
    $(".menu-close").click(function () {
        $('.main-header').removeClass('open');
        $('.home-decoration ').addClass('d-lg-block ');
    });

});

$(document).ready(function () {
    var contentwidth = jQuery(window).width();
    if ((contentwidth) <= 768) {
        $(".home-wrap").click(function () {
            $(this).toggleClass('open');
        });
        jQuery(document).ready(function ($) {
            $(".menu-toggle").click(function () {
                $('body').toggleClass('o-hidden');
            });
            $(".menu-close").click(function () {
                $('body').removeClass('o-hidden');
            });

        });
    }
   
    var path = window.location.href.split(/[?#]/)[0]; // because the 'href' property of the DOM element is the absolute path
    $('.language-list ul li a').each(function() {
        if (this.href === path) {
            //console.log("Clicked");
            $(this).addClass('active');
            // $(this).children('.sub-menu li a').addClass('active');
        }
    });
    
});

const appHeight = () => {
    const doc = document.documentElement
    doc.style.setProperty('--app-height', `${window.innerHeight}px`)
}
window.addEventListener('resize', appHeight)
appHeight()

// $(document).ready(function () {

//     $('.menu-sub-list li .tab-a:first').addClass('active');
//     $('#nav-tab2 li .tab-a:first').addClass('active');
//     $("#nav-tabContent1 .tab-pane").eq(0).addClass("active show");
//     $("#nav-tabContent2 .tab-pane").eq(0).addClass("active show");

// });

$(document).ready(function () {
    

    var path = window.location.href.split(/[?#]/)[0]; // because the 'href' property of the DOM element is the absolute path
    
    $('.menu-wrapper li a').each(function() {
        if (this.href === path) {
            //console.log("Clicked");
            $(this).addClass('active');
            $(this).children('.sub-menu li a').addClass('active');
        }
    });
    
    $('.sub-menu li a').each(function() {
        if (this.href === path) {
            //console.log("Clicked");
            $(this).addClass('active');
            $(this).parents().parents().children('.menu-wrapper li a').addClass('active');
        }
    });
    
});


// $('.horizontal-line').hide();
// $('.tab-content').hide();
// $('.menu-type').hide();
// $('.menu-footer-menu-container').hide();

$(window).on('load resize', function () {

	checkPosition();
	function checkPosition() {
        var heights = new Array();
        $('.menu-wrap li .sub-menu').each(function() {	
            $(this).css('min-height', '0');
            $(this).css('max-height', 'none');
            $(this).css('height', 'auto');
             heights.push($(this).height());
        });
        var max = Math.max.apply( Math, heights );
        $('#menu-food-menu,#menu-food-menu-en').each(function() {
            $(this).css('padding-bottom', max + 'px');
            $('.horizontal-line').show();
            $('.tab-content').show();
            $('.menu-type').show();
            $('.menu-footer-menu-container').show();
        });	

        $('#menu-food-menu,#menu-food-menu-en').css({
            'padding-bottom': max
        });


	}
});


//about us js
$(window).on('load resize', function () {
checkPosition();

function checkPosition() {
   var about_box = $(".about-content").innerHeight();
      var about_box_width = $(".about-content").innerWidth();
        var final_height = about_box;
        $('.about-bg-img').css({
          'height': final_height,
		  'width' : about_box_width
        });
}
});