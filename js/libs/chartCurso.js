var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 
var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoCurso').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  chartPieCurso(dataInicio, dataFim);
  chartBarCurso(dataInicio, dataFim);
  chartDonutCurso(dataInicio, dataFim);
  chartColumnCurso(dataInicio, dataFim);
});
function chartDonutCurso(dataInicio, dataFim){
  $.ajax({
    url: 'https://www.google.com/jsapi?callback',
    cache: true,
    dataType: 'script',
    success: function(){
      google.load('visualization', '1', {packages:['corechart'], 'callback' : function()
      {
        $.ajax({
         type: "GET",
         dataType: "json",
         url:"graficos/lib/chamadosCurso.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
         success: function(jsondata) {
          var data = google.visualization.arrayToDataTable([
            ['chamados', 'Todos os Chamados'],
            ['Confirmados',     jsondata.qtdChamadosConfirmados],
            ['Cancelados',  jsondata.qtdChamadosCancelados]]);

          var options = {title: 'Chamados do Curso',
          width: 1150,
          height: 650,
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          }};


          var chart = new google.visualization.PieChart(document.getElementById('chartDonutCurso'));
          chart.draw(data, options);
        }
      });    

      }
    });
      return true;
    }
  });
}

function chartBarCurso(dataInicio, dataFim){
  $.ajax({
    url: 'https://www.google.com/jsapi?callback',
    cache: true,
    dataType: 'script',
    success: function(){
      google.load('visualization', '1', {packages:['corechart'], 'callback' : function()
      {
        $.ajax({
         type: "GET",
         dataType: "json",
         url:"graficos/lib/chamadosCurso.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
         success: function(jsondata) {
          var data = google.visualization.arrayToDataTable([
            ['chamados', 'Todos os Chamados', { role: 'style' }],
            ['Confirmados',     jsondata.qtdChamadosConfirmados,"#7B68EE"],
            ['Cancelados',  jsondata.qtdChamadosCancelados,"#DC143C"]]);

          var options = {title: 'Chamados do Curso',
          width: 1150,
          height: 650,
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'};


          var chart = new google.visualization.BarChart(document.getElementById('chartBarCurso'));
          chart.draw(data, options);
        }
      });    

      }
    });
      return true;
    }
  });
}

function chartPieCurso(dataInicio, dataFim){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
    $.ajax({
      url: 'https://www.google.com/jsapi?callback',
      cache: true,
      dataType: 'script',
      success: function(){
        google.load('visualization', '1', {packages:['corechart'], 'callback' : function()
        {

          $.ajax({
            type: "GET",
            dataType: "json",
            url:"graficos/lib/chamadosCurso.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
            success: function(jsondata) {
              var data = google.visualization.arrayToDataTable([
                ['chamados', 'Todos os Chamados'],
                ['Confirmados',     jsondata.qtdChamadosConfirmados],
                ['Cancelados',  jsondata.qtdChamadosCancelados]]);
            if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){

              var options = {title: 'Chamados do Curso',
              width: 1150,
              height: 650};
            }else{
               var options = "";
            }
              var chart = new google.visualization.PieChart(document.getElementById('chartPieCurso'));
              chart.draw(data, options);
            }
          });    

        }
      });
        return true;
      }
    });
}
function chartColumnCurso(dataInicio, dataFim){
  $.ajax({
    url: 'https://www.google.com/jsapi?callback',
    cache: true,
    dataType: 'script',
    success: function(){
      google.load('visualization', '1', {packages:['corechart'], 'callback' : function()
      {
        $.ajax({
         type: "GET",
         dataType: "json",
         url:"graficos/lib/chamadosCurso.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
         success: function(jsondata) {
          console.log(jsondata)
          var data = google.visualization.arrayToDataTable([
            ['chamados', 'Todos os Chamados', { role: 'style' }],
            ['Confirmados',     jsondata.qtdChamadosConfirmados,"#7B68EE"],
            ['Cancelados',  jsondata.qtdChamadosCancelados,"#DC143C"]]);

          var options = {title: 'Chamados do Curso',
          width: 1150,
          height: 650,
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'};


          var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnCurso'));
          chart.draw(data, options);
        }
      });    

      }
    });
      return true;
    }
  });
}