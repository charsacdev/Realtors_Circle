<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Realtors Circle</title>
  <meta property="og:description" content="Realtor Circle is a leading platform for realtors, agencies, and clients to buy, sell, and rent properties seamlessly. Connect with the best real estate professionals today.">
  <meta property="og:image" content="{{asset('realtors/asset/img/logo.png')}}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="article">
  <!-- Optional: Twitter Card meta tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Realtor Circle is a leading platform for realtors, agencies, and clients to buy, sell, and rent properties seamlessly. Connect with the best real estate professionals today.">
  <meta name="twitter:image" content="{{asset('realtors/asset/img/logo.png')}}">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <link rel="shortcut icon" type="favicon" href="{{asset('realtors/asset/img/logo.png')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('realtors/vendor/bootstrap/bootstrap.min.css')}}">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{asset('realtors/vendor/fontawesome/all.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8+u7LVHuX7HR/TaJK1z4pQD5U6DY2P2WxI7tXDAe7MWI4VjxCt/dZRtF+l5fw" crossorigin="anonymous">


  <!-- Datatables CSS -->
  <link rel="stylesheet" href="{{asset('realtors/vendor/datatables/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('realtors/asset/css/aos.css')}}">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{asset('realtors/vendor/swiper/swiper-bundle.min.css')}}">

  <!--Custom CSS-->
  <link rel="stylesheet" href="{{asset('realtors/asset/css/style.css')}}">
</head>

<body>
  <div class="page-wrapper">
    <header class="header1 header-index">
      <nav class="navbar navbar-expand-lg">
        <div class="container cosynav">
          <a class="navbar-brand text-light" href="/">
            <span class="d-flex align-items-center justify-content-center gap-2">
              <img src="{{asset('realtors/asset/img/logo.png')}}" width="50px" class="img-fluid" id="log" alt="logo">
              <span class="logo-text">
                <h5>Realtors</h5>
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
              <a class="nav-link {{ Request::segment(1)==="" ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  {{ Request::segment(1)==="about" ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1)==="faq" ? 'active' : '' }} getstarted-btn" href="faq">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1)==="contact" ? 'active' : '' }} getstarted-btn" href="contact">Contact Us</a>
            </li>
            <li class="nav-item nav-bg-ml d-none">
              <a href="agency-signup" class="nav-link primary-btn-outline btn-rounded">
                Sign Up as Agency
              </a>
            </li>
            <li class="nav-item d-none">
              <a href="signup" class="nav-link primary-btn btn-rounded">
                Sign Up as User
              </a>
            </li>
            <li class="nav-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" class="nav-link primary-btn btn-rounded">
                Join WaitList
              </a>
            </li>
          </ul>
          <!-- Harmburger menu icon -->
          <div class="menu-btn d-lg-none d-sm-block">
            <div class="menu-btn-burger"></div>
          </div>
        </div>
      </nav>

      <!--YEILD-->
      <main>
          @yield('contents')
      </main>


      <footer id="rcm-footer">
        <div class="container">
          <div class="row mb-4">
           <div class="col-md-4 mb-4">
            <div class="footer-logo">
              <img src="{{asset('realtors/asset/img/logo.png')}}" width="50px" alt="logo">
              <div class="logo-text">
                <h2 class="footer-intro">Realtors</h2>
                <h2>Circle</h2>
              </div>
            </div>
           </div>
           <div class="col-md-8 mb-4 d-none">
            <form action="">
              <div class="custom-input-group">
                <img src="{{asset('realtors/asset/img/icons/envelope-icon.png')}}">
                <input type="text" placeholder="Email Address">
                <button>Subscribe</button>
              </div>
            </form>
           </div>
          </div>
          <div class="row align-items-start mt-5">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-4 mb-4">
                  <h6 class="link-heading">Company</h6>
                  <ul class="footer-links">
                    <li><a href="/about">About</a></li>
                    {{-- <li><a href="#">Announcement</a></li>
                    <li><a href="#">Carrier</a></li> --}}
                  </ul>
                </div>
                <div class="col-sm-4 mb-4">
                  <h6 class="link-heading">stay in touch</h6>
                  <ul class="footer-links">
                    <li><a href="contact">Contact Us</a></li>
                    {{-- <li><a href="#">Blog</a></li> --}}
                    <li><a href="#">Support</a></li>
                  </ul>
                </div>
                <div class="col-sm-4 mb-4">
                  <h6 class="link-heading">Information</h6>
                  <ul class="footer-links">
                    <li><a href="faq">FAQs</a></li>
                    <li><a href="/terms">Terms Of Service</a></li>
                    <li><a href="/policy">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="socials pt-md-3">
                <a href="https://www.facebook.com/profile.php?id=61562754255807" target="_blank"><img src="{{asset('realtors/asset/img/icons/facebook-icon-white.png')}}" alt="Facebook logo"></a>
                <a href="https://www.instagram.com/realtors_circle/profilecard/?igsh=MTB3cXI5eXQ2eXQzYw==" target="_blank"><img src="{{asset('realtors/asset/img/icons/instagram-icon-white.png')}}" alt="Instagram logo"></a>
                {{-- <a href="javascript:;"><img src="{{asset('realtors/asset/img/icons/twitter-icon-white.png')}}" alt="Twitter logo"></a>
                <a href="javascript:;"><img src="{{asset('realtors/asset/img/icons/google-icon-white.png')}}" alt="Linkedin logo"></a> --}}
              </div>
            </div>
          </div>
        </div>
      </footer>


    <!--Join WaitList-->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
             <div class="modal-content">
                  <div class="modal-header d-block border-0 mb-0 pb-0 text-end">
                    <button data-bs-dismiss="modal" class="bg-transparent border-0"><i class="fa fa-times"></i></button>
                  </div>
                  <div class="modal-body mt-0 pt-0 rounded" style="max-height:100vh; overflow-y: auto;">
                   <form id="realtorForm" data-url="{{ route('submitForm') }}" method="POST">
                     @csrf
                    <h5 class="text-capitalize text-left fw-bold fs-3">Fill out the form to join our waitlist to give us more insight</h5>
                    <p class="text-left d-none">Fill out the form to join our waitlist to give us more insight</p>
                    <div class="form-group my-4">
                      <label for="">First Name</label>
                      <input type="text" name="fname" class="form-control" required>
                    </div>
                    <div class="form-group my-4">
                      <label for="">Last Name</label>
                      <input type="text" name="lname" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                      <label for="">Email Address</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                      <label for="">Phone Number</label>
                      <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                      <label for="">Type </label>
                      <select name="type" class="form-control" required>
                        <option>Realtor</option>
                        <option>Real Estate Agency</option>
                      </select>
                    </div>
                    <div class="form-group mb-4">
                      <label for="">Challenges as Realtor/Agency</label>
                      <textarea rows="4" name="challenges"  class="form-control" required id="" placeholder="Type here"></textarea>
                    </div>
                    <div class="form-group mb-4">
                      <label for="">Your expectation Realtor/Agency</label>
                      <textarea rows="4" name="expectation"  class="form-control" required id="" placeholder="Type here"></textarea>
                    </div>
                    <div id="formMessage"></div>
                    <button type="submit" class="new-discussion-btn btn-success w-100 mb-2"> Submit</button>
                   </form>
                  </div>
             </div>
        </div>
    </div>

    <div class="modal fade" id="appModal" tabindex="-1" aria-labelledby="appModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
             <div class="modal-body rounded">
               <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                   <img src="{{asset('realtors/asset/img/icons/verify-icon.png')}}" width="50px" alt="icon">
               </div>
                  <h3 class="text-center mb-2">Thank You!</h3>
                 <div class="text-center mb-2">
                   You have successfully registered for our waitlist.
                 </div>
                   <button data-bs-toggle="modal" data-bs-target="#appModal" type="button" class="new-discussion-btn w-100 mb-2">Go Back</button>
             </div>
        </div>
   </div>
  </div>


  </div>

  <!-- JS FILES -->
  <script src="{{asset('realtors/vendor/jquery/jQuery3.6.1.min.js')}}"></script>
  <script src="{{asset('realtors/vendor/popper/popper.js')}}"></script>
  <script src="{{asset('realtors/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('realtors/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('realtors/vendor/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('realtors/vendor/jquery-validate/jquery.validate.js')}}"></script>
  <script src="{{asset('realtors/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('realtors/asset/js/aos.js')}}"></script>
  <script src="{{asset('realtors/asset/js/plugins_init.js')}}"></script>
  <script src="{{asset('realtors/asset/js/main.js')}}"></script>
  <script>
    $(document).ready(function(){
        $('.accordion-button').on('click', function(){
          $(this).parents('.accordion-item').siblings('.accordion-item').find('.accordion-button').Class('collapsed');
          $(this).toggleClass('collapsed');
        });


        //Form Submitting
        $('#realtorForm').submit(function (e) {
            e.preventDefault(); // Prevent the default form submission

            let form = $(this);
            let url = form.data('url'); // Get the form action URL
            let formData = form.serialize(); // Serialize the form data

            $.ajax({
                url: url,
                method: "POST",
                data: formData,
                success: function (response) {

                  $('#realtorForm')[0].reset();
                     // Hide the contact modal
                    $('#contactModal').modal('hide'); 

                    // Show the success modal (appModal)
                    $('#appModal').modal('show');

                },
                error: function (xhr) {
                    // Display error message(s)
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = '<div class="alert alert-danger"><ul>';

                    $.each(errors, function (key, value) {
                        errorMessages += '<li>' + value + '</li>';
                    });

                    errorMessages += '</ul></div>';
                    $('#formMessage').html(errorMessages);
                }
            });
        });
    });
  </script>
</body>
</html>