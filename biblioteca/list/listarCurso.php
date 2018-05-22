<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	$id = $_REQUEST['id'];
	$curso = new Curso();
	$cursos = $curso->findByIdFK($id);
	var_dump($cursos);
	if(count($cursos) > 0){
		foreach ($cursos as $value) {
		echo "<option value=".$value->id_curso.">".utf8_encode($value->nome_curso)."</option>";
		}
	}else{
		echo "<option>Informe o curso</option>";
	}
?>