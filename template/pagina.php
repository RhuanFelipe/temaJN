<?php 
/*
* essa tela é realizado toda a administração dos links de acessos do site
*/

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
		include_once "chamado/chamadosFinalizados.php";
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
	else if($pagina == 'cadUnidade')
		include_once "cadastramento/unidade.php";
	else if($pagina == 'formUnidade')
		include_once "cadastramento/formUnidade.php";
	else if($pagina == 'cadTipoRequerimento')
		include_once "cadastramento/tipoRequerimento.php";
	else if($pagina == 'acaoTipoRequerimento')
		include_once "cadastramento/acaoTipoRequerimento.php";
	else if($pagina == 'formTipoRequerimento')
		include_once "cadastramento/formTipoRequerimento.php";
	else if($pagina == 'cadGrupoRequerimento')
		include_once "cadastramento/grupoRequerimento.php";
	else if($pagina == 'formGrupoRequerimento')
		include_once "cadastramento/formGrupoRequerimento.php";
	else if($pagina == 'cadRequerimento')
		include_once "cadastramento/requerimento.php";
	else if($pagina == 'formRequerimento')
		include_once "cadastramento/formRequerimento.php";
	else if($pagina == 'cadAtendente')
		include_once "pessoa/atendente.php";
	else if($pagina == 'cadCoordenador')
		include_once "pessoa/coordenador.php";
	else if($pagina == 'formAtendente')
		include_once "pessoa/formAtendente.php";
	else if($pagina == 'formCoordenador')
		include_once "pessoa/formCoordenador.php";
	else if($pagina == 'formProfile')
		include_once "login/formProfile.php";
	else if($pagina == 'chartPieAll')
		include_once "graficos/chartPieAll.php";
	else if($pagina == 'chartDonutAll')
		include_once "graficos/chartDonutAll.php";
	else if($pagina == 'chartBarAll')
		include_once "graficos/chartBarAll.php";
	else if($pagina == 'chartColumnAll')
		include_once "graficos/chartColumnAll.php";
	else if($pagina == 'chartPieCurso')
		include_once "graficos/chartPieCurso.php";
	else if($pagina == 'chartBarCurso')
		include_once "graficos/chartBarCurso.php";
	else if($pagina == 'chartDonutCurso')
		include_once "graficos/chartDonutCurso.php";
	else if($pagina == 'chartColumnCurso')
		include_once "graficos/chartColumnCurso.php";
	else if($pagina == 'chartPieTipoCursoAll')
		include_once "graficos/chartPieTipoCursoAll.php";
	else if($pagina == 'chartBarTipoCursoAll')
		include_once "graficos/chartBarTipoCursoAll.php";
	else if($pagina == 'chartDonutTipoCursoAll')
		include_once "graficos/chartDonutTipoCursoAll.php";
	else if($pagina == 'chartColumnTipoCursoAll')
		include_once "graficos/chartColumnTipoCursoAll.php";
	else if($pagina == 'chartPieCursoAll')
		include_once "graficos/chartPieCursoAll.php";
	else if($pagina == 'chartDonutCursoAll')
		include_once "graficos/chartDonutCursoAll.php";
	else if($pagina == 'chartBarCursoAll')
		include_once "graficos/chartBarCursoAll.php";
	else if($pagina == 'chartColumnCursoAll')
		include_once "graficos/chartColumnCursoAll.php";
	else
		include_once "404.php";
?>