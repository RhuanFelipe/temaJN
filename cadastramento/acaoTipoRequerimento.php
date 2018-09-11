<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$tr = new TipoRequerimento();

if($acao == 'insert'){
	$tipoRequerimento = $_REQUEST['tipoRequerimento'];
	$tr->setOptRequerimento($tipoRequerimento);
	$tr->insert();
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$tr->inative($id);
	header('Location: ../index.php?p=cadTipoRequerimento');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$tr->ative($id);
	header('Location: ../index.php?p=cadTipoRequerimento');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoRequerimento = $_REQUEST['tipoRequerimento'];
	$tr->setOptRequerimento($tipoRequerimento);
	$tr->update($id);
}

?>