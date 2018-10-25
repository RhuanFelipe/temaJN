<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	$coord = new Pessoa();

	$coordenador = $coord->findCoordenadorCurso($id);

	if(count($coordenador) > 0){
		foreach ($coordenador as $value) {
		
			echo "<option value=".$value->curso_id."  >".utf8_encode($value->nome_pessoa)."</option>";
		}
	}else{
		echo "<option>Informe o Coordenador</option>";
	}
?>