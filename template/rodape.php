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
<script type="text/javascript" src="js/libs/chart.js"></script>
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

  });
</script>

</body>
</html>
