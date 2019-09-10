<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$acao = $_REQUEST['acao'];
$cs = new Curso();

if($acao == 'insert'){
	$tipoCurso = strtoupper($_REQUEST['tipoCurso']);
	$curso = strtoupper($_REQUEST['curso']);
	$cs->setTipoCursoId($tipoCurso);
	$cs->setNomeCurso($curso);

	$cs->insert();
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$cs->inative($id);
	header('Location: ../index.php?p=cadCurso');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$cs->ative($id);
	header('Location: ../index.php?p=cadCurso');
}else if($acao == 'update'){
	$id = $_REQUEST['id'];
	$tipoCurso = strtoupper($_REQUEST['tipoCurso']);
	$curso = strtoupper($_REQUEST['curso']);

	$cs->setTipoCursoId($tipoCurso);
	$cs->setNomeCurso($curso);
	$cs->update($id);
}

?>