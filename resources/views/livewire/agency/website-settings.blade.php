<div>
    <main>
        <div class="container mt-4">
          <form method="POST" wire:submit.prevent="saveWebsettings" enctype="multipart/form-data">
               @csrf
               <div class="form-group mb-4">
                    <div class="web-logo-ctn" id="web-logo-ctn">
                          {{-- Default Image --}}
                          <img class="@if(@$settings->logo != '' || $new_logo) d-none @endif" src="{{ asset('agency-dashboard/asset/img/default_logo.png')}}" alt="">
                                    
                          {{--Existing logo  Image --}}
                          @if (@$settings->logo)
                               <img class="@if($new_logo) d-none @endif" src="{{ asset('storage/uploads/' . @$settings->logo) }}" alt="">
                          @endif

                          {{-- Temporary Logo Image --}}
                          @if ($new_logo)
                               <img src="{{ $new_logo->temporaryUrl() }}" alt="">
                          @endif 
                    </div>
                    <div class="text-center" wire:loading wire:target="new_logo">Uploading...</div>
                    <div class="text-center">
                         @error('form.logo') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="text-center">
                         <label for="new_logo" class="web-label">
                              <input type="file" name="logo" wire:model='new_logo' class="d-none" accept="image/*" id="new_logo">
                              <span>Change Logo</span><small class="primary-color">(24px24x)</small>
                              <img src="asset/img/icons/copy-icon.png" width="18px" alt="">
                         </label>
                    </div>
               </div>
               <div class="form-group counter-container mb-4">
                    <label for="">Hero Text</label>
                    <textarea name="" class="form-control text-source" rows="5" wire:model='form.hero_text'></textarea>
                    <div class="text-end">
                    <small class="primary-color">
                         <span class="entered-text primary-color">0</span>/<span class="total-text primary-color">500</span> words
                    </small>
                    </div>
                    <div>
                         @error('form.hero_text') <span class="error">{{ $message }}</span> @enderror
                    </div>
               </div>
               <div class="form-group counter-container mb-4">
                    <label for="">Footer Text</label>
                    <textarea name="" class="form-control text-source" wire:model="form.footer_text" rows="5"></textarea>
                    <div class="text-end">
                    <small class="primary-color">
                         <span class="entered-text primary-color">0</span>/<span class="total-text primary-color">500</span> words
                    </small>
                    </div>
                    <div>
                         @error('form.footer_text') <span class="error">{{ $message }}</span> @enderror
                    </div>
               </div>
               <div class="form-group mb-5">
                    <label for="banner" class="primary-color">Banner Image</label>
                    <div class="web-banner-ctn" id="web-banner-ctn" style="background-color: #000000">
                          {{-- Default Image --}}
                          <img class="@if(@$settings->banner_image != '' || $new_banner_image) d-none @endif" src="{{ asset('agency-dashboard/asset/img/default_banner_image.png') }}" alt="">
                                    
                          {{--Existing banner  Image --}}
                          @if (@$settings->banner_image)
                               <img class="@if($new_banner_image) d-none @endif" src="{{ asset('storage/uploads/' . @$settings->banner_image) }}" alt="">
                          @endif

                          {{-- Temporary banner Image --}}
                          @if ($new_banner_image)
                               <img src="{{ $new_banner_image->temporaryUrl() }}" alt="">
                          @endif 
                    </div>
                    
                    <div wire:loading wire:target="new_banner_image">Uploading...</div>
                    <div>
                         @error('form.banner_image') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="text-center">
                         <label for="new_banner_image" class="web-label">
                              <input type="file" accept="image/*" wire:model="new_banner_image" id="new_banner_image" class="d-none">
                              <span>Change banner image</span>
                              <img src="asset/img/icons/pen-icon.png" width="18px" alt="">
                         </label>
                    </div>
               </div>
               <div class="form-group mb-4">
                    <label for="">Social Media Links</label>
                    <div class="row mt-2">
                         <div class="col-sm-6 mb-4">
                              <div class="form-control input-group">
                                   <div class="input-icon">
                                        <i class="fab fa-2x fa-facebook"></i>
                                   </div>
                                   <input type="text" name="facebook_link" wire:model="form.facebook_link" >
                              </div>
                              <div>
                                   @error('form.facebook_link') <span class="error">{{ $message }}</span> @enderror
                              </div>
                         </div>
                         <div class="col-sm-6 mb-4">
                              <div class="form-control input-group">
                                   <div class="input-icon">
                                        <i class="fab fa-2x fa-instagram"></i>
                                   </div>
                                   <input type="text" name="instagram_link" wire:model="form.instagram_link">
                              </div>
                              <div>
                                   @error('form.instagram_link') <span class="error">{{ $message }}</span> @enderror
                              </div>
                         </div>
                         <div class="col-sm-6 mb-4">
                              <div class="form-control input-group">
                                   <div class="input-icon">
                                        <i class="fab fa-2x fa-twitter"></i>
                                   </div>
                                   <input type="text" name="twitter_link" wire:model="form.twitter_link">
                              </div>
                              <div>
                                   @error('form.twitter_link') <span class="error">{{ $message }}</span> @enderror
                              </div>
                         </div>
                         <div class="col-sm-6 mb-4">
                              <div class="form-control input-group">
                                   <div class="input-icon">
                                        <i class="fab fa-2x fa-whatsapp"></i>
                                   </div>
                                   <input type="text" name="whatsapp_link" wire:model="form.whatsapp_link">
                              </div>
                              <div>
                                   @error('form.whatsapp_link') <span class="error">{{ $message }}</span> @enderror
                              </div>
                         </div>
                    </div>
               </div>
               <button class="new-discussion-btn btn-success w-100 d-block mb-5">
                    Save &nbsp;
                    <span wire:loading>
                         <i class="fa fa-spin fa-spinner"></i>
                    </span>
               </button>
          </form>
          
          {{-- Color Palette --}}
          <div class="form-group mb-4">
               <label for="" class="primary-color mt-4" style="font-size:30px">Color Palettes</label>
               <div class="npi-container">
                    <div class="npi-card input-ctn border-0">
                         <label for="img-upload" class="web-label">
                              <a href="/agency/create-colorpalette">
                              <span>New Color Palette</span>
                              </a>
                         </label>
                    </div>
                    @if ($colorPalettes)
                         @foreach ($colorPalettes as $palette)
                              <a href="{{ route('agency.colorpalette.edit', $palette->id) }}">
                                   <div class="capat-card p-2" style="cursor: pointer" title="Click to edit">
                                        <div class="container">
                                             <div class="row">
                                                  <div class="col-6 pal-ctn" style="background-color:{{ $palette->primary_color }};"></div>
                                                  <div class="col-6 pal-ctn" style="background-color:{{ $palette->secondary_color }};"></div>
                                                  <div class="col-6 pal-ctn" style="background-color:{{ $palette->accent_color }};"></div>
                                                  <div class="col-6 pal-ctn" style="background-color:{{ $palette->text_color }};"></div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         @endforeach
                    @endif
               </div>
          </div>
          
          {{-- Testimonials  --}}
          <div class="form-group mb-4">
          <label for="" class="primary-color mt-4" style="font-size:30px">Testimonials</label>
          <p class="text-muted">Write a good review from your previous client's make your profile  worthy to buyers and potential clients</p>
          
          <div class="npi-container testimonial">
               <div class="npi-card input-ctn">
                    <label for="img-upload" class="web-label">
                         <span><a href="{{ route('agency.testimonial.create') }}">New Testimonial</a></span>
                    </label>
               </div>

   
               @if ($testimonials)
                    @foreach ($testimonials as $testimony)
                    <div class="testimonial-card" id="testimonial-card{{ $testimony->id }}">
                         <div class="update-ctn">
                              <div class="primary-color cursor-p dropdown text-end"><i class="fa fa-ellipsis-h"></i></div>
                              <div class="edet-ctn">
                              <a href="{{ route('agency.testimonial.edit', $testimony->id) }}"><img width="18px" src="{{asset('agency/asset/img/icons/pen-icon.png')}}" alt=""> &nbsp; Edit Testimonial</a>
                              <span class="trash-card" role="button" onclick="confirmDeletion('deleteTestimonial', {'id': {{ $testimony->id }} })"><i class="fa fa-trash"></i> &nbsp; Delete Testimonial</span>
                              </div>
                         </div>
                         <div class="img-ctn"><img src="{{ asset('storage/uploads/' . $testimony->client_image)}}" alt=""></div>
                         <h4 class="tc-name">{{ $testimony->client_name }} </h4>
                         <div class="tc-stars">
                              <img src="{{ $testimony->client_rating >= 1 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="1 star">
                              <img src="{{ $testimony->client_rating >= 2 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="2 star">
                              <img src="{{ $testimony->client_rating >= 3 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="3 star">
                              <img src="{{ $testimony->client_rating >= 4 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="4 star">
                              <img src="{{ $testimony->client_rating >= 5 ? asset('agency/asset/img/icons/star-icon-yellow.png') : asset('agency/asset/img/icons/star-icon-gray.png') }}" alt="5 star">
                         </div>
                         <div class="text-center mb-2"><img width="20px" src="{{asset('agency/asset/img/icons/quotation-icon.png')}}" alt="">
                         </div>
                         <p class="tc-description text-center">
                              {{ $testimony->client_review }}
                         </p>
                    </div>
                    @endforeach
               @endif
          </div>
          </div>

          {{-- FAQ --}}
          <div class="form-group mb-4">
               <label for="" class="primary-color mt-4" style="font-size:30px">FAQs</label>
               <div class="faq-container">
               @if($faqs)
                    @foreach ($faqs as $index => $faq)
                         <div class="qua-container" id="qua-container{{ $faq->id }}">
                              <div class="question">
                                   <h6 class="question-title">{{ $faq->question }}</h6>
                                   <div class="update-ctn">
                                        <div class="primary-color cursor-p dropdown text-end"><i class="fa fa-ellipsis-v"></i></div>
                                        <div class="edet-ctn">
                                        <a href="{{ route('agency.faq.edit', $faq->id) }}"><img width="18px" src="asset/img/icons/pen-icon.png" alt=""> &nbsp; Edit FAQ</a>
                                        <span class="trah-faq" onclick="confirmDeletion('deleteFaq', {'id': {{ $faq->id }} })"><i class="fa fa-trash" ></i> &nbsp; Delete FAQ</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="answer {{ $index > 0 ? 'd-none' : '' }}">
                                   {{ $faq->response }}
                              </div>
                         </div>
                    @endforeach
               @endif

                    <div class="mt-5 text-center mb-2">
                         <a href="/agency/create-faq" class="new-discussion-btn px-5">Add New FAQ</a>
                    </div>
               </div>
          </div>
        </div>
      </main>
</div>
