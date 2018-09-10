<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	
	$curso = new Curso();
	$cursos = $curso->findAll();

	if(count($cursos) > 0){
		foreach ($cursos as $value) {
			
			echo "<option value=".$value->id_curso."  >".$value->nome_curso."</option>";
		}
	}else{
		echo "<option>Informe o curso</option>";
	}
?>