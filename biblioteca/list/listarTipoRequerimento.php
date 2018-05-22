<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	
	$TipoRequerimento = new TipoRequerimento();
	$tp = $TipoRequerimento->findAll();

	foreach ($tp as $value) {
		echo "<option value=".$value->id_requerimento.">".utf8_encode($value->opt_requerimento)."</option>";
	}

?>
