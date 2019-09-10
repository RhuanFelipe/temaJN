<?php
    $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}

	@$id = $_REQUEST['id'];
	
	$TipoRequerimento = new TipoRequerimento();
	$tp = $TipoRequerimento->findAll();

	if($id != "")
		$id = $_REQUEST['id'];
	echo "<option value=''>Selecione um tipo requerimento...</option>";

	foreach ($tp as $value) {
		if($value->id_requerimento == $id){
			$checked = "selected='selected'";
		}else{
			$checked = "";
		}
		echo "<option value=".$value->id_requerimento." ".$checked.">".mb_convert_case($value->opt_requerimento, MB_CASE_UPPER, $encoding)."</option>";
	}

?>
