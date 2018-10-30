<?php
    $encoding = 'UTF-8';

	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	@$id = $_REQUEST['id'];
	$pessoa_id = $_REQUEST['pessoa_id'];

	$aluno = new Pessoa();

	$alunos = $aluno->findAluno($id);
	if(count($alunos) > 0){
		foreach ($alunos as $value) {
			if($value->id_pessoa == $pessoa_id){
				$checked = "selected='selected'";
			}else{
				$checked = "";

			}
			echo "<option value=".$value->id_pessoa." ".$checked." >".mb_convert_case($value->nome_pessoa, MB_CASE_UPPER, $encoding)."</option>";
		}
	}else{
		echo "<option>Informe o aluno</option>";
	}
?>