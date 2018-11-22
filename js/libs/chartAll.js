var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 

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
              var options = {title: 'Chamados Geral',
              width: 1150,
              height: 650};
            }else{
               var options = "";
            }
            var chart = new google.visualization.PieChart(document.getElementById('chartPieAll'));
            chart.draw(data, options);
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
              var options = {title: 'Chamados Geral',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};
               var chart = new google.visualization.PieChart(document.getElementById('chartDonutAll'));
              chart.draw(data, options);
            }else{
               var options = "";
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
            ['Confirmados',     jsondata.qtdChamadosConfirmados,'#30ff6a'],
            ['Cancelados',  jsondata.qtdChamadosCancelados,'#ff450a']]);

         
           if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){
             var options = {title: 'Chamados Geral',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};


              var chart = new google.visualization.BarChart(document.getElementById('chartBarAll'));
              chart.draw(data, options);
            }else{
               var options = "";
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
            ['Confirmados',     jsondata.qtdChamadosConfirmados,'#30ff6a'],
            ['Cancelados',  jsondata.qtdChamadosCancelados,'#ff450a']]);

          
           if(jsondata.qtdChamadosConfirmados > 0 || jsondata.qtdChamadosCancelados > 0 ){
              var options = {title: 'Chamados Geral',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};

              var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnAll'));
              chart.draw(data, options);
            }else{
               var options = "";
            }

        }
      });    

      }
    });
      return true;
    }
  });
}
