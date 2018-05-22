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


<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".ver").click(function(){
      $(".modal-desc").click(function(){
        var i = $(this).index() + 1;
        var nome = $('.nome_pessoa_'+i).text();
        var tp = $('.tp_'+i).val();
        var gr = $('.gr_'+i).val();
        var req = $('.req_'+i).text();
        var assunto = $('.assunto_'+i).val();             

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
         $("#curso").load( "biblioteca/list/listarCurso.php?id="+this.value);
      });
      $("#unidade").load("biblioteca/list/listarUnidade.php");
      $("#tipo_requerimento").load("biblioteca/list/listarTipoRequerimento.php",function(){
        $("#grupo_requerimento").load( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value,function(){
           $("#requerimento").load( "biblioteca/list/listarRequerimento.php?id="+this.value);
        });
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
     
          
      });
</script>
</body>
</html>
