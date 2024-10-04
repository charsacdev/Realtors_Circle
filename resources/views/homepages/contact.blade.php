@extends('homepages.header') 
  @section('contents')
     <br><br>
      <section class="my-5 py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-delay="500">
              <h2 class="section-sub-title mb-5">Contact Us</h2>
              <form id="contactForm" data-url="{{ route('submitMessage') }}" method="POST">
                   @csrf
                    <div class="form-group mb-5">
                         <label for="">Fullname</label>
                         <input type="text" name="name" required class="form-control mt-2">
                    </div>
                    <div class="form-group mb-5">
                         <label for="">Email Address</label>
                         <input type="text"name="email" required class="form-control mt-2">
                    </div>
                    <div class="form-group mb-5">
                         <label for="">Message</label>
                         <textarea class="form-control mt-2" required name="message" rows="7"></textarea>
                    </div>
                    <div id="formMessage"></div>
                    <div class="mt-5">
                         <button id="submitBtn" class="new-discussion-btn btn-success w-100 py-3">Send Message</button>
                    </div>
               </form>
            </div>
          </div>
        </div>
      </section>

      <div class="modal fade" id="contactUsModal" tabindex="-1" aria-labelledby="contactUsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                 <div class="modal-body rounded">
                   <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                       <img src="{{asset('realtors/asset/img/icons/verify-icon.png')}}" width="50px" alt="icon">
                   </div>
                      <h3 class="text-center mb-2">Thank You!</h3>
                     <div class="text-center mb-2">
                       We will get  back to you as soon as possible
                     </div>
                       <button data-bs-toggle="modal" data-bs-target="#contactUsModal" type="button" class="new-discussion-btn w-100 mb-2">Go Back</button>
                 </div>
            </div>
       </div>
      </div>

      <script src="{{asset('realtors/vendor/jquery/jQuery3.6.1.min.js')}}"></script>
      <script>
          $(document).ready(function(){
      
              //Form Submitting
              $('#contactForm').submit(function (e) {
                  e.preventDefault(); // Prevent the default form submission
      
                  let form = $(this);
                  let url = form.data('url'); // Get the form action URL
                  let formData = form.serialize(); // Serialize the form data

                  $("#submitBtn").prop('disabled', true).text('Processing...');
      
                  $.ajax({
                      url: url,
                      method: "POST",
                      data: formData,
                      success: function (response) {
      
                        $('#contactForm')[0].reset();
                         
                          // Show the success modal (appModal)
                          $('#contactUsModal').modal('show');

                          $("#submitBtn").prop('disabled', false).text('Send Message');
      
                      },
                      error: function (xhr) {
                          // Display error message(s)
                          let errors = xhr.responseJSON.errors;
                          let errorMessages = '<div class="alert alert-danger"><ul>';
      
                          $.each(errors, function (key, value) {
                              errorMessages += '<li>' + value + '</li>';
                          });
      
                          errorMessages += '</ul></div>';
                          $('#formMessage').html(errorMessages);
                      }
                  });
              });
          });
        </script>
  @endsection