<div>
    <section id="cta">
        <div class="container">
          
          <div class="row align-items-stretch">
            <div class="col-12">
              <div class="text-end my-3">
                <form wire:submit.prevent='searchFilter'>
                    <div class="custom-search-container">
                        <input type="text" wire:model="keyword" class="form-control" placeholder="Search by name, city and state">
                        <button class="new-discussion-btn btn-success">
                             <i class="fa fa-search"></i> &nbsp;
                             <span wire:loading>
                                <i class="fa fa-spin fa-spinner"></i>
                             </span>
                            </button>
                    </div>
                </form>
              </div>
            </div>
            <div class="col-12 mt-5 mb-3">
                <h4 class="section-title">Explore Agencies and Realtors</h4>
            </div>
            @if($users)
                @foreach ($users as $user)
                    @if ($user->role != 'admin')
                    
                        @php
                            $role = $user->role;
                            if($role == 'agency'){
                                $settings = json_decode(@$user->settings->settings);
                                $logo = @$settings->logo;
                            }
                            
                        @endphp
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="ag_ret_card">
                            <div class="logo-container">
                            @if ($role == 'realtor')
                                @unless ($user->profile_image)
                                    <img src="{{ asset('agency-dashboard/asset/img/user-img.png') }}" class="w-100 img-fluid" alt="">
                                @else
                                    <img src='{{ asset("storage/uploads/$user->profile_image") }}' class="w-100 img-fluid" alt="">
                                    
                                @endunless
                            @else
                                @unless ($logo)
                                <img src="{{ asset('agency-dashboard/asset/img/default_logo.png') }}" class="w-100 img-fluid" alt="">
                                @else
                                <img src='{{ asset("storage/uploads/$logo") }}' class="w-100 img-fluid" alt="">
                                @endunless
                            @endif
                            </div>
                            <div class="d-flex flex-column justify-content-between flex-grow-1">
                            <h5 class="com_nam">
                                @if ($role == 'agency')
                                    {{ $user->company_name }}
                                @else
                                    {{ "$user->first_name $user->last_name" }}
                                @endif
                            </h5>
                            <div class="us_rl mb-2">
                                <span>{{ Str::title($user->role) }}</span>
                            </div>
                            <small class="com_loc">
                                {{ "$user->city, $user->state" }}
                            </small>
                            @if($role == 'realtor')
                                <a href="{{ route('realtor.profile-information', $user->slug) }}" class="new-discussion-btn btn-success">Visit Profile Page</a>
                            @else
                                <a href="{{ route('agency-home', $user->slug) }}" class="new-discussion-btn btn-success">Visit Web Page</a>
                            @endif
                            </div>
                        </div>
                        </div>
                    @endif
                @endforeach
            @endif


            <div class="col-12 mt-5">
                <div class="d-flex justify-content-center gap-4">
                    @if ($users->links())
                         {{ $users->links() }}   
                    @endif
                </div>
            </div>
          </div>
        </div>
      </section>
</div>








 