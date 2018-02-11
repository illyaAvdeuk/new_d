(function() {
  
  "use strict";

  function is_touch_device() {
    return !!('ontouchstart' in window);
  }

  var Electric = {};

  Electric.portal = function() {

    if (!$('html').is('.home')) return false;

    function width() {
      return Math.max(1024, $(window).width());
    }

    var slides = $('#portals, #portals .slide').width( width() - 60 );

    var portals = $('#portals').microfiche({
      bullets: false,
      cyclic: true
    });

    var microfiche = portals.data('microfiche');

    portals.find('.microfiche-controls').appendTo(portals.parent());

    $('.main_nav a').click(function() {

      var section = $(this).attr('class');
      var index = parseInt( $('.slide[data-for="' + section + '"]:first').data('slide') );

      microfiche.slideToPage(index);

      return false;
    });

    if (!is_touch_device() && !$.browser.msie) {

      $('#portals').addClass('will-sway');

      portals.parent().find('.microfiche-next-button').hover(function() {
        portals.addClass('sway-right');
      }, function() {
        portals.removeClass('sway-right');
      });

      portals.parent().find('.microfiche-prev-button').hover(function() {
        portals.addClass('sway-left');
      }, function() {
        portals.removeClass('sway-left');
      });

      portals.on('microfiche:willMove microfiche:didMove', function() {
        var index = microfiche.currentPageIndex();

        var current = $('.slide[data-slide="'+index+'"]');

        portals.removeClass('sway-right sway-left');
        $('.slide').removeClass('peer-left peer-right');

        var next = (index + 1 < 3) ? $('.slide[data-slide="'+(index + 1)+'"]') : $('.slide[data-slide="0"]');
        var prev = (index - 1 > -1) ? $('.slide[data-slide="'+(index - 1)+'"]') : $('.slide[data-slide="2"]');

        next.addClass('peer-left');
        prev.addClass('peer-right');
      });

      portals.trigger('microfiche:didMove');
    }

  };

  Electric.stickyNav = function() {

    $(window).on('scroll', function() {

      var top = $(window).scrollTop();
      $('nav').toggleClass( 'sticky', (top >= 115) );
      
    });

  };

  Electric.hasJumplinks = function() {
    return $('.jumplink').length;
  }

  Electric.animateJumpLinks = function() {

    if (!Electric.hasJumplinks()) return;

    $('.page_nav a').click(function() {
      var name, element;

      name = $(this).attr('href').substring(1);
      element = $('[name="' + name + '"]');

      Electric.jumping = true;

      $('.jumplink, .page_nav a').removeClass('current');
      $(this).addClass('current');
      element.addClass('current');

      $('html, body').stop().animate({
        scrollTop: element.position().top - 90
      }, 'normal', function() {
        Electric.jumping = false;
      });

      return false;
    });

  };

  Electric.updateJumplinks = function() {

    if (!Electric.hasJumplinks()) return;

    var jumplinks = $.map( $('.jumplink').toArray(), function(j) {
      return {
        el: j,
        top: $(j).position().top
      }
    });

    var closest = jumplinks[0];

    $(window).on('scroll', function() {

      if (Electric.jumping) return;
      
      var scrollTop = $(window).scrollTop() + 90;

      if ( jumplinks[0].top > scrollTop ) {
        $('.jumplink, .page_nav a').removeClass('current');
      } else {

        $.each(jumplinks, function(i, jumplink) {
          var a = jumplink.top - scrollTop;
          var b = closest.top - scrollTop;

          if (Math.abs(a) < Math.abs(b) && jumplink.top <= scrollTop) {
            closest = jumplink;
          }
        });

        if ( $('.jumplink.current').get(0) !==  closest.el) {
          $('.jumplink, .page_nav a').removeClass('current');
          $(closest.el).addClass('current');
          $('.page_nav a[href="#'+closest.el.name+'"]').addClass('current');
        }
      }

    });

  };

  Electric.vimeoController = function() {

    function createIframe(id, size) {
      return $('<iframe webkitAllowFullScreen mozallowfullscreen allowFullScreen />').attr({
        src: "http://player.vimeo.com/video/" + id + "?autoplay=1",
        width: size[0],
        height: size[1],
        frameborder: 0
      });
    }

    $('.vimeo').each(function() {
      $(this).append('<button class="play"></button>');
      $(this).parent().wrapInner('<div class="vimeo_container" />');
    });

    $(document).on('click', 'button.play', function() {

      var vimeo = $(this).parent();
      var id = vimeo.data('vimeo');
      var size = vimeo.data('size').split('x');

      createIframe(id, size).appendTo(vimeo);

      setTimeout(function() {
        vimeo.parent().addClass('should-play is-playing');
      }, 500);
    });

  };

  Electric.createSlideshows = function() {

    var elements = $('.slides');

    elements.each(function() {
      var element = $(this), microfiche, index;

      element.children().each(function(i, child) {
        $(child).attr('data-index', i);
        $(child).append('<div class="texture-overlay" />');
      });

      element.children().first().addClass('current');

      element.microfiche({
        bullets: false,
        cyclic: true,
        // autoplay: 5,
        dontClone: '.vimeo'
      });

      microfiche = element.data('microfiche');

      element.find('.microfiche-controls').appendTo(element.parent());

      element.parent().find('.microfiche-next-button').hover(function() {
        element.addClass('sway-right');
      }, function() {
        element.removeClass('sway-right');
      });

      element.parent().find('.microfiche-prev-button').hover(function() {
        element.addClass('sway-left');
      }, function() {
        element.removeClass('sway-left');
      });

      // element.parent().on('mousedown touchstart', function() {
      //   // element.removeClass('sway-left sway-right');
      //   microfiche.options.autoplay = false;
      //   microfiche.autoplayTimeout && clearTimeout(microfiche.autoplayTimeout);
      // });

      element.on('microfiche:willMove', function() {
        index = microfiche.currentPageIndex();
        element.find('[data-index]').removeClass('current');
        element.find('[data-index="'+index+'"]').addClass('current');

        element.find('.vimeo').each(function() {
          var vimeo = $(this);
          vimeo.parent().removeClass('is-playing');
          setTimeout(function() {
            vimeo.find('iframe').remove();
          }, 300);
        });

      });

    });


    // element.on('microfiche:didMove', function() {
    //   index = microfiche.currentPageIndex();
    //   element.find('[data-index="'+index+'"]').addClass('current');
    // });

  };

  Electric.portal();

  Electric.createSlideshows();
  Electric.stickyNav();
  Electric.animateJumpLinks();
  Electric.updateJumplinks();
  Electric.vimeoController();

})();