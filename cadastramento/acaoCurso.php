<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$cs = new Curso();

if($acao == 'insert'){
	$tipoCurso = $_REQUEST['tipoCurso'];
	$tp->setTipoCurso($tipoCurso);
	$tp->insert();
}else if($acao == 'delete'){
	$id = $_REQUEST['id'];
	$cs->delete($id);
	header('Location: ../index.php?p=cadCurso');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoCurso = $_REQUEST['tipoCurso'];
	$tp->setTipoCurso($tipoCurso);
	$tp->update($id);
}

?>