<div>
    
    <main>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Total Properties</h5>
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($propertyCount) }}</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Available Properties</h5>
                      <div class="live-badge success">
                        <img src="asset/img/icons/arrow-up-icon-green.png" alt="">
                        10%
                      </div>
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($availablePropertyCount) }}</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small><span class="primary-color">10%</span> increase compare to last month </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Total Sales</h5>
                      <div class="live-badge danger">
                        <img src="asset/img/icons/arrow-down-icon-red.png" alt="">
                        7%
                      </div>
                  </div>
                  <div class="dsb-card-body">
                    <h4>5,000</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small><span class="text-danger">7%</span> increase compare to last month </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Total Realtors</h5>
                      <div class="live-badge success">
                        <img src="asset/img/icons/arrow-up-icon-green.png" alt="">
                        10%
                      </div>
                  </div>
                  <div class="dsb-card-body">
                    <h4>5,000</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small><span class="primary-color">10%</span> increase compare to last month </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       <section>
        <div class="container">
          <div class="col-12 mb-4">
            <div class="ckt-card curr-card border">
                <div class="d-flex align-items-center flex-wrap justify-content-between mb-5">
                    <div>
                        <h5>Growth</h5>
                    </div>
                    <div class="chart-filter">
                        <div>
                            <select name="" id="" class="custom-select op-6">
                                <option value="">Weekly</option>
                                <option value="">Monthly</option>
                                <option value="">Yearly</option>
                            </select>
                        </div>
                        <div>
                            <img src="asset/img/icons/calendar-icon.png" alt=""> &nbsp;
                            <input type="text" class="custom-select" style="width: 100px;" data-provide="datepicker" placeholder="Select dates">
                        </div>
                    </div>
                </div>
                    <canvas   id="dsbChart"></canvas>
            </div>
          </div>
        </div>
       </section>
      
      </main>
</div>
