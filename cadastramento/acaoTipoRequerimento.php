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
}else if($acao == 'delete'){
	$id = $_REQUEST['id'];
	$tr->delete($id);
	header('Location: ../index.php?p=cadTipoRequerimento');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoRequerimento = $_REQUEST['tipoRequerimento'];
	$tr->setOptRequerimento($tipoRequerimento);
	$tr->update($id);
}

?>