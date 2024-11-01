<div class="main-content">
    <div class="container">
         <form wire:submit.prevent="sendMail" enctype="multipart/form-data">
              <div class="row mt-4">
                   <div class="col-sm-12">
                        <div class="form-group">
                             <h6>Select Recipients</h6>
                             <select name="channel" wire:model="channel" id="" class="form-control">
                                  <option value="">Select </option>
                                  <option value="agency">To all agency</option>
                                  <option value="realtor">To all realtor</option>
                                  <option value="all">To all</option>
                             </select>
                             <div>
                                   @error('channel') <span class="error">{{ $message }}</span> @enderror
                             </div>
                        </div>
                   </div>
                   <div class="col-sm-12 mt-4">
                    <div class="form-group">
                         <h6>Subject</h6>
                         <input type="text" wire:model="subject" class="form-control">
                         <div>
                              @error('subject') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                   </div>
                   <div class="hr-dashed-line my-5"></div>
                   <h6>Content</h6>
                   <div class="col-sm-12" wire:ignore>
                        <textarea name="" class="form-control summernote" wire:model="content" rows="8" placeholder="Type here..." id=""></textarea>
                   </div>
                   <div class="mb-5">
                         @error('content')  <span class="error">{{ $message }}</span>     @enderror
                   </div>
                   <div class="col-12 mb-4">
                        <button  type="submit" id="genpswd" class="new-discussion-btn btn-success w-100">
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
