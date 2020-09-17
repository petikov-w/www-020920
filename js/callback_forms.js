(function ($) {

   //var btn_call = $('.btn-call');
  //   btn_call.on('click', function(e)
  //   {
  //       e.preventDefault();
  //       $('.logo').hide();
  //   });
    $('.btn-call').click(  function(e) {
        e.preventDefault();
        $('.logo').addClass('hide');
});

});
// function visible_form_2(form_id, _switch) {
//     if (_switch) {$(form_id).show}
//     else {$(form_id).hide()}
// }
//
// function visible_form_3(_switch) {
//     if (_switch) {$('.header .logo').show}
//     else {$('.header .logo').hide()}
// }

