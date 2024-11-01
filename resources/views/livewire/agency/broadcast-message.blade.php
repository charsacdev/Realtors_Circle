<div>
     <main>
         <div class="container">
             <h3 class="mt-5 fw-bold">Broadcast Message</h3>
             <p class="text-muted">Send Customerzied Message to your clients,both old and new using whatsapp or email channel.</p>
              <form wire:submit.prevent="sendMail">
                @csrf
                   <div class="row my-5">
                        <div class="col-12 mb-4">
                             <div class="form-group">
                                  <label for="">Select Channel</label>
                                  <select name="" id="" name="channel" wire:model="channel" class="form-control">
                                   <option value="">Select</option>
                                   <option value="email">Email</option>
                                   <option value="whatsapp">Whatsapp</option>
                                  </select>
                             </div>
                             <div>
                               @error('channel') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                               <label for="">Subject</label>
                               <input type="text" name="subject" wire:model="subject" class="form-control">
                               <div>
                                    @error('subject') <span class="error">{{ $message }}</span> @enderror
                                  </div>
                          </div>
                        </div>
                        <div class="col-12 mb-4 pb-5" style="border-bottom: 2px dashed #ccc;">
                         
                         </div>
                        <div class="col-12 mt-3 mb-4">
                             <div class="form-group" wire:ignore>
                                  <textarea rows="10" id="" class="form-control summernote" wire:model="content" placeholder="Type response"></textarea>
                             </div>
                             <div>
                               @error('content') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                        <div class="col-12">
                             <button  class="new-discussion-btn btn-success w-100">
                               Send Message &nbsp;
                               <span wire:loading>
                                    <i class="fa fa-spin fa-spinner"></i>
                               </span>
                          </button>
                        </div>
                   </div>
              </form>
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
 