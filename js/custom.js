
  (function ($) {
  
  "use strict";

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height();
  
      scrollToDiv(elWrapped,header_height);
      return false;
  
      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;
  
        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });

    // INIT AOS (Animate On Scroll)
    $(document).ready(function () {
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 800,       // animation duration in ms
          easing: 'ease-in-out', // easing function
          once: true,          // animation only once per element
          mirror: false        // don't animate on scroll up
        });
      }
    });
  
  })(window.jQuery);


