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
                
            });
</script>
</body>
</html>
