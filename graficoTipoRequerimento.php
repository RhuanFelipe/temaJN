 <?php 
  $c = new Chamado();
  $reclamacao = $c->qtdChamadosReclamacao();
  $solicitacao =  $c->qtdChamadosSolicitacao();
 
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
        labels: ["Reclamação","Solicitação"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: ['rgb(97, 239, 203)','rgb(152, 90, 196)'],
            data: [<?php echo $reclamacao;?>, <?php echo $solicitacao; ?>],
        }]
    },
    options:{
    	title:{
    		display:true,
    		fontSize:20,
    		text: 'GRÁFICO POR TIPO DE REQUERIMENTO'
    	}
    }
    
});
</script>
