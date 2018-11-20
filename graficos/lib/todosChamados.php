<?php
  header("Content-Type: application/json; charset=utf-8"); 
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);
$chamado = new ChamadoResposta();
$qtdChamadosCancelados  = $chamado->qtdChamadosCanceladosPeriodo($dataInicio,$dataFim);
$qtdChamadosConfirmados = $chamado->qtdChamadosConfirmadosPeriodo($dataInicio,$dataFim);

$return['qtdChamadosCancelados']    =  $qtdChamadosCancelados;
$return['qtdChamadosConfirmados'] =  $qtdChamadosConfirmados;

echo json_encode($return);
