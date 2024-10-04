$(document).ready(function(){

     
     Chart.register(ChartDataLabels);
     var realtorData = [400, 800, 200, 900, 600, 700, 100, 500, 500, 400, 300, 300];
     var propertyData = [200, 1000, 700, 500, 200, 500, 300, 800, 600, 300, 700, 500];
     var yearlyLabel = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];


     barChart(realtorData, propertyData, yearlyLabel, 'dsbChart', 'Customers', 'Properties');
     lineChart(realtorData, yearlyLabel, 'InsightChart');

    
     
     var screenSize = window.innerWidth;
     var thickness = screenSize < 768 ? 10 : 15;
    
     function barChart(data1, data2, label, idName, labelName1, labelName2) {

          new Chart(idName, {
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
     }

     function lineChart(data1, label, idName) {

          new Chart(idName, {
               type: 'line',
               data: {
                    defaultFontFamily: 'Poppins',
                    labels: label,
                    datasets: [
                         {
                             
                              data: data1,
                              label: "Page visits",
                              borderColor: '#45BA63',
                              borderWidth: "1",
                              borderRadius: 7,
                              // barThickness: thickness,
                              hoverBackgroundColor: '#45BA63',
                              backgroundColor: '#45BA63',
                              tension: 0.5,
                              fill: false,
                         
                         },
                        
                    ]
               },
              
               options: {
                    plugins: {
                         datalabels: {
                              display: false,
                         },
                         legend: {
                              display: false,
                              position: 'bottom'
                         },
                    },
                    scales:  {
                         y: {
                              grid: {
                                   borderDash: [5, 5],
                                   zeroLineBorderDash: [5, 5],
                                   zeroLineColor: '#fff',
                                   zeroLineWidth: 1
                              },
                              beginAtZero: true
                         },
                         x: {
                              grid: {
                                   borderDash: [0, 5],
                                   // zeroLineBorderDash: [5, 5],
                                   zeroLineColor: '#fff',
                                   zeroLineWidth: 1
                              },
                              
                         },
                    },
                    elements: {
                         line: {
                              tension: 0,
                         }
                    },
               },
          });
     }

});