<header class="header1 header-index">
    <nav class="navbar navbar-expand-lg">
      <div class="container cosynav">
        <a class="navbar-brand text-light" href="index.html">
          <span class="d-flex align-items-center justify-content-center gap-2">
            <img src="{{ $settings->logo ? asset('storage/uploads/' . $settings->logo) : asset('agency/asset/img/logo.png') }}" width="50px" class="img-fluid" id="log" alt="logo">
            {{-- <span class="logo-text">
              <h5>Success</h5>
              <h5>Haven</h5>
            </span> --}}
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
            <a class="nav-link {{ isRouteActive(['agency-home']) }}" href="{{ route('agency-home', $agency->slug) }}">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ isRouteActive(['agency-about']) }}" href="{{ route('agency-about', $agency->slug) }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ isRouteActive(['agency-properties', 'agency-properties.*', 'agency-property-description']) }}" href="{{ route('agency-properties', $agency->slug) }}">Assets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link getstarted-btn {{ isRouteActive(['agency-faq']) }}" href="{{ route('agency-faq', $agency->slug) }}">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link getstarted-btn {{ isRouteActive(['agency-contact']) }}" href="{{ route('agency-contact', $agency->slug) }}">Contact Us</a>
          </li>
          <li class="nav-item nav-bg-ml">
              <a href="{{ route('agency-realtor-application', $agency->slug) }}" class="nav-link primary-btn btn-rounded">
              Become a realtor
            </a>
          </li>
        </ul>
        <!-- Harmburger menu icon -->
        <div class="menu-btn d-lg-none d-sm-block">
          <div class="menu-btn-burger"></div>
        </div>
      </div>
    </nav>
      @if (@$home_hero)
        <!-- Home Hero -->
        <div class="hero" style="background-image: url({{ @$settings->banner_image ? asset('storage/uploads/' . @$settings->banner_image) :  asset('agency/asset/img/bg-img-4.png') }});">
          <div class="container pg-home">
            <h1>
              @if (@$settings)
                {{ @$settings->hero_text }}
                @else
                Welcome to Our  <br> Real Estate Agency
              @endif
             
            </h1>
            <a href="#properties">View Assets <img src="{{ asset('agency/asset/img/icons/circled-arrow-right.png') }}" alt=""></a>
          </div>
        </div>
        @elseif (@$property_hero)
          <!-- Properties Hero -->
          <div class="hero" style="background-image: url({{ @$settings->banner_image ? asset('storage/uploads/' . @$settings->banner_image) :  asset('agency/asset/img/bg-img-4.png') }});">
            <div class="container pg-ots"> 
              <h1>{{ @$settings->property_hero_text ? @$settings->property_hero_text : 'Explore our up-to-date list of available properties to get started' }}</h1>
              
            </div>
          </div>
      @elseif (@$realtor_hero)
        <!-- Realtor Hero -->
        <div class="hero realtor-hero">
          <div class="container">
            <div class="row align-items-md-baseline">
              <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <h1>I'm a Realtor</h1>
                <h3 class="mt-4">Let me Help you make the right property decision!</h3>
              </div>
              <div class="col-md-6 text-md-end" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('agency/asset/img/banner-img.png') }}"  height="auto" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      @elseif (@$realtors_hero)
        <!-- Realtors Hero -->
        <div class="hero" style="background-image: url({{ @$settings->banner_image ? asset('storage/uploads/' . @$settings->banner_image) :  asset('agency/asset/img/bg-img-4.png') }});">
          <div class="container pg-ots"> 
            <h1>{{ @$settings->realtor_hero_text ? @$settings->realtor_hero_text : 'A glance through our list of professional realtors is enough to make your day' }}</h1>
          </div>
        </div>
      @elseif (@$property_details_hero)
        <div class="hero plyr-hero">
          <div class="swiper property-swiper">
            <div class="swiper-wrapper">
              @foreach (@$videos as $index => $video)
                <div class="swiper-slide">
                    <video id="player{{ @$index + 1 }}" controls playsinline data-poster="{{ asset('storage/uploads/' . @$first_image)}}">
                    <source src="{{asset('storage/uploads/' . @$video)}}" class="h-100" type="video/mp4"></video>
                </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      @endif
</header>