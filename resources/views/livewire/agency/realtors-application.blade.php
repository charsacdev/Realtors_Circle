<div>
    
    <main>
        <section>
             <div class="container">
                  <form action="" id="rad-form">
                       <h4 class="form-title">Realtor Application Details</h4>
                       <div class="text-center">
                            <div class="img-ctn">
                                 <img src="
                                 @if ($applicant->profile_image)
                                   {{ asset('storage/uploads/' . $applicant->profile_image) }}
                                 @else
                                   {{ asset('realtor-dashboard/asset/img/user-img.png') }}
                                 @endif" alt="Applicant Profile Image">
                            </div>
                       </div> 
                       <div class="row mt-5">
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>First Name</h6>
                                      <input type="text" name="" value="{{ $applicant->first_name }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Last Name</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->last_name }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Residential State</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->state }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Residential City</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->city }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-12 mb-4">
                                 <div class="form-group">
                                      <h6>About</h6>
                                      <textarea name="" rows="5" disabled class="form-control" id="">{{ $applicant->bio }}</textarea>
                                 </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Email</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->email }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Phone Number</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->phone_number }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                 <div class="form-group">
                                      <h6>Facebook</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->facebook_link }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                 <div class="form-group">
                                      <h6>Instagram</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->instagram_link }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                 <div class="form-group">
                                      <h6>Whatsapp</h6>
                                      <input type="text" name="" id="" value="{{ $applicant->whatsapp_link }}" disabled class="form-control">
                                 </div>
                            </div>
                            <div class="col-12 mt-4 mb-5">
                                 <div class="d-flex align-items-center justify-content-between">
                                      <a href="/agency/realtors"  class="new-discussion-btn outline-success px-5">Back</a>
                                      <a href="{{ route('agency.realtors-schedule-meeting', $applicant->id) }}"  class="new-discussion-btn btn-success px-5">Next</a>
                                 </div>
                            </div>
                       </div>
                  </form>
             </div>
         </section>
      </main>

</div>
