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
                        to realtors circle. Verify your email to continue.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-8">
                    @if (!$verified)
                      <form class="reg-form" wire:submit.prevent="resendLink" method="POST">
                        @csrf
                        <h3 class="form-title">Verify Your Email Address</h3>
                        <h6>Thank you for signing up with Realtors Circle!</h6>
                        
                        <p>
                          <small>
                            We’ve sent a verification email to <b class="primary-text">{{ $user->email }}</b>. 
                            Please check your inbox (and your spam or promotions folder) 
                            for an email with the subject “<b>Please Verify Your Email Address for Realtors Circle.</b>”
                          </small>
                        </p>
                        <p>
                          @if ($resend_success)
                            <div class="alert alert-success">
                              <small>
                                A new verification email has been sent to <b class="primary-text">{{ $user->email }}</b>.
                              </small>
                            </div>
                          @elseif ($resend_failure)
                            <div class="alert alert-danger">
                              <small>
                               Something went wrong, Please click on <b>Resend Verification Email</b> below.
                              </small>
                            </div>
                          @endif
                        </p>
                        <p>
                          <small>
                            If you didn’t receive the email, you can:
                          </small>
                          <div>
                            <button class="new-discussion-btn btn-success">
                              Resend Verification Email &nbsp;
                              <span wire:loading>
                                <i class="fa fa-spin fa-spinner"></i>
                              </span>
                            </button>
                          </div>
                        </p>
                        <p class="mt-4">
                          <small>
                            Still need help?  <br>Reach out to us at <span class="primary-text">support@realtorscircle.com</span>.
                          </small>
                        </p>
                      </form>
                    @endif
                    @if ($verified)
                      <div class="reg-form">
                        <h3 class="form-title">Email Verification Successful! 🎉</h3>
                        <p>
                          <small>
                            Your account with Realtors Circle is now fully activated. You can now enjoy all the features and benefits we offer.
                          </small>
                        </p>
                        <h5> What’s next?</h5>
                        <p>
                          <small>
                          <ul style="list-style-type: circle!important;">
                            <li><b>Explore Listings</b>: Start browsing properties tailored to your preferences.</li>
                            <li><b>Update Your Profile</b>: Complete your profile for a more personalized experience.</li>
                            <li><b>Connect with Realtors/Agencies</b>: Get in touch with trusted real estate professionals.</li>
                          </ul>
                          </small>
                          <br><br>
                          <a class="new-discussion-btn btn-success" href="{{ route('signin') }}">Login</a>
                        </p>
                        <p class="mt-4">
                          <small>
                            Need help?  <br>Feel free to contact us at <span class="primary-text">support@realtorscircle.com</span>.
                          </small>
                        </p>
                        <p>
                          <small>Welcome aboard!</small><br>
                          <small>The Realtors Circle Team</small>
                        </p>
                      </div>
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
