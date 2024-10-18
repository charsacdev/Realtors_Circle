<div>
    <main>
        <div class="container">
          <h3 class="mt-5 fw-bold">Message your Customer</h3>
            <p class="text-muted">Send a message direct and personalized message to your customers</p>
           
             <form action="">
                  <div class="row mt-4">
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <h6>First Name</h6>
                                 <input type="text" value="{{ $customer->first_name }}" name="" id="" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <h6>Last Name</h6>
                                 <input type="text" value="{{ $customer->last_name }}" name="" id="" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <h6>Email Address</h6>
                                 <input type="text" value="{{ $customer->email }}" name="" id="" class="form-control">
                            </div>
                       </div>
                       <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                 <h6>Phone Number</h6>
                                 <input type="text" value="{{ $customer->phone_number }}" name="" id="" class="form-control">
                            </div>
                       </div>
                       <div class="col-12 mb-4">
                         <div class="form-group">
                              <label for="">Select Channel</label>
                              <select name="" id="" class="form-control">
                               <option value="">Select</option>
                               <option value="{{ $customer->email }}">Email</option>
                               <option value="{{ $customer->phone_number }}">Whatsapp</option>
                              </select>
                         </div>
                    </div>
                       <div class="hr-dashed-line my-5"></div>
                       
                       <div class="col-sm-12 mb-5">
                            <textarea name="" class="form-control summernote" rows="8" placeholder="Type here..." id=""></textarea>
                       </div>
                       <div class="col-12 mb-4">
                            <button data-bs-toggle="modal" data-bs-target="#successModal" type="button" id="genpswd" class="new-discussion-btn btn-success w-100">Send Message</button>
                       </div>
                  </div>
             </form>
        </div>
      </main>
</div>
