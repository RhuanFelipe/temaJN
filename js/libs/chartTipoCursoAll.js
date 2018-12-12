var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoTipoCursoAll').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  chartPieTipoCursoAll(dataInicio, dataFim);
  chartBarTipoCursoAll(dataInicio, dataFim);
  chartDonutTipoCursoAll(dataInicio, dataFim);
  chartColumnTipoCursoAll(dataInicio, dataFim);
});
function chartDonutTipoCursoAll(dataInicio, dataFim){
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
            var qtdsTipos = jsondata.length;
            var tipoCurso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].TIPOCURSO,jsondata[i].QTDTOTALCHAMADOS]]);
                qtsDados++;
              }
            });
            if(qtsDados > 0){
              $("#chartDonutTipoCursoAll").fadeIn();
              var options = {title: 'Chamados Tipos de curso',
              width: 1150,
              height: 550,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              }};

            var chart = new google.visualization.PieChart(document.getElementById('chartDonutTipoCursoAll'));
            chart.draw(data,options);
          }else{
              $("#chartDonutTipoCursoAll").fadeOut();
          }
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
          dataType: "JSON",
          url:"graficos/lib/tipoCursoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var i = 1;
            console.log(jsondata)
            var qtdsTipos = jsondata.length;
            var tipoCurso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
             var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].TIPOCURSO,jsondata[i].QTDTOTALCHAMADOS]]);
                qtsDados++;
              }
            });
            if(qtsDados > 0){
               $("#chartPieTipoCursoAll").fadeIn();
               var options = {title: 'Chamados Tipos de curso',
                width: 1150,
                height: 550};

               var chart = new google.visualization.PieChart(document.getElementById('chartPieTipoCursoAll'));
               chart.draw(data,options);
            }else{
              $("#chartPieTipoCursoAll").fadeOut();
            }
          },  
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(thrownError);
      }
        });    

      }
    });
      return true;
    }
  });
}

function chartBarTipoCursoAll(dataInicio, dataFim){
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
            var j = 0;
            var qtdsTipos = jsondata.length;
            var tipoCurso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});
            var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].TIPOCURSO, jsondata[i].QTDTOTALCHAMADOS,cores[j]]]);
                qtsDados++;
                j++;
              }
            });
            if(qtsDados > 0){
              $("#chartBarTipoCursoAll").fadeIn();

              var options = {title: 'Chamados Tipos de curso',
                width: 1150,
                height: 550,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.BarChart(document.getElementById('chartBarTipoCursoAll'));
              chart.draw(data,options);
            }else{
              $("#chartBarTipoCursoAll").fadeOut();
            }
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

function chartColumnTipoCursoAll(dataInicio, dataFim){
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
            var j = 0;
            var qtdsTipos = jsondata.length;
            var tipoCurso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});

             var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].TIPOCURSO, jsondata[i].QTDTOTALCHAMADOS,cores[j]]]);
                qtsDados++;
                j++;
              }
            });
            if(qtsDados > 0){
              $("#chartColumnTipoCursoAll").fadeIn();
              var options = {title: 'Chamados Tipos de curso',
                width: 1150,
                height: 550,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnTipoCursoAll'));
              chart.draw(data,options);
            }else{
                $("#chartColumnTipoCursoAll").fadeOut();     
            }
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


