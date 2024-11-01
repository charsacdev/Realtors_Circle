<div>
    
    <div class="auth-bg" style="background-image: url('{{ asset('realtors/asset/img/img-bg-12.png') }}');">
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
                      <h3>Hey, Great to have you back!</h3>
                      <p class="fs-14 text-capitalize text-light">
                        to realtors circle. Enter new password.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-8">
                    @if ($is_expired)
                      <form action="" class="reg-form">
                        <h3 class="form-title">New Password</h3>
                        <h4 class="mt-5">{{ $is_expired }}</h4>
                        <div class="mb-5 mt-3 text-end">
                          <span>Remembered password? </span> <a href="{{ route('signin') }}" id="load-signup" class="primary-text">Login</a>
                        </div>
                      </form>
                      @else
                      <form action="" class="reg-form" wire:submit.prevent="savePassword">
                        <br><br>
                        <h3 class="form-title">New Password</h3>
                         <br><br>
                        <div class="input-group i-group-div mb-1">
                            <input type="password" wire:model="password" name="password" class="form-control shadow-none psw_input" placeholder="Password">
                            <div class="input-group-text rlf-hd">
                                <span class="d-none rlf-hd-show"><i class="fa fa-eye"></i></span>
                                <span class="rlf-hd-hide"><i class="fa fa-eye-slash"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                          @error('password') <span class="error">{{ $message }}</span> @enderror
                        </div>
                       <br><br>
                        <div class="input-group i-group-div mb-3">
                              <input type="password" wire:model="password_confirmation" name="password_confirmation" class="form-control shadow-none psw_input" placeholder="Confirm Password">
                              <div class="input-group-text rlf-hd">
                                  <span class="d-none rlf-hd-show"><i class="fa fa-eye"></i></span>
                                  <span class="rlf-hd-hide"><i class="fa fa-eye-slash"></i></span>
                            </div>
                        </div>
        
                        <div class="mb-5 mt-3 text-end">
                          <span>Remembered password? </span> <a href="{{ route('signin') }}" id="load-signup" class="primary-text">Login</a>
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
                    @endif
                  </div>
                </div> 
              </div>
              <div class="col-lg-1"></div>
            </div>
          </div>
        </main>
      </div>
</div>
