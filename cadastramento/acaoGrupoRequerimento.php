<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$gr = new GrupoRequerimento();

if($acao == 'insert'){
	$tipoRequerimento = $_REQUEST['tipoRequerimento'];
	$grupoRequerimento = $_REQUEST['grupoRequerimento'];

	$gr->setDescGrupo($grupoRequerimento);
	$gr->setTipoRequerimentoId($tipoRequerimento);

	$gr->insert();
}else if($acao == 'delete'){
	$id = $_REQUEST['id'];
	$gr->delete($id);
	header('Location: ../index.php?p=cadGrupoRequerimento');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoRequerimento = $_REQUEST['tipoRequerimento'];
	$grupoRequerimento = $_REQUEST['grupoRequerimento'];

	$gr->setDescGrupo($grupoRequerimento);
	$gr->setTipoRequerimentoId($tipoRequerimento);
	$gr->update($id);
}

?>