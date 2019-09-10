<?php
 session_start();
 //header("Content-Type: application/json; charset=utf-8"); 
 include "../../biblioteca/util.php";

function __autoload($class_name){
	require_once '../../classes/' . $class_name . '.php';
}
$encoding = 'UTF-8';

$dataInicio = datasql($_REQUEST['dataInicio']);
$dataFim = datasql($_REQUEST['dataFim']);
$cursoId = $_SESSION['curso_id'];

$chamado = new ChamadoResposta();
$tipo = new tipoCurso();
$tipoCursoCount = $tipo->countAll();
$i = 1;


while($i <= $tipoCursoCount){
	$tipoCurso = $tipo->findById($i);
	$idTipoCurso = $tipoCurso[0]->id_tipo_curso;
	$tipoCursoNome = $tipoCurso[0]->tipo_curso;

	//$tipoCursoArray[$i-1]["ID"] = $idTipoCurso;
	$tipoCursoArray[$i-1]["TIPOCURSO"] = mb_convert_case($tipoCursoNome, MB_CASE_UPPER, $encoding);
	$qtdTipoCursoArray[$i-1]["QTDCHAMADO"] = $chamado->qtdChamadosTipoCursoAll($dataInicio,$dataFim,$i);
	$tipoCursoArray[$i-1]["QTDTOTALCHAMADOS"] = $qtdTipoCursoArray[$i-1]["QTDCHAMADO"];
	
	$i++;
}
echo json_encode($tipoCursoArray);
