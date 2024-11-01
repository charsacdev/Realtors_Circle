<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="footer-logo">
            <img src="{{ $settings->logo ? asset('storage/uploads/' . $settings->logo) : asset('agency/asset/img/logo.png') }}" width="50px" alt="logo">
            <div class="logo-text">
              <h2 class="footer-intro">{{ $agency->company_name }}</h2>
              {{-- <h2>Haven</h2> --}}
            </div>
          </div>
          <small class="d-none d-md-block">&copy;{{ date('Y') }} {{ $agency->company_name }}. All Rights Reserved.</small>
        </div>
        <div class="col-lg-1 d-none d-lg-block"></div>
        <div class="col-md-4 col-lg-3 mb-4">
          <h5 class="footer-middle-text">Discover real estate <br> properties seamlessly</h5>
          <small>email: {{ $agency->email }}</small>
        </div>
        <div class="col-lg-1 d-none d-lg-block"></div>
        <div class="col-md-4 col-lg-3 mb-0 mb-md-4">
          {{-- <form action="" class="footer-form">
            <div class="d-block d-md-flex align-items-center justify-content-between">
              <input type="text" name="email" placeholder="Email">
              <button class="sub-btn"><i class="fa fa-chevron-right"></i></button>
            </div>
          </form> --}}
          <div class="footer-socials">
            <a href="{{ $settings->facebook_link }}"><img src="{{ asset('agency/asset/img/icons/facebook-icon-white.png') }}" alt="facebook icon"></a>
            <a href="{{ $settings->instagram_link }}"><img src="{{ asset('agency/asset/img/icons/instagram-icon-alt.png') }}" alt="instagram icon"></a>
            <a href="{{ $settings->twitter_link }}"><img src="{{ asset('agency/asset/img/icons/twitter-icon-white.png') }}" alt="twitter icon"></a>
          </div>
        </div>
      </div>
      <small class="mt-4 d-block d-md-none">&copy;{{ date('Y') }} {{ $agency->company_name }}. All Rights Reserved.</small>
    </div>
  </footer>