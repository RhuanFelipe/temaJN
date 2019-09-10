<?php
 session_start();
 header("Content-Type: application/json; charset=utf-8"); 
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);
$cursoId = $_SESSION['curso_id'];

$chamado = new ChamadoResposta();
$qtdChamadosCancelados  = $chamado->qtdChamadosCancPeriodoCurso($dataInicio,$dataFim,$cursoId);
$qtdChamadosConfirmados = $chamado->qtdChamadosConfPeriodoCurso($dataInicio,$dataFim,$cursoId);

$return['qtdChamadosCancelados']    =  $qtdChamadosCancelados;
$return['qtdChamadosConfirmados'] =  $qtdChamadosConfirmados;

echo json_encode($return);
