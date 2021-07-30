(function($) {

    $(document).ready(function() {
      /*
       * Replace all SVG images with inline SVG
       */
      $('img.svg').each(function(){
          var $img = $(this);
          var imgID = $img.attr('id');
          var imgClass = $img.attr('class');
          var imgURL = $img.attr('src');
          var imgAlt = $img.attr('alt');

          $.get(imgURL, function(data) {
              // Get the SVG tag, ignore the rest
              var $svg = $(data).find('svg');

              // Add replaced image's ID to the new SVG
              if(typeof imgID !== 'undefined') {
                  $svg = $svg.attr('id', imgID);
              }
              // Add replaced image's classes to the new SVG
              if(typeof imgClass !== 'undefined') {
                  $svg = $svg.attr('class', imgClass+' replaced-svg');
              }
              // Add replaced image's alt description to the new svg
              if(typeof imgClass !== 'undefined') {
                  $svg = $svg.attr('alt', imgAlt);
              }
               // Add replaced image's alt description to the new svg
              if(typeof imgClass !== 'undefined') {
                  $svg = $svg.attr('role', 'img');
              }

              // Remove any invalid XML tags as per http://validator.w3.org
              $svg = $svg.removeAttr('xmlns:a');

              // Replace image with new SVG
              $img.replaceWith($svg);

          }, 'xml');

      });
      
   /*
    * Show/hide header menu on mobile.
    */

      $(document).on('click', function() {
        if($('.header__menu').hasClass('open')) {
          $('.header__menu').addClass('closed').removeClass('open');
          close($('.header__menu'));
        }

        if($('.news__header-menu').hasClass('open')) {
            $('.news__header-menu').addClass('closed').removeClass('open');
            close($('.news__header-menu'));
          }
      });

      $('.header__menu-icon').on('click', function(e) {
        
        e.stopPropagation();
        e.preventDefault();
        if($('.header__menu').hasClass('closed')) {
          $('.header__menu-icon').attr('src', document.location.origin + '/Server/Freela/bridget/wp-content/themes/bridget/_assets/img/close.svg');
          $('.header__menu').addClass('open').removeClass('closed');
          TweenMax.fromTo($('.header__menu'), 0.6, {x: -100, display: 'none', opacity: 0}, {x:0, display: 'flex', opacity: 1 });
        } else if($('.header__menu').hasClass('open')) {
          $('.header__menu-icon').attr('src', document.location.origin + '/Server/Freela/bridget/wp-content/themes/bridget/_assets/img/menu-icon.svg');
          $('.header__menu').addClass('closed').removeClass('open');
          close($('.header__menu'));
        }

      });

      $('.news__menu-icon').on('click', function(e) {
        e.stopPropagation();
        e.preventDefault();
        if($('.news__header-menu').hasClass('closed')) {
          $('.news__header-menu').addClass('open').removeClass('closed');
          TweenMax.fromTo($('.news__header-menu'), 0.6, {x: -100, display: 'none', opacity: 0}, {x:0, display: 'flex', opacity: 1 });
        } else if($('.news__header-menu').hasClass('open')) {
          $('.news__header-menu').addClass('closed').removeClass('open');
          close($('.news__header-menu'));
        }

      });

      function close(menu) {
          TweenMax.fromTo(menu, 0.8, {x:0, display: 'flex', opacity: 1}, {x: -100, display: 'none', opacity: 0});
      }

      //Creates the home page carousel
      const carouselContainer = document.querySelectorAll('.carousel');
      console.log(carouselContainer);
      if(carouselContainer) {
          carouselContainer.forEach(function(carousel){
              createCarousel('#' + carousel.id);
          });
      }

      //Handle Carousel creation
      function createCarousel(containerId) {

          //Carousel 
          const carouselItems = document.querySelectorAll(containerId + ' .carousel__item');
          const nextBtn = document.querySelector(containerId + ' .carousel-arrow-right');
          const prevBtn = document.querySelector(containerId + ' .carousel-arrow-left');
          const bulletsWrapper = document.querySelector(containerId + ' .carousel-bullets-wrapper');
          const totalItems = carouselItems.length;

          for (var i = 0; i < totalItems; i++) {
              bulletsWrapper.innerHTML += '<div class="carousel-bullets"></div>';
          }
          const bullets = document.querySelectorAll(containerId + ' .carousel-bullets');
          bullets[0].classList.add('active');

          const Carousel = {
              currentItem: 0,

              inLeft: (index) =>{

                  const item = carouselItems[index];
                  const timeLine = new TimelineMax();

                  TweenMax.set(item, { scale: .9 });
                  TweenMax.set(item, { left: '-250%' });
                  
                  timeLine
                      .to(item, .3, { left: 0, right: 0  })
                      .to(item, .2, { scale: 1 })
              },

              outRight: (index, nextIndex) => {

                  const item = carouselItems[index];
                  const timeLine = new TimelineMax();
                  
                  timeLine
                      .to(item, .2, { scale: .9 })
                      .to(item, .2, { left: '100%' })
                      .to(bullets[index], 0.3, {className: '-=active'})
                      .to(bullets[nextIndex], 0.3, {className: '+=active'})
                      .call(Carousel.inLeft, [nextIndex], this, '.2');
              },

              inRight: (index) =>{

                  const item = carouselItems[index];
                  const timeLine = new TimelineMax();
                  
                  TweenMax.set(item, { scale: .9 });
                  TweenMax.set(item, { left: '100%' });
                  
                  timeLine
                      .to(item, .3, { left: 0, right: 0  })
                      .to(item, .2, { scale: 1 })
              },

              outLeft: (index, nextIndex) => {

                  const item = carouselItems[index];
                  const timeLine = new TimelineMax();
                  
                  timeLine
                      .to(item, .2, { scale: .9 })
                      .to(item, .2, { left: '-250%' })
                      .to(bullets[index], 0.3, {className: '-=active'})
                      .to(bullets[nextIndex], 0.3, {className: '+=active'})
                      .call(Carousel.inRight, [nextIndex], this, '.2');
              },

              next: () => {
                  const next = Carousel.currentItem !== carouselItems.length - 1 ? Carousel.currentItem + 1 : 0 ;
                  Carousel.outRight(Carousel.currentItem, next);
                  Carousel.currentItem = next;
              },

              prev: () => {
                  const prev = Carousel.currentItem > 0 ? Carousel.currentItem - 1 : carouselItems.length - 1 ;
                  Carousel.outLeft(Carousel.currentItem, prev);
                  Carousel.currentItem = prev;
              }
          }

            //Events 
            nextBtn.addEventListener('click', Carousel.next);
            prevBtn.addEventListener('click', Carousel.prev);
      }

      //enable swip for change the carousel
      var body = document.querySelector('body');
      var hammertime = new Hammer(body);

      hammertime.on('swipeleft',function(e) {
          $('.carousel-arrow-left').click();
      }).on('swiperight',function(e) {
          $('.carousel-arrow-right').click();
      });


      /*
       * Resume email send
       */
      
      $('#contact-form').on('submit', function(e){
        e.preventDefault();

        var siteDomain =  document.location.origin + '/testes/wp-admin/admin-ajax.php';

        animateMessage($('#contact-form'), $('.lds-default'));

        var data = new FormData(this);
        
        data.append('action', 'sendContactForm');
        
        $.ajax({
            url: siteDomain,
            type: "POST",
            data: data,
            contentType: false,
            cache: false,
            processData:false,
            success:function(data) {
                animateMessage($('.lds-default'), $('.newsletter__success.resume__msg'));
            },
            error: function(errorThrown){
                animateMessage($('.lds-default'), $('.newsletter__error.resume__msg'));
                console.log(errorThrown);
            }
        });
    });

    /*
      * TimelineMax to animate the message box response
      */
    function animateMessage(fadeIn, fadeOut) {

        var tl = new TimelineMax();

        tl.fromTo(fadeIn, 1, {opacity: 1}, {ease: Power4.easeOut, opacity: 0, display: 'none',}).fromTo(fadeOut, 0.5, {opacity: 0}, {ease: Power4.easeIn, opacity: 1, display: 'inline-block'});

    }

  });

})( jQuery );