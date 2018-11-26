<?php
 session_start();
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$encoding = 'UTF-8';

$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);

$i = 1;
$chamado = new ChamadoResposta();
$requerimento = new Requerimento();
$requerimentoCount = $requerimento->countAll();

while($i <= $requerimentoCount){
	$requerimento = $requerimento->findById($i);
	$idRequerimento = $requerimento[0]->id_requerimento;
	$nomeRequerimento = $requerimento[0]->desc_requerimento;

	$requerimentoArray[$i-1]["REQUERIMENTO"] = $nomeRequerimento;
	$qtRequerimentoArray[$i-1]["QTDCHAMADO"] = $chamado->qtdChamadosRequerimentoAll($dataInicio,$dataFim,$i);
	$requerimentoArray[$i-1]["QTDTOTALCHAMADOS"] = $qtRequerimentoArray[$i-1]["QTDCHAMADO"];

	$i++;
}
echo json_encode($requerimentoArray);