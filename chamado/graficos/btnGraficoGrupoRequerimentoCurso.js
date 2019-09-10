var cores = ["#7B68EE","#FF4500","#006400","#800000","#708090","#C71585","#000080","#B0C4DE","#696969","#4682B4",
"#DC143C", "#E0FFFF","#D8BFD8","#FFE4B5","#F0E68C","#FF8C00","#800080","#DEB887","#BC8F8F","#9ACD32"];

$('.btnGraficoGrupoRequerimentoCurso').click(function(){
  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  var tipoRequerimento = $(".tipo_requerimento").val(); 
  chartPieGrupoRequerimentoCurso(dataInicio, dataFim,tipoRequerimento);
 // chartBarGrupoRequerimentoAll(dataInicio, dataFim,tipoRequerimento);
 // chartDonutGrupoRequerimentoAll(dataInicio, dataFim,tipoRequerimento);
 // chartColumnGrupoRequerimentoAll(dataInicio, dataFim,tipoRequerimento);
});
function chartDonutGrupoRequerimentoAll(dataInicio, dataFim,tipoRequerimento){
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
          url:"graficos/lib/grupoRequerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento,            
          success: function(jsondata) {
            var i = 1;
            var curso = new Array();
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Curso');
            data.addColumn('number', 'Qtds');
            var qtsDados = 0;

            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].GRUPO,jsondata[i].QTDTOTALCHAMADOS]]);
                qtsDados++;
              }
            });

            if(qtsDados > 0){
                $("#chartDonutGrupoRequerimentoAll").fadeIn();             
                var options = {title: 'Chamado de grupo requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                }};

              var chart = new google.visualization.PieChart(document.getElementById('chartDonutGrupoRequerimentoAll'));
              chart.draw(data,options);
            }else{
                $("#chartDonutGrupoRequerimentoAll").fadeOut();             
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

function chartPieGrupoRequerimentoCurso(dataInicio, dataFim,tipoRequerimento){
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
          url:"graficos/lib/grupoRequerimentoCursoChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento,            
          success: function(jsondata) {
            var i = 1;
            var curso = new Array();
 
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            
            var qtsDados = 0;
            $.each(jsondata,function(i, jsonData) {
              if(jsondata[i].QTDTOTALCHAMADOS > 0){
                data.addRows([[jsondata[i].GRUPO,jsondata[i].QTDTOTALCHAMADOS]]);
                qtsDados++;
              }
            });

            if(qtsDados > 0){
                $("#chartPieGrupoRequerimentoCurso").fadeIn();          

                 var options = {title: 'Chamado de grupo requerimento',
                  width: 1150,
                  height: 650};

                var chart = new google.visualization.PieChart(document.getElementById('chartPieGrupoRequerimentoCurso'));
                chart.draw(data,options);
            }else{
                $("#chartPieGrupoRequerimentoCurso").fadeOut();                        
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

function chartBarGrupoRequerimentoAll(dataInicio, dataFim, tipoRequerimento){
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
          url:"graficos/lib/grupoRequerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento,            
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
                data.addRows([[ jsondata[i].GRUPO,jsondata[i].QTDTOTALCHAMADOS, cores[j] ]]);
                qtsDados++;
                j++;
              }
            });
            
            if(qtsDados > 0){
              $("#chartBarGrupoRequerimentoAll").fadeIn();    
              var options = {title: 'Chamado de grupo requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};

              var chart = new google.visualization.BarChart(document.getElementById('chartBarGrupoRequerimentoAll'));
              chart.draw(data,options);
            }else{
              $("#chartBarGrupoRequerimentoAll").fadeOut();                  
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

function chartColumnGrupoRequerimentoAll(dataInicio, dataFim,tipoRequerimento){
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
          url:"graficos/lib/grupoRequerimentoTodosChamados.php?dataInicio="+dataInicio+"&dataFim="+dataFim+"&tipoRequerimento="+tipoRequerimento,            
          success: function(jsondata) {
            var j = 0;
            var curso = new Array();
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tipo Curso');
            data.addColumn('number', 'Qtds');
            data.addColumn({type: 'string', role: 'style'});
            var qtsDados = 0;
             $.each(jsondata,function(i) {
                if(jsondata[i].QTDTOTALCHAMADOS > 0){
                  data.addRows([[jsondata[i].GRUPO,jsondata[i].QTDTOTALCHAMADOS, cores[j] ]]);
                  qtsDados++;
                  j++;
                }
            });

              if(qtsDados > 0){
                $("#chartColumnGrupoRequerimentoAll").fadeIn("slow");

                var options = {title: 'Chamado de grupo requerimento',
                width: 1150,
                height: 650,
                pieHole: 0.5,
                pieSliceTextStyle: {
                  color: 'black',
                },
                legend: 'none'};


            var chart = new google.visualization.ColumnChart(document.getElementById('chartColumnGrupoRequerimentoAll'));
            chart.draw(data,options);
            }else{
              $("#chartColumnGrupoRequerimentoAll").fadeOut("slow");
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