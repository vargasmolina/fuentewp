jQuery(document).ready(function ($) {



    // $(document).ready(function(){
    var class_id = '#cabeza';
    var altura = $(class_id).offset().top;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
            $(class_id).addClass('sticky');
        } else {
            $(class_id).removeClass('sticky');
        }
    });

    // menu respon

    // $('.respon-nav').click(function (e) {
    //     $('#resp-menu').toggleClass('visible-menu');
    //     return false;
    // });

    // $('.respon-nav-user').click(function (e) {
    //     $('.col-login').toggleClass('visible-menu');
    //     return false;
    // });




    // new WOW().init();



});