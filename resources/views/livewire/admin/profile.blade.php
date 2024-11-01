<div class="main-content">
    <div class="row">
        <div class="col-lg-11 col-12">
            <div class="row align-items-start">
                <div class="col-md-5 mt-5">
                    <div class="profile-ctn">
                        <div class="img" id="imagePreview">
                            {{-- Default Image --}}
                            <img class="@if($user->profile_image != '' || $profile_image) d-none @endif" src="{{ asset('realtor-dashboard/asset/img/user-img.png')}}" alt="">
                                   
                            {{-- User Existing  Image --}}
                            @if ($user->profile_image)
                                 <img class="@if($profile_image) d-none @endif" src="{{ asset('storage/uploads/' . $user->profile_image) }}" alt="">
                            @endif

                            {{-- Temporary Preview Image --}}
                            @if ($profile_image)
                                 <img src="{{ $profile_image->temporaryUrl() }}" alt="">
                            @endif 
                        </div>
                        <div wire:loading wire:target="profile_image">Uploading...</div>
                        <div>
                            <input type="file" class="d-none" wire:model="profile_image" name="profile_image" id="profile_image">
                            <label class="file-label cursor-p" for="profile_image">Change Picture</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mt-5">
                    <div class="profile-details">
                        <h3>Profile Details</h3>
                        <form wire:submit.prevent="updateProfile" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" id="first_name" name="" wire:model="form.first_name" value="{{ $user->first_name }}" class="form-control">
                                        <div>
                                            @error('form.first_name') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" id="last_name" wire:model="form.last_name" name="" value="{{ $user->last_name }}" class="form-control">
                                        <div>
                                            @error('form.last_name') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" wire:model="form.email" name="" value="{{ $user->email }}" class="form-control">
                                        <div>
                                            @error('form.email') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" id="phone_number" wire:model="form.phone_number" name="" value="{{ $user->phone_number }}" class="form-control">
                                        <div>
                                            @error('form.phone_number') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <input type="text" wire:model="form.city" value="{{ $user->city }}" class="form-control bg-transparent">
                                        <div>
                                            @error('form.city') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <div class="form-group">
                                        <label for="">State</label>
                                        <input type="text" wire:model="form.state" value="{{ $user->state }}" class="form-control bg-transparent">
                                        <div>
                                            @error('form.state') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <button class="new-discussion-btn btn-success" type="submit">
                                    Update Profile &nbsp;
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
        <div class="col-lg-1"></div>
    </div>
    
 
</div>