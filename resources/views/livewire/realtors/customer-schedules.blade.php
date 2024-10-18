<div>
    <main>
        <div class="container">
            <br><br>
            <h3 class="mt-5 fw-bold">Customer's Schedule & Appointment</h3>
            <p class="text-muted">See all appointment made by client's, keep track of your performance</p>
             
             <div class="row my-5">
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
                                                <span>Client Name</span>
                                            </div>
                                        </div>
                                   </th>
                                   <th>Email Address</th>
                                   <th>Phone Number</th>
                                   <th>Date Booked</th>
                                   <th>Reason</th>
                                   <th>Action</th>
                              </thead>
                             <tbody>
                                @if($schedules)
                                    @foreach ($schedules as $schedule)
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
                                                    <span>{{ getFirstLetter($schedule->first_name) }}</span>
                                                    </div>
                                                <div class="apt_ful">
                                                    {{ "$schedule->first_name $schedule->last_name" }}
                                                </div>
                                            </div>
                                            </td>
                                            <td> {{ $schedule->email }}</td>
                                            <td> {{ $schedule->phone_number }}</td>
                                            <td>
                                                {{ formatDate($schedule->date_booked) }}
                                            </td>
                                            <td>{{ $schedule->reason }}</td>
                                            <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#appModal{{ $schedule->id }}"><i class="fa fa-ellipsis-h"></i></td>
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

      @if($schedules)
        @foreach ($schedules as $schedule)
            <div class="modal fade" id="appModal{{ $schedule->id }}" tabindex="-1" aria-labelledby="appModalLabel{{ $schedule->id }}" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body rounded">
                            <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                                <div class="rea-app-img">
                                    <img src="{{asset('realtor-dashboard/asset/img/user-img.png')}}"  alt="icon">
                                </div>
                            </div>
                            <h3 class="text-center mb-4">{{ "$schedule->first_name $schedule->last_name" }}</h3>
                                <a href="{{ route('realtor.customer-schedule-details', $schedule->id) }}" class="new-discussion-btn btn-success d-block w-100 mb-3">View</a>
                                <button data-bs-dismiss="modal" class="new-discussion-btn w-100 d-block outline-success text-dark">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      @endif

</div>
