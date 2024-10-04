<div>
    <main>
        <div class="container">
          <h3 class="mt-5 fw-bold">Profile</h3>
          <p class="text-muted">Update and be in charge of your profile information, be professional,be attractive!</p>
           
             <form action="">
                  <div class="row">
                       <div class="col-12 mb-4">
                           <div class="profile-ctn" style="height: auto;background: transparent;">
                               <div class="img" id="imagePreview" style="width: 180px;height: 180px;">
                                   <img src="{{asset('realtor-dashboard/asset/img/user-img.png')}}" alt="">
                               </div>
                               <div>
                                   <input type="file" class="d-none" name="profile_picture" id="profile_picture">
                                   <label class="file-label cursor-p" for="profile_picture">Change Display Picture <img src="asset/img/icons/copy-icon.png" alt=""></label>
                               </div>
                           </div>
                       </div>
                       <div class="col-12 mb-4">
                        <div class="form-group">
                          <label for="">Profile link</label>
                          <div class="custom-input-group">
                            <input type="text" name="" value="therealtorscircle.com/johndoe123" id="">
                            <img src="{{asset('realtor-dashboard/asset/img/icons/copy-icon-green.png')}}" alt="" id="copy-img">
                            <span class="custom-tooltip d-none text-success">Copied!</span>
                          </div>
                        </div>
                       </div>
                       <div class="col-12 mb-4">
                        <div class="form-group">
                          <label for="">Bio</label>
                          <textarea name="" class="form-control" id="">5 years experience in real estate business</textarea>
                        </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">First name</label>
                                 <input type="text" value="John" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Last name</label>
                                 <input type="text" value="Doe" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Username</label>
                                 <input type="text" value="Doe234" class="form-control" readonly>
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">Email</label>
                                 <input type="text" value="johndoe@gmail.com" class="form-control" readonly>
                            </div>
                       </div>
                      
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">City</label>
                                 <input type="text" value="Abakaliki" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <label for="">State</label>
                                 <select name="nigerian_state" id="nigerian_state" class="form-select">
                                   <option value="">Select State</option>
                                   <option value="Abia">Abia</option>
                                   <option value="Adamawa">Adamawa</option>
                                   <option value="Akwa Ibom">Akwa Ibom</option>
                                   <option value="Anambra">Anambra</option>
                                   <option value="Bauchi">Bauchi</option>
                                   <option value="Bayelsa">Bayelsa</option>
                                   <option value="Benue">Benue</option>
                                   <option value="Borno">Borno</option>
                                   <option value="Cross River">Cross River</option>
                                   <option value="Delta">Delta</option>
                                   <option value="Ebonyi">Ebonyi</option>
                                   <option value="Edo">Edo</option>
                                   <option value="Ekiti">Ekiti</option>
                                   <option value="Enugu">Enugu</option>
                                   <option value="Gombe">Gombe</option>
                                   <option value="Imo">Imo</option>
                                   <option value="Jigawa">Jigawa</option>
                                   <option value="Kaduna">Kaduna</option>
                                   <option value="Kano">Kano</option>
                                   <option value="Katsina">Katsina</option>
                                   <option value="Kebbi">Kebbi</option>
                                   <option value="Kogi">Kogi</option>
                                   <option value="Kwara">Kwara</option>
                                   <option value="Lagos">Lagos</option>
                                   <option value="Nasarawa">Nasarawa</option>
                                   <option value="Niger">Niger</option>
                                   <option value="Ogun">Ogun</option>
                                   <option value="Ondo">Ondo</option>
                                   <option value="Osun">Osun</option>
                                   <option value="Oyo">Oyo</option>
                                   <option value="Plateau">Plateau</option>
                                   <option value="Rivers">Rivers</option>
                                   <option value="Sokoto">Sokoto</option>
                                   <option value="Taraba">Taraba</option>
                                   <option value="Yobe">Yobe</option>
                                   <option value="Zamfara">Zamfara</option>
                                   <option value="FCT">Federal Capital Territory</option>
                               </select>
                               
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                        <div class="form-group">
                          <label for="">Facebook</label>
                          <input type="text" placeholder="https://facebok.com/johndoe" class="form-control">
                        </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                        <div class="form-group">
                          <label for="">Instagram</label>
                          <input type="text" placeholder="https://instagram.com/johndoe" class="form-control">
                        </div>
                       </div>

                       <div class="col-sm-12 mb-4">
                         <div class="form-group">
                           <label for="">Whatsapp Contact</label>
                           <input type="text" placeholder="+23481222...." class="form-control">
                         </div>
                        </div>
                       <div class="col-sm-6 mb-4 d-none">
                        <div class="form-group">
                             <label for="">Password</label>
                             <input type="password" value="johndoe@gmail.com" class="form-control">
                        </div>
                         </div>
                         <div class="col-sm-6 mb-4 d-none">
                              <div class="form-group">
                                   <label for="">Confirm password</label>
                                   <input type="password" value="johndoe@gmail.com" class="form-control">
                              </div>
                         </div>
                   </div>
                   <div class="mt-4 mb-5">
                       <button type="submit" class="new-discussion-btn btn-success w-100">Save changes</button>
                   </div>
             </form>

             <div class="form-group mb-4">
               <label for="" class="primary-color" style="font-size:30px">Testimonials</label>
               <p class="text-muted">Write a good review from your previous client's make your profile  worthy to buyers and potential clients</p>
           
               <div class="npi-container testimonial">
                    <div class="npi-card input-ctn">
                        <label for="img-upload" class="web-label">
                          <span><a href="/realtor/reviews">New Testimonial</a></span>
                        </label>
                    </div>
                    <div class="testimonial-card">
                         <div class="update-ctn">
                             <div class="primary-color cursor-p dropdown text-end"><i class="fa fa-ellipsis-h"></i></div>
                             <div class="edet-ctn">
                              <a href="/realtor/reviews"><img width="18px" src="{{asset('agency/asset/img/icons/pen-icon.png')}}" alt=""> &nbsp; Edit Testimonial</a>
                              <span class="trash-card"><i class="fa fa-trash"></i> &nbsp; Delete Testimonial</span>
                             </div>
                         </div>
                         <div class="img-ctn"><img src="{{asset('agency/asset/img/user-img.png')}}" alt=""></div>
                         <h4 class="tc-name">Kalu victor </h4>
                         <div class="tc-stars">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                         </div>
                         <div class="text-center mb-2"><img width="20px" src="{{asset('agency/asset/img/icons/quotation-icon.png')}}" alt="">
                         </div>
                         <p class="tc-description text-center">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                         </p>
                    </div>
                    
                    <div class="testimonial-card">
                         <div class="update-ctn">
                             <div class="primary-color cursor-p dropdown text-end"><i class="fa fa-ellipsis-h"></i></div>
                             <div class="edet-ctn">
                              <a href="/realtor/reviews"><img width="18px" src="{{asset('agency/asset/img/icons/pen-icon.png')}}" alt=""> &nbsp; Edit Testimonial</a>
                              <span class="trash-card"><i class="fa fa-trash"></i> &nbsp; Delete Testimonial</span>
                             </div>
                         </div>
                         <div class="img-ctn"><img src="{{asset('agency/asset/img/user-img.png')}}" alt=""></div>
                         <h4 class="tc-name">Kalu victor </h4>
                         <div class="tc-stars">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                         </div>
                         <div class="text-center mb-2"><img width="20px" src="{{asset('agency/asset/img/icons/quotation-icon.png')}}" alt="">
                         </div>
                         <p class="tc-description text-center">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                         </p>
                    </div>

                    <div class="testimonial-card">
                         <div class="update-ctn">
                             <div class="primary-color cursor-p dropdown text-end"><i class="fa fa-ellipsis-h"></i></div>
                             <div class="edet-ctn">
                              <a href="/realtor/reviews"><img width="18px" src="{{asset('agency/asset/img/icons/pen-icon.png')}}" alt=""> &nbsp; Edit Testimonial</a>
                              <span class="trash-card"><i class="fa fa-trash"></i> &nbsp; Delete Testimonial</span>
                             </div>
                         </div>
                         <div class="img-ctn"><img src="{{asset('agency/asset/img/user-img.png')}}" alt=""></div>
                         <h4 class="tc-name">Kalu victor </h4>
                         <div class="tc-stars">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                         </div>
                         <div class="text-center mb-2"><img width="20px" src="{{asset('agency/asset/img/icons/quotation-icon.png')}}" alt="">
                         </div>
                         <p class="tc-description text-center">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                         </p>
                    </div>

                    <div class="testimonial-card">
                         <div class="update-ctn">
                             <div class="primary-color cursor-p dropdown text-end"><i class="fa fa-ellipsis-h"></i></div>
                             <div class="edet-ctn">
                              <a href="/realtor/reviews"><img width="18px" src="{{asset('agency/asset/img/icons/pen-icon.png')}}" alt=""> &nbsp; Edit Testimonial</a>
                              <span class="trash-card"><i class="fa fa-trash"></i> &nbsp; Delete Testimonial</span>
                             </div>
                         </div>
                         <div class="img-ctn"><img src="{{asset('agency/asset/img/user-img.png')}}" alt=""></div>
                         <h4 class="tc-name">Kalu victor </h4>
                         <div class="tc-stars">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                           <img src="{{asset('agency/asset/img/icons/star-icon-gray.png')}}" alt="">
                         </div>
                         <div class="text-center mb-2"><img width="20px" src="{{asset('agency/asset/img/icons/quotation-icon.png')}}" alt="">
                         </div>
                         <p class="tc-description text-center">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolor fugit aliquid odio sunt ab.
                         </p>
                    </div>
               </div>
          </div>
        </div>
     </main>
</div>
