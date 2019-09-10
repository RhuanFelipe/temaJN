</section>

<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script type="text/javascript" src="js/libs/lists.js"></script>
<script type="text/javascript" src="js/libs/chartAll.js"></script>
<script type="text/javascript" src="js/libs/chartCurso.js"></script>
<?php if(@$_REQUEST['p'] == "chartPieTipoCursoAll" || @$_REQUEST['p'] == "chartDonutTipoCursoAll" || @$_REQUEST['p'] == "chartBarTipoCursoAll" || @$_REQUEST['p'] == "chartColumnTipoCursoAll" ) {?>
<script type="text/javascript" src="js/libs/chartTipoCursoAll.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieCursoAll" || @$_REQUEST['p'] == "chartDonutCursoAll" || @$_REQUEST['p'] == "chartBarCursoAll" || @$_REQUEST['p'] == "chartColumnCursoAll" ) {?>
<script type="text/javascript" src="js/libs/chartCursoAll.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieTipoRequerimentoAll" || @$_REQUEST['p'] == "chartBarTipoRequerimentoAll" || @$_REQUEST['p'] == "chartDonutTipoRequerimentoAll" || @$_REQUEST['p'] == "chartColumnTipoRequerimentoAll" ) {?>
<script type="text/javascript" src="js/libs/chartTipoRequerimentoAll.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieGrupoRequerimentoAll" || @$_REQUEST['p'] == "chartBarGrupoRequerimentoAll" || @$_REQUEST['p'] == "chartDonutGrupoRequerimentoAll" || @$_REQUEST['p'] == "chartColumnGrupoRequerimentoAll" ) {?>
<script type="text/javascript" src="js/libs/chartGrupoRequerimentoAll.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieRequerimentoAll" || @$_REQUEST['p'] == "chartBarRequerimentoAll" || @$_REQUEST['p'] == "chartDonutRequerimentoAll" || @$_REQUEST['p'] == "chartColumnRequerimentoAll" ) {?>
<script type="text/javascript" src="js/libs/chartRequerimentoAll.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieTipoRequerimentoCurso" || @$_REQUEST['p'] == "chartDonutTipoRequerimentoCurso" || @$_REQUEST['p'] == "chartBarTipoRequerimentoCurso" || @$_REQUEST['p'] == "chartColumnTipoRequerimentoCurso" ) {?>
<script type="text/javascript" src="js/libs/chartTipoRequerimentoCurso.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieGrupoRequerimentoCurso" || @$_REQUEST['p'] == "chartBarGrupoRequerimentoCurso" || @$_REQUEST['p'] == "chartDonutGrupoRequerimentoCurso" || @$_REQUEST['p'] == "chartColumnGrupoRequerimentoCurso" ) {?>
<script type="text/javascript" src="js/libs/chartGrupoRequerimentoCurso.js"></script>
<?php } ?>
<?php if(@$_REQUEST['p'] == "chartPieRequerimentoCurso" || @$_REQUEST['p'] == "chartBarRequerimentoCurso" || @$_REQUEST['p'] == "chartDonutRequerimentoCurso" || @$_REQUEST['p'] == "chartColumnRequerimentoCurso" ) {?>
<script type="text/javascript" src="js/libs/chartRequerimentoCurso.js"></script>
<?php } ?>
<script type="text/javascript" src="chamado/js/cadastrarAluno.js"></script>
<script type="text/javascript" src="pessoa/js/buscarMatricula.js"></script>
<script type="text/javascript" src="chamado/js/acoesChamado.js"></script>
<script type="text/javascript" src="js/jQuery-Mask/src/jquery.mask.js"></script>
<script type="text/javascript" src="js/libs/dataTableConfig.js"></script>
<script type="text/javascript" src="chamado/js/autocompleteChamado.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="js/libs/dataPicker.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<script type="text/javascript">
  $(document).ready(function(){


    $('.btn-deslogar').click(function(){
         var result = bootbox.confirm({
            message: "Deseja Sair do Sistema?",
            buttons: {
                confirm: {
                    label: 'Sim',
                    className: 'btn-info'
                },
                cancel: {
                    label: 'Não'
                }
            },
            callback: function (result) {
                if(result != false){
                 var matricula = '<?php echo $matricula; ?>';
                  var acao = 'deslogar';
                    $.ajax({            
                      url:"teste.php",            
                      type:"post",                
                      data: "acao="+acao+"&matricula="+matricula,
                      success: function (result){ 
                        location.href = "login/login.php";
                      }
                    });
              } 
            }
        });
      
    });
 var dataInicio = $(".dataInicio").val();
 var dataFim = $(".dataFim").val(); 

 $(".listarChamados").load("chamado/list/chamadosList.php?dataInicio="+dataInicio+"&dataFim="+dataFim);
 $(".listarChamadosFinalizados").load("chamado/list/chamadosFinalizadosList.php?dataInicio="+dataInicio+"&dataFim="+dataFim);

  $('.consultarChamados').click(function(){
    var dataInicio = $(".dataInicio").val();
    var dataFim = $(".dataFim").val();
    $(".listarChamados").load("chamado/list/chamadosList.php?dataInicio="+dataInicio+"&dataFim="+dataFim);
  });
  $('.consultarChamadosFinalizado').click(function(){
    var dataInicio = $(".dataInicio").val();
    var dataFim = $(".dataFim").val();
  $(".listarChamadosFinalizados").load("chamado/list/chamadosFinalizadosList.php?dataInicio="+dataInicio+"&dataFim="+dataFim);

  });
 
  <?php if(@$_REQUEST['p'] == "chartPieAll") {?>
    chartPieAll(dataInicio, dataFim);
  <?php }?>
  <?php if(@$_REQUEST['p'] == "chartDonutAll") {?>
    chartDonutAll(dataInicio, dataFim);
  <?php }?>
  <?php if(@$_REQUEST['p'] == "chartBarAll") {?>
    chartBarAll(dataInicio, dataFim);
  <?php }?>
  <?php if(@$_REQUEST['p'] == "chartColumnAll") {?>
    chartColumnAll(dataInicio, dataFim);
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartPieCurso") {?>
    chartPieCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarCurso") {?>
    chartBarCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutCurso") {?>
    chartDonutCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartColumnCurso") {?>
    chartColumnCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieTipoCursoAll") {?>
    chartPieTipoCursoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutTipoCursoAll") {?>
    chartDonutTipoCursoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarTipoCursoAll") {?>
    chartBarTipoCursoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartColumnTipoCursoAll") {?>
    chartColumnTipoCursoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieCursoAll") {?>
    chartPieCursoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutCursoAll") {?>
    chartDonutCursoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarCursoAll") {?>
    chartBarCursoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartColumnCursoAll") {?>
    chartColumnCursoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieTipoRequerimentoAll") {?>
    chartPieTipoRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarTipoRequerimentoAll") {?>
    chartBarTipoRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutTipoRequerimentoAll") {?>
    chartDonutTipoRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartColumnTipoRequerimentoAll") {?>
    chartColumnTipoRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieGrupoRequerimentoAll") {?>
    chartPieGrupoRequerimentoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarGrupoRequerimentoAll") {?>
    chartBarGrupoRequerimentoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutGrupoRequerimentoAll") {?>
    chartDonutGrupoRequerimentoAll(dataInicio, dataFim,'');
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartColumnGrupoRequerimentoAll") {?>
    chartColumnGrupoRequerimentoAll(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieRequerimentoAll") {?>
    chartPieRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarRequerimentoAll") {?>
    chartBarRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutRequerimentoAll") {?>
    chartDonutRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartColumnRequerimentoAll") {?>
    chartColumnRequerimentoAll(dataInicio, dataFim);
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartPieTipoRequerimentoCurso") {?>
    chartPieTipoRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutTipoRequerimentoCurso") {?>
    chartDonutTipoRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartBarTipoRequerimentoCurso") {?>
    chartBarTipoRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
 <?php if(@$_REQUEST['p'] == "chartColumnTipoRequerimentoCurso") {?>
    chartColumnTipoRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieGrupoRequerimentoCurso") {?>
    chartPieGrupoRequerimentoCurso(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarGrupoRequerimentoCurso") {?>
    chartBarGrupoRequerimentoCursodataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutGrupoRequerimentoCurso") {?>
    chartDonutGrupoRequerimentoCurso(dataInicio, dataFim,'');
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartColumnGrupoRequerimentoCurso") {?>
    chartColumnGrupoRequerimentoCurso(dataInicio, dataFim,'');
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartPieRequerimentoCurso") {?>
    chartPieRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartBarRequerimentoCurso") {?>
    chartBarRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
  <?php if(@$_REQUEST['p'] == "chartDonutRequerimentoCurso") {?>
    chartDonutRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
   <?php if(@$_REQUEST['p'] == "chartColumnRequerimentoCurso") {?>
    chartColumnRequerimentoCurso(dataInicio, dataFim);
  <?php } ?>
});
</script>
</body>
</html>
