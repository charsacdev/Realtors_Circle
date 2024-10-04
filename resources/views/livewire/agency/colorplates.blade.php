<div>
    
    <main>
        <div class="container">
             <form action="">
                  <div class="row mt-5">
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Primary Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="primary-color-picker color-selected-preview"></div>
                                      <input type="text" class="color-ctn" id="primary-color-ctn">
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Secondary Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="secondary-color-picker color-selected-preview"></div>
                                      <input type="text" class="color-ctn" id="secondary-color-ctn">
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Accent Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="accent-color-picker color-selected-preview"></div>
                                      <input type="text" class="color-ctn" id="accent-color-ctn">
                                 </div>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Text Color</label>
                                 <div class="color-picker-ctn">
                                      <div class="text-color-picker color-selected-preview"></div>
                                      <input type="text" class="color-ctn" id="text-color-ctn">
                                 </div>
                            </div>
                       </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                       <a href="/agency/website-settings" class="new-discussion-btn outline-success px-5">Back</a>
                       <button type="button" data-bs-toggle="modal" data-bs-target="#successModal" class="new-discussion-btn btn-success px-5">Save</button>
                  </div>
             </form>

        </div>
      </main>


      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
               <div class="modal-content">
                    <div class="modal-body rounded">
                      <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                          <img src="{{asset('agency-dashboard/asset/img/icons/verify-icon.png')}}" width="70px" alt="icon">
                      </div>
                         <h3 class="text-center mb-2">Success!</h3>
                        <div class="text-center mb-4">
                          Brand color added.
                        </div>
                          <a href="/agency/website-settings" type="button" class="new-discussion-btn btn-success w-100 mb-2"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
               </div>
          </div>
      </div>
</div>
