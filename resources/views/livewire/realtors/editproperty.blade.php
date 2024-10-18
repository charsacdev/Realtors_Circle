<div>
    <main>
        <section>
          <div class="container">
            <h3 class="mt-5 fw-bold">Edit Property</h3>
            <p class="text-muted">Update existing property information, be precise be convincing!</p>
            <br>
            <form action="">
              <h6>Property Image</h6>
              <div class="npi-container" id="npi-container">
                <div class="npi-card input-ctn">
                    <label for="img-upload" class="label-container">
                      <input type="file" class="d-none" id="img-upload" multiple accept="image/*">
                      <img src="{{asset('realtor-dashboard/asset/img/icons/photo-add-icon.png')}}" alt="">
                      Upload Image
                    </label>
                </div>
                @if (json_decode($property->images))
                  @foreach (json_decode($property->images)->images as $image)
                    <div class="npi-card">
                      {{-- <img src="{{asset('realtor-dashboard/asset/img/property-img-2.png')}}" class="bg-prop" alt=""> --}}
                      <img src="{{$image}}" class="bg-prop" alt="">
                      <div class="trash-prop"><img src="{{asset('realtor-dashboard/asset/img/icons/trash-icon-red.png')}}" alt=""></div>
                    </div>
                  @endforeach
                @endif
              </div>
              <h6 class="mt-4">Property Video</h6>
              <div class="npi-container" id="npi-vid-container">
                <div class="npi-card input-ctn">
                    <label for="vid-upload" class="label-container">
                      <input type="file" class="d-none" id="vid-upload" multiple accept="video/*">
                      <img src="{{asset('realtor-dashboard/asset/img/icons/video-add-icon.png')}}" alt="">
                      Upload Video
                    </label>
                </div>
                @if (json_decode($property->videos))
                  @foreach (json_decode($property->videos)->videos as $index => $video)
                    <div class="npi-card video-ctn">
                      <video id="player{{ $index + 1 }}" controls playsinline data-poster="{{$video}}">
                        <source src="{{asset('realtor-dashboard/asset/video/home-video3.mp4')}}"  type="video/mp4"></video>
                        <source src="{{$video}}"  type="video/mp4"></video>
                      <div class="trash-prop"><img src="{{asset('realtor-dashboard/asset/img/icons/trash-icon-red.png')}}" alt=""></div>
                    </div>
                  @endforeach
                @endif
              </div>
              <div class="row mt-4 mb-2">
                <div class="col-sm-7 col-lg-8 mb-4">
                  <div class="form-group">
                    <h6>Property Name</h6>
                    <input type="text" value="{{ $property->name }}" id="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-5 col-lg-4 mb-4">
                  <div class="form-group">
                    <h6>Price</h6>
                    <input type="text" value="{{ number_format($property->amount, 2) }}" min="0" id="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-7 col-lg-8 mb-4">
                  <div class="form-group">
                    <h6>Location (Map embed code)</h6>
                    <input type="text" value="{{ $property->location }}" min="0" id="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-5 col-lg-4 mb-4">
                  <div class="form-group">
                    <h6>Status</h6>
                    <select name="status" class="form-control" id="">
                      <option value="">Select</option>
                      <option {{ $property->status == '1' ? 'selected' : '' }} value="1">Available</option>
                      <option {{ $property->status == '0' ? 'selected' : '' }} value="0">Unavailable</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <div class="form-group">
                    <h6>Property Overview</h6>
                    <textarea name="" class="form-control summernote" id="">{{ $property->description }}</textarea>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                  <div class="form-group">
                    <h6>Transaction Information</h6>
                    <select name="" id="" class="form-control">
                      <option value="">Select</option>
                      <option value="For sale" {{ $property->transaction_info == 'For sale' ? "selected" : "" }}">For sale</option>
                      <option value="For lease" {{ $property->transaction_info == 'For lease' ? "selected" : "" }}">For Leasing</option>
                      <option value="sold" {{ $property->transaction_info == 'sold' ? "selected" : "" }}">Sold</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                  <div class="form-group">
                    <h6>Property Type</h6>
                    <select name="" id="" class="form-control">
                      <option value="">Select</option>
                      <option {{ $property->type == 'land' ? 'selected' : '' }} value="land">Land</option>
                      <option {{ $property->type == 'building' ? 'selected' : '' }} value="building">Building</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <h6>Bedroom (if building)</h6>
                    <input type="text" value="{{ $property->bedroom }}" min="0" id="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <h6>Bathroom (if building)</h6>
                    <input type="text" value="{{ $property->bathroom }}" min="0" id="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <h6>Squarefoot</h6>
                    <input type="text" value="{{ $property->squarefoot }}" min="0" id="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <h6>Payment Mode</h6>
                    <select name="" id="" class="form-control">
                      <option value="">Select</option>
                      <option {{ $property->payment_mode == "One off" ? "selected" : '' }} value="One off">One Off</option>
                      <option {{ $property->payment_mode == "installment" ? "selected" : '' }} value="installment">Installment</option>
                    </select>
                  </div>
                </div>
               
              </div>
              <div class="form-group">
                <h6>Features</h6>
                <div class="create-propef border rounded px-4 pb-4">
                  <div class="row" id="feature-ctn">
                    @if (json_decode($property->features))
                      @foreach(json_decode($property->features)->features as $feature)
                      <div class="col-sm-2 col-md-4 mt-4">
                        <div class="form-group">
                            <div class="form-check checkbox-success check-lg">
                              <input type="checkbox" checked class="form-check-input" id="{{ $feature }}">
                              <label class="form-check-label" for="{{ $feature }}">{{ $feature }}</label>
                          </div> 
                        </div>
                      </div>
                      @endforeach
                    @endif
                  </div>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#featureModal" class="new-discussion-btn bg-transparent text-dark border rounded mt-4">Add new feature</button>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between my-5">
                <a href="/realtor/properties" class="new-discussion-btn danger px-5">Discard</a>
                <button class="new-discussion-btn btn-success px-5">Save</button>
              </div>
            </form>
          </div>
         </section>
      </main>
</div>
