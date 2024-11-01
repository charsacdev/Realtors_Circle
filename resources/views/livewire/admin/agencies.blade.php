<div class="main-content">
    <section>
         <div class="container">
             <div class="row mt-5">
                 <div class="col-lg-12">
                     <div class="table-responsive">
                         <table class="table dt_datatable" id="user-table">
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
                                             <span>Name</span>
                                         </div>
                                     </div>
                                 </th>
                                 <th>Email Address</th>
                                 <th>Role</th>
                                 <th>Signup Date</th>
                                 <th>Action</th>
                             </thead>
                             <tbody>
                                @if ($agencies)
                                    @foreach ($agencies as $agency)
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
                                                        <span>{{ getFirstLetter($agency->company_name) }}</span>
                                                    </div>
                                                    <div class="apt_ful">
                                                        {{ "$agency->company_name" }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $agency->email }}</td>
                                            <td>{{ Str::title($agency->role) }}</td>
                                            <td>{{ formatDate($agency->created_at) }} </td>
                                            <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#usersModal{{ $agency->id }}">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </td>
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


     @if($agencies)
     @foreach ($agencies as $agency)
         <div class="modal fade" id="usersModal{{ $agency->id }}" tabindex="-1" aria-labelledby="usersModalLabel{{ $agency->id }}" aria-hidden="true">
             <div class="modal-dialog modal-sm modal-dialog-centered">
                 <div class="modal-content">
                     <div class="modal-body rounded">
                         <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                             <div class="rea-app-img">
                                @php
                                    $settings = json_decode(@$agency->settings->settings);
                                    $logo = @$settings->logo;
                                @endphp

                                 <img src="
                                   @if ($logo)
                                        {{asset('storage/uploads/' . $logo)}}
                                    @else
                                        {{asset('agency-dashboard/asset/img/default_logo.png')}}
                                   @endif"  alt="logo"
                                   />
                             </div>
                         </div>
                         <h3 class="text-center mb-4">{{ "$agency->company_name" }}</h3>
                             <a href="{{ route('admin.agency.details', $agency->slug) }}" class="new-discussion-btn btn-success d-block w-100 mb-3">View Profile</a>
                             <button data-bs-dismiss="modal" class="new-discussion-btn w-100 d-block outline-success text-dark">Back</button>
                     </div>
                 </div>
             </div>
         </div>
     @endforeach
   @endif
   </div>