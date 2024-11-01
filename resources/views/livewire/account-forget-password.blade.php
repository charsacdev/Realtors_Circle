<div>
    <div class="auth-bg" style="background-image: url('./realtors/asset/img/img-bg-12.png');">
        <div class="overlay"></div>
        <main>
          <div class="container">
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10 position-relative">
               
                <!-- Signin Form -->
                <div class="row align-items-center">
                  <div class="col-md-5 col-lg-4 mt-4 mt-md-0">
                    <div class="auth-pg-sidebar text-center text-md-start">
                      <h3>Forgot your password!</h3>
                      <p class="fs-14 text-capitalize text-light">
                        to realtors circle. proceed to reset it.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-8">
                    <form action="" class="reg-form" wire:submit.prevent="sendMail">
                      <br><br>
                      <h3 class="form-title mb-3">Forgot Password?</h3>
                      <span class="d-block mb-4">Now worries, enter your email to receive a reset link.</span>
                      <br>
                      @if ($successMessage)
                        <div class="alert alert-success">
                          {{ $successMessage }}
                        </div>
                      @endif
                      @if ($errorMessage)
                        <div class="alert alert-danger">
                          {{ $errorMessage }}
                        </div>
                      @endif
                      <br>
                      <div class="form-group mt-3 mb-5">
                        <input type="text" wire:model="email" class="w-100" name="" placeholder="Email Address" id="">
                        <div>
                          @error('email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                      </div>
                      
                      <div class="mb-5 mt-3 text-end">
                        <span>Remembered password? </span> <a href="signin" id="load-signup" class="primary-text">login</a>
                      </div>
                      <div class="text-end">
                        <button class="primary-btn btn-rounded">
                          Contine &nbsp;
                          <span wire:loading>
                            <i class="fa fa-spin fa-spinner"></i>
                          </span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div> 
      
              </div>
              <div class="col-lg-1"></div>
            </div>
          </div>
        </main>
    
      </div>
</div>
