<div class="main-content">
    <section>
         <div class="container">
             <div class="row mt-5">
                 <div class="col-lg-12">
                     <div class="table-responsive">
                         <table class="table dt_datatable" id="contact-table">
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
                                 <th>Status</th>
                                 <th>Date</th>
                                 <th>Action</th>
                             </thead>
                             <tbody>
                                @if ($messages)
                                    @foreach ($messages as $message)
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
                                                        <span>{{ getFirstLetter($message->fullname) }}</span>
                                                    </div>
                                                    <div class="apt_ful">
                                                        {{ $message->fullname }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->is_read == 1 ? "Read" : "Unread" }}</td>
                                            <td>{{ formatDate($message->created_at) }}</td>
                                            <td><a style="cursor: pointer" onclick="updateStatus({{ $message->id }}, '{{ route('admin.contact-us.details', $message->id) }}')"><i class="fa fa-eye"></i></a></td>
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
   </div>