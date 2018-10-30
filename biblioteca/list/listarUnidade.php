<?php
    $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	$unidade = new Unidade();
	$unidades = $unidade->findAll();

	if($id != "")
		$id = $_REQUEST['id'];
	
	echo "<option value=''>Selecione uma unidade...</option>";

	foreach ($unidades as $value) {
		if($value->id_unidade == $id){
			$checked = "selected='selected'";
		}else{
			$checked = "";
		}
		echo "<option value=".$value->id_unidade." ".$checked." >".mb_convert_case($value->desc_unidade, MB_CASE_UPPER, $encoding)."</option>";
	}

?>
