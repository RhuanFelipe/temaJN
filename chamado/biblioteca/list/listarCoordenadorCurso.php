<?php
    $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	$coord = new Pessoa();

	$coordenador = $coord->findCoordenadorCurso($id);

	if(count($coordenador) > 0){
		foreach ($coordenador as $value) {
		
			echo "<option value=".$value->curso_id."  >".mb_convert_case($value->nome_pessoa, MB_CASE_UPPER, $encoding)."</option>";
		}
	}else{
		echo "<option>Informe o Coordenador</option>";
	}
?>