<div>
    <main>
        <div class="container">
            <h3 class="mt-5 fw-bold">Your Contact Messages</h3>
            <p class="text-muted">See all  list of contact messages from your contact us page.</p>
           
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
                                                <td><a onclick="updateStatus({{ $message->id }},'{{ route('agency.contact-message-details', $message->id) }}')"><i class="fa fa-eye"></i></a></td>
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
</div>
