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
<script type="text/javascript" src="chamado/js/autocompleteChamado.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var ver_click = $('.ver');

    $(".btn-cad-aluno").click(function(){
      var nome = $("#nome").val();
      var periodo = $("#periodo").val();
      var email = $("#email").val();
      var telefone = $("#telefone").val();
      var tipoCurso = $(".tipoCursoModal").val();
      var curso = $(".curso").val();
      var matricula = $("#matricula_novo").val();

      var msgError = "";
      var error = 0;

      if(nome == ''){
         msgError += '* <b style="color:red">PREENCHA O CAMPO NOME</b><br><br>';
         error++;
      }
      if(matricula == ''){
         msgError += '* <b style="color:red">PREENCHA O MATRICULA</b><br><br>';
         error++;
      }
      if(periodo == ''){
         msgError += '* <b style="color:red">PREENCHA O PERIODO</b><br><br>';
         error++;
      }
      if(tipoCurso == ''){
         msgError += '* <b style="color:red">PREENCHA O TIPO CURSO</b><br><br>';
         error++;
      }
       if(curso == ''){
         msgError += '* <b style="color:red">PREENCHA O CURSO</b><br><br>';
         error++;
      }
      if(email == ''){
         msgError += '* <b style="color:red">PREENCHA O E-MAIL</b><br><br>';
         error++;
      }
      if(telefone == ''){
         msgError += '* <b style="color:red">PREENCHA O TELEFONE</b><br><br>';
         error++;
      }
      if(error != 0){
         bootbox.alert({
              title: "ERROR AO CADASTRAR CHAMADO",
              message: msgError
              
        });
      }else{
        $.ajax({
            type: "POST",
            url: "chamado/salvarAluno.php",
            data: $("#form-cad-aluno").serialize(),
            success: function(data){
              $(".btn-fechar-cadAluno").trigger("click");
              $("#matricula").val(data);
            }
          });
      } 
    }); 

    ver_click.click(function(){
      $('.chamado_click').val($(this).data('id-chamado'))
    });

    $(".ver").click(function(){
        var id_chamado = $('.chamado_click').val();
        console.log(id_chamado)
        $.ajax({
          type: "POST",
          url: "biblioteca/list/listarDadosModal.php",
          data: {id : id_chamado},
          success: function(data){
            $('.label-assunto').html(data.assunto_chamado);
            $('.label-nome').html(data.nome_pessoa);
            $('.label-tipo-requerimento').html(data.tipo_requerimento);
            $('.label-grupo-requerimento').html(data.grupo_requerimento);
            $('.label-requerimento').html(data.requerimento);
            
            //console.log("Data: " + data + "\nStatus: " + status)
          }
        });
    });
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
      
    $('.concluir , .cancelar, .excluir').mouseover(function(){
      $("#id_chamado").val(this.id);
    });

    $('.concluir').click(function(){
         var result = bootbox.confirm({
            message: "Deseja Concluir o Chamado?",
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
                  var id = parseInt($("#id_chamado").val());
                  $.ajax({            
                    url:"chamado/acao.php",            
                    type:"GET",                
                    data: "p=executar&acao=concluir&id="+id,
                    success: function (result){ 
                      location.href = "index.php";
                    }
                  });
              } 
            }
      });
   
    });
    $(document).ready(function() {
      var tabela = $('#fullTable').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ por página",
          "zeroRecords": "não encontrado",
          "info": "Mostrar páginas _PAGE_ de _PAGES_",
          "infoEmpty": "Nenhum registro disponivel",
          "infoFiltered": "(filtrando from _MAX_ total de registros)"
        },
        dom: 'Bfrtip',
        buttons: [
        'excel', 'pdf', 'print'
        ]
      });

      var tabela_min = $('#simpleTable').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ por página",
          "zeroRecords": "não encontrado",
          "infoEmpty": "Nenhum registro disponivel",
          "infoFiltered": "(filtrando from _MAX_ total de registros)",

        },"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tudo"]]
      });
      tabela_min.buttons().disable();
    });


    $('.cancelar').click(function(){
            var result = bootbox.confirm({
            message: "Deseja Cancelar o Chamado?",
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
                  var id = parseInt($("#id_chamado").val());
                  $.ajax({            
                    url:"chamado/acao.php",            
                    type:"GET",                
                    data: "p=executar&acao=cancelar&id="+id,
                    success: function (result){ 
                      location.href = "index.php";
                    }
                  });
              } 
            }
      });
     
    });  
    $('.excluir').click(function(){
            var result = bootbox.confirm({
            message: "Deseja Excluir o Chamado?",
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
                  var id = parseInt($("#id_chamado").val());
                  $.ajax({            
                    url:"chamado/acao.php",            
                    type:"GET",                
                    data: "p=executar&acao=excluir&id="+id,
                    success: function (result){ 
                      location.href = "index.php";
                    }
                  });
              } 
            }
      });
     
    });  

 
  });
</script>
<style type="text/css">
  body {
  overflow-x: hidden;
}

</style>
</body>
</html>
