<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}

	@$tipoCurso = $_POST["tipoCurso"];
	@$curso = $_POST["curso"];
	@$unidade = $_POST["unidade"];
	@$tipoRequerimento = $_POST["tipoRequerimento"];
	@$grupoRequerimento = $_POST["grupoRequerimento"];
	@$requerimento = $_POST["requerimento"];
	@$assunto = $_POST["assunto"];
	@$usuario = $_POST["usuario"];
	
	$c = new Chamado();
	$c->setUsuario($usuario);
	$c->setAssunto($assunto);
	$c->setRequerimento($requerimento);
	$c->setTipoCurso($tipoCurso);
	$c->setCurso($curso);
	$c->setUnidade($unidade);
	$c->setTipoRequerimento($tipoRequerimento);
	$c->setGrupoRequerimento($grupoRequerimento);
	$c->insert();

?>
