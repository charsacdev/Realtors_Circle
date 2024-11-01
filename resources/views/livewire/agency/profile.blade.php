<div>
     <main>
         <div class="container">
           <h3 class="mt-5 fw-bold">Profile</h3>
           <p class="text-muted">Update and be in charge of your profile information, be professional,be attractive!</p>
              <form wire:submit.prevent="updateProfile" enctype="multipart/form-data">
                @csrf
                   <div class="row">
                        <div class="col-12 mb-4">
                            <div class="profile-ctn" style="height: auto;background: transparent;">
                                <div class="img" id="imagePreview" style="width: 180px;height: 180px;">
 
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
                                    <input type="file" class="d-none" name="profile_picture" id="profile_picture" wire:model="profile_image">
                                    <label class="file-label cursor-p" for="profile_picture">Change Display Picture <img src="asset/img/icons/copy-icon.png" alt=""></label>
                                </div>
                            </div>
                            <div>
                               @error('form.profile_image') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-12 mb-4">
                         <div class="form-group">
                           <label for="">Profile link</label>
                           <div class="custom-input-group">
                             <input type="text" name="" value="{{ route('realtor.profile-information', $user->slug) }}" id="">
                             <img src="{{asset('realtor-dashboard/asset/img/icons/copy-icon-green.png')}}" alt="" id="copy-img">
                             <span class="custom-tooltip d-none text-success">Copied!</span>
                           </div>
                         </div>
                         
                        </div>
                        <div class="col-12 mb-4">
                         <div class="form-group">
                           <label for="">Bio</label>
                           <textarea name="bio" id="bio" wire:model="form.bio" class="form-control" id="">{{ $user->bio }}</textarea>
                         </div>
                         <div>
                          @error('form.bio') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">First name</label>
                                  <input type="text" value="{{ $user->first_name }}" wire:model="form.first_name" class="form-control">
                             </div>
                             <div>
                               @error('form.first_name') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">Last name</label>
                                  <input type="text" value="{{ $user->last_name }}" wire:model="form.last_name" class="form-control">
                             </div>
                             <div>
                               @error('form.last_name') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">Username</label>
                                  <input type="text" value="{{ $user->username }}" wire:model="form.username" class="form-control">
                             </div>
                             <div>
                               @error('form.username') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="text" value="{{ $user->email }}" wire:model="form.email" class="form-control">
                             </div>
                             <div>
                               @error('form.email') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">Phone Number</label>
                                  <input type="text" value="{{ $user->phone_number }}" wire:model="form.phone_number" class="form-control">
                             </div>
                             <div>
                               @error('form.phone_number') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                       
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">City</label>
                                  <input type="text" value="{{ $user->city }}" wire:model="form.city" class="form-control">
                             </div>
                             <div>
                               @error('form.city') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
 
                        <div class="col-sm-6 mb-4">
                             <div class="form-group">
                                  <label for="">State</label>
                                  <select name="nigerian_state" wire:model="form.state" id="nigerian_state" class="form-select">
                                    <option value="">Select State</option>
                                    @foreach ($ngstates as $key=>$state)
                                         <option {{ $user->state == $key ? 'selected' : '' }} value="{{ $key }}">{{ $state }}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div>
                               @error('form.state') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                         <div class="form-group">
                           <label for="">Facebook</label>
                           <input type="text" value="{{ $user->facebook_link }}" wire:model="form.facebook_link" placeholder="https://facebok.com/johndoe" class="form-control">
                         </div>
                         <div>
                          @error('form.facebook_link') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                         <div class="form-group">
                           <label for="">Instagram</label>
                           <input type="text" value="{{ $user->instagram_link }}" wire:model="form.instagram_link" placeholder="https://instagram.com/johndoe" class="form-control">
                         </div>
                         <div>
                          @error('form.instagram_link') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        </div>
 
                        <div class="col-sm-6 mb-4">
                          <div class="form-group">
                            <label for="">Whatsapp</label>
                            <input type="text" value="{{ $user->whatsapp_link }}" wire:model="form.whatsapp_link" placeholder="https://wa/me/+2348..." class="form-control">
                          </div>
                          <div>
                               @error('form.whatsapp_link') <span class="error">{{ $message }}</span> @enderror
                          </div>
                         </div>
                        <div class="col-sm-6 mb-4 d-none">
                         <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" value="johndoe@gmail.com" class="form-control">
                         </div>
                          </div>
                          <div class="col-sm-6 mb-4 d-none">
                               <div class="form-group">
                                    <label for="">Confirm password</label>
                                    <input type="password" value="johndoe@gmail.com" class="form-control">
                               </div>
                          </div>
                    </div>
                    <div class="mt-4 mb-5">
                        <button type="submit" class="new-discussion-btn btn-success w-100">
                          Save changes &nbsp;
                           <span wire:loading>
                             <i class="fa fa-spinner fa-spin"></i>
                           </span>
                     </button>
                    </div>
              </form>
         </div>
      </main>
 </div>



