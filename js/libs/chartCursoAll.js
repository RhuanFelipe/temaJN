var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 
var tipoCurso = $(".tipoCurso").val();

var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoCursoAll').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  var tipoCurso = $(".tipoCurso").val();

  chartPieCursoAll(dataInicio, dataFim,tipoCurso);
  chartBarCursoAll(dataInicio, dataFim,tipoCurso);
  //chartDonutCursoAll(dataInicio, dataFim);
  //chartColumnCursoAll(dataInicio, dataFim);
});
function chartDonutCursoAll(dataInicio, dataFim){
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
          dataType: "JSON",
          url:"graficos/lib/cursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var i = 1;
            var curso = new Array();
            console.log(jsondata)
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Curso');
            data.addColumn('number', 'Qtds');

           $.each(jsondata,function(i) {
              data.addRows([[jsondata[i].CURSO,jsondata[i].QTDTOTALCHAMADOS]]);
            });

           var options = {title: 'Chamado de tds os cursos',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              }};

            var chart = new google.visualization.PieChart(document.getElementById('chartDonutCursoAll'));
            chart.draw(data,options);
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

function chartPieCursoAll(dataInicio, dataFim,tipoCurso){
var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 
var tipoCurso = $(".tipoCurso").val();
  
  $.ajax({
    url: 'https://www.google.com/jsapi?callback',
    cache: true,
    dataType: 'script',
    success: function(){
      google.load('visualization', '1', {packages:['corechart'], 'callback' : function()
      {

        $.ajax({
          type: "GET",
          dataType: "JSON",
          url:"graficos/lib/cursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoCurso="+tipoCurso,            
          success: function(jsondata) {
            var i = 1;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            
            $.each(jsondata,function(i) {
              data.addRows([[jsondata[i].CURSO,jsondata[i].QTDTOTALCHAMADOS]]);
            });

             var options = {title: 'Chamado de tds os cursos',
              width: 1150,
              height: 650};

            var chart = new google.visualization.PieChart(document.getElementById('chartPieCursoAll'));
            chart.draw(data,options);
          },  
            error: function (xhr, ajaxOptions, thrownError) {
              console.log(xhr.status);
              console.log(thrownError);
            },
            done: function () {
              console.log("oi");
            }
        });    

      }
    });
      return true;
    }
  });
}

function chartBarCursoAll(dataInicio, dataFim,tipoCurso){
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
          dataType: "JSON",
          url:"graficos/lib/cursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoCurso="+tipoCurso,             
          success: function(jsondata) {
            var j = 0;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});
           
             $.each(jsondata,function(i) {
              data.addRows([[ jsondata[i].CURSO,jsondata[i].QTDTOTALCHAMADOS, cores[i-1] ]]);
            });

            var options = {title: 'Chamado de tds os cursos',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};

            var chart = new google.visualization.BarChart(document.getElementById('chartBarCursoAll'));
            chart.draw(data,options);
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

function chartColumnCursoAll(dataInicio, dataFim){
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
          dataType: "JSON",
          url:"graficos/lib/cursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,             
          success: function(jsondata) {
            var j = 0;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});
           
             $.each(jsondata,function(i) {
              data.addRows([[ jsondata[i].CURSO,jsondata[i].QTDTOTALCHAMADOS, cores[i-1] ]]);
            });

            var options = {title: 'Chamado de tds os cursos',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              },
              legend: 'none'};

            var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnCursoAll'));
            chart.draw(data,options);
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