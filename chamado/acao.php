<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}
	$id = $_GET["id"];
	$acao = $_GET['acao'];
	@$assunto_chamado = $_GET['assunto_chamado'];
	@$usuario = $_GET['usuario'];

	$chamado = new Chamado();
	$chamado->setAssunto($assunto_chamado);
	$chamado->setUsuario($usuario);
	if($acao == 'concluir'){
		$chamado->concluirChamado($id);
	}else if($acao == 'cancelar'){
		@$motivo = $_GET['motivo'];
	    $chamado->setMotivo($motivo);
		$chamado->fecharChamado($id);
	}else if($acao == 'encaminhar'){
		@$tipoCursoId = $_GET['tipoCurso'];
		@$cursoId = $_GET['cursoId'];

	    $chamado->setTipoCurso($tipoCursoId);
	    $chamado->setCurso($cursoId);

		$chamado->encaminharChamado($id);
	}else{
		$chamado->delete($id);
	}
?>
