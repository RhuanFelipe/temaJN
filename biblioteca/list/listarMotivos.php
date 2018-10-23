<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	$motivo = new Motivo();
	$motivos = $motivo->findAll();

	if($id != "")
		$id = $_REQUEST['id'];
	
	echo "<option value=''>Selecione um motivo...</option>";

	foreach ($motivos as $value) {
		if($value->id_motivo == $id){
			$checked = "selected='selected'";
		}else{
			$checked = "";
		}
		echo "<option value=".$value->id_motivo." ".$checked." >".$value->nome_motivo."</option>";
	}

?>
