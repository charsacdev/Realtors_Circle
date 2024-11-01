<div>
    @section('title', 'Properties')
    @section('company', 'Skyhouse')
    @include('agency.homepages.includes.header', ['property_hero' => true])
    <main>

        <!--*****************  Properties section ***************** -->
        <section id="properties">
        <div class="container">
            <div class="row mt-2">
                <div class="col-12 my-5 text-center">
                    <form wire:submit.prevent='searchFilter'>
                        <div class="custom-search-container">
                            <input type="text" wire:model="keyword" class="form-control" placeholder="Search for you desired property">
                            <button class="new-discussion-btn btn-success">
                                 <i class="fa fa-search"></i> &nbsp;
                                 <span wire:loading>
                                    <i class="fa fa-spin fa-spinner"></i>
                                 </span>
                                </button>
                        </div>
                    </form>
                </div>
                @foreach ($properties as $property)
                    @php
                        $user = \App\Models\User::where('id', $property->user_id)->first();
                        $images = json_decode($property->images)->images;
                        $first_image = $images[0];
                    @endphp
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="property-card">
                        <div class="img-ctn">
                            <img src="{{ $first_image ? asset('storage/uploads/' . $first_image) : asset('agency/asset/img/land-img.png') }}" alt="Property image">
                            <div class="img-des">{{ $property->name }}</div>
                            <div class="ctn-overlay">
                            <a href="{{ route('agency-property-description', ['slug' => $agency->slug, 'realtor_slug' => $user->slug, 'property_id' => $property->id]) }}">View</a>
                            </div>
                        </div>
                        <div class="card-description">
                            <div class="d-flex align-items-start justify-content-start gap-3 mt-3">
                            <img width="20px" src="{{ asset('agency/asset/img/icons/user-icon-blue.png') }}" alt="">
                            <a href="{{ route('agency-realtor-profile-information', ['slug' => $agency->slug, 'realtor_slug' => $user->slug]) }}" class="card-agent">{{ "$user->first_name $user->last_name" }}</a>
                            </div>
                            <div class="d-flex align-items-start justify-content-start gap-3 mt-3">
                            <img width="20px" src="{{ asset('agency/asset/img/icons/location-icon.png') }}" alt="">
                            <small class="card-location">{{ $property->location }}</small>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <div class="d-flex align-items-center justify-content-center my-5">
                @if ($properties->hasPages())
                    {{ $properties->links() }}
                @endif

            </div>
        </div>
        </section>


    </main>
     @include('agency.homepages.includes.footer')

</div>
