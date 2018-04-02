<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}
	
	$unidade = new Unidade();
	$unidades = $unidade->findAll();

	foreach ($unidades as $value) {
		echo "<option value=".$value->id_unidade.">".utf8_encode($value->desc_unidade)."</option>";
	}

?>
