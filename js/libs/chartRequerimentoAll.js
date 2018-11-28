var dataInicio = $(".dataInicio").val();
var dataFim = $(".dataFim").val(); 

var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoRequerimentoAll').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  chartPieRequerimentoAll(dataInicio, dataFim);
  chartBarRequerimentoAll(dataInicio, dataFim);
  chartDonutRequerimentoAll(dataInicio, dataFim);
  chartColumnRequerimentoAll(dataInicio, dataFim);
});

function chartDonutRequerimentoAll(dataInicio, dataFim){
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
          url:"graficos/lib/requerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var i = 1;
            var curso = new Array();
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Curso');
            data.addColumn('number', 'Qtds');
            var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
              data.addRows([[jsondata[i].REQUERIMENTO,jsondata[i].QTDTOTALCHAMADOS]]);
                qtsDados++;
              }
            });
            if(qtsDados > 0){
              $("#chartDonutRequerimentoAll").fadeIn();    
              var options = {title: 'Chamado de requerimento',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              }};

              var chart = new google.visualization.PieChart(document.getElementById('chartDonutRequerimentoAll'));
              chart.draw(data,options);
            }else{
              $("#chartDonutRequerimentoAll").fadeOut();    
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

function chartPieRequerimentoAll(dataInicio, dataFim){
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
          url:"graficos/lib/requerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var i = 1;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            var qtsDados = 0;
            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].REQUERIMENTO,jsondata[i].QTDTOTALCHAMADOS]]);
                qtsDados++;
              }
            });
            if(qtsDados > 0){
              $("#chartPieRequerimentoAll").fadeIn();          
              var options = {title: 'Chamado de requerimento',
              width: 1150,
              height: 650};

              var chart = new google.visualization.PieChart(document.getElementById('chartPieRequerimentoAll'));
              chart.draw(data,options);
            }else{
              $("#chartPieRequerimentoAll").fadeOut();          
            }
             
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

function chartBarRequerimentoAll(dataInicio, dataFim){
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
          url:"graficos/lib/requerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var j = 0;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});
            var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                console.log(cores[i] )
                data.addRows([[ jsondata[i].REQUERIMENTO,jsondata[i].QTDTOTALCHAMADOS, cores[j] ]]);
                qtsDados++;
                j++;
              }
            });
            
            if(qtsDados > 0){
              $("#chartBarRequerimentoAll").fadeIn();          
              var options = {title: 'Chamado de requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.BarChart(document.getElementById('chartBarRequerimentoAll'));
             chart.draw(data,options);
            }else{
              $("#chartBarRequerimentoAll").fadeOut();          
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

function chartColumnRequerimentoAll(dataInicio, dataFim){
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
          url:"graficos/lib/requerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim,            
          success: function(jsondata) {
            var j = 0;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});
            var qtsDados = 0;
            var j = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[ jsondata[i].REQUERIMENTO,jsondata[i].QTDTOTALCHAMADOS, cores[j] ]]);
                qtsDados++;
                j++;
              }
            });
            
            if(qtsDados > 0){
              $("#chartColumnRequerimentoAll").fadeIn();  

              var options = {title: 'Chamado de requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnRequerimentoAll'));
              chart.draw(data,options);
            }else{
              $("#chartColumnRequerimentoAll").fadeOut();  
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