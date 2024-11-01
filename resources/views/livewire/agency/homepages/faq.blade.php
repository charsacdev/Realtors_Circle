<div>
    @section('title', 'Faq')
    @section('company', $agency->company_name)
    <div class="divided-pg">
        <div class="row">
            <div class="col-sm-4 col-md-5 col-lg-4 overflow-hidden position-relative first-divide d-none d-sm-block">
                <img src="{{ asset('agency/asset/img/img-bg-12.png')}}" class="" alt="">
                <div class="social-ctn">
                    <div class="footer-logo sm">
                            <img src="{{ $settings->logo ?  asset('storage/uploads/' . $settings->logo) : asset('agency-dashboard/asset/img/default_logo.png')}}" width="30px" alt="logo">
                            <div class="logo-text">
                            <h2 class="footer-intro">{{ $agency->company_name }}</h2>
                            {{-- <h2>Haven</h2> --}}
                            </div>
                    </div>
                    <div class="social-link">
                            <div class="social-item">
                                <a href="{{ $settings->facebook_link }}"><img src="{{ asset('agency/asset/img/icons/facebook-icon-white.png') }}" alt=""></a>
                            </div>
                            <div class="social-item">
                                <a href="{{ $settings->instagram_link }}"><img src="{{ asset('agency/asset/img/icons/instagram-icon-white.png')}}" alt=""></a>
                            </div>
                            <div class="social-item">
                                <a href="{{ $settings->twitter_link }}"><img src="{{ asset('agency/asset/img/icons/twitter-icon-white.png')}}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-7 col-lg-8">
                <form action="" class="p-3 p-md-5">
                    <div class="faq-container">
                        @foreach ($faqs as $index => $faq)
                            <div class="qua-container">
                                <div class="question">
                                    <h6 class="question-title">{{ $faq->question }}</h6>
                                    <div>
                                        <div class="primary-color cursor-pdropdown text-end"><i class="fa fa-ellipsis-v"></i></div>
                                    </div>
                                </div>
                                <div class="answer {{ $index > 0 ? 'd-none' : '' }}">
                                    {{ $faq->response }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>