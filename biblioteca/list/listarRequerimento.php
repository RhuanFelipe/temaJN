<?php
    $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	$id = $_REQUEST['id'];
	$idRequerimento = $_REQUEST['idRequerimento'];

	$requerimento = new Requerimento();
	$requerimentos = $requerimento->findByIdFK($id);

	if(count($requerimentos) > 0){
		foreach ($requerimentos as $value) {
			if($value->id_requerimento == $idRequerimento){
				$checked = "selected='selected'";
			}else{
				$checked = "";
			}
			echo "<option value=".$value->id_requerimento." ".$checked.">".mb_convert_case($value->desc_requerimento, MB_CASE_UPPER, $encoding)."</option>";
		}
	}else{
		echo "<option value=''>Informe um requerimento...</option>";
	}
?>