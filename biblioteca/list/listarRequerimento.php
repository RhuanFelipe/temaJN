<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	$id = $_REQUEST['id'];
	$requerimento = new Requerimento();
	$requerimentos = $requerimento->findByIdFK($id);

	if(count($requerimentos) > 0){
		foreach ($requerimentos as $value) {
		echo "<option value=".$value->id_requerimento.">".utf8_encode($value->desc_requerimento)."</option>";
		}
	}else{
		echo "<option>Informe o requerimento</option>";
	}
?>