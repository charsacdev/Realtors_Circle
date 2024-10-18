<div>
    <main>
        <section>
          <div class="container">
            <h3 class="mt-5 fw-bold">Property Manager</h3>
            <p class="text-muted">Add new property,manage old property,update existing property</p>
             
            <div class="row mt-5">
              <div class="col-12 mb-5 mt-2">
                <a href="/realtor/create-properties" class="new-discussion-btn bg-dark"><img src="{{asset('realtor-dashboard/asset/img/icons/plus-icon.png')}}" alt=""> &nbsp; Add New Property</a>
              </div>
              <div class="col-lg-12">
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
                                            <span>Property</span>
                                        </div>
                                    </div>
                               </th>
                               <th>Location</th>
                               <th>Country</th>
                               <th>Status</th>
                               <th>Amount</th>
                               <th>Date Listed</th>
                               <th></th>
                          </thead>
                         <tbody>
                            @if($properties)
                            @foreach ($properties as $property)
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
                                        <div class="apt_ful">
                                           {{ $property->name }}
                                        </div>
                                    </div>
                                    </td>
                                    <td>{{ $property->location }}</td>
                                    <td>{{ $property->country }}</td>
                                    <td><span class="live-badge {{ $property->status == 1 ? 'success' : 'danger' }}">{{ $property->status == 1 ? 'Available' : 'Unavailable' }}</span></td>
                                    <td>N{{ number_format($property->amount,2) }}</td>
                                    <td>{{ formatDate($property->date_listed) }} </td>
                                    <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#editPropertyModal{{ $property->id }}"><i class="fa fa-ellipsis-h"></i></td>
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

      @if($properties)
      @foreach ($properties as $property)
        <div class="modal fade" id="editPropertyModal{{ $property->id }}" tabindex="-1" aria-labelledby="editPropertyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body rounded">
                        <a href="{{ route('realtor.properties.edit', $property->id) }}" class="new-discussion-btn btn-success d-block w-100 mb-4"><i class="fa fa-pen"></i> Edit Property</a>
                        
                            <button type="button" data-bs-dismiss="modal" class="new-discussion-btn outline-success w-100 mb-2">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
      @endif


</div>




