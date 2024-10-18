<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Realtors Circle</title>

    <!--asset-->
    <link rel="shortcut icon" type="text/css" href="{{asset('realtor-dashboard/asset/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('realtor-dashboard/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/css-table-19/css/style.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('realtor-dashboard/vendor/fontawesome/all.min.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('realtor-dashboard/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('realtor-dashboard/vendor/datatables/css/jquery.dataTables.min.css')}}">

    <!-- Bootstrap daterangepicker -->
    <link rel="stylesheet" href="{{asset('realtor-dashboard/vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <!--SummerNotes-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Custom CSS-->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <link rel="stylesheet" href="{{asset('realtor-dashboard/asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('realtor-dashboard/asset/css/responsive.css')}}">
</head>


<body>
    <div class="page-wrapper">
        <header>
          <div class="top">
              <div class="container">
                <h3 class="logo">
                  @php
                    $agency_id = auth('web')->user()->agency['0']->id;
                    $settings = \App\Models\WebsiteSetting::where('user_id', $agency_id)->first();

                    if(!empty($settings))
                    {
                      $logo = json_decode($settings->settings)->logo;
                    }
                  @endphp
                  @if (@$logo)
                    <img src="{{ asset('storage/uploads/' . $logo) }}" alt="logo" height="50px">
                  @elseif (auth('web')->user()->company_name)
                   {{ auth('web')->user()->company_name }}
                  @else
                    Realtors Circle
                  @endif 
                </h3>
                  <div class="search-ctn d-none d-md-block">
                      <img src="{{asset('realtor-dashboard/asset/img/icons/search-icon.png')}}" alt="">
                      <input type="text" placeholder="Search">
                  </div>
                  <div class="nomepro">
                    <div class="item {{Request::segment(2)==="notifications"  ? 'active' : '' }}">
                        <a  href="/realtor/notifications"><img src="{{asset('realtor-dashboard/asset/img/icons/notification-icon.png')}}" alt=""></a>
                    </div>
                    <div class="item {{Request::segment(2)==="customer-schedules" || Request::segment(2)==="customer-schedules-details"  ? 'active' : '' }}">
                        <a href="/realtor/customer-schedules"><img src="{{asset('realtor-dashboard/asset/img/icons/calendar-icon-white.png')}}" alt=""></a>
                    </div>
                    <div class="drop-now cursor-p d-flex align-items-center justify-content end gap-2">
                      <div class="item dpi {{Request::segment(2)==="insight" || Request::segment(2)==="broadcast-message"  ? 'active' : '' }}">
                          <div class="profile-dropdown">
                              <div class="d-flex align-items-center justify-content-between gap-4">
                                  <div class="d-flex align-items-center align-items-start gap-3">
                                    <a href="/realtor/insight">
                                      <div class="img">
                                        @if (auth()->user()->profile_image)
                                          <img src="{{ asset('storage/uploads/' . auth()->user()->profile_image) }}" class="img-flui" alt="profile image">
                                        @else
                                        <img src="{{asset('realtor-dashboard/asset/img/user-img.png')}}" class="img-flui" alt="profile image">
                                        @endif
                                      </div>
                                    </a>
                                  </div>
                              </div>
                              <ul class="profile-dropdown-items profile-items">
                                <li class="dropdown-item">
                                    <a href="/realtor/profile">
                                      <i class="fa fa-user"></i> &nbsp;
                                    Profile</a>
                                </li>
                                <li class="dropdown-item">
                                  <a href="/realtor/notifications">
                                    <i class="fa fa-bell"></i> &nbsp;
                                  Notifications</a>
                              </li>
                              <li class="dropdown-item border-0">
                                <a href="/realtor/broadcast-message">
                                  <i class="fa fa-bullhorn"></i> &nbsp;
                                Broadcast Message</a>
                              </li>
                              <li class="mt-4">
                                <a href="/realtor/pro-version" class="new-discussion-btn btn-success text-center fs-12 w-100 d-block">Subscribe to Pro Version</a>
                              </li>
                                <li class="dropdown-item">
                                    <a href="javascript:;">
                                    
                                    <form method="POST" action="{{ route('logout') }}">
                                      @csrf
                                      <button class="border-0 bg-transparent" type="submit">Logout</button>
                                  </form>
                                    </a>
                                  
                                  </li>
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
                   <small>{{ greetings() }}</small> <br> 
                   <span>Hello {{ auth()->user()->first_name ? auth()->user()->first_name : 'Boss' }}!</span>
                 </a>
       
                 <!-- Nav Item -->
                 <ul class="navbar-nav ma-auto  nav-sm">
                   <!-- Logo on small screen -->
                   <div class="sm-logo-ctn d-lg-none opacity-75">
                     <div class="menu-btn d-lg-none d-sm-block">
                       <!-- <div class="menu-btn-burger"></div> -->
                     <i class="fa fa-arrow-right"></i>
                     </div>
                     <!-- <img src="{{asset('realtor-dashboard/asset/img/logo.png')}}" class="img-fluid mb-2" alt=""> -->
                   </div>
                   <!-- <span class="close d-lg-none d-sm-block">&times;</span> -->
                   <li class="nav-item">
                     <a class="nav-link {{ Request::segment(2)==="dashboard" ? 'active' : '' }}" href="/realtor/dashboard">Dashboard </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link {{Request::segment(2)==="create-properties" || Request::segment(2)==="properties" || Request::segment(2)==="edit-properties" ? 'active' : '' }}" href="/realtor/properties">Properties</a>
                   </li>
                  
                   <li class="nav-item">
                     <a class="nav-link {{Request::segment(2)==="customers" || Request::segment(2)==="customers-details" ? 'active' : '' }}" href="/realtor/customers">Customers</a>
                   </li>
                  
                   <li class="nav-item">
                     <a class="nav-link {{Request::segment(2)==="profile"  ? 'active' : '' }}" href="/realtor/profile">Settings</a>
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
    <script src="{{asset('realtor-dashboard/vendor/jquery/jQuery3.6.1.min.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/popper/popper.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/jquery-validate/jquery.validate.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('realtor-dashboard/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (isRouteActive(['realtor.dashboard', 'realtor.dashboard.*']) != 'active')
      {{-- <script src="{{asset('realtor-dashboard/asset/js/dashboard.js')}}"></script> --}}
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('realtor-dashboard/asset/js/plugins_init.js')}}"></script>
    <script src="{{asset('realtor-dashboard/asset/js/main.js')}}"></script>
    <script>

          //Confirm Delete
          function confirmDeletion(event, data) {
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      Livewire.dispatch(event, {testimonial_id : data['id']}); // Dispatch Livewire event for deletion
                  }
              });
          }

          //Mark a notification read
          function markRead(data)
          {
            Livewire.dispatch('markread', {notification_id : data['id']})
          }
    </script>
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

            //CREATE PROPERTIES
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

                document.addEventListener('DOMContentLoaded', function(){
                    document.getElementById('img-upload').addEventListener('change', function(){
                        var input = this;
                        if (input.files && input.files[0]){
                            for (let i = 0; i < input.files.length; i++){
                                console.log(input.files[i].name)

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                let html = `
                                    <div class="npi-card">
                                    <img src="${e.target.result}" class="bg-prop" alt="">
                                    <div class="trash-prop"><img src="asset/img/icons/trash-icon-red.png" alt=""></div>
                                    </div>
                                `;
                                    document.getElementById('npi-container').innerHTML += html;
                                }
            
                                reader.readAsDataURL(input.files[i]);

                            }
                        }
                    })
                })

                  //  var videoContainers = $('.video-ctn');

                  //   document.getElementById('vid-upload').addEventListener('change', function(event) {
                  //   const file = event.target.files;
                  //   console.log(file);

                  //   for(let i = 0; i < file.length; i++){


                  //   var playerId = videoContainers.length + 1;
                    
                  //   if (file && file[i].type.startsWith('video/')) {

                  //           const reader = new FileReader();
                            
                  //           reader.onload = function(event) {
                  //               // const videoElement = document.createElement('video');
                  //               // videoElement.src = event.target.result;
                  //               // videoElement.controls = true;

                            

                  //               var htm = `
                  //               <div class="npi-card video-ctn">
                  //                   <video id="player${playerId}" controls playsinline data-poster="">
                  //                   <source src="${event.target.result}"  type="video/mp4"></video>
                  //                   <div class="trash-prop"><img src="asset/img/icons/trash-icon-red.png" alt=""></div>
                  //               </div>
                  //               `;

                  //               const parser = new DOMParser();
                  //               const doc = parser.parseFromString(htm,'text/html');
                  //               const videoElement = doc.body.firstChild;
                                
                  //               const ctn = document.getElementById('npi-vid-container');
                  //               // ctn.innerHTML += html;
                  //               ctn.appendChild(videoElement);
                  //               playVideo(`#player${playerId}`);
                  //           };
                            
                  //           reader.readAsDataURL(file[i]);
                  //   } 
                    
                  //   }
                  //   });


                    function playVideo(id){
                    const player = new Plyr(id, {
                        controls: ['play-large',],
                        debug: false
                    });
                    }

                  //REVIEWS MANAGEMENT
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

                $('trash-card').on('click', function(){
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

      });
    </script>
</body>

</html>