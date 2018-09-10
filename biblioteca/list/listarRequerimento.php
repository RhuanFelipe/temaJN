<?php
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
			echo "<option value=".$value->id_requerimento." ".$checked.">".$value->desc_requerimento."</option>";
		}
	}else{
		echo "<option value=''>Informe um requerimento...</option>";
	}
?>