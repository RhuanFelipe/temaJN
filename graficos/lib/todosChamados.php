<?php
  header("Content-Type: application/json; charset=utf-8"); 

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}

$chamado = new ChamadoResposta();
$qtdChamadosCancelados  = $chamado->qtdChamadosCancelados();
$qtdChamadosConfirmados = $chamado->qtdChamadosConfirmados();

$return['qtdChamadosCancelados']    =  $qtdChamadosCancelados;
$return['qtdChamadosConfirmados'] =  $qtdChamadosConfirmados;

echo json_encode($return);
