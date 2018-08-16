<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$cs = new Unidade();

if($acao == 'insert'){
	$unidade = $_REQUEST['unidade'];
	$cs->setDescUnidade($unidade);

	$cs->insert();
}else if($acao == 'delete'){
	$id = $_REQUEST['id'];
	$cs->delete($id);
	header('Location: ../index.php?p=cadUnidade');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$unidade = $_REQUEST['unidade'];
	$cs->setDescUnidade($unidade);

	$cs->update($id);
}

?>