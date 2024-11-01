<div>
    @section('title', 'Realtors')
    @section('company', $agency->company_name)
        @include('agency.homepages.includes.header', ['realtors_hero' => true])

        <main>

            <!--*****************  Realtors section ***************** -->
            <section id="realtors">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-12 my-5 text-center">
                        <form wire:submit.prevent='searchFilter'>
                            <div class="custom-search-container">
                                <input type="text" wire:model="keyword" class="form-control" placeholder="Search realtors by name, username, city, and state">
                                <button class="new-discussion-btn btn-success">
                                     <i class="fa fa-search"></i> &nbsp;
                                     <span wire:loading>
                                        <i class="fa fa-spin fa-spinner"></i>
                                     </span>
                                    </button>
                            </div>
                        </form>
                    </div>
                    @foreach ($realtors as $realtor)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
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
            
    
            <!--*****************  Pagination section ***************** -->
            <div class="container">
                <div class="d-flex align-items-center justify-content-center my-5">
                    @if ($realtors->hasPages())
                        {{ $realtors->links() }}
                    @endif
                </div>
            </div>
    
        </main>

     @include('agency.homepages.includes.footer')
</div>
