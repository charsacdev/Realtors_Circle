<div>
    @section('title', 'Contact Us')
    @section('company', $agency->company_name)
        <div class="divided-pg">
            <div class="row">
                <div class="col-sm-4 col-md-5 col-lg-4 overflow-hidden position-relative first-divide d-none d-sm-block">
                    <img src="{{ asset('agency/asset/img/img-bg-12.png')}}" class="" alt="">
                    <div class="social-ctn">
                        <div class="footer-logo sm">
                                <img src="{{ $settings->logo ? asset('storage/uploads/' . $settings->logo) : asset('agency/asset/img/logo.png')}}" width="30px" alt="logo">
                                <div class="logo-text">
                                <h2 class="footer-intro">{{ $agency->company_name }}</h2>
                                {{-- <h2>Haven</h2> --}}
                                </div>
                        </div>
                        <div class="social-link">
                                <div class="social-item">
                                    <a href="{{ $settings->facebook_link }}"><img src="{{ asset('agency/asset/img/icons/facebook-icon-white.png')}}" alt=""></a>
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
                    <form class="p-3 p-md-5" wire:submit.prevent="saveContact">
                        <h2 class="section-title">Contact Us</h2>
                        <div class="form-group mb-4">
                                <label for="">Fullname</label>
                                <input type="text" name="fullname" wire:model="form.fullname" class="form-control">
                                <div>
                                    @error('form.fullname') <span class="error">{{ $message }}</span> @enderror
                                </div>
                        </div>
                        <div class="form-group mb-4">
                                <label for="">Email Address</label>
                                <input type="text" wire:model="form.email"  name="email" class="form-control">
                                <div>
                                    @error('form.email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                        </div>
                        <div class="form-group mb-4">
                                <label for="">Message</label>
                                <textarea class="form-control" name="message" wire:model="form.message" rows="7"></textarea>
                                <div>
                                    @error('form.message') <span class="error">{{ $message }}</span> @enderror
                                </div>
                        </div>
                        <div class="mt-5">
                                <button class="new-discussion-btn btn-success w-100">
                                    Send &nbsp;
                                    <span wire:loading>
                                        <i class="fa fa-spin fa-spinner"></i>
                                    </span>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

