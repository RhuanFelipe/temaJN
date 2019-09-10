<?php
   $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	$id = $_REQUEST['id'];
	if($id != "")
		$id = $_REQUEST['id'];

	$tipoCurso = new TipoCurso();
	$tipo = $tipoCurso->findAll();
   echo "<option value='' >Selecione um tipo de curso...</option>";
	foreach ($tipo as $value) {
		if($value->id_tipo_curso == $id){
			$checked = "selected='selected'";
		}else{
			$checked = "";
		}
		echo "<option value=".$value->id_tipo_curso." 	".$checked." >". mb_convert_case($value->tipo_curso, MB_CASE_UPPER, $encoding)."</option>";
	}

?>
