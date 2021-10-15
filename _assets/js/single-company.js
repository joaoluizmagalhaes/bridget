(function($) {

  $(document).ready(function() {

    var vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    
    $('.company__gallery-main').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.company__gallery-icons'
    });
    if($(window).width() <= 769) {
      $('.company__gallery-icons').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.company__gallery-main',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        vertical: false,
        infinity: true,
        autoplay: true,
      });
    } else {
      $('.company__gallery-icons').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.company__gallery-main',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        vertical: true,
        infinity: true,
        autoplay: true,
      });
    }

    $('.home__contact-form-textarea').val('Olá, tenho interesse neste anúncio: ' + $('.company__header .company__title').text() + ' - ' + $('.code').text());

  })

})( jQuery );