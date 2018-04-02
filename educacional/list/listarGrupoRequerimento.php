<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}
	$id = $_REQUEST['id'];
	$grupoRequerimento = new GrupoRequerimento();
	$gp = $grupoRequerimento->findById($id);

	if(count($gp) > 0){
		foreach ($gp as $value) {
		echo "<option value=".$value->id_grupo.">".utf8_encode($value->desc_grupo)."</option>";
		}
	}else{
		echo "<option>Informe o grupo de requerimento</option>";
	}
?>