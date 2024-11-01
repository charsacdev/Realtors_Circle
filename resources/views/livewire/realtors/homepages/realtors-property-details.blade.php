<div>
    @php
        $videos = json_decode($property->videos)->videos;
        $features = json_decode($property->features)->features;
        $images = json_decode($property->images)->images;
        $first_image = $images[0];
    @endphp
    <div class="hero plyr-hero" style="height:100vh;margin-top:-100px" wire:ignore>
        <div class="swiper property-swiper" style="margin-top:-100px;">
          <div class="swiper-wrapper">
            @foreach ($videos as $index => $video)
                <div class="swiper-slide">
                    <video id="player{{ $index + 1 }}" controls playsinline data-poster="{{ asset('storage/uploads/' . $first_image) }}">
                    <source src="{{asset('storage/uploads/' . $video)}}" class="h-100" type="video/mp4"></video>
                </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-7 order-2 order-md-1 order-lg-1">
                            <h2 class="section-title mb-4">{{ $property->name }}</h2>
                            <div class="d-flex align-items-start justify-content-start gap-3">
                                <img src="{{asset('agency/asset/img/icons/location-icon-gray.png')}}" alt="">
                                <span>{{ $property->location }}</span>
                            </div>
                            <div class="row property-dets">
                                <div class="col-6  col-lg-3 dets-item mb-4 mb-lg-0">
                                <small>Price</small>
                                <h5>N{{ number_format($property->amount) }}</h5>
                                </div>
                                <div class="col-6  col-lg-3 dets-item mb-4 mb-lg-0">
                                <small>Bedroom</small>
                                <h5>{{ $property->bedroom }} Bedrooms</h5>
                                </div>
                                <div class="col-6 col-lg-3 dets-item">
                                <small>Bathroom</small>
                                <h5>{{ $property->bathroom }} Bathrooms</h5>
                                </div>
                                <div class="col-6 col-lg-3 dets-item">
                                <small>Squarefoot</small>
                                <h5>{{ $property->squarefoot }}</h5>
                                </div>
                            </div>
                            <div class="property-tab ">
                                <div class="tab-content mb-5">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                        <h2 class="section-title mb-4">Overview</h2>
                                        <p>
                                            {{ $property->description }}
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
                            <a href="{{ route('realtor.profile-information', $user->slug) }}">
                                <div class="realtor-img">
                                    @if ($user->profile_image)
                                        <img src="{{asset('storage/uploads/'. $user->profile_image)}}" alt="Profile image">
                                        @else
                                        <img src="{{asset('agency/asset/img/user-img.png')}}" alt="Profile image">
                                    @endif
                                </div>
                            </a>
                            <div class="real-dets">
                                <h4 class="mb-0 pb-0">{{ "$user->first_name $user->last_name" }}</h4>
                                <div class="d-flex align-items-center justify-content-start gap-2">
                                <img src="{{asset('agency/asset/img/icons/location-icon-gray.png')}}" alt="">
                                <small>{{ "$user->city, $user->state" }}</small>
                                </div>
                            </div>
                            </div>
                            <a href="tel:{{ $user->phone_number }}">
                                <button class="primary-btn rounded d-flex align-items-center justify-content-cetner gap-3">
                                    <img src="{{asset('agency/asset/img/icons/phone-icon.png')}}" alt=""> 
                                    <span>Contact Realtor</span>
                                </button>
                            </a>
                            <h5 class="ta-tour">Taka a tour with agent</h5>
                            <small class="work-hour">Monday to Friday. 10:00am to 5:00pm</small>
                            <form wire:submit.prevent="saveBooking" class="book-form">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="" class="fw-bold">Firstname</label>
                                    <input type="text" wire:model="form.first_name" name="" id="">
                                    <div>
                                        @error('form.first_name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="fw-bold">Lastname</label>
                                    <input type="text" wire:model="form.last_name" name="" id="">
                                    <div>
                                        @error('form.last_name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Email</label>
                                        <input type="text" wire:model="form.email" class="form-control">
                                        <div>
                                            @error('form.email') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Phone Contact</label>
                                    <input type="text" wire:model="form.phone_number"  class="form-control">
                                    </div>
                                    <div>
                                        @error('form.phone_number') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                            </div>
                            <div class="mb-4">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Reason for Inspection</label>
                                        <textarea rows="3" wire:model="form.reason"  class="form-control"></textarea>
                                        <div>
                                            @error('form.reason') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                            </div>
                                <button class="primary-btn rounded w-100 d-flex align-items-center justify-content-center gap-2">
                                    <img src="{{asset('agency/asset/img/icons/checked-icon-solid.png')}}" alt="">
                                    <span>Book Appointment</span> &nbsp;
                                    <span wire:loading>
                                        <i class="fa fa-spin fa-spinner"></i>
                                    </span>
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
                        @foreach ($features as $index => $feature )
                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                <div class="feat-item mb-3">
                                    <img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" alt="">
                                    <h4>{{ $feature }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
           
           

            <section>
                <div class="container">
                    <h2 class="section-title mb-4">Photos</h2>
                    <div id="lightgallery" class="photos-ctn">
                           <!-- Hidden images that will show in LightGallery when clicked -->
                           @foreach ($images as $index => $image )
                            @if ($index == 1)
                            @else
                                <a href="{{ asset('agency/asset/img/property-img-2.png') }}" class="photo-card d-none">
                                    <img src="{{ asset('agency/asset/img/property-img-2.png') }}" alt="Image 2">
                                </a>
                            @endif
                           @endforeach

                            <!-- Display the main image with +15 overlay -->
                            <a href="{{ asset('storage/uploads/' . $first_image) }}" class="photo-card">
                                <img src="{{ asset('storage/uploads/' . $first_image) }}" alt="Image 1">
                                <div class="overlay">
                                    <span class="fs-20">+{{ count($images) - 1 }}</span>
                                </div>
                            </a>
                        
                     
                    </div>
                </div>
            </section>

            
            <section>
                <div class="container">
                    <h2 class="section-title mb-4">Recommended Properties</h2>
                    <div class="row mb-5">
                        @foreach ($otherProperties as $property)
                        @php
                             $images = json_decode($property->images)->images;
                             $first_image = $images[0];
                        @endphp
                            <div class="col-lg-4 col-md-6  mb-4">
                                <div class="property-recard">
                                    <div class="img-ctn">
                                    <img src="{{ $first_image ? asset('storage/uploads/' . $first_image) : asset('agency/asset/img/property-img-2.png')}}" alt="">
                                    </div>
                                    <div class="d-flex align-items-start justify-content-between mt-4">
                                    <div>
                                        <h5>{{ "$property->location" }}</h5>
                                        {{-- <small>4 Bedroom Flat</small> --}}
                                    </div>
                                    <h5>N{{ number_format($property->amount) }}</h5>
                                    </div>
                                    <a href="{{ route('realtor-property-details', ['slug' => $user->slug, 'property_id' => $property->id]) }}" class="prop-btn mt-4"> More Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
      </main>


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
        });
    </script>
</div>
