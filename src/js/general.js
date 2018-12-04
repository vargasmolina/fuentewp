jQuery(document).ready(function ($) {



    // // $(document).ready(function(){
    // var class_id = '#cabeza';
    // var altura = $(class_id).offset().top;

    // $(window).on('scroll', function () {
    //     if ($(window).scrollTop() > altura) {
    //         $(class_id).addClass('sticky');
    //     } else {
    //         $(class_id).removeClass('sticky');
    //     }
    // });


    function TCanvas() {
        // event.preventDefault();
        // alert( "clicked" );
        $('#canvas').toggleClass("open");
    }

    $("#OpenCanvas").on("click", TCanvas);
    $("#CloseCanvas").on("click", TCanvas);



    // new WOW().init();



});