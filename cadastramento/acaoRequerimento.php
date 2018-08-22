<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$req = new Requerimento();

if($acao == 'insert'){
	$grupoRequerimento = $_REQUEST['grupoRequerimento'];
	$requerimento = $_REQUEST['requerimento'];
	
	$req->setDescRequerimento($requerimento);
	$req->setGrupoRequerimentoId($grupoRequerimento);

	$req->insert();
}else if($acao == 'delete'){
	$id = $_REQUEST['id'];
	$req->delete($id);
	header('Location: ../index.php?p=cadRequerimento');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$grupoRequerimento = $_REQUEST['grupoRequerimento'];
	$requerimento = $_REQUEST['requerimento'];
	
	$req->setDescRequerimento($requerimento);
	$req->setGrupoRequerimentoId($grupoRequerimento);
	
	$req->update($id);
}

?>