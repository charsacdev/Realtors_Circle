    <div class="page-wrapper">
        @section('title', 'Home')
        @section('company', $agency->company_name)

        @include('agency.homepages.includes.header', ['home_hero' => true])
        @include('agency.homepages.includes.index-main')
        @include('agency.homepages.includes.footer')
    </div>
