<div>
    
    <main>
        <div class="container">
             <form wire:submit.prevent="updateTestimonial" enctype="multipart/form-data">
                @csrf
                  <div class="row my-5">
                       <div class="col-lg-11 col-12">
                           <div class="row align-items-start"> 

                               <div class="col-md-5 mt-5">
                                   <div class="profile-ctn" style="height: auto;">
                                       <div class="img" id="imagePreview">
                                        @if ($client_image)
                                            <img src="{{ $client_image->temporaryUrl() }}" alt="">
                                        @endif
                                           <img class="@if($testimonial->client_image || $client_image) d-none @endif" src="{{asset('realtor-dashboard/asset/img/user-img.png')}}" alt="">
                                           <img class="@if($client_image) d-none @endif" src="{{ asset('storage/uploads/' . $testimonial->client_image)}} " alt="">
                                       </div>
                                       <div wire:loading wire:target="client_image">Uploading...</div>
                                       <div>
                                            @error('form.client_image') <span class="error">{{ $message }}</span> @enderror
                                      </div>
                                       <div>
                                           <input type="file" class="d-none" wire:model="client_image" name="profile_picture" id="profile_picture">
                                           <label class="file-label cursor-p" for="profile_picture">Upload Client Image <img src="asset/img/icons/copy-icon.png" alt=""></label>
                                       </div>
                                   </div>
                                  
                               </div>
                               <div class="col-md-7 mt-5">
                                   <div class="profile-details">
                                           <div class="row" style="border-bottom: 2px dashed #cccccc;">
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="client_name">Client Name</label>
                                                       <input type="text" id="client_name" wire:model="form.client_name" value="{{ $testimonial->client_name }}"  class="form-control" style="background:transparent">
                                                   </div>
                                                   <div>
                                                    @error('form.client_name') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="rating">Rating</label>
                                                       <select wire:model="form.client_rating" id="rating" class="form-control" style="background: transparent">
                                                          <option value="">Select</option>
                                                          <option {{ $testimonial->client_rating == 1 ? 'selected' : '' }} value="1">1</option>
                                                          <option {{ $testimonial->client_rating == 2 ? 'selected' : '' }} value="2">2</option>
                                                          <option {{ $testimonial->client_rating == 3 ? 'selected' : '' }} value="3">3</option>
                                                          <option {{ $testimonial->client_rating == 4 ? 'selected' : '' }} value="4">4</option>
                                                          <option {{ $testimonial->client_rating == 5 ? 'selected' : '' }} value="5">5</option>
                                                       </select>
                                                   </div>
                                                   <div>
                                                    @error('form.client_rating') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                               </div>
                                           </div>
                                           <div class="form-group counter-container my-4">
                                                <label for="">Review</label>
                                                <textarea wire:model="form.client_review" class="form-control text-source" rows="5">{{ $testimonial->client_review }}</textarea>
                                                <div class="text-end">
                                                  <small class="primary-color">
                                                     <span class="entered-text primary-color">{{ str_word_count($testimonial->client_review) }}</span>/<span class="total-text primary-color">1000</span> words
                                                </small>
                                                </div>
                                                <div>
                                                    @error('form.client_review') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                           </div>
                                           <div class="d-flex align-items-center justify-content-between mt-4">
                                                <a href="{{ route('agency.website-settings') }}" class="new-discussion-btn outline-success px-5">Back</a>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#successModal" class="d-none new-discussion-btn btn-success px-5">Save</button>
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
