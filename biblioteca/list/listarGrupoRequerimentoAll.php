<?php
    $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	@$grupoId = $_REQUEST['grupoId'];
	var_dump($grupoId);
	$grupoRequerimento = new GrupoRequerimento();
	$gp = $grupoRequerimento->findAll();

	if(count($gp) > 0){
		foreach ($gp as $value) {
		if($value->id_grupo == $grupoId){
			$checked = "selected='selected'";
		}else{
			$checked = "";
		}

		echo "<option value=".$value->id_grupo." ".$checked." >".mb_convert_case($value->desc_grupo, MB_CASE_UPPER, $encoding)."</option>";
		}
	}else{
		echo "<option>Informe o grupo de requerimento</option>";
	}
?>