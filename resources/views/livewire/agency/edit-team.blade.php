<div>
    
    <main>
        <div class="container">
             <form wire:submit.prevent="updateTeam" enctype="multipart/form-data">
                @csrf
                  <div class="row my-5">
                       <div class="col-lg-11 col-12">
                           <div class="row align-items-start"> 
                               <div class="col-md-5 mt-5">
                                   <div class="profile-ctn" style="height: auto;">
                                       <div class="img" id="imagePreview">
                                        @if ($new_image)
                                            <img src="{{ $new_image->temporaryUrl() }}" alt="">
                                            
                                        @endif
                                        <img class="@if($team->team_image || $new_image) d-none @endif" src="{{asset('realtor-dashboard/asset/img/user-img.png')}}" alt="">
                                        <img class="@if($new_image) d-none @endif" src="{{ asset('storage/uploads/' . $team->team_image)}} " alt="">
                                       </div>
                                       <div wire:loading wire:target="new_image">Uploading...</div>
                                       <div>
                                            @error('form.new_image') <span class="error">{{ $message }}</span> @enderror
                                      </div>
                                       <div>
                                           <input type="file" class="d-none" wire:model="new_image" name="profile_picture" id="profile_picture">
                                           <label class="file-label cursor-p" for="profile_picture">Upload Team Image <img src="asset/img/icons/copy-icon.png" alt=""></label>
                                       </div>
                                   </div>
                                  
                               </div>
                               <div class="col-md-7 mt-5">
                                   <div class="profile-details">
                                           <div class="row" style="border-bottom: 2px dashed #cccccc;">
                                               <div class="col-sm-12 my-4">
                                                   <div class="form-group">
                                                       <label for="client_name">Team Name</label>
                                                       <input type="text" id="team_name" wire:model="form.team_name"  class="form-control" style="background:transparent">
                                                   </div>
                                                   <div>
                                                    @error('form.team_name') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                               <div class="col-sm-8 mb-4">
                                                   <div class="form-group">
                                                       <label for="rating">Team Position</label>
                                                       <input type="text" wire:model="form.team_position" class="form-control" style="background:transparent">
                                                   </div>
                                                   <div>
                                                    @error('form.team_position') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                               <div class="col-sm-4 mb-4">
                                                   <div class="form-group">
                                                       <label for="rating">Status</label>
                                                       <select wire:model="form.status" id="status" class="form-control" style="background: transparent">
                                                          <option value="">Select</option>
                                                          <option {{ $form->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                                          <option {{ $form->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                                                       </select>
                                                   </div>
                                                   <div>
                                                    @error('form.status') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                           </div>
                                           <div class="d-flex align-items-center justify-content-between mt-4">
                                                <a href="{{ route('agency.website-settings') }}" class="new-discussion-btn outline-success px-5">Back</a>
                                                <button type="submit" class="new-discussion-btn btn-success px-5">
                                                    Save &nbsp;
                                                    <span wire:loading>
                                                      <i class="fa fa-spinner fa-spin"></i>
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

