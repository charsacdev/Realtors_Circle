<div>
    <main>
        <div class="container">
             <form wire:submit.prevent="saveCustomer" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row my-5">
                       <div class="col-lg-11 col-12">
                           <div class="row align-items-start">
                               <div class="col-md-5 mt-5">
                                   <div class="profile-ctn" style="height: auto;">
                                       <div class="img" id="imagePreview">
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" alt="">
                                        @else
                                            <img src="{{ asset('realtor-dashboard/asset/img/user-img.png') }}" alt="">
                                        @endif
                                       </div>
                                       <div wire:loading wire:target="image">Uploading...</div>
                                       <div>
                                        @error('form.image') <span class="error">{{ $message }}</span> @enderror
                                      </div>
                                       <div>
                                           <input type="file" wire:model="image" class="d-none" name="profile_picture" id="image">
                                           <label class="file-label cursor-p" for="image">Upload Customer Image <img src="asset/img/icons/copy-icon.png" alt=""></label>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-7 mt-5">
                                   <div class="profile-details">
                                           <div class="row" style="border-bottom: 2px dashed #cccccc;">
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="client_name">Firstname</label>
                                                       <input type="text" id="first_name" wire:model="form.first_name" name="first_name"  class="form-control" style="background:transparent">
                                                   </div>
                                                   <div>
                                                    @error('form.first_name') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="client_name">Lastname</label>
                                                       <input type="text" id="last_name" wire:model="form.last_name" name="last_name"  class="form-control" style="background:transparent">
                                                   </div>
                                                   <div>
                                                    @error('form.last_name') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                               <div class="col-sm-6 mb-4">
                                                <div class="form-group">
                                                    <label for="client_name">Email</label>
                                                    <input type="text" id="email" wire:model="form.email" name="email"  class="form-control" style="background:transparent">
                                                </div>
                                                <div>
                                                    @error('form.email') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="form-group">
                                                    <label for="client_name">Phone number</label>
                                                    <input type="text" id="phone_number" wire:model="form.phone_number" name="phone_number"  class="form-control" style="background:transparent">
                                                </div>
                                                <div>
                                                    @error('form.phone_number') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                            </div>
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="client_name">Location</label>
                                                       <input type="text" id="location" wire:model="form.location" name="location"  class="form-control" style="background:transparent">
                                                   </div>
                                                   <div>
                                                    @error('form.location') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="client_name">Country</label>
                                                       <input type="text" id="country" wire:model="form.country" name="country"  class="form-control" style="background:transparent">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="d-flex align-items-center justify-content-between mt-4">
                                                <a href="{{ route('agency.customers') }}" class="new-discussion-btn outline-success px-5">Back</a>
                                                <button type="submit" class="new-discussion-btn btn-success px-5">
                                                    Save &nbsp;
                                                    <span wire:loading>
                                                        <i class="fa fa-spin fa-spinner"></i>
                                                    </span>
                                                </button>
                                           </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-1"></div>
                   </div>
             </form>
        </div>
      </main>
</div>
