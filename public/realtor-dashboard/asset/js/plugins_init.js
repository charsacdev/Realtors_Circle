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


  if($('.summernote').length > 0){

    $('.summernote').summernote({
      height: 300, // Set the height of the editor
      placeholder: 'Start typing...',
      toolbar: [
        // Full toolbar options
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video', 'hr']],
        ['view', ['fullscreen', 'codeview', 'help']],
        ['misc', ['undo', 'redo']]
    ]
    });
  }


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

  //example 1
  var table = $('#example').DataTable({
    createdRow: function (row, data, index) {
      $(row).addClass('selected')
    },
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }
  });

  table.on('click', 'tbody tr', function () {
    var $row = table.row(this).nodes().to$();
    var hasClass = $row.hasClass('selected');
    if (hasClass) {
      $row.removeClass('selected')
    } else {
      $row.addClass('selected')
    }
  })

  table.rows().every(function () {
    this.nodes().to$().removeClass('selected')
  });



  //example 2
  var table2 = $('#example2').DataTable({
    createdRow: function (row, data, index) {
      $(row).addClass('selected')
    },

    "scrollY": "42vh",
    "scrollCollapse": true,
    "paging": false
  });

  table2.on('click', 'tbody tr', function () {
    var $row = table2.row(this).nodes().to$();
    var hasClass = $row.hasClass('selected');
    if (hasClass) {
      $row.removeClass('selected')
    } else {
      $row.addClass('selected')
    }
  })

  table2.rows().every(function () {
    this.nodes().to$().removeClass('selected')
  });

  // dataTable1
  var table = $('#dataTable1').DataTable({
    searching: false,
    paging: true,
    select: false,
    lengthChange: false,

  });
  // dataTable2
  var table = $('#dataTable2').DataTable({
    searching: false,
    paging: true,
    select: false,
    lengthChange: false,

  });
  // dataTable3
  var table = $('#dataTable3').DataTable({
    searching: false,
    paging: true,
    select: false,
    lengthChange: false,

  });
  // dataTable4
  var table = $('#dataTable4').DataTable({
    searching: false,
    paging: true,
    select: false,
    lengthChange: false,

  });


  var table = $('#livelearn-table').DataTable({
    searching: true,
    paging: true,
    select: true,
    lengthChange: true,
    info: true,
    language: {
      paginate: {
        next: 'Next &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Previous'
      }
    }

  });

  
  var table = $('#realtor-table').DataTable({
    searching: true,
    paging: true,
    select: true,
    lengthChange: true,
    info: true,
    language: {
      paginate: {
        next: 'Next &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Previous'
      }
    }

  });




  // dataTable5
  var table = $('#example5').DataTable({
    searching: false,
    paging: true,
    select: false,
    info: true,
    lengthChange: false,
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }

  });

  // dataTable6
  var table = $('#example6').DataTable({
    searching: false,
    paging: true,
    select: false,
    info: false,
    lengthChange: false,
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }

  });

  // dataTable7
  var table = $('#example7').DataTable({
    searching: false,
    paging: true,
    select: false,
    info: false,
    lengthChange: false,
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }

  });

  // dataTable8
  var table = $('#example8').DataTable({
    searching: false,
    paging: true,
    select: false,
    info: false,
    lengthChange: false,
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }

  });
  // orderTable
  var table = $('#orderTable').DataTable({
    searching: false,
    paging: true,
    select: false,
    info: false,
    lengthChange: false,
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }

  });



  // table row
  var table = $('#dataTable1, #dataTable2, #dataTable3, #dataTable4,  #example3, #example4 ').DataTable({
    select: true,
    searching: true,
    language: {
      paginate: {
        next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
        previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
      }
    }
  });
  $('#example tbody').on('click', 'tr', function () {
    var data = table.row(this).data();
  });

});

