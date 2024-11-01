<div>
   
    <main>
        <section>
             <div class="container">
                  <h4 class="form-title">Meeting Schedule</h4>
                  <div>
                       <div>
                            <b>Realtor: </b> {{ "$realtor->first_name $realtor->last_name" }}
                         </div>
                         <div>
                              <b>Email: </b> {{ $realtor->email }}
                         </div>
                    </div>
                    
                    <form wire:submit.prevent="sendMail">
                         @csrf
                       <div class="row mt-5">
                            <div class="col-12 mb-4">
                                 <div class="form-group">
                                      <h6>Google meet link</h6>
                                      <input type="text" name="google_meet" wire:model="google_meet_url" id="" class="form-control">
                                 </div>
                                 <div>
                                   @error('google_meet_url') <span class="error">{{ $message }}</span> @enderror
                                 </div>
                            </div>
                            <div class="col-12 mb-4">
                              <div class="form-group">
                                   <h6>Subject</h6>
                                   <input type="text" name="subject" wire:model="subject" class="form-control">
                              </div>
                              <div>
                                   @error('subject') <span class="error">{{ $message }}</span> @enderror
                                 </div>
                            </div>
                            <div class="col-12 mb-4">
                              <div class="form-group" wire:ignore>
                                   <h6>Content</h6>
                                   <textarea name="content" class="form-control summernote" wire:model="content"  id=""  rows="5"></textarea>
                              </div>
                              <div>
                                   @error('content') <span class="error">{{ $message }}</span> @enderror
                                 </div>
                            </div>
                            <div class="col-12 mb-4">
                                 <button  class="new-discussion-btn btn-success w-100">
                                   Send Mail &nbsp;
                                   <span wire:loading>
                                        <i class="fa fa-spin fa-spinner"></i>
                                   </span>
                                 </button>
                            </div>
                       </div>
                  </form>
             </div>
         </section>
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
