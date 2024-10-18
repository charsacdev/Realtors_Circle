<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Registration') - Realtors Circle</title>
  <link rel="shortcut icon" type="text/css" href="realtors/asset/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="realtors/vendor/bootstrap/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="realtors/vendor/fontawesome/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8+u7LVHuX7HR/TaJK1z4pQD5U6DY2P2WxI7tXDAe7MWI4VjxCt/dZRtF+l5fw" crossorigin="anonymous">


  <!-- Datatables CSS -->
  <link rel="stylesheet" href="realtors/vendor/datatables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="realtors/asset/css/aos.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="realtors/vendor/swiper/swiper-bundle.min.css">

  <!--Custom CSS-->
  <link rel="stylesheet" href="realtors/asset/css/style.css">
</head>

<body>
    
        <!--Authentication contents-->
        @yield('authContent')


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

  <button type="hidden" style="display: none" id="successBtn" data-bs-toggle="modal" data-bs-target="#successModal"></button>



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

  <button type="hidden" style="display: none" id="failureBtn" data-bs-toggle="modal" data-bs-target="#failureModal"></button>






        <script>
          document.addEventListener('DOMContentLoaded', function () {
            
            /////////////////////// Listen for success events ////////////////////////////////////
              Livewire.on('success', (data) => {
                var message = data[0]['message'];
                var type = data[0]['type'];
    
                var url = '';
    
                if(type && type == 'realtor'){
                  url = "{{ route('realtor.dashboard') }}";
                }else if(type && type == 'agency'){
                  url = "{{ route('agency.dashboard') }}";
                }

                let successBag = document.getElementById('successBag');
                if(successBag){
                  successBag.innerHTML = message;
                }

                let successBtn = document.getElementById('successBtn');
                if(successBtn){
                  successBtn.click();
                }
    
                setTimeout(function() {
                  // Default to dashboard
                    window.location.href = url; 
                }, 2000); // 2-second delay
              });

            /////////////////////// Listen for success events ////////////////////////////////////
            Livewire.on('failure', (data) => {
                var message = data[0]['message'];
                var failureBag = document.getElementById('failureBag');
                if(failureBag){
                  failureBag.innerHTML = message;
                }

                var failureBtn = document.getElementById('failureBtn');
                if(failureBtn){
                  failureBtn.click();
                }
              });


          });
      </script>
 
  <!-- JS FILES -->
  <script src="realtors/vendor/jquery/jQuery3.6.1.min.js"></script>
  <script src="realtors/vendor/popper/popper.js"></script>
  <script src="realtors/vendor/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="realtors/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="realtors/vendor/fontawesome/all.min.js"></script>
  <script src="realtors/vendor/jquery-validate/jquery.validate.js"></script>
  <script src="realtors/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="realtors/asset/js/aos.js"></script>
  <script src="realtors/asset/js/plugins_init.js"></script>
  <script src="realtors/asset/js/main.js"></script>
</body>
</html>