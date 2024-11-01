<div>
    
    <main>
        <section>
             <div class="container">
                  <form action="" wire:submit.prevent="addRealtor">
                       <div class="row">
                         <h4 class="form-title">Add New Realtor</h4>
                            <div class="col-12 mb-4">
                                 <div class="form-group">
                                      <h6>Enter Realtor Email</h6>
                                      <input type="text" name="email" wire:model="email" wire:input="findUserByEmail" id="email" placeholder="Enter realtor email" class="form-control">
                                 </div>
                            </div>
                            @if ($realtor)
                              <div class="profile-ctn mt-5" style="height: auto;background: transparent;">
                                   <div class="img" id="imagePreview" style="width: 180px;height: 180px;">

                                   <img  src="
                                        @if ($realtor->profile_image)
                                        {{ asset('storage/uploads/' . $realtor->profile_image)}}
                                        @else
                                        {{ asset('realtor-dashboard/asset/img/user-img.png')}}
                                        @endif" alt="">
                                   </div>
                              </div>
                              <div class="col-sm-6 mb-4">
                                   <div class="form-group">
                                        <h6>First Name</h6>
                                        <input type="text" readonly value="{{ $realtor->first_name }}" id="" class="form-control">
                                   </div>
                              </div>
                              <div class="col-sm-6 mb-4">
                                   <div class="form-group">
                                        <h6>Last Name</h6>
                                        <input type="text" readonly value="{{ $realtor->last_name }}" id="" class="form-control">
                                   </div>
                              </div>
                            @else
                              @if ($errorMessage)
                                   <div class="text-center my-4" style="color:orangered">
                                        {{ $errorMessage }}
                                   </div>
                              @endif
                            @endif
                            
                            @if ($realtor)
                              <div class="col-12 mb-4">
                                   <button type="submit" id="genpswd" class="new-discussion-btn btn-success w-100">
                                        Add Realtor &nbsp;
                                        <span wire:loading>
                                          <i class="fa fa-spinner fa-spin"></i>
                                        </span>
                                   </button>
                              </div>
                            @endif
                       </div>
                  </form>
             </div>
         </section>
      </main>
</div>
