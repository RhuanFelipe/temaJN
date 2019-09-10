<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$tp = new tipoCurso();

if($acao == 'insert'){
	$tipoCurso = strtoupper($_REQUEST['tipoCurso']);
	$tp->setTipoCurso($tipoCurso);
	$tp->insert();
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$tp->inative($id);
	header('Location: ../index.php?p=cadTipoCurso');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$tp->ative($id);
	header('Location: ../index.php?p=cadTipoCurso');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoCurso = strtoupper($_REQUEST['tipoCurso']);
	$tp->setTipoCurso($tipoCurso);
	$tp->update($id);
}

?>