<?php 

$pagina = (isset($_GET['p'])) ? $_GET['p'] : "home";

	if($pagina == 'home')
		include_once "home.php";
	else if($pagina == 'abrirChamado')
		include_once "abrirChamado.php";
	
	
?>