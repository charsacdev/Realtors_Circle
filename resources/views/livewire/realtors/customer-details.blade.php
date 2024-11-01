<div>
     <main>
          <div class="container">
            <h3 class="mt-5 fw-bold">Message your Customer</h3>
            <p class="text-muted">Send a message direct and personalized message to your customers</p>
             
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
                    <div class="hr-dashed-line my-5"></div>
                    <form wire:submit.prevent="sendMail">
                         @csrf
                         <div class="col-12 mb-4">
                              <div class="form-group">
                                   <label for="">Select Channel</label>
                                   <select name="channel" wire:model="channel" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="email">Email</option>
                                        <option value="whatsapp">Whatsapp</option>
                                   </select>
                                   <div>
                                        @error('channel') <span class="error">{{ $message }}</span> @enderror
                                   </div>
                              </div>
                         </div>
                         <div class="col-12 mb-4">
                              <div class="form-group">
                                   <label for="">Subject</label>
                                   <input type="text" wire:model="subject" class="form-control">
                              </div>
                              <div>
                                   @error('subject') <span class="error">{{ $message }}</span> @enderror
                              </div>
                         </div>
                    
                         <div class="col-sm-12" wire:ignore>
                              <label for="">Content</label>
                              <textarea name="" class="form-control summernote" wire:model="content" rows="8" placeholder="Type here..." id=""></textarea>
                         </div>
                         <div class="mb-5">
                              @error('content') <span class="error">{{ $message }}</span> @enderror
                         </div>
                         <div class="col-12 mb-4">
                              <button class="new-discussion-btn btn-success w-100">
                                   Send Message &nbsp;
                                   <span wire:loading>
                                        <i class="fa fa-spin fa-spinner"></i>
                                   </span>
                              </button>
                         </div>
                    </form>
               </div>
          </div>
     </main>
</div>


@push('scripts')
<script>
  $(document).ready(function(){
       if($('.summernote').length > 0){

            $('.summernote').summernote({
                 height: 300, // Set the height of the editor
                 placeholder: 'Start typing...',
                 //   fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'],
                 toolbar: [
                      // Full toolbar options
                      ['style', ['style']],
                      ['font', ['bold', 'italic', 'underline', 'clear']],
                      ['fontname', ['fontname']],
                      ['fontsize', ['fontsize']],
                      ['color', ['color']],
                      ['para', ['ul', 'ol', 'paragraph']],
                      ['height', ['height']],
                      ['table', ['table']],
                      ['insert', ['link', 'picture', 'video', 'hr']],
                      ['view', ['fullscreen', 'codeview', 'help']],
                      ['misc', ['undo', 'redo']]
                 ],
                 callbacks: {
                      onChange: function(contents) {
                           @this.set('content', contents);
                      }
                 }
            });
       }
  });
</script>
@endpush
