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
$grupo = new GrupoRequerimento();
$grupoCount = $grupo->countAll();

while($i <= $grupoCount){
	$grupoRequerimento = $grupo->findById($i);
	$idgrupo = $grupoRequerimento[0]->id_grupo;
	$nomeRequerimento = $grupoRequerimento[0]->desc_grupo;

	$grupoArray[$i-1]["GRUPO"] = $nomeRequerimento;
	$qtgrupoArray[$i-1]["QTDCHAMADO"] = $chamado->qtdChamadosgrupoAll($dataInicio,$dataFim,$i);
	$grupoArray[$i-1]["QTDTOTALCHAMADOS"] = $qtgrupoArray[$i-1]["QTDCHAMADO"];

	$i++;
}
echo json_encode($grupoArray);