<div class="main-content">
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
                            <h4>{{ number_format($listedPropertyCount) }}</h4>
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
                            <h5>Total Users</h5>
                            @if ($userPercentageChange >= 0)
                            <div class="live-badge success">
                                <img src="{{ asset('admin/asset/img/icons/arrow-up-icon-green.png') }}" alt="">
                                {{ abs($userPercentageChange) }}%
                            </div>
                        @elseif ($userPercentageChange < 0)
                            <div class="live-badge danger">
                                <img src="{{ asset('admin/asset/img/icons/arrow-down-icon-red.png') }}" alt="">
                                {{ abs($userPercentageChange) }}%
                            </div>
                        @endif
                        </div>
                        <div class="dsb-card-body">
                            <h4>{{ number_format($userCount) }}</h4>
                        </div>
                        <div class="dsb-card-footer">
                            <small>
                                @if ($userPercentageChange >= 0)
                                <span class="primary-color">{{ abs($userPercentageChange) }}%</span> increase
                                @elseif ($userPercentageChange < 0)
                                    <span class="text-danger">{{ abs($userPercentageChange) }}%</span> decrease
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
                            <h4>{{ number_format($customerCount) }}</h4>
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
                    <div
                        class="d-flex align-items-center flex-wrap justify-content-between mb-5">
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
                                <img src="{{ asset('admin/asset/img/icons/calendar-icon.png') }}" alt=""> &nbsp;
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
                        <h6>Recent Inquiries</h6>
                        <a href="{{ route('admin.contact-us') }}">See all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table dt_datatable" id="dashboard-table">
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
                                            <span>Name</span>
                                        </div>
                                    </div>
                                </th>
                                <th>Email Address</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                               @if ($contactMessages)
                                   @foreach ($contactMessages as $message)
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
                                                       <span>{{ getFirstLetter($message->fullname) }}</span>
                                                   </div>
                                                   <div class="apt_ful">
                                                       {{ $message->fullname }}
                                                   </div>
                                               </div>
                                           </td>
                                           <td>{{ $message->email }}</td>
                                           <td>{{ $message->is_read == 1 ? "Read" : "Unread" }}</td>
                                           <td>{{ formatDate($message->created_at) }}</td>
                                           <td><a onclick="updateStatus({{ $message->id }})" href="{{ route('admin.contact-us.details', $message->id) }}"><i class="fa fa-eye"></i></a></td>
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
          var realtorData = chartData[0]['realtorData'];
          var agencyData = chartData[0]['agencyData'];
          var labels = chartData[0]['labels'];

          // Call the barChart function with the new data
          barChart(realtorData, agencyData, labels, 'dsbChart', 'Realtors', 'Agencies');
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
          var realtorData = @this.get('realtorData');
          var agencyData = @this.get('agencyData');
          var labels = @this.get('labels');
      
          barChart(realtorData, agencyData, labels, 'dsbChart', 'Realtors', 'Agencies');
        
      }, 3000);

    });
  </script>
@endpush
