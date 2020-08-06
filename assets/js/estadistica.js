/*LINEA ESTADISTICO UTILIZANDO CHARJS*/

/*var paramGenero = [];
var paramEstado = [];*/

var bgColor = [];
var bdColor = [];

$(document).ready(function(){
  $.post("http://localhost/instituto/administracion/estudiantes/genero",
  function(data){
    var obj = JSON.parse(data);

    paramGenero = [];
    paramEstado = [];
    bgColor = [];
    bdColor = [];

    $.each(obj, function(i, item){
      paramGenero.push(item.genero);
      paramEstado.unshift(item.estado);
      bgColor.push('rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)');
      bdColor.push('rgba(255, 99, 132, 1)','rgba(54, 162, 235, 1)');
    });
    //elimina y crea otra vez el cuadro estadistico
    $('#generoAlumno').remove();
    $('#contenedor_grafic').append("<canvas id='generoAlumno'></canvas>");

    var ctx = document.getElementById('generoAlumno');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: paramGenero,
            datasets: [
              {
                label: '#Estudiantes por Genero',
                data: paramEstado,
                backgroundColor: bgColor,
                borderColor: bdColor,
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
  })
});



new Chart(document.getElementById('pagosAlumno'), {
    type: 'doughnut',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});


/*new Chart(document.getElementById('generoAlumno'), {
    //type: 'bar',
    data: {
      labels: ["Feme", "2050"],
      datasets: [
        {
          label: "Femenino",
          backgroundColor: "rgba(75,192,192,0.4)",
          data: [133,221,783,2478]
        }, {
          label: "Mascul",
          backgroundColor: "rgba(22,200,2,0.4)",
          data: [408,547,675,734],
          borderWidth:5
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Estadistas de Estudiantes por Genero'
      }
    }
});*/
