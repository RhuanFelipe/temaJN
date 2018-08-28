<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}
	$id = $_GET["id"];
	$acao = $_GET['acao'];

	$chamado = new Chamado();
	if($acao == 'concluir'){
		$chamado->concluirChamado($id);
	}else if($acao == 'cancelar'){
		$chamado->fecharChamado($id);
	}else{
		$chamado->delete($id);
	}
?>
