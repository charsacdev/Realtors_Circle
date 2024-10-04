<div>
    
    <main>
        <div class="container">
             <form action="">
                  <div class="row my-5">
                       <div class="col-lg-11 col-12">
                           <div class="row align-items-start">
                               <div class="col-md-5 mt-5">
                                   <div class="profile-ctn" style="height: auto;">
                                       <div class="img" id="imagePreview">
                                           <img src="{{asset('agency/asset/img/user-img.png')}}" alt="">
                                       </div>
                                       <div>
                                           <input type="file" class="d-none" name="profile_picture" id="profile_picture">
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
                                                       <input type="text" id="client_name" name=""  class="form-control" style="background:transparent">
                                                   </div>
                                               </div>
                                               <div class="col-sm-6 mb-4">
                                                   <div class="form-group">
                                                       <label for="last_name">Rating</label>
                                                       <select name="" id="" class="form-control" style="background: transparent">
                                                          <option value="">Select</option>
                                                          <option value="">1</option>
                                                          <option value="">2</option>
                                                          <option value="">3</option>
                                                          <option value="">4</option>
                                                          <option value="">5</option>
                                                       </select>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group counter-container my-4">
                                                <label for="">Review</label>
                                                <textarea name="" class="form-control text-source" rows="5"></textarea>
                                                <div class="text-end">
                                                  <small class="primary-color">
                                                     <span class="entered-text primary-color">0</span>/<span class="total-text primary-color">150</span> words
                                                </small>
                                                </div>
                                           </div>
                                           <div class="d-flex align-items-center justify-content-between mt-4">
                                                <a href="website.html" class="new-discussion-btn outline-success px-5">Back</a>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#successModal" class="new-discussion-btn btn-success px-5">Save</button>
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
