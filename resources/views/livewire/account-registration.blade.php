<div>
    <div class="auth-bg" style="background-image: url('./realtors/asset/img/img-bg-12.png');">
        <div class="overlay"></div>
        <main>
          <div class="container">
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10 position-relative">
                <!-- Signup Form -->
                <div class="row align-items-center" id="signup-container">
                  <div class="col-md-5 col-lg-4 mt-4 mt-md-0">
                    <div class="auth-pg-sidebar text-center text-md-start">
                      <h3>Welcome back!</h3>
                      <p class="fs-14 text-capitalize text-light">
                        to realtors circle. signup to continue.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-8">
                    <form wire:submit.prevent="register" class="reg-form" method="POST">
                      @csrf
                      <h3 class="form-title">Create an account(Realtor)</h3>
                      <div class="form-socials">
                        <div class="item"><img src="realtors/asset/img/icons/google-icon-color.png" alt=""></div>
                        <div class="item"><img src="realtors/asset/img/icons/faceboo-icon-blue.png" alt=""></div>
                        <div class="item"><img src="realtors/asset/img/icons/linkedin-icon-blue.png" alt=""></div>
                      </div>
                      <div class="form-or">
                        <span>Or</span>
                      </div>
                      <h5 class="form-sub-title mt-5">Sign up with email</h5>
                      <div class="mb-5">
                        <span>Already have account? </span> <a href="signin" wire:navigate id="load-signin" class="primary-text">Sign in</a>
                      </div> 
                          <div class="form-group mb-5">
                            <input type="text" class="w-100" wire:model="form.email" name="" placeholder="Email Address" id="">
                            <div>
                              @error('form.email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="input-group i-group-div">
                                <input type="password" id="password" name="password" wire:model="form.password" class="form-control shadow-none psw_input" placeholder="Password">
                                <div class="input-group-text rlf-hd">
                                    <span class="d-none rlf-hd-show"><i class="fa fa-eye"></i></span>
                                    <span class="rlf-hd-hide"><i class="fa fa-eye-slash"></i></span>
                              </div>
                          </div>
                          <div>
                            @error('form.password') <span class="error">{{ $message }}</span> @enderror
                          </div>
                          <div class="input-group i-group-div my-5">
                                <input type="password" id="password_confirmation" wire:model="form.password_confirmation" name="password_confirmation" class="form-control shadow-none psw_input" placeholder="Confirm Password">
                                <div class="input-group-text rlf-hd">
                                    <span class="d-none rlf-hd-show"><i class="fa fa-eye"></i></span>
                                    <span class="rlf-hd-hide"><i class="fa fa-eye-slash"></i></span>
                              </div>
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

