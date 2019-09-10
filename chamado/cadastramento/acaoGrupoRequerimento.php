<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$gr = new GrupoRequerimento();

if($acao == 'insert'){
	$tipoRequerimento = strtoupper($_REQUEST['tipoRequerimento']);
	$grupoRequerimento = strtoupper($_REQUEST['grupoRequerimento']);

	$gr->setDescGrupo($grupoRequerimento);
	$gr->setTipoRequerimentoId($tipoRequerimento);

	$gr->insert();
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$gr->inative($id);
	header('Location: ../index.php?p=cadGrupoRequerimento');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$gr->ative($id);
	header('Location: ../index.php?p=cadGrupoRequerimento');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoRequerimento = strtoupper($_REQUEST['tipoRequerimento']);
	$grupoRequerimento = strtoupper($_REQUEST['grupoRequerimento']);

	$gr->setDescGrupo($grupoRequerimento);
	$gr->setTipoRequerimentoId($tipoRequerimento);
	$gr->update($id);
}

?>