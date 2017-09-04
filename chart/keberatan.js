$(function() {

  /* Chart 1 */

  var ctx = document.getElementById("chartk1");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
          datasets: [
            {
              label               : 'Selain SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "rgba(75,192,192,0.4)",
              borderColor         : "#4bc0c0",
              data                : [452, 320, 436, 302, 415, 347, 370]
            },
            {
              label               : 'SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "#CD6F6F",
              borderColor         : "#C04B4B",
              data                : [6656, 5662, 5424, 6668, 8668, 6683, 5613]
            },
            {
              label               : 'Penetapan Dirjen',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "#4BC086",
              borderColor         : "#6FCD9E",
              data                : [124, 209, 304, 97, 255, 170, 260]
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

  //------------------------------------------------
  //-------------------------------------------------

  /* chart 2 */

  var ctx = document.getElementById("chartk2");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
          datasets: [
            {
              label               : 'Selain SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "rgba(75,192,192,0.4)",
              borderColor         : "rgba(75,192,192,1)",
              pointHighlightStroke: 'rgba(220,220,220,1)',
              data                : [64.83, 19.88, 44.08, 143.23, 134, 123.94, 77.49]
            },
            {
              label               : 'SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "#CD6F6F",
              borderColor         : "#C04B4B",
              data                : [160.56, 159.10, 126.15, 153.32, 177.80, 160.01, 205.01]
            },
            {
              label               : 'Penetapan Dirjen',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "#4BC086",
              borderColor         : "#6FCD9E",
              data                : [64.46, 76.78, 101.53, 39.52, 41.12, 51.58, 106.66]
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

  //------------------------------------------------
  //-------------------------------------------------

  /* chart 3 */

  var ctx = document.getElementById("chartk3");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
          datasets: [
            {
              label               : 'Selain SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "rgba(75,192,192,0.4)",
              borderColor         : "rgba(75,192,192,1)",
              pointHighlightStroke: 'rgba(220,220,220,1)',
              data                : [29, 12, 15, 19, 31, 5, 16]
            },
            {
              label               : 'SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "#CD6F6F",
              borderColor         : "#C04B4B",
              data                : [609, 633, 728, 612, 838, 611, 661]
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

  //------------------------------------------------
  //-------------------------------------------------

  /* chart 4 */

  var ctx = document.getElementById("chartk4");
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
          datasets: [
            {
              label               : 'Selain SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "rgba(75,192,192,0.4)",
              borderColor         : "rgba(75,192,192,1)",
              pointHighlightStroke: 'rgba(220,220,220,1)',
              data                : [32.35, 3.20, 7.74, 4.82, 7.53, 5.07, 31.94]
            },
            {
              label               : 'SPTNP',
              fill                : false,
              lineTension         : 0.1,
              backgroundColor     : "#CD6F6F",
              borderColor         : "#C04B4B",
              data                : [46.39, 49.51, 39.86, 37.09, 50.21, 58.62, 32.68]
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
