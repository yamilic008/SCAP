( function ( $ ) {

  var charts = {
    init: function () {

      this.ajaxGetPostData();
    },
    ajaxGetPostData: function () {
      var urlPath =  'http://' + window.location.hostname  + '/proyecto/public/dato';
      var request = $.ajax( {
        dataType: 'json',
        method: 'GET',
        url: urlPath,
    } );
      request.done( function ( response ) {
        /*console.log(response.id );*/
  
        charts.Chart( response );

      });
    },

//configuraciones de la grafica
    Chart: function ( response ) {
      var prim = 0;
      var sec = 0;
      var bach = 0;
      var pre = 0;
      for (var i in response){
        if (response[i].seccions_id == 1) {
          prim = parseFloat(response[i].total) + parseFloat(prim);
          console.log(prim);
        }
        if (response[i].seccions_id == 2) {
          sec = parseFloat(response[i].total) + parseFloat(sec);
        }
        if (response[i].seccions_id == 3) {
          bach = parseFloat(response[i].total) + parseFloat(bach);
        }
        if (response[i].seccions_id == 4) {
          pre = parseFloat(response[i].total) + parseFloat(pre);
        }
        
      }
      var max = Math.max(prim,sec,bach,pre);
      
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'bar', //tipo de grafica
            data: {
              labels: ["Preescolar", "Primaria", "Secundaria", "Bachillerato"], //nombre del eje X
              datasets: [{
                  label: "$",
                  backgroundColor: ["#00A760", "#FB9B35","#FF8336","#EA4841"], //Colores de las barras
                  data: [pre, prim, sec, bach] //Datos de las barras 
                }],
            },
            options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      min: 0, //escala minima
                      max: max  // Escala maxima
                    }
                  }]
                },
              animation : false,
              legend: { display: false },
              title: {
                display: true,
                text: 'Gastos por seccion'
              }
            }


        });
      setInterval(function(){
        myLineChart.update();
          myLineChart.render();
        }, 1000);

      }
    };


  charts.init(); //ejecucion de la primera funcion
} )
( jQuery );



  // update chart every second
  
 