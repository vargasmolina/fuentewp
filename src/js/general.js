jQuery(document).ready(function ($) {



    // stick menu
    var class_id = '#cabeza';
    var altura = $(class_id).offset().top;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
            $(class_id).addClass('sticky');
        } else {
            $(class_id).removeClass('sticky');
        }
    });

    // adaptivo menu 
    function TCanvas() {
        // event.preventDefault();
        // alert( "clicked" );
        $('#canvas').toggleClass("open");
    }

    $("#OpenCanvas").on("click", TCanvas);
    $("#CloseCanvas").on("click", TCanvas);



    // new WOW().init();

    // ===== Scroll to Top ==== 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function () { // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0 // Scroll to top of body
        }, 500);
    });


});