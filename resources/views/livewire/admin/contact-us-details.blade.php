<div class="main-content">
    <div class="container">
         <form wire:submit.prevent="sendMail">
              <div class="row mt-4">
                   <div class="col-sm-6 mb-4">
                        <div class="form-group">
                             <h6>Fullname</h6>
                             <input type="text" value="{{ $message->fullname }}" name="" id="" class="form-control">
                        </div>
                   </div>
                   <div class="col-sm-6 mb-4">
                        <div class="form-group">
                             <h6>Email Address</h6>
                             <input type="text" value="{{ $message->email }}" name="" id="" class="form-control">
                        </div>
                   </div>
                   <div class="col-sm-12">
                        <div class="form-group">
                             <h6>Question</h6>
                             <textarea name="" rows="5" id="" class="form-control">{{ $message->message }}</textarea>
                        </div>
                   </div>
                   <div class="hr-dashed-line my-5"></div>
                   <div class="col-12 mb-4">
                         <div class="form-group">
                         <h6>Select Channel</h6>
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
                   <div class="col-sm-12 mb-4">
                    <div class="form-group">
                         <h6>Subject</h6>
                         <input type="text" wire:model="subject" class="form-control">
                         <div>
                              @error('subject') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                   </div>
                   <div class="col-sm-12" wire:ignore>
                    <h6>Content</h6>
                        <textarea name="" class="form-control summernote" wire:model="content" rows="8" placeholder="Type here..." id=""></textarea>
                    </div>
                    <div class="mb-5">
                          @error('content') <span class="error">{{ $message }}</span> @enderror
                    </div>
                   <div class="col-12 mb-4">
                        <button type="submit" id="genpswd" class="new-discussion-btn btn-success w-100">
                         Send Mail &nbsp;
                         <span wire:loading>
                              <i class="fa fa-spin fa-spinner"></i>
                         </span>
                    </button>
                   </div>
              </div>
         </form>
    </div> 
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