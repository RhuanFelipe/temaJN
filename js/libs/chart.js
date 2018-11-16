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
                 url:"graficos/lib/todosChamados.php",            
                 success: function(jsondata) {
                  console.log(jsondata)
                    var data = google.visualization.arrayToDataTable([
                      ['chamados', 'Todos os Chamados'],
                      ['Abertos',     jsondata.qtdChamadosConfirmados],
                      ['Cancelados',  jsondata.qtdChamadosCancelados]]);

                     var options = {title: 'Chamados Geral',
                                    width: 1150,
                                    height: 650};

                    var chart = new google.visualization.PieChart(document.getElementById('chartPieAll'));
                   chart.draw(data, options);
                 }
            });    

      }
    });
    return true;
  }
});