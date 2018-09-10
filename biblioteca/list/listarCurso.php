<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	@$idTipoCurso = $_REQUEST['idTipoCurso'];

	if($id != "")
		$id = $_REQUEST['id'];
	
	$curso = new Curso();
	$cursos = $curso->findByIdFK($id);
   

	if(count($cursos) > 0){
		foreach ($cursos as $value) {
			if($value->id_curso == $idTipoCurso){
				$checked = "selected='selected'";
			}else{
				$checked = "";
			}

			echo "<option value=".$value->id_curso."  ".$checked." >".$value->nome_curso."</option>";
		}
	}else{
		echo "<option value=''>Selecione um curso...</option>";
	}
?>