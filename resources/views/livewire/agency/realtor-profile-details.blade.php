<div>
    <main>
        <div class="container">
          <h3 class="mt-5 fw-bold">Realtor Profile Details</h3>
          <p class="text-muted"></p>
             <div>
                  <div class="row">
                       <div class="col-12 mb-4">
                           <div class="profile-ctn" style="height: auto;background: transparent;">
                               <div class="img" id="imagePreview" style="width: 180px;height: 180px;">

                                   <img src="
                                    @if($realtor->profile_image)
                                        {{ asset('storage/uploads/' . $realtor->profile_image)}}
                                    @else
                                        {{ asset('realtor-dashboard/asset/img/user-img.png')}}
                                    @endif" alt=""
                                    />
                               </div>
                           </div>
                       </div>
                       <div class="col-12 mb-4">
                        <div class="form-group">
                          <label for="">Profile link</label>
                          <div class="custom-input-group">
                            <input type="text" name="" value="{{ route('realtor.profile-information', $realtor->slug) }}" id="">
                            <img src="{{asset('realtor-dashboard/asset/img/icons/copy-icon-green.png')}}" alt="" id="copy-img">
                            <span class="custom-tooltip d-none text-success">Copied!</span>
                          </div>
                        </div>
                        
                       </div>
                       <div class="col-12 mb-4">
                        <div class="form-group">
                          <label for="">Bio</label>
                          <textarea name="bio" id="bio" rows="5"  class="form-control" id="">{{ $realtor->bio }}</textarea>
                        </div>
                       </div>
                       <div class="col-sm-6 col-md-4 mb-4">
                            <div class="form-group">
                                 <label for="">First name</label>
                                 <input type="text" value="{{ $realtor->first_name }}" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 col-md-4 mb-4">
                            <div class="form-group">
                                 <label for="">Last name</label>
                                 <input type="text" value="{{ $realtor->last_name }}"  class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 col-md-4 mb-4">
                            <div class="form-group">
                                 <label for="">Username</label>
                                 <input type="text" value="{{ $realtor->username }}" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Email</label>
                                 <input type="text" value="{{ $realtor->email }}" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Phone Number</label>
                                 <input type="text" value="{{ $realtor->phone_number }}" class="form-control">
                            </div>
                       </div>
                      
                       <div class="col-sm-6 col-md-4 mb-4">
                            <div class="form-group">
                                 <label for="">City</label>
                                 <input type="text" value="{{ $realtor->city }}" class="form-control">
                            </div>
                       </div>

                       <div class="col-sm-6 col-md-4 mb-4">
                            <div class="form-group">
                                 <label for="">State</label>
                                 <input type="text" value="{{ $realtor->state }}" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 col-md-4 mb-4">
                            <div class="form-group">
                                 <label for="">Country</label>
                                 <input type="text" value="{{ $realtor->country }}" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="">Facebook</label>
                          <input type="text" value="{{ $realtor->facebook_link }}"  placeholder="https://facebok.com/johndoe" class="form-control">
                        </div>
                       </div>
                       <div class="col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="">Instagram</label>
                          <input type="text" value="{{ $realtor->instagram_link }}" placeholder="https://instagram.com/johndoe" class="form-control">
                        </div>
                       </div>

                       <div class="col-sm-12 mb-4">
                         <div class="form-group">
                           <label for="">Whatsapp</label>
                           <input type="text" value="{{ $realtor->whatsapp_link }}" placeholder="https://wa/me/+2348..." class="form-control">
                         </div>
                        </div>
                   </div>
                </div>

             <div class="form-group my-5">
               <label for="" class="primary-color" style="font-size:30px">Testimonials</label>
               <p class="text-muted"></p>
           
               <div class="npi-container testimonial">
                    {{-- Testimonials --}}
                    @if ($realtor->testimonials)
                         @foreach ($realtor->testimonials as $testimony)
                         <div class="testimonial-card" id="testimonial-card{{ $testimony->id }}">
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
        </div>
    </main>
</div>



