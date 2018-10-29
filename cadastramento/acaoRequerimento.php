<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$req = new Requerimento();

if($acao == 'insert'){
	$grupoRequerimento = strtoupper($_REQUEST['grupoRequerimento']);
	$requerimento = strtoupper($_REQUEST['requerimento']);
	
	$req->setDescRequerimento($requerimento);
	$req->setGrupoRequerimentoId($grupoRequerimento);

	$req->insert();
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$req->inative($id);
	header('Location: ../index.php?p=cadRequerimento');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$req->ative($id);
	header('Location: ../index.php?p=cadRequerimento');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$grupoRequerimento = strtoupper($_REQUEST['grupoRequerimento']);
	$requerimento = strtoupper($_REQUEST['requerimento']);
	
	$req->setDescRequerimento($requerimento);
	$req->setGrupoRequerimentoId($grupoRequerimento);
	
	$req->update($id);
}

?>