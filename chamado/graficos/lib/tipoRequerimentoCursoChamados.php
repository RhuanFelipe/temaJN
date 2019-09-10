<?php
 session_start();
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$encoding = 'UTF-8';
$cursoId = $_SESSION['curso_id'];
$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);

$i = 1;
$chamado = new ChamadoResposta();
$tipo = new TipoRequerimento();
$tipoCount = $tipo->countAll();

while($i <= $tipoCount){
	$tipoRequerimento = $tipo->findById($i);
	$idTipo = $tipoRequerimento[0]->id_requerimento;
	$nomeRequerimento = mb_convert_case($tipoRequerimento[0]->opt_requerimento, MB_CASE_UPPER, $encoding);

	$tipoArray[$i-1]["TIPO"] = $nomeRequerimento;
	$qtTipoArray[$i-1]["QTDCHAMADO"] = $chamado->qtdChamadosTipoACurso($dataInicio,$dataFim,$i,$cursoId);
	$tipoArray[$i-1]["QTDTOTALCHAMADOS"] = $qtTipoArray[$i-1]["QTDCHAMADO"];

	$i++;
}
echo json_encode($tipoArray);
