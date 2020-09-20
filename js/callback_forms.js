$( document ).ready(function() {

    $('.btn-call').click(function() {
        $('.overlay').addClass('show');
    })

    $('.btn-close').click(function() {
        $('.overlay').removeClass('show');
    })

    $('.form-wrapper').submit(function() {

        let flag = true;
        if(  $('input#name').val() === '') {
            $('.err1').addClass('show');
            flag = false;
        }
        if($('input#telefon').val() === '') {
            $('.err2').addClass('show');
            flag = false;
        }
       return flag;
    })

    $('input#name').blur(function() {
       if($('input#name').val().trim().length!==0) {
           $('.err1').removeClass('show');
       } else $('.err1').addClass('show');
    })

    $('input#telefon').blur(function() {
        if($('input#telefon').val().trim().length!==0) {
            $('.err2').removeClass('show');
        } else $('.err2').addClass('show');
    })

    // Слайдер

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        autoplay:true,
        autoplayTimeout:4000,
        dots: false,
        navText : ['<i class="fas fa-chevron-left fa-2x">','<i class="fas fa-chevron-right fa-2x">'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    // <i class="fas fa-chevron-left"></i>




});
