<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	
	$tipoCurso = new TipoCurso();
	$tipo = $tipoCurso->findAll();

	foreach ($tipo as $value) {
		echo "<option value=".$value->id_tipo_curso.">".utf8_encode($value->tipo_curso)."</option>";
	}

?>
