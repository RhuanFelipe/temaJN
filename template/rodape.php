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
<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".ver").click(function(){
      $(".modal-desc").click(function(){
        var i = $(this).index() + 1;
        var nome = $('.nome_pessoa_'+i).val();
        var tp = $('.tp_'+i).val();
        var gr = $('.gr_'+i).val();
        var req = $('.req_'+i).val();
        var assunto = $('.assunto_'+i).val();  
     
        console.log("Id : "+i+", nome: "+nome+ ", tp: "+ tp + ", gr : "+gr+", req : "+req+ ", assunto: "+assunto);
        $('.label-nome').html(nome);
        $('.label-tipo-requerimento').html(tp);
        $('.label-grupo-requerimento').html(gr);
        $('.label-requerimento').html(req);
        $('.label-assunto').html(assunto);
      });
    });
    $('.btn-deslogar').click(function(){
      var result = confirm("Deseja sair do Sistema?");
      var matricula = <?php echo $matricula; ?>;
      var acao = 'deslogar';
      if(result == 1){
        $.ajax({            
          url:"teste.php",            
          type:"post",                
          data: "acao="+acao+"&matricula="+matricula,
          success: function (result){ 
            location.href = "login.php";
          }
        });
      }
    });
    $("#tipoCurso").load("biblioteca/list/listarTipoCurso.php",function(){
      $("#curso").load( "biblioteca/list/listarCurso.php?id="+this.value,function(){
        $("#aluno").load( "biblioteca/list/listarAluno.php?id="+this.value);
      });
    });
    $("#unidade").load("biblioteca/list/listarUnidade.php");
    $("#tipo_requerimento").load("biblioteca/list/listarTipoRequerimento.php",function(){
      $("#grupo_requerimento").load( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value,function(){
       $("#requerimento").load( "biblioteca/list/listarRequerimento.php?id="+this.value);
     });
    });
    $("#curso").change(function(){
        $("#aluno").load( "biblioteca/list/listarAluno.php?id="+this.value);
      });
    $("#tipoCurso").change(function(){
     $("#curso").load( "biblioteca/list/listarCurso.php?id="+this.value);
   });

    $("#tipo_requerimento").change(function(){
     $("#grupo_requerimento").load( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value);
   });
    $("#grupo_requerimento").change( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value,function(){
     $("#requerimento").load( "biblioteca/list/listarRequerimento.php?id="+this.value);
   });   
    $('.concluir , .cancelar').mouseover(function(){
      $("#id_chamado").val(this.id);
    });


    $('.concluir').click(function(){
      var id = parseInt($("#id_chamado").val());
      $.ajax({            
        url:"acao.php",            
        type:"GET",                
        data: "p=executar&acao=concluir&id="+id,
        success: function (result){ 
          location.href = "index.php";
        }
      });
    });
    $(document).ready(function() {
      var tabela = $('#example').DataTable({
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
    } );

    $('.cancelar').click(function(){
      var id = parseInt($("#id_chamado").val());
      $.ajax({            
        url:"acao.php",            
        type:"GET",                
        data: "p=executar&acao=cancelar&id="+id,
        success: function (result){ 
          location.href = "index.php";
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
