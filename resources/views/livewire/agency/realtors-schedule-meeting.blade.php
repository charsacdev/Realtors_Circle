<div>
   
    <main>
        <section>
             <div class="container">
                  <form action="">
                       <h4 class="form-title">Meeting Schedule</h4>
                       <div>
                         <div>
                              <b>Realtor: </b> {{ "$realtor->first_name $realtor->last_name" }}
                         </div>
                         <div>
                              <b>Email: </b> {{ $realtor->email }}
                         </div>
                       </div>

                       <div class="row mt-5">
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Select Date</h6>
                                      <input type="date" name="" id="" class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                 <div class="form-group">
                                      <h6>Select Time</h6>
                                      <input type="time" placeholder="me" id="" class="form-control">
                                 </div>
                            </div>
                            <div class="col-12 mb-4">
                                 <div class="form-group">
                                      <h6>Google meet link</h6>
                                      <input type="text" name="" id="" class="form-control">
                                 </div>
                            </div>
                            <div class="col-12 mb-4">
                                 <button type="button" data-bs-toggle="modal" data-bs-target="#successModal" class="new-discussion-btn btn-success w-100">Send Mail</button>
                            </div>
                       </div>
                  </form>
             </div>
         </section>
      </main>
      
</div>
