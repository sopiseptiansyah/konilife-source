/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// require('./components/Example');
require('./vendor/greensock');
require('./vendor/layerslider.transitions');
require('./vendor/layerslider.kreaturamedia.jquery');

require('slick-carousel');


$(document).ready(function () {

  // Calling LayerSlider on the target element
  $('#homeslider').layerSlider({
    sliderVersion: '6.0.0',
    responsiveUnder: 0,
    slideBGSize: 'auto',
    skinsPath: '../skins/',
    skin: 'v6',
    tnContainerWidth: '100%',
    hideOver: 100000,
    hideUnder: 640,
    globalBGColor: '#fdf6dc',
    navPrevNext: true,
    thumbnailNavigation: 'always',
    // navButtons: false,
    navStartStop: false,
    tnWidth: 40,
    tnHeight: 6,
    tnActiveOpacity: 100,
    tnInactiveOpacity: 100,
    tnContainerWidth: '100%',
    allowFullscreen: false,
    hoverPrevNext: false
  });

  $('#homeslider-mobile').layerSlider({
    sliderVersion: '6.0.0',
    responsiveUnder: 0,
    slideBGSize: 'auto',
    skinsPath: '../skins/',
    skin: 'v6',
    tnContainerWidth: '100%',
    hideOver: 640,
    hideUnder: 0,
    globalBGColor: '#fdf6dc',
    navPrevNext: true,
    thumbnailNavigation: 'always',
    // navButtons: false,
    navStartStop: false,
    tnWidth: 60,
    tnHeight: 8,
    tnActiveOpacity: 100,
    tnInactiveOpacity: 100,
    tnContainerWidth: '100%',
    allowFullscreen: false,
    hoverPrevNext: false
  });

  $('.section.section__introduce').layerSlider({
    sliderVersion: '6.0.0',
    responsiveUnder: 0,
    hideUnder: 640,
    hideOver: 100000,
    slideBGSize: 'auto',
    tnContainerWidth: '100%',
    // type: 'fullsize',
    allowFullscreen: false,
    skin: 'v6',
    showCircleTimer: false,
    skinsPath: '../skins/',
    // height: 640,
    globalBGColor: '#fdf6dc',
  });

  $('.section.section__introduce__mobile').layerSlider({
    sliderVersion: '6.0.0',
    responsiveUnder: 0,
    hideUnder: 0,
    hideOver: 640,
    slideBGSize: 'auto',
    tnContainerWidth: '100%',
    // type: 'fullsize',
    allowFullscreen: false,
    skin: 'v6',
    showCircleTimer: false,
    skinsPath: '../skins/',
    // height: 640,
    globalBGColor: '#fdf6dc',
  });

  $('.banner-slider-mobile')
    .slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      arrows: true,
      dots: true,
      prevArrow: '<div class="slick-arrow prev-btn"><i class="material-icons">arrow_back_ios</i></div>',
      nextArrow: '<div class="slick-arrow next-btn"><i class="material-icons">arrow_forward_ios</i></div>',
      lazyLoad: 'progressive',
    })

  $('.product-carousel').slick({
    infinite: false,
    arrows: true,
    prevArrow: '<div class="slick-arrow prev-btn"><i class="material-icons">arrow_back_ios</i></div>',
    nextArrow: '<div class="slick-arrow next-btn"><i class="material-icons">arrow_forward_ios</i></div>',
    lazyLoad: 'progressive',
    responsive: [
      {
        breakpoint: 4000,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.badge-carousel').slick({
    infinite: false,
    arrows: false,
    prevArrow: '<div class="slick-arrow prev-btn"><i class="material-icons">arrow_back_ios</i></div>',
    nextArrow: '<div class="slick-arrow next-btn"><i class="material-icons">arrow_forward_ios</i></div>',
    lazyLoad: 'progressive',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false
        }
      },
      {
        breakpoint: 380,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false,
          centerPadding: '15px',
          dots: true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  $('.instagram-carousel').slick({
    infinite: false,
    arrows: true,
    prevArrow: '<div class="slick-arrow prev-btn"><i class="material-icons">arrow_back_ios</i></div>',
    nextArrow: '<div class="slick-arrow next-btn"><i class="material-icons">arrow_forward_ios</i></div>',
    lazyLoad: 'progressive',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.other-carousel').slick({
    infinite: false,
    arrows: true,
    prevArrow: '<div class="slick-arrow prev-btn"><i class="material-icons">arrow_back_ios</i></div>',
    nextArrow: '<div class="slick-arrow next-btn"><i class="material-icons">arrow_forward_ios</i></div>',
    lazyLoad: 'progressive',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false
        }
      },
      {
        breakpoint: 380,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false,
          centerPadding: '15px',
          // dots: true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

});



$(function () {
  $('[data-toggle="tooltip"]').tooltip({
    trigger: 'focus',
    template: '<div class="tooltip tooltip-shopping" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
  })
})