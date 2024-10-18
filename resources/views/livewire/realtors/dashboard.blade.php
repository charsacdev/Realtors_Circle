<div>
    <main>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Listed Properties</h5>
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
                        <img src="realtor-dashboard/asset/img/icons/arrow-up-icon-green.png" alt="">
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
                      <h5>Appointment Booking</h5>
                      <div class="live-badge danger">
                        <img src="realtor-dashboard/asset/img/icons/arrow-down-icon-red.png" alt="">
                        7%
                      </div>
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($bookingCount) }}</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small><span class="text-danger">7%</span> increase compare to last month </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Total Customers</h5>
                      <div class="live-badge success">
                        <img src="realtor-dashboard/asset/img/icons/arrow-up-icon-green.png" alt="">
                        10%
                      </div>
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($bookingCount) }}</h4>
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
                            <img src="realtor-dashboard/asset/img/icons/calendar-icon.png" alt=""> &nbsp;
                            <input type="text" class="custom-select" style="width: 100px;" data-provide="datepicker" placeholder="Select dates">
                        </div>
                    </div>
                </div>
                    <canvas   id="dsbChart"></canvas>
            </div>
          </div>
        </div>
       </section>
       <section>
        <div class="container d-none">
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="mb-2 d-flex align-items-center justify-content-between">
                <h6>Recent Interests</h6>
                <a href="transations.html">See all</a>
              </div>
              <div class="table-responsive">
                   <table class="table" id="livelearn-table">
                        <thead>
                             <th>
                                  <div class="d-flex align-items-center gap-2">
                                      <div
                                          class="form-check custom-checkbox checkbox-success check-lg">
                                          <input type="checkbox" class="form-check-input"
                                              id="customCheckBox8">
                                          <label class="form-check-label"
                                              for="customCheckBox8"></label>
                                      </div>
                                      <div class="apt_ful">
                                          <span> Name</span>
                                      </div>
                                  </div>
                             </th>
                             <th>Email</th>
                             <th>Interests </th>
                             <th>Phone Number</th>
                             <th>Date</th>
                             <th></th>
                        </thead>
                       <tbody>
                        <tr>
                            <td>
                                <div
                                  class="d-flex align-items-center justify-content-start gap-2">
                                  <div
                                      class="custom-control custom-checkbox ms-2 d-inline">
                                      <input type="checkbox"
                                          class="custom-control-input"
                                          id="customCheckBox2" required="">
                                      <label class="custom-control-label"
                                          for="customCheckBox2"></label>
                                  </div>
                                  <div class="apt_nit success">
                                      <span>J</span>
                                  </div>
                                  <div class="apt_ful">
                                    John Doe
                                  </div>
                              </div>
                             </td>
                             <td>johndoe@gmail.com</td>
                             <td>2 Plots of Land</td>
                             <td>07085625412</td>
                             <td>March 23, 2024 12:00PM </td>
                             <td><i class="fa fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <div
                                  class="d-flex align-items-center justify-content-start gap-2">
                                  <div
                                      class="custom-control custom-checkbox ms-2 d-inline">
                                      <input type="checkbox"
                                          class="custom-control-input"
                                          id="customCheckBox2" required="">
                                      <label class="custom-control-label"
                                          for="customCheckBox2"></label>
                                  </div>
                                  <div class="apt_nit success">
                                      <span>J</span>
                                  </div>
                                  <div class="apt_ful">
                                    John Doe
                                  </div>
                              </div>
                             </td>
                             <td>johndoe@gmail.com</td>
                             <td>2 Plots of Land</td>
                             <td>07085625412</td>
                             <td>March 23, 2024 12:00PM </td>
                             <td><i class="fa fa-ellipsis-h"></i></td>
                        </tr>
                       </tbody>
                   </table>
              </div>
            </div>
          </div>
          </div>
       </section>
      </main>
</div>
