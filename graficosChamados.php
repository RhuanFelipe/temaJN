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
	    type: 'pie',
	// The data for our dataset
    data: {
        labels: ["Finalizados", "Abertos","Cancelado"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: ['rgb(97, 239, 203)','rgb(152, 90, 196)','rgb(239, 234, 98)'],
            data: [<?php echo $finalizado;?>, <?php echo $aberto; ?>, <?php echo $cancelado;?>],
        }]
    },
    options:{
    	title:{
    		display:true,
    		fontSize:20,
    		text: 'GRÁFICO DE QUANTIDADE DE CHAMADOS'
    	}
    }
    
});
</script>
