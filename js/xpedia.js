/* Site-wide behaviour, loaded on every page via footer.php.
   Sections: Preloader / Forms (select2, nice-select, search box) /
   Navigation (sticky header, return-to-top) / Sliders (owl carousel
   instances, bx-slider) / Forms (datepicker) / Sliders (magnific popup). */
jQuery(document).ready(function($) {
  'use strict';

  // Preloader
  $('#status').fadeOut();
  $('#preloader')
    .delay(350)
    .fadeOut('slow');

  /**** select2 js ****/

  if ($('.myselect').length) {
    $('.myselect').select2();
  }

  /*--------------------------
	nice Select active
	---------------------------- */

  if ($('select').length) {
    $('select').niceSelect();
  }

  //-----------Search box jquery------------//

  $('.searchd').on('click', function() {
    $('.searchbox').addClass('open', 1000);
  });

  $('.close').on('click', function() {
    $('.searchbox').removeClass('open', 1000);
  });

  var $window = $(window);
  var $fixedHeader = $('.hs_navigation_header_wrapper');
  var $returnTop = $('#return-to-top');
  var fixedHeaderEnabled = !window.disableXpediaStickyHeader;
  var isHeaderFixed = false;
  var isReturnTopVisible = false;
  var scrollTicking = false;

  function updateScrollState() {
    var scrollTop = $window.scrollTop();
    var shouldFixHeader = scrollTop > 160;
    var shouldShowReturnTop = scrollTop >= 100;

    if (fixedHeaderEnabled && $fixedHeader.length && shouldFixHeader !== isHeaderFixed) {
      $fixedHeader.toggleClass('menu_fixed animated fadeInDown', shouldFixHeader);
      isHeaderFixed = shouldFixHeader;
    } else if (!fixedHeaderEnabled && isHeaderFixed) {
      $fixedHeader.removeClass('menu_fixed animated fadeInDown');
      isHeaderFixed = false;
    }

    if ($returnTop.length && shouldShowReturnTop !== isReturnTopVisible) {
      $returnTop.stop(true, true)[shouldShowReturnTop ? 'fadeIn' : 'fadeOut'](200);
      isReturnTopVisible = shouldShowReturnTop;
    }

    scrollTicking = false;
  }

  $window.on('scroll', function() {
    if (scrollTicking) return;
    scrollTicking = true;
    window.requestAnimationFrame(updateScrollState);
  });
  updateScrollState();

  // ===== Scroll to Top ====
  if ($returnTop.length) {
    $returnTop.on('click', function() {
      $('body,html').animate(
        {
          scrollTop: 0,
        },
        500
      );
    });
  }

  // Main Slider Animation

  (function($) {
    //Function to animate slider captions
    function doAnimations(elems) {
      //Cache the animationend event in a variable
      var animEndEv = 'webkitAnimationEnd animationend';

      elems.each(function() {
        var $this = $(this),
          $animationType = $this.data('animation');
        $this.addClass($animationType).one(animEndEv, function() {
          $this.removeClass($animationType);
        });
      });
    }

    //Variables on page load
    var $myCarousel = $('#carousel-example-generic'),
      $firstAnimatingElems = $myCarousel
        .find('.carousel-item:first')
        .find("[data-animation ^= 'animated']");

    if (!$myCarousel.length) {
      return;
    }

    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    //Pause carousel
    $myCarousel.carousel('pause');

    //Other slides to be animated on carousel slide event
    $myCarousel.on('click slide.bs.carousel', function(e) {
      var $animatingElems = $(e.relatedTarget).find(
        "[data-animation ^= 'animated']"
      );
      doAnimations($animatingElems);
    });
  })(jQuery);

    // var start = new Date("2022-06-28"),
    // end   = new Date(),
    // diff  = new Date(start - end),
    // days  = diff/1000/60/60/24;

//   console.log();

  /*----------------------------------------------------------------------------------*/
  /* 		Date and Tiem Picker
/*-----------------------------------------------------------------------------------*/
  //$('.datepicker').datepicker({ dateFormat: 'D dd M yy' });
  if ($('.datepicker').length) {
    $('.datepicker').datepicker({
      currentText: 'Now',
      showon: 'focus',
      showOtherMonths: true,
      changeMonth: true,
      changeYear: true,
      minDate: 7,
      maxDate: 90,
      selectOtherMonths: true,
      dateFormat: "dd-mm-yy",
    // beforeShowDay: function(date){
    //   var formatted_date = '', ret = [true, "", ""];
    //   //var available_formatted_days_list = ["2022-06-27", "2022-07-28", "2022-08-1"];
    //   var available_formatted_days_list = ["2022-06-27", "2022-07-28", "2022-08-1"];
    //   let currentDay = date.getDate();
    //   if (date instanceof Date)
    //   {
    //     formatted_date = $.datepicker.formatDate( 'yy-mm-dd', date );
    //   }
    //   else
    //   {
    //     formatted_date = '' + date;
    //   }
    //   console.log(formatted_date);
    //   console.log(available_formatted_days_list.indexOf(formatted_date));
       
    //   if ( -1 === available_formatted_days_list.indexOf(formatted_date) )
    //   {
    //     ret[0] = false;
    //     ret[1] = "date-disabled"; // put yopur custom csc class here for disabled dates
    //     ret[2] = "Date not available"; // put your custom message here
    //   }
      
    //   return ret;
    // }
    });
  }
  if ($('.horizontal-datepicker').length) {
    $('.horizontal-datepicker').datepicker({ dateFormat: 'dd M yy' });
  }

  $(document).ready(function() {
    var $teamSlider = $('.btc_team_slider_wrapper .owl-carousel');
    if (!$teamSlider.length) {
      return;
    }
    $teamSlider.owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      responsiveClass: true,
      smartSpeed: 1200,
      navText: [
        '<i class="flaticon-left-arrow" aria-hidden="true"></i>',
        '<i class="flaticon-right-arrow" aria-hidden="true"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        600: {
          items: 2,
          nav: true,
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20,
        },
      },
    });
  });

  $(document).ready(function() {
    var $latestNewsSlider = $('.btc_ln_slider_wrapper .owl-carousel');
    if (!$latestNewsSlider.length) {
      return;
    }
    $latestNewsSlider.owlCarousel({
      loop: true,
      margin: 10,
      autoplay: false,
      responsiveClass: true,
      smartSpeed: 1200,
      navText: [
        '<i class="flaticon-left-arrow" aria-hidden="true"></i>',
        '<i class="flaticon-right-arrow" aria-hidden="true"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        600: {
          items: 2,
          nav: true,
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20,
        },
      },
    });
  });

  $(document).ready(function() {
    var $partnerSlider = $('.prs_pn_slider_wraper .owl-carousel');
    if (!$partnerSlider.length) {
      return;
    }
    $partnerSlider.owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      responsiveClass: true,
      smartSpeed: 1200,
      navText: [
        '<i class="flaticon-play-button"></i>',
        '<i class="flaticon-play-button"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        500: {
          items: 3,
          nav: true,
        },
        700: {
          items: 4,
          nav: true,
        },
        1000: {
          items: 6,
          nav: true,
          loop: true,
          margin: 20,
        },
      },
    });
  });

  // testimonial-slider js here
  if ($('#testimonial-slider').length) {
    $('#testimonial-slider').owlCarousel({
      navigationText: [
        "<i class='flaticon-angle-pointing-to-left'></i>",
        "<i class='flaticon-angle-arrow-pointing-to-right'></i>",
      ],
      items: 3,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [980, 1],
      itemsTablet: [768, 1],
      itemsMobile: [479, 1],
      slideSpeed: 1500,
      paginationSpeed: 1500,
      navigation: true,
      pagination: false,
      afterAction: function(el) {
        //remove class active
        this.$owlItems.removeClass('active');

        //add class active
        this.$owlItems //owl internal $ object containing items
          .eq(this.currentItem + 1)
          .addClass('active');
      },
    });
  }

  if ($('.album-slider').length) {
    $('.album-slider').bxSlider({
      minSlides: 1,
      maxSlides: 10,
      slideWidth: 150,
      slideMargin: 17,
      ticker: true,
      tickerHover: true,
      speed: 20000,
      useCSS: false,
      infiniteLoop: false,
    });
  }

  var wind = $(window);
  $('.loading').fadeOut(500);

  var $skillBars = $('.skills-progress span');
  if ($skillBars.length) {
    var skillsTicking = false;
    function updateSkillsProgress() {
      $skillBars.each(function() {
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = wind.scrollTop() + wind.height();
        var myVal = $(this).attr('data-value');
        if (bottom_of_window > bottom_of_object) {
          $(this).css({
            width: myVal,
          });
        }
      });
      skillsTicking = false;
    }

    wind.on('scroll', function() {
      if (skillsTicking) return;
      skillsTicking = true;
      window.requestAnimationFrame(updateSkillsProgress);
    });
  }

  var $loop = $('.screen');
  if ($loop.length > 0) {
    $loop.owlCarousel({
      center: true,
      loop: true,
      nav: false,
      autoplay: false,
      autoplayTimeout: 2000,
      margin: 0,
      responsive: {
        320: {
          items: 1,
          margin: 10,
        },
        481: {
          items: 1,
          margin: 0,
        },
        767: {
          items: 2,
          margin: 0,
        },
        991: {
          items: 3,
        },
      },
    });
  }

  $(document).ready(function() {
    var $blogSlider = $('.lr_bc_slider_first_wrapper .owl-carousel');
    if (!$blogSlider.length) {
      return;
    }
    $blogSlider.owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      responsiveClass: true,
      smartSpeed: 1200,
      navText: [
        '<i class="flaticon-left-arrow"></i>',
        '<i class="flaticon-right-arrow"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        500: {
          items: 1,
          nav: true,
        },
        700: {
          items: 1,
          nav: true,
        },
        1000: {
          items: 1,
          nav: true,
          loop: true,
          margin: 20,
        },
      },
    });
  });

  // Magnific popup-video

  if ($('.test-popup-link').length) {
    $('.test-popup-link').magnificPopup({
      type: 'iframe',
      iframe: {
        markup:
          '<div class="mfp-iframe-scaler">' +
          '<div class="mfp-close"></div>' +
          '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
          '<div class="mfp-title">Some caption</div>' +
          '</div>',
        patterns: {
          youtube: {
            index: 'youtube.com/',
            id: 'v=',
            src: 'https://www.youtube.com/embed/ryzOXAO0Ss0',
          },
        },
      },
      // other options
    });
  }
});
