<div>
    @section('title', 'Properties')
    @section('company', 'Skyhouse')
    @include('agency.homepages.includes.header', ['realtor_hero' => true])
    <main>
        <section id="realtor-sec">
        <div class="container">
            <div class="row">
            <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="rtr-card">
                    <div class="img-ctn">
                      @if ($user->profile_image)
                        <img src="{{asset('storage/uploads/' . $user->profile_image)}}" alt="Profile image">
                      @else
                        <img src="{{asset('agency-dashboard/asset/img/user-img.png')}}" alt="Profile image">
                      @endif
                    </div>
                    <h3 class="name">{{ "$user->first_name $user->last_name" }} <img src="{{asset('agency/asset/img/icons/verify-icon-blue.png')}}" alt=""></h3>
                    <small class="hash">{{ "@$user->username" }}</small>
                    {{-- <small class="exp my-4">5 years in real estate, <br> sold over 500+</small> --}}
                    <div class="d-flex align-items-start justify-content-center gap-2 mb-2">
                      <img width="15px" src="{{asset('agency/asset/img/icons/location-icon-gray.png')}}" alt="">
                      <small class="location">{{ "$user->city, $user->state" }}</small>
                    </div>
                    <div class="d-flex align-items-start justify-content-center gap-2 mb-5 pb-2">
                      <img src="{{asset('agency/asset/img/icons/envelope-icon-gray.png')}}" width="15px" alt="">
                      <small class="email">{{ $user->email }}</small>
                    </div>
  
                    <a href="tel:{{ $user->phone_number }}">
                      <button class="primary-btn primary-btn-sm w-100 mb-5">
                          <img src="{{asset('agency/asset/img/icons/phone-icon.png')}}" alt="">
                          <span>Contact Realtor</span>
                      </button>
                    </a>
    
                    <h5 class="soch">social media handles</h5>
                    <div class="socials">
                      <a href="{{ $user->facebook_link }}" class="items">
                        <div class="d-flex align-items-center justify-content-start gap-2">
                          <img src="{{asset('agency/asset/img/icons/facebook-icon.png')}}" alt="">
                          <span>Facebook</span>
                        </div>
                        <img src="{{asset('agency/asset/img/icons/link-icon.png')}}" alt="">
                      </a>
                      <a href="{{ $user->instagram_link }}" class="items">
                        <div class="d-flex align-items-center justify-content-start gap-2">
                          <img src="{{asset('agency/asset/img/icons/instagram-icon.png')}}" alt="">
                          <span>Instagrm</span>
                        </div>
                        <img src="{{asset('agency/asset/img/icons/link-icon.png')}}" alt="">
                      </a>
                      <a href="{{ $user->whatsapp_link }}" class="items">
                        <div class="d-flex align-items-center justify-content-start gap-2">
                          {{-- <img src="{{asset('agency/asset/img/icons/whatsapp-icon.png')}}" alt=""> --}}
                          <svg class="svg-inline--fa fa-whatsapp fa-w-14" style="color: black; margin-right:7px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                          </svg>
                          <span>WhatsApp</span>
                        </div>
                        <img src="{{asset('agency/asset/img/icons/link-icon.png')}}" alt="">
                      </a>
                    </div>
                  </div>
            </div>
            <div class="col-md-7 col-lg-8 pl-lg-3 mt-5" data-aos="fade-up" data-aos-delay="500">
                <div class="property-tab realtor-tab">
                    <ul class="nav nav-tabs align-items-center justify-content-start gap-4">
                        <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#properties"> Properties</a>
                        </li>
                    </ul>
                <div class="tab-content my-5">
                    <div class="tab-pane fade show active" id="properties" role="tabpanel">
                        <div class="row">
                            @if ($properties)
                            @foreach ($properties as $property)
                                @php
                                    $images = json_decode($property->images)->images;
                                    $first_image = $images[0];
                                    $videos = json_decode($property->videos)->videos;
                                    $first_video = $videos[0]
                                @endphp
                              <div class="col-lg-6 mb-4">
                                <div class="tab-card">
                                  <div class="prop-vid">
                                    <video id="player{{ $loop->index + 1 }}" controls playsinline data-poster="{{$first_image ? asset('storage/uploads/' . $first_image) : asset('agency/asset/img/property-img-2.png')}}">
                                      <source src="{{ $first_video ? asset('storage/uploads/' . $first_video) : asset('agency/asset/video/home-video2.mp4')}}" class="h-100" type="video/mp4"></video>
                                  </div>
                                  <a href="{{ route('realtor-property-details', ['slug' => $user->slug, 'property_id' => $property->id]) }}">
                                    <h5 class="prop-name">
                                        {{ $property->name }}
                                    </h5>
                                  </a>
                                  <a href="{{ route('realtor-property-details', ['slug' => $user->slug, 'property_id' => $property->id]) }}">
                                    <div class="d-flex align-items-start justify-content-start gap-2">
                                        <img src="{{asset('agency/asset/img/icons/location-icon-gray.png')}}" alt="">
                                        <span>{{ $property->location }}</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              
                            @endforeach
                          @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <section id="realtor-anay">
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-lg-3 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="500">
                <div class="rtr-procard">
                <div class="img-ctn">
                    <div class="img">
                    <img src="{{ asset('agency/asset/img/user-img.png') }}" alt="">
                    </div>
                    <small class="user-sub">Pro</small>
                </div>
                <h4>Upgrade to Pro</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, quibusdam.</p>
                <a href="javascript:;" class="primary-btn rounded">Get Started</a>
                </div>
            </div>
            <div class="col-md-8 col-lg-9" data-aos="fade-up" data-aos-delay="500">
                <div class="swiper analy-swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="reanaly-card">
                        <div class="img-ctn">
                            <img src="{{asset('agency/asset/img/verified.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-3">
                          <div class="img">
                            <img src="{{asset('agency/asset/img/icons/status-up-green-icon.png')}}" alt="">
                            
                          </div>
                          <h5 class="title">Get Verified Badge</h5>
                        </div>
                        <p>
                          Don't want to wait months to get verified ?,verified agents builds more trust,
                          get verified today.
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="reanaly-card">
                        <div class="img-ctn">
                            <img src="{{asset('agency/asset/img/ai.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-3">
                          <div class="img">
                            <img src="{{asset('agency/asset/img/icons/status-up-green-icon.png')}}" alt="">
                          </div>
                          <h5 class="title">Ai Features</h5>
                        </div>
                        <p>
                          A smart and custom Ai ready avaliable to engage client's in your absence,
                          fine tune and twist how your Ai respond to your potential and existing clients.
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="reanaly-card">
                        <div class="img-ctn">
                          <img src="{{asset('agency/asset/img/insight.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-3">
                          <div class="img">
                            <img src="{{asset('agency/asset/img/icons/status-up-green-icon.png')}}" alt="">
                          </div>
                          <h5 class="title">Client's Insight</h5>
                        </div>
                        <p>
                          Sales with insight on the client's needs is terrible, get  an insight on client's need
                          on every of your listing.
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="reanaly-card">
                        <div class="img-ctn">
                            <img src="{{asset('agency/asset/img/chatmessage.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-3">
                          <div class="img">
                            <img src="{{asset('agency/asset/img/icons/status-up-green-icon.png')}}" alt="">
                          </div>
                          <h5 class="title">Messaging </h5>
                        </div>
                        <p>
                          Message all Existing Client on new client's without the stress of handling sending broadcast message using
                          traditional method, build credibility today!
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="reanaly-card">
                        <div class="img-ctn">
                            <img src="{{asset('agency/asset/img/managecl.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-3">
                          <div class="img">
                            <img src="{{asset('agency/asset/img/icons/status-up-green-icon.png')}}" alt="">
                          </div>
                          <h5 class="title">Manage Client's</h5>
                        </div>
                        <p>
                          Manage all client's send messages using our whatsapp or email channels, make more sales by reaching to existing client 
                          and new clients.
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="reanaly-card">
                        <div class="img-ctn">
                            <img src="{{asset('agency/asset/img/performance.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-start gap-3 mb-3">
                          <div class="img">
                            <img src="{{asset('agency/asset/img/icons/status-up-green-icon.png')}}" alt="">
                          </div>
                          <h5 class="title">Track Performance</h5>
                        </div>
                        <p>
                          Track Performance see your growth, in the number of client's,engagement and pages visit 
                          have a better overview a decrease or increase in performance.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </section>
        <!--*****************  Testimonials section ***************** -->
        @if (!empty($user->testimonials))
        <section id="testimonials" class="realtor-revs mb-5">
          <div class="container">
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="500">
              client reviews
            </h2>
            <p class="fs-16 text-center mb-5" data-aos="fade-up" data-aos-delay="500">
              What our customers have to say about us
            </p>
            <div class="cards" data-aos="fade-up" data-aos-delay="500">
              <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                  @foreach ($user->testimonials as $testimonial)
                    <div class="swiper-slide">
                      <div class="testimonial-card">
                        <div class="img-ctn"><img src="{{asset('storage/uploads/' . $testimonial->client_image)}}" alt=""></div>
                        <h4 class="tc-name">{{ $testimonial->client_name }} </h4>
                        <div class="tc-stars">
                          <img src="{{$testimonial->client_rating >= 1 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                          <img src="{{$testimonial->client_rating >= 2 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                          <img src="{{$testimonial->client_rating >= 3 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                          <img src="{{$testimonial->client_rating >= 4 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                          <img src="{{$testimonial->client_rating >= 5 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                        </div>
                        <div class="text-center mb-2"><img width="30px" src="{{asset('agency/asset/img/icons/quotation-icon.png')}}" alt="">
                        </div>
                        <p class="tc-description text-center fs-16">
                          {{ $testimonial->client_review }}
                        </p>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center gap-4 pagination mt-5">
                <div class="testimonial-prev testimonial-btn"><i class="fa fa-arrow-left"></i></div>
                <div class="testimonial-next testimonial-btn"><i class="fa fa-arrow-right"></i></div>
              </div>
            </div>
          </div>
        </section>
       @endif

      <section class="py-5 mb-5" style="background-color: var(--primary-blue);">
        <div class="container">
          <div class="row align-items-center py-5">
            <div class="col-12 mb-5 mb-md-0">
              <h2 class="section-sub-title text-light text-center mb-5">
                Schedule an appointment to view our properties or email us your question.
              </h2>
            </div>
            {{-- <div class="col-md-6 mb-5 mb-md-0 text-center">
              <button class="new-discussion-btn btn-success" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Agent</button>
            </div> --}}
            <div class="col-12">
              <form wire:submit.prevent="saveBooking">
                @csrf

                <div class="row">
                  <div class="col-sm-6 form-group mb-4">
                    <label for="" class="text-light mb-2">Firstname</label>
                    <input type="text" name="first_name" wire:model="form.first_name" class="form-control"> 
                    <div>
                      @error('form.first_name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-6 form-group mb-4">
                    <label for="" class="text-light mb-2">Lastname</label>
                    <input type="text" name="first_name" wire:model="form.last_name" class="form-control"> 
                    <div>
                      @error('form.last_name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-6 form-group mb-4">
                    <label for="" class="text-light mb-2">Email</label>
                    <input type="text" name="first_name" wire:model="form.email" class="form-control"> 
                    <div>
                      @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-6 form-group mb-4">
                    <label for="" class="text-light mb-2">Phone Number</label>
                    <input type="text" name="phone_number" wire:model="form.phone_number" class="form-control"> 
                    <div>
                      @error('form.phone_number') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label for="" class="text-light mb-2">Reason</label>
                    <textarea name="" id="" wire:model="form.reason" class="form-control" rows="5"></textarea>
                    <div>
                      @error('form.reason') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                </div>
                <button  class="new-discussion-btn btn-success w-100 mb-2">
                  Submit &nbsp;
                  <span wire:loading>
                    <i class="fa fa-spin fa-spinner"></i>
                  </span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    @include('agency.homepages.includes.footer')
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

