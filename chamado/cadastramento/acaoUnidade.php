<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$cs = new Unidade();

if($acao == 'insert'){
	$unidade = strtoupper($_REQUEST['unidade']);
	$cs->setDescUnidade($unidade);

	$cs->insert();
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$cs->inative($id);
	header('Location: ../index.php?p=cadUnidade');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$cs->ative($id);
	header('Location: ../index.php?p=cadUnidade');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$unidade = strtoupper($_REQUEST['unidade']);
	$cs->setDescUnidade($unidade);

	$cs->update($id);
}

?>