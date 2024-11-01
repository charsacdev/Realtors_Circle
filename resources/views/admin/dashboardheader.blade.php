<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>

    <!--asset-->
    <link rel="shortcut icon" type="text/css" href="{{ asset('admin/asset/img/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/css-table-19/css/style.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/all.min.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}">

    <!-- Bootstrap daterangepicker -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

     <!--SummerNotes-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Custom CSS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <link rel="stylesheet" href="{{ asset('admin/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/css/responsive.css') }}">
</head>


<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 sidebar">
                    <div class="sidebar-header">
                        <div class="sidebar-close d-lg-none"></div>
                        <div class="logo-ctn">
                            <img src="{{ asset('admin/asset/img/logo.png') }}" class="img-fluid mb-2 sidebar-logo" alt="">
                            <div>
                                <h3 class="logo-text">Realtors</h3>
                                <h3 class="logo-text">Circle</h3>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-content">
                        <ul class="sidebar-nav-links">
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ isRouteActive(['admin.dashboard']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/dashboard-img.png') }}" alt="">
                                    Dashboard
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.realtors') }}" class="sidebar-link {{ isRouteActive(['admin.realtors', 'admin.realtor.*']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/users-icon.png') }}" alt="">
                                    Realtors
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.agencies') }}" class="sidebar-link {{ isRouteActive(['admin.agencies', 'admin.agency.*']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/agency-icon.png') }}" alt="">
                                    Agencies
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.broadcast-message') }}" class="sidebar-link {{ isRouteActive(['admin.broadcast-message']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/broadcast-message-icon.png') }}" alt="">
                                    Broadcast Message
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.contact-us') }}" class="sidebar-link {{ isRouteActive(['admin.contact-us', 'admin.contact-us.*']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/contact-icon.png') }}" alt="">
                                    Contact Us
                                </a>
                            </li>

                        </ul>
                        <div class="sidebar-footer">
                            <a href="{{ route('admin.profile') }}" class="sidebar-link mb-5 {{ isRouteActive(['admin.profile']) }}" wire:navigate>
                                <i class="fa fa-cog" style="font-size: 18px"></i>
                                Settings
                            </a>
                            <a href="javascript:;" class="sidebar-link mb-5">
                                <img src="{{ asset('admin/asset/img/icons/logout.png') }}" alt="">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="border-0 bg-transparent text-light" type="submit">Logout</button>
                                  </form>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 main">
                    <div class="container-fluid px-4">
                        <div class="main-header">
                            <div class="d-flex align-items-start gap-3">
                                <div class="menu harmburger-menu d-lg-none">
                                    <div class="menu"></div>
                                </div>
                                <!--YEILD PAGE HEADER TITLE-->
                                <h1 class="heading">@yield('title', 'Dashboard')</h1>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">

                                <div class="profile-dropdown">
                                    <div class="drop-now d-flex align-items-center justify-content-between gap-4">
                                        <div class="d-flex align-items-center align-items-start gap-3">
                                            <div class="img">
                                                @if (auth('web')->user()->first_name)
                                                    {{ getFirstLetter(auth('web')->user()->first_name) }}
                                                @else
                                                    A
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="name">
                                                    @if (auth('web')->user()->first_name)
                                                    {{ auth('web')->user()->first_name }}
                                                @else
                                                    Admin User
                                                @endif
                                                </span>
                                                <span class="role">{{ Str::title(auth('web')->user()->role)  }}</span>
                                            </div>
                                        </div>
                                        <div class="directions close">
                                            <i class="fa fa-chevron-down"></i>
                                            <i class="fa fa-chevron-up"></i>
                                        </div>
                                    </div>
                                    <ul class="profile-dropdown-items profile-items d-none">
                                        <li class="dropdown-item">
                                            <a href="{{ route('admin.profile') }}" wire:navigate>
                                                <img src="{{ asset('admin/asset/img/icons/user-icon-dark.png') }}" class="img-fluid"
                                                    alt="icon">Profile</a>
                                        </li>

                                        <li class="dropdown-item">
                                            <a href="javascript:;">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <img src="{{ asset('admin/asset/img/icons/login-icon.png') }}" class="img-fluid" alt="icon">
                                                    <button class="border-0 bg-transparent" type="submit">Logout</button>
                                                  </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                         <!--YEILD CONTENT-->
                        @yield('content-dashboard')
                       
                    </div>
                </div>
            </div>
        </div>
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

        ////////////////////////// Listen for reset Editor event /////////////////////////////////
        Livewire.on('resetEditor', () => {
            $('.summernote').summernote('reset');  // Clears all content and formatting in the editor
        });
  
      })
  
    </script>



    <!-- JS FILES -->
    <script src="{{ asset('admin/vendor/jquery/jQuery3.6.1.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/asset/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/asset/js/plugins_init.js') }}"></script>
    <script src="{{ asset('admin/asset/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Mark a notification read
        function updateStatus(id, redirectUrl)
          {
            Livewire.dispatch('update-status', {id : id})
            setTimeout(() => {
                    location.href = redirectUrl
                  }, 5000);
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

           
        });
    </script>
    @stack('scripts')
</body>

</html>