<?php
	function __autoload($class_name){
		require_once '../../classes/' . $class_name . '.php';
	}
	$id = $_REQUEST['id'];

	$aluno = new Pessoa();

	$alunos = $aluno->findAluno($id);
	if(count($alunos) > 0){
		foreach ($alunos as $value) {
		echo "<option value=".$value->id_pessoa.">".utf8_encode($value->nome_pessoa)."</option>";
		}
	}else{
		echo "<option>Informe o aluno</option>";
	}
?>