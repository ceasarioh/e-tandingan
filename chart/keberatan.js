$(function() {
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
          datasets: [
            {
              label               : 'Electronics',
              fill                : false,
              strokeColor         : 'rgba(210, 214, 222, 1)',
              pointColor          : 'rgba(210, 214, 222, 1)',
              pointStrokeColor    : '#c1c7d1',
              pointHighlightStroke: 'rgba(220,220,220,1)',
              data                : [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label               : 'Digital Goods',
              fill                : false,
              strokeColor         : 'rgba(60,141,188,0.8)',
              pointColor          : '#3b8bba',
              pointStrokeColor    : 'rgba(60,141,188,1)',
              pointHighlightStroke: 'rgba(60,141,188,1)',
              data                : [28, 48, 40, 19, 86, 27, 90]
            }
          ]},
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
})
