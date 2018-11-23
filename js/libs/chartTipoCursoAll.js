//google.load("visualization", "1", {packages:["corechart"]});
//google.setOnLoadCallback(load_chart_data);

var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 
$('.btnGraficoTipoCursoAll').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  chartPieTipoCursoAll(dataInicio, dataFim);
  //chartDonutAll(dataInicio, dataFim);
  //chartBarAll(dataInicio, dataFim);
  //chartColumnAll(dataInicio, dataFim);
});


//google.load("visualization", "1", {packages:["corechart"]});
//google.setOnLoadCallback(load_chart_data);

function load_chart_data() {
var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 
  $.ajax({
    url: 'https://www.google.com/jsapi?callback',
    cache: true,
    dataType: 'script',
    success: function(){
      $.ajax({
          type: "GET",
          dataType: "json",
          url:"graficos/lib/tipoCursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            draw_chart(jsondata)
          }
        });
     
    }
  });

}
function draw_chart(chart_values) {
  google.load("visualization", "1", {packages:["corechart"]});

    var data = google.visualization.arrayToDataTable(chart_values);
    var options = {
        title: 'Your super chart!',
        vAxis: {title: 'Hours Per Day', titleTextStyle: {italic: false}},
        hAxis: {title: 'Task', titleTextStyle: {italic: false}},
    };
    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

function chartPieTipoCursoAll(dataInicio, dataFim){
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
          url:"graficos/lib/tipoCursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var i = 1;
            var tipoCurso = new Array();
         /*   $.each(jsondata, function (data, value) {
             alert(data01.push([value.AuditStatusId.toString(), value.Number]));
          }) */
            
            var data = google.visualization.arrayToDataTable(jsondata);
            var options = "";
            var chart = new google.visualization.PieChart(document.getElementById('chartPieTipoCursoAll'));
            chart.draw(data);
          },  
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      }
        });    

      }
    });
      return true;
    }
  });
}


//load_chart_data();

