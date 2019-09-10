var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoAll').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  chartPieAll(dataInicio, dataFim);
  chartDonutAll(dataInicio, dataFim);
  chartBarAll(dataInicio, dataFim);
  chartColumnAll(dataInicio, dataFim);
});

function chartPieAll(dataInicio, dataFim){
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
          url:"graficos/lib/todosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var data = google.visualization.arrayToDataTable([
              ['chamados', 'Todos os Chamados'],
              ['Confirmados',     jsondata.qtdChamadosConfirmados],
              ['Cancelados',  jsondata.qtdChamadosCancelados]]);
            if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){
              $("#chartPieAll").fadeIn("slow");
              var options = {title: 'Chamados Geral',
              width: 1150,
              height: 550};
              var chart = new google.visualization.PieChart(document.getElementById('chartPieAll'));
              chart.draw(data, options);
            }else{
              $("#chartPieAll").fadeOut("slow");
            }
            
          }
        });    

      }
    });
      return true;
    }
  });
}

function chartDonutAll(dataInicio, dataFim){
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
         url:"graficos/lib/todosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
         success: function(jsondata) {
          var data = google.visualization.arrayToDataTable([
            ['chamados', 'Todos os Chamados'],
            ['Confirmados',     jsondata.qtdChamadosConfirmados],
            ['Cancelados',  jsondata.qtdChamadosCancelados]]);

          
            if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){
              $("#chartDonutAll").fadeIn("slow");
              var options = {title: 'Chamados Geral',
              width: 1150,
              height: 550,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              }};
               var chart = new google.visualization.PieChart(document.getElementById('chartDonutAll'));
              chart.draw(data, options);
            }else{
               $("#chartDonutAll").fadeOut("slow");
            }
         
        }
      });    

      }
    });
      return true;
    }
  });
}

function chartBarAll(dataInicio, dataFim){
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
          url:"graficos/lib/todosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
         success: function(jsondata) {
        var data = google.visualization.arrayToDataTable([
            ['chamados', 'Todos os Chamados', { role: 'style' }],
            ['Confirmados',     jsondata.qtdChamadosConfirmados,"#7B68EE"],
            ['Cancelados',  jsondata.qtdChamadosCancelados,"#DC143C"]]);

         
           if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){
              $("#chartBarAll").fadeIn("slow");

             var options = {title: 'Chamados Geral',
              width: 1150,
              height: 550,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};

              var chart = new google.visualization.BarChart(document.getElementById('chartBarAll'));
              chart.draw(data, options);
            }else{
              $("#chartBarAll").fadeOut("slow");
            }

        }
      });    

      }
    });
      return true;
    }
  });
}
function chartColumnAll(dataInicio, dataFim){

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
         url:"graficos/lib/todosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
         success: function(jsondata) {
          var data = google.visualization.arrayToDataTable([
            ['chamados', 'Todos os Chamados', { role: 'style' }],
            ['Confirmados',     jsondata.qtdChamadosConfirmados,"#7B68EE"],
            ['Cancelados',  jsondata.qtdChamadosCancelados,"#DC143C"]]);

          
           if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){
             $("#chartColumnAll").fadeIn("slow");

              var options = {title: 'Chamados Geral',
              width: 1150,
              height: 550,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};

              var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnAll'));
              chart.draw(data, options);
            }else{
              $("#chartColumnAll").fadeOut("slow");
            }

        }
      });    

      }
    });
      return true;
    }
  });
}
