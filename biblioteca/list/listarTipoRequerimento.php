<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	
	$TipoRequerimento = new TipoRequerimento();
	$tp = $TipoRequerimento->findAll();

	if($id != "")
		$id = $_REQUEST['id'];

	foreach ($tp as $value) {
		if($value->id_requerimento == $id){
			$checked = "selected='selected'";
		}else{
			$checked = "";
		}
		echo "<option value=".$value->id_requerimento." ".$checked.">".utf8_encode($value->opt_requerimento)."</option>";
	}

?>
