<div>
    @section('title', 'Realtor Application')
    @section('company', $agency->company_name)
    @include('agency.homepages.includes.header')
    <section style="margin-top: 80px;">
        <div class="container">
            <form action="" id="re-application-form" wire:submit.prevent="saveApplication">
                @csrf
                <div class="row">
                    <div class="col-12 mb-4">
                        <h3 class="form-title">Realtor Application</h3>
                    </div>
                    <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" name="" id="" value="{{ $user->first_name }}" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="" value="{{ $user->last_name }}" id="" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label for="">Residential State</label>
                        <input type="text" value="{{ $user->state }}" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label for="">Residential City</label>
                        <input type="text" value="{{ $user->city }}" class="form-control">
                    </div>
                    </div>
                    <div class="col-12 mb-5">
                    <div class="form-group">
                        <label for="">About You</label>
                        <textarea name="" id="us-bio" class="form-control" rows="10">{{ $user->bio }}</textarea>
                        <div class="text-end">
                        <small id="text-counter"><span id="entered-text">0</span>/<span id="total-text">1200</span></small>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="text" name="" value="{{ $user->email }}" id="" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="" id="" value="{{ $user->phone_number }}" class="form-control">
                    </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="text" name="" value="{{ $user->facebook_link }}" id="" class="form-control">
                    </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" name="" value="{{ $user->instagram_link }}" id="" class="form-control">
                    </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                    <div class="form-group">
                        <label for="">Whatsapp</label>
                        <input type="text" name="" id="" value="{{ $user->whatsapp_link }}" class="form-control">
                    </div>
                    </div>
                </div>
                    @unless ($is_realtor || $is_agency)
                        <button class="primary-btn rounded w-100 mb-5">
                            Submit Application &nbsp;
                            <span wire:loading>
                                <i class="fa fa-spin fa-spinner"></i>
                            </span>
                        </button>
                    @endunless
            </form>
        </div>
      </section>
    @include('agency.homepages.includes.footer')

</div>

