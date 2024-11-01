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
                      <h3>Welcome back!</h3>
                      <p class="fs-14 text-capitalize text-light">
                        to realtors circle. login to continue.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-8">
                    <form wire:submit="login" method="POST" class="reg-form">
                      @csrf
                        <br>
                      <h3 class="form-title">Log In</h3>
                      @if($errorMessage)
                          <div class="alert alert-danger">
                        {{ $errorMessage }}</i>
                      </div>
                      @endif
                      <div class="form-group">
                        <input type="text" class="w-100" name="email" wire:model="form.email" placeholder="Email Address" id="">
                        <div class="mb-3">
                          @error('form.email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                      </div>
                      <div class="input-group i-group-div">
                            <input type="password" name="password" wire:model="form.password" class="form-control shadow-none psw_input" placeholder="Password">
                            <div class="input-group-text rlf-hd">
                                <span class="d-none rlf-hd-show"><i class="fa fa-eye"></i></span>
                                <span class="rlf-hd-hide"><i class="fa fa-eye-slash"></i></span>
                          </div>
                      </div>
                      <div class="mb-3">
                        @error('form.password') <span class="error">{{ $message }}</span> @enderror
                      </div>
      
                      <a href="forgotpassword" class="text-dark">Forgot Password?</a>
                      <div class="mb-5 mt-3 text-end">
                        <span>Don't have account? </span> <a href="signup" wire:navigate id="load-signup" class="primary-text">Sign up</a>
                      </div>
                      <div class="text-end">
                        <button class="primary-btn btn-rounded">
                          Contine &nbsp;
                          <span wire:loading>
                            <i class="fa fa-spinner fa-spin"></i>
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
