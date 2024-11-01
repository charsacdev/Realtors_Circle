<main>
  <!--*****************  Properties section ***************** -->
  <section id="properties">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between" data-aos="fade-up" data-aos-delay="500">
        <h2 class="section-title">Properties</h2>
        <a class="see-more-btn" href="{{ route('agency-properties', $agency->slug) }}">See more</a>
      </div>
      <div class="row mt-2">

        <!--************** Agency Properties  ********************************-->
        @foreach ($properties as $property)
          @php
            $images = json_decode($property->images)->images;
            $first_image = $images[0];
          @endphp
          <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="property-card">
              <div class="img-ctn">
                <img src="{{ asset('storage/uploads/' . $first_image) }}" alt="Property image">
                <div class="img-des">{{ $property->name }}</div>
                <div class="ctn-overlay">
                  <a href="{{ route('agency-property-description', ['slug' => $agency->slug, 'realtor_slug' => $agency->slug, 'property_id' => $property->id]) }}">View</a>
                </div>
              </div>
              <div class="card-description">
                <div class="d-flex align-items-start justify-content-start gap-3 mt-3">
                  <img width="20px" src="{{ asset('agency/asset/img/icons/user-icon-blue.png') }}" alt="">
                  <a href="{{ route('agency-realtor-profile-information', ['slug' => $agency->slug, 'realtor_slug' => $agency->slug]) }}" class="card-agent">{{ "$agency->first_name $agency->last_name" }}</a>
                </div>
                <div class="d-flex align-items-start justify-content-start gap-3 mt-3">
                  <img width="20px" src="{{ asset('agency/asset/img/icons/location-icon.png') }}" alt="">
                  <small class="card-location">{{ "$property->location, $property->country" }}</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <!--************** Agency Realtors Properties  ********************************-->
        @foreach ($realtors_properties as $property)
          @php
            $images = json_decode($property->images)->images;
            $first_image = $images[0];
            $realtor = \App\Models\User::where('id', $property->user_id)->first();
          @endphp
          <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="property-card">
              <div class="img-ctn">
                <img src="{{ asset('storage/uploads/' . $first_image) }}" alt="Property image">
                <div class="img-des">{{ $property->name }}</div>
                <div class="ctn-overlay">
                  <a href="{{ route('agency-property-description', ['slug' => $realtor->slug, 'realtor_slug' => $realtor->slug, 'property_id' => $property->id]) }}">View</a>
                </div>
              </div>
              <div class="card-description">
                <div class="d-flex align-items-start justify-content-start gap-3 mt-3">
                  <img width="20px" src="{{ asset('agency/asset/img/icons/user-icon-blue.png') }}" alt="">
                  <a href="{{ route('agency-realtor-profile-information', ['slug' => $agency->slug, 'realtor_slug' => $realtor->slug]) }}" class="card-agent">{{ "$realtor->first_name $realtor->last_name" }}</a>
                </div>
                <div class="d-flex align-items-start justify-content-start gap-3 mt-3">
                  <img width="20px" src="{{ asset('agency/asset/img/icons/location-icon.png') }}" alt="">
                  <small class="card-location">{{ "$property->location, $property->country" }}</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  <!--*****************  Realtors section ***************** -->
  <section id="realtors">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between" data-aos="fade-up" data-aos-delay="500">
        <h2 class="section-title">Realtors</h2>
        <a class="see-more-btn" href="{{ route('agency-realtors', $agency->slug) }}">See more</a>
      </div>
      <div class="row mt-2">
        @foreach ($realtors as $realtor)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="500">
          <div class="realtor-card border">
            <div class="img-ctn">
              <img src="{{ $realtor->profile_image ? asset('storage/uploads/' . $realtor->profile_image) : asset('agency/asset/img/default-user.png') }}" alt="Realtor Image">
            </div>
            <small class="realtor">{{ "$realtor->first_name $realtor->last_name" }}</small>
            <small class="realtor-company">{{ $agency->company_name }} Realtor</small>
          </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- <!--*****************  About section ***************** -->
  <section id="about" data-aos="fade-up" data-aos-delay="500">
    <div class="container">
      <h2 class="section-title text-center">
        about us
      </h2>
      <p class="fs-16 text-center">
        Success Haven is a real estate agency committed to providing you with the best real estate properties across
        the globe. Our team of exceptional realtors are ever ready and committed to giving you the best deals on real estate properties.
      </p>
    </div>
  </section> --}}

  <!--*****************  Team section ***************** -->
  <section id="team">
    <div class="container">
      <h2 class="section-title text-center" data-aos="fade-up" data-aos-delay="500">
        the team
      </h2>
      <p class="fs-16 text-center" data-aos="fade-up" data-aos-delay="500">
        Meet the minds behind the progress of {{ $agency->company_name }}
      </p>
      <div class="row mt-2 justify-content-center">
        @foreach ($teams as $team)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="500">
          <div class="realtor-card">
            <div class="img-ctn">
              <img src="{{ $team->team_image ? asset('storage/uploads/' . $team->team_image) : asset('agency/asset/img/default-user.png') }}" alt="">
            </div>
            <small class="realtor fs-18">{{ $team->team_name }}</small>
            <small class="realtor-company fs-18">{{ $team->team_position }}</small>
          </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  <!--*****************  Testimonials section ***************** -->
  <section id="testimonials">
    <div class="container">
      <h2 class="section-title text-center" data-aos="fade-up" data-aos-delay="500">
        testimonials
      </h2>
      <p class="fs-16 text-center mb-5" data-aos="fade-up" data-aos-delay="500">
        What our customers have to say about us
      </p>
      <div class="cards" data-aos="fade-up" data-aos-delay="500">
        <div class="swiper testimonial-swiper">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
              <div class="swiper-slide">
                <div class="testimonial-card">
                  <div class="img-ctn"><img src="{{ asset('storage/uploads/' . $testimonial->client_image) }}" alt=""></div>
                  <h4 class="tc-name">{{ $testimonial->client_name }}</h4>
                  <div class="tc-stars">
                    <img src="{{ $testimonial->client_rating >= 1 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="">
                    <img src="{{ $testimonial->client_rating >= 2 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="">
                    <img src="{{ $testimonial->client_rating >= 3 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="">
                    <img src="{{ $testimonial->client_rating >= 4 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="">
                    <img src="{{ $testimonial->client_rating >= 5 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="">
                  </div>
                  <div class="text-center mb-2"><img width="30px" src="{{ asset('agency/asset/img/icons/quotation-icon.png') }}" alt="">
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

    <!--*****************  Frequently asked questions section ***************** -->
  <section id="faq" data-aos="fade-up" data-aos-delay="500">
    <div class="container">
      <h2 class="section-title text-center">
        frequently asked questions
      </h2>
      <p class="fs-16 text-center mb-5">
        Everything you need to know about Success Haven
      </p>
      <div class="row mt-5">
        <div class="accordion" id="accordion-faq">
          @foreach ($faqs as $index => $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $index }}">
                    <a href="#" class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                        How to become a realtor?
                        <span class="toggle-close"></span>
                    </a>
                </h2>
                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordion-faq">
                    <div class="accordion-body">
                        <p class="m-b0 accordion-content">Becoming a Success Haven realtor is as easy as click on "Apply to become a realtor" button located in the header of this website and 
                          answering the questions that'll be presented to you in the application form that follows.
                        </p>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
</main>