<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Description - Realtors Circle</title>
  <link rel="shortcut icon" type="favicon" href="{{asset('agency/asset/img/logo.png')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('agency/vendor/bootstrap/bootstrap.min.css')}}">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{asset('agency/vendor/fontawesome/all.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8+u7LVHuX7HR/TaJK1z4pQD5U6DY2P2WxI7tXDAe7MWI4VjxCt/dZRtF+l5fw" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

  <!-- Datatables CSS -->
  <link rel="stylesheet" href="{{asset('agency/vendor/datatables/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('agency/asset/css/aos.css')}}">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{asset('agency/vendor/swiper/swiper-bundle.min.css')}}">

  <!--Custom CSS-->
  <link rel="stylesheet" href="{{asset('agency/asset/css/style.css')}}">

  <!--Light gallery Css-->
  <!-- Include the latest LightGallery JS from the correct CDN -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/lightgallery.min.js"></script>

<!-- Include the latest LightGallery CSS -->
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/css/lightgallery.min.css" rel="stylesheet">



  @livewireScripts
  @livewireStyles
</head>

<body>
  <div class="page-wrapper">
    <header class="header1 header-index">
      <nav class="navbar navbar-expand-lg">
        <div class="container cosynav">
          <a class="navbar-brand text-light" href="/">
            <span class="d-flex align-items-center justify-content-center gap-2">
              <img src="{{asset('agency/asset/img/logo.png')}}" width="50px" class="img-fluid" id="log" alt="logo">
              <span class="logo-text">
                <h5>Realtor's</h5>
                <h5>Circle</h5>
              </span>
            </span>
          </a>

          <!-- Nav Item -->
          <ul class="navbar-nav ma-auto  nav-sm">
            <!-- Logo on small screen -->
            <div class="sm-logo-ctn d-lg-none">
              <div class="menu-btn d-lg-none d-sm-block">
                <div class="menu-btn-burger"></div>
              </div>
            </div>
            <!-- <span class="close d-lg-none d-sm-block">&times;</span> -->
            <li class="nav-item">
              <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link getstarted-btn" href="faqs">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link getstarted-btn" href="/contact">Contact Us</a>
            </li>
          </ul>
          <!-- Harmburger menu icon -->
          <div class="menu-btn d-lg-none d-sm-block">
            <div class="menu-btn-burger"></div>
          </div>
        </div>
      </nav>
      
    </header>
       
        <!--Live Wire Dashboard-->
        @livewire('realtors.homepages.realtors-property-details');

  
      <!--*****************  Footer section ***************** -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="footer-logo">
                <img src="{{asset('agency/asset/img/logo.png')}}" width="50px" alt="logo">
                <div class="logo-text">
                  <h2 class="footer-intro">Realtor's</h2>
                  <h2>Circle</h2>
                </div>
              </div>
              <small class="d-none d-md-block">&copy;{{date("Y")}} Realtor's Circle. All Rights Reserved.</small>
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-md-4 col-lg-3 mb-4">
              <h5 class="footer-middle-text">Discover real estate <br> properties seamlessly</h5>
              <small>email: info@successhaven.ng</small>
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-md-4 col-lg-3 mb-0 mb-md-4">
             
              <div class="footer-socials">
                <a href="javascript:;"><img src="{{asset('agency/asset/img/icons/facebook-icon-white.png')}}" alt=""></a>
                <a href="javascript:;"><img src="{{asset('agency/asset/img/icons/instagram-icon-alt.png')}}" alt=""></a>
                <a href="javascript:;"><img src="{{asset('agency/asset/img/icons/twitter-icon-white.png')}}" alt=""></a>
              </div>
            </div>
          </div>
          <small class="mt-4 d-block d-md-none">&copy;{{date("Y")}} Realtor's Circle. All Rights Reserved.</small>
        </div>
      </footer>

      
    <!--*************** Success Update Record Modal *******************-->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered">
           <div class="modal-content">
                <div class="modal-body rounded">
                  <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                      <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" width="50px" alt="icon">
                  </div>
                     <h3 class="text-center mb-2">Success!</h3>
                    <div class="text-center mb-2" id="successBag"></div>
                      <button type="button" data-bs-dismiss="modal" class="new-discussion-btn btn-success w-100 mb-2">Ok</button>
                </div>
           </div>
      </div>
  </div>

  <button type="hidden" style="display: none" id="successUpdateBtn" data-bs-toggle="modal" data-bs-target="#successModal"></button>



    <!--*************** Failed Update Record Modal *******************-->
    <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered">
           <div class="modal-content">
                <div class="modal-body rounded">
                  <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                      <img src="{{asset('realtors/asset/img/icons/error.png')}}" width="50px" alt="icon">
                  </div>
                     <h3 class="text-center mb-2">Failure!</h3>
                    <div class="text-center mb-2" id="failureBag"></div>
                      <button type="button" data-bs-dismiss="modal" class="new-discussion-btn btn-danger w-100 mb-2">Ok</button>
                </div>
           </div>
      </div>
  </div>

  <button type="hidden" style="display: none" id="failureUpdateBtn" data-bs-toggle="modal" data-bs-target="#failureModal"></button>


  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      
        /////////////////////// Listen for success events ////////////////////////////////////
        Livewire.on('success', (data) => {
          var message = data[0]['message'];

          let successBag = document.getElementById('successBag');
          if(successBag){
            successBag.innerHTML = message;
          }

          let successBtn = document.getElementById('successUpdateBtn');
          if(successBtn){
            successBtn.click();
          }
        });

        /////////////////////// Listen for failure events ////////////////////////////////////
        Livewire.on('failure', (data) => {

          var message = data[0]['message'];

          var failureBag = document.getElementById('failureBag');
          if(failureBag){
            failureBag.innerHTML = message;
          }

          var failureBtn = document.getElementById('failureUpdateBtn');
          if(failureBtn){
            failureBtn.click();
          }

        });


        /////////////////////// Listen for delete events ////////////////////////////////////
        Livewire.on('deleted', (data) => {
          var message = data[0]['message'];
          var src = data[0]['src'];
          var id = data[0]['id'];

          var parent_container = '';

          if (src === 'testimonial') {
              parent_container = document.querySelector('#testimonial-card' + id);

              if (parent_container) {
                  parent_container.remove(); 
              }
          }

          var successBag = document.getElementById('successBag');
          if (successBag) {
              successBag.innerHTML = message; 
          }

          var successBtn = document.getElementById('successUpdateBtn');
          if (successBtn) {
              successBtn.click(); 

              setTimeout(() => {
                location.reload();
              }, 2000);
          }
      });
        /////////////////////// Listen for notification mark all ////////////////////////////////////
      Livewire.on('markallread', () => {
        var notification = $('.notification-title');
        notification.addClass('read');
      });

    })

  </script>

  <!-- JS FILES -->
  <script src="{{asset('agency/vendor/jquery/jQuery3.6.1.min.js')}}"></script>
  <script src="{{asset('agency/vendor/popper/popper.js')}}"></script>
  <script src="{{asset('agency/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('agency/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('agency/vendor/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('agency/vendor/jquery-validate/jquery.validate.js')}}"></script>
  <script src="{{asset('agency/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('agency/asset/js/aos.js')}}"></script>
  <script src="{{asset('agency/asset/js/plugins_init.js')}}"></script>
  <script src="{{asset('agency/asset/js/main.js')}}"></script>
  <script>
    $(document).ready(function(){
        var slides = $('.swiper-slide');

        for(let i = 1; i <= slides.length; i++){
          playVideo(`#player${i}`);
        }

        function playVideo(id){
          const player = new Plyr(id, {
            controls: ['play-large',],
            debug: false
        });
        }

        //Modal
        //$('#successModal').modal('show');
        

    });
</script>
</body>
</html>