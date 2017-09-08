$(function(){

  /* Bar Charts */


  var ctx = document.getElementById("chartb1");
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
          datasets: [
            {
              data: [29.02, 28.83, 32.21, 35.10, 39.49, 44.04],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
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

    var ctx = document.getElementById("chartb2");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["KBP", "Priok", "Jatim", "Jateng"],
        datasets: [
          {
            data: [10, 20, 30, 40],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)'
            ]
          }]
      },
      options: {}
    });

})
