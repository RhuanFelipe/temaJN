var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoRequerimentoCurso').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  var tipoRequerimento = $(".tipoRequerimento").val(); 
  var grupoRequerimento = $(".grupoRequerimento").val(); 
  chartPieRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento);
  chartBarRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento);
  chartDonutRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento);
  chartColumnRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento);
});

function chartDonutRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento){
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
          url:"graficos/lib/requerimentoCursoChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento+"&grupoRequerimento="+grupoRequerimento,            
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
              $("#chartDonutRequerimentoCurso").fadeIn();    
              var options = {title: 'Chamado de requerimento',
              width: 1150,
              height: 650,
              pieHole: 0.5,
              pieSliceTextStyle: {
                color: 'black',
              }};

              var chart = new google.visualization.PieChart(document.getElementById('chartDonutRequerimentoCurso'));
              chart.draw(data,options);
            }else{
              $("#chartDonutRequerimentoCurso").fadeOut();    
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

function chartPieRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento){
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
          url:"graficos/lib/requerimentoCursoChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento+"&grupoRequerimento="+grupoRequerimento,            
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
              $("#chartPieRequerimentoCurso").fadeIn();          
              var options = {title: 'Chamado de requerimento',
              width: 1150,
              height: 650};

              var chart = new google.visualization.PieChart(document.getElementById('chartPieRequerimentoCurso'));
              chart.draw(data,options);
            }else{
              $("#chartPieRequerimentoCurso").fadeOut();          
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

function chartBarRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento){
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
          url:"graficos/lib/requerimentoCursoChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento+"&grupoRequerimento="+grupoRequerimento,            
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
              $("#chartBarRequerimentoCurso").fadeIn();          
              var options = {title: 'Chamado de requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.BarChart(document.getElementById('chartBarRequerimentoCurso'));
             chart.draw(data,options);
            }else{
              $("#chartBarRequerimentoCurso").fadeOut();          
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

function chartColumnRequerimentoCurso(dataInicio, dataFim, tipoRequerimento, grupoRequerimento){
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
          url:"graficos/lib/requerimentoCursoChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento+"&grupoRequerimento="+grupoRequerimento,            
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
              $("#chartColumnRequerimentoCurso").fadeIn();  

              var options = {title: 'Chamado de requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnRequerimentoCurso'));
              chart.draw(data,options);
            }else{
              $("#chartColumnRequerimentoCurso").fadeOut();  
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