<div>
    <main>
        <div class="container">
             <form wire:submit.prevent="updateFaq" method="POST">
                @csrf
                <h4 class="form-title mt-4">Update FAQ</h4>
                 <div class="form-group mb-4 mt-5">
                       <label for="">Question</label>
                       <input type="text" class="form-control" value="{{ $question }}" wire:model="form.question" name="question" placeholder="Enter question">
                       <div>
                        @error('form.question') <span class="error">{{ $message }}</span> @enderror
                      </div>
                 </div>
                 <div class="form-group mb-4">
                       <label for="">Answer</label>
                       <textarea rows="4" wire:model="form.response" class="form-control" name="answer" placeholder="Enter answer">{{ $response }}</textarea>
                       <div>
                        @error('form.response') <span class="error">{{ $message }}</span> @enderror
                      </div>
                 </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                       <a href="{{ route('agency.website-settings') }}" class="new-discussion-btn outline-success px-5">Back</a>
                       <button type="submit"   class="new-discussion-btn btn-success px-5">
                        Save &nbsp;
                        <span wire:loading>
                          <i class="fa fa-spinner fa-spin"></i>
                        </span>
                    </button>
                  </div>
             </form>

        </div>
      </main>
</div>

