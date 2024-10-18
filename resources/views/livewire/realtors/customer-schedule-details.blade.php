<div>
    <main>
        <div class="container">
          <h3 class="mt-5 fw-bold">Message your Customer</h3>
            <p class="text-muted">Send a message direct and personalized message to your customers</p>
             
          <form action="">
               <div class="row my-5">
                    <div class="col-sm-6 mb-4">
                         <div class="form-group">
                              <label for="">First Name</label>
                              <input type="text" value="{{ $schedule->first_name }}" id="" class="form-control">
                         </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                         <div class="form-group">
                              <label for="">Last Name</label>
                              <input type="text" value="{{ $schedule->last_name }}" id="" class="form-control">
                         </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                         <div class="form-group">
                              <label for="">Email Address</label>
                              <input type="text" value="{{ $schedule->email }}" id="" class="form-control">
                         </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                         <div class="form-group">
                              <label for="">Phone Number</label>
                              <input type="text" value="{{ $schedule->phone_number }}" id="" class="form-control">
                         </div>
                    </div>
                    <div class="col-12 mb-4 pb-5" style="border-bottom: 2px dashed #ccc;">
                         <div class="form-group">
                              <label for="">Message</label>
                              <textarea rows="5" id="" class="form-control">{{ $schedule->reason }}</textarea>
                         </div>
                    </div>
                    <div class="col-12 mb-4">
                         <div class="form-group">
                              <label for="">Select Channel</label>
                              <select name="" id="" class="form-control">
                               <option value="">Select</option>
                               <option value="a{{ $schedule->email }}">Email</option>
                               <option value="{{ $schedule->phone_number }}">Whatsapp</option>
                              </select>
                         </div>
                    </div>
                    <div class="col-12 mt-3 mb-4">
                         <div class="form-group">
                              <label for="">Response</label>
                              <textarea rows="10" id="" class="form-control summernote" placeholder="Type response"></textarea>
                         </div>
                    </div>
                    <div class="col-12">
                         <button type="button" data-bs-toggle="modal" data-bs-target="#successModal" class="new-discussion-btn btn-success w-100">Send Response</button>
                    </div>
               </div>
          </form>
     </div>
      </main>
</div>
