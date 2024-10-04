<div>
    <main>
        <section>
         <div class="container">
          <h3 class="mt-5 fw-bold">Add New Property</h3>
          <p class="text-muted">Add new property, its details information,be precise be convincing!</p>
          <br>
           <form action="">
             <h6>Property Image</h6>
             <div class="npi-container" id="npi-container">
               <div class="npi-card input-ctn">
                   <label for="img-upload" class="label-container">
                     <input type="file" class="d-none" id="img-upload" multiple accept="image/*">
                     <img src="{{asset('realtor-dashboard/asset/img/icons/photo-add-icon.png')}}" alt="">
                     Upload Image
                   </label>
               </div>
               <div class="npi-card">
                 <img src="{{asset('realtor-dashboard/asset/img/property-img-2.png')}}" class="bg-prop" alt="">
                 <div class="trash-prop"><img src="{{asset('realtor-dashboard/asset/img/icons/trash-icon-red.png')}}" alt=""></div>
               </div>
             </div>
             <h6 class="mt-4">Property Video</h6>
             <div class="npi-container" id="npi-vid-container">
               <div class="npi-card input-ctn">
                   <label for="vid-upload" class="label-container">
                     <input type="file" class="d-none" id="vid-upload" multiple accept="video/*">
                     <img src="{{asset('realtor-dashboard/asset/img/icons/video-add-icon.png')}}" alt="">
                     Upload Video
                   </label>
               </div>
               <div class="npi-card video-ctn">
                 <video id="player1" controls playsinline data-poster="{{asset('realtor-dashboard/asset/img/property-img-2.png')}}">
                   <source src="{{asset('realtor-dashboard/asset/video/home-video3.mp4')}}"  type="video/mp4"></video>
                 <div class="trash-prop"><img src="{{asset('realtor-dashboard/asset/img/icons/trash-icon-red.png')}}" alt=""></div>
               </div>
             </div>
             <div class="row mt-4 mb-2">
               <div class="col-sm-7 col-lg-8 mb-4">
                 <div class="form-group">
                   <h6>Property Name</h6>
                   <input type="text" name="" id="" class="form-control">
                 </div>
               </div>
               <div class="col-sm-5 col-lg-4 mb-4">
                 <div class="form-group">
                   <h6>Price</h6>
                   <input type="text" name="" min="0" id="" class="form-control">
                 </div>
               </div>
               <div class="col-12 mb-4">
                 <div class="form-group">
                   <h6>Location (Map embed code)</h6>
                   <input type="text" name="" min="0" id="" class="form-control">
                 </div>
               </div>
               <div class="col-12 mb-4">
                 <div class="form-group">
                   <h6>Property Overview</h6>
                   <textarea name="" class="form-control summernote" id=""></textarea>
                 </div>
               </div>
               <div class="col-sm-6 col-lg-6 mb-4">
                 <div class="form-group">
                   <h6>Transaction Information</h6>
                   <select name="" id="" class="form-control">
                     <option value="">Select</option>
                     <option value="">For sale</option>
                     <option value="">For Leasing</option>
                     <option value="">Sold</option>
                   </select>
                 </div>
               </div>
               <div class="col-sm-6 col-lg-6 mb-4">
                 <div class="form-group">
                   <h6>Property Type</h6>
                   <select name="" id="" class="form-control">
                     <option value="">Select</option>
                     <option value="">Land</option>
                     <option value="">Building</option>
                   </select>
                 </div>
               </div>
               <div class="col-sm-6 col-lg-12 mb-4">
                 <div class="form-group">
                   <h6>Payment Mode</h6>
                   <select name="" id="" class="form-control">
                     <option value="">Select</option>
                     <option value="">One Off</option>
                     <option value="">Installment</option>
                   </select>
                 </div>
               </div>
              
             </div>
             <div class="form-group">
               <h6>Features</h6>
               <div class="create-propef border rounded px-4 pb-4">
                 <div class="row" id="feature-ctn">
                   <div class="col-sm-2 col-md-4 mt-4">
                     <div class="form-group">
                         <div class="form-check checkbox-success check-lg">
                           <input type="checkbox" checked class="form-check-input" id="biogas">
                           <label class="form-check-label" for="biogas">Biogas</label>
                       </div> 
                     </div>
                   </div>
                   <div class="col-sm-2 col-md-4 mt-4">
                     <div class="form-group">
                         <div class="form-check checkbox-success check-lg">
                           <input type="checkbox" checked class="form-check-input" id="recenter">
                           <label class="form-check-label" for="recenter">Recreational Center</label>
                       </div> 
                     </div>
                   </div>
                   <div class="col-sm-2 col-md-4 mt-4">
                     <div class="form-group">
                         <div class="form-check checkbox-success check-lg">
                           <input type="checkbox" checked class="form-check-input" id="goroad">
                           <label class="form-check-label" for="goroad">Good Road</label>
                       </div> 
                     </div>
                   </div>
                   <div class="col-sm-2 col-md-4 mt-4">
                     <div class="form-group">
                         <div class="form-check checkbox-success check-lg">
                           <input type="checkbox" class="form-check-input" id="solar">
                           <label class="form-check-label" for="solar">Solar Energy</label>
                       </div> 
                     </div>
                   </div>
                   <div class="col-sm-2 col-md-4 mt-4">
                     <div class="form-group">
                         <div class="form-check checkbox-success check-lg">
                           <input type="checkbox" class="form-check-input" id="perifence">
                           <label class="form-check-label" for="perifence">Perimeter Fencing</label>
                       </div> 
                     </div>
                   </div>
                   <div class="col-sm-2 col-md-4 mt-4">
                     <div class="form-group">
                         <div class="form-check checkbox-success check-lg">
                           <input type="checkbox" class="form-check-input" id="earena">
                           <label class="form-check-label" for="earena">Event Arena</label>
                       </div> 
                     </div>
                   </div>
                 </div>
                   <button type="button" data-bs-toggle="modal" data-bs-target="#featureModal" class="new-discussion-btn bg-transparent text-dark border rounded mt-4">Add new feature</button>
               </div>
             </div>
             <div class="d-flex align-items-center justify-content-between my-5">
               <a href="/realtor/properties" class="new-discussion-btn danger px-5">Discard</a>
               <button class="new-discussion-btn btn-success px-5">Save</button>
             </div>
           </form>
         </div>
        </section>
       </main>


       <!--Add new category-->
       <div class="modal fade" id="featureModal" tabindex="-1" aria-labelledby="featureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
             <div class="modal-content">
                  <div class="modal-body rounded">
                   <form action="">
                    <label for="">Name</label>
                    <input type="text" name="name"  class="form-control">
                     <button data-bs-dismiss="modal" id="add-feature-btn" type="button" class="new-discussion-btn btn-success w-100 mt-4 mb-2">Done</button>
                   </form>
                  </div>
             </div>
        </div>
    </div>


</div>

 <!--IMAGE JS-->
 <script>
  document.addEventListener('DOMContentLoaded', function(){
      document.getElementById('img-upload').addEventListener('change', function(){
          var input = this;
          if (input.files && input.files[0]){
              for (let i = 0; i < input.files.length; i++){
                console.log(input.files[i].name)

                var reader = new FileReader();
                reader.onload = function(e) {
                  let html = `
                    <div class="npi-card">
                      <img src="${e.target.result}" class="bg-prop" alt="">
                      <div class="trash-prop"><img src="asset/img/icons/trash-icon-red.png" alt=""></div>
                    </div>
                  `;
                    document.getElementById('npi-container').innerHTML += html;
                }

                reader.readAsDataURL(input.files[i]);

              }
          }
      })
  })
</script> 

<!--VIDEO JS-->
<script>
  var videoContainers = $('.video-ctn');

  document.getElementById('vid-upload').addEventListener('change', function(event) {
  const file = event.target.files;
  console.log(file);

  for(let i = 0; i < file.length; i++){


    var playerId = videoContainers.length + 1;
    
    if (file && file[i].type.startsWith('video/')) {

          const reader = new FileReader();
          
          reader.onload = function(event) {
              // const videoElement = document.createElement('video');
              // videoElement.src = event.target.result;
              // videoElement.controls = true;

            

              var htm = `
                <div class="npi-card video-ctn">
                  <video id="player${playerId}" controls playsinline data-poster="">
                    <source src="${event.target.result}"  type="video/mp4"></video>
                  <div class="trash-prop"><img src="asset/img/icons/trash-icon-red.png" alt=""></div>
                </div>
              `;

                const parser = new DOMParser();
                const doc = parser.parseFromString(htm,'text/html');
                const videoElement = doc.body.firstChild;
              
              const ctn = document.getElementById('npi-vid-container');
              // ctn.innerHTML += html;
              ctn.appendChild(videoElement);
              playVideo(`#player${playerId}`);
          };
          
          reader.readAsDataURL(file[i]);
    } 
    
  }
});


function playVideo(id){
    const player = new Plyr(id, {
      controls: ['play-large',],
      debug: false
  });
}
</script>
