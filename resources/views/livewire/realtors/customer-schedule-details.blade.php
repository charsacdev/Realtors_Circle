<div>
    <main>
        <div class="container">
          <h3 class="mt-5 fw-bold">Message your Customer</h3>
            <p class="text-muted">Send a message direct and personalized message to your customers</p>
             
          
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
                    <form wire:submit.prevent="sendMail">
                         @csrf
                         <div class="col-12 mb-4">
                              <div class="form-group">
                                   <label for="">Select Channel</label>
                                   <select name="channel" id="" wire:model="channel" class="form-control">
                                   <option value="">Select</option>
                                   <option value="email">Email</option>
                                   <option value="whatsapp">Whatsapp</option>
                                   </select>
                              </div>
                              <div>
                                   @error('channel') <span class="error">{{ $message }} </span>@enderror
                              </div>
                         </div>
                         <div class="col-12">
                              <div class="form-group">
                                   <label for="">Subject</label>
                                   <input type="text" name="subject" wire:model="subject" class="form-control">
                              </div>
                              <div>
                                   @error('subject') <span class="error">{{ $message }} </span>@enderror
                              </div>
                         </div>
                         <div class="col-12 mt-3 mb-4">
                              <div class="form-group" wire:ignore>
                                   <label for="">Content</label>
                                   <textarea rows="10" id="" name="content" class="form-control summernote" wire:model="content" placeholder="Type response"></textarea>
                              </div>
                              <div>
                                   @error('content') <span class="error">{{ $message }} </span>@enderror
                              </div>
                         </div>
                         <div class="col-12">
                              <button type="submit" class="new-discussion-btn btn-success w-100">
                                   Send Response &nbsp;
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
