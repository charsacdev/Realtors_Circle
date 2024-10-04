<div>
    <div class="hero plyr-hero" style="height:100vh;margin-top:-100px">
        <div class="swiper property-swiper" style="margin-top:-100px;">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <video id="player1" controls playsinline data-poster="{{asset('agency/asset/img/video_thumbnail.jpg')}}">
                <source src="{{asset('agency/asset/video/home-video2.mp4')}}" class="h-100" type="video/mp4"></video>
            </div>
            <div class="swiper-slide">
              <video id="player2" controls playsinline data-poster="{{asset('agency/asset/img/video_thumbnail.jpg')}}">
                <source src="{{asset('agency/asset/video/home-video3.mp4')}}" class="h-100" type="video/mp4"></video>
            </div>
            <div class="swiper-slide">
              <video id="player3" controls playsinline data-poster="{{asset('agency/asset/img/video_thumbnail.jpg')}}">
                <source src="{{asset('agency/asset/video/home-video.mp4')}}" class="h-100" type="video/mp4"></video>
            </div>
            <div class="swiper-slide">
              <video id="player4" controls playsinline data-poster="{{asset('agency/asset/img/video_thumbnail.jpg')}}">
                <source src="{{asset('agency/asset/video/home-video2.mp4')}}" class="h-100" type="video/mp4"></video>
            </div>
            <div class="swiper-slide">
              <video id="player5" controls playsinline data-poster="{{asset('agency/asset/img/video_thumbnail.jpg')}}">
                <source src="{{asset('agency/asset/video/home-video3.mp4')}}" class="h-100" type="video/mp4"></video>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <main>
            <section>
                <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-7 order-2 order-md-1 order-lg-1">
                    <h2 class="section-title mb-4">3 Bedroom flat, Detachable</h2>
                    <div class="d-flex align-items-start justify-content-start gap-3">
                        <img src="{{asset('agency/asset/img/icons/location-icon-gray.png')}}" alt="">
                        <span>Oppposie Dreamlink, Mile 50 Abakaliki, Ebonyi State</span>
                    </div>
                    <div class="row property-dets">
                        <div class="col-6  col-lg-3 dets-item mb-4 mb-lg-0">
                        <small>Price</small>
                        <h5>N120,000,000</h5>
                        </div>
                        <div class="col-6  col-lg-3 dets-item mb-4 mb-lg-0">
                        <small>Bedroom</small>
                        <h5>3 Bedrooms</h5>
                        </div>
                        <div class="col-6 col-lg-3 dets-item">
                        <small>Bathroom</small>
                        <h5>2 Bathrooms</h5>
                        </div>
                        <div class="col-6 col-lg-3 dets-item">
                        <small>Squarefoot</small>
                        <h5>590ft - 1319ft</h5>
                        </div>
                    </div>
                    <div class="property-tab ">
                        <div class="tab-content mb-5">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                <h2 class="section-title mb-4">Overview</h2>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt nobis nihil autem nam quam. Quam molestias, suscipit numquam nostrum modi adipisci, fugit perspiciatis repudiandae nemo dolorum qui doloribus officia quidem!
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-1 order-lg-2"></div>
                    <div class="col-md-5 col-lg-4 order-1 order-md-2 order-lg-3 mb-4">
                    <div class="prop-realtor-card">
                        <h4 class="title mb-4">Realtor Details</h4>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-4">
                        <a href="/realtor/profile-information">
                            <div class="realtor-img">
                            <img src="{{asset('agency/asset/img/user-img.png')}}" alt="">
                            </div>
                        </a>
                        <div class="real-dets">
                            <h4 class="mb-0 pb-0">John Akachukwu</h4>
                            <div class="d-flex align-items-center justify-content-start gap-2">
                            <img src="{{asset('agency/asset/img/icons/location-icon-gray.png')}}" alt="">
                            <small>Abakaliki, Ebonyi State</small>
                            </div>
                        </div>
                        </div>
                        <a href="tel:+2348122656972">
                            <button class="primary-btn rounded d-flex align-items-center justify-content-cetner gap-3">
                                <img src="{{asset('agency/asset/img/icons/phone-icon.png')}}" alt=""> 
                                <span>Contact Realtor</span>
                            </button>
                        </a>
                        <h5 class="ta-tour">Taka a tour with agent</h5>
                        <small class="work-hour">Monday to Friday. 10:00am to 5:00pm</small>
                        <form action="" class="book-form">
                        <div class="form-group mb-4">
                            <label for="" class="fw-bold">Select Date</label>
                            <input type="date" name="" id="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="fw-bold">Available Time</label>
                            <select name="" id="">
                            <option value="">10:00am</option>
                            <option value="">10:30am</option>
                            <option value="">11:00am</option>
                            <option value="">11:30am</option>
                            <option value="">12:00pm</option>
                            <option value="">12:30pm</option>
                            <option value="">01:00pm</option>
                            <option value="">01:30pm</option>
                            <option value="">02:00pm</option>
                            <option value="">02:30pm</option>
                            <option value="">03:00pm</option>
                            <option value="">03:30pm</option>
                            <option value="">04:00pm</option>
                            <option value="">04:30pm</option>
                            <option value="">05:00pm</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                 <label for="" class="fw-bold">Your Name</label>
                                 <input type="text" placeholder="Faruoke Linus" class="form-control">
                            </div>
                       </div>
                       <div class="mb-4">
                        <div class="form-group">
                             <label for="" class="fw-bold">Phone Contact</label>
                             <input type="number" placeholder="0812265....." class="form-control">
                            </div>
                       </div>
                       <div class="mb-4">
                            <div class="form-group">
                                <label for="" class="fw-bold">Reason for Inspection</label>
                                <textarea rows="3" placeholder="I want to see property before buying."  class="form-control"></textarea>
                            </div>
                       </div>
                        <button type="button" data-toggle="modal" data-target="#successModal" class="primary-btn rounded w-100 d-flex align-items-center justify-content-center gap-2">
                            <img src="{{asset('agency/asset/img/icons/checked-icon-solid.png')}}" alt="">
                            <span>Book Appointment</span>
                        </button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <section>
                <div class="container">
                <h2 class="section-title mb-4">Location</h2>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d359071.2396284959!2d7.887972914614788!3d6.101831040645227!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1718576691439!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>
            </section>
            
            <section class="mx-1">
                <div class="container">
                <h2 class="section-title mb-4">Features</h2>
                <div class="row prop-feature">
                    <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="feat-item">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                        <h4>Biogas</h4>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="feat-item">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                        <h4>Recreational Center</h4>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="feat-item">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                        <h4>Greenry</h4>
                    </div>
                    </div>
                    <div class="my-5 d-none d-md-block"></div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="feat-item">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                        <h4>Solar Energy</h4>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
                    <div class="feat-item">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                        <h4>Perieter Fencing</h4>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                    <div class="feat-item">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                        <h4>Event Arena</h4>
                    </div>
                    </div>
                </div>
                </div>
            </section>
           
           

            <section>
                <div class="container">
                    <h2 class="section-title mb-4">Photos</h2>
                    <div id="lightgallery" class="photos-ctn">
                           <!-- Hidden images that will show in LightGallery when clicked -->
                           <a href="{{ asset('agency/asset/img/property-img-2.png') }}" class="photo-card d-none">
                                <img src="{{ asset('agency/asset/img/property-img-2.png') }}" alt="Image 2">
                            </a>
                            <a href="{{ asset('agency/asset/img/bg-img.png') }}" class="photo-card d-none">
                                <img src="{{ asset('agency/asset/img/bg-img.png') }}" alt="Image 3">
                            </a>
                            <a href="{{ asset('agency/asset/img/property-img.png') }}" class="photo-card d-none">
                                <img src="{{ asset('agency/asset/img/property-img.png') }}" alt="Image 4">
                            </a>

                            <!-- Display the main image with +15 overlay -->
                            <a href="{{ asset('agency/asset/img/property-img.png') }}" class="photo-card">
                                <img src="{{ asset('agency/asset/img/property-img.png') }}" alt="Image 1">
                                <div class="overlay">
                                    <span class="fs-20">+15</span>
                                </div>
                            </a>
                        
                     
                    </div>
                </div>
            </section>

            
            <section>
                <div class="container">
                <h2 class="section-title mb-4">Recommended Properties</h2>
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6  mb-4">
                    <div class="property-recard">
                        <div class="img-ctn">
                        <img src="{{asset('agency/asset/img/property-img-2.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-4">
                        <div>
                            <h5>Waterworks, Abakaliki</h5>
                            <small>4 Bedroom Flat</small>
                        </div>
                        <h5>N200m</h5>
                        </div>
                        <a href="property-description.html" class="prop-btn mt-4"> More Details</a>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6  mb-4">
                    <div class="property-recard">
                        <div class="img-ctn">
                        <img src="{{asset('agency/asset/img/property-img-2.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-4">
                        <div>
                            <h5>Waterworks, Abakaliki</h5>
                            <small>4 Bedroom Flat</small>
                        </div>
                        <h5>N200m</h5>
                        </div>
                        <a href="property-description.html" class="prop-btn mt-4"> More Details</a>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6  mb-4">
                    <div class="property-recard">
                        <div class="img-ctn">
                        <img src="{{asset('agency/asset/img/property-img-2.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-4">
                        <div>
                            <h5>Waterworks, Abakaliki</h5>
                            <small>4 Bedroom Flat</small>
                        </div>
                        <h5>N200m</h5>
                        </div>
                        <a href="property-description.html" class="prop-btn mt-4"> More Details</a>
                    </div>
                    </div>
                </div>
                </div>
            </section>
      </main>


      <!--*************Success Modal**************-->
      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
             <div class="modal-content">
                  <div class="modal-body rounded">
                    <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                        <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" width="70px" alt="icon">
                    </div>
                       <h3 class="text-center mb-2">Success!</h3>
                      <div class="text-center mb-4">
                       Your request has been sent successfuly.
                      </div>
                        <a href="javascript:;" type="button" data-bs-dismiss="modal" class="new-discussion-btn btn-success w-100 mb-2">Okay</a>
                  </div>
             </div>
        </div>
      </div>


       <!-- GetButton.io widget -->
       <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+2348122656972", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

      <script>
        document.addEventListener("DOMContentLoaded", function() {
            //Light Gallery
            lightGallery(document.getElementById('lightgallery'), {
                thumbnail: true,
                speed: 500,
            });

            //Modal
            var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
                keyboard: false 
                });
                myModal.show();
        });
    </script>
</div>
