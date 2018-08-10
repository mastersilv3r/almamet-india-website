/*$('.dropdown').hover(function(){
  $('.dropdown-toggle', this).trigger('click');
});*/
$(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});
