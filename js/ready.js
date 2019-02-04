$(document).ready( ()=>{
  $('.bxslider').bxSlider({
    mode: 'fade',
    pager: false,
    auto: true,
    pause: 9000,
    speed: 1000
  });

  $('a[href*="#"]').on('click', function (e) {
    e.preventDefault();

    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 500, 'linear');
  });

  $(document).scroll(function () {
    var y = $(this).scrollTop();
    var heightScreen = parseInt($(window).height()) - ($(window).height() / parseInt(2));
    if(y > 100) {
      $('.header').addClass('whiteHeader');
      $('.logo_activo').addClass('activeUp');
    }
    else{
      $('.header').removeClass('whiteHeader');
      $('.logo_activo').removeClass('activeUp');
    }
    
    if (y > heightScreen) {
      $('.upArrow').addClass('activeUp');
    } else {
      $('.upArrow').removeClass('activeUp');
    }
  });

})