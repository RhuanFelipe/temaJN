 <?php 
   $c = new Chamado();
  $finalizado = $c->qtdChamadosFinalizado();
  $cancelado = $c->qtdChamadosCancelados();
  $total = $c->qtdChamados();
  $aberto = $total - ($finalizado + $cancelado);
  print($aberto);
 ?>
 <!--main content start-->
 <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
		    <canvas class="line-chart" width=500" height="200"></canvas>
        <div class="row"></div>
    </section>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
	var ctx = document.getElementsByClassName("line-chart");
	// For a pie chart
	var myPieChart = new Chart(ctx,{
	    type: 'bar',
	// The data for our dataset
    data: {
        labels: ["ADMINISTRAÇÃO","BIOMEDICINA","ENGENHARIA DA COMPUTAÇÃO","FARMÁCIA","PEDAGOGIA","CIÊNCIA DA COMPUTAÇÃO","SISTEMAS DE INFORMAÇÃO","TURISMO","JORNALISMO","FILOSOFIA"],
        datasets: [{
            label: "Dados estátisticos chamados",
            backgroundColor: ['rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)','rgb(97, 239, 203)'],
            data: [11,12,30,5,66,78,87,76,88,20],
        }]
    },
    options:{
    	title:{
    		display:true,
    		fontSize:20,
    		text: 'GRÁFICO DE QUANTIDADE DE CHAMADOS POR CURSO'
    	}
    }
    
});
</script>
