<div>
    <main>
        <section>
          <div class="container">
            <div class="row mt-3">
              <div class="col-12 mb-5 mt-2">
                   <div class="d-flex align-items-center justify-content-between flex-wrap">
                       <select name="" id="table-swap" class="py-1 px-2 order-2 order-sm-1">
                            <option value="">Select</option>
                            <option value="realtors" selected>Current agency realtors</option>
                            <option value="applications">Realtor applications</option>
                       </select>
                       
                       <a href="/agency/create-realtors" class="new-discussion-btn bg-dark order-1 order-sm-2 mb-5 mb-sm-0"><img src="asset/img/icons/plus-icon.png" alt=""> &nbsp; Add New Realtor</a>
                  </div>
              </div>
              <div class="col-lg-12" id="realtor-container">
                <div class="table-responsive">
                     <table class="table" id="livelearn-table">
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
                                            <span>Realtor Name</span>
                                        </div>
                                    </div>
                               </th>
                               <th>City</th>
                               <th>State</th>
                               <th>Country</th>
                               <th>Rating</th>
                               <th>Action</th>
                          </thead>
                         <tbody>
                          @if ($realtors)
                            @foreach ($realtors as $realtor)
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
                                        <div class="apt_nit success">
                                          <span>{{ getFirstLetter($realtor->first_name) }}</span>
                                          </div>
                                        <div class="apt_ful">
                                        {{ "$realtor->first_name $realtor->last_name" }}
                                        </div>
                                    </div>
                                  </td>
                                  <td>{{ $realtor->city}}</td>
                                  <td>{{ $realtor->state }}</td>
                                  <td>{{ $realtor->country }}</td>
                                  <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                          <img src="{{ $realtor->average_rating >= 1 ? 'asset/img/icons/star-icon-yellow.png' : 'asset/img/icons/star-icon-gray.png' }}" width="18px" alt="">
                                          <img src="{{ $realtor->average_rating >= 2 ? 'asset/img/icons/star-icon-yellow.png' : 'asset/img/icons/star-icon-gray.png' }}" width="18px" alt="">
                                          <img src="{{ $realtor->average_rating >= 3 ? 'asset/img/icons/star-icon-yellow.png' : 'asset/img/icons/star-icon-gray.png' }}" width="18px" alt="">
                                          <img src="{{ $realtor->average_rating >= 4 ? 'asset/img/icons/star-icon-yellow.png' : 'asset/img/icons/star-icon-gray.png' }}" width="18px" alt="">
                                          <img src="{{ $realtor->average_rating >= 5 ? 'asset/img/icons/star-icon-yellow.png' : 'asset/img/icons/star-icon-gray.png' }}" width="18px" alt="">
                                    </div>
                                  </td>
                                  <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#currentRealtorModal{{ $realtor->id }}"><i class="fa fa-ellipsis-h"></i></td> 
                              </tr>
                            @endforeach
                          @endif
                         </tbody>
                     </table>
                </div>
              </div>

              <div class="col-lg-12 d-none" id="application-container">
                <div class="table-responsive">
                     <table class="table" id="realtor-table">
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
                                            <span>Applicant Name</span>
                                        </div>
                                    </div>
                               </th>
                               <th>State</th>
                               <th>City</th>
                               <th>Email Address</th>
                               <th>Phone Number</th>
                               <th>Status</th>
                               <th>Action</th>
                          </thead>
                         <tbody>
                          @if ($applications)
                            @foreach ($applications as $realtor)
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
                                        <div class="apt_nit success">
                                          <div class="td-img">
                                            <img src="
                                            @if ($realtor->profile_image)
                                              {{asset('storage/uploads/' . $realtor->profile_image)}}
                                            @else
                                              {{asset('realtor-dashboard/asset/img/user-img.png')}}
                                            @endif"  alt="icon"
                                            />
                                          </div>
                                          </div>
                                        <div class="apt_ful">
                                        {{ "$realtor->first_name $realtor->last_name" }}
                                        </div>
                                    </div>
                                  </td>
                                  <td>{{ "$realtor->state State" }}</td>
                                  <td>{{ $realtor->city }}</td>
                                  <td>{{ $realtor->email }}</td>
                                  <td>
                                    {{ $realtor->phone_number }}
                                  </td>
                                  <td><span class="live-badge {{ $realtor->pivot->is_seen ? 'danger' : 'success' }} w-auto">{{ $realtor->pivot->is_seen ? 'Pending' : 'New' }}</span></td>
                                  <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#appModal{{ $realtor->id }}"><i class="fa fa-ellipsis-h"></i></td>
                              </tr>
                            @endforeach
                          @endif
                         </tbody>
                     </table>
                </div>
              </div>
            </div>
            </div>
         </section>
      </main>


      <!--Modal for Realtors Application-->
      @if ($applications)
        @foreach ($applications as $realtor)
          <div class="modal fade" id="appModal{{ $realtor->id }}" tabindex="-1" aria-labelledby="appModalLabel{{ $realtor->id }}" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                      <div class="modal-body rounded">
                        <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                            <div class="rea-app-img">
                              <img src="
                              @if ($realtor->profile_image)
                                {{asset('storage/uploads/' . $realtor->profile_image)}}
                              @else
                                {{asset('realtor-dashboard/asset/img/user-img.png')}}
                              @endif"  alt="icon"
                              />
                            </div>
                        </div>
                          <h3 class="text-center mb-2">{{ "$realtor->first_name $realtor->last_name" }}</h3>
                          <div class="text-center">
                                <span class="live-badge {{ $realtor->pivot->is_seen ? 'danger' : 'success' }} mb-3 w-auto">{{ $realtor->pivot->is_seen ? 'Pending' : 'New' }}</span>
                          </div>
                            <a href="{{ route('agency.realtors-application', $realtor->id) }}" class="new-discussion-btn btn-success d-block w-100 mb-3">View Application</a>
                          
                            <button data-bs-dismiss="modal" class="new-discussion-btn w-100 d-block outline-success text-dark">Back</button>
                      </div>
                </div>
            </div>
          </div>
        @endforeach
      @endif

    {{-- Modal for current realtors --}}
    @if($realtors)
      @foreach ($realtors as $realtor)
          <div class="modal fade" id="currentRealtorModal{{ $realtor->id }}" tabindex="-1" aria-labelledby="currentRealtorModalLabel{{ $realtor->id }}" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-body rounded">
                          <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                              <div class="rea-app-img">

                                  <img src="
                                    @if ($realtor->profile_image)
                                      {{asset('storage/uploads/' . $realtor->profile_image)}}
                                    @else
                                      {{asset('realtor-dashboard/asset/img/user-img.png')}}
                                    @endif"  alt="icon"
                                    />
                              </div>
                          </div>
                          <h3 class="text-center mb-4">{{ "$realtor->first_name $realtor->last_name" }}</h3>
                              <a href="{{ route('agency.realtor-profile-details', $realtor->id) }}" class="new-discussion-btn d-block w-100 mb-3">View Profile</a>
                              <button data-bs-dismiss="modal" class="new-discussion-btn w-100 d-block outline-success text-dark">Back</button>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    @endif
</div>
