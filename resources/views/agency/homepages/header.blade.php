<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Home') - @yield('company', 'Realtors Circle')</title>
  <link rel="shortcut icon" type="favicon" href="{{ asset('agency/asset/img/logo.png') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('agency/vendor/bootstrap/bootstrap.min.css') }}">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{ asset('agency/vendor/fontawesome/all.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8+u7LVHuX7HR/TaJK1z4pQD5U6DY2P2WxI7tXDAe7MWI4VjxCt/dZRtF+l5fw" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
  <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <!--Light gallery Css-->
    <!-- Include the latest LightGallery JS from the correct CDN -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/lightgallery.min.js"></script>

    <!-- Include the latest LightGallery CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/css/lightgallery.min.css" rel="stylesheet">


  <!-- Datatables CSS -->
  <link rel="stylesheet" href="{{ asset('agency/vendor/datatables/css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('agency/asset/css/aos.css') }}">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{ asset('agency/vendor/swiper/swiper-bundle.min.css') }}">

  <!--Custom CSS-->
  <link rel="stylesheet" href="{{ asset('agency/asset/css/style.css') }}">

</head>

<body>
    @yield('content')



        <!--*****************  Support ***************** -->
        <div id="support">
            <div id="support-header">
            <div class="support-user">
                <div class="img">
                <img src="{{ asset('agency/asset/img/support.jpg') }}" alt="Support Image">
                </div>
                <h5 class="name">Charsac AI</h5>
            </div>
            <span class="close-support" id="close-support"><i class="fa fa-times"></i></span>
            </div>
            <div id="support-body">
            <div id="load-previous">
                <span >
                Load previous conversations
                </span>
            </div>
            <span id="date">Today</span>
            <div class="support-chat ai-user">
                <div class="info">
                <div class="user-info">
                    <div class="img">
                    <img src="{{ asset('agency/asset/img/support.jpg') }}" alt="Support Image">
                    </div>
                    <h6 class="user-name">Charsac AI</h6>
                </div>
                <small>7:27 PM</small>
                </div>
                <div class="message">
                Hi, I'm your support assistant. What can I help you with?
                </div>
            </div>
            <div class="support-chat human-user">
                <div class="info">
                <div class="user-info">
                    <h6 class="img">
                    O
                    </h6>
                    <h6 class="user-name">Oluchi Cassidy</h6>
                </div>
                <small>7:27 PM</small>
                </div>
                <div class="message">
                I'm looking for a two bedroom apartment around Mile 50, Abakaliki
                </div>
            </div>
            </div>
            <div id="support-footer">
            <input type="text" id="message-input" placeholder="Your message">
            <button id="send-message"><i class="fa fa-paper-plane"></i></button>
            </div>
        </div>
        <div id="start-support">
            <div class="animateit"></div>
            <div class="img">
            <img src="{{ asset('agency/asset/img/support.jpg') }}" alt="Support Image">
            </div>
        </div>
        <!--*****************  Support End ***************** -->


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
  <script src="{{ asset('agency/vendor/jquery/jQuery3.6.1.min.js')}}"></script>
  <script src="{{ asset('agency/vendor/popper/popper.js')}}"></script>
  <script src="{{ asset('agency/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('agency/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('agency/vendor/fontawesome/all.min.js')}}"></script>
  <script src="{{ asset('agency/vendor/jquery-validate/jquery.validate.js')}}"></script>
  <script src="{{ asset('agency/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('agency/asset/js/aos.js')}}"></script>
  <script src="{{ asset('agency/asset/js/plugins_init.js')}}"></script>
  <script src="{{ asset('agency/asset/js/main.js')}}"></script>
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

    });
 </script>
  <script>
    $(document).ready(function(){

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

    });
  </script>
    <script>
        $(document).ready(function(){
          
          $('#start-support').on("click", function(){
              $(this).fadeOut();
              $('#support').fadeIn();
          })
      
          
          $('#close-support').on("click", function(){
              $("#start-support").fadeIn();
              $('#support').fadeOut();
          })
      
      
      
          $("#send-message").on("click", function(){
            SendMessage();
          });
      
          $('#message-input').on('keydown', function(event){
            if(event.key == "Enter"){
              SendMessage();
            }
          })
      
          function SendMessage()
          {
            let inputTag = $('#message-input');
            let message = inputTag.val();
            let chatboard = $('#support-body');
            let html = `
                <div class="support-chat human-user">
                  <div class="info">
                    <div class="user-info">
                      <h6 class="img">
                        O
                      </h6>
                      <h6 class="user-name">Oluchi Cassidy</h6>
                    </div>
                    <small>7:27 PM</small>
                  </div>
                  <div class="message">
                    ${message}
                  </div>
                </div>
            `;
      
            if(message.trim() != ""){
              chatboard.append(html).scrollTop(chatboard[0].scrollHeight);
            }
      
            inputTag.val('');
          }
        })
      </script>
</body>
</html>