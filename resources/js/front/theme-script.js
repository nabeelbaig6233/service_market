/* ------------------------
    Table of Contents

  1. Predefined Variables
  2. Preloader
  3. Menu
  4. FullScreen
  5. Counter
  6. Owl carousel
  7. Scroll to top
  8. Banner Section
  9. Fixed Header
  10. Scrolling Animation
  11. Text Color, Background Color And Image
  12. Contact Form
  13. ProgressBar
  14. Featured
  15. InsideText
  16. Btn Product
  17. Mouse Cursor
  18. Wow Animation
  19. HT Window load and functions


------------------------ */

"use strict";

/*------------------------------------
  HT Predefined Variables
--------------------------------------*/
var $window = $(window),
    $document = $(document),
    $body = $('body'),
    $fullScreen = $('.fullscreen-banner') || $('.section-fullscreen'),
    $halfScreen = $('.halfscreen-banner');

//Check if function exists
$.fn.exists = function () {
  return this.length > 0;
};


/*------------------------------------
  HT PreLoader
--------------------------------------*/
function preloader() {
   $('#ht-preloader').fadeOut();
};


/*------------------------------------
  HT Menu
--------------------------------------*/
function menu() {
  // Variables
  var $dropdown = $('.dropdown-animate'),
    $dropdownSubmenu = $('.dropdown-submenu [data-toggle="dropdown"]');

  function initSubmenu($this) {
    if (!$this.next().hasClass('show')) {
      $this.parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $submenu = $this.next(".dropdown-menu");
    $submenu.toggleClass('show');
    $submenu.parent().toggleClass('show');
    $this.parents('.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-submenu .show').removeClass("show");
    });
  }
  // Events
  if ($dropdown.length) {
    $dropdown.on({
      'hide.bs.dropdown': function () {
        hideDropdown($dropdown);
      }
    })
  }
  if ($dropdownSubmenu.length) {
    $dropdownSubmenu.on('click', function (e) {
      initSubmenu($(this))
      return false;
    });
  }

    $('.burger-menu').on('click', function(){
  $('body').toggleClass('menu-open');
});
};



/*------------------------------------
  HT FullScreen
--------------------------------------*/
function fullScreen() {
    if ($fullScreen.exists()) {
        $fullScreen.each(function () {
        var $elem = $(this),
        elemHeight = $window.height();
        if($window.width() < 768 ) $elem.css('height', elemHeight/ 1);
        else $elem.css('height', elemHeight);
        });
        }
        if ($halfScreen.exists()) {
        $halfScreen.each(function () {
        var $elem = $(this),
        elemHeight = $window.height();
        $elem.css('height', elemHeight / 2);
        });
    }
};


/*------------------------------------
  HT Masonry
--------------------------------------*/
// function masonry() {
//   var $masonry = $('.masonry'),
//     $itemElement = '.masonry-brick',
//     $filters = $('.portfolio-filter');
//   if ($masonry.exists()) {
//     $masonry.isotope({
//       resizable: true,
//       itemSelector: $itemElement,
//     });
//     // bind filter button click
//     $filters.on('click', 'button', function () {
//       var filterValue = $(this).attr('data-filter');
//       $masonry.isotope({
//         filter: filterValue
//       });
//     });
//   }
// };

/*------------------------------------
  HT Scroll to top
--------------------------------------*/
function scrolltop() {
  var pxShow = 300,
    goTopButton = $(".scroll-top")
    // Show or hide the button
  if ($(window).scrollTop() >= pxShow) goTopButton.addClass('scroll-visible');
  $(window).on('scroll', function () {
    if ($(window).scrollTop() >= pxShow) {
      if (!goTopButton.hasClass('scroll-visible')) goTopButton.addClass('scroll-visible')
    } else {
      goTopButton.removeClass('scroll-visible')
    }
  });
  $('.smoothscroll').on('click', function (e) {
    $('body,html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
};


/*------------------------------------
  HT Scrolling Animation
--------------------------------------*/
function scrolling() {
    $('.scroll-down-arrow').on('click', function(event) {
        var $anchor = $(this);
    var hg = $('header').height();
    var scroll_h = $($anchor.attr('href')).offset().top - (hg-30);
        $('html, body').stop().animate({
            scrollTop: scroll_h
        }, 1200);
        event.preventDefault();
    });
};


 /*------------------------------------
  HT Banner Section
--------------------------------------*/
function headerheight() {
  $('.fullscreen-banner .align-center').each(function(){
    var headerHeight=$('.header').height();
    // headerHeight+=15; // maybe add an offset too?
    $(this).css('padding-top',headerHeight+'px');
  });
};


/*------------------------------------
  HT Fixed Header
--------------------------------------*/
function fxheader() {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() >= 300) {
      $('#header-wrap').addClass('fixed-header');
    } else {
      $('#header-wrap').removeClass('fixed-header');
    }
  });
};


/*------------------------------------------
  HT Text Color, Background Color And Image
---------------------------------------------*/
function databgcolor() {
    $('[data-bg-color]').each(function(index, el) {
     $(el).css('background-color', $(el).data('bg-color'));
    });
    $('[data-text-color]').each(function(index, el) {
     $(el).css('color', $(el).data('text-color'));
    });

};

/*------------------------------------
  HT ProgressBar
--------------------------------------*/
function progressbar() {
  var progressBar = $('.progress');
  if (progressBar.length) {
    progressBar.each(function () {
      var Self = $(this);
      Self.appear(function () {
        var progressValue = Self.data('value');
        Self.find('.progress-bar').animate({
          width: progressValue + '%'
        }, 1000);
      });
    })
  }
};


/*------------------------------------
  HT Featured
--------------------------------------*/
function featured() {
  $('.featured-item').mouseenter(function () {
    $('.featured-item.active').removeClass('active');
    $(this).removeClass('.featured-item').addClass('active');
  });
};

/*------------------------------------
  HT Tilt
--------------------------------------*/
// function tilt() {
//   $('.js-tilt').tilt({})
// };





/*------------------------------------
  HT InsideText
--------------------------------------*/
function insideText() {
  var e, i = $(window).height(),
    n = i / 2;
  $(document).scroll(function () {
    e = $(window).scrollTop(), $(".inside-text").each(function () {
      var i = $(this),
        o = i.parent("section"),
        s = o.offset().top;
      i.css({
        top: -(s - e) + n + "px"
      })
    })
  })
};


/*------------------------------------
  HT Mouse Cursor
--------------------------------------*/
function mousecursor() {
  if ($("body")) {
    const e = document.querySelector(".cursor-inner"),
      t = document.querySelector(".cursor-outer");
    let n, i = 0,
      o = !1;
    window.onmousemove = function (s) {
      o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
    }, $("body").on("mouseenter", "a, .cursor-as-pointer", function () {
      e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
    }), $("body").on("mouseleave", "a, .cursor-as-pointer", function () {
      $(this).is("a") && $(this).closest(".cursor-as-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
    }), e.style.visibility = "visible", t.style.visibility = "visible"
  }
};



/*------------------------------------
  HT Window load and functions
--------------------------------------*/
$(document).ready(function() {
    fullScreen(),
    menu(),
    // counter(),
    // magnificpopup(),
    scrolltop(),
    scrolling(),
    headerheight(),
    fxheader(),
    databgcolor(),
    progressbar(),
    // countdown(),

    // niceSelect(),
    // parallax(),
    featured(),
    // tilt(),
    insideText(),

    // lightSlider(),
    mousecursor();
});


$window.resize(function() {
});


$(window).on('load', function() {
    preloader()
});




