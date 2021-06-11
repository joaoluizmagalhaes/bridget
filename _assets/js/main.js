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
        if($('.header__menu closed').hasClass('open')) {
          $('.header__menu').addClass('closed').removeClass('open');
          close();
        }
      });

      $('.header__menu-icon').on('click', function(e) {
        
        e.stopPropagation();
        e.preventDefault();
        if($('.header__menu').hasClass('closed')) {
          $('.header__menu-icon').attr('src', document.location.origin + '/Server/Freela/bridget/wp-content/themes/bridget/_assets/img/close.svg');
          $('.header__menu').addClass('open').removeClass('closed');
          TweenMax.fromTo($('.header__menu'), 0.6, {x: 1000, display: 'none'}, {x:0, display: 'block'});
        } else if($('.header__menu').hasClass('open')) {
          $('.header__menu-icon').attr('src', document.location.origin + '/Server/Freela/bridget/wp-content/themes/bridget/_assets/img/menu-icon.svg');
          $('.header__menu').addClass('closed').removeClass('open');
          close();
        }

      });

      function close() {
          TweenMax.fromTo($('.header__menu'), 0.8, {x:0, display: 'block'}, {x: 1000, display: 'none'});
      }

    });

})( jQuery );