/*JS BUTTON TOGGLE SHOW/HIDE*/
$( ".btn-deaaz" ).click(function() {
  $( ".list-categoria-deaaz" ).slideToggle( "slow" );
});
/*JS BUTTON TOGGLE*/
$('.btn-deaaz').click(function(){
  $('.btn-deaaz').toggleClass('animated wobble');
});
/*JS BUTTON TOGGLE*/
$('.button-toggle-mobile').click(function(){
  $('.button-toggle-mobile').toggleClass('animated flipInx');
});
/*JAVASCRIPT HIDE/SHOW MENU LI*/
function toggleMenu() {
var menu = document.getElementById("menu");
    if (menu.style.display == 'none' || menu.style.display == '') {
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}
$(function(){
    $(window).bind('resize', function(){
        var w = $(document.body).width();
        if(w >= 1204) {
            $('#menu').css('display', 'flex');
        } else {
          $('#menu').css('display', 'none');
        }
    });
});
