<div>
    <main>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Listed Properties</h5>
                      @if ($listedPropertyPercentageChange >= 0)
                          <div class="live-badge success">
                              <img src="{{ asset('admin/asset/img/icons/arrow-up-icon-green.png') }}" alt="">
                              {{ abs($listedPropertyPercentageChange) }}%
                          </div>
                      @elseif ($listedPropertyPercentageChange < 0)
                          <div class="live-badge danger">
                              <img src="{{ asset('admin/asset/img/icons/arrow-down-icon-red.png') }}" alt="">
                              {{ abs($listedPropertyPercentageChange) }}%
                          </div>
                      @endif
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($propertyCount) }}</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small>
                        @if ($listedPropertyPercentageChange >= 0)
                        <span class="primary-color">{{ abs($listedPropertyPercentageChange) }}%</span> increase
                        @elseif ($listedPropertyPercentageChange < 0)
                            <span class="text-danger">{{ abs($listedPropertyPercentageChange) }}%</span> decrease
                        @endif
                        compare to
                        last month 
                    </small>
                </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Available Properties</h5>
                      @if ($availablePropertyPercentageChange >= 0)
                            <div class="live-badge success">
                                <img src="{{ asset('admin/asset/img/icons/arrow-up-icon-green.png') }}" alt="">
                                {{ abs($availablePropertyPercentageChange) }}%
                            </div>
                        @elseif ($availablePropertyPercentageChange < 0)
                            <div class="live-badge danger">
                                <img src="{{ asset('admin/asset/img/icons/arrow-down-icon-red.png') }}" alt="">
                                {{ abs($availablePropertyPercentageChange) }}%
                            </div>
                      @endif
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($availablePropertyCount) }}</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small>
                      @if ($availablePropertyPercentageChange >= 0)
                      <span class="primary-color">{{ abs($availablePropertyPercentageChange) }}%</span> increase
                      @elseif ($availablePropertyPercentageChange < 0)
                          <span class="text-danger">{{ abs($availablePropertyPercentageChange) }}%</span> decrease
                      @endif
                      compare to
                      last month 
                    </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Appointment Booking</h5>
                      @if ($bookingPercentageChange >= 0)
                              <div class="live-badge success">
                                  <img src="{{ asset('admin/asset/img/icons/arrow-up-icon-green.png') }}" alt="">
                                  {{ abs($bookingPercentageChange) }}%
                              </div>
                          @elseif ($bookingPercentageChange < 0)
                              <div class="live-badge danger">
                                  <img src="{{ asset('admin/asset/img/icons/arrow-down-icon-red.png') }}" alt="">
                                  {{ abs($bookingPercentageChange) }}%
                              </div>
                      @endif
                  </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($bookingCount) }}</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small>
                      @if ($bookingPercentageChange >= 0)
                        <span class="primary-color">{{ abs($bookingPercentageChange) }}%</span> increase
                        @elseif ($bookingPercentageChange < 0)
                            <span class="text-danger">{{ abs($bookingPercentageChange) }}%</span> decrease
                        @endif
                        compare to
                        last month 
                    </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="dsb-card border">
                  <div class="dsb-card-header">
                      <h5>Total Customers</h5>
                      @if ($customerPercentageChange >= 0)
                              <div class="live-badge success">
                                  <img src="{{ asset('admin/asset/img/icons/arrow-up-icon-green.png') }}" alt="">
                                  {{ abs($customerPercentageChange) }}%
                              </div>
                          @elseif ($customerPercentageChange < 0)
                              <div class="live-badge danger">
                                  <img src="{{ asset('admin/asset/img/icons/arrow-down-icon-red.png') }}" alt="">
                                  {{ abs($customerPercentageChange) }}%
                              </div>
                      @endif
                    </div>
                  <div class="dsb-card-body">
                    <h4>{{ number_format($bookingCount) }}</h4>
                  </div>
                  <div class="dsb-card-footer">
                    <small>
                      @if ($customerPercentageChange >= 0)
                      <span class="primary-color">{{ abs($customerPercentageChange) }}%</span> increase
                      @elseif ($customerPercentageChange < 0)
                          <span class="text-danger">{{ abs($customerPercentageChange) }}%</span> decrease
                      @endif
                      compare to
                      last month 
                    </small>
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
                        <select name="" id="filter" wire:model="filter"  class="custom-select op-6">
                            <option value="daily">daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly" selected>Yearly</option>
                        </select>
                      </div>
                        <div>
                            <img src="realtor-dashboard/asset/img/icons/calendar-icon.png" alt=""> &nbsp;
                            <input type="text" id="dateInput"   class="custom-select custom-date-input" style="width: 100px;" wire:model="selectedDate"  placeholder="Select date">
                        </div>
                    </div>
                </div>
                <div id="chart-container" wire:ignore>
                  <span id="loading-container" class="loading-container">
                    <i class="fa fa-spin fa-spinner fa-2x"></i>
                  </span>

                
                <canvas   id="dsbChart"></canvas>

              </div>
            </div>
          </div>
        </div>
       </section>
       <section>
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="mb-2 d-flex align-items-center justify-content-between">
                <h6>Recent Bookings</h6>
                <a href="{{ route('realtor.customer-schedule') }}">See all</a>
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
                                    <span>Client Name</span>
                                </div>
                            </div>
                        </th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Date Booked</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        @if($schedules)
                            @foreach ($schedules as $schedule)
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
                                            <span>{{ getFirstLetter($schedule->first_name) }}</span>
                                            </div>
                                        <div class="apt_ful">
                                            {{ "$schedule->first_name $schedule->last_name" }}
                                        </div>
                                    </div>
                                    </td>
                                    <td> {{ $schedule->email }}</td>
                                    <td> {{ $schedule->phone_number }}</td>
                                    <td>
                                        {{ formatDate($schedule->date_booked) }}
                                    </td>
                                    <td class="cursor-p" data-bs-toggle="modal" data-bs-target="#appModal{{ $schedule->id }}"><i class="fa fa-ellipsis-h"></i></td>
                                </tr>
                            @endforeach
                        @endif
                      </tbody>
                   </table>
              </div>
            </div>
          </div>
          </div>
       </section>
      </main>

      @if($schedules)
      @foreach ($schedules as $schedule)
          <div class="modal fade" id="appModal{{ $schedule->id }}" tabindex="-1" aria-labelledby="appModalLabel{{ $schedule->id }}" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-body rounded">
                          <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                              <div class="rea-app-img">
                                  <img src="{{asset('realtor-dashboard/asset/img/user-img.png')}}"  alt="icon">
                              </div>
                          </div>
                          <h3 class="text-center mb-4">{{ "$schedule->first_name $schedule->last_name" }}</h3>
                              <a href="{{ route('realtor.customer-schedule-details', $schedule->id) }}" class="new-discussion-btn btn-success d-block w-100 mb-3">View</a>
                              <button data-bs-dismiss="modal" class="new-discussion-btn w-100 d-block outline-success text-dark">Back</button>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    @endif

</div>

@push('scripts')
  <script>
    $(document).ready(function(){
          //Hide the datatable search and filter features for dashboard datatables only
          $('#livelearn-table_filter').addClass('d-none');
          $('#livelearn-table_paginate').addClass('d-none');
          $('#livelearn-table_info').addClass('d-none');
          $('#livelearn-table_length').addClass('d-none');

          // Programmatically show the datepicker
          document.getElementById('dateInput').addEventListener('click', function() {
            this.setAttribute('type', 'date');
            this.showPicker(); 
          });

          //Dispatch livewire event when a date is selected
          document.getElementById('dateInput').addEventListener('change', function(){
              showLoading();
              date = this.value;
              Livewire.dispatch('updateChartData', {filter: date});
          })

          //Dispatch livewire event when a filter is selected
          document.getElementById('filter').addEventListener('change', function(){
              showLoading();
              filter = this.value;
              Livewire.dispatch('updateChartData', {filter: filter});
          })



          //Show spinner and hide canva
          function showLoading() {
              $('#loading-container').show();     
          }

          //Show canva and hide spinner
          function hideLoading() {
              $('#loading-container').fadeOut();        
          }
              
        Chart.register(ChartDataLabels);

      // Livewire listens for the dispatched 'updateChart' event and updates the chart data
      Livewire.on('updateChart', function(chartData) {
          var customerData = chartData[0]['customerData'];
          var propertyData = chartData[0]['propertyData'];
          var labels = chartData[0]['labels'];

          // Call the barChart function with the new data
          barChart(customerData, propertyData, labels, 'dsbChart', 'Customers', 'Properties');
          hideLoading();
      });

      var chartInstance;
      var screenSize = window.innerWidth;
      var thickness = screenSize < 768 ? 10 : 15;

      function barChart(data1, data2, label, idName, labelName1, labelName2) {
          showLoading();
          // Check if the chart already exists and destroy it
          if (chartInstance) {
              chartInstance.destroy();
          }

        chartInstance =  new Chart(idName, {
                type: 'bar',
                data: {
                    defaultFontFamily: 'Poppins',
                    labels: label,
                    datasets: [
                          {
                              label: labelName1,
                              data: data1,
                              borderColor: 'transparent',
                              borderWidth: "0",
                              borderRadius: 7,
                              barThickness: thickness,
                              hoverBackgroundColor: '#45BA63',
                              backgroundColor: '#45BA63',
                              tension: 0.5,
                              fill: false,
                          
                          },
                          {
                              label: labelName2,
                              data: data2,
                              borderColor: 'transparent',
                              borderWidth: "0",
                              borderRadius: 7,
                              barThickness: thickness,
                              hoverBackgroundColor: ' #000000',
                              backgroundColor: ' #000000',
                              tension: 0.5,
                              fill: false,
                          
                          }
                    ]
                },
              
                options: {
                    plugins: {
                          datalabels: {
                              display: false,
                          },
                          legend: {
                              display: true,
                              position: 'bottom'
                          },
                    },
                    scales:  {
                          y: {
                              grid: {
                                    borderDash: [5, 5],
                                    zeroLineBorderDash: [5, 5],
                                    zeroLineColor: '#fff',
                                    zeroLineWidth: 0
                              },
                              beginAtZero: true
                          },
                          x: {
                              grid: {
                                    borderDash: [5, 5],
                                    zeroLineBorderDash: [5, 5],
                                    zeroLineColor: '#fff',
                                    zeroLineWidth: 0
                              },
                              barPercentage: 0.2
                          },
                    },
                },
          });

          hideLoading();
      }

      //Initial chart creation 
      setTimeout(() => {
          var realtorData = @this.get('customerData');
          var propertyData = @this.get('propertyData');
          var labels = @this.get('labels');
      
          barChart(realtorData, propertyData, labels, 'dsbChart', 'Customers', 'Properties');
        
      }, 3000);

    });
  </script>
@endpush
