<div>
    <main>
        <div class="container">
            <h3 class="mt-5 fw-bold">Your Customer's</h3>
            <p class="text-muted">See all customer's list, make calls,view profile and keep them enagage with offers</p>
           
            <div class="text-end">
                <a href="{{ route('agency.customer.create') }}" class="new-discussion-btn bg-dark order-1 order-sm-2 mb-5 mb-sm-0"><img src="asset/img/icons/plus-icon.png" alt=""> &nbsp; Add New Customer</a>
            </div>
             <div class="row mt-4">
                  <div class="col-12">
                       <div class="table-responsive">
                            <table class="table livelearn-table" id="livelearn-table">
                                 <thead>
                                      <th>
                                           <div class="d-flex align-items-center gap-2">
                                               <div
                                                   class="form-check custom-checkbox checkbox-success check-lg">
                                                   <input type="checkbox" class="form-check-input"
                                                       id="customCheckBox8">
                                                   <label class="form-check-label"
                                                       for="customCheckBox8"></label>
                                               </div>
                                               <div class="apt_ful">
                                                   <span>Customer Name</span>
                                               </div>
                                           </div>
                                      </th>
                                      <th>Location</th>
                                      <th>Country </th>
                                      <th>Email Address</th>
                                      <th>Phone Number</th>
                                      <th>Action</th>
                                 </thead>
                                 <tbody>
                                    @if($customers)
                                        @foreach ($customers as $customer)
                                        <tr>
                                            <td>
                                                <div
                                                  class="d-flex align-items-center justify-content-start gap-2">
                                                  <div
                                                      class="custom-control custom-checkbox ms-2 d-inline">
                                                      <input type="checkbox"
                                                          class="custom-control-input"
                                                          id="customCheckBox2" required="">
                                                      <label class="custom-control-label"
                                                          for="customCheckBox2"></label>
                                                  </div>
                                                  <a href="/realtor/customers-details">
                                                  <div class="apt_nit success">
                                                      <span>{{ getFirstLetter($customer->first_name) }}</span>
                                                  </div>
                                                  </a>
                                                  <a href="/realtor/customers-details">
                                                  <div class="apt_ful">
                                                    {{ "$customer->first_name $customer->last_name" }}
                                                  </div>
                                                  </a>
                                              </div>
                                            </td>
                                             <td>{{ $customer->location }}</td>
                                             <td>{{ $customer->country }}</td>
                                             <td>{{ $customer->email }}</td>
                                             <td>{{ $customer->phone_number }}</td>
                                             <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#appModal{{ $customer->id }}"><i class="fa fa-ellipsis-h"></i></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                            </table>
                       </div>
                  </div>
             </div>
        </div>
      </main>
      @if($customers)
      @foreach ($customers as $customer)
          <div class="modal fade" id="appModal{{ $customer->id }}" tabindex="-1" aria-labelledby="appModalLabel{{ $customer->id }}" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-body rounded">
                          <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                              <div class="rea-app-img">
                                @unless ($customer->image)
                                    <img src="{{asset('realtor-dashboard/asset/img/user-img.png')}}"  alt="icon">
                                @else
                                    <img src="{{asset('storage/uploads/' . $customer->image)}}"  alt="icon">
                                @endunless
                              </div>
                          </div>
                          <h3 class="text-center mb-4">{{ "$customer->first_name $customer->last_name" }}</h3>
                              <a href="{{ route('agency.customers-details', $customer->id) }}" class="new-discussion-btn btn-success d-block w-100 mb-3">View</a>
                              <button data-bs-dismiss="modal" class="new-discussion-btn w-100 d-block outline-success text-dark">Back</button>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    @endif
</div>
