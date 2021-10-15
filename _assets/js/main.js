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

    $(document).click(function() {
      if($('.header__menu').hasClass('open')) {
        $('.header__menu').addClass('closed').removeClass('open');
        close($('.header__menu'));
      }

      if($('.news__header-menu').hasClass('open')) {
        $('.news__header-menu').addClass('closed').removeClass('open');
        close($('.news__header-menu'));
      }
      
      if($('.header__login-menu').hasClass('open')) {
        $('.header__login-menu').addClass('closed').removeClass('open');
        TweenMax.fromTo($('.header__login-menu'), 0.6, {y:0, display: 'flex', opacity: 1 }, {y: -100, display: 'none', opacity: 0});
      }
    });

    $('.btn__login').click(function(e) {
      e.stopPropagation();
      e.preventDefault();

      if($('.header__login-menu').hasClass('closed')) {
        $('.header__login-menu').addClass('open').removeClass('closed');
        TweenMax.fromTo($('.header__login-menu'), 0.6, {y: -100, display: 'none', opacity: 0}, {y:0, display: 'flex', opacity: 1 });
      } else {
        $('.header__login-menu').addClass('closed').removeClass('open');
        TweenMax.fromTo($('.header__login-menu'), 0.6, {y:0, display: 'flex', opacity: 1 }, {y: -100, display: 'none', opacity: 0});
      }
    });

    $('.header__menu-icon').click(function(e) {
      
      e.stopPropagation();
      e.preventDefault();
      if($('.header__menu').hasClass('closed')) {
        $('.header__menu-icon').attr('src', document.location.origin + '/wp-content/themes/bridget/_assets/img/close.svg');
        $('.header__menu').addClass('open').removeClass('closed');
        TweenMax.fromTo($('.header__menu'), 0.6, {x: -100, display: 'none', opacity: 0}, {x:0, display: 'flex', opacity: 1 });
      } else if($('.header__menu').hasClass('open')) {
        $('.header__login-menu').addClass('closed').removeClass('open');
        TweenMax.fromTo($('.header__login-menu'), 0.6, {y:0, display: 'flex', opacity: 1 }, {y: -100, display: 'none', opacity: 0});
        $('.header__menu-icon').attr('src', document.location.origin + '/wp-content/themes/bridget/_assets/img/menu-icon.svg');
        $('.header__menu').addClass('closed').removeClass('open');
        close($('.header__menu'));
        
      }

    });

    $('.news__menu-icon').click(function(e) {
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
                    .to(item, .2, { left: '150%' })
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
                Carousel.outLeft(Carousel.currentItem, next);
                Carousel.currentItem = next;
               
                console.log(Carousel);

                if(Carousel.currentItem == 1) {
                  $(containerId + ' .carousel-arrow-left').removeClass('disabled');
                }

                if(Carousel.currentItem == carouselItems.length - 1) {
                  $(containerId + ' .carousel-arrow-right').addClass('disabled');
                }
            },

            prev: () => {
                const prev = Carousel.currentItem > 0 ? Carousel.currentItem - 1 : carouselItems.length - 1 ;
                Carousel.outRight(Carousel.currentItem, prev);
                Carousel.currentItem = prev;

                if(Carousel.currentItem == 0) {
                  $(containerId + ' .carousel-arrow-left').addClass('disabled');
                }

                if(Carousel.currentItem == carouselItems.length - 2) {
                  $(containerId + ' .carousel-arrow-right').removeClass('disabled');
                }
            }
        }

        
          //Events 
          nextBtn.addEventListener('click', Carousel.next);
          prevBtn.addEventListener('click', Carousel.prev);
    }

    //enable swip for change the carousel
    var body = document.querySelector('body');
    var hammertime = new Hammer(body);

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

    //filter post by category
    $('.news__header-menu-list-item').click(function(){
      
      $('.mask-overlay').css('visibility','visible').hide().fadeIn(200);

      var category = $(this).text();

      if(category === 'Todas') {
        category = 'Mais lidas'
      }

      $.ajax({
        type: 'POST',
        url: document.location.origin + '/testes/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'news_filter',
          category: $(this).data('slug'),
        },
        success: function(res) {
          $('.news-reload > .news__card').fadeOut(300, function() { $(this).remove(); });
          setTimeout(function(){
            $('.news-reload').append(res).hide().fadeIn(300);
            $('.news-reload .news__section-title').html(category).hide().fadeIn(300);
            $('.mask-overlay').css('visibility','hidden').fadeOut(400);
          }, 250);

        }
      })

    });

    //filter by search input

    var typingTimer;                //timer identifier
    var doneTypingInterval = 1000;  //time in ms (5 seconds)

    //on keyup, start the countdown
    $('.news__menu-search').keyup(function(){
        clearTimeout(typingTimer);
        if ($('.news__menu-search').val()) {
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        }
    });

    //user is "finished typing," do something
    function doneTyping () {
      var keyword = $('.news__menu-search').val();
        
      $.ajax({
        type: 'POST',
        url: document.location.origin + '/testes/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'news_search',
          keyword: keyword,
        },
        success: function(res) {
          $('.news-reload > .news__card').fadeOut(300, function() { $(this).remove(); });
          $('.news-reload > h4.news__section-title').fadeOut(300, function() { $(this).remove(); });
          setTimeout(function(){
            $('.news-reload').append(res).hide().fadeIn(300);
            $('.news-reload .col-12 .news__section-title').html('Busca por: " ' + keyword + '"').hide().fadeIn(300);
          }, 250);
          
        }
      });
    }

    if($("#acf-field_614152be36a37").val().length <= 11){
      $("#acf-field_614152be36a37").mask("999.999.999-99");
    } else {
      $("#acf-field_614152be36a37").mask("99.999.999/9999-99");
    }


    $("#acf-field_614152be36a37").keydown(function(){
      try {
          $("#acf-field_614152be36a37").unmask();
      } catch (e) {}
  
      var tamanho = $("#acf-field_614152be36a37").val().length;
  
      if(tamanho < 11){
          $("#acf-field_614152be36a37").mask("999.999.999-99");
      } else {
          $("#acf-field_614152be36a37").mask("99.999.999/9999-99");
      }
  
      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
    });

    $("#acf-field_614153d536a3b").keydown(function(){
      try {
          $("#acf-field_614153d536a3b").unmask();
      } catch (e) {}
  
      var tamanho = $("#acf-field_614153d536a3b").val().length;
      console.log(tamanho);
  
      if(tamanho < 10){
          $("#acf-field_614153d536a3b").mask("(99) 9999-9999");
      } else {
          $("#acf-field_614153d536a3b").mask("(99) 99999-9999");
      }
  
      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
    });

    $("#acf-field_6141540336a3c").keydown(function(){
      try {
          $("#acf-field_6141540336a3c").unmask();
      } catch (e) {}
  
      var tamanho = $("#acf-field_6141540336a3c").val().length;
  
      if(tamanho < 10){
          $("#acf-field_6141540336a3c").mask("(99) 9999-9999");
      } else {
          $("#acf-field_6141540336a3c").mask("(99) 99999-9999");
      }
  
      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
    });

  });

})( jQuery );