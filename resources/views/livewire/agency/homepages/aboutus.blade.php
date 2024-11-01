<div>
    @section('title', 'About Us')
    @section('company', $agency->company_name)
        @include('agency.homepages.includes.header')
        <main>

            <section id="about" class="about" data-aos="fade-up" data-aos-delay="500">
                <div class="container">
                    <h2 class="text-center section-sub-title">About {{ $agency->company_name }}</h2>

                    <div class="text-center about-logo-container mb-4">
                        <img src="{{ $settings->logo ? asset('storage/uploads/' . $settings->logo) :  asset('agency-dashboard/asset/img/default_logo.PNG') }}" class="img-fluid" width="150px" alt="logo">
                    </div>
                    <div class="container border-bottom pb-5">
                        {!! $settings->about !!}
                    </div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="container">
                    <h3 class="section-sub-title text-center">
                        Discover your dream home today!
                    </h3>
                    <h3 class="section-sub-title text-center">
                        Purchase now and secure your future!
                    </h3>
                    <div class="text-center mt-5">
                        <a href="{{ route('agency-properties', $agency->slug) }}" class="new-discussion-btn btn-success py-3 px-5">Our Properties</a>
                    </div>
                </div>
            </section>
        </main>
        @include('agency.homepages.includes.footer')

</div>
