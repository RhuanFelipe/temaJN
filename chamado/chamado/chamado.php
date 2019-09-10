<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}

	@$tipoCurso = $_POST["tipoCurso"];
	@$curso = $_POST["curso"];
	@$unidade = $_POST["unidade"];
	@$tipoRequerimento = $_POST["tipoRequerimento"];
	@$grupoRequerimento = $_POST["grupoRequerimento"];
	@$requerimento = $_POST["requerimento"];
	@$assunto = strtoupper($_POST["assunto"]);
	@$usuario = $_POST["usuario"];
	@$aluno = $_POST["aluno"];
	@$id_chamado = $_POST["id_chamado"];

	$c = new Chamado();
	$c->setUsuario($usuario);
	$c->setAssunto($assunto);
	$c->setRequerimento($requerimento);
	$c->setTipoCurso($tipoCurso);
	$c->setCurso($curso);
	$c->setUnidade($unidade);
	$c->setPessoa($aluno);

	$c->setTipoRequerimento($tipoRequerimento);
	$c->setGrupoRequerimento($grupoRequerimento);

	if($id_chamado != ""){
		$c->update($id_chamado);
	}else{	
		$c->insert();
	}
?>
