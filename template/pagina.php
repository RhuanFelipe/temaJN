<?php 

if($_SESSION['nivel_id'] != 4)
	$pagina = (isset($_GET['p'])) ? $_GET['p'] : "home";
else
	$pagina = (isset($_GET['p'])) ? $_GET['p'] : "homeAdmin";

	if($pagina == 'home')
		include_once "chamado/home.php";
	else if($pagina == 'abrirChamado')
		include_once "chamado/abrirChamado.php";
	else if($pagina == 'graficosChamados')
		include_once "graficosChamados.php";
	else if($pagina == 'graficosArea')
		include_once "graficoArea.php";
	else if($pagina == 'graficosRequerimento')
		include_once "graficoTipoRequerimento.php";
	else if($pagina == 'chamadosFinalizados')
		include_once "chamadosFinalizados.php";
	else if($pagina == 'homeAdmin')
		include_once "home.php";
	else if($pagina == 'cadTipoCurso')
		include_once "cadastramento/tipoCurso.php";
	else if($pagina == 'formTipoCurso')
		include_once "cadastramento/formTipoCurso.php";
	else if($pagina == 'cadCurso')
		include_once "cadastramento/curso.php";
	else if($pagina == 'formCurso')
		include_once "cadastramento/formCurso.php";
	
	
?>