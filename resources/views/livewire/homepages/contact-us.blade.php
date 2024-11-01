<div>
    <br><br>
    <section class="my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-4">
            <h2 class="section-sub-title mb-5">Contact Us</h2>
            <form id="contactForm" wire:submit.prevent="saveContact" method="POST">
                 @csrf
                  <div class="form-group mb-5">
                       <label for="">Fullname</label>
                       <input type="text" name="name" wire:model="form.fullname"  class="form-control mt-2">
                       <div>
                        @error('form.fullname') <span class="error">{{ $message }}</span> @enderror
                   </div>
                  </div>
                  <div class="form-group mb-5">
                       <label for="">Email Address</label>
                       <input type="text"name="email" wire:model="form.email"  class="form-control mt-2">
                       <div>
                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                   </div>
                  </div>
                  <div class="form-group mb-5">
                       <label for="">Message</label>
                       <textarea class="form-control mt-2" wire:model="form.message" name="message" rows="7"></textarea>
                       <div>
                        @error('form.message') <span class="error">{{ $message }}</span> @enderror
                   </div>
                  </div>
                  <div id="formMessage"></div>
                  <div class="mt-5">
                       <button type="submit" class="new-discussion-btn btn-success w-100 py-3">
                        Send Message &nbsp;
                        <span wire:loading>
                            <i class="fa fa-spin fa-spinner"></i>
                        </span>
                    </button>
                  </div>
             </form>
          </div>
        </div>
      </div>
    </section>
</div>
