<?php
 session_start();
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$encoding = 'UTF-8';

$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);

$i = 1;
$chamado = new ChamadoResposta();
$curso = new Curso();
$cursoCount = $curso->countAll();

while($i <= $cursoCount){
	$cursos = $curso->findById($i);
	$idCurso = $cursos[0]->id_curso;
	$cursoNome = $cursos[0]->nome_curso;
	$cursoArray[$i-1]["CURSO"] = $cursoNome;
	$qtdCursoArray[$i-1]["QTDCHAMADO"] = $chamado->qtdChamadosCursoAll($dataInicio,$dataFim,$i);
	$cursoArray[$i-1]["QTDTOTALCHAMADOS"] = $qtdCursoArray[$i-1]["QTDCHAMADO"];

	$i++;
}
echo json_encode($cursoArray);
