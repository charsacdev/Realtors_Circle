$(document).ready(function () {

  var screenWidth = window.innerWidth;

  if ($(".testimonial-swiper").length > 0) {

    var t = new Swiper(".testimonial-swiper", 
    { 
      speed: 3e3, 
      slidesPerView: 2, 
      spaceBetween: 30, 
      parallax: !0, 
      centeredSlides: (screenWidth <= 767) ? true : false,
      loop: !0, 
      autoplay: { delay: 8e3 }, 
      navigation: { nextEl: ".testimonial-next", prevEl: ".testimonial-prev" }, 
      breakpoints: { 
        1024: { slidesPerView: 3 }, 
        768: { slidesPerView: 2 }, 
        320: { slidesPerView: 1 } 
      } 
    });
  }
  if ($(".analy-swiper").length > 0) {

    var t = new Swiper(".analy-swiper", 
    { 
      speed: 3e3, 
      slidesPerView: 2, 
      spaceBetween: (screenWidth <= 600) ? 20 : 30, 
      parallax: !0, 
      centeredSlides: (screenWidth <= 575) ? true : false,
      loop: !0, 
      autoplay: { delay: 8e2 }, 
      navigation: { nextEl: ".testimonial-next", prevEl: ".testimonial-prev" }, 
      breakpoints: { 
        1200: { slidesPerView: 3 }, 
        576: { slidesPerView: 2 }, 
        320: { slidesPerView: 1 } 
      } 
    });
  }


  if ($(".partner-swiper").length > 0) {

    var t = new Swiper(".partner-swiper", 
    { 
      speed: 3e3, 
      slidesPerView: 2, 
      spaceBetween: 30, 
      parallax: !0, 
      centeredSlides: 0,
      loop: !0, 
      autoplay: { delay: 8e3 }, 
      navigation: { nextEl: ".partner-next", prevEl: ".partner-prev" }, 
      breakpoints: { 
        1024: { slidesPerView: 5 }, 
        576: { slidesPerView: 4 }, 
        320: { slidesPerView: 3 } 
      } 
    });

  }

  if ($(".property-swiper").length > 0) {

    var t = new Swiper(".property-swiper", 
    { 
      effect: 'fade',
      speed: 3e3, 
      slidesPerView: 1, 
      spaceBetween: 30, 
      parallax: !0, 
      centeredSlides: 0,
      loop: !0, 
      autoplay: { delay: 8e3 }, 
      navigation: { nextEl: ".partner-next", prevEl: ".partner-prev" }, 
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

  }

  
  if(screenWidth > 576){
    $('#contact-info-intro-ctn').height($('#contact-intro-ctn').height() + 15);
  }



//animation on scroll instance
AOS.init();



  



  // Toggle Password Input Visibility

  $('.rlf-hd-hide').on('click', function () {
    let targetInput = $(this).parents('.rlf-hd').siblings('.psw_input');
    targetInput.attr('type', 'text');
    $(this).siblings('.rlf-hd-show').removeClass('d-none');
    $(this).addClass('d-none');

  });

  $('.rlf-hd-show').on('click', function () {
    let targetInput = $(this).parents('.rlf-hd').siblings('.psw_input');
    targetInput.attr('type', 'password');
    $(this).siblings('.rlf-hd-hide').removeClass('d-none');
    $(this).addClass('d-none');
  });

});

