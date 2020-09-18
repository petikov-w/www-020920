$( document ).ready(function() {

    $('.btn-call').click(function() {
        $('.overlay').addClass('show');
    })

    $('.close-btn').click(function() {
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

});
