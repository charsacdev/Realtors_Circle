<div>
    <main>
        <section class="mv-hero">
          <div class="container">
            <div class="row">
              <div class="col-md-6 order-2 order-md-1">
                <div class="hero-text-ctn">
                  <h4>Introducing Our Pro Version</h4>
                  <h1>Connect With Your Leads With Our Pro Features</h1>
                </div>
                <button class="primary-btn btn-rounded">Upgrade to Pro Version</button>
              </div>
              <div class="col-md-6 position-relative order-1 order-md-2">
                <img src="{{asset('realtor-dashboard/asset/img/mv-img.png')}}" class="img-flui" alt="">
              </div>
            </div>
          </div>
        </section>
        <section class="mv-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 order-2 order-md-1">
                <h3 class="mv-title">
                  Know your page insight and statistics.
                </h3>
                <p class="mv-sub-title">
                  know how many users visited your page and generate leads form there.
                </p>
                <button class="primary-btn btn-rounded mt-lg-5 mt-3">Upgrade to Pro Version</button>
              </div>
              <div class="col-md-6 order-1 order-md-2 mb-3 mb-md-0">
                <img src="{{asset('realtor-dashboard/asset/img/mv-img-2.png')}}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </section>
        <section class="mv-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 mb-3 mb-md-0">
                <img src="{{asset('realtor-dashboard/asset/img/mv-img-3.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-md-6">
                <h3 class="mv-title">be able to manage your potential clients</h3>
                <p class="mv-sub-title">
                  automatically collect info about potential clients using our system.
                </p>
                <button class="primary-btn btn-rounded mt-lg-5 mt-3">Upgrade to Pro Version</button>
              </div>
            </div>
          </div>
        </section>
        <section class="mv-section">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-lg-8 order-2 order-md-1">
                <h3 class="mv-title">
                  potential clients can send you direct messages.
                </h3>
                <p class="mv-sub-title">
                  You can send a message to all your clients a direct whatsapp message or via email channel
                </p>
                <button class="primary-btn btn-rounded mt-lg-5 mt-3">Upgrade to Pro Version</button>
              </div>
              <div class="col-md-5 col-lg-4 order-1 order-md-2 mb-3 mb-md-0">
                <img src="{{asset('realtor-dashboard/asset/img/mv-img-4.png')}}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </section>
        <section class="mv-section">
          <div class="container">
            <h1 class="mv-lg-title text-center">Subscribe to our pro version now!</h1>
            <p class="mv-sub-title text-center">get a chance to track your potential clients</p>
            <div class="row mt-5">
              <div class="col-md-6 mb-5 mb-md-0">
                <div class="mv-card">
                  <h5>Free Version</h5>
                  <h1>Features</h1>
                  <ul style="list-style: none">
                    <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Post available properties</li>
                    <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Profile customization</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mv-card pro">
                    <h5>Pro Version</h5>
                    <h1 id="price">N7,200</h1>
                    <ul style="list-style: none">
                        <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Upload Properties</li>
                        <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Custom Ai features</li>
                        <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Messaging</li>
                        <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Manage Client's</li>
                        <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Client's Insight</li>
                        <li><img src="{{asset('agency/asset/img/icons/verify-icon.png')}}" style="width:20px;height:20px">&nbsp;Track Performance</li>
                    </ul>
            
                    <!-- Checkbox -->
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="verifiedBadgeCheck" size="50">
                        <label class="form-check-label" for="verifiedBadgeCheck">
                            Check to subscribe for Verified Badge (+N1,500)
                        </label>
                    </div>
            
                    <!-- Pay Button -->
                    <button id="payButton" class="primary-btn rounded mt-4 w-100">Pay N7,200</button>
                </div>
            </div>
            
            <script>
                // Initial price values
                const basePrice = 7200;
                const verifiedBadgePrice = 1500;
            
                // Getting elements
                const checkbox = document.getElementById('verifiedBadgeCheck');
                const priceElement = document.getElementById('price');
                const payButton = document.getElementById('payButton');
            
                // Update function when checkbox is toggled
                checkbox.addEventListener('change', function () {
                    let finalPrice = basePrice;
                    
                    // Add extra price if checkbox is checked
                    if (checkbox.checked) {
                        finalPrice += verifiedBadgePrice;
                    }
                    
                    // Update price display and button text
                    priceElement.innerText = `N${finalPrice.toLocaleString()}`;
                    payButton.innerText = `Pay N${finalPrice.toLocaleString()}`;
                });
            </script>
            
            </div>
          </div>
        </section>
      </main>
</div>
