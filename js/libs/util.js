  var dataInicio = $(".dataInicio").val();
  var dataFim = $(".dataFim").val(); 
  
<?php if($_REQUEST['p'] == "chartPieAll") {?>
  chartPieAll(dataInicio, dataFim);
<?php }?>
<?php if($_REQUEST['p'] == "chartDonutAll") {?>
  chartDonutAll(dataInicio, dataFim);
<?php }?>
<?php if($_REQUEST['p'] == "chartBarAll") {?>
  chartBarAll(dataInicio, dataFim);
<?php }?>
<?php if($_REQUEST['p'] == "chartColumnAll") {?>
  chartColumnAll(dataInicio, dataFim);
<?php } ?>