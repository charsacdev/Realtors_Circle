<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Dashboard - Realtors Circle</title>

    <!--asset-->
    <link rel="shortcut icon" type="text/css" href="{{asset('agency-dashboard/asset/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('agency-dashboard/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/css-table-19/css/style.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('agency-dashboard/vendor/fontawesome/all.min.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('agency-dashboard/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('agency-dashboard/vendor/datatables/css/jquery.dataTables.min.css')}}">

    <!-- Bootstrap daterangepicker -->
    <link rel="stylesheet" href="{{asset('agency-dashboard/vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

  
    <!--Custom CSS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <link rel="stylesheet" href="{{asset('agency-dashboard/asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('agency-dashboard/asset/css/responsive.css')}}">

    <!--Color Picker-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/> <!-- 'classic' theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css"/> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/> <!-- 'nano' theme -->
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js"></script>

</head>


<body>
    <div class="page-wrapper">
        <header>
          <div class="top">
              <div class="container">
                  <h3 class="logo">Success Haven</h3>
                  <div class="search-ctn d-none d-md-block">
                      <img src="{{asset('agency-dashboard/asset/img/icons/search-icon.png')}}" alt="">
                      <input type="text" placeholder="Search">
                  </div>
                  <div class="nomepro">
                      <div class="item {{ Request::segment(2)==="notificaitons" ? 'active' : '' }}">
                          <a href="/agency/notificaitons"><img src="{{asset('agency-dashboard/asset/img/icons/notification-icon.png')}}" alt=""></a>
                      </div>
                      <div class="item {{ Request::segment(2)==="booking-appointment" ||Request::segment(2)==="message-inquiry" ? 'active' : '' }}">
                          <a href="/agency/booking-appointment"><img src="{{asset('agency-dashboard/asset/img/icons/calendar-icon-white.png')}}" alt=""></a>
                      </div>
                      
                      <div class="drop-now cursor-p d-flex align-items-center justify-content end gap-2">
                        <div class="item dpi">
                            <div class="profile-dropdown">
                                <div class="d-flex align-items-center justify-content-between gap-4">
                                    <div class="d-flex align-items-center align-items-start gap-3">
                                       <a href="/agency/agency-insight">
                                          <div class="img">
                                              <img src="{{asset('agency-dashboard/asset/img/user-img.png')}}" class="img-flui" alt="">
                                          </div>
                                       </a>
                                    </div>
                                </div>
                                <ul class="profile-dropdown-items profile-items">
                                    <li class="dropdown-item">
                                        <a href="/agency/profile-settings">
                                          <i class="fa fa-user"></i> &nbsp;
                                            Profile
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                      <a href="/agency/notificaitons">
                                        <i class="fa fa-bell"></i> &nbsp;
                                        Notifications
                                      </a>
                                  </li>
                                  <li class="dropdown-item border-0">
                                    <a href="/agency/agency-broadcast-message">
                                      <i class="fa fa-bullhorn"></i> &nbsp;
                                    Broadcast Message</a>
                                  </li>
                                  <li class="mt-4">
                                    <a href="/agency/agency-pro-version" class="new-discussion-btn btn-success text-center fs-12 w-100 d-block">Subscribe to Pro Version</a>
                                  </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:;">
                                        Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="directions close">
                          <i class="fa fa-chevron-down"></i>
                          <i class="fa fa-chevron-up"></i>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
           <nav class="navbar navbar-expand-lg">
               <div class="container cosynav">
                 <a class="navbar-brand text-light" href="">
                   <small>Good morning</small> <br> 
                   <span>Hello John Doe</span>
                 </a>
       
                 <!-- Nav Item -->
                 <ul class="navbar-nav ma-auto  nav-sm">
                   <!-- Logo on small screen -->
                   <div class="sm-logo-ctn d-lg-none opacity-75">
                     <div class="menu-btn d-lg-none d-sm-block">
                       <!-- <div class="menu-btn-burger"></div> -->
                     <i class="fa fa-arrow-right"></i>
                     </div>
                     <!-- <img src="{{asset('agency-dashboard/asset/img/logo.png')}}" class="img-fluid mb-2" alt=""> -->
                   </div>
                   <!-- <span class="close d-lg-none d-sm-block">&times;</span> -->
                   <li class="nav-item">
                     <a class="nav-link {{ Request::segment(2)==="dashboard" ? 'active' : '' }}" href="/agency/dashboard">Dashboard </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link {{ Request::segment(2)==="properties" || Request::segment(2)==="create-properties" || Request::segment(2)==="edit-properties" ? 'active' : '' }}" href="/agency/properties">Properties</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link getstarted-btn {{ Request::segment(2)==="realtors" || Request::segment(2)==="create-realtors" || Request::segment(2)==="realtors-application" || Request::segment(2)==="realtors-schedule-meeting"  ? 'active' : '' }}" href="/agency/realtors">Realtors</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link getstarted-btn {{ Request::segment(2)==="customers" || Request::segment(2)==="customers-details" ? 'active' : '' }}" href="/agency/customers">Customers</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link getstarted-btn {{ Request::segment(2)==="website-settings" || Request::segment(2)==="create-colorplates" || Request::segment(2)==="create-testimonial" || Request::segment(2)==="create-faq" ? 'active' : '' }}" href="/agency/website-settings">Website</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link getstarted-btn {{ Request::segment(2)==="profile-settings" ? 'active' : '' }}" href="/agency/profile-settings">Settings</a>
                   </li>
                  
                 </ul>
                 <!-- Harmburger menu icon -->
                 <div class="menu-btn d-lg-none d-sm-block">
                   <div class="menu-btn-burger"></div>
                 </div>
               </div>
             </nav>
        </header>

         <!--YEILD CONTENT-->
         @yield('content-dashboard')


        </div>

        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                 <div class="modal-content">
                      <div class="modal-body rounded">
                        <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                            <img src="{{asset('agency-dashboard/asset/img/success-star-checked.png')}}" width="50px" alt="icon">
                        </div>
                           <h3 class="text-center mb-2">Success!</h3>
                          <div class="text-center mb-2">
                            You have successfully registered for a LiveLearn Session.
                          </div>
                            <button type="button" class="new-discussion-btn w-100 mb-2">Go Back</button>
                      </div>
                 </div>
            </div>
        </div>
    
    
    
        <!-- JS FILES -->
        <script src="{{asset('agency-dashboard/vendor/jquery/jQuery3.6.1.min.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/popper/popper.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/fontawesome/all.min.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/jquery-validate/jquery.validate.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/moment/moment.min.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('agency-dashboard/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('agency-dashboard/asset/js/dashboard.js')}}"></script>
        <script src="{{asset('agency-dashboard/asset/js/plugins_init.js')}}"></script>
        <script src="{{asset('agency-dashboard/asset/js/main.js')}}"></script>


        <script>
            $(document).ready(function(){

                //COPY FUNCTION
                  $("#copy-img").on('click', function() {
                    var _this = $(this);
                    var input = $(this).siblings('input');
                    input.select();
                    document.execCommand("copy");
                    
                    $(this).siblings('.custom-tooltip').removeClass("d-none");
                    $(this).addClass("d-none");

                    setTimeout(() => {
                        $(this).siblings('.custom-tooltip').addClass("d-none");
                        $(this).removeClass("d-none");
                    }, 3000);
                });

              
                 //Add New Features
                $("#add-feature-btn").on('click', function(){
                var name = $(this).siblings('input').val()
                var splited_name = name.split(" ");
                var id = splited_name.join("_")
                console.log(splited_name)
                console.log(id)
                var html = `
                        <div class="col-sm-2 col-md-4 mt-4">
                            <div class="form-group">
                                <div class="form-check checkbox-success check-lg">
                                    <input type="checkbox" class="form-check-input" id="${id}">
                                    <label class="form-check-label" for="${id}">${name}</label>
                                </div> 
                            </div>
                            </div>
                `
                $('#feature-ctn').append(html)

                })



                $('body').on('click', '.trash-prop', function(){
                if(confirm("Are you sure to delete this file?")){
                    $(this).parent('.npi-card').remove();
                }
                })

                var videoContainers = $('.video-ctn');

                for(let i = 1; i <= videoContainers.length; i++){
                    playVideo(`#player${i}`);
                }


                function playVideo(id){
                    const player = new Plyr(id, {
                    controls: ['play-large',],
                    debug: false
                });
                }


                //Swap Realtors Table
                $('#table-swap').on('change', function(){
                    if($(this).val() == 'realtors'){
                          $('#realtor-container').removeClass('d-none');
                          $('#application-container').addClass('d-none');
                    }else if($(this).val() == 'applications'){
                          $('#realtor-container').addClass('d-none');
                          $('#application-container').removeClass('d-none');
                    }
                });


                //Websit settings
                $('.text-source').on('keyup', function(){
                  var $this = $(this);
                  let totalLength = $(this).parent('.counter-container').find('.total-text').text();
                      totalLength = parseInt(totalLength);
          
          
                  let textLength = $(this).val().split(' ').filter(function(word){
                    return word != '';
                  }).length;
          
                  $(this).parent('.counter-container').find('.entered-text').text(textLength);
          
                  if(textLength >= totalLength){
                    var maxText = $this.val();
                    var newText = maxText.split(' ').slice(0, totalLength).join(' ');
                    $this.val(newText)
                  } 
          
                });

                $('.trash-card').on('click', function(){
                  var _this = $(this);
                    trash('.testimonial-card', _this);
                });

                $('.trash-faq').on('click', function(){
                    var _this = $(this);
                    trash('.qua-container', _this);
                });


                function trash(card, _this){
                    _this.parents(card).remove();
                }

                $('.question-title').on('click', function(){
                    var answerContainer = $(this).parents('.qua-container').find('.answer');
                    var otherAswerContainers = $(this).parents('.qua-container').siblings('.qua-container').find('.answer');
                    
                    otherAswerContainers.addClass('d-none');
                    if(answerContainer.hasClass('d-none')){
                        answerContainer.removeClass('d-none');
                    }else{
                        answerContainer.addClass('d-none');
                    }

                    
                });


                $('.update-ctn .dropdown').on('click', function(e){
                    e.stopPropagation();
                    var container = $(this).siblings('.edet-ctn');
                    if(container.hasClass('active')){
                        $(this).siblings('.edet-ctn').animate({right: '-500px'});
                        container.removeClass('active');
                    }else{
                        $(this).siblings('.edet-ctn').animate({right: '0px'});
                        container.addClass('active');
                    }
                });

                $('body').on('click', function(e){
                    e.stopPropagation();
                    $('.edet-ctn').animate({right: '-500px'});
                    $('.edet-ctn').removeClass('active');
                })


                 // Color Picker
                  const pickr_primary = Pickr.create({
                      el: '.primary-color-picker',
                      theme: 'classic', // can be 'monolith', or 'classic' or 'nano'
                      container: 'div',
                      default: '#45BA63',
                      swatches: [
                        'rgba(244, 67, 54, 1)',
                        'rgba(233, 30, 99, 0.95)',
                        'rgba(156, 39, 176, 0.9)',
                        'rgba(103, 58, 183, 0.85)',
                        'rgba(63, 81, 181, 0.8)',
                        'rgba(33, 150, 243, 0.75)',
                        'rgba(3, 169, 244, 0.7)',
                        'rgba(0, 188, 212, 0.7)',
                        'rgba(0, 150, 136, 0.75)',
                        'rgba(76, 175, 80, 0.8)',
                        'rgba(139, 195, 74, 0.85)',
                        'rgba(205, 220, 57, 0.9)',
                        'rgba(255, 235, 59, 0.95)',
                        'rgba(255, 193, 7, 1)',
                      ],
                
                      components: {
                
                          // Main components
                          preview: true,
                          opacity: true,
                          hue: true,
                
                          // Input / output Options
                          interaction: {
                              hex: true,
                              rgba: true,
                              hsla: true,
                              hsva: true,
                              cmyk: true,
                              input: true,
                              clear: true,
                              save: true
                          }
                      }
                    })
                  
                  const pickr_secondary = Pickr.create({
                      el: '.secondary-color-picker',
                      theme: 'classic', // or 'monolith', or 'nano'
                      container: 'div',
                      default: '#1179EC',
                      swatches: [
                        'rgba(244, 67, 54, 1)',
                        'rgba(233, 30, 99, 0.95)',
                        'rgba(156, 39, 176, 0.9)',
                        'rgba(103, 58, 183, 0.85)',
                        'rgba(63, 81, 181, 0.8)',
                        'rgba(33, 150, 243, 0.75)',
                        'rgba(3, 169, 244, 0.7)',
                        'rgba(0, 188, 212, 0.7)',
                        'rgba(0, 150, 136, 0.75)',
                        'rgba(76, 175, 80, 0.8)',
                        'rgba(139, 195, 74, 0.85)',
                        'rgba(205, 220, 57, 0.9)',
                        'rgba(255, 235, 59, 0.95)',
                        'rgba(255, 193, 7, 1)',
                      ],
                
                      components: {
                
                          // Main components
                          preview: true,
                          opacity: true,
                          hue: true,
                
                          // Input / output Options
                          interaction: {
                              hex: true,
                              rgba: true,
                              hsla: true,
                              hsva: true,
                              cmyk: true,
                              input: true,
                              clear: true,
                              save: true
                          }
                      }
                  })
                  
                  const pickr_accent = Pickr.create({
                      el: '.accent-color-picker',
                      theme: 'classic', // or 'monolith', or 'nano'
                      container: 'div',
                      default: '#202A54',
                      swatches: [
                        'rgba(244, 67, 54, 1)',
                        'rgba(233, 30, 99, 0.95)',
                        'rgba(156, 39, 176, 0.9)',
                        'rgba(103, 58, 183, 0.85)',
                        'rgba(63, 81, 181, 0.8)',
                        'rgba(33, 150, 243, 0.75)',
                        'rgba(3, 169, 244, 0.7)',
                        'rgba(0, 188, 212, 0.7)',
                        'rgba(0, 150, 136, 0.75)',
                        'rgba(76, 175, 80, 0.8)',
                        'rgba(139, 195, 74, 0.85)',
                        'rgba(205, 220, 57, 0.9)',
                        'rgba(255, 235, 59, 0.95)',
                        'rgba(255, 193, 7, 1)',
                      ],
                
                      components: {
                
                          // Main components
                          preview: true,
                          opacity: true,
                          hue: true,
                
                          // Input / output Options
                          interaction: {
                              hex: true,
                              rgba: true,
                              hsla: true,
                              hsva: true,
                              cmyk: true,
                              input: true,
                              clear: true,
                              save: true
                          }
                      }
                  })
                  
                  const pickr_text = Pickr.create({
                      el: '.text-color-picker',
                      theme: 'classic', // or 'monolith', or 'nano'
                      container: 'div',
                      default: '#6B6B6B',
                      swatches: [
                        'rgba(244, 67, 54, 1)',
                        'rgba(233, 30, 99, 0.95)',
                        'rgba(156, 39, 176, 0.9)',
                        'rgba(103, 58, 183, 0.85)',
                        'rgba(63, 81, 181, 0.8)',
                        'rgba(33, 150, 243, 0.75)',
                        'rgba(3, 169, 244, 0.7)',
                        'rgba(0, 188, 212, 0.7)',
                        'rgba(0, 150, 136, 0.75)',
                        'rgba(76, 175, 80, 0.8)',
                        'rgba(139, 195, 74, 0.85)',
                        'rgba(205, 220, 57, 0.9)',
                        'rgba(255, 235, 59, 0.95)',
                        'rgba(255, 193, 7, 1)',
                      ],
                
                      components: {
                
                          // Main components
                          preview: true,
                          opacity: true,
                          hue: true,
                
                          // Input / output Options
                          interaction: {
                              hex: true,
                              rgba: true,
                              hsla: true,
                              hsva: true,
                              cmyk: true,
                              input: true,
                              clear: true,
                              save: true
                          }
                      }
                  })

                  //Primary color
                  pickr_primary.on('init', instance => {
                    showHexCodeFromInstance(instance, '#primary-color-ctn')
                  }).on('save', (color, instance) => {
                    showHexCodeFromColor(color, '#primary-color-ctn');
                    pickr_primary.hide();
                  });

                  //Secondary color
                  pickr_secondary.on('init', instance => {
                    showHexCodeFromInstance(instance, '#secondary-color-ctn')
                  }).on('save', (color, instance) => {
                      showHexCodeFromColor(color, '#secondary-color-ctn');
                      pickr_secondary.hide();
                  });

                  //Accent color
                  pickr_accent.on('init', instance => {
                    showHexCodeFromInstance(instance, '#accent-color-ctn')
                  }).on('save', (color, instance) => {
                    showHexCodeFromColor(color, '#accent-color-ctn');
                    pickr_accent.hide();
                  });

                  //Primary color
                  pickr_text.on('init', instance => {
                    showHexCodeFromInstance(instance, '#text-color-ctn')
                  }).on('save', (color, instance) => {
                    showHexCodeFromColor(color, '#text-color-ctn')
                    pickr_text.hide();
                  });




                  function showHexCodeFromInstance(instance, id){
                    var hexCode = instance._color.toHEXA().toString();
                    $(id).val(hexCode);
                  }

                  function showHexCodeFromColor(color, id){
                    var hexCode = color.toHEXA().toString();
                    $(id).val(hexCode);
                  }

               });
      </script>

     

       
    </body>
</html>