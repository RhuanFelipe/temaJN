<?php
 session_start();
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$encoding = 'UTF-8';

$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);
$tipoRequerimento = $_REQUEST['tipoRequerimento'];
$grupoRequerimento = $_REQUEST['grupoRequerimento'];
$cursoId = $_SESSION['curso_id'];

$i = 1;
$chamado = new ChamadoResposta();
$requerimento = new Requerimento();
$requerimentoCount = $requerimento->countAll();

while($i <= $requerimentoCount){
	$requerimentos = $requerimento->findById($i);
	$idRequerimento = $requerimentos[0]->id_requerimento;
	$nomeRequerimento = $requerimentos[0]->desc_requerimento;

	$requerimentoArray[$i-1]["REQUERIMENTO"] = $nomeRequerimento;
	$qtRequerimentoArray[$i-1]["QTDCHAMADO"] = $chamado->qtdChamadosRequerimentoCurso($dataInicio,$dataFim,$i,$tipoRequerimento,$grupoRequerimento,$cursoId);
	$requerimentoArray[$i-1]["QTDTOTALCHAMADOS"] = $qtRequerimentoArray[$i-1]["QTDCHAMADO"];

	$i++;
}
echo json_encode($requerimentoArray);