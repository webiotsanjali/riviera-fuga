/*==========================
  custom script js
 ==========================*/
 jQuery(document).ready(function($) {
    $(".menu-toggle").click(function() {
        $('.main-header').toggleClass('open');
    });
    $(".menu-close").click(function() {
        $('.main-header').removeClass('open');
    });

});

$( document ).ready(function() {
    var contentwidth = jQuery(window).width();
    if ((contentwidth) <= 768) {
        $(".home-wrap").click(function() {
            $(this).toggleClass('open');
        });
    }
});

